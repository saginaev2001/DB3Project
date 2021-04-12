<?php
// Create connection to Oracle
$conn = oci_connect("system", "oracle", "localhost/orcl");
if (!$conn) {
   $m = oci_error();
   trigger_error(htmlentities($m['message'], ENT_QUOTES), E_USER_ERROR);
  echo 'con';
}

else {
   echo "";
}
?>
<table border=1 cellpadding=5><tr><td>CART ID</td><td>Product ID</td><td>Customer ID</td></tr>
<?php
    $stid = oci_parse($conn, 'SELECT * FROM cart');
    oci_execute($stid);
    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) { 
?>
<tr>
  <td><?php echo $row[0] ?></td>
  <td><?php echo $row[1] ?></td>
  <td><?php echo $row[2] ?></td>
</tr>
<?php
}
oci_free_statement($stid);
oci_close($conn);
?>
</table>
