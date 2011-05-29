<?php



/**
 * This class defines the structure of the 'group_category' table.
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
class GroupCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GroupCategoryTableMap';

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
		$this->setName('group_category');
		$this->setPhpName('GroupCategory');
		$this->setClassname('GroupCategory');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, '');
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DOC_STATE', 'DocState', 'TINYINT', true, 3, 1);
		$this->addColumn('CALENDAR_STATE', 'CalendarState', 'TINYINT', true, 3, 1);
		$this->addColumn('WORK_STATE', 'WorkState', 'TINYINT', true, 3, 1);
		$this->addColumn('ANNOUNCEMENTS_STATE', 'AnnouncementsState', 'TINYINT', true, 3, 1);
		$this->addColumn('FORUM_STATE', 'ForumState', 'TINYINT', true, 3, 1);
		$this->addColumn('WIKI_STATE', 'WikiState', 'TINYINT', true, 3, 1);
		$this->addColumn('MAX_STUDENT', 'MaxStudent', 'SMALLINT', true, 5, 8);
		$this->addColumn('SELF_REG_ALLOWED', 'SelfRegAllowed', 'TINYINT', true, 3, 0);
		$this->addColumn('SELF_UNREG_ALLOWED', 'SelfUnregAllowed', 'TINYINT', true, 3, 0);
		$this->addColumn('GROUPS_PER_USER', 'GroupsPerUser', 'SMALLINT', true, 5, 0);
		$this->addColumn('DISPLAY_ORDER', 'DisplayOrder', 'SMALLINT', true, 5, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GroupCategoryTableMap
