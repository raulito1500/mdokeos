<?php


/**
 * Base class that represents a query for the 'dropbox_person' table.
 *
 * 
 *
 * @method     DropboxPersonQuery orderByFileId($order = Criteria::ASC) Order by the file_id column
 * @method     DropboxPersonQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     DropboxPersonQuery groupByFileId() Group by the file_id column
 * @method     DropboxPersonQuery groupByUserId() Group by the user_id column
 *
 * @method     DropboxPersonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DropboxPersonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DropboxPersonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DropboxPerson findOne(PropelPDO $con = null) Return the first DropboxPerson matching the query
 * @method     DropboxPerson findOneOrCreate(PropelPDO $con = null) Return the first DropboxPerson matching the query, or a new DropboxPerson object populated from the query conditions when no match is found
 *
 * @method     DropboxPerson findOneByFileId(int $file_id) Return the first DropboxPerson filtered by the file_id column
 * @method     DropboxPerson findOneByUserId(int $user_id) Return the first DropboxPerson filtered by the user_id column
 *
 * @method     array findByFileId(int $file_id) Return DropboxPerson objects filtered by the file_id column
 * @method     array findByUserId(int $user_id) Return DropboxPerson objects filtered by the user_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDropboxPersonQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDropboxPersonQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'DropboxPerson', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DropboxPersonQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DropboxPersonQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DropboxPersonQuery) {
			return $criteria;
		}
		$query = new DropboxPersonQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$file_id, $user_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    DropboxPerson|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DropboxPersonPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    DropboxPersonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(DropboxPersonPeer::FILE_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(DropboxPersonPeer::USER_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DropboxPersonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(DropboxPersonPeer::FILE_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(DropboxPersonPeer::USER_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the file_id column
	 * 
	 * @param     int|array $fileId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPersonQuery The current query, for fluid interface
	 */
	public function filterByFileId($fileId = null, $comparison = null)
	{
		if (is_array($fileId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxPersonPeer::FILE_ID, $fileId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPersonQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxPersonPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DropboxPerson $dropboxPerson Object to remove from the list of results
	 *
	 * @return    DropboxPersonQuery The current query, for fluid interface
	 */
	public function prune($dropboxPerson = null)
	{
		if ($dropboxPerson) {
			$this->addCond('pruneCond0', $this->getAliasedColName(DropboxPersonPeer::FILE_ID), $dropboxPerson->getFileId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(DropboxPersonPeer::USER_ID), $dropboxPerson->getUserId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseDropboxPersonQuery
