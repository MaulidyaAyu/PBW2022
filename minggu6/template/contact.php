<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>Pesan: ' . $_POST['pesan'] . '</li>';
}?>