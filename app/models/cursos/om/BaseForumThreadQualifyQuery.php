<?php


/**
 * Base class that represents a query for the 'forum_thread_qualify' table.
 *
 * 
 *
 * @method     ForumThreadQualifyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ForumThreadQualifyQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ForumThreadQualifyQuery orderByThreadId($order = Criteria::ASC) Order by the thread_id column
 * @method     ForumThreadQualifyQuery orderByQualify($order = Criteria::ASC) Order by the qualify column
 * @method     ForumThreadQualifyQuery orderByQualifyUserId($order = Criteria::ASC) Order by the qualify_user_id column
 * @method     ForumThreadQualifyQuery orderByQualifyTime($order = Criteria::ASC) Order by the qualify_time column
 * @method     ForumThreadQualifyQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     ForumThreadQualifyQuery groupById() Group by the id column
 * @method     ForumThreadQualifyQuery groupByUserId() Group by the user_id column
 * @method     ForumThreadQualifyQuery groupByThreadId() Group by the thread_id column
 * @method     ForumThreadQualifyQuery groupByQualify() Group by the qualify column
 * @method     ForumThreadQualifyQuery groupByQualifyUserId() Group by the qualify_user_id column
 * @method     ForumThreadQualifyQuery groupByQualifyTime() Group by the qualify_time column
 * @method     ForumThreadQualifyQuery groupBySessionId() Group by the session_id column
 *
 * @method     ForumThreadQualifyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumThreadQualifyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumThreadQualifyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumThreadQualify findOne(PropelPDO $con = null) Return the first ForumThreadQualify matching the query
 * @method     ForumThreadQualify findOneOrCreate(PropelPDO $con = null) Return the first ForumThreadQualify matching the query, or a new ForumThreadQualify object populated from the query conditions when no match is found
 *
 * @method     ForumThreadQualify findOneById(int $id) Return the first ForumThreadQualify filtered by the id column
 * @method     ForumThreadQualify findOneByUserId(int $user_id) Return the first ForumThreadQualify filtered by the user_id column
 * @method     ForumThreadQualify findOneByThreadId(int $thread_id) Return the first ForumThreadQualify filtered by the thread_id column
 * @method     ForumThreadQualify findOneByQualify(double $qualify) Return the first ForumThreadQualify filtered by the qualify column
 * @method     ForumThreadQualify findOneByQualifyUserId(int $qualify_user_id) Return the first ForumThreadQualify filtered by the qualify_user_id column
 * @method     ForumThreadQualify findOneByQualifyTime(string $qualify_time) Return the first ForumThreadQualify filtered by the qualify_time column
 * @method     ForumThreadQualify findOneBySessionId(int $session_id) Return the first ForumThreadQualify filtered by the session_id column
 *
 * @method     array findById(int $id) Return ForumThreadQualify objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return ForumThreadQualify objects filtered by the user_id column
 * @method     array findByThreadId(int $thread_id) Return ForumThreadQualify objects filtered by the thread_id column
 * @method     array findByQualify(double $qualify) Return ForumThreadQualify objects filtered by the qualify column
 * @method     array findByQualifyUserId(int $qualify_user_id) Return ForumThreadQualify objects filtered by the qualify_user_id column
 * @method     array findByQualifyTime(string $qualify_time) Return ForumThreadQualify objects filtered by the qualify_time column
 * @method     array findBySessionId(int $session_id) Return ForumThreadQualify objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumThreadQualifyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumThreadQualifyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumThreadQualify', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumThreadQualifyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumThreadQualifyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumThreadQualifyQuery) {
			return $criteria;
		}
		$query = new ForumThreadQualifyQuery();
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
	 * @return    ForumThreadQualify|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumThreadQualifyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumThreadQualifyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumThreadQualifyPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the thread_id column
	 * 
	 * @param     int|array $threadId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByThreadId($threadId = null, $comparison = null)
	{
		if (is_array($threadId)) {
			$useMinMax = false;
			if (isset($threadId['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::THREAD_ID, $threadId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadId['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::THREAD_ID, $threadId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::THREAD_ID, $threadId, $comparison);
	}

	/**
	 * Filter the query on the qualify column
	 * 
	 * @param     double|array $qualify The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByQualify($qualify = null, $comparison = null)
	{
		if (is_array($qualify)) {
			$useMinMax = false;
			if (isset($qualify['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY, $qualify['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($qualify['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY, $qualify['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY, $qualify, $comparison);
	}

	/**
	 * Filter the query on the qualify_user_id column
	 * 
	 * @param     int|array $qualifyUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByQualifyUserId($qualifyUserId = null, $comparison = null)
	{
		if (is_array($qualifyUserId)) {
			$useMinMax = false;
			if (isset($qualifyUserId['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_USER_ID, $qualifyUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($qualifyUserId['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_USER_ID, $qualifyUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_USER_ID, $qualifyUserId, $comparison);
	}

	/**
	 * Filter the query on the qualify_time column
	 * 
	 * @param     string|array $qualifyTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterByQualifyTime($qualifyTime = null, $comparison = null)
	{
		if (is_array($qualifyTime)) {
			$useMinMax = false;
			if (isset($qualifyTime['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_TIME, $qualifyTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($qualifyTime['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_TIME, $qualifyTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::QUALIFY_TIME, $qualifyTime, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(ForumThreadQualifyPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadQualifyPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumThreadQualify $forumThreadQualify Object to remove from the list of results
	 *
	 * @return    ForumThreadQualifyQuery The current query, for fluid interface
	 */
	public function prune($forumThreadQualify = null)
	{
		if ($forumThreadQualify) {
			$this->addUsingAlias(ForumThreadQualifyPeer::ID, $forumThreadQualify->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumThreadQualifyQuery
