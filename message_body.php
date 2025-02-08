<?php
    $content = file($file, FILE_IGNORE_NEW_LINES);

    function isDate($string) {
        $date = DateTime::createFromFormat('Y-m-d', $string);
        return $date && $date->format('Y-m-d') === $string;
    }
?>
  
<section class="body mx-auto">
        <?php $i=0; ?>
        <?php foreach ($content as $line) { ?>
            <div class="row">
                <?php if (strpos($line, "person0 ->") !== false){?>
                <div class="me"><p><?php echo htmlspecialchars(str_replace("person0 -> ", "",$line)); ?></p></div> <br>
                <?php } ?>
                <?php if (strpos($line, "person1 ->") !== false){?>
                <div class="she d-flex">
                    <img src="<?php echo $data[0]; ?>">
                    <p><?php echo htmlspecialchars(str_replace("person1 -> ", "",$line)); ?></p>
                </div>
                <?php } ?>
                <?php if(isDate($line)) {?>
                    <p class="full-width-line"><?php echo htmlspecialchars($line) ;?></p>
                    <?php } ?>
            </div>             
        <?php } ?> 
</section>
