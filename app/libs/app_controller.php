<?php

/**
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 * */
// @see Controller nuevo controller
require_once CORE_PATH . 'kumbia/controller.php';

// Include the main Propel script
require_once APP_PATH . 'libs/propel/Propel.php';

// Initialize Propel with the runtime configuration
Propel::init(APP_PATH . 'config/propel/dokeos-conf.php');

// Add the generated 'classes' directory to the include path
set_include_path(APP_PATH . 'models');

class AppController extends Controller {

    protected $my_auth;

    final protected function initialize() {
        Session::delete('myDbName');
        $this->my_auth = new MyAuth();
        if (!$this->my_auth->check()) {
            Flash::warning($this->my_auth->getError());
            Input::delete('password');
            View::select(null, 'login');
        }
    }

    final protected function finalize() {
        
    }

    public function logout() {
        $this->my_auth->logout();
        Router::redirect('/');
    }

}