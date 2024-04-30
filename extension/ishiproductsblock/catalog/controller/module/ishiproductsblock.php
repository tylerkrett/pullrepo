<?php
namespace Opencart\Catalog\Controller\Extension\ishiproductsblock\Module;
class IshiProductsBlock extends \Opencart\System\Engine\Controller {
	public function index($setting) {

		$this->load->language('extension/ishiproductsblock/module/ishiproductsblock');
		$this->load->language('product/quickview');

		$this->load->model('catalog/product');
		$this->load->model('catalog/category');

		$this->load->model('extension/ishiproductsblock/module/ishiproductsblock');

		$this->load->model('tool/image');

		$data['products'] = array();
		
		$language_id = $this->config->get('config_language_id');
		$data['ishi_randomnumer'] = "ishiproductblock-" . rand();
		$data['tab_randomnumer'] = rand();
		// $type= $setting['type'];
		
		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		if(isset($setting['desc'][$language_id])){
			$data['desc'] = $setting['desc'][$language_id];
		}
		
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		
		$data['cart'] = $this->url->link('common/cart|info', 'language=' . $this->config->get('config_language'));

		$data['add_to_cart'] = $this->url->link('checkout/cart|add', 'language=' . $this->config->get('config_language'));
		$data['add_to_wishlist'] = $this->url->link('account/wishlist|add', 'language=' . $this->config->get('config_language'));
		$data['add_to_compare'] = $this->url->link('product/compare|add', 'language=' . $this->config->get('config_language'));
		
		$setting['showfeatured'] = (isset($setting['showfeatured']) && $setting['showfeatured'] == '1') ? 1 : 0;
		$setting['showbestseller'] = (isset($setting['showbestseller']) && $setting['showbestseller'] == '1') ? 1 : 0;
		$setting['shownew'] = (isset($setting['shownew']) && $setting['shownew'] == '1') ? 1 : 0;
		$setting['showspecial'] = (isset($setting['showspecial']) && $setting['showspecial'] == '1') ? 1 : 0;
		$setting['showcategory'] = (isset($setting['showcategory']) && $setting['showcategory'] == '1') ? 1 : 0;

		$data['desktop_column'] = $setting['desktop_column'] ? $setting['desktop_column'] : 4;
		$data['laptop_column'] = $setting['laptop_column'] ? $setting['laptop_column'] : 3;
		$data['tablet_column'] = $setting['tablet_column'] ? $setting['tablet_column'] : 2;
		$data['mobile_column'] = $setting['mobile_column'] ? $setting['mobile_column'] : 1;
		$data['product_row'] = $setting['product_row'] ? $setting['product_row'] : 1;		
		$data['hover_image'] =  (isset($setting['hover_image']) && $setting['hover_image'] == '1') ? $setting['hover_image'] : 0;
	
		//FEATURED
		if (!empty($setting['product']) && isset($setting['showfeatured']) && $setting['showfeatured'] == 1) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProduct($product_id);
				$extraimage = '';

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$images = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getImages($product_id);

					if(!empty($images) && isset($images[0]['image'])){
					 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}
					// echo "<pre>"; print_r($product_info); exit;
					$stock_status = ($product_info['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
					
					$specialDates = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProductSpecialsDate($product_info['product_id']);
				
					if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
						$date_end  = $specialDates['date_end'];
					}else{
						$date_end = '';
					}		
					
					$data['featured'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => $image,
						'extra'		  => $extraimage,
						'stock_status'=> $stock_status,
						'name'        => $product_info['name'],
						'price'       => $price,
						'special'     => $special,
						'date_end'    => $date_end,
						'hover'       => $data['hover_image'],
						'tax'         => $tax,
						'rating'      => $rating,
						'minimum'     => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
						'quick'        => $this->url->link('product/quick_view','&product_id=' . $product_info['product_id']),
						'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product_info['product_id'])
					);
					
					
					// $data['products'][] = $this->load->controller('extension/ishiproductsblock/module/productcard', $featured);
				}
			}
		}

		//BESTSELLER
		if (isset($setting['showbestseller']) && $setting['showbestseller'] == 1) {
			$results = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getBestSeller($setting['limit']);
			if ($results) {
				foreach ($results as $result) {
					$extraimage = '';

					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$images = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getImages($result['product_id']);

					if(!empty($images) && isset($images[0]['image'])){
					 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}

					$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
					
					$specialDates = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProductSpecialsDate($result['product_id']);
				
					if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
						$date_end  = $specialDates['date_end'];
					}else{
						$date_end = '';
					}
					
					$data['bestseller'][] = array(
						'product_id'  => $result['product_id'],
						'thumb'       => $image,
						'extra'       => $extraimage,
						'stock_status'       => $stock_status,
						'name'        => $result['name'],
						'date_end'    => $date_end,
						'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
						'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
						'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
					);
				}
			}
		}
		
		//NEW
		if (isset($setting['shownew']) && $setting['shownew'] == 1) {
			$filter_data = array(
				'sort'  => 'p.date_added',
				'order' => 'DESC',
				'start' => 0,
				'limit' => $setting['limit']
			);

			$results = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProducts($filter_data);

			if ($results) {
				foreach ($results as $result) {
					$extraimage = '';

					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$images = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getImages($result['product_id']);

					if(!empty($images) && isset($images[0]['image'])){
					 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}
					
					$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
					
					$specialDates = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProductSpecialsDate($result['product_id']);
				
					if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
						$date_end  = $specialDates['date_end'];
					}else{
						$date_end = '';
					}		

					$data['new'][] = array(
						'product_id'  => $result['product_id'],
						'thumb'       => $image,
						'extra'       => $extraimage,
						'stock_status'=> $stock_status,
						'date_end'    => $date_end,
						'name'        => $result['name'],
						'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
						'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
						'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
					);
				}
			}
		}

		//SPECIAL
		if (isset($setting['showspecial']) && $setting['showspecial'] == 1) {
			$filter_data = array(
				'sort'  => 'pd.name',
				'order' => 'ASC',
				'start' => 0,
				'limit' => $setting['limit']
			);

			$results = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getSpecials($filter_data);

			if ($results) {
				foreach ($results as $result) {
					$extraimage = '';
					
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$images = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getImages($result['product_id']);

					if(!empty($images) && isset($images[0]['image'])){
					 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}

					$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
					
					$specialDates = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProductSpecialsDate($result['product_id']);
				
					if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
						$date_end  = $specialDates['date_end'];
					}else{
						$date_end = '';
					}
					
					$data['special'][] = array(
						'product_id'  => $result['product_id'],
						'thumb'       => $image,
						'extra'       => $extraimage,
						'stock_status'       => $stock_status,
						'name'        => $result['name'],
						'date_end'    => $date_end,
						'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
						'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
						'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
					);
				}
			}
		}
		
		// CATEGORY PRODUCT
		
		if (isset($setting['showcategory']) && $setting['showcategory'] == 1) {
		if (isset($setting['product_category']) && $setting['showcategory'] != '') {
			
			foreach ($setting['product_category'] as $category_id) {
				$category_info = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getCategory($category_id);
				if ($category_info) {
					$data['product_categories'][] = array(
						'category_id' => $category_info['category_id'],
						'name'        => $category_info['name']
					);
				}
			$filter_data = array(
				'sort'  => 'p.date_added',
				'filter_category_id'  => $category_id,
				'order' => 'DESC',
				'start' => 0,
				'limit' => $setting['limit']
			);

			$results = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getCategorySubcategoryProducts($filter_data);
			if ($results) {
				foreach ($results as $result) {
					$extraimage = '';

					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$images = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getImages($result['product_id']);

					if(!empty($images) && isset($images[0]['image'])){
					 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}

					$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
					$specialDates = $this->model_extension_ishiproductsblock_module_ishiproductsblock->getProductSpecialsDate($result['product_id']);
				
					if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
						$date_end  = $specialDates['date_end'];
					}else{
						$date_end = '';
					}	
					
					$data['category'][$category_id][] = array(
						'product_id'  => $result['product_id'],
						'thumb'       => $image,
						'extra'       => $extraimage,
						'date_end'    => $date_end,
						'$stock_status'       => $stock_status,
						'name'        => $result['name'],
						'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
						'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
						'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
					);
				}
		}
		}
		}
		}

		if (!empty($data['featured']) || !empty($data['bestseller']) || !empty($data['new']) || !empty($data['special']) || !empty($data['category'])) {
			// if($type == 'type2'){
			// 	return $this->load->view('extension/ishiproductsblock/module/ishiproductsblock_grid', $data);
			// }else{
				return $this->load->view('extension/ishiproductsblock/module/ishiproductsblock', $data);	
			}
		}
	}
// }