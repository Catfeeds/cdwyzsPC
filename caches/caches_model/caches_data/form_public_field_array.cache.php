<?php
return array (
  'lpmc' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'lpmc',
      'name' => '楼盘名称',
      'tips' => '',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => '{\\"size\\":\\"50\\",\\"defaultvalue\\":\\"\\",\\"ispassword\\":\\"0\\"}',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `lpmc` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
  'sjhm' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'sjhm',
      'name' => '手机号码',
      'tips' => '',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '/^(1)[0-9]{10}$/',
      'errortips' => '',
      'modelid' => '0',
      'setting' => '{\\"size\\":\\"50\\",\\"defaultvalue\\":\\"\\",\\"ispassword\\":\\"0\\"}',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `sjhm` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
  'xm' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'xm',
      'name' => '姓名',
      'tips' => '',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => '{\\"size\\":\\"50\\",\\"defaultvalue\\":\\"\\",\\"ispassword\\":\\"0\\"}',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `xm` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
);
?>