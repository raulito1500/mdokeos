<?php


/**
 * Base static class for performing query and update operations on the 'group_category' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupCategoryPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'group_category';

	/** the related Propel class for this table */
	const OM_CLASS = 'GroupCategory';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.GroupCategory';

	/** the related TableMap class for this table */
	const TM_CLASS = 'GroupCategoryTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'group_category.ID';

	/** the column name for the TITLE field */
	const TITLE = 'group_category.TITLE';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'group_category.DESCRIPTION';

	/** the column name for the DOC_STATE field */
	const DOC_STATE = 'group_category.DOC_STATE';

	/** the column name for the CALENDAR_STATE field */
	const CALENDAR_STATE = 'group_category.CALENDAR_STATE';

	/** the column name for the WORK_STATE field */
	const WORK_STATE = 'group_category.WORK_STATE';

	/** the column name for the ANNOUNCEMENTS_STATE field */
	const ANNOUNCEMENTS_STATE = 'group_category.ANNOUNCEMENTS_STATE';

	/** the column name for the FORUM_STATE field */
	const FORUM_STATE = 'group_category.FORUM_STATE';

	/** the column name for the WIKI_STATE field */
	const WIKI_STATE = 'group_category.WIKI_STATE';

	/** the column name for the MAX_STUDENT field */
	const MAX_STUDENT = 'group_category.MAX_STUDENT';

	/** the column name for the SELF_REG_ALLOWED field */
	const SELF_REG_ALLOWED = 'group_category.SELF_REG_ALLOWED';

	/** the column name for the SELF_UNREG_ALLOWED field */
	const SELF_UNREG_ALLOWED = 'group_category.SELF_UNREG_ALLOWED';

	/** the column name for the GROUPS_PER_USER field */
	const GROUPS_PER_USER = 'group_category.GROUPS_PER_USER';

	/** the column name for the DISPLAY_ORDER field */
	const DISPLAY_ORDER = 'group_category.DISPLAY_ORDER';

	/**
	 * An identiy map to hold any loaded instances of GroupCategory objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array GroupCategory[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Title', 'Description', 'DocState', 'CalendarState', 'WorkState', 'AnnouncementsState', 'ForumState', 'WikiState', 'MaxStudent', 'SelfRegAllowed', 'SelfUnregAllowed', 'GroupsPerUser', 'DisplayOrder', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'title', 'description', 'docState', 'calendarState', 'workState', 'announcementsState', 'forumState', 'wikiState', 'maxStudent', 'selfRegAllowed', 'selfUnregAllowed', 'groupsPerUser', 'displayOrder', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::TITLE, self::DESCRIPTION, self::DOC_STATE, self::CALENDAR_STATE, self::WORK_STATE, self::ANNOUNCEMENTS_STATE, self::FORUM_STATE, self::WIKI_STATE, self::MAX_STUDENT, self::SELF_REG_ALLOWED, self::SELF_UNREG_ALLOWED, self::GROUPS_PER_USER, self::DISPLAY_ORDER, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'TITLE', 'DESCRIPTION', 'DOC_STATE', 'CALENDAR_STATE', 'WORK_STATE', 'ANNOUNCEMENTS_STATE', 'FORUM_STATE', 'WIKI_STATE', 'MAX_STUDENT', 'SELF_REG_ALLOWED', 'SELF_UNREG_ALLOWED', 'GROUPS_PER_USER', 'DISPLAY_ORDER', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'title', 'description', 'doc_state', 'calendar_state', 'work_state', 'announcements_state', 'forum_state', 'wiki_state', 'max_student', 'self_reg_allowed', 'self_unreg_allowed', 'groups_per_user', 'display_order', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Title' => 1, 'Description' => 2, 'DocState' => 3, 'CalendarState' => 4, 'WorkState' => 5, 'AnnouncementsState' => 6, 'ForumState' => 7, 'WikiState' => 8, 'MaxStudent' => 9, 'SelfRegAllowed' => 10, 'SelfUnregAllowed' => 11, 'GroupsPerUser' => 12, 'DisplayOrder' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'title' => 1, 'description' => 2, 'docState' => 3, 'calendarState' => 4, 'workState' => 5, 'announcementsState' => 6, 'forumState' => 7, 'wikiState' => 8, 'maxStudent' => 9, 'selfRegAllowed' => 10, 'selfUnregAllowed' => 11, 'groupsPerUser' => 12, 'displayOrder' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::TITLE => 1, self::DESCRIPTION => 2, self::DOC_STATE => 3, self::CALENDAR_STATE => 4, self::WORK_STATE => 5, self::ANNOUNCEMENTS_STATE => 6, self::FORUM_STATE => 7, self::WIKI_STATE => 8, self::MAX_STUDENT => 9, self::SELF_REG_ALLOWED => 10, self::SELF_UNREG_ALLOWED => 11, self::GROUPS_PER_USER => 12, self::DISPLAY_ORDER => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'TITLE' => 1, 'DESCRIPTION' => 2, 'DOC_STATE' => 3, 'CALENDAR_STATE' => 4, 'WORK_STATE' => 5, 'ANNOUNCEMENTS_STATE' => 6, 'FORUM_STATE' => 7, 'WIKI_STATE' => 8, 'MAX_STUDENT' => 9, 'SELF_REG_ALLOWED' => 10, 'SELF_UNREG_ALLOWED' => 11, 'GROUPS_PER_USER' => 12, 'DISPLAY_ORDER' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'title' => 1, 'description' => 2, 'doc_state' => 3, 'calendar_state' => 4, 'work_state' => 5, 'announcements_state' => 6, 'forum_state' => 7, 'wiki_state' => 8, 'max_student' => 9, 'self_reg_allowed' => 10, 'self_unreg_allowed' => 11, 'groups_per_user' => 12, 'display_order' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. GroupCategoryPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(GroupCategoryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(GroupCategoryPeer::ID);
			$criteria->addSelectColumn(GroupCategoryPeer::TITLE);
			$criteria->addSelectColumn(GroupCategoryPeer::DESCRIPTION);
			$criteria->addSelectColumn(GroupCategoryPeer::DOC_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::CALENDAR_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::WORK_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::ANNOUNCEMENTS_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::FORUM_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::WIKI_STATE);
			$criteria->addSelectColumn(GroupCategoryPeer::MAX_STUDENT);
			$criteria->addSelectColumn(GroupCategoryPeer::SELF_REG_ALLOWED);
			$criteria->addSelectColumn(GroupCategoryPeer::SELF_UNREG_ALLOWED);
			$criteria->addSelectColumn(GroupCategoryPeer::GROUPS_PER_USER);
			$criteria->addSelectColumn(GroupCategoryPeer::DISPLAY_ORDER);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.DOC_STATE');
			$criteria->addSelectColumn($alias . '.CALENDAR_STATE');
			$criteria->addSelectColumn($alias . '.WORK_STATE');
			$criteria->addSelectColumn($alias . '.ANNOUNCEMENTS_STATE');
			$criteria->addSelectColumn($alias . '.FORUM_STATE');
			$criteria->addSelectColumn($alias . '.WIKI_STATE');
			$criteria->addSelectColumn($alias . '.MAX_STUDENT');
			$criteria->addSelectColumn($alias . '.SELF_REG_ALLOWED');
			$criteria->addSelectColumn($alias . '.SELF_UNREG_ALLOWED');
			$criteria->addSelectColumn($alias . '.GROUPS_PER_USER');
			$criteria->addSelectColumn($alias . '.DISPLAY_ORDER');
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
		$criteria->setPrimaryTableName(GroupCategoryPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			GroupCategoryPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     GroupCategory
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = GroupCategoryPeer::doSelect($critcopy, $con);
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
		return GroupCategoryPeer::populateObjects(GroupCategoryPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			GroupCategoryPeer::addSelectColumns($criteria);
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
	 * @param      GroupCategory $value A GroupCategory object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(GroupCategory $obj, $key = null)
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
	 * @param      mixed $value A GroupCategory object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof GroupCategory) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GroupCategory object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     GroupCategory Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to group_category
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
		$cls = GroupCategoryPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = GroupCategoryPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = GroupCategoryPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				GroupCategoryPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (GroupCategory object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = GroupCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = GroupCategoryPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + GroupCategoryPeer::NUM_COLUMNS;
		} else {
			$cls = GroupCategoryPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			GroupCategoryPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseGroupCategoryPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseGroupCategoryPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new GroupCategoryTableMap());
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
		return $withPrefix ? GroupCategoryPeer::CLASS_DEFAULT : GroupCategoryPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a GroupCategory or Criteria object.
	 *
	 * @param      mixed $values Criteria or GroupCategory object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from GroupCategory object
		}

		if ($criteria->containsKey(GroupCategoryPeer::ID) && $criteria->keyContainsValue(GroupCategoryPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupCategoryPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a GroupCategory or Criteria object.
	 *
	 * @param      mixed $values Criteria or GroupCategory object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(GroupCategoryPeer::ID);
			$value = $criteria->remove(GroupCategoryPeer::ID);
			if ($value) {
				$selectCriteria->add(GroupCategoryPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(GroupCategoryPeer::TABLE_NAME);
			}

		} else { // $values is GroupCategory object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the group_category table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(GroupCategoryPeer::TABLE_NAME, $con, GroupCategoryPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			GroupCategoryPeer::clearInstancePool();
			GroupCategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a GroupCategory or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or GroupCategory object or primary key or array of primary keys
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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			GroupCategoryPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof GroupCategory) { // it's a model object
			// invalidate the cache for this single object
			GroupCategoryPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GroupCategoryPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				GroupCategoryPeer::removeInstanceFromPool($singleval);
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
			GroupCategoryPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given GroupCategory object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      GroupCategory $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(GroupCategory $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GroupCategoryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GroupCategoryPeer::TABLE_NAME);

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

		return BasePeer::doValidate(GroupCategoryPeer::DATABASE_NAME, GroupCategoryPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     GroupCategory
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = GroupCategoryPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(GroupCategoryPeer::DATABASE_NAME);
		$criteria->add(GroupCategoryPeer::ID, $pk);

		$v = GroupCategoryPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(GroupCategoryPeer::DATABASE_NAME);
			$criteria->add(GroupCategoryPeer::ID, $pks, Criteria::IN);
			$objs = GroupCategoryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseGroupCategoryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGroupCategoryPeer::buildTableMap();

