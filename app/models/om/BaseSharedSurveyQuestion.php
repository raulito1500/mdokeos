<?php


/**
 * Base class that represents a row from the 'shared_survey_question' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSharedSurveyQuestion extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SharedSurveyQuestionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SharedSurveyQuestionPeer
	 */
	protected static $peer;

	/**
	 * The value for the question_id field.
	 * @var        int
	 */
	protected $question_id;

	/**
	 * The value for the survey_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $survey_id;

	/**
	 * The value for the survey_question field.
	 * @var        string
	 */
	protected $survey_question;

	/**
	 * The value for the survey_question_comment field.
	 * @var        string
	 */
	protected $survey_question_comment;

	/**
	 * The value for the type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $type;

	/**
	 * The value for the display field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $display;

	/**
	 * The value for the sort field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $sort;

	/**
	 * The value for the code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the max_value field.
	 * @var        int
	 */
	protected $max_value;

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
		$this->survey_id = 0;
		$this->type = '';
		$this->display = '';
		$this->sort = 0;
		$this->code = '';
	}

	/**
	 * Initializes internal state of BaseSharedSurveyQuestion object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [question_id] column value.
	 * 
	 * @return     int
	 */
	public function getQuestionId()
	{
		return $this->question_id;
	}

	/**
	 * Get the [survey_id] column value.
	 * 
	 * @return     int
	 */
	public function getSurveyId()
	{
		return $this->survey_id;
	}

	/**
	 * Get the [survey_question] column value.
	 * 
	 * @return     string
	 */
	public function getSurveyQuestion()
	{
		return $this->survey_question;
	}

	/**
	 * Get the [survey_question_comment] column value.
	 * 
	 * @return     string
	 */
	public function getSurveyQuestionComment()
	{
		return $this->survey_question_comment;
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
	 * Get the [display] column value.
	 * 
	 * @return     string
	 */
	public function getDisplay()
	{
		return $this->display;
	}

	/**
	 * Get the [sort] column value.
	 * 
	 * @return     int
	 */
	public function getSort()
	{
		return $this->sort;
	}

	/**
	 * Get the [code] column value.
	 * 
	 * @return     string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the [max_value] column value.
	 * 
	 * @return     int
	 */
	public function getMaxValue()
	{
		return $this->max_value;
	}

	/**
	 * Set the value of [question_id] column.
	 * 
	 * @param      int $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setQuestionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->question_id !== $v) {
			$this->question_id = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::QUESTION_ID;
		}

		return $this;
	} // setQuestionId()

	/**
	 * Set the value of [survey_id] column.
	 * 
	 * @param      int $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setSurveyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->survey_id !== $v || $this->isNew()) {
			$this->survey_id = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::SURVEY_ID;
		}

		return $this;
	} // setSurveyId()

	/**
	 * Set the value of [survey_question] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setSurveyQuestion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->survey_question !== $v) {
			$this->survey_question = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::SURVEY_QUESTION;
		}

		return $this;
	} // setSurveyQuestion()

	/**
	 * Set the value of [survey_question_comment] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setSurveyQuestionComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->survey_question_comment !== $v) {
			$this->survey_question_comment = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::SURVEY_QUESTION_COMMENT;
		}

		return $this;
	} // setSurveyQuestionComment()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->type !== $v || $this->isNew()) {
			$this->type = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Set the value of [display] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setDisplay($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->display !== $v || $this->isNew()) {
			$this->display = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::DISPLAY;
		}

		return $this;
	} // setDisplay()

	/**
	 * Set the value of [sort] column.
	 * 
	 * @param      int $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setSort($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sort !== $v || $this->isNew()) {
			$this->sort = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::SORT;
		}

		return $this;
	} // setSort()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v || $this->isNew()) {
			$this->code = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [max_value] column.
	 * 
	 * @param      int $v new value
	 * @return     SharedSurveyQuestion The current object (for fluent API support)
	 */
	public function setMaxValue($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_value !== $v) {
			$this->max_value = $v;
			$this->modifiedColumns[] = SharedSurveyQuestionPeer::MAX_VALUE;
		}

		return $this;
	} // setMaxValue()

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
			if ($this->survey_id !== 0) {
				return false;
			}

			if ($this->type !== '') {
				return false;
			}

			if ($this->display !== '') {
				return false;
			}

			if ($this->sort !== 0) {
				return false;
			}

			if ($this->code !== '') {
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

			$this->question_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->survey_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->survey_question = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->survey_question_comment = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->display = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->sort = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->code = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->max_value = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = SharedSurveyQuestionPeer::NUM_COLUMNS - SharedSurveyQuestionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating SharedSurveyQuestion object", $e);
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
			$con = Propel::getConnection(SharedSurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SharedSurveyQuestionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SharedSurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				SharedSurveyQuestionQuery::create()
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
			$con = Propel::getConnection(SharedSurveyQuestionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SharedSurveyQuestionPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = SharedSurveyQuestionPeer::QUESTION_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SharedSurveyQuestionPeer::QUESTION_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SharedSurveyQuestionPeer::QUESTION_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setQuestionId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = SharedSurveyQuestionPeer::doUpdate($this, $con);
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


			if (($retval = SharedSurveyQuestionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SharedSurveyQuestionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getQuestionId();
				break;
			case 1:
				return $this->getSurveyId();
				break;
			case 2:
				return $this->getSurveyQuestion();
				break;
			case 3:
				return $this->getSurveyQuestionComment();
				break;
			case 4:
				return $this->getType();
				break;
			case 5:
				return $this->getDisplay();
				break;
			case 6:
				return $this->getSort();
				break;
			case 7:
				return $this->getCode();
				break;
			case 8:
				return $this->getMaxValue();
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
		$keys = SharedSurveyQuestionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getQuestionId(),
			$keys[1] => $this->getSurveyId(),
			$keys[2] => $this->getSurveyQuestion(),
			$keys[3] => $this->getSurveyQuestionComment(),
			$keys[4] => $this->getType(),
			$keys[5] => $this->getDisplay(),
			$keys[6] => $this->getSort(),
			$keys[7] => $this->getCode(),
			$keys[8] => $this->getMaxValue(),
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
		$pos = SharedSurveyQuestionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setQuestionId($value);
				break;
			case 1:
				$this->setSurveyId($value);
				break;
			case 2:
				$this->setSurveyQuestion($value);
				break;
			case 3:
				$this->setSurveyQuestionComment($value);
				break;
			case 4:
				$this->setType($value);
				break;
			case 5:
				$this->setDisplay($value);
				break;
			case 6:
				$this->setSort($value);
				break;
			case 7:
				$this->setCode($value);
				break;
			case 8:
				$this->setMaxValue($value);
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
		$keys = SharedSurveyQuestionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setQuestionId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSurveyId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSurveyQuestion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSurveyQuestionComment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDisplay($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSort($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCode($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMaxValue($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SharedSurveyQuestionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SharedSurveyQuestionPeer::QUESTION_ID)) $criteria->add(SharedSurveyQuestionPeer::QUESTION_ID, $this->question_id);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::SURVEY_ID)) $criteria->add(SharedSurveyQuestionPeer::SURVEY_ID, $this->survey_id);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::SURVEY_QUESTION)) $criteria->add(SharedSurveyQuestionPeer::SURVEY_QUESTION, $this->survey_question);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::SURVEY_QUESTION_COMMENT)) $criteria->add(SharedSurveyQuestionPeer::SURVEY_QUESTION_COMMENT, $this->survey_question_comment);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::TYPE)) $criteria->add(SharedSurveyQuestionPeer::TYPE, $this->type);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::DISPLAY)) $criteria->add(SharedSurveyQuestionPeer::DISPLAY, $this->display);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::SORT)) $criteria->add(SharedSurveyQuestionPeer::SORT, $this->sort);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::CODE)) $criteria->add(SharedSurveyQuestionPeer::CODE, $this->code);
		if ($this->isColumnModified(SharedSurveyQuestionPeer::MAX_VALUE)) $criteria->add(SharedSurveyQuestionPeer::MAX_VALUE, $this->max_value);

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
		$criteria = new Criteria(SharedSurveyQuestionPeer::DATABASE_NAME);
		$criteria->add(SharedSurveyQuestionPeer::QUESTION_ID, $this->question_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getQuestionId();
	}

	/**
	 * Generic method to set the primary key (question_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setQuestionId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getQuestionId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of SharedSurveyQuestion (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setSurveyId($this->survey_id);
		$copyObj->setSurveyQuestion($this->survey_question);
		$copyObj->setSurveyQuestionComment($this->survey_question_comment);
		$copyObj->setType($this->type);
		$copyObj->setDisplay($this->display);
		$copyObj->setSort($this->sort);
		$copyObj->setCode($this->code);
		$copyObj->setMaxValue($this->max_value);

		$copyObj->setNew(true);
		$copyObj->setQuestionId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     SharedSurveyQuestion Clone of current object.
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
	 * @return     SharedSurveyQuestionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SharedSurveyQuestionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->question_id = null;
		$this->survey_id = null;
		$this->survey_question = null;
		$this->survey_question_comment = null;
		$this->type = null;
		$this->display = null;
		$this->sort = null;
		$this->code = null;
		$this->max_value = null;
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

} // BaseSharedSurveyQuestion