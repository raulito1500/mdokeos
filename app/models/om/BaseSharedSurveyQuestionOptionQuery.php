<?php


/**
 * Base class that represents a query for the 'shared_survey_question_option' table.
 *
 * 
 *
 * @method     SharedSurveyQuestionOptionQuery orderByQuestionOptionId($order = Criteria::ASC) Order by the question_option_id column
 * @method     SharedSurveyQuestionOptionQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     SharedSurveyQuestionOptionQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SharedSurveyQuestionOptionQuery orderByOptionText($order = Criteria::ASC) Order by the option_text column
 * @method     SharedSurveyQuestionOptionQuery orderBySort($order = Criteria::ASC) Order by the sort column
 *
 * @method     SharedSurveyQuestionOptionQuery groupByQuestionOptionId() Group by the question_option_id column
 * @method     SharedSurveyQuestionOptionQuery groupByQuestionId() Group by the question_id column
 * @method     SharedSurveyQuestionOptionQuery groupBySurveyId() Group by the survey_id column
 * @method     SharedSurveyQuestionOptionQuery groupByOptionText() Group by the option_text column
 * @method     SharedSurveyQuestionOptionQuery groupBySort() Group by the sort column
 *
 * @method     SharedSurveyQuestionOptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SharedSurveyQuestionOptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SharedSurveyQuestionOptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SharedSurveyQuestionOption findOne(PropelPDO $con = null) Return the first SharedSurveyQuestionOption matching the query
 * @method     SharedSurveyQuestionOption findOneOrCreate(PropelPDO $con = null) Return the first SharedSurveyQuestionOption matching the query, or a new SharedSurveyQuestionOption object populated from the query conditions when no match is found
 *
 * @method     SharedSurveyQuestionOption findOneByQuestionOptionId(int $question_option_id) Return the first SharedSurveyQuestionOption filtered by the question_option_id column
 * @method     SharedSurveyQuestionOption findOneByQuestionId(int $question_id) Return the first SharedSurveyQuestionOption filtered by the question_id column
 * @method     SharedSurveyQuestionOption findOneBySurveyId(int $survey_id) Return the first SharedSurveyQuestionOption filtered by the survey_id column
 * @method     SharedSurveyQuestionOption findOneByOptionText(string $option_text) Return the first SharedSurveyQuestionOption filtered by the option_text column
 * @method     SharedSurveyQuestionOption findOneBySort(int $sort) Return the first SharedSurveyQuestionOption filtered by the sort column
 *
 * @method     array findByQuestionOptionId(int $question_option_id) Return SharedSurveyQuestionOption objects filtered by the question_option_id column
 * @method     array findByQuestionId(int $question_id) Return SharedSurveyQuestionOption objects filtered by the question_id column
 * @method     array findBySurveyId(int $survey_id) Return SharedSurveyQuestionOption objects filtered by the survey_id column
 * @method     array findByOptionText(string $option_text) Return SharedSurveyQuestionOption objects filtered by the option_text column
 * @method     array findBySort(int $sort) Return SharedSurveyQuestionOption objects filtered by the sort column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSharedSurveyQuestionOptionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSharedSurveyQuestionOptionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SharedSurveyQuestionOption', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SharedSurveyQuestionOptionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SharedSurveyQuestionOptionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SharedSurveyQuestionOptionQuery) {
			return $criteria;
		}
		$query = new SharedSurveyQuestionOptionQuery();
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
	 * @return    SharedSurveyQuestionOption|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SharedSurveyQuestionOptionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_OPTION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_OPTION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the question_option_id column
	 * 
	 * @param     int|array $questionOptionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByQuestionOptionId($questionOptionId = null, $comparison = null)
	{
		if (is_array($questionOptionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_OPTION_ID, $questionOptionId, $comparison);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId)) {
			$useMinMax = false;
			if (isset($questionId['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_ID, $questionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionId['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_ID, $questionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the option_text column
	 * 
	 * @param     string $optionText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::OPTION_TEXT, $optionText, $comparison);
	}

	/**
	 * Filter the query on the sort column
	 * 
	 * @param     int|array $sort The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function filterBySort($sort = null, $comparison = null)
	{
		if (is_array($sort)) {
			$useMinMax = false;
			if (isset($sort['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sort['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionOptionPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionOptionPeer::SORT, $sort, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SharedSurveyQuestionOption $sharedSurveyQuestionOption Object to remove from the list of results
	 *
	 * @return    SharedSurveyQuestionOptionQuery The current query, for fluid interface
	 */
	public function prune($sharedSurveyQuestionOption = null)
	{
		if ($sharedSurveyQuestionOption) {
			$this->addUsingAlias(SharedSurveyQuestionOptionPeer::QUESTION_OPTION_ID, $sharedSurveyQuestionOption->getQuestionOptionId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSharedSurveyQuestionOptionQuery
