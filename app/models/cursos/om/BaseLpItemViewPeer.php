<?php


/**
 * Base static class for performing query and update operations on the 'lp_item_view' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItemViewPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'lp_item_view';

	/** the related Propel class for this table */
	const OM_CLASS = 'LpItemView';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.LpItemView';

	/** the related TableMap class for this table */
	const TM_CLASS = 'LpItemViewTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 12;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'lp_item_view.ID';

	/** the column name for the LP_ITEM_ID field */
	const LP_ITEM_ID = 'lp_item_view.LP_ITEM_ID';

	/** the column name for the LP_VIEW_ID field */
	const LP_VIEW_ID = 'lp_item_view.LP_VIEW_ID';

	/** the column name for the VIEW_COUNT field */
	const VIEW_COUNT = 'lp_item_view.VIEW_COUNT';

	/** the column name for the START_TIME field */
	const START_TIME = 'lp_item_view.START_TIME';

	/** the column name for the TOTAL_TIME field */
	const TOTAL_TIME = 'lp_item_view.TOTAL_TIME';

	/** the column name for the SCORE field */
	const SCORE = 'lp_item_view.SCORE';

	/** the column name for the STATUS field */
	const STATUS = 'lp_item_view.STATUS';

	/** the column name for the SUSPEND_DATA field */
	const SUSPEND_DATA = 'lp_item_view.SUSPEND_DATA';

	/** the column name for the LESSON_LOCATION field */
	const LESSON_LOCATION = 'lp_item_view.LESSON_LOCATION';

	/** the column name for the CORE_EXIT field */
	const CORE_EXIT = 'lp_item_view.CORE_EXIT';

	/** the column name for the MAX_SCORE field */
	const MAX_SCORE = 'lp_item_view.MAX_SCORE';

	/**
	 * An identiy map to hold any loaded instances of LpItemView objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array LpItemView[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'LpItemId', 'LpViewId', 'ViewCount', 'StartTime', 'TotalTime', 'Score', 'Status', 'SuspendData', 'LessonLocation', 'CoreExit', 'MaxScore', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'lpItemId', 'lpViewId', 'viewCount', 'startTime', 'totalTime', 'score', 'status', 'suspendData', 'lessonLocation', 'coreExit', 'maxScore', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::LP_ITEM_ID, self::LP_VIEW_ID, self::VIEW_COUNT, self::START_TIME, self::TOTAL_TIME, self::SCORE, self::STATUS, self::SUSPEND_DATA, self::LESSON_LOCATION, self::CORE_EXIT, self::MAX_SCORE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LP_ITEM_ID', 'LP_VIEW_ID', 'VIEW_COUNT', 'START_TIME', 'TOTAL_TIME', 'SCORE', 'STATUS', 'SUSPEND_DATA', 'LESSON_LOCATION', 'CORE_EXIT', 'MAX_SCORE', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'lp_item_id', 'lp_view_id', 'view_count', 'start_time', 'total_time', 'score', 'status', 'suspend_data', 'lesson_location', 'core_exit', 'max_score', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LpItemId' => 1, 'LpViewId' => 2, 'ViewCount' => 3, 'StartTime' => 4, 'TotalTime' => 5, 'Score' => 6, 'Status' => 7, 'SuspendData' => 8, 'LessonLocation' => 9, 'CoreExit' => 10, 'MaxScore' => 11, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'lpItemId' => 1, 'lpViewId' => 2, 'viewCount' => 3, 'startTime' => 4, 'totalTime' => 5, 'score' => 6, 'status' => 7, 'suspendData' => 8, 'lessonLocation' => 9, 'coreExit' => 10, 'maxScore' => 11, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::LP_ITEM_ID => 1, self::LP_VIEW_ID => 2, self::VIEW_COUNT => 3, self::START_TIME => 4, self::TOTAL_TIME => 5, self::SCORE => 6, self::STATUS => 7, self::SUSPEND_DATA => 8, self::LESSON_LOCATION => 9, self::CORE_EXIT => 10, self::MAX_SCORE => 11, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LP_ITEM_ID' => 1, 'LP_VIEW_ID' => 2, 'VIEW_COUNT' => 3, 'START_TIME' => 4, 'TOTAL_TIME' => 5, 'SCORE' => 6, 'STATUS' => 7, 'SUSPEND_DATA' => 8, 'LESSON_LOCATION' => 9, 'CORE_EXIT' => 10, 'MAX_SCORE' => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'lp_item_id' => 1, 'lp_view_id' => 2, 'view_count' => 3, 'start_time' => 4, 'total_time' => 5, 'score' => 6, 'status' => 7, 'suspend_data' => 8, 'lesson_location' => 9, 'core_exit' => 10, 'max_score' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
	 * @param      string $column The column name for current table. (i.e. LpItemViewPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(LpItemViewPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(LpItemViewPeer::ID);
			$criteria->addSelectColumn(LpItemViewPeer::LP_ITEM_ID);
			$criteria->addSelectColumn(LpItemViewPeer::LP_VIEW_ID);
			$criteria->addSelectColumn(LpItemViewPeer::VIEW_COUNT);
			$criteria->addSelectColumn(LpItemViewPeer::START_TIME);
			$criteria->addSelectColumn(LpItemViewPeer::TOTAL_TIME);
			$criteria->addSelectColumn(LpItemViewPeer::SCORE);
			$criteria->addSelectColumn(LpItemViewPeer::STATUS);
			$criteria->addSelectColumn(LpItemViewPeer::SUSPEND_DATA);
			$criteria->addSelectColumn(LpItemViewPeer::LESSON_LOCATION);
			$criteria->addSelectColumn(LpItemViewPeer::CORE_EXIT);
			$criteria->addSelectColumn(LpItemViewPeer::MAX_SCORE);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.LP_ITEM_ID');
			$criteria->addSelectColumn($alias . '.LP_VIEW_ID');
			$criteria->addSelectColumn($alias . '.VIEW_COUNT');
			$criteria->addSelectColumn($alias . '.START_TIME');
			$criteria->addSelectColumn($alias . '.TOTAL_TIME');
			$criteria->addSelectColumn($alias . '.SCORE');
			$criteria->addSelectColumn($alias . '.STATUS');
			$criteria->addSelectColumn($alias . '.SUSPEND_DATA');
			$criteria->addSelectColumn($alias . '.LESSON_LOCATION');
			$criteria->addSelectColumn($alias . '.CORE_EXIT');
			$criteria->addSelectColumn($alias . '.MAX_SCORE');
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
		$criteria->setPrimaryTableName(LpItemViewPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			LpItemViewPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     LpItemView
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = LpItemViewPeer::doSelect($critcopy, $con);
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
		return LpItemViewPeer::populateObjects(LpItemViewPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			LpItemViewPeer::addSelectColumns($criteria);
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
	 * @param      LpItemView $value A LpItemView object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(LpItemView $obj, $key = null)
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
	 * @param      mixed $value A LpItemView object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof LpItemView) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or LpItemView object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     LpItemView Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to lp_item_view
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
		return (string) $row[$startcol];
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
		$cls = LpItemViewPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = LpItemViewPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = LpItemViewPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				LpItemViewPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (LpItemView object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = LpItemViewPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = LpItemViewPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + LpItemViewPeer::NUM_COLUMNS;
		} else {
			$cls = LpItemViewPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			LpItemViewPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseLpItemViewPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseLpItemViewPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new LpItemViewTableMap());
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
		return $withPrefix ? LpItemViewPeer::CLASS_DEFAULT : LpItemViewPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a LpItemView or Criteria object.
	 *
	 * @param      mixed $values Criteria or LpItemView object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from LpItemView object
		}

		if ($criteria->containsKey(LpItemViewPeer::ID) && $criteria->keyContainsValue(LpItemViewPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.LpItemViewPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a LpItemView or Criteria object.
	 *
	 * @param      mixed $values Criteria or LpItemView object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(LpItemViewPeer::ID);
			$value = $criteria->remove(LpItemViewPeer::ID);
			if ($value) {
				$selectCriteria->add(LpItemViewPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(LpItemViewPeer::TABLE_NAME);
			}

		} else { // $values is LpItemView object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the lp_item_view table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(LpItemViewPeer::TABLE_NAME, $con, LpItemViewPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			LpItemViewPeer::clearInstancePool();
			LpItemViewPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a LpItemView or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or LpItemView object or primary key or array of primary keys
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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			LpItemViewPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof LpItemView) { // it's a model object
			// invalidate the cache for this single object
			LpItemViewPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LpItemViewPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				LpItemViewPeer::removeInstanceFromPool($singleval);
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
			LpItemViewPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given LpItemView object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      LpItemView $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(LpItemView $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LpItemViewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LpItemViewPeer::TABLE_NAME);

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

		return BasePeer::doValidate(LpItemViewPeer::DATABASE_NAME, LpItemViewPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     LpItemView
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = LpItemViewPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(LpItemViewPeer::DATABASE_NAME);
		$criteria->add(LpItemViewPeer::ID, $pk);

		$v = LpItemViewPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(LpItemViewPeer::DATABASE_NAME);
			$criteria->add(LpItemViewPeer::ID, $pks, Criteria::IN);
			$objs = LpItemViewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseLpItemViewPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLpItemViewPeer::buildTableMap();

