<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    switch ($_POST['vegetable']) {
        case '人参':
            switch ($_POST['vegetable2']) {
                case 'ほうれん草':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo '鶏むね肉の旬野菜巻き';
                        break;
                        case '豚肉':
                            echo 'ほうれん草と豚肉の中華炒め';
                        break;
                        case '牛肉':
                            echo 'キンパ';
                        break;
                        }
                break;

                case 'キャベツ':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo '鶏とキャベツのチーズ蒸し';
                        break;
                        case '豚肉':
                            echo '豚バラ肉とキャベツのオイスターソース炒め';
                        break;
                        case '牛肉':
                            echo 'ボルシチ風煮込みスープ';
                        break;
                    }
                break;

                case 'トマト':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo 'チキンと野菜のトマト煮込み';
                        break;
                        case '豚肉':
                            echo '豚肉とトマトの生姜焼き';
                        break;
                        case '牛肉':
                            echo '牛肉とトマトのおかずスープ';
                        break;
                    }
                break;                  
            } 
        break;

        case '玉ねぎ':
            switch ($_POST['vegetable2']) {
                case 'ほうれん草':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo 'ほうれん草とチキンのカレー';
                        break;
                        case '豚肉':
                            echo 'ほうれん草チーズハッシュドポーク';
                        break;
                        case '牛肉':
                            echo 'ゴマ香る牛肉とほうれん草の甘辛炒め';
                        break;
                        }
                break;

                case 'キャベツ':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo '鶏とキャベツのプルコギ';
                        break;
                        case '豚肉':
                            echo 'キャベツたっぷり豚汁';
                        break;
                        case '牛肉':
                            echo 'キャベツと牛肉のバター醤油炒め';
                        break;
                    }
                break;    

                case 'トマト':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo '鶏むね肉とレモントマトソースがけ';
                        break;
                        case '豚肉':
                            echo 'オニオントマトポークソテー';
                        break;
                        case '牛肉':
                            echo 'トマト缶で簡単ハヤシライス';
                        break;
                    }
                break;           
            } 
        break;

        case 'ジャガイモ':
            switch ($_POST['vegetable2']) {
                case 'ほうれん草':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo 'ジャガイモとほうれん草のチキングラタン';
                        break;
                        case '豚肉':
                            echo '豚バラとジャガイモのガーリックバター炒め';
                        break;
                        case '牛肉':
                            echo 'ビーフカツの赤ワインソース';
                        break;
                        }
                break;

                case 'キャベツ':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo 'チーズタッカルビ';
                        break;
                        case '豚肉':
                            echo 'だししみキャベ豚じゃが';
                        break;
                        case '牛肉':
                            echo '牛肉と新じゃがのアーリオオーリオ';
                        break;
                    }
                break;    

                case 'トマト':
                    switch ($_POST['meat']) {
                        case '鶏肉':
                            echo 'チキンとじゃがいものトマトチーズ煮';
                        break;
                        case '豚肉':
                            echo 'トマト肉じゃが';
                        break;
                        case '牛肉':
                            echo 'ピカディージョ';
                        break;
                    }
                break;           
            } 
        break;        
    }
    ?>
</body>
</html>