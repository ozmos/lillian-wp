<?php
while ( have_posts() ) : the_post();
if (!empty(the_content())) {
    # code...
    the_content();
}

endwhile; // End of the loop.
?>