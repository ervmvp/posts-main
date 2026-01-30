<?php
    require_once "functions.php";
    require_once "Database.php";
    $config = require "config.php";
        $db = new Database($config["database"]);
            $category_name = "SELECT * FROM categories";
            $params = [];
            if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
                $category_name .= " WHERE category_name LIKE :search";
                $params["search"] = "%" . $_GET["search_query"] . "%";
            }
        $categories = $db->query($category_name, $params)->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1> Emuārs </h1>";
        echo "<form>";
            echo "<input name='search_query' />";
            echo "<button> Meklēt </button>";
        echo "</form>";
    echo "<ul>";
        foreach($categories as $category) {
            echo "<li>" . $category["category_name"] . "</li>";
        }
    echo "</ul>";





