<?php
namespace Opencart\Catalog\Controller\Common;
class Header extends \Opencart\System\Engine\Controller {
	public function index(): string {
		// Analytics
		$data['analytics'] = [];

		if (!$this->config->get('config_cookie_id') || (isset($this->request->cookie['policy']) && $this->request->cookie['policy'])) {
			$this->load->model('setting/extension');

			$analytics = $this->model_setting_extension->getExtensionsByType('analytics');

			foreach ($analytics as $analytic) {
				if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
					$data['analytics'][] = $this->load->controller('extension/' . $analytic['extension'] . '/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
				}
			}
		}

		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		// $data['lang'] = $this->language->get('code');

		$data['config_email'] = $this->config->get('config_email');
		$data['title'] = $this->document->getTitle();
		$data['base'] = $this->config->get('config_url');
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();

		// Hard coding css so they can be replaced via the event's system.
		$data['bootstrap'] = 'catalog/view/stylesheet/bootstrap.css';
		$data['bootstrapmin'] = 'catalog/view/stylesheet/bootstrap.css';
		$data['icons'] = 'catalog/view/stylesheet/fonts/fontawesome/css/all.min.css';
		$data['owlcss'] = 'catalog/view/stylesheet/owl.carousel.min.css';
		$data['stylesheet'] = 'catalog/view/stylesheet/stylesheet.css';
		$data['rtl'] = 'catalog/view/stylesheet/rtl.css';
		$data['temporaryvariables'] = 'catalog/view/stylesheet/temporaryvariables.css';
		$data['basecss'] = 'catalog/view/stylesheet/base.css';

		// Hard coding scripts so they can be replaced via the event's system.
		$data['jquery'] = 'catalog/view/javascript/jquery/jquery.min.js';

		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishome'] = 'home';
		} else {
			$data['ishome'] = 'other';
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$data['config_icon'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_icon');
		} else {
			$data['config_icon'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['customer_firstname'] = html_entity_decode($this->customer->getFirstName(), ENT_QUOTES, 'UTF-8');

		$data['home'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));
		$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		
		$data['logged'] = $this->customer->isLogged();

		if (!$this->customer->isLogged()) {
			$data['register'] = $this->url->link('account/register', 'language=' . $this->config->get('config_language'));
			$data['login'] = $this->url->link('account/login', 'language=' . $this->config->get('config_language'));
		} else {
			$data['account'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['transaction'] = $this->url->link('account/transaction', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['download'] = $this->url->link('account/download', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			$data['logout'] = $this->url->link('account/logout', 'language=' . $this->config->get('config_language'));
		}

		$data['shopping_cart'] = $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'));
		$data['checkout'] = $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'));
		$data['contact'] = $this->url->link('information/contact', 'language=' . $this->config->get('config_language'));
		$data['telephone'] = $this->config->get('config_telephone');
		$data['config_telephone'] = $this->config->get('config_telephone');

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');
		$data['header_before'] = $this->load->controller('common/header_before');
		$data['header_after'] = $this->load->controller('common/header_after');
		$data['cart_service'] = $this->load->controller('common/cart_service');
		$data['footer_before'] = $this->load->controller('common/footer_before');
		$data['footer_middle'] = $this->load->controller('common/footer_middle');
		$data['footer_after'] = $this->load->controller('common/footer_after');
		$data['popup'] = $this->load->controller('common/popup');
		
		$this->regenerate();

		return $this->load->view('common/header', $data);
	}

	public function regenerate(){
		
		$this->load->model('setting/extension');
		$themeoption_info = $this->model_setting_extension->getThemeOption();
		
		
		
		$variableFile = DIR_APPLICATION . '/view/stylesheet/temporaryvariables.css';
		
		$vFile = fopen($variableFile, "w") or die("Unable to open file!");
		fwrite($vFile, $this->generateVariablesForCSS($themeoption_info));
		fclose($vFile);
		
		$this->model_setting_extension->changeDevMode();
	}

	public function generateVariablesForCSS($themeoption_info) {

		$breadcrumb_image = '';
		if(!empty($themeoption_info['breadcrumb_image'])) {
				$breadcrumb_image = '../../../image/' . $themeoption_info['breadcrumb_image'];
		}

		$footer_bgimage = '';
		if(!empty($themeoption_info['footer_bgimage'])) {
				$footer_bgimage = '../../../image/' . $themeoption_info['footer_bgimage'];
		}

		$vars = ':root{'.PHP_EOL;
		$vars .= '--brand-theme:'. $themeoption_info['themecolor'] .';'.PHP_EOL;
		$vars .= '--breadcrumb_image:url("'. $breadcrumb_image .'");'.PHP_EOL;
		$vars .= '--breadcrumb_color:'. $themeoption_info['breadcrumb_color'] .';'.PHP_EOL;
		$vars .= '--headernav_bgcolor:'. $themeoption_info['headernav_bgcolor'] .';'.PHP_EOL;
		$vars .= '--headernav_textcolor:'. $themeoption_info['headernav_textcolor'] .';'.PHP_EOL;
		$vars .= '--header_bgcolor:'. $themeoption_info['header_bgcolor'] .';'.PHP_EOL;
		$vars .= '--header_textcolor:'. $themeoption_info['header_textcolor'] .';'.PHP_EOL;
		$vars .= '--header_text_hovercolor:'. $themeoption_info['header_text_hovercolor'] .';'.PHP_EOL;
		$vars .= '--btn_bgcolor:'. $themeoption_info['btn_bgcolor'] .';'.PHP_EOL;
		$vars .= '--btnhover_bgcolor:'. $themeoption_info['btnhover_bgcolor'] .';'.PHP_EOL;
		$vars .= '--btn_textcolor:'. $themeoption_info['btn_textcolor'] .';'.PHP_EOL;
		$vars .= '--btnhover_textcolor:'. $themeoption_info['btnhover_textcolor'] .';'.PHP_EOL;
		$vars .= '--footer_bgimage:url("'. $footer_bgimage .'");'.PHP_EOL;
		$vars .= '--footer_bgcolor:'. $themeoption_info['footer_bgcolor'] .';'.PHP_EOL;
		$vars .= '--footer-title-color:'. $themeoption_info['footer_titlecolor'] .';'.PHP_EOL;
		$vars .= '--footer-text-color:'. $themeoption_info['footer_textcolor'] .';'.PHP_EOL;
		$vars .= '--footer-hover-text-color:'. $themeoption_info['footer_text_hovercolor'] .';'.PHP_EOL;
		$vars .= '--footerafter-bgcolor:'. $themeoption_info['footerafter_bgcolor'] .';'.PHP_EOL;
		$vars .= '--footerafter-text-color:'. $themeoption_info['footerafter_textcolor'] .';'.PHP_EOL;
		
		$vars .= '}';

		return $vars;
	}
}
