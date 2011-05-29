<?php


/**
 * Base class that represents a query for the 'reservation_category' table.
 *
 * 
 *
 * @method     ReservationCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReservationCategoryQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     ReservationCategoryQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ReservationCategoryQuery groupById() Group by the id column
 * @method     ReservationCategoryQuery groupByParentId() Group by the parent_id column
 * @method     ReservationCategoryQuery groupByName() Group by the name column
 *
 * @method     ReservationCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationCategory findOne(PropelPDO $con = null) Return the first ReservationCategory matching the query
 * @method     ReservationCategory findOneOrCreate(PropelPDO $con = null) Return the first ReservationCategory matching the query, or a new ReservationCategory object populated from the query conditions when no match is found
 *
 * @method     ReservationCategory findOneById(int $id) Return the first ReservationCategory filtered by the id column
 * @method     ReservationCategory findOneByParentId(int $parent_id) Return the first ReservationCategory filtered by the parent_id column
 * @method     ReservationCategory findOneByName(string $name) Return the first ReservationCategory filtered by the name column
 *
 * @method     array findById(int $id) Return ReservationCategory objects filtered by the id column
 * @method     array findByParentId(int $parent_id) Return ReservationCategory objects filtered by the parent_id column
 * @method     array findByName(string $name) Return ReservationCategory objects filtered by the name column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationCategoryQuery) {
			return $criteria;
		}
		$query = new ReservationCategoryQuery();
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
	 * @return    ReservationCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReservationCategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReservationCategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationCategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(ReservationCategoryPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(ReservationCategoryPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationCategoryPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReservationCategoryPeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationCategory $reservationCategory Object to remove from the list of results
	 *
	 * @return    ReservationCategoryQuery The current query, for fluid interface
	 */
	public function prune($reservationCategory = null)
	{
		if ($reservationCategory) {
			$this->addUsingAlias(ReservationCategoryPeer::ID, $reservationCategory->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReservationCategoryQuery
