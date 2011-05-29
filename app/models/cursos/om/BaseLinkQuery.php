<?php


/**
 * Base class that represents a query for the 'link' table.
 *
 * 
 *
 * @method     LinkQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LinkQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     LinkQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     LinkQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     LinkQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     LinkQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 * @method     LinkQuery orderByOnHomepage($order = Criteria::ASC) Order by the on_homepage column
 * @method     LinkQuery orderByTarget($order = Criteria::ASC) Order by the target column
 *
 * @method     LinkQuery groupById() Group by the id column
 * @method     LinkQuery groupByUrl() Group by the url column
 * @method     LinkQuery groupByTitle() Group by the title column
 * @method     LinkQuery groupByDescription() Group by the description column
 * @method     LinkQuery groupByCategoryId() Group by the category_id column
 * @method     LinkQuery groupByDisplayOrder() Group by the display_order column
 * @method     LinkQuery groupByOnHomepage() Group by the on_homepage column
 * @method     LinkQuery groupByTarget() Group by the target column
 *
 * @method     LinkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LinkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LinkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Link findOne(PropelPDO $con = null) Return the first Link matching the query
 * @method     Link findOneOrCreate(PropelPDO $con = null) Return the first Link matching the query, or a new Link object populated from the query conditions when no match is found
 *
 * @method     Link findOneById(int $id) Return the first Link filtered by the id column
 * @method     Link findOneByUrl(string $url) Return the first Link filtered by the url column
 * @method     Link findOneByTitle(string $title) Return the first Link filtered by the title column
 * @method     Link findOneByDescription(string $description) Return the first Link filtered by the description column
 * @method     Link findOneByCategoryId(int $category_id) Return the first Link filtered by the category_id column
 * @method     Link findOneByDisplayOrder(int $display_order) Return the first Link filtered by the display_order column
 * @method     Link findOneByOnHomepage(string $on_homepage) Return the first Link filtered by the on_homepage column
 * @method     Link findOneByTarget(string $target) Return the first Link filtered by the target column
 *
 * @method     array findById(int $id) Return Link objects filtered by the id column
 * @method     array findByUrl(string $url) Return Link objects filtered by the url column
 * @method     array findByTitle(string $title) Return Link objects filtered by the title column
 * @method     array findByDescription(string $description) Return Link objects filtered by the description column
 * @method     array findByCategoryId(int $category_id) Return Link objects filtered by the category_id column
 * @method     array findByDisplayOrder(int $display_order) Return Link objects filtered by the display_order column
 * @method     array findByOnHomepage(string $on_homepage) Return Link objects filtered by the on_homepage column
 * @method     array findByTarget(string $target) Return Link objects filtered by the target column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLinkQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLinkQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Link', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LinkQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LinkQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LinkQuery) {
			return $criteria;
		}
		$query = new LinkQuery();
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
	 * @return    Link|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LinkPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LinkPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LinkPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LinkPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($url)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $url)) {
				$url = str_replace('*', '%', $url);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LinkPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LinkPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LinkPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(LinkPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(LinkPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LinkPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(LinkPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(LinkPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LinkPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Filter the query on the on_homepage column
	 * 
	 * @param     string $onHomepage The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByOnHomepage($onHomepage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($onHomepage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $onHomepage)) {
				$onHomepage = str_replace('*', '%', $onHomepage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LinkPeer::ON_HOMEPAGE, $onHomepage, $comparison);
	}

	/**
	 * Filter the query on the target column
	 * 
	 * @param     string $target The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function filterByTarget($target = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($target)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $target)) {
				$target = str_replace('*', '%', $target);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LinkPeer::TARGET, $target, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Link $link Object to remove from the list of results
	 *
	 * @return    LinkQuery The current query, for fluid interface
	 */
	public function prune($link = null)
	{
		if ($link) {
			$this->addUsingAlias(LinkPeer::ID, $link->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLinkQuery
