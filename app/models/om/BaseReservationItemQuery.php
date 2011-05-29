<?php


/**
 * Base class that represents a query for the 'reservation_item' table.
 *
 * 
 *
 * @method     ReservationItemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ReservationItemQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     ReservationItemQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     ReservationItemQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ReservationItemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ReservationItemQuery orderByBlackout($order = Criteria::ASC) Order by the blackout column
 * @method     ReservationItemQuery orderByCreator($order = Criteria::ASC) Order by the creator column
 * @method     ReservationItemQuery orderByAlwaysAvailable($order = Criteria::ASC) Order by the always_available column
 *
 * @method     ReservationItemQuery groupById() Group by the id column
 * @method     ReservationItemQuery groupByCategoryId() Group by the category_id column
 * @method     ReservationItemQuery groupByCourseCode() Group by the course_code column
 * @method     ReservationItemQuery groupByName() Group by the name column
 * @method     ReservationItemQuery groupByDescription() Group by the description column
 * @method     ReservationItemQuery groupByBlackout() Group by the blackout column
 * @method     ReservationItemQuery groupByCreator() Group by the creator column
 * @method     ReservationItemQuery groupByAlwaysAvailable() Group by the always_available column
 *
 * @method     ReservationItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ReservationItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ReservationItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ReservationItem findOne(PropelPDO $con = null) Return the first ReservationItem matching the query
 * @method     ReservationItem findOneOrCreate(PropelPDO $con = null) Return the first ReservationItem matching the query, or a new ReservationItem object populated from the query conditions when no match is found
 *
 * @method     ReservationItem findOneById(int $id) Return the first ReservationItem filtered by the id column
 * @method     ReservationItem findOneByCategoryId(int $category_id) Return the first ReservationItem filtered by the category_id column
 * @method     ReservationItem findOneByCourseCode(string $course_code) Return the first ReservationItem filtered by the course_code column
 * @method     ReservationItem findOneByName(string $name) Return the first ReservationItem filtered by the name column
 * @method     ReservationItem findOneByDescription(string $description) Return the first ReservationItem filtered by the description column
 * @method     ReservationItem findOneByBlackout(int $blackout) Return the first ReservationItem filtered by the blackout column
 * @method     ReservationItem findOneByCreator(int $creator) Return the first ReservationItem filtered by the creator column
 * @method     ReservationItem findOneByAlwaysAvailable(int $always_available) Return the first ReservationItem filtered by the always_available column
 *
 * @method     array findById(int $id) Return ReservationItem objects filtered by the id column
 * @method     array findByCategoryId(int $category_id) Return ReservationItem objects filtered by the category_id column
 * @method     array findByCourseCode(string $course_code) Return ReservationItem objects filtered by the course_code column
 * @method     array findByName(string $name) Return ReservationItem objects filtered by the name column
 * @method     array findByDescription(string $description) Return ReservationItem objects filtered by the description column
 * @method     array findByBlackout(int $blackout) Return ReservationItem objects filtered by the blackout column
 * @method     array findByCreator(int $creator) Return ReservationItem objects filtered by the creator column
 * @method     array findByAlwaysAvailable(int $always_available) Return ReservationItem objects filtered by the always_available column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseReservationItemQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseReservationItemQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ReservationItem', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ReservationItemQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ReservationItemQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ReservationItemQuery) {
			return $criteria;
		}
		$query = new ReservationItemQuery();
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
	 * @return    ReservationItem|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ReservationItemPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ReservationItemPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ReservationItemPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ReservationItemPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(ReservationItemPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(ReservationItemPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByCourseCode($courseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseCode)) {
				$courseCode = str_replace('*', '%', $courseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ReservationItemPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the blackout column
	 * 
	 * @param     int|array $blackout The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByBlackout($blackout = null, $comparison = null)
	{
		if (is_array($blackout)) {
			$useMinMax = false;
			if (isset($blackout['min'])) {
				$this->addUsingAlias(ReservationItemPeer::BLACKOUT, $blackout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blackout['max'])) {
				$this->addUsingAlias(ReservationItemPeer::BLACKOUT, $blackout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::BLACKOUT, $blackout, $comparison);
	}

	/**
	 * Filter the query on the creator column
	 * 
	 * @param     int|array $creator The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByCreator($creator = null, $comparison = null)
	{
		if (is_array($creator)) {
			$useMinMax = false;
			if (isset($creator['min'])) {
				$this->addUsingAlias(ReservationItemPeer::CREATOR, $creator['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creator['max'])) {
				$this->addUsingAlias(ReservationItemPeer::CREATOR, $creator['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::CREATOR, $creator, $comparison);
	}

	/**
	 * Filter the query on the always_available column
	 * 
	 * @param     int|array $alwaysAvailable The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function filterByAlwaysAvailable($alwaysAvailable = null, $comparison = null)
	{
		if (is_array($alwaysAvailable)) {
			$useMinMax = false;
			if (isset($alwaysAvailable['min'])) {
				$this->addUsingAlias(ReservationItemPeer::ALWAYS_AVAILABLE, $alwaysAvailable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($alwaysAvailable['max'])) {
				$this->addUsingAlias(ReservationItemPeer::ALWAYS_AVAILABLE, $alwaysAvailable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ReservationItemPeer::ALWAYS_AVAILABLE, $alwaysAvailable, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ReservationItem $reservationItem Object to remove from the list of results
	 *
	 * @return    ReservationItemQuery The current query, for fluid interface
	 */
	public function prune($reservationItem = null)
	{
		if ($reservationItem) {
			$this->addUsingAlias(ReservationItemPeer::ID, $reservationItem->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseReservationItemQuery
