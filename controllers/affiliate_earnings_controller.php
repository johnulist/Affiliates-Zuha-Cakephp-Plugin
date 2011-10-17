<?php
class AffiliateEarningsController extends AffiliatesAppController {

	var $name = 'AffiliateEarnings';

	function index() {
		$this->AffiliateEarning->recursive = 0;
		$this->set('affiliateEarnings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid affiliate earning', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('affiliateEarning', $this->AffiliateEarning->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AffiliateEarning->create();
			if ($this->AffiliateEarning->save($this->data)) {
				$this->Session->setFlash(__('The affiliate earning has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate earning could not be saved. Please, try again.', true));
			}
		}
		$affiliateds = $this->AffiliateEarning->Affiliated->find('list');
		$affiliates = $this->AffiliateEarning->Affiliate->find('list');
		$creators = $this->AffiliateEarning->Creator->find('list');
		$modifiers = $this->AffiliateEarning->Modifier->find('list');
		$this->set(compact('affiliateds', 'affiliates', 'creators', 'modifiers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid affiliate earning', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliateEarning->save($this->data)) {
				$this->Session->setFlash(__('The affiliate earning has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate earning could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliateEarning->read(null, $id);
		}
		$affiliateds = $this->AffiliateEarning->Affiliated->find('list');
		$affiliates = $this->AffiliateEarning->Affiliate->find('list');
		$creators = $this->AffiliateEarning->Creator->find('list');
		$modifiers = $this->AffiliateEarning->Modifier->find('list');
		$this->set(compact('affiliateds', 'affiliates', 'creators', 'modifiers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for affiliate earning', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliateEarning->delete($id)) {
			$this->Session->setFlash(__('Affiliate earning deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Affiliate earning was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->AffiliateEarning->recursive = 0;
		$this->set('affiliateEarnings', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid affiliate earning', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('affiliateEarning', $this->AffiliateEarning->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AffiliateEarning->create();
			if ($this->AffiliateEarning->save($this->data)) {
				$this->Session->setFlash(__('The affiliate earning has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate earning could not be saved. Please, try again.', true));
			}
		}
		$affiliateds = $this->AffiliateEarning->Affiliated->find('list');
		$affiliates = $this->AffiliateEarning->Affiliate->find('list');
		$creators = $this->AffiliateEarning->Creator->find('list');
		$modifiers = $this->AffiliateEarning->Modifier->find('list');
		$this->set(compact('affiliateds', 'affiliates', 'creators', 'modifiers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid affiliate earning', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliateEarning->save($this->data)) {
				$this->Session->setFlash(__('The affiliate earning has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The affiliate earning could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliateEarning->read(null, $id);
		}
		$affiliateds = $this->AffiliateEarning->Affiliated->find('list');
		$affiliates = $this->AffiliateEarning->Affiliate->find('list');
		$creators = $this->AffiliateEarning->Creator->find('list');
		$modifiers = $this->AffiliateEarning->Modifier->find('list');
		$this->set(compact('affiliateds', 'affiliates', 'creators', 'modifiers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for affiliate earning', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliateEarning->delete($id)) {
			$this->Session->setFlash(__('Affiliate earning deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Affiliate earning was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>