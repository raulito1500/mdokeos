<?php



/**
 * This class defines the structure of the 'sys_announcement' table.
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
class SysAnnouncementTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.SysAnnouncementTableMap';

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
		$this->setName('sys_announcement');
		$this->setPhpName('SysAnnouncement');
		$this->setClassname('SysAnnouncement');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('DATE_START', 'DateStart', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('DATE_END', 'DateEnd', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('VISIBLE_TEACHER', 'VisibleTeacher', 'TINYINT', true, 4, 0);
		$this->addColumn('VISIBLE_STUDENT', 'VisibleStudent', 'TINYINT', true, 4, 0);
		$this->addColumn('VISIBLE_GUEST', 'VisibleGuest', 'TINYINT', true, 4, 0);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 250, '');
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		$this->addColumn('LANG', 'Lang', 'VARCHAR', false, 70, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SysAnnouncementTableMap
