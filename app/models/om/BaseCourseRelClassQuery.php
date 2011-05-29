<?php


/**
 * Base class that represents a query for the 'course_rel_class' table.
 *
 * 
 *
 * @method     CourseRelClassQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     CourseRelClassQuery orderByClassId($order = Criteria::ASC) Order by the class_id column
 *
 * @method     CourseRelClassQuery groupByCourseCode() Group by the course_code column
 * @method     CourseRelClassQuery groupByClassId() Group by the class_id column
 *
 * @method     CourseRelClassQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseRelClassQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseRelClassQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseRelClass findOne(PropelPDO $con = null) Return the first CourseRelClass matching the query
 * @method     CourseRelClass findOneOrCreate(PropelPDO $con = null) Return the first CourseRelClass matching the query, or a new CourseRelClass object populated from the query conditions when no match is found
 *
 * @method     CourseRelClass findOneByCourseCode(string $course_code) Return the first CourseRelClass filtered by the course_code column
 * @method     CourseRelClass findOneByClassId(int $class_id) Return the first CourseRelClass filtered by the class_id column
 *
 * @method     array findByCourseCode(string $course_code) Return CourseRelClass objects filtered by the course_code column
 * @method     array findByClassId(int $class_id) Return CourseRelClass objects filtered by the class_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseRelClassQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseRelClassQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseRelClass', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseRelClassQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseRelClassQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseRelClassQuery) {
			return $criteria;
		}
		$query = new CourseRelClassQuery();
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
	 * @param     array[$course_code, $class_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    CourseRelClass|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseRelClassPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseRelClassQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(CourseRelClassPeer::COURSE_CODE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(CourseRelClassPeer::CLASS_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseRelClassQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(CourseRelClassPeer::COURSE_CODE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(CourseRelClassPeer::CLASS_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelClassQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseRelClassPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the class_id column
	 * 
	 * @param     int|array $classId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelClassQuery The current query, for fluid interface
	 */
	public function filterByClassId($classId = null, $comparison = null)
	{
		if (is_array($classId)) {
			$useMinMax = false;
			if (isset($classId['min'])) {
				$this->addUsingAlias(CourseRelClassPeer::CLASS_ID, $classId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($classId['max'])) {
				$this->addUsingAlias(CourseRelClassPeer::CLASS_ID, $classId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelClassPeer::CLASS_ID, $classId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseRelClass $courseRelClass Object to remove from the list of results
	 *
	 * @return    CourseRelClassQuery The current query, for fluid interface
	 */
	public function prune($courseRelClass = null)
	{
		if ($courseRelClass) {
			$this->addCond('pruneCond0', $this->getAliasedColName(CourseRelClassPeer::COURSE_CODE), $courseRelClass->getCourseCode(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(CourseRelClassPeer::CLASS_ID), $courseRelClass->getClassId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseCourseRelClassQuery
