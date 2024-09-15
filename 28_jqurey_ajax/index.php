<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="container" style="margin-top: 20px;">
    <form action="" method="POST" onsubmit="return false;">
        <input type="text" name="username" placeholder="username" id="username">
        <input type="text" name="password" placeholder="password" id="password">
        <input type="submit" name="submitButton" class="btn primary" id="submitButtonId">
    </form>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#submitButtonId").on("click", function(){

        var username = $('input#username').val();
        var password = $('input#password').val(); // Correctly store password in a separate variable

        $.post("login_verification_core.php", {
            uName: username,
            pWord: password // Include the password variable as needed
        }, function(mydata){
            alert(mydata); // Properly handle the response
        });

    });
});

</script>

</body>
</html>