<?php


/**
 * Base class that represents a row from the 'settings_current' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSettingsCurrent extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SettingsCurrentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SettingsCurrentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the variable field.
	 * @var        string
	 */
	protected $variable;

	/**
	 * The value for the subkey field.
	 * @var        string
	 */
	protected $subkey;

	/**
	 * The value for the type field.
	 * @var        string
	 */
	protected $type;

	/**
	 * The value for the category field.
	 * @var        string
	 */
	protected $category;

	/**
	 * The value for the selected_value field.
	 * @var        string
	 */
	protected $selected_value;

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
	 * The value for the scope field.
	 * @var        string
	 */
	protected $scope;

	/**
	 * The value for the subkeytext field.
	 * @var        string
	 */
	protected $subkeytext;

	/**
	 * The value for the access_url field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $access_url;

	/**
	 * The value for the access_url_changeable field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $access_url_changeable;

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
		$this->access_url = 1;
		$this->access_url_changeable = 0;
	}

	/**
	 * Initializes internal state of BaseSettingsCurrent object.
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
	 * Get the [variable] column value.
	 * 
	 * @return     string
	 */
	public function getVariable()
	{
		return $this->variable;
	}

	/**
	 * Get the [subkey] column value.
	 * 
	 * @return     string
	 */
	public function getSubkey()
	{
		return $this->subkey;
	}

	/**
	 * Get the [type] column value.
	 * 
	 * @return     string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Get the [category] column value.
	 * 
	 * @return     string
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * Get the [selected_value] column value.
	 * 
	 * @return     string
	 */
	public function getSelectedValue()
	{
		return $this->selected_value;
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
	 * Get the [scope] column value.
	 * 
	 * @return     string
	 */
	public function getScope()
	{
		return $this->scope;
	}

	/**
	 * Get the [subkeytext] column value.
	 * 
	 * @return     string
	 */
	public function getSubkeytext()
	{
		return $this->subkeytext;
	}

	/**
	 * Get the [access_url] column value.
	 * 
	 * @return     int
	 */
	public function getAccessUrl()
	{
		return $this->access_url;
	}

	/**
	 * Get the [access_url_changeable] column value.
	 * 
	 * @return     int
	 */
	public function getAccessUrlChangeable()
	{
		return $this->access_url_changeable;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [variable] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->variable !== $v) {
			$this->variable = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::VARIABLE;
		}

		return $this;
	} // setVariable()

	/**
	 * Set the value of [subkey] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setSubkey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subkey !== $v) {
			$this->subkey = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::SUBKEY;
		}

		return $this;
	} // setSubkey()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Set the value of [category] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setCategory($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->category !== $v) {
			$this->category = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::CATEGORY;
		}

		return $this;
	} // setCategory()

	/**
	 * Set the value of [selected_value] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setSelectedValue($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->selected_value !== $v) {
			$this->selected_value = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::SELECTED_VALUE;
		}

		return $this;
	} // setSelectedValue()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v || $this->isNew()) {
			$this->title = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [comment] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comment !== $v) {
			$this->comment = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::COMMENT;
		}

		return $this;
	} // setComment()

	/**
	 * Set the value of [scope] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setScope($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->scope !== $v) {
			$this->scope = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::SCOPE;
		}

		return $this;
	} // setScope()

	/**
	 * Set the value of [subkeytext] column.
	 * 
	 * @param      string $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setSubkeytext($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subkeytext !== $v) {
			$this->subkeytext = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::SUBKEYTEXT;
		}

		return $this;
	} // setSubkeytext()

	/**
	 * Set the value of [access_url] column.
	 * 
	 * @param      int $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setAccessUrl($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->access_url !== $v || $this->isNew()) {
			$this->access_url = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::ACCESS_URL;
		}

		return $this;
	} // setAccessUrl()

	/**
	 * Set the value of [access_url_changeable] column.
	 * 
	 * @param      int $v new value
	 * @return     SettingsCurrent The current object (for fluent API support)
	 */
	public function setAccessUrlChangeable($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->access_url_changeable !== $v || $this->isNew()) {
			$this->access_url_changeable = $v;
			$this->modifiedColumns[] = SettingsCurrentPeer::ACCESS_URL_CHANGEABLE;
		}

		return $this;
	} // setAccessUrlChangeable()

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

			if ($this->access_url !== 1) {
				return false;
			}

			if ($this->access_url_changeable !== 0) {
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
			$this->variable = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->subkey = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->type = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->category = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->selected_value = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->title = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->comment = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->scope = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->subkeytext = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->access_url = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->access_url_changeable = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 12; // 12 = SettingsCurrentPeer::NUM_COLUMNS - SettingsCurrentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating SettingsCurrent object", $e);
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
			$con = Propel::getConnection(SettingsCurrentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SettingsCurrentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SettingsCurrentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SettingsCurrentQuery::create()
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
			$con = Propel::getConnection(SettingsCurrentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SettingsCurrentPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = SettingsCurrentPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SettingsCurrentPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SettingsCurrentPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = SettingsCurrentPeer::doUpdate($this, $con);
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


			if (($retval = SettingsCurrentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SettingsCurrentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getVariable();
				break;
			case 2:
				return $this->getSubkey();
				break;
			case 3:
				return $this->getType();
				break;
			case 4:
				return $this->getCategory();
				break;
			case 5:
				return $this->getSelectedValue();
				break;
			case 6:
				return $this->getTitle();
				break;
			case 7:
				return $this->getComment();
				break;
			case 8:
				return $this->getScope();
				break;
			case 9:
				return $this->getSubkeytext();
				break;
			case 10:
				return $this->getAccessUrl();
				break;
			case 11:
				return $this->getAccessUrlChangeable();
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
		$keys = SettingsCurrentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getVariable(),
			$keys[2] => $this->getSubkey(),
			$keys[3] => $this->getType(),
			$keys[4] => $this->getCategory(),
			$keys[5] => $this->getSelectedValue(),
			$keys[6] => $this->getTitle(),
			$keys[7] => $this->getComment(),
			$keys[8] => $this->getScope(),
			$keys[9] => $this->getSubkeytext(),
			$keys[10] => $this->getAccessUrl(),
			$keys[11] => $this->getAccessUrlChangeable(),
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
		$pos = SettingsCurrentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setVariable($value);
				break;
			case 2:
				$this->setSubkey($value);
				break;
			case 3:
				$this->setType($value);
				break;
			case 4:
				$this->setCategory($value);
				break;
			case 5:
				$this->setSelectedValue($value);
				break;
			case 6:
				$this->setTitle($value);
				break;
			case 7:
				$this->setComment($value);
				break;
			case 8:
				$this->setScope($value);
				break;
			case 9:
				$this->setSubkeytext($value);
				break;
			case 10:
				$this->setAccessUrl($value);
				break;
			case 11:
				$this->setAccessUrlChangeable($value);
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
		$keys = SettingsCurrentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setVariable($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSubkey($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setType($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCategory($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSelectedValue($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTitle($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setComment($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setScope($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSubkeytext($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAccessUrl($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAccessUrlChangeable($arr[$keys[11]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SettingsCurrentPeer::DATABASE_NAME);

		if ($this->isColumnModified(SettingsCurrentPeer::ID)) $criteria->add(SettingsCurrentPeer::ID, $this->id);
		if ($this->isColumnModified(SettingsCurrentPeer::VARIABLE)) $criteria->add(SettingsCurrentPeer::VARIABLE, $this->variable);
		if ($this->isColumnModified(SettingsCurrentPeer::SUBKEY)) $criteria->add(SettingsCurrentPeer::SUBKEY, $this->subkey);
		if ($this->isColumnModified(SettingsCurrentPeer::TYPE)) $criteria->add(SettingsCurrentPeer::TYPE, $this->type);
		if ($this->isColumnModified(SettingsCurrentPeer::CATEGORY)) $criteria->add(SettingsCurrentPeer::CATEGORY, $this->category);
		if ($this->isColumnModified(SettingsCurrentPeer::SELECTED_VALUE)) $criteria->add(SettingsCurrentPeer::SELECTED_VALUE, $this->selected_value);
		if ($this->isColumnModified(SettingsCurrentPeer::TITLE)) $criteria->add(SettingsCurrentPeer::TITLE, $this->title);
		if ($this->isColumnModified(SettingsCurrentPeer::COMMENT)) $criteria->add(SettingsCurrentPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(SettingsCurrentPeer::SCOPE)) $criteria->add(SettingsCurrentPeer::SCOPE, $this->scope);
		if ($this->isColumnModified(SettingsCurrentPeer::SUBKEYTEXT)) $criteria->add(SettingsCurrentPeer::SUBKEYTEXT, $this->subkeytext);
		if ($this->isColumnModified(SettingsCurrentPeer::ACCESS_URL)) $criteria->add(SettingsCurrentPeer::ACCESS_URL, $this->access_url);
		if ($this->isColumnModified(SettingsCurrentPeer::ACCESS_URL_CHANGEABLE)) $criteria->add(SettingsCurrentPeer::ACCESS_URL_CHANGEABLE, $this->access_url_changeable);

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
		$criteria = new Criteria(SettingsCurrentPeer::DATABASE_NAME);
		$criteria->add(SettingsCurrentPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of SettingsCurrent (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setVariable($this->variable);
		$copyObj->setSubkey($this->subkey);
		$copyObj->setType($this->type);
		$copyObj->setCategory($this->category);
		$copyObj->setSelectedValue($this->selected_value);
		$copyObj->setTitle($this->title);
		$copyObj->setComment($this->comment);
		$copyObj->setScope($this->scope);
		$copyObj->setSubkeytext($this->subkeytext);
		$copyObj->setAccessUrl($this->access_url);
		$copyObj->setAccessUrlChangeable($this->access_url_changeable);

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
	 * @return     SettingsCurrent Clone of current object.
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
	 * @return     SettingsCurrentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SettingsCurrentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->variable = null;
		$this->subkey = null;
		$this->type = null;
		$this->category = null;
		$this->selected_value = null;
		$this->title = null;
		$this->comment = null;
		$this->scope = null;
		$this->subkeytext = null;
		$this->access_url = null;
		$this->access_url_changeable = null;
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

} // BaseSettingsCurrent
