<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUser extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UserPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserPeer
	 */
	protected static $peer;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the lastname field.
	 * @var        string
	 */
	protected $lastname;

	/**
	 * The value for the firstname field.
	 * @var        string
	 */
	protected $firstname;

	/**
	 * The value for the username field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $username;

	/**
	 * The value for the password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $password;

	/**
	 * The value for the auth_source field.
	 * Note: this column has a database default value of: 'platform'
	 * @var        string
	 */
	protected $auth_source;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the status field.
	 * Note: this column has a database default value of: 5
	 * @var        int
	 */
	protected $status;

	/**
	 * The value for the official_code field.
	 * @var        string
	 */
	protected $official_code;

	/**
	 * The value for the phone field.
	 * @var        string
	 */
	protected $phone;

	/**
	 * The value for the picture_uri field.
	 * @var        string
	 */
	protected $picture_uri;

	/**
	 * The value for the creator_id field.
	 * @var        int
	 */
	protected $creator_id;

	/**
	 * The value for the competences field.
	 * @var        string
	 */
	protected $competences;

	/**
	 * The value for the diplomas field.
	 * @var        string
	 */
	protected $diplomas;

	/**
	 * The value for the openarea field.
	 * @var        string
	 */
	protected $openarea;

	/**
	 * The value for the teach field.
	 * @var        string
	 */
	protected $teach;

	/**
	 * The value for the productions field.
	 * @var        string
	 */
	protected $productions;

	/**
	 * The value for the chatcall_user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $chatcall_user_id;

	/**
	 * The value for the chatcall_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $chatcall_date;

	/**
	 * The value for the chatcall_text field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $chatcall_text;

	/**
	 * The value for the language field.
	 * @var        string
	 */
	protected $language;

	/**
	 * The value for the registration_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $registration_date;

	/**
	 * The value for the expiration_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $expiration_date;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $active;

	/**
	 * The value for the openid field.
	 * @var        string
	 */
	protected $openid;

	/**
	 * The value for the theme field.
	 * @var        string
	 */
	protected $theme;

	/**
	 * The value for the hr_dept_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $hr_dept_id;

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
		$this->username = '';
		$this->password = '';
		$this->auth_source = 'platform';
		$this->status = 5;
		$this->chatcall_user_id = 0;
		$this->chatcall_date = NULL;
		$this->chatcall_text = '';
		$this->registration_date = NULL;
		$this->expiration_date = NULL;
		$this->active = 1;
		$this->hr_dept_id = 0;
	}

	/**
	 * Initializes internal state of BaseUser object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [lastname] column value.
	 * 
	 * @return     string
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * Get the [firstname] column value.
	 * 
	 * @return     string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * Get the [username] column value.
	 * 
	 * @return     string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Get the [password] column value.
	 * 
	 * @return     string
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Get the [auth_source] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSource()
	{
		return $this->auth_source;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     int
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Get the [official_code] column value.
	 * 
	 * @return     string
	 */
	public function getOfficialCode()
	{
		return $this->official_code;
	}

	/**
	 * Get the [phone] column value.
	 * 
	 * @return     string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Get the [picture_uri] column value.
	 * 
	 * @return     string
	 */
	public function getPictureUri()
	{
		return $this->picture_uri;
	}

	/**
	 * Get the [creator_id] column value.
	 * 
	 * @return     int
	 */
	public function getCreatorId()
	{
		return $this->creator_id;
	}

	/**
	 * Get the [competences] column value.
	 * 
	 * @return     string
	 */
	public function getCompetences()
	{
		return $this->competences;
	}

	/**
	 * Get the [diplomas] column value.
	 * 
	 * @return     string
	 */
	public function getDiplomas()
	{
		return $this->diplomas;
	}

	/**
	 * Get the [openarea] column value.
	 * 
	 * @return     string
	 */
	public function getOpenarea()
	{
		return $this->openarea;
	}

	/**
	 * Get the [teach] column value.
	 * 
	 * @return     string
	 */
	public function getTeach()
	{
		return $this->teach;
	}

	/**
	 * Get the [productions] column value.
	 * 
	 * @return     string
	 */
	public function getProductions()
	{
		return $this->productions;
	}

	/**
	 * Get the [chatcall_user_id] column value.
	 * 
	 * @return     int
	 */
	public function getChatcallUserId()
	{
		return $this->chatcall_user_id;
	}

	/**
	 * Get the [optionally formatted] temporal [chatcall_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getChatcallDate($format = 'Y-m-d H:i:s')
	{
		if ($this->chatcall_date === null) {
			return null;
		}


		if ($this->chatcall_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->chatcall_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->chatcall_date, true), $x);
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
	 * Get the [chatcall_text] column value.
	 * 
	 * @return     string
	 */
	public function getChatcallText()
	{
		return $this->chatcall_text;
	}

	/**
	 * Get the [language] column value.
	 * 
	 * @return     string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * Get the [optionally formatted] temporal [registration_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getRegistrationDate($format = 'Y-m-d H:i:s')
	{
		if ($this->registration_date === null) {
			return null;
		}


		if ($this->registration_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->registration_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->registration_date, true), $x);
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
	 * Get the [active] column value.
	 * 
	 * @return     int
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [openid] column value.
	 * 
	 * @return     string
	 */
	public function getOpenid()
	{
		return $this->openid;
	}

	/**
	 * Get the [theme] column value.
	 * 
	 * @return     string
	 */
	public function getTheme()
	{
		return $this->theme;
	}

	/**
	 * Get the [hr_dept_id] column value.
	 * 
	 * @return     int
	 */
	public function getHrDeptId()
	{
		return $this->hr_dept_id;
	}

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserPeer::USER_ID;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = UserPeer::LASTNAME;
		}

		return $this;
	} // setLastname()

	/**
	 * Set the value of [firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = UserPeer::FIRSTNAME;
		}

		return $this;
	} // setFirstname()

	/**
	 * Set the value of [username] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->username !== $v || $this->isNew()) {
			$this->username = $v;
			$this->modifiedColumns[] = UserPeer::USERNAME;
		}

		return $this;
	} // setUsername()

	/**
	 * Set the value of [password] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->password !== $v || $this->isNew()) {
			$this->password = $v;
			$this->modifiedColumns[] = UserPeer::PASSWORD;
		}

		return $this;
	} // setPassword()

	/**
	 * Set the value of [auth_source] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAuthSource($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source !== $v || $this->isNew()) {
			$this->auth_source = $v;
			$this->modifiedColumns[] = UserPeer::AUTH_SOURCE;
		}

		return $this;
	} // setAuthSource()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->status !== $v || $this->isNew()) {
			$this->status = $v;
			$this->modifiedColumns[] = UserPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Set the value of [official_code] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setOfficialCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->official_code !== $v) {
			$this->official_code = $v;
			$this->modifiedColumns[] = UserPeer::OFFICIAL_CODE;
		}

		return $this;
	} // setOfficialCode()

	/**
	 * Set the value of [phone] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPhone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = UserPeer::PHONE;
		}

		return $this;
	} // setPhone()

	/**
	 * Set the value of [picture_uri] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPictureUri($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->picture_uri !== $v) {
			$this->picture_uri = $v;
			$this->modifiedColumns[] = UserPeer::PICTURE_URI;
		}

		return $this;
	} // setPictureUri()

	/**
	 * Set the value of [creator_id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCreatorId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->creator_id !== $v) {
			$this->creator_id = $v;
			$this->modifiedColumns[] = UserPeer::CREATOR_ID;
		}

		return $this;
	} // setCreatorId()

	/**
	 * Set the value of [competences] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCompetences($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->competences !== $v) {
			$this->competences = $v;
			$this->modifiedColumns[] = UserPeer::COMPETENCES;
		}

		return $this;
	} // setCompetences()

	/**
	 * Set the value of [diplomas] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setDiplomas($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->diplomas !== $v) {
			$this->diplomas = $v;
			$this->modifiedColumns[] = UserPeer::DIPLOMAS;
		}

		return $this;
	} // setDiplomas()

	/**
	 * Set the value of [openarea] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setOpenarea($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->openarea !== $v) {
			$this->openarea = $v;
			$this->modifiedColumns[] = UserPeer::OPENAREA;
		}

		return $this;
	} // setOpenarea()

	/**
	 * Set the value of [teach] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setTeach($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->teach !== $v) {
			$this->teach = $v;
			$this->modifiedColumns[] = UserPeer::TEACH;
		}

		return $this;
	} // setTeach()

	/**
	 * Set the value of [productions] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setProductions($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->productions !== $v) {
			$this->productions = $v;
			$this->modifiedColumns[] = UserPeer::PRODUCTIONS;
		}

		return $this;
	} // setProductions()

	/**
	 * Set the value of [chatcall_user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setChatcallUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->chatcall_user_id !== $v || $this->isNew()) {
			$this->chatcall_user_id = $v;
			$this->modifiedColumns[] = UserPeer::CHATCALL_USER_ID;
		}

		return $this;
	} // setChatcallUserId()

	/**
	 * Sets the value of [chatcall_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setChatcallDate($v)
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

		if ( $this->chatcall_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->chatcall_date !== null && $tmpDt = new DateTime($this->chatcall_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->chatcall_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::CHATCALL_DATE;
			}
		} // if either are not null

		return $this;
	} // setChatcallDate()

	/**
	 * Set the value of [chatcall_text] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setChatcallText($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->chatcall_text !== $v || $this->isNew()) {
			$this->chatcall_text = $v;
			$this->modifiedColumns[] = UserPeer::CHATCALL_TEXT;
		}

		return $this;
	} // setChatcallText()

	/**
	 * Set the value of [language] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setLanguage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->language !== $v) {
			$this->language = $v;
			$this->modifiedColumns[] = UserPeer::LANGUAGE;
		}

		return $this;
	} // setLanguage()

	/**
	 * Sets the value of [registration_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setRegistrationDate($v)
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

		if ( $this->registration_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->registration_date !== null && $tmpDt = new DateTime($this->registration_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->registration_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::REGISTRATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setRegistrationDate()

	/**
	 * Sets the value of [expiration_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
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
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->expiration_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::EXPIRATION_DATE;
			}
		} // if either are not null

		return $this;
	} // setExpirationDate()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->active !== $v || $this->isNew()) {
			$this->active = $v;
			$this->modifiedColumns[] = UserPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Set the value of [openid] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setOpenid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->openid !== $v) {
			$this->openid = $v;
			$this->modifiedColumns[] = UserPeer::OPENID;
		}

		return $this;
	} // setOpenid()

	/**
	 * Set the value of [theme] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setTheme($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->theme !== $v) {
			$this->theme = $v;
			$this->modifiedColumns[] = UserPeer::THEME;
		}

		return $this;
	} // setTheme()

	/**
	 * Set the value of [hr_dept_id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setHrDeptId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->hr_dept_id !== $v || $this->isNew()) {
			$this->hr_dept_id = $v;
			$this->modifiedColumns[] = UserPeer::HR_DEPT_ID;
		}

		return $this;
	} // setHrDeptId()

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
			if ($this->username !== '') {
				return false;
			}

			if ($this->password !== '') {
				return false;
			}

			if ($this->auth_source !== 'platform') {
				return false;
			}

			if ($this->status !== 5) {
				return false;
			}

			if ($this->chatcall_user_id !== 0) {
				return false;
			}

			if ($this->chatcall_date !== NULL) {
				return false;
			}

			if ($this->chatcall_text !== '') {
				return false;
			}

			if ($this->registration_date !== NULL) {
				return false;
			}

			if ($this->expiration_date !== NULL) {
				return false;
			}

			if ($this->active !== 1) {
				return false;
			}

			if ($this->hr_dept_id !== 0) {
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

			$this->user_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->lastname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->firstname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->username = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->password = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->auth_source = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->email = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->status = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->official_code = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->phone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->picture_uri = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->creator_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->competences = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->diplomas = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->openarea = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->teach = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->productions = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->chatcall_user_id = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->chatcall_date = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->chatcall_text = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->language = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->registration_date = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->expiration_date = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->active = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->openid = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->theme = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->hr_dept_id = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 27; // 27 = UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				UserQuery::create()
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UserPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = UserPeer::USER_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UserPeer::USER_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::USER_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setUserId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = UserPeer::doUpdate($this, $con);
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


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserId();
				break;
			case 1:
				return $this->getLastname();
				break;
			case 2:
				return $this->getFirstname();
				break;
			case 3:
				return $this->getUsername();
				break;
			case 4:
				return $this->getPassword();
				break;
			case 5:
				return $this->getAuthSource();
				break;
			case 6:
				return $this->getEmail();
				break;
			case 7:
				return $this->getStatus();
				break;
			case 8:
				return $this->getOfficialCode();
				break;
			case 9:
				return $this->getPhone();
				break;
			case 10:
				return $this->getPictureUri();
				break;
			case 11:
				return $this->getCreatorId();
				break;
			case 12:
				return $this->getCompetences();
				break;
			case 13:
				return $this->getDiplomas();
				break;
			case 14:
				return $this->getOpenarea();
				break;
			case 15:
				return $this->getTeach();
				break;
			case 16:
				return $this->getProductions();
				break;
			case 17:
				return $this->getChatcallUserId();
				break;
			case 18:
				return $this->getChatcallDate();
				break;
			case 19:
				return $this->getChatcallText();
				break;
			case 20:
				return $this->getLanguage();
				break;
			case 21:
				return $this->getRegistrationDate();
				break;
			case 22:
				return $this->getExpirationDate();
				break;
			case 23:
				return $this->getActive();
				break;
			case 24:
				return $this->getOpenid();
				break;
			case 25:
				return $this->getTheme();
				break;
			case 26:
				return $this->getHrDeptId();
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
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getLastname(),
			$keys[2] => $this->getFirstname(),
			$keys[3] => $this->getUsername(),
			$keys[4] => $this->getPassword(),
			$keys[5] => $this->getAuthSource(),
			$keys[6] => $this->getEmail(),
			$keys[7] => $this->getStatus(),
			$keys[8] => $this->getOfficialCode(),
			$keys[9] => $this->getPhone(),
			$keys[10] => $this->getPictureUri(),
			$keys[11] => $this->getCreatorId(),
			$keys[12] => $this->getCompetences(),
			$keys[13] => $this->getDiplomas(),
			$keys[14] => $this->getOpenarea(),
			$keys[15] => $this->getTeach(),
			$keys[16] => $this->getProductions(),
			$keys[17] => $this->getChatcallUserId(),
			$keys[18] => $this->getChatcallDate(),
			$keys[19] => $this->getChatcallText(),
			$keys[20] => $this->getLanguage(),
			$keys[21] => $this->getRegistrationDate(),
			$keys[22] => $this->getExpirationDate(),
			$keys[23] => $this->getActive(),
			$keys[24] => $this->getOpenid(),
			$keys[25] => $this->getTheme(),
			$keys[26] => $this->getHrDeptId(),
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserId($value);
				break;
			case 1:
				$this->setLastname($value);
				break;
			case 2:
				$this->setFirstname($value);
				break;
			case 3:
				$this->setUsername($value);
				break;
			case 4:
				$this->setPassword($value);
				break;
			case 5:
				$this->setAuthSource($value);
				break;
			case 6:
				$this->setEmail($value);
				break;
			case 7:
				$this->setStatus($value);
				break;
			case 8:
				$this->setOfficialCode($value);
				break;
			case 9:
				$this->setPhone($value);
				break;
			case 10:
				$this->setPictureUri($value);
				break;
			case 11:
				$this->setCreatorId($value);
				break;
			case 12:
				$this->setCompetences($value);
				break;
			case 13:
				$this->setDiplomas($value);
				break;
			case 14:
				$this->setOpenarea($value);
				break;
			case 15:
				$this->setTeach($value);
				break;
			case 16:
				$this->setProductions($value);
				break;
			case 17:
				$this->setChatcallUserId($value);
				break;
			case 18:
				$this->setChatcallDate($value);
				break;
			case 19:
				$this->setChatcallText($value);
				break;
			case 20:
				$this->setLanguage($value);
				break;
			case 21:
				$this->setRegistrationDate($value);
				break;
			case 22:
				$this->setExpirationDate($value);
				break;
			case 23:
				$this->setActive($value);
				break;
			case 24:
				$this->setOpenid($value);
				break;
			case 25:
				$this->setTheme($value);
				break;
			case 26:
				$this->setHrDeptId($value);
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
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLastname($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFirstname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUsername($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPassword($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAuthSource($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEmail($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStatus($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setOfficialCode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPhone($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPictureUri($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatorId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCompetences($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDiplomas($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setOpenarea($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTeach($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setProductions($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setChatcallUserId($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setChatcallDate($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setChatcallText($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLanguage($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRegistrationDate($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setExpirationDate($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setActive($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setOpenid($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setTheme($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setHrDeptId($arr[$keys[26]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::USER_ID)) $criteria->add(UserPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(UserPeer::LASTNAME)) $criteria->add(UserPeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(UserPeer::FIRSTNAME)) $criteria->add(UserPeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(UserPeer::USERNAME)) $criteria->add(UserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(UserPeer::AUTH_SOURCE)) $criteria->add(UserPeer::AUTH_SOURCE, $this->auth_source);
		if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UserPeer::STATUS)) $criteria->add(UserPeer::STATUS, $this->status);
		if ($this->isColumnModified(UserPeer::OFFICIAL_CODE)) $criteria->add(UserPeer::OFFICIAL_CODE, $this->official_code);
		if ($this->isColumnModified(UserPeer::PHONE)) $criteria->add(UserPeer::PHONE, $this->phone);
		if ($this->isColumnModified(UserPeer::PICTURE_URI)) $criteria->add(UserPeer::PICTURE_URI, $this->picture_uri);
		if ($this->isColumnModified(UserPeer::CREATOR_ID)) $criteria->add(UserPeer::CREATOR_ID, $this->creator_id);
		if ($this->isColumnModified(UserPeer::COMPETENCES)) $criteria->add(UserPeer::COMPETENCES, $this->competences);
		if ($this->isColumnModified(UserPeer::DIPLOMAS)) $criteria->add(UserPeer::DIPLOMAS, $this->diplomas);
		if ($this->isColumnModified(UserPeer::OPENAREA)) $criteria->add(UserPeer::OPENAREA, $this->openarea);
		if ($this->isColumnModified(UserPeer::TEACH)) $criteria->add(UserPeer::TEACH, $this->teach);
		if ($this->isColumnModified(UserPeer::PRODUCTIONS)) $criteria->add(UserPeer::PRODUCTIONS, $this->productions);
		if ($this->isColumnModified(UserPeer::CHATCALL_USER_ID)) $criteria->add(UserPeer::CHATCALL_USER_ID, $this->chatcall_user_id);
		if ($this->isColumnModified(UserPeer::CHATCALL_DATE)) $criteria->add(UserPeer::CHATCALL_DATE, $this->chatcall_date);
		if ($this->isColumnModified(UserPeer::CHATCALL_TEXT)) $criteria->add(UserPeer::CHATCALL_TEXT, $this->chatcall_text);
		if ($this->isColumnModified(UserPeer::LANGUAGE)) $criteria->add(UserPeer::LANGUAGE, $this->language);
		if ($this->isColumnModified(UserPeer::REGISTRATION_DATE)) $criteria->add(UserPeer::REGISTRATION_DATE, $this->registration_date);
		if ($this->isColumnModified(UserPeer::EXPIRATION_DATE)) $criteria->add(UserPeer::EXPIRATION_DATE, $this->expiration_date);
		if ($this->isColumnModified(UserPeer::ACTIVE)) $criteria->add(UserPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(UserPeer::OPENID)) $criteria->add(UserPeer::OPENID, $this->openid);
		if ($this->isColumnModified(UserPeer::THEME)) $criteria->add(UserPeer::THEME, $this->theme);
		if ($this->isColumnModified(UserPeer::HR_DEPT_ID)) $criteria->add(UserPeer::HR_DEPT_ID, $this->hr_dept_id);

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
		$criteria = new Criteria(UserPeer::DATABASE_NAME);
		$criteria->add(UserPeer::USER_ID, $this->user_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getUserId();
	}

	/**
	 * Generic method to set the primary key (user_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setUserId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getUserId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of User (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setLastname($this->lastname);
		$copyObj->setFirstname($this->firstname);
		$copyObj->setUsername($this->username);
		$copyObj->setPassword($this->password);
		$copyObj->setAuthSource($this->auth_source);
		$copyObj->setEmail($this->email);
		$copyObj->setStatus($this->status);
		$copyObj->setOfficialCode($this->official_code);
		$copyObj->setPhone($this->phone);
		$copyObj->setPictureUri($this->picture_uri);
		$copyObj->setCreatorId($this->creator_id);
		$copyObj->setCompetences($this->competences);
		$copyObj->setDiplomas($this->diplomas);
		$copyObj->setOpenarea($this->openarea);
		$copyObj->setTeach($this->teach);
		$copyObj->setProductions($this->productions);
		$copyObj->setChatcallUserId($this->chatcall_user_id);
		$copyObj->setChatcallDate($this->chatcall_date);
		$copyObj->setChatcallText($this->chatcall_text);
		$copyObj->setLanguage($this->language);
		$copyObj->setRegistrationDate($this->registration_date);
		$copyObj->setExpirationDate($this->expiration_date);
		$copyObj->setActive($this->active);
		$copyObj->setOpenid($this->openid);
		$copyObj->setTheme($this->theme);
		$copyObj->setHrDeptId($this->hr_dept_id);

		$copyObj->setNew(true);
		$copyObj->setUserId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     User Clone of current object.
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
	 * @return     UserPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->user_id = null;
		$this->lastname = null;
		$this->firstname = null;
		$this->username = null;
		$this->password = null;
		$this->auth_source = null;
		$this->email = null;
		$this->status = null;
		$this->official_code = null;
		$this->phone = null;
		$this->picture_uri = null;
		$this->creator_id = null;
		$this->competences = null;
		$this->diplomas = null;
		$this->openarea = null;
		$this->teach = null;
		$this->productions = null;
		$this->chatcall_user_id = null;
		$this->chatcall_date = null;
		$this->chatcall_text = null;
		$this->language = null;
		$this->registration_date = null;
		$this->expiration_date = null;
		$this->active = null;
		$this->openid = null;
		$this->theme = null;
		$this->hr_dept_id = null;
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

} // BaseUser
