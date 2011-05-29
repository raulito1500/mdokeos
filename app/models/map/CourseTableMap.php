<?php



/**
 * This class defines the structure of the 'course' table.
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
class CourseTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CourseTableMap';

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
		$this->setName('course');
		$this->setPhpName('Course');
		$this->setClassname('Course');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CODE', 'Code', 'VARCHAR', true, 40, null);
		$this->addColumn('DIRECTORY', 'Directory', 'VARCHAR', false, 40, null);
		$this->addColumn('DB_NAME', 'DbName', 'VARCHAR', false, 40, null);
		$this->addColumn('COURSE_LANGUAGE', 'CourseLanguage', 'VARCHAR', false, 20, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 250, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CATEGORY_CODE', 'CategoryCode', 'VARCHAR', false, 40, null);
		$this->addColumn('VISIBILITY', 'Visibility', 'TINYINT', false, 4, 0);
		$this->addColumn('SHOW_SCORE', 'ShowScore', 'INTEGER', true, 11, 1);
		$this->addColumn('TUTOR_NAME', 'TutorName', 'VARCHAR', false, 200, null);
		$this->addColumn('VISUAL_CODE', 'VisualCode', 'VARCHAR', false, 40, null);
		$this->addColumn('DEPARTMENT_NAME', 'DepartmentName', 'VARCHAR', false, 30, null);
		$this->addColumn('DEPARTMENT_URL', 'DepartmentUrl', 'VARCHAR', false, 180, null);
		$this->addColumn('DISK_QUOTA', 'DiskQuota', 'INTEGER', false, 10, null);
		$this->addColumn('LAST_VISIT', 'LastVisit', 'TIMESTAMP', false, null, null);
		$this->addColumn('LAST_EDIT', 'LastEdit', 'TIMESTAMP', false, null, null);
		$this->addColumn('CREATION_DATE', 'CreationDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('EXPIRATION_DATE', 'ExpirationDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('TARGET_COURSE_CODE', 'TargetCourseCode', 'VARCHAR', false, 40, null);
		$this->addColumn('SUBSCRIBE', 'Subscribe', 'TINYINT', true, 4, 1);
		$this->addColumn('UNSUBSCRIBE', 'Unsubscribe', 'TINYINT', true, 4, 1);
		$this->addColumn('REGISTRATION_CODE', 'RegistrationCode', 'VARCHAR', true, 255, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CourseTableMap
