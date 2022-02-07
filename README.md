# MYSQL Library
Mysql Library for CRUD Functions

When you do a project in php related to web, the main thing you have to came across is the management of database.This all functions including,connecting to database,retreiving values from databse,deleting,updating,inserting....etc.. so by including the library file iam providing below, you can just call that functions in your code and do all operations very fast without manually writing functions again and again:-

## How to Install?

Install the Library via composer using:-

composer require litto/mysql:v1.0

## Folder Structure

-config.php // including connection variables which will be autoloading by the Mysql libraries and classes
-autoload.php // autoload classes by declaration from libs library
-demo.php // demo on how to initilise and call each functions
-/libs // folder for saving all lib files

## How it Works?

1) Zip the package to your Website root
2) Make sure config.php, autoload.php files are in root and libs folder contains Mysql.php library file
3) Now in your file include both config an autoload files.
4) In config.php file, please update your db credentials
5) Now we have to create library files for your database tables by defining library functions extending Mysql

for eg:- If you have a cms_user table, for defining functions for DB transactions for this table define library like this.

<?php

class User extends MySql{

// Adding Record

function addrecord($inputs){
                $insert	=	array(	'name'=>$inputs['name'],'tel'=>$inputs['tel'],'email'=>$inputs['email']);
		$this->insert($insert,"cms_user");	
		return true;
	}

//Update Record

	function updateContent($inputs){
		$insert	=	array(	'name'=>$inputs['name'],'tel'=>$inputs['tel'],'email'=>$inputs['email']);
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

6) Now For calling these Function , suppose in your index.php file..

You just have to intilize it like:-

$obj=new User();
$records=$obj->getall();

or 
$record=$obj->getdetails($id);

Like this you can call, all the functions defined...

7) Make class files for all the  tables you need..




