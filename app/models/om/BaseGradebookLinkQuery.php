<?php


/**
 * Base class that represents a query for the 'gradebook_link' table.
 *
 * 
 *
 * @method     GradebookLinkQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookLinkQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     GradebookLinkQuery orderByRefId($order = Criteria::ASC) Order by the ref_id column
 * @method     GradebookLinkQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookLinkQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     GradebookLinkQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     GradebookLinkQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     GradebookLinkQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     GradebookLinkQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 *
 * @method     GradebookLinkQuery groupById() Group by the id column
 * @method     GradebookLinkQuery groupByType() Group by the type column
 * @method     GradebookLinkQuery groupByRefId() Group by the ref_id column
 * @method     GradebookLinkQuery groupByUserId() Group by the user_id column
 * @method     GradebookLinkQuery groupByCourseCode() Group by the course_code column
 * @method     GradebookLinkQuery groupByCategoryId() Group by the category_id column
 * @method     GradebookLinkQuery groupByDate() Group by the date column
 * @method     GradebookLinkQuery groupByWeight() Group by the weight column
 * @method     GradebookLinkQuery groupByVisible() Group by the visible column
 *
 * @method     GradebookLinkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookLinkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookLinkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookLink findOne(PropelPDO $con = null) Return the first GradebookLink matching the query
 * @method     GradebookLink findOneOrCreate(PropelPDO $con = null) Return the first GradebookLink matching the query, or a new GradebookLink object populated from the query conditions when no match is found
 *
 * @method     GradebookLink findOneById(int $id) Return the first GradebookLink filtered by the id column
 * @method     GradebookLink findOneByType(int $type) Return the first GradebookLink filtered by the type column
 * @method     GradebookLink findOneByRefId(int $ref_id) Return the first GradebookLink filtered by the ref_id column
 * @method     GradebookLink findOneByUserId(int $user_id) Return the first GradebookLink filtered by the user_id column
 * @method     GradebookLink findOneByCourseCode(string $course_code) Return the first GradebookLink filtered by the course_code column
 * @method     GradebookLink findOneByCategoryId(int $category_id) Return the first GradebookLink filtered by the category_id column
 * @method     GradebookLink findOneByDate(int $date) Return the first GradebookLink filtered by the date column
 * @method     GradebookLink findOneByWeight(int $weight) Return the first GradebookLink filtered by the weight column
 * @method     GradebookLink findOneByVisible(int $visible) Return the first GradebookLink filtered by the visible column
 *
 * @method     array findById(int $id) Return GradebookLink objects filtered by the id column
 * @method     array findByType(int $type) Return GradebookLink objects filtered by the type column
 * @method     array findByRefId(int $ref_id) Return GradebookLink objects filtered by the ref_id column
 * @method     array findByUserId(int $user_id) Return GradebookLink objects filtered by the user_id column
 * @method     array findByCourseCode(string $course_code) Return GradebookLink objects filtered by the course_code column
 * @method     array findByCategoryId(int $category_id) Return GradebookLink objects filtered by the category_id column
 * @method     array findByDate(int $date) Return GradebookLink objects filtered by the date column
 * @method     array findByWeight(int $weight) Return GradebookLink objects filtered by the weight column
 * @method     array findByVisible(int $visible) Return GradebookLink objects filtered by the visible column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookLinkQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookLinkQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookLink', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookLinkQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookLinkQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookLinkQuery) {
			return $criteria;
		}
		$query = new GradebookLinkQuery();
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
	 * @return    GradebookLink|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookLinkPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookLinkPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookLinkPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookLinkPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     int|array $type The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_array($type)) {
			$useMinMax = false;
			if (isset($type['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($type['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the ref_id column
	 * 
	 * @param     int|array $refId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByRefId($refId = null, $comparison = null)
	{
		if (is_array($refId)) {
			$useMinMax = false;
			if (isset($refId['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::REF_ID, $refId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refId['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::REF_ID, $refId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::REF_ID, $refId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookLinkPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     int|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 * 
	 * @param     int|array $weight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * @param     int|array $visible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (is_array($visible)) {
			$useMinMax = false;
			if (isset($visible['min'])) {
				$this->addUsingAlias(GradebookLinkPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visible['max'])) {
				$this->addUsingAlias(GradebookLinkPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkPeer::VISIBLE, $visible, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookLink $gradebookLink Object to remove from the list of results
	 *
	 * @return    GradebookLinkQuery The current query, for fluid interface
	 */
	public function prune($gradebookLink = null)
	{
		if ($gradebookLink) {
			$this->addUsingAlias(GradebookLinkPeer::ID, $gradebookLink->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookLinkQuery
