<?php


/**
 * Base class that represents a query for the 'search_engine_ref' table.
 *
 * 
 *
 * @method     SearchEngineRefQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SearchEngineRefQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     SearchEngineRefQuery orderByToolId($order = Criteria::ASC) Order by the tool_id column
 * @method     SearchEngineRefQuery orderByRefIdHighLevel($order = Criteria::ASC) Order by the ref_id_high_level column
 * @method     SearchEngineRefQuery orderByRefIdSecondLevel($order = Criteria::ASC) Order by the ref_id_second_level column
 * @method     SearchEngineRefQuery orderBySearchDid($order = Criteria::ASC) Order by the search_did column
 *
 * @method     SearchEngineRefQuery groupById() Group by the id column
 * @method     SearchEngineRefQuery groupByCourseCode() Group by the course_code column
 * @method     SearchEngineRefQuery groupByToolId() Group by the tool_id column
 * @method     SearchEngineRefQuery groupByRefIdHighLevel() Group by the ref_id_high_level column
 * @method     SearchEngineRefQuery groupByRefIdSecondLevel() Group by the ref_id_second_level column
 * @method     SearchEngineRefQuery groupBySearchDid() Group by the search_did column
 *
 * @method     SearchEngineRefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SearchEngineRefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SearchEngineRefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SearchEngineRef findOne(PropelPDO $con = null) Return the first SearchEngineRef matching the query
 * @method     SearchEngineRef findOneOrCreate(PropelPDO $con = null) Return the first SearchEngineRef matching the query, or a new SearchEngineRef object populated from the query conditions when no match is found
 *
 * @method     SearchEngineRef findOneById(int $id) Return the first SearchEngineRef filtered by the id column
 * @method     SearchEngineRef findOneByCourseCode(string $course_code) Return the first SearchEngineRef filtered by the course_code column
 * @method     SearchEngineRef findOneByToolId(string $tool_id) Return the first SearchEngineRef filtered by the tool_id column
 * @method     SearchEngineRef findOneByRefIdHighLevel(int $ref_id_high_level) Return the first SearchEngineRef filtered by the ref_id_high_level column
 * @method     SearchEngineRef findOneByRefIdSecondLevel(int $ref_id_second_level) Return the first SearchEngineRef filtered by the ref_id_second_level column
 * @method     SearchEngineRef findOneBySearchDid(int $search_did) Return the first SearchEngineRef filtered by the search_did column
 *
 * @method     array findById(int $id) Return SearchEngineRef objects filtered by the id column
 * @method     array findByCourseCode(string $course_code) Return SearchEngineRef objects filtered by the course_code column
 * @method     array findByToolId(string $tool_id) Return SearchEngineRef objects filtered by the tool_id column
 * @method     array findByRefIdHighLevel(int $ref_id_high_level) Return SearchEngineRef objects filtered by the ref_id_high_level column
 * @method     array findByRefIdSecondLevel(int $ref_id_second_level) Return SearchEngineRef objects filtered by the ref_id_second_level column
 * @method     array findBySearchDid(int $search_did) Return SearchEngineRef objects filtered by the search_did column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSearchEngineRefQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSearchEngineRefQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SearchEngineRef', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SearchEngineRefQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SearchEngineRefQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SearchEngineRefQuery) {
			return $criteria;
		}
		$query = new SearchEngineRefQuery();
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
	 * @return    SearchEngineRef|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SearchEngineRefPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SearchEngineRefPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SearchEngineRefPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SearchEngineRefPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByCourseCode($courseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseCode)) {
				$courseCode = str_replace('*', '%', $courseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SearchEngineRefPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the tool_id column
	 * 
	 * @param     string $toolId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByToolId($toolId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($toolId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $toolId)) {
				$toolId = str_replace('*', '%', $toolId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SearchEngineRefPeer::TOOL_ID, $toolId, $comparison);
	}

	/**
	 * Filter the query on the ref_id_high_level column
	 * 
	 * @param     int|array $refIdHighLevel The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByRefIdHighLevel($refIdHighLevel = null, $comparison = null)
	{
		if (is_array($refIdHighLevel)) {
			$useMinMax = false;
			if (isset($refIdHighLevel['min'])) {
				$this->addUsingAlias(SearchEngineRefPeer::REF_ID_HIGH_LEVEL, $refIdHighLevel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refIdHighLevel['max'])) {
				$this->addUsingAlias(SearchEngineRefPeer::REF_ID_HIGH_LEVEL, $refIdHighLevel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SearchEngineRefPeer::REF_ID_HIGH_LEVEL, $refIdHighLevel, $comparison);
	}

	/**
	 * Filter the query on the ref_id_second_level column
	 * 
	 * @param     int|array $refIdSecondLevel The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterByRefIdSecondLevel($refIdSecondLevel = null, $comparison = null)
	{
		if (is_array($refIdSecondLevel)) {
			$useMinMax = false;
			if (isset($refIdSecondLevel['min'])) {
				$this->addUsingAlias(SearchEngineRefPeer::REF_ID_SECOND_LEVEL, $refIdSecondLevel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refIdSecondLevel['max'])) {
				$this->addUsingAlias(SearchEngineRefPeer::REF_ID_SECOND_LEVEL, $refIdSecondLevel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SearchEngineRefPeer::REF_ID_SECOND_LEVEL, $refIdSecondLevel, $comparison);
	}

	/**
	 * Filter the query on the search_did column
	 * 
	 * @param     int|array $searchDid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function filterBySearchDid($searchDid = null, $comparison = null)
	{
		if (is_array($searchDid)) {
			$useMinMax = false;
			if (isset($searchDid['min'])) {
				$this->addUsingAlias(SearchEngineRefPeer::SEARCH_DID, $searchDid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($searchDid['max'])) {
				$this->addUsingAlias(SearchEngineRefPeer::SEARCH_DID, $searchDid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SearchEngineRefPeer::SEARCH_DID, $searchDid, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SearchEngineRef $searchEngineRef Object to remove from the list of results
	 *
	 * @return    SearchEngineRefQuery The current query, for fluid interface
	 */
	public function prune($searchEngineRef = null)
	{
		if ($searchEngineRef) {
			$this->addUsingAlias(SearchEngineRefPeer::ID, $searchEngineRef->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSearchEngineRefQuery
