<?php


/**
 * Base class that represents a row from the 'wiki_conf' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiConf extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'WikiConfPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        WikiConfPeer
	 */
	protected static $peer;

	/**
	 * The value for the page_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $page_id;

	/**
	 * The value for the task field.
	 * @var        string
	 */
	protected $task;

	/**
	 * The value for the feedback1 field.
	 * @var        string
	 */
	protected $feedback1;

	/**
	 * The value for the feedback2 field.
	 * @var        string
	 */
	protected $feedback2;

	/**
	 * The value for the feedback3 field.
	 * @var        string
	 */
	protected $feedback3;

	/**
	 * The value for the fprogress1 field.
	 * @var        string
	 */
	protected $fprogress1;

	/**
	 * The value for the fprogress2 field.
	 * @var        string
	 */
	protected $fprogress2;

	/**
	 * The value for the fprogress3 field.
	 * @var        string
	 */
	protected $fprogress3;

	/**
	 * The value for the max_size field.
	 * @var        int
	 */
	protected $max_size;

	/**
	 * The value for the max_text field.
	 * @var        int
	 */
	protected $max_text;

	/**
	 * The value for the max_version field.
	 * @var        int
	 */
	protected $max_version;

	/**
	 * The value for the startdate_assig field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $startdate_assig;

	/**
	 * The value for the enddate_assig field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $enddate_assig;

	/**
	 * The value for the delayedsubmit field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $delayedsubmit;

	/**
	 * The value for the id field.
	 * @var        string
	 */
	protected $id;

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
		$this->page_id = 0;
		$this->startdate_assig = NULL;
		$this->enddate_assig = NULL;
		$this->delayedsubmit = 0;
	}

	/**
	 * Initializes internal state of BaseWikiConf object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [page_id] column value.
	 * 
	 * @return     int
	 */
	public function getPageId()
	{
		return $this->page_id;
	}

	/**
	 * Get the [task] column value.
	 * 
	 * @return     string
	 */
	public function getTask()
	{
		return $this->task;
	}

	/**
	 * Get the [feedback1] column value.
	 * 
	 * @return     string
	 */
	public function getFeedback1()
	{
		return $this->feedback1;
	}

	/**
	 * Get the [feedback2] column value.
	 * 
	 * @return     string
	 */
	public function getFeedback2()
	{
		return $this->feedback2;
	}

	/**
	 * Get the [feedback3] column value.
	 * 
	 * @return     string
	 */
	public function getFeedback3()
	{
		return $this->feedback3;
	}

	/**
	 * Get the [fprogress1] column value.
	 * 
	 * @return     string
	 */
	public function getFprogress1()
	{
		return $this->fprogress1;
	}

	/**
	 * Get the [fprogress2] column value.
	 * 
	 * @return     string
	 */
	public function getFprogress2()
	{
		return $this->fprogress2;
	}

	/**
	 * Get the [fprogress3] column value.
	 * 
	 * @return     string
	 */
	public function getFprogress3()
	{
		return $this->fprogress3;
	}

	/**
	 * Get the [max_size] column value.
	 * 
	 * @return     int
	 */
	public function getMaxSize()
	{
		return $this->max_size;
	}

	/**
	 * Get the [max_text] column value.
	 * 
	 * @return     int
	 */
	public function getMaxText()
	{
		return $this->max_text;
	}

	/**
	 * Get the [max_version] column value.
	 * 
	 * @return     int
	 */
	public function getMaxVersion()
	{
		return $this->max_version;
	}

	/**
	 * Get the [optionally formatted] temporal [startdate_assig] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartdateAssig($format = 'Y-m-d H:i:s')
	{
		if ($this->startdate_assig === null) {
			return null;
		}


		if ($this->startdate_assig === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->startdate_assig);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startdate_assig, true), $x);
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
	 * Get the [optionally formatted] temporal [enddate_assig] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEnddateAssig($format = 'Y-m-d H:i:s')
	{
		if ($this->enddate_assig === null) {
			return null;
		}


		if ($this->enddate_assig === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->enddate_assig);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->enddate_assig, true), $x);
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
	 * Get the [delayedsubmit] column value.
	 * 
	 * @return     int
	 */
	public function getDelayedsubmit()
	{
		return $this->delayedsubmit;
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of [page_id] column.
	 * 
	 * @param      int $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setPageId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->page_id !== $v || $this->isNew()) {
			$this->page_id = $v;
			$this->modifiedColumns[] = WikiConfPeer::PAGE_ID;
		}

		return $this;
	} // setPageId()

	/**
	 * Set the value of [task] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setTask($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->task !== $v) {
			$this->task = $v;
			$this->modifiedColumns[] = WikiConfPeer::TASK;
		}

		return $this;
	} // setTask()

	/**
	 * Set the value of [feedback1] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFeedback1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->feedback1 !== $v) {
			$this->feedback1 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FEEDBACK1;
		}

		return $this;
	} // setFeedback1()

	/**
	 * Set the value of [feedback2] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFeedback2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->feedback2 !== $v) {
			$this->feedback2 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FEEDBACK2;
		}

		return $this;
	} // setFeedback2()

	/**
	 * Set the value of [feedback3] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFeedback3($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->feedback3 !== $v) {
			$this->feedback3 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FEEDBACK3;
		}

		return $this;
	} // setFeedback3()

	/**
	 * Set the value of [fprogress1] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFprogress1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fprogress1 !== $v) {
			$this->fprogress1 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FPROGRESS1;
		}

		return $this;
	} // setFprogress1()

	/**
	 * Set the value of [fprogress2] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFprogress2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fprogress2 !== $v) {
			$this->fprogress2 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FPROGRESS2;
		}

		return $this;
	} // setFprogress2()

	/**
	 * Set the value of [fprogress3] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setFprogress3($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fprogress3 !== $v) {
			$this->fprogress3 = $v;
			$this->modifiedColumns[] = WikiConfPeer::FPROGRESS3;
		}

		return $this;
	} // setFprogress3()

	/**
	 * Set the value of [max_size] column.
	 * 
	 * @param      int $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setMaxSize($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_size !== $v) {
			$this->max_size = $v;
			$this->modifiedColumns[] = WikiConfPeer::MAX_SIZE;
		}

		return $this;
	} // setMaxSize()

	/**
	 * Set the value of [max_text] column.
	 * 
	 * @param      int $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setMaxText($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_text !== $v) {
			$this->max_text = $v;
			$this->modifiedColumns[] = WikiConfPeer::MAX_TEXT;
		}

		return $this;
	} // setMaxText()

	/**
	 * Set the value of [max_version] column.
	 * 
	 * @param      int $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setMaxVersion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_version !== $v) {
			$this->max_version = $v;
			$this->modifiedColumns[] = WikiConfPeer::MAX_VERSION;
		}

		return $this;
	} // setMaxVersion()

	/**
	 * Sets the value of [startdate_assig] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setStartdateAssig($v)
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

		if ( $this->startdate_assig !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->startdate_assig !== null && $tmpDt = new DateTime($this->startdate_assig)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->startdate_assig = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = WikiConfPeer::STARTDATE_ASSIG;
			}
		} // if either are not null

		return $this;
	} // setStartdateAssig()

	/**
	 * Sets the value of [enddate_assig] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setEnddateAssig($v)
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

		if ( $this->enddate_assig !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->enddate_assig !== null && $tmpDt = new DateTime($this->enddate_assig)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->enddate_assig = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = WikiConfPeer::ENDDATE_ASSIG;
			}
		} // if either are not null

		return $this;
	} // setEnddateAssig()

	/**
	 * Set the value of [delayedsubmit] column.
	 * 
	 * @param      int $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setDelayedsubmit($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->delayedsubmit !== $v || $this->isNew()) {
			$this->delayedsubmit = $v;
			$this->modifiedColumns[] = WikiConfPeer::DELAYEDSUBMIT;
		}

		return $this;
	} // setDelayedsubmit()

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      string $v new value
	 * @return     WikiConf The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = WikiConfPeer::ID;
		}

		return $this;
	} // setId()

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
			if ($this->page_id !== 0) {
				return false;
			}

			if ($this->startdate_assig !== NULL) {
				return false;
			}

			if ($this->enddate_assig !== NULL) {
				return false;
			}

			if ($this->delayedsubmit !== 0) {
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

			$this->page_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->task = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->feedback1 = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->feedback2 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->feedback3 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->fprogress1 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->fprogress2 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->fprogress3 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->max_size = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->max_text = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->max_version = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->startdate_assig = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->enddate_assig = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->delayedsubmit = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->id = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = WikiConfPeer::NUM_COLUMNS - WikiConfPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating WikiConf object", $e);
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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = WikiConfPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				WikiConfQuery::create()
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
			$con = Propel::getConnection(WikiConfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				WikiConfPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = WikiConfPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(WikiConfPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.WikiConfPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = WikiConfPeer::doUpdate($this, $con);
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


			if (($retval = WikiConfPeer::doValidate($this, $columns)) !== true) {
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
		$pos = WikiConfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPageId();
				break;
			case 1:
				return $this->getTask();
				break;
			case 2:
				return $this->getFeedback1();
				break;
			case 3:
				return $this->getFeedback2();
				break;
			case 4:
				return $this->getFeedback3();
				break;
			case 5:
				return $this->getFprogress1();
				break;
			case 6:
				return $this->getFprogress2();
				break;
			case 7:
				return $this->getFprogress3();
				break;
			case 8:
				return $this->getMaxSize();
				break;
			case 9:
				return $this->getMaxText();
				break;
			case 10:
				return $this->getMaxVersion();
				break;
			case 11:
				return $this->getStartdateAssig();
				break;
			case 12:
				return $this->getEnddateAssig();
				break;
			case 13:
				return $this->getDelayedsubmit();
				break;
			case 14:
				return $this->getId();
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
		$keys = WikiConfPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getPageId(),
			$keys[1] => $this->getTask(),
			$keys[2] => $this->getFeedback1(),
			$keys[3] => $this->getFeedback2(),
			$keys[4] => $this->getFeedback3(),
			$keys[5] => $this->getFprogress1(),
			$keys[6] => $this->getFprogress2(),
			$keys[7] => $this->getFprogress3(),
			$keys[8] => $this->getMaxSize(),
			$keys[9] => $this->getMaxText(),
			$keys[10] => $this->getMaxVersion(),
			$keys[11] => $this->getStartdateAssig(),
			$keys[12] => $this->getEnddateAssig(),
			$keys[13] => $this->getDelayedsubmit(),
			$keys[14] => $this->getId(),
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
		$pos = WikiConfPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPageId($value);
				break;
			case 1:
				$this->setTask($value);
				break;
			case 2:
				$this->setFeedback1($value);
				break;
			case 3:
				$this->setFeedback2($value);
				break;
			case 4:
				$this->setFeedback3($value);
				break;
			case 5:
				$this->setFprogress1($value);
				break;
			case 6:
				$this->setFprogress2($value);
				break;
			case 7:
				$this->setFprogress3($value);
				break;
			case 8:
				$this->setMaxSize($value);
				break;
			case 9:
				$this->setMaxText($value);
				break;
			case 10:
				$this->setMaxVersion($value);
				break;
			case 11:
				$this->setStartdateAssig($value);
				break;
			case 12:
				$this->setEnddateAssig($value);
				break;
			case 13:
				$this->setDelayedsubmit($value);
				break;
			case 14:
				$this->setId($value);
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
		$keys = WikiConfPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setPageId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTask($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFeedback1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFeedback2($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFeedback3($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFprogress1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFprogress2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFprogress3($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMaxSize($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMaxText($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMaxVersion($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setStartdateAssig($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEnddateAssig($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDelayedsubmit($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setId($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(WikiConfPeer::DATABASE_NAME);

		if ($this->isColumnModified(WikiConfPeer::PAGE_ID)) $criteria->add(WikiConfPeer::PAGE_ID, $this->page_id);
		if ($this->isColumnModified(WikiConfPeer::TASK)) $criteria->add(WikiConfPeer::TASK, $this->task);
		if ($this->isColumnModified(WikiConfPeer::FEEDBACK1)) $criteria->add(WikiConfPeer::FEEDBACK1, $this->feedback1);
		if ($this->isColumnModified(WikiConfPeer::FEEDBACK2)) $criteria->add(WikiConfPeer::FEEDBACK2, $this->feedback2);
		if ($this->isColumnModified(WikiConfPeer::FEEDBACK3)) $criteria->add(WikiConfPeer::FEEDBACK3, $this->feedback3);
		if ($this->isColumnModified(WikiConfPeer::FPROGRESS1)) $criteria->add(WikiConfPeer::FPROGRESS1, $this->fprogress1);
		if ($this->isColumnModified(WikiConfPeer::FPROGRESS2)) $criteria->add(WikiConfPeer::FPROGRESS2, $this->fprogress2);
		if ($this->isColumnModified(WikiConfPeer::FPROGRESS3)) $criteria->add(WikiConfPeer::FPROGRESS3, $this->fprogress3);
		if ($this->isColumnModified(WikiConfPeer::MAX_SIZE)) $criteria->add(WikiConfPeer::MAX_SIZE, $this->max_size);
		if ($this->isColumnModified(WikiConfPeer::MAX_TEXT)) $criteria->add(WikiConfPeer::MAX_TEXT, $this->max_text);
		if ($this->isColumnModified(WikiConfPeer::MAX_VERSION)) $criteria->add(WikiConfPeer::MAX_VERSION, $this->max_version);
		if ($this->isColumnModified(WikiConfPeer::STARTDATE_ASSIG)) $criteria->add(WikiConfPeer::STARTDATE_ASSIG, $this->startdate_assig);
		if ($this->isColumnModified(WikiConfPeer::ENDDATE_ASSIG)) $criteria->add(WikiConfPeer::ENDDATE_ASSIG, $this->enddate_assig);
		if ($this->isColumnModified(WikiConfPeer::DELAYEDSUBMIT)) $criteria->add(WikiConfPeer::DELAYEDSUBMIT, $this->delayedsubmit);
		if ($this->isColumnModified(WikiConfPeer::ID)) $criteria->add(WikiConfPeer::ID, $this->id);

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
		$criteria = new Criteria(WikiConfPeer::DATABASE_NAME);
		$criteria->add(WikiConfPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      string $key Primary key.
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
	 * @param      object $copyObj An object of WikiConf (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setPageId($this->page_id);
		$copyObj->setTask($this->task);
		$copyObj->setFeedback1($this->feedback1);
		$copyObj->setFeedback2($this->feedback2);
		$copyObj->setFeedback3($this->feedback3);
		$copyObj->setFprogress1($this->fprogress1);
		$copyObj->setFprogress2($this->fprogress2);
		$copyObj->setFprogress3($this->fprogress3);
		$copyObj->setMaxSize($this->max_size);
		$copyObj->setMaxText($this->max_text);
		$copyObj->setMaxVersion($this->max_version);
		$copyObj->setStartdateAssig($this->startdate_assig);
		$copyObj->setEnddateAssig($this->enddate_assig);
		$copyObj->setDelayedsubmit($this->delayedsubmit);

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
	 * @return     WikiConf Clone of current object.
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
	 * @return     WikiConfPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new WikiConfPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->page_id = null;
		$this->task = null;
		$this->feedback1 = null;
		$this->feedback2 = null;
		$this->feedback3 = null;
		$this->fprogress1 = null;
		$this->fprogress2 = null;
		$this->fprogress3 = null;
		$this->max_size = null;
		$this->max_text = null;
		$this->max_version = null;
		$this->startdate_assig = null;
		$this->enddate_assig = null;
		$this->delayedsubmit = null;
		$this->id = null;
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

} // BaseWikiConf
