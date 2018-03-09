<?
include("../config.php");
	// $class = $_POST[classs];
	$password = $_POST[password];
	$sql = 'select * from coach WHERE email = "'.$_POST[email].'" ' ;
	// $sql = 'select * from player where team_class = "'.$class.'"';
	$Objquery = mysql_query($sql,$conndb);
	//echo $Objquery;
	//$row = mysql_num_rows($Objquery); // นับจำนวนแถว
// $rows = array();
	if (mysql_num_rows($Objquery) > 0){
		//$result = mysql_fetch_ar )

          {
          	while ($result = mysql_fetch_array($Objquery)) 
          	{
				// $rows = $result[id];
				 if ($password == $result[password]) 
				 {
	                $rtn = '{"status":"0","username":"'.$result[id].'"}';
	                 echo $rtn;
	                      
	            }
	            else{
	                $rtn = '{"status":"2"}';
	                echo  $rtn;
	                        
	                            
	            }  
               
         }   
        	
    }
            //print json_encode($rows);
            // foreach($result = mysql_fetch_array($Objquery) as $row)
            // {
                  
            //       if ($password == $row[password]) {
            //             $rtn = '{"status":"0","username":"'.$row[id].'"}';
            //             return $rtn;
            //       }
            //       else{
            //             $rtn = '{"status":"2"}';
            //             return $rtn;
                            
            //       }   
            
            
            //  } 
     
    }
    else{
      			$rtn = '{"status":"1"}';
       			echo  $rtn;
    		}

    // else{
    //   $rtn = '{"status":"1"}';
    //   return $rtn;
    // }


?>