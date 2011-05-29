<?php


/**
 * Base class that represents a query for the 'session_field' table.
 *
 * 
 *
 * @method     SessionFieldQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SessionFieldQuery orderByFieldType($order = Criteria::ASC) Order by the field_type column
 * @method     SessionFieldQuery orderByFieldVariable($order = Criteria::ASC) Order by the field_variable column
 * @method     SessionFieldQuery orderByFieldDisplayText($order = Criteria::ASC) Order by the field_display_text column
 * @method     SessionFieldQuery orderByFieldDefaultValue($order = Criteria::ASC) Order by the field_default_value column
 * @method     SessionFieldQuery orderByFieldOrder($order = Criteria::ASC) Order by the field_order column
 * @method     SessionFieldQuery orderByFieldVisible($order = Criteria::ASC) Order by the field_visible column
 * @method     SessionFieldQuery orderByFieldChangeable($order = Criteria::ASC) Order by the field_changeable column
 * @method     SessionFieldQuery orderByFieldFilter($order = Criteria::ASC) Order by the field_filter column
 * @method     SessionFieldQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     SessionFieldQuery groupById() Group by the id column
 * @method     SessionFieldQuery groupByFieldType() Group by the field_type column
 * @method     SessionFieldQuery groupByFieldVariable() Group by the field_variable column
 * @method     SessionFieldQuery groupByFieldDisplayText() Group by the field_display_text column
 * @method     SessionFieldQuery groupByFieldDefaultValue() Group by the field_default_value column
 * @method     SessionFieldQuery groupByFieldOrder() Group by the field_order column
 * @method     SessionFieldQuery groupByFieldVisible() Group by the field_visible column
 * @method     SessionFieldQuery groupByFieldChangeable() Group by the field_changeable column
 * @method     SessionFieldQuery groupByFieldFilter() Group by the field_filter column
 * @method     SessionFieldQuery groupByTms() Group by the tms column
 *
 * @method     SessionFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionField findOne(PropelPDO $con = null) Return the first SessionField matching the query
 * @method     SessionField findOneOrCreate(PropelPDO $con = null) Return the first SessionField matching the query, or a new SessionField object populated from the query conditions when no match is found
 *
 * @method     SessionField findOneById(int $id) Return the first SessionField filtered by the id column
 * @method     SessionField findOneByFieldType(int $field_type) Return the first SessionField filtered by the field_type column
 * @method     SessionField findOneByFieldVariable(string $field_variable) Return the first SessionField filtered by the field_variable column
 * @method     SessionField findOneByFieldDisplayText(string $field_display_text) Return the first SessionField filtered by the field_display_text column
 * @method     SessionField findOneByFieldDefaultValue(string $field_default_value) Return the first SessionField filtered by the field_default_value column
 * @method     SessionField findOneByFieldOrder(int $field_order) Return the first SessionField filtered by the field_order column
 * @method     SessionField findOneByFieldVisible(int $field_visible) Return the first SessionField filtered by the field_visible column
 * @method     SessionField findOneByFieldChangeable(int $field_changeable) Return the first SessionField filtered by the field_changeable column
 * @method     SessionField findOneByFieldFilter(int $field_filter) Return the first SessionField filtered by the field_filter column
 * @method     SessionField findOneByTms(string $tms) Return the first SessionField filtered by the tms column
 *
 * @method     array findById(int $id) Return SessionField objects filtered by the id column
 * @method     array findByFieldType(int $field_type) Return SessionField objects filtered by the field_type column
 * @method     array findByFieldVariable(string $field_variable) Return SessionField objects filtered by the field_variable column
 * @method     array findByFieldDisplayText(string $field_display_text) Return SessionField objects filtered by the field_display_text column
 * @method     array findByFieldDefaultValue(string $field_default_value) Return SessionField objects filtered by the field_default_value column
 * @method     array findByFieldOrder(int $field_order) Return SessionField objects filtered by the field_order column
 * @method     array findByFieldVisible(int $field_visible) Return SessionField objects filtered by the field_visible column
 * @method     array findByFieldChangeable(int $field_changeable) Return SessionField objects filtered by the field_changeable column
 * @method     array findByFieldFilter(int $field_filter) Return SessionField objects filtered by the field_filter column
 * @method     array findByTms(string $tms) Return SessionField objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSessionFieldQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionFieldQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SessionField', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionFieldQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionFieldQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionFieldQuery) {
			return $criteria;
		}
		$query = new SessionFieldQuery();
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
	 * @return    SessionField|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionFieldPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SessionFieldPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SessionFieldPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SessionFieldPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the field_type column
	 * 
	 * @param     int|array $fieldType The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldType($fieldType = null, $comparison = null)
	{
		if (is_array($fieldType)) {
			$useMinMax = false;
			if (isset($fieldType['min'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_TYPE, $fieldType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldType['max'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_TYPE, $fieldType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_TYPE, $fieldType, $comparison);
	}

	/**
	 * Filter the query on the field_variable column
	 * 
	 * @param     string $fieldVariable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldVariable($fieldVariable = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fieldVariable)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fieldVariable)) {
				$fieldVariable = str_replace('*', '%', $fieldVariable);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_VARIABLE, $fieldVariable, $comparison);
	}

	/**
	 * Filter the query on the field_display_text column
	 * 
	 * @param     string $fieldDisplayText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldDisplayText($fieldDisplayText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fieldDisplayText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fieldDisplayText)) {
				$fieldDisplayText = str_replace('*', '%', $fieldDisplayText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_DISPLAY_TEXT, $fieldDisplayText, $comparison);
	}

	/**
	 * Filter the query on the field_default_value column
	 * 
	 * @param     string $fieldDefaultValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldDefaultValue($fieldDefaultValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fieldDefaultValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fieldDefaultValue)) {
				$fieldDefaultValue = str_replace('*', '%', $fieldDefaultValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_DEFAULT_VALUE, $fieldDefaultValue, $comparison);
	}

	/**
	 * Filter the query on the field_order column
	 * 
	 * @param     int|array $fieldOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldOrder($fieldOrder = null, $comparison = null)
	{
		if (is_array($fieldOrder)) {
			$useMinMax = false;
			if (isset($fieldOrder['min'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_ORDER, $fieldOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldOrder['max'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_ORDER, $fieldOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_ORDER, $fieldOrder, $comparison);
	}

	/**
	 * Filter the query on the field_visible column
	 * 
	 * @param     int|array $fieldVisible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldVisible($fieldVisible = null, $comparison = null)
	{
		if (is_array($fieldVisible)) {
			$useMinMax = false;
			if (isset($fieldVisible['min'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_VISIBLE, $fieldVisible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldVisible['max'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_VISIBLE, $fieldVisible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_VISIBLE, $fieldVisible, $comparison);
	}

	/**
	 * Filter the query on the field_changeable column
	 * 
	 * @param     int|array $fieldChangeable The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldChangeable($fieldChangeable = null, $comparison = null)
	{
		if (is_array($fieldChangeable)) {
			$useMinMax = false;
			if (isset($fieldChangeable['min'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_CHANGEABLE, $fieldChangeable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldChangeable['max'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_CHANGEABLE, $fieldChangeable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_CHANGEABLE, $fieldChangeable, $comparison);
	}

	/**
	 * Filter the query on the field_filter column
	 * 
	 * @param     int|array $fieldFilter The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByFieldFilter($fieldFilter = null, $comparison = null)
	{
		if (is_array($fieldFilter)) {
			$useMinMax = false;
			if (isset($fieldFilter['min'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_FILTER, $fieldFilter['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldFilter['max'])) {
				$this->addUsingAlias(SessionFieldPeer::FIELD_FILTER, $fieldFilter['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::FIELD_FILTER, $fieldFilter, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(SessionFieldPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(SessionFieldPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionFieldPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SessionField $sessionField Object to remove from the list of results
	 *
	 * @return    SessionFieldQuery The current query, for fluid interface
	 */
	public function prune($sessionField = null)
	{
		if ($sessionField) {
			$this->addUsingAlias(SessionFieldPeer::ID, $sessionField->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSessionFieldQuery
