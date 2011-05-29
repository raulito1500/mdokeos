<?php


/**
 * Base class that represents a query for the 'survey_question_option' table.
 *
 * 
 *
 * @method     SurveyQuestionOptionQuery orderByQuestionOptionId($order = Criteria::ASC) Order by the question_option_id column
 * @method     SurveyQuestionOptionQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     SurveyQuestionOptionQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SurveyQuestionOptionQuery orderByOptionText($order = Criteria::ASC) Order by the option_text column
 * @method     SurveyQuestionOptionQuery orderBySort($order = Criteria::ASC) Order by the sort column
 * @method     SurveyQuestionOptionQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     SurveyQuestionOptionQuery groupByQuestionOptionId() Group by the question_option_id column
 * @method     SurveyQuestionOptionQuery groupByQuestionId() Group by the question_id column
 * @method     SurveyQuestionOptionQuery groupBySurveyId() Group by the survey_id column
 * @method     SurveyQuestionOptionQuery groupByOptionText() Group by the option_text column
 * @method     SurveyQuestionOptionQuery groupBySort() Group by the sort column
 * @method     SurveyQuestionOptionQuery groupByValue() Group by the value column
 *
 * @method     SurveyQuestionOptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyQuestionOptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyQuestionOptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SurveyQuestionOption findOne(PropelPDO $con = null) Return the first SurveyQuestionOption matching the query
 * @method     SurveyQuestionOption findOneOrCreate(PropelPDO $con = null) Return the first SurveyQuestionOption matching the query, or a new SurveyQuestionOption object populated from the query conditions when no match is found
 *
 * @method     SurveyQuestionOption findOneByQuestionOptionId(int $question_option_id) Return the first SurveyQuestionOption filtered by the question_option_id column
 * @method     SurveyQuestionOption findOneByQuestionId(int $question_id) Return the first SurveyQuestionOption filtered by the question_id column
 * @method     SurveyQuestionOption findOneBySurveyId(int $survey_id) Return the first SurveyQuestionOption filtered by the survey_id column
 * @method     SurveyQuestionOption findOneByOptionText(string $option_text) Return the first SurveyQuestionOption filtered by the option_text column
 * @method     SurveyQuestionOption findOneBySort(int $sort) Return the first SurveyQuestionOption filtered by the sort column
 * @method     SurveyQuestionOption findOneByValue(int $value) Return the first SurveyQuestionOption filtered by the value column
 *
 * @method     array findByQuestionOptionId(int $question_option_id) Return SurveyQuestionOption objects filtered by the question_option_id column
 * @method     array findByQuestionId(int $question_id) Return SurveyQuestionOption objects filtered by the question_id column
 * @method     array findBySurveyId(int $survey_id) Return SurveyQuestionOption objects filtered by the survey_id column
 * @method     array findByOptionText(string $option_text) Return SurveyQuestionOption objects filtered by the option_text column
 * @method     array findBySort(int $sort) Return SurveyQuestionOption objects filtered by the sort column
 * @method     array findByValue(int $value) Return SurveyQuestionOption objects filtered by the value column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyQuestionOptionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyQuestionOptionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SurveyQuestionOption', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyQuestionOptionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyQuestionOptionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyQuestionOptionQuery) {
			return $criteria;
		}
		$query = new SurveyQuestionOptionQuery();
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
	 * @return    SurveyQuestionOption|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyQuestionOptionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_OPTION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_OPTION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the question_option_id column
	 * 
	 * @param     int|array $questionOptionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByQuestionOptionId($questionOptionId = null, $comparison = null)
	{
		if (is_array($questionOptionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_OPTION_ID, $questionOptionId, $comparison);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId)) {
			$useMinMax = false;
			if (isset($questionId['min'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_ID, $questionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionId['max'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_ID, $questionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the option_text column
	 * 
	 * @param     string $optionText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByOptionText($optionText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($optionText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $optionText)) {
				$optionText = str_replace('*', '%', $optionText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::OPTION_TEXT, $optionText, $comparison);
	}

	/**
	 * Filter the query on the sort column
	 * 
	 * @param     int|array $sort The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterBySort($sort = null, $comparison = null)
	{
		if (is_array($sort)) {
			$useMinMax = false;
			if (isset($sort['min'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sort['max'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::SORT, $sort, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     int|array $value The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (is_array($value)) {
			$useMinMax = false;
			if (isset($value['min'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($value['max'])) {
				$this->addUsingAlias(SurveyQuestionOptionPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionOptionPeer::VALUE, $value, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SurveyQuestionOption $surveyQuestionOption Object to remove from the list of results
	 *
	 * @return    SurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function prune($surveyQuestionOption = null)
	{
		if ($surveyQuestionOption) {
			$this->addUsingAlias(SurveyQuestionOptionPeer::QUESTION_OPTION_ID, $surveyQuestionOption->getQuestionOptionId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyQuestionOptionQuery
