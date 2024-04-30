<?php
namespace Opencart\Catalog\Controller\Extension\ishicontactinfoblock\Module;
class IshiContactInfoBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->model('catalog/information');
		$this->load->language('extension/ishicontactinfoblock/module/ishicontactinfoblock');
		$this->load->model('tool/image');

		$data['ishi_randomnumer'] = "ishicontactinfoblock" . rand();
		$language_id = $this->config->get('config_language_id');

		$data['column'] = $setting['column'];
		$column = $setting['column'];

		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		
		$data['informations'] = [];

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = [
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'language=' . $this->config->get('config_language') . '&information_id=' . $result['information_id'])
				];
			}
		}

		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-lg-6 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 3){
			$data['column_class'] = 'col-lg-4 col-md-12 col-sm-12 col-xs-12';	
		}elseif($column == 4){
			$data['column_class'] = 'col-lg-3 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 6){
			$data['column_class'] = 'col-lg-2 col-md-12 col-sm-12 col-xs-12';
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_image'))) {
			$data['footerlogo'] = $server . 'image/' . $this->config->get('config_image');
		} else {
			$data['footerlogo'] = '';
		}


		$data['config_comment'] = $this->config->get('config_comment');
		$data['config_address'] = $this->config->get('config_address');
		$data['config_email'] = $this->config->get('config_email');
		$data['config_telephone'] = $this->config->get('config_telephone');

		$data['module'] = $module++;		
	
		return $this->load->view('extension/ishicontactinfoblock/module/ishicontactinfoblock', $data);
	}
	
}
