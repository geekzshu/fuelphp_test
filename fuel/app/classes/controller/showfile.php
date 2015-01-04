<?php

class Controller_Showfile extends Controller{
	public function action_index(){
		$view = View::forge('hello');
		$view->set('title', 'Hello');
		
		return $view;
	}
}
