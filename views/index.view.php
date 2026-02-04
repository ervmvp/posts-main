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
        <div class="header"></div>
        <h1> Emuārs </h1>
            <form >
                <input name='search_query' class="searchBar"/>
                <button class="searchBar"> Meklēt </button>
            </form>
            <?php if (count($posts) == 0) { ?>
                <p>❌spēks pateikt nē..</p>
            <?php } else { ?>
                <ul>
                    <?php foreach($posts as $post) { ?>
                        <li> <?php echo $post["content"] ?> </li>
                    <?php } ?>
                </ul>
            <?php } ?>
    </div>
</body>
</html>