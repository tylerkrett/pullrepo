<?php
namespace Opencart\Catalog\Controller\Extension\ishibannerblock\Module;
class IshiBannerBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->language('extension/ishibannerblock/module/ishibannerblock');
		
		$this->load->model('tool/image');
		
		//$this->load->model('extension/ishibannerblock/module/ishibannerblock');
		

		$language_id = $this->config->get('config_language_id');
		$data['banners'] = array();
		$banners = $setting['ishibanner'];
		
		$data['ishi_randomnumer'] = "ishibannerblock-" . rand();
		
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}

		$data['style'] = $setting['style'];
		$data['scale'] = (isset($setting['scale']) && $setting['scale'] == 1) ? 'scale' : '';
		$data['column'] = $setting['column'];
		$column = $setting['column'];

		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-md-6 col-sm-12 col-xs-6';
		}elseif($column == 3){
			$data['column_class'] = 'col-md-4 col-sm-12 col-xs-12';
		}elseif($column == 4){
			$data['column_class'] = 'col-md-3 col-sm-12 col-xs-12';
		}
		
		$lang = $this->config->get('config_language_id');
		
		if(!empty($banners)){
			$bannercount = count($banners);
			if($bannercount == 1){
				$data['bannerclass'] = 'one_bannerblock';
			}elseif($bannercount == 2){
				$data['bannerclass'] = 'two_bannerblock';
			}elseif($bannercount == 3){
				$data['bannerclass'] = 'three_bannerblock';
			}elseif($bannercount == 4){
				$data['bannerclass'] = 'four_bannerblock';
			}else {
				$data['bannerclass'] = 'gallery_block';
			}

			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {

					$showtext = (isset($banner['showtext']) && $banner['showtext'] == 1) ? '1' : '0';
					$titlecolor = isset($banner['titlecolor']) ? $banner['titlecolor']: '';
					$subtitlecolor = isset($banner['subtitlecolor']) ? $banner['subtitlecolor']: '';
					
					$data['banner_array'][] = array(
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height']),
						'showtext' => $showtext,
						'title' => $banner['title'][$lang],
						'subtitle' => $banner['subtitle'][$lang],
						'titlecolor' => $titlecolor,
						'subtitlecolor' => $subtitlecolor,
						'button_name' => $banner['button_name'][$lang],
						'alignment' => $banner['alignment'],
						'position' => $banner['position'],
						'link'  => $banner['link']. '&language=' . $this->config->get('config_language')
					);
				}
			}
		}
		$data['module'] = $module++;
	
		return $this->load->view('extension/ishibannerblock/module/ishibannerblock', $data);
	}
	
}
 