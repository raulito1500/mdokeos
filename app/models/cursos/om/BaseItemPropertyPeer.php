<?php


/**
 * Base static class for performing query and update operations on the 'item_property' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseItemPropertyPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'item_property';

	/** the related Propel class for this table */
	const OM_CLASS = 'ItemProperty';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.ItemProperty';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ItemPropertyTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 13;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the TOOL field */
	const TOOL = 'item_property.TOOL';

	/** the column name for the INSERT_USER_ID field */
	const INSERT_USER_ID = 'item_property.INSERT_USER_ID';

	/** the column name for the INSERT_DATE field */
	const INSERT_DATE = 'item_property.INSERT_DATE';

	/** the column name for the LASTEDIT_DATE field */
	const LASTEDIT_DATE = 'item_property.LASTEDIT_DATE';

	/** the column name for the REF field */
	const REF = 'item_property.REF';

	/** the column name for the LASTEDIT_TYPE field */
	const LASTEDIT_TYPE = 'item_property.LASTEDIT_TYPE';

	/** the column name for the LASTEDIT_USER_ID field */
	const LASTEDIT_USER_ID = 'item_property.LASTEDIT_USER_ID';

	/** the column name for the TO_GROUP_ID field */
	const TO_GROUP_ID = 'item_property.TO_GROUP_ID';

	/** the column name for the TO_USER_ID field */
	const TO_USER_ID = 'item_property.TO_USER_ID';

	/** the column name for the VISIBILITY field */
	const VISIBILITY = 'item_property.VISIBILITY';

	/** the column name for the START_VISIBLE field */
	const START_VISIBLE = 'item_property.START_VISIBLE';

	/** the column name for the END_VISIBLE field */
	const END_VISIBLE = 'item_property.END_VISIBLE';

	/** the column name for the ID field */
	const ID = 'item_property.ID';

	/**
	 * An identiy map to hold any loaded instances of ItemProperty objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array ItemProperty[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Tool', 'InsertUserId', 'InsertDate', 'LasteditDate', 'Ref', 'LasteditType', 'LasteditUserId', 'ToGroupId', 'ToUserId', 'Visibility', 'StartVisible', 'EndVisible', 'Id', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('tool', 'insertUserId', 'insertDate', 'lasteditDate', 'ref', 'lasteditType', 'lasteditUserId', 'toGroupId', 'toUserId', 'visibility', 'startVisible', 'endVisible', 'id', ),
		BasePeer::TYPE_COLNAME => array (self::TOOL, self::INSERT_USER_ID, self::INSERT_DATE, self::LASTEDIT_DATE, self::REF, self::LASTEDIT_TYPE, self::LASTEDIT_USER_ID, self::TO_GROUP_ID, self::TO_USER_ID, self::VISIBILITY, self::START_VISIBLE, self::END_VISIBLE, self::ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('TOOL', 'INSERT_USER_ID', 'INSERT_DATE', 'LASTEDIT_DATE', 'REF', 'LASTEDIT_TYPE', 'LASTEDIT_USER_ID', 'TO_GROUP_ID', 'TO_USER_ID', 'VISIBILITY', 'START_VISIBLE', 'END_VISIBLE', 'ID', ),
		BasePeer::TYPE_FIELDNAME => array ('tool', 'insert_user_id', 'insert_date', 'lastedit_date', 'ref', 'lastedit_type', 'lastedit_user_id', 'to_group_id', 'to_user_id', 'visibility', 'start_visible', 'end_visible', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Tool' => 0, 'InsertUserId' => 1, 'InsertDate' => 2, 'LasteditDate' => 3, 'Ref' => 4, 'LasteditType' => 5, 'LasteditUserId' => 6, 'ToGroupId' => 7, 'ToUserId' => 8, 'Visibility' => 9, 'StartVisible' => 10, 'EndVisible' => 11, 'Id' => 12, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('tool' => 0, 'insertUserId' => 1, 'insertDate' => 2, 'lasteditDate' => 3, 'ref' => 4, 'lasteditType' => 5, 'lasteditUserId' => 6, 'toGroupId' => 7, 'toUserId' => 8, 'visibility' => 9, 'startVisible' => 10, 'endVisible' => 11, 'id' => 12, ),
		BasePeer::TYPE_COLNAME => array (self::TOOL => 0, self::INSERT_USER_ID => 1, self::INSERT_DATE => 2, self::LASTEDIT_DATE => 3, self::REF => 4, self::LASTEDIT_TYPE => 5, self::LASTEDIT_USER_ID => 6, self::TO_GROUP_ID => 7, self::TO_USER_ID => 8, self::VISIBILITY => 9, self::START_VISIBLE => 10, self::END_VISIBLE => 11, self::ID => 12, ),
		BasePeer::TYPE_RAW_COLNAME => array ('TOOL' => 0, 'INSERT_USER_ID' => 1, 'INSERT_DATE' => 2, 'LASTEDIT_DATE' => 3, 'REF' => 4, 'LASTEDIT_TYPE' => 5, 'LASTEDIT_USER_ID' => 6, 'TO_GROUP_ID' => 7, 'TO_USER_ID' => 8, 'VISIBILITY' => 9, 'START_VISIBLE' => 10, 'END_VISIBLE' => 11, 'ID' => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('tool' => 0, 'insert_user_id' => 1, 'insert_date' => 2, 'lastedit_date' => 3, 'ref' => 4, 'lastedit_type' => 5, 'lastedit_user_id' => 6, 'to_group_id' => 7, 'to_user_id' => 8, 'visibility' => 9, 'start_visible' => 10, 'end_visible' => 11, 'id' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
	 * @param      string $column The column name for current table. (i.e. ItemPropertyPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ItemPropertyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(ItemPropertyPeer::TOOL);
			$criteria->addSelectColumn(ItemPropertyPeer::INSERT_USER_ID);
			$criteria->addSelectColumn(ItemPropertyPeer::INSERT_DATE);
			$criteria->addSelectColumn(ItemPropertyPeer::LASTEDIT_DATE);
			$criteria->addSelectColumn(ItemPropertyPeer::REF);
			$criteria->addSelectColumn(ItemPropertyPeer::LASTEDIT_TYPE);
			$criteria->addSelectColumn(ItemPropertyPeer::LASTEDIT_USER_ID);
			$criteria->addSelectColumn(ItemPropertyPeer::TO_GROUP_ID);
			$criteria->addSelectColumn(ItemPropertyPeer::TO_USER_ID);
			$criteria->addSelectColumn(ItemPropertyPeer::VISIBILITY);
			$criteria->addSelectColumn(ItemPropertyPeer::START_VISIBLE);
			$criteria->addSelectColumn(ItemPropertyPeer::END_VISIBLE);
			$criteria->addSelectColumn(ItemPropertyPeer::ID);
		} else {
			$criteria->addSelectColumn($alias . '.TOOL');
			$criteria->addSelectColumn($alias . '.INSERT_USER_ID');
			$criteria->addSelectColumn($alias . '.INSERT_DATE');
			$criteria->addSelectColumn($alias . '.LASTEDIT_DATE');
			$criteria->addSelectColumn($alias . '.REF');
			$criteria->addSelectColumn($alias . '.LASTEDIT_TYPE');
			$criteria->addSelectColumn($alias . '.LASTEDIT_USER_ID');
			$criteria->addSelectColumn($alias . '.TO_GROUP_ID');
			$criteria->addSelectColumn($alias . '.TO_USER_ID');
			$criteria->addSelectColumn($alias . '.VISIBILITY');
			$criteria->addSelectColumn($alias . '.START_VISIBLE');
			$criteria->addSelectColumn($alias . '.END_VISIBLE');
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
		$criteria->setPrimaryTableName(ItemPropertyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ItemPropertyPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     ItemProperty
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ItemPropertyPeer::doSelect($critcopy, $con);
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
		return ItemPropertyPeer::populateObjects(ItemPropertyPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ItemPropertyPeer::addSelectColumns($criteria);
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
	 * @param      ItemProperty $value A ItemProperty object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(ItemProperty $obj, $key = null)
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
	 * @param      mixed $value A ItemProperty object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof ItemProperty) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ItemProperty object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     ItemProperty Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to item_property
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
		if ($row[$startcol + 12] === null) {
			return null;
		}
		return (string) $row[$startcol + 12];
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
		return (string) $row[$startcol + 12];
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
		$cls = ItemPropertyPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ItemPropertyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ItemPropertyPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ItemPropertyPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (ItemProperty object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ItemPropertyPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ItemPropertyPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ItemPropertyPeer::NUM_COLUMNS;
		} else {
			$cls = ItemPropertyPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ItemPropertyPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseItemPropertyPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseItemPropertyPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ItemPropertyTableMap());
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
		return $withPrefix ? ItemPropertyPeer::CLASS_DEFAULT : ItemPropertyPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a ItemProperty or Criteria object.
	 *
	 * @param      mixed $values Criteria or ItemProperty object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from ItemProperty object
		}

		if ($criteria->containsKey(ItemPropertyPeer::ID) && $criteria->keyContainsValue(ItemPropertyPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ItemPropertyPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a ItemProperty or Criteria object.
	 *
	 * @param      mixed $values Criteria or ItemProperty object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ItemPropertyPeer::ID);
			$value = $criteria->remove(ItemPropertyPeer::ID);
			if ($value) {
				$selectCriteria->add(ItemPropertyPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ItemPropertyPeer::TABLE_NAME);
			}

		} else { // $values is ItemProperty object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the item_property table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ItemPropertyPeer::TABLE_NAME, $con, ItemPropertyPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ItemPropertyPeer::clearInstancePool();
			ItemPropertyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a ItemProperty or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or ItemProperty object or primary key or array of primary keys
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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ItemPropertyPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof ItemProperty) { // it's a model object
			// invalidate the cache for this single object
			ItemPropertyPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ItemPropertyPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ItemPropertyPeer::removeInstanceFromPool($singleval);
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
			ItemPropertyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given ItemProperty object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      ItemProperty $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(ItemProperty $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ItemPropertyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ItemPropertyPeer::TABLE_NAME);

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

		return BasePeer::doValidate(ItemPropertyPeer::DATABASE_NAME, ItemPropertyPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     ItemProperty
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ItemPropertyPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ItemPropertyPeer::DATABASE_NAME);
		$criteria->add(ItemPropertyPeer::ID, $pk);

		$v = ItemPropertyPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ItemPropertyPeer::DATABASE_NAME);
			$criteria->add(ItemPropertyPeer::ID, $pks, Criteria::IN);
			$objs = ItemPropertyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseItemPropertyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseItemPropertyPeer::buildTableMap();

