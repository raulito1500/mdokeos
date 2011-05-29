<?php


/**
 * Base class that represents a query for the 'reservation_category_rights' table.
 *
 * 
 *
 * @method     ReservationCategoryRightsQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     ReservationCategoryRightsQuery orderByClassId($order = Criteria::ASC) Order by the class_id column
 * @method     ReservationCategoryRightsQuery orderByMItems($order = Criteria::ASC) Order by the m_items column
 *
 * @method     ReservationCategoryRightsQuery groupByCategoryId() Group by the category_id column
 * @method     ReservationCategoryRightsQuery groupByClassId() Group by the class_id column
 * @method     ReservationCategoryRightsQuery groupByMItems() Group by the m_items column
 *
 * @method     ReservationCategoryRightsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationCategoryRightsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationCategoryRightsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationCategoryRights findOne(PropelPDO $con = null) Return the first ReservationCategoryRights matching the query
 * @method     ReservationCategoryRights findOneOrCreate(PropelPDO $con = null) Return the first ReservationCategoryRights matching the query, or a new ReservationCategoryRights object populated from the query conditions when no match is found
 *
 * @method     ReservationCategoryRights findOneByCategoryId(int $category_id) Return the first ReservationCategoryRights filtered by the category_id column
 * @method     ReservationCategoryRights findOneByClassId(int $class_id) Return the first ReservationCategoryRights filtered by the class_id column
 * @method     ReservationCategoryRights findOneByMItems(int $m_items) Return the first ReservationCategoryRights filtered by the m_items column
 *
 * @method     array findByCategoryId(int $category_id) Return ReservationCategoryRights objects filtered by the category_id column
 * @method     array findByClassId(int $class_id) Return ReservationCategoryRights objects filtered by the class_id column
 * @method     array findByMItems(int $m_items) Return ReservationCategoryRights objects filtered by the m_items column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationCategoryRightsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationCategoryRightsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationCategoryRights', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationCategoryRightsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationCategoryRightsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationCategoryRightsQuery) {
			return $criteria;
		}
		$query = new ReservationCategoryRightsQuery();
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
	 * @param     array[$category_id, $class_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    ReservationCategoryRights|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationCategoryRightsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(ReservationCategoryRightsPeer::CATEGORY_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(ReservationCategoryRightsPeer::CLASS_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(ReservationCategoryRightsPeer::CATEGORY_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(ReservationCategoryRightsPeer::CLASS_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationCategoryRightsPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the class_id column
	 * 
	 * @param     int|array $classId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function filterByClassId($classId = null, $comparison = null)
	{
		if (is_array($classId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationCategoryRightsPeer::CLASS_ID, $classId, $comparison);
	}

	/**
	 * Filter the query on the m_items column
	 * 
	 * @param     int|array $mItems The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function filterByMItems($mItems = null, $comparison = null)
	{
		if (is_array($mItems)) {
			$useMinMax = false;
			if (isset($mItems['min'])) {
				$this->addUsingAlias(ReservationCategoryRightsPeer::M_ITEMS, $mItems['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mItems['max'])) {
				$this->addUsingAlias(ReservationCategoryRightsPeer::M_ITEMS, $mItems['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationCategoryRightsPeer::M_ITEMS, $mItems, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationCategoryRights $reservationCategoryRights Object to remove from the list of results
	 *
	 * @return    ReservationCategoryRightsQuery The current query, for fluid interface
	 */
	public function prune($reservationCategoryRights = null)
	{
		if ($reservationCategoryRights) {
			$this->addCond('pruneCond0', $this->getAliasedColName(ReservationCategoryRightsPeer::CATEGORY_ID), $reservationCategoryRights->getCategoryId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(ReservationCategoryRightsPeer::CLASS_ID), $reservationCategoryRights->getClassId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseReservationCategoryRightsQuery
