<?php


/**
 * Base static class for performing query and update operations on the 'survey_question' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyQuestionPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'survey_question';

	/** the related Propel class for this table */
	const OM_CLASS = 'SurveyQuestion';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.SurveyQuestion';

	/** the related TableMap class for this table */
	const TM_CLASS = 'SurveyQuestionTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 12;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the QUESTION_ID field */
	const QUESTION_ID = 'survey_question.QUESTION_ID';

	/** the column name for the SURVEY_ID field */
	const SURVEY_ID = 'survey_question.SURVEY_ID';

	/** the column name for the SURVEY_QUESTION field */
	const SURVEY_QUESTION = 'survey_question.SURVEY_QUESTION';

	/** the column name for the SURVEY_QUESTION_COMMENT field */
	const SURVEY_QUESTION_COMMENT = 'survey_question.SURVEY_QUESTION_COMMENT';

	/** the column name for the TYPE field */
	const TYPE = 'survey_question.TYPE';

	/** the column name for the DISPLAY field */
	const DISPLAY = 'survey_question.DISPLAY';

	/** the column name for the SORT field */
	const SORT = 'survey_question.SORT';

	/** the column name for the SHARED_QUESTION_ID field */
	const SHARED_QUESTION_ID = 'survey_question.SHARED_QUESTION_ID';

	/** the column name for the MAX_VALUE field */
	const MAX_VALUE = 'survey_question.MAX_VALUE';

	/** the column name for the SURVEY_GROUP_PRI field */
	const SURVEY_GROUP_PRI = 'survey_question.SURVEY_GROUP_PRI';

	/** the column name for the SURVEY_GROUP_SEC1 field */
	const SURVEY_GROUP_SEC1 = 'survey_question.SURVEY_GROUP_SEC1';

	/** the column name for the SURVEY_GROUP_SEC2 field */
	const SURVEY_GROUP_SEC2 = 'survey_question.SURVEY_GROUP_SEC2';

	/**
	 * An identiy map to hold any loaded instances of SurveyQuestion objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array SurveyQuestion[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('QuestionId', 'SurveyId', 'SurveyQuestion', 'SurveyQuestionComment', 'Type', 'Display', 'Sort', 'SharedQuestionId', 'MaxValue', 'SurveyGroupPri', 'SurveyGroupSec1', 'SurveyGroupSec2', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('questionId', 'surveyId', 'surveyQuestion', 'surveyQuestionComment', 'type', 'display', 'sort', 'sharedQuestionId', 'maxValue', 'surveyGroupPri', 'surveyGroupSec1', 'surveyGroupSec2', ),
		BasePeer::TYPE_COLNAME => array (self::QUESTION_ID, self::SURVEY_ID, self::SURVEY_QUESTION, self::SURVEY_QUESTION_COMMENT, self::TYPE, self::DISPLAY, self::SORT, self::SHARED_QUESTION_ID, self::MAX_VALUE, self::SURVEY_GROUP_PRI, self::SURVEY_GROUP_SEC1, self::SURVEY_GROUP_SEC2, ),
		BasePeer::TYPE_RAW_COLNAME => array ('QUESTION_ID', 'SURVEY_ID', 'SURVEY_QUESTION', 'SURVEY_QUESTION_COMMENT', 'TYPE', 'DISPLAY', 'SORT', 'SHARED_QUESTION_ID', 'MAX_VALUE', 'SURVEY_GROUP_PRI', 'SURVEY_GROUP_SEC1', 'SURVEY_GROUP_SEC2', ),
		BasePeer::TYPE_FIELDNAME => array ('question_id', 'survey_id', 'survey_question', 'survey_question_comment', 'type', 'display', 'sort', 'shared_question_id', 'max_value', 'survey_group_pri', 'survey_group_sec1', 'survey_group_sec2', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('QuestionId' => 0, 'SurveyId' => 1, 'SurveyQuestion' => 2, 'SurveyQuestionComment' => 3, 'Type' => 4, 'Display' => 5, 'Sort' => 6, 'SharedQuestionId' => 7, 'MaxValue' => 8, 'SurveyGroupPri' => 9, 'SurveyGroupSec1' => 10, 'SurveyGroupSec2' => 11, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('questionId' => 0, 'surveyId' => 1, 'surveyQuestion' => 2, 'surveyQuestionComment' => 3, 'type' => 4, 'display' => 5, 'sort' => 6, 'sharedQuestionId' => 7, 'maxValue' => 8, 'surveyGroupPri' => 9, 'surveyGroupSec1' => 10, 'surveyGroupSec2' => 11, ),
		BasePeer::TYPE_COLNAME => array (self::QUESTION_ID => 0, self::SURVEY_ID => 1, self::SURVEY_QUESTION => 2, self::SURVEY_QUESTION_COMMENT => 3, self::TYPE => 4, self::DISPLAY => 5, self::SORT => 6, self::SHARED_QUESTION_ID => 7, self::MAX_VALUE => 8, self::SURVEY_GROUP_PRI => 9, self::SURVEY_GROUP_SEC1 => 10, self::SURVEY_GROUP_SEC2 => 11, ),
		BasePeer::TYPE_RAW_COLNAME => array ('QUESTION_ID' => 0, 'SURVEY_ID' => 1, 'SURVEY_QUESTION' => 2, 'SURVEY_QUESTION_COMMENT' => 3, 'TYPE' => 4, 'DISPLAY' => 5, 'SORT' => 6, 'SHARED_QUESTION_ID' => 7, 'MAX_VALUE' => 8, 'SURVEY_GROUP_PRI' => 9, 'SURVEY_GROUP_SEC1' => 10, 'SURVEY_GROUP_SEC2' => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('question_id' => 0, 'survey_id' => 1, 'survey_question' => 2, 'survey_question_comment' => 3, 'type' => 4, 'display' => 5, 'sort' => 6, 'shared_question_id' => 7, 'max_value' => 8, 'survey_group_pri' => 9, 'survey_group_sec1' => 10, 'survey_group_sec2' => 11, ),
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
	 * @param      string $column The column name for current table. (i.e. SurveyQuestionPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SurveyQuestionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(SurveyQuestionPeer::QUESTION_ID);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_ID);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_QUESTION);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_QUESTION_COMMENT);
			$criteria->addSelectColumn(SurveyQuestionPeer::TYPE);
			$criteria->addSelectColumn(SurveyQuestionPeer::DISPLAY);
			$criteria->addSelectColumn(SurveyQuestionPeer::SORT);
			$criteria->addSelectColumn(SurveyQuestionPeer::SHARED_QUESTION_ID);
			$criteria->addSelectColumn(SurveyQuestionPeer::MAX_VALUE);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_GROUP_PRI);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_GROUP_SEC1);
			$criteria->addSelectColumn(SurveyQuestionPeer::SURVEY_GROUP_SEC2);
		} else {
			$criteria->addSelectColumn($alias . '.QUESTION_ID');
			$criteria->addSelectColumn($alias . '.SURVEY_ID');
			$criteria->addSelectColumn($alias . '.SURVEY_QUESTION');
			$criteria->addSelectColumn($alias . '.SURVEY_QUESTION_COMMENT');
			$criteria->addSelectColumn($alias . '.TYPE');
			$criteria->addSelectColumn($alias . '.DISPLAY');
			$criteria->addSelectColumn($alias . '.SORT');
			$criteria->addSelectColumn($alias . '.SHARED_QUESTION_ID');
			$criteria->addSelectColumn($alias . '.MAX_VALUE');
			$criteria->addSelectColumn($alias . '.SURVEY_GROUP_PRI');
			$criteria->addSelectColumn($alias . '.SURVEY_GROUP_SEC1');
			$criteria->addSelectColumn($alias . '.SURVEY_GROUP_SEC2');
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
		$criteria->setPrimaryTableName(SurveyQuestionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SurveyQuestionPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     SurveyQuestion
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SurveyQuestionPeer::doSelect($critcopy, $con);
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
		return SurveyQuestionPeer::populateObjects(SurveyQuestionPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SurveyQuestionPeer::addSelectColumns($criteria);
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
	 * @param      SurveyQuestion $value A SurveyQuestion object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(SurveyQuestion $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getQuestionId();
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
	 * @param      mixed $value A SurveyQuestion object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof SurveyQuestion) {
				$key = (string) $value->getQuestionId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SurveyQuestion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     SurveyQuestion Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to survey_question
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
		$cls = SurveyQuestionPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SurveyQuestionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SurveyQuestionPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SurveyQuestionPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (SurveyQuestion object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = SurveyQuestionPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = SurveyQuestionPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + SurveyQuestionPeer::NUM_COLUMNS;
		} else {
			$cls = SurveyQuestionPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			SurveyQuestionPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseSurveyQuestionPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseSurveyQuestionPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new SurveyQuestionTableMap());
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
		return $withPrefix ? SurveyQuestionPeer::CLASS_DEFAULT : SurveyQuestionPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a SurveyQuestion or Criteria object.
	 *
	 * @param      mixed $values Criteria or SurveyQuestion object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from SurveyQuestion object
		}

		if ($criteria->containsKey(SurveyQuestionPeer::QUESTION_ID) && $criteria->keyContainsValue(SurveyQuestionPeer::QUESTION_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.SurveyQuestionPeer::QUESTION_ID.')');
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
	 * Method perform an UPDATE on the database, given a SurveyQuestion or Criteria object.
	 *
	 * @param      mixed $values Criteria or SurveyQuestion object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SurveyQuestionPeer::QUESTION_ID);
			$value = $criteria->remove(SurveyQuestionPeer::QUESTION_ID);
			if ($value) {
				$selectCriteria->add(SurveyQuestionPeer::QUESTION_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(SurveyQuestionPeer::TABLE_NAME);
			}

		} else { // $values is SurveyQuestion object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the survey_question table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(SurveyQuestionPeer::TABLE_NAME, $con, SurveyQuestionPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			SurveyQuestionPeer::clearInstancePool();
			SurveyQuestionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a SurveyQuestion or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or SurveyQuestion object or primary key or array of primary keys
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
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			SurveyQuestionPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof SurveyQuestion) { // it's a model object
			// invalidate the cache for this single object
			SurveyQuestionPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SurveyQuestionPeer::QUESTION_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				SurveyQuestionPeer::removeInstanceFromPool($singleval);
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
			SurveyQuestionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given SurveyQuestion object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      SurveyQuestion $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(SurveyQuestion $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SurveyQuestionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SurveyQuestionPeer::TABLE_NAME);

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

		return BasePeer::doValidate(SurveyQuestionPeer::DATABASE_NAME, SurveyQuestionPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     SurveyQuestion
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = SurveyQuestionPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(SurveyQuestionPeer::DATABASE_NAME);
		$criteria->add(SurveyQuestionPeer::QUESTION_ID, $pk);

		$v = SurveyQuestionPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(SurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(SurveyQuestionPeer::DATABASE_NAME);
			$criteria->add(SurveyQuestionPeer::QUESTION_ID, $pks, Criteria::IN);
			$objs = SurveyQuestionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseSurveyQuestionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSurveyQuestionPeer::buildTableMap();

