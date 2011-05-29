<?php


/**
 * Base static class for performing query and update operations on the 'survey' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'dokeos';

	/** the table name for this class */
	const TABLE_NAME = 'survey';

	/** the related Propel class for this table */
	const OM_CLASS = 'Survey';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'dokeos.Survey';

	/** the related TableMap class for this table */
	const TM_CLASS = 'SurveyTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 28;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the SURVEY_ID field */
	const SURVEY_ID = 'survey.SURVEY_ID';

	/** the column name for the CODE field */
	const CODE = 'survey.CODE';

	/** the column name for the TITLE field */
	const TITLE = 'survey.TITLE';

	/** the column name for the SUBTITLE field */
	const SUBTITLE = 'survey.SUBTITLE';

	/** the column name for the AUTHOR field */
	const AUTHOR = 'survey.AUTHOR';

	/** the column name for the LANG field */
	const LANG = 'survey.LANG';

	/** the column name for the AVAIL_FROM field */
	const AVAIL_FROM = 'survey.AVAIL_FROM';

	/** the column name for the AVAIL_TILL field */
	const AVAIL_TILL = 'survey.AVAIL_TILL';

	/** the column name for the IS_SHARED field */
	const IS_SHARED = 'survey.IS_SHARED';

	/** the column name for the TEMPLATE field */
	const TEMPLATE = 'survey.TEMPLATE';

	/** the column name for the INTRO field */
	const INTRO = 'survey.INTRO';

	/** the column name for the SURVEYTHANKS field */
	const SURVEYTHANKS = 'survey.SURVEYTHANKS';

	/** the column name for the CREATION_DATE field */
	const CREATION_DATE = 'survey.CREATION_DATE';

	/** the column name for the INVITED field */
	const INVITED = 'survey.INVITED';

	/** the column name for the ANSWERED field */
	const ANSWERED = 'survey.ANSWERED';

	/** the column name for the INVITE_MAIL field */
	const INVITE_MAIL = 'survey.INVITE_MAIL';

	/** the column name for the REMINDER_MAIL field */
	const REMINDER_MAIL = 'survey.REMINDER_MAIL';

	/** the column name for the MAIL_SUBJECT field */
	const MAIL_SUBJECT = 'survey.MAIL_SUBJECT';

	/** the column name for the ANONYMOUS field */
	const ANONYMOUS = 'survey.ANONYMOUS';

	/** the column name for the ACCESS_CONDITION field */
	const ACCESS_CONDITION = 'survey.ACCESS_CONDITION';

	/** the column name for the SHUFFLE field */
	const SHUFFLE = 'survey.SHUFFLE';

	/** the column name for the ONE_QUESTION_PER_PAGE field */
	const ONE_QUESTION_PER_PAGE = 'survey.ONE_QUESTION_PER_PAGE';

	/** the column name for the SURVEY_VERSION field */
	const SURVEY_VERSION = 'survey.SURVEY_VERSION';

	/** the column name for the PARENT_ID field */
	const PARENT_ID = 'survey.PARENT_ID';

	/** the column name for the SURVEY_TYPE field */
	const SURVEY_TYPE = 'survey.SURVEY_TYPE';

	/** the column name for the SHOW_FORM_PROFILE field */
	const SHOW_FORM_PROFILE = 'survey.SHOW_FORM_PROFILE';

	/** the column name for the FORM_FIELDS field */
	const FORM_FIELDS = 'survey.FORM_FIELDS';

	/** the column name for the SESSION_ID field */
	const SESSION_ID = 'survey.SESSION_ID';

	/**
	 * An identiy map to hold any loaded instances of Survey objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Survey[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('SurveyId', 'Code', 'Title', 'Subtitle', 'Author', 'Lang', 'AvailFrom', 'AvailTill', 'IsShared', 'Template', 'Intro', 'Surveythanks', 'CreationDate', 'Invited', 'Answered', 'InviteMail', 'ReminderMail', 'MailSubject', 'Anonymous', 'AccessCondition', 'Shuffle', 'OneQuestionPerPage', 'SurveyVersion', 'ParentId', 'SurveyType', 'ShowFormProfile', 'FormFields', 'SessionId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('surveyId', 'code', 'title', 'subtitle', 'author', 'lang', 'availFrom', 'availTill', 'isShared', 'template', 'intro', 'surveythanks', 'creationDate', 'invited', 'answered', 'inviteMail', 'reminderMail', 'mailSubject', 'anonymous', 'accessCondition', 'shuffle', 'oneQuestionPerPage', 'surveyVersion', 'parentId', 'surveyType', 'showFormProfile', 'formFields', 'sessionId', ),
		BasePeer::TYPE_COLNAME => array (self::SURVEY_ID, self::CODE, self::TITLE, self::SUBTITLE, self::AUTHOR, self::LANG, self::AVAIL_FROM, self::AVAIL_TILL, self::IS_SHARED, self::TEMPLATE, self::INTRO, self::SURVEYTHANKS, self::CREATION_DATE, self::INVITED, self::ANSWERED, self::INVITE_MAIL, self::REMINDER_MAIL, self::MAIL_SUBJECT, self::ANONYMOUS, self::ACCESS_CONDITION, self::SHUFFLE, self::ONE_QUESTION_PER_PAGE, self::SURVEY_VERSION, self::PARENT_ID, self::SURVEY_TYPE, self::SHOW_FORM_PROFILE, self::FORM_FIELDS, self::SESSION_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('SURVEY_ID', 'CODE', 'TITLE', 'SUBTITLE', 'AUTHOR', 'LANG', 'AVAIL_FROM', 'AVAIL_TILL', 'IS_SHARED', 'TEMPLATE', 'INTRO', 'SURVEYTHANKS', 'CREATION_DATE', 'INVITED', 'ANSWERED', 'INVITE_MAIL', 'REMINDER_MAIL', 'MAIL_SUBJECT', 'ANONYMOUS', 'ACCESS_CONDITION', 'SHUFFLE', 'ONE_QUESTION_PER_PAGE', 'SURVEY_VERSION', 'PARENT_ID', 'SURVEY_TYPE', 'SHOW_FORM_PROFILE', 'FORM_FIELDS', 'SESSION_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('survey_id', 'code', 'title', 'subtitle', 'author', 'lang', 'avail_from', 'avail_till', 'is_shared', 'template', 'intro', 'surveythanks', 'creation_date', 'invited', 'answered', 'invite_mail', 'reminder_mail', 'mail_subject', 'anonymous', 'access_condition', 'shuffle', 'one_question_per_page', 'survey_version', 'parent_id', 'survey_type', 'show_form_profile', 'form_fields', 'session_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('SurveyId' => 0, 'Code' => 1, 'Title' => 2, 'Subtitle' => 3, 'Author' => 4, 'Lang' => 5, 'AvailFrom' => 6, 'AvailTill' => 7, 'IsShared' => 8, 'Template' => 9, 'Intro' => 10, 'Surveythanks' => 11, 'CreationDate' => 12, 'Invited' => 13, 'Answered' => 14, 'InviteMail' => 15, 'ReminderMail' => 16, 'MailSubject' => 17, 'Anonymous' => 18, 'AccessCondition' => 19, 'Shuffle' => 20, 'OneQuestionPerPage' => 21, 'SurveyVersion' => 22, 'ParentId' => 23, 'SurveyType' => 24, 'ShowFormProfile' => 25, 'FormFields' => 26, 'SessionId' => 27, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('surveyId' => 0, 'code' => 1, 'title' => 2, 'subtitle' => 3, 'author' => 4, 'lang' => 5, 'availFrom' => 6, 'availTill' => 7, 'isShared' => 8, 'template' => 9, 'intro' => 10, 'surveythanks' => 11, 'creationDate' => 12, 'invited' => 13, 'answered' => 14, 'inviteMail' => 15, 'reminderMail' => 16, 'mailSubject' => 17, 'anonymous' => 18, 'accessCondition' => 19, 'shuffle' => 20, 'oneQuestionPerPage' => 21, 'surveyVersion' => 22, 'parentId' => 23, 'surveyType' => 24, 'showFormProfile' => 25, 'formFields' => 26, 'sessionId' => 27, ),
		BasePeer::TYPE_COLNAME => array (self::SURVEY_ID => 0, self::CODE => 1, self::TITLE => 2, self::SUBTITLE => 3, self::AUTHOR => 4, self::LANG => 5, self::AVAIL_FROM => 6, self::AVAIL_TILL => 7, self::IS_SHARED => 8, self::TEMPLATE => 9, self::INTRO => 10, self::SURVEYTHANKS => 11, self::CREATION_DATE => 12, self::INVITED => 13, self::ANSWERED => 14, self::INVITE_MAIL => 15, self::REMINDER_MAIL => 16, self::MAIL_SUBJECT => 17, self::ANONYMOUS => 18, self::ACCESS_CONDITION => 19, self::SHUFFLE => 20, self::ONE_QUESTION_PER_PAGE => 21, self::SURVEY_VERSION => 22, self::PARENT_ID => 23, self::SURVEY_TYPE => 24, self::SHOW_FORM_PROFILE => 25, self::FORM_FIELDS => 26, self::SESSION_ID => 27, ),
		BasePeer::TYPE_RAW_COLNAME => array ('SURVEY_ID' => 0, 'CODE' => 1, 'TITLE' => 2, 'SUBTITLE' => 3, 'AUTHOR' => 4, 'LANG' => 5, 'AVAIL_FROM' => 6, 'AVAIL_TILL' => 7, 'IS_SHARED' => 8, 'TEMPLATE' => 9, 'INTRO' => 10, 'SURVEYTHANKS' => 11, 'CREATION_DATE' => 12, 'INVITED' => 13, 'ANSWERED' => 14, 'INVITE_MAIL' => 15, 'REMINDER_MAIL' => 16, 'MAIL_SUBJECT' => 17, 'ANONYMOUS' => 18, 'ACCESS_CONDITION' => 19, 'SHUFFLE' => 20, 'ONE_QUESTION_PER_PAGE' => 21, 'SURVEY_VERSION' => 22, 'PARENT_ID' => 23, 'SURVEY_TYPE' => 24, 'SHOW_FORM_PROFILE' => 25, 'FORM_FIELDS' => 26, 'SESSION_ID' => 27, ),
		BasePeer::TYPE_FIELDNAME => array ('survey_id' => 0, 'code' => 1, 'title' => 2, 'subtitle' => 3, 'author' => 4, 'lang' => 5, 'avail_from' => 6, 'avail_till' => 7, 'is_shared' => 8, 'template' => 9, 'intro' => 10, 'surveythanks' => 11, 'creation_date' => 12, 'invited' => 13, 'answered' => 14, 'invite_mail' => 15, 'reminder_mail' => 16, 'mail_subject' => 17, 'anonymous' => 18, 'access_condition' => 19, 'shuffle' => 20, 'one_question_per_page' => 21, 'survey_version' => 22, 'parent_id' => 23, 'survey_type' => 24, 'show_form_profile' => 25, 'form_fields' => 26, 'session_id' => 27, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
	 * @param      string $column The column name for current table. (i.e. SurveyPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SurveyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(SurveyPeer::SURVEY_ID);
			$criteria->addSelectColumn(SurveyPeer::CODE);
			$criteria->addSelectColumn(SurveyPeer::TITLE);
			$criteria->addSelectColumn(SurveyPeer::SUBTITLE);
			$criteria->addSelectColumn(SurveyPeer::AUTHOR);
			$criteria->addSelectColumn(SurveyPeer::LANG);
			$criteria->addSelectColumn(SurveyPeer::AVAIL_FROM);
			$criteria->addSelectColumn(SurveyPeer::AVAIL_TILL);
			$criteria->addSelectColumn(SurveyPeer::IS_SHARED);
			$criteria->addSelectColumn(SurveyPeer::TEMPLATE);
			$criteria->addSelectColumn(SurveyPeer::INTRO);
			$criteria->addSelectColumn(SurveyPeer::SURVEYTHANKS);
			$criteria->addSelectColumn(SurveyPeer::CREATION_DATE);
			$criteria->addSelectColumn(SurveyPeer::INVITED);
			$criteria->addSelectColumn(SurveyPeer::ANSWERED);
			$criteria->addSelectColumn(SurveyPeer::INVITE_MAIL);
			$criteria->addSelectColumn(SurveyPeer::REMINDER_MAIL);
			$criteria->addSelectColumn(SurveyPeer::MAIL_SUBJECT);
			$criteria->addSelectColumn(SurveyPeer::ANONYMOUS);
			$criteria->addSelectColumn(SurveyPeer::ACCESS_CONDITION);
			$criteria->addSelectColumn(SurveyPeer::SHUFFLE);
			$criteria->addSelectColumn(SurveyPeer::ONE_QUESTION_PER_PAGE);
			$criteria->addSelectColumn(SurveyPeer::SURVEY_VERSION);
			$criteria->addSelectColumn(SurveyPeer::PARENT_ID);
			$criteria->addSelectColumn(SurveyPeer::SURVEY_TYPE);
			$criteria->addSelectColumn(SurveyPeer::SHOW_FORM_PROFILE);
			$criteria->addSelectColumn(SurveyPeer::FORM_FIELDS);
			$criteria->addSelectColumn(SurveyPeer::SESSION_ID);
		} else {
			$criteria->addSelectColumn($alias . '.SURVEY_ID');
			$criteria->addSelectColumn($alias . '.CODE');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.SUBTITLE');
			$criteria->addSelectColumn($alias . '.AUTHOR');
			$criteria->addSelectColumn($alias . '.LANG');
			$criteria->addSelectColumn($alias . '.AVAIL_FROM');
			$criteria->addSelectColumn($alias . '.AVAIL_TILL');
			$criteria->addSelectColumn($alias . '.IS_SHARED');
			$criteria->addSelectColumn($alias . '.TEMPLATE');
			$criteria->addSelectColumn($alias . '.INTRO');
			$criteria->addSelectColumn($alias . '.SURVEYTHANKS');
			$criteria->addSelectColumn($alias . '.CREATION_DATE');
			$criteria->addSelectColumn($alias . '.INVITED');
			$criteria->addSelectColumn($alias . '.ANSWERED');
			$criteria->addSelectColumn($alias . '.INVITE_MAIL');
			$criteria->addSelectColumn($alias . '.REMINDER_MAIL');
			$criteria->addSelectColumn($alias . '.MAIL_SUBJECT');
			$criteria->addSelectColumn($alias . '.ANONYMOUS');
			$criteria->addSelectColumn($alias . '.ACCESS_CONDITION');
			$criteria->addSelectColumn($alias . '.SHUFFLE');
			$criteria->addSelectColumn($alias . '.ONE_QUESTION_PER_PAGE');
			$criteria->addSelectColumn($alias . '.SURVEY_VERSION');
			$criteria->addSelectColumn($alias . '.PARENT_ID');
			$criteria->addSelectColumn($alias . '.SURVEY_TYPE');
			$criteria->addSelectColumn($alias . '.SHOW_FORM_PROFILE');
			$criteria->addSelectColumn($alias . '.FORM_FIELDS');
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
		$criteria->setPrimaryTableName(SurveyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SurveyPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Survey
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SurveyPeer::doSelect($critcopy, $con);
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
		return SurveyPeer::populateObjects(SurveyPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SurveyPeer::addSelectColumns($criteria);
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
	 * @param      Survey $value A Survey object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Survey $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getSurveyId();
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
	 * @param      mixed $value A Survey object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Survey) {
				$key = (string) $value->getSurveyId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Survey object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Survey Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to survey
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
		$cls = SurveyPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SurveyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SurveyPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SurveyPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Survey object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = SurveyPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = SurveyPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + SurveyPeer::NUM_COLUMNS;
		} else {
			$cls = SurveyPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			SurveyPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseSurveyPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseSurveyPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new SurveyTableMap());
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
		return $withPrefix ? SurveyPeer::CLASS_DEFAULT : SurveyPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Survey or Criteria object.
	 *
	 * @param      mixed $values Criteria or Survey object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Survey object
		}

		if ($criteria->containsKey(SurveyPeer::SURVEY_ID) && $criteria->keyContainsValue(SurveyPeer::SURVEY_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.SurveyPeer::SURVEY_ID.')');
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
	 * Method perform an UPDATE on the database, given a Survey or Criteria object.
	 *
	 * @param      mixed $values Criteria or Survey object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SurveyPeer::SURVEY_ID);
			$value = $criteria->remove(SurveyPeer::SURVEY_ID);
			if ($value) {
				$selectCriteria->add(SurveyPeer::SURVEY_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(SurveyPeer::TABLE_NAME);
			}

		} else { // $values is Survey object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the survey table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(SurveyPeer::TABLE_NAME, $con, SurveyPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			SurveyPeer::clearInstancePool();
			SurveyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Survey or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Survey object or primary key or array of primary keys
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			SurveyPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Survey) { // it's a model object
			// invalidate the cache for this single object
			SurveyPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SurveyPeer::SURVEY_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				SurveyPeer::removeInstanceFromPool($singleval);
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
			SurveyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Survey object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Survey $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Survey $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SurveyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SurveyPeer::TABLE_NAME);

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

		return BasePeer::doValidate(SurveyPeer::DATABASE_NAME, SurveyPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Survey
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = SurveyPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);
		$criteria->add(SurveyPeer::SURVEY_ID, $pk);

		$v = SurveyPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(SurveyPeer::DATABASE_NAME);
			$criteria->add(SurveyPeer::SURVEY_ID, $pks, Criteria::IN);
			$objs = SurveyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseSurveyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSurveyPeer::buildTableMap();

