<?php


/**
 * Base class that represents a query for the 'role_permissions' table.
 *
 * 
 *
 * @method     RolePermissionsQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     RolePermissionsQuery orderByTool($order = Criteria::ASC) Order by the tool column
 * @method     RolePermissionsQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method     RolePermissionsQuery orderByDefaultPerm($order = Criteria::ASC) Order by the default_perm column
 * @method     RolePermissionsQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     RolePermissionsQuery groupByRoleId() Group by the role_id column
 * @method     RolePermissionsQuery groupByTool() Group by the tool column
 * @method     RolePermissionsQuery groupByAction() Group by the action column
 * @method     RolePermissionsQuery groupByDefaultPerm() Group by the default_perm column
 * @method     RolePermissionsQuery groupById() Group by the id column
 *
 * @method     RolePermissionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RolePermissionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RolePermissionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RolePermissions findOne(PropelPDO $con = null) Return the first RolePermissions matching the query
 * @method     RolePermissions findOneOrCreate(PropelPDO $con = null) Return the first RolePermissions matching the query, or a new RolePermissions object populated from the query conditions when no match is found
 *
 * @method     RolePermissions findOneByRoleId(int $role_id) Return the first RolePermissions filtered by the role_id column
 * @method     RolePermissions findOneByTool(string $tool) Return the first RolePermissions filtered by the tool column
 * @method     RolePermissions findOneByAction(string $action) Return the first RolePermissions filtered by the action column
 * @method     RolePermissions findOneByDefaultPerm(int $default_perm) Return the first RolePermissions filtered by the default_perm column
 * @method     RolePermissions findOneById(string $id) Return the first RolePermissions filtered by the id column
 *
 * @method     array findByRoleId(int $role_id) Return RolePermissions objects filtered by the role_id column
 * @method     array findByTool(string $tool) Return RolePermissions objects filtered by the tool column
 * @method     array findByAction(string $action) Return RolePermissions objects filtered by the action column
 * @method     array findByDefaultPerm(int $default_perm) Return RolePermissions objects filtered by the default_perm column
 * @method     array findById(string $id) Return RolePermissions objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseRolePermissionsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRolePermissionsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'RolePermissions', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RolePermissionsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RolePermissionsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RolePermissionsQuery) {
			return $criteria;
		}
		$query = new RolePermissionsQuery();
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
	 * @return    RolePermissions|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RolePermissionsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RolePermissionsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RolePermissionsPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the role_id column
	 * 
	 * @param     int|array $roleId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function filterByRoleId($roleId = null, $comparison = null)
	{
		if (is_array($roleId)) {
			$useMinMax = false;
			if (isset($roleId['min'])) {
				$this->addUsingAlias(RolePermissionsPeer::ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($roleId['max'])) {
				$this->addUsingAlias(RolePermissionsPeer::ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RolePermissionsPeer::ROLE_ID, $roleId, $comparison);
	}

	/**
	 * Filter the query on the tool column
	 * 
	 * @param     string $tool The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(RolePermissionsPeer::TOOL, $tool, $comparison);
	}

	/**
	 * Filter the query on the action column
	 * 
	 * @param     string $action The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(RolePermissionsPeer::ACTION, $action, $comparison);
	}

	/**
	 * Filter the query on the default_perm column
	 * 
	 * @param     int|array $defaultPerm The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function filterByDefaultPerm($defaultPerm = null, $comparison = null)
	{
		if (is_array($defaultPerm)) {
			$useMinMax = false;
			if (isset($defaultPerm['min'])) {
				$this->addUsingAlias(RolePermissionsPeer::DEFAULT_PERM, $defaultPerm['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($defaultPerm['max'])) {
				$this->addUsingAlias(RolePermissionsPeer::DEFAULT_PERM, $defaultPerm['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RolePermissionsPeer::DEFAULT_PERM, $defaultPerm, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RolePermissionsPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RolePermissions $rolePermissions Object to remove from the list of results
	 *
	 * @return    RolePermissionsQuery The current query, for fluid interface
	 */
	public function prune($rolePermissions = null)
	{
		if ($rolePermissions) {
			$this->addUsingAlias(RolePermissionsPeer::ID, $rolePermissions->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRolePermissionsQuery
