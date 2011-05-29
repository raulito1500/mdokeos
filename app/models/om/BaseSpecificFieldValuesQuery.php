<?php


/**
 * Base class that represents a query for the 'specific_field_values' table.
 *
 * 
 *
 * @method     SpecificFieldValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SpecificFieldValuesQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     SpecificFieldValuesQuery orderByToolId($order = Criteria::ASC) Order by the tool_id column
 * @method     SpecificFieldValuesQuery orderByRefId($order = Criteria::ASC) Order by the ref_id column
 * @method     SpecificFieldValuesQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     SpecificFieldValuesQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     SpecificFieldValuesQuery groupById() Group by the id column
 * @method     SpecificFieldValuesQuery groupByCourseCode() Group by the course_code column
 * @method     SpecificFieldValuesQuery groupByToolId() Group by the tool_id column
 * @method     SpecificFieldValuesQuery groupByRefId() Group by the ref_id column
 * @method     SpecificFieldValuesQuery groupByFieldId() Group by the field_id column
 * @method     SpecificFieldValuesQuery groupByValue() Group by the value column
 *
 * @method     SpecificFieldValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SpecificFieldValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SpecificFieldValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SpecificFieldValues findOne(PropelPDO $con = null) Return the first SpecificFieldValues matching the query
 * @method     SpecificFieldValues findOneOrCreate(PropelPDO $con = null) Return the first SpecificFieldValues matching the query, or a new SpecificFieldValues object populated from the query conditions when no match is found
 *
 * @method     SpecificFieldValues findOneById(int $id) Return the first SpecificFieldValues filtered by the id column
 * @method     SpecificFieldValues findOneByCourseCode(string $course_code) Return the first SpecificFieldValues filtered by the course_code column
 * @method     SpecificFieldValues findOneByToolId(string $tool_id) Return the first SpecificFieldValues filtered by the tool_id column
 * @method     SpecificFieldValues findOneByRefId(int $ref_id) Return the first SpecificFieldValues filtered by the ref_id column
 * @method     SpecificFieldValues findOneByFieldId(int $field_id) Return the first SpecificFieldValues filtered by the field_id column
 * @method     SpecificFieldValues findOneByValue(string $value) Return the first SpecificFieldValues filtered by the value column
 *
 * @method     array findById(int $id) Return SpecificFieldValues objects filtered by the id column
 * @method     array findByCourseCode(string $course_code) Return SpecificFieldValues objects filtered by the course_code column
 * @method     array findByToolId(string $tool_id) Return SpecificFieldValues objects filtered by the tool_id column
 * @method     array findByRefId(int $ref_id) Return SpecificFieldValues objects filtered by the ref_id column
 * @method     array findByFieldId(int $field_id) Return SpecificFieldValues objects filtered by the field_id column
 * @method     array findByValue(string $value) Return SpecificFieldValues objects filtered by the value column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSpecificFieldValuesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSpecificFieldValuesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SpecificFieldValues', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SpecificFieldValuesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SpecificFieldValuesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SpecificFieldValuesQuery) {
			return $criteria;
		}
		$query = new SpecificFieldValuesQuery();
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
	 * @return    SpecificFieldValues|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SpecificFieldValuesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SpecificFieldValuesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SpecificFieldValuesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByCourseCode($courseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseCode)) {
				$courseCode = str_replace('*', '%', $courseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the tool_id column
	 * 
	 * @param     string $toolId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByToolId($toolId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($toolId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $toolId)) {
				$toolId = str_replace('*', '%', $toolId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::TOOL_ID, $toolId, $comparison);
	}

	/**
	 * Filter the query on the ref_id column
	 * 
	 * @param     int|array $refId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByRefId($refId = null, $comparison = null)
	{
		if (is_array($refId)) {
			$useMinMax = false;
			if (isset($refId['min'])) {
				$this->addUsingAlias(SpecificFieldValuesPeer::REF_ID, $refId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refId['max'])) {
				$this->addUsingAlias(SpecificFieldValuesPeer::REF_ID, $refId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::REF_ID, $refId, $comparison);
	}

	/**
	 * Filter the query on the field_id column
	 * 
	 * @param     int|array $fieldId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByFieldId($fieldId = null, $comparison = null)
	{
		if (is_array($fieldId)) {
			$useMinMax = false;
			if (isset($fieldId['min'])) {
				$this->addUsingAlias(SpecificFieldValuesPeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldId['max'])) {
				$this->addUsingAlias(SpecificFieldValuesPeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::FIELD_ID, $fieldId, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     string $value The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SpecificFieldValuesPeer::VALUE, $value, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SpecificFieldValues $specificFieldValues Object to remove from the list of results
	 *
	 * @return    SpecificFieldValuesQuery The current query, for fluid interface
	 */
	public function prune($specificFieldValues = null)
	{
		if ($specificFieldValues) {
			$this->addUsingAlias(SpecificFieldValuesPeer::ID, $specificFieldValues->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSpecificFieldValuesQuery
