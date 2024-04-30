<?php
namespace Opencart\Catalog\Controller\Extension\ishisocialfollowblock\Module;
class IshiSocialFollow extends \Opencart\System\Engine\Controller {
	public function index(array $setting): string {
		$this->load->language('extension/ishisocialfollowblock/module/ishisocialfollow');


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
		}elseif($column == 6){
			$data['column_class'] = 'col-lg-2 col-md-12 col-sm-12 col-xs-12';
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

		return $this->load->view('extension/ishisocialfollowblock/module/ishisocialfollow', $data);
	}
}