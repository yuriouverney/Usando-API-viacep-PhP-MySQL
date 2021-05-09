<html>
  <meta charset=”UTF-8”>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <head>
    <title>Cadastre-se! ViaCep</title>
  </head>
  
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="./imagens/logo.png" width="25" height="25" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#"> Cadastro - ViaCep</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.html">Cadastre-se</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="https://github.com/yuriouverney/Usando-API-viacep-PhP-MySQL">Projeto GITHUB</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>

    <div id="cabeçalho">
      <h1><center><a>Bem-vindo, cadastre-se e guarde sua localidade conosco!</a></center></h1>
    </div>

    <div id="botaocadastro">
      <center>
        <a class="btn btn-dark" href="cadastrar.html" role="button">Clique aqui e cadastre-se!</a>
    </center>
      <p>
    </div>

<?php 
$username = "root"; 
$password = "senha"; 
$database = "db_contact"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tbl_contact";

echo '<center><table class="table" border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td scope="col">Nome</td> 
          <td scope="col">Cep</td> 
          <td scope="col">Rua</td> 
          <td scope="col">Bairro</td> 
          <td scope="col">Cidade</td> 
          <td scope="col">UF</td> 
          <td scope="col">IBGE</td>
      </tr></center>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
        $cep = $row["cep"];
        $rua = $row["rua"];
        $bairro = $row["bairro"];
        $cidade = $row["cidade"];
        $uf = $row["uf"];
        $ibge = $row["ibge"];

        echo '<tr> 
                  <td>'.$nome.'</td> 
                  <td>'.$cep.'</td> 
                  <td>'.$rua.'</td> 
                  <td>'.$bairro.'</td> 
                  <td>'.$cidade.'</td> 
                  <td>'.$uf.'</td> 
                  <td>'.$ibge.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>