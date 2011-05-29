<?php


/**
 * Base class that represents a query for the 'course_rel_user' table.
 *
 * 
 *
 * @method     CourseRelUserQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     CourseRelUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     CourseRelUserQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     CourseRelUserQuery orderByRole($order = Criteria::ASC) Order by the role column
 * @method     CourseRelUserQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     CourseRelUserQuery orderByTutorId($order = Criteria::ASC) Order by the tutor_id column
 * @method     CourseRelUserQuery orderBySort($order = Criteria::ASC) Order by the sort column
 * @method     CourseRelUserQuery orderByUserCourseCat($order = Criteria::ASC) Order by the user_course_cat column
 *
 * @method     CourseRelUserQuery groupByCourseCode() Group by the course_code column
 * @method     CourseRelUserQuery groupByUserId() Group by the user_id column
 * @method     CourseRelUserQuery groupByStatus() Group by the status column
 * @method     CourseRelUserQuery groupByRole() Group by the role column
 * @method     CourseRelUserQuery groupByGroupId() Group by the group_id column
 * @method     CourseRelUserQuery groupByTutorId() Group by the tutor_id column
 * @method     CourseRelUserQuery groupBySort() Group by the sort column
 * @method     CourseRelUserQuery groupByUserCourseCat() Group by the user_course_cat column
 *
 * @method     CourseRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseRelUser findOne(PropelPDO $con = null) Return the first CourseRelUser matching the query
 * @method     CourseRelUser findOneOrCreate(PropelPDO $con = null) Return the first CourseRelUser matching the query, or a new CourseRelUser object populated from the query conditions when no match is found
 *
 * @method     CourseRelUser findOneByCourseCode(string $course_code) Return the first CourseRelUser filtered by the course_code column
 * @method     CourseRelUser findOneByUserId(int $user_id) Return the first CourseRelUser filtered by the user_id column
 * @method     CourseRelUser findOneByStatus(int $status) Return the first CourseRelUser filtered by the status column
 * @method     CourseRelUser findOneByRole(string $role) Return the first CourseRelUser filtered by the role column
 * @method     CourseRelUser findOneByGroupId(int $group_id) Return the first CourseRelUser filtered by the group_id column
 * @method     CourseRelUser findOneByTutorId(int $tutor_id) Return the first CourseRelUser filtered by the tutor_id column
 * @method     CourseRelUser findOneBySort(int $sort) Return the first CourseRelUser filtered by the sort column
 * @method     CourseRelUser findOneByUserCourseCat(int $user_course_cat) Return the first CourseRelUser filtered by the user_course_cat column
 *
 * @method     array findByCourseCode(string $course_code) Return CourseRelUser objects filtered by the course_code column
 * @method     array findByUserId(int $user_id) Return CourseRelUser objects filtered by the user_id column
 * @method     array findByStatus(int $status) Return CourseRelUser objects filtered by the status column
 * @method     array findByRole(string $role) Return CourseRelUser objects filtered by the role column
 * @method     array findByGroupId(int $group_id) Return CourseRelUser objects filtered by the group_id column
 * @method     array findByTutorId(int $tutor_id) Return CourseRelUser objects filtered by the tutor_id column
 * @method     array findBySort(int $sort) Return CourseRelUser objects filtered by the sort column
 * @method     array findByUserCourseCat(int $user_course_cat) Return CourseRelUser objects filtered by the user_course_cat column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseRelUserQuery) {
			return $criteria;
		}
		$query = new CourseRelUserQuery();
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
	 * @param     array[$course_code, $user_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    CourseRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseRelUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(CourseRelUserPeer::COURSE_CODE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(CourseRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(CourseRelUserPeer::COURSE_CODE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(CourseRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
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
	 * @return    CourseRelUserQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseRelUserPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CourseRelUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     int|array $status The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (is_array($status)) {
			$useMinMax = false;
			if (isset($status['min'])) {
				$this->addUsingAlias(CourseRelUserPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($status['max'])) {
				$this->addUsingAlias(CourseRelUserPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::STATUS, $status, $comparison);
	}

	/**
	 * Filter the query on the role column
	 * 
	 * @param     string $role The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByRole($role = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($role)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $role)) {
				$role = str_replace('*', '%', $role);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::ROLE, $role, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(CourseRelUserPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(CourseRelUserPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Filter the query on the tutor_id column
	 * 
	 * @param     int|array $tutorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByTutorId($tutorId = null, $comparison = null)
	{
		if (is_array($tutorId)) {
			$useMinMax = false;
			if (isset($tutorId['min'])) {
				$this->addUsingAlias(CourseRelUserPeer::TUTOR_ID, $tutorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tutorId['max'])) {
				$this->addUsingAlias(CourseRelUserPeer::TUTOR_ID, $tutorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::TUTOR_ID, $tutorId, $comparison);
	}

	/**
	 * Filter the query on the sort column
	 * 
	 * @param     int|array $sort The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterBySort($sort = null, $comparison = null)
	{
		if (is_array($sort)) {
			$useMinMax = false;
			if (isset($sort['min'])) {
				$this->addUsingAlias(CourseRelUserPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sort['max'])) {
				$this->addUsingAlias(CourseRelUserPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::SORT, $sort, $comparison);
	}

	/**
	 * Filter the query on the user_course_cat column
	 * 
	 * @param     int|array $userCourseCat The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByUserCourseCat($userCourseCat = null, $comparison = null)
	{
		if (is_array($userCourseCat)) {
			$useMinMax = false;
			if (isset($userCourseCat['min'])) {
				$this->addUsingAlias(CourseRelUserPeer::USER_COURSE_CAT, $userCourseCat['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userCourseCat['max'])) {
				$this->addUsingAlias(CourseRelUserPeer::USER_COURSE_CAT, $userCourseCat['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseRelUserPeer::USER_COURSE_CAT, $userCourseCat, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseRelUser $courseRelUser Object to remove from the list of results
	 *
	 * @return    CourseRelUserQuery The current query, for fluid interface
	 */
	public function prune($courseRelUser = null)
	{
		if ($courseRelUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(CourseRelUserPeer::COURSE_CODE), $courseRelUser->getCourseCode(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(CourseRelUserPeer::USER_ID), $courseRelUser->getUserId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseCourseRelUserQuery
