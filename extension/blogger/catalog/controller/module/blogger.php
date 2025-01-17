<?php
namespace Opencart\Catalog\Controller\Extension\Blogger\Module;
use \Opencart\System\Helper AS Helper; 
class Blogger extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string  { 
	
		
		$this->load->language('extension/blogger/module/blogger');
		$this->load->model('extension/blogger/module/blogger');
		$this->load->model('tool/image');

		// $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/css/owl.carousel.css');
		// $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/css/owl.theme.css');
		// $this->document->addScript('catalog/view/javascript/jquery/swiper/js/owl.carousel.min.js');

		static $module = 0;		

		$data['heading'] = $this->language->get('heading');
		$language_id = $this->config->get('config_language_id');


		$data['text_read_more'] = $this->language->get('text_read_more');
		$data['text_comment'] = $this->language->get('text_comment');
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['entry_comment'] = $this->language->get('entry_comment');
		$data['entry_comment'] = $this->language->get('entry_comment');

		$data['column'] = $setting['column'];
		$column = $setting['column'];

		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-xl-8 col-md-12 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 3){
			$data['column_class'] = 'col-lg-4 col-md-12 col-sm-12 col-xs-12';	
		}elseif($column == 4){
			$data['column_class'] = 'col-lg-3 col-md-12 col-sm-12 col-xs-12';
		}

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		$data['button_all_blogs'] = $this->language->get('button_all_blogs');

		$data['all_blogs'] = $this->url->link('extension/blogger/information/blogger|blogs');

		$data['blogs'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}   

// print_r($setting['module_id'];exit;
		foreach ($this->model_extension_blogger_module_blogger->getBlogsByModule($setting['module_id'], $setting['limit']) as $result)
		{
			
			$total_comments = $this->model_extension_blogger_module_blogger->getTotalBlogComments($result['blogger_id']);
			$data['blogs'][] = array(
				'blogger_id'  => $result['blogger_id'], 
				'image' 	  => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']),
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
				'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $setting['char_limit']) . '...',
				'date_added'  => date('d', strtotime($result['date_added'])),	
				'month_added'  => date('F', strtotime($result['date_added'])),	
				'total_comments' => number_format($total_comments),
				'href'        => $this->url->link('extension/blogger/information/blogger', 'language=' . $this->config->get('config_language') . '&blogger_id=' . $result['blogger_id'])

			);
		}
		
		return $this->load->view('extension/blogger/module/blogger', $data);
	}
}