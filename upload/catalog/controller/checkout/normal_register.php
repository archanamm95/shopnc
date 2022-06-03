<?php
class ControllerCheckoutNormalRegister extends Controller {

	public function index()
	{

		if($this->session->data['referral_session']=$this->session->data['purchase_session'])
		{
			$this->session->data['referral_session']=MLM_COMPANY;
		}

		$this->session->data['guest_checkout']=true;

		$this->session->data['member_register_checkbox']=false;

		$this->session->data['purchase_link_member_register']=false;
		$this->response->setOutput(json_encode($this->session->data['purchase_link_member_register']));
	}

	
	
}