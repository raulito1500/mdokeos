<?php


/**
 * Base class that represents a row from the 'group_info' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupInfo extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'GroupInfoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        GroupInfoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the category_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $category_id;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the max_student field.
	 * Note: this column has a database default value of: 8
	 * @var        int
	 */
	protected $max_student;

	/**
	 * The value for the doc_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $doc_state;

	/**
	 * The value for the calendar_state field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $calendar_state;

	/**
	 * The value for the work_state field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $work_state;

	/**
	 * The value for the announcements_state field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $announcements_state;

	/**
	 * The value for the forum_state field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $forum_state;

	/**
	 * The value for the wiki_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $wiki_state;

	/**
	 * The value for the secret_directory field.
	 * @var        string
	 */
	protected $secret_directory;

	/**
	 * The value for the self_registration_allowed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $self_registration_allowed;

	/**
	 * The value for the self_unregistration_allowed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $self_unregistration_allowed;

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
		$this->category_id = 0;
		$this->max_student = 8;
		$this->doc_state = 1;
		$this->calendar_state = 0;
		$this->work_state = 0;
		$this->announcements_state = 0;
		$this->forum_state = 0;
		$this->wiki_state = 1;
		$this->self_registration_allowed = 0;
		$this->self_unregistration_allowed = 0;
		$this->session_id = 0;
	}

	/**
	 * Initializes internal state of BaseGroupInfo object.
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
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [category_id] column value.
	 * 
	 * @return     int
	 */
	public function getCategoryId()
	{
		return $this->category_id;
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
	 * Get the [max_student] column value.
	 * 
	 * @return     int
	 */
	public function getMaxStudent()
	{
		return $this->max_student;
	}

	/**
	 * Get the [doc_state] column value.
	 * 
	 * @return     int
	 */
	public function getDocState()
	{
		return $this->doc_state;
	}

	/**
	 * Get the [calendar_state] column value.
	 * 
	 * @return     int
	 */
	public function getCalendarState()
	{
		return $this->calendar_state;
	}

	/**
	 * Get the [work_state] column value.
	 * 
	 * @return     int
	 */
	public function getWorkState()
	{
		return $this->work_state;
	}

	/**
	 * Get the [announcements_state] column value.
	 * 
	 * @return     int
	 */
	public function getAnnouncementsState()
	{
		return $this->announcements_state;
	}

	/**
	 * Get the [forum_state] column value.
	 * 
	 * @return     int
	 */
	public function getForumState()
	{
		return $this->forum_state;
	}

	/**
	 * Get the [wiki_state] column value.
	 * 
	 * @return     int
	 */
	public function getWikiState()
	{
		return $this->wiki_state;
	}

	/**
	 * Get the [secret_directory] column value.
	 * 
	 * @return     string
	 */
	public function getSecretDirectory()
	{
		return $this->secret_directory;
	}

	/**
	 * Get the [self_registration_allowed] column value.
	 * 
	 * @return     int
	 */
	public function getSelfRegistrationAllowed()
	{
		return $this->self_registration_allowed;
	}

	/**
	 * Get the [self_unregistration_allowed] column value.
	 * 
	 * @return     int
	 */
	public function getSelfUnregistrationAllowed()
	{
		return $this->self_unregistration_allowed;
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = GroupInfoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = GroupInfoPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [category_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setCategoryId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->category_id !== $v || $this->isNew()) {
			$this->category_id = $v;
			$this->modifiedColumns[] = GroupInfoPeer::CATEGORY_ID;
		}

		return $this;
	} // setCategoryId()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = GroupInfoPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [max_student] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setMaxStudent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_student !== $v || $this->isNew()) {
			$this->max_student = $v;
			$this->modifiedColumns[] = GroupInfoPeer::MAX_STUDENT;
		}

		return $this;
	} // setMaxStudent()

	/**
	 * Set the value of [doc_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setDocState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->doc_state !== $v || $this->isNew()) {
			$this->doc_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::DOC_STATE;
		}

		return $this;
	} // setDocState()

	/**
	 * Set the value of [calendar_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setCalendarState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->calendar_state !== $v || $this->isNew()) {
			$this->calendar_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::CALENDAR_STATE;
		}

		return $this;
	} // setCalendarState()

	/**
	 * Set the value of [work_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setWorkState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->work_state !== $v || $this->isNew()) {
			$this->work_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::WORK_STATE;
		}

		return $this;
	} // setWorkState()

	/**
	 * Set the value of [announcements_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setAnnouncementsState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->announcements_state !== $v || $this->isNew()) {
			$this->announcements_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::ANNOUNCEMENTS_STATE;
		}

		return $this;
	} // setAnnouncementsState()

	/**
	 * Set the value of [forum_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setForumState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_state !== $v || $this->isNew()) {
			$this->forum_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::FORUM_STATE;
		}

		return $this;
	} // setForumState()

	/**
	 * Set the value of [wiki_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setWikiState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->wiki_state !== $v || $this->isNew()) {
			$this->wiki_state = $v;
			$this->modifiedColumns[] = GroupInfoPeer::WIKI_STATE;
		}

		return $this;
	} // setWikiState()

	/**
	 * Set the value of [secret_directory] column.
	 * 
	 * @param      string $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setSecretDirectory($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->secret_directory !== $v) {
			$this->secret_directory = $v;
			$this->modifiedColumns[] = GroupInfoPeer::SECRET_DIRECTORY;
		}

		return $this;
	} // setSecretDirectory()

	/**
	 * Set the value of [self_registration_allowed] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setSelfRegistrationAllowed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->self_registration_allowed !== $v || $this->isNew()) {
			$this->self_registration_allowed = $v;
			$this->modifiedColumns[] = GroupInfoPeer::SELF_REGISTRATION_ALLOWED;
		}

		return $this;
	} // setSelfRegistrationAllowed()

	/**
	 * Set the value of [self_unregistration_allowed] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setSelfUnregistrationAllowed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->self_unregistration_allowed !== $v || $this->isNew()) {
			$this->self_unregistration_allowed = $v;
			$this->modifiedColumns[] = GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED;
		}

		return $this;
	} // setSelfUnregistrationAllowed()

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupInfo The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_id !== $v || $this->isNew()) {
			$this->session_id = $v;
			$this->modifiedColumns[] = GroupInfoPeer::SESSION_ID;
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
			if ($this->category_id !== 0) {
				return false;
			}

			if ($this->max_student !== 8) {
				return false;
			}

			if ($this->doc_state !== 1) {
				return false;
			}

			if ($this->calendar_state !== 0) {
				return false;
			}

			if ($this->work_state !== 0) {
				return false;
			}

			if ($this->announcements_state !== 0) {
				return false;
			}

			if ($this->forum_state !== 0) {
				return false;
			}

			if ($this->wiki_state !== 1) {
				return false;
			}

			if ($this->self_registration_allowed !== 0) {
				return false;
			}

			if ($this->self_unregistration_allowed !== 0) {
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

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->category_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->max_student = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->doc_state = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->calendar_state = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->work_state = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->announcements_state = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->forum_state = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->wiki_state = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->secret_directory = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->self_registration_allowed = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->self_unregistration_allowed = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->session_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = GroupInfoPeer::NUM_COLUMNS - GroupInfoPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating GroupInfo object", $e);
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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = GroupInfoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				GroupInfoQuery::create()
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
			$con = Propel::getConnection(GroupInfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				GroupInfoPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = GroupInfoPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(GroupInfoPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupInfoPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = GroupInfoPeer::doUpdate($this, $con);
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


			if (($retval = GroupInfoPeer::doValidate($this, $columns)) !== true) {
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
		$pos = GroupInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getName();
				break;
			case 2:
				return $this->getCategoryId();
				break;
			case 3:
				return $this->getDescription();
				break;
			case 4:
				return $this->getMaxStudent();
				break;
			case 5:
				return $this->getDocState();
				break;
			case 6:
				return $this->getCalendarState();
				break;
			case 7:
				return $this->getWorkState();
				break;
			case 8:
				return $this->getAnnouncementsState();
				break;
			case 9:
				return $this->getForumState();
				break;
			case 10:
				return $this->getWikiState();
				break;
			case 11:
				return $this->getSecretDirectory();
				break;
			case 12:
				return $this->getSelfRegistrationAllowed();
				break;
			case 13:
				return $this->getSelfUnregistrationAllowed();
				break;
			case 14:
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
		$keys = GroupInfoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getCategoryId(),
			$keys[3] => $this->getDescription(),
			$keys[4] => $this->getMaxStudent(),
			$keys[5] => $this->getDocState(),
			$keys[6] => $this->getCalendarState(),
			$keys[7] => $this->getWorkState(),
			$keys[8] => $this->getAnnouncementsState(),
			$keys[9] => $this->getForumState(),
			$keys[10] => $this->getWikiState(),
			$keys[11] => $this->getSecretDirectory(),
			$keys[12] => $this->getSelfRegistrationAllowed(),
			$keys[13] => $this->getSelfUnregistrationAllowed(),
			$keys[14] => $this->getSessionId(),
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
		$pos = GroupInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setName($value);
				break;
			case 2:
				$this->setCategoryId($value);
				break;
			case 3:
				$this->setDescription($value);
				break;
			case 4:
				$this->setMaxStudent($value);
				break;
			case 5:
				$this->setDocState($value);
				break;
			case 6:
				$this->setCalendarState($value);
				break;
			case 7:
				$this->setWorkState($value);
				break;
			case 8:
				$this->setAnnouncementsState($value);
				break;
			case 9:
				$this->setForumState($value);
				break;
			case 10:
				$this->setWikiState($value);
				break;
			case 11:
				$this->setSecretDirectory($value);
				break;
			case 12:
				$this->setSelfRegistrationAllowed($value);
				break;
			case 13:
				$this->setSelfUnregistrationAllowed($value);
				break;
			case 14:
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
		$keys = GroupInfoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCategoryId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMaxStudent($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDocState($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCalendarState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setWorkState($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAnnouncementsState($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setForumState($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setWikiState($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSecretDirectory($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSelfRegistrationAllowed($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSelfUnregistrationAllowed($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setSessionId($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(GroupInfoPeer::DATABASE_NAME);

		if ($this->isColumnModified(GroupInfoPeer::ID)) $criteria->add(GroupInfoPeer::ID, $this->id);
		if ($this->isColumnModified(GroupInfoPeer::NAME)) $criteria->add(GroupInfoPeer::NAME, $this->name);
		if ($this->isColumnModified(GroupInfoPeer::CATEGORY_ID)) $criteria->add(GroupInfoPeer::CATEGORY_ID, $this->category_id);
		if ($this->isColumnModified(GroupInfoPeer::DESCRIPTION)) $criteria->add(GroupInfoPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(GroupInfoPeer::MAX_STUDENT)) $criteria->add(GroupInfoPeer::MAX_STUDENT, $this->max_student);
		if ($this->isColumnModified(GroupInfoPeer::DOC_STATE)) $criteria->add(GroupInfoPeer::DOC_STATE, $this->doc_state);
		if ($this->isColumnModified(GroupInfoPeer::CALENDAR_STATE)) $criteria->add(GroupInfoPeer::CALENDAR_STATE, $this->calendar_state);
		if ($this->isColumnModified(GroupInfoPeer::WORK_STATE)) $criteria->add(GroupInfoPeer::WORK_STATE, $this->work_state);
		if ($this->isColumnModified(GroupInfoPeer::ANNOUNCEMENTS_STATE)) $criteria->add(GroupInfoPeer::ANNOUNCEMENTS_STATE, $this->announcements_state);
		if ($this->isColumnModified(GroupInfoPeer::FORUM_STATE)) $criteria->add(GroupInfoPeer::FORUM_STATE, $this->forum_state);
		if ($this->isColumnModified(GroupInfoPeer::WIKI_STATE)) $criteria->add(GroupInfoPeer::WIKI_STATE, $this->wiki_state);
		if ($this->isColumnModified(GroupInfoPeer::SECRET_DIRECTORY)) $criteria->add(GroupInfoPeer::SECRET_DIRECTORY, $this->secret_directory);
		if ($this->isColumnModified(GroupInfoPeer::SELF_REGISTRATION_ALLOWED)) $criteria->add(GroupInfoPeer::SELF_REGISTRATION_ALLOWED, $this->self_registration_allowed);
		if ($this->isColumnModified(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED)) $criteria->add(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED, $this->self_unregistration_allowed);
		if ($this->isColumnModified(GroupInfoPeer::SESSION_ID)) $criteria->add(GroupInfoPeer::SESSION_ID, $this->session_id);

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
		$criteria = new Criteria(GroupInfoPeer::DATABASE_NAME);
		$criteria->add(GroupInfoPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of GroupInfo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setName($this->name);
		$copyObj->setCategoryId($this->category_id);
		$copyObj->setDescription($this->description);
		$copyObj->setMaxStudent($this->max_student);
		$copyObj->setDocState($this->doc_state);
		$copyObj->setCalendarState($this->calendar_state);
		$copyObj->setWorkState($this->work_state);
		$copyObj->setAnnouncementsState($this->announcements_state);
		$copyObj->setForumState($this->forum_state);
		$copyObj->setWikiState($this->wiki_state);
		$copyObj->setSecretDirectory($this->secret_directory);
		$copyObj->setSelfRegistrationAllowed($this->self_registration_allowed);
		$copyObj->setSelfUnregistrationAllowed($this->self_unregistration_allowed);
		$copyObj->setSessionId($this->session_id);

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
	 * @return     GroupInfo Clone of current object.
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
	 * @return     GroupInfoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new GroupInfoPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->category_id = null;
		$this->description = null;
		$this->max_student = null;
		$this->doc_state = null;
		$this->calendar_state = null;
		$this->work_state = null;
		$this->announcements_state = null;
		$this->forum_state = null;
		$this->wiki_state = null;
		$this->secret_directory = null;
		$this->self_registration_allowed = null;
		$this->self_unregistration_allowed = null;
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

} // BaseGroupInfo
