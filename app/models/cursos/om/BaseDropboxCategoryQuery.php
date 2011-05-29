<?php


/**
 * Base class that represents a query for the 'dropbox_category' table.
 *
 * 
 *
 * @method     DropboxCategoryQuery orderByCatId($order = Criteria::ASC) Order by the cat_id column
 * @method     DropboxCategoryQuery orderByCatName($order = Criteria::ASC) Order by the cat_name column
 * @method     DropboxCategoryQuery orderByReceived($order = Criteria::ASC) Order by the received column
 * @method     DropboxCategoryQuery orderBySent($order = Criteria::ASC) Order by the sent column
 * @method     DropboxCategoryQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     DropboxCategoryQuery groupByCatId() Group by the cat_id column
 * @method     DropboxCategoryQuery groupByCatName() Group by the cat_name column
 * @method     DropboxCategoryQuery groupByReceived() Group by the received column
 * @method     DropboxCategoryQuery groupBySent() Group by the sent column
 * @method     DropboxCategoryQuery groupByUserId() Group by the user_id column
 *
 * @method     DropboxCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DropboxCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DropboxCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DropboxCategory findOne(PropelPDO $con = null) Return the first DropboxCategory matching the query
 * @method     DropboxCategory findOneOrCreate(PropelPDO $con = null) Return the first DropboxCategory matching the query, or a new DropboxCategory object populated from the query conditions when no match is found
 *
 * @method     DropboxCategory findOneByCatId(int $cat_id) Return the first DropboxCategory filtered by the cat_id column
 * @method     DropboxCategory findOneByCatName(string $cat_name) Return the first DropboxCategory filtered by the cat_name column
 * @method     DropboxCategory findOneByReceived(int $received) Return the first DropboxCategory filtered by the received column
 * @method     DropboxCategory findOneBySent(int $sent) Return the first DropboxCategory filtered by the sent column
 * @method     DropboxCategory findOneByUserId(int $user_id) Return the first DropboxCategory filtered by the user_id column
 *
 * @method     array findByCatId(int $cat_id) Return DropboxCategory objects filtered by the cat_id column
 * @method     array findByCatName(string $cat_name) Return DropboxCategory objects filtered by the cat_name column
 * @method     array findByReceived(int $received) Return DropboxCategory objects filtered by the received column
 * @method     array findBySent(int $sent) Return DropboxCategory objects filtered by the sent column
 * @method     array findByUserId(int $user_id) Return DropboxCategory objects filtered by the user_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDropboxCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDropboxCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'DropboxCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DropboxCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DropboxCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DropboxCategoryQuery) {
			return $criteria;
		}
		$query = new DropboxCategoryQuery();
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
	 * @return    DropboxCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DropboxCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DropboxCategoryPeer::CAT_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DropboxCategoryPeer::CAT_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the cat_id column
	 * 
	 * @param     int|array $catId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatId($catId = null, $comparison = null)
	{
		if (is_array($catId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxCategoryPeer::CAT_ID, $catId, $comparison);
	}

	/**
	 * Filter the query on the cat_name column
	 * 
	 * @param     string $catName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatName($catName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($catName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $catName)) {
				$catName = str_replace('*', '%', $catName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DropboxCategoryPeer::CAT_NAME, $catName, $comparison);
	}

	/**
	 * Filter the query on the received column
	 * 
	 * @param     int|array $received The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByReceived($received = null, $comparison = null)
	{
		if (is_array($received)) {
			$useMinMax = false;
			if (isset($received['min'])) {
				$this->addUsingAlias(DropboxCategoryPeer::RECEIVED, $received['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($received['max'])) {
				$this->addUsingAlias(DropboxCategoryPeer::RECEIVED, $received['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxCategoryPeer::RECEIVED, $received, $comparison);
	}

	/**
	 * Filter the query on the sent column
	 * 
	 * @param     int|array $sent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterBySent($sent = null, $comparison = null)
	{
		if (is_array($sent)) {
			$useMinMax = false;
			if (isset($sent['min'])) {
				$this->addUsingAlias(DropboxCategoryPeer::SENT, $sent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sent['max'])) {
				$this->addUsingAlias(DropboxCategoryPeer::SENT, $sent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxCategoryPeer::SENT, $sent, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(DropboxCategoryPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(DropboxCategoryPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxCategoryPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DropboxCategory $dropboxCategory Object to remove from the list of results
	 *
	 * @return    DropboxCategoryQuery The current query, for fluid interface
	 */
	public function prune($dropboxCategory = null)
	{
		if ($dropboxCategory) {
			$this->addUsingAlias(DropboxCategoryPeer::CAT_ID, $dropboxCategory->getCatId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDropboxCategoryQuery
