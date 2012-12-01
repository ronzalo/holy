<?php

/**
 * Holiday form.
 *
 * @package    feriados
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HolidayForm extends BaseHolidayForm
{
  public function configure()
  {
  	unset($this['created_at'], $this['updated_at']);
  	$this->widgetSchema['date'] = new sfWidgetFormJqueryDate();
  	$this->widgetSchema['law']->setDefault("Ley 2.977");
  }
}
