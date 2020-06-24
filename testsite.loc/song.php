<?php
 require_once 'app/include/database.php';
 require_once 'app/include/function.php';
 require_once 'app/header.php';
$song = get_song();

?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img width="100%" src="https://fsb.zobj.net/crop.php?r=O1mVQTueF7XTI6JhNvqPZp3XuPYtSIr_oUksbJaC3LxzUt1HJ2B1rZv9MmZI6VzAIvvE2pE-7ED2Dlhgr8k1tQN9e7J9_8Inl8yVtdIvgi9nH_DhdG_2-XxpcBn8XhaDa6SaZoFff_RBL1rK">
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1 id="caption">Песни и исполнители</h1>
            </div>
            <table class="table table-striped table-bordered">
                <head>
                <tr>
                    <th class="text-center">
                       Имя исполнителя 
                    </th>
                    <th class="text-center">
                        Название песни
                    </th>
                </tr>
            </head>
                
                <tbody>
                    <?php
                    if($long['name_song'] !== NULL){
                        
                    } else{
                    foreach ($song as $long):?>
                    <tr>
                        <td><?=$long['name_face']?></td>
                        <td><?=$long['name_song']?></td>
                    </tr>
                    <?php endforeach;}?>
                </tbody>
                
                </head>
            </table>
        </div>
    </div>
</div>
<?php
require_once 'app/footer.php';
?>