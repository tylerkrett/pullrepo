<?php
namespace Opencart\Catalog\Controller\Extension\ishifaqblock\Module;
class IshiFaqBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->language('extension/ishifaqblock/module/ishifaqblock');
		
		$this->load->model('tool/image');
		
		//$this->load->model('extension/ishifaqblock/module/ishifaqblock');
		

		$language_id = $this->config->get('config_language_id');
		$data['faqs'] = array();
		$faqs = $setting['ishifaq'];
		
		$data['ishi_randomnumer'] = "ishifaqblock-" . rand();
		
		
		$lang = $this->config->get('config_language_id');
		
		
		if(!empty($faqs)){

			foreach ($faqs as $faq) {
				
					$data['faqs_array'][] = array(
						// 'description' => $faq['description'][$lang],
						'description' => html_entity_decode($faq['description'][$lang], ENT_QUOTES, 'UTF-8'),
						'title'  => $faq['title'][$lang]
						
					);
			}
		}
		
		$data['module'] = $module++;
	
		return $this->load->view('extension/ishifaqblock/module/ishifaqblock', $data);
	}
	
}
 