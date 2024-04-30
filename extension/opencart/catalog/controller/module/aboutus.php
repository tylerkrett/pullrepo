<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
class Information extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->language('extension/opencart/module/aboutus');

		$this->load->model('catalog/information');

		$data['informations'] = [];

		foreach ($this->model_catalog_information->getInformations() as $result) {
			$data['informations'][] = [
				'title' => $result['title'],
				'href'  => $this->url->link('information/aboutus', 'language=' . $this->config->get('config_language') . '&information_id=' . $result['information_id'])
			];
		}
		
		$data['aboutus'] = $this->url->link('information/aboutus', 'language=' . $this->config->get('config_language'));

		return $this->load->view('extension/opencart/module/aboutus', $data);
	}
}