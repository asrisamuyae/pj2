<?
include("../config.php");
	// $class = $_POST[classs];
	$sql = 'select coach.*,t1.name as team_name,t1.id as team_id FROM coach LEFT JOIN team as t1 ON coach.team = t1.id WHERE coach.id = "'.$_POST[id].'" ';
	// $sql = 'select * from player where team_class = "'.$class.'"';
	$Objquery = mysql_query($sql,$conndb);
	//echo $Objquery;
	//$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
	if(mysql_num_rows($Objquery) > 0){
		//$result = mysql_fetch_array($Objquery);
		
		//print json_encode($result);
		while ($result = mysql_fetch_array($Objquery)) {
			 $rows[] = $result;
               
            }
            print json_encode($rows);
		// while($result = mysql_fetch_array($Objquery)){
		// 	$name = $result['username'];
		// 	//echo $namef;
		// }
	}
	else{
		echo "0";
		
	}

?>