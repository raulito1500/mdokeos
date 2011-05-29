<?php


/**
 * Base class that represents a query for the 'permission_group' table.
 *
 * 
 *
 * @method     PermissionGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PermissionGroupQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     PermissionGroupQuery orderByTool($order = Criteria::ASC) Order by the tool column
 * @method     PermissionGroupQuery orderByAction($order = Criteria::ASC) Order by the action column
 *
 * @method     PermissionGroupQuery groupById() Group by the id column
 * @method     PermissionGroupQuery groupByGroupId() Group by the group_id column
 * @method     PermissionGroupQuery groupByTool() Group by the tool column
 * @method     PermissionGroupQuery groupByAction() Group by the action column
 *
 * @method     PermissionGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PermissionGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PermissionGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PermissionGroup findOne(PropelPDO $con = null) Return the first PermissionGroup matching the query
 * @method     PermissionGroup findOneOrCreate(PropelPDO $con = null) Return the first PermissionGroup matching the query, or a new PermissionGroup object populated from the query conditions when no match is found
 *
 * @method     PermissionGroup findOneById(int $id) Return the first PermissionGroup filtered by the id column
 * @method     PermissionGroup findOneByGroupId(int $group_id) Return the first PermissionGroup filtered by the group_id column
 * @method     PermissionGroup findOneByTool(string $tool) Return the first PermissionGroup filtered by the tool column
 * @method     PermissionGroup findOneByAction(string $action) Return the first PermissionGroup filtered by the action column
 *
 * @method     array findById(int $id) Return PermissionGroup objects filtered by the id column
 * @method     array findByGroupId(int $group_id) Return PermissionGroup objects filtered by the group_id column
 * @method     array findByTool(string $tool) Return PermissionGroup objects filtered by the tool column
 * @method     array findByAction(string $action) Return PermissionGroup objects filtered by the action column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BasePermissionGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePermissionGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'PermissionGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PermissionGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PermissionGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PermissionGroupQuery) {
			return $criteria;
		}
		$query = new PermissionGroupQuery();
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
	 * @return    PermissionGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PermissionGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PermissionGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PermissionGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PermissionGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PermissionGroupPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(PermissionGroupPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(PermissionGroupPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PermissionGroupPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Filter the query on the tool column
	 * 
	 * @param     string $tool The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PermissionGroupPeer::TOOL, $tool, $comparison);
	}

	/**
	 * Filter the query on the action column
	 * 
	 * @param     string $action The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PermissionGroupPeer::ACTION, $action, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PermissionGroup $permissionGroup Object to remove from the list of results
	 *
	 * @return    PermissionGroupQuery The current query, for fluid interface
	 */
	public function prune($permissionGroup = null)
	{
		if ($permissionGroup) {
			$this->addUsingAlias(PermissionGroupPeer::ID, $permissionGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePermissionGroupQuery
