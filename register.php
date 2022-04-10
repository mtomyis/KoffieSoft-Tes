<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Page</title>
  </head>
  <body>
      
    <div class="login-page">
        <div class="form">
            <!-- <form class="login-form" action="http://202.157.184.201:8000/users" method="post"> -->
            <input type="email" id="email" name="email" placeholder="email" required/>
            <input type="password" id="password" name="password" placeholder="password" required/>
            <input type="text" id="firstname" name="firstname" placeholder="firstname" required/>
            <input type="text" id="lastname" name="lastname" placeholder="lastname" required/>
            <input type="number" id="hp" name="hp" placeholder="nomor hp" required/>
            <input type="date" id="tgl_lahir" name="tgl_lahir"/>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                <option selected disabled value="">Jenis Kelamin</option>
                <option value="1">Laki - laki</option>
                <option value="2">Perempuan</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
            <br>
            <button onclick="register()">create</button>
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
            <!-- </form> -->
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        function register() {
            let email = $("#email").val();
            let password = $("#password").val();
            let firstname = $("#firstname").val();
            let lastname = $("#lastname").val();
            let hp = $("#hp").val();
            let tgl_lahir = $("#tgl_lahir").val();
            let jenis_kelamin = $("#jenis_kelamin").val();
            let grup = "member";
            // console.log(email+password+firstname+grup+lastname+hp+tgl_lahir+jenis_kelamin+role+referral_code);

            var url = "http://202.157.184.201:8000/users";

            var xhr = new XMLHttpRequest();
            xhr.open("POST", url);

            xhr.setRequestHeader("Accept", "application/json");
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                console.log(xhr.status);
                console.log(xhr.responseText);
                if (xhr.status==200) {
                    window.location.href = "login.php";
                }else{
                    alert("Gagal menambahkan user"); 
                }
            }};

            var data = `{"email": "${email}","hp": "${hp}","firstname": "${firstname}","lastname": "${lastname}","grup": "${grup}","tgl_lahir": "${tgl_lahir}","jenis_kelamin": ${jenis_kelamin},"password": "${password}"}`;

            xhr.send(data);

        }
    </script>

  </body>
</html>