<?php


/**
 * Base class that represents a query for the 'quiz' table.
 *
 * 
 *
 * @method     QuizQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     QuizQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     QuizQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     QuizQuery orderBySound($order = Criteria::ASC) Order by the sound column
 * @method     QuizQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     QuizQuery orderByRandom($order = Criteria::ASC) Order by the random column
 * @method     QuizQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     QuizQuery orderByResultsDisabled($order = Criteria::ASC) Order by the results_disabled column
 * @method     QuizQuery orderByAccessCondition($order = Criteria::ASC) Order by the access_condition column
 * @method     QuizQuery orderByMaxAttempt($order = Criteria::ASC) Order by the max_attempt column
 * @method     QuizQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method     QuizQuery orderByEndTime($order = Criteria::ASC) Order by the end_time column
 * @method     QuizQuery orderByFeedbackType($order = Criteria::ASC) Order by the feedback_type column
 *
 * @method     QuizQuery groupById() Group by the id column
 * @method     QuizQuery groupByTitle() Group by the title column
 * @method     QuizQuery groupByDescription() Group by the description column
 * @method     QuizQuery groupBySound() Group by the sound column
 * @method     QuizQuery groupByType() Group by the type column
 * @method     QuizQuery groupByRandom() Group by the random column
 * @method     QuizQuery groupByActive() Group by the active column
 * @method     QuizQuery groupByResultsDisabled() Group by the results_disabled column
 * @method     QuizQuery groupByAccessCondition() Group by the access_condition column
 * @method     QuizQuery groupByMaxAttempt() Group by the max_attempt column
 * @method     QuizQuery groupByStartTime() Group by the start_time column
 * @method     QuizQuery groupByEndTime() Group by the end_time column
 * @method     QuizQuery groupByFeedbackType() Group by the feedback_type column
 *
 * @method     QuizQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     QuizQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     QuizQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Quiz findOne(PropelPDO $con = null) Return the first Quiz matching the query
 * @method     Quiz findOneOrCreate(PropelPDO $con = null) Return the first Quiz matching the query, or a new Quiz object populated from the query conditions when no match is found
 *
 * @method     Quiz findOneById(int $id) Return the first Quiz filtered by the id column
 * @method     Quiz findOneByTitle(string $title) Return the first Quiz filtered by the title column
 * @method     Quiz findOneByDescription(string $description) Return the first Quiz filtered by the description column
 * @method     Quiz findOneBySound(string $sound) Return the first Quiz filtered by the sound column
 * @method     Quiz findOneByType(int $type) Return the first Quiz filtered by the type column
 * @method     Quiz findOneByRandom(int $random) Return the first Quiz filtered by the random column
 * @method     Quiz findOneByActive(int $active) Return the first Quiz filtered by the active column
 * @method     Quiz findOneByResultsDisabled(int $results_disabled) Return the first Quiz filtered by the results_disabled column
 * @method     Quiz findOneByAccessCondition(string $access_condition) Return the first Quiz filtered by the access_condition column
 * @method     Quiz findOneByMaxAttempt(int $max_attempt) Return the first Quiz filtered by the max_attempt column
 * @method     Quiz findOneByStartTime(string $start_time) Return the first Quiz filtered by the start_time column
 * @method     Quiz findOneByEndTime(string $end_time) Return the first Quiz filtered by the end_time column
 * @method     Quiz findOneByFeedbackType(int $feedback_type) Return the first Quiz filtered by the feedback_type column
 *
 * @method     array findById(int $id) Return Quiz objects filtered by the id column
 * @method     array findByTitle(string $title) Return Quiz objects filtered by the title column
 * @method     array findByDescription(string $description) Return Quiz objects filtered by the description column
 * @method     array findBySound(string $sound) Return Quiz objects filtered by the sound column
 * @method     array findByType(int $type) Return Quiz objects filtered by the type column
 * @method     array findByRandom(int $random) Return Quiz objects filtered by the random column
 * @method     array findByActive(int $active) Return Quiz objects filtered by the active column
 * @method     array findByResultsDisabled(int $results_disabled) Return Quiz objects filtered by the results_disabled column
 * @method     array findByAccessCondition(string $access_condition) Return Quiz objects filtered by the access_condition column
 * @method     array findByMaxAttempt(int $max_attempt) Return Quiz objects filtered by the max_attempt column
 * @method     array findByStartTime(string $start_time) Return Quiz objects filtered by the start_time column
 * @method     array findByEndTime(string $end_time) Return Quiz objects filtered by the end_time column
 * @method     array findByFeedbackType(int $feedback_type) Return Quiz objects filtered by the feedback_type column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseQuizQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseQuizQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Quiz', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new QuizQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    QuizQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof QuizQuery) {
			return $criteria;
		}
		$query = new QuizQuery();
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
	 * @return    Quiz|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = QuizPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(QuizPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(QuizPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(QuizPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(QuizPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the sound column
	 * 
	 * @param     string $sound The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterBySound($sound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sound)) {
				$sound = str_replace('*', '%', $sound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizPeer::SOUND, $sound, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     int|array $type The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_array($type)) {
			$useMinMax = false;
			if (isset($type['min'])) {
				$this->addUsingAlias(QuizPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($type['max'])) {
				$this->addUsingAlias(QuizPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the random column
	 * 
	 * @param     int|array $random The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByRandom($random = null, $comparison = null)
	{
		if (is_array($random)) {
			$useMinMax = false;
			if (isset($random['min'])) {
				$this->addUsingAlias(QuizPeer::RANDOM, $random['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($random['max'])) {
				$this->addUsingAlias(QuizPeer::RANDOM, $random['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::RANDOM, $random, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     int|array $active The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(QuizPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(QuizPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the results_disabled column
	 * 
	 * @param     int|array $resultsDisabled The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByResultsDisabled($resultsDisabled = null, $comparison = null)
	{
		if (is_array($resultsDisabled)) {
			$useMinMax = false;
			if (isset($resultsDisabled['min'])) {
				$this->addUsingAlias(QuizPeer::RESULTS_DISABLED, $resultsDisabled['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resultsDisabled['max'])) {
				$this->addUsingAlias(QuizPeer::RESULTS_DISABLED, $resultsDisabled['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::RESULTS_DISABLED, $resultsDisabled, $comparison);
	}

	/**
	 * Filter the query on the access_condition column
	 * 
	 * @param     string $accessCondition The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByAccessCondition($accessCondition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($accessCondition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $accessCondition)) {
				$accessCondition = str_replace('*', '%', $accessCondition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizPeer::ACCESS_CONDITION, $accessCondition, $comparison);
	}

	/**
	 * Filter the query on the max_attempt column
	 * 
	 * @param     int|array $maxAttempt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByMaxAttempt($maxAttempt = null, $comparison = null)
	{
		if (is_array($maxAttempt)) {
			$useMinMax = false;
			if (isset($maxAttempt['min'])) {
				$this->addUsingAlias(QuizPeer::MAX_ATTEMPT, $maxAttempt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxAttempt['max'])) {
				$this->addUsingAlias(QuizPeer::MAX_ATTEMPT, $maxAttempt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::MAX_ATTEMPT, $maxAttempt, $comparison);
	}

	/**
	 * Filter the query on the start_time column
	 * 
	 * @param     string|array $startTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByStartTime($startTime = null, $comparison = null)
	{
		if (is_array($startTime)) {
			$useMinMax = false;
			if (isset($startTime['min'])) {
				$this->addUsingAlias(QuizPeer::START_TIME, $startTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startTime['max'])) {
				$this->addUsingAlias(QuizPeer::START_TIME, $startTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::START_TIME, $startTime, $comparison);
	}

	/**
	 * Filter the query on the end_time column
	 * 
	 * @param     string|array $endTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByEndTime($endTime = null, $comparison = null)
	{
		if (is_array($endTime)) {
			$useMinMax = false;
			if (isset($endTime['min'])) {
				$this->addUsingAlias(QuizPeer::END_TIME, $endTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endTime['max'])) {
				$this->addUsingAlias(QuizPeer::END_TIME, $endTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::END_TIME, $endTime, $comparison);
	}

	/**
	 * Filter the query on the feedback_type column
	 * 
	 * @param     int|array $feedbackType The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function filterByFeedbackType($feedbackType = null, $comparison = null)
	{
		if (is_array($feedbackType)) {
			$useMinMax = false;
			if (isset($feedbackType['min'])) {
				$this->addUsingAlias(QuizPeer::FEEDBACK_TYPE, $feedbackType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($feedbackType['max'])) {
				$this->addUsingAlias(QuizPeer::FEEDBACK_TYPE, $feedbackType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizPeer::FEEDBACK_TYPE, $feedbackType, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Quiz $quiz Object to remove from the list of results
	 *
	 * @return    QuizQuery The current query, for fluid interface
	 */
	public function prune($quiz = null)
	{
		if ($quiz) {
			$this->addUsingAlias(QuizPeer::ID, $quiz->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseQuizQuery
