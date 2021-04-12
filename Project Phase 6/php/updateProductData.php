<form>
  <input type="number" name="num1">
  <input type="number" name="num2">
  <input type="submit">
</form>
<a href="http://localhost/tasks/admin.html">BACK</a>
<?php 
if (isset($_GET['num1'])){
            button1(); } 
function button1() { 
$conn = oci_connect('system', 'oracle', 'localhost/orcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$p1 = $_GET['num1'];
$p2 = $_GET['num2'];

$stim = oci_parse($conn, 'begin upd_products(:p1,:p2); end;');
oci_bind_by_name($stim, ':p1', $p1);
oci_bind_by_name($stim, ':p2', $p2);

oci_execute($stim);

oci_free_statement($stim);
oci_close($conn);
}
	

?>