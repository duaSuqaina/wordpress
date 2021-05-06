<?php
get_headers();
?>

<main class="wrapper"></main>
<?php

while(have_post()) : the_post();
echo the_ID();

<h2> <?php the_title();?> </h2>
<div class="details"></div>
<p class="content'"> 
<?php the_content();?>
</p>
<a href=<"<?php the_permalink ?>">Read more</a>
endwhile;
?>


<?php
get_footer();
?>