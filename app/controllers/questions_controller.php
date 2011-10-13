<?php

class QuestionsController extends AppController {

	var $components = array('Cookie');

	/**
	 * initializes anonymous uuid
	 */
	function beforeFilter() {
		if (!$this->Cookie->read('author')) {
			$this->Cookie->write('author', String::uuid());
		}
		
		$mycount = $this->Question->find('count', array('conditions' => array(
			'author' => $this->Cookie->read('author')
		)));
		$this->set(compact('mycount'));
	}

	/**
	 * generates object hash
	 */
	function _hash($str) {
		return hash('crc32', $str . 'dirty');
	}

	/**
	 * adds a new haalp
	 */
	function add() {
		if ($this->data) {
			$this->data['Question']['author'] = $this->Cookie->read('author');
			$this->data['Question']['hash'] = $this->_hash($this->data['Question']['question']);
			$this->data['Question']['expiry'] = date('Y-m-d H:i:s', strtotime($this->data['Question']['expiry']));
			if ($this->Question->save($this->data)) {
				$this->Session->SetFlash('Successfully added question');
				$this->redirect('/questions/view/' . $this->Question->id . '/' . $this->data['Question']['hash']);
			} else {
				$this->Session->SetFlash('Failed to save question', null, null, 'error');
			}
		}
		$expires = array(
			'+48 hours'   => '48 Hours',
			'+24 hours'   => '24 Hours',
			'+6 hours'    => '6 Hours',
			'+1 hour'     => '1 Hour',
			'+14 minutes' => '14 minutes'
		);
		
		$categories = $this->Question->Category->find('list');
		$questions = $this->Question->find('all', array(
			'conditions' => array('expiry >= NOW()'),
			'order' => 'expiry'
		));
		
		$this->set(compact('expires', 'questions', 'categories'));
	}

	/**
	 * displays full feed of questions
	 */
	function index() {
		$conditions = array();
		if ($this->data) {
			if (!empty($this->data['Search']['text'])) {
				$text = $this->data['Search']['text'];
				$conditions[] = "question LIKE '%$text%'";
			}
			if (!empty($this->data['Search']['category_id'])) {
				$conditions['category_id'] = $this->data['Search']['category_id'];
			}
			
		}
		$questions = $this->Question->find('all', compact('conditions'));
		$categories = $this->Question->Category->find('list');
		$this->set(compact('questions', 'categories'));
	}

	/**
	 * shows a list of a user's questions
	 */
	function mine() {
		$questions = $this->Question->findAllByAuthor($this->Cookie->read('author'));
		$this->set(compact('questions'));
	}

	/**
	 * view existing help
	 */
	function view($id = null, $hash = null) {
		if (!$id) {
			$this->redirect('/');
		}
		$question = $this->Question->findById($id);
		if ($hash) {
			if ($hash != $question['Question']['hash']) {
				$this->redirect('/');
			}
		}
		$questions = $this->Question->find('all', array(
			'conditions' => array(
				'expiry >= NOW()',
				'Question.id !=' => $id
			)
		));
		$author = $this->Cookie->read('author');
		$this->set(compact('question', 'author', 'hash', 'questions'));
	}

}

?>