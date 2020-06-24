<?php
    require_once 'app/header.php';
    $face_id = $_GET['face_id'];
    $face = get_face_id($face_id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="<?=$face['email']?>" width="100%">
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1><?=$face['name'];?></h1>
            </div>
            <div class="blogShort">
            <p class="text-justify"><?=$face['discript']?></p>
            <p class="text-right"><a class="btn btn-success" href="index.php">Назад</a></p>
            </div>
        </div>
    </div>
    
</div>
<?php
    require_once 'app/footer.php';
?>
