<?php
include "header.php";
?>

<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">

<script src="alertify/alertify.min.js"></script>
<!-- include the style -->
<link rel="stylesheet" href="alertify/css/alertify.min.css" />

<section class="price-table-area" id="admin_div">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                    <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="price-box" style="min-height: 200px">
                            <center>
                        <h2>Entrer le mot de passe pour accéder</h2>
                        <input value="" id="passcode" type="password" style="border: 1px solid #e4e4e4; margin: 15px; padding: 15px; border-radius: 15px; width: 40%;">
                        <div class="evviede-venir-title" >
                            <a href="#" onclick="check_pass()">Continuer</a>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

var LocationsForMap = [
        ['Paris',48.86673177357514, 2.318544428730672],
          ['Paris',48.92264077515699, 2.4475274404502336],
      ['Paris', 48.82027357910924, 2.5704163455069606],
      ['Paris', 48.76225856453182, 2.546429739755603]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: new google.maps.LatLng(46.65593035921996, 2.462182349733395),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < LocationsForMap.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(LocationsForMap[i][1], LocationsForMap[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(LocationsForMap[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>


<script>


function check_pass()
{
     let passcode = $('#passcode').val();

     $.ajax({
        url : 'check_pass.php',
        type : 'POST',
        data : ({passcode:passcode}),
        success: function(html) 
        { 
          if(html==1)
          {
            $.ajax({
                url : 'admin_panel.php',
                type : 'POST',
                success: function(html2) 
                {
                  $('#admin_div').html(html2);

                }
              });
          }
        }
      });
    }

function retour()
{
    $.ajax({
                url : 'admin_panel.php',
                type : 'POST',
                success: function(html)
                {
                  $('#admin_div').html(html);
                }
              });
}
function gestion_generale()
{
    $.ajax({
        url : 'admin_generale.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}

function admin_quizz()
{
    $.ajax({
        url : 'admin_quizz.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}

function admin_pub()
{
    $.ajax({
        url : 'admin_pub.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}

function admin_ad_feedback()
{
    $.ajax({
        url : 'admin_ad_feedback.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}

function admin_ads()
{
    $.ajax({
        url : 'admin_ads.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}



function admin_quizz_stats()
{
    $.ajax({
        url : 'admin_quizz_stats.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}

function live_stats()
{
    $.ajax({
        url : 'live_stats.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}


function admin_users()
{
    $.ajax({
        url : 'admin_users.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}


function pub_modal(type, id)
{
    $.ajax({
        url : 'pub_modal.php',
        type : 'POST',
        data : ({type:type, id:id}),
        success: function(html) 
        { 
          $('#modal').html(html);
          $('#modal').modal('show');
        }
      });
}

function get_modal(type, id)
{   
        $.ajax({
                url : 'get_modal.php',
                type : 'POST',
                data : ({type:type, id:id}),
                success: function(html) 
                { 
                  $('#modal').html(html);
                  $('#modal').modal('show');
                }
              });

    
}

function admin_glob()
{
    $.ajax({
        url : 'admin_glob.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#admin_div').html(html);
        }
      });
}


function upd_data(table, row, value)
{
    $.ajax({
        url : 'upd.php',
        type : 'POST',
        data : ({table:table, row:row, value:value}),
        
      });
    alertify.success('Mis a jour!'); 
}


    function submitForm() {
        let id = $('#id').val();
        var fd = new FormData(document.getElementById("fileinfo"));
        fd.append("label", "WEBUPLOAD");
        fd.append("id", id);
        
        $.ajax({
          url: "upload_img.php",
          type: "POST",
          data : fd,
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            console.log("PHP Output:");
            console.log( data );
            alertify.success(data)
        });
        return false;
    }


    function submitVideo() {
        let id = $('#id').val();
        var fd = new FormData(document.getElementById("fileinfo"));
        console.log(fd)
        fd.append("label", "WEBUPLOAD");
        fd.append("id", id);

        $.ajax({
          url: "upload_vid.php",
          type: "POST",
          data : fd,
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            console.log("PHP Output:");
            console.log( data );
            alertify.success(data)
        });
        return false;
    }

</script>
<?php
include "footer.php";
?>