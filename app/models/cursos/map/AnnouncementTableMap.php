<?php



/**
 * This class defines the structure of the 'announcement' table.
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
class AnnouncementTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.AnnouncementTableMap';

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
		$this->setName('announcement');
		$this->setPhpName('Announcement');
		$this->setClassname('Announcement');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'SMALLINT', true, 8, null);
		$this->addColumn('TITLE', 'Title', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', false, null, null);
		$this->addColumn('END_DATE', 'EndDate', 'DATE', false, null, null);
		$this->addColumn('DISPLAY_ORDER', 'DisplayOrder', 'SMALLINT', true, 9, 0);
		$this->addColumn('EMAIL_SENT', 'EmailSent', 'TINYINT', false, 4, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'SMALLINT', false, 6, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AnnouncementTableMap
