<?php


/**
 * Base class that represents a query for the 'blog_task_rel_user' table.
 *
 * 
 *
 * @method     BlogTaskRelUserQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogTaskRelUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     BlogTaskRelUserQuery orderByTaskId($order = Criteria::ASC) Order by the task_id column
 * @method     BlogTaskRelUserQuery orderByTargetDate($order = Criteria::ASC) Order by the target_date column
 *
 * @method     BlogTaskRelUserQuery groupByBlogId() Group by the blog_id column
 * @method     BlogTaskRelUserQuery groupByUserId() Group by the user_id column
 * @method     BlogTaskRelUserQuery groupByTaskId() Group by the task_id column
 * @method     BlogTaskRelUserQuery groupByTargetDate() Group by the target_date column
 *
 * @method     BlogTaskRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogTaskRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogTaskRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogTaskRelUser findOne(PropelPDO $con = null) Return the first BlogTaskRelUser matching the query
 * @method     BlogTaskRelUser findOneOrCreate(PropelPDO $con = null) Return the first BlogTaskRelUser matching the query, or a new BlogTaskRelUser object populated from the query conditions when no match is found
 *
 * @method     BlogTaskRelUser findOneByBlogId(int $blog_id) Return the first BlogTaskRelUser filtered by the blog_id column
 * @method     BlogTaskRelUser findOneByUserId(int $user_id) Return the first BlogTaskRelUser filtered by the user_id column
 * @method     BlogTaskRelUser findOneByTaskId(int $task_id) Return the first BlogTaskRelUser filtered by the task_id column
 * @method     BlogTaskRelUser findOneByTargetDate(string $target_date) Return the first BlogTaskRelUser filtered by the target_date column
 *
 * @method     array findByBlogId(int $blog_id) Return BlogTaskRelUser objects filtered by the blog_id column
 * @method     array findByUserId(int $user_id) Return BlogTaskRelUser objects filtered by the user_id column
 * @method     array findByTaskId(int $task_id) Return BlogTaskRelUser objects filtered by the task_id column
 * @method     array findByTargetDate(string $target_date) Return BlogTaskRelUser objects filtered by the target_date column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogTaskRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogTaskRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogTaskRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogTaskRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogTaskRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogTaskRelUserQuery) {
			return $criteria;
		}
		$query = new BlogTaskRelUserQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 * @param     array[$blog_id, $user_id, $task_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    BlogTaskRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogTaskRelUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(BlogTaskRelUserPeer::BLOG_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(BlogTaskRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(BlogTaskRelUserPeer::TASK_ID, $key[2], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(BlogTaskRelUserPeer::BLOG_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(BlogTaskRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(BlogTaskRelUserPeer::TASK_ID, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskRelUserPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogTaskRelUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the task_id column
	 * 
	 * @param     int|array $taskId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByTaskId($taskId = null, $comparison = null)
	{
		if (is_array($taskId)) {
			$useMinMax = false;
			if (isset($taskId['min'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::TASK_ID, $taskId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taskId['max'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::TASK_ID, $taskId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskRelUserPeer::TASK_ID, $taskId, $comparison);
	}

	/**
	 * Filter the query on the target_date column
	 * 
	 * @param     string|array $targetDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function filterByTargetDate($targetDate = null, $comparison = null)
	{
		if (is_array($targetDate)) {
			$useMinMax = false;
			if (isset($targetDate['min'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::TARGET_DATE, $targetDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetDate['max'])) {
				$this->addUsingAlias(BlogTaskRelUserPeer::TARGET_DATE, $targetDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskRelUserPeer::TARGET_DATE, $targetDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogTaskRelUser $blogTaskRelUser Object to remove from the list of results
	 *
	 * @return    BlogTaskRelUserQuery The current query, for fluid interface
	 */
	public function prune($blogTaskRelUser = null)
	{
		if ($blogTaskRelUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(BlogTaskRelUserPeer::BLOG_ID), $blogTaskRelUser->getBlogId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(BlogTaskRelUserPeer::USER_ID), $blogTaskRelUser->getUserId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(BlogTaskRelUserPeer::TASK_ID), $blogTaskRelUser->getTaskId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseBlogTaskRelUserQuery
