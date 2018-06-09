<?php 
// including the config file
include('baglan.php');
$pdo = connect();
if(isset($_POST['save'])){
if ((!empty($_POST['name']))and (!empty($_POST['surname']))and (!empty($_POST['password']))and (!empty($_POST['user']))and (!empty($_POST['phone']))and (!empty($_POST['gender']))and (!empty($_POST['number']))and (!empty($_POST['addr']))and (!empty($_POST['age']))){
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $age = $_POST['age'];
    $addr=$_POST['addr'];
    $gender=$_POST['gender'];
    $number=$_POST['number'];
    $phone=$_POST['phone'];
  if ((preg_match('/^[a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $name) )and (preg_match('/^[a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $surname) )and (preg_match('/^[-a-z0-9+&@#\/%=~_|ıİüÜşŞçÇğĞöÖ]*$/', $password) )and (preg_match('/^[0-9a-zA-ZıİüÜşŞçÇğĞöÖ]*$/', $user) )and(preg_match('/^[a-zA-Zı]*$/', $gender) )and (preg_match('/^[0-9a-zA-Z+&@#\/%=~_| ıİüÜşŞçÇğĞöÖ]*$/', $addr) )and (preg_match('/^[0-9]*$/', $age) )and (preg_match('/^[0-9]*$/', $number) )and (preg_match('/^[0-9]*$/', $phone) )){
    $sql = 'INSERT INTO hizmetalan(haKullaniciAdi,sifre,ad,soyAd,yas,telefon,adres,cinsiyet) VALUES(:haKullaniciAdi,:sifre,:ad,:soyAd,:yas,:telefon,:adres,:cinsiyet)';
    $sql2 = 'INSERT INTO ehliyet(ehliyetNo) VALUES(:ehliyetNo)';
    $query = $pdo->prepare($sql);
    $query2 = $pdo->prepare($sql2);
    $query->bindParam(':haKullaniciAdi', $user, PDO::PARAM_STR);
	$query->bindParam(':sifre', $password, PDO::PARAM_STR);
	$query->bindParam(':ad', $name, PDO::PARAM_STR);
    $query->bindParam(':soyAd', $surname, PDO::PARAM_INT);
    $query->bindParam(':yas', $age, PDO::PARAM_STR);
	$query->bindParam(':adres', $addr, PDO::PARAM_STR);
	$query->bindParam(':telefon', $phone, PDO::PARAM_STR);
    $query2->bindParam(':ehliyetNo', $number, PDO::PARAM_INT);
    $query->bindParam(':cinsiyet', $gender, PDO::PARAM_INT);
    $query->execute();
    $query2->execute();

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

