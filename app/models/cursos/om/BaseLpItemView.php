<?php


/**
 * Base class that represents a row from the 'lp_item_view' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItemView extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'LpItemViewPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        LpItemViewPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        string
	 */
	protected $id;

	/**
	 * The value for the lp_item_id field.
	 * @var        int
	 */
	protected $lp_item_id;

	/**
	 * The value for the lp_view_id field.
	 * @var        int
	 */
	protected $lp_view_id;

	/**
	 * The value for the view_count field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $view_count;

	/**
	 * The value for the start_time field.
	 * @var        int
	 */
	protected $start_time;

	/**
	 * The value for the total_time field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $total_time;

	/**
	 * The value for the score field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $score;

	/**
	 * The value for the status field.
	 * Note: this column has a database default value of: 'not attempted'
	 * @var        string
	 */
	protected $status;

	/**
	 * The value for the suspend_data field.
	 * @var        string
	 */
	protected $suspend_data;

	/**
	 * The value for the lesson_location field.
	 * @var        string
	 */
	protected $lesson_location;

	/**
	 * The value for the core_exit field.
	 * Note: this column has a database default value of: 'none'
	 * @var        string
	 */
	protected $core_exit;

	/**
	 * The value for the max_score field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $max_score;

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
		$this->view_count = 0;
		$this->total_time = 0;
		$this->score = 0;
		$this->status = 'not attempted';
		$this->core_exit = 'none';
		$this->max_score = '';
	}

	/**
	 * Initializes internal state of BaseLpItemView object.
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
	 * @return     string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [lp_item_id] column value.
	 * 
	 * @return     int
	 */
	public function getLpItemId()
	{
		return $this->lp_item_id;
	}

	/**
	 * Get the [lp_view_id] column value.
	 * 
	 * @return     int
	 */
	public function getLpViewId()
	{
		return $this->lp_view_id;
	}

	/**
	 * Get the [view_count] column value.
	 * 
	 * @return     int
	 */
	public function getViewCount()
	{
		return $this->view_count;
	}

	/**
	 * Get the [start_time] column value.
	 * 
	 * @return     int
	 */
	public function getStartTime()
	{
		return $this->start_time;
	}

	/**
	 * Get the [total_time] column value.
	 * 
	 * @return     int
	 */
	public function getTotalTime()
	{
		return $this->total_time;
	}

	/**
	 * Get the [score] column value.
	 * 
	 * @return     double
	 */
	public function getScore()
	{
		return $this->score;
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Get the [suspend_data] column value.
	 * 
	 * @return     string
	 */
	public function getSuspendData()
	{
		return $this->suspend_data;
	}

	/**
	 * Get the [lesson_location] column value.
	 * 
	 * @return     string
	 */
	public function getLessonLocation()
	{
		return $this->lesson_location;
	}

	/**
	 * Get the [core_exit] column value.
	 * 
	 * @return     string
	 */
	public function getCoreExit()
	{
		return $this->core_exit;
	}

	/**
	 * Get the [max_score] column value.
	 * 
	 * @return     string
	 */
	public function getMaxScore()
	{
		return $this->max_score;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LpItemViewPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [lp_item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setLpItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lp_item_id !== $v) {
			$this->lp_item_id = $v;
			$this->modifiedColumns[] = LpItemViewPeer::LP_ITEM_ID;
		}

		return $this;
	} // setLpItemId()

	/**
	 * Set the value of [lp_view_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setLpViewId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lp_view_id !== $v) {
			$this->lp_view_id = $v;
			$this->modifiedColumns[] = LpItemViewPeer::LP_VIEW_ID;
		}

		return $this;
	} // setLpViewId()

	/**
	 * Set the value of [view_count] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setViewCount($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->view_count !== $v || $this->isNew()) {
			$this->view_count = $v;
			$this->modifiedColumns[] = LpItemViewPeer::VIEW_COUNT;
		}

		return $this;
	} // setViewCount()

	/**
	 * Set the value of [start_time] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setStartTime($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->start_time !== $v) {
			$this->start_time = $v;
			$this->modifiedColumns[] = LpItemViewPeer::START_TIME;
		}

		return $this;
	} // setStartTime()

	/**
	 * Set the value of [total_time] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setTotalTime($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->total_time !== $v || $this->isNew()) {
			$this->total_time = $v;
			$this->modifiedColumns[] = LpItemViewPeer::TOTAL_TIME;
		}

		return $this;
	} // setTotalTime()

	/**
	 * Set the value of [score] column.
	 * 
	 * @param      double $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setScore($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->score !== $v || $this->isNew()) {
			$this->score = $v;
			$this->modifiedColumns[] = LpItemViewPeer::SCORE;
		}

		return $this;
	} // setScore()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v || $this->isNew()) {
			$this->status = $v;
			$this->modifiedColumns[] = LpItemViewPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Set the value of [suspend_data] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setSuspendData($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->suspend_data !== $v) {
			$this->suspend_data = $v;
			$this->modifiedColumns[] = LpItemViewPeer::SUSPEND_DATA;
		}

		return $this;
	} // setSuspendData()

	/**
	 * Set the value of [lesson_location] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setLessonLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lesson_location !== $v) {
			$this->lesson_location = $v;
			$this->modifiedColumns[] = LpItemViewPeer::LESSON_LOCATION;
		}

		return $this;
	} // setLessonLocation()

	/**
	 * Set the value of [core_exit] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setCoreExit($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->core_exit !== $v || $this->isNew()) {
			$this->core_exit = $v;
			$this->modifiedColumns[] = LpItemViewPeer::CORE_EXIT;
		}

		return $this;
	} // setCoreExit()

	/**
	 * Set the value of [max_score] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItemView The current object (for fluent API support)
	 */
	public function setMaxScore($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->max_score !== $v || $this->isNew()) {
			$this->max_score = $v;
			$this->modifiedColumns[] = LpItemViewPeer::MAX_SCORE;
		}

		return $this;
	} // setMaxScore()

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
			if ($this->view_count !== 0) {
				return false;
			}

			if ($this->total_time !== 0) {
				return false;
			}

			if ($this->score !== 0) {
				return false;
			}

			if ($this->status !== 'not attempted') {
				return false;
			}

			if ($this->core_exit !== 'none') {
				return false;
			}

			if ($this->max_score !== '') {
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

			$this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->lp_item_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->lp_view_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->view_count = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->start_time = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->total_time = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->score = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->status = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->suspend_data = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->lesson_location = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->core_exit = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->max_score = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = LpItemViewPeer::NUM_COLUMNS - LpItemViewPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating LpItemView object", $e);
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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = LpItemViewPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				LpItemViewQuery::create()
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
			$con = Propel::getConnection(LpItemViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				LpItemViewPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = LpItemViewPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(LpItemViewPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.LpItemViewPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = LpItemViewPeer::doUpdate($this, $con);
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


			if (($retval = LpItemViewPeer::doValidate($this, $columns)) !== true) {
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
		$pos = LpItemViewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLpItemId();
				break;
			case 2:
				return $this->getLpViewId();
				break;
			case 3:
				return $this->getViewCount();
				break;
			case 4:
				return $this->getStartTime();
				break;
			case 5:
				return $this->getTotalTime();
				break;
			case 6:
				return $this->getScore();
				break;
			case 7:
				return $this->getStatus();
				break;
			case 8:
				return $this->getSuspendData();
				break;
			case 9:
				return $this->getLessonLocation();
				break;
			case 10:
				return $this->getCoreExit();
				break;
			case 11:
				return $this->getMaxScore();
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
		$keys = LpItemViewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLpItemId(),
			$keys[2] => $this->getLpViewId(),
			$keys[3] => $this->getViewCount(),
			$keys[4] => $this->getStartTime(),
			$keys[5] => $this->getTotalTime(),
			$keys[6] => $this->getScore(),
			$keys[7] => $this->getStatus(),
			$keys[8] => $this->getSuspendData(),
			$keys[9] => $this->getLessonLocation(),
			$keys[10] => $this->getCoreExit(),
			$keys[11] => $this->getMaxScore(),
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
		$pos = LpItemViewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLpItemId($value);
				break;
			case 2:
				$this->setLpViewId($value);
				break;
			case 3:
				$this->setViewCount($value);
				break;
			case 4:
				$this->setStartTime($value);
				break;
			case 5:
				$this->setTotalTime($value);
				break;
			case 6:
				$this->setScore($value);
				break;
			case 7:
				$this->setStatus($value);
				break;
			case 8:
				$this->setSuspendData($value);
				break;
			case 9:
				$this->setLessonLocation($value);
				break;
			case 10:
				$this->setCoreExit($value);
				break;
			case 11:
				$this->setMaxScore($value);
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
		$keys = LpItemViewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLpItemId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLpViewId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setViewCount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStartTime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTotalTime($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setScore($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStatus($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSuspendData($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLessonLocation($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCoreExit($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setMaxScore($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(LpItemViewPeer::DATABASE_NAME);

		if ($this->isColumnModified(LpItemViewPeer::ID)) $criteria->add(LpItemViewPeer::ID, $this->id);
		if ($this->isColumnModified(LpItemViewPeer::LP_ITEM_ID)) $criteria->add(LpItemViewPeer::LP_ITEM_ID, $this->lp_item_id);
		if ($this->isColumnModified(LpItemViewPeer::LP_VIEW_ID)) $criteria->add(LpItemViewPeer::LP_VIEW_ID, $this->lp_view_id);
		if ($this->isColumnModified(LpItemViewPeer::VIEW_COUNT)) $criteria->add(LpItemViewPeer::VIEW_COUNT, $this->view_count);
		if ($this->isColumnModified(LpItemViewPeer::START_TIME)) $criteria->add(LpItemViewPeer::START_TIME, $this->start_time);
		if ($this->isColumnModified(LpItemViewPeer::TOTAL_TIME)) $criteria->add(LpItemViewPeer::TOTAL_TIME, $this->total_time);
		if ($this->isColumnModified(LpItemViewPeer::SCORE)) $criteria->add(LpItemViewPeer::SCORE, $this->score);
		if ($this->isColumnModified(LpItemViewPeer::STATUS)) $criteria->add(LpItemViewPeer::STATUS, $this->status);
		if ($this->isColumnModified(LpItemViewPeer::SUSPEND_DATA)) $criteria->add(LpItemViewPeer::SUSPEND_DATA, $this->suspend_data);
		if ($this->isColumnModified(LpItemViewPeer::LESSON_LOCATION)) $criteria->add(LpItemViewPeer::LESSON_LOCATION, $this->lesson_location);
		if ($this->isColumnModified(LpItemViewPeer::CORE_EXIT)) $criteria->add(LpItemViewPeer::CORE_EXIT, $this->core_exit);
		if ($this->isColumnModified(LpItemViewPeer::MAX_SCORE)) $criteria->add(LpItemViewPeer::MAX_SCORE, $this->max_score);

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
		$criteria = new Criteria(LpItemViewPeer::DATABASE_NAME);
		$criteria->add(LpItemViewPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      string $key Primary key.
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
	 * @param      object $copyObj An object of LpItemView (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setLpItemId($this->lp_item_id);
		$copyObj->setLpViewId($this->lp_view_id);
		$copyObj->setViewCount($this->view_count);
		$copyObj->setStartTime($this->start_time);
		$copyObj->setTotalTime($this->total_time);
		$copyObj->setScore($this->score);
		$copyObj->setStatus($this->status);
		$copyObj->setSuspendData($this->suspend_data);
		$copyObj->setLessonLocation($this->lesson_location);
		$copyObj->setCoreExit($this->core_exit);
		$copyObj->setMaxScore($this->max_score);

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
	 * @return     LpItemView Clone of current object.
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
	 * @return     LpItemViewPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new LpItemViewPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->lp_item_id = null;
		$this->lp_view_id = null;
		$this->view_count = null;
		$this->start_time = null;
		$this->total_time = null;
		$this->score = null;
		$this->status = null;
		$this->suspend_data = null;
		$this->lesson_location = null;
		$this->core_exit = null;
		$this->max_score = null;
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

} // BaseLpItemView
