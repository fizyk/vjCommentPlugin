<?php use_stylesheet('/vjCommentPlugin/css/infoBulle.min.css') ?>
<a class="info">
  <?php echo commentTools::cleanQuote($comment->getBody(), true) ?>
  <span class="body">
    <?php echo commentTools::parseQuoting($comment->getBody()) ?>
  </span>
</a>