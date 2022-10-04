
       <?php 
  // The file path
  $file = "/upload/1662994410_php-full-stack.pdf"; 
    
  // Header Content Type
  header("Content-type: application/pdf"); 
    
  header("Content-Length: " . filesize($file)); 
    
  // Send the file to the browser.
  readfile($file); 
?>
