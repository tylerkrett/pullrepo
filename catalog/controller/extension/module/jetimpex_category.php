				<?php
				class ControllerExtensionModuleJetimpexCategory extends Controller {
				public function index($setting) {
				
				static $module = 0;
				
				$this->load->language('extension/module/jetimpex_category');
				
				$data['heading_title'] = $this->language->get('heading_title');
				
				$this->load->model('catalog/category');
				$this->load->model('tool/image');
				
				$data['title'] = $setting['title'];
				
				$category      = 0;
				$categories    = [];		
				$subcategories = [];
				
				if ($setting['category'] && $setting['limit']) {
				$category               = $this->model_catalog_category->getCategory($setting['category']);
				$data['category_name']  = $category['name'];
				$data['category_link']  = $this->url->link('product/category', 'path=' . $category['category_id']);
				$data['category_image'] = $this->model_tool_image->resize($category['image'], $setting['width'], $setting['height']);
				$categories             = array_slice($this->model_catalog_category->getCategories($setting['category']), 0, $setting['limit']);
				}
				
				if ($categories) {
				
				foreach ($categories as $cat) {
				
				$subcat = $this->model_catalog_category->getCategory($cat['category_id']);
				
				$data['subcategories'][$subcat['category_id']]['name']  = $subcat['name'];
				$data['subcategories'][$subcat['category_id']]['link']  = $this->url->link('product/category', 'path=' . $subcat['category_id']);
				$data['subcategories'][$subcat['category_id']]['image'] = $this->model_tool_image->resize($subcat['image'], $setting['sub_width'], $setting['sub_height']);
				
				}
				}
				return $this->load->view('extension/module/jetimpex_category', $data);
				}
				
				}