<?php



/**
 * This class defines the structure of the 'reservation_item' table.
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
class ReservationItemTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ReservationItemTableMap';

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
		$this->setName('reservation_item');
		$this->setPhpName('ReservationItem');
		$this->setClassname('ReservationItem');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('CATEGORY_ID', 'CategoryId', 'INTEGER', true, 10, 0);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, '');
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, '');
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('BLACKOUT', 'Blackout', 'TINYINT', true, 4, 0);
		$this->addColumn('CREATOR', 'Creator', 'INTEGER', true, 10, 0);
		$this->addColumn('ALWAYS_AVAILABLE', 'AlwaysAvailable', 'TINYINT', true, 4, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ReservationItemTableMap
