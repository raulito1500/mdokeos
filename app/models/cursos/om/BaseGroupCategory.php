<?php


/**
 * Base class that represents a row from the 'group_category' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupCategory extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'GroupCategoryPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        GroupCategoryPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the doc_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $doc_state;

	/**
	 * The value for the calendar_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $calendar_state;

	/**
	 * The value for the work_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $work_state;

	/**
	 * The value for the announcements_state field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $announcements_state;

	/**
	 * The value for the forum_state field.
	 * Note: this column has a database default value of: 1
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
	 * The value for the max_student field.
	 * Note: this column has a database default value of: 8
	 * @var        int
	 */
	protected $max_student;

	/**
	 * The value for the self_reg_allowed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $self_reg_allowed;

	/**
	 * The value for the self_unreg_allowed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $self_unreg_allowed;

	/**
	 * The value for the groups_per_user field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $groups_per_user;

	/**
	 * The value for the display_order field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $display_order;

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
		$this->title = '';
		$this->doc_state = 1;
		$this->calendar_state = 1;
		$this->work_state = 1;
		$this->announcements_state = 1;
		$this->forum_state = 1;
		$this->wiki_state = 1;
		$this->max_student = 8;
		$this->self_reg_allowed = 0;
		$this->self_unreg_allowed = 0;
		$this->groups_per_user = 0;
		$this->display_order = 0;
	}

	/**
	 * Initializes internal state of BaseGroupCategory object.
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
	 * Get the [max_student] column value.
	 * 
	 * @return     int
	 */
	public function getMaxStudent()
	{
		return $this->max_student;
	}

	/**
	 * Get the [self_reg_allowed] column value.
	 * 
	 * @return     int
	 */
	public function getSelfRegAllowed()
	{
		return $this->self_reg_allowed;
	}

	/**
	 * Get the [self_unreg_allowed] column value.
	 * 
	 * @return     int
	 */
	public function getSelfUnregAllowed()
	{
		return $this->self_unreg_allowed;
	}

	/**
	 * Get the [groups_per_user] column value.
	 * 
	 * @return     int
	 */
	public function getGroupsPerUser()
	{
		return $this->groups_per_user;
	}

	/**
	 * Get the [display_order] column value.
	 * 
	 * @return     int
	 */
	public function getDisplayOrder()
	{
		return $this->display_order;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v || $this->isNew()) {
			$this->title = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [doc_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setDocState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->doc_state !== $v || $this->isNew()) {
			$this->doc_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::DOC_STATE;
		}

		return $this;
	} // setDocState()

	/**
	 * Set the value of [calendar_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setCalendarState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->calendar_state !== $v || $this->isNew()) {
			$this->calendar_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::CALENDAR_STATE;
		}

		return $this;
	} // setCalendarState()

	/**
	 * Set the value of [work_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setWorkState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->work_state !== $v || $this->isNew()) {
			$this->work_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::WORK_STATE;
		}

		return $this;
	} // setWorkState()

	/**
	 * Set the value of [announcements_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setAnnouncementsState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->announcements_state !== $v || $this->isNew()) {
			$this->announcements_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::ANNOUNCEMENTS_STATE;
		}

		return $this;
	} // setAnnouncementsState()

	/**
	 * Set the value of [forum_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setForumState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_state !== $v || $this->isNew()) {
			$this->forum_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::FORUM_STATE;
		}

		return $this;
	} // setForumState()

	/**
	 * Set the value of [wiki_state] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setWikiState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->wiki_state !== $v || $this->isNew()) {
			$this->wiki_state = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::WIKI_STATE;
		}

		return $this;
	} // setWikiState()

	/**
	 * Set the value of [max_student] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setMaxStudent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_student !== $v || $this->isNew()) {
			$this->max_student = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::MAX_STUDENT;
		}

		return $this;
	} // setMaxStudent()

	/**
	 * Set the value of [self_reg_allowed] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setSelfRegAllowed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->self_reg_allowed !== $v || $this->isNew()) {
			$this->self_reg_allowed = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::SELF_REG_ALLOWED;
		}

		return $this;
	} // setSelfRegAllowed()

	/**
	 * Set the value of [self_unreg_allowed] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setSelfUnregAllowed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->self_unreg_allowed !== $v || $this->isNew()) {
			$this->self_unreg_allowed = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::SELF_UNREG_ALLOWED;
		}

		return $this;
	} // setSelfUnregAllowed()

	/**
	 * Set the value of [groups_per_user] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setGroupsPerUser($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->groups_per_user !== $v || $this->isNew()) {
			$this->groups_per_user = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::GROUPS_PER_USER;
		}

		return $this;
	} // setGroupsPerUser()

	/**
	 * Set the value of [display_order] column.
	 * 
	 * @param      int $v new value
	 * @return     GroupCategory The current object (for fluent API support)
	 */
	public function setDisplayOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->display_order !== $v || $this->isNew()) {
			$this->display_order = $v;
			$this->modifiedColumns[] = GroupCategoryPeer::DISPLAY_ORDER;
		}

		return $this;
	} // setDisplayOrder()

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
			if ($this->title !== '') {
				return false;
			}

			if ($this->doc_state !== 1) {
				return false;
			}

			if ($this->calendar_state !== 1) {
				return false;
			}

			if ($this->work_state !== 1) {
				return false;
			}

			if ($this->announcements_state !== 1) {
				return false;
			}

			if ($this->forum_state !== 1) {
				return false;
			}

			if ($this->wiki_state !== 1) {
				return false;
			}

			if ($this->max_student !== 8) {
				return false;
			}

			if ($this->self_reg_allowed !== 0) {
				return false;
			}

			if ($this->self_unreg_allowed !== 0) {
				return false;
			}

			if ($this->groups_per_user !== 0) {
				return false;
			}

			if ($this->display_order !== 0) {
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
			$this->doc_state = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->calendar_state = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->work_state = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->announcements_state = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->forum_state = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->wiki_state = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->max_student = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->self_reg_allowed = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->self_unreg_allowed = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->groups_per_user = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->display_order = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = GroupCategoryPeer::NUM_COLUMNS - GroupCategoryPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating GroupCategory object", $e);
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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = GroupCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				GroupCategoryQuery::create()
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
			$con = Propel::getConnection(GroupCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				GroupCategoryPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = GroupCategoryPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(GroupCategoryPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.GroupCategoryPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = GroupCategoryPeer::doUpdate($this, $con);
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


			if (($retval = GroupCategoryPeer::doValidate($this, $columns)) !== true) {
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
		$pos = GroupCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDocState();
				break;
			case 4:
				return $this->getCalendarState();
				break;
			case 5:
				return $this->getWorkState();
				break;
			case 6:
				return $this->getAnnouncementsState();
				break;
			case 7:
				return $this->getForumState();
				break;
			case 8:
				return $this->getWikiState();
				break;
			case 9:
				return $this->getMaxStudent();
				break;
			case 10:
				return $this->getSelfRegAllowed();
				break;
			case 11:
				return $this->getSelfUnregAllowed();
				break;
			case 12:
				return $this->getGroupsPerUser();
				break;
			case 13:
				return $this->getDisplayOrder();
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
		$keys = GroupCategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getDocState(),
			$keys[4] => $this->getCalendarState(),
			$keys[5] => $this->getWorkState(),
			$keys[6] => $this->getAnnouncementsState(),
			$keys[7] => $this->getForumState(),
			$keys[8] => $this->getWikiState(),
			$keys[9] => $this->getMaxStudent(),
			$keys[10] => $this->getSelfRegAllowed(),
			$keys[11] => $this->getSelfUnregAllowed(),
			$keys[12] => $this->getGroupsPerUser(),
			$keys[13] => $this->getDisplayOrder(),
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
		$pos = GroupCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDocState($value);
				break;
			case 4:
				$this->setCalendarState($value);
				break;
			case 5:
				$this->setWorkState($value);
				break;
			case 6:
				$this->setAnnouncementsState($value);
				break;
			case 7:
				$this->setForumState($value);
				break;
			case 8:
				$this->setWikiState($value);
				break;
			case 9:
				$this->setMaxStudent($value);
				break;
			case 10:
				$this->setSelfRegAllowed($value);
				break;
			case 11:
				$this->setSelfUnregAllowed($value);
				break;
			case 12:
				$this->setGroupsPerUser($value);
				break;
			case 13:
				$this->setDisplayOrder($value);
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
		$keys = GroupCategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDocState($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCalendarState($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setWorkState($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAnnouncementsState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setForumState($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setWikiState($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMaxStudent($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSelfRegAllowed($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSelfUnregAllowed($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setGroupsPerUser($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDisplayOrder($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(GroupCategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(GroupCategoryPeer::ID)) $criteria->add(GroupCategoryPeer::ID, $this->id);
		if ($this->isColumnModified(GroupCategoryPeer::TITLE)) $criteria->add(GroupCategoryPeer::TITLE, $this->title);
		if ($this->isColumnModified(GroupCategoryPeer::DESCRIPTION)) $criteria->add(GroupCategoryPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(GroupCategoryPeer::DOC_STATE)) $criteria->add(GroupCategoryPeer::DOC_STATE, $this->doc_state);
		if ($this->isColumnModified(GroupCategoryPeer::CALENDAR_STATE)) $criteria->add(GroupCategoryPeer::CALENDAR_STATE, $this->calendar_state);
		if ($this->isColumnModified(GroupCategoryPeer::WORK_STATE)) $criteria->add(GroupCategoryPeer::WORK_STATE, $this->work_state);
		if ($this->isColumnModified(GroupCategoryPeer::ANNOUNCEMENTS_STATE)) $criteria->add(GroupCategoryPeer::ANNOUNCEMENTS_STATE, $this->announcements_state);
		if ($this->isColumnModified(GroupCategoryPeer::FORUM_STATE)) $criteria->add(GroupCategoryPeer::FORUM_STATE, $this->forum_state);
		if ($this->isColumnModified(GroupCategoryPeer::WIKI_STATE)) $criteria->add(GroupCategoryPeer::WIKI_STATE, $this->wiki_state);
		if ($this->isColumnModified(GroupCategoryPeer::MAX_STUDENT)) $criteria->add(GroupCategoryPeer::MAX_STUDENT, $this->max_student);
		if ($this->isColumnModified(GroupCategoryPeer::SELF_REG_ALLOWED)) $criteria->add(GroupCategoryPeer::SELF_REG_ALLOWED, $this->self_reg_allowed);
		if ($this->isColumnModified(GroupCategoryPeer::SELF_UNREG_ALLOWED)) $criteria->add(GroupCategoryPeer::SELF_UNREG_ALLOWED, $this->self_unreg_allowed);
		if ($this->isColumnModified(GroupCategoryPeer::GROUPS_PER_USER)) $criteria->add(GroupCategoryPeer::GROUPS_PER_USER, $this->groups_per_user);
		if ($this->isColumnModified(GroupCategoryPeer::DISPLAY_ORDER)) $criteria->add(GroupCategoryPeer::DISPLAY_ORDER, $this->display_order);

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
		$criteria = new Criteria(GroupCategoryPeer::DATABASE_NAME);
		$criteria->add(GroupCategoryPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of GroupCategory (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setTitle($this->title);
		$copyObj->setDescription($this->description);
		$copyObj->setDocState($this->doc_state);
		$copyObj->setCalendarState($this->calendar_state);
		$copyObj->setWorkState($this->work_state);
		$copyObj->setAnnouncementsState($this->announcements_state);
		$copyObj->setForumState($this->forum_state);
		$copyObj->setWikiState($this->wiki_state);
		$copyObj->setMaxStudent($this->max_student);
		$copyObj->setSelfRegAllowed($this->self_reg_allowed);
		$copyObj->setSelfUnregAllowed($this->self_unreg_allowed);
		$copyObj->setGroupsPerUser($this->groups_per_user);
		$copyObj->setDisplayOrder($this->display_order);

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
	 * @return     GroupCategory Clone of current object.
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
	 * @return     GroupCategoryPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new GroupCategoryPeer();
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
		$this->doc_state = null;
		$this->calendar_state = null;
		$this->work_state = null;
		$this->announcements_state = null;
		$this->forum_state = null;
		$this->wiki_state = null;
		$this->max_student = null;
		$this->self_reg_allowed = null;
		$this->self_unreg_allowed = null;
		$this->groups_per_user = null;
		$this->display_order = null;
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

} // BaseGroupCategory
