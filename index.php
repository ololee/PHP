<?php
echo  "<html>";
echo  "<head>";
echo  "<title>";
echo  "filenames";
echo  "</title>";
echo  "</head>";
echo  "<body>";
$path="./";                                  
    $prevpath=dirname($path);                      
    $dir_handle=opendir($path);  
    while($file=readdir($dir_handle)) {        
        if($file!="." && $file!="..") {    
         
            $filename=$file;         
            if(is_dir($filename)){           
             
            }
            if($filename!="index.php")
			{				
            echo '<a href="'.$filename.'">'.$filename.'</a>';
            echo '<br></br>';				
            }
        }
    }
    closedir($dir_handle);      
echo   "</body>";
echo  "</html>";
?>