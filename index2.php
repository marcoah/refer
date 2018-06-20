<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 7/1/2017
 * Time: 11:15 PM
 */
?>

<html>
<head>
<title>Paginar Resultados</title>
<script type="text/javascript" src="ajax.js"></script>
<style>
td{
    width:200px;
}
a{
    text-decoration:underline;
 cursor:pointer;
}
</style>
</head>
<body>
<div style="margin:auto;width:500px;text-align:center;">
 <table border="1px">
  <tr>
      <td>NPRO</td>
      <td>DPRO</td>
      <td>BNPC</td>
      <td>FECHA</td>
  </tr>
 </table>
 <div id="contenido">
  <?php include('paginador.php')?>
</div>
</div>
</body>
</html>