<?php



/**
 * This class defines the structure of the 'blog_attachment' table.
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
class BlogAttachmentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.BlogAttachmentTableMap';

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
		$this->setName('blog_attachment');
		$this->setPhpName('BlogAttachment');
		$this->setClassname('BlogAttachment');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('PATH', 'Path', 'VARCHAR', true, 255, null);
		$this->addColumn('COMMENT', 'Comment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SIZE', 'Size', 'INTEGER', true, 11, 0);
		$this->addColumn('POST_ID', 'PostId', 'INTEGER', true, 11, null);
		$this->addColumn('FILENAME', 'Filename', 'VARCHAR', true, 255, null);
		$this->addColumn('BLOG_ID', 'BlogId', 'INTEGER', true, 11, null);
		$this->addColumn('COMMENT_ID', 'CommentId', 'INTEGER', true, 11, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // BlogAttachmentTableMap
