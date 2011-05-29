<?php


/**
 * Base class that represents a query for the 'dropbox_feedback' table.
 *
 * 
 *
 * @method     DropboxFeedbackQuery orderByFeedbackId($order = Criteria::ASC) Order by the feedback_id column
 * @method     DropboxFeedbackQuery orderByFileId($order = Criteria::ASC) Order by the file_id column
 * @method     DropboxFeedbackQuery orderByAuthorUserId($order = Criteria::ASC) Order by the author_user_id column
 * @method     DropboxFeedbackQuery orderByFeedback($order = Criteria::ASC) Order by the feedback column
 * @method     DropboxFeedbackQuery orderByFeedbackDate($order = Criteria::ASC) Order by the feedback_date column
 *
 * @method     DropboxFeedbackQuery groupByFeedbackId() Group by the feedback_id column
 * @method     DropboxFeedbackQuery groupByFileId() Group by the file_id column
 * @method     DropboxFeedbackQuery groupByAuthorUserId() Group by the author_user_id column
 * @method     DropboxFeedbackQuery groupByFeedback() Group by the feedback column
 * @method     DropboxFeedbackQuery groupByFeedbackDate() Group by the feedback_date column
 *
 * @method     DropboxFeedbackQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DropboxFeedbackQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DropboxFeedbackQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DropboxFeedback findOne(PropelPDO $con = null) Return the first DropboxFeedback matching the query
 * @method     DropboxFeedback findOneOrCreate(PropelPDO $con = null) Return the first DropboxFeedback matching the query, or a new DropboxFeedback object populated from the query conditions when no match is found
 *
 * @method     DropboxFeedback findOneByFeedbackId(int $feedback_id) Return the first DropboxFeedback filtered by the feedback_id column
 * @method     DropboxFeedback findOneByFileId(int $file_id) Return the first DropboxFeedback filtered by the file_id column
 * @method     DropboxFeedback findOneByAuthorUserId(int $author_user_id) Return the first DropboxFeedback filtered by the author_user_id column
 * @method     DropboxFeedback findOneByFeedback(string $feedback) Return the first DropboxFeedback filtered by the feedback column
 * @method     DropboxFeedback findOneByFeedbackDate(string $feedback_date) Return the first DropboxFeedback filtered by the feedback_date column
 *
 * @method     array findByFeedbackId(int $feedback_id) Return DropboxFeedback objects filtered by the feedback_id column
 * @method     array findByFileId(int $file_id) Return DropboxFeedback objects filtered by the file_id column
 * @method     array findByAuthorUserId(int $author_user_id) Return DropboxFeedback objects filtered by the author_user_id column
 * @method     array findByFeedback(string $feedback) Return DropboxFeedback objects filtered by the feedback column
 * @method     array findByFeedbackDate(string $feedback_date) Return DropboxFeedback objects filtered by the feedback_date column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDropboxFeedbackQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDropboxFeedbackQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'DropboxFeedback', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DropboxFeedbackQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DropboxFeedbackQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DropboxFeedbackQuery) {
			return $criteria;
		}
		$query = new DropboxFeedbackQuery();
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
	 * @return    DropboxFeedback|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DropboxFeedbackPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the feedback_id column
	 * 
	 * @param     int|array $feedbackId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByFeedbackId($feedbackId = null, $comparison = null)
	{
		if (is_array($feedbackId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_ID, $feedbackId, $comparison);
	}

	/**
	 * Filter the query on the file_id column
	 * 
	 * @param     int|array $fileId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByFileId($fileId = null, $comparison = null)
	{
		if (is_array($fileId)) {
			$useMinMax = false;
			if (isset($fileId['min'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::FILE_ID, $fileId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fileId['max'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::FILE_ID, $fileId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFeedbackPeer::FILE_ID, $fileId, $comparison);
	}

	/**
	 * Filter the query on the author_user_id column
	 * 
	 * @param     int|array $authorUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByAuthorUserId($authorUserId = null, $comparison = null)
	{
		if (is_array($authorUserId)) {
			$useMinMax = false;
			if (isset($authorUserId['min'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::AUTHOR_USER_ID, $authorUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($authorUserId['max'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::AUTHOR_USER_ID, $authorUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFeedbackPeer::AUTHOR_USER_ID, $authorUserId, $comparison);
	}

	/**
	 * Filter the query on the feedback column
	 * 
	 * @param     string $feedback The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK, $feedback, $comparison);
	}

	/**
	 * Filter the query on the feedback_date column
	 * 
	 * @param     string|array $feedbackDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function filterByFeedbackDate($feedbackDate = null, $comparison = null)
	{
		if (is_array($feedbackDate)) {
			$useMinMax = false;
			if (isset($feedbackDate['min'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_DATE, $feedbackDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($feedbackDate['max'])) {
				$this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_DATE, $feedbackDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_DATE, $feedbackDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DropboxFeedback $dropboxFeedback Object to remove from the list of results
	 *
	 * @return    DropboxFeedbackQuery The current query, for fluid interface
	 */
	public function prune($dropboxFeedback = null)
	{
		if ($dropboxFeedback) {
			$this->addUsingAlias(DropboxFeedbackPeer::FEEDBACK_ID, $dropboxFeedback->getFeedbackId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDropboxFeedbackQuery
