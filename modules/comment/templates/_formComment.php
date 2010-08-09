<?php use_helper('I18N', 'JavascriptBase') ?>
<?php use_stylesheet("/vjCommentPlugin/css/form.min.css") ?>
<?php use_stylesheet("/vjCommentPlugin/css/formComment.min.css") ?>
<?php $sf_user->setAttribute('nextComment', $object->getNbComments()+1) ?>
<a name="top"></a>
<div class="form-comment">
<?php if( vjComment::checkAccessToForm() ): ?>
  <form action="" method="post">
  <fieldset>
    <legend><?php echo __('Add new comment', array(), 'vjComment') ?></legend>
    <?php include_partial("comment/form", array('form' => $form)) ?>
  </fieldset>
  </form>
<?php else: ?>
  <div id="notlogged"><?php echo __('Please log in to comment', array(), 'vjComment') ?></div>
<?php endif ?>
</div>