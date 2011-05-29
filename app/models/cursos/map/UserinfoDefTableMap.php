<?php



/**
 * This class defines the structure of the 'userinfo_def' table.
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
class UserinfoDefTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.UserinfoDefTableMap';

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
		$this->setName('userinfo_def');
		$this->setPhpName('UserinfoDef');
		$this->setClassname('UserinfoDef');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 80, '');
		$this->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('LINE_COUNT', 'LineCount', 'TINYINT', true, 3, 5);
		$this->addColumn('RANK', 'Rank', 'TINYINT', true, 3, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UserinfoDefTableMap
