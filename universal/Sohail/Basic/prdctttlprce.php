<pre>
<?php
$ttl=0;
$arr=array(array(101,102,103,104,105),array('Mobile','Laptop','Computer','Television','Radio'),array(15,18,90,46,57),array(5000,15000,20000,10000,500));
         foreach($arr as $val)
         {
         foreach($val as $v4)
         {
         echo"<pre>".$v4."<br>";
         $ttl=$ttl+$v4;
         }
         }
         echo"Total Amount Is=".$ttl;
?>
