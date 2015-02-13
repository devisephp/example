<?php namespace App\Http\Controllers;

class ContactUsController extends Controller
{
	public function store($input)
	{
		dd('here we would probably send an email or something with this input', $input);
	}
}