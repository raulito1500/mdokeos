<?php


/**
 * Base class that represents a row from the 'quiz' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseQuiz extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'QuizPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        QuizPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the sound field.
	 * @var        string
	 */
	protected $sound;

	/**
	 * The value for the type field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $type;

	/**
	 * The value for the random field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $random;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $active;

	/**
	 * The value for the results_disabled field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $results_disabled;

	/**
	 * The value for the access_condition field.
	 * @var        string
	 */
	protected $access_condition;

	/**
	 * The value for the max_attempt field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $max_attempt;

	/**
	 * The value for the start_time field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $start_time;

	/**
	 * The value for the end_time field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $end_time;

	/**
	 * The value for the feedback_type field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $feedback_type;

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
		$this->type = 1;
		$this->random = 0;
		$this->active = 0;
		$this->results_disabled = 0;
		$this->max_attempt = 0;
		$this->start_time = NULL;
		$this->end_time = NULL;
		$this->feedback_type = 0;
	}

	/**
	 * Initializes internal state of BaseQuiz object.
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
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [sound] column value.
	 * 
	 * @return     string
	 */
	public function getSound()
	{
		return $this->sound;
	}

	/**
	 * Get the [type] column value.
	 * 
	 * @return     int
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Get the [random] column value.
	 * 
	 * @return     int
	 */
	public function getRandom()
	{
		return $this->random;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     int
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [results_disabled] column value.
	 * 
	 * @return     int
	 */
	public function getResultsDisabled()
	{
		return $this->results_disabled;
	}

	/**
	 * Get the [access_condition] column value.
	 * 
	 * @return     string
	 */
	public function getAccessCondition()
	{
		return $this->access_condition;
	}

	/**
	 * Get the [max_attempt] column value.
	 * 
	 * @return     int
	 */
	public function getMaxAttempt()
	{
		return $this->max_attempt;
	}

	/**
	 * Get the [optionally formatted] temporal [start_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartTime($format = 'Y-m-d H:i:s')
	{
		if ($this->start_time === null) {
			return null;
		}


		if ($this->start_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->start_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_time, true), $x);
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
	 * Get the [optionally formatted] temporal [end_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEndTime($format = 'Y-m-d H:i:s')
	{
		if ($this->end_time === null) {
			return null;
		}


		if ($this->end_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->end_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_time, true), $x);
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
	 * Get the [feedback_type] column value.
	 * 
	 * @return     int
	 */
	public function getFeedbackType()
	{
		return $this->feedback_type;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = QuizPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = QuizPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = QuizPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [sound] column.
	 * 
	 * @param      string $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sound !== $v) {
			$this->sound = $v;
			$this->modifiedColumns[] = QuizPeer::SOUND;
		}

		return $this;
	} // setSound()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->type !== $v || $this->isNew()) {
			$this->type = $v;
			$this->modifiedColumns[] = QuizPeer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Set the value of [random] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setRandom($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->random !== $v || $this->isNew()) {
			$this->random = $v;
			$this->modifiedColumns[] = QuizPeer::RANDOM;
		}

		return $this;
	} // setRandom()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->active !== $v || $this->isNew()) {
			$this->active = $v;
			$this->modifiedColumns[] = QuizPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Set the value of [results_disabled] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setResultsDisabled($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->results_disabled !== $v || $this->isNew()) {
			$this->results_disabled = $v;
			$this->modifiedColumns[] = QuizPeer::RESULTS_DISABLED;
		}

		return $this;
	} // setResultsDisabled()

	/**
	 * Set the value of [access_condition] column.
	 * 
	 * @param      string $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setAccessCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->access_condition !== $v) {
			$this->access_condition = $v;
			$this->modifiedColumns[] = QuizPeer::ACCESS_CONDITION;
		}

		return $this;
	} // setAccessCondition()

	/**
	 * Set the value of [max_attempt] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setMaxAttempt($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_attempt !== $v || $this->isNew()) {
			$this->max_attempt = $v;
			$this->modifiedColumns[] = QuizPeer::MAX_ATTEMPT;
		}

		return $this;
	} // setMaxAttempt()

	/**
	 * Sets the value of [start_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setStartTime($v)
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

		if ( $this->start_time !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->start_time !== null && $tmpDt = new DateTime($this->start_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->start_time = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = QuizPeer::START_TIME;
			}
		} // if either are not null

		return $this;
	} // setStartTime()

	/**
	 * Sets the value of [end_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setEndTime($v)
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

		if ( $this->end_time !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->end_time !== null && $tmpDt = new DateTime($this->end_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->end_time = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = QuizPeer::END_TIME;
			}
		} // if either are not null

		return $this;
	} // setEndTime()

	/**
	 * Set the value of [feedback_type] column.
	 * 
	 * @param      int $v new value
	 * @return     Quiz The current object (for fluent API support)
	 */
	public function setFeedbackType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->feedback_type !== $v || $this->isNew()) {
			$this->feedback_type = $v;
			$this->modifiedColumns[] = QuizPeer::FEEDBACK_TYPE;
		}

		return $this;
	} // setFeedbackType()

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
			if ($this->type !== 1) {
				return false;
			}

			if ($this->random !== 0) {
				return false;
			}

			if ($this->active !== 0) {
				return false;
			}

			if ($this->results_disabled !== 0) {
				return false;
			}

			if ($this->max_attempt !== 0) {
				return false;
			}

			if ($this->start_time !== NULL) {
				return false;
			}

			if ($this->end_time !== NULL) {
				return false;
			}

			if ($this->feedback_type !== 0) {
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
			$this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->sound = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->type = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->random = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->active = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->results_disabled = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->access_condition = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->max_attempt = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->start_time = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->end_time = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->feedback_type = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = QuizPeer::NUM_COLUMNS - QuizPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Quiz object", $e);
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
			$con = Propel::getConnection(QuizPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = QuizPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(QuizPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				QuizQuery::create()
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
			$con = Propel::getConnection(QuizPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				QuizPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = QuizPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(QuizPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.QuizPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = QuizPeer::doUpdate($this, $con);
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


			if (($retval = QuizPeer::doValidate($this, $columns)) !== true) {
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
		$pos = QuizPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTitle();
				break;
			case 2:
				return $this->getDescription();
				break;
			case 3:
				return $this->getSound();
				break;
			case 4:
				return $this->getType();
				break;
			case 5:
				return $this->getRandom();
				break;
			case 6:
				return $this->getActive();
				break;
			case 7:
				return $this->getResultsDisabled();
				break;
			case 8:
				return $this->getAccessCondition();
				break;
			case 9:
				return $this->getMaxAttempt();
				break;
			case 10:
				return $this->getStartTime();
				break;
			case 11:
				return $this->getEndTime();
				break;
			case 12:
				return $this->getFeedbackType();
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
		$keys = QuizPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getSound(),
			$keys[4] => $this->getType(),
			$keys[5] => $this->getRandom(),
			$keys[6] => $this->getActive(),
			$keys[7] => $this->getResultsDisabled(),
			$keys[8] => $this->getAccessCondition(),
			$keys[9] => $this->getMaxAttempt(),
			$keys[10] => $this->getStartTime(),
			$keys[11] => $this->getEndTime(),
			$keys[12] => $this->getFeedbackType(),
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
		$pos = QuizPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTitle($value);
				break;
			case 2:
				$this->setDescription($value);
				break;
			case 3:
				$this->setSound($value);
				break;
			case 4:
				$this->setType($value);
				break;
			case 5:
				$this->setRandom($value);
				break;
			case 6:
				$this->setActive($value);
				break;
			case 7:
				$this->setResultsDisabled($value);
				break;
			case 8:
				$this->setAccessCondition($value);
				break;
			case 9:
				$this->setMaxAttempt($value);
				break;
			case 10:
				$this->setStartTime($value);
				break;
			case 11:
				$this->setEndTime($value);
				break;
			case 12:
				$this->setFeedbackType($value);
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
		$keys = QuizPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSound($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRandom($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActive($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setResultsDisabled($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAccessCondition($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMaxAttempt($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setStartTime($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEndTime($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFeedbackType($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(QuizPeer::DATABASE_NAME);

		if ($this->isColumnModified(QuizPeer::ID)) $criteria->add(QuizPeer::ID, $this->id);
		if ($this->isColumnModified(QuizPeer::TITLE)) $criteria->add(QuizPeer::TITLE, $this->title);
		if ($this->isColumnModified(QuizPeer::DESCRIPTION)) $criteria->add(QuizPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(QuizPeer::SOUND)) $criteria->add(QuizPeer::SOUND, $this->sound);
		if ($this->isColumnModified(QuizPeer::TYPE)) $criteria->add(QuizPeer::TYPE, $this->type);
		if ($this->isColumnModified(QuizPeer::RANDOM)) $criteria->add(QuizPeer::RANDOM, $this->random);
		if ($this->isColumnModified(QuizPeer::ACTIVE)) $criteria->add(QuizPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(QuizPeer::RESULTS_DISABLED)) $criteria->add(QuizPeer::RESULTS_DISABLED, $this->results_disabled);
		if ($this->isColumnModified(QuizPeer::ACCESS_CONDITION)) $criteria->add(QuizPeer::ACCESS_CONDITION, $this->access_condition);
		if ($this->isColumnModified(QuizPeer::MAX_ATTEMPT)) $criteria->add(QuizPeer::MAX_ATTEMPT, $this->max_attempt);
		if ($this->isColumnModified(QuizPeer::START_TIME)) $criteria->add(QuizPeer::START_TIME, $this->start_time);
		if ($this->isColumnModified(QuizPeer::END_TIME)) $criteria->add(QuizPeer::END_TIME, $this->end_time);
		if ($this->isColumnModified(QuizPeer::FEEDBACK_TYPE)) $criteria->add(QuizPeer::FEEDBACK_TYPE, $this->feedback_type);

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
		$criteria = new Criteria(QuizPeer::DATABASE_NAME);
		$criteria->add(QuizPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Quiz (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setTitle($this->title);
		$copyObj->setDescription($this->description);
		$copyObj->setSound($this->sound);
		$copyObj->setType($this->type);
		$copyObj->setRandom($this->random);
		$copyObj->setActive($this->active);
		$copyObj->setResultsDisabled($this->results_disabled);
		$copyObj->setAccessCondition($this->access_condition);
		$copyObj->setMaxAttempt($this->max_attempt);
		$copyObj->setStartTime($this->start_time);
		$copyObj->setEndTime($this->end_time);
		$copyObj->setFeedbackType($this->feedback_type);

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
	 * @return     Quiz Clone of current object.
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
	 * @return     QuizPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new QuizPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->title = null;
		$this->description = null;
		$this->sound = null;
		$this->type = null;
		$this->random = null;
		$this->active = null;
		$this->results_disabled = null;
		$this->access_condition = null;
		$this->max_attempt = null;
		$this->start_time = null;
		$this->end_time = null;
		$this->feedback_type = null;
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

} // BaseQuiz
