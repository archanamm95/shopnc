<?php
class ControllerAccountBackOffice extends Controller {
	public function index() {
		
		$url= HTTP_MLMSERVER.'oc-login/'.$this->customer->getUsername();	   
        $curl=curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response   = curl_exec($curl);
        curl_close($curl);
        $result =json_decode($curl_response,TRUE);

		    if ($result['message'] == "success") {

		    	header('Location:'.HTTP_MLMSERVER_NOAPI);
		    }
		    else
		    {
		    	header('Location:'.HTTPS_SERVER);

		    }
	}
}
