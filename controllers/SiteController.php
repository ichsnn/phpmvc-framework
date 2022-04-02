<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Ichsan Nulmuhlis"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        var_dump($_POST);
        return 'Handling Submitted Data';
    }
}
