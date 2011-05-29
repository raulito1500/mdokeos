<?php


/**
 * Base class that represents a query for the 'reservation_item_rights' table.
 *
 * 
 *
 * @method     ReservationItemRightsQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ReservationItemRightsQuery orderByClassId($order = Criteria::ASC) Order by the class_id column
 * @method     ReservationItemRightsQuery orderByEditRight($order = Criteria::ASC) Order by the edit_right column
 * @method     ReservationItemRightsQuery orderByDeleteRight($order = Criteria::ASC) Order by the delete_right column
 * @method     ReservationItemRightsQuery orderByMReservation($order = Criteria::ASC) Order by the m_reservation column
 * @method     ReservationItemRightsQuery orderByViewRight($order = Criteria::ASC) Order by the view_right column
 *
 * @method     ReservationItemRightsQuery groupByItemId() Group by the item_id column
 * @method     ReservationItemRightsQuery groupByClassId() Group by the class_id column
 * @method     ReservationItemRightsQuery groupByEditRight() Group by the edit_right column
 * @method     ReservationItemRightsQuery groupByDeleteRight() Group by the delete_right column
 * @method     ReservationItemRightsQuery groupByMReservation() Group by the m_reservation column
 * @method     ReservationItemRightsQuery groupByViewRight() Group by the view_right column
 *
 * @method     ReservationItemRightsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationItemRightsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationItemRightsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationItemRights findOne(PropelPDO $con = null) Return the first ReservationItemRights matching the query
 * @method     ReservationItemRights findOneOrCreate(PropelPDO $con = null) Return the first ReservationItemRights matching the query, or a new ReservationItemRights object populated from the query conditions when no match is found
 *
 * @method     ReservationItemRights findOneByItemId(int $item_id) Return the first ReservationItemRights filtered by the item_id column
 * @method     ReservationItemRights findOneByClassId(int $class_id) Return the first ReservationItemRights filtered by the class_id column
 * @method     ReservationItemRights findOneByEditRight(int $edit_right) Return the first ReservationItemRights filtered by the edit_right column
 * @method     ReservationItemRights findOneByDeleteRight(int $delete_right) Return the first ReservationItemRights filtered by the delete_right column
 * @method     ReservationItemRights findOneByMReservation(int $m_reservation) Return the first ReservationItemRights filtered by the m_reservation column
 * @method     ReservationItemRights findOneByViewRight(int $view_right) Return the first ReservationItemRights filtered by the view_right column
 *
 * @method     array findByItemId(int $item_id) Return ReservationItemRights objects filtered by the item_id column
 * @method     array findByClassId(int $class_id) Return ReservationItemRights objects filtered by the class_id column
 * @method     array findByEditRight(int $edit_right) Return ReservationItemRights objects filtered by the edit_right column
 * @method     array findByDeleteRight(int $delete_right) Return ReservationItemRights objects filtered by the delete_right column
 * @method     array findByMReservation(int $m_reservation) Return ReservationItemRights objects filtered by the m_reservation column
 * @method     array findByViewRight(int $view_right) Return ReservationItemRights objects filtered by the view_right column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationItemRightsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationItemRightsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationItemRights', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationItemRightsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationItemRightsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationItemRightsQuery) {
			return $criteria;
		}
		$query = new ReservationItemRightsQuery();
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
	 * @param     array[$item_id, $class_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    ReservationItemRights|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationItemRightsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(ReservationItemRightsPeer::ITEM_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(ReservationItemRightsPeer::CLASS_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(ReservationItemRightsPeer::ITEM_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(ReservationItemRightsPeer::CLASS_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the item_id column
	 * 
	 * @param     int|array $itemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByItemId($itemId = null, $comparison = null)
	{
		if (is_array($itemId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::ITEM_ID, $itemId, $comparison);
	}

	/**
	 * Filter the query on the class_id column
	 * 
	 * @param     int|array $classId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByClassId($classId = null, $comparison = null)
	{
		if (is_array($classId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::CLASS_ID, $classId, $comparison);
	}

	/**
	 * Filter the query on the edit_right column
	 * 
	 * @param     int|array $editRight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByEditRight($editRight = null, $comparison = null)
	{
		if (is_array($editRight)) {
			$useMinMax = false;
			if (isset($editRight['min'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::EDIT_RIGHT, $editRight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($editRight['max'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::EDIT_RIGHT, $editRight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::EDIT_RIGHT, $editRight, $comparison);
	}

	/**
	 * Filter the query on the delete_right column
	 * 
	 * @param     int|array $deleteRight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByDeleteRight($deleteRight = null, $comparison = null)
	{
		if (is_array($deleteRight)) {
			$useMinMax = false;
			if (isset($deleteRight['min'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::DELETE_RIGHT, $deleteRight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteRight['max'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::DELETE_RIGHT, $deleteRight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::DELETE_RIGHT, $deleteRight, $comparison);
	}

	/**
	 * Filter the query on the m_reservation column
	 * 
	 * @param     int|array $mReservation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByMReservation($mReservation = null, $comparison = null)
	{
		if (is_array($mReservation)) {
			$useMinMax = false;
			if (isset($mReservation['min'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::M_RESERVATION, $mReservation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mReservation['max'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::M_RESERVATION, $mReservation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::M_RESERVATION, $mReservation, $comparison);
	}

	/**
	 * Filter the query on the view_right column
	 * 
	 * @param     int|array $viewRight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function filterByViewRight($viewRight = null, $comparison = null)
	{
		if (is_array($viewRight)) {
			$useMinMax = false;
			if (isset($viewRight['min'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::VIEW_RIGHT, $viewRight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($viewRight['max'])) {
				$this->addUsingAlias(ReservationItemRightsPeer::VIEW_RIGHT, $viewRight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemRightsPeer::VIEW_RIGHT, $viewRight, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationItemRights $reservationItemRights Object to remove from the list of results
	 *
	 * @return    ReservationItemRightsQuery The current query, for fluid interface
	 */
	public function prune($reservationItemRights = null)
	{
		if ($reservationItemRights) {
			$this->addCond('pruneCond0', $this->getAliasedColName(ReservationItemRightsPeer::ITEM_ID), $reservationItemRights->getItemId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(ReservationItemRightsPeer::CLASS_ID), $reservationItemRights->getClassId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseReservationItemRightsQuery
