<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Form</title>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        function submitForm() {
            console.log("submit event");
            var fd = new FormData(document.getElementById("fileinfo"));
            fd.append("label", "WEBUPLOAD");
            $.ajax({
              url: "upload_img.php",
              type: "POST",
              data: fd,
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function( data ) {
                console.log("PHP Output:");
                console.log( data );
            });
            return false;
        }
    </script>
</head>

<body>
    <form method="post" id="fileinfo" name="fileinfo">
        <label>Select a file:</label><br>
        <input type="file" name="file" required />
        <button onclick="submitForm()">Upload</button>
    </form>
    <div id="output"></div>
</body>
</html>
