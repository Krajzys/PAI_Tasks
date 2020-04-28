<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array('nazwisko' => array('rule' => 'notBlank'),
						  'etat' => array('rule' => 'notBlank'),
						  'placa_pod' => array('Płaca musi być większa (w przedziale od 0 do 2000)' => array('rule' => array('comparison', '>=', 0)),
											   'Płaca musi być mniejsza (w przedziale od 0 do 2000)' => array('rule' => array('comparison', '<=', 2000))));
}
