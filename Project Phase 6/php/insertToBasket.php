<form method="post">
          <input type="submit" name="test" id="test" class="hof" value="Sure?" /><br/>
        </form>


<?php
if(array_key_exists('test', $_POST)) { 
            button1();
            button2();
             }

function button1() { 
$conn = oci_connect('system', 'oracle', 'localhost/orcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$p1 = 11;
$p2 = 2;
$p3 = 2;

$stim = oci_parse($conn, 'begin add_cart(:p1,:p2,:p3); end;');
oci_bind_by_name($stim, ':p1', $p1);
oci_bind_by_name($stim, ':p2', $p2);
oci_bind_by_name($stim, ':p3', $p3);

oci_execute($stim);

oci_free_statement($stim);
oci_close($conn);
}
function button2() { 

echo "<meta http-equiv='refresh' content='0;Catalog.php' />";
}

    ?>