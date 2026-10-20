<?php
$t=[];
$note= null;
while($note !== 'fin'){
    $note= readline('donnez un nombre ou (entrez fin pour voir la liste de nombres saisis ):');
    if($note !== 'fin'){
         $t[]= (int)$note;
         }

}
foreach($t as $v){
   echo "-$v\n";

}
?>