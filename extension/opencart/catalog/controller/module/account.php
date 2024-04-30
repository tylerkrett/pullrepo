<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
class Account extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->language('extension/opencart/module/account');

		if (isset($this->request->get['route'])){
			$active_route = $this->request->get['route'];
			if($active_route == 'account/address' || $active_route == 'account/address/add'){
				$data['address_active'] = 'active';
			}elseif($active_route == 'account/order' || $active_route == 'account/order/info'){
				$data['order_active'] = 'active';
			}elseif($active_route == 'account/account' || $active_route == 'account/account'){
				$data['account_active'] = 'active';
			}elseif($active_route == 'account/password' || $active_route == 'account/password'){
				$data['pass_active'] = 'active';
			}elseif($active_route == 'account/wishlist' || $active_route == 'account/wishlist'){
				$data['wishlist_active'] = 'active';
			}elseif($active_route == 'account/subscription' || $active_route == 'account/subscription'){
				$data['subs_active'] = 'active';
			}elseif($active_route == 'account/download' || $active_route == 'account/download'){
				$data['download_active'] = 'active';
			}elseif($active_route == 'account/recurring' || $active_route == 'account/recurring'){
				$data['recurring_active'] = 'active';
			}elseif($active_route == 'account/reward' || $active_route == 'account/reward'){
				$data['reward_active'] = 'active';
			}elseif($active_route == 'account/returns' || $active_route == 'account/returns'){
				$data['return_active'] = 'active';
			}elseif($active_route == 'account/transaction' || $active_route == 'account/transaction'){
				$data['trans_active'] = 'active';
			}elseif($active_route == 'account/newsletter' || $active_route == 'account/newsletter'){
				$data['news_active'] = 'active';
			}
			else{
				$data['edit_active'] = 'active';
			}
		}

		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('account/register', 'language=' . $this->config->get('config_language'));
		$data['login'] = $this->url->link('account/login', 'language=' . $this->config->get('config_language'));
		$data['logout'] = $this->url->link('account/logout', 'language=' . $this->config->get('config_language'));
		$data['forgotten'] = $this->url->link('account/forgotten', 'language=' . $this->config->get('config_language'));
		$data['account'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['edit'] = $this->url->link('account/edit', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['password'] = $this->url->link('account/password', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['address'] = $this->url->link('account/address', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['download'] = $this->url->link('account/download', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['reward'] = $this->url->link('account/reward', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['return'] = $this->url->link('account/returns', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['transaction'] = $this->url->link('account/transaction', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['newsletter'] = $this->url->link('account/newsletter', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));
		$data['subscription'] = $this->url->link('account/subscription', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));

		return $this->load->view('extension/opencart/module/account', $data);
	}
}