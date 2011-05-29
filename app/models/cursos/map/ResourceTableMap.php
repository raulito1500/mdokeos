<?php



/**
 * This class defines the structure of the 'resource' table.
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
class ResourceTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ResourceTableMap';

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
		$this->setName('resource');
		$this->setPhpName('Resource');
		$this->setClassname('Resource');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('SOURCE_TYPE', 'SourceType', 'VARCHAR', false, 50, null);
		$this->addColumn('SOURCE_ID', 'SourceId', 'INTEGER', false, 10, null);
		$this->addColumn('RESOURCE_TYPE', 'ResourceType', 'VARCHAR', false, 50, null);
		$this->addColumn('RESOURCE_ID', 'ResourceId', 'INTEGER', false, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ResourceTableMap
