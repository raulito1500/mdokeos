<?php


/**
 * Base static class for performing query and update operations on the 'reservation_main' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationMainPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'reservation_main';

	/** the related Propel class for this table */
	const OM_CLASS = 'ReservationMain';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.ReservationMain';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ReservationMainTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'reservation_main.ID';

	/** the column name for the SUBID field */
	const SUBID = 'reservation_main.SUBID';

	/** the column name for the ITEM_ID field */
	const ITEM_ID = 'reservation_main.ITEM_ID';

	/** the column name for the AUTO_ACCEPT field */
	const AUTO_ACCEPT = 'reservation_main.AUTO_ACCEPT';

	/** the column name for the MAX_USERS field */
	const MAX_USERS = 'reservation_main.MAX_USERS';

	/** the column name for the START_AT field */
	const START_AT = 'reservation_main.START_AT';

	/** the column name for the END_AT field */
	const END_AT = 'reservation_main.END_AT';

	/** the column name for the SUBSCRIBE_FROM field */
	const SUBSCRIBE_FROM = 'reservation_main.SUBSCRIBE_FROM';

	/** the column name for the SUBSCRIBE_UNTIL field */
	const SUBSCRIBE_UNTIL = 'reservation_main.SUBSCRIBE_UNTIL';

	/** the column name for the SUBSCRIBERS field */
	const SUBSCRIBERS = 'reservation_main.SUBSCRIBERS';

	/** the column name for the NOTES field */
	const NOTES = 'reservation_main.NOTES';

	/** the column name for the TIMEPICKER field */
	const TIMEPICKER = 'reservation_main.TIMEPICKER';

	/** the column name for the TIMEPICKER_MIN field */
	const TIMEPICKER_MIN = 'reservation_main.TIMEPICKER_MIN';

	/** the column name for the TIMEPICKER_MAX field */
	const TIMEPICKER_MAX = 'reservation_main.TIMEPICKER_MAX';

	/**
	 * An identiy map to hold any loaded instances of ReservationMain objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ReservationMain[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Subid', 'ItemId', 'AutoAccept', 'MaxUsers', 'StartAt', 'EndAt', 'SubscribeFrom', 'SubscribeUntil', 'Subscribers', 'Notes', 'Timepicker', 'TimepickerMin', 'TimepickerMax', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'subid', 'itemId', 'autoAccept', 'maxUsers', 'startAt', 'endAt', 'subscribeFrom', 'subscribeUntil', 'subscribers', 'notes', 'timepicker', 'timepickerMin', 'timepickerMax', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::SUBID, self::ITEM_ID, self::AUTO_ACCEPT, self::MAX_USERS, self::START_AT, self::END_AT, self::SUBSCRIBE_FROM, self::SUBSCRIBE_UNTIL, self::SUBSCRIBERS, self::NOTES, self::TIMEPICKER, self::TIMEPICKER_MIN, self::TIMEPICKER_MAX, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SUBID', 'ITEM_ID', 'AUTO_ACCEPT', 'MAX_USERS', 'START_AT', 'END_AT', 'SUBSCRIBE_FROM', 'SUBSCRIBE_UNTIL', 'SUBSCRIBERS', 'NOTES', 'TIMEPICKER', 'TIMEPICKER_MIN', 'TIMEPICKER_MAX', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'subid', 'item_id', 'auto_accept', 'max_users', 'start_at', 'end_at', 'subscribe_from', 'subscribe_until', 'subscribers', 'notes', 'timepicker', 'timepicker_min', 'timepicker_max', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Subid' => 1, 'ItemId' => 2, 'AutoAccept' => 3, 'MaxUsers' => 4, 'StartAt' => 5, 'EndAt' => 6, 'SubscribeFrom' => 7, 'SubscribeUntil' => 8, 'Subscribers' => 9, 'Notes' => 10, 'Timepicker' => 11, 'TimepickerMin' => 12, 'TimepickerMax' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'subid' => 1, 'itemId' => 2, 'autoAccept' => 3, 'maxUsers' => 4, 'startAt' => 5, 'endAt' => 6, 'subscribeFrom' => 7, 'subscribeUntil' => 8, 'subscribers' => 9, 'notes' => 10, 'timepicker' => 11, 'timepickerMin' => 12, 'timepickerMax' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::SUBID => 1, self::ITEM_ID => 2, self::AUTO_ACCEPT => 3, self::MAX_USERS => 4, self::START_AT => 5, self::END_AT => 6, self::SUBSCRIBE_FROM => 7, self::SUBSCRIBE_UNTIL => 8, self::SUBSCRIBERS => 9, self::NOTES => 10, self::TIMEPICKER => 11, self::TIMEPICKER_MIN => 12, self::TIMEPICKER_MAX => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SUBID' => 1, 'ITEM_ID' => 2, 'AUTO_ACCEPT' => 3, 'MAX_USERS' => 4, 'START_AT' => 5, 'END_AT' => 6, 'SUBSCRIBE_FROM' => 7, 'SUBSCRIBE_UNTIL' => 8, 'SUBSCRIBERS' => 9, 'NOTES' => 10, 'TIMEPICKER' => 11, 'TIMEPICKER_MIN' => 12, 'TIMEPICKER_MAX' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'subid' => 1, 'item_id' => 2, 'auto_accept' => 3, 'max_users' => 4, 'start_at' => 5, 'end_at' => 6, 'subscribe_from' => 7, 'subscribe_until' => 8, 'subscribers' => 9, 'notes' => 10, 'timepicker' => 11, 'timepicker_min' => 12, 'timepicker_max' => 13, ),
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
	 * @param      string $column The column name for current table. (i.e. ReservationMainPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ReservationMainPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(ReservationMainPeer::ID);
			$criteria->addSelectColumn(ReservationMainPeer::SUBID);
			$criteria->addSelectColumn(ReservationMainPeer::ITEM_ID);
			$criteria->addSelectColumn(ReservationMainPeer::AUTO_ACCEPT);
			$criteria->addSelectColumn(ReservationMainPeer::MAX_USERS);
			$criteria->addSelectColumn(ReservationMainPeer::START_AT);
			$criteria->addSelectColumn(ReservationMainPeer::END_AT);
			$criteria->addSelectColumn(ReservationMainPeer::SUBSCRIBE_FROM);
			$criteria->addSelectColumn(ReservationMainPeer::SUBSCRIBE_UNTIL);
			$criteria->addSelectColumn(ReservationMainPeer::SUBSCRIBERS);
			$criteria->addSelectColumn(ReservationMainPeer::NOTES);
			$criteria->addSelectColumn(ReservationMainPeer::TIMEPICKER);
			$criteria->addSelectColumn(ReservationMainPeer::TIMEPICKER_MIN);
			$criteria->addSelectColumn(ReservationMainPeer::TIMEPICKER_MAX);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.SUBID');
			$criteria->addSelectColumn($alias . '.ITEM_ID');
			$criteria->addSelectColumn($alias . '.AUTO_ACCEPT');
			$criteria->addSelectColumn($alias . '.MAX_USERS');
			$criteria->addSelectColumn($alias . '.START_AT');
			$criteria->addSelectColumn($alias . '.END_AT');
			$criteria->addSelectColumn($alias . '.SUBSCRIBE_FROM');
			$criteria->addSelectColumn($alias . '.SUBSCRIBE_UNTIL');
			$criteria->addSelectColumn($alias . '.SUBSCRIBERS');
			$criteria->addSelectColumn($alias . '.NOTES');
			$criteria->addSelectColumn($alias . '.TIMEPICKER');
			$criteria->addSelectColumn($alias . '.TIMEPICKER_MIN');
			$criteria->addSelectColumn($alias . '.TIMEPICKER_MAX');
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
		$criteria->setPrimaryTableName(ReservationMainPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ReservationMainPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     ReservationMain
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ReservationMainPeer::doSelect($critcopy, $con);
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
		return ReservationMainPeer::populateObjects(ReservationMainPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ReservationMainPeer::addSelectColumns($criteria);
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
	 * @param      ReservationMain $value A ReservationMain object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ReservationMain $obj, $key = null)
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
	 * @param      mixed $value A ReservationMain object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ReservationMain) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ReservationMain object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     ReservationMain Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to reservation_main
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
		$cls = ReservationMainPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ReservationMainPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ReservationMainPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ReservationMainPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (ReservationMain object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ReservationMainPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ReservationMainPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ReservationMainPeer::NUM_COLUMNS;
		} else {
			$cls = ReservationMainPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ReservationMainPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseReservationMainPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseReservationMainPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ReservationMainTableMap());
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
		return $withPrefix ? ReservationMainPeer::CLASS_DEFAULT : ReservationMainPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ReservationMain or Criteria object.
	 *
	 * @param      mixed $values Criteria or ReservationMain object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ReservationMain object
		}

		if ($criteria->containsKey(ReservationMainPeer::ID) && $criteria->keyContainsValue(ReservationMainPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReservationMainPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a ReservationMain or Criteria object.
	 *
	 * @param      mixed $values Criteria or ReservationMain object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ReservationMainPeer::ID);
			$value = $criteria->remove(ReservationMainPeer::ID);
			if ($value) {
				$selectCriteria->add(ReservationMainPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ReservationMainPeer::TABLE_NAME);
			}

		} else { // $values is ReservationMain object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the reservation_main table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ReservationMainPeer::TABLE_NAME, $con, ReservationMainPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ReservationMainPeer::clearInstancePool();
			ReservationMainPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ReservationMain or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ReservationMain object or primary key or array of primary keys
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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ReservationMainPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ReservationMain) { // it's a model object
			// invalidate the cache for this single object
			ReservationMainPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ReservationMainPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ReservationMainPeer::removeInstanceFromPool($singleval);
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
			ReservationMainPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given ReservationMain object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ReservationMain $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ReservationMain $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ReservationMainPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ReservationMainPeer::TABLE_NAME);

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

		return BasePeer::doValidate(ReservationMainPeer::DATABASE_NAME, ReservationMainPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ReservationMain
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ReservationMainPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ReservationMainPeer::DATABASE_NAME);
		$criteria->add(ReservationMainPeer::ID, $pk);

		$v = ReservationMainPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ReservationMainPeer::DATABASE_NAME);
			$criteria->add(ReservationMainPeer::ID, $pks, Criteria::IN);
			$objs = ReservationMainPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseReservationMainPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseReservationMainPeer::buildTableMap();

