  <div class="backtop<?php if($text) echo " backtopmax"; ?>">
    <a href="<?php echo url_for($route."#comments") ?>">
<?php if($text): ?>
<?php echo __('Back to top', array(), 'vjComment') ?>
<?php endif; ?>
<?php echo image_tag('/vjCommentPlugin/images/arrow-up.png', array('alt' => __('Back to top', array(), 'vjComment'), 'title' => __('Back to top', array(), 'vjComment'))) ?>
    </a>
  </div>