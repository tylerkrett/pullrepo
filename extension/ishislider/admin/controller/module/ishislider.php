<?php
namespace Opencart\Admin\Controller\Extension\ishislider\Module;
use \Opencart\System\Helper AS Helper;
class IshiSlider extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index(): void {
		$this->load->language('extension/ishislider/module/ishislider');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishislider', $this->request->post);
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
				'href' => $this->url->link('extension/ishislider/module/ishislider', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishislider/module/ishislider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishislider/module/ishislider', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishislider/module/ishislider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($module_info['mobilewidth'])) {
			$data['mobilewidth'] = $module_info['mobilewidth'];
		} else {
			$data['mobilewidth'] = '50';
		}
		
		if (isset($module_info['mobileheight'])) {
			$data['mobileheight'] = $module_info['mobileheight'];
		} else {
			$data['mobileheight'] = '50';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} elseif (!empty($module_info) && isset($module_info['autoplay'])) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = '0';
		}
		
		if (isset($this->request->post['navigation'])) {
			$data['navigation'] = $this->request->post['navigation'];
		} elseif (!empty($module_info) && isset($module_info['navigation'])) {
			$data['navigation'] = $module_info['navigation'];
		} else {
			$data['navigation'] = '0';
		}
		
		if (isset($this->request->post['navigation_style'])) {
			$data['navigation_style'] = $this->request->post['navigation_style'];
		} elseif (!empty($module_info)) {
			$data['navigation_style'] = $module_info['navigation_style'];
		} else {
			$data['navigation_style'] = 'ishi-style-nav1';
		}
		
		if (isset($this->request->post['dot'])) {
			$data['dot'] = $this->request->post['dot'];
		} elseif (!empty($module_info) && isset($module_info['dot'])) {
			$data['dot'] = $module_info['dot'];
		} else {
			$data['dot'] = '0';
		}
		
		if (isset($this->request->post['dot_style'])) {
			$data['dot_style'] = $this->request->post['dot_style'];
		} elseif (!empty($module_info)) {
			$data['dot_style'] = $module_info['dot_style'];
		} else {
			$data['dot_style'] = 'ishi-style-dot1';
		}
		
		$this->load->model('tool/image');

		if (!empty($module_info['slider'])) {
			$sliders = $module_info['slider'];
		} else {
			$sliders= [];
		}

		$data['sliders'] = [];

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		// if (is_file(DIR_IMAGE . html_entity_decode($data['image'], ENT_QUOTES, 'UTF-8'))) {
		// 	$data['thumb'] = $this->model_tool_image->resize(html_entity_decode($data['image'], ENT_QUOTES, 'UTF-8'), 100, 100);
		// } else {
		// 	$data['thumb'] = $data['placeholder'];
		// }

		foreach ($sliders as $key => $value) {
			foreach ($value as $slider) {
				if (is_file(DIR_IMAGE . html_entity_decode($slider['image'], ENT_QUOTES, 'UTF-8'))) {
					$image = $slider['image'];
					$imagehover = $slider['imagehover'];
					$thumb = $slider['image'];
					$thumbhover = $slider['imagehover'];

				} else {
					$image = '';
					$imagehover = '';
					$thumb = 'no_image.png';
					$thumbhover = 'no_image.png';
				}
				
				$data['sliders'][$key][] = [
					'title'      => $slider['title'],
					'titlecolor'      => $slider['titlecolor'],
					'titlebgcolor'      => $slider['titlebgcolor'],
					'subtitle'      => $slider['subtitle'],
					'subtitlecolor'      => $slider['subtitlecolor'],
					'desc'=> $slider['desc'],
					'desccolor'      => $slider['desccolor'],
					'btntext'      => $slider['btntext'],
					'textalignment'       => $slider['textalignment'],
					'textposition'       => $slider['textposition'],
					'mobiletextalignment'       => $slider['mobiletextalignment'],
					'mobiletextposition'       => $slider['mobiletextposition'],
					'link'       => $slider['link'],
					'image'      => $image,
					'imagehover'      => $imagehover,
					'thumb'      => $this->model_tool_image->resize(html_entity_decode($thumb, ENT_QUOTES, 'UTF-8'), 100, 100),
					'thumbhover'      => $this->model_tool_image->resize(html_entity_decode($thumbhover, ENT_QUOTES, 'UTF-8'), 100, 100)
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

		$this->response->setOutput($this->load->view('extension/ishislider/module/ishislider', $data));
	}

	protected function validate() {
		$this->load->language('extension/ishislider/module/ishislider');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishislider/module/ishislider')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishislider.ishislider', $this->request->post);
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