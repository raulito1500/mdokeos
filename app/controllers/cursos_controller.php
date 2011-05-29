<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class CursosController extends AppController {

    public function index() {
        Session::set('myDbName', 'dokeos_main');
        Propel::init(APP_PATH . 'config/propel/dokeos-conf.php');

        $this->cursos = CoursePeer::doSelect(new Criteria());
    }

    public function ver($curso_sel) {

        Session::set('curso_sel', $curso_sel);

        $c = new Criteria();
        $c->add(CoursePeer::CODE, $curso_sel);
        $this->curso = CoursePeer::doSelectOne($c);
    }

    public function agenda() {
        $curso_sel = Session::get('curso_sel');
    }

    public function mis_cursos() {
        $c = new Criteria();
        // TODO: Usar ID de Usuario Logueado
        $c->add(CourseRelUserPeer::USER_ID, Session::get('id'));
        $cursos = CourseRelUserPeer::doSelect($c);
        foreach ($cursos as $cu) {
            $cursos_codigos[] = $cu->getCourseCode();
        }
        $this->cursos = CoursePeer::retrieveByPKs($cursos_codigos);
    }

    public function inscribirme() {
        $crit = new Criteria();
        // TODO:  Usar ID de Usuario Logueado
        $crit->add(CourseRelUserPeer::USER_ID, Session::get('id'));
        $crit->addDescendingOrderByColumn(CourseRelUserPeer::SORT);
        $curso = CourseRelUserPeer::doSelectOne($crit);
        $sort = ($curso->getSort() + 1);

        $inscripcion = new CourseRelUser();
        $inscripcion->setCourseCode(Session::get('curso_sel'));
        // TODO: Usar ID de Usuario Logueado
        $inscripcion->setUserId(Session::get('id'));
        // Por defecto para alumnos ?? creo!
        $inscripcion->setStatus(5);
        $inscripcion->setRole(null);
        $inscripcion->setGroupId(0);
        $inscripcion->setTutorId(0);
        $inscripcion->setSort($sort);
        $inscripcion->setUserCourseCat(0);
        $inscripcion->save();
        return Router::redirect('cursos/mis_cursos', 0);
    }

}
