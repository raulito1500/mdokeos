<?php



/**
 * This class defines the structure of the 'role_group' table.
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
class RoleGroupTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.RoleGroupTableMap';

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
		$this->setName('role_group');
		$this->setPhpName('RoleGroup');
		$this->setClassname('RoleGroup');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addColumn('ROLE_ID', 'RoleId', 'INTEGER', true, 11, 0);
		$this->addColumn('SCOPE', 'Scope', 'VARCHAR', true, 20, 'course');
		$this->addColumn('GROUP_ID', 'GroupId', 'INTEGER', true, 11, 0);
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // RoleGroupTableMap
