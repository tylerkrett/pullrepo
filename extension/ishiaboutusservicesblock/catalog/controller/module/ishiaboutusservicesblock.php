<?php
namespace Opencart\Catalog\Controller\Extension\ishiaboutusservicesblock\Module;
class IshiAboutusServicesBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		
		static $module = 0;
		$this->load->model('tool/image');

		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}
		
		$column = $setting['column'];
		
		if($column == 1){
			$data['class'] = 'col-xs-12';
		}elseif($column == 2){
			$data['class'] = 'col-sm-6 col-xs-6';
		}elseif($column == 3){
			$data['class'] = 'col-lg-4 col-md-4 col-sm-12 col-xs-12';
		}elseif($column == 4){
			$data['class'] = 'col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6';
		}else{
			$data['class'] = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
		}

		$data['showtitle'] = (isset($setting['showtitle'])&& $setting['showtitle'] == 1) ? 1 : 0;

		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		
		foreach ($ishiservices as $ishiservice) {
			if(isset($ishiservice['image'])){
			$serviceiimage = $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height']);
			}else{
				$serviceiimage = '';
			}
			$data['ishiservices'][] = array(
				'image' => $serviceiimage,
				'title' => $ishiservice['title'],
				'image' => $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height']),
				'description'  => $ishiservice['description']
			);
		}
		
		return $this->load->view('extension/ishiaboutusservicesblock/module/ishiaboutusservicesblock', $data);
	}
}