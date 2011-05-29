<?php


/**
 * Base class that represents a row from the 'course' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourse extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CoursePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CoursePeer
	 */
	protected static $peer;

	/**
	 * The value for the code field.
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the directory field.
	 * @var        string
	 */
	protected $directory;

	/**
	 * The value for the db_name field.
	 * @var        string
	 */
	protected $db_name;

	/**
	 * The value for the course_language field.
	 * @var        string
	 */
	protected $course_language;

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
	 * The value for the category_code field.
	 * @var        string
	 */
	protected $category_code;

	/**
	 * The value for the visibility field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $visibility;

	/**
	 * The value for the show_score field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $show_score;

	/**
	 * The value for the tutor_name field.
	 * @var        string
	 */
	protected $tutor_name;

	/**
	 * The value for the visual_code field.
	 * @var        string
	 */
	protected $visual_code;

	/**
	 * The value for the department_name field.
	 * @var        string
	 */
	protected $department_name;

	/**
	 * The value for the department_url field.
	 * @var        string
	 */
	protected $department_url;

	/**
	 * The value for the disk_quota field.
	 * @var        int
	 */
	protected $disk_quota;

	/**
	 * The value for the last_visit field.
	 * @var        string
	 */
	protected $last_visit;

	/**
	 * The value for the last_edit field.
	 * @var        string
	 */
	protected $last_edit;

	/**
	 * The value for the creation_date field.
	 * @var        string
	 */
	protected $creation_date;

	/**
	 * The value for the expiration_date field.
	 * @var        string
	 */
	protected $expiration_date;

	/**
	 * The value for the target_course_code field.
	 * @var        string
	 */
	protected $target_course_code;

	/**
	 * The value for the subscribe field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $subscribe;

	/**
	 * The value for the unsubscribe field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $unsubscribe;

	/**
	 * The value for the registration_code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $registration_code;

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
		$this->visibility = 0;
		$this->show_score = 1;
		$this->subscribe = 1;
		$this->unsubscribe = 1;
		$this->registration_code = '';
	}

	/**
	 * Initializes internal state of BaseCourse object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [directory] column value.
	 * 
	 * @return     string
	 */
	public function getDirectory()
	{
		return $this->directory;
	}

	/**
	 * Get the [db_name] column value.
	 * 
	 * @return     string
	 */
	public function getDbName()
	{
		return $this->db_name;
	}

	/**
	 * Get the [course_language] column value.
	 * 
	 * @return     string
	 */
	public function getCourseLanguage()
	{
		return $this->course_language;
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
	 * Get the [category_code] column value.
	 * 
	 * @return     string
	 */
	public function getCategoryCode()
	{
		return $this->category_code;
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
	 * Get the [show_score] column value.
	 * 
	 * @return     int
	 */
	public function getShowScore()
	{
		return $this->show_score;
	}

	/**
	 * Get the [tutor_name] column value.
	 * 
	 * @return     string
	 */
	public function getTutorName()
	{
		return $this->tutor_name;
	}

	/**
	 * Get the [visual_code] column value.
	 * 
	 * @return     string
	 */
	public function getVisualCode()
	{
		return $this->visual_code;
	}

	/**
	 * Get the [department_name] column value.
	 * 
	 * @return     string
	 */
	public function getDepartmentName()
	{
		return $this->department_name;
	}

	/**
	 * Get the [department_url] column value.
	 * 
	 * @return     string
	 */
	public function getDepartmentUrl()
	{
		return $this->department_url;
	}

	/**
	 * Get the [disk_quota] column value.
	 * 
	 * @return     int
	 */
	public function getDiskQuota()
	{
		return $this->disk_quota;
	}

	/**
	 * Get the [optionally formatted] temporal [last_visit] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastVisit($format = 'Y-m-d H:i:s')
	{
		if ($this->last_visit === null) {
			return null;
		}


		if ($this->last_visit === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_visit);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_visit, true), $x);
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
	 * Get the [optionally formatted] temporal [last_edit] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastEdit($format = 'Y-m-d H:i:s')
	{
		if ($this->last_edit === null) {
			return null;
		}


		if ($this->last_edit === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_edit);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_edit, true), $x);
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
	 * Get the [optionally formatted] temporal [expiration_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getExpirationDate($format = 'Y-m-d H:i:s')
	{
		if ($this->expiration_date === null) {
			return null;
		}


		if ($this->expiration_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->expiration_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expiration_date, true), $x);
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
	 * Get the [target_course_code] column value.
	 * 
	 * @return     string
	 */
	public function getTargetCourseCode()
	{
		return $this->target_course_code;
	}

	/**
	 * Get the [subscribe] column value.
	 * 
	 * @return     int
	 */
	public function getSubscribe()
	{
		return $this->subscribe;
	}

	/**
	 * Get the [unsubscribe] column value.
	 * 
	 * @return     int
	 */
	public function getUnsubscribe()
	{
		return $this->unsubscribe;
	}

	/**
	 * Get the [registration_code] column value.
	 * 
	 * @return     string
	 */
	public function getRegistrationCode()
	{
		return $this->registration_code;
	}

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = CoursePeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [directory] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDirectory($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->directory !== $v) {
			$this->directory = $v;
			$this->modifiedColumns[] = CoursePeer::DIRECTORY;
		}

		return $this;
	} // setDirectory()

	/**
	 * Set the value of [db_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDbName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->db_name !== $v) {
			$this->db_name = $v;
			$this->modifiedColumns[] = CoursePeer::DB_NAME;
		}

		return $this;
	} // setDbName()

	/**
	 * Set the value of [course_language] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setCourseLanguage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->course_language !== $v) {
			$this->course_language = $v;
			$this->modifiedColumns[] = CoursePeer::COURSE_LANGUAGE;
		}

		return $this;
	} // setCourseLanguage()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = CoursePeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = CoursePeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [category_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setCategoryCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->category_code !== $v) {
			$this->category_code = $v;
			$this->modifiedColumns[] = CoursePeer::CATEGORY_CODE;
		}

		return $this;
	} // setCategoryCode()

	/**
	 * Set the value of [visibility] column.
	 * 
	 * @param      int $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setVisibility($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visibility !== $v || $this->isNew()) {
			$this->visibility = $v;
			$this->modifiedColumns[] = CoursePeer::VISIBILITY;
		}

		return $this;
	} // setVisibility()

	/**
	 * Set the value of [show_score] column.
	 * 
	 * @param      int $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setShowScore($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->show_score !== $v || $this->isNew()) {
			$this->show_score = $v;
			$this->modifiedColumns[] = CoursePeer::SHOW_SCORE;
		}

		return $this;
	} // setShowScore()

	/**
	 * Set the value of [tutor_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setTutorName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tutor_name !== $v) {
			$this->tutor_name = $v;
			$this->modifiedColumns[] = CoursePeer::TUTOR_NAME;
		}

		return $this;
	} // setTutorName()

	/**
	 * Set the value of [visual_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setVisualCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->visual_code !== $v) {
			$this->visual_code = $v;
			$this->modifiedColumns[] = CoursePeer::VISUAL_CODE;
		}

		return $this;
	} // setVisualCode()

	/**
	 * Set the value of [department_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDepartmentName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->department_name !== $v) {
			$this->department_name = $v;
			$this->modifiedColumns[] = CoursePeer::DEPARTMENT_NAME;
		}

		return $this;
	} // setDepartmentName()

	/**
	 * Set the value of [department_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDepartmentUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->department_url !== $v) {
			$this->department_url = $v;
			$this->modifiedColumns[] = CoursePeer::DEPARTMENT_URL;
		}

		return $this;
	} // setDepartmentUrl()

	/**
	 * Set the value of [disk_quota] column.
	 * 
	 * @param      int $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setDiskQuota($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->disk_quota !== $v) {
			$this->disk_quota = $v;
			$this->modifiedColumns[] = CoursePeer::DISK_QUOTA;
		}

		return $this;
	} // setDiskQuota()

	/**
	 * Sets the value of [last_visit] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Course The current object (for fluent API support)
	 */
	public function setLastVisit($v)
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

		if ( $this->last_visit !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->last_visit !== null && $tmpDt = new DateTime($this->last_visit)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->last_visit = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CoursePeer::LAST_VISIT;
			}
		} // if either are not null

		return $this;
	} // setLastVisit()

	/**
	 * Sets the value of [last_edit] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Course The current object (for fluent API support)
	 */
	public function setLastEdit($v)
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

		if ( $this->last_edit !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->last_edit !== null && $tmpDt = new DateTime($this->last_edit)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->last_edit = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CoursePeer::LAST_EDIT;
			}
		} // if either are not null

		return $this;
	} // setLastEdit()

	/**
	 * Sets the value of [creation_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Course The current object (for fluent API support)
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
					)
			{
				$this->creation_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CoursePeer::CREATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setCreationDate()

	/**
	 * Sets the value of [expiration_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Course The current object (for fluent API support)
	 */
	public function setExpirationDate($v)
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

		if ( $this->expiration_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->expiration_date !== null && $tmpDt = new DateTime($this->expiration_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->expiration_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CoursePeer::EXPIRATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setExpirationDate()

	/**
	 * Set the value of [target_course_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setTargetCourseCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->target_course_code !== $v) {
			$this->target_course_code = $v;
			$this->modifiedColumns[] = CoursePeer::TARGET_COURSE_CODE;
		}

		return $this;
	} // setTargetCourseCode()

	/**
	 * Set the value of [subscribe] column.
	 * 
	 * @param      int $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setSubscribe($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->subscribe !== $v || $this->isNew()) {
			$this->subscribe = $v;
			$this->modifiedColumns[] = CoursePeer::SUBSCRIBE;
		}

		return $this;
	} // setSubscribe()

	/**
	 * Set the value of [unsubscribe] column.
	 * 
	 * @param      int $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setUnsubscribe($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->unsubscribe !== $v || $this->isNew()) {
			$this->unsubscribe = $v;
			$this->modifiedColumns[] = CoursePeer::UNSUBSCRIBE;
		}

		return $this;
	} // setUnsubscribe()

	/**
	 * Set the value of [registration_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Course The current object (for fluent API support)
	 */
	public function setRegistrationCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->registration_code !== $v || $this->isNew()) {
			$this->registration_code = $v;
			$this->modifiedColumns[] = CoursePeer::REGISTRATION_CODE;
		}

		return $this;
	} // setRegistrationCode()

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
			if ($this->visibility !== 0) {
				return false;
			}

			if ($this->show_score !== 1) {
				return false;
			}

			if ($this->subscribe !== 1) {
				return false;
			}

			if ($this->unsubscribe !== 1) {
				return false;
			}

			if ($this->registration_code !== '') {
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

			$this->code = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->directory = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->db_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->course_language = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->category_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->visibility = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->show_score = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->tutor_name = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->visual_code = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->department_name = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->department_url = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->disk_quota = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->last_visit = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->last_edit = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->creation_date = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->expiration_date = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->target_course_code = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->subscribe = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->unsubscribe = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->registration_code = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 22; // 22 = CoursePeer::NUM_COLUMNS - CoursePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Course object", $e);
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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CoursePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CourseQuery::create()
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
			$con = Propel::getConnection(CoursePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CoursePeer::addInstanceToPool($this);
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


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setNew(false);
				} else {
					$affectedRows = CoursePeer::doUpdate($this, $con);
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


			if (($retval = CoursePeer::doValidate($this, $columns)) !== true) {
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
		$pos = CoursePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCode();
				break;
			case 1:
				return $this->getDirectory();
				break;
			case 2:
				return $this->getDbName();
				break;
			case 3:
				return $this->getCourseLanguage();
				break;
			case 4:
				return $this->getTitle();
				break;
			case 5:
				return $this->getDescription();
				break;
			case 6:
				return $this->getCategoryCode();
				break;
			case 7:
				return $this->getVisibility();
				break;
			case 8:
				return $this->getShowScore();
				break;
			case 9:
				return $this->getTutorName();
				break;
			case 10:
				return $this->getVisualCode();
				break;
			case 11:
				return $this->getDepartmentName();
				break;
			case 12:
				return $this->getDepartmentUrl();
				break;
			case 13:
				return $this->getDiskQuota();
				break;
			case 14:
				return $this->getLastVisit();
				break;
			case 15:
				return $this->getLastEdit();
				break;
			case 16:
				return $this->getCreationDate();
				break;
			case 17:
				return $this->getExpirationDate();
				break;
			case 18:
				return $this->getTargetCourseCode();
				break;
			case 19:
				return $this->getSubscribe();
				break;
			case 20:
				return $this->getUnsubscribe();
				break;
			case 21:
				return $this->getRegistrationCode();
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
		$keys = CoursePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCode(),
			$keys[1] => $this->getDirectory(),
			$keys[2] => $this->getDbName(),
			$keys[3] => $this->getCourseLanguage(),
			$keys[4] => $this->getTitle(),
			$keys[5] => $this->getDescription(),
			$keys[6] => $this->getCategoryCode(),
			$keys[7] => $this->getVisibility(),
			$keys[8] => $this->getShowScore(),
			$keys[9] => $this->getTutorName(),
			$keys[10] => $this->getVisualCode(),
			$keys[11] => $this->getDepartmentName(),
			$keys[12] => $this->getDepartmentUrl(),
			$keys[13] => $this->getDiskQuota(),
			$keys[14] => $this->getLastVisit(),
			$keys[15] => $this->getLastEdit(),
			$keys[16] => $this->getCreationDate(),
			$keys[17] => $this->getExpirationDate(),
			$keys[18] => $this->getTargetCourseCode(),
			$keys[19] => $this->getSubscribe(),
			$keys[20] => $this->getUnsubscribe(),
			$keys[21] => $this->getRegistrationCode(),
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
		$pos = CoursePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCode($value);
				break;
			case 1:
				$this->setDirectory($value);
				break;
			case 2:
				$this->setDbName($value);
				break;
			case 3:
				$this->setCourseLanguage($value);
				break;
			case 4:
				$this->setTitle($value);
				break;
			case 5:
				$this->setDescription($value);
				break;
			case 6:
				$this->setCategoryCode($value);
				break;
			case 7:
				$this->setVisibility($value);
				break;
			case 8:
				$this->setShowScore($value);
				break;
			case 9:
				$this->setTutorName($value);
				break;
			case 10:
				$this->setVisualCode($value);
				break;
			case 11:
				$this->setDepartmentName($value);
				break;
			case 12:
				$this->setDepartmentUrl($value);
				break;
			case 13:
				$this->setDiskQuota($value);
				break;
			case 14:
				$this->setLastVisit($value);
				break;
			case 15:
				$this->setLastEdit($value);
				break;
			case 16:
				$this->setCreationDate($value);
				break;
			case 17:
				$this->setExpirationDate($value);
				break;
			case 18:
				$this->setTargetCourseCode($value);
				break;
			case 19:
				$this->setSubscribe($value);
				break;
			case 20:
				$this->setUnsubscribe($value);
				break;
			case 21:
				$this->setRegistrationCode($value);
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
		$keys = CoursePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCode($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDirectory($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDbName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCourseLanguage($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCategoryCode($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setVisibility($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setShowScore($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTutorName($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVisualCode($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDepartmentName($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDepartmentUrl($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDiskQuota($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLastVisit($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLastEdit($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCreationDate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setExpirationDate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTargetCourseCode($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSubscribe($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUnsubscribe($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRegistrationCode($arr[$keys[21]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CoursePeer::DATABASE_NAME);

		if ($this->isColumnModified(CoursePeer::CODE)) $criteria->add(CoursePeer::CODE, $this->code);
		if ($this->isColumnModified(CoursePeer::DIRECTORY)) $criteria->add(CoursePeer::DIRECTORY, $this->directory);
		if ($this->isColumnModified(CoursePeer::DB_NAME)) $criteria->add(CoursePeer::DB_NAME, $this->db_name);
		if ($this->isColumnModified(CoursePeer::COURSE_LANGUAGE)) $criteria->add(CoursePeer::COURSE_LANGUAGE, $this->course_language);
		if ($this->isColumnModified(CoursePeer::TITLE)) $criteria->add(CoursePeer::TITLE, $this->title);
		if ($this->isColumnModified(CoursePeer::DESCRIPTION)) $criteria->add(CoursePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(CoursePeer::CATEGORY_CODE)) $criteria->add(CoursePeer::CATEGORY_CODE, $this->category_code);
		if ($this->isColumnModified(CoursePeer::VISIBILITY)) $criteria->add(CoursePeer::VISIBILITY, $this->visibility);
		if ($this->isColumnModified(CoursePeer::SHOW_SCORE)) $criteria->add(CoursePeer::SHOW_SCORE, $this->show_score);
		if ($this->isColumnModified(CoursePeer::TUTOR_NAME)) $criteria->add(CoursePeer::TUTOR_NAME, $this->tutor_name);
		if ($this->isColumnModified(CoursePeer::VISUAL_CODE)) $criteria->add(CoursePeer::VISUAL_CODE, $this->visual_code);
		if ($this->isColumnModified(CoursePeer::DEPARTMENT_NAME)) $criteria->add(CoursePeer::DEPARTMENT_NAME, $this->department_name);
		if ($this->isColumnModified(CoursePeer::DEPARTMENT_URL)) $criteria->add(CoursePeer::DEPARTMENT_URL, $this->department_url);
		if ($this->isColumnModified(CoursePeer::DISK_QUOTA)) $criteria->add(CoursePeer::DISK_QUOTA, $this->disk_quota);
		if ($this->isColumnModified(CoursePeer::LAST_VISIT)) $criteria->add(CoursePeer::LAST_VISIT, $this->last_visit);
		if ($this->isColumnModified(CoursePeer::LAST_EDIT)) $criteria->add(CoursePeer::LAST_EDIT, $this->last_edit);
		if ($this->isColumnModified(CoursePeer::CREATION_DATE)) $criteria->add(CoursePeer::CREATION_DATE, $this->creation_date);
		if ($this->isColumnModified(CoursePeer::EXPIRATION_DATE)) $criteria->add(CoursePeer::EXPIRATION_DATE, $this->expiration_date);
		if ($this->isColumnModified(CoursePeer::TARGET_COURSE_CODE)) $criteria->add(CoursePeer::TARGET_COURSE_CODE, $this->target_course_code);
		if ($this->isColumnModified(CoursePeer::SUBSCRIBE)) $criteria->add(CoursePeer::SUBSCRIBE, $this->subscribe);
		if ($this->isColumnModified(CoursePeer::UNSUBSCRIBE)) $criteria->add(CoursePeer::UNSUBSCRIBE, $this->unsubscribe);
		if ($this->isColumnModified(CoursePeer::REGISTRATION_CODE)) $criteria->add(CoursePeer::REGISTRATION_CODE, $this->registration_code);

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
		$criteria = new Criteria(CoursePeer::DATABASE_NAME);
		$criteria->add(CoursePeer::CODE, $this->code);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getCode();
	}

	/**
	 * Generic method to set the primary key (code column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCode($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCode();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Course (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCode($this->code);
		$copyObj->setDirectory($this->directory);
		$copyObj->setDbName($this->db_name);
		$copyObj->setCourseLanguage($this->course_language);
		$copyObj->setTitle($this->title);
		$copyObj->setDescription($this->description);
		$copyObj->setCategoryCode($this->category_code);
		$copyObj->setVisibility($this->visibility);
		$copyObj->setShowScore($this->show_score);
		$copyObj->setTutorName($this->tutor_name);
		$copyObj->setVisualCode($this->visual_code);
		$copyObj->setDepartmentName($this->department_name);
		$copyObj->setDepartmentUrl($this->department_url);
		$copyObj->setDiskQuota($this->disk_quota);
		$copyObj->setLastVisit($this->last_visit);
		$copyObj->setLastEdit($this->last_edit);
		$copyObj->setCreationDate($this->creation_date);
		$copyObj->setExpirationDate($this->expiration_date);
		$copyObj->setTargetCourseCode($this->target_course_code);
		$copyObj->setSubscribe($this->subscribe);
		$copyObj->setUnsubscribe($this->unsubscribe);
		$copyObj->setRegistrationCode($this->registration_code);

		$copyObj->setNew(true);
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
	 * @return     Course Clone of current object.
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
	 * @return     CoursePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CoursePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->code = null;
		$this->directory = null;
		$this->db_name = null;
		$this->course_language = null;
		$this->title = null;
		$this->description = null;
		$this->category_code = null;
		$this->visibility = null;
		$this->show_score = null;
		$this->tutor_name = null;
		$this->visual_code = null;
		$this->department_name = null;
		$this->department_url = null;
		$this->disk_quota = null;
		$this->last_visit = null;
		$this->last_edit = null;
		$this->creation_date = null;
		$this->expiration_date = null;
		$this->target_course_code = null;
		$this->subscribe = null;
		$this->unsubscribe = null;
		$this->registration_code = null;
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

} // BaseCourse
