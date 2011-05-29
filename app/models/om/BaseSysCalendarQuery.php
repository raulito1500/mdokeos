<?php


/**
 * Base class that represents a query for the 'sys_calendar' table.
 *
 * 
 *
 * @method     SysCalendarQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SysCalendarQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SysCalendarQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     SysCalendarQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method     SysCalendarQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 *
 * @method     SysCalendarQuery groupById() Group by the id column
 * @method     SysCalendarQuery groupByTitle() Group by the title column
 * @method     SysCalendarQuery groupByContent() Group by the content column
 * @method     SysCalendarQuery groupByStartDate() Group by the start_date column
 * @method     SysCalendarQuery groupByEndDate() Group by the end_date column
 *
 * @method     SysCalendarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SysCalendarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SysCalendarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SysCalendar findOne(PropelPDO $con = null) Return the first SysCalendar matching the query
 * @method     SysCalendar findOneOrCreate(PropelPDO $con = null) Return the first SysCalendar matching the query, or a new SysCalendar object populated from the query conditions when no match is found
 *
 * @method     SysCalendar findOneById(int $id) Return the first SysCalendar filtered by the id column
 * @method     SysCalendar findOneByTitle(string $title) Return the first SysCalendar filtered by the title column
 * @method     SysCalendar findOneByContent(string $content) Return the first SysCalendar filtered by the content column
 * @method     SysCalendar findOneByStartDate(string $start_date) Return the first SysCalendar filtered by the start_date column
 * @method     SysCalendar findOneByEndDate(string $end_date) Return the first SysCalendar filtered by the end_date column
 *
 * @method     array findById(int $id) Return SysCalendar objects filtered by the id column
 * @method     array findByTitle(string $title) Return SysCalendar objects filtered by the title column
 * @method     array findByContent(string $content) Return SysCalendar objects filtered by the content column
 * @method     array findByStartDate(string $start_date) Return SysCalendar objects filtered by the start_date column
 * @method     array findByEndDate(string $end_date) Return SysCalendar objects filtered by the end_date column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSysCalendarQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSysCalendarQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SysCalendar', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SysCalendarQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SysCalendarQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SysCalendarQuery) {
			return $criteria;
		}
		$query = new SysCalendarQuery();
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
	 * @return    SysCalendar|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SysCalendarPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SysCalendarPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SysCalendarPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SysCalendarPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SysCalendarPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SysCalendarPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the start_date column
	 * 
	 * @param     string|array $startDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function filterByStartDate($startDate = null, $comparison = null)
	{
		if (is_array($startDate)) {
			$useMinMax = false;
			if (isset($startDate['min'])) {
				$this->addUsingAlias(SysCalendarPeer::START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startDate['max'])) {
				$this->addUsingAlias(SysCalendarPeer::START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysCalendarPeer::START_DATE, $startDate, $comparison);
	}

	/**
	 * Filter the query on the end_date column
	 * 
	 * @param     string|array $endDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function filterByEndDate($endDate = null, $comparison = null)
	{
		if (is_array($endDate)) {
			$useMinMax = false;
			if (isset($endDate['min'])) {
				$this->addUsingAlias(SysCalendarPeer::END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endDate['max'])) {
				$this->addUsingAlias(SysCalendarPeer::END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysCalendarPeer::END_DATE, $endDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SysCalendar $sysCalendar Object to remove from the list of results
	 *
	 * @return    SysCalendarQuery The current query, for fluid interface
	 */
	public function prune($sysCalendar = null)
	{
		if ($sysCalendar) {
			$this->addUsingAlias(SysCalendarPeer::ID, $sysCalendar->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSysCalendarQuery
