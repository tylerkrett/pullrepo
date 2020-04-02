<?php

class ControllerExtensionModuleJetimpexManufacturers extends Controller {
	public function index() {

		static $module = 0;

		$this->load->language('product/manufacturer');
		
		$data['brands'] = array();
		
		$this->load->model('catalog/manufacturer');
		
		$results = $this->model_catalog_manufacturer->getManufacturers();
		
		$this->load->model('tool/image');



		
		foreach ($results as $result) {

			if (is_numeric(utf8_substr($result['name'], 0, 1))) {
				$key = '0 - 9';
			} else {
				$key = utf8_substr(utf8_strtoupper($result['name']), 0, 1);
			}

			if (!isset($data['brands'][$key])) {
				$data['brands'][$key]['name'] = $key;
			}
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image_info = getimagesize(DIR_IMAGE . $result['image']);
			} else {
				$image_info = [
				0 => 100,
				1 => 100
				];
			}

			$data['brands'][$key]['manufacturer'][] = array(
				'name'  => $result['name'],
				'image'  => $this->model_tool_image->resize($result['image'], $image_info[0], $image_info[1]),
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
			);

		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/jetimpex_manufacturers', $data);
	}
	
}
