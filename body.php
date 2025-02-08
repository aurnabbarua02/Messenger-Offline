<?php
    $data = isset($_GET['data']) ? unserialize(urldecode($_GET['data'])) : [];    
    $hidden = '';
    include 'head.php';
?>
<body>  
    <?php      
        $file = $data[2];  
        include 'model_and_hide.php';
        include 'navbar.php'; 
        include 'text_prompt.php';
        include 'message_body.php';
    ?>   
      
<script src="script.js"></script>  
</body>

</html>