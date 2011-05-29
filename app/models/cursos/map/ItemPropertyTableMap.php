<?php



/**
 * This class defines the structure of the 'item_property' table.
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
class ItemPropertyTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ItemPropertyTableMap';

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
		$this->setName('item_property');
		$this->setPhpName('ItemProperty');
		$this->setClassname('ItemProperty');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addColumn('TOOL', 'Tool', 'VARCHAR', true, 100, '');
		$this->addColumn('INSERT_USER_ID', 'InsertUserId', 'INTEGER', true, 10, 0);
		$this->addColumn('INSERT_DATE', 'InsertDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('LASTEDIT_DATE', 'LasteditDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('REF', 'Ref', 'INTEGER', true, 11, 0);
		$this->addColumn('LASTEDIT_TYPE', 'LasteditType', 'VARCHAR', true, 100, '');
		$this->addColumn('LASTEDIT_USER_ID', 'LasteditUserId', 'INTEGER', true, 10, 0);
		$this->addColumn('TO_GROUP_ID', 'ToGroupId', 'INTEGER', false, 10, null);
		$this->addColumn('TO_USER_ID', 'ToUserId', 'INTEGER', false, 10, null);
		$this->addColumn('VISIBILITY', 'Visibility', 'TINYINT', true, 4, 1);
		$this->addColumn('START_VISIBLE', 'StartVisible', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('END_VISIBLE', 'EndVisible', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ItemPropertyTableMap
