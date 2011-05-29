<?php


/**
 * Base class that represents a query for the 'forum_category' table.
 *
 * 
 *
 * @method     ForumCategoryQuery orderByCatId($order = Criteria::ASC) Order by the cat_id column
 * @method     ForumCategoryQuery orderByCatTitle($order = Criteria::ASC) Order by the cat_title column
 * @method     ForumCategoryQuery orderByCatComment($order = Criteria::ASC) Order by the cat_comment column
 * @method     ForumCategoryQuery orderByCatOrder($order = Criteria::ASC) Order by the cat_order column
 * @method     ForumCategoryQuery orderByLocked($order = Criteria::ASC) Order by the locked column
 * @method     ForumCategoryQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     ForumCategoryQuery groupByCatId() Group by the cat_id column
 * @method     ForumCategoryQuery groupByCatTitle() Group by the cat_title column
 * @method     ForumCategoryQuery groupByCatComment() Group by the cat_comment column
 * @method     ForumCategoryQuery groupByCatOrder() Group by the cat_order column
 * @method     ForumCategoryQuery groupByLocked() Group by the locked column
 * @method     ForumCategoryQuery groupBySessionId() Group by the session_id column
 *
 * @method     ForumCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumCategory findOne(PropelPDO $con = null) Return the first ForumCategory matching the query
 * @method     ForumCategory findOneOrCreate(PropelPDO $con = null) Return the first ForumCategory matching the query, or a new ForumCategory object populated from the query conditions when no match is found
 *
 * @method     ForumCategory findOneByCatId(int $cat_id) Return the first ForumCategory filtered by the cat_id column
 * @method     ForumCategory findOneByCatTitle(string $cat_title) Return the first ForumCategory filtered by the cat_title column
 * @method     ForumCategory findOneByCatComment(string $cat_comment) Return the first ForumCategory filtered by the cat_comment column
 * @method     ForumCategory findOneByCatOrder(int $cat_order) Return the first ForumCategory filtered by the cat_order column
 * @method     ForumCategory findOneByLocked(int $locked) Return the first ForumCategory filtered by the locked column
 * @method     ForumCategory findOneBySessionId(int $session_id) Return the first ForumCategory filtered by the session_id column
 *
 * @method     array findByCatId(int $cat_id) Return ForumCategory objects filtered by the cat_id column
 * @method     array findByCatTitle(string $cat_title) Return ForumCategory objects filtered by the cat_title column
 * @method     array findByCatComment(string $cat_comment) Return ForumCategory objects filtered by the cat_comment column
 * @method     array findByCatOrder(int $cat_order) Return ForumCategory objects filtered by the cat_order column
 * @method     array findByLocked(int $locked) Return ForumCategory objects filtered by the locked column
 * @method     array findBySessionId(int $session_id) Return ForumCategory objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumCategoryQuery) {
			return $criteria;
		}
		$query = new ForumCategoryQuery();
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
	 * @return    ForumCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumCategoryPeer::CAT_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumCategoryPeer::CAT_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the cat_id column
	 * 
	 * @param     int|array $catId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatId($catId = null, $comparison = null)
	{
		if (is_array($catId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumCategoryPeer::CAT_ID, $catId, $comparison);
	}

	/**
	 * Filter the query on the cat_title column
	 * 
	 * @param     string $catTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatTitle($catTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($catTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $catTitle)) {
				$catTitle = str_replace('*', '%', $catTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumCategoryPeer::CAT_TITLE, $catTitle, $comparison);
	}

	/**
	 * Filter the query on the cat_comment column
	 * 
	 * @param     string $catComment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatComment($catComment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($catComment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $catComment)) {
				$catComment = str_replace('*', '%', $catComment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumCategoryPeer::CAT_COMMENT, $catComment, $comparison);
	}

	/**
	 * Filter the query on the cat_order column
	 * 
	 * @param     int|array $catOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByCatOrder($catOrder = null, $comparison = null)
	{
		if (is_array($catOrder)) {
			$useMinMax = false;
			if (isset($catOrder['min'])) {
				$this->addUsingAlias(ForumCategoryPeer::CAT_ORDER, $catOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($catOrder['max'])) {
				$this->addUsingAlias(ForumCategoryPeer::CAT_ORDER, $catOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumCategoryPeer::CAT_ORDER, $catOrder, $comparison);
	}

	/**
	 * Filter the query on the locked column
	 * 
	 * @param     int|array $locked The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterByLocked($locked = null, $comparison = null)
	{
		if (is_array($locked)) {
			$useMinMax = false;
			if (isset($locked['min'])) {
				$this->addUsingAlias(ForumCategoryPeer::LOCKED, $locked['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locked['max'])) {
				$this->addUsingAlias(ForumCategoryPeer::LOCKED, $locked['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumCategoryPeer::LOCKED, $locked, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(ForumCategoryPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(ForumCategoryPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumCategoryPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumCategory $forumCategory Object to remove from the list of results
	 *
	 * @return    ForumCategoryQuery The current query, for fluid interface
	 */
	public function prune($forumCategory = null)
	{
		if ($forumCategory) {
			$this->addUsingAlias(ForumCategoryPeer::CAT_ID, $forumCategory->getCatId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumCategoryQuery
