<?php
include("../config.php");
                            //echo $finalcode;
      $sql = "UPDATE player SET assist = '".$_POST[assist]."' WHERE  id = '".$_POST[id]."' " ;
      $Objquery = mysql_query($sql,$conndb);
      if($Objquery){
                
          echo "1 results";
                              
      }
      else{
         echo "0 results";
                                
      }
                
              
    
    

?>