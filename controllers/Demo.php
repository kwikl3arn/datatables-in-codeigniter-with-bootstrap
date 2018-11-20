<?php

class Demo  extends CI_Controller{
    function __construct() {
        parent::__construct();
       
         $this->load->model('Demo_Model'); 
    }
    public function index()
    {
//        $this->gotohell();
        $this->load->view('Dtables_view');
    }
    public function get_tweets()
	{
		$this->load->library('Datatables');
	   $this->datatables->select('*')->from('users');
	   echo $this->datatables->generate();
	}

    public function gotohell()
    {
        $data['empname']=$this->Demo_Model->gotoheaven();
        $this->load->view('Demo_view',$data);
    }
}
