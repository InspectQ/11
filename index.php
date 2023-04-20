<?php
    $A = 0;
    $B = 0;
    $A1 = 0;
    $B1 = 1;
    $A2 = 1;
    $B2 = 0;
    $A3 = 1;
    $B3 = 1;

?>   
<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />
  <meta charset="utf-8">
  <title>Тег table</title>
 </head> 
 <body>
  <table>
   <tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>

   <tr>
    <td><?php echo $A;?></td>
    <td><?php echo $B;?></td>
    <td><?php echo !$A;?></td>
    <td><?php  var_export($A || $B);?></td>
    <td><?php var_export ($A && $B);?></td>
    <td><?php var_export ($A xor $B);?></td>
</tr>
   <tr>
    <td><?php echo $A1;?></td
    ><td><?php echo $B1;?></td>
    <td><?php echo !$A1;?></td>
    <td><?php  var_export($A1 || $B1);?></td>
    <td><?php  var_export($A1 && $B1);?></td>
    <td><?php  var_export($A1 xor $B1);?></td>
</tr>
   <tr>
    <td><?php echo $A2;?></td>
    <td><?php echo $B2;?></td>
    <td><?php echo !$A2;?></td>
    <td><?php  var_export($A1 || $B1);?></td>
    <td><?php  var_export($A1 && $B1);?></td>
    <td><?php  var_export($A1 xor $B1);?></td>
</tr>
   <tr>
    <td><?php echo $A3;?></td>
    <td><?php echo $A3;?></td>
    <td><?php echo !$A3;?></td>
    <td><?php  var_export($A3 || $B3);?></td>
    <td><?php  var_export($A3 && $B3);?></td>
    <td><?php  var_export($A3 xor $B3);?></td>
</tr>
  </table>
 </body>
</html>
