<?php


/**
 * Base class that represents a query for the 'blog_task' table.
 *
 * 
 *
 * @method     BlogTaskQuery orderByTaskId($order = Criteria::ASC) Order by the task_id column
 * @method     BlogTaskQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogTaskQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     BlogTaskQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     BlogTaskQuery orderByColor($order = Criteria::ASC) Order by the color column
 * @method     BlogTaskQuery orderBySystemTask($order = Criteria::ASC) Order by the system_task column
 *
 * @method     BlogTaskQuery groupByTaskId() Group by the task_id column
 * @method     BlogTaskQuery groupByBlogId() Group by the blog_id column
 * @method     BlogTaskQuery groupByTitle() Group by the title column
 * @method     BlogTaskQuery groupByDescription() Group by the description column
 * @method     BlogTaskQuery groupByColor() Group by the color column
 * @method     BlogTaskQuery groupBySystemTask() Group by the system_task column
 *
 * @method     BlogTaskQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogTaskQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogTaskQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogTask findOne(PropelPDO $con = null) Return the first BlogTask matching the query
 * @method     BlogTask findOneOrCreate(PropelPDO $con = null) Return the first BlogTask matching the query, or a new BlogTask object populated from the query conditions when no match is found
 *
 * @method     BlogTask findOneByTaskId(int $task_id) Return the first BlogTask filtered by the task_id column
 * @method     BlogTask findOneByBlogId(int $blog_id) Return the first BlogTask filtered by the blog_id column
 * @method     BlogTask findOneByTitle(string $title) Return the first BlogTask filtered by the title column
 * @method     BlogTask findOneByDescription(string $description) Return the first BlogTask filtered by the description column
 * @method     BlogTask findOneByColor(string $color) Return the first BlogTask filtered by the color column
 * @method     BlogTask findOneBySystemTask(int $system_task) Return the first BlogTask filtered by the system_task column
 *
 * @method     array findByTaskId(int $task_id) Return BlogTask objects filtered by the task_id column
 * @method     array findByBlogId(int $blog_id) Return BlogTask objects filtered by the blog_id column
 * @method     array findByTitle(string $title) Return BlogTask objects filtered by the title column
 * @method     array findByDescription(string $description) Return BlogTask objects filtered by the description column
 * @method     array findByColor(string $color) Return BlogTask objects filtered by the color column
 * @method     array findBySystemTask(int $system_task) Return BlogTask objects filtered by the system_task column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogTaskQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogTaskQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogTask', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogTaskQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogTaskQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogTaskQuery) {
			return $criteria;
		}
		$query = new BlogTaskQuery();
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
	 * @return    BlogTask|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogTaskPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogTaskPeer::TASK_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogTaskPeer::TASK_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the task_id column
	 * 
	 * @param     int|array $taskId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByTaskId($taskId = null, $comparison = null)
	{
		if (is_array($taskId)) {
			$useMinMax = false;
			if (isset($taskId['min'])) {
				$this->addUsingAlias(BlogTaskPeer::TASK_ID, $taskId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taskId['max'])) {
				$this->addUsingAlias(BlogTaskPeer::TASK_ID, $taskId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::TASK_ID, $taskId, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogTaskPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogTaskPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the color column
	 * 
	 * @param     string $color The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterByColor($color = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($color)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $color)) {
				$color = str_replace('*', '%', $color);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::COLOR, $color, $comparison);
	}

	/**
	 * Filter the query on the system_task column
	 * 
	 * @param     int|array $systemTask The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function filterBySystemTask($systemTask = null, $comparison = null)
	{
		if (is_array($systemTask)) {
			$useMinMax = false;
			if (isset($systemTask['min'])) {
				$this->addUsingAlias(BlogTaskPeer::SYSTEM_TASK, $systemTask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($systemTask['max'])) {
				$this->addUsingAlias(BlogTaskPeer::SYSTEM_TASK, $systemTask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogTaskPeer::SYSTEM_TASK, $systemTask, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogTask $blogTask Object to remove from the list of results
	 *
	 * @return    BlogTaskQuery The current query, for fluid interface
	 */
	public function prune($blogTask = null)
	{
		if ($blogTask) {
			$this->addUsingAlias(BlogTaskPeer::TASK_ID, $blogTask->getTaskId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogTaskQuery
