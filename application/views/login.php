<!DOCTYPE html>
<html>
    <head>
        <title>OJT WORK 2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <body >
<!-- main section start -->
<section >
<div class="container">
<div class="row">

<div class="col-6 py-5 mt-5 text-right">
<h2>LOGIN</h2>
<img src="../img/lo.jpg" alt="sample" class="img-fluid mx-auto d-block rounded">
</div>
<div class="col-6 box mt-5 p-5  ">

<form  action="<?php echo base_url()?>Main/user" method="post" class="border  border-2 border-light p-5 rounded-bottom rounded bg-light">

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="email/username/password" name="email" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="password" name="password">
    </div>
  </div>
  <input type="submit" class="btn btn-warning" value="LOGIN">
  <a href="<?php echo base_url()?>Main/forgot"class="text-dark ">Forgot Password</a>

  <a href="<?php echo base_url()?>Main/reg"class="nav-link text-dark">Sign-Up</a>
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
<section class="">


</section>


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>