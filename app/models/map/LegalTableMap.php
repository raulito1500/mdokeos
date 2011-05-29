<?php



/**
 * This class defines the structure of the 'legal' table.
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
class LegalTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LegalTableMap';

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
		$this->setName('legal');
		$this->setPhpName('Legal');
		$this->setClassname('Legal');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('LEGAL_ID', 'LegalId', 'INTEGER', true, 11, null);
		$this->addPrimaryKey('LANGUAGE_ID', 'LanguageId', 'INTEGER', true, 11, null);
		$this->addColumn('DATE', 'Date', 'INTEGER', true, 11, 0);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', false, null, null);
		$this->addColumn('TYPE', 'Type', 'INTEGER', true, 11, null);
		$this->addColumn('CHANGES', 'Changes', 'LONGVARCHAR', true, null, null);
		$this->addColumn('VERSION', 'Version', 'INTEGER', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LegalTableMap
