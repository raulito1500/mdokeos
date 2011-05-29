<?php


/**
 * Base class that represents a row from the 'reservation_main' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationMain extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ReservationMainPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ReservationMainPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the subid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $subid;

	/**
	 * The value for the item_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $item_id;

	/**
	 * The value for the auto_accept field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $auto_accept;

	/**
	 * The value for the max_users field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $max_users;

	/**
	 * The value for the start_at field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $start_at;

	/**
	 * The value for the end_at field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $end_at;

	/**
	 * The value for the subscribe_from field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $subscribe_from;

	/**
	 * The value for the subscribe_until field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $subscribe_until;

	/**
	 * The value for the subscribers field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $subscribers;

	/**
	 * The value for the notes field.
	 * @var        string
	 */
	protected $notes;

	/**
	 * The value for the timepicker field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $timepicker;

	/**
	 * The value for the timepicker_min field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $timepicker_min;

	/**
	 * The value for the timepicker_max field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $timepicker_max;

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
		$this->subid = 0;
		$this->item_id = 0;
		$this->auto_accept = 0;
		$this->max_users = 1;
		$this->start_at = NULL;
		$this->end_at = NULL;
		$this->subscribe_from = NULL;
		$this->subscribe_until = NULL;
		$this->subscribers = 0;
		$this->timepicker = 0;
		$this->timepicker_min = 0;
		$this->timepicker_max = 0;
	}

	/**
	 * Initializes internal state of BaseReservationMain object.
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
	 * Get the [subid] column value.
	 * 
	 * @return     int
	 */
	public function getSubid()
	{
		return $this->subid;
	}

	/**
	 * Get the [item_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemId()
	{
		return $this->item_id;
	}

	/**
	 * Get the [auto_accept] column value.
	 * 
	 * @return     int
	 */
	public function getAutoAccept()
	{
		return $this->auto_accept;
	}

	/**
	 * Get the [max_users] column value.
	 * 
	 * @return     int
	 */
	public function getMaxUsers()
	{
		return $this->max_users;
	}

	/**
	 * Get the [optionally formatted] temporal [start_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartAt($format = 'Y-m-d H:i:s')
	{
		if ($this->start_at === null) {
			return null;
		}


		if ($this->start_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->start_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_at, true), $x);
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
	 * Get the [optionally formatted] temporal [end_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEndAt($format = 'Y-m-d H:i:s')
	{
		if ($this->end_at === null) {
			return null;
		}


		if ($this->end_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->end_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_at, true), $x);
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
	 * Get the [optionally formatted] temporal [subscribe_from] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSubscribeFrom($format = 'Y-m-d H:i:s')
	{
		if ($this->subscribe_from === null) {
			return null;
		}


		if ($this->subscribe_from === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->subscribe_from);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->subscribe_from, true), $x);
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
	 * Get the [optionally formatted] temporal [subscribe_until] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSubscribeUntil($format = 'Y-m-d H:i:s')
	{
		if ($this->subscribe_until === null) {
			return null;
		}


		if ($this->subscribe_until === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->subscribe_until);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->subscribe_until, true), $x);
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
	 * Get the [subscribers] column value.
	 * 
	 * @return     int
	 */
	public function getSubscribers()
	{
		return $this->subscribers;
	}

	/**
	 * Get the [notes] column value.
	 * 
	 * @return     string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

	/**
	 * Get the [timepicker] column value.
	 * 
	 * @return     int
	 */
	public function getTimepicker()
	{
		return $this->timepicker;
	}

	/**
	 * Get the [timepicker_min] column value.
	 * 
	 * @return     int
	 */
	public function getTimepickerMin()
	{
		return $this->timepicker_min;
	}

	/**
	 * Get the [timepicker_max] column value.
	 * 
	 * @return     int
	 */
	public function getTimepickerMax()
	{
		return $this->timepicker_max;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ReservationMainPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [subid] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setSubid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->subid !== $v || $this->isNew()) {
			$this->subid = $v;
			$this->modifiedColumns[] = ReservationMainPeer::SUBID;
		}

		return $this;
	} // setSubid()

	/**
	 * Set the value of [item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->item_id !== $v || $this->isNew()) {
			$this->item_id = $v;
			$this->modifiedColumns[] = ReservationMainPeer::ITEM_ID;
		}

		return $this;
	} // setItemId()

	/**
	 * Set the value of [auto_accept] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setAutoAccept($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auto_accept !== $v || $this->isNew()) {
			$this->auto_accept = $v;
			$this->modifiedColumns[] = ReservationMainPeer::AUTO_ACCEPT;
		}

		return $this;
	} // setAutoAccept()

	/**
	 * Set the value of [max_users] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setMaxUsers($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_users !== $v || $this->isNew()) {
			$this->max_users = $v;
			$this->modifiedColumns[] = ReservationMainPeer::MAX_USERS;
		}

		return $this;
	} // setMaxUsers()

	/**
	 * Sets the value of [start_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setStartAt($v)
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

		if ( $this->start_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->start_at !== null && $tmpDt = new DateTime($this->start_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->start_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReservationMainPeer::START_AT;
			}
		} // if either are not null

		return $this;
	} // setStartAt()

	/**
	 * Sets the value of [end_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setEndAt($v)
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

		if ( $this->end_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->end_at !== null && $tmpDt = new DateTime($this->end_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->end_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReservationMainPeer::END_AT;
			}
		} // if either are not null

		return $this;
	} // setEndAt()

	/**
	 * Sets the value of [subscribe_from] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setSubscribeFrom($v)
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

		if ( $this->subscribe_from !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->subscribe_from !== null && $tmpDt = new DateTime($this->subscribe_from)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->subscribe_from = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReservationMainPeer::SUBSCRIBE_FROM;
			}
		} // if either are not null

		return $this;
	} // setSubscribeFrom()

	/**
	 * Sets the value of [subscribe_until] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setSubscribeUntil($v)
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

		if ( $this->subscribe_until !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->subscribe_until !== null && $tmpDt = new DateTime($this->subscribe_until)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->subscribe_until = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ReservationMainPeer::SUBSCRIBE_UNTIL;
			}
		} // if either are not null

		return $this;
	} // setSubscribeUntil()

	/**
	 * Set the value of [subscribers] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setSubscribers($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->subscribers !== $v || $this->isNew()) {
			$this->subscribers = $v;
			$this->modifiedColumns[] = ReservationMainPeer::SUBSCRIBERS;
		}

		return $this;
	} // setSubscribers()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = ReservationMainPeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Set the value of [timepicker] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setTimepicker($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->timepicker !== $v || $this->isNew()) {
			$this->timepicker = $v;
			$this->modifiedColumns[] = ReservationMainPeer::TIMEPICKER;
		}

		return $this;
	} // setTimepicker()

	/**
	 * Set the value of [timepicker_min] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setTimepickerMin($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->timepicker_min !== $v || $this->isNew()) {
			$this->timepicker_min = $v;
			$this->modifiedColumns[] = ReservationMainPeer::TIMEPICKER_MIN;
		}

		return $this;
	} // setTimepickerMin()

	/**
	 * Set the value of [timepicker_max] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationMain The current object (for fluent API support)
	 */
	public function setTimepickerMax($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->timepicker_max !== $v || $this->isNew()) {
			$this->timepicker_max = $v;
			$this->modifiedColumns[] = ReservationMainPeer::TIMEPICKER_MAX;
		}

		return $this;
	} // setTimepickerMax()

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
			if ($this->subid !== 0) {
				return false;
			}

			if ($this->item_id !== 0) {
				return false;
			}

			if ($this->auto_accept !== 0) {
				return false;
			}

			if ($this->max_users !== 1) {
				return false;
			}

			if ($this->start_at !== NULL) {
				return false;
			}

			if ($this->end_at !== NULL) {
				return false;
			}

			if ($this->subscribe_from !== NULL) {
				return false;
			}

			if ($this->subscribe_until !== NULL) {
				return false;
			}

			if ($this->subscribers !== 0) {
				return false;
			}

			if ($this->timepicker !== 0) {
				return false;
			}

			if ($this->timepicker_min !== 0) {
				return false;
			}

			if ($this->timepicker_max !== 0) {
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
			$this->subid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->item_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->auto_accept = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->max_users = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->start_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->end_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->subscribe_from = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->subscribe_until = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->subscribers = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->notes = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->timepicker = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->timepicker_min = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->timepicker_max = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = ReservationMainPeer::NUM_COLUMNS - ReservationMainPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ReservationMain object", $e);
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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ReservationMainPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ReservationMainQuery::create()
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
			$con = Propel::getConnection(ReservationMainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ReservationMainPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ReservationMainPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ReservationMainPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReservationMainPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ReservationMainPeer::doUpdate($this, $con);
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


			if (($retval = ReservationMainPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ReservationMainPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSubid();
				break;
			case 2:
				return $this->getItemId();
				break;
			case 3:
				return $this->getAutoAccept();
				break;
			case 4:
				return $this->getMaxUsers();
				break;
			case 5:
				return $this->getStartAt();
				break;
			case 6:
				return $this->getEndAt();
				break;
			case 7:
				return $this->getSubscribeFrom();
				break;
			case 8:
				return $this->getSubscribeUntil();
				break;
			case 9:
				return $this->getSubscribers();
				break;
			case 10:
				return $this->getNotes();
				break;
			case 11:
				return $this->getTimepicker();
				break;
			case 12:
				return $this->getTimepickerMin();
				break;
			case 13:
				return $this->getTimepickerMax();
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
		$keys = ReservationMainPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubid(),
			$keys[2] => $this->getItemId(),
			$keys[3] => $this->getAutoAccept(),
			$keys[4] => $this->getMaxUsers(),
			$keys[5] => $this->getStartAt(),
			$keys[6] => $this->getEndAt(),
			$keys[7] => $this->getSubscribeFrom(),
			$keys[8] => $this->getSubscribeUntil(),
			$keys[9] => $this->getSubscribers(),
			$keys[10] => $this->getNotes(),
			$keys[11] => $this->getTimepicker(),
			$keys[12] => $this->getTimepickerMin(),
			$keys[13] => $this->getTimepickerMax(),
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
		$pos = ReservationMainPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSubid($value);
				break;
			case 2:
				$this->setItemId($value);
				break;
			case 3:
				$this->setAutoAccept($value);
				break;
			case 4:
				$this->setMaxUsers($value);
				break;
			case 5:
				$this->setStartAt($value);
				break;
			case 6:
				$this->setEndAt($value);
				break;
			case 7:
				$this->setSubscribeFrom($value);
				break;
			case 8:
				$this->setSubscribeUntil($value);
				break;
			case 9:
				$this->setSubscribers($value);
				break;
			case 10:
				$this->setNotes($value);
				break;
			case 11:
				$this->setTimepicker($value);
				break;
			case 12:
				$this->setTimepickerMin($value);
				break;
			case 13:
				$this->setTimepickerMax($value);
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
		$keys = ReservationMainPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setItemId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAutoAccept($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMaxUsers($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setStartAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEndAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSubscribeFrom($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSubscribeUntil($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSubscribers($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNotes($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTimepicker($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTimepickerMin($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setTimepickerMax($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ReservationMainPeer::DATABASE_NAME);

		if ($this->isColumnModified(ReservationMainPeer::ID)) $criteria->add(ReservationMainPeer::ID, $this->id);
		if ($this->isColumnModified(ReservationMainPeer::SUBID)) $criteria->add(ReservationMainPeer::SUBID, $this->subid);
		if ($this->isColumnModified(ReservationMainPeer::ITEM_ID)) $criteria->add(ReservationMainPeer::ITEM_ID, $this->item_id);
		if ($this->isColumnModified(ReservationMainPeer::AUTO_ACCEPT)) $criteria->add(ReservationMainPeer::AUTO_ACCEPT, $this->auto_accept);
		if ($this->isColumnModified(ReservationMainPeer::MAX_USERS)) $criteria->add(ReservationMainPeer::MAX_USERS, $this->max_users);
		if ($this->isColumnModified(ReservationMainPeer::START_AT)) $criteria->add(ReservationMainPeer::START_AT, $this->start_at);
		if ($this->isColumnModified(ReservationMainPeer::END_AT)) $criteria->add(ReservationMainPeer::END_AT, $this->end_at);
		if ($this->isColumnModified(ReservationMainPeer::SUBSCRIBE_FROM)) $criteria->add(ReservationMainPeer::SUBSCRIBE_FROM, $this->subscribe_from);
		if ($this->isColumnModified(ReservationMainPeer::SUBSCRIBE_UNTIL)) $criteria->add(ReservationMainPeer::SUBSCRIBE_UNTIL, $this->subscribe_until);
		if ($this->isColumnModified(ReservationMainPeer::SUBSCRIBERS)) $criteria->add(ReservationMainPeer::SUBSCRIBERS, $this->subscribers);
		if ($this->isColumnModified(ReservationMainPeer::NOTES)) $criteria->add(ReservationMainPeer::NOTES, $this->notes);
		if ($this->isColumnModified(ReservationMainPeer::TIMEPICKER)) $criteria->add(ReservationMainPeer::TIMEPICKER, $this->timepicker);
		if ($this->isColumnModified(ReservationMainPeer::TIMEPICKER_MIN)) $criteria->add(ReservationMainPeer::TIMEPICKER_MIN, $this->timepicker_min);
		if ($this->isColumnModified(ReservationMainPeer::TIMEPICKER_MAX)) $criteria->add(ReservationMainPeer::TIMEPICKER_MAX, $this->timepicker_max);

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
		$criteria = new Criteria(ReservationMainPeer::DATABASE_NAME);
		$criteria->add(ReservationMainPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of ReservationMain (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setSubid($this->subid);
		$copyObj->setItemId($this->item_id);
		$copyObj->setAutoAccept($this->auto_accept);
		$copyObj->setMaxUsers($this->max_users);
		$copyObj->setStartAt($this->start_at);
		$copyObj->setEndAt($this->end_at);
		$copyObj->setSubscribeFrom($this->subscribe_from);
		$copyObj->setSubscribeUntil($this->subscribe_until);
		$copyObj->setSubscribers($this->subscribers);
		$copyObj->setNotes($this->notes);
		$copyObj->setTimepicker($this->timepicker);
		$copyObj->setTimepickerMin($this->timepicker_min);
		$copyObj->setTimepickerMax($this->timepicker_max);

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
	 * @return     ReservationMain Clone of current object.
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
	 * @return     ReservationMainPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ReservationMainPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->subid = null;
		$this->item_id = null;
		$this->auto_accept = null;
		$this->max_users = null;
		$this->start_at = null;
		$this->end_at = null;
		$this->subscribe_from = null;
		$this->subscribe_until = null;
		$this->subscribers = null;
		$this->notes = null;
		$this->timepicker = null;
		$this->timepicker_min = null;
		$this->timepicker_max = null;
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

} // BaseReservationMain
