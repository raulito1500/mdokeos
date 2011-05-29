<?php



/**
 * This class defines the structure of the 'course_category' table.
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
class CourseCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.CourseCategoryTableMap';

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
		$this->setName('course_category');
		$this->setPhpName('CourseCategory');
		$this->setClassname('CourseCategory');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 100, '');
		$this->addColumn('CODE', 'Code', 'VARCHAR', true, 40, '');
		$this->addColumn('PARENT_ID', 'ParentId', 'VARCHAR', false, 40, null);
		$this->addColumn('TREE_POS', 'TreePos', 'INTEGER', false, 10, null);
		$this->addColumn('CHILDREN_COUNT', 'ChildrenCount', 'SMALLINT', false, 6, null);
		$this->addColumn('AUTH_COURSE_CHILD', 'AuthCourseChild', 'CHAR', false, null, 'TRUE');
		$this->addColumn('AUTH_CAT_CHILD', 'AuthCatChild', 'CHAR', false, null, 'TRUE');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CourseCategoryTableMap
