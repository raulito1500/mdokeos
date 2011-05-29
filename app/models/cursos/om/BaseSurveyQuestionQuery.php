<?php


/**
 * Base class that represents a query for the 'survey_question' table.
 *
 * 
 *
 * @method     SurveyQuestionQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     SurveyQuestionQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SurveyQuestionQuery orderBySurveyQuestion($order = Criteria::ASC) Order by the survey_question column
 * @method     SurveyQuestionQuery orderBySurveyQuestionComment($order = Criteria::ASC) Order by the survey_question_comment column
 * @method     SurveyQuestionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     SurveyQuestionQuery orderByDisplay($order = Criteria::ASC) Order by the display column
 * @method     SurveyQuestionQuery orderBySort($order = Criteria::ASC) Order by the sort column
 * @method     SurveyQuestionQuery orderBySharedQuestionId($order = Criteria::ASC) Order by the shared_question_id column
 * @method     SurveyQuestionQuery orderByMaxValue($order = Criteria::ASC) Order by the max_value column
 * @method     SurveyQuestionQuery orderBySurveyGroupPri($order = Criteria::ASC) Order by the survey_group_pri column
 * @method     SurveyQuestionQuery orderBySurveyGroupSec1($order = Criteria::ASC) Order by the survey_group_sec1 column
 * @method     SurveyQuestionQuery orderBySurveyGroupSec2($order = Criteria::ASC) Order by the survey_group_sec2 column
 *
 * @method     SurveyQuestionQuery groupByQuestionId() Group by the question_id column
 * @method     SurveyQuestionQuery groupBySurveyId() Group by the survey_id column
 * @method     SurveyQuestionQuery groupBySurveyQuestion() Group by the survey_question column
 * @method     SurveyQuestionQuery groupBySurveyQuestionComment() Group by the survey_question_comment column
 * @method     SurveyQuestionQuery groupByType() Group by the type column
 * @method     SurveyQuestionQuery groupByDisplay() Group by the display column
 * @method     SurveyQuestionQuery groupBySort() Group by the sort column
 * @method     SurveyQuestionQuery groupBySharedQuestionId() Group by the shared_question_id column
 * @method     SurveyQuestionQuery groupByMaxValue() Group by the max_value column
 * @method     SurveyQuestionQuery groupBySurveyGroupPri() Group by the survey_group_pri column
 * @method     SurveyQuestionQuery groupBySurveyGroupSec1() Group by the survey_group_sec1 column
 * @method     SurveyQuestionQuery groupBySurveyGroupSec2() Group by the survey_group_sec2 column
 *
 * @method     SurveyQuestionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyQuestionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyQuestionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SurveyQuestion findOne(PropelPDO $con = null) Return the first SurveyQuestion matching the query
 * @method     SurveyQuestion findOneOrCreate(PropelPDO $con = null) Return the first SurveyQuestion matching the query, or a new SurveyQuestion object populated from the query conditions when no match is found
 *
 * @method     SurveyQuestion findOneByQuestionId(int $question_id) Return the first SurveyQuestion filtered by the question_id column
 * @method     SurveyQuestion findOneBySurveyId(int $survey_id) Return the first SurveyQuestion filtered by the survey_id column
 * @method     SurveyQuestion findOneBySurveyQuestion(string $survey_question) Return the first SurveyQuestion filtered by the survey_question column
 * @method     SurveyQuestion findOneBySurveyQuestionComment(string $survey_question_comment) Return the first SurveyQuestion filtered by the survey_question_comment column
 * @method     SurveyQuestion findOneByType(string $type) Return the first SurveyQuestion filtered by the type column
 * @method     SurveyQuestion findOneByDisplay(string $display) Return the first SurveyQuestion filtered by the display column
 * @method     SurveyQuestion findOneBySort(int $sort) Return the first SurveyQuestion filtered by the sort column
 * @method     SurveyQuestion findOneBySharedQuestionId(int $shared_question_id) Return the first SurveyQuestion filtered by the shared_question_id column
 * @method     SurveyQuestion findOneByMaxValue(int $max_value) Return the first SurveyQuestion filtered by the max_value column
 * @method     SurveyQuestion findOneBySurveyGroupPri(int $survey_group_pri) Return the first SurveyQuestion filtered by the survey_group_pri column
 * @method     SurveyQuestion findOneBySurveyGroupSec1(int $survey_group_sec1) Return the first SurveyQuestion filtered by the survey_group_sec1 column
 * @method     SurveyQuestion findOneBySurveyGroupSec2(int $survey_group_sec2) Return the first SurveyQuestion filtered by the survey_group_sec2 column
 *
 * @method     array findByQuestionId(int $question_id) Return SurveyQuestion objects filtered by the question_id column
 * @method     array findBySurveyId(int $survey_id) Return SurveyQuestion objects filtered by the survey_id column
 * @method     array findBySurveyQuestion(string $survey_question) Return SurveyQuestion objects filtered by the survey_question column
 * @method     array findBySurveyQuestionComment(string $survey_question_comment) Return SurveyQuestion objects filtered by the survey_question_comment column
 * @method     array findByType(string $type) Return SurveyQuestion objects filtered by the type column
 * @method     array findByDisplay(string $display) Return SurveyQuestion objects filtered by the display column
 * @method     array findBySort(int $sort) Return SurveyQuestion objects filtered by the sort column
 * @method     array findBySharedQuestionId(int $shared_question_id) Return SurveyQuestion objects filtered by the shared_question_id column
 * @method     array findByMaxValue(int $max_value) Return SurveyQuestion objects filtered by the max_value column
 * @method     array findBySurveyGroupPri(int $survey_group_pri) Return SurveyQuestion objects filtered by the survey_group_pri column
 * @method     array findBySurveyGroupSec1(int $survey_group_sec1) Return SurveyQuestion objects filtered by the survey_group_sec1 column
 * @method     array findBySurveyGroupSec2(int $survey_group_sec2) Return SurveyQuestion objects filtered by the survey_group_sec2 column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyQuestionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyQuestionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SurveyQuestion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyQuestionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyQuestionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyQuestionQuery) {
			return $criteria;
		}
		$query = new SurveyQuestionQuery();
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
	 * @return    SurveyQuestion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyQuestionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyQuestionPeer::QUESTION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyQuestionPeer::QUESTION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyQuestionPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the survey_question column
	 * 
	 * @param     string $surveyQuestion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_QUESTION, $surveyQuestion, $comparison);
	}

	/**
	 * Filter the query on the survey_question_comment column
	 * 
	 * @param     string $surveyQuestionComment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_QUESTION_COMMENT, $surveyQuestionComment, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyQuestionPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the display column
	 * 
	 * @param     string $display The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyQuestionPeer::DISPLAY, $display, $comparison);
	}

	/**
	 * Filter the query on the sort column
	 * 
	 * @param     int|array $sort The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySort($sort = null, $comparison = null)
	{
		if (is_array($sort)) {
			$useMinMax = false;
			if (isset($sort['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sort['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SORT, $sort, $comparison);
	}

	/**
	 * Filter the query on the shared_question_id column
	 * 
	 * @param     int|array $sharedQuestionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySharedQuestionId($sharedQuestionId = null, $comparison = null)
	{
		if (is_array($sharedQuestionId)) {
			$useMinMax = false;
			if (isset($sharedQuestionId['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SHARED_QUESTION_ID, $sharedQuestionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sharedQuestionId['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SHARED_QUESTION_ID, $sharedQuestionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SHARED_QUESTION_ID, $sharedQuestionId, $comparison);
	}

	/**
	 * Filter the query on the max_value column
	 * 
	 * @param     int|array $maxValue The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterByMaxValue($maxValue = null, $comparison = null)
	{
		if (is_array($maxValue)) {
			$useMinMax = false;
			if (isset($maxValue['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::MAX_VALUE, $maxValue['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxValue['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::MAX_VALUE, $maxValue['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::MAX_VALUE, $maxValue, $comparison);
	}

	/**
	 * Filter the query on the survey_group_pri column
	 * 
	 * @param     int|array $surveyGroupPri The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyGroupPri($surveyGroupPri = null, $comparison = null)
	{
		if (is_array($surveyGroupPri)) {
			$useMinMax = false;
			if (isset($surveyGroupPri['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_PRI, $surveyGroupPri['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyGroupPri['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_PRI, $surveyGroupPri['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_PRI, $surveyGroupPri, $comparison);
	}

	/**
	 * Filter the query on the survey_group_sec1 column
	 * 
	 * @param     int|array $surveyGroupSec1 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyGroupSec1($surveyGroupSec1 = null, $comparison = null)
	{
		if (is_array($surveyGroupSec1)) {
			$useMinMax = false;
			if (isset($surveyGroupSec1['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC1, $surveyGroupSec1['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyGroupSec1['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC1, $surveyGroupSec1['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC1, $surveyGroupSec1, $comparison);
	}

	/**
	 * Filter the query on the survey_group_sec2 column
	 * 
	 * @param     int|array $surveyGroupSec2 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function filterBySurveyGroupSec2($surveyGroupSec2 = null, $comparison = null)
	{
		if (is_array($surveyGroupSec2)) {
			$useMinMax = false;
			if (isset($surveyGroupSec2['min'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC2, $surveyGroupSec2['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyGroupSec2['max'])) {
				$this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC2, $surveyGroupSec2['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyQuestionPeer::SURVEY_GROUP_SEC2, $surveyGroupSec2, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SurveyQuestion $surveyQuestion Object to remove from the list of results
	 *
	 * @return    SurveyQuestionQuery The current query, for fluid interface
	 */
	public function prune($surveyQuestion = null)
	{
		if ($surveyQuestion) {
			$this->addUsingAlias(SurveyQuestionPeer::QUESTION_ID, $surveyQuestion->getQuestionId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyQuestionQuery
