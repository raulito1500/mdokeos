<?php



/**
 * This class defines the structure of the 'templates' table.
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
class TemplatesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.TemplatesTableMap';

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
		$this->setName('templates');
		$this->setPhpName('Templates');
		$this->setClassname('Templates');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 100, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 250, null);
		$this->addColumn('COURSE_CODE', 'CourseCode', 'VARCHAR', true, 40, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, 11, null);
		$this->addColumn('REF_DOC', 'RefDoc', 'INTEGER', true, 11, null);
		$this->addColumn('IMAGE', 'Image', 'VARCHAR', true, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // TemplatesTableMap
