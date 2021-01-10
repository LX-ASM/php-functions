<?php

function dosyaboyutu($dosya){

if(substr($dosya, 0, 2)=="./") #fix path problems
$dosya = substr($dosya, 2);
else if(substr($dosya, 0, 1)!="/")
$dosya = "/".$dosya; 

if(!file_exists($dosya)){ #check file exists
echo "Dosya bulunamadı. Eğer dosya bu dizinde ise lütfen başına ./ yazın.\n";
exit;
}


$dsya = filesize($dosya); #get file size

if($dsya>1023){
$dsya = (int)($dsya / 1024); #get a human readable output.
$byte = $dsya % 1024;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024); #get a human readable output.
$kb = $dsya % 1024;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024); #get a human readable output.
$mb = $dsya % 1024;
}

if($dsya>1023){
$dsya = (int)($dsya / 1024); #get a human readable output.
$gb = $dsya % 1024;
}

if(isset($byte))
return $dsya." KB + ".$byte." Bytes"; #get an output.
else if(isset($kb))
return $dsya." MB + ".$kb."KB + ".$byte." Bytes"; #get an output.
else if(isset($mb))
return $dsya." GB + ".$mb." MB + ".$kb."KB + ".$byte." Bytes"; #get an output.
else if(isset($gb))
return $dsya." TB + ".$gb." GB + ".$mb." MB + ".$kb."KB + ".$byte." Bytes"; #get an output.
else
return $dsya." Bytes"; #get an output.

}

$dossya = readline("Dosya Adı: ");
echo dosyaboyutu($dossya)."\n";

?>
