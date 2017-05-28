
<?php

$connect=new mysqli('localhost','root','','project');
 
if($connect->connect_error)
{
		die( 'Failed to connect');
}
else 
	echo 'connect worked ';

$katastash= $_POST['katastash'];
$id_role= $_POST['id_role'];
echo"<br>Τρέχουσα κατάσταση: <br>".$katastash;
		if(strpos("x".$katastash, 'Ελεύθερες Διπλωματικές') == true){
			
$sql="SELECT * FROM diplwmatikh WHERE katastash =1" ;
		}
			else if(strpos("x".$katastash, 'Υπο έγκριση Διπλωματικές') == true){
			
			$sql="SELECT * FROM diplwmatikh WHERE katastash =2" ;}
		else if(strpos("x".$katastash, 'Διπλωματικές που έχουν ανατεθεί') == true){
$sql="SELECT * FROM diplwmatikh WHERE katastash =3" ;
		}
			else if(strpos("x".$katastash, 'Έτοιμη για παρουσίαση') == true){
$sql="SELECT * FROM diplwmatikh WHERE katastash =4" ;
		}
		else if(strpos("x".$katastash, 'Έχει βαθμολογηθεί') == true){
$sql="SELECT * FROM diplwmatikh WHERE katastash =5" ;
		}
$result2=$connect->query($sql);
echo "<table  border='3' width='70%'>";
if(mysqli_num_rows($result2)){
	while($row1=$result2->fetch_assoc()){

			echo "<tr><th>Τίτλος </th>  <th> Στόχος </th> <th> Επιβλέπων Καθηγητής </th> <th> Περιγραφή </th> <th> Προαπαιτούμενα Μαθήματα </th> <th> Αριθμός Φοιτητών </th> <th> Απαραίτητες Γνώσεις </th> <th> Όνομα φοιτητή </th> <th> Βαθμός </th> </tr>" ; 	
		echo "<tr><td>" .$row1['title']. "</td><td>" . $row1['stoxos'] . "</td><td>". $row1['id_role'] . "</td><td>". $row1['perigrafh'] . "</td><td>". $row1['mathimata'] . "</td><td>". $row1['ar_foithtwn'] . "</td><td>". $row1['gnwseis'] . "</td><td>". $row1['onoma_f'] . "</td><td>". $row1['vathmos'] . "</td></tr>"; 
	    
	
	}
}

echo "</table>";
?>
<!--otan tha mpei to login tha prepei na valw me id_role to diko toy, kai meta na emfanizontai mono oi dikes tou kai na mporei n adhmiourgei allak na kanei edit-->

