<?php
// database connection code
if(isset($_POST['txtNome']))
{
$con = mysqli_connect('localhost', 'root', 'senha','db_contact');

// get the post records

$txtNome = $_POST['txtNome'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$ibge = $_POST['ibge'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `nome`, `cep`, `rua`, `bairro`, `cidade`, `uf`, `ibge`) VALUES ('0', '$txtNome', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$ibge')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Dados salvos no banco de dados!";
}
}
else
{
	echo "Are you a genuine visitor?";
		header("Location: cadastrar.html", TRUE, 301);
	exit();
	
}
?>
