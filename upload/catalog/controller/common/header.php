<?php
class ControllerCommonHeader extends Controller {
	public function index() {

		// User Type Check

		$url= HTTP_MLMSERVER.'user-type/'.$this->customer->getUsername();
        $curl=curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response   = curl_exec($curl);
        curl_close($curl);
        $result =json_decode($curl_response,TRUE);

        $this->session->data['dealer']=false;

        if(!empty($this->customer->getUsername()))
        {
        	if($result['status']== true)
        	{

        		$this->session->data['dealer']=true;

        	}
        	else
        	{

        		$this->session->data['dealer']=false;

        	}

        }
        else
        {
        	$this->session->data['dealer']=false;

        }

        // Code ends

        // Invite Link Type

        if (isset($this->request->get['type'])) {

			$this->session->data['type']=base64_decode($this->request->get['type']);

        }
        elseif(!isset($this->session->data['type']))
        {

        	$this->session->data['type']=null;
        }

        if(isset($this->session->data['referral_session']))
		{
			 $data['referral_session']=$this->session->data['referral_session'];
		}
		else {
			$data['referral_session']= MLM_COMPANY; 
		}

        // Code ends

        // FOR DEVELOPMENT
		function getRealIpAddr()
		{
		    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		    {
		      $ip=$_SERVER['HTTP_CLIENT_IP'];
		    }
		    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		    {
		      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		    }
		    else
		    {
		      $ip=$_SERVER['REMOTE_ADDR'];
		    }
		    return $ip;
		} 

		if(getRealIpAddr() == "127.0.0.1")
		{

		if(isset($this->session->data['referral_session']))
		{
			 $data['referral_session']=$this->session->data['referral_session'];
		}
		else {
			$data['referral_session']= MLM_COMPANY; 
		}

		if(isset($this->session->data['purchase_session']))
		{
			$data['purchase_session']=$this->session->data['purchase_session'];
		}
		else {
			$data['purchase_session']= MLM_COMPANY; 
		}

		if($this->session->data['dealer'] == true)
		{
			$dealer="yes";
		}
		else
		{
			$dealer="no";
		}

		if(isset($this->session->data['influencer']))
		{

			if($this->session->data['influencer'] == true)
		{
			$influencer=1;
		}
		else
		{
			$influencer=0;
		}

		}
		else
		{
			$influencer=0;
		}

		echo "Referal--".$data['referral_session'];

		echo "<br>";

		echo "Purchase--".$data['purchase_session'];

		echo "<br>";

		if(isset($this->session->data['type']))
		{

		echo "Type---".$this->session->data['type'];

		echo "<br>";

		}

		echo "Dealer--".$dealer;

		echo "<br>";

		echo "Encrypted---".base64_encode("NC27417");

		echo "<br>";

		// var_dump($this->session->data['guest_checkout']);

		}

		// FOR DEVELOPMENT CODE ENDS


		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$themeoption_info = $this->model_setting_extension->getThemeOption();
		$data['loader'] = $themeoption_info['loader'];
		
		$data['title'] = $this->document->getTitle();
		$data['base'] = $server;
		$data['all_product'] = $server."index.php?route=product/all_product";
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');
		$data['name'] = $this->config->get('config_name');
		$data['HTTP_MLMSERVER_NOAPI'] =HTTP_MLMSERVER_NOAPI;

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishome'] = 'home';
		} else {
			$data['ishome'] = 'other';
		}

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		if($this->customer->getId() != null)
		{

		$url= HTTP_MLMSERVER.'check-sponsor/'.$this->customer->getUsername();
        $curl=curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response   = curl_exec($curl);
        curl_close($curl);
        $result =json_decode($curl_response,TRUE);

        $data['backoffice_eligibility'] = $result['status'];

        $this->session->data['backoffice_eligibility']=$data['backoffice_eligibility'];


        }

        $this->load->model('account/order');

        $user_type_mlm_customer=$this->model_account_order->getUserOrderSingle($this->customer->getId());
        $data['backoffice'] = HTTP_MLMSERVER_NOAPI.'backoffice-login/'.base64_encode($this->customer->getUsername());

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		$data['user_type_mlm_customer'] = $user_type_mlm_customer;
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['MLM_COMPANY']= MLM_COMPANY;

		if($this->customer->isLogged() && $data['backoffice_eligibility'] == true)
		{

		$data['logout']=HTTP_MLMSERVER_NOAPI.'logout/'.base64_encode($this->customer->getUsername());

		}

		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['about_us'] = $this->url->link('information/information')."&information_id=4";
		$data['return'] = $this->url->link('information/information')."&information_id=6";
		$data['privacy'] = $this->url->link('information/information')."&information_id=3";
		$data['terms_and_conditions'] = $this->url->link('information/information')."&information_id=5";
		$data['product_authentication'] = $this->url->link('information/information')."&information_id=8";
		$data['faq'] = $this->url->link('information/information')."&information_id=7";
		$data['telephone'] = $this->config->get('config_telephone');
		$data['email'] = $this->config->get('config_email');
		$data['activetemplate'] = $this->config->get('theme_default_directory');
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');
		$data['headerbefore'] = $this->load->controller('common/headerbefore');
		$data['headerafter'] = $this->load->controller('common/headerafter');

		$themeoption_info = $this->model_setting_extension->getThemeOption();
		
		// if($themeoption_info['dev_mode'] == 1){
			$this->regenerate();
		// }
		
		return $this->load->view('common/header', $data);
	}

	public function getProductId($order_id) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");

		return $query->rows;
	}

	public function getOrderId($customer_id) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order WHERE customer_id = '" . (int)$customer_id . "' ");

		return $query->rows;
	}

	public function getCategoryName($category_id) {


		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

		 return $query->row['name'];

	}

	
	public function getProductCategories($product_id) {


		$product_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->row['category_id'];

	}


	public function regenerate(){
		
		$this->load->model('setting/extension');
		$themeoption_info = $this->model_setting_extension->getThemeOption();
		$rtl = false;
		$activetemplate = $this->config->get('theme_default_directory');
	
		require 'scss.inc.php';
		$scss = new scssc();
		$sourceDirectory = DIR_TEMPLATE . $activetemplate .'/scss/';
		$targetDirectory = DIR_TEMPLATE . $activetemplate .'/stylesheet/';
		$targetRTLFile = $targetDirectory .'rtl.css';
		$targetCSSFile = $targetDirectory .'stylesheet.css';
		$scss->setImportPaths($sourceDirectory);
		
		$variableFile = $sourceDirectory .'temporaryvariables.scss';
		$vFile = fopen($variableFile, "w") or die("Unable to open file!");
		fwrite($vFile, $this->generateVariablesForCSS($themeoption_info));
		fclose($vFile);
		
		if($rtl){
			$all_css = $scss->compile('@import "rtl.scss"');
			$stylefile = fopen($targetRTLFile, "w") or die("Unable to open file!");	
			fwrite($stylefile, $all_css);
			fclose($stylefile);		
		}else{
			$all_css = $scss->compile('@import "theme.scss"');
			$stylefile = fopen($targetCSSFile, "w") or die("Unable to open file!");	
			fwrite($stylefile, $all_css);
			fclose($stylefile);
		}		
		
		$this->model_setting_extension->changeDevMode();
	}


	public function generateVariablesForCSS($themeoption_info) {

		list($r, $g, $b) = sscanf($themeoption_info['secondary_color'], "#%02x%02x%02x");
		$rgb_color = $r .', ' . $g .', ' .$b .', .6';

		$breadcrumb_image = '';
		if(!empty($themeoption_info['breadcrumb_image'])) {
			if ($this->request->server['HTTPS']) {
				$breadcrumb_image = $this->config->get('config_ssl') . 'image/' . $themeoption_info['breadcrumb_image'];
			} else {
				$breadcrumb_image = $this->config->get('config_url') . 'image/' . $themeoption_info['breadcrumb_image'];
			}
		}

		$footer_bgimage ='';
		if(!empty($themeoption_info['footer_bgimage'])) {
			if ($this->request->server['HTTPS']) {
				$footer_bgimage = $this->config->get('config_ssl') . 'image/' . $themeoption_info['footer_bgimage'];
			} else {
				$footer_bgimage = $this->config->get('config_url') . 'image/' . $themeoption_info['footer_bgimage'];
			}
		}

		$vars = '';
		$vars .= '$brand-primary: '. $themeoption_info['primarycolor'] .';'.PHP_EOL;
		$vars .= '$brand-secondary: '. $themeoption_info['secondary_color'] .';'.PHP_EOL;
		$vars .= '$icon-color: '. $themeoption_info['icon_color'] .';'.PHP_EOL;
		$vars .= '$icon-responsivecolor: '. $themeoption_info['icon_responsivecolor'] .';'.PHP_EOL;
		$vars .= '$breadcrumb_color:'. $themeoption_info['breadcrumb_color'] .';'.PHP_EOL;
		$vars .= '$breadcrumb_image:"'. $breadcrumb_image .'";'.PHP_EOL;
		$vars .= '$rgba-bgcolor:rgba('. $rgb_color .');'.PHP_EOL;
		$vars .= '$btn-primary-bg-color:'. $themeoption_info['btn_color'] .';'.PHP_EOL;
		$vars .= '$btn-hover-primary-bg-color:'. $themeoption_info['btn_hover_color'] .';'.PHP_EOL;
		$vars .= '$btn-primary-text-color:'. $themeoption_info['btn_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-hover-primary-text-color:'. $themeoption_info['btn_hover_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-secondary-bg-color:'. $themeoption_info['custom_btn_color'] .';'.PHP_EOL;
		$vars .= '$btn-hover-secondary-bg-color:'. $themeoption_info['custom_btn_hover_color'] .';'.PHP_EOL;
		$vars .= '$btn-secondary-text-color:'. $themeoption_info['custom_btn_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-hover-secondary-text-color:'. $themeoption_info['custom_btn_hover_txtcolor'] .';'.PHP_EOL;
		$vars .= '$header-top-bg-color:'. $themeoption_info['header_top_bgcolor'] .';'.PHP_EOL;
		$vars .= '$header-top-text-color:'. $themeoption_info['header_top_textcolor'] .';'.PHP_EOL;
		$vars .= '$header-bg-color:'. $themeoption_info['header_bgcolor'] .';'.PHP_EOL;
		$vars .= '$header-text-color:'. $themeoption_info['header_textcolor'] .';'.PHP_EOL;
		$vars .= '$header-hover-text-color:'. $themeoption_info['header_text_hovercolor'] .';'.PHP_EOL;
		$vars .= '$product-icon-color:'. $themeoption_info['product_iconcolor'] .';'.PHP_EOL;
		$vars .= '$product-hover-icon-color:'. $themeoption_info['product_icon_hovercolor'] .';'.PHP_EOL;
		$vars .= '$footer-bg-color:'. $themeoption_info['footer_bgcolor'] .';'.PHP_EOL;
		$vars .= '$footer-bg-image:"'. $footer_bgimage .'";'.PHP_EOL;
		$vars .= '$footer-title-color:'. $themeoption_info['footer_titlecolor'] .';'.PHP_EOL;
		$vars .= '$footer-text-color:'. $themeoption_info['footer_textcolor'] .';'.PHP_EOL;
		$vars .= '$footer-hover-text-color:'. $themeoption_info['footer_text_hovercolor'] .';'.PHP_EOL;

		return $vars;
	}
}
