<?php 

Class Home extends Controller
{

	public function index()
	{
		
		$data['page_title'] = "Dashboard";
		$this->view("dashboard",$data);
	}


}