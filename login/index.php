<?php
if(isset($_POST["submit"])){
    cek();
}
function giftAlert($pesan){
    echo "<div style='transform:translateY(-200%);' class='alert text-center fixed-top bg-success text-light'>$pesan</div>";
    echo '<script>setTimeout(() => {$(".alert").css("transform","translateY(0%)");clear()},1000)</script>';
}
function cek(){
if($_POST["username"] != "ryuu13" || $_POST["pass"] != "pw1234"){
    echo '<div style="transform:translateY(-200%);" class="alert text-center fixed-top bg-danger text-light">Incorrect username or password</div>';
    echo '<script>setTimeout(() => {$(".alert").css("transform","translateY(0%)");clear()},1000)</script>';
}else if($_POST["pass"] == "" || $_POST["username"] == ""){
    echo '<div style="transform:translateY(-200%);" class="alert text-center fixed-top bg-dark text-light">unkown username or password</div>';
    echo '<script>setTimeout(() => {$(".alert").css("transform","translateY(0%)");clear()},1000)</script>';
}else{
    echo '<div style="transform:translateY(-200%);" class="alert text-center fixed-top bg-success text-light">Succes Login !</div>';
    echo '<script>setTimeout(() => {$(".alert").css("transform","translateY(0%)");clear()},1000)</script>';
    $data = "[{}]";
    $f = fopen("../database.json",'w');
    fwrite($f,$data);
    fclose($f);
    echo "<script>setTimeout(()=>{window.location.href='../'},2000)</script>";
  /*  echo "<!DOCTYPE HTML>
<html lang='en-US'>
<head>
        <meta charset='UTF-8'>
        <script type='text/javascript'>
        </script>
        <meta http-equiv='refresh' content='0; url=../'>
        <link rel='shortcut icon' href='../icon.jpg' type='image/x-icon' />
        <title>Page Redirection</title>
        <link rel='stylesheet' href='./framework/bootstrap.min.css'>
    </head>
    <body>
    <?php giftAlert('Succes Login !');?>
    </body>
</html>";
echo "<script>setTimeout(function(){
          window.location.href='../'
        },1000)
        </script>";
        */
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
                <!-- bootstrap -->
        <link href="../framework/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="shortcut icon" href="../icon.jpg" type="image/x-icon" />
        <script src="../framework/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <style type="text/css" media="all">
            .alert {
                transition: 1s;
                transform: translateY(-200%);
            }
         body {
            background-image: url('../bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
        }
        .title {
            text-shadow: 3px 3px 0px #000;
        }
        </style>
    </head>
    <body class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col text-center mx-auto">
                    <h1 class="title text-info mt-2">Login</h1>
                    <form class="clearfix form-control" action="" method="post" accept-charset="utf-8">
                        <label class="input-group" for="username">username :</label><input required class="form-control my-2" type="text" name="username" id="username" value="" />
                        <label class="input-group" for="pass">password :</label><input required class="form-control my-2" type="password" name="pass" id="pass" value="" />
                        <button class="btn btn-outline-info float-start" name="submit" type="submit">send</button>
                        <label for="pass" id="btn-see" class="text-primary float-end">view password</label>
                    </form>
                </div>
            </div>
        </div>
         <script src="../framework/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script type="text/javascript" charset="utf-8">
         function clear(args){
           /*  $("body").append(`<div class="alert text-center fixed-top bg-danger text-light">${args}</div>`);
             $(".alert").css("transform","translateY(0)");*/
             setTimeout(() => {
                 $(".alert").css("transform","translateY(-200%)");
             },3000)
         }
             $("#btn-see").on("click",function(){
                 $("#pass").attr("type","text");
                 $("#btn-see").html("hide password");
                 $(".text").attr("type","password");
                 $("#pass").toggleClass("text");
                 
                 $(".text-btn").html("view password");
                 
                 $("#btn-see").toggleClass("text-btn");
             })
         </script>
         <script type="text/javascript" charset="utf-8">
           var IsDark = matchMedia('(prefers-color-scheme: dark)').matches;
function changeTheme() {
  $("body").css("background-image","url()");
 $("form *:not(#btn-see),form").addClass("text-light");
 $("form *,form,body").addClass("bg-dark");
}
if(IsDark){
  changeTheme();
}
         </script>
    </body>
</html>