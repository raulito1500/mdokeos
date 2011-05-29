<?php


/**
 * Base class that represents a query for the 'lp_item_view' table.
 *
 * 
 *
 * @method     LpItemViewQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpItemViewQuery orderByLpItemId($order = Criteria::ASC) Order by the lp_item_id column
 * @method     LpItemViewQuery orderByLpViewId($order = Criteria::ASC) Order by the lp_view_id column
 * @method     LpItemViewQuery orderByViewCount($order = Criteria::ASC) Order by the view_count column
 * @method     LpItemViewQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method     LpItemViewQuery orderByTotalTime($order = Criteria::ASC) Order by the total_time column
 * @method     LpItemViewQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     LpItemViewQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     LpItemViewQuery orderBySuspendData($order = Criteria::ASC) Order by the suspend_data column
 * @method     LpItemViewQuery orderByLessonLocation($order = Criteria::ASC) Order by the lesson_location column
 * @method     LpItemViewQuery orderByCoreExit($order = Criteria::ASC) Order by the core_exit column
 * @method     LpItemViewQuery orderByMaxScore($order = Criteria::ASC) Order by the max_score column
 *
 * @method     LpItemViewQuery groupById() Group by the id column
 * @method     LpItemViewQuery groupByLpItemId() Group by the lp_item_id column
 * @method     LpItemViewQuery groupByLpViewId() Group by the lp_view_id column
 * @method     LpItemViewQuery groupByViewCount() Group by the view_count column
 * @method     LpItemViewQuery groupByStartTime() Group by the start_time column
 * @method     LpItemViewQuery groupByTotalTime() Group by the total_time column
 * @method     LpItemViewQuery groupByScore() Group by the score column
 * @method     LpItemViewQuery groupByStatus() Group by the status column
 * @method     LpItemViewQuery groupBySuspendData() Group by the suspend_data column
 * @method     LpItemViewQuery groupByLessonLocation() Group by the lesson_location column
 * @method     LpItemViewQuery groupByCoreExit() Group by the core_exit column
 * @method     LpItemViewQuery groupByMaxScore() Group by the max_score column
 *
 * @method     LpItemViewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpItemViewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpItemViewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LpItemView findOne(PropelPDO $con = null) Return the first LpItemView matching the query
 * @method     LpItemView findOneOrCreate(PropelPDO $con = null) Return the first LpItemView matching the query, or a new LpItemView object populated from the query conditions when no match is found
 *
 * @method     LpItemView findOneById(string $id) Return the first LpItemView filtered by the id column
 * @method     LpItemView findOneByLpItemId(int $lp_item_id) Return the first LpItemView filtered by the lp_item_id column
 * @method     LpItemView findOneByLpViewId(int $lp_view_id) Return the first LpItemView filtered by the lp_view_id column
 * @method     LpItemView findOneByViewCount(int $view_count) Return the first LpItemView filtered by the view_count column
 * @method     LpItemView findOneByStartTime(int $start_time) Return the first LpItemView filtered by the start_time column
 * @method     LpItemView findOneByTotalTime(int $total_time) Return the first LpItemView filtered by the total_time column
 * @method     LpItemView findOneByScore(double $score) Return the first LpItemView filtered by the score column
 * @method     LpItemView findOneByStatus(string $status) Return the first LpItemView filtered by the status column
 * @method     LpItemView findOneBySuspendData(string $suspend_data) Return the first LpItemView filtered by the suspend_data column
 * @method     LpItemView findOneByLessonLocation(string $lesson_location) Return the first LpItemView filtered by the lesson_location column
 * @method     LpItemView findOneByCoreExit(string $core_exit) Return the first LpItemView filtered by the core_exit column
 * @method     LpItemView findOneByMaxScore(string $max_score) Return the first LpItemView filtered by the max_score column
 *
 * @method     array findById(string $id) Return LpItemView objects filtered by the id column
 * @method     array findByLpItemId(int $lp_item_id) Return LpItemView objects filtered by the lp_item_id column
 * @method     array findByLpViewId(int $lp_view_id) Return LpItemView objects filtered by the lp_view_id column
 * @method     array findByViewCount(int $view_count) Return LpItemView objects filtered by the view_count column
 * @method     array findByStartTime(int $start_time) Return LpItemView objects filtered by the start_time column
 * @method     array findByTotalTime(int $total_time) Return LpItemView objects filtered by the total_time column
 * @method     array findByScore(double $score) Return LpItemView objects filtered by the score column
 * @method     array findByStatus(string $status) Return LpItemView objects filtered by the status column
 * @method     array findBySuspendData(string $suspend_data) Return LpItemView objects filtered by the suspend_data column
 * @method     array findByLessonLocation(string $lesson_location) Return LpItemView objects filtered by the lesson_location column
 * @method     array findByCoreExit(string $core_exit) Return LpItemView objects filtered by the core_exit column
 * @method     array findByMaxScore(string $max_score) Return LpItemView objects filtered by the max_score column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItemViewQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpItemViewQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LpItemView', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpItemViewQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpItemViewQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpItemViewQuery) {
			return $criteria;
		}
		$query = new LpItemViewQuery();
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
	 * @return    LpItemView|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpItemViewPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpItemViewPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpItemViewPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpItemViewPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the lp_item_id column
	 * 
	 * @param     int|array $lpItemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByLpItemId($lpItemId = null, $comparison = null)
	{
		if (is_array($lpItemId)) {
			$useMinMax = false;
			if (isset($lpItemId['min'])) {
				$this->addUsingAlias(LpItemViewPeer::LP_ITEM_ID, $lpItemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpItemId['max'])) {
				$this->addUsingAlias(LpItemViewPeer::LP_ITEM_ID, $lpItemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::LP_ITEM_ID, $lpItemId, $comparison);
	}

	/**
	 * Filter the query on the lp_view_id column
	 * 
	 * @param     int|array $lpViewId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByLpViewId($lpViewId = null, $comparison = null)
	{
		if (is_array($lpViewId)) {
			$useMinMax = false;
			if (isset($lpViewId['min'])) {
				$this->addUsingAlias(LpItemViewPeer::LP_VIEW_ID, $lpViewId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpViewId['max'])) {
				$this->addUsingAlias(LpItemViewPeer::LP_VIEW_ID, $lpViewId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::LP_VIEW_ID, $lpViewId, $comparison);
	}

	/**
	 * Filter the query on the view_count column
	 * 
	 * @param     int|array $viewCount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByViewCount($viewCount = null, $comparison = null)
	{
		if (is_array($viewCount)) {
			$useMinMax = false;
			if (isset($viewCount['min'])) {
				$this->addUsingAlias(LpItemViewPeer::VIEW_COUNT, $viewCount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($viewCount['max'])) {
				$this->addUsingAlias(LpItemViewPeer::VIEW_COUNT, $viewCount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::VIEW_COUNT, $viewCount, $comparison);
	}

	/**
	 * Filter the query on the start_time column
	 * 
	 * @param     int|array $startTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByStartTime($startTime = null, $comparison = null)
	{
		if (is_array($startTime)) {
			$useMinMax = false;
			if (isset($startTime['min'])) {
				$this->addUsingAlias(LpItemViewPeer::START_TIME, $startTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startTime['max'])) {
				$this->addUsingAlias(LpItemViewPeer::START_TIME, $startTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::START_TIME, $startTime, $comparison);
	}

	/**
	 * Filter the query on the total_time column
	 * 
	 * @param     int|array $totalTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByTotalTime($totalTime = null, $comparison = null)
	{
		if (is_array($totalTime)) {
			$useMinMax = false;
			if (isset($totalTime['min'])) {
				$this->addUsingAlias(LpItemViewPeer::TOTAL_TIME, $totalTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalTime['max'])) {
				$this->addUsingAlias(LpItemViewPeer::TOTAL_TIME, $totalTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::TOTAL_TIME, $totalTime, $comparison);
	}

	/**
	 * Filter the query on the score column
	 * 
	 * @param     double|array $score The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByScore($score = null, $comparison = null)
	{
		if (is_array($score)) {
			$useMinMax = false;
			if (isset($score['min'])) {
				$this->addUsingAlias(LpItemViewPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($score['max'])) {
				$this->addUsingAlias(LpItemViewPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::SCORE, $score, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     string $status The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpItemViewPeer::STATUS, $status, $comparison);
	}

	/**
	 * Filter the query on the suspend_data column
	 * 
	 * @param     string $suspendData The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterBySuspendData($suspendData = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($suspendData)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $suspendData)) {
				$suspendData = str_replace('*', '%', $suspendData);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::SUSPEND_DATA, $suspendData, $comparison);
	}

	/**
	 * Filter the query on the lesson_location column
	 * 
	 * @param     string $lessonLocation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByLessonLocation($lessonLocation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lessonLocation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lessonLocation)) {
				$lessonLocation = str_replace('*', '%', $lessonLocation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::LESSON_LOCATION, $lessonLocation, $comparison);
	}

	/**
	 * Filter the query on the core_exit column
	 * 
	 * @param     string $coreExit The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByCoreExit($coreExit = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($coreExit)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $coreExit)) {
				$coreExit = str_replace('*', '%', $coreExit);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::CORE_EXIT, $coreExit, $comparison);
	}

	/**
	 * Filter the query on the max_score column
	 * 
	 * @param     string $maxScore The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function filterByMaxScore($maxScore = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($maxScore)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $maxScore)) {
				$maxScore = str_replace('*', '%', $maxScore);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemViewPeer::MAX_SCORE, $maxScore, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LpItemView $lpItemView Object to remove from the list of results
	 *
	 * @return    LpItemViewQuery The current query, for fluid interface
	 */
	public function prune($lpItemView = null)
	{
		if ($lpItemView) {
			$this->addUsingAlias(LpItemViewPeer::ID, $lpItemView->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpItemViewQuery
