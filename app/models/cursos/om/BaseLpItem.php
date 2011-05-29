<?php


/**
 * Base class that represents a row from the 'lp_item' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItem extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'LpItemPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        LpItemPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the lp_id field.
	 * @var        int
	 */
	protected $lp_id;

	/**
	 * The value for the item_type field.
	 * Note: this column has a database default value of: 'dokeos_document'
	 * @var        string
	 */
	protected $item_type;

	/**
	 * The value for the ref field.
	 * @var        string
	 */
	protected $ref;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the path field.
	 * @var        string
	 */
	protected $path;

	/**
	 * The value for the min_score field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $min_score;

	/**
	 * The value for the max_score field.
	 * Note: this column has a database default value of: 100
	 * @var        double
	 */
	protected $max_score;

	/**
	 * The value for the mastery_score field.
	 * @var        double
	 */
	protected $mastery_score;

	/**
	 * The value for the parent_item_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $parent_item_id;

	/**
	 * The value for the previous_item_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $previous_item_id;

	/**
	 * The value for the next_item_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $next_item_id;

	/**
	 * The value for the display_order field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $display_order;

	/**
	 * The value for the prerequisite field.
	 * @var        string
	 */
	protected $prerequisite;

	/**
	 * The value for the parameters field.
	 * @var        string
	 */
	protected $parameters;

	/**
	 * The value for the launch_data field.
	 * @var        string
	 */
	protected $launch_data;

	/**
	 * The value for the max_time_allowed field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $max_time_allowed;

	/**
	 * The value for the terms field.
	 * @var        string
	 */
	protected $terms;

	/**
	 * The value for the search_did field.
	 * @var        int
	 */
	protected $search_did;

	/**
	 * The value for the audio field.
	 * @var        string
	 */
	protected $audio;

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
		$this->item_type = 'dokeos_document';
		$this->min_score = 0;
		$this->max_score = 100;
		$this->parent_item_id = 0;
		$this->previous_item_id = 0;
		$this->next_item_id = 0;
		$this->display_order = 0;
		$this->max_time_allowed = '';
	}

	/**
	 * Initializes internal state of BaseLpItem object.
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
	 * Get the [lp_id] column value.
	 * 
	 * @return     int
	 */
	public function getLpId()
	{
		return $this->lp_id;
	}

	/**
	 * Get the [item_type] column value.
	 * 
	 * @return     string
	 */
	public function getItemType()
	{
		return $this->item_type;
	}

	/**
	 * Get the [ref] column value.
	 * 
	 * @return     string
	 */
	public function getRef()
	{
		return $this->ref;
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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [path] column value.
	 * 
	 * @return     string
	 */
	public function getPath()
	{
		return $this->path;
	}

	/**
	 * Get the [min_score] column value.
	 * 
	 * @return     double
	 */
	public function getMinScore()
	{
		return $this->min_score;
	}

	/**
	 * Get the [max_score] column value.
	 * 
	 * @return     double
	 */
	public function getMaxScore()
	{
		return $this->max_score;
	}

	/**
	 * Get the [mastery_score] column value.
	 * 
	 * @return     double
	 */
	public function getMasteryScore()
	{
		return $this->mastery_score;
	}

	/**
	 * Get the [parent_item_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentItemId()
	{
		return $this->parent_item_id;
	}

	/**
	 * Get the [previous_item_id] column value.
	 * 
	 * @return     int
	 */
	public function getPreviousItemId()
	{
		return $this->previous_item_id;
	}

	/**
	 * Get the [next_item_id] column value.
	 * 
	 * @return     int
	 */
	public function getNextItemId()
	{
		return $this->next_item_id;
	}

	/**
	 * Get the [display_order] column value.
	 * 
	 * @return     int
	 */
	public function getDisplayOrder()
	{
		return $this->display_order;
	}

	/**
	 * Get the [prerequisite] column value.
	 * 
	 * @return     string
	 */
	public function getPrerequisite()
	{
		return $this->prerequisite;
	}

	/**
	 * Get the [parameters] column value.
	 * 
	 * @return     string
	 */
	public function getParameters()
	{
		return $this->parameters;
	}

	/**
	 * Get the [launch_data] column value.
	 * 
	 * @return     string
	 */
	public function getLaunchData()
	{
		return $this->launch_data;
	}

	/**
	 * Get the [max_time_allowed] column value.
	 * 
	 * @return     string
	 */
	public function getMaxTimeAllowed()
	{
		return $this->max_time_allowed;
	}

	/**
	 * Get the [terms] column value.
	 * 
	 * @return     string
	 */
	public function getTerms()
	{
		return $this->terms;
	}

	/**
	 * Get the [search_did] column value.
	 * 
	 * @return     int
	 */
	public function getSearchDid()
	{
		return $this->search_did;
	}

	/**
	 * Get the [audio] column value.
	 * 
	 * @return     string
	 */
	public function getAudio()
	{
		return $this->audio;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LpItemPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [lp_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setLpId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->lp_id !== $v) {
			$this->lp_id = $v;
			$this->modifiedColumns[] = LpItemPeer::LP_ID;
		}

		return $this;
	} // setLpId()

	/**
	 * Set the value of [item_type] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setItemType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->item_type !== $v || $this->isNew()) {
			$this->item_type = $v;
			$this->modifiedColumns[] = LpItemPeer::ITEM_TYPE;
		}

		return $this;
	} // setItemType()

	/**
	 * Set the value of [ref] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setRef($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ref !== $v) {
			$this->ref = $v;
			$this->modifiedColumns[] = LpItemPeer::REF;
		}

		return $this;
	} // setRef()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = LpItemPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = LpItemPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [path] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->path !== $v) {
			$this->path = $v;
			$this->modifiedColumns[] = LpItemPeer::PATH;
		}

		return $this;
	} // setPath()

	/**
	 * Set the value of [min_score] column.
	 * 
	 * @param      double $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setMinScore($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->min_score !== $v || $this->isNew()) {
			$this->min_score = $v;
			$this->modifiedColumns[] = LpItemPeer::MIN_SCORE;
		}

		return $this;
	} // setMinScore()

	/**
	 * Set the value of [max_score] column.
	 * 
	 * @param      double $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setMaxScore($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->max_score !== $v || $this->isNew()) {
			$this->max_score = $v;
			$this->modifiedColumns[] = LpItemPeer::MAX_SCORE;
		}

		return $this;
	} // setMaxScore()

	/**
	 * Set the value of [mastery_score] column.
	 * 
	 * @param      double $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setMasteryScore($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->mastery_score !== $v) {
			$this->mastery_score = $v;
			$this->modifiedColumns[] = LpItemPeer::MASTERY_SCORE;
		}

		return $this;
	} // setMasteryScore()

	/**
	 * Set the value of [parent_item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setParentItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_item_id !== $v || $this->isNew()) {
			$this->parent_item_id = $v;
			$this->modifiedColumns[] = LpItemPeer::PARENT_ITEM_ID;
		}

		return $this;
	} // setParentItemId()

	/**
	 * Set the value of [previous_item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setPreviousItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->previous_item_id !== $v || $this->isNew()) {
			$this->previous_item_id = $v;
			$this->modifiedColumns[] = LpItemPeer::PREVIOUS_ITEM_ID;
		}

		return $this;
	} // setPreviousItemId()

	/**
	 * Set the value of [next_item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setNextItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->next_item_id !== $v || $this->isNew()) {
			$this->next_item_id = $v;
			$this->modifiedColumns[] = LpItemPeer::NEXT_ITEM_ID;
		}

		return $this;
	} // setNextItemId()

	/**
	 * Set the value of [display_order] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setDisplayOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->display_order !== $v || $this->isNew()) {
			$this->display_order = $v;
			$this->modifiedColumns[] = LpItemPeer::DISPLAY_ORDER;
		}

		return $this;
	} // setDisplayOrder()

	/**
	 * Set the value of [prerequisite] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setPrerequisite($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->prerequisite !== $v) {
			$this->prerequisite = $v;
			$this->modifiedColumns[] = LpItemPeer::PREREQUISITE;
		}

		return $this;
	} // setPrerequisite()

	/**
	 * Set the value of [parameters] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setParameters($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->parameters !== $v) {
			$this->parameters = $v;
			$this->modifiedColumns[] = LpItemPeer::PARAMETERS;
		}

		return $this;
	} // setParameters()

	/**
	 * Set the value of [launch_data] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setLaunchData($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->launch_data !== $v) {
			$this->launch_data = $v;
			$this->modifiedColumns[] = LpItemPeer::LAUNCH_DATA;
		}

		return $this;
	} // setLaunchData()

	/**
	 * Set the value of [max_time_allowed] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setMaxTimeAllowed($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->max_time_allowed !== $v || $this->isNew()) {
			$this->max_time_allowed = $v;
			$this->modifiedColumns[] = LpItemPeer::MAX_TIME_ALLOWED;
		}

		return $this;
	} // setMaxTimeAllowed()

	/**
	 * Set the value of [terms] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setTerms($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->terms !== $v) {
			$this->terms = $v;
			$this->modifiedColumns[] = LpItemPeer::TERMS;
		}

		return $this;
	} // setTerms()

	/**
	 * Set the value of [search_did] column.
	 * 
	 * @param      int $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setSearchDid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->search_did !== $v) {
			$this->search_did = $v;
			$this->modifiedColumns[] = LpItemPeer::SEARCH_DID;
		}

		return $this;
	} // setSearchDid()

	/**
	 * Set the value of [audio] column.
	 * 
	 * @param      string $v new value
	 * @return     LpItem The current object (for fluent API support)
	 */
	public function setAudio($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->audio !== $v) {
			$this->audio = $v;
			$this->modifiedColumns[] = LpItemPeer::AUDIO;
		}

		return $this;
	} // setAudio()

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
			if ($this->item_type !== 'dokeos_document') {
				return false;
			}

			if ($this->min_score !== 0) {
				return false;
			}

			if ($this->max_score !== 100) {
				return false;
			}

			if ($this->parent_item_id !== 0) {
				return false;
			}

			if ($this->previous_item_id !== 0) {
				return false;
			}

			if ($this->next_item_id !== 0) {
				return false;
			}

			if ($this->display_order !== 0) {
				return false;
			}

			if ($this->max_time_allowed !== '') {
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
			$this->lp_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->item_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->ref = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->path = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->min_score = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
			$this->max_score = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
			$this->mastery_score = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
			$this->parent_item_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->previous_item_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->next_item_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->display_order = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->prerequisite = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->parameters = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->launch_data = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->max_time_allowed = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->terms = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->search_did = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->audio = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 21; // 21 = LpItemPeer::NUM_COLUMNS - LpItemPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating LpItem object", $e);
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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = LpItemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				LpItemQuery::create()
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
			$con = Propel::getConnection(LpItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				LpItemPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = LpItemPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(LpItemPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.LpItemPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = LpItemPeer::doUpdate($this, $con);
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


			if (($retval = LpItemPeer::doValidate($this, $columns)) !== true) {
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
		$pos = LpItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLpId();
				break;
			case 2:
				return $this->getItemType();
				break;
			case 3:
				return $this->getRef();
				break;
			case 4:
				return $this->getTitle();
				break;
			case 5:
				return $this->getDescription();
				break;
			case 6:
				return $this->getPath();
				break;
			case 7:
				return $this->getMinScore();
				break;
			case 8:
				return $this->getMaxScore();
				break;
			case 9:
				return $this->getMasteryScore();
				break;
			case 10:
				return $this->getParentItemId();
				break;
			case 11:
				return $this->getPreviousItemId();
				break;
			case 12:
				return $this->getNextItemId();
				break;
			case 13:
				return $this->getDisplayOrder();
				break;
			case 14:
				return $this->getPrerequisite();
				break;
			case 15:
				return $this->getParameters();
				break;
			case 16:
				return $this->getLaunchData();
				break;
			case 17:
				return $this->getMaxTimeAllowed();
				break;
			case 18:
				return $this->getTerms();
				break;
			case 19:
				return $this->getSearchDid();
				break;
			case 20:
				return $this->getAudio();
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
		$keys = LpItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLpId(),
			$keys[2] => $this->getItemType(),
			$keys[3] => $this->getRef(),
			$keys[4] => $this->getTitle(),
			$keys[5] => $this->getDescription(),
			$keys[6] => $this->getPath(),
			$keys[7] => $this->getMinScore(),
			$keys[8] => $this->getMaxScore(),
			$keys[9] => $this->getMasteryScore(),
			$keys[10] => $this->getParentItemId(),
			$keys[11] => $this->getPreviousItemId(),
			$keys[12] => $this->getNextItemId(),
			$keys[13] => $this->getDisplayOrder(),
			$keys[14] => $this->getPrerequisite(),
			$keys[15] => $this->getParameters(),
			$keys[16] => $this->getLaunchData(),
			$keys[17] => $this->getMaxTimeAllowed(),
			$keys[18] => $this->getTerms(),
			$keys[19] => $this->getSearchDid(),
			$keys[20] => $this->getAudio(),
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
		$pos = LpItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLpId($value);
				break;
			case 2:
				$this->setItemType($value);
				break;
			case 3:
				$this->setRef($value);
				break;
			case 4:
				$this->setTitle($value);
				break;
			case 5:
				$this->setDescription($value);
				break;
			case 6:
				$this->setPath($value);
				break;
			case 7:
				$this->setMinScore($value);
				break;
			case 8:
				$this->setMaxScore($value);
				break;
			case 9:
				$this->setMasteryScore($value);
				break;
			case 10:
				$this->setParentItemId($value);
				break;
			case 11:
				$this->setPreviousItemId($value);
				break;
			case 12:
				$this->setNextItemId($value);
				break;
			case 13:
				$this->setDisplayOrder($value);
				break;
			case 14:
				$this->setPrerequisite($value);
				break;
			case 15:
				$this->setParameters($value);
				break;
			case 16:
				$this->setLaunchData($value);
				break;
			case 17:
				$this->setMaxTimeAllowed($value);
				break;
			case 18:
				$this->setTerms($value);
				break;
			case 19:
				$this->setSearchDid($value);
				break;
			case 20:
				$this->setAudio($value);
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
		$keys = LpItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLpId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setItemType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRef($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPath($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMinScore($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMaxScore($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMasteryScore($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setParentItemId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPreviousItemId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNextItemId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDisplayOrder($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPrerequisite($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setParameters($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setLaunchData($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setMaxTimeAllowed($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTerms($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSearchDid($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setAudio($arr[$keys[20]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(LpItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(LpItemPeer::ID)) $criteria->add(LpItemPeer::ID, $this->id);
		if ($this->isColumnModified(LpItemPeer::LP_ID)) $criteria->add(LpItemPeer::LP_ID, $this->lp_id);
		if ($this->isColumnModified(LpItemPeer::ITEM_TYPE)) $criteria->add(LpItemPeer::ITEM_TYPE, $this->item_type);
		if ($this->isColumnModified(LpItemPeer::REF)) $criteria->add(LpItemPeer::REF, $this->ref);
		if ($this->isColumnModified(LpItemPeer::TITLE)) $criteria->add(LpItemPeer::TITLE, $this->title);
		if ($this->isColumnModified(LpItemPeer::DESCRIPTION)) $criteria->add(LpItemPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(LpItemPeer::PATH)) $criteria->add(LpItemPeer::PATH, $this->path);
		if ($this->isColumnModified(LpItemPeer::MIN_SCORE)) $criteria->add(LpItemPeer::MIN_SCORE, $this->min_score);
		if ($this->isColumnModified(LpItemPeer::MAX_SCORE)) $criteria->add(LpItemPeer::MAX_SCORE, $this->max_score);
		if ($this->isColumnModified(LpItemPeer::MASTERY_SCORE)) $criteria->add(LpItemPeer::MASTERY_SCORE, $this->mastery_score);
		if ($this->isColumnModified(LpItemPeer::PARENT_ITEM_ID)) $criteria->add(LpItemPeer::PARENT_ITEM_ID, $this->parent_item_id);
		if ($this->isColumnModified(LpItemPeer::PREVIOUS_ITEM_ID)) $criteria->add(LpItemPeer::PREVIOUS_ITEM_ID, $this->previous_item_id);
		if ($this->isColumnModified(LpItemPeer::NEXT_ITEM_ID)) $criteria->add(LpItemPeer::NEXT_ITEM_ID, $this->next_item_id);
		if ($this->isColumnModified(LpItemPeer::DISPLAY_ORDER)) $criteria->add(LpItemPeer::DISPLAY_ORDER, $this->display_order);
		if ($this->isColumnModified(LpItemPeer::PREREQUISITE)) $criteria->add(LpItemPeer::PREREQUISITE, $this->prerequisite);
		if ($this->isColumnModified(LpItemPeer::PARAMETERS)) $criteria->add(LpItemPeer::PARAMETERS, $this->parameters);
		if ($this->isColumnModified(LpItemPeer::LAUNCH_DATA)) $criteria->add(LpItemPeer::LAUNCH_DATA, $this->launch_data);
		if ($this->isColumnModified(LpItemPeer::MAX_TIME_ALLOWED)) $criteria->add(LpItemPeer::MAX_TIME_ALLOWED, $this->max_time_allowed);
		if ($this->isColumnModified(LpItemPeer::TERMS)) $criteria->add(LpItemPeer::TERMS, $this->terms);
		if ($this->isColumnModified(LpItemPeer::SEARCH_DID)) $criteria->add(LpItemPeer::SEARCH_DID, $this->search_did);
		if ($this->isColumnModified(LpItemPeer::AUDIO)) $criteria->add(LpItemPeer::AUDIO, $this->audio);

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
		$criteria = new Criteria(LpItemPeer::DATABASE_NAME);
		$criteria->add(LpItemPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of LpItem (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setLpId($this->lp_id);
		$copyObj->setItemType($this->item_type);
		$copyObj->setRef($this->ref);
		$copyObj->setTitle($this->title);
		$copyObj->setDescription($this->description);
		$copyObj->setPath($this->path);
		$copyObj->setMinScore($this->min_score);
		$copyObj->setMaxScore($this->max_score);
		$copyObj->setMasteryScore($this->mastery_score);
		$copyObj->setParentItemId($this->parent_item_id);
		$copyObj->setPreviousItemId($this->previous_item_id);
		$copyObj->setNextItemId($this->next_item_id);
		$copyObj->setDisplayOrder($this->display_order);
		$copyObj->setPrerequisite($this->prerequisite);
		$copyObj->setParameters($this->parameters);
		$copyObj->setLaunchData($this->launch_data);
		$copyObj->setMaxTimeAllowed($this->max_time_allowed);
		$copyObj->setTerms($this->terms);
		$copyObj->setSearchDid($this->search_did);
		$copyObj->setAudio($this->audio);

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
	 * @return     LpItem Clone of current object.
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
	 * @return     LpItemPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new LpItemPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->lp_id = null;
		$this->item_type = null;
		$this->ref = null;
		$this->title = null;
		$this->description = null;
		$this->path = null;
		$this->min_score = null;
		$this->max_score = null;
		$this->mastery_score = null;
		$this->parent_item_id = null;
		$this->previous_item_id = null;
		$this->next_item_id = null;
		$this->display_order = null;
		$this->prerequisite = null;
		$this->parameters = null;
		$this->launch_data = null;
		$this->max_time_allowed = null;
		$this->terms = null;
		$this->search_did = null;
		$this->audio = null;
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

} // BaseLpItem
