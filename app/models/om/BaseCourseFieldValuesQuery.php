<?php


/**
 * Base class that represents a query for the 'course_field_values' table.
 *
 * 
 *
 * @method     CourseFieldValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CourseFieldValuesQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     CourseFieldValuesQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     CourseFieldValuesQuery orderByFieldValue($order = Criteria::ASC) Order by the field_value column
 * @method     CourseFieldValuesQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     CourseFieldValuesQuery groupById() Group by the id column
 * @method     CourseFieldValuesQuery groupByCourseCode() Group by the course_code column
 * @method     CourseFieldValuesQuery groupByFieldId() Group by the field_id column
 * @method     CourseFieldValuesQuery groupByFieldValue() Group by the field_value column
 * @method     CourseFieldValuesQuery groupByTms() Group by the tms column
 *
 * @method     CourseFieldValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseFieldValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseFieldValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseFieldValues findOne(PropelPDO $con = null) Return the first CourseFieldValues matching the query
 * @method     CourseFieldValues findOneOrCreate(PropelPDO $con = null) Return the first CourseFieldValues matching the query, or a new CourseFieldValues object populated from the query conditions when no match is found
 *
 * @method     CourseFieldValues findOneById(int $id) Return the first CourseFieldValues filtered by the id column
 * @method     CourseFieldValues findOneByCourseCode(string $course_code) Return the first CourseFieldValues filtered by the course_code column
 * @method     CourseFieldValues findOneByFieldId(int $field_id) Return the first CourseFieldValues filtered by the field_id column
 * @method     CourseFieldValues findOneByFieldValue(string $field_value) Return the first CourseFieldValues filtered by the field_value column
 * @method     CourseFieldValues findOneByTms(string $tms) Return the first CourseFieldValues filtered by the tms column
 *
 * @method     array findById(int $id) Return CourseFieldValues objects filtered by the id column
 * @method     array findByCourseCode(string $course_code) Return CourseFieldValues objects filtered by the course_code column
 * @method     array findByFieldId(int $field_id) Return CourseFieldValues objects filtered by the field_id column
 * @method     array findByFieldValue(string $field_value) Return CourseFieldValues objects filtered by the field_value column
 * @method     array findByTms(string $tms) Return CourseFieldValues objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseFieldValuesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseFieldValuesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseFieldValues', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseFieldValuesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseFieldValuesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseFieldValuesQuery) {
			return $criteria;
		}
		$query = new CourseFieldValuesQuery();
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
	 * @return    CourseFieldValues|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseFieldValuesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CourseFieldValuesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CourseFieldValuesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CourseFieldValuesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseFieldValuesPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the field_id column
	 * 
	 * @param     int|array $fieldId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByFieldId($fieldId = null, $comparison = null)
	{
		if (is_array($fieldId)) {
			$useMinMax = false;
			if (isset($fieldId['min'])) {
				$this->addUsingAlias(CourseFieldValuesPeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldId['max'])) {
				$this->addUsingAlias(CourseFieldValuesPeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseFieldValuesPeer::FIELD_ID, $fieldId, $comparison);
	}

	/**
	 * Filter the query on the field_value column
	 * 
	 * @param     string $fieldValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseFieldValuesPeer::FIELD_VALUE, $fieldValue, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(CourseFieldValuesPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(CourseFieldValuesPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseFieldValuesPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseFieldValues $courseFieldValues Object to remove from the list of results
	 *
	 * @return    CourseFieldValuesQuery The current query, for fluid interface
	 */
	public function prune($courseFieldValues = null)
	{
		if ($courseFieldValues) {
			$this->addUsingAlias(CourseFieldValuesPeer::ID, $courseFieldValues->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseFieldValuesQuery
