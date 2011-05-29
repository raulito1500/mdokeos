<?php


/**
 * Base class that represents a query for the 'reservation_subscription' table.
 *
 * 
 *
 * @method     ReservationSubscriptionQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 * @method     ReservationSubscriptionQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ReservationSubscriptionQuery orderByReservationId($order = Criteria::ASC) Order by the reservation_id column
 * @method     ReservationSubscriptionQuery orderByAccepted($order = Criteria::ASC) Order by the accepted column
 * @method     ReservationSubscriptionQuery orderByStartAt($order = Criteria::ASC) Order by the start_at column
 * @method     ReservationSubscriptionQuery orderByEndAt($order = Criteria::ASC) Order by the end_at column
 *
 * @method     ReservationSubscriptionQuery groupByDummy() Group by the dummy column
 * @method     ReservationSubscriptionQuery groupByUserId() Group by the user_id column
 * @method     ReservationSubscriptionQuery groupByReservationId() Group by the reservation_id column
 * @method     ReservationSubscriptionQuery groupByAccepted() Group by the accepted column
 * @method     ReservationSubscriptionQuery groupByStartAt() Group by the start_at column
 * @method     ReservationSubscriptionQuery groupByEndAt() Group by the end_at column
 *
 * @method     ReservationSubscriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationSubscriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationSubscriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationSubscription findOne(PropelPDO $con = null) Return the first ReservationSubscription matching the query
 * @method     ReservationSubscription findOneOrCreate(PropelPDO $con = null) Return the first ReservationSubscription matching the query, or a new ReservationSubscription object populated from the query conditions when no match is found
 *
 * @method     ReservationSubscription findOneByDummy(int $dummy) Return the first ReservationSubscription filtered by the dummy column
 * @method     ReservationSubscription findOneByUserId(int $user_id) Return the first ReservationSubscription filtered by the user_id column
 * @method     ReservationSubscription findOneByReservationId(int $reservation_id) Return the first ReservationSubscription filtered by the reservation_id column
 * @method     ReservationSubscription findOneByAccepted(int $accepted) Return the first ReservationSubscription filtered by the accepted column
 * @method     ReservationSubscription findOneByStartAt(string $start_at) Return the first ReservationSubscription filtered by the start_at column
 * @method     ReservationSubscription findOneByEndAt(string $end_at) Return the first ReservationSubscription filtered by the end_at column
 *
 * @method     array findByDummy(int $dummy) Return ReservationSubscription objects filtered by the dummy column
 * @method     array findByUserId(int $user_id) Return ReservationSubscription objects filtered by the user_id column
 * @method     array findByReservationId(int $reservation_id) Return ReservationSubscription objects filtered by the reservation_id column
 * @method     array findByAccepted(int $accepted) Return ReservationSubscription objects filtered by the accepted column
 * @method     array findByStartAt(string $start_at) Return ReservationSubscription objects filtered by the start_at column
 * @method     array findByEndAt(string $end_at) Return ReservationSubscription objects filtered by the end_at column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationSubscriptionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationSubscriptionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationSubscription', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationSubscriptionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationSubscriptionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationSubscriptionQuery) {
			return $criteria;
		}
		$query = new ReservationSubscriptionQuery();
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
	 * @return    ReservationSubscription|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationSubscriptionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReservationSubscriptionPeer::DUMMY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReservationSubscriptionPeer::DUMMY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the dummy column
	 * 
	 * @param     int|array $dummy The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByDummy($dummy = null, $comparison = null)
	{
		if (is_array($dummy) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::DUMMY, $dummy, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the reservation_id column
	 * 
	 * @param     int|array $reservationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByReservationId($reservationId = null, $comparison = null)
	{
		if (is_array($reservationId)) {
			$useMinMax = false;
			if (isset($reservationId['min'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::RESERVATION_ID, $reservationId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reservationId['max'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::RESERVATION_ID, $reservationId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::RESERVATION_ID, $reservationId, $comparison);
	}

	/**
	 * Filter the query on the accepted column
	 * 
	 * @param     int|array $accepted The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByAccepted($accepted = null, $comparison = null)
	{
		if (is_array($accepted)) {
			$useMinMax = false;
			if (isset($accepted['min'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::ACCEPTED, $accepted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accepted['max'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::ACCEPTED, $accepted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::ACCEPTED, $accepted, $comparison);
	}

	/**
	 * Filter the query on the start_at column
	 * 
	 * @param     string|array $startAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByStartAt($startAt = null, $comparison = null)
	{
		if (is_array($startAt)) {
			$useMinMax = false;
			if (isset($startAt['min'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::START_AT, $startAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startAt['max'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::START_AT, $startAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::START_AT, $startAt, $comparison);
	}

	/**
	 * Filter the query on the end_at column
	 * 
	 * @param     string|array $endAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function filterByEndAt($endAt = null, $comparison = null)
	{
		if (is_array($endAt)) {
			$useMinMax = false;
			if (isset($endAt['min'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::END_AT, $endAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endAt['max'])) {
				$this->addUsingAlias(ReservationSubscriptionPeer::END_AT, $endAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationSubscriptionPeer::END_AT, $endAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationSubscription $reservationSubscription Object to remove from the list of results
	 *
	 * @return    ReservationSubscriptionQuery The current query, for fluid interface
	 */
	public function prune($reservationSubscription = null)
	{
		if ($reservationSubscription) {
			$this->addUsingAlias(ReservationSubscriptionPeer::DUMMY, $reservationSubscription->getDummy(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReservationSubscriptionQuery
