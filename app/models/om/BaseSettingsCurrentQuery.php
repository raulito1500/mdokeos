<?php


/**
 * Base class that represents a query for the 'settings_current' table.
 *
 * 
 *
 * @method     SettingsCurrentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SettingsCurrentQuery orderByVariable($order = Criteria::ASC) Order by the variable column
 * @method     SettingsCurrentQuery orderBySubkey($order = Criteria::ASC) Order by the subkey column
 * @method     SettingsCurrentQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     SettingsCurrentQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     SettingsCurrentQuery orderBySelectedValue($order = Criteria::ASC) Order by the selected_value column
 * @method     SettingsCurrentQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SettingsCurrentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     SettingsCurrentQuery orderByScope($order = Criteria::ASC) Order by the scope column
 * @method     SettingsCurrentQuery orderBySubkeytext($order = Criteria::ASC) Order by the subkeytext column
 * @method     SettingsCurrentQuery orderByAccessUrl($order = Criteria::ASC) Order by the access_url column
 * @method     SettingsCurrentQuery orderByAccessUrlChangeable($order = Criteria::ASC) Order by the access_url_changeable column
 *
 * @method     SettingsCurrentQuery groupById() Group by the id column
 * @method     SettingsCurrentQuery groupByVariable() Group by the variable column
 * @method     SettingsCurrentQuery groupBySubkey() Group by the subkey column
 * @method     SettingsCurrentQuery groupByType() Group by the type column
 * @method     SettingsCurrentQuery groupByCategory() Group by the category column
 * @method     SettingsCurrentQuery groupBySelectedValue() Group by the selected_value column
 * @method     SettingsCurrentQuery groupByTitle() Group by the title column
 * @method     SettingsCurrentQuery groupByComment() Group by the comment column
 * @method     SettingsCurrentQuery groupByScope() Group by the scope column
 * @method     SettingsCurrentQuery groupBySubkeytext() Group by the subkeytext column
 * @method     SettingsCurrentQuery groupByAccessUrl() Group by the access_url column
 * @method     SettingsCurrentQuery groupByAccessUrlChangeable() Group by the access_url_changeable column
 *
 * @method     SettingsCurrentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SettingsCurrentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SettingsCurrentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SettingsCurrent findOne(PropelPDO $con = null) Return the first SettingsCurrent matching the query
 * @method     SettingsCurrent findOneOrCreate(PropelPDO $con = null) Return the first SettingsCurrent matching the query, or a new SettingsCurrent object populated from the query conditions when no match is found
 *
 * @method     SettingsCurrent findOneById(int $id) Return the first SettingsCurrent filtered by the id column
 * @method     SettingsCurrent findOneByVariable(string $variable) Return the first SettingsCurrent filtered by the variable column
 * @method     SettingsCurrent findOneBySubkey(string $subkey) Return the first SettingsCurrent filtered by the subkey column
 * @method     SettingsCurrent findOneByType(string $type) Return the first SettingsCurrent filtered by the type column
 * @method     SettingsCurrent findOneByCategory(string $category) Return the first SettingsCurrent filtered by the category column
 * @method     SettingsCurrent findOneBySelectedValue(string $selected_value) Return the first SettingsCurrent filtered by the selected_value column
 * @method     SettingsCurrent findOneByTitle(string $title) Return the first SettingsCurrent filtered by the title column
 * @method     SettingsCurrent findOneByComment(string $comment) Return the first SettingsCurrent filtered by the comment column
 * @method     SettingsCurrent findOneByScope(string $scope) Return the first SettingsCurrent filtered by the scope column
 * @method     SettingsCurrent findOneBySubkeytext(string $subkeytext) Return the first SettingsCurrent filtered by the subkeytext column
 * @method     SettingsCurrent findOneByAccessUrl(int $access_url) Return the first SettingsCurrent filtered by the access_url column
 * @method     SettingsCurrent findOneByAccessUrlChangeable(int $access_url_changeable) Return the first SettingsCurrent filtered by the access_url_changeable column
 *
 * @method     array findById(int $id) Return SettingsCurrent objects filtered by the id column
 * @method     array findByVariable(string $variable) Return SettingsCurrent objects filtered by the variable column
 * @method     array findBySubkey(string $subkey) Return SettingsCurrent objects filtered by the subkey column
 * @method     array findByType(string $type) Return SettingsCurrent objects filtered by the type column
 * @method     array findByCategory(string $category) Return SettingsCurrent objects filtered by the category column
 * @method     array findBySelectedValue(string $selected_value) Return SettingsCurrent objects filtered by the selected_value column
 * @method     array findByTitle(string $title) Return SettingsCurrent objects filtered by the title column
 * @method     array findByComment(string $comment) Return SettingsCurrent objects filtered by the comment column
 * @method     array findByScope(string $scope) Return SettingsCurrent objects filtered by the scope column
 * @method     array findBySubkeytext(string $subkeytext) Return SettingsCurrent objects filtered by the subkeytext column
 * @method     array findByAccessUrl(int $access_url) Return SettingsCurrent objects filtered by the access_url column
 * @method     array findByAccessUrlChangeable(int $access_url_changeable) Return SettingsCurrent objects filtered by the access_url_changeable column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSettingsCurrentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSettingsCurrentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SettingsCurrent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SettingsCurrentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SettingsCurrentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SettingsCurrentQuery) {
			return $criteria;
		}
		$query = new SettingsCurrentQuery();
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
	 * @return    SettingsCurrent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SettingsCurrentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SettingsCurrentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SettingsCurrentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SettingsCurrentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the variable column
	 * 
	 * @param     string $variable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SettingsCurrentPeer::VARIABLE, $variable, $comparison);
	}

	/**
	 * Filter the query on the subkey column
	 * 
	 * @param     string $subkey The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterBySubkey($subkey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subkey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subkey)) {
				$subkey = str_replace('*', '%', $subkey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::SUBKEY, $subkey, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the category column
	 * 
	 * @param     string $category The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByCategory($category = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($category)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $category)) {
				$category = str_replace('*', '%', $category);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::CATEGORY, $category, $comparison);
	}

	/**
	 * Filter the query on the selected_value column
	 * 
	 * @param     string $selectedValue The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterBySelectedValue($selectedValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($selectedValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $selectedValue)) {
				$selectedValue = str_replace('*', '%', $selectedValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::SELECTED_VALUE, $selectedValue, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the scope column
	 * 
	 * @param     string $scope The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByScope($scope = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($scope)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $scope)) {
				$scope = str_replace('*', '%', $scope);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::SCOPE, $scope, $comparison);
	}

	/**
	 * Filter the query on the subkeytext column
	 * 
	 * @param     string $subkeytext The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterBySubkeytext($subkeytext = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subkeytext)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subkeytext)) {
				$subkeytext = str_replace('*', '%', $subkeytext);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::SUBKEYTEXT, $subkeytext, $comparison);
	}

	/**
	 * Filter the query on the access_url column
	 * 
	 * @param     int|array $accessUrl The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByAccessUrl($accessUrl = null, $comparison = null)
	{
		if (is_array($accessUrl)) {
			$useMinMax = false;
			if (isset($accessUrl['min'])) {
				$this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL, $accessUrl['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accessUrl['max'])) {
				$this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL, $accessUrl['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL, $accessUrl, $comparison);
	}

	/**
	 * Filter the query on the access_url_changeable column
	 * 
	 * @param     int|array $accessUrlChangeable The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function filterByAccessUrlChangeable($accessUrlChangeable = null, $comparison = null)
	{
		if (is_array($accessUrlChangeable)) {
			$useMinMax = false;
			if (isset($accessUrlChangeable['min'])) {
				$this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL_CHANGEABLE, $accessUrlChangeable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accessUrlChangeable['max'])) {
				$this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL_CHANGEABLE, $accessUrlChangeable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SettingsCurrentPeer::ACCESS_URL_CHANGEABLE, $accessUrlChangeable, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SettingsCurrent $settingsCurrent Object to remove from the list of results
	 *
	 * @return    SettingsCurrentQuery The current query, for fluid interface
	 */
	public function prune($settingsCurrent = null)
	{
		if ($settingsCurrent) {
			$this->addUsingAlias(SettingsCurrentPeer::ID, $settingsCurrent->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSettingsCurrentQuery
