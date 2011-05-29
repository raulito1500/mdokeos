<?php



/**
 * This class defines the structure of the 'blog_comment' table.
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
class BlogCommentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogCommentTableMap';

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
		$this->setName('blog_comment');
		$this->setPhpName('BlogComment');
		$this->setClassname('BlogComment');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('COMMENT_ID', 'CommentId', 'INTEGER', true, 11, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 250, '');
		$this->addColumn('COMMENT', 'Comment', 'CLOB', true, null, null);
		$this->addColumn('AUTHOR_ID', 'AuthorId', 'INTEGER', true, 11, 0);
		$this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
		$this->addColumn('BLOG_ID', 'BlogId', 'SMALLINT', true, 9, 0);
		$this->addColumn('POST_ID', 'PostId', 'INTEGER', true, 11, 0);
		$this->addColumn('TASK_ID', 'TaskId', 'INTEGER', false, 11, null);
		$this->addColumn('PARENT_COMMENT_ID', 'ParentCommentId', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogCommentTableMap
