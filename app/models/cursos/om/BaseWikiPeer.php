<?php


/**
 * Base static class for performing query and update operations on the 'wiki' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'wiki';

	/** the related Propel class for this table */
	const OM_CLASS = 'Wiki';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.Wiki';

	/** the related TableMap class for this table */
	const TM_CLASS = 'WikiTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 25;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'wiki.ID';

	/** the column name for the PAGE_ID field */
	const PAGE_ID = 'wiki.PAGE_ID';

	/** the column name for the REFLINK field */
	const REFLINK = 'wiki.REFLINK';

	/** the column name for the TITLE field */
	const TITLE = 'wiki.TITLE';

	/** the column name for the CONTENT field */
	const CONTENT = 'wiki.CONTENT';

	/** the column name for the USER_ID field */
	const USER_ID = 'wiki.USER_ID';

	/** the column name for the GROUP_ID field */
	const GROUP_ID = 'wiki.GROUP_ID';

	/** the column name for the DTIME field */
	const DTIME = 'wiki.DTIME';

	/** the column name for the ADDLOCK field */
	const ADDLOCK = 'wiki.ADDLOCK';

	/** the column name for the EDITLOCK field */
	const EDITLOCK = 'wiki.EDITLOCK';

	/** the column name for the VISIBILITY field */
	const VISIBILITY = 'wiki.VISIBILITY';

	/** the column name for the ADDLOCK_DISC field */
	const ADDLOCK_DISC = 'wiki.ADDLOCK_DISC';

	/** the column name for the VISIBILITY_DISC field */
	const VISIBILITY_DISC = 'wiki.VISIBILITY_DISC';

	/** the column name for the RATINGLOCK_DISC field */
	const RATINGLOCK_DISC = 'wiki.RATINGLOCK_DISC';

	/** the column name for the ASSIGNMENT field */
	const ASSIGNMENT = 'wiki.ASSIGNMENT';

	/** the column name for the COMMENT field */
	const COMMENT = 'wiki.COMMENT';

	/** the column name for the PROGRESS field */
	const PROGRESS = 'wiki.PROGRESS';

	/** the column name for the SCORE field */
	const SCORE = 'wiki.SCORE';

	/** the column name for the VERSION field */
	const VERSION = 'wiki.VERSION';

	/** the column name for the IS_EDITING field */
	const IS_EDITING = 'wiki.IS_EDITING';

	/** the column name for the TIME_EDIT field */
	const TIME_EDIT = 'wiki.TIME_EDIT';

	/** the column name for the HITS field */
	const HITS = 'wiki.HITS';

	/** the column name for the LINKSTO field */
	const LINKSTO = 'wiki.LINKSTO';

	/** the column name for the TAG field */
	const TAG = 'wiki.TAG';

	/** the column name for the USER_IP field */
	const USER_IP = 'wiki.USER_IP';

	/**
	 * An identiy map to hold any loaded instances of Wiki objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Wiki[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PageId', 'Reflink', 'Title', 'Content', 'UserId', 'GroupId', 'Dtime', 'Addlock', 'Editlock', 'Visibility', 'AddlockDisc', 'VisibilityDisc', 'RatinglockDisc', 'Assignment', 'Comment', 'Progress', 'Score', 'Version', 'IsEditing', 'TimeEdit', 'Hits', 'Linksto', 'Tag', 'UserIp', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'pageId', 'reflink', 'title', 'content', 'userId', 'groupId', 'dtime', 'addlock', 'editlock', 'visibility', 'addlockDisc', 'visibilityDisc', 'ratinglockDisc', 'assignment', 'comment', 'progress', 'score', 'version', 'isEditing', 'timeEdit', 'hits', 'linksto', 'tag', 'userIp', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::PAGE_ID, self::REFLINK, self::TITLE, self::CONTENT, self::USER_ID, self::GROUP_ID, self::DTIME, self::ADDLOCK, self::EDITLOCK, self::VISIBILITY, self::ADDLOCK_DISC, self::VISIBILITY_DISC, self::RATINGLOCK_DISC, self::ASSIGNMENT, self::COMMENT, self::PROGRESS, self::SCORE, self::VERSION, self::IS_EDITING, self::TIME_EDIT, self::HITS, self::LINKSTO, self::TAG, self::USER_IP, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PAGE_ID', 'REFLINK', 'TITLE', 'CONTENT', 'USER_ID', 'GROUP_ID', 'DTIME', 'ADDLOCK', 'EDITLOCK', 'VISIBILITY', 'ADDLOCK_DISC', 'VISIBILITY_DISC', 'RATINGLOCK_DISC', 'ASSIGNMENT', 'COMMENT', 'PROGRESS', 'SCORE', 'VERSION', 'IS_EDITING', 'TIME_EDIT', 'HITS', 'LINKSTO', 'TAG', 'USER_IP', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'page_id', 'reflink', 'title', 'content', 'user_id', 'group_id', 'dtime', 'addlock', 'editlock', 'visibility', 'addlock_disc', 'visibility_disc', 'ratinglock_disc', 'assignment', 'comment', 'progress', 'score', 'version', 'is_editing', 'time_edit', 'hits', 'linksto', 'tag', 'user_ip', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PageId' => 1, 'Reflink' => 2, 'Title' => 3, 'Content' => 4, 'UserId' => 5, 'GroupId' => 6, 'Dtime' => 7, 'Addlock' => 8, 'Editlock' => 9, 'Visibility' => 10, 'AddlockDisc' => 11, 'VisibilityDisc' => 12, 'RatinglockDisc' => 13, 'Assignment' => 14, 'Comment' => 15, 'Progress' => 16, 'Score' => 17, 'Version' => 18, 'IsEditing' => 19, 'TimeEdit' => 20, 'Hits' => 21, 'Linksto' => 22, 'Tag' => 23, 'UserIp' => 24, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'pageId' => 1, 'reflink' => 2, 'title' => 3, 'content' => 4, 'userId' => 5, 'groupId' => 6, 'dtime' => 7, 'addlock' => 8, 'editlock' => 9, 'visibility' => 10, 'addlockDisc' => 11, 'visibilityDisc' => 12, 'ratinglockDisc' => 13, 'assignment' => 14, 'comment' => 15, 'progress' => 16, 'score' => 17, 'version' => 18, 'isEditing' => 19, 'timeEdit' => 20, 'hits' => 21, 'linksto' => 22, 'tag' => 23, 'userIp' => 24, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::PAGE_ID => 1, self::REFLINK => 2, self::TITLE => 3, self::CONTENT => 4, self::USER_ID => 5, self::GROUP_ID => 6, self::DTIME => 7, self::ADDLOCK => 8, self::EDITLOCK => 9, self::VISIBILITY => 10, self::ADDLOCK_DISC => 11, self::VISIBILITY_DISC => 12, self::RATINGLOCK_DISC => 13, self::ASSIGNMENT => 14, self::COMMENT => 15, self::PROGRESS => 16, self::SCORE => 17, self::VERSION => 18, self::IS_EDITING => 19, self::TIME_EDIT => 20, self::HITS => 21, self::LINKSTO => 22, self::TAG => 23, self::USER_IP => 24, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PAGE_ID' => 1, 'REFLINK' => 2, 'TITLE' => 3, 'CONTENT' => 4, 'USER_ID' => 5, 'GROUP_ID' => 6, 'DTIME' => 7, 'ADDLOCK' => 8, 'EDITLOCK' => 9, 'VISIBILITY' => 10, 'ADDLOCK_DISC' => 11, 'VISIBILITY_DISC' => 12, 'RATINGLOCK_DISC' => 13, 'ASSIGNMENT' => 14, 'COMMENT' => 15, 'PROGRESS' => 16, 'SCORE' => 17, 'VERSION' => 18, 'IS_EDITING' => 19, 'TIME_EDIT' => 20, 'HITS' => 21, 'LINKSTO' => 22, 'TAG' => 23, 'USER_IP' => 24, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'page_id' => 1, 'reflink' => 2, 'title' => 3, 'content' => 4, 'user_id' => 5, 'group_id' => 6, 'dtime' => 7, 'addlock' => 8, 'editlock' => 9, 'visibility' => 10, 'addlock_disc' => 11, 'visibility_disc' => 12, 'ratinglock_disc' => 13, 'assignment' => 14, 'comment' => 15, 'progress' => 16, 'score' => 17, 'version' => 18, 'is_editing' => 19, 'time_edit' => 20, 'hits' => 21, 'linksto' => 22, 'tag' => 23, 'user_ip' => 24, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
	 * @param      string $column The column name for current table. (i.e. WikiPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(WikiPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(WikiPeer::ID);
			$criteria->addSelectColumn(WikiPeer::PAGE_ID);
			$criteria->addSelectColumn(WikiPeer::REFLINK);
			$criteria->addSelectColumn(WikiPeer::TITLE);
			$criteria->addSelectColumn(WikiPeer::CONTENT);
			$criteria->addSelectColumn(WikiPeer::USER_ID);
			$criteria->addSelectColumn(WikiPeer::GROUP_ID);
			$criteria->addSelectColumn(WikiPeer::DTIME);
			$criteria->addSelectColumn(WikiPeer::ADDLOCK);
			$criteria->addSelectColumn(WikiPeer::EDITLOCK);
			$criteria->addSelectColumn(WikiPeer::VISIBILITY);
			$criteria->addSelectColumn(WikiPeer::ADDLOCK_DISC);
			$criteria->addSelectColumn(WikiPeer::VISIBILITY_DISC);
			$criteria->addSelectColumn(WikiPeer::RATINGLOCK_DISC);
			$criteria->addSelectColumn(WikiPeer::ASSIGNMENT);
			$criteria->addSelectColumn(WikiPeer::COMMENT);
			$criteria->addSelectColumn(WikiPeer::PROGRESS);
			$criteria->addSelectColumn(WikiPeer::SCORE);
			$criteria->addSelectColumn(WikiPeer::VERSION);
			$criteria->addSelectColumn(WikiPeer::IS_EDITING);
			$criteria->addSelectColumn(WikiPeer::TIME_EDIT);
			$criteria->addSelectColumn(WikiPeer::HITS);
			$criteria->addSelectColumn(WikiPeer::LINKSTO);
			$criteria->addSelectColumn(WikiPeer::TAG);
			$criteria->addSelectColumn(WikiPeer::USER_IP);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.PAGE_ID');
			$criteria->addSelectColumn($alias . '.REFLINK');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.CONTENT');
			$criteria->addSelectColumn($alias . '.USER_ID');
			$criteria->addSelectColumn($alias . '.GROUP_ID');
			$criteria->addSelectColumn($alias . '.DTIME');
			$criteria->addSelectColumn($alias . '.ADDLOCK');
			$criteria->addSelectColumn($alias . '.EDITLOCK');
			$criteria->addSelectColumn($alias . '.VISIBILITY');
			$criteria->addSelectColumn($alias . '.ADDLOCK_DISC');
			$criteria->addSelectColumn($alias . '.VISIBILITY_DISC');
			$criteria->addSelectColumn($alias . '.RATINGLOCK_DISC');
			$criteria->addSelectColumn($alias . '.ASSIGNMENT');
			$criteria->addSelectColumn($alias . '.COMMENT');
			$criteria->addSelectColumn($alias . '.PROGRESS');
			$criteria->addSelectColumn($alias . '.SCORE');
			$criteria->addSelectColumn($alias . '.VERSION');
			$criteria->addSelectColumn($alias . '.IS_EDITING');
			$criteria->addSelectColumn($alias . '.TIME_EDIT');
			$criteria->addSelectColumn($alias . '.HITS');
			$criteria->addSelectColumn($alias . '.LINKSTO');
			$criteria->addSelectColumn($alias . '.TAG');
			$criteria->addSelectColumn($alias . '.USER_IP');
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
		$criteria->setPrimaryTableName(WikiPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WikiPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Wiki
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = WikiPeer::doSelect($critcopy, $con);
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
		return WikiPeer::populateObjects(WikiPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			WikiPeer::addSelectColumns($criteria);
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
	 * @param      Wiki $value A Wiki object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Wiki $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
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
	 * @param      mixed $value A Wiki object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Wiki) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Wiki object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Wiki Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to wiki
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
		$cls = WikiPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = WikiPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = WikiPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				WikiPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Wiki object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = WikiPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = WikiPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + WikiPeer::NUM_COLUMNS;
		} else {
			$cls = WikiPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			WikiPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseWikiPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseWikiPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new WikiTableMap());
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
		return $withPrefix ? WikiPeer::CLASS_DEFAULT : WikiPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Wiki or Criteria object.
	 *
	 * @param      mixed $values Criteria or Wiki object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Wiki object
		}

		if ($criteria->containsKey(WikiPeer::ID) && $criteria->keyContainsValue(WikiPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.WikiPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a Wiki or Criteria object.
	 *
	 * @param      mixed $values Criteria or Wiki object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(WikiPeer::ID);
			$value = $criteria->remove(WikiPeer::ID);
			if ($value) {
				$selectCriteria->add(WikiPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(WikiPeer::TABLE_NAME);
			}

		} else { // $values is Wiki object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the wiki table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(WikiPeer::TABLE_NAME, $con, WikiPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			WikiPeer::clearInstancePool();
			WikiPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Wiki or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Wiki object or primary key or array of primary keys
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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			WikiPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Wiki) { // it's a model object
			// invalidate the cache for this single object
			WikiPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WikiPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				WikiPeer::removeInstanceFromPool($singleval);
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
			WikiPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Wiki object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Wiki $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Wiki $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WikiPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WikiPeer::TABLE_NAME);

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

		return BasePeer::doValidate(WikiPeer::DATABASE_NAME, WikiPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Wiki
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = WikiPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(WikiPeer::DATABASE_NAME);
		$criteria->add(WikiPeer::ID, $pk);

		$v = WikiPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(WikiPeer::DATABASE_NAME);
			$criteria->add(WikiPeer::ID, $pks, Criteria::IN);
			$objs = WikiPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseWikiPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWikiPeer::buildTableMap();

