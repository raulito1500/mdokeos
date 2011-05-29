<?php



/**
 * This class defines the structure of the 'link' table.
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
class LinkTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LinkTableMap';

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
		$this->setName('link');
		$this->setPhpName('Link');
		$this->setClassname('Link');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('URL', 'Url', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 150, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CATEGORY_ID', 'CategoryId', 'SMALLINT', false, 5, null);
		$this->addColumn('DISPLAY_ORDER', 'DisplayOrder', 'SMALLINT', true, 5, 0);
		$this->addColumn('ON_HOMEPAGE', 'OnHomepage', 'CHAR', true, null, '0');
		$this->addColumn('TARGET', 'Target', 'CHAR', false, 10, '_self');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LinkTableMap
