<?php



/**
 * This class defines the structure of the 'session' table.
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
class SessionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SessionTableMap';

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
		$this->setName('session');
		$this->setPhpName('Session');
		$this->setClassname('Session');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'SMALLINT', true, 5, null);
		$this->addColumn('ID_COACH', 'IdCoach', 'INTEGER', true, 10, 0);
		$this->addColumn('NAME', 'Name', 'CHAR', true, 50, '');
		$this->addColumn('NBR_COURSES', 'NbrCourses', 'SMALLINT', true, 5, 0);
		$this->addColumn('NBR_USERS', 'NbrUsers', 'SMALLINT', true, 8, 0);
		$this->addColumn('NBR_CLASSES', 'NbrClasses', 'SMALLINT', true, 8, 0);
		$this->addColumn('DATE_START', 'DateStart', 'DATE', true, null, '0000-00-00');
		$this->addColumn('DATE_END', 'DateEnd', 'DATE', true, null, '0000-00-00');
		$this->addColumn('NB_DAYS_ACCESS_BEFORE_BEGINNING', 'NbDaysAccessBeforeBeginning', 'TINYINT', false, 3, 0);
		$this->addColumn('NB_DAYS_ACCESS_AFTER_END', 'NbDaysAccessAfterEnd', 'TINYINT', false, 3, 0);
		$this->addColumn('SESSION_ADMIN_ID', 'SessionAdminId', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SessionTableMap
