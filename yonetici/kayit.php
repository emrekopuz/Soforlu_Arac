<?php 
// including the config file
include('baglan.php');
$pdo = connect();
if(isset($_POST['save'])){
if ((!empty($_POST['name']))and (!empty($_POST['surname']))and (!empty($_POST['password']))and (!empty($_POST['user']))){
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $user=$_POST['user'];
    $password=$_POST['password'];
  if ((preg_match('/^[a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $name) )and (preg_match('/^[a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $surname) )and (preg_match('/^[-a-z0-9+&@#\/%=~_|ıİüÜşŞçÇğĞöÖ]*$/', $password) )and (preg_match('/^[0-9a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $user) )){
    $sql = 'INSERT INTO yonetici(kullaniciAdi,sifre,ad,soyAd) VALUES(:kullaniciAdi,:sifre,:ad,:soyAd)';
    $query = $pdo->prepare($sql);
    $query->bindParam(':kullaniciAdi', $user, PDO::PARAM_STR);
	$query->bindParam(':sifre', $password, PDO::PARAM_STR);
	$query->bindParam(':ad', $name, PDO::PARAM_STR);
    $query->bindParam(':soyAd', $surname, PDO::PARAM_INT);
    $query->execute();
  } else {
      echo '<h1>';
      echo 'Please input right variable';
      echo '</h1>';
  }
}else{
    echo '<h1>';
      echo 'boş yer bırakma ';
      echo '</h1>';
}
}
?>

