<?php


/**
 * Base class that represents a query for the 'class_user' table.
 *
 * 
 *
 * @method     ClassUserQuery orderByClassId($order = Criteria::ASC) Order by the class_id column
 * @method     ClassUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     ClassUserQuery groupByClassId() Group by the class_id column
 * @method     ClassUserQuery groupByUserId() Group by the user_id column
 *
 * @method     ClassUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ClassUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ClassUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ClassUser findOne(PropelPDO $con = null) Return the first ClassUser matching the query
 * @method     ClassUser findOneOrCreate(PropelPDO $con = null) Return the first ClassUser matching the query, or a new ClassUser object populated from the query conditions when no match is found
 *
 * @method     ClassUser findOneByClassId(int $class_id) Return the first ClassUser filtered by the class_id column
 * @method     ClassUser findOneByUserId(int $user_id) Return the first ClassUser filtered by the user_id column
 *
 * @method     array findByClassId(int $class_id) Return ClassUser objects filtered by the class_id column
 * @method     array findByUserId(int $user_id) Return ClassUser objects filtered by the user_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseClassUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseClassUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ClassUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ClassUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ClassUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ClassUserQuery) {
			return $criteria;
		}
		$query = new ClassUserQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$class_id, $user_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    ClassUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ClassUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    ClassUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(ClassUserPeer::CLASS_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(ClassUserPeer::USER_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ClassUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(ClassUserPeer::CLASS_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(ClassUserPeer::USER_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the class_id column
	 * 
	 * @param     int|array $classId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClassUserQuery The current query, for fluid interface
	 */
	public function filterByClassId($classId = null, $comparison = null)
	{
		if (is_array($classId)) {
			$useMinMax = false;
			if (isset($classId['min'])) {
				$this->addUsingAlias(ClassUserPeer::CLASS_ID, $classId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($classId['max'])) {
				$this->addUsingAlias(ClassUserPeer::CLASS_ID, $classId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ClassUserPeer::CLASS_ID, $classId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ClassUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ClassUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ClassUser $classUser Object to remove from the list of results
	 *
	 * @return    ClassUserQuery The current query, for fluid interface
	 */
	public function prune($classUser = null)
	{
		if ($classUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(ClassUserPeer::CLASS_ID), $classUser->getClassId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(ClassUserPeer::USER_ID), $classUser->getUserId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseClassUserQuery
