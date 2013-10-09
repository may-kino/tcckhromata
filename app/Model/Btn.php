<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');

class Btn extends AppModel {


	public $name = 'Btn';
	public $useTable = 'btns';
	


	
	public $validate = array(
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'O nome deve ser preenchido'
		),
		'descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'A descrição deve ser preenchida'
		)
	);
	
	
}