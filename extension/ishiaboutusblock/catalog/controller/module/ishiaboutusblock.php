<?php
namespace Opencart\Catalog\Controller\Extension\ishiaboutusblock\Module;
class IshiAboutusBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->load->language('extension/ishiaboutusblock/module/ishiaboutusblock');
		
		$langauage=$this->config->get('config_language_id');

		$language_id = $this->config->get('config_language_id');

		
		$data['aboutus'] = (isset($setting['aboutus']) && $setting['aboutus'] == 1) ? 'aboutus' : '';
		$data['style1'] = $setting['style1'];
		$data['ishi_randomnumer'] = "ishiaboutusblock-" . rand();

		if(isset($setting['btnname'][$language_id])){
			$data['btnname'] = $setting['btnname'][$language_id];
		}

		if(isset($setting['btnlink'][$language_id])){
			$data['btnlink'] = $setting['btnlink'][$language_id];
		}

		if(isset($setting['position'])) {
			$data['position'] = $setting['position'];
		}

		if(!empty($setting['image'])) {
			if ($this->request->server['HTTPS']) {
				$data['image'] = $this->config->get('config_ssl') . 'image/' . $setting['image'];
			} else {
				$data['image'] = $this->config->get('config_url') . 'image/' . $setting['image'];
			}
 		}
		
		if (isset($setting['module_description'])) {

			$data['html'] = html_entity_decode($setting['module_description'][$langauage]['description'], ENT_QUOTES, 'UTF-8');

		}
		return $this->load->view('extension/ishiaboutusblock/module/ishiaboutusblock', $data);
	}
}	