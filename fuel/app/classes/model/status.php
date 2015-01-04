<?php
class Model_Status extends Model{
	public static function find_body_by_username($usrname){
		$data = array(
			array(
				'date' => '2014/04',
				'body' => 'イースターなう',
			),
		);
		
		return $data;
	}
}
