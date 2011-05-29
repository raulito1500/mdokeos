<?php


/**
 * Base class that represents a query for the 'role_group' table.
 *
 * 
 *
 * @method     RoleGroupQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     RoleGroupQuery orderByScope($order = Criteria::ASC) Order by the scope column
 * @method     RoleGroupQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     RoleGroupQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     RoleGroupQuery groupByRoleId() Group by the role_id column
 * @method     RoleGroupQuery groupByScope() Group by the scope column
 * @method     RoleGroupQuery groupByGroupId() Group by the group_id column
 * @method     RoleGroupQuery groupById() Group by the id column
 *
 * @method     RoleGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RoleGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RoleGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RoleGroup findOne(PropelPDO $con = null) Return the first RoleGroup matching the query
 * @method     RoleGroup findOneOrCreate(PropelPDO $con = null) Return the first RoleGroup matching the query, or a new RoleGroup object populated from the query conditions when no match is found
 *
 * @method     RoleGroup findOneByRoleId(int $role_id) Return the first RoleGroup filtered by the role_id column
 * @method     RoleGroup findOneByScope(string $scope) Return the first RoleGroup filtered by the scope column
 * @method     RoleGroup findOneByGroupId(int $group_id) Return the first RoleGroup filtered by the group_id column
 * @method     RoleGroup findOneById(string $id) Return the first RoleGroup filtered by the id column
 *
 * @method     array findByRoleId(int $role_id) Return RoleGroup objects filtered by the role_id column
 * @method     array findByScope(string $scope) Return RoleGroup objects filtered by the scope column
 * @method     array findByGroupId(int $group_id) Return RoleGroup objects filtered by the group_id column
 * @method     array findById(string $id) Return RoleGroup objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseRoleGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRoleGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'RoleGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RoleGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RoleGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RoleGroupQuery) {
			return $criteria;
		}
		$query = new RoleGroupQuery();
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
	 * @return    RoleGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RoleGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RoleGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RoleGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the role_id column
	 * 
	 * @param     int|array $roleId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterByRoleId($roleId = null, $comparison = null)
	{
		if (is_array($roleId)) {
			$useMinMax = false;
			if (isset($roleId['min'])) {
				$this->addUsingAlias(RoleGroupPeer::ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($roleId['max'])) {
				$this->addUsingAlias(RoleGroupPeer::ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RoleGroupPeer::ROLE_ID, $roleId, $comparison);
	}

	/**
	 * Filter the query on the scope column
	 * 
	 * @param     string $scope The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterByScope($scope = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($scope)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $scope)) {
				$scope = str_replace('*', '%', $scope);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RoleGroupPeer::SCOPE, $scope, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(RoleGroupPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(RoleGroupPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RoleGroupPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RoleGroupPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RoleGroup $roleGroup Object to remove from the list of results
	 *
	 * @return    RoleGroupQuery The current query, for fluid interface
	 */
	public function prune($roleGroup = null)
	{
		if ($roleGroup) {
			$this->addUsingAlias(RoleGroupPeer::ID, $roleGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRoleGroupQuery
