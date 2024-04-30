<?php
namespace Opencart\Catalog\Controller\Extension\ishimanufacture\Module;
class IshiManufacturerBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		static $module = 0;		

		$this->load->model('catalog/manufacturer');
		$this->load->model('tool/image');

		$data['ishi_randomnumer'] = "ishimanufacturer-" . rand();

		$data['autoplay'] = (isset($setting['autoplay']) && $setting['autoplay'])? 'true' : 'false';
		$data['loop'] = (isset($setting['loop']) && $setting['loop'])? 'true' : 'false';

	   $manufacturers = $this->model_catalog_manufacturer->getManufacturers();

	

		foreach ($manufacturers as $manufacturer) {
			// $link = $this->url->link('product/manufacturer|info&manufacturer_id='.$manufacturer['manufacturer_id'] .'');
			$link = $this->url->link('product/manufacturer|info&manufacturer_id=', 'language=' . $this->config->get('config_language') . '&manufacturer_id=' .$manufacturer['manufacturer_id'] .'');

			if (file_exists(DIR_IMAGE . $manufacturer['image'])) {
				$data['manufacturers'][] = array(
				'title' => $manufacturer['name'],
				'link' => $link,
				'image' => $this->model_tool_image->resize($manufacturer['image'], $setting['width'], $setting['height'])
				);
			}
		}
		
		$data['module'] = $module++;		
	
		return $this->load->view('extension/ishimanufacture/module/ishimanufacturerblock', $data);
	}
}