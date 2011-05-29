<?php


/**
 * Base class that represents a query for the 'access_url' table.
 *
 * 
 *
 * @method     AccessUrlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AccessUrlQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     AccessUrlQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     AccessUrlQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     AccessUrlQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method     AccessUrlQuery orderByTms($order = Criteria::ASC) Order by the tms column
 *
 * @method     AccessUrlQuery groupById() Group by the id column
 * @method     AccessUrlQuery groupByUrl() Group by the url column
 * @method     AccessUrlQuery groupByDescription() Group by the description column
 * @method     AccessUrlQuery groupByActive() Group by the active column
 * @method     AccessUrlQuery groupByCreatedBy() Group by the created_by column
 * @method     AccessUrlQuery groupByTms() Group by the tms column
 *
 * @method     AccessUrlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AccessUrlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AccessUrlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AccessUrl findOne(PropelPDO $con = null) Return the first AccessUrl matching the query
 * @method     AccessUrl findOneOrCreate(PropelPDO $con = null) Return the first AccessUrl matching the query, or a new AccessUrl object populated from the query conditions when no match is found
 *
 * @method     AccessUrl findOneById(int $id) Return the first AccessUrl filtered by the id column
 * @method     AccessUrl findOneByUrl(string $url) Return the first AccessUrl filtered by the url column
 * @method     AccessUrl findOneByDescription(string $description) Return the first AccessUrl filtered by the description column
 * @method     AccessUrl findOneByActive(int $active) Return the first AccessUrl filtered by the active column
 * @method     AccessUrl findOneByCreatedBy(int $created_by) Return the first AccessUrl filtered by the created_by column
 * @method     AccessUrl findOneByTms(string $tms) Return the first AccessUrl filtered by the tms column
 *
 * @method     array findById(int $id) Return AccessUrl objects filtered by the id column
 * @method     array findByUrl(string $url) Return AccessUrl objects filtered by the url column
 * @method     array findByDescription(string $description) Return AccessUrl objects filtered by the description column
 * @method     array findByActive(int $active) Return AccessUrl objects filtered by the active column
 * @method     array findByCreatedBy(int $created_by) Return AccessUrl objects filtered by the created_by column
 * @method     array findByTms(string $tms) Return AccessUrl objects filtered by the tms column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAccessUrlQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAccessUrlQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'AccessUrl', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AccessUrlQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AccessUrlQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AccessUrlQuery) {
			return $criteria;
		}
		$query = new AccessUrlQuery();
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
	 * @return    AccessUrl|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AccessUrlPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AccessUrlPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AccessUrlPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AccessUrlPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AccessUrlPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AccessUrlPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     int|array $active The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(AccessUrlPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(AccessUrlPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AccessUrlPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the created_by column
	 * 
	 * @param     int|array $createdBy The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterByCreatedBy($createdBy = null, $comparison = null)
	{
		if (is_array($createdBy)) {
			$useMinMax = false;
			if (isset($createdBy['min'])) {
				$this->addUsingAlias(AccessUrlPeer::CREATED_BY, $createdBy['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdBy['max'])) {
				$this->addUsingAlias(AccessUrlPeer::CREATED_BY, $createdBy['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AccessUrlPeer::CREATED_BY, $createdBy, $comparison);
	}

	/**
	 * Filter the query on the tms column
	 * 
	 * @param     string|array $tms The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function filterByTms($tms = null, $comparison = null)
	{
		if (is_array($tms)) {
			$useMinMax = false;
			if (isset($tms['min'])) {
				$this->addUsingAlias(AccessUrlPeer::TMS, $tms['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tms['max'])) {
				$this->addUsingAlias(AccessUrlPeer::TMS, $tms['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AccessUrlPeer::TMS, $tms, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AccessUrl $accessUrl Object to remove from the list of results
	 *
	 * @return    AccessUrlQuery The current query, for fluid interface
	 */
	public function prune($accessUrl = null)
	{
		if ($accessUrl) {
			$this->addUsingAlias(AccessUrlPeer::ID, $accessUrl->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAccessUrlQuery
