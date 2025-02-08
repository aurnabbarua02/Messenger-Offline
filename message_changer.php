<?php
$file1 = 'data.txt';
$file = 'person0_data.txt';
copy($file, $file1);
unlink($file);
function isDate($string) {
    $date = DateTime::createFromFormat('Y-m-d', $string);
    return $date && $date->format('Y-m-d') === $string;
}
$content = file($file1, FILE_IGNORE_NEW_LINES);

foreach ($content as $index => $line){  
    if($index % 2 == 0 && !isDate($line) && $line!=''){
        file_put_contents($file, PHP_EOL ."person0 -> ". $line , FILE_APPEND);
    }
    else if($index %2 == 1 && !isDate($line) && $line!=''){
        file_put_contents($file, PHP_EOL ."person1 -> ". $line , FILE_APPEND);
    } 
    else if(isDate($line)){
        file_put_contents($file, PHP_EOL . $line , FILE_APPEND);

    }
}
?>