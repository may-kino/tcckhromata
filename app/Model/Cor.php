<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');

class Cor extends AppModel {


	public $name = 'Cor';
	public $useTable = 'cors';
	


	public $displayField = 'nome';
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