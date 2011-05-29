<?php


/**
 * Base class that represents a query for the 'link_category' table.
 *
 * 
 *
 * @method     LinkCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LinkCategoryQuery orderByCategoryTitle($order = Criteria::ASC) Order by the category_title column
 * @method     LinkCategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     LinkCategoryQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 *
 * @method     LinkCategoryQuery groupById() Group by the id column
 * @method     LinkCategoryQuery groupByCategoryTitle() Group by the category_title column
 * @method     LinkCategoryQuery groupByDescription() Group by the description column
 * @method     LinkCategoryQuery groupByDisplayOrder() Group by the display_order column
 *
 * @method     LinkCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LinkCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LinkCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LinkCategory findOne(PropelPDO $con = null) Return the first LinkCategory matching the query
 * @method     LinkCategory findOneOrCreate(PropelPDO $con = null) Return the first LinkCategory matching the query, or a new LinkCategory object populated from the query conditions when no match is found
 *
 * @method     LinkCategory findOneById(int $id) Return the first LinkCategory filtered by the id column
 * @method     LinkCategory findOneByCategoryTitle(string $category_title) Return the first LinkCategory filtered by the category_title column
 * @method     LinkCategory findOneByDescription(string $description) Return the first LinkCategory filtered by the description column
 * @method     LinkCategory findOneByDisplayOrder(int $display_order) Return the first LinkCategory filtered by the display_order column
 *
 * @method     array findById(int $id) Return LinkCategory objects filtered by the id column
 * @method     array findByCategoryTitle(string $category_title) Return LinkCategory objects filtered by the category_title column
 * @method     array findByDescription(string $description) Return LinkCategory objects filtered by the description column
 * @method     array findByDisplayOrder(int $display_order) Return LinkCategory objects filtered by the display_order column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLinkCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLinkCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LinkCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LinkCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LinkCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LinkCategoryQuery) {
			return $criteria;
		}
		$query = new LinkCategoryQuery();
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
	 * @return    LinkCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LinkCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LinkCategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LinkCategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(LinkCategoryPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(LinkCategoryPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LinkCategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the category_title column
	 * 
	 * @param     string $categoryTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryTitle($categoryTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($categoryTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $categoryTitle)) {
				$categoryTitle = str_replace('*', '%', $categoryTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LinkCategoryPeer::CATEGORY_TITLE, $categoryTitle, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LinkCategoryPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(LinkCategoryPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(LinkCategoryPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LinkCategoryPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LinkCategory $linkCategory Object to remove from the list of results
	 *
	 * @return    LinkCategoryQuery The current query, for fluid interface
	 */
	public function prune($linkCategory = null)
	{
		if ($linkCategory) {
			$this->addUsingAlias(LinkCategoryPeer::ID, $linkCategory->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLinkCategoryQuery
