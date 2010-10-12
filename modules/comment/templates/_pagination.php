<div class="pagination">
<?php if($position == "back"): ?>
<?php include_partial('comment/back_to_top', array('route' => $route, 'text' => false)) ?>
<?php endif; ?>
  <a href="<?php echo url_for(commentTools::rewriteUrlForPage($route, 1)) ?>">
    <?php echo image_tag('/vjCommentPlugin/images/resultset_first.png', array('alt' => __('First page of comments', array(), 'vjComment'), 'title' => __('First page of comments', array(), 'vjComment'))) ?>
  </a>

  <a href="<?php echo url_for(commentTools::rewriteUrlForPage($route, $pager->getPreviousPage())) ?>">
    <?php echo image_tag('/vjCommentPlugin/images/resultset_previous.png', array('alt' => __('Previous page of comments', array(), 'vjComment'), 'title' => __('Previous page of comments', array(), 'vjComment'))) ?>
  </a>

  <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
      <?php echo $page ?>
    <?php else: ?>
      <a href="<?php echo url_for(commentTools::rewriteUrlForPage($route, $page)) ?>"><?php echo $page ?></a>
    <?php endif; ?>
  <?php endforeach; ?>

  <a href="<?php echo url_for(commentTools::rewriteUrlForPage($route, $pager->getNextPage())) ?>">
    <?php echo image_tag('/vjCommentPlugin/images/resultset_next.png', array('alt' => __('Next page of comments', array(), 'vjComment'), 'title' => __('Next page of comments', array(), 'vjComment'))) ?>
  </a>

  <a href="<?php echo url_for(commentTools::rewriteUrlForPage($route, $pager->getLastPage())) ?>">
    <?php echo image_tag('/vjCommentPlugin/images/resultset_last.png', array('alt' => __('Last page of comments', array(), 'vjComment'), 'title' => __('Last page of comments', array(), 'vjComment'))) ?>
  </a>
</div>
