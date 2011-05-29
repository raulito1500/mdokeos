<?php


/**
 * Base class that represents a row from the 'user_field' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserField extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UserFieldPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserFieldPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the field_type field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $field_type;

	/**
	 * The value for the field_variable field.
	 * @var        string
	 */
	protected $field_variable;

	/**
	 * The value for the field_display_text field.
	 * @var        string
	 */
	protected $field_display_text;

	/**
	 * The value for the field_default_value field.
	 * @var        string
	 */
	protected $field_default_value;

	/**
	 * The value for the field_order field.
	 * @var        int
	 */
	protected $field_order;

	/**
	 * The value for the field_visible field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $field_visible;

	/**
	 * The value for the field_changeable field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $field_changeable;

	/**
	 * The value for the field_filter field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $field_filter;

	/**
	 * The value for the tms field.
	 * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
	 * @var        string
	 */
	protected $tms;

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
		$this->field_type = 1;
		$this->field_visible = 0;
		$this->field_changeable = 0;
		$this->field_filter = 0;
	}

	/**
	 * Initializes internal state of BaseUserField object.
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
	 * Get the [field_type] column value.
	 * 
	 * @return     int
	 */
	public function getFieldType()
	{
		return $this->field_type;
	}

	/**
	 * Get the [field_variable] column value.
	 * 
	 * @return     string
	 */
	public function getFieldVariable()
	{
		return $this->field_variable;
	}

	/**
	 * Get the [field_display_text] column value.
	 * 
	 * @return     string
	 */
	public function getFieldDisplayText()
	{
		return $this->field_display_text;
	}

	/**
	 * Get the [field_default_value] column value.
	 * 
	 * @return     string
	 */
	public function getFieldDefaultValue()
	{
		return $this->field_default_value;
	}

	/**
	 * Get the [field_order] column value.
	 * 
	 * @return     int
	 */
	public function getFieldOrder()
	{
		return $this->field_order;
	}

	/**
	 * Get the [field_visible] column value.
	 * 
	 * @return     int
	 */
	public function getFieldVisible()
	{
		return $this->field_visible;
	}

	/**
	 * Get the [field_changeable] column value.
	 * 
	 * @return     int
	 */
	public function getFieldChangeable()
	{
		return $this->field_changeable;
	}

	/**
	 * Get the [field_filter] column value.
	 * 
	 * @return     int
	 */
	public function getFieldFilter()
	{
		return $this->field_filter;
	}

	/**
	 * Get the [optionally formatted] temporal [tms] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getTms($format = 'Y-m-d H:i:s')
	{
		if ($this->tms === null) {
			return null;
		}


		if ($this->tms === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->tms);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->tms, true), $x);
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserFieldPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [field_type] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->field_type !== $v || $this->isNew()) {
			$this->field_type = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_TYPE;
		}

		return $this;
	} // setFieldType()

	/**
	 * Set the value of [field_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->field_variable !== $v) {
			$this->field_variable = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_VARIABLE;
		}

		return $this;
	} // setFieldVariable()

	/**
	 * Set the value of [field_display_text] column.
	 * 
	 * @param      string $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldDisplayText($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->field_display_text !== $v) {
			$this->field_display_text = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_DISPLAY_TEXT;
		}

		return $this;
	} // setFieldDisplayText()

	/**
	 * Set the value of [field_default_value] column.
	 * 
	 * @param      string $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldDefaultValue($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->field_default_value !== $v) {
			$this->field_default_value = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_DEFAULT_VALUE;
		}

		return $this;
	} // setFieldDefaultValue()

	/**
	 * Set the value of [field_order] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->field_order !== $v) {
			$this->field_order = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_ORDER;
		}

		return $this;
	} // setFieldOrder()

	/**
	 * Set the value of [field_visible] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldVisible($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->field_visible !== $v || $this->isNew()) {
			$this->field_visible = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_VISIBLE;
		}

		return $this;
	} // setFieldVisible()

	/**
	 * Set the value of [field_changeable] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldChangeable($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->field_changeable !== $v || $this->isNew()) {
			$this->field_changeable = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_CHANGEABLE;
		}

		return $this;
	} // setFieldChangeable()

	/**
	 * Set the value of [field_filter] column.
	 * 
	 * @param      int $v new value
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setFieldFilter($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->field_filter !== $v || $this->isNew()) {
			$this->field_filter = $v;
			$this->modifiedColumns[] = UserFieldPeer::FIELD_FILTER;
		}

		return $this;
	} // setFieldFilter()

	/**
	 * Sets the value of [tms] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     UserField The current object (for fluent API support)
	 */
	public function setTms($v)
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

		if ( $this->tms !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->tms !== null && $tmpDt = new DateTime($this->tms)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->tms = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserFieldPeer::TMS;
			}
		} // if either are not null

		return $this;
	} // setTms()

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
			if ($this->field_type !== 1) {
				return false;
			}

			if ($this->field_visible !== 0) {
				return false;
			}

			if ($this->field_changeable !== 0) {
				return false;
			}

			if ($this->field_filter !== 0) {
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
			$this->field_type = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->field_variable = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->field_display_text = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->field_default_value = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->field_order = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->field_visible = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->field_changeable = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->field_filter = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->tms = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = UserFieldPeer::NUM_COLUMNS - UserFieldPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating UserField object", $e);
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
			$con = Propel::getConnection(UserFieldPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserFieldPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(UserFieldPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				UserFieldQuery::create()
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
			$con = Propel::getConnection(UserFieldPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UserFieldPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = UserFieldPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UserFieldPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserFieldPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = UserFieldPeer::doUpdate($this, $con);
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


			if (($retval = UserFieldPeer::doValidate($this, $columns)) !== true) {
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
		$pos = UserFieldPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFieldType();
				break;
			case 2:
				return $this->getFieldVariable();
				break;
			case 3:
				return $this->getFieldDisplayText();
				break;
			case 4:
				return $this->getFieldDefaultValue();
				break;
			case 5:
				return $this->getFieldOrder();
				break;
			case 6:
				return $this->getFieldVisible();
				break;
			case 7:
				return $this->getFieldChangeable();
				break;
			case 8:
				return $this->getFieldFilter();
				break;
			case 9:
				return $this->getTms();
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
		$keys = UserFieldPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFieldType(),
			$keys[2] => $this->getFieldVariable(),
			$keys[3] => $this->getFieldDisplayText(),
			$keys[4] => $this->getFieldDefaultValue(),
			$keys[5] => $this->getFieldOrder(),
			$keys[6] => $this->getFieldVisible(),
			$keys[7] => $this->getFieldChangeable(),
			$keys[8] => $this->getFieldFilter(),
			$keys[9] => $this->getTms(),
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
		$pos = UserFieldPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFieldType($value);
				break;
			case 2:
				$this->setFieldVariable($value);
				break;
			case 3:
				$this->setFieldDisplayText($value);
				break;
			case 4:
				$this->setFieldDefaultValue($value);
				break;
			case 5:
				$this->setFieldOrder($value);
				break;
			case 6:
				$this->setFieldVisible($value);
				break;
			case 7:
				$this->setFieldChangeable($value);
				break;
			case 8:
				$this->setFieldFilter($value);
				break;
			case 9:
				$this->setTms($value);
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
		$keys = UserFieldPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFieldType($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFieldVariable($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFieldDisplayText($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFieldDefaultValue($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFieldOrder($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFieldVisible($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFieldChangeable($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFieldFilter($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTms($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserFieldPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserFieldPeer::ID)) $criteria->add(UserFieldPeer::ID, $this->id);
		if ($this->isColumnModified(UserFieldPeer::FIELD_TYPE)) $criteria->add(UserFieldPeer::FIELD_TYPE, $this->field_type);
		if ($this->isColumnModified(UserFieldPeer::FIELD_VARIABLE)) $criteria->add(UserFieldPeer::FIELD_VARIABLE, $this->field_variable);
		if ($this->isColumnModified(UserFieldPeer::FIELD_DISPLAY_TEXT)) $criteria->add(UserFieldPeer::FIELD_DISPLAY_TEXT, $this->field_display_text);
		if ($this->isColumnModified(UserFieldPeer::FIELD_DEFAULT_VALUE)) $criteria->add(UserFieldPeer::FIELD_DEFAULT_VALUE, $this->field_default_value);
		if ($this->isColumnModified(UserFieldPeer::FIELD_ORDER)) $criteria->add(UserFieldPeer::FIELD_ORDER, $this->field_order);
		if ($this->isColumnModified(UserFieldPeer::FIELD_VISIBLE)) $criteria->add(UserFieldPeer::FIELD_VISIBLE, $this->field_visible);
		if ($this->isColumnModified(UserFieldPeer::FIELD_CHANGEABLE)) $criteria->add(UserFieldPeer::FIELD_CHANGEABLE, $this->field_changeable);
		if ($this->isColumnModified(UserFieldPeer::FIELD_FILTER)) $criteria->add(UserFieldPeer::FIELD_FILTER, $this->field_filter);
		if ($this->isColumnModified(UserFieldPeer::TMS)) $criteria->add(UserFieldPeer::TMS, $this->tms);

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
		$criteria = new Criteria(UserFieldPeer::DATABASE_NAME);
		$criteria->add(UserFieldPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of UserField (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setFieldType($this->field_type);
		$copyObj->setFieldVariable($this->field_variable);
		$copyObj->setFieldDisplayText($this->field_display_text);
		$copyObj->setFieldDefaultValue($this->field_default_value);
		$copyObj->setFieldOrder($this->field_order);
		$copyObj->setFieldVisible($this->field_visible);
		$copyObj->setFieldChangeable($this->field_changeable);
		$copyObj->setFieldFilter($this->field_filter);
		$copyObj->setTms($this->tms);

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
	 * @return     UserField Clone of current object.
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
	 * @return     UserFieldPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserFieldPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->field_type = null;
		$this->field_variable = null;
		$this->field_display_text = null;
		$this->field_default_value = null;
		$this->field_order = null;
		$this->field_visible = null;
		$this->field_changeable = null;
		$this->field_filter = null;
		$this->tms = null;
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

} // BaseUserField
