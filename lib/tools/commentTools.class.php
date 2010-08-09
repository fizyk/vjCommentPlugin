<?php

/**
 * comment tools.
 *
 * @package    vjCommentPlugin
 * @subpackage tools
 * @author     Jean-Philippe MORVAN <jp.morvan@ville-villejuif.fr>
 * @version    4 mars 2010 10:45:36
 */
class commentTools
{
  /**
   * Transform datetime to mktime
   *
   * @param string $datetime A Mysql datetime
   * @return integer A mktime
   */
  public static function getMktime($datetime)
  {
    list($date, $time) = explode(" ", $datetime);
    list($y, $m, $d) = explode("-", $date);
    list($h, $mi, $s) = explode(":", $time);
    return mktime($h, $mi, $s, $m, $d, $y);
  }

  /**
   * Verify that sfGravatarPlugin is installed and gravatar is activated
   *
   * @return boolean
   *
   */
  public static function isGravatarAvailable()
  {
    return sfConfig::get('app_gravatar_enabled');
  }

  /**
   * Add blockquote to the message
   *
   * @param string $author Author name
   * @param string $body Message
   * @return string Message with the right blockquote message
   */
  public static function setQuote($author, $body)
  {
    return <<<EOF
<blockquote><div><strong>$author</strong></div>$body</blockquote><br />
EOF;
  }

  /**
   * Remove HTML tags, blockquote part and cut down
   *
   * @param string $content Message
   * @return string Message without blockquote and cut down
   */
  public static function cleanQuote($content = "")
  {
    $content = substr(strip_tags(self::removeBlockquote($content)), 0, sfConfig::get('app_commentAdmin_max_length', 50));
    if(strlen($content) == sfConfig::get('app_commentAdmin_max_length', 50))
    {
      $content .= " ...";
    }
    return $content;
  }

  /**
   * Replace HTML line breaks with nothing
   *
   * @param string $string The string to format
   * @return string The string with HTML line breaks removed
   */
  public static function removeBr($string)
  {
    return str_replace("<br />", "", $string);
  }

  /**
   * Remove blockquote form string
   *
   * @param string $string A string
   * @return string The string without blockquote
   */
  public static function removeBlockquote($string)
  {
    $text = explode("</blockquote>", $string);
    if(count($text) > 1)
    {
      $string = $text[count($text) - 1];
    }
    return $string;
  }

  /**
   * Combinaison of removeBr and removeBlockquote
   *
   * @param string $string A string
   * @return string The string without blockquote and HTML line breaks
   */
  public static function removeBrAndBlockquote($string)
  {
    return self::removeBr(self::removeBlockquote($string));
  }
}
?>
