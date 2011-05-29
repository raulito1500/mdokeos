<?php


/**
 * Base class that represents a query for the 'gradebook_result' table.
 *
 * 
 *
 * @method     GradebookResultQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookResultQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookResultQuery orderByEvaluationId($order = Criteria::ASC) Order by the evaluation_id column
 * @method     GradebookResultQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     GradebookResultQuery orderByScore($order = Criteria::ASC) Order by the score column
 *
 * @method     GradebookResultQuery groupById() Group by the id column
 * @method     GradebookResultQuery groupByUserId() Group by the user_id column
 * @method     GradebookResultQuery groupByEvaluationId() Group by the evaluation_id column
 * @method     GradebookResultQuery groupByDate() Group by the date column
 * @method     GradebookResultQuery groupByScore() Group by the score column
 *
 * @method     GradebookResultQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookResultQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookResultQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookResult findOne(PropelPDO $con = null) Return the first GradebookResult matching the query
 * @method     GradebookResult findOneOrCreate(PropelPDO $con = null) Return the first GradebookResult matching the query, or a new GradebookResult object populated from the query conditions when no match is found
 *
 * @method     GradebookResult findOneById(int $id) Return the first GradebookResult filtered by the id column
 * @method     GradebookResult findOneByUserId(int $user_id) Return the first GradebookResult filtered by the user_id column
 * @method     GradebookResult findOneByEvaluationId(int $evaluation_id) Return the first GradebookResult filtered by the evaluation_id column
 * @method     GradebookResult findOneByDate(int $date) Return the first GradebookResult filtered by the date column
 * @method     GradebookResult findOneByScore(double $score) Return the first GradebookResult filtered by the score column
 *
 * @method     array findById(int $id) Return GradebookResult objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return GradebookResult objects filtered by the user_id column
 * @method     array findByEvaluationId(int $evaluation_id) Return GradebookResult objects filtered by the evaluation_id column
 * @method     array findByDate(int $date) Return GradebookResult objects filtered by the date column
 * @method     array findByScore(double $score) Return GradebookResult objects filtered by the score column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookResultQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookResultQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookResult', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookResultQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookResultQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookResultQuery) {
			return $criteria;
		}
		$query = new GradebookResultQuery();
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
	 * @return    GradebookResult|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookResultPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookResultPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookResultPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookResultPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookResultPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookResultPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the evaluation_id column
	 * 
	 * @param     int|array $evaluationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByEvaluationId($evaluationId = null, $comparison = null)
	{
		if (is_array($evaluationId)) {
			$useMinMax = false;
			if (isset($evaluationId['min'])) {
				$this->addUsingAlias(GradebookResultPeer::EVALUATION_ID, $evaluationId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($evaluationId['max'])) {
				$this->addUsingAlias(GradebookResultPeer::EVALUATION_ID, $evaluationId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultPeer::EVALUATION_ID, $evaluationId, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     int|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(GradebookResultPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(GradebookResultPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the score column
	 * 
	 * @param     double|array $score The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function filterByScore($score = null, $comparison = null)
	{
		if (is_array($score)) {
			$useMinMax = false;
			if (isset($score['min'])) {
				$this->addUsingAlias(GradebookResultPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($score['max'])) {
				$this->addUsingAlias(GradebookResultPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultPeer::SCORE, $score, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookResult $gradebookResult Object to remove from the list of results
	 *
	 * @return    GradebookResultQuery The current query, for fluid interface
	 */
	public function prune($gradebookResult = null)
	{
		if ($gradebookResult) {
			$this->addUsingAlias(GradebookResultPeer::ID, $gradebookResult->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookResultQuery
