<?php  
namespace Opencart\Catalog\Controller\Extension\newslettersubscribepopup\Module;
use \Opencart\System\Helper AS Helper; 
class NewslettersubscribePopup extends \Opencart\System\Engine\Controller {
  	private $error = array();
	
	public function index($setting) {
	
		$this->language->load('extension/newslettersubscribepopup/module/newslettersubscribepopup');
		$this->load->model('extension/newslettersubscribepopup/ishithemes/newslettersubscribepopup');
		
		
      	// $data['option_unsubscribe'] = $this->config->get('option_unsubscribe');
		$language_id = $this->config->get('config_language_id');

		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}

		if(isset($setting['desc'][$language_id])){
			$data['desc'] = $setting['desc'][$language_id];
		}

		if(!empty($setting['newsletter_banner'])) {
			if ($this->request->server['HTTPS']) {
				$data['newsletter_banner'] = $this->config->get('config_ssl') . 'image/' . $setting['newsletter_banner'];
			} else {
				$data['newsletter_banner'] = $this->config->get('config_url') . 'image/' . $setting['newsletter_banner'];
			}
 		}

 		if ($setting['facebook']) {
			$data['facebook'] = $setting['facebook'];
		}
		if ($setting['twitter']) {
			$data['twitter'] = $setting['twitter'];
		}
		if ($setting['youtube']) {
			$data['youtube'] = $setting['youtube'];
		}
		if ($setting['gplus']) {
			$data['gplus'] = $setting['gplus'];
		}
		if ($setting['rss']) {
			$data['rss'] = $setting['rss'];
		}
		if ($setting['pinterest']) {
			$data['pinterest'] = $setting['pinterest'];
		}
		if ($setting['vimeo']) {
			$data['vimeo'] = $setting['vimeo'];
		}
		if ($setting['instagram']) {
			$data['instagram'] = $setting['instagram'];
		}


 		$data['bg_color'] = $setting['bg_color'];

	   	//check db
	   	$this->model_extension_newslettersubscribepopup_ishithemes_newslettersubscribepopup->check_db();

	   	// $this->id = 'newslettersubscribepopup';
		return $this->load->view('extension/newslettersubscribepopup/module/newslettersubscribepopup', $data);
	}
	
	public function subscribe() {
	
		$prefix_eval = "";
	  
		$this->language->load('extension/newslettersubscribepopup/module/newslettersubscribepopup');
	 
		$this->load->model('extension/newslettersubscribepopup/ishithemes/newslettersubscribepopup');
	  
		if (isset($this->request->post['subscribepop_email']) and filter_var($this->request->post['subscribepop_email'],FILTER_VALIDATE_EMAIL)) {
			   
			   if ($this->config->get('newslettersubscribepopup_registered') and $this->model_extension_newslettersubscribepopup_ishithemes_newslettersubscribepopup->checkRegisteredUser($this->request->post)) {
				   
					$this->model_extension_newslettersubscribepopup_ishithemes_newslettersubscribepopup->UpdateRegisterUsers($this->request->post,1);
					
					echo('$("'.$prefix_eval.' #notification-normalpopup").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>")$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				   
				
			   } else if (!$this->model_extension_newslettersubscribepopup_ishithemes_newslettersubscribepopup->checkmailid($this->request->post)) {
				 
					$this->model_extension_newslettersubscribepopup_ishithemes_newslettersubscribepopup->subscribe($this->request->post);
					
					echo('$("'.$prefix_eval.' #notification-normalpopup").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				 
				} else {
					  echo('$("'.$prefix_eval.' #notification-normalpopup").html("<div class=\"alert alert-danger\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				}
			   
			} else {
				
				echo('$("'.$prefix_eval.' #notification-normalpopup").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
			}
	  
	}
}
?>