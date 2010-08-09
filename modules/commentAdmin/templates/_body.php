<?php use_stylesheet('/vjCommentPlugin/css/infoBulle.min.css') ?>
<a class="info">
  <?php echo commentTools::cleanQuote($comment->getBody(ESC_RAW)) ?>
  <span class="body">
    <?php echo $comment->getBody(ESC_RAW) ?>
  </span>
</a>