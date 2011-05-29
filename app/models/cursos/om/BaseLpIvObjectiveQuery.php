<?php


/**
 * Base class that represents a query for the 'lp_iv_objective' table.
 *
 * 
 *
 * @method     LpIvObjectiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpIvObjectiveQuery orderByLpIvId($order = Criteria::ASC) Order by the lp_iv_id column
 * @method     LpIvObjectiveQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method     LpIvObjectiveQuery orderByObjectiveId($order = Criteria::ASC) Order by the objective_id column
 * @method     LpIvObjectiveQuery orderByScoreRaw($order = Criteria::ASC) Order by the score_raw column
 * @method     LpIvObjectiveQuery orderByScoreMax($order = Criteria::ASC) Order by the score_max column
 * @method     LpIvObjectiveQuery orderByScoreMin($order = Criteria::ASC) Order by the score_min column
 * @method     LpIvObjectiveQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method     LpIvObjectiveQuery groupById() Group by the id column
 * @method     LpIvObjectiveQuery groupByLpIvId() Group by the lp_iv_id column
 * @method     LpIvObjectiveQuery groupByOrderId() Group by the order_id column
 * @method     LpIvObjectiveQuery groupByObjectiveId() Group by the objective_id column
 * @method     LpIvObjectiveQuery groupByScoreRaw() Group by the score_raw column
 * @method     LpIvObjectiveQuery groupByScoreMax() Group by the score_max column
 * @method     LpIvObjectiveQuery groupByScoreMin() Group by the score_min column
 * @method     LpIvObjectiveQuery groupByStatus() Group by the status column
 *
 * @method     LpIvObjectiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpIvObjectiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpIvObjectiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LpIvObjective findOne(PropelPDO $con = null) Return the first LpIvObjective matching the query
 * @method     LpIvObjective findOneOrCreate(PropelPDO $con = null) Return the first LpIvObjective matching the query, or a new LpIvObjective object populated from the query conditions when no match is found
 *
 * @method     LpIvObjective findOneById(string $id) Return the first LpIvObjective filtered by the id column
 * @method     LpIvObjective findOneByLpIvId(string $lp_iv_id) Return the first LpIvObjective filtered by the lp_iv_id column
 * @method     LpIvObjective findOneByOrderId(int $order_id) Return the first LpIvObjective filtered by the order_id column
 * @method     LpIvObjective findOneByObjectiveId(string $objective_id) Return the first LpIvObjective filtered by the objective_id column
 * @method     LpIvObjective findOneByScoreRaw(double $score_raw) Return the first LpIvObjective filtered by the score_raw column
 * @method     LpIvObjective findOneByScoreMax(double $score_max) Return the first LpIvObjective filtered by the score_max column
 * @method     LpIvObjective findOneByScoreMin(double $score_min) Return the first LpIvObjective filtered by the score_min column
 * @method     LpIvObjective findOneByStatus(string $status) Return the first LpIvObjective filtered by the status column
 *
 * @method     array findById(string $id) Return LpIvObjective objects filtered by the id column
 * @method     array findByLpIvId(string $lp_iv_id) Return LpIvObjective objects filtered by the lp_iv_id column
 * @method     array findByOrderId(int $order_id) Return LpIvObjective objects filtered by the order_id column
 * @method     array findByObjectiveId(string $objective_id) Return LpIvObjective objects filtered by the objective_id column
 * @method     array findByScoreRaw(double $score_raw) Return LpIvObjective objects filtered by the score_raw column
 * @method     array findByScoreMax(double $score_max) Return LpIvObjective objects filtered by the score_max column
 * @method     array findByScoreMin(double $score_min) Return LpIvObjective objects filtered by the score_min column
 * @method     array findByStatus(string $status) Return LpIvObjective objects filtered by the status column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpIvObjectiveQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpIvObjectiveQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LpIvObjective', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpIvObjectiveQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpIvObjectiveQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpIvObjectiveQuery) {
			return $criteria;
		}
		$query = new LpIvObjectiveQuery();
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
	 * @return    LpIvObjective|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpIvObjectivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpIvObjectivePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpIvObjectivePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpIvObjectivePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the lp_iv_id column
	 * 
	 * @param     string|array $lpIvId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByLpIvId($lpIvId = null, $comparison = null)
	{
		if (is_array($lpIvId)) {
			$useMinMax = false;
			if (isset($lpIvId['min'])) {
				$this->addUsingAlias(LpIvObjectivePeer::LP_IV_ID, $lpIvId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpIvId['max'])) {
				$this->addUsingAlias(LpIvObjectivePeer::LP_IV_ID, $lpIvId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::LP_IV_ID, $lpIvId, $comparison);
	}

	/**
	 * Filter the query on the order_id column
	 * 
	 * @param     int|array $orderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByOrderId($orderId = null, $comparison = null)
	{
		if (is_array($orderId)) {
			$useMinMax = false;
			if (isset($orderId['min'])) {
				$this->addUsingAlias(LpIvObjectivePeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($orderId['max'])) {
				$this->addUsingAlias(LpIvObjectivePeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::ORDER_ID, $orderId, $comparison);
	}

	/**
	 * Filter the query on the objective_id column
	 * 
	 * @param     string $objectiveId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByObjectiveId($objectiveId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($objectiveId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $objectiveId)) {
				$objectiveId = str_replace('*', '%', $objectiveId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::OBJECTIVE_ID, $objectiveId, $comparison);
	}

	/**
	 * Filter the query on the score_raw column
	 * 
	 * @param     double|array $scoreRaw The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByScoreRaw($scoreRaw = null, $comparison = null)
	{
		if (is_array($scoreRaw)) {
			$useMinMax = false;
			if (isset($scoreRaw['min'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_RAW, $scoreRaw['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($scoreRaw['max'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_RAW, $scoreRaw['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::SCORE_RAW, $scoreRaw, $comparison);
	}

	/**
	 * Filter the query on the score_max column
	 * 
	 * @param     double|array $scoreMax The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByScoreMax($scoreMax = null, $comparison = null)
	{
		if (is_array($scoreMax)) {
			$useMinMax = false;
			if (isset($scoreMax['min'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_MAX, $scoreMax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($scoreMax['max'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_MAX, $scoreMax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::SCORE_MAX, $scoreMax, $comparison);
	}

	/**
	 * Filter the query on the score_min column
	 * 
	 * @param     double|array $scoreMin The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByScoreMin($scoreMin = null, $comparison = null)
	{
		if (is_array($scoreMin)) {
			$useMinMax = false;
			if (isset($scoreMin['min'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_MIN, $scoreMin['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($scoreMin['max'])) {
				$this->addUsingAlias(LpIvObjectivePeer::SCORE_MIN, $scoreMin['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::SCORE_MIN, $scoreMin, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     string $status The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($status)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $status)) {
				$status = str_replace('*', '%', $status);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvObjectivePeer::STATUS, $status, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LpIvObjective $lpIvObjective Object to remove from the list of results
	 *
	 * @return    LpIvObjectiveQuery The current query, for fluid interface
	 */
	public function prune($lpIvObjective = null)
	{
		if ($lpIvObjective) {
			$this->addUsingAlias(LpIvObjectivePeer::ID, $lpIvObjective->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpIvObjectiveQuery
