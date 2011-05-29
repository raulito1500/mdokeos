<?php


/**
 * Base class that represents a query for the 'permission_user' table.
 *
 * 
 *
 * @method     PermissionUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PermissionUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PermissionUserQuery orderByTool($order = Criteria::ASC) Order by the tool column
 * @method     PermissionUserQuery orderByAction($order = Criteria::ASC) Order by the action column
 *
 * @method     PermissionUserQuery groupById() Group by the id column
 * @method     PermissionUserQuery groupByUserId() Group by the user_id column
 * @method     PermissionUserQuery groupByTool() Group by the tool column
 * @method     PermissionUserQuery groupByAction() Group by the action column
 *
 * @method     PermissionUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PermissionUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PermissionUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PermissionUser findOne(PropelPDO $con = null) Return the first PermissionUser matching the query
 * @method     PermissionUser findOneOrCreate(PropelPDO $con = null) Return the first PermissionUser matching the query, or a new PermissionUser object populated from the query conditions when no match is found
 *
 * @method     PermissionUser findOneById(int $id) Return the first PermissionUser filtered by the id column
 * @method     PermissionUser findOneByUserId(int $user_id) Return the first PermissionUser filtered by the user_id column
 * @method     PermissionUser findOneByTool(string $tool) Return the first PermissionUser filtered by the tool column
 * @method     PermissionUser findOneByAction(string $action) Return the first PermissionUser filtered by the action column
 *
 * @method     array findById(int $id) Return PermissionUser objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return PermissionUser objects filtered by the user_id column
 * @method     array findByTool(string $tool) Return PermissionUser objects filtered by the tool column
 * @method     array findByAction(string $action) Return PermissionUser objects filtered by the action column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BasePermissionUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePermissionUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'PermissionUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PermissionUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PermissionUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PermissionUserQuery) {
			return $criteria;
		}
		$query = new PermissionUserQuery();
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
	 * @return    PermissionUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PermissionUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PermissionUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PermissionUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PermissionUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PermissionUserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PermissionUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PermissionUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PermissionUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the tool column
	 * 
	 * @param     string $tool The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PermissionUserPeer::TOOL, $tool, $comparison);
	}

	/**
	 * Filter the query on the action column
	 * 
	 * @param     string $action The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PermissionUserPeer::ACTION, $action, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PermissionUser $permissionUser Object to remove from the list of results
	 *
	 * @return    PermissionUserQuery The current query, for fluid interface
	 */
	public function prune($permissionUser = null)
	{
		if ($permissionUser) {
			$this->addUsingAlias(PermissionUserPeer::ID, $permissionUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePermissionUserQuery
