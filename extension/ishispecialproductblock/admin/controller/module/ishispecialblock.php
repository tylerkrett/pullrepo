<?php
namespace Opencart\Admin\Controller\Extension\ishispecialproductblock\Module;
use \Opencart\System\Helper AS Helper;
class IshiSpecialBlock extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/ishispecialproductblock/module/ishispecialblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishispecialblock', $this->request->post);
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

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['subtitle'])) {
			$data['error_subtitle'] = $this->error['subtitle'];
		} else {
			$data['error_subtitle'] = array();
		}
		
		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
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
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishispecialproductblock/module/ishispecialblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishispecialproductblock/module/ishispecialblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishispecialproductblock/module/ishispecialblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishispecialproductblock/module/ishispecialblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($this->request->post['limit'])) {
			$data['limit'] = $this->request->post['limit'];
		} elseif (!empty($module_info)) {
			$data['limit'] = $module_info['limit'];
		} else {
			$data['limit'] = 5;
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 319;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 226;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}
		
		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info)) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['desc'])) {
			$data['desc'] = $this->request->post['desc'];
		} elseif (!empty($module_info)) {
			$data['desc'] = $module_info['desc'];
		} else {
			$data['desc'] = '';
		}

		if (isset($this->request->post['product_row'])) {
			$data['product_row'] = $this->request->post['product_row'];
		} elseif (!empty($module_info)) {
			$data['product_row'] = $module_info['product_row'];
		} else {
			$data['product_row'] = '1';
		}
		
		if (isset($this->request->post['hover_image'])) {
			$data['hover_image'] = $this->request->post['hover_image'];
		} elseif (!empty($module_info) && isset($module_info['hover_image'])) {
			$data['hover_image'] = $module_info['hover_image'];
		} else {
			$data['hover_image'] = 0;
		}
		
		if (isset($this->request->post['desktop_column'])) {
			$data['desktop_column'] = $this->request->post['desktop_column'];
		} elseif (!empty($module_info)) {
			$data['desktop_column'] = $module_info['desktop_column'];
		} else {
			$data['desktop_column'] = 4;
		}
		
		if (isset($this->request->post['laptop_column'])) {
			$data['laptop_column'] = $this->request->post['laptop_column'];
		} elseif (!empty($module_info)) {
			$data['laptop_column'] = $module_info['laptop_column'];
		} else {
			$data['laptop_column'] = 3;
		}
		
		if (isset($this->request->post['tablet_column'])) {
			$data['tablet_column'] = $this->request->post['tablet_column'];
		} elseif (!empty($module_info)) {
			$data['tablet_column'] = $module_info['tablet_column'];
		} else {
			$data['tablet_column'] = 2;
		}
		
		if (isset($this->request->post['mobile_column'])) {
			$data['mobile_column'] = $this->request->post['mobile_column'];
		} elseif (!empty($module_info)) {
			$data['mobile_column'] = $module_info['mobile_column'];
		} else {
			$data['mobile_column'] = 1;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/ishispecialproductblock/module/ishispecialblock', $data));
	}
	
	protected function validate() {
		$this->load->language('extension/ishispecialproductblock/module/ishispecialblock');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishispecialproductblock/module/ishispecialblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		// foreach ($this->request->post['title'] as $language_id => $title) {
		// 	if ((utf8_strlen($title) < 2) || (utf8_strlen($title) > 64)) {
		// 		$this->error['title'][$language_id] = $this->language->get('error_title');
		// 	}
		// }

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishispecialproductblock.ishispecialblock', $this->request->post);
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