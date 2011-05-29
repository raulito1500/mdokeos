<?php


/**
 * Base class that represents a query for the 'group_rel_user' table.
 *
 * 
 *
 * @method     GroupRelUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GroupRelUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GroupRelUserQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     GroupRelUserQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     GroupRelUserQuery orderByRole($order = Criteria::ASC) Order by the role column
 *
 * @method     GroupRelUserQuery groupById() Group by the id column
 * @method     GroupRelUserQuery groupByUserId() Group by the user_id column
 * @method     GroupRelUserQuery groupByGroupId() Group by the group_id column
 * @method     GroupRelUserQuery groupByStatus() Group by the status column
 * @method     GroupRelUserQuery groupByRole() Group by the role column
 *
 * @method     GroupRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GroupRelUser findOne(PropelPDO $con = null) Return the first GroupRelUser matching the query
 * @method     GroupRelUser findOneOrCreate(PropelPDO $con = null) Return the first GroupRelUser matching the query, or a new GroupRelUser object populated from the query conditions when no match is found
 *
 * @method     GroupRelUser findOneById(int $id) Return the first GroupRelUser filtered by the id column
 * @method     GroupRelUser findOneByUserId(int $user_id) Return the first GroupRelUser filtered by the user_id column
 * @method     GroupRelUser findOneByGroupId(int $group_id) Return the first GroupRelUser filtered by the group_id column
 * @method     GroupRelUser findOneByStatus(int $status) Return the first GroupRelUser filtered by the status column
 * @method     GroupRelUser findOneByRole(string $role) Return the first GroupRelUser filtered by the role column
 *
 * @method     array findById(int $id) Return GroupRelUser objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return GroupRelUser objects filtered by the user_id column
 * @method     array findByGroupId(int $group_id) Return GroupRelUser objects filtered by the group_id column
 * @method     array findByStatus(int $status) Return GroupRelUser objects filtered by the status column
 * @method     array findByRole(string $role) Return GroupRelUser objects filtered by the role column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGroupRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GroupRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GroupRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GroupRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GroupRelUserQuery) {
			return $criteria;
		}
		$query = new GroupRelUserQuery();
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
	 * @return    GroupRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GroupRelUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GroupRelUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GroupRelUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GroupRelUserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GroupRelUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GroupRelUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupRelUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(GroupRelUserPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(GroupRelUserPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupRelUserPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     int|array $status The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (is_array($status)) {
			$useMinMax = false;
			if (isset($status['min'])) {
				$this->addUsingAlias(GroupRelUserPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($status['max'])) {
				$this->addUsingAlias(GroupRelUserPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupRelUserPeer::STATUS, $status, $comparison);
	}

	/**
	 * Filter the query on the role column
	 * 
	 * @param     string $role The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function filterByRole($role = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($role)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $role)) {
				$role = str_replace('*', '%', $role);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GroupRelUserPeer::ROLE, $role, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GroupRelUser $groupRelUser Object to remove from the list of results
	 *
	 * @return    GroupRelUserQuery The current query, for fluid interface
	 */
	public function prune($groupRelUser = null)
	{
		if ($groupRelUser) {
			$this->addUsingAlias(GroupRelUserPeer::ID, $groupRelUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGroupRelUserQuery
