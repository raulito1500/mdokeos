<?php


/**
 * Base class that represents a query for the 'calendar_event_repeat' table.
 *
 * 
 *
 * @method     CalendarEventRepeatQuery orderByCalId($order = Criteria::ASC) Order by the cal_id column
 * @method     CalendarEventRepeatQuery orderByCalType($order = Criteria::ASC) Order by the cal_type column
 * @method     CalendarEventRepeatQuery orderByCalEnd($order = Criteria::ASC) Order by the cal_end column
 * @method     CalendarEventRepeatQuery orderByCalFrequency($order = Criteria::ASC) Order by the cal_frequency column
 * @method     CalendarEventRepeatQuery orderByCalDays($order = Criteria::ASC) Order by the cal_days column
 *
 * @method     CalendarEventRepeatQuery groupByCalId() Group by the cal_id column
 * @method     CalendarEventRepeatQuery groupByCalType() Group by the cal_type column
 * @method     CalendarEventRepeatQuery groupByCalEnd() Group by the cal_end column
 * @method     CalendarEventRepeatQuery groupByCalFrequency() Group by the cal_frequency column
 * @method     CalendarEventRepeatQuery groupByCalDays() Group by the cal_days column
 *
 * @method     CalendarEventRepeatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarEventRepeatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarEventRepeatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarEventRepeat findOne(PropelPDO $con = null) Return the first CalendarEventRepeat matching the query
 * @method     CalendarEventRepeat findOneOrCreate(PropelPDO $con = null) Return the first CalendarEventRepeat matching the query, or a new CalendarEventRepeat object populated from the query conditions when no match is found
 *
 * @method     CalendarEventRepeat findOneByCalId(int $cal_id) Return the first CalendarEventRepeat filtered by the cal_id column
 * @method     CalendarEventRepeat findOneByCalType(string $cal_type) Return the first CalendarEventRepeat filtered by the cal_type column
 * @method     CalendarEventRepeat findOneByCalEnd(int $cal_end) Return the first CalendarEventRepeat filtered by the cal_end column
 * @method     CalendarEventRepeat findOneByCalFrequency(int $cal_frequency) Return the first CalendarEventRepeat filtered by the cal_frequency column
 * @method     CalendarEventRepeat findOneByCalDays(string $cal_days) Return the first CalendarEventRepeat filtered by the cal_days column
 *
 * @method     array findByCalId(int $cal_id) Return CalendarEventRepeat objects filtered by the cal_id column
 * @method     array findByCalType(string $cal_type) Return CalendarEventRepeat objects filtered by the cal_type column
 * @method     array findByCalEnd(int $cal_end) Return CalendarEventRepeat objects filtered by the cal_end column
 * @method     array findByCalFrequency(int $cal_frequency) Return CalendarEventRepeat objects filtered by the cal_frequency column
 * @method     array findByCalDays(string $cal_days) Return CalendarEventRepeat objects filtered by the cal_days column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCalendarEventRepeatQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCalendarEventRepeatQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CalendarEventRepeat', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CalendarEventRepeatQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CalendarEventRepeatQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CalendarEventRepeatQuery) {
			return $criteria;
		}
		$query = new CalendarEventRepeatQuery();
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
	 * @return    CalendarEventRepeat|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CalendarEventRepeatPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the cal_id column
	 * 
	 * @param     int|array $calId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByCalId($calId = null, $comparison = null)
	{
		if (is_array($calId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_ID, $calId, $comparison);
	}

	/**
	 * Filter the query on the cal_type column
	 * 
	 * @param     string $calType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByCalType($calType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($calType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $calType)) {
				$calType = str_replace('*', '%', $calType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_TYPE, $calType, $comparison);
	}

	/**
	 * Filter the query on the cal_end column
	 * 
	 * @param     int|array $calEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByCalEnd($calEnd = null, $comparison = null)
	{
		if (is_array($calEnd)) {
			$useMinMax = false;
			if (isset($calEnd['min'])) {
				$this->addUsingAlias(CalendarEventRepeatPeer::CAL_END, $calEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($calEnd['max'])) {
				$this->addUsingAlias(CalendarEventRepeatPeer::CAL_END, $calEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_END, $calEnd, $comparison);
	}

	/**
	 * Filter the query on the cal_frequency column
	 * 
	 * @param     int|array $calFrequency The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByCalFrequency($calFrequency = null, $comparison = null)
	{
		if (is_array($calFrequency)) {
			$useMinMax = false;
			if (isset($calFrequency['min'])) {
				$this->addUsingAlias(CalendarEventRepeatPeer::CAL_FREQUENCY, $calFrequency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($calFrequency['max'])) {
				$this->addUsingAlias(CalendarEventRepeatPeer::CAL_FREQUENCY, $calFrequency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_FREQUENCY, $calFrequency, $comparison);
	}

	/**
	 * Filter the query on the cal_days column
	 * 
	 * @param     string $calDays The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function filterByCalDays($calDays = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($calDays)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $calDays)) {
				$calDays = str_replace('*', '%', $calDays);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CalendarEventRepeatPeer::CAL_DAYS, $calDays, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CalendarEventRepeat $calendarEventRepeat Object to remove from the list of results
	 *
	 * @return    CalendarEventRepeatQuery The current query, for fluid interface
	 */
	public function prune($calendarEventRepeat = null)
	{
		if ($calendarEventRepeat) {
			$this->addUsingAlias(CalendarEventRepeatPeer::CAL_ID, $calendarEventRepeat->getCalId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCalendarEventRepeatQuery
