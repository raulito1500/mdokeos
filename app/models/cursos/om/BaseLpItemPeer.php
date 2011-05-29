<?php


/**
 * Base static class for performing query and update operations on the 'lp_item' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItemPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'lp_item';

	/** the related Propel class for this table */
	const OM_CLASS = 'LpItem';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.LpItem';

	/** the related TableMap class for this table */
	const TM_CLASS = 'LpItemTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 21;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'lp_item.ID';

	/** the column name for the LP_ID field */
	const LP_ID = 'lp_item.LP_ID';

	/** the column name for the ITEM_TYPE field */
	const ITEM_TYPE = 'lp_item.ITEM_TYPE';

	/** the column name for the REF field */
	const REF = 'lp_item.REF';

	/** the column name for the TITLE field */
	const TITLE = 'lp_item.TITLE';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'lp_item.DESCRIPTION';

	/** the column name for the PATH field */
	const PATH = 'lp_item.PATH';

	/** the column name for the MIN_SCORE field */
	const MIN_SCORE = 'lp_item.MIN_SCORE';

	/** the column name for the MAX_SCORE field */
	const MAX_SCORE = 'lp_item.MAX_SCORE';

	/** the column name for the MASTERY_SCORE field */
	const MASTERY_SCORE = 'lp_item.MASTERY_SCORE';

	/** the column name for the PARENT_ITEM_ID field */
	const PARENT_ITEM_ID = 'lp_item.PARENT_ITEM_ID';

	/** the column name for the PREVIOUS_ITEM_ID field */
	const PREVIOUS_ITEM_ID = 'lp_item.PREVIOUS_ITEM_ID';

	/** the column name for the NEXT_ITEM_ID field */
	const NEXT_ITEM_ID = 'lp_item.NEXT_ITEM_ID';

	/** the column name for the DISPLAY_ORDER field */
	const DISPLAY_ORDER = 'lp_item.DISPLAY_ORDER';

	/** the column name for the PREREQUISITE field */
	const PREREQUISITE = 'lp_item.PREREQUISITE';

	/** the column name for the PARAMETERS field */
	const PARAMETERS = 'lp_item.PARAMETERS';

	/** the column name for the LAUNCH_DATA field */
	const LAUNCH_DATA = 'lp_item.LAUNCH_DATA';

	/** the column name for the MAX_TIME_ALLOWED field */
	const MAX_TIME_ALLOWED = 'lp_item.MAX_TIME_ALLOWED';

	/** the column name for the TERMS field */
	const TERMS = 'lp_item.TERMS';

	/** the column name for the SEARCH_DID field */
	const SEARCH_DID = 'lp_item.SEARCH_DID';

	/** the column name for the AUDIO field */
	const AUDIO = 'lp_item.AUDIO';

	/**
	 * An identiy map to hold any loaded instances of LpItem objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array LpItem[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'LpId', 'ItemType', 'Ref', 'Title', 'Description', 'Path', 'MinScore', 'MaxScore', 'MasteryScore', 'ParentItemId', 'PreviousItemId', 'NextItemId', 'DisplayOrder', 'Prerequisite', 'Parameters', 'LaunchData', 'MaxTimeAllowed', 'Terms', 'SearchDid', 'Audio', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'lpId', 'itemType', 'ref', 'title', 'description', 'path', 'minScore', 'maxScore', 'masteryScore', 'parentItemId', 'previousItemId', 'nextItemId', 'displayOrder', 'prerequisite', 'parameters', 'launchData', 'maxTimeAllowed', 'terms', 'searchDid', 'audio', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::LP_ID, self::ITEM_TYPE, self::REF, self::TITLE, self::DESCRIPTION, self::PATH, self::MIN_SCORE, self::MAX_SCORE, self::MASTERY_SCORE, self::PARENT_ITEM_ID, self::PREVIOUS_ITEM_ID, self::NEXT_ITEM_ID, self::DISPLAY_ORDER, self::PREREQUISITE, self::PARAMETERS, self::LAUNCH_DATA, self::MAX_TIME_ALLOWED, self::TERMS, self::SEARCH_DID, self::AUDIO, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LP_ID', 'ITEM_TYPE', 'REF', 'TITLE', 'DESCRIPTION', 'PATH', 'MIN_SCORE', 'MAX_SCORE', 'MASTERY_SCORE', 'PARENT_ITEM_ID', 'PREVIOUS_ITEM_ID', 'NEXT_ITEM_ID', 'DISPLAY_ORDER', 'PREREQUISITE', 'PARAMETERS', 'LAUNCH_DATA', 'MAX_TIME_ALLOWED', 'TERMS', 'SEARCH_DID', 'AUDIO', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'lp_id', 'item_type', 'ref', 'title', 'description', 'path', 'min_score', 'max_score', 'mastery_score', 'parent_item_id', 'previous_item_id', 'next_item_id', 'display_order', 'prerequisite', 'parameters', 'launch_data', 'max_time_allowed', 'terms', 'search_did', 'audio', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LpId' => 1, 'ItemType' => 2, 'Ref' => 3, 'Title' => 4, 'Description' => 5, 'Path' => 6, 'MinScore' => 7, 'MaxScore' => 8, 'MasteryScore' => 9, 'ParentItemId' => 10, 'PreviousItemId' => 11, 'NextItemId' => 12, 'DisplayOrder' => 13, 'Prerequisite' => 14, 'Parameters' => 15, 'LaunchData' => 16, 'MaxTimeAllowed' => 17, 'Terms' => 18, 'SearchDid' => 19, 'Audio' => 20, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'lpId' => 1, 'itemType' => 2, 'ref' => 3, 'title' => 4, 'description' => 5, 'path' => 6, 'minScore' => 7, 'maxScore' => 8, 'masteryScore' => 9, 'parentItemId' => 10, 'previousItemId' => 11, 'nextItemId' => 12, 'displayOrder' => 13, 'prerequisite' => 14, 'parameters' => 15, 'launchData' => 16, 'maxTimeAllowed' => 17, 'terms' => 18, 'searchDid' => 19, 'audio' => 20, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::LP_ID => 1, self::ITEM_TYPE => 2, self::REF => 3, self::TITLE => 4, self::DESCRIPTION => 5, self::PATH => 6, self::MIN_SCORE => 7, self::MAX_SCORE => 8, self::MASTERY_SCORE => 9, self::PARENT_ITEM_ID => 10, self::PREVIOUS_ITEM_ID => 11, self::NEXT_ITEM_ID => 12, self::DISPLAY_ORDER => 13, self::PREREQUISITE => 14, self::PARAMETERS => 15, self::LAUNCH_DATA => 16, self::MAX_TIME_ALLOWED => 17, self::TERMS => 18, self::SEARCH_DID => 19, self::AUDIO => 20, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LP_ID' => 1, 'ITEM_TYPE' => 2, 'REF' => 3, 'TITLE' => 4, 'DESCRIPTION' => 5, 'PATH' => 6, 'MIN_SCORE' => 7, 'MAX_SCORE' => 8, 'MASTERY_SCORE' => 9, 'PARENT_ITEM_ID' => 10, 'PREVIOUS_ITEM_ID' => 11, 'NEXT_ITEM_ID' => 12, 'DISPLAY_ORDER' => 13, 'PREREQUISITE' => 14, 'PARAMETERS' => 15, 'LAUNCH_DATA' => 16, 'MAX_TIME_ALLOWED' => 17, 'TERMS' => 18, 'SEARCH_DID' => 19, 'AUDIO' => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'lp_id' => 1, 'item_type' => 2, 'ref' => 3, 'title' => 4, 'description' => 5, 'path' => 6, 'min_score' => 7, 'max_score' => 8, 'mastery_score' => 9, 'parent_item_id' => 10, 'previous_item_id' => 11, 'next_item_id' => 12, 'display_order' => 13, 'prerequisite' => 14, 'parameters' => 15, 'launch_data' => 16, 'max_time_allowed' => 17, 'terms' => 18, 'search_did' => 19, 'audio' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
	 * @param      string $column The column name for current table. (i.e. LpItemPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(LpItemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(LpItemPeer::ID);
			$criteria->addSelectColumn(LpItemPeer::LP_ID);
			$criteria->addSelectColumn(LpItemPeer::ITEM_TYPE);
			$criteria->addSelectColumn(LpItemPeer::REF);
			$criteria->addSelectColumn(LpItemPeer::TITLE);
			$criteria->addSelectColumn(LpItemPeer::DESCRIPTION);
			$criteria->addSelectColumn(LpItemPeer::PATH);
			$criteria->addSelectColumn(LpItemPeer::MIN_SCORE);
			$criteria->addSelectColumn(LpItemPeer::MAX_SCORE);
			$criteria->addSelectColumn(LpItemPeer::MASTERY_SCORE);
			$criteria->addSelectColumn(LpItemPeer::PARENT_ITEM_ID);
			$criteria->addSelectColumn(LpItemPeer::PREVIOUS_ITEM_ID);
			$criteria->addSelectColumn(LpItemPeer::NEXT_ITEM_ID);
			$criteria->addSelectColumn(LpItemPeer::DISPLAY_ORDER);
			$criteria->addSelectColumn(LpItemPeer::PREREQUISITE);
			$criteria->addSelectColumn(LpItemPeer::PARAMETERS);
			$criteria->addSelectColumn(LpItemPeer::LAUNCH_DATA);
			$criteria->addSelectColumn(LpItemPeer::MAX_TIME_ALLOWED);
			$criteria->addSelectColumn(LpItemPeer::TERMS);
			$criteria->addSelectColumn(LpItemPeer::SEARCH_DID);
			$criteria->addSelectColumn(LpItemPeer::AUDIO);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.LP_ID');
			$criteria->addSelectColumn($alias . '.ITEM_TYPE');
			$criteria->addSelectColumn($alias . '.REF');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.PATH');
			$criteria->addSelectColumn($alias . '.MIN_SCORE');
			$criteria->addSelectColumn($alias . '.MAX_SCORE');
			$criteria->addSelectColumn($alias . '.MASTERY_SCORE');
			$criteria->addSelectColumn($alias . '.PARENT_ITEM_ID');
			$criteria->addSelectColumn($alias . '.PREVIOUS_ITEM_ID');
			$criteria->addSelectColumn($alias . '.NEXT_ITEM_ID');
			$criteria->addSelectColumn($alias . '.DISPLAY_ORDER');
			$criteria->addSelectColumn($alias . '.PREREQUISITE');
			$criteria->addSelectColumn($alias . '.PARAMETERS');
			$criteria->addSelectColumn($alias . '.LAUNCH_DATA');
			$criteria->addSelectColumn($alias . '.MAX_TIME_ALLOWED');
			$criteria->addSelectColumn($alias . '.TERMS');
			$criteria->addSelectColumn($alias . '.SEARCH_DID');
			$criteria->addSelectColumn($alias . '.AUDIO');
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
		$criteria->setPrimaryTableName(LpItemPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			LpItemPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     LpItem
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = LpItemPeer::doSelect($critcopy, $con);
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
		return LpItemPeer::populateObjects(LpItemPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			LpItemPeer::addSelectColumns($criteria);
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
	 * @param      LpItem $value A LpItem object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(LpItem $obj, $key = null)
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
	 * @param      mixed $value A LpItem object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof LpItem) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or LpItem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     LpItem Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to lp_item
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
		$cls = LpItemPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = LpItemPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = LpItemPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				LpItemPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (LpItem object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = LpItemPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = LpItemPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + LpItemPeer::NUM_COLUMNS;
		} else {
			$cls = LpItemPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			LpItemPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseLpItemPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseLpItemPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new LpItemTableMap());
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
		return $withPrefix ? LpItemPeer::CLASS_DEFAULT : LpItemPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a LpItem or Criteria object.
	 *
	 * @param      mixed $values Criteria or LpItem object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from LpItem object
		}

		if ($criteria->containsKey(LpItemPeer::ID) && $criteria->keyContainsValue(LpItemPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.LpItemPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a LpItem or Criteria object.
	 *
	 * @param      mixed $values Criteria or LpItem object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(LpItemPeer::ID);
			$value = $criteria->remove(LpItemPeer::ID);
			if ($value) {
				$selectCriteria->add(LpItemPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(LpItemPeer::TABLE_NAME);
			}

		} else { // $values is LpItem object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the lp_item table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(LpItemPeer::TABLE_NAME, $con, LpItemPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			LpItemPeer::clearInstancePool();
			LpItemPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a LpItem or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or LpItem object or primary key or array of primary keys
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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			LpItemPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof LpItem) { // it's a model object
			// invalidate the cache for this single object
			LpItemPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LpItemPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				LpItemPeer::removeInstanceFromPool($singleval);
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
			LpItemPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given LpItem object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      LpItem $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(LpItem $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LpItemPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LpItemPeer::TABLE_NAME);

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

		return BasePeer::doValidate(LpItemPeer::DATABASE_NAME, LpItemPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     LpItem
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = LpItemPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(LpItemPeer::DATABASE_NAME);
		$criteria->add(LpItemPeer::ID, $pk);

		$v = LpItemPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(LpItemPeer::DATABASE_NAME);
			$criteria->add(LpItemPeer::ID, $pks, Criteria::IN);
			$objs = LpItemPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseLpItemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLpItemPeer::buildTableMap();

