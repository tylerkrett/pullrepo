<?php
class ControllerExtensionModuleJetimpexCategory extends Controller {
	public function index($setting) {

		static $module = 0;
		
		$this->load->language('extension/module/jetimpex_category');

		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('catalog/category');
		$this->load->model('tool/image');
		$data['title'] = $setting['title'];

		$categories = array_slice($this->model_catalog_category->getCategories(0), 0, $setting['limit']);
		foreach ($categories as $category) {
			if ($category['top']) {

				$children_data = [];
				$children      = array_slice($this->model_catalog_category->getCategories($category['category_id']), 0, $setting['sub_limit']);

				foreach ($children as $child) {

					$children_data[] = [
						'name'  => $child['name'],
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					];
				}

				$data['categories'][] = [
					'name'     => $category['name'],
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id']),
					'image'    => $this->model_tool_image->resize($category['image'], $setting['width'], $setting['height']),
					'children' => $children_data
				];
			}
		}

		return $this->load->view('extension/module/jetimpex_category', $data);
	}
	
}