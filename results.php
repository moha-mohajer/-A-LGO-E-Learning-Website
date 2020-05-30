
<?php
$sql    = "SELECT * FROM studentattempt WHERE UserID =".$userid;//select table and sort database
// $query = "select * from studentattempt where UserID = ".$user;
$result =$_SESSION["mysqli"]->query($sql);
// $result = mysqli_query($_SESSION["mysqli"], $query);
$num_results = mysqli_num_rows($result);
if($num_results>0){
	echo "<p> Number of attempts are: ".$num_results."</p>";

	// for ($i=0; $i<$num_results; $i++)
	// {
	$i=0;
	while ($row = $result->fetch_array(MYSQL_ASSOC)) {
		echo '<div id = "border">';
		echo "<p><strong>".($i+1);
		echo "</strong><br> ";
		echo $row["Material"];
		echo "<br> Total Points:  ";
		echo $row["Points"];
		echo "<br> Total Correct:  ";
		echo $row["Correct"];
		echo "<br> Student strategies:  ";
		echo $row["Strategies"];
		echo "<br> Attempt Date:  ";
		echo $row["AttemptDate"];
		echo "</P>";
		echo '</div>';
		$i++;
	}

}
else{
	echo "<p> You not attempted any...</p>";
}
?>
