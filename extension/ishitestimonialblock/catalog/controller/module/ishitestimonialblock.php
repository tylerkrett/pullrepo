<?php
namespace Opencart\Catalog\Controller\Extension\ishitestimonialblock\Module;
class IshiTestimonialBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->language('extension/ishitestimonialblock/module/ishitestimonialblock');
		
		$this->load->model('tool/image');
		
		//$this->load->model('extension/ishitestimonialblock/module/ishitestimonialblock');
		

		$language_id = $this->config->get('config_language_id');
		$data['testimonials'] = array();
		$testimonials = $setting['ishitestimonial'];
		
		$data['ishi_randomnumer'] = "ishitestimonialblock-" . rand();
		$data['autoplay'] = (isset($setting['autoplay']) && $setting['autoplay'] == '1') ? 1 : 0;

		$data['column'] = $setting['column'];
		$column = $setting['column'];

		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 3){
			$data['column_class'] = 'col-lg-4 col-md-12 col-sm-12 col-xs-12';	
		}elseif($column == 4){
			$data['column_class'] = 'col-lg-3 col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 6){
			$data['column_class'] = 'col-lg-2 col-md-12 col-sm-12 col-xs-12';
		}

		$lang = $this->config->get('config_language_id');

 		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		$data['bg_color'] = $setting['bg_color'];
		
		if(!empty($testimonials)){

			foreach ($testimonials as $testimonial) {
				if (is_file(DIR_IMAGE . $testimonial['image'])) {
					$data['testimonials_array'][] = array(
						'description' => $testimonial['description'][$lang],
						'username'  => $testimonial['username'][$lang],
						'designation'  => $testimonial['designation'] [$lang],
						'image' => $this->model_tool_image->resize($testimonial['image'], $setting['width'], $setting['height'])
					);
			}
		}
		}
		
		$data['module'] = $module++;
	
		return $this->load->view('extension/ishitestimonialblock/module/ishitestimonialblock', $data);
	}
	
}
 