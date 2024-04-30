<?php
namespace Opencart\Admin\Controller\Extension\ishifooterlinkblock\Module;
use \Opencart\System\Helper AS Helper;
class IshiFooterLinkBlock extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/ishifooterlinkblock/module/ishifooterlinkblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishifooterlinkblock', $this->request->post);
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
				'href' => $this->url->link('extension/ishifooterlinkblock/module/ishifooterlinkblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishifooterlinkblock/module/ishifooterlinkblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishifooterlinkblock/module/ishifooterlinkblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishifooterlinkblock/module/ishifooterlinkblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($this->request->post['footerlinktitle'])) {
			$data['footerlinktitle'] = $this->request->post['footerlinktitle'];
		} elseif (!empty($module_info)) {
			$data['footerlinktitle'] = $module_info['footerlinktitle'];
		} else {
			$data['footerlinktitle'] = '';
		}

		if (isset($module_info['showtitle'])) {
			$data['showtitle'] = $module_info['showtitle'];
		} else {
			$data['showtitle'] = 0;
		}

		if (isset($this->request->post['column'])) {
			$data['column'] = $this->request->post['column'];
		} elseif (!empty($module_info)) {
			$data['column'] = $module_info['column'];
		} else {
			$data['column'] = '3';
		}
		
		if (isset($this->request->post['showaccount'])) {
			$data['showaccount'] = $this->request->post['showaccount'];
		} elseif (!empty($module_info) && isset($module_info['showaccount'])) {
			$data['showaccount'] = $module_info['showaccount'];
		} else {
			$data['showaccount'] = 0;
		}

		if (isset($this->request->post['showinformation'])) {
			$data['showinformation'] = $this->request->post['showinformation'];
		} elseif (!empty($module_info) && isset($module_info['showinformation'])) {
			$data['showinformation'] = $module_info['showinformation'];
		} else {
			$data['showinformation'] = 0;
		}

		if (isset($this->request->post['showextra'])) {
			$data['showextra'] = $this->request->post['showextra'];
		} elseif (!empty($module_info) && isset($module_info['showextra'])) {
			$data['showextra'] = $module_info['showextra'];
		} else {
			$data['showextra'] = 0;
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

		
		if (!empty($module_info['ishiextra'])) {
			$ishi_extras = $module_info['ishiextra'];
		}else {
			$ishi_extras = [];
		}


		$data['ishi_extras'] = [];

		foreach ($ishi_extras as $key => $value) {
			foreach ($value as $ishiextra) {
				
				$data['ishi_extras'][$key][] = array(
					'linkname'      => $ishiextra['linkname'],
					'link'       => $ishiextra['link']
				);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/ishifooterlinkblock/module/ishifooterlinkblock', $data));

		
	}

	protected function validate() {
		$this->load->language('extension/ishifooterlinkblock/module/ishifooterlinkblock');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishifooterlinkblock/module/ishifooterlinkblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishifooterlinkblock.ishifooterlinkblock', $this->request->post);
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