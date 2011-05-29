<?php


/**
 * Base class that represents a query for the 'user_friend_relation_type' table.
 *
 * 
 *
 * @method     UserFriendRelationTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserFriendRelationTypeQuery orderByTitle($order = Criteria::ASC) Order by the title column
 *
 * @method     UserFriendRelationTypeQuery groupById() Group by the id column
 * @method     UserFriendRelationTypeQuery groupByTitle() Group by the title column
 *
 * @method     UserFriendRelationTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserFriendRelationTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserFriendRelationTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserFriendRelationType findOne(PropelPDO $con = null) Return the first UserFriendRelationType matching the query
 * @method     UserFriendRelationType findOneOrCreate(PropelPDO $con = null) Return the first UserFriendRelationType matching the query, or a new UserFriendRelationType object populated from the query conditions when no match is found
 *
 * @method     UserFriendRelationType findOneById(int $id) Return the first UserFriendRelationType filtered by the id column
 * @method     UserFriendRelationType findOneByTitle(string $title) Return the first UserFriendRelationType filtered by the title column
 *
 * @method     array findById(int $id) Return UserFriendRelationType objects filtered by the id column
 * @method     array findByTitle(string $title) Return UserFriendRelationType objects filtered by the title column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserFriendRelationTypeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserFriendRelationTypeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserFriendRelationType', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserFriendRelationTypeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserFriendRelationTypeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserFriendRelationTypeQuery) {
			return $criteria;
		}
		$query = new UserFriendRelationTypeQuery();
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
	 * @return    UserFriendRelationType|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserFriendRelationTypePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserFriendRelationTypeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserFriendRelationTypePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserFriendRelationTypeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserFriendRelationTypePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendRelationTypeQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserFriendRelationTypePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserFriendRelationTypeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UserFriendRelationTypePeer::TITLE, $title, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserFriendRelationType $userFriendRelationType Object to remove from the list of results
	 *
	 * @return    UserFriendRelationTypeQuery The current query, for fluid interface
	 */
	public function prune($userFriendRelationType = null)
	{
		if ($userFriendRelationType) {
			$this->addUsingAlias(UserFriendRelationTypePeer::ID, $userFriendRelationType->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserFriendRelationTypeQuery
