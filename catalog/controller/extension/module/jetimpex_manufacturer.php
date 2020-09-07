<?php
class ControllerExtensionModuleJetimpexManufacturer extends Controller
{
	public function index($setting)
	{
		$this->load->language('extension/module/jetimpex_manufacturer');
		$this->load->model('catalog/manufacturer');
		$this->load->model('tool/image');
		
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['categories'] = array();

		$manufacturer_filter = array(
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_manufacturer->getManufacturers($manufacturer_filter);

		foreach ($results as $result) {

			if (!isset($data['categories'])) {
				$data['categories']['name'] = $result['name'];
			}
			$data['categories']['manufacturer'][] = array(
				'name' => $result['name'],
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id']),
				'image' => $result['image']
			);
		}

		return $this->load->view('extension/module/jetimpex_manufacturer', $data);
	}
}