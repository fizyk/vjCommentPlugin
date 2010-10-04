
    <tr>
      <td class="body">
        <?php if(!$obj->is_delete): ?>
        <div id="body_<?php echo $obj->id ?>"><?php echo commentTools::parseQuoting($obj->getBody()) ?></div>
        <?php else: ?>
          <div class="msg-deleted"><?php echo __('Comment deleted by moderator', array(), 'vjComment') ?></div>
        <?php endif ?>
      </td>
    </tr>