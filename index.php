<?php    
   if(isset($_POST['save_code']))
  {$source_code=$_POST['save_code'];
  $source_file=fopen('solution.cpp','w');
  fwrite($source_file,$source_code);
  fclose($source_file);
}
 if(isset($_POST['submit_code']))
  {$final_code=$_POST['submit_code'];
  $source_file=fopen('solution.cpp','w');
  fwrite($source_file,$final_code);
  fclose($source_file);
}

?>
