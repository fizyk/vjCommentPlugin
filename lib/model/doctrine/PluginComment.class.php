<?php

/**
 * PluginComment
 *
 * @package    vjCommentPlugin
 * @subpackage model
 * @author     Jean-Philippe MORVAN <jp.morvan@ville-villejuif.fr>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class PluginComment extends BaseComment
{
    public function getAuthor()
    {
        if( null !== $this->getUserId() )
        {
            return $this->getUser()->getUsername();
        }
        else
        {
            return $this->getAuthorName();
        }
    }
}