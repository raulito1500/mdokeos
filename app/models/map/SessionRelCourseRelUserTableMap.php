<?php



/**
 * This class defines the structure of the 'session_rel_course_rel_user' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.dokeos.map
 */
class SessionRelCourseRelUserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SessionRelCourseRelUserTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('session_rel_course_rel_user');
		$this->setPhpName('SessionRelCourseRelUser');
		$this->setClassname('SessionRelCourseRelUser');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_SESSION', 'IdSession', 'SMALLINT', true, 5, 0);
		$this->addPrimaryKey('COURSE_CODE', 'CourseCode', 'CHAR', true, 40, '');
		$this->addPrimaryKey('ID_USER', 'IdUser', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SessionRelCourseRelUserTableMap
