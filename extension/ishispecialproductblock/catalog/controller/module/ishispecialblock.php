<?php
namespace Opencart\Catalog\Controller\Extension\ishispecialproductblock\Module;
class IshiSpecialBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		static $module = 0;	

		$this->load->language('extension/module/special');
		$this->load->language('product/quickview');
		$this->load->language('product/thumb');

		$this->load->model('catalog/product');
		$this->load->model('extension/ishispecialproductblock/module/ishispecialblock');

		$this->load->model('tool/image');
		
		$language_id = $this->config->get('config_language_id');
		$data['ishi_randomnumer'] = "ishispecialblock-" . rand();

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}
		
		if(isset($setting['desc'][$language_id])){
			$data['desc'] = $setting['desc'][$language_id];
		}
		$data['hover_image'] = (isset($setting['hover_image']) && $setting['hover_image'] == 1) ? $setting['hover_image'] : 0;
		
		$data['desktop_column'] = $setting['desktop_column'] ? $setting['desktop_column'] : 4;
		$data['laptop_column'] = $setting['laptop_column'] ? $setting['laptop_column'] : 3;
		$data['tablet_column'] = $setting['tablet_column'] ? $setting['tablet_column'] : 2;
		$data['mobile_column'] = $setting['mobile_column'] ? $setting['mobile_column'] : 1;
		$data['product_row'] = $setting['product_row'] ? $setting['product_row'] : 1;		
		$data['hover_image'] = (isset($setting['hover_image']) && $setting['hover_image'] == 1) ? $setting['hover_image'] : 0;

		
		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);
		$results = $this->model_extension_ishispecialproductblock_module_ishispecialblock->getSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				$extraimage = '';
				
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				$images = $this->model_extension_ishispecialproductblock_module_ishispecialblock->getImages($result['product_id']);

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
				$specialDates = $this->model_extension_ishispecialproductblock_module_ishispecialblock->getProductSpecialsDate($result['product_id']);
				
				if($specialDates['date_end'] != '0000-00-00'){
					$date_end  = $specialDates['date_end'];
				}else{
					$date_end = '';
				}		

				
				$product_data = [
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					// 'description' => Helper\Utf8\substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'date_end'    => $date_end,
					'special'     => $special,
					'stock_status'=> $stock_status,
					'extra'		  => $extraimage,
					'tax'         => $tax,
					'hover'       => $data['hover_image'],
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
				];

				$data['products'][] = $this->load->controller('extension/opencart/module/productcard', $product_data);
			}

			return $this->load->view('extension/ishispecialproductblock/module/ishispecialblock', $data);
		}
	}
}