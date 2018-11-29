<h1><?=$title?></h1>
<?php foreach($posts as $post):?><h3><?php echo $post['title'];?>,</h3>
<small class="post-date">posted on:<?php echo $post['created_at'];?></small><br>
<?php echo $post['BODY'];?>
<br>
<p><a class="btn" href="<?php echo site_url('/post/'.$post['slag']);?>">Read More</a></p>
<?php endforeach;?>