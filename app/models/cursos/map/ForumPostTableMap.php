<?php



/**
 * This class defines the structure of the 'forum_post' table.
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
class ForumPostTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumPostTableMap';

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
		$this->setName('forum_post');
		$this->setPhpName('ForumPost');
		$this->setClassname('ForumPost');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('POST_ID', 'PostId', 'INTEGER', true, 11, null);
		$this->addColumn('POST_TITLE', 'PostTitle', 'VARCHAR', false, 250, null);
		$this->addColumn('POST_TEXT', 'PostText', 'LONGVARCHAR', false, null, null);
		$this->addColumn('THREAD_ID', 'ThreadId', 'INTEGER', false, 11, 0);
		$this->addColumn('FORUM_ID', 'ForumId', 'INTEGER', false, 11, 0);
		$this->addColumn('POSTER_ID', 'PosterId', 'INTEGER', false, 11, 0);
		$this->addColumn('POSTER_NAME', 'PosterName', 'VARCHAR', false, 100, '');
		$this->addColumn('POST_DATE', 'PostDate', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		$this->addColumn('POST_NOTIFICATION', 'PostNotification', 'TINYINT', false, 4, 0);
		$this->addColumn('POST_PARENT_ID', 'PostParentId', 'INTEGER', false, 11, 0);
		$this->addColumn('VISIBLE', 'Visible', 'TINYINT', false, 4, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumPostTableMap
