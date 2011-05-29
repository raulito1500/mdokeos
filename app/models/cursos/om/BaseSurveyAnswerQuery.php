<?php


/**
 * Base class that represents a query for the 'survey_answer' table.
 *
 * 
 *
 * @method     SurveyAnswerQuery orderByAnswerId($order = Criteria::ASC) Order by the answer_id column
 * @method     SurveyAnswerQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SurveyAnswerQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     SurveyAnswerQuery orderByOptionId($order = Criteria::ASC) Order by the option_id column
 * @method     SurveyAnswerQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     SurveyAnswerQuery orderByUser($order = Criteria::ASC) Order by the user column
 *
 * @method     SurveyAnswerQuery groupByAnswerId() Group by the answer_id column
 * @method     SurveyAnswerQuery groupBySurveyId() Group by the survey_id column
 * @method     SurveyAnswerQuery groupByQuestionId() Group by the question_id column
 * @method     SurveyAnswerQuery groupByOptionId() Group by the option_id column
 * @method     SurveyAnswerQuery groupByValue() Group by the value column
 * @method     SurveyAnswerQuery groupByUser() Group by the user column
 *
 * @method     SurveyAnswerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyAnswerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyAnswerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SurveyAnswer findOne(PropelPDO $con = null) Return the first SurveyAnswer matching the query
 * @method     SurveyAnswer findOneOrCreate(PropelPDO $con = null) Return the first SurveyAnswer matching the query, or a new SurveyAnswer object populated from the query conditions when no match is found
 *
 * @method     SurveyAnswer findOneByAnswerId(int $answer_id) Return the first SurveyAnswer filtered by the answer_id column
 * @method     SurveyAnswer findOneBySurveyId(int $survey_id) Return the first SurveyAnswer filtered by the survey_id column
 * @method     SurveyAnswer findOneByQuestionId(int $question_id) Return the first SurveyAnswer filtered by the question_id column
 * @method     SurveyAnswer findOneByOptionId(string $option_id) Return the first SurveyAnswer filtered by the option_id column
 * @method     SurveyAnswer findOneByValue(int $value) Return the first SurveyAnswer filtered by the value column
 * @method     SurveyAnswer findOneByUser(string $user) Return the first SurveyAnswer filtered by the user column
 *
 * @method     array findByAnswerId(int $answer_id) Return SurveyAnswer objects filtered by the answer_id column
 * @method     array findBySurveyId(int $survey_id) Return SurveyAnswer objects filtered by the survey_id column
 * @method     array findByQuestionId(int $question_id) Return SurveyAnswer objects filtered by the question_id column
 * @method     array findByOptionId(string $option_id) Return SurveyAnswer objects filtered by the option_id column
 * @method     array findByValue(int $value) Return SurveyAnswer objects filtered by the value column
 * @method     array findByUser(string $user) Return SurveyAnswer objects filtered by the user column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyAnswerQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyAnswerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SurveyAnswer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyAnswerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyAnswerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyAnswerQuery) {
			return $criteria;
		}
		$query = new SurveyAnswerQuery();
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
	 * @return    SurveyAnswer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyAnswerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyAnswerPeer::ANSWER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyAnswerPeer::ANSWER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the answer_id column
	 * 
	 * @param     int|array $answerId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByAnswerId($answerId = null, $comparison = null)
	{
		if (is_array($answerId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyAnswerPeer::ANSWER_ID, $answerId, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SurveyAnswerPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SurveyAnswerPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyAnswerPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId)) {
			$useMinMax = false;
			if (isset($questionId['min'])) {
				$this->addUsingAlias(SurveyAnswerPeer::QUESTION_ID, $questionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionId['max'])) {
				$this->addUsingAlias(SurveyAnswerPeer::QUESTION_ID, $questionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyAnswerPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the option_id column
	 * 
	 * @param     string $optionId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByOptionId($optionId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($optionId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $optionId)) {
				$optionId = str_replace('*', '%', $optionId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyAnswerPeer::OPTION_ID, $optionId, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     int|array $value The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (is_array($value)) {
			$useMinMax = false;
			if (isset($value['min'])) {
				$this->addUsingAlias(SurveyAnswerPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($value['max'])) {
				$this->addUsingAlias(SurveyAnswerPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyAnswerPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the user column
	 * 
	 * @param     string $user The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function filterByUser($user = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user)) {
				$user = str_replace('*', '%', $user);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyAnswerPeer::USER, $user, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SurveyAnswer $surveyAnswer Object to remove from the list of results
	 *
	 * @return    SurveyAnswerQuery The current query, for fluid interface
	 */
	public function prune($surveyAnswer = null)
	{
		if ($surveyAnswer) {
			$this->addUsingAlias(SurveyAnswerPeer::ANSWER_ID, $surveyAnswer->getAnswerId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyAnswerQuery
