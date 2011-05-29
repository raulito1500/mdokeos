<?php



/**
 * This class defines the structure of the 'gradebook_link' table.
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
class GradebookLinkTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.GradebookLinkTableMap';

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
		$this->setName('gradebook_link');
		$this->setPhpName('GradebookLink');
		$this->setClassname('GradebookLink');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('TYPE', 'Type', 'INTEGER', true, 11, null);
		$this->addColumn('REF_ID', 'RefId', 'INTEGER', true, 11, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, null);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, null);
		$this->addColumn('CATEGORY_ID', 'CategoryId', 'INTEGER', true, 11, null);
		$this->addColumn('DATE', 'Date', 'INTEGER', false, 11, null);
		$this->addColumn('WEIGHT', 'Weight', 'SMALLINT', true, 6, null);
		$this->addColumn('VISIBLE', 'Visible', 'TINYINT', true, 4, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GradebookLinkTableMap
