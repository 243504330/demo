<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class IndexModel extends RelationModel{
	protected $_link = array(
		'guest'=>array(
			'mapping_type'=>self::HAS_MANY,
			'class_name'=>'guest',
			'foreign_key'=>'sid',
			'mapping_name'=>'person',
		)		
	)
}