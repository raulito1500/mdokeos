<?php


/**
 * Base class that represents a row from the 'session' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSession extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SessionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SessionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the id_coach field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_coach;

	/**
	 * The value for the name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the nbr_courses field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nbr_courses;

	/**
	 * The value for the nbr_users field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nbr_users;

	/**
	 * The value for the nbr_classes field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nbr_classes;

	/**
	 * The value for the date_start field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $date_start;

	/**
	 * The value for the date_end field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $date_end;

	/**
	 * The value for the nb_days_access_before_beginning field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nb_days_access_before_beginning;

	/**
	 * The value for the nb_days_access_after_end field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $nb_days_access_after_end;

	/**
	 * The value for the session_admin_id field.
	 * @var        int
	 */
	protected $session_admin_id;

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
		$this->id_coach = 0;
		$this->name = '';
		$this->nbr_courses = 0;
		$this->nbr_users = 0;
		$this->nbr_classes = 0;
		$this->date_start = NULL;
		$this->date_end = NULL;
		$this->nb_days_access_before_beginning = 0;
		$this->nb_days_access_after_end = 0;
	}

	/**
	 * Initializes internal state of BaseSession object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [id_coach] column value.
	 * 
	 * @return     int
	 */
	public function getIdCoach()
	{
		return $this->id_coach;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [nbr_courses] column value.
	 * 
	 * @return     int
	 */
	public function getNbrCourses()
	{
		return $this->nbr_courses;
	}

	/**
	 * Get the [nbr_users] column value.
	 * 
	 * @return     int
	 */
	public function getNbrUsers()
	{
		return $this->nbr_users;
	}

	/**
	 * Get the [nbr_classes] column value.
	 * 
	 * @return     int
	 */
	public function getNbrClasses()
	{
		return $this->nbr_classes;
	}

	/**
	 * Get the [optionally formatted] temporal [date_start] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateStart($format = '%x')
	{
		if ($this->date_start === null) {
			return null;
		}


		if ($this->date_start === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_start);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_start, true), $x);
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
	 * Get the [optionally formatted] temporal [date_end] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateEnd($format = '%x')
	{
		if ($this->date_end === null) {
			return null;
		}


		if ($this->date_end === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_end);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_end, true), $x);
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
	 * Get the [nb_days_access_before_beginning] column value.
	 * 
	 * @return     int
	 */
	public function getNbDaysAccessBeforeBeginning()
	{
		return $this->nb_days_access_before_beginning;
	}

	/**
	 * Get the [nb_days_access_after_end] column value.
	 * 
	 * @return     int
	 */
	public function getNbDaysAccessAfterEnd()
	{
		return $this->nb_days_access_after_end;
	}

	/**
	 * Get the [session_admin_id] column value.
	 * 
	 * @return     int
	 */
	public function getSessionAdminId()
	{
		return $this->session_admin_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SessionPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [id_coach] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setIdCoach($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_coach !== $v || $this->isNew()) {
			$this->id_coach = $v;
			$this->modifiedColumns[] = SessionPeer::ID_COACH;
		}

		return $this;
	} // setIdCoach()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v || $this->isNew()) {
			$this->name = $v;
			$this->modifiedColumns[] = SessionPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [nbr_courses] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setNbrCourses($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nbr_courses !== $v || $this->isNew()) {
			$this->nbr_courses = $v;
			$this->modifiedColumns[] = SessionPeer::NBR_COURSES;
		}

		return $this;
	} // setNbrCourses()

	/**
	 * Set the value of [nbr_users] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setNbrUsers($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nbr_users !== $v || $this->isNew()) {
			$this->nbr_users = $v;
			$this->modifiedColumns[] = SessionPeer::NBR_USERS;
		}

		return $this;
	} // setNbrUsers()

	/**
	 * Set the value of [nbr_classes] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setNbrClasses($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nbr_classes !== $v || $this->isNew()) {
			$this->nbr_classes = $v;
			$this->modifiedColumns[] = SessionPeer::NBR_CLASSES;
		}

		return $this;
	} // setNbrClasses()

	/**
	 * Sets the value of [date_start] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Session The current object (for fluent API support)
	 */
	public function setDateStart($v)
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

		if ( $this->date_start !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_start !== null && $tmpDt = new DateTime($this->date_start)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
					)
			{
				$this->date_start = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SessionPeer::DATE_START;
			}
		} // if either are not null

		return $this;
	} // setDateStart()

	/**
	 * Sets the value of [date_end] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Session The current object (for fluent API support)
	 */
	public function setDateEnd($v)
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

		if ( $this->date_end !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_end !== null && $tmpDt = new DateTime($this->date_end)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
					)
			{
				$this->date_end = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SessionPeer::DATE_END;
			}
		} // if either are not null

		return $this;
	} // setDateEnd()

	/**
	 * Set the value of [nb_days_access_before_beginning] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setNbDaysAccessBeforeBeginning($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nb_days_access_before_beginning !== $v || $this->isNew()) {
			$this->nb_days_access_before_beginning = $v;
			$this->modifiedColumns[] = SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING;
		}

		return $this;
	} // setNbDaysAccessBeforeBeginning()

	/**
	 * Set the value of [nb_days_access_after_end] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setNbDaysAccessAfterEnd($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->nb_days_access_after_end !== $v || $this->isNew()) {
			$this->nb_days_access_after_end = $v;
			$this->modifiedColumns[] = SessionPeer::NB_DAYS_ACCESS_AFTER_END;
		}

		return $this;
	} // setNbDaysAccessAfterEnd()

	/**
	 * Set the value of [session_admin_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSessionAdminId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_admin_id !== $v) {
			$this->session_admin_id = $v;
			$this->modifiedColumns[] = SessionPeer::SESSION_ADMIN_ID;
		}

		return $this;
	} // setSessionAdminId()

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
			if ($this->id_coach !== 0) {
				return false;
			}

			if ($this->name !== '') {
				return false;
			}

			if ($this->nbr_courses !== 0) {
				return false;
			}

			if ($this->nbr_users !== 0) {
				return false;
			}

			if ($this->nbr_classes !== 0) {
				return false;
			}

			if ($this->date_start !== NULL) {
				return false;
			}

			if ($this->date_end !== NULL) {
				return false;
			}

			if ($this->nb_days_access_before_beginning !== 0) {
				return false;
			}

			if ($this->nb_days_access_after_end !== 0) {
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

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_coach = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->nbr_courses = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->nbr_users = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->nbr_classes = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->date_start = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->date_end = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->nb_days_access_before_beginning = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->nb_days_access_after_end = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->session_admin_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = SessionPeer::NUM_COLUMNS - SessionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Session object", $e);
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SessionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SessionQuery::create()
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SessionPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = SessionPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SessionPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SessionPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = SessionPeer::doUpdate($this, $con);
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


			if (($retval = SessionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getId();
				break;
			case 1:
				return $this->getIdCoach();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getNbrCourses();
				break;
			case 4:
				return $this->getNbrUsers();
				break;
			case 5:
				return $this->getNbrClasses();
				break;
			case 6:
				return $this->getDateStart();
				break;
			case 7:
				return $this->getDateEnd();
				break;
			case 8:
				return $this->getNbDaysAccessBeforeBeginning();
				break;
			case 9:
				return $this->getNbDaysAccessAfterEnd();
				break;
			case 10:
				return $this->getSessionAdminId();
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
		$keys = SessionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdCoach(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getNbrCourses(),
			$keys[4] => $this->getNbrUsers(),
			$keys[5] => $this->getNbrClasses(),
			$keys[6] => $this->getDateStart(),
			$keys[7] => $this->getDateEnd(),
			$keys[8] => $this->getNbDaysAccessBeforeBeginning(),
			$keys[9] => $this->getNbDaysAccessAfterEnd(),
			$keys[10] => $this->getSessionAdminId(),
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
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setId($value);
				break;
			case 1:
				$this->setIdCoach($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setNbrCourses($value);
				break;
			case 4:
				$this->setNbrUsers($value);
				break;
			case 5:
				$this->setNbrClasses($value);
				break;
			case 6:
				$this->setDateStart($value);
				break;
			case 7:
				$this->setDateEnd($value);
				break;
			case 8:
				$this->setNbDaysAccessBeforeBeginning($value);
				break;
			case 9:
				$this->setNbDaysAccessAfterEnd($value);
				break;
			case 10:
				$this->setSessionAdminId($value);
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
		$keys = SessionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdCoach($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNbrCourses($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNbrUsers($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNbrClasses($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateStart($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateEnd($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNbDaysAccessBeforeBeginning($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNbDaysAccessAfterEnd($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSessionAdminId($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SessionPeer::ID)) $criteria->add(SessionPeer::ID, $this->id);
		if ($this->isColumnModified(SessionPeer::ID_COACH)) $criteria->add(SessionPeer::ID_COACH, $this->id_coach);
		if ($this->isColumnModified(SessionPeer::NAME)) $criteria->add(SessionPeer::NAME, $this->name);
		if ($this->isColumnModified(SessionPeer::NBR_COURSES)) $criteria->add(SessionPeer::NBR_COURSES, $this->nbr_courses);
		if ($this->isColumnModified(SessionPeer::NBR_USERS)) $criteria->add(SessionPeer::NBR_USERS, $this->nbr_users);
		if ($this->isColumnModified(SessionPeer::NBR_CLASSES)) $criteria->add(SessionPeer::NBR_CLASSES, $this->nbr_classes);
		if ($this->isColumnModified(SessionPeer::DATE_START)) $criteria->add(SessionPeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(SessionPeer::DATE_END)) $criteria->add(SessionPeer::DATE_END, $this->date_end);
		if ($this->isColumnModified(SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING)) $criteria->add(SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING, $this->nb_days_access_before_beginning);
		if ($this->isColumnModified(SessionPeer::NB_DAYS_ACCESS_AFTER_END)) $criteria->add(SessionPeer::NB_DAYS_ACCESS_AFTER_END, $this->nb_days_access_after_end);
		if ($this->isColumnModified(SessionPeer::SESSION_ADMIN_ID)) $criteria->add(SessionPeer::SESSION_ADMIN_ID, $this->session_admin_id);

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
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);
		$criteria->add(SessionPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Session (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setIdCoach($this->id_coach);
		$copyObj->setName($this->name);
		$copyObj->setNbrCourses($this->nbr_courses);
		$copyObj->setNbrUsers($this->nbr_users);
		$copyObj->setNbrClasses($this->nbr_classes);
		$copyObj->setDateStart($this->date_start);
		$copyObj->setDateEnd($this->date_end);
		$copyObj->setNbDaysAccessBeforeBeginning($this->nb_days_access_before_beginning);
		$copyObj->setNbDaysAccessAfterEnd($this->nb_days_access_after_end);
		$copyObj->setSessionAdminId($this->session_admin_id);

		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     Session Clone of current object.
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
	 * @return     SessionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SessionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->id_coach = null;
		$this->name = null;
		$this->nbr_courses = null;
		$this->nbr_users = null;
		$this->nbr_classes = null;
		$this->date_start = null;
		$this->date_end = null;
		$this->nb_days_access_before_beginning = null;
		$this->nb_days_access_after_end = null;
		$this->session_admin_id = null;
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

} // BaseSession
