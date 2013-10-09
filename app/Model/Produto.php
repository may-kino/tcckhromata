<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');

class Produto extends AppModel {


	public $name = 'Produto';
	public $useTable = 'produtos';
	


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

	public $belongsTo = array(
		'Cor' => array(
			'className' => 'Cor',
			'foreignKey' => 'cor_id'
		)
	);
}
	 
     

