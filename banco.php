<?php
if(isset(isset($_POST['nome'])|| isset($_POST['idade'] || $_POST['tamanho']) || isset($_POST['peso']))){

    
    if(strlen($_POST['nome'])== 0 ){
            echo "Preencha seu nome!<br>";}
    if(strlen($_POST['idade'])== 0 ){
            echo "Preencha sua idade!<br>";}
    if(strlen($_POST['tamanho'])== 0 ){
                echo "Preencha seu tamanho!<br>";}
    if(strlen($_POST['peso'])== 0 ){
                echo "Preencha sua idade!<br>";}
        
    }


if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tamanho = $_POST['tamanho'];
    $peso = $_POST['peso'];
  

    $result = mysqli_query($conexao, "INSERT INTO IMC(imc_name, imc_idade, imc_tamanho, imc_peso)
    VALUES('$nome','$idade','$tamanho','$peso')");
}


require_once('index.html')
?>