<?PHP
 function employeeReport($filename) 
 {
 	
   $filename = 'report.txt'
   $handle = fopen($filename, 'r');
   $contents = fread($handle, filesize($filename));
   fclose($handle);
   return $contents;
}

  function removeshii($array){
  	foreach($array as $key => $row) {
       $trimRow = trim($row, "* =");

        if(empty($trimRow)) {
            unset($array[$key]);
        }
    }
    return $array;
}
  

var_dump(removeshii('report.txt'));   
