<?php
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 2018-08-14
 * Time: 17:19
 */
defined ('BASEPATH') or exit ('No direct script acccess allowed')
class Properties extends CI_Controller{
	public function index(){
		this->load->view('properties/index');
	}

}
