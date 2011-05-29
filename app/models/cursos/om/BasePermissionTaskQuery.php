<?php


/**
 * Base class that represents a query for the 'permission_task' table.
 *
 * 
 *
 * @method     PermissionTaskQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PermissionTaskQuery orderByTaskId($order = Criteria::ASC) Order by the task_id column
 * @method     PermissionTaskQuery orderByTool($order = Criteria::ASC) Order by the tool column
 * @method     PermissionTaskQuery orderByAction($order = Criteria::ASC) Order by the action column
 *
 * @method     PermissionTaskQuery groupById() Group by the id column
 * @method     PermissionTaskQuery groupByTaskId() Group by the task_id column
 * @method     PermissionTaskQuery groupByTool() Group by the tool column
 * @method     PermissionTaskQuery groupByAction() Group by the action column
 *
 * @method     PermissionTaskQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PermissionTaskQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PermissionTaskQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PermissionTask findOne(PropelPDO $con = null) Return the first PermissionTask matching the query
 * @method     PermissionTask findOneOrCreate(PropelPDO $con = null) Return the first PermissionTask matching the query, or a new PermissionTask object populated from the query conditions when no match is found
 *
 * @method     PermissionTask findOneById(int $id) Return the first PermissionTask filtered by the id column
 * @method     PermissionTask findOneByTaskId(int $task_id) Return the first PermissionTask filtered by the task_id column
 * @method     PermissionTask findOneByTool(string $tool) Return the first PermissionTask filtered by the tool column
 * @method     PermissionTask findOneByAction(string $action) Return the first PermissionTask filtered by the action column
 *
 * @method     array findById(int $id) Return PermissionTask objects filtered by the id column
 * @method     array findByTaskId(int $task_id) Return PermissionTask objects filtered by the task_id column
 * @method     array findByTool(string $tool) Return PermissionTask objects filtered by the tool column
 * @method     array findByAction(string $action) Return PermissionTask objects filtered by the action column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BasePermissionTaskQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePermissionTaskQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'PermissionTask', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PermissionTaskQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PermissionTaskQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PermissionTaskQuery) {
			return $criteria;
		}
		$query = new PermissionTaskQuery();
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
	 * @return    PermissionTask|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PermissionTaskPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PermissionTaskPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PermissionTaskPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PermissionTaskPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the task_id column
	 * 
	 * @param     int|array $taskId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterByTaskId($taskId = null, $comparison = null)
	{
		if (is_array($taskId)) {
			$useMinMax = false;
			if (isset($taskId['min'])) {
				$this->addUsingAlias(PermissionTaskPeer::TASK_ID, $taskId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taskId['max'])) {
				$this->addUsingAlias(PermissionTaskPeer::TASK_ID, $taskId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PermissionTaskPeer::TASK_ID, $taskId, $comparison);
	}

	/**
	 * Filter the query on the tool column
	 * 
	 * @param     string $tool The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterByTool($tool = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tool)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tool)) {
				$tool = str_replace('*', '%', $tool);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PermissionTaskPeer::TOOL, $tool, $comparison);
	}

	/**
	 * Filter the query on the action column
	 * 
	 * @param     string $action The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function filterByAction($action = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($action)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $action)) {
				$action = str_replace('*', '%', $action);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PermissionTaskPeer::ACTION, $action, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PermissionTask $permissionTask Object to remove from the list of results
	 *
	 * @return    PermissionTaskQuery The current query, for fluid interface
	 */
	public function prune($permissionTask = null)
	{
		if ($permissionTask) {
			$this->addUsingAlias(PermissionTaskPeer::ID, $permissionTask->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePermissionTaskQuery
