<?php


/**
 * Base class that represents a query for the 'forum_notification' table.
 *
 * 
 *
 * @method     ForumNotificationQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ForumNotificationQuery orderByForumId($order = Criteria::ASC) Order by the forum_id column
 * @method     ForumNotificationQuery orderByThreadId($order = Criteria::ASC) Order by the thread_id column
 * @method     ForumNotificationQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     ForumNotificationQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     ForumNotificationQuery groupByUserId() Group by the user_id column
 * @method     ForumNotificationQuery groupByForumId() Group by the forum_id column
 * @method     ForumNotificationQuery groupByThreadId() Group by the thread_id column
 * @method     ForumNotificationQuery groupByPostId() Group by the post_id column
 * @method     ForumNotificationQuery groupById() Group by the id column
 *
 * @method     ForumNotificationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumNotificationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumNotificationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumNotification findOne(PropelPDO $con = null) Return the first ForumNotification matching the query
 * @method     ForumNotification findOneOrCreate(PropelPDO $con = null) Return the first ForumNotification matching the query, or a new ForumNotification object populated from the query conditions when no match is found
 *
 * @method     ForumNotification findOneByUserId(int $user_id) Return the first ForumNotification filtered by the user_id column
 * @method     ForumNotification findOneByForumId(int $forum_id) Return the first ForumNotification filtered by the forum_id column
 * @method     ForumNotification findOneByThreadId(int $thread_id) Return the first ForumNotification filtered by the thread_id column
 * @method     ForumNotification findOneByPostId(int $post_id) Return the first ForumNotification filtered by the post_id column
 * @method     ForumNotification findOneById(string $id) Return the first ForumNotification filtered by the id column
 *
 * @method     array findByUserId(int $user_id) Return ForumNotification objects filtered by the user_id column
 * @method     array findByForumId(int $forum_id) Return ForumNotification objects filtered by the forum_id column
 * @method     array findByThreadId(int $thread_id) Return ForumNotification objects filtered by the thread_id column
 * @method     array findByPostId(int $post_id) Return ForumNotification objects filtered by the post_id column
 * @method     array findById(string $id) Return ForumNotification objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumNotificationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumNotificationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumNotification', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumNotificationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumNotificationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumNotificationQuery) {
			return $criteria;
		}
		$query = new ForumNotificationQuery();
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
	 * @return    ForumNotification|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumNotificationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumNotificationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumNotificationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ForumNotificationPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ForumNotificationPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumNotificationPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the forum_id column
	 * 
	 * @param     int|array $forumId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByForumId($forumId = null, $comparison = null)
	{
		if (is_array($forumId)) {
			$useMinMax = false;
			if (isset($forumId['min'])) {
				$this->addUsingAlias(ForumNotificationPeer::FORUM_ID, $forumId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumId['max'])) {
				$this->addUsingAlias(ForumNotificationPeer::FORUM_ID, $forumId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumNotificationPeer::FORUM_ID, $forumId, $comparison);
	}

	/**
	 * Filter the query on the thread_id column
	 * 
	 * @param     int|array $threadId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByThreadId($threadId = null, $comparison = null)
	{
		if (is_array($threadId)) {
			$useMinMax = false;
			if (isset($threadId['min'])) {
				$this->addUsingAlias(ForumNotificationPeer::THREAD_ID, $threadId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadId['max'])) {
				$this->addUsingAlias(ForumNotificationPeer::THREAD_ID, $threadId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumNotificationPeer::THREAD_ID, $threadId, $comparison);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId)) {
			$useMinMax = false;
			if (isset($postId['min'])) {
				$this->addUsingAlias(ForumNotificationPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postId['max'])) {
				$this->addUsingAlias(ForumNotificationPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumNotificationPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumNotificationPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumNotification $forumNotification Object to remove from the list of results
	 *
	 * @return    ForumNotificationQuery The current query, for fluid interface
	 */
	public function prune($forumNotification = null)
	{
		if ($forumNotification) {
			$this->addUsingAlias(ForumNotificationPeer::ID, $forumNotification->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumNotificationQuery
