<?php


/**
 * Base class that represents a row from the 'calendar_event_repeat' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCalendarEventRepeat extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CalendarEventRepeatPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CalendarEventRepeatPeer
	 */
	protected static $peer;

	/**
	 * The value for the cal_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $cal_id;

	/**
	 * The value for the cal_type field.
	 * @var        string
	 */
	protected $cal_type;

	/**
	 * The value for the cal_end field.
	 * @var        int
	 */
	protected $cal_end;

	/**
	 * The value for the cal_frequency field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $cal_frequency;

	/**
	 * The value for the cal_days field.
	 * @var        string
	 */
	protected $cal_days;

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
		$this->cal_id = 0;
		$this->cal_frequency = 1;
	}

	/**
	 * Initializes internal state of BaseCalendarEventRepeat object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [cal_id] column value.
	 * 
	 * @return     int
	 */
	public function getCalId()
	{
		return $this->cal_id;
	}

	/**
	 * Get the [cal_type] column value.
	 * 
	 * @return     string
	 */
	public function getCalType()
	{
		return $this->cal_type;
	}

	/**
	 * Get the [cal_end] column value.
	 * 
	 * @return     int
	 */
	public function getCalEnd()
	{
		return $this->cal_end;
	}

	/**
	 * Get the [cal_frequency] column value.
	 * 
	 * @return     int
	 */
	public function getCalFrequency()
	{
		return $this->cal_frequency;
	}

	/**
	 * Get the [cal_days] column value.
	 * 
	 * @return     string
	 */
	public function getCalDays()
	{
		return $this->cal_days;
	}

	/**
	 * Set the value of [cal_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CalendarEventRepeat The current object (for fluent API support)
	 */
	public function setCalId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cal_id !== $v || $this->isNew()) {
			$this->cal_id = $v;
			$this->modifiedColumns[] = CalendarEventRepeatPeer::CAL_ID;
		}

		return $this;
	} // setCalId()

	/**
	 * Set the value of [cal_type] column.
	 * 
	 * @param      string $v new value
	 * @return     CalendarEventRepeat The current object (for fluent API support)
	 */
	public function setCalType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cal_type !== $v) {
			$this->cal_type = $v;
			$this->modifiedColumns[] = CalendarEventRepeatPeer::CAL_TYPE;
		}

		return $this;
	} // setCalType()

	/**
	 * Set the value of [cal_end] column.
	 * 
	 * @param      int $v new value
	 * @return     CalendarEventRepeat The current object (for fluent API support)
	 */
	public function setCalEnd($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cal_end !== $v) {
			$this->cal_end = $v;
			$this->modifiedColumns[] = CalendarEventRepeatPeer::CAL_END;
		}

		return $this;
	} // setCalEnd()

	/**
	 * Set the value of [cal_frequency] column.
	 * 
	 * @param      int $v new value
	 * @return     CalendarEventRepeat The current object (for fluent API support)
	 */
	public function setCalFrequency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cal_frequency !== $v || $this->isNew()) {
			$this->cal_frequency = $v;
			$this->modifiedColumns[] = CalendarEventRepeatPeer::CAL_FREQUENCY;
		}

		return $this;
	} // setCalFrequency()

	/**
	 * Set the value of [cal_days] column.
	 * 
	 * @param      string $v new value
	 * @return     CalendarEventRepeat The current object (for fluent API support)
	 */
	public function setCalDays($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cal_days !== $v) {
			$this->cal_days = $v;
			$this->modifiedColumns[] = CalendarEventRepeatPeer::CAL_DAYS;
		}

		return $this;
	} // setCalDays()

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
			if ($this->cal_id !== 0) {
				return false;
			}

			if ($this->cal_frequency !== 1) {
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

			$this->cal_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->cal_type = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->cal_end = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->cal_frequency = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->cal_days = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = CalendarEventRepeatPeer::NUM_COLUMNS - CalendarEventRepeatPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CalendarEventRepeat object", $e);
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
			$con = Propel::getConnection(CalendarEventRepeatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CalendarEventRepeatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(CalendarEventRepeatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CalendarEventRepeatQuery::create()
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
			$con = Propel::getConnection(CalendarEventRepeatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CalendarEventRepeatPeer::addInstanceToPool($this);
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
					$affectedRows = CalendarEventRepeatPeer::doUpdate($this, $con);
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


			if (($retval = CalendarEventRepeatPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CalendarEventRepeatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCalId();
				break;
			case 1:
				return $this->getCalType();
				break;
			case 2:
				return $this->getCalEnd();
				break;
			case 3:
				return $this->getCalFrequency();
				break;
			case 4:
				return $this->getCalDays();
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
		$keys = CalendarEventRepeatPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCalId(),
			$keys[1] => $this->getCalType(),
			$keys[2] => $this->getCalEnd(),
			$keys[3] => $this->getCalFrequency(),
			$keys[4] => $this->getCalDays(),
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
		$pos = CalendarEventRepeatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCalId($value);
				break;
			case 1:
				$this->setCalType($value);
				break;
			case 2:
				$this->setCalEnd($value);
				break;
			case 3:
				$this->setCalFrequency($value);
				break;
			case 4:
				$this->setCalDays($value);
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
		$keys = CalendarEventRepeatPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCalId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCalType($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCalEnd($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCalFrequency($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCalDays($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CalendarEventRepeatPeer::DATABASE_NAME);

		if ($this->isColumnModified(CalendarEventRepeatPeer::CAL_ID)) $criteria->add(CalendarEventRepeatPeer::CAL_ID, $this->cal_id);
		if ($this->isColumnModified(CalendarEventRepeatPeer::CAL_TYPE)) $criteria->add(CalendarEventRepeatPeer::CAL_TYPE, $this->cal_type);
		if ($this->isColumnModified(CalendarEventRepeatPeer::CAL_END)) $criteria->add(CalendarEventRepeatPeer::CAL_END, $this->cal_end);
		if ($this->isColumnModified(CalendarEventRepeatPeer::CAL_FREQUENCY)) $criteria->add(CalendarEventRepeatPeer::CAL_FREQUENCY, $this->cal_frequency);
		if ($this->isColumnModified(CalendarEventRepeatPeer::CAL_DAYS)) $criteria->add(CalendarEventRepeatPeer::CAL_DAYS, $this->cal_days);

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
		$criteria = new Criteria(CalendarEventRepeatPeer::DATABASE_NAME);
		$criteria->add(CalendarEventRepeatPeer::CAL_ID, $this->cal_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCalId();
	}

	/**
	 * Generic method to set the primary key (cal_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCalId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCalId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of CalendarEventRepeat (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCalId($this->cal_id);
		$copyObj->setCalType($this->cal_type);
		$copyObj->setCalEnd($this->cal_end);
		$copyObj->setCalFrequency($this->cal_frequency);
		$copyObj->setCalDays($this->cal_days);

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
	 * @return     CalendarEventRepeat Clone of current object.
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
	 * @return     CalendarEventRepeatPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CalendarEventRepeatPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->cal_id = null;
		$this->cal_type = null;
		$this->cal_end = null;
		$this->cal_frequency = null;
		$this->cal_days = null;
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

} // BaseCalendarEventRepeat
