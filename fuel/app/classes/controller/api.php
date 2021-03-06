<?php
class Controller_Api extends \Fuel\Core\Controller_Rest
{
    public function get_list()
    {
        return Model_Bb::find('all');
    }
    
    public function get_create()
    {
        $bb = Model_Bb::forge();
        $bb->post_date = Input::get('post_date');
        $bb->message = Input::get('message');
        $bb->save();
        
        return array(
            'id' => $bb->id,
            'post_date' => $bb->post_date,
            'message' => $bb->message,
        );
    }

    public function get_edit()
    {
        $bb = \Model_Bb::find(\Input::get('id'));
        $bb->post_date = \Input::get('post_date');
        $bb->message = \Input::get('message');
        $bb->save();

	return array(
	    'id' => $bb->id,
	    'post_date' => $bb->post_date,
	    'message' => $bb->message,
	);
    }
}
?>
