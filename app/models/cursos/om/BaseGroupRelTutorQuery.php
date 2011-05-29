<?php


/**
 * Base class that represents a query for the 'group_rel_tutor' table.
 *
 * 
 *
 * @method     GroupRelTutorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GroupRelTutorQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GroupRelTutorQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 *
 * @method     GroupRelTutorQuery groupById() Group by the id column
 * @method     GroupRelTutorQuery groupByUserId() Group by the user_id column
 * @method     GroupRelTutorQuery groupByGroupId() Group by the group_id column
 *
 * @method     GroupRelTutorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupRelTutorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupRelTutorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GroupRelTutor findOne(PropelPDO $con = null) Return the first GroupRelTutor matching the query
 * @method     GroupRelTutor findOneOrCreate(PropelPDO $con = null) Return the first GroupRelTutor matching the query, or a new GroupRelTutor object populated from the query conditions when no match is found
 *
 * @method     GroupRelTutor findOneById(int $id) Return the first GroupRelTutor filtered by the id column
 * @method     GroupRelTutor findOneByUserId(int $user_id) Return the first GroupRelTutor filtered by the user_id column
 * @method     GroupRelTutor findOneByGroupId(int $group_id) Return the first GroupRelTutor filtered by the group_id column
 *
 * @method     array findById(int $id) Return GroupRelTutor objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return GroupRelTutor objects filtered by the user_id column
 * @method     array findByGroupId(int $group_id) Return GroupRelTutor objects filtered by the group_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupRelTutorQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGroupRelTutorQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GroupRelTutor', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GroupRelTutorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GroupRelTutorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GroupRelTutorQuery) {
			return $criteria;
		}
		$query = new GroupRelTutorQuery();
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
	 * @return    GroupRelTutor|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GroupRelTutorPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GroupRelTutorPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GroupRelTutorPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GroupRelTutorPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GroupRelTutorPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GroupRelTutorPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupRelTutorPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(GroupRelTutorPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(GroupRelTutorPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupRelTutorPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GroupRelTutor $groupRelTutor Object to remove from the list of results
	 *
	 * @return    GroupRelTutorQuery The current query, for fluid interface
	 */
	public function prune($groupRelTutor = null)
	{
		if ($groupRelTutor) {
			$this->addUsingAlias(GroupRelTutorPeer::ID, $groupRelTutor->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGroupRelTutorQuery
