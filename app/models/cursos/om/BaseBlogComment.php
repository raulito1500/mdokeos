<?php


/**
 * Base class that represents a row from the 'blog_comment' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogComment extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'BlogCommentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        BlogCommentPeer
	 */
	protected static $peer;

	/**
	 * The value for the comment_id field.
	 * @var        int
	 */
	protected $comment_id;

	/**
	 * The value for the title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the comment field.
	 * @var        string
	 */
	protected $comment;

	/**
	 * The value for the author_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $author_id;

	/**
	 * The value for the date_creation field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $date_creation;

	/**
	 * The value for the blog_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $blog_id;

	/**
	 * The value for the post_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $post_id;

	/**
	 * The value for the task_id field.
	 * @var        int
	 */
	protected $task_id;

	/**
	 * The value for the parent_comment_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $parent_comment_id;

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
		$this->author_id = 0;
		$this->date_creation = NULL;
		$this->blog_id = 0;
		$this->post_id = 0;
		$this->parent_comment_id = 0;
	}

	/**
	 * Initializes internal state of BaseBlogComment object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [comment_id] column value.
	 * 
	 * @return     int
	 */
	public function getCommentId()
	{
		return $this->comment_id;
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
	 * Get the [comment] column value.
	 * 
	 * @return     string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Get the [author_id] column value.
	 * 
	 * @return     int
	 */
	public function getAuthorId()
	{
		return $this->author_id;
	}

	/**
	 * Get the [optionally formatted] temporal [date_creation] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateCreation($format = 'Y-m-d H:i:s')
	{
		if ($this->date_creation === null) {
			return null;
		}


		if ($this->date_creation === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_creation);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
	 * Get the [blog_id] column value.
	 * 
	 * @return     int
	 */
	public function getBlogId()
	{
		return $this->blog_id;
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
	 * Get the [task_id] column value.
	 * 
	 * @return     int
	 */
	public function getTaskId()
	{
		return $this->task_id;
	}

	/**
	 * Get the [parent_comment_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentCommentId()
	{
		return $this->parent_comment_id;
	}

	/**
	 * Set the value of [comment_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setCommentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->comment_id !== $v) {
			$this->comment_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::COMMENT_ID;
		}

		return $this;
	} // setCommentId()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v || $this->isNew()) {
			$this->title = $v;
			$this->modifiedColumns[] = BlogCommentPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [comment] column.
	 * 
	 * @param      string $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comment !== $v) {
			$this->comment = $v;
			$this->modifiedColumns[] = BlogCommentPeer::COMMENT;
		}

		return $this;
	} // setComment()

	/**
	 * Set the value of [author_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setAuthorId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->author_id !== $v || $this->isNew()) {
			$this->author_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::AUTHOR_ID;
		}

		return $this;
	} // setAuthorId()

	/**
	 * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setDateCreation($v)
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

		if ( $this->date_creation !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->date_creation = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = BlogCommentPeer::DATE_CREATION;
			}
		} // if either are not null

		return $this;
	} // setDateCreation()

	/**
	 * Set the value of [blog_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setBlogId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->blog_id !== $v || $this->isNew()) {
			$this->blog_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::BLOG_ID;
		}

		return $this;
	} // setBlogId()

	/**
	 * Set the value of [post_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setPostId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->post_id !== $v || $this->isNew()) {
			$this->post_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::POST_ID;
		}

		return $this;
	} // setPostId()

	/**
	 * Set the value of [task_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setTaskId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->task_id !== $v) {
			$this->task_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::TASK_ID;
		}

		return $this;
	} // setTaskId()

	/**
	 * Set the value of [parent_comment_id] column.
	 * 
	 * @param      int $v new value
	 * @return     BlogComment The current object (for fluent API support)
	 */
	public function setParentCommentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_comment_id !== $v || $this->isNew()) {
			$this->parent_comment_id = $v;
			$this->modifiedColumns[] = BlogCommentPeer::PARENT_COMMENT_ID;
		}

		return $this;
	} // setParentCommentId()

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

			if ($this->author_id !== 0) {
				return false;
			}

			if ($this->date_creation !== NULL) {
				return false;
			}

			if ($this->blog_id !== 0) {
				return false;
			}

			if ($this->post_id !== 0) {
				return false;
			}

			if ($this->parent_comment_id !== 0) {
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

			$this->comment_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->comment = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->author_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->date_creation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->blog_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->post_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->task_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->parent_comment_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = BlogCommentPeer::NUM_COLUMNS - BlogCommentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating BlogComment object", $e);
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
			$con = Propel::getConnection(BlogCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = BlogCommentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(BlogCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				BlogCommentQuery::create()
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
			$con = Propel::getConnection(BlogCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				BlogCommentPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = BlogCommentPeer::COMMENT_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(BlogCommentPeer::COMMENT_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.BlogCommentPeer::COMMENT_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setCommentId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = BlogCommentPeer::doUpdate($this, $con);
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


			if (($retval = BlogCommentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = BlogCommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCommentId();
				break;
			case 1:
				return $this->getTitle();
				break;
			case 2:
				return $this->getComment();
				break;
			case 3:
				return $this->getAuthorId();
				break;
			case 4:
				return $this->getDateCreation();
				break;
			case 5:
				return $this->getBlogId();
				break;
			case 6:
				return $this->getPostId();
				break;
			case 7:
				return $this->getTaskId();
				break;
			case 8:
				return $this->getParentCommentId();
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
		$keys = BlogCommentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCommentId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getComment(),
			$keys[3] => $this->getAuthorId(),
			$keys[4] => $this->getDateCreation(),
			$keys[5] => $this->getBlogId(),
			$keys[6] => $this->getPostId(),
			$keys[7] => $this->getTaskId(),
			$keys[8] => $this->getParentCommentId(),
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
		$pos = BlogCommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCommentId($value);
				break;
			case 1:
				$this->setTitle($value);
				break;
			case 2:
				$this->setComment($value);
				break;
			case 3:
				$this->setAuthorId($value);
				break;
			case 4:
				$this->setDateCreation($value);
				break;
			case 5:
				$this->setBlogId($value);
				break;
			case 6:
				$this->setPostId($value);
				break;
			case 7:
				$this->setTaskId($value);
				break;
			case 8:
				$this->setParentCommentId($value);
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
		$keys = BlogCommentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCommentId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setComment($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAuthorId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateCreation($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBlogId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPostId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTaskId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setParentCommentId($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(BlogCommentPeer::DATABASE_NAME);

		if ($this->isColumnModified(BlogCommentPeer::COMMENT_ID)) $criteria->add(BlogCommentPeer::COMMENT_ID, $this->comment_id);
		if ($this->isColumnModified(BlogCommentPeer::TITLE)) $criteria->add(BlogCommentPeer::TITLE, $this->title);
		if ($this->isColumnModified(BlogCommentPeer::COMMENT)) $criteria->add(BlogCommentPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(BlogCommentPeer::AUTHOR_ID)) $criteria->add(BlogCommentPeer::AUTHOR_ID, $this->author_id);
		if ($this->isColumnModified(BlogCommentPeer::DATE_CREATION)) $criteria->add(BlogCommentPeer::DATE_CREATION, $this->date_creation);
		if ($this->isColumnModified(BlogCommentPeer::BLOG_ID)) $criteria->add(BlogCommentPeer::BLOG_ID, $this->blog_id);
		if ($this->isColumnModified(BlogCommentPeer::POST_ID)) $criteria->add(BlogCommentPeer::POST_ID, $this->post_id);
		if ($this->isColumnModified(BlogCommentPeer::TASK_ID)) $criteria->add(BlogCommentPeer::TASK_ID, $this->task_id);
		if ($this->isColumnModified(BlogCommentPeer::PARENT_COMMENT_ID)) $criteria->add(BlogCommentPeer::PARENT_COMMENT_ID, $this->parent_comment_id);

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
		$criteria = new Criteria(BlogCommentPeer::DATABASE_NAME);
		$criteria->add(BlogCommentPeer::COMMENT_ID, $this->comment_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCommentId();
	}

	/**
	 * Generic method to set the primary key (comment_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCommentId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCommentId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of BlogComment (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setTitle($this->title);
		$copyObj->setComment($this->comment);
		$copyObj->setAuthorId($this->author_id);
		$copyObj->setDateCreation($this->date_creation);
		$copyObj->setBlogId($this->blog_id);
		$copyObj->setPostId($this->post_id);
		$copyObj->setTaskId($this->task_id);
		$copyObj->setParentCommentId($this->parent_comment_id);

		$copyObj->setNew(true);
		$copyObj->setCommentId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     BlogComment Clone of current object.
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
	 * @return     BlogCommentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new BlogCommentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->comment_id = null;
		$this->title = null;
		$this->comment = null;
		$this->author_id = null;
		$this->date_creation = null;
		$this->blog_id = null;
		$this->post_id = null;
		$this->task_id = null;
		$this->parent_comment_id = null;
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

} // BaseBlogComment
