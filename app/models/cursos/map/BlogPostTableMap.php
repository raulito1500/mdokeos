<?php



/**
 * This class defines the structure of the 'blog_post' table.
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
class BlogPostTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogPostTableMap';

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
		$this->setName('blog_post');
		$this->setPhpName('BlogPost');
		$this->setClassname('BlogPost');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('POST_ID', 'PostId', 'INTEGER', true, 11, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 250, '');
		$this->addColumn('FULL_TEXT', 'FullText', 'CLOB', true, null, null);
		$this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('BLOG_ID', 'BlogId', 'SMALLINT', true, 9, 0);
		$this->addColumn('AUTHOR_ID', 'AuthorId', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogPostTableMap
