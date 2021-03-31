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
            <link rel="stylesheet" href="../css/style.css">
    </head>
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:auto;
		}
	</style>
	</head>
	<body>

		
	<h1 class="text-center">Product Details</h1>
		<form method="post" action="">
			<table class="table table-bordered table-info table-striped">
			<thead>
			  
			        <tr>
<th>Product Name</th>
<th>Price</th>
<th>Available Stock</th>

<th>Add to cart</th>





</tr>
</thead>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->p_name;?></td>
<td><?php echo $row->price;?></td>
<td><?php echo $row->stock;?></td>

<td><a href="<?php echo base_url()?>Main/viewcart<?php echo $row->p_id;?>" class="btn btn-info" role="button">Add to cart</td>
</tr>
<?php
}
}
?>


			</thead>
		</table>
	</form>
	<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
	</body>	
</html>  