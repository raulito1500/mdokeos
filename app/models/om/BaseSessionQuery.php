<?php


/**
 * Base class that represents a query for the 'session' table.
 *
 * 
 *
 * @method     SessionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SessionQuery orderByIdCoach($order = Criteria::ASC) Order by the id_coach column
 * @method     SessionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SessionQuery orderByNbrCourses($order = Criteria::ASC) Order by the nbr_courses column
 * @method     SessionQuery orderByNbrUsers($order = Criteria::ASC) Order by the nbr_users column
 * @method     SessionQuery orderByNbrClasses($order = Criteria::ASC) Order by the nbr_classes column
 * @method     SessionQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     SessionQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     SessionQuery orderByNbDaysAccessBeforeBeginning($order = Criteria::ASC) Order by the nb_days_access_before_beginning column
 * @method     SessionQuery orderByNbDaysAccessAfterEnd($order = Criteria::ASC) Order by the nb_days_access_after_end column
 * @method     SessionQuery orderBySessionAdminId($order = Criteria::ASC) Order by the session_admin_id column
 *
 * @method     SessionQuery groupById() Group by the id column
 * @method     SessionQuery groupByIdCoach() Group by the id_coach column
 * @method     SessionQuery groupByName() Group by the name column
 * @method     SessionQuery groupByNbrCourses() Group by the nbr_courses column
 * @method     SessionQuery groupByNbrUsers() Group by the nbr_users column
 * @method     SessionQuery groupByNbrClasses() Group by the nbr_classes column
 * @method     SessionQuery groupByDateStart() Group by the date_start column
 * @method     SessionQuery groupByDateEnd() Group by the date_end column
 * @method     SessionQuery groupByNbDaysAccessBeforeBeginning() Group by the nb_days_access_before_beginning column
 * @method     SessionQuery groupByNbDaysAccessAfterEnd() Group by the nb_days_access_after_end column
 * @method     SessionQuery groupBySessionAdminId() Group by the session_admin_id column
 *
 * @method     SessionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Session findOne(PropelPDO $con = null) Return the first Session matching the query
 * @method     Session findOneOrCreate(PropelPDO $con = null) Return the first Session matching the query, or a new Session object populated from the query conditions when no match is found
 *
 * @method     Session findOneById(int $id) Return the first Session filtered by the id column
 * @method     Session findOneByIdCoach(int $id_coach) Return the first Session filtered by the id_coach column
 * @method     Session findOneByName(string $name) Return the first Session filtered by the name column
 * @method     Session findOneByNbrCourses(int $nbr_courses) Return the first Session filtered by the nbr_courses column
 * @method     Session findOneByNbrUsers(int $nbr_users) Return the first Session filtered by the nbr_users column
 * @method     Session findOneByNbrClasses(int $nbr_classes) Return the first Session filtered by the nbr_classes column
 * @method     Session findOneByDateStart(string $date_start) Return the first Session filtered by the date_start column
 * @method     Session findOneByDateEnd(string $date_end) Return the first Session filtered by the date_end column
 * @method     Session findOneByNbDaysAccessBeforeBeginning(int $nb_days_access_before_beginning) Return the first Session filtered by the nb_days_access_before_beginning column
 * @method     Session findOneByNbDaysAccessAfterEnd(int $nb_days_access_after_end) Return the first Session filtered by the nb_days_access_after_end column
 * @method     Session findOneBySessionAdminId(int $session_admin_id) Return the first Session filtered by the session_admin_id column
 *
 * @method     array findById(int $id) Return Session objects filtered by the id column
 * @method     array findByIdCoach(int $id_coach) Return Session objects filtered by the id_coach column
 * @method     array findByName(string $name) Return Session objects filtered by the name column
 * @method     array findByNbrCourses(int $nbr_courses) Return Session objects filtered by the nbr_courses column
 * @method     array findByNbrUsers(int $nbr_users) Return Session objects filtered by the nbr_users column
 * @method     array findByNbrClasses(int $nbr_classes) Return Session objects filtered by the nbr_classes column
 * @method     array findByDateStart(string $date_start) Return Session objects filtered by the date_start column
 * @method     array findByDateEnd(string $date_end) Return Session objects filtered by the date_end column
 * @method     array findByNbDaysAccessBeforeBeginning(int $nb_days_access_before_beginning) Return Session objects filtered by the nb_days_access_before_beginning column
 * @method     array findByNbDaysAccessAfterEnd(int $nb_days_access_after_end) Return Session objects filtered by the nb_days_access_after_end column
 * @method     array findBySessionAdminId(int $session_admin_id) Return Session objects filtered by the session_admin_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Session', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionQuery) {
			return $criteria;
		}
		$query = new SessionQuery();
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
	 * @return    Session|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SessionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SessionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(SessionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(SessionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the id_coach column
	 * 
	 * @param     int|array $idCoach The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByIdCoach($idCoach = null, $comparison = null)
	{
		if (is_array($idCoach)) {
			$useMinMax = false;
			if (isset($idCoach['min'])) {
				$this->addUsingAlias(SessionPeer::ID_COACH, $idCoach['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCoach['max'])) {
				$this->addUsingAlias(SessionPeer::ID_COACH, $idCoach['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::ID_COACH, $idCoach, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SessionPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the nbr_courses column
	 * 
	 * @param     int|array $nbrCourses The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByNbrCourses($nbrCourses = null, $comparison = null)
	{
		if (is_array($nbrCourses)) {
			$useMinMax = false;
			if (isset($nbrCourses['min'])) {
				$this->addUsingAlias(SessionPeer::NBR_COURSES, $nbrCourses['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbrCourses['max'])) {
				$this->addUsingAlias(SessionPeer::NBR_COURSES, $nbrCourses['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::NBR_COURSES, $nbrCourses, $comparison);
	}

	/**
	 * Filter the query on the nbr_users column
	 * 
	 * @param     int|array $nbrUsers The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByNbrUsers($nbrUsers = null, $comparison = null)
	{
		if (is_array($nbrUsers)) {
			$useMinMax = false;
			if (isset($nbrUsers['min'])) {
				$this->addUsingAlias(SessionPeer::NBR_USERS, $nbrUsers['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbrUsers['max'])) {
				$this->addUsingAlias(SessionPeer::NBR_USERS, $nbrUsers['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::NBR_USERS, $nbrUsers, $comparison);
	}

	/**
	 * Filter the query on the nbr_classes column
	 * 
	 * @param     int|array $nbrClasses The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByNbrClasses($nbrClasses = null, $comparison = null)
	{
		if (is_array($nbrClasses)) {
			$useMinMax = false;
			if (isset($nbrClasses['min'])) {
				$this->addUsingAlias(SessionPeer::NBR_CLASSES, $nbrClasses['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbrClasses['max'])) {
				$this->addUsingAlias(SessionPeer::NBR_CLASSES, $nbrClasses['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::NBR_CLASSES, $nbrClasses, $comparison);
	}

	/**
	 * Filter the query on the date_start column
	 * 
	 * @param     string|array $dateStart The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByDateStart($dateStart = null, $comparison = null)
	{
		if (is_array($dateStart)) {
			$useMinMax = false;
			if (isset($dateStart['min'])) {
				$this->addUsingAlias(SessionPeer::DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateStart['max'])) {
				$this->addUsingAlias(SessionPeer::DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::DATE_START, $dateStart, $comparison);
	}

	/**
	 * Filter the query on the date_end column
	 * 
	 * @param     string|array $dateEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByDateEnd($dateEnd = null, $comparison = null)
	{
		if (is_array($dateEnd)) {
			$useMinMax = false;
			if (isset($dateEnd['min'])) {
				$this->addUsingAlias(SessionPeer::DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateEnd['max'])) {
				$this->addUsingAlias(SessionPeer::DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::DATE_END, $dateEnd, $comparison);
	}

	/**
	 * Filter the query on the nb_days_access_before_beginning column
	 * 
	 * @param     int|array $nbDaysAccessBeforeBeginning The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByNbDaysAccessBeforeBeginning($nbDaysAccessBeforeBeginning = null, $comparison = null)
	{
		if (is_array($nbDaysAccessBeforeBeginning)) {
			$useMinMax = false;
			if (isset($nbDaysAccessBeforeBeginning['min'])) {
				$this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING, $nbDaysAccessBeforeBeginning['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbDaysAccessBeforeBeginning['max'])) {
				$this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING, $nbDaysAccessBeforeBeginning['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_BEFORE_BEGINNING, $nbDaysAccessBeforeBeginning, $comparison);
	}

	/**
	 * Filter the query on the nb_days_access_after_end column
	 * 
	 * @param     int|array $nbDaysAccessAfterEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByNbDaysAccessAfterEnd($nbDaysAccessAfterEnd = null, $comparison = null)
	{
		if (is_array($nbDaysAccessAfterEnd)) {
			$useMinMax = false;
			if (isset($nbDaysAccessAfterEnd['min'])) {
				$this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_AFTER_END, $nbDaysAccessAfterEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nbDaysAccessAfterEnd['max'])) {
				$this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_AFTER_END, $nbDaysAccessAfterEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::NB_DAYS_ACCESS_AFTER_END, $nbDaysAccessAfterEnd, $comparison);
	}

	/**
	 * Filter the query on the session_admin_id column
	 * 
	 * @param     int|array $sessionAdminId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterBySessionAdminId($sessionAdminId = null, $comparison = null)
	{
		if (is_array($sessionAdminId)) {
			$useMinMax = false;
			if (isset($sessionAdminId['min'])) {
				$this->addUsingAlias(SessionPeer::SESSION_ADMIN_ID, $sessionAdminId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionAdminId['max'])) {
				$this->addUsingAlias(SessionPeer::SESSION_ADMIN_ID, $sessionAdminId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::SESSION_ADMIN_ID, $sessionAdminId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Session $session Object to remove from the list of results
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function prune($session = null)
	{
		if ($session) {
			$this->addUsingAlias(SessionPeer::ID, $session->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSessionQuery
