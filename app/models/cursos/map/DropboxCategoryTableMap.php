<?php



/**
 * This class defines the structure of the 'dropbox_category' table.
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
class DropboxCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.DropboxCategoryTableMap';

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
		$this->setName('dropbox_category');
		$this->setPhpName('DropboxCategory');
		$this->setClassname('DropboxCategory');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CAT_ID', 'CatId', 'INTEGER', true, 11, null);
		$this->addColumn('CAT_NAME', 'CatName', 'LONGVARCHAR', true, null, null);
		$this->addColumn('RECEIVED', 'Received', 'TINYINT', true, 3, 0);
		$this->addColumn('SENT', 'Sent', 'TINYINT', true, 3, 0);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DropboxCategoryTableMap
