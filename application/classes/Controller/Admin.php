<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_System_Base  {

    public function action_index()
    {
        $this->title = 'Страница админа';
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/admin/admin');
    }
    public function action_addusert()
    {
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/usert/addusert');
    }
    public function action_adduserp()
    {
        $this->txt = 'Учетные записи';
        $this->content = View::factory('pages/userp/adduserp');
        $this->content = View::factory('pages/userp/adduserp');
    }
    public function action_addingus()
    {


        if (isset($_POST['rdbtn'])) {

            $selected_radio = $_POST['radio'];

            if ($selected_radio == 'teach') {

                $this->action_adduserp();
            }
            else if ($selected_radio == 'pupil') {


                $this->action_addusert();
            }

        }

    }
} // End Welcome
