<?php
namespace Opencart\Admin\Controller\Extension\ishifaqblock\Module;
use \Opencart\System\Helper AS Helper;
class IshiFaqBlock extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/ishifaqblock/module/ishifaqblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishifaqblock', $this->request->post);
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
				'href' => $this->url->link('extension/ishifaqblock/module/ishifaqblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishifaqblock/module/ishifaqblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishifaqblock/module/ishifaqblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishifaqblock/module/ishifaqblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

	
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

		if (isset($this->request->post['ishifaq'])) {
			$ishi_faqs = $this->request->post['ishifaq'];
		} elseif (!empty($module_info) && isset($module_info['ishifaq'])) {
			$ishi_faqs = $module_info['ishifaq'];
		} else {
			$ishi_faqs = array();
		}

		$data['ishi_faqs'] = array();
		$cur_language_id = $this->config->get('config_language_id');
		
		foreach ($ishi_faqs as $ishi_faq) {
			
		    foreach ($ishi_faq['title'] as $language_id => $value) {
				$title[$language_id] = $value;
			}	

			foreach ($ishi_faq['description'] as $language_id => $value) {
			  $description[$language_id] = $value;
		    }
			
			$data['entry_faq'] = $this->language->get('entry_faq');
			
			$default_name = (isset($title[$cur_language_id]) && $title[$cur_language_id] != '') ? $title[$cur_language_id] : $data['entry_faq'];
			
			if ($ishi_faqs) {
				$data['ishi_faqs'][] = array(
					'default_name'        => $default_name,
					'description'         => $description,
					'title'               => $title
				);
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/ishifaqblock/module/ishifaqblock', $data));

		
	}

	protected function validate() {
		$this->load->language('extension/ishifaqblock/module/ishifaqblock');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishifaqblock/module/ishifaqblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishifaqblock.ishifaqblock', $this->request->post);
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