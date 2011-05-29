<?php


/**
 * Base class that represents a row from the 'gradebook_category' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookCategory extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'GradebookCategoryPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        GradebookCategoryPeer
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
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the course_code field.
	 * @var        string
	 */
	protected $course_code;

	/**
	 * The value for the parent_id field.
	 * @var        int
	 */
	protected $parent_id;

	/**
	 * The value for the weight field.
	 * @var        int
	 */
	protected $weight;

	/**
	 * The value for the visible field.
	 * @var        int
	 */
	protected $visible;

	/**
	 * The value for the certif_min_score field.
	 * @var        int
	 */
	protected $certif_min_score;

	/**
	 * The value for the session_id field.
	 * @var        int
	 */
	protected $session_id;

	/**
	 * The value for the document_id field.
	 * @var        int
	 */
	protected $document_id;

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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [course_code] column value.
	 * 
	 * @return     string
	 */
	public function getCourseCode()
	{
		return $this->course_code;
	}

	/**
	 * Get the [parent_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentId()
	{
		return $this->parent_id;
	}

	/**
	 * Get the [weight] column value.
	 * 
	 * @return     int
	 */
	public function getWeight()
	{
		return $this->weight;
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
	 * Get the [certif_min_score] column value.
	 * 
	 * @return     int
	 */
	public function getCertifMinScore()
	{
		return $this->certif_min_score;
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
	 * Get the [document_id] column value.
	 * 
	 * @return     int
	 */
	public function getDocumentId()
	{
		return $this->document_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::USER_ID;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [course_code] column.
	 * 
	 * @param      string $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setCourseCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->course_code !== $v) {
			$this->course_code = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::COURSE_CODE;
		}

		return $this;
	} // setCourseCode()

	/**
	 * Set the value of [parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::PARENT_ID;
		}

		return $this;
	} // setParentId()

	/**
	 * Set the value of [weight] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setWeight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->weight !== $v) {
			$this->weight = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::WEIGHT;
		}

		return $this;
	} // setWeight()

	/**
	 * Set the value of [visible] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setVisible($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->visible !== $v) {
			$this->visible = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::VISIBLE;
		}

		return $this;
	} // setVisible()

	/**
	 * Set the value of [certif_min_score] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setCertifMinScore($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->certif_min_score !== $v) {
			$this->certif_min_score = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::CERTIF_MIN_SCORE;
		}

		return $this;
	} // setCertifMinScore()

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_id !== $v) {
			$this->session_id = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::SESSION_ID;
		}

		return $this;
	} // setSessionId()

	/**
	 * Set the value of [document_id] column.
	 * 
	 * @param      int $v new value
	 * @return     GradebookCategory The current object (for fluent API support)
	 */
	public function setDocumentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->document_id !== $v) {
			$this->document_id = $v;
			$this->modifiedColumns[] = GradebookCategoryPeer::DOCUMENT_ID;
		}

		return $this;
	} // setDocumentId()

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
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->user_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->course_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->parent_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->weight = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->visible = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->certif_min_score = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->session_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->document_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = GradebookCategoryPeer::NUM_COLUMNS - GradebookCategoryPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating GradebookCategory object", $e);
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
			$con = Propel::getConnection(GradebookCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = GradebookCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(GradebookCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				GradebookCategoryQuery::create()
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
			$con = Propel::getConnection(GradebookCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				GradebookCategoryPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = GradebookCategoryPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(GradebookCategoryPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.GradebookCategoryPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = GradebookCategoryPeer::doUpdate($this, $con);
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


			if (($retval = GradebookCategoryPeer::doValidate($this, $columns)) !== true) {
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
		$pos = GradebookCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDescription();
				break;
			case 3:
				return $this->getUserId();
				break;
			case 4:
				return $this->getCourseCode();
				break;
			case 5:
				return $this->getParentId();
				break;
			case 6:
				return $this->getWeight();
				break;
			case 7:
				return $this->getVisible();
				break;
			case 8:
				return $this->getCertifMinScore();
				break;
			case 9:
				return $this->getSessionId();
				break;
			case 10:
				return $this->getDocumentId();
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
		$keys = GradebookCategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getUserId(),
			$keys[4] => $this->getCourseCode(),
			$keys[5] => $this->getParentId(),
			$keys[6] => $this->getWeight(),
			$keys[7] => $this->getVisible(),
			$keys[8] => $this->getCertifMinScore(),
			$keys[9] => $this->getSessionId(),
			$keys[10] => $this->getDocumentId(),
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
		$pos = GradebookCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDescription($value);
				break;
			case 3:
				$this->setUserId($value);
				break;
			case 4:
				$this->setCourseCode($value);
				break;
			case 5:
				$this->setParentId($value);
				break;
			case 6:
				$this->setWeight($value);
				break;
			case 7:
				$this->setVisible($value);
				break;
			case 8:
				$this->setCertifMinScore($value);
				break;
			case 9:
				$this->setSessionId($value);
				break;
			case 10:
				$this->setDocumentId($value);
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
		$keys = GradebookCategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCourseCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setParentId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setWeight($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setVisible($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCertifMinScore($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSessionId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDocumentId($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(GradebookCategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(GradebookCategoryPeer::ID)) $criteria->add(GradebookCategoryPeer::ID, $this->id);
		if ($this->isColumnModified(GradebookCategoryPeer::NAME)) $criteria->add(GradebookCategoryPeer::NAME, $this->name);
		if ($this->isColumnModified(GradebookCategoryPeer::DESCRIPTION)) $criteria->add(GradebookCategoryPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(GradebookCategoryPeer::USER_ID)) $criteria->add(GradebookCategoryPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(GradebookCategoryPeer::COURSE_CODE)) $criteria->add(GradebookCategoryPeer::COURSE_CODE, $this->course_code);
		if ($this->isColumnModified(GradebookCategoryPeer::PARENT_ID)) $criteria->add(GradebookCategoryPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(GradebookCategoryPeer::WEIGHT)) $criteria->add(GradebookCategoryPeer::WEIGHT, $this->weight);
		if ($this->isColumnModified(GradebookCategoryPeer::VISIBLE)) $criteria->add(GradebookCategoryPeer::VISIBLE, $this->visible);
		if ($this->isColumnModified(GradebookCategoryPeer::CERTIF_MIN_SCORE)) $criteria->add(GradebookCategoryPeer::CERTIF_MIN_SCORE, $this->certif_min_score);
		if ($this->isColumnModified(GradebookCategoryPeer::SESSION_ID)) $criteria->add(GradebookCategoryPeer::SESSION_ID, $this->session_id);
		if ($this->isColumnModified(GradebookCategoryPeer::DOCUMENT_ID)) $criteria->add(GradebookCategoryPeer::DOCUMENT_ID, $this->document_id);

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
		$criteria = new Criteria(GradebookCategoryPeer::DATABASE_NAME);
		$criteria->add(GradebookCategoryPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of GradebookCategory (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setName($this->name);
		$copyObj->setDescription($this->description);
		$copyObj->setUserId($this->user_id);
		$copyObj->setCourseCode($this->course_code);
		$copyObj->setParentId($this->parent_id);
		$copyObj->setWeight($this->weight);
		$copyObj->setVisible($this->visible);
		$copyObj->setCertifMinScore($this->certif_min_score);
		$copyObj->setSessionId($this->session_id);
		$copyObj->setDocumentId($this->document_id);

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
	 * @return     GradebookCategory Clone of current object.
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
	 * @return     GradebookCategoryPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new GradebookCategoryPeer();
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
		$this->description = null;
		$this->user_id = null;
		$this->course_code = null;
		$this->parent_id = null;
		$this->weight = null;
		$this->visible = null;
		$this->certif_min_score = null;
		$this->session_id = null;
		$this->document_id = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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

} // BaseGradebookCategory
