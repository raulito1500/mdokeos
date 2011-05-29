<?php


/**
 * Base class that represents a query for the 'shared_survey_question' table.
 *
 * 
 *
 * @method     SharedSurveyQuestionQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     SharedSurveyQuestionQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SharedSurveyQuestionQuery orderBySurveyQuestion($order = Criteria::ASC) Order by the survey_question column
 * @method     SharedSurveyQuestionQuery orderBySurveyQuestionComment($order = Criteria::ASC) Order by the survey_question_comment column
 * @method     SharedSurveyQuestionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     SharedSurveyQuestionQuery orderByDisplay($order = Criteria::ASC) Order by the display column
 * @method     SharedSurveyQuestionQuery orderBySort($order = Criteria::ASC) Order by the sort column
 * @method     SharedSurveyQuestionQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SharedSurveyQuestionQuery orderByMaxValue($order = Criteria::ASC) Order by the max_value column
 *
 * @method     SharedSurveyQuestionQuery groupByQuestionId() Group by the question_id column
 * @method     SharedSurveyQuestionQuery groupBySurveyId() Group by the survey_id column
 * @method     SharedSurveyQuestionQuery groupBySurveyQuestion() Group by the survey_question column
 * @method     SharedSurveyQuestionQuery groupBySurveyQuestionComment() Group by the survey_question_comment column
 * @method     SharedSurveyQuestionQuery groupByType() Group by the type column
 * @method     SharedSurveyQuestionQuery groupByDisplay() Group by the display column
 * @method     SharedSurveyQuestionQuery groupBySort() Group by the sort column
 * @method     SharedSurveyQuestionQuery groupByCode() Group by the code column
 * @method     SharedSurveyQuestionQuery groupByMaxValue() Group by the max_value column
 *
 * @method     SharedSurveyQuestionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SharedSurveyQuestionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SharedSurveyQuestionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SharedSurveyQuestion findOne(PropelPDO $con = null) Return the first SharedSurveyQuestion matching the query
 * @method     SharedSurveyQuestion findOneOrCreate(PropelPDO $con = null) Return the first SharedSurveyQuestion matching the query, or a new SharedSurveyQuestion object populated from the query conditions when no match is found
 *
 * @method     SharedSurveyQuestion findOneByQuestionId(int $question_id) Return the first SharedSurveyQuestion filtered by the question_id column
 * @method     SharedSurveyQuestion findOneBySurveyId(int $survey_id) Return the first SharedSurveyQuestion filtered by the survey_id column
 * @method     SharedSurveyQuestion findOneBySurveyQuestion(string $survey_question) Return the first SharedSurveyQuestion filtered by the survey_question column
 * @method     SharedSurveyQuestion findOneBySurveyQuestionComment(string $survey_question_comment) Return the first SharedSurveyQuestion filtered by the survey_question_comment column
 * @method     SharedSurveyQuestion findOneByType(string $type) Return the first SharedSurveyQuestion filtered by the type column
 * @method     SharedSurveyQuestion findOneByDisplay(string $display) Return the first SharedSurveyQuestion filtered by the display column
 * @method     SharedSurveyQuestion findOneBySort(int $sort) Return the first SharedSurveyQuestion filtered by the sort column
 * @method     SharedSurveyQuestion findOneByCode(string $code) Return the first SharedSurveyQuestion filtered by the code column
 * @method     SharedSurveyQuestion findOneByMaxValue(int $max_value) Return the first SharedSurveyQuestion filtered by the max_value column
 *
 * @method     array findByQuestionId(int $question_id) Return SharedSurveyQuestion objects filtered by the question_id column
 * @method     array findBySurveyId(int $survey_id) Return SharedSurveyQuestion objects filtered by the survey_id column
 * @method     array findBySurveyQuestion(string $survey_question) Return SharedSurveyQuestion objects filtered by the survey_question column
 * @method     array findBySurveyQuestionComment(string $survey_question_comment) Return SharedSurveyQuestion objects filtered by the survey_question_comment column
 * @method     array findByType(string $type) Return SharedSurveyQuestion objects filtered by the type column
 * @method     array findByDisplay(string $display) Return SharedSurveyQuestion objects filtered by the display column
 * @method     array findBySort(int $sort) Return SharedSurveyQuestion objects filtered by the sort column
 * @method     array findByCode(string $code) Return SharedSurveyQuestion objects filtered by the code column
 * @method     array findByMaxValue(int $max_value) Return SharedSurveyQuestion objects filtered by the max_value column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSharedSurveyQuestionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSharedSurveyQuestionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SharedSurveyQuestion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SharedSurveyQuestionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SharedSurveyQuestionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SharedSurveyQuestionQuery) {
			return $criteria;
		}
		$query = new SharedSurveyQuestionQuery();
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
	 * @return    SharedSurveyQuestion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SharedSurveyQuestionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SharedSurveyQuestionPeer::QUESTION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SharedSurveyQuestionPeer::QUESTION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the survey_question column
	 * 
	 * @param     string $surveyQuestion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyQuestion($surveyQuestion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($surveyQuestion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $surveyQuestion)) {
				$surveyQuestion = str_replace('*', '%', $surveyQuestion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::SURVEY_QUESTION, $surveyQuestion, $comparison);
	}

	/**
	 * Filter the query on the survey_question_comment column
	 * 
	 * @param     string $surveyQuestionComment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyQuestionComment($surveyQuestionComment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($surveyQuestionComment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $surveyQuestionComment)) {
				$surveyQuestionComment = str_replace('*', '%', $surveyQuestionComment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::SURVEY_QUESTION_COMMENT, $surveyQuestionComment, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the display column
	 * 
	 * @param     string $display The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByDisplay($display = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($display)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $display)) {
				$display = str_replace('*', '%', $display);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::DISPLAY, $display, $comparison);
	}

	/**
	 * Filter the query on the sort column
	 * 
	 * @param     int|array $sort The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySort($sort = null, $comparison = null)
	{
		if (is_array($sort)) {
			$useMinMax = false;
			if (isset($sort['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sort['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::SORT, $sort, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($code)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $code)) {
				$code = str_replace('*', '%', $code);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the max_value column
	 * 
	 * @param     int|array $maxValue The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByMaxValue($maxValue = null, $comparison = null)
	{
		if (is_array($maxValue)) {
			$useMinMax = false;
			if (isset($maxValue['min'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::MAX_VALUE, $maxValue['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxValue['max'])) {
				$this->addUsingAlias(SharedSurveyQuestionPeer::MAX_VALUE, $maxValue['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyQuestionPeer::MAX_VALUE, $maxValue, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SharedSurveyQuestion $sharedSurveyQuestion Object to remove from the list of results
	 *
	 * @return    SharedSurveyQuestionQuery The current query, for fluid interface
	 */
	public function prune($sharedSurveyQuestion = null)
	{
		if ($sharedSurveyQuestion) {
			$this->addUsingAlias(SharedSurveyQuestionPeer::QUESTION_ID, $sharedSurveyQuestion->getQuestionId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSharedSurveyQuestionQuery
