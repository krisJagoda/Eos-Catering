<?php
  $footer = file_get_contents('footer.php');

  echo str_replace('class="container footer__desktop"','class="container footer__large"', $footer);


 ?>
