<?php
   // connect to mongodb
   $m = new MongoClient();
	
   echo "<h1>Connection to database successfully</h1>";
   // select a database
   $db = $m->MOMIN;
  echo "<br><h1>Database MOMIN selected</h1>";
	$c=$db->createCollection("SOHAIL");
  echo "<br><h1>Collection SOHAIL created in MOMIN database</h1>";

 echo "<br>Now go to terminal and start Mongodb  By '->mongo' command <br>";
  echo" see DB as MOMIN by '->show dbs'   then to select DB by '->use SOHAIL'  to see Collection created'-> show collections'"; 
?>
