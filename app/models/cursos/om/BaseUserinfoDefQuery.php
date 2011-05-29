<?php


/**
 * Base class that represents a query for the 'userinfo_def' table.
 *
 * 
 *
 * @method     UserinfoDefQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserinfoDefQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     UserinfoDefQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     UserinfoDefQuery orderByLineCount($order = Criteria::ASC) Order by the line_count column
 * @method     UserinfoDefQuery orderByRank($order = Criteria::ASC) Order by the rank column
 *
 * @method     UserinfoDefQuery groupById() Group by the id column
 * @method     UserinfoDefQuery groupByTitle() Group by the title column
 * @method     UserinfoDefQuery groupByComment() Group by the comment column
 * @method     UserinfoDefQuery groupByLineCount() Group by the line_count column
 * @method     UserinfoDefQuery groupByRank() Group by the rank column
 *
 * @method     UserinfoDefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserinfoDefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserinfoDefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserinfoDef findOne(PropelPDO $con = null) Return the first UserinfoDef matching the query
 * @method     UserinfoDef findOneOrCreate(PropelPDO $con = null) Return the first UserinfoDef matching the query, or a new UserinfoDef object populated from the query conditions when no match is found
 *
 * @method     UserinfoDef findOneById(int $id) Return the first UserinfoDef filtered by the id column
 * @method     UserinfoDef findOneByTitle(string $title) Return the first UserinfoDef filtered by the title column
 * @method     UserinfoDef findOneByComment(string $comment) Return the first UserinfoDef filtered by the comment column
 * @method     UserinfoDef findOneByLineCount(int $line_count) Return the first UserinfoDef filtered by the line_count column
 * @method     UserinfoDef findOneByRank(int $rank) Return the first UserinfoDef filtered by the rank column
 *
 * @method     array findById(int $id) Return UserinfoDef objects filtered by the id column
 * @method     array findByTitle(string $title) Return UserinfoDef objects filtered by the title column
 * @method     array findByComment(string $comment) Return UserinfoDef objects filtered by the comment column
 * @method     array findByLineCount(int $line_count) Return UserinfoDef objects filtered by the line_count column
 * @method     array findByRank(int $rank) Return UserinfoDef objects filtered by the rank column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserinfoDefQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserinfoDefQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserinfoDef', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserinfoDefQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserinfoDefQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserinfoDefQuery) {
			return $criteria;
		}
		$query = new UserinfoDefQuery();
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
	 * @return    UserinfoDef|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserinfoDefPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserinfoDefPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserinfoDefPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserinfoDefPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UserinfoDefPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserinfoDefPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the line_count column
	 * 
	 * @param     int|array $lineCount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterByLineCount($lineCount = null, $comparison = null)
	{
		if (is_array($lineCount)) {
			$useMinMax = false;
			if (isset($lineCount['min'])) {
				$this->addUsingAlias(UserinfoDefPeer::LINE_COUNT, $lineCount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lineCount['max'])) {
				$this->addUsingAlias(UserinfoDefPeer::LINE_COUNT, $lineCount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserinfoDefPeer::LINE_COUNT, $lineCount, $comparison);
	}

	/**
	 * Filter the query on the rank column
	 * 
	 * @param     int|array $rank The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function filterByRank($rank = null, $comparison = null)
	{
		if (is_array($rank)) {
			$useMinMax = false;
			if (isset($rank['min'])) {
				$this->addUsingAlias(UserinfoDefPeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($rank['max'])) {
				$this->addUsingAlias(UserinfoDefPeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserinfoDefPeer::RANK, $rank, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserinfoDef $userinfoDef Object to remove from the list of results
	 *
	 * @return    UserinfoDefQuery The current query, for fluid interface
	 */
	public function prune($userinfoDef = null)
	{
		if ($userinfoDef) {
			$this->addUsingAlias(UserinfoDefPeer::ID, $userinfoDef->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserinfoDefQuery
