<?php 

class Controller {

	public function view ($nama_view, $data = [])
	{
		require_once '../app/views/' . $nama_view . '.php';
	}

	public function model ($nama_model)
	{
		require_once '../app/models/' .$nama_model . '.php';
		return new $nama_model; 
	}

}
