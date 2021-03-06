<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

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

    public function about()
    {
        return $this->render('about');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo var_dump($body);
        return 'Handling Submitted Data';
    }
}
