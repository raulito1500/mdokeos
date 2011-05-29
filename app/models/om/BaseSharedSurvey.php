<?php


/**
 * Base class that represents a row from the 'shared_survey' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSharedSurvey extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SharedSurveyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SharedSurveyPeer
	 */
	protected static $peer;

	/**
	 * The value for the survey_id field.
	 * @var        int
	 */
	protected $survey_id;

	/**
	 * The value for the code field.
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the subtitle field.
	 * @var        string
	 */
	protected $subtitle;

	/**
	 * The value for the author field.
	 * @var        string
	 */
	protected $author;

	/**
	 * The value for the lang field.
	 * @var        string
	 */
	protected $lang;

	/**
	 * The value for the template field.
	 * @var        string
	 */
	protected $template;

	/**
	 * The value for the intro field.
	 * @var        string
	 */
	protected $intro;

	/**
	 * The value for the surveythanks field.
	 * @var        string
	 */
	protected $surveythanks;

	/**
	 * The value for the creation_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $creation_date;

	/**
	 * The value for the course_code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $course_code;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->creation_date = NULL;
		$this->course_code = '';
	}

	/**
	 * Initializes internal state of BaseSharedSurvey object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [survey_id] column value.
	 * 
	 * @return     int
	 */
	public function getSurveyId()
	{
		return $this->survey_id;
	}

	/**
	 * Get the [code] column value.
	 * 
	 * @return     string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [subtitle] column value.
	 * 
	 * @return     string
	 */
	public function getSubtitle()
	{
		return $this->subtitle;
	}

	/**
	 * Get the [author] column value.
	 * 
	 * @return     string
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * Get the [lang] column value.
	 * 
	 * @return     string
	 */
	public function getLang()
	{
		return $this->lang;
	}

	/**
	 * Get the [template] column value.
	 * 
	 * @return     string
	 */
	public function getTemplate()
	{
		return $this->template;
	}

	/**
	 * Get the [intro] column value.
	 * 
	 * @return     string
	 */
	public function getIntro()
	{
		return $this->intro;
	}

	/**
	 * Get the [surveythanks] column value.
	 * 
	 * @return     string
	 */
	public function getSurveythanks()
	{
		return $this->surveythanks;
	}

	/**
	 * Get the [optionally formatted] temporal [creation_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreationDate($format = 'Y-m-d H:i:s')
	{
		if ($this->creation_date === null) {
			return null;
		}


		if ($this->creation_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->creation_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->creation_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [course_code] column value.
	 * 
	 * @return     string
	 */
	public function getCourseCode()
	{
		return $this->course_code;
	}

	/**
	 * Set the value of [survey_id] column.
	 * 
	 * @param      int $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setSurveyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->survey_id !== $v) {
			$this->survey_id = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::SURVEY_ID;
		}

		return $this;
	} // setSurveyId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [subtitle] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setSubtitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subtitle !== $v) {
			$this->subtitle = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::SUBTITLE;
		}

		return $this;
	} // setSubtitle()

	/**
	 * Set the value of [author] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setAuthor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->author !== $v) {
			$this->author = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::AUTHOR;
		}

		return $this;
	} // setAuthor()

	/**
	 * Set the value of [lang] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setLang($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lang !== $v) {
			$this->lang = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::LANG;
		}

		return $this;
	} // setLang()

	/**
	 * Set the value of [template] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setTemplate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->template !== $v) {
			$this->template = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::TEMPLATE;
		}

		return $this;
	} // setTemplate()

	/**
	 * Set the value of [intro] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setIntro($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->intro !== $v) {
			$this->intro = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::INTRO;
		}

		return $this;
	} // setIntro()

	/**
	 * Set the value of [surveythanks] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setSurveythanks($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->surveythanks !== $v) {
			$this->surveythanks = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::SURVEYTHANKS;
		}

		return $this;
	} // setSurveythanks()

	/**
	 * Sets the value of [creation_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setCreationDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->creation_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->creation_date !== null && $tmpDt = new DateTime($this->creation_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->creation_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = SharedSurveyPeer::CREATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setCreationDate()

	/**
	 * Set the value of [course_code] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurvey The current object (for fluent API support)
	 */
	public function setCourseCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->course_code !== $v || $this->isNew()) {
			$this->course_code = $v;
			$this->modifiedColumns[] = SharedSurveyPeer::COURSE_CODE;
		}

		return $this;
	} // setCourseCode()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->creation_date !== NULL) {
				return false;
			}

			if ($this->course_code !== '') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->survey_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->subtitle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->author = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->lang = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->template = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->intro = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->surveythanks = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->creation_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->course_code = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = SharedSurveyPeer::NUM_COLUMNS - SharedSurveyPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating SharedSurvey object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SharedSurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SharedSurveyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SharedSurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SharedSurveyQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SharedSurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				SharedSurveyPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SharedSurveyPeer::SURVEY_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SharedSurveyPeer::SURVEY_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SharedSurveyPeer::SURVEY_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setSurveyId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = SharedSurveyPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = SharedSurveyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SharedSurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getSurveyId();
				break;
			case 1:
				return $this->getCode();
				break;
			case 2:
				return $this->getTitle();
				break;
			case 3:
				return $this->getSubtitle();
				break;
			case 4:
				return $this->getAuthor();
				break;
			case 5:
				return $this->getLang();
				break;
			case 6:
				return $this->getTemplate();
				break;
			case 7:
				return $this->getIntro();
				break;
			case 8:
				return $this->getSurveythanks();
				break;
			case 9:
				return $this->getCreationDate();
				break;
			case 10:
				return $this->getCourseCode();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = SharedSurveyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSurveyId(),
			$keys[1] => $this->getCode(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getSubtitle(),
			$keys[4] => $this->getAuthor(),
			$keys[5] => $this->getLang(),
			$keys[6] => $this->getTemplate(),
			$keys[7] => $this->getIntro(),
			$keys[8] => $this->getSurveythanks(),
			$keys[9] => $this->getCreationDate(),
			$keys[10] => $this->getCourseCode(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SharedSurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setSurveyId($value);
				break;
			case 1:
				$this->setCode($value);
				break;
			case 2:
				$this->setTitle($value);
				break;
			case 3:
				$this->setSubtitle($value);
				break;
			case 4:
				$this->setAuthor($value);
				break;
			case 5:
				$this->setLang($value);
				break;
			case 6:
				$this->setTemplate($value);
				break;
			case 7:
				$this->setIntro($value);
				break;
			case 8:
				$this->setSurveythanks($value);
				break;
			case 9:
				$this->setCreationDate($value);
				break;
			case 10:
				$this->setCourseCode($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SharedSurveyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSurveyId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSubtitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAuthor($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLang($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTemplate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIntro($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSurveythanks($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreationDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCourseCode($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SharedSurveyPeer::DATABASE_NAME);

		if ($this->isColumnModified(SharedSurveyPeer::SURVEY_ID)) $criteria->add(SharedSurveyPeer::SURVEY_ID, $this->survey_id);
		if ($this->isColumnModified(SharedSurveyPeer::CODE)) $criteria->add(SharedSurveyPeer::CODE, $this->code);
		if ($this->isColumnModified(SharedSurveyPeer::TITLE)) $criteria->add(SharedSurveyPeer::TITLE, $this->title);
		if ($this->isColumnModified(SharedSurveyPeer::SUBTITLE)) $criteria->add(SharedSurveyPeer::SUBTITLE, $this->subtitle);
		if ($this->isColumnModified(SharedSurveyPeer::AUTHOR)) $criteria->add(SharedSurveyPeer::AUTHOR, $this->author);
		if ($this->isColumnModified(SharedSurveyPeer::LANG)) $criteria->add(SharedSurveyPeer::LANG, $this->lang);
		if ($this->isColumnModified(SharedSurveyPeer::TEMPLATE)) $criteria->add(SharedSurveyPeer::TEMPLATE, $this->template);
		if ($this->isColumnModified(SharedSurveyPeer::INTRO)) $criteria->add(SharedSurveyPeer::INTRO, $this->intro);
		if ($this->isColumnModified(SharedSurveyPeer::SURVEYTHANKS)) $criteria->add(SharedSurveyPeer::SURVEYTHANKS, $this->surveythanks);
		if ($this->isColumnModified(SharedSurveyPeer::CREATION_DATE)) $criteria->add(SharedSurveyPeer::CREATION_DATE, $this->creation_date);
		if ($this->isColumnModified(SharedSurveyPeer::COURSE_CODE)) $criteria->add(SharedSurveyPeer::COURSE_CODE, $this->course_code);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SharedSurveyPeer::DATABASE_NAME);
		$criteria->add(SharedSurveyPeer::SURVEY_ID, $this->survey_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getSurveyId();
	}

	/**
	 * Generic method to set the primary key (survey_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setSurveyId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getSurveyId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of SharedSurvey (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCode($this->code);
		$copyObj->setTitle($this->title);
		$copyObj->setSubtitle($this->subtitle);
		$copyObj->setAuthor($this->author);
		$copyObj->setLang($this->lang);
		$copyObj->setTemplate($this->template);
		$copyObj->setIntro($this->intro);
		$copyObj->setSurveythanks($this->surveythanks);
		$copyObj->setCreationDate($this->creation_date);
		$copyObj->setCourseCode($this->course_code);

		$copyObj->setNew(true);
		$copyObj->setSurveyId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     SharedSurvey Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     SharedSurveyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SharedSurveyPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->survey_id = null;
		$this->code = null;
		$this->title = null;
		$this->subtitle = null;
		$this->author = null;
		$this->lang = null;
		$this->template = null;
		$this->intro = null;
		$this->surveythanks = null;
		$this->creation_date = null;
		$this->course_code = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseSharedSurvey
