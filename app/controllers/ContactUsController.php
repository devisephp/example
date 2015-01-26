<?php

class ContactUsController extends BaseController
{
	public function store($input)
	{
		dd('here we would probably send an email or something with this input', $input);
	}
}