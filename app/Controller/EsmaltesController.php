<?php
class EsmaltesController extends AppController {
	
	public $uses = array('Esmalte');

	public $paginate = array(
		'limit' => 20,
		'paramType' => 'querystring',
		'order' => array(
			'Esmalte.created' => 'DESC'
		)
	);
	public function admin_index() {
		$this->Tipo->recursive = 0;
		$this->set('esmaltes', $this->paginate('Esmalte'));
		

	}

	public function admin_add() {
		if ($this->request->is('post') && !empty($this->request->data)) {
			if ($this->Tipo->save($this->request->data)) {
				$this->setFlashMessage('Celebração criada com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}
	

	public function admin_del($id=null) {
		if ($this->request->is('get') || $this->request->is('delete')) {
			if ($this->Tipo->delete($id)) {
				$this->setFlashMessage('Celebração excluída com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}

	public function admin_edit($id=null) {
		$this->Tipo->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Tipo->read();
			
		} else {
			
			if ($this->Tipo->save($this->request->data)) {
				$this->setFlashMessage('Celebração alterada com sucesso!', 'success', array('action' => 'index'));
			} else {
				$this->setFlashMessage('Não foi possível alterar, tente novamente!', 'error');
			}
		}
	}

	public function admin_search() {
		$this->autoRender = false;
		$conditions = null;
		if (isset($this->request->query['search']) && !empty($this->request->query['search'])) {
			$conditions[] = array(
				'OR' => array(
					'Esmalte.nome LIKE' => '%' . $this->request->query['search'] . '%'
					
				)
			);
			$this->paginate['conditions'] = $conditions;
			$this->set('esmaltes', $this->paginate('Esmalte'));
			$this->render('admin_index');
		}
	}

	public function view($id = null) {

		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		$this->Tipo->contain('Tema');
		$this->set('tipo', $this->Tipo->read(null, $id));
	}

	public function admin_tipo_tema($tipo_id=null) {
		
		$this->set('list_temas', $this->TipoTema->find('list' , array('fields'=>array('TipoTema.id','TipoTema.nome')) ));
		
		if ($this->request->is('post')){ 
			
			$this->request->data['Tema']['tipo_id'] = $tipo_id;
			if($this->Tema->save($this->data)){
				
				$this->setFlashMessage('Tema adicionado com sucesso!', 'success', array('action' => 'index'));

			}
		}
		
	}
	/*
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('create', 'contato');
	}
	
	public function admin_login() {
		if ($this->Auth->user()) {
			return $this->redirect($this->Auth->redirect());
		}
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->setFlashMessage('Login inválido', 'error');
			}
		}
	}
	
	public function admin_search() {
		$this->autoRender = false;
		$conditions = null;
		if (isset($this->request->query['search']) && !empty($this->request->query['search'])) {
			$conditions[] = array(
				'OR' => array(
					'User.name LIKE' => '%' . $this->request->query['search'] . '%',
					'User.email LIKE' => '%' . $this->request->query['search'] . '%'
				)
			);
			$this->paginate['conditions'] = $conditions;
			$this->set('users', $this->paginate('User'));
			$this->render('admin_index');
		}
	}
	
	public function admin_logout() {
		$this->redirect($this->Auth->logout());
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
	
	
	public function create() {
		$this->autoRender = false;
		if ($this->User->save(array('name' => 'Mkt Virtual', 'email' => 'mktvirtual@mktvirtual.com.br', 'password' => '123456', 'cpassword' => '123456'))) {
			$this->setFlashMessage('Usuário adicionado com sucesso!', 'success', array('admin' => true, 'controller' => 'users', 'action' => 'login'));
		}
	}
	
	public function contato() {
		if (!empty($this->request->data)) {
			$this->User->contato($this->request->data);
		}
	}*/
}