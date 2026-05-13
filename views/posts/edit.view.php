<?php require "views/components/navbar.php"; ?>
<?php ob_start(); ?>
    <h1> Rediģēt <?= $post["content"] ?> </h1>

    <form method="POST">
        <label> Bloga raksts
            <input name="content" value ='<?=  htmlspecialchars($_POST['content'] ?? $post['content'])?>'/>
            <input name="id" value = <?= htmlspecialchars($post["id"]) ?> type = "hidden"/>
        </label>

        <?php if(isset($errors["content"])){?>
            <p> <?=htmlspecialchars($errors["content"])?> </p>
        <?php } ?> </br>
        <button> Saglabāt </button>
    </form>

    <select name="category_id">
    <?php foreach ($categories as $category) { ?>
        <option value="<?= $category['id'] ?>">
            <?= htmlspecialchars($category['category_name']) ?>
        </option>
    <?php } ?>
<?php $out1 = ob_get_contents();?>
<?php ob_end_clean(); ?>   
<?php require "views/components/layout.php"; ?>