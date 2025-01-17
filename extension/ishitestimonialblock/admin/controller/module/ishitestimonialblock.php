<?php
namespace Opencart\Admin\Controller\Extension\ishitestimonialblock\Module;
use \Opencart\System\Helper AS Helper;
class IshiTestimonialBlock extends \Opencart\System\Engine\Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/ishitestimonialblock/module/ishitestimonialblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishitestimonialblock', $this->request->post);
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
				'href' => $this->url->link('extension/ishitestimonialblock/module/ishitestimonialblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/ishitestimonialblock/module/ishitestimonialblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/ishitestimonialblock/module/ishitestimonialblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/ishitestimonialblock/module/ishitestimonialblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info)) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($module_info['bg_color'])) {
			$data['bg_color'] = $module_info['bg_color'];
		} else {
			$data['bg_color'] = '';
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = '';
		}
		
		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = '';
		}
		
		if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} elseif (!empty($module_info) && isset($module_info['autoplay'])) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = 0;
		}

		if (isset($this->request->post['column'])) {
			$data['column'] = $this->request->post['column'];
		} elseif (!empty($module_info)) {
			$data['column'] = $module_info['column'];
		} else {
			$data['column'] = '3';
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

		if (isset($this->request->post['ishitestimonial'])) {
			$ishi_testimonials = $this->request->post['ishitestimonial'];
		} elseif (!empty($module_info) && isset($module_info['ishitestimonial'])) {
			$ishi_testimonials = $module_info['ishitestimonial'];
		} else {
			$ishi_testimonials = array();
		}

		$data['ishi_testimonials'] = array();
		$cur_language_id = $this->config->get('config_language_id');
		
		foreach ($ishi_testimonials as $ishi_testimonial) {
			// Image
			if (isset($this->request->post['image'])) {
				$image = $this->request->post['image'];
			} elseif (!empty($ishi_testimonial)) {
				$image = $ishi_testimonial['image'];
			} else {
				$image = 'no_image.png';
			}

			if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
				$thumb = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
			} elseif (!empty($ishi_testimonial) && is_file(DIR_IMAGE . $ishi_testimonial['image'])) {
				$thumb = $this->model_tool_image->resize($ishi_testimonial['image'], 100, 100);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 100, 100);
			}
			$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);

                        foreach ($ishi_testimonial['username'] as $language_id => $value) {
				$username[$language_id] = $value;
			}

			foreach ($ishi_testimonial['designation'] as $language_id => $value) {
				$designation[$language_id] = $value;
			}

			foreach ($ishi_testimonial['description'] as $language_id => $value) {
				$description[$language_id] = $value;
			} 
			
			$data['entry_testimonial'] = $this->language->get('entry_testimonial');
			
			$default_name = (isset($title[$cur_language_id]) && $title[$cur_language_id] != '') ? $title[$cur_language_id] : $data['entry_testimonial'];
			
			if ($ishi_testimonials) {
				$data['ishi_testimonials'][] = array(
					'image'        		  => $image,
					'thumb'        		  => $thumb,
					'placeholder'         => $placeholder,
					'default_name'        => $default_name,
					'description'         => $description,
					'username'               => $username,
					'designation'               => $designation
				);
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/ishitestimonialblock/module/ishitestimonialblock', $data));

		
	}

	protected function validate() {
		$this->load->language('extension/ishitestimonialblock/module/ishitestimonialblock');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/ishitestimonialblock/module/ishitestimonialblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishitestimonialblock.ishitestimonialblock', $this->request->post);
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