<?php
namespace Opencart\Catalog\Controller\Extension\ishimaplinkblock\Module;
class IshiMaplinkBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {

		static $module = 0;		

		$language_id = $this->config->get('config_language_id');
		$banners = array();
		$data['ishi_randomnumer'] = "ishimaplink-" . rand();
		$data['width'] = $setting['width'];
		$data['height'] = $setting['height'];
		$data['link'] = $setting['link'];

		// $banners = $setting['ishibanner'][$language_id];

		if(isset($setting['ishibanner'][$language_id])){
			$banners = $setting['ishibanner'][$language_id];
		}
		$data['module'] = $module++;

		return $this->load->view('extension/ishimaplinkblock/module/ishimaplinkblock', $data);
	}
}