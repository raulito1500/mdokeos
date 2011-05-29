<?php



/**
 * This class defines the structure of the 'group_info' table.
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
class GroupInfoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GroupInfoTableMap';

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
		$this->setName('group_info');
		$this->setPhpName('GroupInfo');
		$this->setClassname('GroupInfo');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', false, 100, null);
		$this->addColumn('CATEGORY_ID', 'CategoryId', 'INTEGER', true, 10, 0);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('MAX_STUDENT', 'MaxStudent', 'SMALLINT', true, 5, 8);
		$this->addColumn('DOC_STATE', 'DocState', 'TINYINT', true, 3, 1);
		$this->addColumn('CALENDAR_STATE', 'CalendarState', 'TINYINT', true, 3, 0);
		$this->addColumn('WORK_STATE', 'WorkState', 'TINYINT', true, 3, 0);
		$this->addColumn('ANNOUNCEMENTS_STATE', 'AnnouncementsState', 'TINYINT', true, 3, 0);
		$this->addColumn('FORUM_STATE', 'ForumState', 'TINYINT', true, 3, 0);
		$this->addColumn('WIKI_STATE', 'WikiState', 'TINYINT', true, 3, 1);
		$this->addColumn('SECRET_DIRECTORY', 'SecretDirectory', 'VARCHAR', false, 255, null);
		$this->addColumn('SELF_REGISTRATION_ALLOWED', 'SelfRegistrationAllowed', 'TINYINT', true, 3, 0);
		$this->addColumn('SELF_UNREGISTRATION_ALLOWED', 'SelfUnregistrationAllowed', 'TINYINT', true, 3, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', true, 5, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GroupInfoTableMap
