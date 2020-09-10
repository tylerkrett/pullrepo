<?php
class ControllerExtensionModuleJetimpexFacebook extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/jetimpex_facebook');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('jetimpex_facebook', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->cache->delete('product');

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

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['page_url'])) {
			$data['error_page_url'] = $this->error['page_url'];
		} else {
			$data['error_page_url'] = '';
		}

		if (isset($this->error['app_id'])) {
			$data['error_app_id'] = $this->error['app_id'];
		} else {
			$data['error_app_id'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
			);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/jetimpex_facebook', 'user_token=' . $this->session->data['user_token'], true)
				);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/jetimpex_facebook', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
				);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/jetimpex_facebook', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/jetimpex_facebook', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['page_url'])) {
			$data['page_url'] = $this->request->post['page_url'];
		} elseif (!empty($module_info)) {
			$data['page_url'] = $module_info['page_url'];
		} else {
			$data['page_url'] = '';
		}

		if (isset($this->request->post['app_id'])) {
			$data['app_id'] = $this->request->post['app_id'];
		} elseif (!empty($module_info)) {
			$data['app_id'] = $module_info['app_id'];
		} else {
			$data['app_id'] = '';
		}

		if (isset($this->request->post['show_facepile'])) {
			$data['show_facepile'] = $this->request->post['show_facepile'];
		} elseif (!empty($module_info)) {
			$data['show_facepile'] = $module_info['show_facepile'];
		} else {
			$data['show_facepile'] = '';
		}

		if (isset($this->request->post['bg'])) {
			$data['bg'] = $this->request->post['bg'];
		} elseif (!empty($module_info)) {
			$data['bg'] = $module_info['bg'];
		} else {
			$data['bg'] = '';
		}

		if (isset($this->request->post['show_posts'])) {
			$data['show_posts'] = $this->request->post['show_posts'];
		} elseif (!empty($module_info)) {
			$data['show_posts'] = $module_info['show_posts'];
		} else {
			$data['show_posts'] = '';
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 200;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 200;
		}

		if (isset($this->request->post['language'])) {
			$data['language'] = $this->request->post['language'];
		} elseif (!empty($module_info)) {
			$data['language'] = $module_info['language'];
		} else {
			$data['language'] = '';
		}

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

		$this->response->setOutput($this->load->view('extension/module/jetimpex_facebook', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/jetimpex_facebook')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (empty($this->request->post['page_url'])) {
			$this->error['page_url'] = $this->language->get('error_page_url');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}