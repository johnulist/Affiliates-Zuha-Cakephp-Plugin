<?php
class AffiliatesController extends AppController {

	public $name = 'Affiliates';
	public $uses = 'Affiliates.Affiliate';

	function index() {
		$this->Affiliate->recursive = 0;
		$this->set('affiliates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid affiliate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Affiliate->contain('ParentAffiliate', 'ChildAffiliate', 'User');
		$this->set('affiliate', $this->Affiliate->read(null, $id));
	}

	function add() {
		if (!empty($this->request->data)) {
			$this->Affiliate->create();
			if ($this->Affiliate->save($this->request->data)) {
				$this->Session->setFlash(__('The affiliate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate could not be saved. Please, try again.', true));
			}
		}
		$parents = $this->Affiliate->ParentAffiliate->find('list');
		$users = $this->Affiliate->User->find('list');
		$this->set(compact('parents', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->request->data)) {
			$this->Session->setFlash(__('Invalid affiliate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if ($this->Affiliate->save($this->request->data)) {
				$this->Session->setFlash(__('The affiliate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->Affiliate->read(null, $id);
		}
		$parents = $this->Affiliate->ParentAffiliate->find('list');
		$users = $this->Affiliate->User->find('list');
		$this->set(compact('parents', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for affiliate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Affiliate->delete($id)) {
			$this->Session->setFlash(__('Affiliate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Affiliate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>