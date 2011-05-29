<?php



/**
 * This class defines the structure of the 'blog' table.
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
class BlogTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogTableMap';

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
		$this->setName('blog');
		$this->setPhpName('Blog');
		$this->setClassname('Blog');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('BLOG_ID', 'BlogId', 'SMALLINT', true, 6, null);
		$this->addColumn('BLOG_NAME', 'BlogName', 'VARCHAR', true, 250, '');
		$this->addColumn('BLOG_SUBTITLE', 'BlogSubtitle', 'VARCHAR', false, 250, null);
		$this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('VISIBILITY', 'Visibility', 'TINYINT', true, 3, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogTableMap
