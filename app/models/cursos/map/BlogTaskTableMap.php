<?php



/**
 * This class defines the structure of the 'blog_task' table.
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
class BlogTaskTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogTaskTableMap';

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
		$this->setName('blog_task');
		$this->setPhpName('BlogTask');
		$this->setClassname('BlogTask');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('TASK_ID', 'TaskId', 'SMALLINT', true, 9, null);
		$this->addColumn('BLOG_ID', 'BlogId', 'SMALLINT', true, 9, 0);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 250, '');
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('COLOR', 'Color', 'VARCHAR', true, 10, '');
		$this->addColumn('SYSTEM_TASK', 'SystemTask', 'TINYINT', true, 3, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogTaskTableMap
