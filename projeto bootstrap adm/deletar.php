<?php
	if(isset($_POST['id_membro'])){
	 $pdo = new PDO('mysql:host=localhost;dbname=','root','');
	 $sql = $pdo->prepare("DELETE FROM `tb_funcionarios` WHERE id = ?");
	 $sql->execute(array($_POST['id_membro']));
	}
?>