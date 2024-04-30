<?php

namespace Opencart\Admin\Controller\Extension\newslettersubscribe\Module;
use \Opencart\System\Helper AS Helper;
class Newslettersubscribe extends \Opencart\System\Engine\Controller {
	private string $extensionPath = 'extension/newslettersubscribe/module/newslettersubscribe';

	private $error = array(); 
	
	public function index() {   
	
		$this->load->language('extension/newslettersubscribe/module/newslettersubscribe');

		$this->load->model('extension/newslettersubscribe/ishithemes/newslettersubscribe');

		$this->document->setTitle($this->language->get('heading_title1'));
		
		$this->load->model('setting/setting');
		$this->load->model('setting/module');
		
		$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->check_db();
		$this->document->addScript('view/javascript/newsletter/jquery-ui.js');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
	
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('newslettersubscribe', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}
			
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}
				
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_newsletter'] = $this->language->get('text_newsletter');
		$data['text_customer_all'] = $this->language->get('text_customer_all');	
		$data['text_customer'] = $this->language->get('text_customer');	
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_affiliate_all'] = $this->language->get('text_affiliate_all');	
		$data['text_affiliate'] = $this->language->get('text_affiliate');	
		$data['text_product'] = $this->language->get('text_product');	
		$data['text_lbnewsletter'] = $this->language->get('text_lbnewsletter');	
		$data['text_sendall'] = $this->language->get('text_sendall');	
		$data['text_mail_success'] = $this->language->get('text_mail_success');	
		$data['text_info'] = $this->language->get('text_info');	
				
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_list'] = $this->language->get('tab_list');
		$data['tab_mail'] = $this->language->get('tab_mail');
		
		$data['entry_admin'] = $this->language->get('entry_admin');
		$data['entry_layout'] = $this->language->get('entry_layout');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_unsubscribe'] = $this->language->get('entry_unsubscribe');
		$data['entry_thickbox'] = $this->language->get('entry_thickbox');
		$data['entry_registered'] = $this->language->get('entry_registered');	
		$data['entry_mail'] = $this->language->get('entry_mail');
		$data['entry_options'] = $this->language->get('entry_options');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_to'] = $this->language->get('entry_to');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_affiliate'] = $this->language->get('entry_affiliate');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_limit'] = $this->language->get('entry_limit');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_name'] = $this->language->get('entry_name');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add_module'] = $this->language->get('button_add_module');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_delete'] = $this->language->get('button_delete');
		
		//Errors
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

  		//Breadcrumb
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		// $data['breadcrumbs'][] = array(
		// 	'text' => $this->language->get('text_extension'),
		// 	'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		// );

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module');

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info['name'])) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info['title'])) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = array();
		}

		if (isset($this->request->post['mobile_title'])) {
			$data['mobile_title'] = $this->request->post['mobile_title'];
		} elseif (!empty($module_info['mobile_title'])) {
			$data['mobile_title'] = $module_info['mobile_title'];
		} else {
			$data['mobile_title'] = array();
		}

		if (isset($this->request->post['column'])) {
			$data['column'] = $this->request->post['column'];
		} elseif (!empty($module_info)) {
			$data['column'] = $module_info['column'];
		} else {
			$data['column'] = '3';
		}

		if (isset($this->request->post['facebook'])) {
			$data['facebook'] = $this->request->post['facebook'];
		} elseif (!empty($module_info)) {
			$data['facebook'] = $module_info['facebook'];
		} else {
			$data['facebook'] = '';
		}

		if (isset($this->request->post['twitter'])) {
			$data['twitter'] = $this->request->post['twitter'];
		} elseif (!empty($module_info)) {
			$data['twitter'] = $module_info['twitter'];
		} else {
			$data['twitter'] = '';
		}

		if (isset($this->request->post['youtube'])) {
			$data['youtube'] = $this->request->post['youtube'];
		} elseif (!empty($module_info)) {
			$data['youtube'] = $module_info['youtube'];
		} else {
			$data['youtube'] = '';
		}

		if (isset($this->request->post['gplus'])) {
			$data['gplus'] = $this->request->post['gplus'];
		} elseif (!empty($module_info)) {
			$data['gplus'] = $module_info['gplus'];
		} else {
			$data['gplus'] = '';
		}

		if (isset($this->request->post['rss'])) {
			$data['rss'] = $this->request->post['rss'];
		} elseif (!empty($module_info)) {
			$data['rss'] = $module_info['rss'];
		} else {
			$data['rss'] = '';
		}

		if (isset($this->request->post['pinterest'])) {
			$data['pinterest'] = $this->request->post['pinterest'];
		} elseif (!empty($module_info)) {
			$data['pinterest'] = $module_info['pinterest'];
		} else {
			$data['pinterest'] = '';
		}

		if (isset($this->request->post['vimeo'])) {
			$data['vimeo'] = $this->request->post['vimeo'];
		} elseif (!empty($module_info)) {
			$data['vimeo'] = $module_info['vimeo'];
		} else {
			$data['vimeo'] = '';
		}

		if (isset($this->request->post['instagram'])) {
			$data['instagram'] = $this->request->post['instagram'];
		} elseif (!empty($module_info)) {
			$data['instagram'] = $module_info['instagram'];
		} else {
			$data['instagram'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		//Get User List
		
		$user_total = $this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->getTotalUsers();
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		// print_r($this->config->get('config_limit_admin'));exit;
		$data['page_nav'] = ($page-1) * 10;
		

		$url = '';
		
		if (isset($this->request->get['module_id'])) {
			$url .= '&module_id=' . $this->request->get['module_id'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$filter = array(
			'start' => ($page - 1) * 10,
			'limit' => 10
		);
		
		$results = $this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->getList($filter);
		
		$data['users'] = array();
		
		foreach ($results as $result) {
		 
		 	$action = array();
			
			$action[] = array(
				'text' => $this->language->get('text_delete'),
				'href' => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe|unsubscribe', 'user_token=' . $this->session->data['user_token'] . '&user_id=' . $result['id'] . $url, true)
			);

	
			$data['users'][] = array(
				'id' 			=> $result['id'],
				'name'       	=> $result['name'],
				'email_id'      => $result['email_id'],
				'selected'   	=> isset($this->request->post['selected']) && in_array($result['id'], $this->request->post['selected']),
				'action'     	=> $action,
				'start'         => ($page - 1) * 10,
				'limit'         => $this->config->get('config_limit_admin')
			);
		
		}
		$data['export_csv'] = $this->url->link('extension/newslettersubscribe/module/newslettersubscribe|exportCSV', 'user_token=' . $this->session->data['user_token'] . $url, true);

		//Mail
		$this->load->model('setting/store');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['stores'] = $this->model_setting_store->getStores();		
	
		$data['jack'] = array();
		 $this->config->get('config_pagination_admin');
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $user_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($user_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($user_total - $this->config->get('config_pagination_admin'))) ? $user_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $user_total, ceil($user_total / $this->config->get('config_pagination_admin')));
		 	
		 	
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/newslettersubscribe/module/newslettersubscribe', $data));
	}
	
	public function exportCSV() {

		$this->load->model('extension/newslettersubscribe/ishithemes/newslettersubscribe');
		$this->load->language('extension/newslettersubscribe/module/newslettersubscribe');
		
		/* CSV Header Starts Here */
		 
		$filename = "IshiNewsletter_" . date('Y-m-d') . ".csv";
		 
		/* CSV Header Ends Here */
		
		$delimiter = ",";
		 
		$output = fopen('php://memory', 'w'); //Opens and clears the contents of file; or creates a new file if it doesn't exist
		
		if (isset($this->request->get['page'])) {
			
			$page = $this->request->get['page'];
			
		} else {
			$page = 1;
		}
		$filter = array(
			'start' => ($page - 1) * 10,
			'limit'           => $this->config->get('config_limit_admin')
		);
		
		
		$results = $this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->getList($filter);
		
		//set column headers
		$name = $this->language->get('heading_name');
		$number = $this->language->get('heading_no');
		$email = $this->language->get('heading_email');
		
		$fields = array($number,$email, $name);
		fputcsv($output, $fields, $delimiter);
		 
		$data = array(); 
		
		 $i= 1;
		// We don't want to export all the information to be exported so maintain a separate array for the information to be exported
		foreach($results as $row) {
			$lineData = array(
			$i,
			$row['email_id'],
			$row['name']
		);
			fputcsv($output, $lineData, $delimiter);
			$i++;
		}
		 
		fseek($output, 0);

		//set headers to download file rather than displayed
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');

		//output all remaining data on a file pointer
		fpassthru($output);

	}
	
	public function unsubscribe() {
		
		$this->load->model('extension/newslettersubscribe/ishithemes/newslettersubscribe');
		
		$data = '';
		
		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			
			foreach ($this->request->post['selected'] as $user_id) {
				$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->delete($user_id);                
	  		}
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
			
			if (isset($this->request->get['module_id'])) {
				$url .= '&module_id=' . $this->request->get['module_id'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->redirect($this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . $url, true));
			
		} else if( isset($this->request->get['user_id']) ) {
			
			$data = $this->request->get['user_id'];
			
			$this->model_extension_newslettersubscribe_ishithemes_newslettersubscribe->delete($data);
			
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			$url = '';
			
			if (isset($this->request->get['module_id'])) {
				$url .= '&module_id=' . $this->request->get['module_id'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->response->redirect($this->url->link('extension/newslettersubscribe/module/newslettersubscribe', 'user_token=' . $this->session->data['user_token'] . $url, true));	
		
		} else {
		
			$this->index();
			
		}

	}
	
	
	public function GetDays($sStartDate, $sEndDate){  
      $sStartDate = gmdate("Y-m-d", strtotime($sStartDate));  
      $sEndDate = gmdate("Y-m-d", strtotime($sEndDate));  
      
      $aDays[] = $sStartDate;  
      
      $sCurrentDate = $sStartDate;  
      
      while($sCurrentDate < $sEndDate){  
        $sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));  
      
        $aDays[] = $sCurrentDate;  
      }  
      return $aDays;  
    }  
		
	protected function validateDelete() {
    	if (!$this->user->hasPermission('modify', 'extension/newslettersubscribe/module/newslettersubscribe')) {
      		$this->error['warning'] = $this->language->get('error_permission');  
    	}
		
		if (!$this->error) {
	  		return true;
		} else {
	  		return false;
		}
  	}

	protected function validateexportCSV() {
    	if (!$this->user->hasPermission('modify', 'extension/newslettersubscribe/module/newslettersubscribe')) {
      		$this->error['warning'] = $this->language->get('error_permission');  
    	}
		
		if (!$this->error) {
	  		return true;
		} else {
	  		return false;
		}
  	}

	private function validate() {

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/newslettersubscribe/module/newslettersubscribe')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (!$json) {
			$this->load->model('setting/module');

			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('newslettersubscribe.newslettersubscribe', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$json['success'] = $this->language->get('text_success');
		}
		
		return !$this->error;	
	}
}