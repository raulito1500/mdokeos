<?php


/**
 * Base class that represents a query for the 'role_user' table.
 *
 * 
 *
 * @method     RoleUserQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     RoleUserQuery orderByScope($order = Criteria::ASC) Order by the scope column
 * @method     RoleUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     RoleUserQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     RoleUserQuery groupByRoleId() Group by the role_id column
 * @method     RoleUserQuery groupByScope() Group by the scope column
 * @method     RoleUserQuery groupByUserId() Group by the user_id column
 * @method     RoleUserQuery groupById() Group by the id column
 *
 * @method     RoleUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RoleUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RoleUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RoleUser findOne(PropelPDO $con = null) Return the first RoleUser matching the query
 * @method     RoleUser findOneOrCreate(PropelPDO $con = null) Return the first RoleUser matching the query, or a new RoleUser object populated from the query conditions when no match is found
 *
 * @method     RoleUser findOneByRoleId(int $role_id) Return the first RoleUser filtered by the role_id column
 * @method     RoleUser findOneByScope(string $scope) Return the first RoleUser filtered by the scope column
 * @method     RoleUser findOneByUserId(int $user_id) Return the first RoleUser filtered by the user_id column
 * @method     RoleUser findOneById(string $id) Return the first RoleUser filtered by the id column
 *
 * @method     array findByRoleId(int $role_id) Return RoleUser objects filtered by the role_id column
 * @method     array findByScope(string $scope) Return RoleUser objects filtered by the scope column
 * @method     array findByUserId(int $user_id) Return RoleUser objects filtered by the user_id column
 * @method     array findById(string $id) Return RoleUser objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseRoleUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRoleUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'RoleUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RoleUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RoleUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RoleUserQuery) {
			return $criteria;
		}
		$query = new RoleUserQuery();
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
	 * @return    RoleUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RoleUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RoleUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RoleUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the role_id column
	 * 
	 * @param     int|array $roleId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function filterByRoleId($roleId = null, $comparison = null)
	{
		if (is_array($roleId)) {
			$useMinMax = false;
			if (isset($roleId['min'])) {
				$this->addUsingAlias(RoleUserPeer::ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($roleId['max'])) {
				$this->addUsingAlias(RoleUserPeer::ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RoleUserPeer::ROLE_ID, $roleId, $comparison);
	}

	/**
	 * Filter the query on the scope column
	 * 
	 * @param     string $scope The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
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
		return $this->addUsingAlias(RoleUserPeer::SCOPE, $scope, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(RoleUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(RoleUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RoleUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RoleUserPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RoleUser $roleUser Object to remove from the list of results
	 *
	 * @return    RoleUserQuery The current query, for fluid interface
	 */
	public function prune($roleUser = null)
	{
		if ($roleUser) {
			$this->addUsingAlias(RoleUserPeer::ID, $roleUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRoleUserQuery
