<html>
<head>
<style>
html, body
{
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
body {
  line-height: 1;
}
body {
  font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}
.container {
  margin: 80px auto;
  width: 640px;
}
</style>
<body>
<h1>Выберите форму заполнения</h1>
<form action="form.php" method="post">
<button class="btn btn-success" name="do_login" type="submit"><a href="Form children.php">Форма детей</a></button>
</form>
<form action="form.php" method="post">
<button class="btn btn-success" name="do_login" type="submit"><a href="Parents form.php">Форма родители</a></button>
</form>
<form action="form.php" method="post">
<button class="btn btn-success" name="do_login" type="submit"><a href="Form general.php">Форма общие</a></button>
</form>
</head>
</body>
</html>