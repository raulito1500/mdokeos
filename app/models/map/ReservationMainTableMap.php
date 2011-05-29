<?php



/**
 * This class defines the structure of the 'reservation_main' table.
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
class ReservationMainTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ReservationMainTableMap';

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
		$this->setName('reservation_main');
		$this->setPhpName('ReservationMain');
		$this->setClassname('ReservationMain');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('SUBID', 'Subid', 'INTEGER', true, 10, 0);
		$this->addColumn('ITEM_ID', 'ItemId', 'INTEGER', true, 10, 0);
		$this->addColumn('AUTO_ACCEPT', 'AutoAccept', 'TINYINT', true, 3, 0);
		$this->addColumn('MAX_USERS', 'MaxUsers', 'INTEGER', true, 10, 1);
		$this->addColumn('START_AT', 'StartAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('END_AT', 'EndAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('SUBSCRIBE_FROM', 'SubscribeFrom', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('SUBSCRIBE_UNTIL', 'SubscribeUntil', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('SUBSCRIBERS', 'Subscribers', 'INTEGER', true, 10, 0);
		$this->addColumn('NOTES', 'Notes', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TIMEPICKER', 'Timepicker', 'TINYINT', true, 4, 0);
		$this->addColumn('TIMEPICKER_MIN', 'TimepickerMin', 'INTEGER', true, 11, 0);
		$this->addColumn('TIMEPICKER_MAX', 'TimepickerMax', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ReservationMainTableMap
