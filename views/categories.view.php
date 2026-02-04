<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emuārs</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1> Categories </h1>
        <div class="searchBox">
            <form>
                <input name='search_query' />
                <button> Meklēt </button>
            </form>
            <?php if (count($posts) == 0) { ?>
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
</body>
</html>