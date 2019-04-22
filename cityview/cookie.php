<!-- The code below is to catch the last page visited -->
<?php
$uri = (string)$_SERVER['REQUEST_URI'];

if (!isset($_COOKIE['history'])) {           // if no product history
    $his[] = $uri;                           // just store product uri
 } else {                                    // if product history not empty
    $his = explode('|',$_COOKIE['history']);  // explode
    if (in_array($uri, $his)){
        $pos = array_search($uri, $his);
        if ($pos == 0){
            $new_his = array_slice($his, $pos+1);
        } else {
            $new_his = array_merge(array_slice($his, 0, $pos), array_slice($his, $pos+1));
        }
        $his = $new_his;
    }
    array_unshift($his, $uri);
    if (count($his) > 5) {             // store 10 url
        array_pop($his);
    }
 }

$expire=time()+60*60*24*30;
setcookie('history',implode('|', $his),$expire);

?>

<!-- The code below is to display the last five visited page -->
<?php
                    $his = explode('|', $_COOKIE['history']);
                    foreach ($his as $v) { ?>
                        <?php $p_page = ltrim($v, "/");
                        $p_name_0 = rtrim($p_page, ".html");
                        // $i = stripos($p_name_0, "_");
                        // $p_name_1 = substr($p_name_0, ($i + 1));
                        // $p_name_2 = ucwords(str_replace("_", " ", $p_name_1));
                        ?>
                        <li> <?php echo "<a href=\"$p_page\"> $p_name_0 </a>";
                        // echo "<br>";
                        // echo $his;
                        // print_r ($his); ?></li>
                    <?php };
                ?>