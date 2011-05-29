<?php


/**
 * Base static class for performing query and update operations on the 'forum_forum' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumForumPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'forum_forum';

	/** the related Propel class for this table */
	const OM_CLASS = 'ForumForum';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.ForumForum';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ForumForumTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the FORUM_ID field */
	const FORUM_ID = 'forum_forum.FORUM_ID';

	/** the column name for the FORUM_TITLE field */
	const FORUM_TITLE = 'forum_forum.FORUM_TITLE';

	/** the column name for the FORUM_COMMENT field */
	const FORUM_COMMENT = 'forum_forum.FORUM_COMMENT';

	/** the column name for the FORUM_THREADS field */
	const FORUM_THREADS = 'forum_forum.FORUM_THREADS';

	/** the column name for the FORUM_POSTS field */
	const FORUM_POSTS = 'forum_forum.FORUM_POSTS';

	/** the column name for the FORUM_LAST_POST field */
	const FORUM_LAST_POST = 'forum_forum.FORUM_LAST_POST';

	/** the column name for the FORUM_CATEGORY field */
	const FORUM_CATEGORY = 'forum_forum.FORUM_CATEGORY';

	/** the column name for the ALLOW_ANONYMOUS field */
	const ALLOW_ANONYMOUS = 'forum_forum.ALLOW_ANONYMOUS';

	/** the column name for the ALLOW_EDIT field */
	const ALLOW_EDIT = 'forum_forum.ALLOW_EDIT';

	/** the column name for the APPROVAL_DIRECT_POST field */
	const APPROVAL_DIRECT_POST = 'forum_forum.APPROVAL_DIRECT_POST';

	/** the column name for the ALLOW_ATTACHMENTS field */
	const ALLOW_ATTACHMENTS = 'forum_forum.ALLOW_ATTACHMENTS';

	/** the column name for the ALLOW_NEW_THREADS field */
	const ALLOW_NEW_THREADS = 'forum_forum.ALLOW_NEW_THREADS';

	/** the column name for the DEFAULT_VIEW field */
	const DEFAULT_VIEW = 'forum_forum.DEFAULT_VIEW';

	/** the column name for the FORUM_OF_GROUP field */
	const FORUM_OF_GROUP = 'forum_forum.FORUM_OF_GROUP';

	/** the column name for the FORUM_GROUP_PUBLIC_PRIVATE field */
	const FORUM_GROUP_PUBLIC_PRIVATE = 'forum_forum.FORUM_GROUP_PUBLIC_PRIVATE';

	/** the column name for the FORUM_ORDER field */
	const FORUM_ORDER = 'forum_forum.FORUM_ORDER';

	/** the column name for the LOCKED field */
	const LOCKED = 'forum_forum.LOCKED';

	/** the column name for the SESSION_ID field */
	const SESSION_ID = 'forum_forum.SESSION_ID';

	/** the column name for the FORUM_IMAGE field */
	const FORUM_IMAGE = 'forum_forum.FORUM_IMAGE';

	/**
	 * An identiy map to hold any loaded instances of ForumForum objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ForumForum[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('ForumId', 'ForumTitle', 'ForumComment', 'ForumThreads', 'ForumPosts', 'ForumLastPost', 'ForumCategory', 'AllowAnonymous', 'AllowEdit', 'ApprovalDirectPost', 'AllowAttachments', 'AllowNewThreads', 'DefaultView', 'ForumOfGroup', 'ForumGroupPublicPrivate', 'ForumOrder', 'Locked', 'SessionId', 'ForumImage', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('forumId', 'forumTitle', 'forumComment', 'forumThreads', 'forumPosts', 'forumLastPost', 'forumCategory', 'allowAnonymous', 'allowEdit', 'approvalDirectPost', 'allowAttachments', 'allowNewThreads', 'defaultView', 'forumOfGroup', 'forumGroupPublicPrivate', 'forumOrder', 'locked', 'sessionId', 'forumImage', ),
		BasePeer::TYPE_COLNAME => array (self::FORUM_ID, self::FORUM_TITLE, self::FORUM_COMMENT, self::FORUM_THREADS, self::FORUM_POSTS, self::FORUM_LAST_POST, self::FORUM_CATEGORY, self::ALLOW_ANONYMOUS, self::ALLOW_EDIT, self::APPROVAL_DIRECT_POST, self::ALLOW_ATTACHMENTS, self::ALLOW_NEW_THREADS, self::DEFAULT_VIEW, self::FORUM_OF_GROUP, self::FORUM_GROUP_PUBLIC_PRIVATE, self::FORUM_ORDER, self::LOCKED, self::SESSION_ID, self::FORUM_IMAGE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('FORUM_ID', 'FORUM_TITLE', 'FORUM_COMMENT', 'FORUM_THREADS', 'FORUM_POSTS', 'FORUM_LAST_POST', 'FORUM_CATEGORY', 'ALLOW_ANONYMOUS', 'ALLOW_EDIT', 'APPROVAL_DIRECT_POST', 'ALLOW_ATTACHMENTS', 'ALLOW_NEW_THREADS', 'DEFAULT_VIEW', 'FORUM_OF_GROUP', 'FORUM_GROUP_PUBLIC_PRIVATE', 'FORUM_ORDER', 'LOCKED', 'SESSION_ID', 'FORUM_IMAGE', ),
		BasePeer::TYPE_FIELDNAME => array ('forum_id', 'forum_title', 'forum_comment', 'forum_threads', 'forum_posts', 'forum_last_post', 'forum_category', 'allow_anonymous', 'allow_edit', 'approval_direct_post', 'allow_attachments', 'allow_new_threads', 'default_view', 'forum_of_group', 'forum_group_public_private', 'forum_order', 'locked', 'session_id', 'forum_image', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('ForumId' => 0, 'ForumTitle' => 1, 'ForumComment' => 2, 'ForumThreads' => 3, 'ForumPosts' => 4, 'ForumLastPost' => 5, 'ForumCategory' => 6, 'AllowAnonymous' => 7, 'AllowEdit' => 8, 'ApprovalDirectPost' => 9, 'AllowAttachments' => 10, 'AllowNewThreads' => 11, 'DefaultView' => 12, 'ForumOfGroup' => 13, 'ForumGroupPublicPrivate' => 14, 'ForumOrder' => 15, 'Locked' => 16, 'SessionId' => 17, 'ForumImage' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('forumId' => 0, 'forumTitle' => 1, 'forumComment' => 2, 'forumThreads' => 3, 'forumPosts' => 4, 'forumLastPost' => 5, 'forumCategory' => 6, 'allowAnonymous' => 7, 'allowEdit' => 8, 'approvalDirectPost' => 9, 'allowAttachments' => 10, 'allowNewThreads' => 11, 'defaultView' => 12, 'forumOfGroup' => 13, 'forumGroupPublicPrivate' => 14, 'forumOrder' => 15, 'locked' => 16, 'sessionId' => 17, 'forumImage' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::FORUM_ID => 0, self::FORUM_TITLE => 1, self::FORUM_COMMENT => 2, self::FORUM_THREADS => 3, self::FORUM_POSTS => 4, self::FORUM_LAST_POST => 5, self::FORUM_CATEGORY => 6, self::ALLOW_ANONYMOUS => 7, self::ALLOW_EDIT => 8, self::APPROVAL_DIRECT_POST => 9, self::ALLOW_ATTACHMENTS => 10, self::ALLOW_NEW_THREADS => 11, self::DEFAULT_VIEW => 12, self::FORUM_OF_GROUP => 13, self::FORUM_GROUP_PUBLIC_PRIVATE => 14, self::FORUM_ORDER => 15, self::LOCKED => 16, self::SESSION_ID => 17, self::FORUM_IMAGE => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('FORUM_ID' => 0, 'FORUM_TITLE' => 1, 'FORUM_COMMENT' => 2, 'FORUM_THREADS' => 3, 'FORUM_POSTS' => 4, 'FORUM_LAST_POST' => 5, 'FORUM_CATEGORY' => 6, 'ALLOW_ANONYMOUS' => 7, 'ALLOW_EDIT' => 8, 'APPROVAL_DIRECT_POST' => 9, 'ALLOW_ATTACHMENTS' => 10, 'ALLOW_NEW_THREADS' => 11, 'DEFAULT_VIEW' => 12, 'FORUM_OF_GROUP' => 13, 'FORUM_GROUP_PUBLIC_PRIVATE' => 14, 'FORUM_ORDER' => 15, 'LOCKED' => 16, 'SESSION_ID' => 17, 'FORUM_IMAGE' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('forum_id' => 0, 'forum_title' => 1, 'forum_comment' => 2, 'forum_threads' => 3, 'forum_posts' => 4, 'forum_last_post' => 5, 'forum_category' => 6, 'allow_anonymous' => 7, 'allow_edit' => 8, 'approval_direct_post' => 9, 'allow_attachments' => 10, 'allow_new_threads' => 11, 'default_view' => 12, 'forum_of_group' => 13, 'forum_group_public_private' => 14, 'forum_order' => 15, 'locked' => 16, 'session_id' => 17, 'forum_image' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ForumForumPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ForumForumPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(ForumForumPeer::FORUM_ID);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_TITLE);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_COMMENT);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_THREADS);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_POSTS);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_LAST_POST);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_CATEGORY);
			$criteria->addSelectColumn(ForumForumPeer::ALLOW_ANONYMOUS);
			$criteria->addSelectColumn(ForumForumPeer::ALLOW_EDIT);
			$criteria->addSelectColumn(ForumForumPeer::APPROVAL_DIRECT_POST);
			$criteria->addSelectColumn(ForumForumPeer::ALLOW_ATTACHMENTS);
			$criteria->addSelectColumn(ForumForumPeer::ALLOW_NEW_THREADS);
			$criteria->addSelectColumn(ForumForumPeer::DEFAULT_VIEW);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_OF_GROUP);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_GROUP_PUBLIC_PRIVATE);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_ORDER);
			$criteria->addSelectColumn(ForumForumPeer::LOCKED);
			$criteria->addSelectColumn(ForumForumPeer::SESSION_ID);
			$criteria->addSelectColumn(ForumForumPeer::FORUM_IMAGE);
		} else {
			$criteria->addSelectColumn($alias . '.FORUM_ID');
			$criteria->addSelectColumn($alias . '.FORUM_TITLE');
			$criteria->addSelectColumn($alias . '.FORUM_COMMENT');
			$criteria->addSelectColumn($alias . '.FORUM_THREADS');
			$criteria->addSelectColumn($alias . '.FORUM_POSTS');
			$criteria->addSelectColumn($alias . '.FORUM_LAST_POST');
			$criteria->addSelectColumn($alias . '.FORUM_CATEGORY');
			$criteria->addSelectColumn($alias . '.ALLOW_ANONYMOUS');
			$criteria->addSelectColumn($alias . '.ALLOW_EDIT');
			$criteria->addSelectColumn($alias . '.APPROVAL_DIRECT_POST');
			$criteria->addSelectColumn($alias . '.ALLOW_ATTACHMENTS');
			$criteria->addSelectColumn($alias . '.ALLOW_NEW_THREADS');
			$criteria->addSelectColumn($alias . '.DEFAULT_VIEW');
			$criteria->addSelectColumn($alias . '.FORUM_OF_GROUP');
			$criteria->addSelectColumn($alias . '.FORUM_GROUP_PUBLIC_PRIVATE');
			$criteria->addSelectColumn($alias . '.FORUM_ORDER');
			$criteria->addSelectColumn($alias . '.LOCKED');
			$criteria->addSelectColumn($alias . '.SESSION_ID');
			$criteria->addSelectColumn($alias . '.FORUM_IMAGE');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ForumForumPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ForumForumPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     ForumForum
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ForumForumPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ForumForumPeer::populateObjects(ForumForumPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ForumForumPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      ForumForum $value A ForumForum object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ForumForum $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getForumId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A ForumForum object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ForumForum) {
				$key = (string) $value->getForumId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ForumForum object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     ForumForum Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to forum_forum
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ForumForumPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ForumForumPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ForumForumPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ForumForumPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (ForumForum object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ForumForumPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ForumForumPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ForumForumPeer::NUM_COLUMNS;
		} else {
			$cls = ForumForumPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ForumForumPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseForumForumPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseForumForumPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ForumForumTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? ForumForumPeer::CLASS_DEFAULT : ForumForumPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ForumForum or Criteria object.
	 *
	 * @param      mixed $values Criteria or ForumForum object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ForumForum object
		}

		if ($criteria->containsKey(ForumForumPeer::FORUM_ID) && $criteria->keyContainsValue(ForumForumPeer::FORUM_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ForumForumPeer::FORUM_ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a ForumForum or Criteria object.
	 *
	 * @param      mixed $values Criteria or ForumForum object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ForumForumPeer::FORUM_ID);
			$value = $criteria->remove(ForumForumPeer::FORUM_ID);
			if ($value) {
				$selectCriteria->add(ForumForumPeer::FORUM_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ForumForumPeer::TABLE_NAME);
			}

		} else { // $values is ForumForum object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the forum_forum table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ForumForumPeer::TABLE_NAME, $con, ForumForumPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ForumForumPeer::clearInstancePool();
			ForumForumPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ForumForum or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ForumForum object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ForumForumPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ForumForum) { // it's a model object
			// invalidate the cache for this single object
			ForumForumPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ForumForumPeer::FORUM_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ForumForumPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ForumForumPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given ForumForum object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ForumForum $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ForumForum $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ForumForumPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ForumForumPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(ForumForumPeer::DATABASE_NAME, ForumForumPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ForumForum
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ForumForumPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ForumForumPeer::DATABASE_NAME);
		$criteria->add(ForumForumPeer::FORUM_ID, $pk);

		$v = ForumForumPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ForumForumPeer::DATABASE_NAME);
			$criteria->add(ForumForumPeer::FORUM_ID, $pks, Criteria::IN);
			$objs = ForumForumPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseForumForumPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseForumForumPeer::buildTableMap();

