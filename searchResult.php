<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/searchResult.css">
    <title>ボランティア</title>
</head>
<body>
    
    <?php include('./Navbar/navbar.php'); ?>
    <div id="SR_header">
        <img src="./image/navbar1.jpg">
        <div id="SR_tilte">
            <h1>イベントサーチ</h1>
            <p>Event Search</p>
        </div>
    </div>

    <section id="SR_SearchBar">

        <div id="search" class="search">

            <form action="#" method="GET" class="search-bar" target="_self" enctype="">
                <input type="hidden" id="lat"  name="lat">
                <input type="hidden" id="lng"  name="lng">
                <input type="text" placeholder="キーワードで検索" name="searchR">

                <div class="select">
                    <select name="eventTypes" id="eventTypes">
                        <option value="#">教育</option>
                        <option value="#">国際</option>
                        <option value="#">介護</option>
                        <option value="#">災害</option>
                        <option value="#">お祭り</option>
                    </select>
                </div>

                <div class="select">
                    <select name="eventTypes" id="eventTypes">
                        <option value="#">教育</option>
                        <option value="#">国際</option>
                        <option value="#">介護</option>
                        <option value="#">災害</option>
                        <option value="#">お祭り</option>
                    </select>
                </div>

                <button type="submit" value="send"><img src="./image/search.png"></button>
            </form>    
        </div>
    </section>
    <script src="./js/navbar.js"></script>
    
    <?php include('./Navbar/footer.php'); ?>
</body>

</html>