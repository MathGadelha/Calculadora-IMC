<?php


    require_once __DIR__ . 'config.php'

$tns = "(DESCRIPTION = 
(ADDRESS LIST=
  (ADDRESS =
      (PROTOCOL=TCP)
      (HOST=" . DB_SERVER . ")
      (PORT=" . DB_PORT . ")
      )
    )
(CONNECT_DATA=
  (SERVER=DEDICATED)
  (SERVICE_NAME=" . TNS_NAMES . ")
  )
)";

try{
  $pdo = new PDO('oci:db_name=' . $tns, USER, PASS);
  $pdo -> setAttribute(PDO:: ATTR_CASE, PDO:: CASE_LOWER);
  $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  echo 'Connection is complete!'
}catch (PDOException $e) {
  die($e -> getMessage());
}

$query = $pdo->query('SELECT * FROM IMC')
$rows = $query->fetchAll(PDO::FECTH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="teste" >
    <div class="fundo">
        <div class="area-logo">
           <span class="logo">IMC</span> CALCULATOR
        </div> 
        <form action="banco.php" method="POST"></form>
    <div class="principal">
        <div class="calculadora">
            Seu nome:
           <br>
            <input id="nome" type="text">
              <br><br>
              Sua idade:
           <br>
            <input id="idade" type="number">
              <br><br>
           Sua altura(cm):
           <br>
            <input id="tam" type="number">
              <br><br>
            Seu peso(kg):
            <br>
            <input id="peso" type="number">
            <br><br>
            <button class="button" type="submit" onclick="calculo()">calcular ></button>
        </div>
        <div class="tabela">
            Tabela de IMC (Índice de massa corpórea)       
        <table>
            <tr>
                <th>IMC</td>
                <th>Classificação</td>
                <th>Obesidade(GRAU)</td>
            </tr>
            <tr>
                <td>MENOR QUE 18,5</td>
                <td>Abaixo do peso</td>
                <td>0</td>
            </tr>
            <tr>
                <td>ENTRE 18,5 E 24,9</td>
                <td>Normal</td>
                <td>0</td>
            </tr>
            <tr>
                <td>ENTRE 25,0 E 29,9</td>
                <td>Sobrepeso</td>
                <td>I</td>
            </tr>
            <tr>
                <td>ENTRE 30,0 E 39,9</td>
                <td>Obesidade</td>
                <td>II</td>
            </tr>
            <tr>
                <td>MAIOR QUE 40,0</td>
                <td>Obesidade Grave</td>
                <td>III</td>
            </tr>
            
            
        </table>
        </div>
        <div id="foto-peso">
            <img src="tabela-imc.jpg" width="600px" >
        </div>
        </div>
    </div>
    <script src="calculo.js"></script>
    
</body>

</html>