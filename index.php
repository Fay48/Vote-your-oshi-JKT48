<?php
include("module-config.php");
$id1 = $_POST['kotak1'];
$id2 = $_POST['kotak2'];
$a=1;
$b=1;
$ekspektasi=0;
$ELOplayerA=0;
$ELOplayerB=0;
$P1=0;
$W1=0;
$D1=0;
$L1=0;
$P2=0;
$W2=0;
$D2=0;
$L2=0;

while($a==$b) {
	$a=rand(1,69);
	$b=rand(1,69);
}

if(isset($_POST['pl1']) or isset($_POST['pl2']) or isset($_POST['drw'])) {
	$query="SELECT * FROM members ORDER BY id";
	$perintah=mysql_query($query);
	while($d=mysql_fetch_array($perintah)){
		if($d['id']==$_POST['kotak1']) {
			$ELOplayerA = $d['EloPoint'];
			$P1 = $d['P'];
			$W1 = $d['W'];
			$D1 = $d['D'];
			$L1 = $d['L'];
		}
		if($d['id']==$_POST['kotak2']) {
			$ELOplayerB = $d['EloPoint'];
			$P2 = $d['P'];
			$W2 = $d['W'];
			$D2 = $d['D'];
			$L2 = $d['L'];
		}
	}
}	

$query="SELECT * FROM members ORDER BY id";
$perintah=mysql_query($query);
while($d=mysql_fetch_array($perintah)){
	if($d['id']==$a) {
		$namaPlayerA = $d['nama'];
	}
	if($d['id']==$b) {
		$namaPlayerB = $d['nama'];
	}
}
echo '
';

if($_POST['pl1']) {//ok
$P1++;$W1++;
$sql = mysql_query("SELECT * FROM members WHERE id=$id1");
$show = mysql_fetch_array($sql);
$crot = $show['EloPoint'] + 10;
$kueri="UPDATE members SET EloPoint=".$crot.", P=".$P1.", W=".$W1." WHERE id=".$id1."";
$P2++;$L2++;
   $perintah=mysql_query($kueri);
$sql2 = mysql_query("SELECT * FROM members WHERE id=$id2");
$show2 = mysql_fetch_array($sql2);
$crot2 = $show2['EloPoint'] - 5;
$kuerix="UPDATE members SET EloPoint=".$crot2.", P=".$P2.", L=".$L2." WHERE id=".$id2."";
$perintahx=mysql_query($kuerix);
}elseif($_POST['pl2']) {
$sql = mysql_query("SELECT * FROM members WHERE id=$id1");
$show = mysql_fetch_array($sql);
$crot = $show['EloPoint'] - 5;
$sql2 = mysql_query("SELECT * FROM members WHERE id=$id2");
$show2 = mysql_fetch_array($sql2);
$crot2 = $show2['EloPoint'] + 10;
$P1++;$L1++;$P2++;$W2++;
$kueri="UPDATE members SET EloPoint='".$crot."', P='".$P1."', L='".$L1."' WHERE id='".$id1."'";
$kueri2="UPDATE members SET EloPoint='".$crot2."', P='".$P2."', W='".$W2."' WHERE id='".$id2."'";
	$perintah=mysql_query($kueri);
	$perintahx=mysql_query($kueri2);
}elseif($_POST['drw']) { //ok
$sql = mysql_query("SELECT * FROM members WHERE id=$id1");
$show = mysql_fetch_array($sql);
$crot = $show['EloPoint'] + 2;
$sql2 = mysql_query("SELECT * FROM members WHERE id=$id2");
$show2 = mysql_fetch_array($sql2);
$crot2 = $show2['EloPoint'] + 2;
$P1++;$D1++;$P2++;$D2++;
$kueri='UPDATE members SET EloPoint='.$crot.', P='.$P1.', D='.$D1.' WHERE id='.$id1.'';
$kueri2='UPDATE members SET EloPoint='.$crot2.', P='.$P2.', D='.$D2.' WHERE id='.$id2.'';
	$perintah=mysql_query($kueri);
	$perintahx=mysql_query($kueri2);
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Vote Your Oshi</title>
    <meta name="description" content="Vote Your Oshi - Mini Games For Fans JKT48">
    <meta name="viewport" content="width=device-width, height=device-height initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/icon" href="img/icon.ico">
  </head>

  <body>

    <div id="header">
	<h1>Vote Your Oshi</h1>
</div>
<div id="main">
    <marquee><p>Member Database Latest : 16-02-2019</p></marquee><br/>
	<h2>Click to Vote!</h2>
	<table>
		<tr>
			<td width="120" valign="top">
				<form action="" method="post">
					<input type="hidden" value="<?php echo $a; ?>" name="kotak1" />
					<input type="hidden" value="<?php echo $b; ?>" name="kotak2" />
					<input type="hidden" value="100" name="pl1" />
					<input type="image" src="img/<?php echo $a; ?>.jpg" name="SKotak1" alt="<?php echo $namaPlayerA; ?>" width="120" height="169" class="foto" />
				</form>
				<br><?php echo $namaPlayerA; ?>
			</td>
			<td><b>VS</b></td>
			<td width="120" valign="top">
				<form action="" method="post">
					<input type="hidden" value=""<?php echo $a; ?>" name="kotak1" />
					<input type="hidden" value="<?php print $b;?>" name="kotak2" />
					<input type="hidden" value="100" name="pl2" />
					<input type="image" src="img/<?php echo $b; ?>.jpg" name="SKotak2" alt="<?php echo $namaPlayerB; ?>" width="120" height="169" />
				</form>
				<br><?php echo $namaPlayerB; ?>
			</td>
		</tr>
	</table>
	<table>
	<tr><td>
		<form action="" method="post">
		<input type="hidden" value="<?php echo $a; ?>" name="kotak1" />
		<input type="hidden" value="<?php print $b;?>" name="kotak2" />
		<input type="hidden" value="100" name="drw" />
    	<input style="font-family: Bungee Inline;" type="submit" name="SKotak3" value="Golput" id="result" />
		</form></td></tr>
	</table>
	<center>
		<a href="result.php"><div id="result">View Ranking</div></a>
	</center>
</div>
<div id="footer">
	<b>V.Y.O Project</b>
    <br />
    Coded by : <b>_Tuan2Fay_</b>
	<br />
	Just support JKT48 in Cyber World<br/>
	Report Problem/Bug ? : <a href="mailto:tuan2fayofficial@gmail.com">Email Developer</a>
</div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>