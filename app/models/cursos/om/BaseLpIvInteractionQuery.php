<?php


/**
 * Base class that represents a query for the 'lp_iv_interaction' table.
 *
 * 
 *
 * @method     LpIvInteractionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpIvInteractionQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method     LpIvInteractionQuery orderByLpIvId($order = Criteria::ASC) Order by the lp_iv_id column
 * @method     LpIvInteractionQuery orderByInteractionId($order = Criteria::ASC) Order by the interaction_id column
 * @method     LpIvInteractionQuery orderByInteractionType($order = Criteria::ASC) Order by the interaction_type column
 * @method     LpIvInteractionQuery orderByWeighting($order = Criteria::ASC) Order by the weighting column
 * @method     LpIvInteractionQuery orderByCompletionTime($order = Criteria::ASC) Order by the completion_time column
 * @method     LpIvInteractionQuery orderByCorrectResponses($order = Criteria::ASC) Order by the correct_responses column
 * @method     LpIvInteractionQuery orderByStudentResponse($order = Criteria::ASC) Order by the student_response column
 * @method     LpIvInteractionQuery orderByResult($order = Criteria::ASC) Order by the result column
 * @method     LpIvInteractionQuery orderByLatency($order = Criteria::ASC) Order by the latency column
 *
 * @method     LpIvInteractionQuery groupById() Group by the id column
 * @method     LpIvInteractionQuery groupByOrderId() Group by the order_id column
 * @method     LpIvInteractionQuery groupByLpIvId() Group by the lp_iv_id column
 * @method     LpIvInteractionQuery groupByInteractionId() Group by the interaction_id column
 * @method     LpIvInteractionQuery groupByInteractionType() Group by the interaction_type column
 * @method     LpIvInteractionQuery groupByWeighting() Group by the weighting column
 * @method     LpIvInteractionQuery groupByCompletionTime() Group by the completion_time column
 * @method     LpIvInteractionQuery groupByCorrectResponses() Group by the correct_responses column
 * @method     LpIvInteractionQuery groupByStudentResponse() Group by the student_response column
 * @method     LpIvInteractionQuery groupByResult() Group by the result column
 * @method     LpIvInteractionQuery groupByLatency() Group by the latency column
 *
 * @method     LpIvInteractionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpIvInteractionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpIvInteractionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LpIvInteraction findOne(PropelPDO $con = null) Return the first LpIvInteraction matching the query
 * @method     LpIvInteraction findOneOrCreate(PropelPDO $con = null) Return the first LpIvInteraction matching the query, or a new LpIvInteraction object populated from the query conditions when no match is found
 *
 * @method     LpIvInteraction findOneById(string $id) Return the first LpIvInteraction filtered by the id column
 * @method     LpIvInteraction findOneByOrderId(int $order_id) Return the first LpIvInteraction filtered by the order_id column
 * @method     LpIvInteraction findOneByLpIvId(string $lp_iv_id) Return the first LpIvInteraction filtered by the lp_iv_id column
 * @method     LpIvInteraction findOneByInteractionId(string $interaction_id) Return the first LpIvInteraction filtered by the interaction_id column
 * @method     LpIvInteraction findOneByInteractionType(string $interaction_type) Return the first LpIvInteraction filtered by the interaction_type column
 * @method     LpIvInteraction findOneByWeighting(double $weighting) Return the first LpIvInteraction filtered by the weighting column
 * @method     LpIvInteraction findOneByCompletionTime(string $completion_time) Return the first LpIvInteraction filtered by the completion_time column
 * @method     LpIvInteraction findOneByCorrectResponses(string $correct_responses) Return the first LpIvInteraction filtered by the correct_responses column
 * @method     LpIvInteraction findOneByStudentResponse(string $student_response) Return the first LpIvInteraction filtered by the student_response column
 * @method     LpIvInteraction findOneByResult(string $result) Return the first LpIvInteraction filtered by the result column
 * @method     LpIvInteraction findOneByLatency(string $latency) Return the first LpIvInteraction filtered by the latency column
 *
 * @method     array findById(string $id) Return LpIvInteraction objects filtered by the id column
 * @method     array findByOrderId(int $order_id) Return LpIvInteraction objects filtered by the order_id column
 * @method     array findByLpIvId(string $lp_iv_id) Return LpIvInteraction objects filtered by the lp_iv_id column
 * @method     array findByInteractionId(string $interaction_id) Return LpIvInteraction objects filtered by the interaction_id column
 * @method     array findByInteractionType(string $interaction_type) Return LpIvInteraction objects filtered by the interaction_type column
 * @method     array findByWeighting(double $weighting) Return LpIvInteraction objects filtered by the weighting column
 * @method     array findByCompletionTime(string $completion_time) Return LpIvInteraction objects filtered by the completion_time column
 * @method     array findByCorrectResponses(string $correct_responses) Return LpIvInteraction objects filtered by the correct_responses column
 * @method     array findByStudentResponse(string $student_response) Return LpIvInteraction objects filtered by the student_response column
 * @method     array findByResult(string $result) Return LpIvInteraction objects filtered by the result column
 * @method     array findByLatency(string $latency) Return LpIvInteraction objects filtered by the latency column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpIvInteractionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpIvInteractionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LpIvInteraction', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpIvInteractionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpIvInteractionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpIvInteractionQuery) {
			return $criteria;
		}
		$query = new LpIvInteractionQuery();
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
	 * @return    LpIvInteraction|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpIvInteractionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpIvInteractionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpIvInteractionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpIvInteractionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the order_id column
	 * 
	 * @param     int|array $orderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByOrderId($orderId = null, $comparison = null)
	{
		if (is_array($orderId)) {
			$useMinMax = false;
			if (isset($orderId['min'])) {
				$this->addUsingAlias(LpIvInteractionPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($orderId['max'])) {
				$this->addUsingAlias(LpIvInteractionPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::ORDER_ID, $orderId, $comparison);
	}

	/**
	 * Filter the query on the lp_iv_id column
	 * 
	 * @param     string|array $lpIvId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByLpIvId($lpIvId = null, $comparison = null)
	{
		if (is_array($lpIvId)) {
			$useMinMax = false;
			if (isset($lpIvId['min'])) {
				$this->addUsingAlias(LpIvInteractionPeer::LP_IV_ID, $lpIvId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpIvId['max'])) {
				$this->addUsingAlias(LpIvInteractionPeer::LP_IV_ID, $lpIvId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::LP_IV_ID, $lpIvId, $comparison);
	}

	/**
	 * Filter the query on the interaction_id column
	 * 
	 * @param     string $interactionId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByInteractionId($interactionId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($interactionId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $interactionId)) {
				$interactionId = str_replace('*', '%', $interactionId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::INTERACTION_ID, $interactionId, $comparison);
	}

	/**
	 * Filter the query on the interaction_type column
	 * 
	 * @param     string $interactionType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByInteractionType($interactionType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($interactionType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $interactionType)) {
				$interactionType = str_replace('*', '%', $interactionType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::INTERACTION_TYPE, $interactionType, $comparison);
	}

	/**
	 * Filter the query on the weighting column
	 * 
	 * @param     double|array $weighting The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByWeighting($weighting = null, $comparison = null)
	{
		if (is_array($weighting)) {
			$useMinMax = false;
			if (isset($weighting['min'])) {
				$this->addUsingAlias(LpIvInteractionPeer::WEIGHTING, $weighting['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weighting['max'])) {
				$this->addUsingAlias(LpIvInteractionPeer::WEIGHTING, $weighting['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::WEIGHTING, $weighting, $comparison);
	}

	/**
	 * Filter the query on the completion_time column
	 * 
	 * @param     string $completionTime The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByCompletionTime($completionTime = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($completionTime)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $completionTime)) {
				$completionTime = str_replace('*', '%', $completionTime);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::COMPLETION_TIME, $completionTime, $comparison);
	}

	/**
	 * Filter the query on the correct_responses column
	 * 
	 * @param     string $correctResponses The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByCorrectResponses($correctResponses = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($correctResponses)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $correctResponses)) {
				$correctResponses = str_replace('*', '%', $correctResponses);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::CORRECT_RESPONSES, $correctResponses, $comparison);
	}

	/**
	 * Filter the query on the student_response column
	 * 
	 * @param     string $studentResponse The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByStudentResponse($studentResponse = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($studentResponse)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $studentResponse)) {
				$studentResponse = str_replace('*', '%', $studentResponse);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::STUDENT_RESPONSE, $studentResponse, $comparison);
	}

	/**
	 * Filter the query on the result column
	 * 
	 * @param     string $result The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByResult($result = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($result)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $result)) {
				$result = str_replace('*', '%', $result);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::RESULT, $result, $comparison);
	}

	/**
	 * Filter the query on the latency column
	 * 
	 * @param     string $latency The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function filterByLatency($latency = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($latency)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $latency)) {
				$latency = str_replace('*', '%', $latency);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpIvInteractionPeer::LATENCY, $latency, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LpIvInteraction $lpIvInteraction Object to remove from the list of results
	 *
	 * @return    LpIvInteractionQuery The current query, for fluid interface
	 */
	public function prune($lpIvInteraction = null)
	{
		if ($lpIvInteraction) {
			$this->addUsingAlias(LpIvInteractionPeer::ID, $lpIvInteraction->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpIvInteractionQuery
