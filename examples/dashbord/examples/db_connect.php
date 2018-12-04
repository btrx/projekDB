<?php
$connect = new mysqli("127.0.0.1","root","12345","databarang");
if (mysqli_connect_error()) {
	die ('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
};
?>