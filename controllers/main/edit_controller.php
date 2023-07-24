<?php
require_once('controllers/main/base_controller.php');

class EditController extends BaseController
{
	function __construct()
	{
		$this->folder = 'edit';
	}

	public function index()
	{
		$this->render('index');
	}
}
