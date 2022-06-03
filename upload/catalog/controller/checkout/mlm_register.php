<?php
class ControllerCheckoutMlmRegister extends Controller {
	public function index() {

		if (isset($this->request->get['sponsor'])) {
	
			$decoded_sponsor=base64_decode($this->request->get['sponsor']);
			$url= HTTP_MLMSERVER.'check-sponsor/'.$decoded_sponsor;
	        $curl=curl_init($url);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($curl, CURLOPT_POST, false);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	        $curl_response   = curl_exec($curl);
	        curl_close($curl);
	        $result =json_decode($curl_response,TRUE);

	        if($result['status'] == true)
	        {

	        unset($this->session->data['purchase_session']);
	        $this->session->data['referral_session']=$decoded_sponsor;

	        }
		}

		if(isset($this->session->data['referral_session']))
		{
			$data['referral_session']=$this->session->data['referral_session'];
		}
		else {
			$data['referral_session']= "NatureCare"; 
		}

		$user_details=$this->getCustomerByEmail($this->customer->getEmail());

		 if(!empty($user_details['sponsor']))
		 {
		 	if($user_details['sponsor'] != MLM_COMPANY)
			{

			$data['referral_session']=$user_details['sponsor'];
			}

		 }

		// Custom Fields
		$data['custom_fields'] = array();
		
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));


		foreach ($custom_fields as $custom_field) {
			 
			if ($custom_field['location'] == 'account') {
			 
				$data['custom_fields'][] = $custom_field;
			}
		}

		$data['ic_image'] = $this->config->get('config_url')."image/ic_help.jpg";

		$this->response->setOutput($this->load->view('checkout/mlm_register', $data));
	}

	public function getCustomerByEmail($email) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");

		return $query->row;
	}

	public function save() {

		$this->load->language('checkout/checkout');

		$json = array();
		
		if (!$json) {

			// Custom field validation
			$this->load->model('account/custom_field');

			$custom_fields = $this->model_account_custom_field->getCustomFields(1);



			foreach ($custom_fields as $custom_field) {


				if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {


					$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
					$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				}
			}

		
		}


		if (!$json) {

			$this->load->model('account/customer');

			$customer_id = $this->model_account_customer->addCustomer2($this->request->post['custom_field']);




			// if ($customer_group_info && !$customer_group_info['approval']) {
			// 	$this->customer->login($this->request->post['email'], $this->request->post['password']);

			// 	$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());

			// 	if (!empty($this->request->post['shipping_address'])) {
			// 		$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			// 	}
			// } else {
			// 	$json['redirect'] = $this->url->link('account/success');
			// }

		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}