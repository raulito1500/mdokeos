<?php


/**
 * Base class that represents a row from the 'php_session' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BasePhpSession extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PhpSessionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PhpSessionPeer
	 */
	protected static $peer;

	/**
	 * The value for the session_id field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $session_id;

	/**
	 * The value for the session_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $session_name;

	/**
	 * The value for the session_time field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $session_time;

	/**
	 * The value for the session_start field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $session_start;

	/**
	 * The value for the session_value field.
	 * @var        string
	 */
	protected $session_value;

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
		$this->session_id = '';
		$this->session_name = '';
		$this->session_time = 0;
		$this->session_start = 0;
	}

	/**
	 * Initializes internal state of BasePhpSession object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [session_id] column value.
	 * 
	 * @return     string
	 */
	public function getSessionId()
	{
		return $this->session_id;
	}

	/**
	 * Get the [session_name] column value.
	 * 
	 * @return     string
	 */
	public function getSessionName()
	{
		return $this->session_name;
	}

	/**
	 * Get the [session_time] column value.
	 * 
	 * @return     int
	 */
	public function getSessionTime()
	{
		return $this->session_time;
	}

	/**
	 * Get the [session_start] column value.
	 * 
	 * @return     int
	 */
	public function getSessionStart()
	{
		return $this->session_start;
	}

	/**
	 * Get the [session_value] column value.
	 * 
	 * @return     string
	 */
	public function getSessionValue()
	{
		return $this->session_value;
	}

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      string $v new value
	 * @return     PhpSession The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->session_id !== $v || $this->isNew()) {
			$this->session_id = $v;
			$this->modifiedColumns[] = PhpSessionPeer::SESSION_ID;
		}

		return $this;
	} // setSessionId()

	/**
	 * Set the value of [session_name] column.
	 * 
	 * @param      string $v new value
	 * @return     PhpSession The current object (for fluent API support)
	 */
	public function setSessionName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->session_name !== $v || $this->isNew()) {
			$this->session_name = $v;
			$this->modifiedColumns[] = PhpSessionPeer::SESSION_NAME;
		}

		return $this;
	} // setSessionName()

	/**
	 * Set the value of [session_time] column.
	 * 
	 * @param      int $v new value
	 * @return     PhpSession The current object (for fluent API support)
	 */
	public function setSessionTime($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_time !== $v || $this->isNew()) {
			$this->session_time = $v;
			$this->modifiedColumns[] = PhpSessionPeer::SESSION_TIME;
		}

		return $this;
	} // setSessionTime()

	/**
	 * Set the value of [session_start] column.
	 * 
	 * @param      int $v new value
	 * @return     PhpSession The current object (for fluent API support)
	 */
	public function setSessionStart($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_start !== $v || $this->isNew()) {
			$this->session_start = $v;
			$this->modifiedColumns[] = PhpSessionPeer::SESSION_START;
		}

		return $this;
	} // setSessionStart()

	/**
	 * Set the value of [session_value] column.
	 * 
	 * @param      string $v new value
	 * @return     PhpSession The current object (for fluent API support)
	 */
	public function setSessionValue($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->session_value !== $v) {
			$this->session_value = $v;
			$this->modifiedColumns[] = PhpSessionPeer::SESSION_VALUE;
		}

		return $this;
	} // setSessionValue()

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
			if ($this->session_id !== '') {
				return false;
			}

			if ($this->session_name !== '') {
				return false;
			}

			if ($this->session_time !== 0) {
				return false;
			}

			if ($this->session_start !== 0) {
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

			$this->session_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->session_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->session_time = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->session_start = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->session_value = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = PhpSessionPeer::NUM_COLUMNS - PhpSessionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating PhpSession object", $e);
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
			$con = Propel::getConnection(PhpSessionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PhpSessionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(PhpSessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PhpSessionQuery::create()
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
			$con = Propel::getConnection(PhpSessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PhpSessionPeer::addInstanceToPool($this);
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
					$affectedRows = PhpSessionPeer::doUpdate($this, $con);
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


			if (($retval = PhpSessionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = PhpSessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSessionId();
				break;
			case 1:
				return $this->getSessionName();
				break;
			case 2:
				return $this->getSessionTime();
				break;
			case 3:
				return $this->getSessionStart();
				break;
			case 4:
				return $this->getSessionValue();
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
		$keys = PhpSessionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSessionId(),
			$keys[1] => $this->getSessionName(),
			$keys[2] => $this->getSessionTime(),
			$keys[3] => $this->getSessionStart(),
			$keys[4] => $this->getSessionValue(),
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
		$pos = PhpSessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSessionId($value);
				break;
			case 1:
				$this->setSessionName($value);
				break;
			case 2:
				$this->setSessionTime($value);
				break;
			case 3:
				$this->setSessionStart($value);
				break;
			case 4:
				$this->setSessionValue($value);
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
		$keys = PhpSessionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSessionId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSessionName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSessionTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSessionStart($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSessionValue($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PhpSessionPeer::DATABASE_NAME);

		if ($this->isColumnModified(PhpSessionPeer::SESSION_ID)) $criteria->add(PhpSessionPeer::SESSION_ID, $this->session_id);
		if ($this->isColumnModified(PhpSessionPeer::SESSION_NAME)) $criteria->add(PhpSessionPeer::SESSION_NAME, $this->session_name);
		if ($this->isColumnModified(PhpSessionPeer::SESSION_TIME)) $criteria->add(PhpSessionPeer::SESSION_TIME, $this->session_time);
		if ($this->isColumnModified(PhpSessionPeer::SESSION_START)) $criteria->add(PhpSessionPeer::SESSION_START, $this->session_start);
		if ($this->isColumnModified(PhpSessionPeer::SESSION_VALUE)) $criteria->add(PhpSessionPeer::SESSION_VALUE, $this->session_value);

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
		$criteria = new Criteria(PhpSessionPeer::DATABASE_NAME);
		$criteria->add(PhpSessionPeer::SESSION_ID, $this->session_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getSessionId();
	}

	/**
	 * Generic method to set the primary key (session_id column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setSessionId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getSessionId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of PhpSession (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setSessionId($this->session_id);
		$copyObj->setSessionName($this->session_name);
		$copyObj->setSessionTime($this->session_time);
		$copyObj->setSessionStart($this->session_start);
		$copyObj->setSessionValue($this->session_value);

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
	 * @return     PhpSession Clone of current object.
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
	 * @return     PhpSessionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PhpSessionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->session_id = null;
		$this->session_name = null;
		$this->session_time = null;
		$this->session_start = null;
		$this->session_value = null;
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

} // BasePhpSession
