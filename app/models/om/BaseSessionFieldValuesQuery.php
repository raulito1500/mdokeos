<?php


/**
 * Base class that represents a query for the 'session_field_values' table.
 *
 * 
 *
 * @method     SessionFieldValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SessionFieldValuesQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     SessionFieldValuesQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     SessionFieldValuesQuery orderByFieldValue($order = Criteria::ASC) Order by the field_value column
 * @method     SessionFieldValuesQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     SessionFieldValuesQuery groupById() Group by the id column
 * @method     SessionFieldValuesQuery groupBySessionId() Group by the session_id column
 * @method     SessionFieldValuesQuery groupByFieldId() Group by the field_id column
 * @method     SessionFieldValuesQuery groupByFieldValue() Group by the field_value column
 * @method     SessionFieldValuesQuery groupByTms() Group by the tms column
 *
 * @method     SessionFieldValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionFieldValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionFieldValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionFieldValues findOne(PropelPDO $con = null) Return the first SessionFieldValues matching the query
 * @method     SessionFieldValues findOneOrCreate(PropelPDO $con = null) Return the first SessionFieldValues matching the query, or a new SessionFieldValues object populated from the query conditions when no match is found
 *
 * @method     SessionFieldValues findOneById(int $id) Return the first SessionFieldValues filtered by the id column
 * @method     SessionFieldValues findOneBySessionId(int $session_id) Return the first SessionFieldValues filtered by the session_id column
 * @method     SessionFieldValues findOneByFieldId(int $field_id) Return the first SessionFieldValues filtered by the field_id column
 * @method     SessionFieldValues findOneByFieldValue(string $field_value) Return the first SessionFieldValues filtered by the field_value column
 * @method     SessionFieldValues findOneByTms(string $tms) Return the first SessionFieldValues filtered by the tms column
 *
 * @method     array findById(int $id) Return SessionFieldValues objects filtered by the id column
 * @method     array findBySessionId(int $session_id) Return SessionFieldValues objects filtered by the session_id column
 * @method     array findByFieldId(int $field_id) Return SessionFieldValues objects filtered by the field_id column
 * @method     array findByFieldValue(string $field_value) Return SessionFieldValues objects filtered by the field_value column
 * @method     array findByTms(string $tms) Return SessionFieldValues objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionFieldValuesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionFieldValuesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SessionFieldValues', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionFieldValuesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionFieldValuesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionFieldValuesQuery) {
			return $criteria;
		}
		$query = new SessionFieldValuesQuery();
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
	 * @return    SessionFieldValues|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionFieldValuesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SessionFieldValuesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SessionFieldValuesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SessionFieldValuesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldValuesPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the field_id column
	 * 
	 * @param     int|array $fieldId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByFieldId($fieldId = null, $comparison = null)
	{
		if (is_array($fieldId)) {
			$useMinMax = false;
			if (isset($fieldId['min'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldId['max'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldValuesPeer::FIELD_ID, $fieldId, $comparison);
	}

	/**
	 * Filter the query on the field_value column
	 * 
	 * @param     string $fieldValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByFieldValue($fieldValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fieldValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fieldValue)) {
				$fieldValue = str_replace('*', '%', $fieldValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionFieldValuesPeer::FIELD_VALUE, $fieldValue, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(SessionFieldValuesPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldValuesPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SessionFieldValues $sessionFieldValues Object to remove from the list of results
	 *
	 * @return    SessionFieldValuesQuery The current query, for fluid interface
	 */
	public function prune($sessionFieldValues = null)
	{
		if ($sessionFieldValues) {
			$this->addUsingAlias(SessionFieldValuesPeer::ID, $sessionFieldValues->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSessionFieldValuesQuery
