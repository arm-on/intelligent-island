<!DOCTYPE html>
<html>
<head>
  <title>JSON Sender</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $.ajax({
        url: '../membership/add.php',
        type: 'POST',
        data: {
            firstname:'',
            lastname:'',
            username:'',
            password:'',
            sex:'',
            email:'',
            role:'',
            avatar:''
        },
        success: function(response) {
            // response now contains full HTML of google.com
            alert(response);
        }
      });
});
</script>
</head>
<body>



</body>
</html>
