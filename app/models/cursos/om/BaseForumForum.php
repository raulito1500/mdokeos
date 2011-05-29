<?php


/**
 * Base class that represents a row from the 'forum_forum' table.
 *
 * 
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumForum extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ForumForumPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ForumForumPeer
	 */
	protected static $peer;

	/**
	 * The value for the forum_id field.
	 * @var        int
	 */
	protected $forum_id;

	/**
	 * The value for the forum_title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $forum_title;

	/**
	 * The value for the forum_comment field.
	 * @var        string
	 */
	protected $forum_comment;

	/**
	 * The value for the forum_threads field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $forum_threads;

	/**
	 * The value for the forum_posts field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $forum_posts;

	/**
	 * The value for the forum_last_post field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $forum_last_post;

	/**
	 * The value for the forum_category field.
	 * @var        int
	 */
	protected $forum_category;

	/**
	 * The value for the allow_anonymous field.
	 * @var        int
	 */
	protected $allow_anonymous;

	/**
	 * The value for the allow_edit field.
	 * @var        int
	 */
	protected $allow_edit;

	/**
	 * The value for the approval_direct_post field.
	 * @var        string
	 */
	protected $approval_direct_post;

	/**
	 * The value for the allow_attachments field.
	 * @var        int
	 */
	protected $allow_attachments;

	/**
	 * The value for the allow_new_threads field.
	 * @var        int
	 */
	protected $allow_new_threads;

	/**
	 * The value for the default_view field.
	 * @var        string
	 */
	protected $default_view;

	/**
	 * The value for the forum_of_group field.
	 * @var        string
	 */
	protected $forum_of_group;

	/**
	 * The value for the forum_group_public_private field.
	 * Note: this column has a database default value of: 'public'
	 * @var        string
	 */
	protected $forum_group_public_private;

	/**
	 * The value for the forum_order field.
	 * @var        int
	 */
	protected $forum_order;

	/**
	 * The value for the locked field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $locked;

	/**
	 * The value for the session_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $session_id;

	/**
	 * The value for the forum_image field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $forum_image;

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
		$this->forum_title = '';
		$this->forum_threads = 0;
		$this->forum_posts = 0;
		$this->forum_last_post = 0;
		$this->forum_group_public_private = 'public';
		$this->locked = 0;
		$this->session_id = 0;
		$this->forum_image = '';
	}

	/**
	 * Initializes internal state of BaseForumForum object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [forum_id] column value.
	 * 
	 * @return     int
	 */
	public function getForumId()
	{
		return $this->forum_id;
	}

	/**
	 * Get the [forum_title] column value.
	 * 
	 * @return     string
	 */
	public function getForumTitle()
	{
		return $this->forum_title;
	}

	/**
	 * Get the [forum_comment] column value.
	 * 
	 * @return     string
	 */
	public function getForumComment()
	{
		return $this->forum_comment;
	}

	/**
	 * Get the [forum_threads] column value.
	 * 
	 * @return     int
	 */
	public function getForumThreads()
	{
		return $this->forum_threads;
	}

	/**
	 * Get the [forum_posts] column value.
	 * 
	 * @return     int
	 */
	public function getForumPosts()
	{
		return $this->forum_posts;
	}

	/**
	 * Get the [forum_last_post] column value.
	 * 
	 * @return     int
	 */
	public function getForumLastPost()
	{
		return $this->forum_last_post;
	}

	/**
	 * Get the [forum_category] column value.
	 * 
	 * @return     int
	 */
	public function getForumCategory()
	{
		return $this->forum_category;
	}

	/**
	 * Get the [allow_anonymous] column value.
	 * 
	 * @return     int
	 */
	public function getAllowAnonymous()
	{
		return $this->allow_anonymous;
	}

	/**
	 * Get the [allow_edit] column value.
	 * 
	 * @return     int
	 */
	public function getAllowEdit()
	{
		return $this->allow_edit;
	}

	/**
	 * Get the [approval_direct_post] column value.
	 * 
	 * @return     string
	 */
	public function getApprovalDirectPost()
	{
		return $this->approval_direct_post;
	}

	/**
	 * Get the [allow_attachments] column value.
	 * 
	 * @return     int
	 */
	public function getAllowAttachments()
	{
		return $this->allow_attachments;
	}

	/**
	 * Get the [allow_new_threads] column value.
	 * 
	 * @return     int
	 */
	public function getAllowNewThreads()
	{
		return $this->allow_new_threads;
	}

	/**
	 * Get the [default_view] column value.
	 * 
	 * @return     string
	 */
	public function getDefaultView()
	{
		return $this->default_view;
	}

	/**
	 * Get the [forum_of_group] column value.
	 * 
	 * @return     string
	 */
	public function getForumOfGroup()
	{
		return $this->forum_of_group;
	}

	/**
	 * Get the [forum_group_public_private] column value.
	 * 
	 * @return     string
	 */
	public function getForumGroupPublicPrivate()
	{
		return $this->forum_group_public_private;
	}

	/**
	 * Get the [forum_order] column value.
	 * 
	 * @return     int
	 */
	public function getForumOrder()
	{
		return $this->forum_order;
	}

	/**
	 * Get the [locked] column value.
	 * 
	 * @return     int
	 */
	public function getLocked()
	{
		return $this->locked;
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
	 * Get the [forum_image] column value.
	 * 
	 * @return     string
	 */
	public function getForumImage()
	{
		return $this->forum_image;
	}

	/**
	 * Set the value of [forum_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_id !== $v) {
			$this->forum_id = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_ID;
		}

		return $this;
	} // setForumId()

	/**
	 * Set the value of [forum_title] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->forum_title !== $v || $this->isNew()) {
			$this->forum_title = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_TITLE;
		}

		return $this;
	} // setForumTitle()

	/**
	 * Set the value of [forum_comment] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->forum_comment !== $v) {
			$this->forum_comment = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_COMMENT;
		}

		return $this;
	} // setForumComment()

	/**
	 * Set the value of [forum_threads] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumThreads($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_threads !== $v || $this->isNew()) {
			$this->forum_threads = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_THREADS;
		}

		return $this;
	} // setForumThreads()

	/**
	 * Set the value of [forum_posts] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumPosts($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_posts !== $v || $this->isNew()) {
			$this->forum_posts = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_POSTS;
		}

		return $this;
	} // setForumPosts()

	/**
	 * Set the value of [forum_last_post] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumLastPost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_last_post !== $v || $this->isNew()) {
			$this->forum_last_post = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_LAST_POST;
		}

		return $this;
	} // setForumLastPost()

	/**
	 * Set the value of [forum_category] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumCategory($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_category !== $v) {
			$this->forum_category = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_CATEGORY;
		}

		return $this;
	} // setForumCategory()

	/**
	 * Set the value of [allow_anonymous] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setAllowAnonymous($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->allow_anonymous !== $v) {
			$this->allow_anonymous = $v;
			$this->modifiedColumns[] = ForumForumPeer::ALLOW_ANONYMOUS;
		}

		return $this;
	} // setAllowAnonymous()

	/**
	 * Set the value of [allow_edit] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setAllowEdit($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->allow_edit !== $v) {
			$this->allow_edit = $v;
			$this->modifiedColumns[] = ForumForumPeer::ALLOW_EDIT;
		}

		return $this;
	} // setAllowEdit()

	/**
	 * Set the value of [approval_direct_post] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setApprovalDirectPost($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->approval_direct_post !== $v) {
			$this->approval_direct_post = $v;
			$this->modifiedColumns[] = ForumForumPeer::APPROVAL_DIRECT_POST;
		}

		return $this;
	} // setApprovalDirectPost()

	/**
	 * Set the value of [allow_attachments] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setAllowAttachments($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->allow_attachments !== $v) {
			$this->allow_attachments = $v;
			$this->modifiedColumns[] = ForumForumPeer::ALLOW_ATTACHMENTS;
		}

		return $this;
	} // setAllowAttachments()

	/**
	 * Set the value of [allow_new_threads] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setAllowNewThreads($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->allow_new_threads !== $v) {
			$this->allow_new_threads = $v;
			$this->modifiedColumns[] = ForumForumPeer::ALLOW_NEW_THREADS;
		}

		return $this;
	} // setAllowNewThreads()

	/**
	 * Set the value of [default_view] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setDefaultView($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->default_view !== $v) {
			$this->default_view = $v;
			$this->modifiedColumns[] = ForumForumPeer::DEFAULT_VIEW;
		}

		return $this;
	} // setDefaultView()

	/**
	 * Set the value of [forum_of_group] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumOfGroup($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->forum_of_group !== $v) {
			$this->forum_of_group = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_OF_GROUP;
		}

		return $this;
	} // setForumOfGroup()

	/**
	 * Set the value of [forum_group_public_private] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumGroupPublicPrivate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->forum_group_public_private !== $v || $this->isNew()) {
			$this->forum_group_public_private = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_GROUP_PUBLIC_PRIVATE;
		}

		return $this;
	} // setForumGroupPublicPrivate()

	/**
	 * Set the value of [forum_order] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->forum_order !== $v) {
			$this->forum_order = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_ORDER;
		}

		return $this;
	} // setForumOrder()

	/**
	 * Set the value of [locked] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setLocked($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->locked !== $v || $this->isNew()) {
			$this->locked = $v;
			$this->modifiedColumns[] = ForumForumPeer::LOCKED;
		}

		return $this;
	} // setLocked()

	/**
	 * Set the value of [session_id] column.
	 * 
	 * @param      int $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setSessionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->session_id !== $v || $this->isNew()) {
			$this->session_id = $v;
			$this->modifiedColumns[] = ForumForumPeer::SESSION_ID;
		}

		return $this;
	} // setSessionId()

	/**
	 * Set the value of [forum_image] column.
	 * 
	 * @param      string $v new value
	 * @return     ForumForum The current object (for fluent API support)
	 */
	public function setForumImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->forum_image !== $v || $this->isNew()) {
			$this->forum_image = $v;
			$this->modifiedColumns[] = ForumForumPeer::FORUM_IMAGE;
		}

		return $this;
	} // setForumImage()

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
			if ($this->forum_title !== '') {
				return false;
			}

			if ($this->forum_threads !== 0) {
				return false;
			}

			if ($this->forum_posts !== 0) {
				return false;
			}

			if ($this->forum_last_post !== 0) {
				return false;
			}

			if ($this->forum_group_public_private !== 'public') {
				return false;
			}

			if ($this->locked !== 0) {
				return false;
			}

			if ($this->session_id !== 0) {
				return false;
			}

			if ($this->forum_image !== '') {
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

			$this->forum_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->forum_title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->forum_comment = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->forum_threads = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->forum_posts = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->forum_last_post = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->forum_category = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->allow_anonymous = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->allow_edit = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->approval_direct_post = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->allow_attachments = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->allow_new_threads = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->default_view = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->forum_of_group = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->forum_group_public_private = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->forum_order = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->locked = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->session_id = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->forum_image = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 19; // 19 = ForumForumPeer::NUM_COLUMNS - ForumForumPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating ForumForum object", $e);
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
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ForumForumPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ForumForumQuery::create()
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
			$con = Propel::getConnection(ForumForumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ForumForumPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ForumForumPeer::FORUM_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ForumForumPeer::FORUM_ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ForumForumPeer::FORUM_ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setForumId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ForumForumPeer::doUpdate($this, $con);
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


			if (($retval = ForumForumPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ForumForumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getForumId();
				break;
			case 1:
				return $this->getForumTitle();
				break;
			case 2:
				return $this->getForumComment();
				break;
			case 3:
				return $this->getForumThreads();
				break;
			case 4:
				return $this->getForumPosts();
				break;
			case 5:
				return $this->getForumLastPost();
				break;
			case 6:
				return $this->getForumCategory();
				break;
			case 7:
				return $this->getAllowAnonymous();
				break;
			case 8:
				return $this->getAllowEdit();
				break;
			case 9:
				return $this->getApprovalDirectPost();
				break;
			case 10:
				return $this->getAllowAttachments();
				break;
			case 11:
				return $this->getAllowNewThreads();
				break;
			case 12:
				return $this->getDefaultView();
				break;
			case 13:
				return $this->getForumOfGroup();
				break;
			case 14:
				return $this->getForumGroupPublicPrivate();
				break;
			case 15:
				return $this->getForumOrder();
				break;
			case 16:
				return $this->getLocked();
				break;
			case 17:
				return $this->getSessionId();
				break;
			case 18:
				return $this->getForumImage();
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
		$keys = ForumForumPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getForumId(),
			$keys[1] => $this->getForumTitle(),
			$keys[2] => $this->getForumComment(),
			$keys[3] => $this->getForumThreads(),
			$keys[4] => $this->getForumPosts(),
			$keys[5] => $this->getForumLastPost(),
			$keys[6] => $this->getForumCategory(),
			$keys[7] => $this->getAllowAnonymous(),
			$keys[8] => $this->getAllowEdit(),
			$keys[9] => $this->getApprovalDirectPost(),
			$keys[10] => $this->getAllowAttachments(),
			$keys[11] => $this->getAllowNewThreads(),
			$keys[12] => $this->getDefaultView(),
			$keys[13] => $this->getForumOfGroup(),
			$keys[14] => $this->getForumGroupPublicPrivate(),
			$keys[15] => $this->getForumOrder(),
			$keys[16] => $this->getLocked(),
			$keys[17] => $this->getSessionId(),
			$keys[18] => $this->getForumImage(),
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
		$pos = ForumForumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setForumId($value);
				break;
			case 1:
				$this->setForumTitle($value);
				break;
			case 2:
				$this->setForumComment($value);
				break;
			case 3:
				$this->setForumThreads($value);
				break;
			case 4:
				$this->setForumPosts($value);
				break;
			case 5:
				$this->setForumLastPost($value);
				break;
			case 6:
				$this->setForumCategory($value);
				break;
			case 7:
				$this->setAllowAnonymous($value);
				break;
			case 8:
				$this->setAllowEdit($value);
				break;
			case 9:
				$this->setApprovalDirectPost($value);
				break;
			case 10:
				$this->setAllowAttachments($value);
				break;
			case 11:
				$this->setAllowNewThreads($value);
				break;
			case 12:
				$this->setDefaultView($value);
				break;
			case 13:
				$this->setForumOfGroup($value);
				break;
			case 14:
				$this->setForumGroupPublicPrivate($value);
				break;
			case 15:
				$this->setForumOrder($value);
				break;
			case 16:
				$this->setLocked($value);
				break;
			case 17:
				$this->setSessionId($value);
				break;
			case 18:
				$this->setForumImage($value);
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
		$keys = ForumForumPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setForumId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setForumTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setForumComment($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setForumThreads($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setForumPosts($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setForumLastPost($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setForumCategory($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAllowAnonymous($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAllowEdit($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setApprovalDirectPost($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAllowAttachments($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAllowNewThreads($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDefaultView($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setForumOfGroup($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setForumGroupPublicPrivate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setForumOrder($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setLocked($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setSessionId($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setForumImage($arr[$keys[18]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ForumForumPeer::DATABASE_NAME);

		if ($this->isColumnModified(ForumForumPeer::FORUM_ID)) $criteria->add(ForumForumPeer::FORUM_ID, $this->forum_id);
		if ($this->isColumnModified(ForumForumPeer::FORUM_TITLE)) $criteria->add(ForumForumPeer::FORUM_TITLE, $this->forum_title);
		if ($this->isColumnModified(ForumForumPeer::FORUM_COMMENT)) $criteria->add(ForumForumPeer::FORUM_COMMENT, $this->forum_comment);
		if ($this->isColumnModified(ForumForumPeer::FORUM_THREADS)) $criteria->add(ForumForumPeer::FORUM_THREADS, $this->forum_threads);
		if ($this->isColumnModified(ForumForumPeer::FORUM_POSTS)) $criteria->add(ForumForumPeer::FORUM_POSTS, $this->forum_posts);
		if ($this->isColumnModified(ForumForumPeer::FORUM_LAST_POST)) $criteria->add(ForumForumPeer::FORUM_LAST_POST, $this->forum_last_post);
		if ($this->isColumnModified(ForumForumPeer::FORUM_CATEGORY)) $criteria->add(ForumForumPeer::FORUM_CATEGORY, $this->forum_category);
		if ($this->isColumnModified(ForumForumPeer::ALLOW_ANONYMOUS)) $criteria->add(ForumForumPeer::ALLOW_ANONYMOUS, $this->allow_anonymous);
		if ($this->isColumnModified(ForumForumPeer::ALLOW_EDIT)) $criteria->add(ForumForumPeer::ALLOW_EDIT, $this->allow_edit);
		if ($this->isColumnModified(ForumForumPeer::APPROVAL_DIRECT_POST)) $criteria->add(ForumForumPeer::APPROVAL_DIRECT_POST, $this->approval_direct_post);
		if ($this->isColumnModified(ForumForumPeer::ALLOW_ATTACHMENTS)) $criteria->add(ForumForumPeer::ALLOW_ATTACHMENTS, $this->allow_attachments);
		if ($this->isColumnModified(ForumForumPeer::ALLOW_NEW_THREADS)) $criteria->add(ForumForumPeer::ALLOW_NEW_THREADS, $this->allow_new_threads);
		if ($this->isColumnModified(ForumForumPeer::DEFAULT_VIEW)) $criteria->add(ForumForumPeer::DEFAULT_VIEW, $this->default_view);
		if ($this->isColumnModified(ForumForumPeer::FORUM_OF_GROUP)) $criteria->add(ForumForumPeer::FORUM_OF_GROUP, $this->forum_of_group);
		if ($this->isColumnModified(ForumForumPeer::FORUM_GROUP_PUBLIC_PRIVATE)) $criteria->add(ForumForumPeer::FORUM_GROUP_PUBLIC_PRIVATE, $this->forum_group_public_private);
		if ($this->isColumnModified(ForumForumPeer::FORUM_ORDER)) $criteria->add(ForumForumPeer::FORUM_ORDER, $this->forum_order);
		if ($this->isColumnModified(ForumForumPeer::LOCKED)) $criteria->add(ForumForumPeer::LOCKED, $this->locked);
		if ($this->isColumnModified(ForumForumPeer::SESSION_ID)) $criteria->add(ForumForumPeer::SESSION_ID, $this->session_id);
		if ($this->isColumnModified(ForumForumPeer::FORUM_IMAGE)) $criteria->add(ForumForumPeer::FORUM_IMAGE, $this->forum_image);

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
		$criteria = new Criteria(ForumForumPeer::DATABASE_NAME);
		$criteria->add(ForumForumPeer::FORUM_ID, $this->forum_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getForumId();
	}

	/**
	 * Generic method to set the primary key (forum_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setForumId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getForumId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of ForumForum (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setForumTitle($this->forum_title);
		$copyObj->setForumComment($this->forum_comment);
		$copyObj->setForumThreads($this->forum_threads);
		$copyObj->setForumPosts($this->forum_posts);
		$copyObj->setForumLastPost($this->forum_last_post);
		$copyObj->setForumCategory($this->forum_category);
		$copyObj->setAllowAnonymous($this->allow_anonymous);
		$copyObj->setAllowEdit($this->allow_edit);
		$copyObj->setApprovalDirectPost($this->approval_direct_post);
		$copyObj->setAllowAttachments($this->allow_attachments);
		$copyObj->setAllowNewThreads($this->allow_new_threads);
		$copyObj->setDefaultView($this->default_view);
		$copyObj->setForumOfGroup($this->forum_of_group);
		$copyObj->setForumGroupPublicPrivate($this->forum_group_public_private);
		$copyObj->setForumOrder($this->forum_order);
		$copyObj->setLocked($this->locked);
		$copyObj->setSessionId($this->session_id);
		$copyObj->setForumImage($this->forum_image);

		$copyObj->setNew(true);
		$copyObj->setForumId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     ForumForum Clone of current object.
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
	 * @return     ForumForumPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ForumForumPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->forum_id = null;
		$this->forum_title = null;
		$this->forum_comment = null;
		$this->forum_threads = null;
		$this->forum_posts = null;
		$this->forum_last_post = null;
		$this->forum_category = null;
		$this->allow_anonymous = null;
		$this->allow_edit = null;
		$this->approval_direct_post = null;
		$this->allow_attachments = null;
		$this->allow_new_threads = null;
		$this->default_view = null;
		$this->forum_of_group = null;
		$this->forum_group_public_private = null;
		$this->forum_order = null;
		$this->locked = null;
		$this->session_id = null;
		$this->forum_image = null;
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

} // BaseForumForum
