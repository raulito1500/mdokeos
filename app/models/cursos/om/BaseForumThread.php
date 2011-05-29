<?php


/**
 * Base class that represents a row from the 'forum_thread' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumThread extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ForumThreadPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ForumThreadPeer
	 */
	protected static $peer;

	/**
	 * The value for the thread_id field.
	 * @var        int
	 */
	protected $thread_id;

	/**
	 * The value for the thread_title field.
	 * @var        string
	 */
	protected $thread_title;

	/**
	 * The value for the forum_id field.
	 * @var        int
	 */
	protected $forum_id;

	/**
	 * The value for the thread_replies field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $thread_replies;

	/**
	 * The value for the thread_poster_id field.
	 * @var        int
	 */
	protected $thread_poster_id;

	/**
	 * The value for the thread_poster_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $thread_poster_name;

	/**
	 * The value for the thread_views field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $thread_views;

	/**
	 * The value for the thread_last_post field.
	 * @var        int
	 */
	protected $thread_last_post;

	/**
	 * The value for the thread_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $thread_date;

	/**
	 * The value for the thread_sticky field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $thread_sticky;

	/**
	 * The value for the locked field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $locked;

	/**
	 * The value for the session_id field.
	 * @var        int
	 */
	protected $session_id;

	/**
	 * The value for the thread_title_qualify field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $thread_title_qualify;

	/**
	 * The value for the thread_qualify_max field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $thread_qualify_max;

	/**
	 * The value for the thread_close_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $thread_close_date;

	/**
	 * The value for the thread_weight field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $thread_weight;

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
		$this->thread_replies = 0;
		$this->thread_poster_name = '';
		$this->thread_views = 0;
		$this->thread_date = NULL;
		$this->thread_sticky = 0;
		$this->locked = 0;
		$this->thread_title_qualify = '';
		$this->thread_qualify_max = 0;
		$this->thread_close_date = NULL;
		$this->thread_weight = 0;
	}

	/**
	 * Initializes internal state of BaseForumThread object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [thread_id] column value.
	 * 
	 * @return     int
	 */
	public function getThreadId()
	{
		return $this->thread_id;
	}

	/**
	 * Get the [thread_title] column value.
	 * 
	 * @return     string
	 */
	public function getThreadTitle()
	{
		return $this->thread_title;
	}

	/**
	 * Get the [forum_id] column value.
	 * 
	 * @return     int
	 */
	public function getForumId()
	{
		return $this->forum_id;
	}

	/**
	 * Get the [thread_replies] column value.
	 * 
	 * @return     int
	 */
	public function getThreadReplies()
	{
		return $this->thread_replies;
	}

	/**
	 * Get the [thread_poster_id] column value.
	 * 
	 * @return     int
	 */
	public function getThreadPosterId()
	{
		return $this->thread_poster_id;
	}

	/**
	 * Get the [thread_poster_name] column value.
	 * 
	 * @return     string
	 */
	public function getThreadPosterName()
	{
		return $this->thread_poster_name;
	}

	/**
	 * Get the [thread_views] column value.
	 * 
	 * @return     int
	 */
	public function getThreadViews()
	{
		return $this->thread_views;
	}

	/**
	 * Get the [thread_last_post] column value.
	 * 
	 * @return     int
	 */
	public function getThreadLastPost()
	{
		return $this->thread_last_post;
	}

	/**
	 * Get the [optionally formatted] temporal [thread_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getThreadDate($format = 'Y-m-d H:i:s')
	{
		if ($this->thread_date === null) {
			return null;
		}


		if ($this->thread_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->thread_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->thread_date, true), $x);
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
	 * Get the [thread_sticky] column value.
	 * 
	 * @return     int
	 */
	public function getThreadSticky()
	{
		return $this->thread_sticky;
	}

	/**
	 * Get the [locked] column value.
	 * 
	 * @return     int
	 */
	public function getLocked()
	{
		return $this->locked;
	}

	/**
	 * Get the [session_id] column value.
	 * 
	 * @return     int
	 */
	public function getSessionId()
	{
		return $this->session_id;
	}

	/**
	 * Get the [thread_title_qualify] column value.
	 * 
	 * @return     string
	 */
	public function getThreadTitleQualify()
	{
		return $this->thread_title_qualify;
	}

	/**
	 * Get the [thread_qualify_max] column value.
	 * 
	 * @return     double
	 */
	public function getThreadQualifyMax()
	{
		return $this->thread_qualify_max;
	}

	/**
	 * Get the [optionally formatted] temporal [thread_close_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getThreadCloseDate($format = 'Y-m-d H:i:s')
	{
		if ($this->thread_close_date === null) {
			return null;
		}


		if ($this->thread_close_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->thread_close_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->thread_close_date, true), $x);
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
	 * Get the [thread_weight] column value.
	 * 
	 * @return     double
	 */
	public function getThreadWeight()
	{
		return $this->thread_weight;
	}

	/**
	 * Set the value of [thread_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_id !== $v) {
			$this->thread_id = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_ID;
		}

		return $this;
	} // setThreadId()

	/**
	 * Set the value of [thread_title] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->thread_title !== $v) {
			$this->thread_title = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_TITLE;
		}

		return $this;
	} // setThreadTitle()

	/**
	 * Set the value of [forum_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setForumId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_id !== $v) {
			$this->forum_id = $v;
			$this->modifiedColumns[] = ForumThreadPeer::FORUM_ID;
		}

		return $this;
	} // setForumId()

	/**
	 * Set the value of [thread_replies] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadReplies($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_replies !== $v || $this->isNew()) {
			$this->thread_replies = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_REPLIES;
		}

		return $this;
	} // setThreadReplies()

	/**
	 * Set the value of [thread_poster_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadPosterId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_poster_id !== $v) {
			$this->thread_poster_id = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_POSTER_ID;
		}

		return $this;
	} // setThreadPosterId()

	/**
	 * Set the value of [thread_poster_name] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadPosterName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->thread_poster_name !== $v || $this->isNew()) {
			$this->thread_poster_name = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_POSTER_NAME;
		}

		return $this;
	} // setThreadPosterName()

	/**
	 * Set the value of [thread_views] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadViews($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_views !== $v || $this->isNew()) {
			$this->thread_views = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_VIEWS;
		}

		return $this;
	} // setThreadViews()

	/**
	 * Set the value of [thread_last_post] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadLastPost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_last_post !== $v) {
			$this->thread_last_post = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_LAST_POST;
		}

		return $this;
	} // setThreadLastPost()

	/**
	 * Sets the value of [thread_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadDate($v)
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

		if ( $this->thread_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->thread_date !== null && $tmpDt = new DateTime($this->thread_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->thread_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ForumThreadPeer::THREAD_DATE;
			}
		} // if either are not null

		return $this;
	} // setThreadDate()

	/**
	 * Set the value of [thread_sticky] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadSticky($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_sticky !== $v || $this->isNew()) {
			$this->thread_sticky = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_STICKY;
		}

		return $this;
	} // setThreadSticky()

	/**
	 * Set the value of [locked] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setLocked($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->locked !== $v || $this->isNew()) {
			$this->locked = $v;
			$this->modifiedColumns[] = ForumThreadPeer::LOCKED;
		}

		return $this;
	} // setLocked()

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_id !== $v) {
			$this->session_id = $v;
			$this->modifiedColumns[] = ForumThreadPeer::SESSION_ID;
		}

		return $this;
	} // setSessionId()

	/**
	 * Set the value of [thread_title_qualify] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadTitleQualify($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->thread_title_qualify !== $v || $this->isNew()) {
			$this->thread_title_qualify = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_TITLE_QUALIFY;
		}

		return $this;
	} // setThreadTitleQualify()

	/**
	 * Set the value of [thread_qualify_max] column.
	 * 
	 * @param      double $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadQualifyMax($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->thread_qualify_max !== $v || $this->isNew()) {
			$this->thread_qualify_max = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_QUALIFY_MAX;
		}

		return $this;
	} // setThreadQualifyMax()

	/**
	 * Sets the value of [thread_close_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadCloseDate($v)
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

		if ( $this->thread_close_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->thread_close_date !== null && $tmpDt = new DateTime($this->thread_close_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->thread_close_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ForumThreadPeer::THREAD_CLOSE_DATE;
			}
		} // if either are not null

		return $this;
	} // setThreadCloseDate()

	/**
	 * Set the value of [thread_weight] column.
	 * 
	 * @param      double $v new value
	 * @return     ForumThread The current object (for fluent API support)
	 */
	public function setThreadWeight($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->thread_weight !== $v || $this->isNew()) {
			$this->thread_weight = $v;
			$this->modifiedColumns[] = ForumThreadPeer::THREAD_WEIGHT;
		}

		return $this;
	} // setThreadWeight()

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
			if ($this->thread_replies !== 0) {
				return false;
			}

			if ($this->thread_poster_name !== '') {
				return false;
			}

			if ($this->thread_views !== 0) {
				return false;
			}

			if ($this->thread_date !== NULL) {
				return false;
			}

			if ($this->thread_sticky !== 0) {
				return false;
			}

			if ($this->locked !== 0) {
				return false;
			}

			if ($this->thread_title_qualify !== '') {
				return false;
			}

			if ($this->thread_qualify_max !== 0) {
				return false;
			}

			if ($this->thread_close_date !== NULL) {
				return false;
			}

			if ($this->thread_weight !== 0) {
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

			$this->thread_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->thread_title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->forum_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->thread_replies = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->thread_poster_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->thread_poster_name = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->thread_views = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->thread_last_post = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->thread_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->thread_sticky = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->locked = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->session_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->thread_title_qualify = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->thread_qualify_max = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
			$this->thread_close_date = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->thread_weight = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = ForumThreadPeer::NUM_COLUMNS - ForumThreadPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ForumThread object", $e);
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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ForumThreadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ForumThreadQuery::create()
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
			$con = Propel::getConnection(ForumThreadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ForumThreadPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ForumThreadPeer::THREAD_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ForumThreadPeer::THREAD_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ForumThreadPeer::THREAD_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setThreadId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ForumThreadPeer::doUpdate($this, $con);
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


			if (($retval = ForumThreadPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ForumThreadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getThreadId();
				break;
			case 1:
				return $this->getThreadTitle();
				break;
			case 2:
				return $this->getForumId();
				break;
			case 3:
				return $this->getThreadReplies();
				break;
			case 4:
				return $this->getThreadPosterId();
				break;
			case 5:
				return $this->getThreadPosterName();
				break;
			case 6:
				return $this->getThreadViews();
				break;
			case 7:
				return $this->getThreadLastPost();
				break;
			case 8:
				return $this->getThreadDate();
				break;
			case 9:
				return $this->getThreadSticky();
				break;
			case 10:
				return $this->getLocked();
				break;
			case 11:
				return $this->getSessionId();
				break;
			case 12:
				return $this->getThreadTitleQualify();
				break;
			case 13:
				return $this->getThreadQualifyMax();
				break;
			case 14:
				return $this->getThreadCloseDate();
				break;
			case 15:
				return $this->getThreadWeight();
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
		$keys = ForumThreadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getThreadId(),
			$keys[1] => $this->getThreadTitle(),
			$keys[2] => $this->getForumId(),
			$keys[3] => $this->getThreadReplies(),
			$keys[4] => $this->getThreadPosterId(),
			$keys[5] => $this->getThreadPosterName(),
			$keys[6] => $this->getThreadViews(),
			$keys[7] => $this->getThreadLastPost(),
			$keys[8] => $this->getThreadDate(),
			$keys[9] => $this->getThreadSticky(),
			$keys[10] => $this->getLocked(),
			$keys[11] => $this->getSessionId(),
			$keys[12] => $this->getThreadTitleQualify(),
			$keys[13] => $this->getThreadQualifyMax(),
			$keys[14] => $this->getThreadCloseDate(),
			$keys[15] => $this->getThreadWeight(),
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
		$pos = ForumThreadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setThreadId($value);
				break;
			case 1:
				$this->setThreadTitle($value);
				break;
			case 2:
				$this->setForumId($value);
				break;
			case 3:
				$this->setThreadReplies($value);
				break;
			case 4:
				$this->setThreadPosterId($value);
				break;
			case 5:
				$this->setThreadPosterName($value);
				break;
			case 6:
				$this->setThreadViews($value);
				break;
			case 7:
				$this->setThreadLastPost($value);
				break;
			case 8:
				$this->setThreadDate($value);
				break;
			case 9:
				$this->setThreadSticky($value);
				break;
			case 10:
				$this->setLocked($value);
				break;
			case 11:
				$this->setSessionId($value);
				break;
			case 12:
				$this->setThreadTitleQualify($value);
				break;
			case 13:
				$this->setThreadQualifyMax($value);
				break;
			case 14:
				$this->setThreadCloseDate($value);
				break;
			case 15:
				$this->setThreadWeight($value);
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
		$keys = ForumThreadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setThreadId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setThreadTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setForumId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setThreadReplies($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setThreadPosterId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setThreadPosterName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setThreadViews($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setThreadLastPost($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setThreadDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setThreadSticky($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLocked($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSessionId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setThreadTitleQualify($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setThreadQualifyMax($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setThreadCloseDate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setThreadWeight($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ForumThreadPeer::DATABASE_NAME);

		if ($this->isColumnModified(ForumThreadPeer::THREAD_ID)) $criteria->add(ForumThreadPeer::THREAD_ID, $this->thread_id);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_TITLE)) $criteria->add(ForumThreadPeer::THREAD_TITLE, $this->thread_title);
		if ($this->isColumnModified(ForumThreadPeer::FORUM_ID)) $criteria->add(ForumThreadPeer::FORUM_ID, $this->forum_id);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_REPLIES)) $criteria->add(ForumThreadPeer::THREAD_REPLIES, $this->thread_replies);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_POSTER_ID)) $criteria->add(ForumThreadPeer::THREAD_POSTER_ID, $this->thread_poster_id);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_POSTER_NAME)) $criteria->add(ForumThreadPeer::THREAD_POSTER_NAME, $this->thread_poster_name);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_VIEWS)) $criteria->add(ForumThreadPeer::THREAD_VIEWS, $this->thread_views);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_LAST_POST)) $criteria->add(ForumThreadPeer::THREAD_LAST_POST, $this->thread_last_post);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_DATE)) $criteria->add(ForumThreadPeer::THREAD_DATE, $this->thread_date);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_STICKY)) $criteria->add(ForumThreadPeer::THREAD_STICKY, $this->thread_sticky);
		if ($this->isColumnModified(ForumThreadPeer::LOCKED)) $criteria->add(ForumThreadPeer::LOCKED, $this->locked);
		if ($this->isColumnModified(ForumThreadPeer::SESSION_ID)) $criteria->add(ForumThreadPeer::SESSION_ID, $this->session_id);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_TITLE_QUALIFY)) $criteria->add(ForumThreadPeer::THREAD_TITLE_QUALIFY, $this->thread_title_qualify);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_QUALIFY_MAX)) $criteria->add(ForumThreadPeer::THREAD_QUALIFY_MAX, $this->thread_qualify_max);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_CLOSE_DATE)) $criteria->add(ForumThreadPeer::THREAD_CLOSE_DATE, $this->thread_close_date);
		if ($this->isColumnModified(ForumThreadPeer::THREAD_WEIGHT)) $criteria->add(ForumThreadPeer::THREAD_WEIGHT, $this->thread_weight);

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
		$criteria = new Criteria(ForumThreadPeer::DATABASE_NAME);
		$criteria->add(ForumThreadPeer::THREAD_ID, $this->thread_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getThreadId();
	}

	/**
	 * Generic method to set the primary key (thread_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setThreadId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getThreadId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ForumThread (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setThreadTitle($this->thread_title);
		$copyObj->setForumId($this->forum_id);
		$copyObj->setThreadReplies($this->thread_replies);
		$copyObj->setThreadPosterId($this->thread_poster_id);
		$copyObj->setThreadPosterName($this->thread_poster_name);
		$copyObj->setThreadViews($this->thread_views);
		$copyObj->setThreadLastPost($this->thread_last_post);
		$copyObj->setThreadDate($this->thread_date);
		$copyObj->setThreadSticky($this->thread_sticky);
		$copyObj->setLocked($this->locked);
		$copyObj->setSessionId($this->session_id);
		$copyObj->setThreadTitleQualify($this->thread_title_qualify);
		$copyObj->setThreadQualifyMax($this->thread_qualify_max);
		$copyObj->setThreadCloseDate($this->thread_close_date);
		$copyObj->setThreadWeight($this->thread_weight);

		$copyObj->setNew(true);
		$copyObj->setThreadId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     ForumThread Clone of current object.
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
	 * @return     ForumThreadPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ForumThreadPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->thread_id = null;
		$this->thread_title = null;
		$this->forum_id = null;
		$this->thread_replies = null;
		$this->thread_poster_id = null;
		$this->thread_poster_name = null;
		$this->thread_views = null;
		$this->thread_last_post = null;
		$this->thread_date = null;
		$this->thread_sticky = null;
		$this->locked = null;
		$this->session_id = null;
		$this->thread_title_qualify = null;
		$this->thread_qualify_max = null;
		$this->thread_close_date = null;
		$this->thread_weight = null;
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

} // BaseForumThread
