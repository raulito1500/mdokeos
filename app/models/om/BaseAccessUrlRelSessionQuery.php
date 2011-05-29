<?php


/**
 * Base class that represents a query for the 'access_url_rel_session' table.
 *
 * 
 *
 * @method     AccessUrlRelSessionQuery orderByAccessUrlId($order = Criteria::ASC) Order by the access_url_id column
 * @method     AccessUrlRelSessionQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     AccessUrlRelSessionQuery groupByAccessUrlId() Group by the access_url_id column
 * @method     AccessUrlRelSessionQuery groupBySessionId() Group by the session_id column
 *
 * @method     AccessUrlRelSessionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AccessUrlRelSessionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AccessUrlRelSessionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AccessUrlRelSession findOne(PropelPDO $con = null) Return the first AccessUrlRelSession matching the query
 * @method     AccessUrlRelSession findOneOrCreate(PropelPDO $con = null) Return the first AccessUrlRelSession matching the query, or a new AccessUrlRelSession object populated from the query conditions when no match is found
 *
 * @method     AccessUrlRelSession findOneByAccessUrlId(int $access_url_id) Return the first AccessUrlRelSession filtered by the access_url_id column
 * @method     AccessUrlRelSession findOneBySessionId(int $session_id) Return the first AccessUrlRelSession filtered by the session_id column
 *
 * @method     array findByAccessUrlId(int $access_url_id) Return AccessUrlRelSession objects filtered by the access_url_id column
 * @method     array findBySessionId(int $session_id) Return AccessUrlRelSession objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAccessUrlRelSessionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAccessUrlRelSessionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'AccessUrlRelSession', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AccessUrlRelSessionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AccessUrlRelSessionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AccessUrlRelSessionQuery) {
			return $criteria;
		}
		$query = new AccessUrlRelSessionQuery();
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
	 * @param     array[$access_url_id, $session_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    AccessUrlRelSession|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AccessUrlRelSessionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AccessUrlRelSessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(AccessUrlRelSessionPeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(AccessUrlRelSessionPeer::SESSION_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AccessUrlRelSessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(AccessUrlRelSessionPeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(AccessUrlRelSessionPeer::SESSION_ID, $key[1], Criteria::EQUAL);
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
	 * @return    AccessUrlRelSessionQuery The current query, for fluid interface
	 */
	public function filterByAccessUrlId($accessUrlId = null, $comparison = null)
	{
		if (is_array($accessUrlId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlRelSessionPeer::ACCESS_URL_ID, $accessUrlId, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlRelSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlRelSessionPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AccessUrlRelSession $accessUrlRelSession Object to remove from the list of results
	 *
	 * @return    AccessUrlRelSessionQuery The current query, for fluid interface
	 */
	public function prune($accessUrlRelSession = null)
	{
		if ($accessUrlRelSession) {
			$this->addCond('pruneCond0', $this->getAliasedColName(AccessUrlRelSessionPeer::ACCESS_URL_ID), $accessUrlRelSession->getAccessUrlId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(AccessUrlRelSessionPeer::SESSION_ID), $accessUrlRelSession->getSessionId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseAccessUrlRelSessionQuery
