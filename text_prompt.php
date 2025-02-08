<div class="inputarea">
<form action="" method="post">         
        <label for="text1">I:</label>
        <input type="text" id="text1" name="text1">
        <br>
        <label for="text2">She:</label>
        <input type="text" id="text2" name="text2"> <br>        
        <input type="submit" class="btn" value="Send"> </div>
     
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];

    if($text1 == '' && $text2 == ''){
        file_put_contents($file, PHP_EOL. date('Y-m-d') , FILE_APPEND);
    }
    else if($text1 == ''){
        file_put_contents($file, PHP_EOL ."person1 -> ". $text2 , FILE_APPEND);
    }
    else if($text2 == ''){
        file_put_contents($file, PHP_EOL ."person0 -> ". $text1 , FILE_APPEND);
    }
}
?>