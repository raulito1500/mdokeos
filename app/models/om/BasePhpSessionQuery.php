<?php


/**
 * Base class that represents a query for the 'php_session' table.
 *
 * 
 *
 * @method     PhpSessionQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     PhpSessionQuery orderBySessionName($order = Criteria::ASC) Order by the session_name column
 * @method     PhpSessionQuery orderBySessionTime($order = Criteria::ASC) Order by the session_time column
 * @method     PhpSessionQuery orderBySessionStart($order = Criteria::ASC) Order by the session_start column
 * @method     PhpSessionQuery orderBySessionValue($order = Criteria::ASC) Order by the session_value column
 *
 * @method     PhpSessionQuery groupBySessionId() Group by the session_id column
 * @method     PhpSessionQuery groupBySessionName() Group by the session_name column
 * @method     PhpSessionQuery groupBySessionTime() Group by the session_time column
 * @method     PhpSessionQuery groupBySessionStart() Group by the session_start column
 * @method     PhpSessionQuery groupBySessionValue() Group by the session_value column
 *
 * @method     PhpSessionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PhpSessionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PhpSessionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PhpSession findOne(PropelPDO $con = null) Return the first PhpSession matching the query
 * @method     PhpSession findOneOrCreate(PropelPDO $con = null) Return the first PhpSession matching the query, or a new PhpSession object populated from the query conditions when no match is found
 *
 * @method     PhpSession findOneBySessionId(string $session_id) Return the first PhpSession filtered by the session_id column
 * @method     PhpSession findOneBySessionName(string $session_name) Return the first PhpSession filtered by the session_name column
 * @method     PhpSession findOneBySessionTime(int $session_time) Return the first PhpSession filtered by the session_time column
 * @method     PhpSession findOneBySessionStart(int $session_start) Return the first PhpSession filtered by the session_start column
 * @method     PhpSession findOneBySessionValue(string $session_value) Return the first PhpSession filtered by the session_value column
 *
 * @method     array findBySessionId(string $session_id) Return PhpSession objects filtered by the session_id column
 * @method     array findBySessionName(string $session_name) Return PhpSession objects filtered by the session_name column
 * @method     array findBySessionTime(int $session_time) Return PhpSession objects filtered by the session_time column
 * @method     array findBySessionStart(int $session_start) Return PhpSession objects filtered by the session_start column
 * @method     array findBySessionValue(string $session_value) Return PhpSession objects filtered by the session_value column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BasePhpSessionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePhpSessionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'PhpSession', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PhpSessionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PhpSessionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PhpSessionQuery) {
			return $criteria;
		}
		$query = new PhpSessionQuery();
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
	 * @return    PhpSession|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PhpSessionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PhpSessionPeer::SESSION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PhpSessionPeer::SESSION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     string $sessionId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sessionId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sessionId)) {
				$sessionId = str_replace('*', '%', $sessionId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PhpSessionPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the session_name column
	 * 
	 * @param     string $sessionName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionName($sessionName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sessionName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sessionName)) {
				$sessionName = str_replace('*', '%', $sessionName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PhpSessionPeer::SESSION_NAME, $sessionName, $comparison);
	}

	/**
	 * Filter the query on the session_time column
	 * 
	 * @param     int|array $sessionTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionTime($sessionTime = null, $comparison = null)
	{
		if (is_array($sessionTime)) {
			$useMinMax = false;
			if (isset($sessionTime['min'])) {
				$this->addUsingAlias(PhpSessionPeer::SESSION_TIME, $sessionTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionTime['max'])) {
				$this->addUsingAlias(PhpSessionPeer::SESSION_TIME, $sessionTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PhpSessionPeer::SESSION_TIME, $sessionTime, $comparison);
	}

	/**
	 * Filter the query on the session_start column
	 * 
	 * @param     int|array $sessionStart The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionStart($sessionStart = null, $comparison = null)
	{
		if (is_array($sessionStart)) {
			$useMinMax = false;
			if (isset($sessionStart['min'])) {
				$this->addUsingAlias(PhpSessionPeer::SESSION_START, $sessionStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionStart['max'])) {
				$this->addUsingAlias(PhpSessionPeer::SESSION_START, $sessionStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PhpSessionPeer::SESSION_START, $sessionStart, $comparison);
	}

	/**
	 * Filter the query on the session_value column
	 * 
	 * @param     string $sessionValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function filterBySessionValue($sessionValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sessionValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sessionValue)) {
				$sessionValue = str_replace('*', '%', $sessionValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PhpSessionPeer::SESSION_VALUE, $sessionValue, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PhpSession $phpSession Object to remove from the list of results
	 *
	 * @return    PhpSessionQuery The current query, for fluid interface
	 */
	public function prune($phpSession = null)
	{
		if ($phpSession) {
			$this->addUsingAlias(PhpSessionPeer::SESSION_ID, $phpSession->getSessionId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePhpSessionQuery
