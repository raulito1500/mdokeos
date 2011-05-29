<?php


/**
 * Base static class for performing query and update operations on the 'lp' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'lp';

	/** the related Propel class for this table */
	const OM_CLASS = 'Lp';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.Lp';

	/** the related TableMap class for this table */
	const TM_CLASS = 'LpTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 20;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'lp.ID';

	/** the column name for the LP_TYPE field */
	const LP_TYPE = 'lp.LP_TYPE';

	/** the column name for the NAME field */
	const NAME = 'lp.NAME';

	/** the column name for the REF field */
	const REF = 'lp.REF';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'lp.DESCRIPTION';

	/** the column name for the PATH field */
	const PATH = 'lp.PATH';

	/** the column name for the FORCE_COMMIT field */
	const FORCE_COMMIT = 'lp.FORCE_COMMIT';

	/** the column name for the DEFAULT_VIEW_MOD field */
	const DEFAULT_VIEW_MOD = 'lp.DEFAULT_VIEW_MOD';

	/** the column name for the DEFAULT_ENCODING field */
	const DEFAULT_ENCODING = 'lp.DEFAULT_ENCODING';

	/** the column name for the DISPLAY_ORDER field */
	const DISPLAY_ORDER = 'lp.DISPLAY_ORDER';

	/** the column name for the CONTENT_MAKER field */
	const CONTENT_MAKER = 'lp.CONTENT_MAKER';

	/** the column name for the CONTENT_LOCAL field */
	const CONTENT_LOCAL = 'lp.CONTENT_LOCAL';

	/** the column name for the CONTENT_LICENSE field */
	const CONTENT_LICENSE = 'lp.CONTENT_LICENSE';

	/** the column name for the PREVENT_REINIT field */
	const PREVENT_REINIT = 'lp.PREVENT_REINIT';

	/** the column name for the JS_LIB field */
	const JS_LIB = 'lp.JS_LIB';

	/** the column name for the DEBUG field */
	const DEBUG = 'lp.DEBUG';

	/** the column name for the THEME field */
	const THEME = 'lp.THEME';

	/** the column name for the PREVIEW_IMAGE field */
	const PREVIEW_IMAGE = 'lp.PREVIEW_IMAGE';

	/** the column name for the AUTHOR field */
	const AUTHOR = 'lp.AUTHOR';

	/** the column name for the SESSION_ID field */
	const SESSION_ID = 'lp.SESSION_ID';

	/**
	 * An identiy map to hold any loaded instances of Lp objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Lp[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'LpType', 'Name', 'Ref', 'Description', 'Path', 'ForceCommit', 'DefaultViewMod', 'DefaultEncoding', 'DisplayOrder', 'ContentMaker', 'ContentLocal', 'ContentLicense', 'PreventReinit', 'JsLib', 'Debug', 'Theme', 'PreviewImage', 'Author', 'SessionId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'lpType', 'name', 'ref', 'description', 'path', 'forceCommit', 'defaultViewMod', 'defaultEncoding', 'displayOrder', 'contentMaker', 'contentLocal', 'contentLicense', 'preventReinit', 'jsLib', 'debug', 'theme', 'previewImage', 'author', 'sessionId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::LP_TYPE, self::NAME, self::REF, self::DESCRIPTION, self::PATH, self::FORCE_COMMIT, self::DEFAULT_VIEW_MOD, self::DEFAULT_ENCODING, self::DISPLAY_ORDER, self::CONTENT_MAKER, self::CONTENT_LOCAL, self::CONTENT_LICENSE, self::PREVENT_REINIT, self::JS_LIB, self::DEBUG, self::THEME, self::PREVIEW_IMAGE, self::AUTHOR, self::SESSION_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LP_TYPE', 'NAME', 'REF', 'DESCRIPTION', 'PATH', 'FORCE_COMMIT', 'DEFAULT_VIEW_MOD', 'DEFAULT_ENCODING', 'DISPLAY_ORDER', 'CONTENT_MAKER', 'CONTENT_LOCAL', 'CONTENT_LICENSE', 'PREVENT_REINIT', 'JS_LIB', 'DEBUG', 'THEME', 'PREVIEW_IMAGE', 'AUTHOR', 'SESSION_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'lp_type', 'name', 'ref', 'description', 'path', 'force_commit', 'default_view_mod', 'default_encoding', 'display_order', 'content_maker', 'content_local', 'content_license', 'prevent_reinit', 'js_lib', 'debug', 'theme', 'preview_image', 'author', 'session_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LpType' => 1, 'Name' => 2, 'Ref' => 3, 'Description' => 4, 'Path' => 5, 'ForceCommit' => 6, 'DefaultViewMod' => 7, 'DefaultEncoding' => 8, 'DisplayOrder' => 9, 'ContentMaker' => 10, 'ContentLocal' => 11, 'ContentLicense' => 12, 'PreventReinit' => 13, 'JsLib' => 14, 'Debug' => 15, 'Theme' => 16, 'PreviewImage' => 17, 'Author' => 18, 'SessionId' => 19, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'lpType' => 1, 'name' => 2, 'ref' => 3, 'description' => 4, 'path' => 5, 'forceCommit' => 6, 'defaultViewMod' => 7, 'defaultEncoding' => 8, 'displayOrder' => 9, 'contentMaker' => 10, 'contentLocal' => 11, 'contentLicense' => 12, 'preventReinit' => 13, 'jsLib' => 14, 'debug' => 15, 'theme' => 16, 'previewImage' => 17, 'author' => 18, 'sessionId' => 19, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::LP_TYPE => 1, self::NAME => 2, self::REF => 3, self::DESCRIPTION => 4, self::PATH => 5, self::FORCE_COMMIT => 6, self::DEFAULT_VIEW_MOD => 7, self::DEFAULT_ENCODING => 8, self::DISPLAY_ORDER => 9, self::CONTENT_MAKER => 10, self::CONTENT_LOCAL => 11, self::CONTENT_LICENSE => 12, self::PREVENT_REINIT => 13, self::JS_LIB => 14, self::DEBUG => 15, self::THEME => 16, self::PREVIEW_IMAGE => 17, self::AUTHOR => 18, self::SESSION_ID => 19, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LP_TYPE' => 1, 'NAME' => 2, 'REF' => 3, 'DESCRIPTION' => 4, 'PATH' => 5, 'FORCE_COMMIT' => 6, 'DEFAULT_VIEW_MOD' => 7, 'DEFAULT_ENCODING' => 8, 'DISPLAY_ORDER' => 9, 'CONTENT_MAKER' => 10, 'CONTENT_LOCAL' => 11, 'CONTENT_LICENSE' => 12, 'PREVENT_REINIT' => 13, 'JS_LIB' => 14, 'DEBUG' => 15, 'THEME' => 16, 'PREVIEW_IMAGE' => 17, 'AUTHOR' => 18, 'SESSION_ID' => 19, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'lp_type' => 1, 'name' => 2, 'ref' => 3, 'description' => 4, 'path' => 5, 'force_commit' => 6, 'default_view_mod' => 7, 'default_encoding' => 8, 'display_order' => 9, 'content_maker' => 10, 'content_local' => 11, 'content_license' => 12, 'prevent_reinit' => 13, 'js_lib' => 14, 'debug' => 15, 'theme' => 16, 'preview_image' => 17, 'author' => 18, 'session_id' => 19, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
	 * @param      string $column The column name for current table. (i.e. LpPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(LpPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(LpPeer::ID);
			$criteria->addSelectColumn(LpPeer::LP_TYPE);
			$criteria->addSelectColumn(LpPeer::NAME);
			$criteria->addSelectColumn(LpPeer::REF);
			$criteria->addSelectColumn(LpPeer::DESCRIPTION);
			$criteria->addSelectColumn(LpPeer::PATH);
			$criteria->addSelectColumn(LpPeer::FORCE_COMMIT);
			$criteria->addSelectColumn(LpPeer::DEFAULT_VIEW_MOD);
			$criteria->addSelectColumn(LpPeer::DEFAULT_ENCODING);
			$criteria->addSelectColumn(LpPeer::DISPLAY_ORDER);
			$criteria->addSelectColumn(LpPeer::CONTENT_MAKER);
			$criteria->addSelectColumn(LpPeer::CONTENT_LOCAL);
			$criteria->addSelectColumn(LpPeer::CONTENT_LICENSE);
			$criteria->addSelectColumn(LpPeer::PREVENT_REINIT);
			$criteria->addSelectColumn(LpPeer::JS_LIB);
			$criteria->addSelectColumn(LpPeer::DEBUG);
			$criteria->addSelectColumn(LpPeer::THEME);
			$criteria->addSelectColumn(LpPeer::PREVIEW_IMAGE);
			$criteria->addSelectColumn(LpPeer::AUTHOR);
			$criteria->addSelectColumn(LpPeer::SESSION_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.LP_TYPE');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.REF');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.PATH');
			$criteria->addSelectColumn($alias . '.FORCE_COMMIT');
			$criteria->addSelectColumn($alias . '.DEFAULT_VIEW_MOD');
			$criteria->addSelectColumn($alias . '.DEFAULT_ENCODING');
			$criteria->addSelectColumn($alias . '.DISPLAY_ORDER');
			$criteria->addSelectColumn($alias . '.CONTENT_MAKER');
			$criteria->addSelectColumn($alias . '.CONTENT_LOCAL');
			$criteria->addSelectColumn($alias . '.CONTENT_LICENSE');
			$criteria->addSelectColumn($alias . '.PREVENT_REINIT');
			$criteria->addSelectColumn($alias . '.JS_LIB');
			$criteria->addSelectColumn($alias . '.DEBUG');
			$criteria->addSelectColumn($alias . '.THEME');
			$criteria->addSelectColumn($alias . '.PREVIEW_IMAGE');
			$criteria->addSelectColumn($alias . '.AUTHOR');
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
		$criteria->setPrimaryTableName(LpPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			LpPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Lp
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = LpPeer::doSelect($critcopy, $con);
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
		return LpPeer::populateObjects(LpPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			LpPeer::addSelectColumns($criteria);
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
	 * @param      Lp $value A Lp object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Lp $obj, $key = null)
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
	 * @param      mixed $value A Lp object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Lp) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Lp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Lp Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to lp
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
		$cls = LpPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = LpPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = LpPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				LpPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Lp object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = LpPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = LpPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + LpPeer::NUM_COLUMNS;
		} else {
			$cls = LpPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			LpPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseLpPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseLpPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new LpTableMap());
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
		return $withPrefix ? LpPeer::CLASS_DEFAULT : LpPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Lp or Criteria object.
	 *
	 * @param      mixed $values Criteria or Lp object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Lp object
		}

		if ($criteria->containsKey(LpPeer::ID) && $criteria->keyContainsValue(LpPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.LpPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a Lp or Criteria object.
	 *
	 * @param      mixed $values Criteria or Lp object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(LpPeer::ID);
			$value = $criteria->remove(LpPeer::ID);
			if ($value) {
				$selectCriteria->add(LpPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(LpPeer::TABLE_NAME);
			}

		} else { // $values is Lp object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the lp table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(LpPeer::TABLE_NAME, $con, LpPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			LpPeer::clearInstancePool();
			LpPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Lp or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Lp object or primary key or array of primary keys
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
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			LpPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Lp) { // it's a model object
			// invalidate the cache for this single object
			LpPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LpPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				LpPeer::removeInstanceFromPool($singleval);
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
			LpPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Lp object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Lp $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Lp $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LpPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LpPeer::TABLE_NAME);

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

		return BasePeer::doValidate(LpPeer::DATABASE_NAME, LpPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Lp
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = LpPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(LpPeer::DATABASE_NAME);
		$criteria->add(LpPeer::ID, $pk);

		$v = LpPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(LpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(LpPeer::DATABASE_NAME);
			$criteria->add(LpPeer::ID, $pks, Criteria::IN);
			$objs = LpPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseLpPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLpPeer::buildTableMap();

