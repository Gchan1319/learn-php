<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create note</title>
            <!-- bootstrap -->
    <link href="../framework/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="icon" href="../icon.jpg">
    <script src="random-hub.js" type="text/javascript" charset="utf-8"></script>
    <script src="../framework/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style type="text/css" media="all">
        body {
            background-image: url('./bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
        }
        #isinote {
          height: 100vh;
        }
        textarea {
          font-size: 10px;
        }
        button{
  font-family: 'Bebas Neue', Sans-Serif;
}
textarea, input, label {
  font-size: 12px;
  font-family: 'Crimson Text', serif;
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <form id="form" class="form-control" action="../write/" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
            <input required class="form-control mb-2" type="text" name="judulNote" id="judulNote" value="" placeholder="input title" />
            <input class="form-control mb-2" type="file" name="fileToUpload" id="urlGambar" value="" placeholder="insert image here ..." required />
            <textarea required class="mb-2 form-control" name="isinote" id="isinote" placeholder="write your note here .."></textarea>
            <button class="btn btn-outline-info" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
    <script src="../framework/jquery-3.6.0.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" charset="utf-8">
    /*  var IsDark = matchMedia('(prefers-color-scheme: dark)').matches;
        if(IsDark){
      $(".form-control *").addClass("bg-dark");
      $("body").css("background-image"'',"url()";
      $("body").css("background-color","#000");
      alert("asu")
    }*/
      </script>
    <script type="text/javascript" charset="utf-8">
    let formnya = document.getElementById('form');
        function send(){
            let judul = document.getElementById('judulNote').value;
            let input = document.getElementById('judulNote');
            if(judul.length >= 20){
                formnya.action="";
                input.value="";
                input.classList.add('is-invalid');
                input.placeholder="max 8 characters"
            }else if(judul.length == 0){
                input.classList.add('is-invalid');
                input.placeholder="Input a Title, Max 20 characters !";
                formnya.action="";
            }else{
                input.classList.remove('is-invalid');
                input.classList.add('is-valid
                formnya.action="../write.php"
            }
        }
        setInterval(send,10);
    </script>
    <script type="text/javascript" charset="utf-8">
   // alert("ngntd")
  var IsDark = matchMedia('(prefers-color-scheme: dark)').matches;
function changeTheme() {
  $("body").css("background-image","url()");
 $("#form *,#form").addClass("text-light");
 $("#form *,#form,body").addClass("bg-dark");
}
if(IsDark){
  changeTheme();
}
    </script>
  </body>
</html>