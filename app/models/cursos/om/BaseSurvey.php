<?php


/**
 * Base class that represents a row from the 'survey' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurvey extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SurveyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SurveyPeer
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
	 * The value for the avail_from field.
	 * @var        string
	 */
	protected $avail_from;

	/**
	 * The value for the avail_till field.
	 * @var        string
	 */
	protected $avail_till;

	/**
	 * The value for the is_shared field.
	 * Note: this column has a database default value of: '1'
	 * @var        string
	 */
	protected $is_shared;

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
	 * The value for the invited field.
	 * @var        int
	 */
	protected $invited;

	/**
	 * The value for the answered field.
	 * @var        int
	 */
	protected $answered;

	/**
	 * The value for the invite_mail field.
	 * @var        string
	 */
	protected $invite_mail;

	/**
	 * The value for the reminder_mail field.
	 * @var        string
	 */
	protected $reminder_mail;

	/**
	 * The value for the mail_subject field.
	 * @var        string
	 */
	protected $mail_subject;

	/**
	 * The value for the anonymous field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $anonymous;

	/**
	 * The value for the access_condition field.
	 * @var        string
	 */
	protected $access_condition;

	/**
	 * The value for the shuffle field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $shuffle;

	/**
	 * The value for the one_question_per_page field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $one_question_per_page;

	/**
	 * The value for the survey_version field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $survey_version;

	/**
	 * The value for the parent_id field.
	 * @var        int
	 */
	protected $parent_id;

	/**
	 * The value for the survey_type field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $survey_type;

	/**
	 * The value for the show_form_profile field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $show_form_profile;

	/**
	 * The value for the form_fields field.
	 * @var        string
	 */
	protected $form_fields;

	/**
	 * The value for the session_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $session_id;

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
		$this->is_shared = '1';
		$this->creation_date = NULL;
		$this->anonymous = '0';
		$this->shuffle = 0;
		$this->one_question_per_page = 0;
		$this->survey_version = '';
		$this->survey_type = 0;
		$this->show_form_profile = 0;
		$this->session_id = 0;
	}

	/**
	 * Initializes internal state of BaseSurvey object.
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
	 * Get the [optionally formatted] temporal [avail_from] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAvailFrom($format = '%x')
	{
		if ($this->avail_from === null) {
			return null;
		}


		if ($this->avail_from === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->avail_from);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->avail_from, true), $x);
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
	 * Get the [optionally formatted] temporal [avail_till] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAvailTill($format = '%x')
	{
		if ($this->avail_till === null) {
			return null;
		}


		if ($this->avail_till === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->avail_till);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->avail_till, true), $x);
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
	 * Get the [is_shared] column value.
	 * 
	 * @return     string
	 */
	public function getIsShared()
	{
		return $this->is_shared;
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
	 * Get the [invited] column value.
	 * 
	 * @return     int
	 */
	public function getInvited()
	{
		return $this->invited;
	}

	/**
	 * Get the [answered] column value.
	 * 
	 * @return     int
	 */
	public function getAnswered()
	{
		return $this->answered;
	}

	/**
	 * Get the [invite_mail] column value.
	 * 
	 * @return     string
	 */
	public function getInviteMail()
	{
		return $this->invite_mail;
	}

	/**
	 * Get the [reminder_mail] column value.
	 * 
	 * @return     string
	 */
	public function getReminderMail()
	{
		return $this->reminder_mail;
	}

	/**
	 * Get the [mail_subject] column value.
	 * 
	 * @return     string
	 */
	public function getMailSubject()
	{
		return $this->mail_subject;
	}

	/**
	 * Get the [anonymous] column value.
	 * 
	 * @return     string
	 */
	public function getAnonymous()
	{
		return $this->anonymous;
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
	 * Get the [shuffle] column value.
	 * 
	 * @return     int
	 */
	public function getShuffle()
	{
		return $this->shuffle;
	}

	/**
	 * Get the [one_question_per_page] column value.
	 * 
	 * @return     int
	 */
	public function getOneQuestionPerPage()
	{
		return $this->one_question_per_page;
	}

	/**
	 * Get the [survey_version] column value.
	 * 
	 * @return     string
	 */
	public function getSurveyVersion()
	{
		return $this->survey_version;
	}

	/**
	 * Get the [parent_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentId()
	{
		return $this->parent_id;
	}

	/**
	 * Get the [survey_type] column value.
	 * 
	 * @return     int
	 */
	public function getSurveyType()
	{
		return $this->survey_type;
	}

	/**
	 * Get the [show_form_profile] column value.
	 * 
	 * @return     int
	 */
	public function getShowFormProfile()
	{
		return $this->show_form_profile;
	}

	/**
	 * Get the [form_fields] column value.
	 * 
	 * @return     string
	 */
	public function getFormFields()
	{
		return $this->form_fields;
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
	 * Set the value of [survey_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSurveyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->survey_id !== $v) {
			$this->survey_id = $v;
			$this->modifiedColumns[] = SurveyPeer::SURVEY_ID;
		}

		return $this;
	} // setSurveyId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = SurveyPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = SurveyPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [subtitle] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSubtitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subtitle !== $v) {
			$this->subtitle = $v;
			$this->modifiedColumns[] = SurveyPeer::SUBTITLE;
		}

		return $this;
	} // setSubtitle()

	/**
	 * Set the value of [author] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAuthor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->author !== $v) {
			$this->author = $v;
			$this->modifiedColumns[] = SurveyPeer::AUTHOR;
		}

		return $this;
	} // setAuthor()

	/**
	 * Set the value of [lang] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setLang($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lang !== $v) {
			$this->lang = $v;
			$this->modifiedColumns[] = SurveyPeer::LANG;
		}

		return $this;
	} // setLang()

	/**
	 * Sets the value of [avail_from] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAvailFrom($v)
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

		if ( $this->avail_from !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->avail_from !== null && $tmpDt = new DateTime($this->avail_from)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->avail_from = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SurveyPeer::AVAIL_FROM;
			}
		} // if either are not null

		return $this;
	} // setAvailFrom()

	/**
	 * Sets the value of [avail_till] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAvailTill($v)
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

		if ( $this->avail_till !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->avail_till !== null && $tmpDt = new DateTime($this->avail_till)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->avail_till = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = SurveyPeer::AVAIL_TILL;
			}
		} // if either are not null

		return $this;
	} // setAvailTill()

	/**
	 * Set the value of [is_shared] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setIsShared($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->is_shared !== $v || $this->isNew()) {
			$this->is_shared = $v;
			$this->modifiedColumns[] = SurveyPeer::IS_SHARED;
		}

		return $this;
	} // setIsShared()

	/**
	 * Set the value of [template] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setTemplate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->template !== $v) {
			$this->template = $v;
			$this->modifiedColumns[] = SurveyPeer::TEMPLATE;
		}

		return $this;
	} // setTemplate()

	/**
	 * Set the value of [intro] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setIntro($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->intro !== $v) {
			$this->intro = $v;
			$this->modifiedColumns[] = SurveyPeer::INTRO;
		}

		return $this;
	} // setIntro()

	/**
	 * Set the value of [surveythanks] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSurveythanks($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->surveythanks !== $v) {
			$this->surveythanks = $v;
			$this->modifiedColumns[] = SurveyPeer::SURVEYTHANKS;
		}

		return $this;
	} // setSurveythanks()

	/**
	 * Sets the value of [creation_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Survey The current object (for fluent API support)
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
				$this->modifiedColumns[] = SurveyPeer::CREATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setCreationDate()

	/**
	 * Set the value of [invited] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setInvited($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->invited !== $v) {
			$this->invited = $v;
			$this->modifiedColumns[] = SurveyPeer::INVITED;
		}

		return $this;
	} // setInvited()

	/**
	 * Set the value of [answered] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAnswered($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->answered !== $v) {
			$this->answered = $v;
			$this->modifiedColumns[] = SurveyPeer::ANSWERED;
		}

		return $this;
	} // setAnswered()

	/**
	 * Set the value of [invite_mail] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setInviteMail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->invite_mail !== $v) {
			$this->invite_mail = $v;
			$this->modifiedColumns[] = SurveyPeer::INVITE_MAIL;
		}

		return $this;
	} // setInviteMail()

	/**
	 * Set the value of [reminder_mail] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setReminderMail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->reminder_mail !== $v) {
			$this->reminder_mail = $v;
			$this->modifiedColumns[] = SurveyPeer::REMINDER_MAIL;
		}

		return $this;
	} // setReminderMail()

	/**
	 * Set the value of [mail_subject] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setMailSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mail_subject !== $v) {
			$this->mail_subject = $v;
			$this->modifiedColumns[] = SurveyPeer::MAIL_SUBJECT;
		}

		return $this;
	} // setMailSubject()

	/**
	 * Set the value of [anonymous] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAnonymous($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->anonymous !== $v || $this->isNew()) {
			$this->anonymous = $v;
			$this->modifiedColumns[] = SurveyPeer::ANONYMOUS;
		}

		return $this;
	} // setAnonymous()

	/**
	 * Set the value of [access_condition] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setAccessCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->access_condition !== $v) {
			$this->access_condition = $v;
			$this->modifiedColumns[] = SurveyPeer::ACCESS_CONDITION;
		}

		return $this;
	} // setAccessCondition()

	/**
	 * Set the value of [shuffle] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setShuffle($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->shuffle !== $v || $this->isNew()) {
			$this->shuffle = $v;
			$this->modifiedColumns[] = SurveyPeer::SHUFFLE;
		}

		return $this;
	} // setShuffle()

	/**
	 * Set the value of [one_question_per_page] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setOneQuestionPerPage($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->one_question_per_page !== $v || $this->isNew()) {
			$this->one_question_per_page = $v;
			$this->modifiedColumns[] = SurveyPeer::ONE_QUESTION_PER_PAGE;
		}

		return $this;
	} // setOneQuestionPerPage()

	/**
	 * Set the value of [survey_version] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSurveyVersion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->survey_version !== $v || $this->isNew()) {
			$this->survey_version = $v;
			$this->modifiedColumns[] = SurveyPeer::SURVEY_VERSION;
		}

		return $this;
	} // setSurveyVersion()

	/**
	 * Set the value of [parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = SurveyPeer::PARENT_ID;
		}

		return $this;
	} // setParentId()

	/**
	 * Set the value of [survey_type] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSurveyType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->survey_type !== $v || $this->isNew()) {
			$this->survey_type = $v;
			$this->modifiedColumns[] = SurveyPeer::SURVEY_TYPE;
		}

		return $this;
	} // setSurveyType()

	/**
	 * Set the value of [show_form_profile] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setShowFormProfile($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->show_form_profile !== $v || $this->isNew()) {
			$this->show_form_profile = $v;
			$this->modifiedColumns[] = SurveyPeer::SHOW_FORM_PROFILE;
		}

		return $this;
	} // setShowFormProfile()

	/**
	 * Set the value of [form_fields] column.
	 * 
	 * @param      string $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setFormFields($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->form_fields !== $v) {
			$this->form_fields = $v;
			$this->modifiedColumns[] = SurveyPeer::FORM_FIELDS;
		}

		return $this;
	} // setFormFields()

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Survey The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_id !== $v || $this->isNew()) {
			$this->session_id = $v;
			$this->modifiedColumns[] = SurveyPeer::SESSION_ID;
		}

		return $this;
	} // setSessionId()

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
			if ($this->is_shared !== '1') {
				return false;
			}

			if ($this->creation_date !== NULL) {
				return false;
			}

			if ($this->anonymous !== '0') {
				return false;
			}

			if ($this->shuffle !== 0) {
				return false;
			}

			if ($this->one_question_per_page !== 0) {
				return false;
			}

			if ($this->survey_version !== '') {
				return false;
			}

			if ($this->survey_type !== 0) {
				return false;
			}

			if ($this->show_form_profile !== 0) {
				return false;
			}

			if ($this->session_id !== 0) {
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
			$this->avail_from = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->avail_till = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->is_shared = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->template = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->intro = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->surveythanks = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->creation_date = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->invited = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->answered = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->invite_mail = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->reminder_mail = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->mail_subject = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->anonymous = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->access_condition = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->shuffle = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->one_question_per_page = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->survey_version = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->parent_id = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->survey_type = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->show_form_profile = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->form_fields = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->session_id = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 28; // 28 = SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Survey object", $e);
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SurveyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SurveyQuery::create()
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SurveyPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = SurveyPeer::SURVEY_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SurveyPeer::SURVEY_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SurveyPeer::SURVEY_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setSurveyId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = SurveyPeer::doUpdate($this, $con);
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


			if (($retval = SurveyPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAvailFrom();
				break;
			case 7:
				return $this->getAvailTill();
				break;
			case 8:
				return $this->getIsShared();
				break;
			case 9:
				return $this->getTemplate();
				break;
			case 10:
				return $this->getIntro();
				break;
			case 11:
				return $this->getSurveythanks();
				break;
			case 12:
				return $this->getCreationDate();
				break;
			case 13:
				return $this->getInvited();
				break;
			case 14:
				return $this->getAnswered();
				break;
			case 15:
				return $this->getInviteMail();
				break;
			case 16:
				return $this->getReminderMail();
				break;
			case 17:
				return $this->getMailSubject();
				break;
			case 18:
				return $this->getAnonymous();
				break;
			case 19:
				return $this->getAccessCondition();
				break;
			case 20:
				return $this->getShuffle();
				break;
			case 21:
				return $this->getOneQuestionPerPage();
				break;
			case 22:
				return $this->getSurveyVersion();
				break;
			case 23:
				return $this->getParentId();
				break;
			case 24:
				return $this->getSurveyType();
				break;
			case 25:
				return $this->getShowFormProfile();
				break;
			case 26:
				return $this->getFormFields();
				break;
			case 27:
				return $this->getSessionId();
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
		$keys = SurveyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSurveyId(),
			$keys[1] => $this->getCode(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getSubtitle(),
			$keys[4] => $this->getAuthor(),
			$keys[5] => $this->getLang(),
			$keys[6] => $this->getAvailFrom(),
			$keys[7] => $this->getAvailTill(),
			$keys[8] => $this->getIsShared(),
			$keys[9] => $this->getTemplate(),
			$keys[10] => $this->getIntro(),
			$keys[11] => $this->getSurveythanks(),
			$keys[12] => $this->getCreationDate(),
			$keys[13] => $this->getInvited(),
			$keys[14] => $this->getAnswered(),
			$keys[15] => $this->getInviteMail(),
			$keys[16] => $this->getReminderMail(),
			$keys[17] => $this->getMailSubject(),
			$keys[18] => $this->getAnonymous(),
			$keys[19] => $this->getAccessCondition(),
			$keys[20] => $this->getShuffle(),
			$keys[21] => $this->getOneQuestionPerPage(),
			$keys[22] => $this->getSurveyVersion(),
			$keys[23] => $this->getParentId(),
			$keys[24] => $this->getSurveyType(),
			$keys[25] => $this->getShowFormProfile(),
			$keys[26] => $this->getFormFields(),
			$keys[27] => $this->getSessionId(),
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
		$pos = SurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAvailFrom($value);
				break;
			case 7:
				$this->setAvailTill($value);
				break;
			case 8:
				$this->setIsShared($value);
				break;
			case 9:
				$this->setTemplate($value);
				break;
			case 10:
				$this->setIntro($value);
				break;
			case 11:
				$this->setSurveythanks($value);
				break;
			case 12:
				$this->setCreationDate($value);
				break;
			case 13:
				$this->setInvited($value);
				break;
			case 14:
				$this->setAnswered($value);
				break;
			case 15:
				$this->setInviteMail($value);
				break;
			case 16:
				$this->setReminderMail($value);
				break;
			case 17:
				$this->setMailSubject($value);
				break;
			case 18:
				$this->setAnonymous($value);
				break;
			case 19:
				$this->setAccessCondition($value);
				break;
			case 20:
				$this->setShuffle($value);
				break;
			case 21:
				$this->setOneQuestionPerPage($value);
				break;
			case 22:
				$this->setSurveyVersion($value);
				break;
			case 23:
				$this->setParentId($value);
				break;
			case 24:
				$this->setSurveyType($value);
				break;
			case 25:
				$this->setShowFormProfile($value);
				break;
			case 26:
				$this->setFormFields($value);
				break;
			case 27:
				$this->setSessionId($value);
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
		$keys = SurveyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSurveyId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSubtitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAuthor($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLang($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAvailFrom($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAvailTill($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsShared($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTemplate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIntro($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSurveythanks($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreationDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInvited($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAnswered($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setInviteMail($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setReminderMail($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setMailSubject($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setAnonymous($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setAccessCondition($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setShuffle($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setOneQuestionPerPage($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setSurveyVersion($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setParentId($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setSurveyType($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setShowFormProfile($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setFormFields($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setSessionId($arr[$keys[27]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);

		if ($this->isColumnModified(SurveyPeer::SURVEY_ID)) $criteria->add(SurveyPeer::SURVEY_ID, $this->survey_id);
		if ($this->isColumnModified(SurveyPeer::CODE)) $criteria->add(SurveyPeer::CODE, $this->code);
		if ($this->isColumnModified(SurveyPeer::TITLE)) $criteria->add(SurveyPeer::TITLE, $this->title);
		if ($this->isColumnModified(SurveyPeer::SUBTITLE)) $criteria->add(SurveyPeer::SUBTITLE, $this->subtitle);
		if ($this->isColumnModified(SurveyPeer::AUTHOR)) $criteria->add(SurveyPeer::AUTHOR, $this->author);
		if ($this->isColumnModified(SurveyPeer::LANG)) $criteria->add(SurveyPeer::LANG, $this->lang);
		if ($this->isColumnModified(SurveyPeer::AVAIL_FROM)) $criteria->add(SurveyPeer::AVAIL_FROM, $this->avail_from);
		if ($this->isColumnModified(SurveyPeer::AVAIL_TILL)) $criteria->add(SurveyPeer::AVAIL_TILL, $this->avail_till);
		if ($this->isColumnModified(SurveyPeer::IS_SHARED)) $criteria->add(SurveyPeer::IS_SHARED, $this->is_shared);
		if ($this->isColumnModified(SurveyPeer::TEMPLATE)) $criteria->add(SurveyPeer::TEMPLATE, $this->template);
		if ($this->isColumnModified(SurveyPeer::INTRO)) $criteria->add(SurveyPeer::INTRO, $this->intro);
		if ($this->isColumnModified(SurveyPeer::SURVEYTHANKS)) $criteria->add(SurveyPeer::SURVEYTHANKS, $this->surveythanks);
		if ($this->isColumnModified(SurveyPeer::CREATION_DATE)) $criteria->add(SurveyPeer::CREATION_DATE, $this->creation_date);
		if ($this->isColumnModified(SurveyPeer::INVITED)) $criteria->add(SurveyPeer::INVITED, $this->invited);
		if ($this->isColumnModified(SurveyPeer::ANSWERED)) $criteria->add(SurveyPeer::ANSWERED, $this->answered);
		if ($this->isColumnModified(SurveyPeer::INVITE_MAIL)) $criteria->add(SurveyPeer::INVITE_MAIL, $this->invite_mail);
		if ($this->isColumnModified(SurveyPeer::REMINDER_MAIL)) $criteria->add(SurveyPeer::REMINDER_MAIL, $this->reminder_mail);
		if ($this->isColumnModified(SurveyPeer::MAIL_SUBJECT)) $criteria->add(SurveyPeer::MAIL_SUBJECT, $this->mail_subject);
		if ($this->isColumnModified(SurveyPeer::ANONYMOUS)) $criteria->add(SurveyPeer::ANONYMOUS, $this->anonymous);
		if ($this->isColumnModified(SurveyPeer::ACCESS_CONDITION)) $criteria->add(SurveyPeer::ACCESS_CONDITION, $this->access_condition);
		if ($this->isColumnModified(SurveyPeer::SHUFFLE)) $criteria->add(SurveyPeer::SHUFFLE, $this->shuffle);
		if ($this->isColumnModified(SurveyPeer::ONE_QUESTION_PER_PAGE)) $criteria->add(SurveyPeer::ONE_QUESTION_PER_PAGE, $this->one_question_per_page);
		if ($this->isColumnModified(SurveyPeer::SURVEY_VERSION)) $criteria->add(SurveyPeer::SURVEY_VERSION, $this->survey_version);
		if ($this->isColumnModified(SurveyPeer::PARENT_ID)) $criteria->add(SurveyPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(SurveyPeer::SURVEY_TYPE)) $criteria->add(SurveyPeer::SURVEY_TYPE, $this->survey_type);
		if ($this->isColumnModified(SurveyPeer::SHOW_FORM_PROFILE)) $criteria->add(SurveyPeer::SHOW_FORM_PROFILE, $this->show_form_profile);
		if ($this->isColumnModified(SurveyPeer::FORM_FIELDS)) $criteria->add(SurveyPeer::FORM_FIELDS, $this->form_fields);
		if ($this->isColumnModified(SurveyPeer::SESSION_ID)) $criteria->add(SurveyPeer::SESSION_ID, $this->session_id);

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
		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);
		$criteria->add(SurveyPeer::SURVEY_ID, $this->survey_id);

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
	 * @param      object $copyObj An object of Survey (or compatible) type.
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
		$copyObj->setAvailFrom($this->avail_from);
		$copyObj->setAvailTill($this->avail_till);
		$copyObj->setIsShared($this->is_shared);
		$copyObj->setTemplate($this->template);
		$copyObj->setIntro($this->intro);
		$copyObj->setSurveythanks($this->surveythanks);
		$copyObj->setCreationDate($this->creation_date);
		$copyObj->setInvited($this->invited);
		$copyObj->setAnswered($this->answered);
		$copyObj->setInviteMail($this->invite_mail);
		$copyObj->setReminderMail($this->reminder_mail);
		$copyObj->setMailSubject($this->mail_subject);
		$copyObj->setAnonymous($this->anonymous);
		$copyObj->setAccessCondition($this->access_condition);
		$copyObj->setShuffle($this->shuffle);
		$copyObj->setOneQuestionPerPage($this->one_question_per_page);
		$copyObj->setSurveyVersion($this->survey_version);
		$copyObj->setParentId($this->parent_id);
		$copyObj->setSurveyType($this->survey_type);
		$copyObj->setShowFormProfile($this->show_form_profile);
		$copyObj->setFormFields($this->form_fields);
		$copyObj->setSessionId($this->session_id);

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
	 * @return     Survey Clone of current object.
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
	 * @return     SurveyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SurveyPeer();
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
		$this->avail_from = null;
		$this->avail_till = null;
		$this->is_shared = null;
		$this->template = null;
		$this->intro = null;
		$this->surveythanks = null;
		$this->creation_date = null;
		$this->invited = null;
		$this->answered = null;
		$this->invite_mail = null;
		$this->reminder_mail = null;
		$this->mail_subject = null;
		$this->anonymous = null;
		$this->access_condition = null;
		$this->shuffle = null;
		$this->one_question_per_page = null;
		$this->survey_version = null;
		$this->parent_id = null;
		$this->survey_type = null;
		$this->show_form_profile = null;
		$this->form_fields = null;
		$this->session_id = null;
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

} // BaseSurvey
