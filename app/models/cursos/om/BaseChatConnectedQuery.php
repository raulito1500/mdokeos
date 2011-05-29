<?php


/**
 * Base class that represents a query for the 'chat_connected' table.
 *
 * 
 *
 * @method     ChatConnectedQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChatConnectedQuery orderByLastConnection($order = Criteria::ASC) Order by the last_connection column
 *
 * @method     ChatConnectedQuery groupByUserId() Group by the user_id column
 * @method     ChatConnectedQuery groupByLastConnection() Group by the last_connection column
 *
 * @method     ChatConnectedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChatConnectedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChatConnectedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChatConnected findOne(PropelPDO $con = null) Return the first ChatConnected matching the query
 * @method     ChatConnected findOneOrCreate(PropelPDO $con = null) Return the first ChatConnected matching the query, or a new ChatConnected object populated from the query conditions when no match is found
 *
 * @method     ChatConnected findOneByUserId(int $user_id) Return the first ChatConnected filtered by the user_id column
 * @method     ChatConnected findOneByLastConnection(string $last_connection) Return the first ChatConnected filtered by the last_connection column
 *
 * @method     array findByUserId(int $user_id) Return ChatConnected objects filtered by the user_id column
 * @method     array findByLastConnection(string $last_connection) Return ChatConnected objects filtered by the last_connection column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseChatConnectedQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseChatConnectedQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ChatConnected', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ChatConnectedQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ChatConnectedQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ChatConnectedQuery) {
			return $criteria;
		}
		$query = new ChatConnectedQuery();
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
	 * @return    ChatConnected|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ChatConnectedPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ChatConnectedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ChatConnectedPeer::USER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ChatConnectedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ChatConnectedPeer::USER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChatConnectedQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ChatConnectedPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the last_connection column
	 * 
	 * @param     string|array $lastConnection The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChatConnectedQuery The current query, for fluid interface
	 */
	public function filterByLastConnection($lastConnection = null, $comparison = null)
	{
		if (is_array($lastConnection)) {
			$useMinMax = false;
			if (isset($lastConnection['min'])) {
				$this->addUsingAlias(ChatConnectedPeer::LAST_CONNECTION, $lastConnection['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastConnection['max'])) {
				$this->addUsingAlias(ChatConnectedPeer::LAST_CONNECTION, $lastConnection['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChatConnectedPeer::LAST_CONNECTION, $lastConnection, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ChatConnected $chatConnected Object to remove from the list of results
	 *
	 * @return    ChatConnectedQuery The current query, for fluid interface
	 */
	public function prune($chatConnected = null)
	{
		if ($chatConnected) {
			$this->addUsingAlias(ChatConnectedPeer::USER_ID, $chatConnected->getUserId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseChatConnectedQuery
