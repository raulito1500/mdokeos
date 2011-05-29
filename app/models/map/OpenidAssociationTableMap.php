<?php



/**
 * This class defines the structure of the 'openid_association' table.
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
class OpenidAssociationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.OpenidAssociationTableMap';

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
		$this->setName('openid_association');
		$this->setPhpName('OpenidAssociation');
		$this->setClassname('OpenidAssociation');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('IDP_ENDPOINT_URI', 'IdpEndpointUri', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SESSION_TYPE', 'SessionType', 'VARCHAR', true, 30, null);
		$this->addColumn('ASSOC_HANDLE', 'AssocHandle', 'LONGVARCHAR', true, null, null);
		$this->addColumn('ASSOC_TYPE', 'AssocType', 'LONGVARCHAR', true, null, null);
		$this->addColumn('EXPIRES_IN', 'ExpiresIn', 'BIGINT', true, 20, null);
		$this->addColumn('MAC_KEY', 'MacKey', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CREATED', 'Created', 'BIGINT', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // OpenidAssociationTableMap
