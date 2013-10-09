<?php
class ProdutosController extends AppController {
 	var $uses = array('Produto','Cor');
	public $paginate = array(
		'limit' => 20,
		'paramType' => 'querystring',
		'order' => array(
			'Produto.created' => 'DESC'
		)
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('admin_search');
	}
	
	
	public function admin_search() {
		$this->autoRender = false;
		$conditions = null;
		if (isset($this->request->query['search']) && !empty($this->request->query['search'])) {
			$conditions[] = array(
				'OR' => array(
					'Produto.nome LIKE' => '%' . $this->request->query['search'] . '%'
					
				)
			);
			$this->paginate['conditions'] = $conditions;
			$this->set('produtos', $this->paginate('Produto'));
			$this->render('admin_index');
		}
	}
	
	
	public function admin_index() {
		$uses = array('Produto','Cor');
		$this->set('produtos', $this->paginate('Produto'));
	}
	
	public function admin_edit($id=null) {
		$this->User->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->User->read();
			unset($this->request->data['User']['password']);
		} else {
			if (empty($this->request->data['User']['password'])) {
				unset($this->request->data['User']['password']);
				unset($this->request->data['User']['cpassword']);
			}
			if ($this->User->save($this->request->data)) {
				$this->setFlashMessage('Usuário alterado com sucesso!', 'success', array('action' => 'index'));
			} else {
				$this->setFlashMessage('Não foi possível alterar, tente novamente!', 'error');
			}
		}
	}
	
	public function admin_add() {
		if ($this->request->is('post') && !empty($this->request->data)) {
			if ($this->User->save($this->request->data)) {
				$this->setFlashMessage('Usuário criado com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}
	
	public function admin_del($id=null) {
		if ($this->request->is('get') || $this->request->is('delete')) {
			if ($this->User->delete($id)) {
				$this->setFlashMessage('Usuário excluído com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}
	
	
}