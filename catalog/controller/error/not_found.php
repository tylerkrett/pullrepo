<?php
namespace Opencart\Catalog\Controller\Error;
class NotFound extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('error/not_found');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		if (isset($this->request->get['route'])) {
			$url_data = $this->request->get;

			$route = $url_data['route'];

			unset($url_data['route']);

			$url = '';

			if ($url_data) {
				$url .= '&' . urldecode(http_build_query($url_data, '', '&'));
			}

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link($route, $url)
			];
		}

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

		$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

		$this->response->setOutput($this->load->view('error/not_found', $data));
	}
}