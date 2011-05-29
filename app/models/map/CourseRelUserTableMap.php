<?php



/**
 * This class defines the structure of the 'course_rel_user' table.
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
class CourseRelUserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CourseRelUserTableMap';

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
		$this->setName('course_rel_user');
		$this->setPhpName('CourseRelUser');
		$this->setClassname('CourseRelUser');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, null);
		$this->addPrimaryKey('USER_ID', 'UserId', 'INTEGER', true, 10, 0);
		$this->addColumn('STATUS', 'Status', 'TINYINT', true, 4, 5);
		$this->addColumn('ROLE', 'Role', 'VARCHAR', false, 60, null);
		$this->addColumn('GROUP_ID', 'GroupId', 'INTEGER', true, 11, 0);
		$this->addColumn('TUTOR_ID', 'TutorId', 'INTEGER', true, 10, 0);
		$this->addColumn('SORT', 'Sort', 'INTEGER', false, 11, null);
		$this->addColumn('USER_COURSE_CAT', 'UserCourseCat', 'INTEGER', false, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CourseRelUserTableMap
