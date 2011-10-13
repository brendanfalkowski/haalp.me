<?php

class CommentsController extends AppController {

	var $uses = array('Comment', 'Vote');

	var $components = array('Cookie');

	/**
	 * adds a comment to the database
	 */
	function add() {
		if ($this->data) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash('Successfully added comment');
			} else {
				$this->Session->SetFlash('Failed to add comment');
			}
		}
		$this->redirect($this->referer());
	}

	/**
	 * allows a user to vote a comment up/down
	 */
	function vote($id = null, $dir = 'up') {
		if (!$id) {
			$this->redirect($this->referer());
		}
		
		switch ($dir) {
			case 'up':
				$value = 1;
				break;
			case 'down':
				$value = -1;
				break;
			default:
				$value = 1;
		}

		$comment = $this->Comment->findById($id);		
		$comment['Comment']['votes'] = $comment['Comment']['votes'] + $value;
		
		$conditions = array(
			'comment_id' => $id,
			'author'     => $this->Cookie->read('author')
		);
		$vote = $this->Vote->find('first', array('conditions' => $conditions));
		if ($vote) {
			$this->redirect($this->referer());
		}

		$this->Vote->save(array(
			'value'      => $value,
			'comment_id' => $id,
			'author'     => $this->Cookie->read('author')
		));
		
		if ($this->Comment->save($comment)) {
			$this->Session->setFlash('Successfully voted');
		} else {
			$this->Session->SetFlash('Failed to vote');
		}
		$this->redirect($this->referer());
	}
}