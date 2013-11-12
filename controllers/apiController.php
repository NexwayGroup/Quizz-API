<?php

class apiController extends baseController
{
    public function index() 
    {
        $api = $this->_getApi();
        $response = $api->getActions();
        $this->_send($response);
    }

	public function question()
    {
        $this->_send($response);
	}
    
    private function _getApi()
    {
        return $this->model('api');
    }

    private function _send($response)
    {
        $viewData['response'] = $response;
	    $this->view('api', $viewData);	
    }
}
