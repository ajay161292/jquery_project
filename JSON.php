<?php  
$json =   
'{  
"uglify-js": "1.3.4"  
, "jshint": "0.9.1"  
, "recess": "1.1.8"  
, "connect": "2.1.3"  
, "hogan.js": "2.0.0"  
}';  
echo'<pre>';var_dump(json_decode($json));  
echo "\n";  
echo "<pre>";;var_dump(json_decode($json, true));
?>  

<?php  
$json = '{"number": 23876487236}';
var_dump(json_decode($json));  
?>  

<?php  
$memory_size = memory_get_usage();  
$memory_unit = array('Bytes','KB','MB','GB','TB','PB');  
// Display memory size into kb, mb etc.  
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";  
?>  