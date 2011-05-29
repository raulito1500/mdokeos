<?php


/**
 * Base class that represents a query for the 'session_rel_user' table.
 *
 * 
 *
 * @method     SessionRelUserQuery orderByIdSession($order = Criteria::ASC) Order by the id_session column
 * @method     SessionRelUserQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 *
 * @method     SessionRelUserQuery groupByIdSession() Group by the id_session column
 * @method     SessionRelUserQuery groupByIdUser() Group by the id_user column
 *
 * @method     SessionRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionRelUser findOne(PropelPDO $con = null) Return the first SessionRelUser matching the query
 * @method     SessionRelUser findOneOrCreate(PropelPDO $con = null) Return the first SessionRelUser matching the query, or a new SessionRelUser object populated from the query conditions when no match is found
 *
 * @method     SessionRelUser findOneByIdSession(int $id_session) Return the first SessionRelUser filtered by the id_session column
 * @method     SessionRelUser findOneByIdUser(int $id_user) Return the first SessionRelUser filtered by the id_user column
 *
 * @method     array findByIdSession(int $id_session) Return SessionRelUser objects filtered by the id_session column
 * @method     array findByIdUser(int $id_user) Return SessionRelUser objects filtered by the id_user column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SessionRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionRelUserQuery) {
			return $criteria;
		}
		$query = new SessionRelUserQuery();
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
	 * @param     array[$id_session, $id_user] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    SessionRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionRelUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(SessionRelUserPeer::ID_SESSION, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(SessionRelUserPeer::ID_USER, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(SessionRelUserPeer::ID_SESSION, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(SessionRelUserPeer::ID_USER, $key[1], Criteria::EQUAL);
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
	 * @return    SessionRelUserQuery The current query, for fluid interface
	 */
	public function filterByIdSession($idSession = null, $comparison = null)
	{
		if (is_array($idSession)) {
			$useMinMax = false;
			if (isset($idSession['min'])) {
				$this->addUsingAlias(SessionRelUserPeer::ID_SESSION, $idSession['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSession['max'])) {
				$this->addUsingAlias(SessionRelUserPeer::ID_SESSION, $idSession['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelUserPeer::ID_SESSION, $idSession, $comparison);
	}

	/**
	 * Filter the query on the id_user column
	 * 
	 * @param     int|array $idUser The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionRelUserQuery The current query, for fluid interface
	 */
	public function filterByIdUser($idUser = null, $comparison = null)
	{
		if (is_array($idUser)) {
			$useMinMax = false;
			if (isset($idUser['min'])) {
				$this->addUsingAlias(SessionRelUserPeer::ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idUser['max'])) {
				$this->addUsingAlias(SessionRelUserPeer::ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionRelUserPeer::ID_USER, $idUser, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SessionRelUser $sessionRelUser Object to remove from the list of results
	 *
	 * @return    SessionRelUserQuery The current query, for fluid interface
	 */
	public function prune($sessionRelUser = null)
	{
		if ($sessionRelUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(SessionRelUserPeer::ID_SESSION), $sessionRelUser->getIdSession(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(SessionRelUserPeer::ID_USER), $sessionRelUser->getIdUser(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseSessionRelUserQuery
