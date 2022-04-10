<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Login Page</title>
  </head>
  <body>
      
    <div class="login-page">
        <div class="form">
            <!-- <form action="" class="login-form"> -->
            <input type="text" id="username" name="username" placeholder="username" />
            <input type="password" id="password" name="password" placeholder="password" />
            <button onclick="login()">login</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            <!-- </form> -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        function login() {
            let username = $("#username").val();
            let password = $("#password").val();
            // console.log(username+" "+password);

            $.ajax({
                url: "http://202.157.184.201:8000/login",
                type: "post",
                dataType: 'json',
                data: {
                    "username": username,
                    "password": password,
                },             
                success: function() {  
                    window.location.href = "dashboard.php";
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("User tidak ditemukan"); 
                }
            });
        }
    </script>
  </body>
</html>