<?php



/**
 * This class defines the structure of the 'forum_thread' table.
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
class ForumThreadTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumThreadTableMap';

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
		$this->setName('forum_thread');
		$this->setPhpName('ForumThread');
		$this->setClassname('ForumThread');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('THREAD_ID', 'ThreadId', 'INTEGER', true, 11, null);
		$this->addColumn('THREAD_TITLE', 'ThreadTitle', 'VARCHAR', false, 255, null);
		$this->addColumn('FORUM_ID', 'ForumId', 'INTEGER', false, 11, null);
		$this->addColumn('THREAD_REPLIES', 'ThreadReplies', 'INTEGER', false, 11, 0);
		$this->addColumn('THREAD_POSTER_ID', 'ThreadPosterId', 'INTEGER', false, 11, null);
		$this->addColumn('THREAD_POSTER_NAME', 'ThreadPosterName', 'VARCHAR', false, 100, '');
		$this->addColumn('THREAD_VIEWS', 'ThreadViews', 'INTEGER', false, 11, 0);
		$this->addColumn('THREAD_LAST_POST', 'ThreadLastPost', 'INTEGER', false, 11, null);
		$this->addColumn('THREAD_DATE', 'ThreadDate', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		$this->addColumn('THREAD_STICKY', 'ThreadSticky', 'TINYINT', false, 3, 0);
		$this->addColumn('LOCKED', 'Locked', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', false, 10, null);
		$this->addColumn('THREAD_TITLE_QUALIFY', 'ThreadTitleQualify', 'VARCHAR', false, 255, '');
		$this->addColumn('THREAD_QUALIFY_MAX', 'ThreadQualifyMax', 'FLOAT', true, 6, 0);
		$this->addColumn('THREAD_CLOSE_DATE', 'ThreadCloseDate', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
		$this->addColumn('THREAD_WEIGHT', 'ThreadWeight', 'FLOAT', true, 6, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumThreadTableMap
