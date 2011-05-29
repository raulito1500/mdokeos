<?php


/**
 * Base class that represents a query for the 'document' table.
 *
 * 
 *
 * @method     DocumentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DocumentQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     DocumentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     DocumentQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     DocumentQuery orderByFiletype($order = Criteria::ASC) Order by the filetype column
 * @method     DocumentQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     DocumentQuery orderByReadonly($order = Criteria::ASC) Order by the readonly column
 * @method     DocumentQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     DocumentQuery groupById() Group by the id column
 * @method     DocumentQuery groupByPath() Group by the path column
 * @method     DocumentQuery groupByComment() Group by the comment column
 * @method     DocumentQuery groupByTitle() Group by the title column
 * @method     DocumentQuery groupByFiletype() Group by the filetype column
 * @method     DocumentQuery groupBySize() Group by the size column
 * @method     DocumentQuery groupByReadonly() Group by the readonly column
 * @method     DocumentQuery groupBySessionId() Group by the session_id column
 *
 * @method     DocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Document findOne(PropelPDO $con = null) Return the first Document matching the query
 * @method     Document findOneOrCreate(PropelPDO $con = null) Return the first Document matching the query, or a new Document object populated from the query conditions when no match is found
 *
 * @method     Document findOneById(int $id) Return the first Document filtered by the id column
 * @method     Document findOneByPath(string $path) Return the first Document filtered by the path column
 * @method     Document findOneByComment(string $comment) Return the first Document filtered by the comment column
 * @method     Document findOneByTitle(string $title) Return the first Document filtered by the title column
 * @method     Document findOneByFiletype(string $filetype) Return the first Document filtered by the filetype column
 * @method     Document findOneBySize(int $size) Return the first Document filtered by the size column
 * @method     Document findOneByReadonly(int $readonly) Return the first Document filtered by the readonly column
 * @method     Document findOneBySessionId(int $session_id) Return the first Document filtered by the session_id column
 *
 * @method     array findById(int $id) Return Document objects filtered by the id column
 * @method     array findByPath(string $path) Return Document objects filtered by the path column
 * @method     array findByComment(string $comment) Return Document objects filtered by the comment column
 * @method     array findByTitle(string $title) Return Document objects filtered by the title column
 * @method     array findByFiletype(string $filetype) Return Document objects filtered by the filetype column
 * @method     array findBySize(int $size) Return Document objects filtered by the size column
 * @method     array findByReadonly(int $readonly) Return Document objects filtered by the readonly column
 * @method     array findBySessionId(int $session_id) Return Document objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDocumentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDocumentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Document', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DocumentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DocumentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DocumentQuery) {
			return $criteria;
		}
		$query = new DocumentQuery();
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
	 * @return    Document|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DocumentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DocumentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DocumentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DocumentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterByPath($path = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($path)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $path)) {
				$path = str_replace('*', '%', $path);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DocumentPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DocumentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DocumentPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the filetype column
	 * 
	 * @param     string $filetype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterByFiletype($filetype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($filetype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $filetype)) {
				$filetype = str_replace('*', '%', $filetype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DocumentPeer::FILETYPE, $filetype, $comparison);
	}

	/**
	 * Filter the query on the size column
	 * 
	 * @param     int|array $size The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterBySize($size = null, $comparison = null)
	{
		if (is_array($size)) {
			$useMinMax = false;
			if (isset($size['min'])) {
				$this->addUsingAlias(DocumentPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($size['max'])) {
				$this->addUsingAlias(DocumentPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DocumentPeer::SIZE, $size, $comparison);
	}

	/**
	 * Filter the query on the readonly column
	 * 
	 * @param     int|array $readonly The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterByReadonly($readonly = null, $comparison = null)
	{
		if (is_array($readonly)) {
			$useMinMax = false;
			if (isset($readonly['min'])) {
				$this->addUsingAlias(DocumentPeer::READONLY, $readonly['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($readonly['max'])) {
				$this->addUsingAlias(DocumentPeer::READONLY, $readonly['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DocumentPeer::READONLY, $readonly, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(DocumentPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(DocumentPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DocumentPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Document $document Object to remove from the list of results
	 *
	 * @return    DocumentQuery The current query, for fluid interface
	 */
	public function prune($document = null)
	{
		if ($document) {
			$this->addUsingAlias(DocumentPeer::ID, $document->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDocumentQuery
