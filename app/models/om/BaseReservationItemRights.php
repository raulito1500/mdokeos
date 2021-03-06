<?php


/**
 * Base class that represents a row from the 'reservation_item_rights' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationItemRights extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ReservationItemRightsPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ReservationItemRightsPeer
	 */
	protected static $peer;

	/**
	 * The value for the item_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $item_id;

	/**
	 * The value for the class_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $class_id;

	/**
	 * The value for the edit_right field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $edit_right;

	/**
	 * The value for the delete_right field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $delete_right;

	/**
	 * The value for the m_reservation field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $m_reservation;

	/**
	 * The value for the view_right field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $view_right;

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
		$this->item_id = 0;
		$this->class_id = 0;
		$this->edit_right = 0;
		$this->delete_right = 0;
		$this->m_reservation = 0;
		$this->view_right = 0;
	}

	/**
	 * Initializes internal state of BaseReservationItemRights object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [item_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemId()
	{
		return $this->item_id;
	}

	/**
	 * Get the [class_id] column value.
	 * 
	 * @return     int
	 */
	public function getClassId()
	{
		return $this->class_id;
	}

	/**
	 * Get the [edit_right] column value.
	 * 
	 * @return     int
	 */
	public function getEditRight()
	{
		return $this->edit_right;
	}

	/**
	 * Get the [delete_right] column value.
	 * 
	 * @return     int
	 */
	public function getDeleteRight()
	{
		return $this->delete_right;
	}

	/**
	 * Get the [m_reservation] column value.
	 * 
	 * @return     int
	 */
	public function getMReservation()
	{
		return $this->m_reservation;
	}

	/**
	 * Get the [view_right] column value.
	 * 
	 * @return     int
	 */
	public function getViewRight()
	{
		return $this->view_right;
	}

	/**
	 * Set the value of [item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->item_id !== $v || $this->isNew()) {
			$this->item_id = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::ITEM_ID;
		}

		return $this;
	} // setItemId()

	/**
	 * Set the value of [class_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setClassId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->class_id !== $v || $this->isNew()) {
			$this->class_id = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::CLASS_ID;
		}

		return $this;
	} // setClassId()

	/**
	 * Set the value of [edit_right] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setEditRight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->edit_right !== $v || $this->isNew()) {
			$this->edit_right = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::EDIT_RIGHT;
		}

		return $this;
	} // setEditRight()

	/**
	 * Set the value of [delete_right] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setDeleteRight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->delete_right !== $v || $this->isNew()) {
			$this->delete_right = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::DELETE_RIGHT;
		}

		return $this;
	} // setDeleteRight()

	/**
	 * Set the value of [m_reservation] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setMReservation($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->m_reservation !== $v || $this->isNew()) {
			$this->m_reservation = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::M_RESERVATION;
		}

		return $this;
	} // setMReservation()

	/**
	 * Set the value of [view_right] column.
	 * 
	 * @param      int $v new value
	 * @return     ReservationItemRights The current object (for fluent API support)
	 */
	public function setViewRight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->view_right !== $v || $this->isNew()) {
			$this->view_right = $v;
			$this->modifiedColumns[] = ReservationItemRightsPeer::VIEW_RIGHT;
		}

		return $this;
	} // setViewRight()

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
			if ($this->item_id !== 0) {
				return false;
			}

			if ($this->class_id !== 0) {
				return false;
			}

			if ($this->edit_right !== 0) {
				return false;
			}

			if ($this->delete_right !== 0) {
				return false;
			}

			if ($this->m_reservation !== 0) {
				return false;
			}

			if ($this->view_right !== 0) {
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

			$this->item_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->class_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->edit_right = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->delete_right = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->m_reservation = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->view_right = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = ReservationItemRightsPeer::NUM_COLUMNS - ReservationItemRightsPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ReservationItemRights object", $e);
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
			$con = Propel::getConnection(ReservationItemRightsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ReservationItemRightsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ReservationItemRightsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ReservationItemRightsQuery::create()
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
			$con = Propel::getConnection(ReservationItemRightsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ReservationItemRightsPeer::addInstanceToPool($this);
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
					$affectedRows = ReservationItemRightsPeer::doUpdate($this, $con);
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


			if (($retval = ReservationItemRightsPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ReservationItemRightsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getItemId();
				break;
			case 1:
				return $this->getClassId();
				break;
			case 2:
				return $this->getEditRight();
				break;
			case 3:
				return $this->getDeleteRight();
				break;
			case 4:
				return $this->getMReservation();
				break;
			case 5:
				return $this->getViewRight();
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
		$keys = ReservationItemRightsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getItemId(),
			$keys[1] => $this->getClassId(),
			$keys[2] => $this->getEditRight(),
			$keys[3] => $this->getDeleteRight(),
			$keys[4] => $this->getMReservation(),
			$keys[5] => $this->getViewRight(),
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
		$pos = ReservationItemRightsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setItemId($value);
				break;
			case 1:
				$this->setClassId($value);
				break;
			case 2:
				$this->setEditRight($value);
				break;
			case 3:
				$this->setDeleteRight($value);
				break;
			case 4:
				$this->setMReservation($value);
				break;
			case 5:
				$this->setViewRight($value);
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
		$keys = ReservationItemRightsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setItemId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setClassId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEditRight($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDeleteRight($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMReservation($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setViewRight($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ReservationItemRightsPeer::DATABASE_NAME);

		if ($this->isColumnModified(ReservationItemRightsPeer::ITEM_ID)) $criteria->add(ReservationItemRightsPeer::ITEM_ID, $this->item_id);
		if ($this->isColumnModified(ReservationItemRightsPeer::CLASS_ID)) $criteria->add(ReservationItemRightsPeer::CLASS_ID, $this->class_id);
		if ($this->isColumnModified(ReservationItemRightsPeer::EDIT_RIGHT)) $criteria->add(ReservationItemRightsPeer::EDIT_RIGHT, $this->edit_right);
		if ($this->isColumnModified(ReservationItemRightsPeer::DELETE_RIGHT)) $criteria->add(ReservationItemRightsPeer::DELETE_RIGHT, $this->delete_right);
		if ($this->isColumnModified(ReservationItemRightsPeer::M_RESERVATION)) $criteria->add(ReservationItemRightsPeer::M_RESERVATION, $this->m_reservation);
		if ($this->isColumnModified(ReservationItemRightsPeer::VIEW_RIGHT)) $criteria->add(ReservationItemRightsPeer::VIEW_RIGHT, $this->view_right);

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
		$criteria = new Criteria(ReservationItemRightsPeer::DATABASE_NAME);
		$criteria->add(ReservationItemRightsPeer::ITEM_ID, $this->item_id);
		$criteria->add(ReservationItemRightsPeer::CLASS_ID, $this->class_id);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();
		$pks[0] = $this->getItemId();
		$pks[1] = $this->getClassId();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{
		$this->setItemId($keys[0]);
		$this->setClassId($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getItemId()) && (null === $this->getClassId());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ReservationItemRights (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setItemId($this->item_id);
		$copyObj->setClassId($this->class_id);
		$copyObj->setEditRight($this->edit_right);
		$copyObj->setDeleteRight($this->delete_right);
		$copyObj->setMReservation($this->m_reservation);
		$copyObj->setViewRight($this->view_right);

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
	 * @return     ReservationItemRights Clone of current object.
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
	 * @return     ReservationItemRightsPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ReservationItemRightsPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->item_id = null;
		$this->class_id = null;
		$this->edit_right = null;
		$this->delete_right = null;
		$this->m_reservation = null;
		$this->view_right = null;
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

} // BaseReservationItemRights
