<?php
/**
 * vjCommentPlugin configuration.
 * 
 * @package    vjCommentPlugin
 * @author     Jean-Philippe MORVAN <jp.morvan@ville-villejuif.fr>
 */
class vjCommentPluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    $this->dispatcher->connect('routing.load_configuration', array('vjCommentRouting', 'listenToRoutingLoadConfigurationEvent'));
    if (in_array('commentAdmin', sfConfig::get('sf_enabled_modules', array())))
    {
      $this->dispatcher->connect('routing.load_configuration', array('vjCommentRouting', 'addRouteForAdminComments'));
    }
    if (in_array('commentReportAdmin', sfConfig::get('sf_enabled_modules', array())))
    {
      $this->dispatcher->connect('routing.load_configuration', array('vjCommentRouting', 'addRouteForAdminReportedComments'));
    }
  }
}
