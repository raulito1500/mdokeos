<?php


/**
 * Base class that represents a query for the 'role' table.
 *
 * 
 *
 * @method     RoleQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     RoleQuery orderByRoleName($order = Criteria::ASC) Order by the role_name column
 * @method     RoleQuery orderByRoleComment($order = Criteria::ASC) Order by the role_comment column
 * @method     RoleQuery orderByDefaultRole($order = Criteria::ASC) Order by the default_role column
 *
 * @method     RoleQuery groupByRoleId() Group by the role_id column
 * @method     RoleQuery groupByRoleName() Group by the role_name column
 * @method     RoleQuery groupByRoleComment() Group by the role_comment column
 * @method     RoleQuery groupByDefaultRole() Group by the default_role column
 *
 * @method     RoleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RoleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RoleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Role findOne(PropelPDO $con = null) Return the first Role matching the query
 * @method     Role findOneOrCreate(PropelPDO $con = null) Return the first Role matching the query, or a new Role object populated from the query conditions when no match is found
 *
 * @method     Role findOneByRoleId(int $role_id) Return the first Role filtered by the role_id column
 * @method     Role findOneByRoleName(string $role_name) Return the first Role filtered by the role_name column
 * @method     Role findOneByRoleComment(string $role_comment) Return the first Role filtered by the role_comment column
 * @method     Role findOneByDefaultRole(int $default_role) Return the first Role filtered by the default_role column
 *
 * @method     array findByRoleId(int $role_id) Return Role objects filtered by the role_id column
 * @method     array findByRoleName(string $role_name) Return Role objects filtered by the role_name column
 * @method     array findByRoleComment(string $role_comment) Return Role objects filtered by the role_comment column
 * @method     array findByDefaultRole(int $default_role) Return Role objects filtered by the default_role column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseRoleQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRoleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Role', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RoleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RoleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RoleQuery) {
			return $criteria;
		}
		$query = new RoleQuery();
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
	 * @return    Role|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RolePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RolePeer::ROLE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RolePeer::ROLE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the role_id column
	 * 
	 * @param     int|array $roleId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByRoleId($roleId = null, $comparison = null)
	{
		if (is_array($roleId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RolePeer::ROLE_ID, $roleId, $comparison);
	}

	/**
	 * Filter the query on the role_name column
	 * 
	 * @param     string $roleName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByRoleName($roleName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($roleName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $roleName)) {
				$roleName = str_replace('*', '%', $roleName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RolePeer::ROLE_NAME, $roleName, $comparison);
	}

	/**
	 * Filter the query on the role_comment column
	 * 
	 * @param     string $roleComment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByRoleComment($roleComment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($roleComment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $roleComment)) {
				$roleComment = str_replace('*', '%', $roleComment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RolePeer::ROLE_COMMENT, $roleComment, $comparison);
	}

	/**
	 * Filter the query on the default_role column
	 * 
	 * @param     int|array $defaultRole The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function filterByDefaultRole($defaultRole = null, $comparison = null)
	{
		if (is_array($defaultRole)) {
			$useMinMax = false;
			if (isset($defaultRole['min'])) {
				$this->addUsingAlias(RolePeer::DEFAULT_ROLE, $defaultRole['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($defaultRole['max'])) {
				$this->addUsingAlias(RolePeer::DEFAULT_ROLE, $defaultRole['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RolePeer::DEFAULT_ROLE, $defaultRole, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Role $role Object to remove from the list of results
	 *
	 * @return    RoleQuery The current query, for fluid interface
	 */
	public function prune($role = null)
	{
		if ($role) {
			$this->addUsingAlias(RolePeer::ROLE_ID, $role->getRoleId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRoleQuery
