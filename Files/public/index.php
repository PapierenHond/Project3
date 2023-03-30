<?php 
include("get_images.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($imgArray as $image) { ?>
            <img class="slides" src="../Img/<?php echo $image;?>">
        <?php } ?>
    </div>
    <img id="slider"src="CEMA_logo_1.png" class="logo">
</body>

<script>
var counterShown = 0;
carousel();

function carousel() {
    var images = document.getElementsByClassName("slides");
    for (counterHidden = 0; counterHidden < images.length; counterHidden++) {
    images[counterHidden].classList.remove('show');
    images[counterHidden].classList.add('hide');
    }
    counterShown++;
    if (counterShown > images.length) {
        location.reload();
        counterShown = 1;
    }    
    images[counterShown-1].classList.add('show');
    images[counterShown-1].classList.remove('hide');
    setTimeout(carousel, <?php echo $ini['interval']; ?>); 
}
</script>