<?php


/**
 * Base class that represents a query for the 'calendar_event' table.
 *
 * 
 *
 * @method     CalendarEventQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CalendarEventQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CalendarEventQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     CalendarEventQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method     CalendarEventQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method     CalendarEventQuery orderByParentEventId($order = Criteria::ASC) Order by the parent_event_id column
 * @method     CalendarEventQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     CalendarEventQuery groupById() Group by the id column
 * @method     CalendarEventQuery groupByTitle() Group by the title column
 * @method     CalendarEventQuery groupByContent() Group by the content column
 * @method     CalendarEventQuery groupByStartDate() Group by the start_date column
 * @method     CalendarEventQuery groupByEndDate() Group by the end_date column
 * @method     CalendarEventQuery groupByParentEventId() Group by the parent_event_id column
 * @method     CalendarEventQuery groupBySessionId() Group by the session_id column
 *
 * @method     CalendarEventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarEventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarEventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarEvent findOne(PropelPDO $con = null) Return the first CalendarEvent matching the query
 * @method     CalendarEvent findOneOrCreate(PropelPDO $con = null) Return the first CalendarEvent matching the query, or a new CalendarEvent object populated from the query conditions when no match is found
 *
 * @method     CalendarEvent findOneById(int $id) Return the first CalendarEvent filtered by the id column
 * @method     CalendarEvent findOneByTitle(string $title) Return the first CalendarEvent filtered by the title column
 * @method     CalendarEvent findOneByContent(string $content) Return the first CalendarEvent filtered by the content column
 * @method     CalendarEvent findOneByStartDate(string $start_date) Return the first CalendarEvent filtered by the start_date column
 * @method     CalendarEvent findOneByEndDate(string $end_date) Return the first CalendarEvent filtered by the end_date column
 * @method     CalendarEvent findOneByParentEventId(int $parent_event_id) Return the first CalendarEvent filtered by the parent_event_id column
 * @method     CalendarEvent findOneBySessionId(int $session_id) Return the first CalendarEvent filtered by the session_id column
 *
 * @method     array findById(int $id) Return CalendarEvent objects filtered by the id column
 * @method     array findByTitle(string $title) Return CalendarEvent objects filtered by the title column
 * @method     array findByContent(string $content) Return CalendarEvent objects filtered by the content column
 * @method     array findByStartDate(string $start_date) Return CalendarEvent objects filtered by the start_date column
 * @method     array findByEndDate(string $end_date) Return CalendarEvent objects filtered by the end_date column
 * @method     array findByParentEventId(int $parent_event_id) Return CalendarEvent objects filtered by the parent_event_id column
 * @method     array findBySessionId(int $session_id) Return CalendarEvent objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCalendarEventQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCalendarEventQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CalendarEvent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CalendarEventQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CalendarEventQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CalendarEventQuery) {
			return $criteria;
		}
		$query = new CalendarEventQuery();
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
	 * @return    CalendarEvent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CalendarEventPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CalendarEventPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CalendarEventPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CalendarEventPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CalendarEventPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CalendarEventPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the start_date column
	 * 
	 * @param     string|array $startDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByStartDate($startDate = null, $comparison = null)
	{
		if (is_array($startDate)) {
			$useMinMax = false;
			if (isset($startDate['min'])) {
				$this->addUsingAlias(CalendarEventPeer::START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startDate['max'])) {
				$this->addUsingAlias(CalendarEventPeer::START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventPeer::START_DATE, $startDate, $comparison);
	}

	/**
	 * Filter the query on the end_date column
	 * 
	 * @param     string|array $endDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByEndDate($endDate = null, $comparison = null)
	{
		if (is_array($endDate)) {
			$useMinMax = false;
			if (isset($endDate['min'])) {
				$this->addUsingAlias(CalendarEventPeer::END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endDate['max'])) {
				$this->addUsingAlias(CalendarEventPeer::END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventPeer::END_DATE, $endDate, $comparison);
	}

	/**
	 * Filter the query on the parent_event_id column
	 * 
	 * @param     int|array $parentEventId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterByParentEventId($parentEventId = null, $comparison = null)
	{
		if (is_array($parentEventId)) {
			$useMinMax = false;
			if (isset($parentEventId['min'])) {
				$this->addUsingAlias(CalendarEventPeer::PARENT_EVENT_ID, $parentEventId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentEventId['max'])) {
				$this->addUsingAlias(CalendarEventPeer::PARENT_EVENT_ID, $parentEventId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventPeer::PARENT_EVENT_ID, $parentEventId, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(CalendarEventPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(CalendarEventPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CalendarEvent $calendarEvent Object to remove from the list of results
	 *
	 * @return    CalendarEventQuery The current query, for fluid interface
	 */
	public function prune($calendarEvent = null)
	{
		if ($calendarEvent) {
			$this->addUsingAlias(CalendarEventPeer::ID, $calendarEvent->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCalendarEventQuery
