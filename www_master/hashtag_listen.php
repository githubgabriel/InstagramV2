<?php

require "BASEV2/basev2.php";

getBaseV2("php");

getBaseV2("javascript");


use base\instagramv2\instagramv2;


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>InstagramV2</title>

    <link rel="stylesheet" href="css/site.css" type="text/css" />

    <? getPluginJS("Jquery"); ?>

    <? getPluginJS("BootStrap"); ?>

    <? include_JS("js/site.js"); ?>



</head>
<body>

<? $mi = "hashtag_listen"; require("require/menu.php");?>


<div class="container">


<!-- Single button -->
<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Ação <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#">Ligar </a></li>
        <li><a href="#">Desligar</a></li>
    </ul>
</div>


<table class="table">
    <thead>
    <tr>
        <th width="25">  <input type="checkbox" id="check" name="check[]" value="1" />  </th>
        <th width="60">Id</th>
        <th># HashTag</th>
        <th width="230">Data Inicio</th>
        <th width="230">Data Fim </th>
        <th width="140"> Qtd Imagens</th>
        <th width="150"> Cron Status </th>
    </tr>
    </thead>
    <tbody>
    <tr class="success">
        <th> <input type="checkbox" id="check" name="check[]" value="1" /></th>
        <th scope="row">1</th>
        <td>#dilma</td>
        <td>10/08/1993 10:32</td>
        <td> -- </td>
        <td align="center"> 127 </td>
        <td align="center">  <b style="color:green;">Ligado</b> </td>
    </tr>

    <tr class="danger">
        <th> <input type="checkbox" id="check" name="check[]" value="1" /></th>

        <th scope="row">1</th>
        <td>#cocacola</td>
        <td>10/08/1993 10:32</td>
        <td> 11/08/1993 22:32 </td>
        <td align="center"> 127 </td>
        <td align="center">  <b style="color:red;">OFF</b> </td>
    </tr>

    </tbody>

</table>

    </div>

<? require "require/rodape.php"; ?>
</body>
</html>