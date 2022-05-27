
<?php 
if (isset($_POST['ok'])) {
$name =  $_POST [ "name" ];
$family =  $_POST [ "family" ];
echo "Привет,".$name." ".$family."<br>";
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">

  <div>Имя</div>
  <input type="text" name="name" required="required">
  <div>Фамилия</div>
  <input type="text" name="family" required="required">
  <input type="submit"  name="ok" value="ok" >
</form>


