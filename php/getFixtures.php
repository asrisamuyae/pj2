<?
include("../config.php");
	// $class = $_POST[classs];
	$sql = 'select fixtures.*,team_home.name as teamhome,team_away.name as teamaway from fixtures  
	LEFT JOIN team as team_home ON fixtures.home = team_home.id 
	LEFT JOIN team as team_away ON fixtures.away = team_away.id 
	WHERE owner = "'.$_POST['owner'].'" ORDER BY dates ASC';
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