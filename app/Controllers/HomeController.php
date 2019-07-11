<?php

namespace App\Controllers;

class HomeController extends Controller {

    public function index ($request, $response) {
        
        //return 'Hello World!';
        //return $response->write('Hello World from response!');
        /*return $response->write(
            'What is your name? My name is: '. $request->getParam('name')
        );*/
        return $this->container->view->render($response, 'test.twig');
    }
}