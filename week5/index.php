<?php
echo "<title>Aamir Kalimi PHP</title>";
echo "<h1>Aamir Kalimi PHP</h1>";
echo "The SHA256 hash of \"Aamir Kalimi\" is " . hash('sha256', 'Aamir Kalimi');
echo "
<pre>
ASCII ART:

       #    
      # #   
     #   #  
    #     # 
    ####### 
    #     # 
    #     # 
        
</pre>
";
echo "<a href=\"check.php\">Click here to check the error setting </a><br>";
echo "<a href=\"fail.php\">Click here to cause a traceback</a>";
?>