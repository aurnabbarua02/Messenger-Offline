<?php 
    include 'head.php';
    include 'info.php';  
?>
<style>
    .head_body div:hover{
        background-color: #C9C9C9;
    }
    
</style>
<body>
    <section class="header shadow-sm p-3 mb-5 bg-white rounded">
        <div class="d-flex float-start">           
            <img src="icon.jpg" style="cursor:pointer;">
            <p><b>Messenger</b></p>
        </div>
    </section>
    <section class="head_body">
        <?php foreach ($info as $data){ ?>
            <a href="body.php?data=<?php echo urlencode(serialize($data)); ?>">
            <div class="d-flex">
                <img src="<?php echo $data[0]; ?>">
                <p><?php echo $data[1] ?></p>
            </div></a>
        <?php } ?>
    </section>
</body>
</html>