<?php

class User extends MySql{

// Adding Record

function addrecord($inputs){
                $insert	=	array('name'=>$inputs['name'],'tel'=>$inputs['tel'],'email'=>$inputs['email']);
		$this->insert($insert,"cms_user");	
		return true;
	}

//Update Record

	function updateContent($inputs){
		$insert	=	array('name'=>$inputs['name'],'tel'=>$inputs['tel'],'email'=>$inputs['email']);
		$this->update($insert,"cms_user",'`id`='.$inputs['id']);
		return true;
	}

//Get all records

	function getall(){
		$query	=	'SELECT * FROM `cms_user` ';
		$rec	=	$this->fetchAll($query);
		return $rec;
	}

//Get details of Record

function getrecord($id){
		$query	=	'SELECT * FROM `cms_user` WHERE `id`='.$id.' ';
		$rec	=	$this->fetchAll($query);
		return $rec;
	}

//Delete record

function deleterecord($id){
$this->delete('cms_user','`id`='.$id);
}


}
?>
