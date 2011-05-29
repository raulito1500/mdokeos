<?php


/**
 * Base class that represents a row from the 'item_property' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseItemProperty extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ItemPropertyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ItemPropertyPeer
	 */
	protected static $peer;

	/**
	 * The value for the tool field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tool;

	/**
	 * The value for the insert_user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $insert_user_id;

	/**
	 * The value for the insert_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $insert_date;

	/**
	 * The value for the lastedit_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $lastedit_date;

	/**
	 * The value for the ref field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $ref;

	/**
	 * The value for the lastedit_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $lastedit_type;

	/**
	 * The value for the lastedit_user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $lastedit_user_id;

	/**
	 * The value for the to_group_id field.
	 * @var        int
	 */
	protected $to_group_id;

	/**
	 * The value for the to_user_id field.
	 * @var        int
	 */
	protected $to_user_id;

	/**
	 * The value for the visibility field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $visibility;

	/**
	 * The value for the start_visible field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $start_visible;

	/**
	 * The value for the end_visible field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $end_visible;

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
		$this->tool = '';
		$this->insert_user_id = 0;
		$this->insert_date = NULL;
		$this->lastedit_date = NULL;
		$this->ref = 0;
		$this->lastedit_type = '';
		$this->lastedit_user_id = 0;
		$this->visibility = 1;
		$this->start_visible = NULL;
		$this->end_visible = NULL;
	}

	/**
	 * Initializes internal state of BaseItemProperty object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [tool] column value.
	 * 
	 * @return     string
	 */
	public function getTool()
	{
		return $this->tool;
	}

	/**
	 * Get the [insert_user_id] column value.
	 * 
	 * @return     int
	 */
	public function getInsertUserId()
	{
		return $this->insert_user_id;
	}

	/**
	 * Get the [optionally formatted] temporal [insert_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getInsertDate($format = 'Y-m-d H:i:s')
	{
		if ($this->insert_date === null) {
			return null;
		}


		if ($this->insert_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->insert_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->insert_date, true), $x);
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
	 * Get the [optionally formatted] temporal [lastedit_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLasteditDate($format = 'Y-m-d H:i:s')
	{
		if ($this->lastedit_date === null) {
			return null;
		}


		if ($this->lastedit_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->lastedit_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastedit_date, true), $x);
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
	 * Get the [ref] column value.
	 * 
	 * @return     int
	 */
	public function getRef()
	{
		return $this->ref;
	}

	/**
	 * Get the [lastedit_type] column value.
	 * 
	 * @return     string
	 */
	public function getLasteditType()
	{
		return $this->lastedit_type;
	}

	/**
	 * Get the [lastedit_user_id] column value.
	 * 
	 * @return     int
	 */
	public function getLasteditUserId()
	{
		return $this->lastedit_user_id;
	}

	/**
	 * Get the [to_group_id] column value.
	 * 
	 * @return     int
	 */
	public function getToGroupId()
	{
		return $this->to_group_id;
	}

	/**
	 * Get the [to_user_id] column value.
	 * 
	 * @return     int
	 */
	public function getToUserId()
	{
		return $this->to_user_id;
	}

	/**
	 * Get the [visibility] column value.
	 * 
	 * @return     int
	 */
	public function getVisibility()
	{
		return $this->visibility;
	}

	/**
	 * Get the [optionally formatted] temporal [start_visible] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartVisible($format = 'Y-m-d H:i:s')
	{
		if ($this->start_visible === null) {
			return null;
		}


		if ($this->start_visible === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->start_visible);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_visible, true), $x);
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
	 * Get the [optionally formatted] temporal [end_visible] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEndVisible($format = 'Y-m-d H:i:s')
	{
		if ($this->end_visible === null) {
			return null;
		}


		if ($this->end_visible === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->end_visible);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_visible, true), $x);
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
	 * Get the [id] column value.
	 * 
	 * @return     string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of [tool] column.
	 * 
	 * @param      string $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setTool($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tool !== $v || $this->isNew()) {
			$this->tool = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::TOOL;
		}

		return $this;
	} // setTool()

	/**
	 * Set the value of [insert_user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setInsertUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->insert_user_id !== $v || $this->isNew()) {
			$this->insert_user_id = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::INSERT_USER_ID;
		}

		return $this;
	} // setInsertUserId()

	/**
	 * Sets the value of [insert_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setInsertDate($v)
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

		if ( $this->insert_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->insert_date !== null && $tmpDt = new DateTime($this->insert_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->insert_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ItemPropertyPeer::INSERT_DATE;
			}
		} // if either are not null

		return $this;
	} // setInsertDate()

	/**
	 * Sets the value of [lastedit_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setLasteditDate($v)
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

		if ( $this->lastedit_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->lastedit_date !== null && $tmpDt = new DateTime($this->lastedit_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->lastedit_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ItemPropertyPeer::LASTEDIT_DATE;
			}
		} // if either are not null

		return $this;
	} // setLasteditDate()

	/**
	 * Set the value of [ref] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setRef($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ref !== $v || $this->isNew()) {
			$this->ref = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::REF;
		}

		return $this;
	} // setRef()

	/**
	 * Set the value of [lastedit_type] column.
	 * 
	 * @param      string $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setLasteditType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lastedit_type !== $v || $this->isNew()) {
			$this->lastedit_type = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::LASTEDIT_TYPE;
		}

		return $this;
	} // setLasteditType()

	/**
	 * Set the value of [lastedit_user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setLasteditUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lastedit_user_id !== $v || $this->isNew()) {
			$this->lastedit_user_id = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::LASTEDIT_USER_ID;
		}

		return $this;
	} // setLasteditUserId()

	/**
	 * Set the value of [to_group_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setToGroupId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->to_group_id !== $v) {
			$this->to_group_id = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::TO_GROUP_ID;
		}

		return $this;
	} // setToGroupId()

	/**
	 * Set the value of [to_user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setToUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->to_user_id !== $v) {
			$this->to_user_id = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::TO_USER_ID;
		}

		return $this;
	} // setToUserId()

	/**
	 * Set the value of [visibility] column.
	 * 
	 * @param      int $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setVisibility($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visibility !== $v || $this->isNew()) {
			$this->visibility = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::VISIBILITY;
		}

		return $this;
	} // setVisibility()

	/**
	 * Sets the value of [start_visible] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setStartVisible($v)
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

		if ( $this->start_visible !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->start_visible !== null && $tmpDt = new DateTime($this->start_visible)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->start_visible = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ItemPropertyPeer::START_VISIBLE;
			}
		} // if either are not null

		return $this;
	} // setStartVisible()

	/**
	 * Sets the value of [end_visible] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setEndVisible($v)
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

		if ( $this->end_visible !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->end_visible !== null && $tmpDt = new DateTime($this->end_visible)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->end_visible = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ItemPropertyPeer::END_VISIBLE;
			}
		} // if either are not null

		return $this;
	} // setEndVisible()

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      string $v new value
	 * @return     ItemProperty The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ItemPropertyPeer::ID;
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
			if ($this->tool !== '') {
				return false;
			}

			if ($this->insert_user_id !== 0) {
				return false;
			}

			if ($this->insert_date !== NULL) {
				return false;
			}

			if ($this->lastedit_date !== NULL) {
				return false;
			}

			if ($this->ref !== 0) {
				return false;
			}

			if ($this->lastedit_type !== '') {
				return false;
			}

			if ($this->lastedit_user_id !== 0) {
				return false;
			}

			if ($this->visibility !== 1) {
				return false;
			}

			if ($this->start_visible !== NULL) {
				return false;
			}

			if ($this->end_visible !== NULL) {
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

			$this->tool = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->insert_user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->insert_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->lastedit_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->lastedit_type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->lastedit_user_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->to_group_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->to_user_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->visibility = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->start_visible = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->end_visible = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->id = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = ItemPropertyPeer::NUM_COLUMNS - ItemPropertyPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ItemProperty object", $e);
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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ItemPropertyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ItemPropertyQuery::create()
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
			$con = Propel::getConnection(ItemPropertyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ItemPropertyPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ItemPropertyPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ItemPropertyPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ItemPropertyPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ItemPropertyPeer::doUpdate($this, $con);
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


			if (($retval = ItemPropertyPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ItemPropertyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTool();
				break;
			case 1:
				return $this->getInsertUserId();
				break;
			case 2:
				return $this->getInsertDate();
				break;
			case 3:
				return $this->getLasteditDate();
				break;
			case 4:
				return $this->getRef();
				break;
			case 5:
				return $this->getLasteditType();
				break;
			case 6:
				return $this->getLasteditUserId();
				break;
			case 7:
				return $this->getToGroupId();
				break;
			case 8:
				return $this->getToUserId();
				break;
			case 9:
				return $this->getVisibility();
				break;
			case 10:
				return $this->getStartVisible();
				break;
			case 11:
				return $this->getEndVisible();
				break;
			case 12:
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
		$keys = ItemPropertyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTool(),
			$keys[1] => $this->getInsertUserId(),
			$keys[2] => $this->getInsertDate(),
			$keys[3] => $this->getLasteditDate(),
			$keys[4] => $this->getRef(),
			$keys[5] => $this->getLasteditType(),
			$keys[6] => $this->getLasteditUserId(),
			$keys[7] => $this->getToGroupId(),
			$keys[8] => $this->getToUserId(),
			$keys[9] => $this->getVisibility(),
			$keys[10] => $this->getStartVisible(),
			$keys[11] => $this->getEndVisible(),
			$keys[12] => $this->getId(),
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
		$pos = ItemPropertyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTool($value);
				break;
			case 1:
				$this->setInsertUserId($value);
				break;
			case 2:
				$this->setInsertDate($value);
				break;
			case 3:
				$this->setLasteditDate($value);
				break;
			case 4:
				$this->setRef($value);
				break;
			case 5:
				$this->setLasteditType($value);
				break;
			case 6:
				$this->setLasteditUserId($value);
				break;
			case 7:
				$this->setToGroupId($value);
				break;
			case 8:
				$this->setToUserId($value);
				break;
			case 9:
				$this->setVisibility($value);
				break;
			case 10:
				$this->setStartVisible($value);
				break;
			case 11:
				$this->setEndVisible($value);
				break;
			case 12:
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
		$keys = ItemPropertyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTool($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setInsertUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setInsertDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLasteditDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRef($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLasteditType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLasteditUserId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setToGroupId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setToUserId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setVisibility($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setStartVisible($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEndVisible($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setId($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ItemPropertyPeer::DATABASE_NAME);

		if ($this->isColumnModified(ItemPropertyPeer::TOOL)) $criteria->add(ItemPropertyPeer::TOOL, $this->tool);
		if ($this->isColumnModified(ItemPropertyPeer::INSERT_USER_ID)) $criteria->add(ItemPropertyPeer::INSERT_USER_ID, $this->insert_user_id);
		if ($this->isColumnModified(ItemPropertyPeer::INSERT_DATE)) $criteria->add(ItemPropertyPeer::INSERT_DATE, $this->insert_date);
		if ($this->isColumnModified(ItemPropertyPeer::LASTEDIT_DATE)) $criteria->add(ItemPropertyPeer::LASTEDIT_DATE, $this->lastedit_date);
		if ($this->isColumnModified(ItemPropertyPeer::REF)) $criteria->add(ItemPropertyPeer::REF, $this->ref);
		if ($this->isColumnModified(ItemPropertyPeer::LASTEDIT_TYPE)) $criteria->add(ItemPropertyPeer::LASTEDIT_TYPE, $this->lastedit_type);
		if ($this->isColumnModified(ItemPropertyPeer::LASTEDIT_USER_ID)) $criteria->add(ItemPropertyPeer::LASTEDIT_USER_ID, $this->lastedit_user_id);
		if ($this->isColumnModified(ItemPropertyPeer::TO_GROUP_ID)) $criteria->add(ItemPropertyPeer::TO_GROUP_ID, $this->to_group_id);
		if ($this->isColumnModified(ItemPropertyPeer::TO_USER_ID)) $criteria->add(ItemPropertyPeer::TO_USER_ID, $this->to_user_id);
		if ($this->isColumnModified(ItemPropertyPeer::VISIBILITY)) $criteria->add(ItemPropertyPeer::VISIBILITY, $this->visibility);
		if ($this->isColumnModified(ItemPropertyPeer::START_VISIBLE)) $criteria->add(ItemPropertyPeer::START_VISIBLE, $this->start_visible);
		if ($this->isColumnModified(ItemPropertyPeer::END_VISIBLE)) $criteria->add(ItemPropertyPeer::END_VISIBLE, $this->end_visible);
		if ($this->isColumnModified(ItemPropertyPeer::ID)) $criteria->add(ItemPropertyPeer::ID, $this->id);

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
		$criteria = new Criteria(ItemPropertyPeer::DATABASE_NAME);
		$criteria->add(ItemPropertyPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of ItemProperty (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setTool($this->tool);
		$copyObj->setInsertUserId($this->insert_user_id);
		$copyObj->setInsertDate($this->insert_date);
		$copyObj->setLasteditDate($this->lastedit_date);
		$copyObj->setRef($this->ref);
		$copyObj->setLasteditType($this->lastedit_type);
		$copyObj->setLasteditUserId($this->lastedit_user_id);
		$copyObj->setToGroupId($this->to_group_id);
		$copyObj->setToUserId($this->to_user_id);
		$copyObj->setVisibility($this->visibility);
		$copyObj->setStartVisible($this->start_visible);
		$copyObj->setEndVisible($this->end_visible);

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
	 * @return     ItemProperty Clone of current object.
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
	 * @return     ItemPropertyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ItemPropertyPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->tool = null;
		$this->insert_user_id = null;
		$this->insert_date = null;
		$this->lastedit_date = null;
		$this->ref = null;
		$this->lastedit_type = null;
		$this->lastedit_user_id = null;
		$this->to_group_id = null;
		$this->to_user_id = null;
		$this->visibility = null;
		$this->start_visible = null;
		$this->end_visible = null;
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

} // BaseItemProperty
