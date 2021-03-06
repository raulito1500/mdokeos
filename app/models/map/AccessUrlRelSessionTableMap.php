<?php



/**
 * This class defines the structure of the 'access_url_rel_session' table.
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
class AccessUrlRelSessionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.AccessUrlRelSessionTableMap';

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
		$this->setName('access_url_rel_session');
		$this->setPhpName('AccessUrlRelSession');
		$this->setClassname('AccessUrlRelSession');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ACCESS_URL_ID', 'AccessUrlId', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('SESSION_ID', 'SessionId', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AccessUrlRelSessionTableMap
