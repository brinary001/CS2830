<!DOCTYPE html>
<!--Brian Robinson
    br7pc
    Challenge 8
    10/26/17
-->
    
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Challenge 8</title>
        <style>
            img {
                height: 500px;
                width: 800px;
            }
        </style>
    </head>
    
    <body>
        <?php
                $directory = 'images/';

                if (file_exists($directory)) {
                    echo "The directory $directory exists";
                } else {
                    echo "The directory $directory does not exist";
                }
        
             $files = glob("images/*.*");
             for ($i=0; $i<count($files); $i++)
              {
                $image = $files[$i];
                $supported_file = array('gif', 'jpg','jpeg','png');

                 $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                 if (in_array($ext, $supported_file)) {
                    echo basename($image)."<br />"; 
                     echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
                    } else {
                        continue;
                    }
                  }
        if($opendir = opendir($dir)){

		
			while(($file = readdir($opendir)) != FALSE){
		
		
				if($file!="." && $file != ".."){
				
				$path_parts = pathinfo($file);
					
					if($path_parts['extension'] == 'gif' || $path_parts['extension'] == 'png' || $path_parts['extension'] == 'jpeg' ||$path_parts['extension'] == 'jpg'){
					
				//	echo "<img src='$dir/$file' height = '500px' width = '500px'><br>";
					
					if($path_parts['extension'] == 'png'){
					
					
					$oldmask = umask(0);
					
					if (file_exists('images/PNG')) {
    					//echo "The file $filename exists";
					} else{
						if(!mkdir("images/PNG", 0777)){
							die('failed to make PNG folder');
						}
					umask($oldmask);
					}
					
					
					if (!copy('images/'.$file, 'images/PNG/' . $file)) {
    					echo "failed to copy $file...<br>";
					}

				}	
					
					}
				}
		
			}
		
		}else{
			die($dir . ' was not found <br>');
			}
	

        ?>
    
    </body>
</html> 