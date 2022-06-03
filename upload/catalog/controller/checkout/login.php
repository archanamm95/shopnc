<?php
class ControllerCheckoutLogin extends Controller {
	public function index() { 

	 	if(isset($this->session->data['influencer']))
	 	{
	 		$data['influencer']=$this->session->data['influencer'];
	 	}
	 	else
	 	{
	 		$data['influencer']=false;
	 	}

	 	if(isset($this->session->data['referral_session']))
		{
			 $data['referral_session']=$this->session->data['referral_session'];
		}
		else
		{
			$data['referral_session']= MLM_COMPANY; 
		}

		if(isset($this->session->data['purchase_link_member_register']) )
		{
			// $data['purchase_link_member_register']=$this->session->data['purchase_link_member_register'];

			if($this->session->data['purchase_link_member_register'] == true)
			{

				$data['purchase_link_member_register']= true;

			}
			else
			{
				$data['purchase_link_member_register']= false;
			}
	

		}
		else
		{
			$data['purchase_link_member_register']= false;
		}

		if(isset($this->session->data['member_register_checkbox']) )
		{

			if($this->session->data['member_register_checkbox'] == true)
			{

				$data['member_register_checkbox']= true;

			}
			else
			{
				$data['member_register_checkbox']= false;
			}
	

		}
		else
		{
			$data['member_register_checkbox']= false;
		}



		if(isset($this->session->data['purchase_session']))
		{
			$data['purchase_session']=$this->session->data['purchase_session'];
		}
		else
		{
			$data['purchase_session']=MLM_COMPANY;
		}

		$cart_products=$this->cart->getProducts();


		$package_count=0;
		$product_total_price=0;

		foreach($cart_products as $key => $product)
		{

			$product_total_price+=$product['total'];
		 

			// $product_category_id=$this->getProductCategories($product['product_id']);

			// if ($product_category_id == "96") {

			// $package_count+=$product['quantity'];
				
			// }

		}

		$data['product_total_price']=$product_total_price;

		$data['MLM_COMPANY']=MLM_COMPANY;

		$this->load->language('checkout/checkout');

		$data['checkout_guest'] = ($this->config->get('config_checkout_guest') && !$this->config->get('config_customer_price') && !$this->cart->hasDownload());

		if (isset($this->session->data['account'])) {
			$data['account'] = $this->session->data['account'];
		} else {
			$data['account'] = 'register';
		}

		$data['forgotten'] = $this->url->link('account/forgotten', '', true);

		$this->response->setOutput($this->load->view('checkout/login', $data));
	}

		public function getProductCategories($product_id) {
		$product_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->row['category_id'];
		
	}

	public function save() {
		$this->load->language('checkout/checkout');

		$json = array();

		if ($this->customer->isLogged()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$json['redirect'] = $this->url->link('checkout/cart');
		}

		if (!$json) {
			$this->load->model('account/customer');

			// Check how many login attempts have been made.
			$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

			if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
				$json['error']['warning'] = $this->language->get('error_attempts');
			}

			// Check if customer has been approved.
			$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

			if ($customer_info && !$customer_info['status']) {
				$json['error']['warning'] = $this->language->get('error_approved');
			}

			if (!isset($json['error'])) {
				if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
					$json['error']['warning'] = $this->language->get('error_login');

					$this->model_account_customer->addLoginAttempt($this->request->post['email']);
				} else {
					$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
				}
			}
		}

		if (!$json) {
			// Unset guest
			unset($this->session->data['guest']);

			// Default Shipping Address
			$this->load->model('account/address');

			if ($this->config->get('config_tax_customer') == 'payment') {
				$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			if ($this->config->get('config_tax_customer') == 'shipping') {
				$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			// Wishlist
			if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
				$this->load->model('account/wishlist');

				foreach ($this->session->data['wishlist'] as $key => $product_id) {
					$this->model_account_wishlist->addWishlist($product_id);

					unset($this->session->data['wishlist'][$key]);
				}
			}

			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
