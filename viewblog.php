<? 
$blogposts = explode("\n", file_get_contents("blogposts.txt"));
$post = false;
foreach($blogposts as $p) {
    if(!$p) continue;
    $p = explode("||", $p);
    if($p[1] == $_GET['name']) {
        $post = $p;
        break;
    }
}

if (!$post) {
    header("HTTP/1.0 404 Not Found");
    print("404 Page " . $_GET['name'] . " not found. <a href='/'>Homepage</a>");
    die();
}

$date = strtotime($post[0]);
$contents = file_get_contents("blogposts/".$post[1].".html");
$contents = preg_replace("%<!--\/?summary-->%", "", $contents);
$title = $post[2];

$_PAGETITLE = $title;


include("header.php"); ?>

<article class="blog-post">
    <h1 class="blog-title"><?= $title ?></h1>
    <span class="blog-date"><?= date("F j, Y", $date) ?></span>


<!-- BEGIN BLOG POST -->
<?= $contents ?>

<!-- END BLOG POST -->


</article>

<? include("footer.php") ?>
