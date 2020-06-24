<?php
    require_once 'app/header.php';
?>
<div class="conteiner">
    <div class="row">
        <div class="col-md-3">
            <img src="https://i.pinimg.com/236x/1e/ce/cc/1ececce5ee48c54cebde0823986d42de.jpg" class="pull-right img-responsive postImg img-thumbnail margin10">
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1 id="caption">Популярные лица</h1>
            </div>
            <?php $face = get_face();?>
            <?php foreach($face as $f):?>
            <div class="col-md-10">
                     <h1><?=$f['name']?></h1>
                     <img id="scale" src="<?=$f['email']?>" alt="post img" width="150px;" class="pull-left img-responsive postImg img-thumbnail margin10" style="margin: 0px 20px 10px 0px;">
                     <article><p id="content" class="text-justify">
                         <?=mb_substr($f['discript'], 0, 1000, 'utf-8').'...'?>
                         </p>
                         <p class="text-right">
                             <a class="btn btn-success btn-sm" href="/idol.php?face_id=<?=$f['id']?>">Читать полностью</a>
                         </p>
                       </article>
                     
                     <?=$f['img']?>
                 </div>
            <?php endforeach;?>
        </div>
        
    </div>
            <div class="scroll_btn">
    <button class="btn_scroll">▲</button>
</div>
   
</div>

<?php
    require_once 'app/footer.php';
?>
