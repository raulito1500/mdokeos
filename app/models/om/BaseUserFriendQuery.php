<?php


/**
 * Base class that represents a query for the 'user_friend' table.
 *
 * 
 *
 * @method     UserFriendQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserFriendQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserFriendQuery orderByFriendUserId($order = Criteria::ASC) Order by the friend_user_id column
 * @method     UserFriendQuery orderByRelationType($order = Criteria::ASC) Order by the relation_type column
 * @method     UserFriendQuery orderByLastEdit($order = Criteria::ASC) Order by the last_edit column
 *
 * @method     UserFriendQuery groupById() Group by the id column
 * @method     UserFriendQuery groupByUserId() Group by the user_id column
 * @method     UserFriendQuery groupByFriendUserId() Group by the friend_user_id column
 * @method     UserFriendQuery groupByRelationType() Group by the relation_type column
 * @method     UserFriendQuery groupByLastEdit() Group by the last_edit column
 *
 * @method     UserFriendQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserFriendQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserFriendQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserFriend findOne(PropelPDO $con = null) Return the first UserFriend matching the query
 * @method     UserFriend findOneOrCreate(PropelPDO $con = null) Return the first UserFriend matching the query, or a new UserFriend object populated from the query conditions when no match is found
 *
 * @method     UserFriend findOneById(string $id) Return the first UserFriend filtered by the id column
 * @method     UserFriend findOneByUserId(int $user_id) Return the first UserFriend filtered by the user_id column
 * @method     UserFriend findOneByFriendUserId(int $friend_user_id) Return the first UserFriend filtered by the friend_user_id column
 * @method     UserFriend findOneByRelationType(int $relation_type) Return the first UserFriend filtered by the relation_type column
 * @method     UserFriend findOneByLastEdit(string $last_edit) Return the first UserFriend filtered by the last_edit column
 *
 * @method     array findById(string $id) Return UserFriend objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserFriend objects filtered by the user_id column
 * @method     array findByFriendUserId(int $friend_user_id) Return UserFriend objects filtered by the friend_user_id column
 * @method     array findByRelationType(int $relation_type) Return UserFriend objects filtered by the relation_type column
 * @method     array findByLastEdit(string $last_edit) Return UserFriend objects filtered by the last_edit column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserFriendQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserFriendQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserFriend', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserFriendQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserFriendQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserFriendQuery) {
			return $criteria;
		}
		$query = new UserFriendQuery();
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
	 * @return    UserFriend|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserFriendPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserFriendPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserFriendPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserFriendPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserFriendPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserFriendPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFriendPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the friend_user_id column
	 * 
	 * @param     int|array $friendUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByFriendUserId($friendUserId = null, $comparison = null)
	{
		if (is_array($friendUserId)) {
			$useMinMax = false;
			if (isset($friendUserId['min'])) {
				$this->addUsingAlias(UserFriendPeer::FRIEND_USER_ID, $friendUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($friendUserId['max'])) {
				$this->addUsingAlias(UserFriendPeer::FRIEND_USER_ID, $friendUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFriendPeer::FRIEND_USER_ID, $friendUserId, $comparison);
	}

	/**
	 * Filter the query on the relation_type column
	 * 
	 * @param     int|array $relationType The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByRelationType($relationType = null, $comparison = null)
	{
		if (is_array($relationType)) {
			$useMinMax = false;
			if (isset($relationType['min'])) {
				$this->addUsingAlias(UserFriendPeer::RELATION_TYPE, $relationType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($relationType['max'])) {
				$this->addUsingAlias(UserFriendPeer::RELATION_TYPE, $relationType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFriendPeer::RELATION_TYPE, $relationType, $comparison);
	}

	/**
	 * Filter the query on the last_edit column
	 * 
	 * @param     string|array $lastEdit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function filterByLastEdit($lastEdit = null, $comparison = null)
	{
		if (is_array($lastEdit)) {
			$useMinMax = false;
			if (isset($lastEdit['min'])) {
				$this->addUsingAlias(UserFriendPeer::LAST_EDIT, $lastEdit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastEdit['max'])) {
				$this->addUsingAlias(UserFriendPeer::LAST_EDIT, $lastEdit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFriendPeer::LAST_EDIT, $lastEdit, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserFriend $userFriend Object to remove from the list of results
	 *
	 * @return    UserFriendQuery The current query, for fluid interface
	 */
	public function prune($userFriend = null)
	{
		if ($userFriend) {
			$this->addUsingAlias(UserFriendPeer::ID, $userFriend->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserFriendQuery
