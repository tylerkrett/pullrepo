<?php  
namespace Opencart\Catalog\Controller\Extension\newslettersubscribe\Module;
use \Opencart\System\Helper AS Helper; 
class Newslettersubscribe extends \Opencart\System\Engine\Controller {
  	private $error = array();
	
	public function index($setting) {
	
		$this->language->load('extension/newslettersubscribe/module/newslettersubscribe');
		$this->load->model('extension/newslettersubscribe/ishithemes/newslettersubscribe');

		$data['column'] = $setting['column'];
		$column = $setting['column'];

		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-lg-6 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 3){
			$data['column_class'] = 'col-lg-4 col-md-12 col-sm-12 col-xs-12';	
		}elseif($column == 4){
			$data['column_class'] = 'col-lg-3 col-md-12 col-sm-12 col-xs-12';
		}

		$data['config_email'] = $this->config->get('config_email');
		$data['config_telephone'] = $this->config->get('config_telephone');
		
		
      	// $data['option_unsubscribe'] = $this->config->get('option_unsubscribe');
		$language_id = $this->config->get('config_language_id');

		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}

		if(isset($setting['mobile_title'][$language_id])){
			$data['mobile_title'] = $setting['mobile_title'][$language_id];
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


	   	//check db
	   	$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->check_db();

	   	// $this->id = 'newslettersubscribe';
		return $this->load->view('extension/newslettersubscribe/module/newslettersubscribe', $data);
	}
	
	public function subscribe() {
	
		$prefix_eval = "";
	  
		$this->language->load('extension/newslettersubscribe/module/newslettersubscribe');
	 
		$this->load->model('extension/newslettersubscribe/ishithemes/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
			   
			   if ($this->config->get('newslettersubscribe_registered') and $this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->UpdateRegisterUsers($this->request->post,1);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>")$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				   
				
			   } else if (!$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->checkmailid($this->request->post)) {
				 
					$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->subscribe($this->request->post);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				 
				} else {
					  echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				}
			   
			} else {
				
				echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
			}
	  
	}
}
?>