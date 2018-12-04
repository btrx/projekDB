<?php
<<<<<<< HEAD
$connect = new mysqli("127.0.0.1","root","12345","databarang");
if (mysqli_connect_error()) {
	die ('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
};
=======
$connect = new mysqli("localhost","root","a123456","databarang");
if (mysqli_connect_error()) {
	die ('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
>>>>>>> ba3e6a85b327db6834a6e1073933e633751b9990
?>