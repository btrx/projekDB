<?php
$connect = new mysqli("localhost","root","a123456","databarang");
if (mysqli_connect_error()) {
	die ('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
?>