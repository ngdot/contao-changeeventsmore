<?php 

$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace(
    ',source',
    ',source,linktext',
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']
); 

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['linktext'] = array ( 
    'label'                   => &$GLOBALS['TL_LANG']['tl_calendar_events']['linktext'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);