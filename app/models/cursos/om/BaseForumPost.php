<?php


/**
 * Base class that represents a row from the 'forum_post' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumPost extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ForumPostPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ForumPostPeer
	 */
	protected static $peer;

	/**
	 * The value for the post_id field.
	 * @var        int
	 */
	protected $post_id;

	/**
	 * The value for the post_title field.
	 * @var        string
	 */
	protected $post_title;

	/**
	 * The value for the post_text field.
	 * @var        string
	 */
	protected $post_text;

	/**
	 * The value for the thread_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $thread_id;

	/**
	 * The value for the forum_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $forum_id;

	/**
	 * The value for the poster_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $poster_id;

	/**
	 * The value for the poster_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $poster_name;

	/**
	 * The value for the post_date field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $post_date;

	/**
	 * The value for the post_notification field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $post_notification;

	/**
	 * The value for the post_parent_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $post_parent_id;

	/**
	 * The value for the visible field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $visible;

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
		$this->thread_id = 0;
		$this->forum_id = 0;
		$this->poster_id = 0;
		$this->poster_name = '';
		$this->post_date = NULL;
		$this->post_notification = 0;
		$this->post_parent_id = 0;
		$this->visible = 1;
	}

	/**
	 * Initializes internal state of BaseForumPost object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [post_id] column value.
	 * 
	 * @return     int
	 */
	public function getPostId()
	{
		return $this->post_id;
	}

	/**
	 * Get the [post_title] column value.
	 * 
	 * @return     string
	 */
	public function getPostTitle()
	{
		return $this->post_title;
	}

	/**
	 * Get the [post_text] column value.
	 * 
	 * @return     string
	 */
	public function getPostText()
	{
		return $this->post_text;
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
	 * Get the [forum_id] column value.
	 * 
	 * @return     int
	 */
	public function getForumId()
	{
		return $this->forum_id;
	}

	/**
	 * Get the [poster_id] column value.
	 * 
	 * @return     int
	 */
	public function getPosterId()
	{
		return $this->poster_id;
	}

	/**
	 * Get the [poster_name] column value.
	 * 
	 * @return     string
	 */
	public function getPosterName()
	{
		return $this->poster_name;
	}

	/**
	 * Get the [optionally formatted] temporal [post_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPostDate($format = 'Y-m-d H:i:s')
	{
		if ($this->post_date === null) {
			return null;
		}


		if ($this->post_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->post_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_date, true), $x);
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
	 * Get the [post_notification] column value.
	 * 
	 * @return     int
	 */
	public function getPostNotification()
	{
		return $this->post_notification;
	}

	/**
	 * Get the [post_parent_id] column value.
	 * 
	 * @return     int
	 */
	public function getPostParentId()
	{
		return $this->post_parent_id;
	}

	/**
	 * Get the [visible] column value.
	 * 
	 * @return     int
	 */
	public function getVisible()
	{
		return $this->visible;
	}

	/**
	 * Set the value of [post_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->post_id !== $v) {
			$this->post_id = $v;
			$this->modifiedColumns[] = ForumPostPeer::POST_ID;
		}

		return $this;
	} // setPostId()

	/**
	 * Set the value of [post_title] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->post_title !== $v) {
			$this->post_title = $v;
			$this->modifiedColumns[] = ForumPostPeer::POST_TITLE;
		}

		return $this;
	} // setPostTitle()

	/**
	 * Set the value of [post_text] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostText($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->post_text !== $v) {
			$this->post_text = $v;
			$this->modifiedColumns[] = ForumPostPeer::POST_TEXT;
		}

		return $this;
	} // setPostText()

	/**
	 * Set the value of [thread_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setThreadId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->thread_id !== $v || $this->isNew()) {
			$this->thread_id = $v;
			$this->modifiedColumns[] = ForumPostPeer::THREAD_ID;
		}

		return $this;
	} // setThreadId()

	/**
	 * Set the value of [forum_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setForumId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_id !== $v || $this->isNew()) {
			$this->forum_id = $v;
			$this->modifiedColumns[] = ForumPostPeer::FORUM_ID;
		}

		return $this;
	} // setForumId()

	/**
	 * Set the value of [poster_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPosterId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->poster_id !== $v || $this->isNew()) {
			$this->poster_id = $v;
			$this->modifiedColumns[] = ForumPostPeer::POSTER_ID;
		}

		return $this;
	} // setPosterId()

	/**
	 * Set the value of [poster_name] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPosterName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->poster_name !== $v || $this->isNew()) {
			$this->poster_name = $v;
			$this->modifiedColumns[] = ForumPostPeer::POSTER_NAME;
		}

		return $this;
	} // setPosterName()

	/**
	 * Sets the value of [post_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostDate($v)
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

		if ( $this->post_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->post_date !== null && $tmpDt = new DateTime($this->post_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->post_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ForumPostPeer::POST_DATE;
			}
		} // if either are not null

		return $this;
	} // setPostDate()

	/**
	 * Set the value of [post_notification] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostNotification($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->post_notification !== $v || $this->isNew()) {
			$this->post_notification = $v;
			$this->modifiedColumns[] = ForumPostPeer::POST_NOTIFICATION;
		}

		return $this;
	} // setPostNotification()

	/**
	 * Set the value of [post_parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setPostParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->post_parent_id !== $v || $this->isNew()) {
			$this->post_parent_id = $v;
			$this->modifiedColumns[] = ForumPostPeer::POST_PARENT_ID;
		}

		return $this;
	} // setPostParentId()

	/**
	 * Set the value of [visible] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumPost The current object (for fluent API support)
	 */
	public function setVisible($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visible !== $v || $this->isNew()) {
			$this->visible = $v;
			$this->modifiedColumns[] = ForumPostPeer::VISIBLE;
		}

		return $this;
	} // setVisible()

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
			if ($this->thread_id !== 0) {
				return false;
			}

			if ($this->forum_id !== 0) {
				return false;
			}

			if ($this->poster_id !== 0) {
				return false;
			}

			if ($this->poster_name !== '') {
				return false;
			}

			if ($this->post_date !== NULL) {
				return false;
			}

			if ($this->post_notification !== 0) {
				return false;
			}

			if ($this->post_parent_id !== 0) {
				return false;
			}

			if ($this->visible !== 1) {
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

			$this->post_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->post_title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->post_text = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->thread_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->forum_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->poster_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->poster_name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->post_date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->post_notification = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->post_parent_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->visible = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = ForumPostPeer::NUM_COLUMNS - ForumPostPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ForumPost object", $e);
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
			$con = Propel::getConnection(ForumPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ForumPostPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ForumPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ForumPostQuery::create()
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
			$con = Propel::getConnection(ForumPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ForumPostPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ForumPostPeer::POST_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ForumPostPeer::POST_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ForumPostPeer::POST_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setPostId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ForumPostPeer::doUpdate($this, $con);
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


			if (($retval = ForumPostPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ForumPostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPostId();
				break;
			case 1:
				return $this->getPostTitle();
				break;
			case 2:
				return $this->getPostText();
				break;
			case 3:
				return $this->getThreadId();
				break;
			case 4:
				return $this->getForumId();
				break;
			case 5:
				return $this->getPosterId();
				break;
			case 6:
				return $this->getPosterName();
				break;
			case 7:
				return $this->getPostDate();
				break;
			case 8:
				return $this->getPostNotification();
				break;
			case 9:
				return $this->getPostParentId();
				break;
			case 10:
				return $this->getVisible();
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
		$keys = ForumPostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getPostId(),
			$keys[1] => $this->getPostTitle(),
			$keys[2] => $this->getPostText(),
			$keys[3] => $this->getThreadId(),
			$keys[4] => $this->getForumId(),
			$keys[5] => $this->getPosterId(),
			$keys[6] => $this->getPosterName(),
			$keys[7] => $this->getPostDate(),
			$keys[8] => $this->getPostNotification(),
			$keys[9] => $this->getPostParentId(),
			$keys[10] => $this->getVisible(),
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
		$pos = ForumPostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPostId($value);
				break;
			case 1:
				$this->setPostTitle($value);
				break;
			case 2:
				$this->setPostText($value);
				break;
			case 3:
				$this->setThreadId($value);
				break;
			case 4:
				$this->setForumId($value);
				break;
			case 5:
				$this->setPosterId($value);
				break;
			case 6:
				$this->setPosterName($value);
				break;
			case 7:
				$this->setPostDate($value);
				break;
			case 8:
				$this->setPostNotification($value);
				break;
			case 9:
				$this->setPostParentId($value);
				break;
			case 10:
				$this->setVisible($value);
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
		$keys = ForumPostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setPostId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPostTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPostText($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setThreadId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setForumId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPosterId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPosterName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPostDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPostNotification($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPostParentId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVisible($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ForumPostPeer::DATABASE_NAME);

		if ($this->isColumnModified(ForumPostPeer::POST_ID)) $criteria->add(ForumPostPeer::POST_ID, $this->post_id);
		if ($this->isColumnModified(ForumPostPeer::POST_TITLE)) $criteria->add(ForumPostPeer::POST_TITLE, $this->post_title);
		if ($this->isColumnModified(ForumPostPeer::POST_TEXT)) $criteria->add(ForumPostPeer::POST_TEXT, $this->post_text);
		if ($this->isColumnModified(ForumPostPeer::THREAD_ID)) $criteria->add(ForumPostPeer::THREAD_ID, $this->thread_id);
		if ($this->isColumnModified(ForumPostPeer::FORUM_ID)) $criteria->add(ForumPostPeer::FORUM_ID, $this->forum_id);
		if ($this->isColumnModified(ForumPostPeer::POSTER_ID)) $criteria->add(ForumPostPeer::POSTER_ID, $this->poster_id);
		if ($this->isColumnModified(ForumPostPeer::POSTER_NAME)) $criteria->add(ForumPostPeer::POSTER_NAME, $this->poster_name);
		if ($this->isColumnModified(ForumPostPeer::POST_DATE)) $criteria->add(ForumPostPeer::POST_DATE, $this->post_date);
		if ($this->isColumnModified(ForumPostPeer::POST_NOTIFICATION)) $criteria->add(ForumPostPeer::POST_NOTIFICATION, $this->post_notification);
		if ($this->isColumnModified(ForumPostPeer::POST_PARENT_ID)) $criteria->add(ForumPostPeer::POST_PARENT_ID, $this->post_parent_id);
		if ($this->isColumnModified(ForumPostPeer::VISIBLE)) $criteria->add(ForumPostPeer::VISIBLE, $this->visible);

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
		$criteria = new Criteria(ForumPostPeer::DATABASE_NAME);
		$criteria->add(ForumPostPeer::POST_ID, $this->post_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getPostId();
	}

	/**
	 * Generic method to set the primary key (post_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setPostId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getPostId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ForumPost (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setPostTitle($this->post_title);
		$copyObj->setPostText($this->post_text);
		$copyObj->setThreadId($this->thread_id);
		$copyObj->setForumId($this->forum_id);
		$copyObj->setPosterId($this->poster_id);
		$copyObj->setPosterName($this->poster_name);
		$copyObj->setPostDate($this->post_date);
		$copyObj->setPostNotification($this->post_notification);
		$copyObj->setPostParentId($this->post_parent_id);
		$copyObj->setVisible($this->visible);

		$copyObj->setNew(true);
		$copyObj->setPostId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     ForumPost Clone of current object.
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
	 * @return     ForumPostPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ForumPostPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->post_id = null;
		$this->post_title = null;
		$this->post_text = null;
		$this->thread_id = null;
		$this->forum_id = null;
		$this->poster_id = null;
		$this->poster_name = null;
		$this->post_date = null;
		$this->post_notification = null;
		$this->post_parent_id = null;
		$this->visible = null;
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

} // BaseForumPost
