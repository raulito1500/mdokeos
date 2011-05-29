<?php



/**
 * This class defines the structure of the 'calendar_event' table.
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
class CalendarEventTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CalendarEventTableMap';

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
		$this->setName('calendar_event');
		$this->setPhpName('CalendarEvent');
		$this->setClassname('CalendarEvent');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 200, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', false, null, null);
		$this->addColumn('START_DATE', 'StartDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('END_DATE', 'EndDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('PARENT_EVENT_ID', 'ParentEventId', 'INTEGER', false, 11, null);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarEventTableMap
