<?php 
// including the config file
include('connection.php');
$pdo = connect();
if(isset($_POST['sign'])){
if ((!empty($_POST['password']))and (!empty($_POST['user']))){
    $user=$_POST['user'];
    $password=$_POST['password'];
  if ((preg_match('/^[-a-z0-9A-Z+&@#\/%=~_|]*$/', $password) )and (preg_match('/^[-a-z0-9A-Z+&@#\/%=~_|]*$/', $user) )){
    $sql = 'SELECT * from yonetici';
    $query = $pdo->prepare($sql);
    $query->execute();
    $sql2 = 'SELECT * from hizmetalan';
    $query2 = $pdo->prepare($sql2);
    $query2->execute();
    $sql3 = 'SELECT * from hizmetveren';
    $query3 = $pdo->prepare($sql3);
    $query3->execute();
    $sql4 = 'SELECT kullaniciAdi,haKullaniciAdi,hvKullaniciAdi from yonetici,hizmetalan,hizmetveren';
    $query4 = $pdo->prepare($sql4);
    $query4->execute();
    $list=$query->fetchAll();
    $list2=$query2->fetchAll();
    $list3=$query3->fetchAll();
    $list4=$query4->fetchAll();

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

