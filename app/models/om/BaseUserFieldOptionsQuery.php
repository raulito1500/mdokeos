<?php


/**
 * Base class that represents a query for the 'user_field_options' table.
 *
 * 
 *
 * @method     UserFieldOptionsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserFieldOptionsQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     UserFieldOptionsQuery orderByOptionValue($order = Criteria::ASC) Order by the option_value column
 * @method     UserFieldOptionsQuery orderByOptionDisplayText($order = Criteria::ASC) Order by the option_display_text column
 * @method     UserFieldOptionsQuery orderByOptionOrder($order = Criteria::ASC) Order by the option_order column
 * @method     UserFieldOptionsQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     UserFieldOptionsQuery groupById() Group by the id column
 * @method     UserFieldOptionsQuery groupByFieldId() Group by the field_id column
 * @method     UserFieldOptionsQuery groupByOptionValue() Group by the option_value column
 * @method     UserFieldOptionsQuery groupByOptionDisplayText() Group by the option_display_text column
 * @method     UserFieldOptionsQuery groupByOptionOrder() Group by the option_order column
 * @method     UserFieldOptionsQuery groupByTms() Group by the tms column
 *
 * @method     UserFieldOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserFieldOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserFieldOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserFieldOptions findOne(PropelPDO $con = null) Return the first UserFieldOptions matching the query
 * @method     UserFieldOptions findOneOrCreate(PropelPDO $con = null) Return the first UserFieldOptions matching the query, or a new UserFieldOptions object populated from the query conditions when no match is found
 *
 * @method     UserFieldOptions findOneById(int $id) Return the first UserFieldOptions filtered by the id column
 * @method     UserFieldOptions findOneByFieldId(int $field_id) Return the first UserFieldOptions filtered by the field_id column
 * @method     UserFieldOptions findOneByOptionValue(string $option_value) Return the first UserFieldOptions filtered by the option_value column
 * @method     UserFieldOptions findOneByOptionDisplayText(string $option_display_text) Return the first UserFieldOptions filtered by the option_display_text column
 * @method     UserFieldOptions findOneByOptionOrder(int $option_order) Return the first UserFieldOptions filtered by the option_order column
 * @method     UserFieldOptions findOneByTms(string $tms) Return the first UserFieldOptions filtered by the tms column
 *
 * @method     array findById(int $id) Return UserFieldOptions objects filtered by the id column
 * @method     array findByFieldId(int $field_id) Return UserFieldOptions objects filtered by the field_id column
 * @method     array findByOptionValue(string $option_value) Return UserFieldOptions objects filtered by the option_value column
 * @method     array findByOptionDisplayText(string $option_display_text) Return UserFieldOptions objects filtered by the option_display_text column
 * @method     array findByOptionOrder(int $option_order) Return UserFieldOptions objects filtered by the option_order column
 * @method     array findByTms(string $tms) Return UserFieldOptions objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserFieldOptionsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserFieldOptionsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserFieldOptions', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserFieldOptionsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserFieldOptionsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserFieldOptionsQuery) {
			return $criteria;
		}
		$query = new UserFieldOptionsQuery();
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
	 * @return    UserFieldOptions|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserFieldOptionsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserFieldOptionsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserFieldOptionsPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the field_id column
	 * 
	 * @param     int|array $fieldId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByFieldId($fieldId = null, $comparison = null)
	{
		if (is_array($fieldId)) {
			$useMinMax = false;
			if (isset($fieldId['min'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fieldId['max'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::FIELD_ID, $fieldId, $comparison);
	}

	/**
	 * Filter the query on the option_value column
	 * 
	 * @param     string $optionValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByOptionValue($optionValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($optionValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $optionValue)) {
				$optionValue = str_replace('*', '%', $optionValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::OPTION_VALUE, $optionValue, $comparison);
	}

	/**
	 * Filter the query on the option_display_text column
	 * 
	 * @param     string $optionDisplayText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByOptionDisplayText($optionDisplayText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($optionDisplayText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $optionDisplayText)) {
				$optionDisplayText = str_replace('*', '%', $optionDisplayText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::OPTION_DISPLAY_TEXT, $optionDisplayText, $comparison);
	}

	/**
	 * Filter the query on the option_order column
	 * 
	 * @param     int|array $optionOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByOptionOrder($optionOrder = null, $comparison = null)
	{
		if (is_array($optionOrder)) {
			$useMinMax = false;
			if (isset($optionOrder['min'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::OPTION_ORDER, $optionOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($optionOrder['max'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::OPTION_ORDER, $optionOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::OPTION_ORDER, $optionOrder, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(UserFieldOptionsPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserFieldOptionsPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserFieldOptions $userFieldOptions Object to remove from the list of results
	 *
	 * @return    UserFieldOptionsQuery The current query, for fluid interface
	 */
	public function prune($userFieldOptions = null)
	{
		if ($userFieldOptions) {
			$this->addUsingAlias(UserFieldOptionsPeer::ID, $userFieldOptions->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserFieldOptionsQuery
