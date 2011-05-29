<?php


/**
 * Base class that represents a row from the 'wiki' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWiki extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'WikiPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        WikiPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the page_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $page_id;

	/**
	 * The value for the reflink field.
	 * Note: this column has a database default value of: 'index'
	 * @var        string
	 */
	protected $reflink;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the content field.
	 * @var        string
	 */
	protected $content;

	/**
	 * The value for the user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the group_id field.
	 * @var        int
	 */
	protected $group_id;

	/**
	 * The value for the dtime field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $dtime;

	/**
	 * The value for the addlock field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $addlock;

	/**
	 * The value for the editlock field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $editlock;

	/**
	 * The value for the visibility field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $visibility;

	/**
	 * The value for the addlock_disc field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $addlock_disc;

	/**
	 * The value for the visibility_disc field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $visibility_disc;

	/**
	 * The value for the ratinglock_disc field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $ratinglock_disc;

	/**
	 * The value for the assignment field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $assignment;

	/**
	 * The value for the comment field.
	 * @var        string
	 */
	protected $comment;

	/**
	 * The value for the progress field.
	 * @var        string
	 */
	protected $progress;

	/**
	 * The value for the score field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $score;

	/**
	 * The value for the version field.
	 * @var        int
	 */
	protected $version;

	/**
	 * The value for the is_editing field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_editing;

	/**
	 * The value for the time_edit field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $time_edit;

	/**
	 * The value for the hits field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $hits;

	/**
	 * The value for the linksto field.
	 * @var        string
	 */
	protected $linksto;

	/**
	 * The value for the tag field.
	 * @var        string
	 */
	protected $tag;

	/**
	 * The value for the user_ip field.
	 * @var        string
	 */
	protected $user_ip;

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
		$this->reflink = 'index';
		$this->user_id = 0;
		$this->dtime = NULL;
		$this->addlock = 1;
		$this->editlock = 0;
		$this->visibility = 1;
		$this->addlock_disc = 1;
		$this->visibility_disc = 1;
		$this->ratinglock_disc = 1;
		$this->assignment = 0;
		$this->score = 0;
		$this->is_editing = 0;
		$this->time_edit = NULL;
		$this->hits = 0;
	}

	/**
	 * Initializes internal state of BaseWiki object.
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
	 * Get the [page_id] column value.
	 * 
	 * @return     int
	 */
	public function getPageId()
	{
		return $this->page_id;
	}

	/**
	 * Get the [reflink] column value.
	 * 
	 * @return     string
	 */
	public function getReflink()
	{
		return $this->reflink;
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
	 * Get the [content] column value.
	 * 
	 * @return     string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [group_id] column value.
	 * 
	 * @return     int
	 */
	public function getGroupId()
	{
		return $this->group_id;
	}

	/**
	 * Get the [optionally formatted] temporal [dtime] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDtime($format = 'Y-m-d H:i:s')
	{
		if ($this->dtime === null) {
			return null;
		}


		if ($this->dtime === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->dtime);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dtime, true), $x);
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
	 * Get the [addlock] column value.
	 * 
	 * @return     int
	 */
	public function getAddlock()
	{
		return $this->addlock;
	}

	/**
	 * Get the [editlock] column value.
	 * 
	 * @return     int
	 */
	public function getEditlock()
	{
		return $this->editlock;
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
	 * Get the [addlock_disc] column value.
	 * 
	 * @return     int
	 */
	public function getAddlockDisc()
	{
		return $this->addlock_disc;
	}

	/**
	 * Get the [visibility_disc] column value.
	 * 
	 * @return     int
	 */
	public function getVisibilityDisc()
	{
		return $this->visibility_disc;
	}

	/**
	 * Get the [ratinglock_disc] column value.
	 * 
	 * @return     int
	 */
	public function getRatinglockDisc()
	{
		return $this->ratinglock_disc;
	}

	/**
	 * Get the [assignment] column value.
	 * 
	 * @return     int
	 */
	public function getAssignment()
	{
		return $this->assignment;
	}

	/**
	 * Get the [comment] column value.
	 * 
	 * @return     string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Get the [progress] column value.
	 * 
	 * @return     string
	 */
	public function getProgress()
	{
		return $this->progress;
	}

	/**
	 * Get the [score] column value.
	 * 
	 * @return     int
	 */
	public function getScore()
	{
		return $this->score;
	}

	/**
	 * Get the [version] column value.
	 * 
	 * @return     int
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * Get the [is_editing] column value.
	 * 
	 * @return     int
	 */
	public function getIsEditing()
	{
		return $this->is_editing;
	}

	/**
	 * Get the [optionally formatted] temporal [time_edit] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTimeEdit($format = 'Y-m-d H:i:s')
	{
		if ($this->time_edit === null) {
			return null;
		}


		if ($this->time_edit === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->time_edit);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->time_edit, true), $x);
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
	 * Get the [hits] column value.
	 * 
	 * @return     int
	 */
	public function getHits()
	{
		return $this->hits;
	}

	/**
	 * Get the [linksto] column value.
	 * 
	 * @return     string
	 */
	public function getLinksto()
	{
		return $this->linksto;
	}

	/**
	 * Get the [tag] column value.
	 * 
	 * @return     string
	 */
	public function getTag()
	{
		return $this->tag;
	}

	/**
	 * Get the [user_ip] column value.
	 * 
	 * @return     string
	 */
	public function getUserIp()
	{
		return $this->user_ip;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = WikiPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [page_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setPageId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->page_id !== $v || $this->isNew()) {
			$this->page_id = $v;
			$this->modifiedColumns[] = WikiPeer::PAGE_ID;
		}

		return $this;
	} // setPageId()

	/**
	 * Set the value of [reflink] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setReflink($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reflink !== $v || $this->isNew()) {
			$this->reflink = $v;
			$this->modifiedColumns[] = WikiPeer::REFLINK;
		}

		return $this;
	} // setReflink()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = WikiPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [content] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setContent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = WikiPeer::CONTENT;
		}

		return $this;
	} // setContent()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $this->isNew()) {
			$this->user_id = $v;
			$this->modifiedColumns[] = WikiPeer::USER_ID;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [group_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setGroupId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->group_id !== $v) {
			$this->group_id = $v;
			$this->modifiedColumns[] = WikiPeer::GROUP_ID;
		}

		return $this;
	} // setGroupId()

	/**
	 * Sets the value of [dtime] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setDtime($v)
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

		if ( $this->dtime !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->dtime !== null && $tmpDt = new DateTime($this->dtime)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->dtime = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = WikiPeer::DTIME;
			}
		} // if either are not null

		return $this;
	} // setDtime()

	/**
	 * Set the value of [addlock] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setAddlock($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->addlock !== $v || $this->isNew()) {
			$this->addlock = $v;
			$this->modifiedColumns[] = WikiPeer::ADDLOCK;
		}

		return $this;
	} // setAddlock()

	/**
	 * Set the value of [editlock] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setEditlock($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->editlock !== $v || $this->isNew()) {
			$this->editlock = $v;
			$this->modifiedColumns[] = WikiPeer::EDITLOCK;
		}

		return $this;
	} // setEditlock()

	/**
	 * Set the value of [visibility] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setVisibility($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visibility !== $v || $this->isNew()) {
			$this->visibility = $v;
			$this->modifiedColumns[] = WikiPeer::VISIBILITY;
		}

		return $this;
	} // setVisibility()

	/**
	 * Set the value of [addlock_disc] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setAddlockDisc($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->addlock_disc !== $v || $this->isNew()) {
			$this->addlock_disc = $v;
			$this->modifiedColumns[] = WikiPeer::ADDLOCK_DISC;
		}

		return $this;
	} // setAddlockDisc()

	/**
	 * Set the value of [visibility_disc] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setVisibilityDisc($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visibility_disc !== $v || $this->isNew()) {
			$this->visibility_disc = $v;
			$this->modifiedColumns[] = WikiPeer::VISIBILITY_DISC;
		}

		return $this;
	} // setVisibilityDisc()

	/**
	 * Set the value of [ratinglock_disc] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setRatinglockDisc($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ratinglock_disc !== $v || $this->isNew()) {
			$this->ratinglock_disc = $v;
			$this->modifiedColumns[] = WikiPeer::RATINGLOCK_DISC;
		}

		return $this;
	} // setRatinglockDisc()

	/**
	 * Set the value of [assignment] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setAssignment($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->assignment !== $v || $this->isNew()) {
			$this->assignment = $v;
			$this->modifiedColumns[] = WikiPeer::ASSIGNMENT;
		}

		return $this;
	} // setAssignment()

	/**
	 * Set the value of [comment] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comment !== $v) {
			$this->comment = $v;
			$this->modifiedColumns[] = WikiPeer::COMMENT;
		}

		return $this;
	} // setComment()

	/**
	 * Set the value of [progress] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setProgress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->progress !== $v) {
			$this->progress = $v;
			$this->modifiedColumns[] = WikiPeer::PROGRESS;
		}

		return $this;
	} // setProgress()

	/**
	 * Set the value of [score] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setScore($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->score !== $v || $this->isNew()) {
			$this->score = $v;
			$this->modifiedColumns[] = WikiPeer::SCORE;
		}

		return $this;
	} // setScore()

	/**
	 * Set the value of [version] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setVersion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->version !== $v) {
			$this->version = $v;
			$this->modifiedColumns[] = WikiPeer::VERSION;
		}

		return $this;
	} // setVersion()

	/**
	 * Set the value of [is_editing] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setIsEditing($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_editing !== $v || $this->isNew()) {
			$this->is_editing = $v;
			$this->modifiedColumns[] = WikiPeer::IS_EDITING;
		}

		return $this;
	} // setIsEditing()

	/**
	 * Sets the value of [time_edit] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setTimeEdit($v)
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

		if ( $this->time_edit !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->time_edit !== null && $tmpDt = new DateTime($this->time_edit)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->time_edit = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = WikiPeer::TIME_EDIT;
			}
		} // if either are not null

		return $this;
	} // setTimeEdit()

	/**
	 * Set the value of [hits] column.
	 * 
	 * @param      int $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setHits($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->hits !== $v || $this->isNew()) {
			$this->hits = $v;
			$this->modifiedColumns[] = WikiPeer::HITS;
		}

		return $this;
	} // setHits()

	/**
	 * Set the value of [linksto] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setLinksto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->linksto !== $v) {
			$this->linksto = $v;
			$this->modifiedColumns[] = WikiPeer::LINKSTO;
		}

		return $this;
	} // setLinksto()

	/**
	 * Set the value of [tag] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setTag($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tag !== $v) {
			$this->tag = $v;
			$this->modifiedColumns[] = WikiPeer::TAG;
		}

		return $this;
	} // setTag()

	/**
	 * Set the value of [user_ip] column.
	 * 
	 * @param      string $v new value
	 * @return     Wiki The current object (for fluent API support)
	 */
	public function setUserIp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_ip !== $v) {
			$this->user_ip = $v;
			$this->modifiedColumns[] = WikiPeer::USER_IP;
		}

		return $this;
	} // setUserIp()

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

			if ($this->reflink !== 'index') {
				return false;
			}

			if ($this->user_id !== 0) {
				return false;
			}

			if ($this->dtime !== NULL) {
				return false;
			}

			if ($this->addlock !== 1) {
				return false;
			}

			if ($this->editlock !== 0) {
				return false;
			}

			if ($this->visibility !== 1) {
				return false;
			}

			if ($this->addlock_disc !== 1) {
				return false;
			}

			if ($this->visibility_disc !== 1) {
				return false;
			}

			if ($this->ratinglock_disc !== 1) {
				return false;
			}

			if ($this->assignment !== 0) {
				return false;
			}

			if ($this->score !== 0) {
				return false;
			}

			if ($this->is_editing !== 0) {
				return false;
			}

			if ($this->time_edit !== NULL) {
				return false;
			}

			if ($this->hits !== 0) {
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
			$this->page_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->reflink = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->title = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->content = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->user_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->group_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->dtime = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->addlock = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->editlock = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->visibility = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->addlock_disc = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->visibility_disc = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->ratinglock_disc = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->assignment = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->comment = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->progress = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->score = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->version = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->is_editing = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->time_edit = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->hits = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->linksto = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->tag = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->user_ip = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 25; // 25 = WikiPeer::NUM_COLUMNS - WikiPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Wiki object", $e);
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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = WikiPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				WikiQuery::create()
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
			$con = Propel::getConnection(WikiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				WikiPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = WikiPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(WikiPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.WikiPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = WikiPeer::doUpdate($this, $con);
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


			if (($retval = WikiPeer::doValidate($this, $columns)) !== true) {
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
		$pos = WikiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPageId();
				break;
			case 2:
				return $this->getReflink();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getContent();
				break;
			case 5:
				return $this->getUserId();
				break;
			case 6:
				return $this->getGroupId();
				break;
			case 7:
				return $this->getDtime();
				break;
			case 8:
				return $this->getAddlock();
				break;
			case 9:
				return $this->getEditlock();
				break;
			case 10:
				return $this->getVisibility();
				break;
			case 11:
				return $this->getAddlockDisc();
				break;
			case 12:
				return $this->getVisibilityDisc();
				break;
			case 13:
				return $this->getRatinglockDisc();
				break;
			case 14:
				return $this->getAssignment();
				break;
			case 15:
				return $this->getComment();
				break;
			case 16:
				return $this->getProgress();
				break;
			case 17:
				return $this->getScore();
				break;
			case 18:
				return $this->getVersion();
				break;
			case 19:
				return $this->getIsEditing();
				break;
			case 20:
				return $this->getTimeEdit();
				break;
			case 21:
				return $this->getHits();
				break;
			case 22:
				return $this->getLinksto();
				break;
			case 23:
				return $this->getTag();
				break;
			case 24:
				return $this->getUserIp();
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
		$keys = WikiPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPageId(),
			$keys[2] => $this->getReflink(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getContent(),
			$keys[5] => $this->getUserId(),
			$keys[6] => $this->getGroupId(),
			$keys[7] => $this->getDtime(),
			$keys[8] => $this->getAddlock(),
			$keys[9] => $this->getEditlock(),
			$keys[10] => $this->getVisibility(),
			$keys[11] => $this->getAddlockDisc(),
			$keys[12] => $this->getVisibilityDisc(),
			$keys[13] => $this->getRatinglockDisc(),
			$keys[14] => $this->getAssignment(),
			$keys[15] => $this->getComment(),
			$keys[16] => $this->getProgress(),
			$keys[17] => $this->getScore(),
			$keys[18] => $this->getVersion(),
			$keys[19] => $this->getIsEditing(),
			$keys[20] => $this->getTimeEdit(),
			$keys[21] => $this->getHits(),
			$keys[22] => $this->getLinksto(),
			$keys[23] => $this->getTag(),
			$keys[24] => $this->getUserIp(),
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
		$pos = WikiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPageId($value);
				break;
			case 2:
				$this->setReflink($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setContent($value);
				break;
			case 5:
				$this->setUserId($value);
				break;
			case 6:
				$this->setGroupId($value);
				break;
			case 7:
				$this->setDtime($value);
				break;
			case 8:
				$this->setAddlock($value);
				break;
			case 9:
				$this->setEditlock($value);
				break;
			case 10:
				$this->setVisibility($value);
				break;
			case 11:
				$this->setAddlockDisc($value);
				break;
			case 12:
				$this->setVisibilityDisc($value);
				break;
			case 13:
				$this->setRatinglockDisc($value);
				break;
			case 14:
				$this->setAssignment($value);
				break;
			case 15:
				$this->setComment($value);
				break;
			case 16:
				$this->setProgress($value);
				break;
			case 17:
				$this->setScore($value);
				break;
			case 18:
				$this->setVersion($value);
				break;
			case 19:
				$this->setIsEditing($value);
				break;
			case 20:
				$this->setTimeEdit($value);
				break;
			case 21:
				$this->setHits($value);
				break;
			case 22:
				$this->setLinksto($value);
				break;
			case 23:
				$this->setTag($value);
				break;
			case 24:
				$this->setUserIp($value);
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
		$keys = WikiPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPageId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReflink($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setContent($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUserId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGroupId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDtime($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAddlock($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEditlock($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVisibility($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAddlockDisc($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setVisibilityDisc($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setRatinglockDisc($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAssignment($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setComment($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setProgress($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setScore($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setVersion($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setIsEditing($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTimeEdit($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setHits($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setLinksto($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setTag($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setUserIp($arr[$keys[24]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(WikiPeer::DATABASE_NAME);

		if ($this->isColumnModified(WikiPeer::ID)) $criteria->add(WikiPeer::ID, $this->id);
		if ($this->isColumnModified(WikiPeer::PAGE_ID)) $criteria->add(WikiPeer::PAGE_ID, $this->page_id);
		if ($this->isColumnModified(WikiPeer::REFLINK)) $criteria->add(WikiPeer::REFLINK, $this->reflink);
		if ($this->isColumnModified(WikiPeer::TITLE)) $criteria->add(WikiPeer::TITLE, $this->title);
		if ($this->isColumnModified(WikiPeer::CONTENT)) $criteria->add(WikiPeer::CONTENT, $this->content);
		if ($this->isColumnModified(WikiPeer::USER_ID)) $criteria->add(WikiPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(WikiPeer::GROUP_ID)) $criteria->add(WikiPeer::GROUP_ID, $this->group_id);
		if ($this->isColumnModified(WikiPeer::DTIME)) $criteria->add(WikiPeer::DTIME, $this->dtime);
		if ($this->isColumnModified(WikiPeer::ADDLOCK)) $criteria->add(WikiPeer::ADDLOCK, $this->addlock);
		if ($this->isColumnModified(WikiPeer::EDITLOCK)) $criteria->add(WikiPeer::EDITLOCK, $this->editlock);
		if ($this->isColumnModified(WikiPeer::VISIBILITY)) $criteria->add(WikiPeer::VISIBILITY, $this->visibility);
		if ($this->isColumnModified(WikiPeer::ADDLOCK_DISC)) $criteria->add(WikiPeer::ADDLOCK_DISC, $this->addlock_disc);
		if ($this->isColumnModified(WikiPeer::VISIBILITY_DISC)) $criteria->add(WikiPeer::VISIBILITY_DISC, $this->visibility_disc);
		if ($this->isColumnModified(WikiPeer::RATINGLOCK_DISC)) $criteria->add(WikiPeer::RATINGLOCK_DISC, $this->ratinglock_disc);
		if ($this->isColumnModified(WikiPeer::ASSIGNMENT)) $criteria->add(WikiPeer::ASSIGNMENT, $this->assignment);
		if ($this->isColumnModified(WikiPeer::COMMENT)) $criteria->add(WikiPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(WikiPeer::PROGRESS)) $criteria->add(WikiPeer::PROGRESS, $this->progress);
		if ($this->isColumnModified(WikiPeer::SCORE)) $criteria->add(WikiPeer::SCORE, $this->score);
		if ($this->isColumnModified(WikiPeer::VERSION)) $criteria->add(WikiPeer::VERSION, $this->version);
		if ($this->isColumnModified(WikiPeer::IS_EDITING)) $criteria->add(WikiPeer::IS_EDITING, $this->is_editing);
		if ($this->isColumnModified(WikiPeer::TIME_EDIT)) $criteria->add(WikiPeer::TIME_EDIT, $this->time_edit);
		if ($this->isColumnModified(WikiPeer::HITS)) $criteria->add(WikiPeer::HITS, $this->hits);
		if ($this->isColumnModified(WikiPeer::LINKSTO)) $criteria->add(WikiPeer::LINKSTO, $this->linksto);
		if ($this->isColumnModified(WikiPeer::TAG)) $criteria->add(WikiPeer::TAG, $this->tag);
		if ($this->isColumnModified(WikiPeer::USER_IP)) $criteria->add(WikiPeer::USER_IP, $this->user_ip);

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
		$criteria = new Criteria(WikiPeer::DATABASE_NAME);
		$criteria->add(WikiPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Wiki (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setPageId($this->page_id);
		$copyObj->setReflink($this->reflink);
		$copyObj->setTitle($this->title);
		$copyObj->setContent($this->content);
		$copyObj->setUserId($this->user_id);
		$copyObj->setGroupId($this->group_id);
		$copyObj->setDtime($this->dtime);
		$copyObj->setAddlock($this->addlock);
		$copyObj->setEditlock($this->editlock);
		$copyObj->setVisibility($this->visibility);
		$copyObj->setAddlockDisc($this->addlock_disc);
		$copyObj->setVisibilityDisc($this->visibility_disc);
		$copyObj->setRatinglockDisc($this->ratinglock_disc);
		$copyObj->setAssignment($this->assignment);
		$copyObj->setComment($this->comment);
		$copyObj->setProgress($this->progress);
		$copyObj->setScore($this->score);
		$copyObj->setVersion($this->version);
		$copyObj->setIsEditing($this->is_editing);
		$copyObj->setTimeEdit($this->time_edit);
		$copyObj->setHits($this->hits);
		$copyObj->setLinksto($this->linksto);
		$copyObj->setTag($this->tag);
		$copyObj->setUserIp($this->user_ip);

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
	 * @return     Wiki Clone of current object.
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
	 * @return     WikiPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new WikiPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->page_id = null;
		$this->reflink = null;
		$this->title = null;
		$this->content = null;
		$this->user_id = null;
		$this->group_id = null;
		$this->dtime = null;
		$this->addlock = null;
		$this->editlock = null;
		$this->visibility = null;
		$this->addlock_disc = null;
		$this->visibility_disc = null;
		$this->ratinglock_disc = null;
		$this->assignment = null;
		$this->comment = null;
		$this->progress = null;
		$this->score = null;
		$this->version = null;
		$this->is_editing = null;
		$this->time_edit = null;
		$this->hits = null;
		$this->linksto = null;
		$this->tag = null;
		$this->user_ip = null;
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

} // BaseWiki
