<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();

				$data['header_top'] = $this->load->controller('common/header_top');
				$data['header_menu'] = $this->load->controller('common/header_menu');
				$data['navigation'] = $this->load->controller('common/navigation');
				$data['header_cart'] = $this->load->controller('common/header_cart');
				
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');


				$data['page_direction'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_page_direction');
				

				$data['responsive'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_responsive');
				
		$data['name'] = $this->config->get('config_name');

				$this->user = new Cart\User($this->registry);
				$module_jetimpex_color_switcher_permission = $this->user->hasPermission('modify', 'extension/module/jetimpex_color_switcher');

				if (!$module_jetimpex_color_switcher_permission && isset($_COOKIE['module_jetimpex_color_switcher_scheme'])) {
				$color_scheme = $_COOKIE['module_jetimpex_color_switcher_scheme'];
				} else {
				$color_scheme = $this->config->get('module_jetimpex_color_switcher_scheme') ? $this->config->get('module_jetimpex_color_switcher_scheme') : '0';
				}

				if (is_file(DIR_TEMPLATE . $this->config->get('theme_' . $this->config->get('config_theme') . '_directory') . "/stylesheet/color_schemes/" . $color_scheme . ".css")) {
				$data['color_scheme_link'] = "catalog/view/theme/" . $this->config->get('theme_' . $this->config->get('config_theme') . '_directory') . "/stylesheet/color_schemes/" . $color_scheme . ".css";
				} else {
				$data['color_scheme_link'] = "";
				}
				

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

				$data['theme_path'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_directory');
				

				$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

				if (isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
				$class = '-' . $this->request->get['product_id'];
				} elseif (isset($this->request->get['path'])) {
				$class = '-' . $this->request->get['path'];
				} elseif (isset($this->request->get['manufacturer_id'])) {
				$class = '-' . $this->request->get['manufacturer_id'];
				} elseif (isset($this->request->get['information_id'])) {
				$class = '-' . $this->request->get['information_id'];
				} else {
				$class = '';
				}

				$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
				} else {
				$data['class'] = 'common-home';
				}
				
				$this->load->model('tool/image');
				$header_image        = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_image');
				$header_image_width  = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_image_width');
				$header_image_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_image_height');

				if (is_file(DIR_IMAGE . $header_image)) {
				$data['header_image_thumb']  = $this->model_tool_image->resize($header_image, $header_image_width, $header_image_height);
				} else {
				$data['header_image_thumb'] = '';
				}
				

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

				$data['compare'] = $this->url->link('product/compare');
				
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
