<?php 
$connect=new mysqli('localhost','root','','project');
 
if($connect->connect_error)
{
		die( 'Failed to connect');
}
else 
	echo 'connect worked ';

if($_POST){
	 function select1($anazhthsh)
    {
		
       echo "<br> The select1 function is called. " .$anazhthsh;
	   
	   $sql="SELECT * FROM diplwmatikh WHERE katastash =1 AND id_role=$anazhthsh" ;
    }
    function    select2($anazhthsh)
    {
       echo "The insert select2 is called.";
	   $sql="SELECT * FROM diplwmatikh WHERE katastash =1 AND titlos=$anazhthsh ";
    }
	$anazhthsh=$_POST['anazhthsh'];
	$leksh=$_POST['letter'];
    if(strpos("x".$leksh, 'Καθηγητή') == true){
		echo"kathigiti";
         select1($anazhthsh);
		 	$result2=$connect->query($sql);
    }else if(isset($_POST['Τίτλο'])){
        select2($anazhthsh);
			$result2=$connect->query($sql);
    }
   

echo "<table  border='3' width='70%'>";
if(mysqli_num_rows($result2)){
	while($row1=$result2->fetch_assoc()){

			echo "<tr><th>Τίτλος </th>  <th> Στόχος </th> <th> Επιβλέπων Καθηγητής </th> <th> Περιγραφή </th> <th> Προαπαιτούμενα Μαθήματα </th> <th> Αριθμός Φοιτητών </th> <th> Απαραίτητες Γνώσεις </th> <th> Όνομα φοιτητή </th> <th> Βαθμός </th> </tr>" ; 	
		echo "<tr><td>" .$row1['title']. "</td><td>" . $row1['stoxos'] . "</td><td>". $row1['id_role'] . "</td><td>". $row1['perigrafh'] . "</td><td>". $row1['mathimata'] . "</td><td>". $row1['ar_foithtwn'] . "</td><td>". $row1['gnwseis'] . "</td><td>". $row1['onoma_f'] . "</td><td>". $row1['vathmos'] . "</td></tr>"; 
	    
	
	}
}

echo "</table>";
}
 ?>
<html>

<head>
<script>
var katastash="Ελεύθερες Διπλωματικές";


 </script>
 </head>
 <body>
<div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form action="diplwmatikes.php" method="post" >
<input type="submit"  value="Ελεύθερες Διπλωματικές" name="katastash" > 
</form>
<form name="myLetters" action="student.php" method="POST">
Θέλεις να κάνεις αναζήτηση διπλωματικών με βάση:
<input type="radio" name="letter" value="Καθηγητή" /> Καθηγητή
<br>
<input type="radio" name="letter" value="Τίτλο" /> Τίτλο
<br>
Γράψε την λέξη - κλειδί σου:
<input type="text" name="anazhthsh">
<!-- Then add a submit value & close your form -->
<input type="submit" name="submit" value="Choose Letter!" />
</form>
</div>
</body>
</html> 