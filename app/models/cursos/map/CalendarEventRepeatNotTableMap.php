<?php



/**
 * This class defines the structure of the 'calendar_event_repeat_not' table.
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
class CalendarEventRepeatNotTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CalendarEventRepeatNotTableMap';

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
		$this->setName('calendar_event_repeat_not');
		$this->setPhpName('CalendarEventRepeatNot');
		$this->setClassname('CalendarEventRepeatNot');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CAL_ID', 'CalId', 'INTEGER', true, 11, null);
		$this->addPrimaryKey('CAL_DATE', 'CalDate', 'INTEGER', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CalendarEventRepeatNotTableMap
