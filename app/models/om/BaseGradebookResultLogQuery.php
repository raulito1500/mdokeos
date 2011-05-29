<?php


/**
 * Base class that represents a query for the 'gradebook_result_log' table.
 *
 * 
 *
 * @method     GradebookResultLogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookResultLogQuery orderByIdResult($order = Criteria::ASC) Order by the id_result column
 * @method     GradebookResultLogQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookResultLogQuery orderByEvaluationId($order = Criteria::ASC) Order by the evaluation_id column
 * @method     GradebookResultLogQuery orderByDateLog($order = Criteria::ASC) Order by the date_log column
 * @method     GradebookResultLogQuery orderByScore($order = Criteria::ASC) Order by the score column
 *
 * @method     GradebookResultLogQuery groupById() Group by the id column
 * @method     GradebookResultLogQuery groupByIdResult() Group by the id_result column
 * @method     GradebookResultLogQuery groupByUserId() Group by the user_id column
 * @method     GradebookResultLogQuery groupByEvaluationId() Group by the evaluation_id column
 * @method     GradebookResultLogQuery groupByDateLog() Group by the date_log column
 * @method     GradebookResultLogQuery groupByScore() Group by the score column
 *
 * @method     GradebookResultLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookResultLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookResultLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookResultLog findOne(PropelPDO $con = null) Return the first GradebookResultLog matching the query
 * @method     GradebookResultLog findOneOrCreate(PropelPDO $con = null) Return the first GradebookResultLog matching the query, or a new GradebookResultLog object populated from the query conditions when no match is found
 *
 * @method     GradebookResultLog findOneById(int $id) Return the first GradebookResultLog filtered by the id column
 * @method     GradebookResultLog findOneByIdResult(int $id_result) Return the first GradebookResultLog filtered by the id_result column
 * @method     GradebookResultLog findOneByUserId(int $user_id) Return the first GradebookResultLog filtered by the user_id column
 * @method     GradebookResultLog findOneByEvaluationId(int $evaluation_id) Return the first GradebookResultLog filtered by the evaluation_id column
 * @method     GradebookResultLog findOneByDateLog(string $date_log) Return the first GradebookResultLog filtered by the date_log column
 * @method     GradebookResultLog findOneByScore(double $score) Return the first GradebookResultLog filtered by the score column
 *
 * @method     array findById(int $id) Return GradebookResultLog objects filtered by the id column
 * @method     array findByIdResult(int $id_result) Return GradebookResultLog objects filtered by the id_result column
 * @method     array findByUserId(int $user_id) Return GradebookResultLog objects filtered by the user_id column
 * @method     array findByEvaluationId(int $evaluation_id) Return GradebookResultLog objects filtered by the evaluation_id column
 * @method     array findByDateLog(string $date_log) Return GradebookResultLog objects filtered by the date_log column
 * @method     array findByScore(double $score) Return GradebookResultLog objects filtered by the score column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookResultLogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookResultLogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookResultLog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookResultLogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookResultLogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookResultLogQuery) {
			return $criteria;
		}
		$query = new GradebookResultLogQuery();
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
	 * @return    GradebookResultLog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookResultLogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookResultLogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookResultLogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookResultLogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the id_result column
	 * 
	 * @param     int|array $idResult The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByIdResult($idResult = null, $comparison = null)
	{
		if (is_array($idResult)) {
			$useMinMax = false;
			if (isset($idResult['min'])) {
				$this->addUsingAlias(GradebookResultLogPeer::ID_RESULT, $idResult['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idResult['max'])) {
				$this->addUsingAlias(GradebookResultLogPeer::ID_RESULT, $idResult['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultLogPeer::ID_RESULT, $idResult, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookResultLogPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookResultLogPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultLogPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the evaluation_id column
	 * 
	 * @param     int|array $evaluationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByEvaluationId($evaluationId = null, $comparison = null)
	{
		if (is_array($evaluationId)) {
			$useMinMax = false;
			if (isset($evaluationId['min'])) {
				$this->addUsingAlias(GradebookResultLogPeer::EVALUATION_ID, $evaluationId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($evaluationId['max'])) {
				$this->addUsingAlias(GradebookResultLogPeer::EVALUATION_ID, $evaluationId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultLogPeer::EVALUATION_ID, $evaluationId, $comparison);
	}

	/**
	 * Filter the query on the date_log column
	 * 
	 * @param     string|array $dateLog The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByDateLog($dateLog = null, $comparison = null)
	{
		if (is_array($dateLog)) {
			$useMinMax = false;
			if (isset($dateLog['min'])) {
				$this->addUsingAlias(GradebookResultLogPeer::DATE_LOG, $dateLog['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateLog['max'])) {
				$this->addUsingAlias(GradebookResultLogPeer::DATE_LOG, $dateLog['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultLogPeer::DATE_LOG, $dateLog, $comparison);
	}

	/**
	 * Filter the query on the score column
	 * 
	 * @param     double|array $score The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function filterByScore($score = null, $comparison = null)
	{
		if (is_array($score)) {
			$useMinMax = false;
			if (isset($score['min'])) {
				$this->addUsingAlias(GradebookResultLogPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($score['max'])) {
				$this->addUsingAlias(GradebookResultLogPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookResultLogPeer::SCORE, $score, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookResultLog $gradebookResultLog Object to remove from the list of results
	 *
	 * @return    GradebookResultLogQuery The current query, for fluid interface
	 */
	public function prune($gradebookResultLog = null)
	{
		if ($gradebookResultLog) {
			$this->addUsingAlias(GradebookResultLogPeer::ID, $gradebookResultLog->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookResultLogQuery
