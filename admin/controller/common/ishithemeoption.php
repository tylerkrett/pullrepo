<?php
namespace Opencart\Admin\Controller\Common;
class IshiThemeoption extends \Opencart\System\Engine\Controller {
	public function index(): void {

		$this->load->language('common/ishithemeoption');
		$this->load->model('setting/setting');

		$this->document->setTitle($this->language->get('heading_themeoption'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_themeoption'),
			'href' => $this->url->link('common/ishithemeoption', 'user_token=' . $this->session->data['user_token'])
		];


		if ($this->request->server['REQUEST_METHOD'] == 'POST') {		

			$this->model_setting_setting->editThemeOption($this->request->post);

			$data['success'] = $this->language->get('text_success');

		}	

		$general_info = $this->model_setting_setting->getThemeOption();

		// print_r($general_info); exit;

		$data['action'] = $this->url->link('common/ishithemeoption', 'user_token=' . $this->session->data['user_token'], 'SSL');
		

		if (isset($this->request->post['themecolor'])) {
			$data['themecolor'] = $this->request->post['themecolor'];
		} elseif (isset($general_info)) {
			$data['themecolor'] = $general_info['themecolor'];
		} else {
			$data['themecolor'] = '#000000';
		}

		if (isset($this->request->post['breadcrumb_image'])) {
			$data['breadcrumb_image'] = $this->request->post['breadcrumb_image'];
		} elseif (isset($general_info)) {
			$data['breadcrumb_image'] = $general_info['breadcrumb_image'];
		} else {
			$data['breadcrumb_image'] = '#DCD3CE';
		}
		
		$this->load->model('tool/image');

		if (isset($this->request->post['breadcrumb_image']) && is_file(DIR_IMAGE . $this->request->post['breadcrumb_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['breadcrumb_image'], 100, 100);
		} elseif (!empty($general_info) && is_file(DIR_IMAGE . $general_info['breadcrumb_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($general_info['breadcrumb_image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['breadcrumb_color'])) {
			$data['breadcrumb_color'] = $this->request->post['breadcrumb_color'];
		} elseif (isset($general_info)) {
			$data['breadcrumb_color'] = $general_info['breadcrumb_color'];
		} else {
			$data['breadcrumb_color'] = '#000000';
		}

		if (isset($this->request->post['subcategory_type'])) {
			$data['subcategory_type'] = $this->request->post['subcategory_type'];
		} elseif (isset($general_info)) {
			$data['subcategory_type'] = $general_info['subcategory_type'];
		} else {
			$data['subcategory_type'] = 'grid';
		}

		if (isset($this->request->post['category_counter'])) {
			$data['category_counter'] = $this->request->post['category_counter'];
		} elseif (!empty($general_info) && $general_info['category_counter'] == 1) {
			$data['category_counter'] = $general_info['category_counter'];
		} else {
			$data['category_counter'] = 0;
		}

		if (isset($this->request->post['product_counter'])) {
			$data['product_counter'] = $this->request->post['product_counter'];
		} elseif (!empty($general_info) && isset($general_info['product_counter'])) {
			$data['product_counter'] = $general_info['product_counter'];
		} else {
			$data['product_counter'] = 0;
		}

		if (isset($this->request->post['headernav_bgcolor'])) {
			$data['headernav_bgcolor'] = $this->request->post['headernav_bgcolor'];
		} elseif (isset($general_info)) {
			$data['headernav_bgcolor'] = $general_info['headernav_bgcolor'];
		} else {
			$data['headernav_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['headernav_textcolor'])) {
			$data['headernav_textcolor'] = $this->request->post['headernav_textcolor'];
		} elseif (isset($general_info)) {
			$data['headernav_textcolor'] = $general_info['headernav_textcolor'];
		} else {
			$data['headernav_textcolor'] = '#000000';
		}

		if (isset($this->request->post['header_bgcolor'])) {
			$data['header_bgcolor'] = $this->request->post['header_bgcolor'];
		} elseif (isset($general_info)) {
			$data['header_bgcolor'] = $general_info['header_bgcolor'];
		} else {
			$data['header_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['header_textcolor'])) {
			$data['header_textcolor'] = $this->request->post['header_textcolor'];
		} elseif (isset($general_info)) {
			$data['header_textcolor'] = $general_info['header_textcolor'];
		} else {
			$data['header_textcolor'] = '#000000';
		}

		if (isset($this->request->post['header_text_hovercolor'])) {
			$data['header_text_hovercolor'] = $this->request->post['header_text_hovercolor'];
		} elseif (isset($general_info)) {
			$data['header_text_hovercolor'] = $general_info['header_text_hovercolor'];
		} else {
			$data['header_text_hovercolor'] = '#000000';
		}

		if (isset($this->request->post['btn_bgcolor'])) {
			$data['btn_bgcolor'] = $this->request->post['btn_bgcolor'];
		} elseif (isset($general_info)) {
			$data['btn_bgcolor'] = $general_info['btn_bgcolor'];
		} else {
			$data['btn_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['btnhover_bgcolor'])) {
			$data['btnhover_bgcolor'] = $this->request->post['btnhover_bgcolor'];
		} elseif (isset($general_info)) {
			$data['btnhover_bgcolor'] = $general_info['btnhover_bgcolor'];
		} else {
			$data['btnhover_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['btn_textcolor'])) {
			$data['btn_textcolor'] = $this->request->post['btn_textcolor'];
		} elseif (isset($general_info)) {
			$data['btn_textcolor'] = $general_info['btn_textcolor'];
		} else {
			$data['btn_textcolor'] = '#000000';
		}

		if (isset($this->request->post['btnhover_textcolor'])) {
			$data['btnhover_textcolor'] = $this->request->post['btnhover_textcolor'];
		} elseif (isset($general_info)) {
			$data['btnhover_textcolor'] = $general_info['btnhover_textcolor'];
		} else {
			$data['btnhover_textcolor'] = '#000000';
		}

		if (isset($this->request->post['footer_bgimage'])) {
			$data['footer_bgimage'] = $this->request->post['footer_bgimage'];
		} elseif (isset($general_info)) {
			$data['footer_bgimage'] = $general_info['footer_bgimage'];
		} else {
			$data['footer_bgimage'] = '#DCD3CE';
		}
		
		$this->load->model('tool/image');

		if (isset($this->request->post['footer_bgimage']) && is_file(DIR_IMAGE . $this->request->post['footer_bgimage'])) {
			$data['footerthumb'] = $this->model_tool_image->resize($this->request->post['footer_bgimage'], 100, 100);
		} elseif (!empty($general_info) && is_file(DIR_IMAGE . $general_info['footer_bgimage'])) {
			$data['footerthumb'] = $this->model_tool_image->resize($general_info['footer_bgimage'], 100, 100);
		} else {
			$data['footerthumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['footer_bgcolor'])) {
			$data['footer_bgcolor'] = $this->request->post['footer_bgcolor'];
		} elseif (isset($general_info)) {
			$data['footer_bgcolor'] = $general_info['footer_bgcolor'];
		} else {
			$data['footer_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['footer_titlecolor'])) {
			$data['footer_titlecolor'] = $this->request->post['footer_titlecolor'];
		} elseif (isset($general_info)) {
			$data['footer_titlecolor'] = $general_info['footer_titlecolor'];
		} else {
			$data['footer_titlecolor'] = '#000000';
		}

		if (isset($this->request->post['footer_textcolor'])) {
			$data['footer_textcolor'] = $this->request->post['footer_textcolor'];
		} elseif (isset($general_info)) {
			$data['footer_textcolor'] = $general_info['footer_textcolor'];
		} else {
			$data['footer_textcolor'] = '#000000';
		}

		if (isset($this->request->post['footer_text_hovercolor'])) {
			$data['footer_text_hovercolor'] = $this->request->post['footer_text_hovercolor'];
		} elseif (isset($general_info)) {
			$data['footer_text_hovercolor'] = $general_info['footer_text_hovercolor'];
		} else {
			$data['footer_text_hovercolor'] = '#000000';
		}

		if (isset($this->request->post['footerafter_bgcolor'])) {
			$data['footerafter_bgcolor'] = $this->request->post['footerafter_bgcolor'];
		} elseif (isset($general_info)) {
			$data['footerafter_bgcolor'] = $general_info['footerafter_bgcolor'];
		} else {
			$data['footerafter_bgcolor'] = '#000000';
		}

		if (isset($this->request->post['footerafter_textcolor'])) {
			$data['footerafter_textcolor'] = $this->request->post['footerafter_textcolor'];
		} elseif (isset($general_info)) {
			$data['footerafter_textcolor'] = $general_info['footerafter_textcolor'];
		} else {
			$data['footerafter_textcolor'] = '#000000';
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/ishithemeoption', $data));
	}
}