<?php
namespace Opencart\Catalog\Controller\Extension\ishislider\Module;
class IshiSlider extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		
		static $module = 0;
		$this->load->model('tool/image');

		$language_id = $this->config->get('config_language_id');
		$ishisliders = array();
		$data['ishi_randomnumer'] = "ishislider-" . rand();
		
		$data['autoplay'] = (isset($setting['autoplay']) && $setting['autoplay'] == '1') ? 'true' : 'false';
		
		$data['navigation'] = (isset($setting['navigation']) && $setting['navigation'] == '1') ? 'true' : 'false';
		$data['navigation_style'] = $setting['navigation_style'];
		$data['dot'] = (isset($setting['dot']) && $setting['dot'] == '1') ? 'true' : 'false';
		$data['dot_style'] = $setting['dot_style'];

		if(isset($setting['slider'][$language_id])){
			$ishisliders = $setting['slider'][$language_id];
		}

		foreach ($ishisliders as $ishislider) {
			if(isset($ishislider['image'])){
			$slideriimage = $this->model_tool_image->resize($ishislider['image'], $setting['width'], $setting['height']);
			}
			if(isset($ishislider['imagehover'])){
			$slideriimage = $this->model_tool_image->resize($ishislider['imagehover'], $setting['mobilewidth'], $setting['mobileheight']);
			}
			else{
				$slideriimage = '';
			}
			$data['ishisliders'][] = array(
				'image' => $slideriimage,
				'title' => $ishislider['title'],
				'titlecolor' => $ishislider['titlecolor'],
				'titlebgcolor' => $ishislider['titlebgcolor'],
				'subtitle' => $ishislider['subtitle'],
				'subtitlecolor' => $ishislider['subtitlecolor'],
				'desc'  => $ishislider['desc'],
				'desccolor'  => $ishislider['desccolor'],
				'textalignment' => $ishislider['textalignment'],
				'textposition' => $ishislider['textposition'],
				'mobiletextalignment' => $ishislider['mobiletextalignment'],
				'mobiletextposition' => $ishislider['mobiletextposition'],
				'btntext'  => $ishislider['btntext'],
				'link'  => $ishislider['link'],
				'image' => $this->model_tool_image->resize($ishislider['image'], $setting['width'], $setting['height']),
				'imagehover' => $this->model_tool_image->resize($ishislider['imagehover'], $setting['mobilewidth'], $setting['mobileheight']),
			);
		}
		
		return $this->load->view('extension/ishislider/module/ishislider', $data);
	}
}