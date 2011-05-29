<?php


/**
 * Base class that represents a query for the 'dropbox_post' table.
 *
 * 
 *
 * @method     DropboxPostQuery orderByFileId($order = Criteria::ASC) Order by the file_id column
 * @method     DropboxPostQuery orderByDestUserId($order = Criteria::ASC) Order by the dest_user_id column
 * @method     DropboxPostQuery orderByFeedbackDate($order = Criteria::ASC) Order by the feedback_date column
 * @method     DropboxPostQuery orderByFeedback($order = Criteria::ASC) Order by the feedback column
 * @method     DropboxPostQuery orderByCatId($order = Criteria::ASC) Order by the cat_id column
 * @method     DropboxPostQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     DropboxPostQuery groupByFileId() Group by the file_id column
 * @method     DropboxPostQuery groupByDestUserId() Group by the dest_user_id column
 * @method     DropboxPostQuery groupByFeedbackDate() Group by the feedback_date column
 * @method     DropboxPostQuery groupByFeedback() Group by the feedback column
 * @method     DropboxPostQuery groupByCatId() Group by the cat_id column
 * @method     DropboxPostQuery groupBySessionId() Group by the session_id column
 *
 * @method     DropboxPostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DropboxPostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DropboxPostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DropboxPost findOne(PropelPDO $con = null) Return the first DropboxPost matching the query
 * @method     DropboxPost findOneOrCreate(PropelPDO $con = null) Return the first DropboxPost matching the query, or a new DropboxPost object populated from the query conditions when no match is found
 *
 * @method     DropboxPost findOneByFileId(int $file_id) Return the first DropboxPost filtered by the file_id column
 * @method     DropboxPost findOneByDestUserId(int $dest_user_id) Return the first DropboxPost filtered by the dest_user_id column
 * @method     DropboxPost findOneByFeedbackDate(string $feedback_date) Return the first DropboxPost filtered by the feedback_date column
 * @method     DropboxPost findOneByFeedback(string $feedback) Return the first DropboxPost filtered by the feedback column
 * @method     DropboxPost findOneByCatId(int $cat_id) Return the first DropboxPost filtered by the cat_id column
 * @method     DropboxPost findOneBySessionId(int $session_id) Return the first DropboxPost filtered by the session_id column
 *
 * @method     array findByFileId(int $file_id) Return DropboxPost objects filtered by the file_id column
 * @method     array findByDestUserId(int $dest_user_id) Return DropboxPost objects filtered by the dest_user_id column
 * @method     array findByFeedbackDate(string $feedback_date) Return DropboxPost objects filtered by the feedback_date column
 * @method     array findByFeedback(string $feedback) Return DropboxPost objects filtered by the feedback column
 * @method     array findByCatId(int $cat_id) Return DropboxPost objects filtered by the cat_id column
 * @method     array findBySessionId(int $session_id) Return DropboxPost objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDropboxPostQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDropboxPostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'DropboxPost', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DropboxPostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DropboxPostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DropboxPostQuery) {
			return $criteria;
		}
		$query = new DropboxPostQuery();
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
	 * @param     array[$file_id, $dest_user_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    DropboxPost|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DropboxPostPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(DropboxPostPeer::FILE_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(DropboxPostPeer::DEST_USER_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(DropboxPostPeer::FILE_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(DropboxPostPeer::DEST_USER_ID, $key[1], Criteria::EQUAL);
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
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByFileId($fileId = null, $comparison = null)
	{
		if (is_array($fileId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxPostPeer::FILE_ID, $fileId, $comparison);
	}

	/**
	 * Filter the query on the dest_user_id column
	 * 
	 * @param     int|array $destUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByDestUserId($destUserId = null, $comparison = null)
	{
		if (is_array($destUserId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxPostPeer::DEST_USER_ID, $destUserId, $comparison);
	}

	/**
	 * Filter the query on the feedback_date column
	 * 
	 * @param     string|array $feedbackDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByFeedbackDate($feedbackDate = null, $comparison = null)
	{
		if (is_array($feedbackDate)) {
			$useMinMax = false;
			if (isset($feedbackDate['min'])) {
				$this->addUsingAlias(DropboxPostPeer::FEEDBACK_DATE, $feedbackDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($feedbackDate['max'])) {
				$this->addUsingAlias(DropboxPostPeer::FEEDBACK_DATE, $feedbackDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxPostPeer::FEEDBACK_DATE, $feedbackDate, $comparison);
	}

	/**
	 * Filter the query on the feedback column
	 * 
	 * @param     string $feedback The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByFeedback($feedback = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($feedback)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $feedback)) {
				$feedback = str_replace('*', '%', $feedback);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DropboxPostPeer::FEEDBACK, $feedback, $comparison);
	}

	/**
	 * Filter the query on the cat_id column
	 * 
	 * @param     int|array $catId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterByCatId($catId = null, $comparison = null)
	{
		if (is_array($catId)) {
			$useMinMax = false;
			if (isset($catId['min'])) {
				$this->addUsingAlias(DropboxPostPeer::CAT_ID, $catId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($catId['max'])) {
				$this->addUsingAlias(DropboxPostPeer::CAT_ID, $catId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxPostPeer::CAT_ID, $catId, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(DropboxPostPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(DropboxPostPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxPostPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DropboxPost $dropboxPost Object to remove from the list of results
	 *
	 * @return    DropboxPostQuery The current query, for fluid interface
	 */
	public function prune($dropboxPost = null)
	{
		if ($dropboxPost) {
			$this->addCond('pruneCond0', $this->getAliasedColName(DropboxPostPeer::FILE_ID), $dropboxPost->getFileId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(DropboxPostPeer::DEST_USER_ID), $dropboxPost->getDestUserId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseDropboxPostQuery
