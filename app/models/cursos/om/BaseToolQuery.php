<?php


/**
 * Base class that represents a query for the 'tool' table.
 *
 * 
 *
 * @method     ToolQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ToolQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ToolQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method     ToolQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     ToolQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 * @method     ToolQuery orderByAdmin($order = Criteria::ASC) Order by the admin column
 * @method     ToolQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ToolQuery orderByAddedTool($order = Criteria::ASC) Order by the added_tool column
 * @method     ToolQuery orderByTarget($order = Criteria::ASC) Order by the target column
 * @method     ToolQuery orderByCategory($order = Criteria::ASC) Order by the category column
 *
 * @method     ToolQuery groupById() Group by the id column
 * @method     ToolQuery groupByName() Group by the name column
 * @method     ToolQuery groupByLink() Group by the link column
 * @method     ToolQuery groupByImage() Group by the image column
 * @method     ToolQuery groupByVisibility() Group by the visibility column
 * @method     ToolQuery groupByAdmin() Group by the admin column
 * @method     ToolQuery groupByAddress() Group by the address column
 * @method     ToolQuery groupByAddedTool() Group by the added_tool column
 * @method     ToolQuery groupByTarget() Group by the target column
 * @method     ToolQuery groupByCategory() Group by the category column
 *
 * @method     ToolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ToolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ToolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Tool findOne(PropelPDO $con = null) Return the first Tool matching the query
 * @method     Tool findOneOrCreate(PropelPDO $con = null) Return the first Tool matching the query, or a new Tool object populated from the query conditions when no match is found
 *
 * @method     Tool findOneById(int $id) Return the first Tool filtered by the id column
 * @method     Tool findOneByName(string $name) Return the first Tool filtered by the name column
 * @method     Tool findOneByLink(string $link) Return the first Tool filtered by the link column
 * @method     Tool findOneByImage(string $image) Return the first Tool filtered by the image column
 * @method     Tool findOneByVisibility(int $visibility) Return the first Tool filtered by the visibility column
 * @method     Tool findOneByAdmin(string $admin) Return the first Tool filtered by the admin column
 * @method     Tool findOneByAddress(string $address) Return the first Tool filtered by the address column
 * @method     Tool findOneByAddedTool(int $added_tool) Return the first Tool filtered by the added_tool column
 * @method     Tool findOneByTarget(string $target) Return the first Tool filtered by the target column
 * @method     Tool findOneByCategory(string $category) Return the first Tool filtered by the category column
 *
 * @method     array findById(int $id) Return Tool objects filtered by the id column
 * @method     array findByName(string $name) Return Tool objects filtered by the name column
 * @method     array findByLink(string $link) Return Tool objects filtered by the link column
 * @method     array findByImage(string $image) Return Tool objects filtered by the image column
 * @method     array findByVisibility(int $visibility) Return Tool objects filtered by the visibility column
 * @method     array findByAdmin(string $admin) Return Tool objects filtered by the admin column
 * @method     array findByAddress(string $address) Return Tool objects filtered by the address column
 * @method     array findByAddedTool(int $added_tool) Return Tool objects filtered by the added_tool column
 * @method     array findByTarget(string $target) Return Tool objects filtered by the target column
 * @method     array findByCategory(string $category) Return Tool objects filtered by the category column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseToolQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseToolQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Tool', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ToolQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ToolQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ToolQuery) {
			return $criteria;
		}
		$query = new ToolQuery();
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
	 * @return    Tool|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ToolPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ToolPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ToolPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ToolPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the link column
	 * 
	 * @param     string $link The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByLink($link = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($link)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $link)) {
				$link = str_replace('*', '%', $link);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolPeer::LINK, $link, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($image)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $image)) {
				$image = str_replace('*', '%', $image);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolPeer::IMAGE, $image, $comparison);
	}

	/**
	 * Filter the query on the visibility column
	 * 
	 * @param     int|array $visibility The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility = null, $comparison = null)
	{
		if (is_array($visibility)) {
			$useMinMax = false;
			if (isset($visibility['min'])) {
				$this->addUsingAlias(ToolPeer::VISIBILITY, $visibility['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibility['max'])) {
				$this->addUsingAlias(ToolPeer::VISIBILITY, $visibility['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ToolPeer::VISIBILITY, $visibility, $comparison);
	}

	/**
	 * Filter the query on the admin column
	 * 
	 * @param     string $admin The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByAdmin($admin = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($admin)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $admin)) {
				$admin = str_replace('*', '%', $admin);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolPeer::ADMIN, $admin, $comparison);
	}

	/**
	 * Filter the query on the address column
	 * 
	 * @param     string $address The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByAddress($address = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address)) {
				$address = str_replace('*', '%', $address);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolPeer::ADDRESS, $address, $comparison);
	}

	/**
	 * Filter the query on the added_tool column
	 * 
	 * @param     int|array $addedTool The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function filterByAddedTool($addedTool = null, $comparison = null)
	{
		if (is_array($addedTool)) {
			$useMinMax = false;
			if (isset($addedTool['min'])) {
				$this->addUsingAlias(ToolPeer::ADDED_TOOL, $addedTool['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedTool['max'])) {
				$this->addUsingAlias(ToolPeer::ADDED_TOOL, $addedTool['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ToolPeer::ADDED_TOOL, $addedTool, $comparison);
	}

	/**
	 * Filter the query on the target column
	 * 
	 * @param     string $target The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ToolPeer::TARGET, $target, $comparison);
	}

	/**
	 * Filter the query on the category column
	 * 
	 * @param     string $category The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ToolPeer::CATEGORY, $category, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Tool $tool Object to remove from the list of results
	 *
	 * @return    ToolQuery The current query, for fluid interface
	 */
	public function prune($tool = null)
	{
		if ($tool) {
			$this->addUsingAlias(ToolPeer::ID, $tool->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseToolQuery
