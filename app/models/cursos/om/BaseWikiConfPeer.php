<?php


/**
 * Base static class for performing query and update operations on the 'wiki_conf' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiConfPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'wiki_conf';

	/** the related Propel class for this table */
	const OM_CLASS = 'WikiConf';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.WikiConf';

	/** the related TableMap class for this table */
	const TM_CLASS = 'WikiConfTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 15;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the PAGE_ID field */
	const PAGE_ID = 'wiki_conf.PAGE_ID';

	/** the column name for the TASK field */
	const TASK = 'wiki_conf.TASK';

	/** the column name for the FEEDBACK1 field */
	const FEEDBACK1 = 'wiki_conf.FEEDBACK1';

	/** the column name for the FEEDBACK2 field */
	const FEEDBACK2 = 'wiki_conf.FEEDBACK2';

	/** the column name for the FEEDBACK3 field */
	const FEEDBACK3 = 'wiki_conf.FEEDBACK3';

	/** the column name for the FPROGRESS1 field */
	const FPROGRESS1 = 'wiki_conf.FPROGRESS1';

	/** the column name for the FPROGRESS2 field */
	const FPROGRESS2 = 'wiki_conf.FPROGRESS2';

	/** the column name for the FPROGRESS3 field */
	const FPROGRESS3 = 'wiki_conf.FPROGRESS3';

	/** the column name for the MAX_SIZE field */
	const MAX_SIZE = 'wiki_conf.MAX_SIZE';

	/** the column name for the MAX_TEXT field */
	const MAX_TEXT = 'wiki_conf.MAX_TEXT';

	/** the column name for the MAX_VERSION field */
	const MAX_VERSION = 'wiki_conf.MAX_VERSION';

	/** the column name for the STARTDATE_ASSIG field */
	const STARTDATE_ASSIG = 'wiki_conf.STARTDATE_ASSIG';

	/** the column name for the ENDDATE_ASSIG field */
	const ENDDATE_ASSIG = 'wiki_conf.ENDDATE_ASSIG';

	/** the column name for the DELAYEDSUBMIT field */
	const DELAYEDSUBMIT = 'wiki_conf.DELAYEDSUBMIT';

	/** the column name for the ID field */
	const ID = 'wiki_conf.ID';

	/**
	 * An identiy map to hold any loaded instances of WikiConf objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array WikiConf[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('PageId', 'Task', 'Feedback1', 'Feedback2', 'Feedback3', 'Fprogress1', 'Fprogress2', 'Fprogress3', 'MaxSize', 'MaxText', 'MaxVersion', 'StartdateAssig', 'EnddateAssig', 'Delayedsubmit', 'Id', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('pageId', 'task', 'feedback1', 'feedback2', 'feedback3', 'fprogress1', 'fprogress2', 'fprogress3', 'maxSize', 'maxText', 'maxVersion', 'startdateAssig', 'enddateAssig', 'delayedsubmit', 'id', ),
		BasePeer::TYPE_COLNAME => array (self::PAGE_ID, self::TASK, self::FEEDBACK1, self::FEEDBACK2, self::FEEDBACK3, self::FPROGRESS1, self::FPROGRESS2, self::FPROGRESS3, self::MAX_SIZE, self::MAX_TEXT, self::MAX_VERSION, self::STARTDATE_ASSIG, self::ENDDATE_ASSIG, self::DELAYEDSUBMIT, self::ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PAGE_ID', 'TASK', 'FEEDBACK1', 'FEEDBACK2', 'FEEDBACK3', 'FPROGRESS1', 'FPROGRESS2', 'FPROGRESS3', 'MAX_SIZE', 'MAX_TEXT', 'MAX_VERSION', 'STARTDATE_ASSIG', 'ENDDATE_ASSIG', 'DELAYEDSUBMIT', 'ID', ),
		BasePeer::TYPE_FIELDNAME => array ('page_id', 'task', 'feedback1', 'feedback2', 'feedback3', 'fprogress1', 'fprogress2', 'fprogress3', 'max_size', 'max_text', 'max_version', 'startdate_assig', 'enddate_assig', 'delayedsubmit', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('PageId' => 0, 'Task' => 1, 'Feedback1' => 2, 'Feedback2' => 3, 'Feedback3' => 4, 'Fprogress1' => 5, 'Fprogress2' => 6, 'Fprogress3' => 7, 'MaxSize' => 8, 'MaxText' => 9, 'MaxVersion' => 10, 'StartdateAssig' => 11, 'EnddateAssig' => 12, 'Delayedsubmit' => 13, 'Id' => 14, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('pageId' => 0, 'task' => 1, 'feedback1' => 2, 'feedback2' => 3, 'feedback3' => 4, 'fprogress1' => 5, 'fprogress2' => 6, 'fprogress3' => 7, 'maxSize' => 8, 'maxText' => 9, 'maxVersion' => 10, 'startdateAssig' => 11, 'enddateAssig' => 12, 'delayedsubmit' => 13, 'id' => 14, ),
		BasePeer::TYPE_COLNAME => array (self::PAGE_ID => 0, self::TASK => 1, self::FEEDBACK1 => 2, self::FEEDBACK2 => 3, self::FEEDBACK3 => 4, self::FPROGRESS1 => 5, self::FPROGRESS2 => 6, self::FPROGRESS3 => 7, self::MAX_SIZE => 8, self::MAX_TEXT => 9, self::MAX_VERSION => 10, self::STARTDATE_ASSIG => 11, self::ENDDATE_ASSIG => 12, self::DELAYEDSUBMIT => 13, self::ID => 14, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PAGE_ID' => 0, 'TASK' => 1, 'FEEDBACK1' => 2, 'FEEDBACK2' => 3, 'FEEDBACK3' => 4, 'FPROGRESS1' => 5, 'FPROGRESS2' => 6, 'FPROGRESS3' => 7, 'MAX_SIZE' => 8, 'MAX_TEXT' => 9, 'MAX_VERSION' => 10, 'STARTDATE_ASSIG' => 11, 'ENDDATE_ASSIG' => 12, 'DELAYEDSUBMIT' => 13, 'ID' => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('page_id' => 0, 'task' => 1, 'feedback1' => 2, 'feedback2' => 3, 'feedback3' => 4, 'fprogress1' => 5, 'fprogress2' => 6, 'fprogress3' => 7, 'max_size' => 8, 'max_text' => 9, 'max_version' => 10, 'startdate_assig' => 11, 'enddate_assig' => 12, 'delayedsubmit' => 13, 'id' => 14, ),
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
	 * @param      string $column The column name for current table. (i.e. WikiConfPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(WikiConfPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(WikiConfPeer::PAGE_ID);
			$criteria->addSelectColumn(WikiConfPeer::TASK);
			$criteria->addSelectColumn(WikiConfPeer::FEEDBACK1);
			$criteria->addSelectColumn(WikiConfPeer::FEEDBACK2);
			$criteria->addSelectColumn(WikiConfPeer::FEEDBACK3);
			$criteria->addSelectColumn(WikiConfPeer::FPROGRESS1);
			$criteria->addSelectColumn(WikiConfPeer::FPROGRESS2);
			$criteria->addSelectColumn(WikiConfPeer::FPROGRESS3);
			$criteria->addSelectColumn(WikiConfPeer::MAX_SIZE);
			$criteria->addSelectColumn(WikiConfPeer::MAX_TEXT);
			$criteria->addSelectColumn(WikiConfPeer::MAX_VERSION);
			$criteria->addSelectColumn(WikiConfPeer::STARTDATE_ASSIG);
			$criteria->addSelectColumn(WikiConfPeer::ENDDATE_ASSIG);
			$criteria->addSelectColumn(WikiConfPeer::DELAYEDSUBMIT);
			$criteria->addSelectColumn(WikiConfPeer::ID);
		} else {
			$criteria->addSelectColumn($alias . '.PAGE_ID');
			$criteria->addSelectColumn($alias . '.TASK');
			$criteria->addSelectColumn($alias . '.FEEDBACK1');
			$criteria->addSelectColumn($alias . '.FEEDBACK2');
			$criteria->addSelectColumn($alias . '.FEEDBACK3');
			$criteria->addSelectColumn($alias . '.FPROGRESS1');
			$criteria->addSelectColumn($alias . '.FPROGRESS2');
			$criteria->addSelectColumn($alias . '.FPROGRESS3');
			$criteria->addSelectColumn($alias . '.MAX_SIZE');
			$criteria->addSelectColumn($alias . '.MAX_TEXT');
			$criteria->addSelectColumn($alias . '.MAX_VERSION');
			$criteria->addSelectColumn($alias . '.STARTDATE_ASSIG');
			$criteria->addSelectColumn($alias . '.ENDDATE_ASSIG');
			$criteria->addSelectColumn($alias . '.DELAYEDSUBMIT');
			$criteria->addSelectColumn($alias . '.ID');
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
		$criteria->setPrimaryTableName(WikiConfPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			WikiConfPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     WikiConf
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = WikiConfPeer::doSelect($critcopy, $con);
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
		return WikiConfPeer::populateObjects(WikiConfPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			WikiConfPeer::addSelectColumns($criteria);
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
	 * @param      WikiConf $value A WikiConf object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(WikiConf $obj, $key = null)
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
	 * @param      mixed $value A WikiConf object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof WikiConf) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or WikiConf object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     WikiConf Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to wiki_conf
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
		if ($row[$startcol + 14] === null) {
			return null;
		}
		return (string) $row[$startcol + 14];
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
		return (string) $row[$startcol + 14];
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
		$cls = WikiConfPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = WikiConfPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = WikiConfPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				WikiConfPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (WikiConf object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = WikiConfPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = WikiConfPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + WikiConfPeer::NUM_COLUMNS;
		} else {
			$cls = WikiConfPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			WikiConfPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseWikiConfPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseWikiConfPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new WikiConfTableMap());
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
		return $withPrefix ? WikiConfPeer::CLASS_DEFAULT : WikiConfPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a WikiConf or Criteria object.
	 *
	 * @param      mixed $values Criteria or WikiConf object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from WikiConf object
		}

		if ($criteria->containsKey(WikiConfPeer::ID) && $criteria->keyContainsValue(WikiConfPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.WikiConfPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a WikiConf or Criteria object.
	 *
	 * @param      mixed $values Criteria or WikiConf object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(WikiConfPeer::ID);
			$value = $criteria->remove(WikiConfPeer::ID);
			if ($value) {
				$selectCriteria->add(WikiConfPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(WikiConfPeer::TABLE_NAME);
			}

		} else { // $values is WikiConf object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the wiki_conf table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(WikiConfPeer::TABLE_NAME, $con, WikiConfPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			WikiConfPeer::clearInstancePool();
			WikiConfPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a WikiConf or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or WikiConf object or primary key or array of primary keys
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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			WikiConfPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof WikiConf) { // it's a model object
			// invalidate the cache for this single object
			WikiConfPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WikiConfPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				WikiConfPeer::removeInstanceFromPool($singleval);
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
			WikiConfPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given WikiConf object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      WikiConf $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(WikiConf $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WikiConfPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WikiConfPeer::TABLE_NAME);

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

		return BasePeer::doValidate(WikiConfPeer::DATABASE_NAME, WikiConfPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     WikiConf
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = WikiConfPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(WikiConfPeer::DATABASE_NAME);
		$criteria->add(WikiConfPeer::ID, $pk);

		$v = WikiConfPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(WikiConfPeer::DATABASE_NAME);
			$criteria->add(WikiConfPeer::ID, $pks, Criteria::IN);
			$objs = WikiConfPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseWikiConfPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWikiConfPeer::buildTableMap();

