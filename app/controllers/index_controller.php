<?php
/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController 
{
	public function index()
	{
            $user = UserQuery::create();
            $this->usuarios = $user->find();
            
            // Initialize Propel with the runtime configuration
            Session::set('myDbName', 'dokeos_0001');
            Propel::init(APP_PATH . 'config/propel/dokeos-conf.php');
            $foro = ForumForumQuery::create();
            $this->foros = $foro->find();
            
            Session::set('myDbName', 'dokeos_main');
            Propel::init(APP_PATH . 'config/propel/dokeos-conf.php');
            $user = UserQuery::create();
            $this->usuarios2 = $user->find();
	}
}
