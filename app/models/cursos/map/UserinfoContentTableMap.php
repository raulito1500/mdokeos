<?php



/**
 * This class defines the structure of the 'userinfo_content' table.
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
class UserinfoContentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.UserinfoContentTableMap';

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
		$this->setName('userinfo_content');
		$this->setPhpName('UserinfoContent');
		$this->setClassname('UserinfoContent');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 10, null);
		$this->addColumn('DEFINITION_ID', 'DefinitionId', 'INTEGER', true, 10, null);
		$this->addColumn('EDITOR_IP', 'EditorIp', 'VARCHAR', false, 39, null);
		$this->addColumn('EDITION_TIME', 'EditionTime', 'TIMESTAMP', false, null, null);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UserinfoContentTableMap
