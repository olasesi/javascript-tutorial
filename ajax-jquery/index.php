<?php
require("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>fetch</title>
</head>

<body>


    <ul class="list-group">
        <li class="list-group-item">
            <div class="box_loading">
                <div id="loading"></div>
            </div>
            <?php
				echo '<center>';
				echo '<div class="center-block">';
				
				echo ("<button id='getrecordsabia' type='button' class='btn btn-primary btn-xs'>Fetch</button>");
			
				echo '</div>';
				echo '</center>';
				
			
			echo("<div class='box_after_header_post'>");
			
			echo "</div>";
			?>
        </li>
    </ul>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#getrecordsabia').click(function() {
            var response = '';
            $("#loading").html('<img src="assets/vectors/loader.gif">');
            $.ajax({
                type: 'POST',
                url: "abia.php",
                async: false,
                success: function(text) {
                    $("#loading").ajaxComplete(function() {}).slideUp();
                    $('.box_after_header_post').html(text);
                }
            });
        });
    })
    </script>
</body>

</html>