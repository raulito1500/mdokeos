<?php


/**
 * Base class that represents a query for the 'admin' table.
 *
 * 
 *
 * @method     AdminQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     AdminQuery groupByUserId() Group by the user_id column
 *
 * @method     AdminQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AdminQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AdminQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Admin findOne(PropelPDO $con = null) Return the first Admin matching the query
 * @method     Admin findOneOrCreate(PropelPDO $con = null) Return the first Admin matching the query, or a new Admin object populated from the query conditions when no match is found
 *
 * @method     Admin findOneByUserId(int $user_id) Return the first Admin filtered by the user_id column
 *
 * @method     array findByUserId(int $user_id) Return Admin objects filtered by the user_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAdminQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAdminQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Admin', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AdminQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AdminQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AdminQuery) {
			return $criteria;
		}
		$query = new AdminQuery();
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
	 * @return    Admin|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AdminPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AdminPeer::USER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AdminPeer::USER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AdminPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Admin $admin Object to remove from the list of results
	 *
	 * @return    AdminQuery The current query, for fluid interface
	 */
	public function prune($admin = null)
	{
		if ($admin) {
			$this->addUsingAlias(AdminPeer::USER_ID, $admin->getUserId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAdminQuery
