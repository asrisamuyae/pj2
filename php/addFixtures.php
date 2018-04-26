<?
include("../config.php");
	// $class = $_POST[classs];
// echo $_POST["name"].$_POST["birthday"].$_POST["position"].$_POST["school"].$_POST["height"].$_POST["weight"].$_POST["foot"].$_POST["address"].$_POST["phone"].time().$_POST["sign_date"].$_POST["release_date"];
	$sql = "INSERT INTO fixtures (team, competition, league, stadium, timed, id_class) VALUES ('".$_POST["team"]."', '".$_POST["competition"]."', '".$_POST["league"]."', '".$_POST["stadium"]."', '".$_POST["timed"]."', '".$_POST["id_class"]."') ";
	// $sql = 'select * from player where team_class = "'.$class.'"';
	$Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        //$last_id = mysql_insert_id();
       //echo $last_id;
       echo '1';
      
    }
    else{
        echo "0";;
        
    }

?>