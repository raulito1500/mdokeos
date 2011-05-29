<?php


/**
 * Base class that represents a query for the 'access_url_rel_user' table.
 *
 * 
 *
 * @method     AccessUrlRelUserQuery orderByAccessUrlId($order = Criteria::ASC) Order by the access_url_id column
 * @method     AccessUrlRelUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     AccessUrlRelUserQuery groupByAccessUrlId() Group by the access_url_id column
 * @method     AccessUrlRelUserQuery groupByUserId() Group by the user_id column
 *
 * @method     AccessUrlRelUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AccessUrlRelUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AccessUrlRelUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AccessUrlRelUser findOne(PropelPDO $con = null) Return the first AccessUrlRelUser matching the query
 * @method     AccessUrlRelUser findOneOrCreate(PropelPDO $con = null) Return the first AccessUrlRelUser matching the query, or a new AccessUrlRelUser object populated from the query conditions when no match is found
 *
 * @method     AccessUrlRelUser findOneByAccessUrlId(int $access_url_id) Return the first AccessUrlRelUser filtered by the access_url_id column
 * @method     AccessUrlRelUser findOneByUserId(int $user_id) Return the first AccessUrlRelUser filtered by the user_id column
 *
 * @method     array findByAccessUrlId(int $access_url_id) Return AccessUrlRelUser objects filtered by the access_url_id column
 * @method     array findByUserId(int $user_id) Return AccessUrlRelUser objects filtered by the user_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAccessUrlRelUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAccessUrlRelUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'AccessUrlRelUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AccessUrlRelUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AccessUrlRelUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AccessUrlRelUserQuery) {
			return $criteria;
		}
		$query = new AccessUrlRelUserQuery();
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
	 * @param     array[$access_url_id, $user_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    AccessUrlRelUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AccessUrlRelUserPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AccessUrlRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(AccessUrlRelUserPeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(AccessUrlRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AccessUrlRelUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(AccessUrlRelUserPeer::ACCESS_URL_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(AccessUrlRelUserPeer::USER_ID, $key[1], Criteria::EQUAL);
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
	 * @return    AccessUrlRelUserQuery The current query, for fluid interface
	 */
	public function filterByAccessUrlId($accessUrlId = null, $comparison = null)
	{
		if (is_array($accessUrlId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlRelUserPeer::ACCESS_URL_ID, $accessUrlId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlRelUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlRelUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AccessUrlRelUser $accessUrlRelUser Object to remove from the list of results
	 *
	 * @return    AccessUrlRelUserQuery The current query, for fluid interface
	 */
	public function prune($accessUrlRelUser = null)
	{
		if ($accessUrlRelUser) {
			$this->addCond('pruneCond0', $this->getAliasedColName(AccessUrlRelUserPeer::ACCESS_URL_ID), $accessUrlRelUser->getAccessUrlId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(AccessUrlRelUserPeer::USER_ID), $accessUrlRelUser->getUserId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseAccessUrlRelUserQuery
