
<!DOCTYPE html>
<html>
    <head>
        <title>Afrs</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <style>
      .bg
      {
        background-image: url('../img/air.jpg');
        background-size: cover;
      }
      *
{
padding:0px;
margin:0px;
}

.menubar
{
background-color:black;
text-align:center;

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:white;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:green;
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
background-color:black;
border-radius:10px;

}
.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:2px solid green;
}
.row
{

display:flex;
}
.col h2
{
text-align:center;
text-decoration:underline;
}
.ft
{
background-color:black;
padding:50px;
text-align:center;
color:white;
}

.first
{
background-image:url("../img/fg.jpg");
background-size:cover;



}
h1
{
font-size: 60px;
}




</style>
  
<body class="bg">
<!-- main section start -->
<section class="">
<div class="container ">
  


<div class="row">


<div class="col-6 py-5 mt-5 text-right">
  

  <h4 class="text-dark text-center p-5 mb-5">“Once a culture becomes entirely advertising friendly, it seizes to be a culture at all.” </h4>

<!-- <img src="../img/ai.jpg" alt="sample" class=" img"> -->
</div>
<div class="col-6 box1 mt-5 bg-dark ">


<form action="<?php echo base_url()?>Main/addproduct" method="POST" class="border  border-2 border-dark p-5 rounded-bottom rounded ">
  <h3 class="text-white h2 " style="text-decoration: underline;">PRODUCT DETAILS</h3></u>

  <div class="row mt-5 ">
    <div class="col-10 mb-3  ">
    	
      <input type="text" class="form-control" placeholder="Product name" name="p_name">
    </div>
  </div>
  <div class="row">
      <div class="col-10 mb-3">
            <input type="text" class="form-control" placeholder="Price" name="price"required >
          </div>
        </div>
        <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="Stock"  name="stock" required="">
    </div>
  </div>



  <input type="submit" name="submit" class="btn btn-info" value="Submit">

  
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>