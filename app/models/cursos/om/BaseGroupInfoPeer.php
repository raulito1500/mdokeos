<?php


/**
 * Base static class for performing query and update operations on the 'group_info' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupInfoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'group_info';

	/** the related Propel class for this table */
	const OM_CLASS = 'GroupInfo';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.GroupInfo';

	/** the related TableMap class for this table */
	const TM_CLASS = 'GroupInfoTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 15;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'group_info.ID';

	/** the column name for the NAME field */
	const NAME = 'group_info.NAME';

	/** the column name for the CATEGORY_ID field */
	const CATEGORY_ID = 'group_info.CATEGORY_ID';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'group_info.DESCRIPTION';

	/** the column name for the MAX_STUDENT field */
	const MAX_STUDENT = 'group_info.MAX_STUDENT';

	/** the column name for the DOC_STATE field */
	const DOC_STATE = 'group_info.DOC_STATE';

	/** the column name for the CALENDAR_STATE field */
	const CALENDAR_STATE = 'group_info.CALENDAR_STATE';

	/** the column name for the WORK_STATE field */
	const WORK_STATE = 'group_info.WORK_STATE';

	/** the column name for the ANNOUNCEMENTS_STATE field */
	const ANNOUNCEMENTS_STATE = 'group_info.ANNOUNCEMENTS_STATE';

	/** the column name for the FORUM_STATE field */
	const FORUM_STATE = 'group_info.FORUM_STATE';

	/** the column name for the WIKI_STATE field */
	const WIKI_STATE = 'group_info.WIKI_STATE';

	/** the column name for the SECRET_DIRECTORY field */
	const SECRET_DIRECTORY = 'group_info.SECRET_DIRECTORY';

	/** the column name for the SELF_REGISTRATION_ALLOWED field */
	const SELF_REGISTRATION_ALLOWED = 'group_info.SELF_REGISTRATION_ALLOWED';

	/** the column name for the SELF_UNREGISTRATION_ALLOWED field */
	const SELF_UNREGISTRATION_ALLOWED = 'group_info.SELF_UNREGISTRATION_ALLOWED';

	/** the column name for the SESSION_ID field */
	const SESSION_ID = 'group_info.SESSION_ID';

	/**
	 * An identiy map to hold any loaded instances of GroupInfo objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array GroupInfo[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'CategoryId', 'Description', 'MaxStudent', 'DocState', 'CalendarState', 'WorkState', 'AnnouncementsState', 'ForumState', 'WikiState', 'SecretDirectory', 'SelfRegistrationAllowed', 'SelfUnregistrationAllowed', 'SessionId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'categoryId', 'description', 'maxStudent', 'docState', 'calendarState', 'workState', 'announcementsState', 'forumState', 'wikiState', 'secretDirectory', 'selfRegistrationAllowed', 'selfUnregistrationAllowed', 'sessionId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::CATEGORY_ID, self::DESCRIPTION, self::MAX_STUDENT, self::DOC_STATE, self::CALENDAR_STATE, self::WORK_STATE, self::ANNOUNCEMENTS_STATE, self::FORUM_STATE, self::WIKI_STATE, self::SECRET_DIRECTORY, self::SELF_REGISTRATION_ALLOWED, self::SELF_UNREGISTRATION_ALLOWED, self::SESSION_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'CATEGORY_ID', 'DESCRIPTION', 'MAX_STUDENT', 'DOC_STATE', 'CALENDAR_STATE', 'WORK_STATE', 'ANNOUNCEMENTS_STATE', 'FORUM_STATE', 'WIKI_STATE', 'SECRET_DIRECTORY', 'SELF_REGISTRATION_ALLOWED', 'SELF_UNREGISTRATION_ALLOWED', 'SESSION_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'category_id', 'description', 'max_student', 'doc_state', 'calendar_state', 'work_state', 'announcements_state', 'forum_state', 'wiki_state', 'secret_directory', 'self_registration_allowed', 'self_unregistration_allowed', 'session_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'CategoryId' => 2, 'Description' => 3, 'MaxStudent' => 4, 'DocState' => 5, 'CalendarState' => 6, 'WorkState' => 7, 'AnnouncementsState' => 8, 'ForumState' => 9, 'WikiState' => 10, 'SecretDirectory' => 11, 'SelfRegistrationAllowed' => 12, 'SelfUnregistrationAllowed' => 13, 'SessionId' => 14, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'categoryId' => 2, 'description' => 3, 'maxStudent' => 4, 'docState' => 5, 'calendarState' => 6, 'workState' => 7, 'announcementsState' => 8, 'forumState' => 9, 'wikiState' => 10, 'secretDirectory' => 11, 'selfRegistrationAllowed' => 12, 'selfUnregistrationAllowed' => 13, 'sessionId' => 14, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::CATEGORY_ID => 2, self::DESCRIPTION => 3, self::MAX_STUDENT => 4, self::DOC_STATE => 5, self::CALENDAR_STATE => 6, self::WORK_STATE => 7, self::ANNOUNCEMENTS_STATE => 8, self::FORUM_STATE => 9, self::WIKI_STATE => 10, self::SECRET_DIRECTORY => 11, self::SELF_REGISTRATION_ALLOWED => 12, self::SELF_UNREGISTRATION_ALLOWED => 13, self::SESSION_ID => 14, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'CATEGORY_ID' => 2, 'DESCRIPTION' => 3, 'MAX_STUDENT' => 4, 'DOC_STATE' => 5, 'CALENDAR_STATE' => 6, 'WORK_STATE' => 7, 'ANNOUNCEMENTS_STATE' => 8, 'FORUM_STATE' => 9, 'WIKI_STATE' => 10, 'SECRET_DIRECTORY' => 11, 'SELF_REGISTRATION_ALLOWED' => 12, 'SELF_UNREGISTRATION_ALLOWED' => 13, 'SESSION_ID' => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'category_id' => 2, 'description' => 3, 'max_student' => 4, 'doc_state' => 5, 'calendar_state' => 6, 'work_state' => 7, 'announcements_state' => 8, 'forum_state' => 9, 'wiki_state' => 10, 'secret_directory' => 11, 'self_registration_allowed' => 12, 'self_unregistration_allowed' => 13, 'session_id' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
	 * @param      string $column The column name for current table. (i.e. GroupInfoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(GroupInfoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(GroupInfoPeer::ID);
			$criteria->addSelectColumn(GroupInfoPeer::NAME);
			$criteria->addSelectColumn(GroupInfoPeer::CATEGORY_ID);
			$criteria->addSelectColumn(GroupInfoPeer::DESCRIPTION);
			$criteria->addSelectColumn(GroupInfoPeer::MAX_STUDENT);
			$criteria->addSelectColumn(GroupInfoPeer::DOC_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::CALENDAR_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::WORK_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::ANNOUNCEMENTS_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::FORUM_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::WIKI_STATE);
			$criteria->addSelectColumn(GroupInfoPeer::SECRET_DIRECTORY);
			$criteria->addSelectColumn(GroupInfoPeer::SELF_REGISTRATION_ALLOWED);
			$criteria->addSelectColumn(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED);
			$criteria->addSelectColumn(GroupInfoPeer::SESSION_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.CATEGORY_ID');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.MAX_STUDENT');
			$criteria->addSelectColumn($alias . '.DOC_STATE');
			$criteria->addSelectColumn($alias . '.CALENDAR_STATE');
			$criteria->addSelectColumn($alias . '.WORK_STATE');
			$criteria->addSelectColumn($alias . '.ANNOUNCEMENTS_STATE');
			$criteria->addSelectColumn($alias . '.FORUM_STATE');
			$criteria->addSelectColumn($alias . '.WIKI_STATE');
			$criteria->addSelectColumn($alias . '.SECRET_DIRECTORY');
			$criteria->addSelectColumn($alias . '.SELF_REGISTRATION_ALLOWED');
			$criteria->addSelectColumn($alias . '.SELF_UNREGISTRATION_ALLOWED');
			$criteria->addSelectColumn($alias . '.SESSION_ID');
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
		$criteria->setPrimaryTableName(GroupInfoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			GroupInfoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     GroupInfo
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = GroupInfoPeer::doSelect($critcopy, $con);
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
		return GroupInfoPeer::populateObjects(GroupInfoPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			GroupInfoPeer::addSelectColumns($criteria);
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
	 * @param      GroupInfo $value A GroupInfo object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(GroupInfo $obj, $key = null)
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
	 * @param      mixed $value A GroupInfo object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof GroupInfo) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GroupInfo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     GroupInfo Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to group_info
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
		$cls = GroupInfoPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = GroupInfoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = GroupInfoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				GroupInfoPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (GroupInfo object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = GroupInfoPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = GroupInfoPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + GroupInfoPeer::NUM_COLUMNS;
		} else {
			$cls = GroupInfoPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			GroupInfoPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseGroupInfoPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseGroupInfoPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new GroupInfoTableMap());
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
		return $withPrefix ? GroupInfoPeer::CLASS_DEFAULT : GroupInfoPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a GroupInfo or Criteria object.
	 *
	 * @param      mixed $values Criteria or GroupInfo object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from GroupInfo object
		}

		if ($criteria->containsKey(GroupInfoPeer::ID) && $criteria->keyContainsValue(GroupInfoPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupInfoPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a GroupInfo or Criteria object.
	 *
	 * @param      mixed $values Criteria or GroupInfo object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(GroupInfoPeer::ID);
			$value = $criteria->remove(GroupInfoPeer::ID);
			if ($value) {
				$selectCriteria->add(GroupInfoPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(GroupInfoPeer::TABLE_NAME);
			}

		} else { // $values is GroupInfo object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the group_info table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(GroupInfoPeer::TABLE_NAME, $con, GroupInfoPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			GroupInfoPeer::clearInstancePool();
			GroupInfoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a GroupInfo or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or GroupInfo object or primary key or array of primary keys
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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			GroupInfoPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof GroupInfo) { // it's a model object
			// invalidate the cache for this single object
			GroupInfoPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GroupInfoPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				GroupInfoPeer::removeInstanceFromPool($singleval);
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
			GroupInfoPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given GroupInfo object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      GroupInfo $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(GroupInfo $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GroupInfoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GroupInfoPeer::TABLE_NAME);

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

		return BasePeer::doValidate(GroupInfoPeer::DATABASE_NAME, GroupInfoPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     GroupInfo
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = GroupInfoPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(GroupInfoPeer::DATABASE_NAME);
		$criteria->add(GroupInfoPeer::ID, $pk);

		$v = GroupInfoPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(GroupInfoPeer::DATABASE_NAME);
			$criteria->add(GroupInfoPeer::ID, $pks, Criteria::IN);
			$objs = GroupInfoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseGroupInfoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGroupInfoPeer::buildTableMap();

