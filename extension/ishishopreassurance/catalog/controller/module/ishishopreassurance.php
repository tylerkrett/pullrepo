<?php
namespace Opencart\Catalog\Controller\Extension\ishishopreassurance\Module;
class IshishopReassurance extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		
		static $module = 0;
		$this->load->model('tool/image');

		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}

		$data['ishi_randomnumer'] = "ishicartservice-" . rand();
		
		$data['btnlinks'] = array(
			'btnlink' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'), '', true)
		);
		foreach ($ishiservices as $ishiservice) {
			if(isset($ishiservice['image'])){
			$serviceiimage = $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height']);
			}else{
				$serviceiimage = '';
			}
			$data['ishiservices'][] = array(
				'image' => $serviceiimage,
				'title' => $ishiservice['title'],
				'desc' => $ishiservice['desc'],
				'image' => $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height'])
			);
		}
		
		return $this->load->view('extension/ishishopreassurance/module/ishishopreassurance', $data);
	}
}