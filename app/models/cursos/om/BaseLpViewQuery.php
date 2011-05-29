<?php


/**
 * Base class that represents a query for the 'lp_view' table.
 *
 * 
 *
 * @method     LpViewQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpViewQuery orderByLpId($order = Criteria::ASC) Order by the lp_id column
 * @method     LpViewQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     LpViewQuery orderByViewCount($order = Criteria::ASC) Order by the view_count column
 * @method     LpViewQuery orderByLastItem($order = Criteria::ASC) Order by the last_item column
 * @method     LpViewQuery orderByProgress($order = Criteria::ASC) Order by the progress column
 *
 * @method     LpViewQuery groupById() Group by the id column
 * @method     LpViewQuery groupByLpId() Group by the lp_id column
 * @method     LpViewQuery groupByUserId() Group by the user_id column
 * @method     LpViewQuery groupByViewCount() Group by the view_count column
 * @method     LpViewQuery groupByLastItem() Group by the last_item column
 * @method     LpViewQuery groupByProgress() Group by the progress column
 *
 * @method     LpViewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpViewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpViewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LpView findOne(PropelPDO $con = null) Return the first LpView matching the query
 * @method     LpView findOneOrCreate(PropelPDO $con = null) Return the first LpView matching the query, or a new LpView object populated from the query conditions when no match is found
 *
 * @method     LpView findOneById(int $id) Return the first LpView filtered by the id column
 * @method     LpView findOneByLpId(int $lp_id) Return the first LpView filtered by the lp_id column
 * @method     LpView findOneByUserId(int $user_id) Return the first LpView filtered by the user_id column
 * @method     LpView findOneByViewCount(int $view_count) Return the first LpView filtered by the view_count column
 * @method     LpView findOneByLastItem(int $last_item) Return the first LpView filtered by the last_item column
 * @method     LpView findOneByProgress(int $progress) Return the first LpView filtered by the progress column
 *
 * @method     array findById(int $id) Return LpView objects filtered by the id column
 * @method     array findByLpId(int $lp_id) Return LpView objects filtered by the lp_id column
 * @method     array findByUserId(int $user_id) Return LpView objects filtered by the user_id column
 * @method     array findByViewCount(int $view_count) Return LpView objects filtered by the view_count column
 * @method     array findByLastItem(int $last_item) Return LpView objects filtered by the last_item column
 * @method     array findByProgress(int $progress) Return LpView objects filtered by the progress column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpViewQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpViewQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LpView', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpViewQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpViewQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpViewQuery) {
			return $criteria;
		}
		$query = new LpViewQuery();
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
	 * @return    LpView|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpViewPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpViewPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpViewPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpViewPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the lp_id column
	 * 
	 * @param     int|array $lpId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByLpId($lpId = null, $comparison = null)
	{
		if (is_array($lpId)) {
			$useMinMax = false;
			if (isset($lpId['min'])) {
				$this->addUsingAlias(LpViewPeer::LP_ID, $lpId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpId['max'])) {
				$this->addUsingAlias(LpViewPeer::LP_ID, $lpId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpViewPeer::LP_ID, $lpId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(LpViewPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(LpViewPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpViewPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the view_count column
	 * 
	 * @param     int|array $viewCount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByViewCount($viewCount = null, $comparison = null)
	{
		if (is_array($viewCount)) {
			$useMinMax = false;
			if (isset($viewCount['min'])) {
				$this->addUsingAlias(LpViewPeer::VIEW_COUNT, $viewCount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($viewCount['max'])) {
				$this->addUsingAlias(LpViewPeer::VIEW_COUNT, $viewCount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpViewPeer::VIEW_COUNT, $viewCount, $comparison);
	}

	/**
	 * Filter the query on the last_item column
	 * 
	 * @param     int|array $lastItem The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByLastItem($lastItem = null, $comparison = null)
	{
		if (is_array($lastItem)) {
			$useMinMax = false;
			if (isset($lastItem['min'])) {
				$this->addUsingAlias(LpViewPeer::LAST_ITEM, $lastItem['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastItem['max'])) {
				$this->addUsingAlias(LpViewPeer::LAST_ITEM, $lastItem['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpViewPeer::LAST_ITEM, $lastItem, $comparison);
	}

	/**
	 * Filter the query on the progress column
	 * 
	 * @param     int|array $progress The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function filterByProgress($progress = null, $comparison = null)
	{
		if (is_array($progress)) {
			$useMinMax = false;
			if (isset($progress['min'])) {
				$this->addUsingAlias(LpViewPeer::PROGRESS, $progress['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($progress['max'])) {
				$this->addUsingAlias(LpViewPeer::PROGRESS, $progress['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpViewPeer::PROGRESS, $progress, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LpView $lpView Object to remove from the list of results
	 *
	 * @return    LpViewQuery The current query, for fluid interface
	 */
	public function prune($lpView = null)
	{
		if ($lpView) {
			$this->addUsingAlias(LpViewPeer::ID, $lpView->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpViewQuery
