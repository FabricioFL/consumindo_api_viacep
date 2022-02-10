<?php

error_reporting(E_ALL ^ E_WARNING);

include_once '../services/viaCepService.php';
$cepin = $_POST['cep'];
$cepout = viaCepService::getCep($cepin);
$cidade = $cepout['localidade'];


if(isset($_POST['cep']) && $cidade != false)
{
    echo "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Pesquisar CEP</title>
            <link rel='shortcut icon' href='images/fav.png' type='image/x-icon'>
            <link rel='stylesheet' href='css/style.css'>
            <link rel='stylesheet' href='css/reset.css'>
        </head>
        <body>
            <form method='POST' class='form_cep'>
                <input type='cep' name='cep' id='cep' class='cep_info' placeholder='Digite o CEP'  required>
                <input type='submit' value='Pesquisar' class='btn_submit'>
            </form>
            <p class='result'>$cidade</p>
        </body>
        </html>"
    ;
}else if(isset($_POST['cep']) && $cidade == false)
{
    echo "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Pesquisar CEP</title>
            <link rel='shortcut icon' href='images/fav.png' type='image/x-icon'>
            <link rel='stylesheet' href='css/style.css'>
            <link rel='stylesheet' href='css/reset.css'>
        </head>
        <body>
            <form method='POST' class='form_cep'>
                <input type='cep' name='cep' id='cep' class='cep_info' placeholder='Digite o CEP' \ required>
                <input type='submit' value='Pesquisar' class='btn_submit'>
            </form>
            <p class='result'>O cep informado não é válido!</p>
        </body>
        </html>"
    ;
}else{
    echo "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Pesquisar CEP</title>
            <link rel='shortcut icon' href='images/fav.png' type='image/x-icon'>
            <link rel='stylesheet' href='css/style.css'>
            <link rel='stylesheet' href='css/reset.css'>
        </head>
        <body>
            <form method='POST' class='form_cep'>
                <input type='cep' name='cep' id='cep' class='cep_info' placeholder='Digite o CEP' required>
                <input type='submit' value='Pesquisar' class='btn_submit'>
            </form>
        </body>
        </html>"
    ;
}