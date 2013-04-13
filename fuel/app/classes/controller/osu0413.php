<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Osu0413
 *
 * @author naoyes
 */
class Controller_Osu0413 extends \Fuel\Core\Controller {
	public static function action_index($text = 'no definition') {
		$data = array(
                            'title' => '2013/04/13 FuelPHP',
                            'text' => $text
                        );
		return View::forge('osu0413', $data);	
	}
}

?>
