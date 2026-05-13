<?php require "views/components/navbar.php"; ?>
<?php ob_start(); ?>

<h1> <?= htmlspecialchars($post["content"]) ?> <?h1>

<a href="/edit?id=<?=$post["id"]?>"> edit </a>

<form method="POST" action="/delete?id=<?= $post["id"]?>">
<input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form>

<?php $out1 = ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php require "views/components/layout.php"; ?>