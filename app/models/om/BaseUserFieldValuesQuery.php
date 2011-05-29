<?php


/**
 * Base class that represents a query for the 'user_field_values' table.
 *
 * 
 *
 * @method     UserFieldValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserFieldValuesQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserFieldValuesQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     UserFieldValuesQuery orderByFieldValue($order = Criteria::ASC) Order by the field_value column
 * @method     UserFieldValuesQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     UserFieldValuesQuery groupById() Group by the id column
 * @method     UserFieldValuesQuery groupByUserId() Group by the user_id column
 * @method     UserFieldValuesQuery groupByFieldId() Group by the field_id column
 * @method     UserFieldValuesQuery groupByFieldValue() Group by the field_value column
 * @method     UserFieldValuesQuery groupByTms() Group by the tms column
 *
 * @method     UserFieldValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserFieldValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserFieldValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserFieldValues findOne(PropelPDO $con = null) Return the first UserFieldValues matching the query
 * @method     UserFieldValues findOneOrCreate(PropelPDO $con = null) Return the first UserFieldValues matching the query, or a new UserFieldValues object populated from the query conditions when no match is found
 *
 * @method     UserFieldValues findOneById(int $id) Return the first UserFieldValues filtered by the id column
 * @method     UserFieldValues findOneByUserId(int $user_id) Return the first UserFieldValues filtered by the user_id column
 * @method     UserFieldValues findOneByFieldId(int $field_id) Return the first UserFieldValues filtered by the field_id column
 * @method     UserFieldValues findOneByFieldValue(string $field_value) Return the first UserFieldValues filtered by the field_value column
 * @method     UserFieldValues findOneByTms(string $tms) Return the first UserFieldValues filtered by the tms column
 *
 * @method     array findById(int $id) Return UserFieldValues objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserFieldValues objects filtered by the user_id column
 * @method     array findByFieldId(int $field_id) Return UserFieldValues objects filtered by the field_id column
 * @method     array findByFieldValue(string $field_value) Return UserFieldValues objects filtered by the field_value column
 * @method     array findByTms(string $tms) Return UserFieldValues objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserFieldValuesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserFieldValuesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserFieldValues', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserFieldValuesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserFieldValuesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserFieldValuesQuery) {
			return $criteria;
		}
		$query = new UserFieldValuesQuery();
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
	 * @return    UserFieldValues|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserFieldValuesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserFieldValuesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserFieldValuesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserFieldValuesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserFieldValuesPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserFieldValuesPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldValuesPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the field_id column
	 * 
	 * @param     int|array $fieldId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByFieldId($fieldId = null, $comparison = null)
	{
		if (is_array($fieldId)) {
			$useMinMax = false;
			if (isset($fieldId['min'])) {
				$this->addUsingAlias(UserFieldValuesPeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldId['max'])) {
				$this->addUsingAlias(UserFieldValuesPeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldValuesPeer::FIELD_ID, $fieldId, $comparison);
	}

	/**
	 * Filter the query on the field_value column
	 * 
	 * @param     string $fieldValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UserFieldValuesPeer::FIELD_VALUE, $fieldValue, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(UserFieldValuesPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(UserFieldValuesPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldValuesPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserFieldValues $userFieldValues Object to remove from the list of results
	 *
	 * @return    UserFieldValuesQuery The current query, for fluid interface
	 */
	public function prune($userFieldValues = null)
	{
		if ($userFieldValues) {
			$this->addUsingAlias(UserFieldValuesPeer::ID, $userFieldValues->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserFieldValuesQuery
