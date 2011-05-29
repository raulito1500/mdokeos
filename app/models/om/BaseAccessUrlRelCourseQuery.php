<?php


/**
 * Base class that represents a query for the 'access_url_rel_course' table.
 *
 * 
 *
 * @method     AccessUrlRelCourseQuery orderByAccessUrlId($order = Criteria::ASC) Order by the access_url_id column
 * @method     AccessUrlRelCourseQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 *
 * @method     AccessUrlRelCourseQuery groupByAccessUrlId() Group by the access_url_id column
 * @method     AccessUrlRelCourseQuery groupByCourseCode() Group by the course_code column
 *
 * @method     AccessUrlRelCourseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AccessUrlRelCourseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AccessUrlRelCourseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AccessUrlRelCourse findOne(PropelPDO $con = null) Return the first AccessUrlRelCourse matching the query
 * @method     AccessUrlRelCourse findOneOrCreate(PropelPDO $con = null) Return the first AccessUrlRelCourse matching the query, or a new AccessUrlRelCourse object populated from the query conditions when no match is found
 *
 * @method     AccessUrlRelCourse findOneByAccessUrlId(int $access_url_id) Return the first AccessUrlRelCourse filtered by the access_url_id column
 * @method     AccessUrlRelCourse findOneByCourseCode(string $course_code) Return the first AccessUrlRelCourse filtered by the course_code column
 *
 * @method     array findByAccessUrlId(int $access_url_id) Return AccessUrlRelCourse objects filtered by the access_url_id column
 * @method     array findByCourseCode(string $course_code) Return AccessUrlRelCourse objects filtered by the course_code column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAccessUrlRelCourseQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAccessUrlRelCourseQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'AccessUrlRelCourse', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AccessUrlRelCourseQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AccessUrlRelCourseQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AccessUrlRelCourseQuery) {
			return $criteria;
		}
		$query = new AccessUrlRelCourseQuery();
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
	 * @param     array[$access_url_id, $course_code] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    AccessUrlRelCourse|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AccessUrlRelCoursePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AccessUrlRelCourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(AccessUrlRelCoursePeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(AccessUrlRelCoursePeer::COURSE_CODE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AccessUrlRelCourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(AccessUrlRelCoursePeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(AccessUrlRelCoursePeer::COURSE_CODE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the access_url_id column
	 * 
	 * @param     int|array $accessUrlId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlRelCourseQuery The current query, for fluid interface
	 */
	public function filterByAccessUrlId($accessUrlId = null, $comparison = null)
	{
		if (is_array($accessUrlId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlRelCoursePeer::ACCESS_URL_ID, $accessUrlId, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlRelCourseQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AccessUrlRelCoursePeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AccessUrlRelCourse $accessUrlRelCourse Object to remove from the list of results
	 *
	 * @return    AccessUrlRelCourseQuery The current query, for fluid interface
	 */
	public function prune($accessUrlRelCourse = null)
	{
		if ($accessUrlRelCourse) {
			$this->addCond('pruneCond0', $this->getAliasedColName(AccessUrlRelCoursePeer::ACCESS_URL_ID), $accessUrlRelCourse->getAccessUrlId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(AccessUrlRelCoursePeer::COURSE_CODE), $accessUrlRelCourse->getCourseCode(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseAccessUrlRelCourseQuery
