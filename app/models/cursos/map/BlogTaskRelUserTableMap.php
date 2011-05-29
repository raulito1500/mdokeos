<?php



/**
 * This class defines the structure of the 'blog_task_rel_user' table.
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
class BlogTaskRelUserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogTaskRelUserTableMap';

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
		$this->setName('blog_task_rel_user');
		$this->setPhpName('BlogTaskRelUser');
		$this->setClassname('BlogTaskRelUser');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('BLOG_ID', 'BlogId', 'SMALLINT', true, 9, 0);
		$this->addPrimaryKey('USER_ID', 'UserId', 'INTEGER', true, 11, 0);
		$this->addPrimaryKey('TASK_ID', 'TaskId', 'SMALLINT', true, 9, 0);
		$this->addColumn('TARGET_DATE', 'TargetDate', 'DATE', true, null, '0000-00-00');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogTaskRelUserTableMap
