<?php



/**
 * This class defines the structure of the 'tool' table.
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
class ToolTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ToolTableMap';

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
		$this->setName('tool');
		$this->setPhpName('Tool');
		$this->setClassname('Tool');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 100, null);
		$this->addColumn('LINK', 'Link', 'VARCHAR', true, 255, null);
		$this->addColumn('IMAGE', 'Image', 'VARCHAR', false, 100, null);
		$this->addColumn('VISIBILITY', 'Visibility', 'TINYINT', false, 3, 0);
		$this->addColumn('ADMIN', 'Admin', 'VARCHAR', false, 200, null);
		$this->addColumn('ADDRESS', 'Address', 'VARCHAR', false, 120, null);
		$this->addColumn('ADDED_TOOL', 'AddedTool', 'TINYINT', false, 3, 1);
		$this->addColumn('TARGET', 'Target', 'CHAR', true, null, '_self');
		$this->addColumn('CATEGORY', 'Category', 'CHAR', true, null, 'authoring');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ToolTableMap
