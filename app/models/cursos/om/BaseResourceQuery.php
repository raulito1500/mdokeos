<?php


/**
 * Base class that represents a query for the 'resource' table.
 *
 * 
 *
 * @method     ResourceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ResourceQuery orderBySourceType($order = Criteria::ASC) Order by the source_type column
 * @method     ResourceQuery orderBySourceId($order = Criteria::ASC) Order by the source_id column
 * @method     ResourceQuery orderByResourceType($order = Criteria::ASC) Order by the resource_type column
 * @method     ResourceQuery orderByResourceId($order = Criteria::ASC) Order by the resource_id column
 *
 * @method     ResourceQuery groupById() Group by the id column
 * @method     ResourceQuery groupBySourceType() Group by the source_type column
 * @method     ResourceQuery groupBySourceId() Group by the source_id column
 * @method     ResourceQuery groupByResourceType() Group by the resource_type column
 * @method     ResourceQuery groupByResourceId() Group by the resource_id column
 *
 * @method     ResourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ResourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ResourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Resource findOne(PropelPDO $con = null) Return the first Resource matching the query
 * @method     Resource findOneOrCreate(PropelPDO $con = null) Return the first Resource matching the query, or a new Resource object populated from the query conditions when no match is found
 *
 * @method     Resource findOneById(int $id) Return the first Resource filtered by the id column
 * @method     Resource findOneBySourceType(string $source_type) Return the first Resource filtered by the source_type column
 * @method     Resource findOneBySourceId(int $source_id) Return the first Resource filtered by the source_id column
 * @method     Resource findOneByResourceType(string $resource_type) Return the first Resource filtered by the resource_type column
 * @method     Resource findOneByResourceId(int $resource_id) Return the first Resource filtered by the resource_id column
 *
 * @method     array findById(int $id) Return Resource objects filtered by the id column
 * @method     array findBySourceType(string $source_type) Return Resource objects filtered by the source_type column
 * @method     array findBySourceId(int $source_id) Return Resource objects filtered by the source_id column
 * @method     array findByResourceType(string $resource_type) Return Resource objects filtered by the resource_type column
 * @method     array findByResourceId(int $resource_id) Return Resource objects filtered by the resource_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseResourceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseResourceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Resource', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ResourceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ResourceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ResourceQuery) {
			return $criteria;
		}
		$query = new ResourceQuery();
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
	 * @return    Resource|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ResourcePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ResourcePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ResourcePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ResourcePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the source_type column
	 * 
	 * @param     string $sourceType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterBySourceType($sourceType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sourceType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sourceType)) {
				$sourceType = str_replace('*', '%', $sourceType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ResourcePeer::SOURCE_TYPE, $sourceType, $comparison);
	}

	/**
	 * Filter the query on the source_id column
	 * 
	 * @param     int|array $sourceId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterBySourceId($sourceId = null, $comparison = null)
	{
		if (is_array($sourceId)) {
			$useMinMax = false;
			if (isset($sourceId['min'])) {
				$this->addUsingAlias(ResourcePeer::SOURCE_ID, $sourceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sourceId['max'])) {
				$this->addUsingAlias(ResourcePeer::SOURCE_ID, $sourceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ResourcePeer::SOURCE_ID, $sourceId, $comparison);
	}

	/**
	 * Filter the query on the resource_type column
	 * 
	 * @param     string $resourceType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterByResourceType($resourceType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($resourceType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $resourceType)) {
				$resourceType = str_replace('*', '%', $resourceType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ResourcePeer::RESOURCE_TYPE, $resourceType, $comparison);
	}

	/**
	 * Filter the query on the resource_id column
	 * 
	 * @param     int|array $resourceId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function filterByResourceId($resourceId = null, $comparison = null)
	{
		if (is_array($resourceId)) {
			$useMinMax = false;
			if (isset($resourceId['min'])) {
				$this->addUsingAlias(ResourcePeer::RESOURCE_ID, $resourceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resourceId['max'])) {
				$this->addUsingAlias(ResourcePeer::RESOURCE_ID, $resourceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ResourcePeer::RESOURCE_ID, $resourceId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Resource $resource Object to remove from the list of results
	 *
	 * @return    ResourceQuery The current query, for fluid interface
	 */
	public function prune($resource = null)
	{
		if ($resource) {
			$this->addUsingAlias(ResourcePeer::ID, $resource->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseResourceQuery
