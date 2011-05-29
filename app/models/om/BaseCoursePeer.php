<?php


/**
 * Base static class for performing query and update operations on the 'course' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCoursePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'course';

	/** the related Propel class for this table */
	const OM_CLASS = 'Course';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.Course';

	/** the related TableMap class for this table */
	const TM_CLASS = 'CourseTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 22;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the CODE field */
	const CODE = 'course.CODE';

	/** the column name for the DIRECTORY field */
	const DIRECTORY = 'course.DIRECTORY';

	/** the column name for the DB_NAME field */
	const DB_NAME = 'course.DB_NAME';

	/** the column name for the COURSE_LANGUAGE field */
	const COURSE_LANGUAGE = 'course.COURSE_LANGUAGE';

	/** the column name for the TITLE field */
	const TITLE = 'course.TITLE';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'course.DESCRIPTION';

	/** the column name for the CATEGORY_CODE field */
	const CATEGORY_CODE = 'course.CATEGORY_CODE';

	/** the column name for the VISIBILITY field */
	const VISIBILITY = 'course.VISIBILITY';

	/** the column name for the SHOW_SCORE field */
	const SHOW_SCORE = 'course.SHOW_SCORE';

	/** the column name for the TUTOR_NAME field */
	const TUTOR_NAME = 'course.TUTOR_NAME';

	/** the column name for the VISUAL_CODE field */
	const VISUAL_CODE = 'course.VISUAL_CODE';

	/** the column name for the DEPARTMENT_NAME field */
	const DEPARTMENT_NAME = 'course.DEPARTMENT_NAME';

	/** the column name for the DEPARTMENT_URL field */
	const DEPARTMENT_URL = 'course.DEPARTMENT_URL';

	/** the column name for the DISK_QUOTA field */
	const DISK_QUOTA = 'course.DISK_QUOTA';

	/** the column name for the LAST_VISIT field */
	const LAST_VISIT = 'course.LAST_VISIT';

	/** the column name for the LAST_EDIT field */
	const LAST_EDIT = 'course.LAST_EDIT';

	/** the column name for the CREATION_DATE field */
	const CREATION_DATE = 'course.CREATION_DATE';

	/** the column name for the EXPIRATION_DATE field */
	const EXPIRATION_DATE = 'course.EXPIRATION_DATE';

	/** the column name for the TARGET_COURSE_CODE field */
	const TARGET_COURSE_CODE = 'course.TARGET_COURSE_CODE';

	/** the column name for the SUBSCRIBE field */
	const SUBSCRIBE = 'course.SUBSCRIBE';

	/** the column name for the UNSUBSCRIBE field */
	const UNSUBSCRIBE = 'course.UNSUBSCRIBE';

	/** the column name for the REGISTRATION_CODE field */
	const REGISTRATION_CODE = 'course.REGISTRATION_CODE';

	/**
	 * An identiy map to hold any loaded instances of Course objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Course[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Code', 'Directory', 'DbName', 'CourseLanguage', 'Title', 'Description', 'CategoryCode', 'Visibility', 'ShowScore', 'TutorName', 'VisualCode', 'DepartmentName', 'DepartmentUrl', 'DiskQuota', 'LastVisit', 'LastEdit', 'CreationDate', 'ExpirationDate', 'TargetCourseCode', 'Subscribe', 'Unsubscribe', 'RegistrationCode', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('code', 'directory', 'dbName', 'courseLanguage', 'title', 'description', 'categoryCode', 'visibility', 'showScore', 'tutorName', 'visualCode', 'departmentName', 'departmentUrl', 'diskQuota', 'lastVisit', 'lastEdit', 'creationDate', 'expirationDate', 'targetCourseCode', 'subscribe', 'unsubscribe', 'registrationCode', ),
		BasePeer::TYPE_COLNAME => array (self::CODE, self::DIRECTORY, self::DB_NAME, self::COURSE_LANGUAGE, self::TITLE, self::DESCRIPTION, self::CATEGORY_CODE, self::VISIBILITY, self::SHOW_SCORE, self::TUTOR_NAME, self::VISUAL_CODE, self::DEPARTMENT_NAME, self::DEPARTMENT_URL, self::DISK_QUOTA, self::LAST_VISIT, self::LAST_EDIT, self::CREATION_DATE, self::EXPIRATION_DATE, self::TARGET_COURSE_CODE, self::SUBSCRIBE, self::UNSUBSCRIBE, self::REGISTRATION_CODE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CODE', 'DIRECTORY', 'DB_NAME', 'COURSE_LANGUAGE', 'TITLE', 'DESCRIPTION', 'CATEGORY_CODE', 'VISIBILITY', 'SHOW_SCORE', 'TUTOR_NAME', 'VISUAL_CODE', 'DEPARTMENT_NAME', 'DEPARTMENT_URL', 'DISK_QUOTA', 'LAST_VISIT', 'LAST_EDIT', 'CREATION_DATE', 'EXPIRATION_DATE', 'TARGET_COURSE_CODE', 'SUBSCRIBE', 'UNSUBSCRIBE', 'REGISTRATION_CODE', ),
		BasePeer::TYPE_FIELDNAME => array ('code', 'directory', 'db_name', 'course_language', 'title', 'description', 'category_code', 'visibility', 'show_score', 'tutor_name', 'visual_code', 'department_name', 'department_url', 'disk_quota', 'last_visit', 'last_edit', 'creation_date', 'expiration_date', 'target_course_code', 'subscribe', 'unsubscribe', 'registration_code', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Code' => 0, 'Directory' => 1, 'DbName' => 2, 'CourseLanguage' => 3, 'Title' => 4, 'Description' => 5, 'CategoryCode' => 6, 'Visibility' => 7, 'ShowScore' => 8, 'TutorName' => 9, 'VisualCode' => 10, 'DepartmentName' => 11, 'DepartmentUrl' => 12, 'DiskQuota' => 13, 'LastVisit' => 14, 'LastEdit' => 15, 'CreationDate' => 16, 'ExpirationDate' => 17, 'TargetCourseCode' => 18, 'Subscribe' => 19, 'Unsubscribe' => 20, 'RegistrationCode' => 21, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('code' => 0, 'directory' => 1, 'dbName' => 2, 'courseLanguage' => 3, 'title' => 4, 'description' => 5, 'categoryCode' => 6, 'visibility' => 7, 'showScore' => 8, 'tutorName' => 9, 'visualCode' => 10, 'departmentName' => 11, 'departmentUrl' => 12, 'diskQuota' => 13, 'lastVisit' => 14, 'lastEdit' => 15, 'creationDate' => 16, 'expirationDate' => 17, 'targetCourseCode' => 18, 'subscribe' => 19, 'unsubscribe' => 20, 'registrationCode' => 21, ),
		BasePeer::TYPE_COLNAME => array (self::CODE => 0, self::DIRECTORY => 1, self::DB_NAME => 2, self::COURSE_LANGUAGE => 3, self::TITLE => 4, self::DESCRIPTION => 5, self::CATEGORY_CODE => 6, self::VISIBILITY => 7, self::SHOW_SCORE => 8, self::TUTOR_NAME => 9, self::VISUAL_CODE => 10, self::DEPARTMENT_NAME => 11, self::DEPARTMENT_URL => 12, self::DISK_QUOTA => 13, self::LAST_VISIT => 14, self::LAST_EDIT => 15, self::CREATION_DATE => 16, self::EXPIRATION_DATE => 17, self::TARGET_COURSE_CODE => 18, self::SUBSCRIBE => 19, self::UNSUBSCRIBE => 20, self::REGISTRATION_CODE => 21, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CODE' => 0, 'DIRECTORY' => 1, 'DB_NAME' => 2, 'COURSE_LANGUAGE' => 3, 'TITLE' => 4, 'DESCRIPTION' => 5, 'CATEGORY_CODE' => 6, 'VISIBILITY' => 7, 'SHOW_SCORE' => 8, 'TUTOR_NAME' => 9, 'VISUAL_CODE' => 10, 'DEPARTMENT_NAME' => 11, 'DEPARTMENT_URL' => 12, 'DISK_QUOTA' => 13, 'LAST_VISIT' => 14, 'LAST_EDIT' => 15, 'CREATION_DATE' => 16, 'EXPIRATION_DATE' => 17, 'TARGET_COURSE_CODE' => 18, 'SUBSCRIBE' => 19, 'UNSUBSCRIBE' => 20, 'REGISTRATION_CODE' => 21, ),
		BasePeer::TYPE_FIELDNAME => array ('code' => 0, 'directory' => 1, 'db_name' => 2, 'course_language' => 3, 'title' => 4, 'description' => 5, 'category_code' => 6, 'visibility' => 7, 'show_score' => 8, 'tutor_name' => 9, 'visual_code' => 10, 'department_name' => 11, 'department_url' => 12, 'disk_quota' => 13, 'last_visit' => 14, 'last_edit' => 15, 'creation_date' => 16, 'expiration_date' => 17, 'target_course_code' => 18, 'subscribe' => 19, 'unsubscribe' => 20, 'registration_code' => 21, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
	 * @param      string $column The column name for current table. (i.e. CoursePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(CoursePeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(CoursePeer::CODE);
			$criteria->addSelectColumn(CoursePeer::DIRECTORY);
			$criteria->addSelectColumn(CoursePeer::DB_NAME);
			$criteria->addSelectColumn(CoursePeer::COURSE_LANGUAGE);
			$criteria->addSelectColumn(CoursePeer::TITLE);
			$criteria->addSelectColumn(CoursePeer::DESCRIPTION);
			$criteria->addSelectColumn(CoursePeer::CATEGORY_CODE);
			$criteria->addSelectColumn(CoursePeer::VISIBILITY);
			$criteria->addSelectColumn(CoursePeer::SHOW_SCORE);
			$criteria->addSelectColumn(CoursePeer::TUTOR_NAME);
			$criteria->addSelectColumn(CoursePeer::VISUAL_CODE);
			$criteria->addSelectColumn(CoursePeer::DEPARTMENT_NAME);
			$criteria->addSelectColumn(CoursePeer::DEPARTMENT_URL);
			$criteria->addSelectColumn(CoursePeer::DISK_QUOTA);
			$criteria->addSelectColumn(CoursePeer::LAST_VISIT);
			$criteria->addSelectColumn(CoursePeer::LAST_EDIT);
			$criteria->addSelectColumn(CoursePeer::CREATION_DATE);
			$criteria->addSelectColumn(CoursePeer::EXPIRATION_DATE);
			$criteria->addSelectColumn(CoursePeer::TARGET_COURSE_CODE);
			$criteria->addSelectColumn(CoursePeer::SUBSCRIBE);
			$criteria->addSelectColumn(CoursePeer::UNSUBSCRIBE);
			$criteria->addSelectColumn(CoursePeer::REGISTRATION_CODE);
		} else {
			$criteria->addSelectColumn($alias . '.CODE');
			$criteria->addSelectColumn($alias . '.DIRECTORY');
			$criteria->addSelectColumn($alias . '.DB_NAME');
			$criteria->addSelectColumn($alias . '.COURSE_LANGUAGE');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.CATEGORY_CODE');
			$criteria->addSelectColumn($alias . '.VISIBILITY');
			$criteria->addSelectColumn($alias . '.SHOW_SCORE');
			$criteria->addSelectColumn($alias . '.TUTOR_NAME');
			$criteria->addSelectColumn($alias . '.VISUAL_CODE');
			$criteria->addSelectColumn($alias . '.DEPARTMENT_NAME');
			$criteria->addSelectColumn($alias . '.DEPARTMENT_URL');
			$criteria->addSelectColumn($alias . '.DISK_QUOTA');
			$criteria->addSelectColumn($alias . '.LAST_VISIT');
			$criteria->addSelectColumn($alias . '.LAST_EDIT');
			$criteria->addSelectColumn($alias . '.CREATION_DATE');
			$criteria->addSelectColumn($alias . '.EXPIRATION_DATE');
			$criteria->addSelectColumn($alias . '.TARGET_COURSE_CODE');
			$criteria->addSelectColumn($alias . '.SUBSCRIBE');
			$criteria->addSelectColumn($alias . '.UNSUBSCRIBE');
			$criteria->addSelectColumn($alias . '.REGISTRATION_CODE');
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
		$criteria->setPrimaryTableName(CoursePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			CoursePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Course
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = CoursePeer::doSelect($critcopy, $con);
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
		return CoursePeer::populateObjects(CoursePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			CoursePeer::addSelectColumns($criteria);
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
	 * @param      Course $value A Course object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Course $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCode();
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
	 * @param      mixed $value A Course object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Course) {
				$key = (string) $value->getCode();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Course object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Course Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to course
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
		$cls = CoursePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = CoursePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = CoursePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				CoursePeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Course object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = CoursePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = CoursePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + CoursePeer::NUM_COLUMNS;
		} else {
			$cls = CoursePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			CoursePeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseCoursePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseCoursePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new CourseTableMap());
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
		return $withPrefix ? CoursePeer::CLASS_DEFAULT : CoursePeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Course or Criteria object.
	 *
	 * @param      mixed $values Criteria or Course object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Course object
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
	 * Method perform an UPDATE on the database, given a Course or Criteria object.
	 *
	 * @param      mixed $values Criteria or Course object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(CoursePeer::CODE);
			$value = $criteria->remove(CoursePeer::CODE);
			if ($value) {
				$selectCriteria->add(CoursePeer::CODE, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(CoursePeer::TABLE_NAME);
			}

		} else { // $values is Course object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the course table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(CoursePeer::TABLE_NAME, $con, CoursePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			CoursePeer::clearInstancePool();
			CoursePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Course or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Course object or primary key or array of primary keys
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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			CoursePeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Course) { // it's a model object
			// invalidate the cache for this single object
			CoursePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CoursePeer::CODE, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				CoursePeer::removeInstanceFromPool($singleval);
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
			CoursePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Course object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Course $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Course $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CoursePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CoursePeer::TABLE_NAME);

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

		return BasePeer::doValidate(CoursePeer::DATABASE_NAME, CoursePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Course
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = CoursePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(CoursePeer::DATABASE_NAME);
		$criteria->add(CoursePeer::CODE, $pk);

		$v = CoursePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(CoursePeer::DATABASE_NAME);
			$criteria->add(CoursePeer::CODE, $pks, Criteria::IN);
			$objs = CoursePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseCoursePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCoursePeer::buildTableMap();

