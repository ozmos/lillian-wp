<?php
/**
 * Creates the necessary custom fields and loads them into the front page 
 */

if( function_exists('acf_add_local_field_group') ):
/* MASTHEAD */

include 'masthead.acf.php';

/* PORTFOLIO */

include 'portfolio.acf.php';

/* ABOUT */

include 'about.acf.php';

/* LOCATION */
include 'location.acf.php';

/* SOCIAL MEDIA */

include 'social-media.acf.php';

/* FOOTER ABOUT SECTION */

include 'business-info.acf.php';

endif;