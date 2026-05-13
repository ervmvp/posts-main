<?php require "views/components/navbar.php"; ?>
<?php ob_start(); ?>
<div class="container">
    <h1> Emuārs </h1>
        <form >
            <input name='search_query' class="searchBar" value='<?= $_GET["search_query"] ?? "" ?>' />
            <button class="searchBar"> Meklēt </button>
        </form>
        <?php if (count($posts) == 0) { ?>
            <p>❌spēks pateikt nē..</p>
        <?php } else { ?>
            <ul>
                <?php foreach($posts as $post) { ?>
                    <li> <a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?></a> </li>
                <?php } ?>
            </ul>
        <?php } ?>
</div>
<?php $out1 = ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php require "views/components/layout.php"; ?>