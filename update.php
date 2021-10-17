<?php
  $value = $_POST["valueUpdate"];
  $note = $_POST["cekNote"];
  $title = $_POST["titleNote"];
  $img = $_POST["imgHero"];
  $index = intval($note);
  if($value == null && $title == null){
    $fileJson = file_get_contents("database.json");
    $json = json_decode($fileJson,true);
    foreach ($json as $item) {
    unset($json[$index]);
    array_values($json);
    }
    $targetHero = $img;
    unlink("$targetHero");
    $json = array_values($json);
    $res = json_encode($json);
    file_put_contents('database.json', $res);
    echo "$targetHero";
    redir();
    die();
  }
date_default_timezone_set('Asia/Jakarta');
  $fJson = file_get_contents("database.json");
  $jsonDecode = json_decode($fJson, true);
  $dataJson = $jsonDecode;
  $stringDate = date("D, d M Y h:i:s A");
  $isi2 = str_replace("\n",'',$value);
  $isi3 = str_replace("\r",'<br/>',$isi2);
  $isi4 = str_replace('"',"'",$value);
  $dataJson[$index]['isi'] = "$isi4";
  $dataJson[$index]["title"] = "$title";
  $dataJson[$index]["LastUpdate"] = "$stringDate";
  $newJsonString = json_encode($dataJson);
  file_put_contents('database.json', $newJsonString);
  redir();
  /*
  $openJson = fopen("database.json","w");
  fwrite($openJson,$newJsonString);
  fclose($openJson);*/
  function redir(){
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
}
?>