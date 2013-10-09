<?php
class BtnsController extends AppController {
	public $uses = array('Btn','BtnTipo','Tipo');

	public $paginate = array(
		'limit' => 20,
		'paramType' => 'querystring',
		'order' => array(
			'Btn.created' => 'DESC'
		)
	);

	

	
	public function admin_index() {
		$this->set('btns', $this->paginate('Btn'));

	}

	public function admin_add() {
		
		if ($this->request->is('post') && !empty($this->request->data)) {

			if ($this->Btn->save($this->request->data)) {
				$this->setFlashMessage('Botão criado com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}

	public function admin_edit($id=null) {
		$this->Btn->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Btn->read();
			
		} else {
			
			if ($this->Btn->save($this->request->data)) {
				$this->setFlashMessage('Botão alterado com sucesso!', 'success', array('action' => 'index'));
			} else {
				$this->setFlashMessage('Não foi possível alterar, tente novamente!', 'error');
			}

		}
	}

	
	

	public function admin_del($id=null) {
		if ($this->request->is('get') || $this->request->is('delete')) {
			if ($this->Btn->delete($id)) {
				$this->setFlashMessage('Botão excluído com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}

	public function admin_search() {
		$this->autoRender = false;
		$conditions = null;
		if (isset($this->request->query['search']) && !empty($this->request->query['search'])) {
			$conditions[] = array(
				'OR' => array(
					'Btn.nome LIKE' => '%' . $this->request->query['search'] . '%',
					'Btn.descricao LIKE' => '%' . $this->request->query['search'] . '%'
				)
			);
			$this->paginate['conditions'] = $conditions;
			$this->set('btns', $this->paginate('Btn'));
			$this->render('admin_index');
		}
	}

	public function admin_btn_tipo($id=null){
		$this->set('list_tipos', $this->Tipo->find('list' , array('fields'=>array('Tipo.id','Tipo.nome')) ));
		
		if ($this->request->is('post')){ 
			
			$this->request->data['BtnTipo']['btn_id'] = $id; 

			if($this->BtnTipo->save($this->data)){
				
				$this->setFlashMessage('Celebracao adicionado com sucesso!', 'success', array('action' => 'index'));

			}
			debug($this->data);
		}
	}	
	
	
}