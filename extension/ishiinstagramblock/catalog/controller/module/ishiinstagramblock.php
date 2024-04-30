<?php
namespace Opencart\Catalog\Controller\Extension\ishiinstagramblock\Module;
class IshiInstagramBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->model('catalog/information');
		$this->load->language('extension/ishiinstagramblock/module/ishiinstagramblock');
		$this->load->model('tool/image');

		$language_id = $this->config->get('config_language_id');
		$data['ishi_randomnumer'] = "ishiinstagramblock" . rand();

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		if(isset($setting['username'][$language_id])){
			$data['username'] = $setting['username'][$language_id];
		}
		
		$data['userid'] = $setting['userid'];
		$data['accesstoken'] = $setting['accesstoken'];
		$data['sortby'] = $setting['sortby'];


		$data['module'] = $module++;		
	
		return $this->load->view('extension/ishiinstagramblock/module/ishiinstagramblock', $data);
	}
	
}
