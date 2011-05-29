<?php


/**
 * Base class that represents a query for the 'online_connected' table.
 *
 * 
 *
 * @method     OnlineConnectedQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     OnlineConnectedQuery orderByLastConnection($order = Criteria::ASC) Order by the last_connection column
 *
 * @method     OnlineConnectedQuery groupByUserId() Group by the user_id column
 * @method     OnlineConnectedQuery groupByLastConnection() Group by the last_connection column
 *
 * @method     OnlineConnectedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OnlineConnectedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OnlineConnectedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OnlineConnected findOne(PropelPDO $con = null) Return the first OnlineConnected matching the query
 * @method     OnlineConnected findOneOrCreate(PropelPDO $con = null) Return the first OnlineConnected matching the query, or a new OnlineConnected object populated from the query conditions when no match is found
 *
 * @method     OnlineConnected findOneByUserId(int $user_id) Return the first OnlineConnected filtered by the user_id column
 * @method     OnlineConnected findOneByLastConnection(string $last_connection) Return the first OnlineConnected filtered by the last_connection column
 *
 * @method     array findByUserId(int $user_id) Return OnlineConnected objects filtered by the user_id column
 * @method     array findByLastConnection(string $last_connection) Return OnlineConnected objects filtered by the last_connection column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseOnlineConnectedQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOnlineConnectedQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'OnlineConnected', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OnlineConnectedQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OnlineConnectedQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OnlineConnectedQuery) {
			return $criteria;
		}
		$query = new OnlineConnectedQuery();
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
	 * @return    OnlineConnected|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OnlineConnectedPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OnlineConnectedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OnlineConnectedPeer::USER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OnlineConnectedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OnlineConnectedPeer::USER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OnlineConnectedQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OnlineConnectedPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the last_connection column
	 * 
	 * @param     string|array $lastConnection The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OnlineConnectedQuery The current query, for fluid interface
	 */
	public function filterByLastConnection($lastConnection = null, $comparison = null)
	{
		if (is_array($lastConnection)) {
			$useMinMax = false;
			if (isset($lastConnection['min'])) {
				$this->addUsingAlias(OnlineConnectedPeer::LAST_CONNECTION, $lastConnection['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastConnection['max'])) {
				$this->addUsingAlias(OnlineConnectedPeer::LAST_CONNECTION, $lastConnection['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OnlineConnectedPeer::LAST_CONNECTION, $lastConnection, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     OnlineConnected $onlineConnected Object to remove from the list of results
	 *
	 * @return    OnlineConnectedQuery The current query, for fluid interface
	 */
	public function prune($onlineConnected = null)
	{
		if ($onlineConnected) {
			$this->addUsingAlias(OnlineConnectedPeer::USER_ID, $onlineConnected->getUserId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOnlineConnectedQuery
