<?php
namespace Opencart\Catalog\Controller\Checkout;
class Failure extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('checkout/failure');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language'))
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_failure'),
			'href' => $this->url->link('checkout/failure', 'language=' . $this->config->get('config_language'))
		];

		$data['text_message'] = sprintf($this->language->get('text_message'), $this->url->link('information/contact', 'language=' . $this->config->get('config_language')));

		$data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['header_before'] = $this->load->controller('common/header_before');
		$data['header_after'] = $this->load->controller('common/header_after');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_center'] = $this->load->controller('common/content_center');
		$data['content_middle'] = $this->load->controller('common/content_middle');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer_before'] = $this->load->controller('common/footer_before');
		$data['footer_middle'] = $this->load->controller('common/footer_middle');
		$data['footer_after'] = $this->load->controller('common/footer_after');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}