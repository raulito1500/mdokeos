<?php


/**
 * Base class that represents a query for the 'item_property' table.
 *
 * 
 *
 * @method     ItemPropertyQuery orderByTool($order = Criteria::ASC) Order by the tool column
 * @method     ItemPropertyQuery orderByInsertUserId($order = Criteria::ASC) Order by the insert_user_id column
 * @method     ItemPropertyQuery orderByInsertDate($order = Criteria::ASC) Order by the insert_date column
 * @method     ItemPropertyQuery orderByLasteditDate($order = Criteria::ASC) Order by the lastedit_date column
 * @method     ItemPropertyQuery orderByRef($order = Criteria::ASC) Order by the ref column
 * @method     ItemPropertyQuery orderByLasteditType($order = Criteria::ASC) Order by the lastedit_type column
 * @method     ItemPropertyQuery orderByLasteditUserId($order = Criteria::ASC) Order by the lastedit_user_id column
 * @method     ItemPropertyQuery orderByToGroupId($order = Criteria::ASC) Order by the to_group_id column
 * @method     ItemPropertyQuery orderByToUserId($order = Criteria::ASC) Order by the to_user_id column
 * @method     ItemPropertyQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 * @method     ItemPropertyQuery orderByStartVisible($order = Criteria::ASC) Order by the start_visible column
 * @method     ItemPropertyQuery orderByEndVisible($order = Criteria::ASC) Order by the end_visible column
 * @method     ItemPropertyQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     ItemPropertyQuery groupByTool() Group by the tool column
 * @method     ItemPropertyQuery groupByInsertUserId() Group by the insert_user_id column
 * @method     ItemPropertyQuery groupByInsertDate() Group by the insert_date column
 * @method     ItemPropertyQuery groupByLasteditDate() Group by the lastedit_date column
 * @method     ItemPropertyQuery groupByRef() Group by the ref column
 * @method     ItemPropertyQuery groupByLasteditType() Group by the lastedit_type column
 * @method     ItemPropertyQuery groupByLasteditUserId() Group by the lastedit_user_id column
 * @method     ItemPropertyQuery groupByToGroupId() Group by the to_group_id column
 * @method     ItemPropertyQuery groupByToUserId() Group by the to_user_id column
 * @method     ItemPropertyQuery groupByVisibility() Group by the visibility column
 * @method     ItemPropertyQuery groupByStartVisible() Group by the start_visible column
 * @method     ItemPropertyQuery groupByEndVisible() Group by the end_visible column
 * @method     ItemPropertyQuery groupById() Group by the id column
 *
 * @method     ItemPropertyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ItemPropertyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ItemPropertyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ItemProperty findOne(PropelPDO $con = null) Return the first ItemProperty matching the query
 * @method     ItemProperty findOneOrCreate(PropelPDO $con = null) Return the first ItemProperty matching the query, or a new ItemProperty object populated from the query conditions when no match is found
 *
 * @method     ItemProperty findOneByTool(string $tool) Return the first ItemProperty filtered by the tool column
 * @method     ItemProperty findOneByInsertUserId(int $insert_user_id) Return the first ItemProperty filtered by the insert_user_id column
 * @method     ItemProperty findOneByInsertDate(string $insert_date) Return the first ItemProperty filtered by the insert_date column
 * @method     ItemProperty findOneByLasteditDate(string $lastedit_date) Return the first ItemProperty filtered by the lastedit_date column
 * @method     ItemProperty findOneByRef(int $ref) Return the first ItemProperty filtered by the ref column
 * @method     ItemProperty findOneByLasteditType(string $lastedit_type) Return the first ItemProperty filtered by the lastedit_type column
 * @method     ItemProperty findOneByLasteditUserId(int $lastedit_user_id) Return the first ItemProperty filtered by the lastedit_user_id column
 * @method     ItemProperty findOneByToGroupId(int $to_group_id) Return the first ItemProperty filtered by the to_group_id column
 * @method     ItemProperty findOneByToUserId(int $to_user_id) Return the first ItemProperty filtered by the to_user_id column
 * @method     ItemProperty findOneByVisibility(int $visibility) Return the first ItemProperty filtered by the visibility column
 * @method     ItemProperty findOneByStartVisible(string $start_visible) Return the first ItemProperty filtered by the start_visible column
 * @method     ItemProperty findOneByEndVisible(string $end_visible) Return the first ItemProperty filtered by the end_visible column
 * @method     ItemProperty findOneById(string $id) Return the first ItemProperty filtered by the id column
 *
 * @method     array findByTool(string $tool) Return ItemProperty objects filtered by the tool column
 * @method     array findByInsertUserId(int $insert_user_id) Return ItemProperty objects filtered by the insert_user_id column
 * @method     array findByInsertDate(string $insert_date) Return ItemProperty objects filtered by the insert_date column
 * @method     array findByLasteditDate(string $lastedit_date) Return ItemProperty objects filtered by the lastedit_date column
 * @method     array findByRef(int $ref) Return ItemProperty objects filtered by the ref column
 * @method     array findByLasteditType(string $lastedit_type) Return ItemProperty objects filtered by the lastedit_type column
 * @method     array findByLasteditUserId(int $lastedit_user_id) Return ItemProperty objects filtered by the lastedit_user_id column
 * @method     array findByToGroupId(int $to_group_id) Return ItemProperty objects filtered by the to_group_id column
 * @method     array findByToUserId(int $to_user_id) Return ItemProperty objects filtered by the to_user_id column
 * @method     array findByVisibility(int $visibility) Return ItemProperty objects filtered by the visibility column
 * @method     array findByStartVisible(string $start_visible) Return ItemProperty objects filtered by the start_visible column
 * @method     array findByEndVisible(string $end_visible) Return ItemProperty objects filtered by the end_visible column
 * @method     array findById(string $id) Return ItemProperty objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseItemPropertyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseItemPropertyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ItemProperty', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ItemPropertyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ItemPropertyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ItemPropertyQuery) {
			return $criteria;
		}
		$query = new ItemPropertyQuery();
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
	 * @return    ItemProperty|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ItemPropertyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ItemPropertyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ItemPropertyPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the tool column
	 * 
	 * @param     string $tool The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByTool($tool = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tool)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tool)) {
				$tool = str_replace('*', '%', $tool);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::TOOL, $tool, $comparison);
	}

	/**
	 * Filter the query on the insert_user_id column
	 * 
	 * @param     int|array $insertUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByInsertUserId($insertUserId = null, $comparison = null)
	{
		if (is_array($insertUserId)) {
			$useMinMax = false;
			if (isset($insertUserId['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::INSERT_USER_ID, $insertUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($insertUserId['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::INSERT_USER_ID, $insertUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::INSERT_USER_ID, $insertUserId, $comparison);
	}

	/**
	 * Filter the query on the insert_date column
	 * 
	 * @param     string|array $insertDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByInsertDate($insertDate = null, $comparison = null)
	{
		if (is_array($insertDate)) {
			$useMinMax = false;
			if (isset($insertDate['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::INSERT_DATE, $insertDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($insertDate['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::INSERT_DATE, $insertDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::INSERT_DATE, $insertDate, $comparison);
	}

	/**
	 * Filter the query on the lastedit_date column
	 * 
	 * @param     string|array $lasteditDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByLasteditDate($lasteditDate = null, $comparison = null)
	{
		if (is_array($lasteditDate)) {
			$useMinMax = false;
			if (isset($lasteditDate['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::LASTEDIT_DATE, $lasteditDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lasteditDate['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::LASTEDIT_DATE, $lasteditDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::LASTEDIT_DATE, $lasteditDate, $comparison);
	}

	/**
	 * Filter the query on the ref column
	 * 
	 * @param     int|array $ref The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByRef($ref = null, $comparison = null)
	{
		if (is_array($ref)) {
			$useMinMax = false;
			if (isset($ref['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::REF, $ref['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ref['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::REF, $ref['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::REF, $ref, $comparison);
	}

	/**
	 * Filter the query on the lastedit_type column
	 * 
	 * @param     string $lasteditType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByLasteditType($lasteditType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lasteditType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lasteditType)) {
				$lasteditType = str_replace('*', '%', $lasteditType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::LASTEDIT_TYPE, $lasteditType, $comparison);
	}

	/**
	 * Filter the query on the lastedit_user_id column
	 * 
	 * @param     int|array $lasteditUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByLasteditUserId($lasteditUserId = null, $comparison = null)
	{
		if (is_array($lasteditUserId)) {
			$useMinMax = false;
			if (isset($lasteditUserId['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::LASTEDIT_USER_ID, $lasteditUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lasteditUserId['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::LASTEDIT_USER_ID, $lasteditUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::LASTEDIT_USER_ID, $lasteditUserId, $comparison);
	}

	/**
	 * Filter the query on the to_group_id column
	 * 
	 * @param     int|array $toGroupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByToGroupId($toGroupId = null, $comparison = null)
	{
		if (is_array($toGroupId)) {
			$useMinMax = false;
			if (isset($toGroupId['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::TO_GROUP_ID, $toGroupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($toGroupId['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::TO_GROUP_ID, $toGroupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::TO_GROUP_ID, $toGroupId, $comparison);
	}

	/**
	 * Filter the query on the to_user_id column
	 * 
	 * @param     int|array $toUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByToUserId($toUserId = null, $comparison = null)
	{
		if (is_array($toUserId)) {
			$useMinMax = false;
			if (isset($toUserId['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::TO_USER_ID, $toUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($toUserId['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::TO_USER_ID, $toUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::TO_USER_ID, $toUserId, $comparison);
	}

	/**
	 * Filter the query on the visibility column
	 * 
	 * @param     int|array $visibility The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility = null, $comparison = null)
	{
		if (is_array($visibility)) {
			$useMinMax = false;
			if (isset($visibility['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::VISIBILITY, $visibility['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibility['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::VISIBILITY, $visibility['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::VISIBILITY, $visibility, $comparison);
	}

	/**
	 * Filter the query on the start_visible column
	 * 
	 * @param     string|array $startVisible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByStartVisible($startVisible = null, $comparison = null)
	{
		if (is_array($startVisible)) {
			$useMinMax = false;
			if (isset($startVisible['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::START_VISIBLE, $startVisible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startVisible['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::START_VISIBLE, $startVisible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::START_VISIBLE, $startVisible, $comparison);
	}

	/**
	 * Filter the query on the end_visible column
	 * 
	 * @param     string|array $endVisible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterByEndVisible($endVisible = null, $comparison = null)
	{
		if (is_array($endVisible)) {
			$useMinMax = false;
			if (isset($endVisible['min'])) {
				$this->addUsingAlias(ItemPropertyPeer::END_VISIBLE, $endVisible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endVisible['max'])) {
				$this->addUsingAlias(ItemPropertyPeer::END_VISIBLE, $endVisible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ItemPropertyPeer::END_VISIBLE, $endVisible, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ItemPropertyPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ItemProperty $itemProperty Object to remove from the list of results
	 *
	 * @return    ItemPropertyQuery The current query, for fluid interface
	 */
	public function prune($itemProperty = null)
	{
		if ($itemProperty) {
			$this->addUsingAlias(ItemPropertyPeer::ID, $itemProperty->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseItemPropertyQuery
