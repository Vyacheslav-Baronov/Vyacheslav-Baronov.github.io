<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?=$post->title ?></h3>
                </div>
                <div class="panel-body">
                    <?=$post->intro_text ?>
                    <a href="<?= yii\helpers\Url::to(['post/view', 'id'=> $post->id])?>">
                        <h4><i>Узнать больше</i></h4>
                    </a>
                </div>
            </div>
    <?php endforeach; ?>
<?php endif; ?>
