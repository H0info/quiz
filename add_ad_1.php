<?php
include "config.php";
?>
<style>
input[type="file"] {
    display: none;
}
.file_label {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 12px 12px;
    cursor: pointer;
}
</style>
<?php
if(isset($_SESSION['id'])) echo '<input id="user" value="'.$_SESSION['id'].'">';
?>
<div class="ui  segment wow fadeInLeft">
  <div class="ui two column very relaxed stackable grid">
    <div class="column">
      <div class="ui form">
        <div class="field">
          <label>Votre société</label>
          <div class="ui left icon input">
            <input type="text" id="titre" placeholder="Nom de la société">
            <i class="info icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Description</label>
          <div class="ui left icon input">
            <input type="text" id="description" placeholder="A propos de votre produits ou société">
            <i class="tags icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Lien de votre siteweb</label>
          <div class="ui left icon input">
            <input type="text" id="link" placeholder="www.siteweb.fr">
            <i class="globe icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Intêret</label>
          <div class="ui left icon input">
            <select id="select" id="ad_group">
              <option value="">Interêt de publicité</option>
              <?php
              $sql_int = $conn->query("SELECT * FROM ads_interests ORDER BY id DESC");
              while ($row_int = $sql_int->fetch_assoc())
              {
                echo '<option value="'.$row_int['description'].'">'.$row_int['description'].'</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <div class="field">
          <label>Image</label>
          <div class="ui left icon input">
            <form method="post" id="fileinfo" name="fileinfo" action="javascript:void(0)" onchange="submit_ad_img()">
                <label for="img" class="file_label">Selectinnez une image &nbsp;&nbsp;&nbsp;<i class="cloud upload icon"></i></label>
              <input type="file" name="file" id="img" />
          </form>
          </div>
        </div>
        <div class="field">
          <label>Vidéo</label>
          <div class="ui left icon input">
            <form method="post" id="video_ad_info" name="video_ad_info" action="javascript:void(0)" onchange="submit_ad_video()">
                <label for="video" class="file_label">Selectinnez une vidéo &nbsp;&nbsp;&nbsp;<i class="cloud upload icon"></i></label>
            <input type="file" name="file" id="video" /> 
          </form>
          </div>
        </div>
        <div class="field">
          <label>Nombre de vue requis</label>
          <div class="ui left icon input" style="width: 20%; ">
            <input type="number" id="req_views" placeholder="100">
            <i class="eye icon"></i>
          </div>
        </div>
        <input id="image_info" value="" hidden>
        <input id="video_info" value="" hidden>

        <div class="evviede-venir-title" style="padding: 15px;">
          <a href="#" onclick="admin_ads()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
            <a href="javascript:void(0)" onclick="add_this_ad()">Ajouter la pub</a>
        </div>
      </div>
    </div>
    <div class="middle aligned column">
      <h3>Exemple</h3><br>
      <video id="video_preview" src="videos/ad_sample.mp4" controls style="width: 40%"></video>
      	
      	<img src="ads/ad_sample.jpg" id="image_preview" style="width: 50%; vertical-align: top; float:right" />
    </div>
  </div>
  <div class="ui vertical divider">
    <i class="arrow right icon"></i>
  </div>
</div>

<script>
	$('#select').dropdown();

  $("#img").change(function(){
    document.getElementById("image_preview").src = window.URL.createObjectURL(this.files[0]);
  });

  $("#video").change(function(){
    document.getElementById("video_preview").src = window.URL.createObjectURL(this.files[0]);
  });

   function submit_ad_video() {
        let id = $('#last_id').val();
        var fd = new FormData(document.getElementById("video_ad_info"));
        console.log(fd)
        fd.append("label", "WEBUPLOAD");
        fd.append("id", id);

        $.ajax({
          url: "upload_ad.php",
          type: "POST",
          data : fd,
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            console.log("PHP Output:");
            console.log( data );
            document.getElementById("video_info").value = data;
        });
        return false;
    }

    function submit_ad_img() {
        let id = $('#id').val();
        var fd = new FormData(document.getElementById("fileinfo"));
        fd.append("label", "WEBUPLOAD");
        fd.append("id", id);
        
        $.ajax({
          url: "upload_ad_img.php",
          type: "POST",
          data : fd,
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            console.log("PHP Output:");
            console.log( data );
            document.getElementById("image_info").value = data;
        });
        return false;
    }

    function add_this_ad()
    {
       let titre = $('#titre').val();
       let description = $('#description').val();
       let link = $('#link').val();
       let ad_group = $('#select').val();
       let user = $('#user').val();
       let image = $('#image_info').val();
       let video = $('#video_info').val();
       let req_views = $('#req_views').val();



       $.ajax({
          url : 'add_this_ad.php',
          type : 'POST',
          data : ({titre:titre, description:description, link:link, ad_group:ad_group, user:user, image:image, video:video, req_views:req_views}),
          success: function(html) 
          {
            alertify.success("Pub ajouté");
            admin_ads();
          }
        });
    }

</script>