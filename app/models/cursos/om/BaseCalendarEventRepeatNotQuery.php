<?php


/**
 * Base class that represents a query for the 'calendar_event_repeat_not' table.
 *
 * 
 *
 * @method     CalendarEventRepeatNotQuery orderByCalId($order = Criteria::ASC) Order by the cal_id column
 * @method     CalendarEventRepeatNotQuery orderByCalDate($order = Criteria::ASC) Order by the cal_date column
 *
 * @method     CalendarEventRepeatNotQuery groupByCalId() Group by the cal_id column
 * @method     CalendarEventRepeatNotQuery groupByCalDate() Group by the cal_date column
 *
 * @method     CalendarEventRepeatNotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarEventRepeatNotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarEventRepeatNotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarEventRepeatNot findOne(PropelPDO $con = null) Return the first CalendarEventRepeatNot matching the query
 * @method     CalendarEventRepeatNot findOneOrCreate(PropelPDO $con = null) Return the first CalendarEventRepeatNot matching the query, or a new CalendarEventRepeatNot object populated from the query conditions when no match is found
 *
 * @method     CalendarEventRepeatNot findOneByCalId(int $cal_id) Return the first CalendarEventRepeatNot filtered by the cal_id column
 * @method     CalendarEventRepeatNot findOneByCalDate(int $cal_date) Return the first CalendarEventRepeatNot filtered by the cal_date column
 *
 * @method     array findByCalId(int $cal_id) Return CalendarEventRepeatNot objects filtered by the cal_id column
 * @method     array findByCalDate(int $cal_date) Return CalendarEventRepeatNot objects filtered by the cal_date column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCalendarEventRepeatNotQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCalendarEventRepeatNotQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CalendarEventRepeatNot', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CalendarEventRepeatNotQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CalendarEventRepeatNotQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CalendarEventRepeatNotQuery) {
			return $criteria;
		}
		$query = new CalendarEventRepeatNotQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$cal_id, $cal_date] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    CalendarEventRepeatNot|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CalendarEventRepeatNotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    CalendarEventRepeatNotQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(CalendarEventRepeatNotPeer::CAL_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(CalendarEventRepeatNotPeer::CAL_DATE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CalendarEventRepeatNotQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(CalendarEventRepeatNotPeer::CAL_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(CalendarEventRepeatNotPeer::CAL_DATE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the cal_id column
	 * 
	 * @param     int|array $calId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatNotQuery The current query, for fluid interface
	 */
	public function filterByCalId($calId = null, $comparison = null)
	{
		if (is_array($calId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CalendarEventRepeatNotPeer::CAL_ID, $calId, $comparison);
	}

	/**
	 * Filter the query on the cal_date column
	 * 
	 * @param     int|array $calDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventRepeatNotQuery The current query, for fluid interface
	 */
	public function filterByCalDate($calDate = null, $comparison = null)
	{
		if (is_array($calDate) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CalendarEventRepeatNotPeer::CAL_DATE, $calDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CalendarEventRepeatNot $calendarEventRepeatNot Object to remove from the list of results
	 *
	 * @return    CalendarEventRepeatNotQuery The current query, for fluid interface
	 */
	public function prune($calendarEventRepeatNot = null)
	{
		if ($calendarEventRepeatNot) {
			$this->addCond('pruneCond0', $this->getAliasedColName(CalendarEventRepeatNotPeer::CAL_ID), $calendarEventRepeatNot->getCalId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(CalendarEventRepeatNotPeer::CAL_DATE), $calendarEventRepeatNot->getCalDate(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseCalendarEventRepeatNotQuery
