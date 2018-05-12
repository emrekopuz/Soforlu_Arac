<div class="w3-container w3-padding w3-card w3-gray">
  <div class="w3-row w3-padding w3-center">
    <a href="javascript:void(0)" onclick="openTab(event, 'arac');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-container w3-border-red">Araç</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'sofor');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-container">Şoförlü Araç</div>
    </a>
  </div>

  <div id="sofor" class="w3-container tabs " style="display:none">
   <?php
   include "pages/drivers.php";
   ?>
  </div>

  <div id="arac" class="w3-container tabs" style="display:true">
     <?php
	include "pages/latestcar.php";
	?>
  </div>
</div>

<script>
function openTab(evt, param) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tabs");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(param).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>