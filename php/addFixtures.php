<?
include("../config.php");
    // $class = $_POST[classs];
// echo $_POST["name"].$_POST["birthday"].$_POST["position"].$_POST["school"].$_POST["height"].$_POST["weight"].$_POST["foot"].$_POST["address"].$_POST["phone"].time().$_POST["sign_date"].$_POST["release_date"];
    $sql = "INSERT INTO fixtures (timed, home, dates, away, class,owner, post_date) VALUES ('".$_POST["timed"]."', '".$_POST["home"]."', '".$_POST["date"]."', '".$_POST["away"]."', '".$_POST["class"]."', '".$_POST["owner"]."', '".time()."') ";
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
        echo "0";
        
    }

?>


