<?php



/**
 * This class defines the structure of the 'course_module' table.
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
class CourseModuleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CourseModuleTableMap';

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
		$this->setName('course_module');
		$this->setPhpName('CourseModule');
		$this->setClassname('CourseModule');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 100, null);
		$this->addColumn('LINK', 'Link', 'VARCHAR', true, 255, null);
		$this->addColumn('IMAGE', 'Image', 'VARCHAR', false, 100, null);
		$this->addColumn('ROW', 'Row', 'INTEGER', true, 10, 0);
		$this->addColumn('COLUMN', 'Column', 'INTEGER', true, 10, 0);
		$this->addColumn('POSITION', 'Position', 'VARCHAR', true, 20, 'basic');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CourseModuleTableMap
