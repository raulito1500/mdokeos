<?php


/**
 * Base class that represents a query for the 'user_api_key' table.
 *
 * 
 *
 * @method     UserApiKeyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserApiKeyQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserApiKeyQuery orderByApiKey($order = Criteria::ASC) Order by the api_key column
 * @method     UserApiKeyQuery orderByApiService($order = Criteria::ASC) Order by the api_service column
 *
 * @method     UserApiKeyQuery groupById() Group by the id column
 * @method     UserApiKeyQuery groupByUserId() Group by the user_id column
 * @method     UserApiKeyQuery groupByApiKey() Group by the api_key column
 * @method     UserApiKeyQuery groupByApiService() Group by the api_service column
 *
 * @method     UserApiKeyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserApiKeyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserApiKeyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserApiKey findOne(PropelPDO $con = null) Return the first UserApiKey matching the query
 * @method     UserApiKey findOneOrCreate(PropelPDO $con = null) Return the first UserApiKey matching the query, or a new UserApiKey object populated from the query conditions when no match is found
 *
 * @method     UserApiKey findOneById(int $id) Return the first UserApiKey filtered by the id column
 * @method     UserApiKey findOneByUserId(int $user_id) Return the first UserApiKey filtered by the user_id column
 * @method     UserApiKey findOneByApiKey(string $api_key) Return the first UserApiKey filtered by the api_key column
 * @method     UserApiKey findOneByApiService(string $api_service) Return the first UserApiKey filtered by the api_service column
 *
 * @method     array findById(int $id) Return UserApiKey objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserApiKey objects filtered by the user_id column
 * @method     array findByApiKey(string $api_key) Return UserApiKey objects filtered by the api_key column
 * @method     array findByApiService(string $api_service) Return UserApiKey objects filtered by the api_service column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserApiKeyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserApiKeyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserApiKey', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserApiKeyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserApiKeyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserApiKeyQuery) {
			return $criteria;
		}
		$query = new UserApiKeyQuery();
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
	 * @return    UserApiKey|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserApiKeyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserApiKeyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserApiKeyPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserApiKeyPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserApiKeyPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserApiKeyPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserApiKeyPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the api_key column
	 * 
	 * @param     string $apiKey The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterByApiKey($apiKey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apiKey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apiKey)) {
				$apiKey = str_replace('*', '%', $apiKey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserApiKeyPeer::API_KEY, $apiKey, $comparison);
	}

	/**
	 * Filter the query on the api_service column
	 * 
	 * @param     string $apiService The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function filterByApiService($apiService = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apiService)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apiService)) {
				$apiService = str_replace('*', '%', $apiService);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserApiKeyPeer::API_SERVICE, $apiService, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserApiKey $userApiKey Object to remove from the list of results
	 *
	 * @return    UserApiKeyQuery The current query, for fluid interface
	 */
	public function prune($userApiKey = null)
	{
		if ($userApiKey) {
			$this->addUsingAlias(UserApiKeyPeer::ID, $userApiKey->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserApiKeyQuery
