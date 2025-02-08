<?php
    $data = isset($_GET['data']) ? unserialize(urldecode($_GET['data'])) : [];    
    $hidden = '';
    include 'head.php';
?>
<body>  
    <?php      
        $file = $data[2];  
        $content = file($file);
        
    ?>  
    <section class="header shadow-sm p-3 mb-5 bg-white rounded">
        <div class="d-flex float-start">
        <a href="body.php?data=<?php echo urlencode(serialize($data)); ?>"><i class="bi bi-arrow-left"></i></a>
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
<img src="<?php echo $data[0]; ?>" style="cursor:pointer;"></button>
            <p><b><?php echo $data[1]; ?></b></p>
        </div>
        <div class="d-flex float-end right">
            <i class="bi bi-telephone-fill"></i>
            <i class="bi bi-camera-video-fill"></i>
            <i class="bi bi-info-circle-fill"></i>
        </div></section>

  
    <section class="body mx-auto" style="padding-bottom:0;">
        <form action="" method="post">  
            <textarea name="text" style="width:100%;" rows=20>
                <?php foreach ($content as $line) {echo htmlspecialchars($line);}?>     
            </textarea>
            <input type="submit" class="btn w-100 bg-success text-white" value="Save"> 
        </form>
    </section>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"]; 
    file_put_contents($file, $text);  

}
?>
</body>

</html>

  

