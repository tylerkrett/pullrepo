<?php
namespace Opencart\Catalog\Controller\Extension\ishifooterlinkblock\Module;
class IshiFooterLinkBlock extends \Opencart\System\Engine\Controller {

	public function index(array $setting): string {
		static $module = 0;		

		$this->load->model('catalog/information');
		$this->load->language('extension/ishifooterlinkblock/module/ishifooterlinkblock');
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		$banners = array();

		$data['ishi_randomnumer'] = "ishifooterlinkblock" . rand();

		$data['showtitle'] = (isset($setting['showtitle'])&& $setting['showtitle'] == 1) ? 1 : 0;

		if(isset($setting['footerlinktitle'][$language_id])){
			$data['footerlinktitle'] = $setting['footerlinktitle'][$language_id];
		}

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

		if (isset($setting['showextra']) && $setting['showextra'] == 1) {
			if(isset($setting['ishiextra'][$language_id])){
				$extras = $setting['ishiextra'][$language_id];
			}

			if(!empty($extras)){
				foreach ($extras as $extra) {
					$data['extras'][] = array(
						'linkname' => $extra['linkname'],
						'link'  => $extra['link']
					);
				}
			}
		}

	
		if (isset($setting['showaccount']) && $setting['showaccount'] == 1) {
			$data['account'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['special'] = $this->url->link('product/special', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['newsletter'] = $this->url->link('account/newsletter', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			$data['contact'] = $this->url->link('information/contact', 'language=' . $this->config->get('config_language'));
			$data['return'] = $this->url->link('account/returns|add', 'language=' . $this->config->get('config_language'));
			$data['sitemap'] = $this->url->link('information/sitemap', 'language=' . $this->config->get('config_language'));
			$data['manufacturer'] = $this->url->link('product/manufacturer', 'language=' . $this->config->get('config_language'));
			$data['voucher'] = $this->url->link('checkout/voucher', 'language=' . $this->config->get('config_language'));
			if ($this->config->get('config_affiliate_status')) {
				$data['affiliate'] = $this->url->link('account/affiliate', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
			} else {
				$data['affiliate'] = '';
			}
		}

		if (isset($setting['showinformation']) && $setting['showinformation'] == 1) {
			$data['informations'] = [];
			foreach ($this->model_catalog_information->getInformations() as $result) {

				if ($result['bottom']) {
					$data['informations'][] = [
						'title' => $result['title'],
						'href'  => $this->url->link('information/information', 'language=' . $this->config->get('config_language') . '&information_id=' . $result['information_id'])
					];
				}
			}
		}

		$data['module'] = $module++;		

		return $this->load->view('extension/ishifooterlinkblock/module/ishifooterlinkblock', $data);
	}
	
}
