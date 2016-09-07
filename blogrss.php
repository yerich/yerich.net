<?
header('Content-Type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>

<rss version='2.0'>
  <channel>
    <title>Richard Ye</title>
    <description>Personal blog of Richard Ye, programmer and gamer</description>
    <link>http://yerich.net/</link>
    <copyright>Copyright Richard Ye. Licensed under the MIT license unless otherwise specified.</copyright>

    <?php
    $blogposts = explode("\n", file_get_contents("blog.txt"));
    $i = 0;
    foreach($blogposts as $post) {
      if ($i > 10) break;
      $i++;

      if(!$post || $post[0] === "1") continue;

      $post = explode("||", $post);
      $date = strtotime($post[0]);
      $contents = file_get_contents("blogposts/".$post[1].".html");
      preg_match("%<!--summary-->.*?<!--\/summary-->%s", $contents, $matches);

      if (!$matches)
        preg_match("%<p>.*?<\/p>%s", $contents, $matches);

      $title = $post[2];
      $html = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $matches[0]);
      $html = preg_replace('#<style(.*?)>(.*?)</style>#is', '', $html);
      $html = strip_tags($html);

      ?>
      <item>
        <title><?= $title ?></title>
        <description><?= $html ?>.</description>
        <link><a href="/blog/<?= $post[1] ?>"><?= $title ?></a></link>
        <pubDate><?= date("r", $date) ?></pubDate>
      </item>
    <? } ?>
  </channel>
</rss>
