<?php 
$ini = parse_ini_file('../config/config.ini');

$all_files = glob("../../Img/"."*.*");

$imgArray = [];

for ($i=0; $i<count($all_files); $i++) {
$image_name = $all_files[$i];
array_push($imgArray, $image_name);
}
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
    images[counterHidden].style.display = "none";  
    }
    counterShown++;
    if (counterShown > images.length) {
        location.reload();
        counterShown = 1;
    }    
    images[counterShown-1].style.display = "block";  
    setTimeout(carousel, <?php echo $ini['interval']; ?>); 
}
</script>