<!DOCYMENT HTML>
<HTML>
<HEAD>
<BODY>
<form action="" method="POST">
	<input type="text" name="fio" placeholder="Иванов Иван Иванович"/>
	<input type="submit" value="Отправить"/>
</form>

<?php
if(isset($_POST['fio'])){
	$fio = explode(" ", $_POST['fio']);
	$family = $fio[0];
	$name = substr($fio[1], 0, 1).".";
	$otchestvo = substr($fio[2], 0, 1).".";

	echo "Ф.И.О: ".$family." ".$name." ".$otchestvo;
}
?>
</BODY>
</HEAD>
</HTML>