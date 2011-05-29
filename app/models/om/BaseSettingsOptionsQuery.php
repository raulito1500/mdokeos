<?php


/**
 * Base class that represents a query for the 'settings_options' table.
 *
 * 
 *
 * @method     SettingsOptionsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SettingsOptionsQuery orderByVariable($order = Criteria::ASC) Order by the variable column
 * @method     SettingsOptionsQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     SettingsOptionsQuery orderByDisplayText($order = Criteria::ASC) Order by the display_text column
 *
 * @method     SettingsOptionsQuery groupById() Group by the id column
 * @method     SettingsOptionsQuery groupByVariable() Group by the variable column
 * @method     SettingsOptionsQuery groupByValue() Group by the value column
 * @method     SettingsOptionsQuery groupByDisplayText() Group by the display_text column
 *
 * @method     SettingsOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SettingsOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SettingsOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SettingsOptions findOne(PropelPDO $con = null) Return the first SettingsOptions matching the query
 * @method     SettingsOptions findOneOrCreate(PropelPDO $con = null) Return the first SettingsOptions matching the query, or a new SettingsOptions object populated from the query conditions when no match is found
 *
 * @method     SettingsOptions findOneById(int $id) Return the first SettingsOptions filtered by the id column
 * @method     SettingsOptions findOneByVariable(string $variable) Return the first SettingsOptions filtered by the variable column
 * @method     SettingsOptions findOneByValue(string $value) Return the first SettingsOptions filtered by the value column
 * @method     SettingsOptions findOneByDisplayText(string $display_text) Return the first SettingsOptions filtered by the display_text column
 *
 * @method     array findById(int $id) Return SettingsOptions objects filtered by the id column
 * @method     array findByVariable(string $variable) Return SettingsOptions objects filtered by the variable column
 * @method     array findByValue(string $value) Return SettingsOptions objects filtered by the value column
 * @method     array findByDisplayText(string $display_text) Return SettingsOptions objects filtered by the display_text column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSettingsOptionsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSettingsOptionsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SettingsOptions', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SettingsOptionsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SettingsOptionsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SettingsOptionsQuery) {
			return $criteria;
		}
		$query = new SettingsOptionsQuery();
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
	 * @return    SettingsOptions|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SettingsOptionsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SettingsOptionsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SettingsOptionsPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SettingsOptionsPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the variable column
	 * 
	 * @param     string $variable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function filterByVariable($variable = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($variable)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $variable)) {
				$variable = str_replace('*', '%', $variable);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsOptionsPeer::VARIABLE, $variable, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     string $value The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SettingsOptionsPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the display_text column
	 * 
	 * @param     string $displayText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function filterByDisplayText($displayText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($displayText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $displayText)) {
				$displayText = str_replace('*', '%', $displayText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsOptionsPeer::DISPLAY_TEXT, $displayText, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SettingsOptions $settingsOptions Object to remove from the list of results
	 *
	 * @return    SettingsOptionsQuery The current query, for fluid interface
	 */
	public function prune($settingsOptions = null)
	{
		if ($settingsOptions) {
			$this->addUsingAlias(SettingsOptionsPeer::ID, $settingsOptions->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSettingsOptionsQuery
