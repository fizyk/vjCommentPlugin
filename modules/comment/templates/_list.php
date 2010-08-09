<?php if($object->hasComments()): ?>
  <?php use_helper('Date', 'JavascriptBase', 'I18N') ?>
  <?php use_stylesheet("/vjCommentPlugin/css/comment.min.css") ?>
  <?php use_javascript("/vjCommentPlugin/js/reply.min.js") ?>
  <?php if(commentTools::isGravatarAvailable()): ?>
    <?php use_helper('Gravatar') ?>
  <?php endif ?>
  <div><h1><?php echo __('Comments list', array(), 'vjComment') ?></h1></div>
  <table class="list-comments" summary="">
  <?php foreach($object->getAllComments() as $c): ?>
    <?php include_partial("comment/comment", array('obj' => $c, 'i' => ++$i)) ?>
  <?php endforeach; ?>
  </table>
<?php else: ?>
  <div><h1><?php echo __('Be the first to post', array(), 'vjComment') ?></h1></div>
<?php endif ?>