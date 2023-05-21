<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>
<body>
    
<div class="col-md-4 offset-md-4" style="margin-top:124px;">
<h4 class="text-center">Email-Form</h4>
<form action="" method="post">

  <label for="exampleFormControlInput1" class="form-label">Konu</label>
  <input class="form-control" type="text" placeholder="Konu"  style="margin:5px 5px;" maxlength="24" name="subject">


  <label for="exampleFormControlInput1" class="form-label">email</label>
  <input class="form-control" type="email" placeholder="Email"  style="margin:5px 5px;" maxlength="24" name="email">


  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Anlatım</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="yazi"></textarea>
</div>

<button type="submit" class="btn btn-success col-12">Email Gönder</button>
</form>    
</div> 

<?php 
include("class.php");

$pos= new Mail();
if (!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['yazi'])) {
    $kime="korgpabaha@gmail.com";
    $baslik= "From:"."<".$_POST['email'].">\r\n";
    $baslik.="Reply-to: korgpabaha@gmail.com\r\n";
    $baslik.="Content-type: text/html; charset=UTF-8\r\n";
$pos->yolla($kime,$_POST['subject'],$_POST['yazi'],$baslik);


}
else{



}
?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>