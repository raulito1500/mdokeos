<?php



/**
 * This class defines the structure of the 'php_session' table.
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
class PhpSessionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.PhpSessionTableMap';

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
		$this->setName('php_session');
		$this->setPhpName('PhpSession');
		$this->setClassname('PhpSession');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SESSION_ID', 'SessionId', 'VARCHAR', true, 32, '');
		$this->addColumn('SESSION_NAME', 'SessionName', 'VARCHAR', true, 10, '');
		$this->addColumn('SESSION_TIME', 'SessionTime', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_START', 'SessionStart', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_VALUE', 'SessionValue', 'LONGVARCHAR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // PhpSessionTableMap
