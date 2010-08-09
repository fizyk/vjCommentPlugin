<?php

/**
 * PluginComment form.
 *
 * @package    vjCommentPlugin
 * @subpackage filter
 * @author     Jean-Philippe MORVAN <jp.morvan@ville-villejuif.fr>
 * @version    SVN: $Id: sfDoctrineFormFilterPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginCommentFormFilter extends BaseCommentFormFilter
{
  public function setup()
  {
    parent::setup();
    $choices = $this->getRecordModelChoices();
    $this->widgetSchema['record_model'] = new sfWidgetFormChoice(array('choices' => $choices));
    $this->validatorSchema['record_model'] = new sfValidatorChoice(array('required' => false, 'choices' => $choices));
  }

  private function getRecordModelChoices()
  {
    $choices = array('' => '');
    foreach(Doctrine::getTable('Comment')->getAllModels() as $m)
    {
      $choices[$m['record_model']] = $m['record_model'];
    }
    return $choices;
  }

  public function addRecordModelColumnQuery($query, $field, $value)
  {
    if (!empty($value))
    {
      $query->addWhere('record_model=?', $value);
    }
  }

}
