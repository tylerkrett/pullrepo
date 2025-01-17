<?php
namespace Opencart\Catalog\Controller\Common;
class Home extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['header_before'] = $this->load->controller('common/header_before');
		$data['header_after'] = $this->load->controller('common/header_after');
		$data['cart_services'] = $this->load->controller('common/cart_services');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_center'] = $this->load->controller('common/content_center');
		// print_r($data['content_center']); exit;
		$data['content_middle'] = $this->load->controller('common/content_middle');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer_before'] = $this->load->controller('common/footer_before');
		$data['footer_middle'] = $this->load->controller('common/footer_middle');
		$data['footer_after'] = $this->load->controller('common/footer_after');

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}