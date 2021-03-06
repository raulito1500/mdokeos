<?php



/**
 * This class defines the structure of the 'reservation_item_rights' table.
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
class ReservationItemRightsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ReservationItemRightsTableMap';

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
		$this->setName('reservation_item_rights');
		$this->setPhpName('ReservationItemRights');
		$this->setClassname('ReservationItemRights');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ITEM_ID', 'ItemId', 'INTEGER', true, 10, 0);
		$this->addPrimaryKey('CLASS_ID', 'ClassId', 'INTEGER', true, 10, 0);
		$this->addColumn('EDIT_RIGHT', 'EditRight', 'TINYINT', true, 3, 0);
		$this->addColumn('DELETE_RIGHT', 'DeleteRight', 'TINYINT', true, 3, 0);
		$this->addColumn('M_RESERVATION', 'MReservation', 'TINYINT', true, 3, 0);
		$this->addColumn('VIEW_RIGHT', 'ViewRight', 'TINYINT', true, 4, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ReservationItemRightsTableMap
