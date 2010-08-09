<?php
/**
 * Library that holds all helping methods for coding
 *
 * @author fizyk
 */
class vjComment
{
  /**
   * Checks wheter user is authenticated, and the sfGuardPlugin bound to commentable
   * @return boolean
   * @author fizyk
   */
  static function isUserBoundAndAuthenticated()
  {
      return sfContext::getInstance()->getUser()->isAuthenticated() && sfConfig::get( 'app_vjCommentPlugin_guardbind', false );
  }

  /**
   * Check wheter or not the comment form can be accessed
   * @return boolean
   */
  static function checkAccessToForm()
  {
      if( sfConfig::get( 'app_vjCommentPlugin_restricted' ) )
      {
          return vjComment::isUserBoundAndAuthenticated();
      }
      else
      {
          return true;
      }
  }

  /**
   *
   * @return boolean
   * @author jp_morvan
   */
  static function isCaptchaEnabled()
  {
    return sfConfig::get('app_recaptcha_enabled');
  }
}
?>
