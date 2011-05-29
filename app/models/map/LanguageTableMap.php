<?php



/**
 * This class defines the structure of the 'language' table.
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
class LanguageTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.LanguageTableMap';

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
		$this->setName('language');
		$this->setPhpName('Language');
		$this->setClassname('Language');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'TINYINT', true, 3, null);
		$this->addColumn('ORIGINAL_NAME', 'OriginalName', 'VARCHAR', false, 255, null);
		$this->addColumn('ENGLISH_NAME', 'EnglishName', 'VARCHAR', false, 255, null);
		$this->addColumn('ISOCODE', 'Isocode', 'VARCHAR', false, 10, null);
		$this->addColumn('DOKEOS_FOLDER', 'DokeosFolder', 'VARCHAR', false, 250, null);
		$this->addColumn('AVAILABLE', 'Available', 'TINYINT', true, 4, 1);
		$this->addColumn('PARENT_ID', 'ParentId', 'TINYINT', false, 3, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LanguageTableMap
