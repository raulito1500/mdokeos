<?php



/**
 * This class defines the structure of the 'role' table.
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
class RoleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.RoleTableMap';

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
		$this->setName('role');
		$this->setPhpName('Role');
		$this->setClassname('Role');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ROLE_ID', 'RoleId', 'INTEGER', true, 11, null);
		$this->addColumn('ROLE_NAME', 'RoleName', 'VARCHAR', true, 250, '');
		$this->addColumn('ROLE_COMMENT', 'RoleComment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DEFAULT_ROLE', 'DefaultRole', 'TINYINT', false, 4, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // RoleTableMap
