<?php

class Question extends AppModel {

	var $actsAs = array('Containable');

	var $hasMany = array('Comment');

	var $belongsTo = array('Category');
}

?>