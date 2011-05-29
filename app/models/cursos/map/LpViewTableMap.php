<?php



/**
 * This class defines the structure of the 'lp_view' table.
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
class LpViewTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LpViewTableMap';

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
		$this->setName('lp_view');
		$this->setPhpName('LpView');
		$this->setClassname('LpView');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('LP_ID', 'LpId', 'INTEGER', true, 10, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('VIEW_COUNT', 'ViewCount', 'SMALLINT', true, 5, 0);
		$this->addColumn('LAST_ITEM', 'LastItem', 'INTEGER', true, 10, 0);
		$this->addColumn('PROGRESS', 'Progress', 'INTEGER', false, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LpViewTableMap
