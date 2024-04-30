<?php
namespace Opencart\Catalog\Controller\Extension\ishipaymentblock\Module;
class IshiPaymentBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {

		static $module = 0;		

		$language_id = $this->config->get('config_language_id');
		$banners = array();
		$data['ishi_randomnumer'] = "ishipayment-" . rand();
		$this->load->model('tool/image');
		
		// $banners = $setting['ishibanner'][$language_id];

		if(isset($setting['ishibanner'][$language_id])){
			$banners = $setting['ishibanner'][$language_id];
		}

		if(!empty($banners)){
			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$data['banners'][] = array(
						'title' => $banner['title'],
						'link'  => $banner['link'],
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/ishipaymentblock/module/ishipaymentblock', $data);
	}
}