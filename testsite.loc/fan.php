<?php
    require_once 'app/include/database.php';
    require_once 'app/include/function.php';
    require_once 'app/header.php';
    $fan = get_fan();
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img width="100%" src="https://fsb.zobj.net/crop.php?r=O1mVQTueF7XTI6JhNvqPZp3XuPYtSIr_oUksbJaC3LxzUt1HJ2B1rZv9MmZI6VzAIvvE2pE-7ED2Dlhgr8k1tQN9e7J9_8Inl8yVtdIvgi9nH_DhdG_2-XxpcBn8XhaDa6SaZoFff_RBL1rK">
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1 id="caption">Фанаты</h1>
            </div>
            <table class="table table-bordered table-striped">
                <head>
                <tr>
                    <th class="text-center">
                        email
                    </th>
                    <th class="text-center">
                        band
                    </th>
                </tr>
                </head>
                <tbody>
                    <?php foreach ($fan as $carrot): ?>
                    <tr>
                        <td><?=$carrot['email']?></td>
                        <td><?=$carrot['name']?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once 'app/footer.php';
?>