<?php
namespace Opencart\Catalog\Controller\Extension\ishiparallaxblock\Module;
class IshiParallaxBlock extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->load->language('extension/ishiparallaxblock/module/ishiparallaxblock');
		
		$langauage=$this->config->get('config_language_id');

		$language_id = $this->config->get('config_language_id');

		$data['deal'] = 0;
        if(strtotime($setting['startdate']. " 00:00:00") < time() && strtotime($setting['enddate']. " 00:00:00") > time()) {
            $data['deal'] = 1;
            $data['enddate'] = $setting['enddate']." 00:00:00";
        }

		$data['bg_color'] = $setting['bg_color'];
		$data['parallax'] = (isset($setting['parallax']) && $setting['parallax'] == 1) ? 'parallax' : '';
		
		$data['aboutus'] = (isset($setting['aboutus']) && $setting['aboutus'] == 1) ? 'aboutus' : '';
		$data['ishi_randomnumer'] = "ishiparallaxblock-" . rand();


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
		return $this->load->view('extension/ishiparallaxblock/module/ishiparallaxblock', $data);
	}
}	