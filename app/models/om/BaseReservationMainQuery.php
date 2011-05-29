<?php


/**
 * Base class that represents a query for the 'reservation_main' table.
 *
 * 
 *
 * @method     ReservationMainQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReservationMainQuery orderBySubid($order = Criteria::ASC) Order by the subid column
 * @method     ReservationMainQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ReservationMainQuery orderByAutoAccept($order = Criteria::ASC) Order by the auto_accept column
 * @method     ReservationMainQuery orderByMaxUsers($order = Criteria::ASC) Order by the max_users column
 * @method     ReservationMainQuery orderByStartAt($order = Criteria::ASC) Order by the start_at column
 * @method     ReservationMainQuery orderByEndAt($order = Criteria::ASC) Order by the end_at column
 * @method     ReservationMainQuery orderBySubscribeFrom($order = Criteria::ASC) Order by the subscribe_from column
 * @method     ReservationMainQuery orderBySubscribeUntil($order = Criteria::ASC) Order by the subscribe_until column
 * @method     ReservationMainQuery orderBySubscribers($order = Criteria::ASC) Order by the subscribers column
 * @method     ReservationMainQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ReservationMainQuery orderByTimepicker($order = Criteria::ASC) Order by the timepicker column
 * @method     ReservationMainQuery orderByTimepickerMin($order = Criteria::ASC) Order by the timepicker_min column
 * @method     ReservationMainQuery orderByTimepickerMax($order = Criteria::ASC) Order by the timepicker_max column
 *
 * @method     ReservationMainQuery groupById() Group by the id column
 * @method     ReservationMainQuery groupBySubid() Group by the subid column
 * @method     ReservationMainQuery groupByItemId() Group by the item_id column
 * @method     ReservationMainQuery groupByAutoAccept() Group by the auto_accept column
 * @method     ReservationMainQuery groupByMaxUsers() Group by the max_users column
 * @method     ReservationMainQuery groupByStartAt() Group by the start_at column
 * @method     ReservationMainQuery groupByEndAt() Group by the end_at column
 * @method     ReservationMainQuery groupBySubscribeFrom() Group by the subscribe_from column
 * @method     ReservationMainQuery groupBySubscribeUntil() Group by the subscribe_until column
 * @method     ReservationMainQuery groupBySubscribers() Group by the subscribers column
 * @method     ReservationMainQuery groupByNotes() Group by the notes column
 * @method     ReservationMainQuery groupByTimepicker() Group by the timepicker column
 * @method     ReservationMainQuery groupByTimepickerMin() Group by the timepicker_min column
 * @method     ReservationMainQuery groupByTimepickerMax() Group by the timepicker_max column
 *
 * @method     ReservationMainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationMainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationMainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationMain findOne(PropelPDO $con = null) Return the first ReservationMain matching the query
 * @method     ReservationMain findOneOrCreate(PropelPDO $con = null) Return the first ReservationMain matching the query, or a new ReservationMain object populated from the query conditions when no match is found
 *
 * @method     ReservationMain findOneById(int $id) Return the first ReservationMain filtered by the id column
 * @method     ReservationMain findOneBySubid(int $subid) Return the first ReservationMain filtered by the subid column
 * @method     ReservationMain findOneByItemId(int $item_id) Return the first ReservationMain filtered by the item_id column
 * @method     ReservationMain findOneByAutoAccept(int $auto_accept) Return the first ReservationMain filtered by the auto_accept column
 * @method     ReservationMain findOneByMaxUsers(int $max_users) Return the first ReservationMain filtered by the max_users column
 * @method     ReservationMain findOneByStartAt(string $start_at) Return the first ReservationMain filtered by the start_at column
 * @method     ReservationMain findOneByEndAt(string $end_at) Return the first ReservationMain filtered by the end_at column
 * @method     ReservationMain findOneBySubscribeFrom(string $subscribe_from) Return the first ReservationMain filtered by the subscribe_from column
 * @method     ReservationMain findOneBySubscribeUntil(string $subscribe_until) Return the first ReservationMain filtered by the subscribe_until column
 * @method     ReservationMain findOneBySubscribers(int $subscribers) Return the first ReservationMain filtered by the subscribers column
 * @method     ReservationMain findOneByNotes(string $notes) Return the first ReservationMain filtered by the notes column
 * @method     ReservationMain findOneByTimepicker(int $timepicker) Return the first ReservationMain filtered by the timepicker column
 * @method     ReservationMain findOneByTimepickerMin(int $timepicker_min) Return the first ReservationMain filtered by the timepicker_min column
 * @method     ReservationMain findOneByTimepickerMax(int $timepicker_max) Return the first ReservationMain filtered by the timepicker_max column
 *
 * @method     array findById(int $id) Return ReservationMain objects filtered by the id column
 * @method     array findBySubid(int $subid) Return ReservationMain objects filtered by the subid column
 * @method     array findByItemId(int $item_id) Return ReservationMain objects filtered by the item_id column
 * @method     array findByAutoAccept(int $auto_accept) Return ReservationMain objects filtered by the auto_accept column
 * @method     array findByMaxUsers(int $max_users) Return ReservationMain objects filtered by the max_users column
 * @method     array findByStartAt(string $start_at) Return ReservationMain objects filtered by the start_at column
 * @method     array findByEndAt(string $end_at) Return ReservationMain objects filtered by the end_at column
 * @method     array findBySubscribeFrom(string $subscribe_from) Return ReservationMain objects filtered by the subscribe_from column
 * @method     array findBySubscribeUntil(string $subscribe_until) Return ReservationMain objects filtered by the subscribe_until column
 * @method     array findBySubscribers(int $subscribers) Return ReservationMain objects filtered by the subscribers column
 * @method     array findByNotes(string $notes) Return ReservationMain objects filtered by the notes column
 * @method     array findByTimepicker(int $timepicker) Return ReservationMain objects filtered by the timepicker column
 * @method     array findByTimepickerMin(int $timepicker_min) Return ReservationMain objects filtered by the timepicker_min column
 * @method     array findByTimepickerMax(int $timepicker_max) Return ReservationMain objects filtered by the timepicker_max column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationMainQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationMainQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationMain', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationMainQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationMainQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationMainQuery) {
			return $criteria;
		}
		$query = new ReservationMainQuery();
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
	 * @return    ReservationMain|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationMainPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReservationMainPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReservationMainPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationMainPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the subid column
	 * 
	 * @param     int|array $subid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterBySubid($subid = null, $comparison = null)
	{
		if (is_array($subid)) {
			$useMinMax = false;
			if (isset($subid['min'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBID, $subid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subid['max'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBID, $subid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::SUBID, $subid, $comparison);
	}

	/**
	 * Filter the query on the item_id column
	 * 
	 * @param     int|array $itemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByItemId($itemId = null, $comparison = null)
	{
		if (is_array($itemId)) {
			$useMinMax = false;
			if (isset($itemId['min'])) {
				$this->addUsingAlias(ReservationMainPeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($itemId['max'])) {
				$this->addUsingAlias(ReservationMainPeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::ITEM_ID, $itemId, $comparison);
	}

	/**
	 * Filter the query on the auto_accept column
	 * 
	 * @param     int|array $autoAccept The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByAutoAccept($autoAccept = null, $comparison = null)
	{
		if (is_array($autoAccept)) {
			$useMinMax = false;
			if (isset($autoAccept['min'])) {
				$this->addUsingAlias(ReservationMainPeer::AUTO_ACCEPT, $autoAccept['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($autoAccept['max'])) {
				$this->addUsingAlias(ReservationMainPeer::AUTO_ACCEPT, $autoAccept['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::AUTO_ACCEPT, $autoAccept, $comparison);
	}

	/**
	 * Filter the query on the max_users column
	 * 
	 * @param     int|array $maxUsers The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByMaxUsers($maxUsers = null, $comparison = null)
	{
		if (is_array($maxUsers)) {
			$useMinMax = false;
			if (isset($maxUsers['min'])) {
				$this->addUsingAlias(ReservationMainPeer::MAX_USERS, $maxUsers['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxUsers['max'])) {
				$this->addUsingAlias(ReservationMainPeer::MAX_USERS, $maxUsers['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::MAX_USERS, $maxUsers, $comparison);
	}

	/**
	 * Filter the query on the start_at column
	 * 
	 * @param     string|array $startAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByStartAt($startAt = null, $comparison = null)
	{
		if (is_array($startAt)) {
			$useMinMax = false;
			if (isset($startAt['min'])) {
				$this->addUsingAlias(ReservationMainPeer::START_AT, $startAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startAt['max'])) {
				$this->addUsingAlias(ReservationMainPeer::START_AT, $startAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::START_AT, $startAt, $comparison);
	}

	/**
	 * Filter the query on the end_at column
	 * 
	 * @param     string|array $endAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByEndAt($endAt = null, $comparison = null)
	{
		if (is_array($endAt)) {
			$useMinMax = false;
			if (isset($endAt['min'])) {
				$this->addUsingAlias(ReservationMainPeer::END_AT, $endAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endAt['max'])) {
				$this->addUsingAlias(ReservationMainPeer::END_AT, $endAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::END_AT, $endAt, $comparison);
	}

	/**
	 * Filter the query on the subscribe_from column
	 * 
	 * @param     string|array $subscribeFrom The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterBySubscribeFrom($subscribeFrom = null, $comparison = null)
	{
		if (is_array($subscribeFrom)) {
			$useMinMax = false;
			if (isset($subscribeFrom['min'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_FROM, $subscribeFrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subscribeFrom['max'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_FROM, $subscribeFrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_FROM, $subscribeFrom, $comparison);
	}

	/**
	 * Filter the query on the subscribe_until column
	 * 
	 * @param     string|array $subscribeUntil The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterBySubscribeUntil($subscribeUntil = null, $comparison = null)
	{
		if (is_array($subscribeUntil)) {
			$useMinMax = false;
			if (isset($subscribeUntil['min'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_UNTIL, $subscribeUntil['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subscribeUntil['max'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_UNTIL, $subscribeUntil['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::SUBSCRIBE_UNTIL, $subscribeUntil, $comparison);
	}

	/**
	 * Filter the query on the subscribers column
	 * 
	 * @param     int|array $subscribers The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterBySubscribers($subscribers = null, $comparison = null)
	{
		if (is_array($subscribers)) {
			$useMinMax = false;
			if (isset($subscribers['min'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBERS, $subscribers['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subscribers['max'])) {
				$this->addUsingAlias(ReservationMainPeer::SUBSCRIBERS, $subscribers['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::SUBSCRIBERS, $subscribers, $comparison);
	}

	/**
	 * Filter the query on the notes column
	 * 
	 * @param     string $notes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByNotes($notes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notes)) {
				$notes = str_replace('*', '%', $notes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::NOTES, $notes, $comparison);
	}

	/**
	 * Filter the query on the timepicker column
	 * 
	 * @param     int|array $timepicker The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByTimepicker($timepicker = null, $comparison = null)
	{
		if (is_array($timepicker)) {
			$useMinMax = false;
			if (isset($timepicker['min'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER, $timepicker['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timepicker['max'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER, $timepicker['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::TIMEPICKER, $timepicker, $comparison);
	}

	/**
	 * Filter the query on the timepicker_min column
	 * 
	 * @param     int|array $timepickerMin The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByTimepickerMin($timepickerMin = null, $comparison = null)
	{
		if (is_array($timepickerMin)) {
			$useMinMax = false;
			if (isset($timepickerMin['min'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MIN, $timepickerMin['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timepickerMin['max'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MIN, $timepickerMin['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MIN, $timepickerMin, $comparison);
	}

	/**
	 * Filter the query on the timepicker_max column
	 * 
	 * @param     int|array $timepickerMax The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function filterByTimepickerMax($timepickerMax = null, $comparison = null)
	{
		if (is_array($timepickerMax)) {
			$useMinMax = false;
			if (isset($timepickerMax['min'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MAX, $timepickerMax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timepickerMax['max'])) {
				$this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MAX, $timepickerMax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationMainPeer::TIMEPICKER_MAX, $timepickerMax, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationMain $reservationMain Object to remove from the list of results
	 *
	 * @return    ReservationMainQuery The current query, for fluid interface
	 */
	public function prune($reservationMain = null)
	{
		if ($reservationMain) {
			$this->addUsingAlias(ReservationMainPeer::ID, $reservationMain->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReservationMainQuery
