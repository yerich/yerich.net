<? include("header.php"); ?>
    <div class="blog-posts">
    <?php
    $blogposts = explode("\n", file_get_contents("blog.txt"));
    
    foreach($blogposts as $post) {
        if(!$post || $post[0] === "1") continue;
        $post = explode("||", $post);
        $date = strtotime($post[0]);
        $contents = file_get_contents("blogposts/".$post[1].".html");
        preg_match("%<!--summary-->.*?<!--\/summary-->%s", $contents, $matches);
        
        if (!$matches)
            preg_match("%<p>.*?<\/p>%s", $contents, $matches);
        
        $title = $post[2];
        
        ?>
        <div class="blog-post-item">
            <h1 class="blog-title"><a href="/blog/<?= $post[1] ?>"><?= $title ?></a></h1>
            <span class="blog-date"><?= date("F j, Y", $date) ?></span>
            
            <div>
                <?= $matches[0]; ?>
            </div>
            
            <a href="blog/<?= $post[1] ?>" class="continue">Continue reading &raquo;</a>
        </div>
        <?
    }
    
    ?>
</div>

<? include("footer.php") ?>
