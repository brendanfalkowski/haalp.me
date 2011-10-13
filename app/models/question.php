<?php

class Question extends AppModel {

	var $hasMany = array('Comment');

	var $belongsTo = array('Category');
}

?>