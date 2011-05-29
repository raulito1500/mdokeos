<?php


/**
 * Base class that represents a query for the 'session_rel_course' table.
 *
 * 
 *
 * @method     SessionRelCourseQuery orderByIdSession($order = Criteria::ASC) Order by the id_session column
 * @method     SessionRelCourseQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     SessionRelCourseQuery orderByIdCoach($order = Criteria::ASC) Order by the id_coach column
 * @method     SessionRelCourseQuery orderByNbrUsers($order = Criteria::ASC) Order by the nbr_users column
 *
 * @method     SessionRelCourseQuery groupByIdSession() Group by the id_session column
 * @method     SessionRelCourseQuery groupByCourseCode() Group by the course_code column
 * @method     SessionRelCourseQuery groupByIdCoach() Group by the id_coach column
 * @method     SessionRelCourseQuery groupByNbrUsers() Group by the nbr_users column
 *
 * @method     SessionRelCourseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionRelCourseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionRelCourseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionRelCourse findOne(PropelPDO $con = null) Return the first SessionRelCourse matching the query
 * @method     SessionRelCourse findOneOrCreate(PropelPDO $con = null) Return the first SessionRelCourse matching the query, or a new SessionRelCourse object populated from the query conditions when no match is found
 *
 * @method     SessionRelCourse findOneByIdSession(int $id_session) Return the first SessionRelCourse filtered by the id_session column
 * @method     SessionRelCourse findOneByCourseCode(string $course_code) Return the first SessionRelCourse filtered by the course_code column
 * @method     SessionRelCourse findOneByIdCoach(int $id_coach) Return the first SessionRelCourse filtered by the id_coach column
 * @method     SessionRelCourse findOneByNbrUsers(int $nbr_users) Return the first SessionRelCourse filtered by the nbr_users column
 *
 * @method     array findByIdSession(int $id_session) Return SessionRelCourse objects filtered by the id_session column
 * @method     array findByCourseCode(string $course_code) Return SessionRelCourse objects filtered by the course_code column
 * @method     array findByIdCoach(int $id_coach) Return SessionRelCourse objects filtered by the id_coach column
 * @method     array findByNbrUsers(int $nbr_users) Return SessionRelCourse objects filtered by the nbr_users column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionRelCourseQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionRelCourseQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SessionRelCourse', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionRelCourseQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionRelCourseQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionRelCourseQuery) {
			return $criteria;
		}
		$query = new SessionRelCourseQuery();
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
	 * @param     array[$id_session, $course_code] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    SessionRelCourse|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionRelCoursePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(SessionRelCoursePeer::ID_SESSION, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(SessionRelCoursePeer::COURSE_CODE, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(SessionRelCoursePeer::ID_SESSION, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(SessionRelCoursePeer::COURSE_CODE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id_session column
	 * 
	 * @param     int|array $idSession The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function filterByIdSession($idSession = null, $comparison = null)
	{
		if (is_array($idSession)) {
			$useMinMax = false;
			if (isset($idSession['min'])) {
				$this->addUsingAlias(SessionRelCoursePeer::ID_SESSION, $idSession['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSession['max'])) {
				$this->addUsingAlias(SessionRelCoursePeer::ID_SESSION, $idSession['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelCoursePeer::ID_SESSION, $idSession, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SessionRelCoursePeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the id_coach column
	 * 
	 * @param     int|array $idCoach The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function filterByIdCoach($idCoach = null, $comparison = null)
	{
		if (is_array($idCoach)) {
			$useMinMax = false;
			if (isset($idCoach['min'])) {
				$this->addUsingAlias(SessionRelCoursePeer::ID_COACH, $idCoach['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCoach['max'])) {
				$this->addUsingAlias(SessionRelCoursePeer::ID_COACH, $idCoach['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelCoursePeer::ID_COACH, $idCoach, $comparison);
	}

	/**
	 * Filter the query on the nbr_users column
	 * 
	 * @param     int|array $nbrUsers The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function filterByNbrUsers($nbrUsers = null, $comparison = null)
	{
		if (is_array($nbrUsers)) {
			$useMinMax = false;
			if (isset($nbrUsers['min'])) {
				$this->addUsingAlias(SessionRelCoursePeer::NBR_USERS, $nbrUsers['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbrUsers['max'])) {
				$this->addUsingAlias(SessionRelCoursePeer::NBR_USERS, $nbrUsers['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelCoursePeer::NBR_USERS, $nbrUsers, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SessionRelCourse $sessionRelCourse Object to remove from the list of results
	 *
	 * @return    SessionRelCourseQuery The current query, for fluid interface
	 */
	public function prune($sessionRelCourse = null)
	{
		if ($sessionRelCourse) {
			$this->addCond('pruneCond0', $this->getAliasedColName(SessionRelCoursePeer::ID_SESSION), $sessionRelCourse->getIdSession(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(SessionRelCoursePeer::COURSE_CODE), $sessionRelCourse->getCourseCode(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseSessionRelCourseQuery
