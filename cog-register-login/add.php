<?php
include "core/bootstrap.inc";

if(isset($_POST['reference'])){
	session_start();
	$reference = $_POST['reference'];
	if(Session::getUID()!=""){
		print "Cargando ...";
		// acciones para usuarios logeados

///////////////
		}else {
		if($reference=="register"){
			if(count(UserData::getAllByEmail($_POST['email']))==0){
			$p = new UserData();
			$p->name = $_POST['name'];
			$p->lastname = $_POST['lastname'];
			$p->mail = $_POST['email'];
			$p->password = sha1(md5($_POST['password']));
			$p->add();
			setcookie('maillogged',$p->mail);
			print "<script>window.location='index.php?module=signin';</script>";
			}else{
			setcookie('mailexist',1);
			print "<script>window.location='index.php?module=register';</script>";

			}
		}
		// acciones para usuarios no logeados
	}
}
else if(isset($_GET['reference'])){
	session_start();
	if(Session::getUID()!=""){
		$reference = $_GET['reference'];
	}
}
else {
	echo "no hay referencia";
}

?>
