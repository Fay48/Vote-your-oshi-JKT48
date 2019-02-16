<?php

include "module-config.php";

if(is_numeric($id = $_GET['id'])){
	$id = $_GET['id'];
}else{
	$id = 1;
}

$sql = mysql_query("SELECT * FROM members WHERE id=$id");
$show = mysql_fetch_array($sql);?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Vote Your Oshi</title>
        <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    
  </head>

  <body>

    <div id="header">
	<h1><a href="index.php">Vote Your Oshi</a></h1>
</div>
<div id="main">
	<h2>Detail </h2>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<center>
			<img src="img/<?php echo $show['id']; ?>.jpg" class="img-rounded" width="200" height="282">
			<h3>
				<?php echo  $show['nama'];?>
			</h3>
			</center>
			<table class="table">
				
				<tbody>
					<tr>
						<td>
							Score
						</td>
						<td>
							<?php echo  $show['EloPoint'];?>
						</td>
					</tr>
					
					<tr>
						<td>
							Total Match
						</td>
						<td>
							<?php echo  $show['P'];?> time(s)
						</td>
					</tr>
					<tr>
						<td>
							Win
						</td>
						<td>
							<?php echo  $show['W'];?> time(s)
						</td>
					</tr>
					
					<tr>
						<td>
							Lose
						</td>
						<td>
							<?php echo  $show['L'];?> time(s)
						</td>
					</tr>
					<tr>
						<td>
							Draw
						</td>
						<td>
							<?php echo  $show['D'];?> time(s)
						</td>
					</tr>
				</tbody>
			</table>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
</div>
</div>


	<center>
		<a href="result.php"><div id="result">BACK</div></a>
	</center>

<div id="footer">
	<b>V.Y.O Project</b>
    <br />
    Coded by : <b>_Tuan2Fay_</b>
	<br />
	Just support JKT48 in Cyber World
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

    
    
    
  </body>
</html>
