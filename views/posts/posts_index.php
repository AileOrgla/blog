<?foreach( $posts as $post ):?>
<div class="span8">
    <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
    <p><?=$post['post_text']?></p>
    <div>
        <?foreach ($tags[$post['post_id']] as $tag):?>
            <a href="tags/view/<?= $tag['tag_id'] ?>/<?= $tag['tag_name'] ?>"><span class="label" style="background-color: #5bc0de"><?=$tag['tag_name']?></span></a> <? endforeach?>
    </div>
</div>
<?endforeach?>