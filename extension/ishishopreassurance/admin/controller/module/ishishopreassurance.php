<?php
namespace Opencart\Admin\Controller\Extension\ishishopreassurance\Module;
use \Opencart\System\Helper AS Helper;
class IshishopReassurance extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index(): void {
		$this->load->language('extension/ishishopreassurance/module/ishishopreassurance');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishishopreassurance', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishishopreassurance/module/ishishopreassurance', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishishopreassurance/module/ishishopreassurance', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishishopreassurance/module/ishishopreassurance', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishishopreassurance/module/ishishopreassurance', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}
		
		if (isset($module_info['name'])) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}
		
		if (isset($module_info['width'])) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = '50';
		}
		
		if (isset($module_info['height'])) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = '50';
		}
		
		$this->load->model('tool/image');

		if (!empty($module_info['service'])) {
			$services = $module_info['service'];
		} else {
			$services= [];
		}

		$data['services'] = [];

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		// if (is_file(DIR_IMAGE . html_entity_decode($data['image'], ENT_QUOTES, 'UTF-8'))) {
		// 	$data['thumb'] = $this->model_tool_image->resize(html_entity_decode($data['image'], ENT_QUOTES, 'UTF-8'), 100, 100);
		// } else {
		// 	$data['thumb'] = $data['placeholder'];
		// }

		foreach ($services as $key => $value) {
			foreach ($value as $service) {
				if (is_file(DIR_IMAGE . html_entity_decode($service['image'], ENT_QUOTES, 'UTF-8'))) {
					$image = $service['image'];
					$thumb = $service['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}
				
				$data['services'][$key][] = [
					'title'      => $service['title'],
					'desc'      => $service['desc'],
					'image'      => $image,
					'thumb'      => $this->model_tool_image->resize(html_entity_decode($thumb, ENT_QUOTES, 'UTF-8'), 100, 100)
				];
			}
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/ishishopreassurance/module/ishishopreassurance', $data));
	}

	protected function validate() {
		$this->load->language('extension/ishishopreassurance/module/ishishopreassurance');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishishopreassurance/module/ishishopreassurance')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishishopreassurance.ishishopreassurance', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$json['success'] = $this->language->get('text_success');
		}

		return !$this->error;
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}