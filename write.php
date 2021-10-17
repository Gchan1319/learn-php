<?php
if(!isset($_POST["judulNote"])){
  echo "What's are you doing ?";
  echo '<script>window.location.assign("../")</script>';
  die();
}
date_default_timezone_set('Asia/Jakarta');
$judulnya = $_POST['judulNote'];
$isi = $_POST['isinote'];
$stringDate = date("D, d M Y h:i:s A");
$isi2 = str_replace("\n",'',$isi);
$isi3 = str_replace("\r",'',$isi2);
$isi4 = str_replace('"',"'",$isi3);
$isinya = $isi4;
// php upload file
$target_dir = "upload/";
$name = uniqid(8);
$eks = $_FILES["fileToUpload"]["type"];
$eks = str_replace("image/","",$eks);
// rename file image
$target_file = $target_dir.$name.".".$eks;
$file_gambar = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  die();
  $uploadOk = 0;
}
$before = file_get_contents("database.json");
$jsonBefore = json_decode($before, true);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $urlGambar = $target_file;
    $data = ',{"title":"'.$judulnya.'","LastUpdate":"'.$stringDate.'","hero":"'.$urlGambar.'","isi":"'.$isinya.'"}]';
$tempArray = json_encode($data);
$res = str_replace("[]","{}",$before);
$res2 = str_replace("]","",$res);
$f1 = fopen("database.json","w");
fwrite($f1,$res2);
fclose($f1);
$f = fopen("database.json",'a');
fwrite($f,$data);
fclose($f);
/*
$bukalagi = file_get_contents("database2.json");
$jsonBukalagi = json_decode($bukalagi,true);
*/
/*$jsonBukalagi[0] = "{}";
$jsonBukalagiEncode = json_encode($jsonBukalagi);
file_put_contents("database2.json",$jsonBukalagiEncode);*/
echo "
<!DOCTYPE HTML>
<html lang='en-US'><head>
        <meta charset='UTF-8'>
        <meta http-equiv='refresh' content='0; url=../'>
        <script type='text/javascript'>
        setTimeout(function(){
          window.location.href='../'
        },1000)
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow this <a href='../'>link to example</a>.
    </body>
</html>";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
?>