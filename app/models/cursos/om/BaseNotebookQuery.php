<?php


/**
 * Base class that represents a query for the 'notebook' table.
 *
 * 
 *
 * @method     NotebookQuery orderByNotebookId($order = Criteria::ASC) Order by the notebook_id column
 * @method     NotebookQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     NotebookQuery orderByCourse($order = Criteria::ASC) Order by the course column
 * @method     NotebookQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     NotebookQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     NotebookQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     NotebookQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 * @method     NotebookQuery orderByUpdateDate($order = Criteria::ASC) Order by the update_date column
 * @method     NotebookQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method     NotebookQuery groupByNotebookId() Group by the notebook_id column
 * @method     NotebookQuery groupByUserId() Group by the user_id column
 * @method     NotebookQuery groupByCourse() Group by the course column
 * @method     NotebookQuery groupBySessionId() Group by the session_id column
 * @method     NotebookQuery groupByTitle() Group by the title column
 * @method     NotebookQuery groupByDescription() Group by the description column
 * @method     NotebookQuery groupByCreationDate() Group by the creation_date column
 * @method     NotebookQuery groupByUpdateDate() Group by the update_date column
 * @method     NotebookQuery groupByStatus() Group by the status column
 *
 * @method     NotebookQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NotebookQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NotebookQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Notebook findOne(PropelPDO $con = null) Return the first Notebook matching the query
 * @method     Notebook findOneOrCreate(PropelPDO $con = null) Return the first Notebook matching the query, or a new Notebook object populated from the query conditions when no match is found
 *
 * @method     Notebook findOneByNotebookId(int $notebook_id) Return the first Notebook filtered by the notebook_id column
 * @method     Notebook findOneByUserId(int $user_id) Return the first Notebook filtered by the user_id column
 * @method     Notebook findOneByCourse(string $course) Return the first Notebook filtered by the course column
 * @method     Notebook findOneBySessionId(int $session_id) Return the first Notebook filtered by the session_id column
 * @method     Notebook findOneByTitle(string $title) Return the first Notebook filtered by the title column
 * @method     Notebook findOneByDescription(string $description) Return the first Notebook filtered by the description column
 * @method     Notebook findOneByCreationDate(string $creation_date) Return the first Notebook filtered by the creation_date column
 * @method     Notebook findOneByUpdateDate(string $update_date) Return the first Notebook filtered by the update_date column
 * @method     Notebook findOneByStatus(int $status) Return the first Notebook filtered by the status column
 *
 * @method     array findByNotebookId(int $notebook_id) Return Notebook objects filtered by the notebook_id column
 * @method     array findByUserId(int $user_id) Return Notebook objects filtered by the user_id column
 * @method     array findByCourse(string $course) Return Notebook objects filtered by the course column
 * @method     array findBySessionId(int $session_id) Return Notebook objects filtered by the session_id column
 * @method     array findByTitle(string $title) Return Notebook objects filtered by the title column
 * @method     array findByDescription(string $description) Return Notebook objects filtered by the description column
 * @method     array findByCreationDate(string $creation_date) Return Notebook objects filtered by the creation_date column
 * @method     array findByUpdateDate(string $update_date) Return Notebook objects filtered by the update_date column
 * @method     array findByStatus(int $status) Return Notebook objects filtered by the status column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseNotebookQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNotebookQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Notebook', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NotebookQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NotebookQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NotebookQuery) {
			return $criteria;
		}
		$query = new NotebookQuery();
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
	 * @return    Notebook|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NotebookPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NotebookPeer::NOTEBOOK_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NotebookPeer::NOTEBOOK_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the notebook_id column
	 * 
	 * @param     int|array $notebookId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByNotebookId($notebookId = null, $comparison = null)
	{
		if (is_array($notebookId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NotebookPeer::NOTEBOOK_ID, $notebookId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(NotebookPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(NotebookPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotebookPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the course column
	 * 
	 * @param     string $course The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByCourse($course = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($course)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $course)) {
				$course = str_replace('*', '%', $course);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NotebookPeer::COURSE, $course, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(NotebookPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(NotebookPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotebookPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NotebookPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NotebookPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the creation_date column
	 * 
	 * @param     string|array $creationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByCreationDate($creationDate = null, $comparison = null)
	{
		if (is_array($creationDate)) {
			$useMinMax = false;
			if (isset($creationDate['min'])) {
				$this->addUsingAlias(NotebookPeer::CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creationDate['max'])) {
				$this->addUsingAlias(NotebookPeer::CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotebookPeer::CREATION_DATE, $creationDate, $comparison);
	}

	/**
	 * Filter the query on the update_date column
	 * 
	 * @param     string|array $updateDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByUpdateDate($updateDate = null, $comparison = null)
	{
		if (is_array($updateDate)) {
			$useMinMax = false;
			if (isset($updateDate['min'])) {
				$this->addUsingAlias(NotebookPeer::UPDATE_DATE, $updateDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updateDate['max'])) {
				$this->addUsingAlias(NotebookPeer::UPDATE_DATE, $updateDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotebookPeer::UPDATE_DATE, $updateDate, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     int|array $status The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (is_array($status)) {
			$useMinMax = false;
			if (isset($status['min'])) {
				$this->addUsingAlias(NotebookPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($status['max'])) {
				$this->addUsingAlias(NotebookPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotebookPeer::STATUS, $status, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Notebook $notebook Object to remove from the list of results
	 *
	 * @return    NotebookQuery The current query, for fluid interface
	 */
	public function prune($notebook = null)
	{
		if ($notebook) {
			$this->addUsingAlias(NotebookPeer::NOTEBOOK_ID, $notebook->getNotebookId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNotebookQuery
