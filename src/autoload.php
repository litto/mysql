<?php
	
	date_default_timezone_set("Asia/Calcutta");
	define("CONST_BASEDIR",dirname(__FILE__));
	define('CONST_LIBRARY_FOLDER',CONST_BASEDIR.'/libs');
	$_SESSION['CONST_BASEDIR']=CONST_BASEDIR;
error_reporting(E_ALL & ~ E_NOTICE);
function __autoload($className){
		
		if(!class_exists($className)){
			$parts	=	explode("_",$className);			
			if(count($parts)==1){
				$folder	=	CONST_LIBRARY_FOLDER."/".$className.".php";
			}else{
				$folder	=	CONST_LIBRARY_FOLDER."/";
				for($i=0;$i<count($parts)-1;$i++){
					$folder.=	strtolower($parts[$i]);					
					$folder.="/";					
				}
				$folder.=$parts[count($parts)-1].".php";

			}			
			include_once($folder);
		}
	}
?>
