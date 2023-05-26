<?php

include "config.php"; 

?>

<style>

.ui.dropdown {
  max-width: 400px;
}



</style>

<script src="dist/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">

<center>
<div class="ui form">
  
  <h2>
    Pour améliorer nos publicité <br>
    <span>Citez</span> votre centre d'interet
</h2>

  <div class="inline field">

    <select id="interests" multiple="" class="label ui selection fluid dropdown" style="font-size: 20px">
    	<option value="">Tous</option>
    	<?php
    	$sql_int = $conn->query("SELECT * FROM ads_interests ORDER BY id");
    	while($row_int = $sql_int->fetch_assoc())
    	{
    		echo '<option value="'.$row_int['description'].'">'.$row_int['description'].'</option>';
    	}

    	?>

    </select>
  </div>
  
   
</div>
<br><br>

<a href="javascript:void(0)" onclick="interests_sub()">Continuer</a>
</center>



<script>

$('.label.ui.dropdown')
  .dropdown()




 function interests_sub()
 {
 	 let interests = $('#interests').val();
 	 document.getElementById("ad_interest").value = interests;
 	 question(1);
 }

</script>