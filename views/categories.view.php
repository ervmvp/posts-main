<?php require "components/navbar.php"; ?>
<?php ob_start(); ?>
<div class="container">
    <h1> Categories </h1>
    <div class="searchBox">
        <form>
            <input name='search_query' class="searchBar" value='<?= $_GET["search_query"] ?? "" ?>' />
            <button class="searchBar"> Meklēt </button>
        </form>
        <?php if (count($categories) == 0) { ?>
            <p>❌spēks pateikt nē..</p>
        <?php } else { ?>
            <ul>
                <?php foreach($categories as $category) { ?>
                    <li> <?php echo $category["category_name"] ?> </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>
<?php $out1 = ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php require "components/layout.php"; ?>