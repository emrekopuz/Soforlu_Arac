<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
		<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
		<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>
<?php

include "baglan.php";
$stmt="<div class=\"row\">";
$query=$db->query("SELECT * FROM arac where aracDurum=1",PDO::FETCH_ASSOC);
  
if($query->rowCount()){
	foreach($query as $row){
		$stmt.="<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
		<div class='txthover'>	 
				<img src=\"data:image/jpeg;base64,".base64_encode( $row['aracImg'] )."\"/>
					   <div class='txtcontent'>
						   <div class='stars'>
							   <div class='glyphicon glyphicon-star'></div>
							   <div class='glyphicon glyphicon-star'></div>
							   <div class='glyphicon glyphicon-star'></div>
						   </div>
						   <div class='simpletxt'>
							   <h3 class='name'>".$row['aracMarka']."&nbsp".$row['aracModel']."</h3>
							   <p>".$row['aracTuru']."&nbsp YIL:".$row['yil']."<br>
							   KM:	   ".$row['aracKm']."<br>
							   ".$row['aracYakitTuru']."&nbsp".$row['aracVites']."</p>
								<h4>".$row['aracFiyat']."  &#8378;</h4>
								<button>Ayrıntıları Görüntüle</button><br>
								<div class='wishtxt'>
									<p class='paragraph1'> Yorum Yap <span class='glyphicon glyphicon-heart'></span> </p>
									<p class='paragraph2'>Compare <span class='icon'><img src='image/compicon.png' alt='compicon'></span></p>		
								</div>
						   </div>
					   </div>
					   </div>
					   </div>";
	}
}
$stmt.="</div>";
echo $stmt;
?>  