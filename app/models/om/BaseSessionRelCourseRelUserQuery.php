<?php


/**
 * Base class that represents a query for the 'session_rel_course_rel_user' table.
 *
 * 
 *
 * @method     SessionRelCourseRelUserQuery orderByIdSession($order = Criteria::ASC) Order by the id_session column
 * @method     SessionRelCourseRelUserQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     SessionRelCourseRelUserQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 *
 * @method     SessionRelCourseRelUserQuery groupByIdSession() Group by the id_session column
 * @method     SessionRelCourseRelUserQuery groupByCourseCode() Group by the course_code column
 * @method     SessionRelCourseRelUserQuery groupByIdUser() Group by the id_user column
 *
 * @method     SessionRelCourseRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionRelCourseRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionRelCourseRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionRelCourseRelUser findOne(PropelPDO $con = null) Return the first SessionRelCourseRelUser matching the query
 * @method     SessionRelCourseRelUser findOneOrCreate(PropelPDO $con = null) Return the first SessionRelCourseRelUser matching the query, or a new SessionRelCourseRelUser object populated from the query conditions when no match is found
 *
 * @method     SessionRelCourseRelUser findOneByIdSession(int $id_session) Return the first SessionRelCourseRelUser filtered by the id_session column
 * @method     SessionRelCourseRelUser findOneByCourseCode(string $course_code) Return the first SessionRelCourseRelUser filtered by the course_code column
 * @method     SessionRelCourseRelUser findOneByIdUser(int $id_user) Return the first SessionRelCourseRelUser filtered by the id_user column
 *
 * @method     array findByIdSession(int $id_session) Return SessionRelCourseRelUser objects filtered by the id_session column
 * @method     array findByCourseCode(string $course_code) Return SessionRelCourseRelUser objects filtered by the course_code column
 * @method     array findByIdUser(int $id_user) Return SessionRelCourseRelUser objects filtered by the id_user column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionRelCourseRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionRelCourseRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SessionRelCourseRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionRelCourseRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionRelCourseRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionRelCourseRelUserQuery) {
			return $criteria;
		}
		$query = new SessionRelCourseRelUserQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 * @param     array[$id_session, $course_code, $id_user] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    SessionRelCourseRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionRelCourseRelUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(SessionRelCourseRelUserPeer::ID_SESSION, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(SessionRelCourseRelUserPeer::COURSE_CODE, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(SessionRelCourseRelUserPeer::ID_USER, $key[2], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(SessionRelCourseRelUserPeer::ID_SESSION, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(SessionRelCourseRelUserPeer::COURSE_CODE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(SessionRelCourseRelUserPeer::ID_USER, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
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
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByIdSession($idSession = null, $comparison = null)
	{
		if (is_array($idSession)) {
			$useMinMax = false;
			if (isset($idSession['min'])) {
				$this->addUsingAlias(SessionRelCourseRelUserPeer::ID_SESSION, $idSession['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSession['max'])) {
				$this->addUsingAlias(SessionRelCourseRelUserPeer::ID_SESSION, $idSession['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelCourseRelUserPeer::ID_SESSION, $idSession, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SessionRelCourseRelUserPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the id_user column
	 * 
	 * @param     int|array $idUser The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
	 */
	public function filterByIdUser($idUser = null, $comparison = null)
	{
		if (is_array($idUser) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SessionRelCourseRelUserPeer::ID_USER, $idUser, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SessionRelCourseRelUser $sessionRelCourseRelUser Object to remove from the list of results
	 *
	 * @return    SessionRelCourseRelUserQuery The current query, for fluid interface
	 */
	public function prune($sessionRelCourseRelUser = null)
	{
		if ($sessionRelCourseRelUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(SessionRelCourseRelUserPeer::ID_SESSION), $sessionRelCourseRelUser->getIdSession(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(SessionRelCourseRelUserPeer::COURSE_CODE), $sessionRelCourseRelUser->getCourseCode(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(SessionRelCourseRelUserPeer::ID_USER), $sessionRelCourseRelUser->getIdUser(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseSessionRelCourseRelUserQuery
