<?php
function dosyaboyutu($dosya){

if(substr($dosya, 0, 2)=="./")
$dosya = substr($dosya, 2);
else if(substr($dosya, 0, 1)!="/")
$dosya = "/".$dosya;

$dsya = filesize($dosya);

if($dsya>1023){

$dsya = (int)($dsya / 1024);
$byte = $dsya % 2014;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024);
$kb = $dsya % 1024;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024);
$mb = $dsya % 1024;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024);
$gb = $dsya % 1024;
}

if(isset($byte))
return $dsya." KB + ".$byte." Bytes";
else if(isset($kb))
return $dsya." MB + ".$kb."KB + ".$byte." Bytes";
else if(isset($mb))
return $dsya." GB + ".$mb." MB + ".$kb."KB + ".$byte." Bytes";
else if(isset($gb))
return $dsya." TB + ".$gb." GB + ".$mb." MB + ".$kb."KB + ".$byte." Bytes";
else
return $dsya." Bytes";

}
?>
