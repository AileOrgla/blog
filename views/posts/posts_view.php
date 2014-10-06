<div class="span8">
    <h1><?= $post['post_subject'] ?></h1>

    <p><?= $post['post_text'] ?></p>

    <div>
        <? foreach ($tags as $tag): ?>
            <a href="tags/view/<?= $tag['tag_name'] ?>">
                <span class="label label-info"><?= $tag['tag_name'] ?></span>
            </a>
        <? endforeach ?>
        <p><span class="badge"><?= $post['post_created'] ?></span>
        </p></div>
</div>
<h3>Kommentaarid</h3>
<? foreach ($comments as $comment): ?>
    <div class="well">
        <p><?= $comment['comment_text'] ?></p>

        <p><?= $comment['comment_created'] ?></p>

        <p><?= $comment['username'] ?></p>
    </div>
<? endforeach ?>

