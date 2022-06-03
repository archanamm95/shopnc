<?php
class ControllerCheckoutPurchaseRegister extends Controller {
	
	public function index()
	{

		$this->session->data['referral_session']=$this->session->data['purchase_session'];

		$this->session->data['guest_checkout']=false;

		$this->session->data['purchase_link_member_register']=true;

		$this->session->data['member_register_checkbox']=true;

		$this->response->setOutput(json_encode($this->session->data['purchase_link_member_register']));
	}

	// public function new()
	// {

	// 	$this->session->data['purchase_link_member_register']=false;

	// 	$this->response->setOutput(json_encode($this->session->data['purchase_link_member_register']));
	// }

	
	
}