<?php


/**
 * Base static class for performing query and update operations on the 'forum_thread' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumThreadPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'forum_thread';

	/** the related Propel class for this table */
	const OM_CLASS = 'ForumThread';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.ForumThread';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ForumThreadTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 16;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the THREAD_ID field */
	const THREAD_ID = 'forum_thread.THREAD_ID';

	/** the column name for the THREAD_TITLE field */
	const THREAD_TITLE = 'forum_thread.THREAD_TITLE';

	/** the column name for the FORUM_ID field */
	const FORUM_ID = 'forum_thread.FORUM_ID';

	/** the column name for the THREAD_REPLIES field */
	const THREAD_REPLIES = 'forum_thread.THREAD_REPLIES';

	/** the column name for the THREAD_POSTER_ID field */
	const THREAD_POSTER_ID = 'forum_thread.THREAD_POSTER_ID';

	/** the column name for the THREAD_POSTER_NAME field */
	const THREAD_POSTER_NAME = 'forum_thread.THREAD_POSTER_NAME';

	/** the column name for the THREAD_VIEWS field */
	const THREAD_VIEWS = 'forum_thread.THREAD_VIEWS';

	/** the column name for the THREAD_LAST_POST field */
	const THREAD_LAST_POST = 'forum_thread.THREAD_LAST_POST';

	/** the column name for the THREAD_DATE field */
	const THREAD_DATE = 'forum_thread.THREAD_DATE';

	/** the column name for the THREAD_STICKY field */
	const THREAD_STICKY = 'forum_thread.THREAD_STICKY';

	/** the column name for the LOCKED field */
	const LOCKED = 'forum_thread.LOCKED';

	/** the column name for the SESSION_ID field */
	const SESSION_ID = 'forum_thread.SESSION_ID';

	/** the column name for the THREAD_TITLE_QUALIFY field */
	const THREAD_TITLE_QUALIFY = 'forum_thread.THREAD_TITLE_QUALIFY';

	/** the column name for the THREAD_QUALIFY_MAX field */
	const THREAD_QUALIFY_MAX = 'forum_thread.THREAD_QUALIFY_MAX';

	/** the column name for the THREAD_CLOSE_DATE field */
	const THREAD_CLOSE_DATE = 'forum_thread.THREAD_CLOSE_DATE';

	/** the column name for the THREAD_WEIGHT field */
	const THREAD_WEIGHT = 'forum_thread.THREAD_WEIGHT';

	/**
	 * An identiy map to hold any loaded instances of ForumThread objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ForumThread[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('ThreadId', 'ThreadTitle', 'ForumId', 'ThreadReplies', 'ThreadPosterId', 'ThreadPosterName', 'ThreadViews', 'ThreadLastPost', 'ThreadDate', 'ThreadSticky', 'Locked', 'SessionId', 'ThreadTitleQualify', 'ThreadQualifyMax', 'ThreadCloseDate', 'ThreadWeight', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('threadId', 'threadTitle', 'forumId', 'threadReplies', 'threadPosterId', 'threadPosterName', 'threadViews', 'threadLastPost', 'threadDate', 'threadSticky', 'locked', 'sessionId', 'threadTitleQualify', 'threadQualifyMax', 'threadCloseDate', 'threadWeight', ),
		BasePeer::TYPE_COLNAME => array (self::THREAD_ID, self::THREAD_TITLE, self::FORUM_ID, self::THREAD_REPLIES, self::THREAD_POSTER_ID, self::THREAD_POSTER_NAME, self::THREAD_VIEWS, self::THREAD_LAST_POST, self::THREAD_DATE, self::THREAD_STICKY, self::LOCKED, self::SESSION_ID, self::THREAD_TITLE_QUALIFY, self::THREAD_QUALIFY_MAX, self::THREAD_CLOSE_DATE, self::THREAD_WEIGHT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('THREAD_ID', 'THREAD_TITLE', 'FORUM_ID', 'THREAD_REPLIES', 'THREAD_POSTER_ID', 'THREAD_POSTER_NAME', 'THREAD_VIEWS', 'THREAD_LAST_POST', 'THREAD_DATE', 'THREAD_STICKY', 'LOCKED', 'SESSION_ID', 'THREAD_TITLE_QUALIFY', 'THREAD_QUALIFY_MAX', 'THREAD_CLOSE_DATE', 'THREAD_WEIGHT', ),
		BasePeer::TYPE_FIELDNAME => array ('thread_id', 'thread_title', 'forum_id', 'thread_replies', 'thread_poster_id', 'thread_poster_name', 'thread_views', 'thread_last_post', 'thread_date', 'thread_sticky', 'locked', 'session_id', 'thread_title_qualify', 'thread_qualify_max', 'thread_close_date', 'thread_weight', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('ThreadId' => 0, 'ThreadTitle' => 1, 'ForumId' => 2, 'ThreadReplies' => 3, 'ThreadPosterId' => 4, 'ThreadPosterName' => 5, 'ThreadViews' => 6, 'ThreadLastPost' => 7, 'ThreadDate' => 8, 'ThreadSticky' => 9, 'Locked' => 10, 'SessionId' => 11, 'ThreadTitleQualify' => 12, 'ThreadQualifyMax' => 13, 'ThreadCloseDate' => 14, 'ThreadWeight' => 15, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('threadId' => 0, 'threadTitle' => 1, 'forumId' => 2, 'threadReplies' => 3, 'threadPosterId' => 4, 'threadPosterName' => 5, 'threadViews' => 6, 'threadLastPost' => 7, 'threadDate' => 8, 'threadSticky' => 9, 'locked' => 10, 'sessionId' => 11, 'threadTitleQualify' => 12, 'threadQualifyMax' => 13, 'threadCloseDate' => 14, 'threadWeight' => 15, ),
		BasePeer::TYPE_COLNAME => array (self::THREAD_ID => 0, self::THREAD_TITLE => 1, self::FORUM_ID => 2, self::THREAD_REPLIES => 3, self::THREAD_POSTER_ID => 4, self::THREAD_POSTER_NAME => 5, self::THREAD_VIEWS => 6, self::THREAD_LAST_POST => 7, self::THREAD_DATE => 8, self::THREAD_STICKY => 9, self::LOCKED => 10, self::SESSION_ID => 11, self::THREAD_TITLE_QUALIFY => 12, self::THREAD_QUALIFY_MAX => 13, self::THREAD_CLOSE_DATE => 14, self::THREAD_WEIGHT => 15, ),
		BasePeer::TYPE_RAW_COLNAME => array ('THREAD_ID' => 0, 'THREAD_TITLE' => 1, 'FORUM_ID' => 2, 'THREAD_REPLIES' => 3, 'THREAD_POSTER_ID' => 4, 'THREAD_POSTER_NAME' => 5, 'THREAD_VIEWS' => 6, 'THREAD_LAST_POST' => 7, 'THREAD_DATE' => 8, 'THREAD_STICKY' => 9, 'LOCKED' => 10, 'SESSION_ID' => 11, 'THREAD_TITLE_QUALIFY' => 12, 'THREAD_QUALIFY_MAX' => 13, 'THREAD_CLOSE_DATE' => 14, 'THREAD_WEIGHT' => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('thread_id' => 0, 'thread_title' => 1, 'forum_id' => 2, 'thread_replies' => 3, 'thread_poster_id' => 4, 'thread_poster_name' => 5, 'thread_views' => 6, 'thread_last_post' => 7, 'thread_date' => 8, 'thread_sticky' => 9, 'locked' => 10, 'session_id' => 11, 'thread_title_qualify' => 12, 'thread_qualify_max' => 13, 'thread_close_date' => 14, 'thread_weight' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
	 * @param      string $column The column name for current table. (i.e. ForumThreadPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ForumThreadPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_ID);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_TITLE);
			$criteria->addSelectColumn(ForumThreadPeer::FORUM_ID);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_REPLIES);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_POSTER_ID);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_POSTER_NAME);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_VIEWS);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_LAST_POST);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_DATE);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_STICKY);
			$criteria->addSelectColumn(ForumThreadPeer::LOCKED);
			$criteria->addSelectColumn(ForumThreadPeer::SESSION_ID);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_TITLE_QUALIFY);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_QUALIFY_MAX);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_CLOSE_DATE);
			$criteria->addSelectColumn(ForumThreadPeer::THREAD_WEIGHT);
		} else {
			$criteria->addSelectColumn($alias . '.THREAD_ID');
			$criteria->addSelectColumn($alias . '.THREAD_TITLE');
			$criteria->addSelectColumn($alias . '.FORUM_ID');
			$criteria->addSelectColumn($alias . '.THREAD_REPLIES');
			$criteria->addSelectColumn($alias . '.THREAD_POSTER_ID');
			$criteria->addSelectColumn($alias . '.THREAD_POSTER_NAME');
			$criteria->addSelectColumn($alias . '.THREAD_VIEWS');
			$criteria->addSelectColumn($alias . '.THREAD_LAST_POST');
			$criteria->addSelectColumn($alias . '.THREAD_DATE');
			$criteria->addSelectColumn($alias . '.THREAD_STICKY');
			$criteria->addSelectColumn($alias . '.LOCKED');
			$criteria->addSelectColumn($alias . '.SESSION_ID');
			$criteria->addSelectColumn($alias . '.THREAD_TITLE_QUALIFY');
			$criteria->addSelectColumn($alias . '.THREAD_QUALIFY_MAX');
			$criteria->addSelectColumn($alias . '.THREAD_CLOSE_DATE');
			$criteria->addSelectColumn($alias . '.THREAD_WEIGHT');
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
		$criteria->setPrimaryTableName(ForumThreadPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ForumThreadPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     ForumThread
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ForumThreadPeer::doSelect($critcopy, $con);
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
		return ForumThreadPeer::populateObjects(ForumThreadPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ForumThreadPeer::addSelectColumns($criteria);
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
	 * @param      ForumThread $value A ForumThread object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ForumThread $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getThreadId();
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
	 * @param      mixed $value A ForumThread object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ForumThread) {
				$key = (string) $value->getThreadId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ForumThread object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     ForumThread Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to forum_thread
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
		$cls = ForumThreadPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ForumThreadPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ForumThreadPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ForumThreadPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (ForumThread object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ForumThreadPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ForumThreadPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ForumThreadPeer::NUM_COLUMNS;
		} else {
			$cls = ForumThreadPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ForumThreadPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseForumThreadPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseForumThreadPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ForumThreadTableMap());
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
		return $withPrefix ? ForumThreadPeer::CLASS_DEFAULT : ForumThreadPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ForumThread or Criteria object.
	 *
	 * @param      mixed $values Criteria or ForumThread object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ForumThread object
		}

		if ($criteria->containsKey(ForumThreadPeer::THREAD_ID) && $criteria->keyContainsValue(ForumThreadPeer::THREAD_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ForumThreadPeer::THREAD_ID.')');
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
	 * Method perform an UPDATE on the database, given a ForumThread or Criteria object.
	 *
	 * @param      mixed $values Criteria or ForumThread object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ForumThreadPeer::THREAD_ID);
			$value = $criteria->remove(ForumThreadPeer::THREAD_ID);
			if ($value) {
				$selectCriteria->add(ForumThreadPeer::THREAD_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ForumThreadPeer::TABLE_NAME);
			}

		} else { // $values is ForumThread object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the forum_thread table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ForumThreadPeer::TABLE_NAME, $con, ForumThreadPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ForumThreadPeer::clearInstancePool();
			ForumThreadPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ForumThread or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ForumThread object or primary key or array of primary keys
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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ForumThreadPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ForumThread) { // it's a model object
			// invalidate the cache for this single object
			ForumThreadPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ForumThreadPeer::THREAD_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ForumThreadPeer::removeInstanceFromPool($singleval);
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
			ForumThreadPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given ForumThread object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ForumThread $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ForumThread $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ForumThreadPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ForumThreadPeer::TABLE_NAME);

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

		return BasePeer::doValidate(ForumThreadPeer::DATABASE_NAME, ForumThreadPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ForumThread
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ForumThreadPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ForumThreadPeer::DATABASE_NAME);
		$criteria->add(ForumThreadPeer::THREAD_ID, $pk);

		$v = ForumThreadPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ForumThreadPeer::DATABASE_NAME);
			$criteria->add(ForumThreadPeer::THREAD_ID, $pks, Criteria::IN);
			$objs = ForumThreadPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseForumThreadPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseForumThreadPeer::buildTableMap();

