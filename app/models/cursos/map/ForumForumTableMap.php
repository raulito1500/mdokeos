<?php



/**
 * This class defines the structure of the 'forum_forum' table.
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
class ForumForumTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'dokeos.map.ForumForumTableMap';

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
		$this->setName('forum_forum');
		$this->setPhpName('ForumForum');
		$this->setClassname('ForumForum');
		$this->setPackage('dokeos');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('FORUM_ID', 'ForumId', 'INTEGER', true, 11, null);
		$this->addColumn('FORUM_TITLE', 'ForumTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('FORUM_COMMENT', 'ForumComment', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FORUM_THREADS', 'ForumThreads', 'INTEGER', false, 11, 0);
		$this->addColumn('FORUM_POSTS', 'ForumPosts', 'INTEGER', false, 11, 0);
		$this->addColumn('FORUM_LAST_POST', 'ForumLastPost', 'INTEGER', false, 11, 0);
		$this->addColumn('FORUM_CATEGORY', 'ForumCategory', 'INTEGER', false, 11, null);
		$this->addColumn('ALLOW_ANONYMOUS', 'AllowAnonymous', 'INTEGER', false, 11, null);
		$this->addColumn('ALLOW_EDIT', 'AllowEdit', 'INTEGER', false, 11, null);
		$this->addColumn('APPROVAL_DIRECT_POST', 'ApprovalDirectPost', 'VARCHAR', false, 20, null);
		$this->addColumn('ALLOW_ATTACHMENTS', 'AllowAttachments', 'INTEGER', false, 11, null);
		$this->addColumn('ALLOW_NEW_THREADS', 'AllowNewThreads', 'INTEGER', false, 11, null);
		$this->addColumn('DEFAULT_VIEW', 'DefaultView', 'VARCHAR', false, 20, null);
		$this->addColumn('FORUM_OF_GROUP', 'ForumOfGroup', 'VARCHAR', false, 20, null);
		$this->addColumn('FORUM_GROUP_PUBLIC_PRIVATE', 'ForumGroupPublicPrivate', 'VARCHAR', false, 20, 'public');
		$this->addColumn('FORUM_ORDER', 'ForumOrder', 'INTEGER', false, 11, null);
		$this->addColumn('LOCKED', 'Locked', 'INTEGER', true, 11, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'INTEGER', true, 11, 0);
		$this->addColumn('FORUM_IMAGE', 'ForumImage', 'VARCHAR', true, 255, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ForumForumTableMap
