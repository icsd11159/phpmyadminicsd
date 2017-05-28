
<?php
$connect=mysqli_connect('localhost','root','','project');
 
if($connect->connect_error)
{
		die( 'Failed to connect');
}
else 
	echo 'connect worked';
foreach ($_POST['mathimata'] as $selectedmathimata)
echo $selectedmathimata."\n";
//and this echos a comma separated string
$mathimataString=implode(",", $_POST['mathimata']);
echo $mathimataString;
$title= $_POST['title'];
$ar_foithtwn= $_POST['ar_foithtwn']; 
$stoxos= $_POST['stoxos'];
$perigrafh= $_POST['perigrafh'];
$gnwseis= $_POST['gnwseis'];
$onoma_f= $_POST['onoma_f'];
$epitheto_f= $_POST['epitheto_f'];
$id_role_f= $_POST['id_role_f'];
$date_dhm= $_POST['date_dhm'];
$date_an= $_POST['date_an'];
$date_olok= $_POST['date_olok'];
$vathmos= $_POST['vathmos'];
 session_start(); 

$vid = $_SESSION['id_role_f'];

echo"your id  :".$vid;

$sql = "INSERT INTO diplwmatikh (title,ar_foithtwn,stoxos,perigrafh,mathimata,gnwseis,onoma_f,epitheto_f,id_role_f,date_dhm,date_an,date_olok,vathmos) VALUES ('$title','$ar_foithtwn','$stoxos','$perigrafh','$mathimataString','$gnwseis','$onoma_f','$epitheto_f','$id_role_f','$date_dhm','$date_an','$date_olok','$vathmos') ";
if(mysqli_query($connect,$sql)){
    echo "Records inserted successfully.";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}


?>
<p><a href="project/read_d.html" ">Back to menu</a>