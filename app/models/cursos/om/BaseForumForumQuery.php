<?php


/**
 * Base class that represents a query for the 'forum_forum' table.
 *
 * 
 *
 * @method     ForumForumQuery orderByForumId($order = Criteria::ASC) Order by the forum_id column
 * @method     ForumForumQuery orderByForumTitle($order = Criteria::ASC) Order by the forum_title column
 * @method     ForumForumQuery orderByForumComment($order = Criteria::ASC) Order by the forum_comment column
 * @method     ForumForumQuery orderByForumThreads($order = Criteria::ASC) Order by the forum_threads column
 * @method     ForumForumQuery orderByForumPosts($order = Criteria::ASC) Order by the forum_posts column
 * @method     ForumForumQuery orderByForumLastPost($order = Criteria::ASC) Order by the forum_last_post column
 * @method     ForumForumQuery orderByForumCategory($order = Criteria::ASC) Order by the forum_category column
 * @method     ForumForumQuery orderByAllowAnonymous($order = Criteria::ASC) Order by the allow_anonymous column
 * @method     ForumForumQuery orderByAllowEdit($order = Criteria::ASC) Order by the allow_edit column
 * @method     ForumForumQuery orderByApprovalDirectPost($order = Criteria::ASC) Order by the approval_direct_post column
 * @method     ForumForumQuery orderByAllowAttachments($order = Criteria::ASC) Order by the allow_attachments column
 * @method     ForumForumQuery orderByAllowNewThreads($order = Criteria::ASC) Order by the allow_new_threads column
 * @method     ForumForumQuery orderByDefaultView($order = Criteria::ASC) Order by the default_view column
 * @method     ForumForumQuery orderByForumOfGroup($order = Criteria::ASC) Order by the forum_of_group column
 * @method     ForumForumQuery orderByForumGroupPublicPrivate($order = Criteria::ASC) Order by the forum_group_public_private column
 * @method     ForumForumQuery orderByForumOrder($order = Criteria::ASC) Order by the forum_order column
 * @method     ForumForumQuery orderByLocked($order = Criteria::ASC) Order by the locked column
 * @method     ForumForumQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     ForumForumQuery orderByForumImage($order = Criteria::ASC) Order by the forum_image column
 *
 * @method     ForumForumQuery groupByForumId() Group by the forum_id column
 * @method     ForumForumQuery groupByForumTitle() Group by the forum_title column
 * @method     ForumForumQuery groupByForumComment() Group by the forum_comment column
 * @method     ForumForumQuery groupByForumThreads() Group by the forum_threads column
 * @method     ForumForumQuery groupByForumPosts() Group by the forum_posts column
 * @method     ForumForumQuery groupByForumLastPost() Group by the forum_last_post column
 * @method     ForumForumQuery groupByForumCategory() Group by the forum_category column
 * @method     ForumForumQuery groupByAllowAnonymous() Group by the allow_anonymous column
 * @method     ForumForumQuery groupByAllowEdit() Group by the allow_edit column
 * @method     ForumForumQuery groupByApprovalDirectPost() Group by the approval_direct_post column
 * @method     ForumForumQuery groupByAllowAttachments() Group by the allow_attachments column
 * @method     ForumForumQuery groupByAllowNewThreads() Group by the allow_new_threads column
 * @method     ForumForumQuery groupByDefaultView() Group by the default_view column
 * @method     ForumForumQuery groupByForumOfGroup() Group by the forum_of_group column
 * @method     ForumForumQuery groupByForumGroupPublicPrivate() Group by the forum_group_public_private column
 * @method     ForumForumQuery groupByForumOrder() Group by the forum_order column
 * @method     ForumForumQuery groupByLocked() Group by the locked column
 * @method     ForumForumQuery groupBySessionId() Group by the session_id column
 * @method     ForumForumQuery groupByForumImage() Group by the forum_image column
 *
 * @method     ForumForumQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumForumQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumForumQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumForum findOne(PropelPDO $con = null) Return the first ForumForum matching the query
 * @method     ForumForum findOneOrCreate(PropelPDO $con = null) Return the first ForumForum matching the query, or a new ForumForum object populated from the query conditions when no match is found
 *
 * @method     ForumForum findOneByForumId(int $forum_id) Return the first ForumForum filtered by the forum_id column
 * @method     ForumForum findOneByForumTitle(string $forum_title) Return the first ForumForum filtered by the forum_title column
 * @method     ForumForum findOneByForumComment(string $forum_comment) Return the first ForumForum filtered by the forum_comment column
 * @method     ForumForum findOneByForumThreads(int $forum_threads) Return the first ForumForum filtered by the forum_threads column
 * @method     ForumForum findOneByForumPosts(int $forum_posts) Return the first ForumForum filtered by the forum_posts column
 * @method     ForumForum findOneByForumLastPost(int $forum_last_post) Return the first ForumForum filtered by the forum_last_post column
 * @method     ForumForum findOneByForumCategory(int $forum_category) Return the first ForumForum filtered by the forum_category column
 * @method     ForumForum findOneByAllowAnonymous(int $allow_anonymous) Return the first ForumForum filtered by the allow_anonymous column
 * @method     ForumForum findOneByAllowEdit(int $allow_edit) Return the first ForumForum filtered by the allow_edit column
 * @method     ForumForum findOneByApprovalDirectPost(string $approval_direct_post) Return the first ForumForum filtered by the approval_direct_post column
 * @method     ForumForum findOneByAllowAttachments(int $allow_attachments) Return the first ForumForum filtered by the allow_attachments column
 * @method     ForumForum findOneByAllowNewThreads(int $allow_new_threads) Return the first ForumForum filtered by the allow_new_threads column
 * @method     ForumForum findOneByDefaultView(string $default_view) Return the first ForumForum filtered by the default_view column
 * @method     ForumForum findOneByForumOfGroup(string $forum_of_group) Return the first ForumForum filtered by the forum_of_group column
 * @method     ForumForum findOneByForumGroupPublicPrivate(string $forum_group_public_private) Return the first ForumForum filtered by the forum_group_public_private column
 * @method     ForumForum findOneByForumOrder(int $forum_order) Return the first ForumForum filtered by the forum_order column
 * @method     ForumForum findOneByLocked(int $locked) Return the first ForumForum filtered by the locked column
 * @method     ForumForum findOneBySessionId(int $session_id) Return the first ForumForum filtered by the session_id column
 * @method     ForumForum findOneByForumImage(string $forum_image) Return the first ForumForum filtered by the forum_image column
 *
 * @method     array findByForumId(int $forum_id) Return ForumForum objects filtered by the forum_id column
 * @method     array findByForumTitle(string $forum_title) Return ForumForum objects filtered by the forum_title column
 * @method     array findByForumComment(string $forum_comment) Return ForumForum objects filtered by the forum_comment column
 * @method     array findByForumThreads(int $forum_threads) Return ForumForum objects filtered by the forum_threads column
 * @method     array findByForumPosts(int $forum_posts) Return ForumForum objects filtered by the forum_posts column
 * @method     array findByForumLastPost(int $forum_last_post) Return ForumForum objects filtered by the forum_last_post column
 * @method     array findByForumCategory(int $forum_category) Return ForumForum objects filtered by the forum_category column
 * @method     array findByAllowAnonymous(int $allow_anonymous) Return ForumForum objects filtered by the allow_anonymous column
 * @method     array findByAllowEdit(int $allow_edit) Return ForumForum objects filtered by the allow_edit column
 * @method     array findByApprovalDirectPost(string $approval_direct_post) Return ForumForum objects filtered by the approval_direct_post column
 * @method     array findByAllowAttachments(int $allow_attachments) Return ForumForum objects filtered by the allow_attachments column
 * @method     array findByAllowNewThreads(int $allow_new_threads) Return ForumForum objects filtered by the allow_new_threads column
 * @method     array findByDefaultView(string $default_view) Return ForumForum objects filtered by the default_view column
 * @method     array findByForumOfGroup(string $forum_of_group) Return ForumForum objects filtered by the forum_of_group column
 * @method     array findByForumGroupPublicPrivate(string $forum_group_public_private) Return ForumForum objects filtered by the forum_group_public_private column
 * @method     array findByForumOrder(int $forum_order) Return ForumForum objects filtered by the forum_order column
 * @method     array findByLocked(int $locked) Return ForumForum objects filtered by the locked column
 * @method     array findBySessionId(int $session_id) Return ForumForum objects filtered by the session_id column
 * @method     array findByForumImage(string $forum_image) Return ForumForum objects filtered by the forum_image column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumForumQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumForumQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumForum', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumForumQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumForumQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumForumQuery) {
			return $criteria;
		}
		$query = new ForumForumQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    ForumForum|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumForumPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumForumPeer::FORUM_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumForumPeer::FORUM_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the forum_id column
	 * 
	 * @param     int|array $forumId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumId($forumId = null, $comparison = null)
	{
		if (is_array($forumId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_ID, $forumId, $comparison);
	}

	/**
	 * Filter the query on the forum_title column
	 * 
	 * @param     string $forumTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumTitle($forumTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($forumTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $forumTitle)) {
				$forumTitle = str_replace('*', '%', $forumTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_TITLE, $forumTitle, $comparison);
	}

	/**
	 * Filter the query on the forum_comment column
	 * 
	 * @param     string $forumComment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumComment($forumComment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($forumComment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $forumComment)) {
				$forumComment = str_replace('*', '%', $forumComment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_COMMENT, $forumComment, $comparison);
	}

	/**
	 * Filter the query on the forum_threads column
	 * 
	 * @param     int|array $forumThreads The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumThreads($forumThreads = null, $comparison = null)
	{
		if (is_array($forumThreads)) {
			$useMinMax = false;
			if (isset($forumThreads['min'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_THREADS, $forumThreads['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumThreads['max'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_THREADS, $forumThreads['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_THREADS, $forumThreads, $comparison);
	}

	/**
	 * Filter the query on the forum_posts column
	 * 
	 * @param     int|array $forumPosts The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumPosts($forumPosts = null, $comparison = null)
	{
		if (is_array($forumPosts)) {
			$useMinMax = false;
			if (isset($forumPosts['min'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_POSTS, $forumPosts['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumPosts['max'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_POSTS, $forumPosts['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_POSTS, $forumPosts, $comparison);
	}

	/**
	 * Filter the query on the forum_last_post column
	 * 
	 * @param     int|array $forumLastPost The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumLastPost($forumLastPost = null, $comparison = null)
	{
		if (is_array($forumLastPost)) {
			$useMinMax = false;
			if (isset($forumLastPost['min'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_LAST_POST, $forumLastPost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumLastPost['max'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_LAST_POST, $forumLastPost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_LAST_POST, $forumLastPost, $comparison);
	}

	/**
	 * Filter the query on the forum_category column
	 * 
	 * @param     int|array $forumCategory The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumCategory($forumCategory = null, $comparison = null)
	{
		if (is_array($forumCategory)) {
			$useMinMax = false;
			if (isset($forumCategory['min'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_CATEGORY, $forumCategory['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumCategory['max'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_CATEGORY, $forumCategory['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_CATEGORY, $forumCategory, $comparison);
	}

	/**
	 * Filter the query on the allow_anonymous column
	 * 
	 * @param     int|array $allowAnonymous The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByAllowAnonymous($allowAnonymous = null, $comparison = null)
	{
		if (is_array($allowAnonymous)) {
			$useMinMax = false;
			if (isset($allowAnonymous['min'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_ANONYMOUS, $allowAnonymous['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($allowAnonymous['max'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_ANONYMOUS, $allowAnonymous['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::ALLOW_ANONYMOUS, $allowAnonymous, $comparison);
	}

	/**
	 * Filter the query on the allow_edit column
	 * 
	 * @param     int|array $allowEdit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByAllowEdit($allowEdit = null, $comparison = null)
	{
		if (is_array($allowEdit)) {
			$useMinMax = false;
			if (isset($allowEdit['min'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_EDIT, $allowEdit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($allowEdit['max'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_EDIT, $allowEdit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::ALLOW_EDIT, $allowEdit, $comparison);
	}

	/**
	 * Filter the query on the approval_direct_post column
	 * 
	 * @param     string $approvalDirectPost The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByApprovalDirectPost($approvalDirectPost = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($approvalDirectPost)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $approvalDirectPost)) {
				$approvalDirectPost = str_replace('*', '%', $approvalDirectPost);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::APPROVAL_DIRECT_POST, $approvalDirectPost, $comparison);
	}

	/**
	 * Filter the query on the allow_attachments column
	 * 
	 * @param     int|array $allowAttachments The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByAllowAttachments($allowAttachments = null, $comparison = null)
	{
		if (is_array($allowAttachments)) {
			$useMinMax = false;
			if (isset($allowAttachments['min'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_ATTACHMENTS, $allowAttachments['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($allowAttachments['max'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_ATTACHMENTS, $allowAttachments['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::ALLOW_ATTACHMENTS, $allowAttachments, $comparison);
	}

	/**
	 * Filter the query on the allow_new_threads column
	 * 
	 * @param     int|array $allowNewThreads The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByAllowNewThreads($allowNewThreads = null, $comparison = null)
	{
		if (is_array($allowNewThreads)) {
			$useMinMax = false;
			if (isset($allowNewThreads['min'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_NEW_THREADS, $allowNewThreads['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($allowNewThreads['max'])) {
				$this->addUsingAlias(ForumForumPeer::ALLOW_NEW_THREADS, $allowNewThreads['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::ALLOW_NEW_THREADS, $allowNewThreads, $comparison);
	}

	/**
	 * Filter the query on the default_view column
	 * 
	 * @param     string $defaultView The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByDefaultView($defaultView = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($defaultView)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $defaultView)) {
				$defaultView = str_replace('*', '%', $defaultView);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::DEFAULT_VIEW, $defaultView, $comparison);
	}

	/**
	 * Filter the query on the forum_of_group column
	 * 
	 * @param     string $forumOfGroup The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumOfGroup($forumOfGroup = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($forumOfGroup)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $forumOfGroup)) {
				$forumOfGroup = str_replace('*', '%', $forumOfGroup);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_OF_GROUP, $forumOfGroup, $comparison);
	}

	/**
	 * Filter the query on the forum_group_public_private column
	 * 
	 * @param     string $forumGroupPublicPrivate The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumGroupPublicPrivate($forumGroupPublicPrivate = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($forumGroupPublicPrivate)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $forumGroupPublicPrivate)) {
				$forumGroupPublicPrivate = str_replace('*', '%', $forumGroupPublicPrivate);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_GROUP_PUBLIC_PRIVATE, $forumGroupPublicPrivate, $comparison);
	}

	/**
	 * Filter the query on the forum_order column
	 * 
	 * @param     int|array $forumOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumOrder($forumOrder = null, $comparison = null)
	{
		if (is_array($forumOrder)) {
			$useMinMax = false;
			if (isset($forumOrder['min'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_ORDER, $forumOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumOrder['max'])) {
				$this->addUsingAlias(ForumForumPeer::FORUM_ORDER, $forumOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_ORDER, $forumOrder, $comparison);
	}

	/**
	 * Filter the query on the locked column
	 * 
	 * @param     int|array $locked The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByLocked($locked = null, $comparison = null)
	{
		if (is_array($locked)) {
			$useMinMax = false;
			if (isset($locked['min'])) {
				$this->addUsingAlias(ForumForumPeer::LOCKED, $locked['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locked['max'])) {
				$this->addUsingAlias(ForumForumPeer::LOCKED, $locked['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::LOCKED, $locked, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(ForumForumPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(ForumForumPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the forum_image column
	 * 
	 * @param     string $forumImage The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function filterByForumImage($forumImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($forumImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $forumImage)) {
				$forumImage = str_replace('*', '%', $forumImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumForumPeer::FORUM_IMAGE, $forumImage, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumForum $forumForum Object to remove from the list of results
	 *
	 * @return    ForumForumQuery The current query, for fluid interface
	 */
	public function prune($forumForum = null)
	{
		if ($forumForum) {
			$this->addUsingAlias(ForumForumPeer::FORUM_ID, $forumForum->getForumId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumForumQuery
