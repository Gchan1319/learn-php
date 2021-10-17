<?
if(!$_POST){
echo '
<html>
<head>
<title>Whats Are you doing?</title>
<link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
</head>
<body>
<h1 style="text-align:center;font-size:30px;"><b>Unknown Request Client !</b></h1> <style type="text/css" media="all">body{background-image:url("img/ngapain.png"); background-repeat:no-repeat; background-position:center;background-size:500px;}</style>
<body>
<html>
';
die();
}else if($_POST["username"] == "ryuu13" && $_POST["pass"] == "pw1234"){
    $data = "[{}]";
$f = fopen("database.json",'w');
fwrite($f,$data);
fclose($f);
echo '
<html>
<head>
<link rel="shortcut icon" href="img/gw.jpg" type="image/x-icon" />
<title>welcome admin</title>
</head>
<body>
<h1 style="text-align:center;">Welcome admin !</h1><style type="text/css" media="all">body{background-image:url("img/gw.jpg"); background-repeat:no-repeat; background-position:center;background-size:500px;}</style>
</body>
</html>
';
echo "<!DOCTYPE HTML>
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
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        <h1 class='text-center'>Succes Remove All Notes !</h1>
        <h3 class='text-center'>Please wait Redirecting ...</h3>
        <p class='text-center'
        If you are not redirected automatically, follow this <a href='../'>link to example</a>.
        </p>
    </body>
</html>";
sleep(2);
echo "<script>setTimeout(function(){
          window.location.href='../'
        },1000)
        </script>";
}else{
    echo '
    <html>
    <head>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
    <title>login abort</title>
    <h1 style="text-align:center;font-size:30px;"><b>something wrong !</b></h1><style type="text/css" media="all">body{background-image:url("img/uncorrect.png"); background-repeat:no-repeat; background-position:center;background-size:500px;}</style>
    </body>
    </html>';
}
?>