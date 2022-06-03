<?php
class ControllerCheckoutCheckout extends Controller {
	public function index() { 

		$this->load->model('setting/setting');

		if (isset($this->request->get['delivery_charge'])) {

			$country = str_replace(' ', '',$this->request->get['delivery_charge']);

			if($country == 'Malaysia' || $country == 'Singapore')
			{
				// Free shipping For Malasia & Singapore
				$this->model_setting_setting->updateFlatShippingCost(0);
				$this->session->data['delivery_details']="free";
				exit($country."--free");
			}
			else
			{
				$this->session->data['delivery_details']="paid";
				$this->model_setting_setting->updateFlatShippingCost($this->model_setting_setting->prviousFlatShippingCost());
				exit($country."--default");
			}
    }

		if (isset($this->request->get['flat_rate'])) {

			if($this->request->get['flat_rate'] == "free")
			{
				// Free shipping For Malasia & Singapore
				$this->model_setting_setting->updateFlatShippingCost(0);
				exit("free");
			}
			else
			{
				$this->model_setting_setting->updateFlatShippingCost($this->model_setting_setting->prviousFlatShippingCost());
				exit("default");
			}

    }

        // if (isset($this->request->get['country_id'])) {

        // 	$this->load->model('account/address');

        // 	$country_id=$this->model_account_address->getAddress($this->request->get['country_id']);

        // 	if (isset($country_id['country_id'])) {

        // 		 exit($country_id['country_id']) ;
 
        // 	}
        // 	else
        // 	{
        // 		return false;
        // 	}

        // }

        $this->load->model('account/custom_field');

		// if (isset($this->request->get['flat_rate'])) {

		// 	$billing_country_id=$this->model_setting_setting->getBillingCountry();


			
		// 	if($billing_country_id == "129" || $billing_country_id == "188")
		// 	{
		// 		// Free shipping For Malasia & Singapore
		// 		$this->model_setting_setting->updateFlatShippingCost(0);
		// 		exit("free");
		// 	}
		// 	else
		// 	{
		// 		$this->model_setting_setting->updateFlatShippingCost($this->model_setting_setting->prviousFlatShippingCost());
		// 		exit("default");
		// 	}

  //       }

		// check if user is not customer
		$url= HTTP_MLMSERVER.'check-sponsor/'.$this->customer->getUsername();
        $curl=curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response   = curl_exec($curl);
        curl_close($curl);
        $user_type_not_customer =json_decode($curl_response,TRUE);

        // code ends

		if(empty($this->session->data['purchase_link_member_register']))
		{
			 $data['purchase_link_member_register']="";

		}
		else
		{
			 $data['purchase_link_member_register']=$this->session->data['purchase_link_member_register'];
		}

		// Repurchase Check

		if(!isset($user_type_not_customer))
		{
			$data['repurchase_check']=false;
		}
		else
		{
			if($user_type_not_customer['status'] == true)
			{	
			$data['repurchase_check']=true;
			}
			else
			{
			$data['repurchase_check']=false;
			}
		} 

		// Repurchase Check Ends

		$cart_products=$this->cart->getProducts();

		$package_count=0;
		$register_total_price = 0;
		foreach($cart_products as $key => $product)
		{
			$product_category_id=$this->getProductCategories($product['product_id']);

			// if ($product_category_id == "96") { //commented by archana

			$package_count+=$product['quantity'];
			$register_total_price+=$product['total']; //added by archana
				
			// }

		}

		// if ($package_count >= "2") { //commented by archana
		if ($register_total_price >= "400") {

		$data['mlm_eligibility']="eligible";	

		}
		else
		{

		$data['mlm_eligibility']="not eligible";

		}

		if(isset($this->session->data['purchase_session']))
		{

		$data['purchase_session']=true;		
		$data['purchase_session_sponsor']=$this->session->data['purchase_session'];		
			
		}
		else
		{
		$data['purchase_session']=false;
		$data['purchase_session_sponsor']=MLM_COMPANY;			
		}

		if (isset($this->request->get['sponsor_name'])) {

			$url= HTTP_MLMSERVER.'check-sponsor/'.$this->request->get['sponsor_name'];
	        $curl=curl_init($url);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($curl, CURLOPT_POST, false);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	        $curl_response   = curl_exec($curl);
	        curl_close($curl);
	        $result =json_decode($curl_response,TRUE);

	        if($result['status'] == true)
	        {

	        exit("true");

	        }

	        else
	        {
	        exit(MLM_COMPANY);

	        }

		}

		if(isset($this->session->data['referral_session']))
		{

			$data['referral_session']=$this->session->data['referral_session'];
			$url= HTTP_MLMSERVER.'check-sponsor/'.$this->customer->getEmail();
	        $curl=curl_init($url);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($curl, CURLOPT_POST, false);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	        $curl_response   = curl_exec($curl);
	        curl_close($curl);
	        $result =json_decode($curl_response,TRUE);

	        if($result == NULL)
	        {

	        	$data['user_exist_in_mlm']=false;
	        }
	        else
	        {
	        	$data['user_exist_in_mlm']=$result['status'];
	        }

		}
		else {

			$data['user_exist_in_mlm']=false;
			$data['referral_session']= MLM_COMPANY; 
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart'));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}
		}

		// Order history
		$data['products'] = array();

			foreach ($this->cart->getProducts() as $product) {
				$option_data = array();

				foreach ($product['option'] as $option) {
					$option_data[] = array(
						'product_option_id'       => $option['product_option_id'],
						'product_option_value_id' => $option['product_option_value_id'],
						'option_id'               => $option['option_id'],
						'option_value_id'         => $option['option_value_id'],
						'name'                    => $option['name'],
						'value'                   => $option['value'],
						'type'                    => $option['type']
					);
				}

				$data['products'][] = array(
					'product_id' => $product['product_id'],
					'name'       => $product['name'],
					'model'      => $product['model'],
					'option'     => $option_data,
					'download'   => $product['download'],
					'quantity'   => $product['quantity'],
					'subtract'   => $product['subtract'],
					'price'      => $product['price'],
					'total'      => $product['total'],
					'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
					'reward'     => $product['reward']
				);
			}

			$order_data = array();
			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;

			// Because __call can not keep var references so we put them into an array.
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);

			$this->load->model('setting/extension');

			$sort_order = array();

			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);

					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			$sort_order = array();

			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $totals);

			$order_data['totals'] = $totals;

			$data['totals'] = array();

			foreach ($order_data['totals'] as $total) {
				$data['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
				);
			}

			// Order history ends

		$this->load->language('checkout/checkout');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		// Required by klarna
		if ($this->config->get('payment_klarna_account') || $this->config->get('payment_klarna_invoice')) {
			$this->document->addScript('http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['heading_title'] = ($this->language->get('heading_title'));

		$data['text_checkout_option'] = sprintf($this->language->get('text_checkout_option'), 1);
		$data['text_checkout_account'] = sprintf($this->language->get('text_checkout_account'), 2);

		$data['text_checkout_payment_address'] = sprintf($this->language->get('text_checkout_payment_address'), 2);

		$data['text_checkout_mlm_register'] = "Member Register";

		// MLM Registraion Checkout Extra Fields Normal 

		if($data['repurchase_check'] == false)
		{

			if($data['mlm_eligibility'] == "eligible" && $data['purchase_session_sponsor'] == MLM_COMPANY &&  $data['user_exist_in_mlm'] == "0" )
			{
				$i=1;
			}
			else
			{
				$i=0;
			}
		}
		else
		{
			$i=0;
		}

		$this->session->data['member_register_eligibility']=$i;

		$data['mlm_register_check']=$this->session->data['member_register_eligibility'];

		if(isset($this->session->data['purchase_link_member_register']) )
		{

			if($this->session->data['purchase_link_member_register'] == true)
			{

				$this->session->data['member_register_eligibility']="1";

			}

		}

		//START CART DOSENT HAVE 2 OR MORE PACKAGES

		if($i == 0)
		{
			$this->session->data['purchase_link_member_register']=false;
		}

		//END CART DOSENT HAVE 2 OR MORE PACKAGES

	 	$data['mlm_register_check']=$this->session->data['member_register_eligibility'];

		// MLM Registraion Checkout Extra Fields Normal Ends
		
		$data['text_checkout_shipping_address'] = sprintf($this->language->get('text_checkout_shipping_address'), 3+$i);

		// MLM Registraion Checkout Extra Fields Normal Ends

		$data['text_checkout_shipping_method'] = sprintf($this->language->get('text_checkout_shipping_method'), 4+$i);

		if ($this->cart->hasShipping()) {
			 
			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 5+$i);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 6+$i);

		} else {

			$data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 3);
			$data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 4);	
		}

		if (isset($this->session->data['error'])) {

			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			
			$data['error_warning'] = '';
		}

		 $data['logged'] = $this->customer->isLogged();

		if (isset($this->session->data['account'])) {
			$data['account'] = $this->session->data['account'];
		} else {
			$data['account'] = '';
		}

		$data['MLM_COMPANY'] = MLM_COMPANY;
		$data['shipping_required'] = $this->cart->hasShipping();
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_middle'] = $this->load->controller('common/content_middle');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['ic_image'] = $this->config->get('config_url')."image/ic_help.jpg";
		$data['ic_image'] = $this->config->get('config_url')."image/ic_help.jpg";
		$data['ic_front'] = $this->config->get('config_url')."image/ic/front.jpg";
		$data['ic_back'] = $this->config->get('config_url')."image/ic/back.png";
		$data['passport_front'] = $this->config->get('config_url')."image/ic/passport-front.jpg";
		$data['passport_back'] = $this->config->get('config_url')."image/ic/passport-back.jpg";

		if(isset($results[0]['purchase_sponsor']))
		{

			$this->session->data['purchase_session']=$results[0]['purchase_sponsor'];
		}

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}

	public function country() {
		$json = array();
		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function customfield() {


		$json = array();

		$this->load->model('account/custom_field');

		// Customer Group
		if (isset($this->request->get['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->get['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->get['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			$json[] = array(
				'custom_field_id' => $custom_field['custom_field_id'],
				'required'        => $custom_field['required']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getProductCategories($product_id) {
		$product_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->row['category_id'];
		
	}
	
}