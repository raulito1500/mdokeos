<?php


/**
 * Base class that represents a query for the 'dropbox_file' table.
 *
 * 
 *
 * @method     DropboxFileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DropboxFileQuery orderByUploaderId($order = Criteria::ASC) Order by the uploader_id column
 * @method     DropboxFileQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     DropboxFileQuery orderByFilesize($order = Criteria::ASC) Order by the filesize column
 * @method     DropboxFileQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     DropboxFileQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     DropboxFileQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     DropboxFileQuery orderByUploadDate($order = Criteria::ASC) Order by the upload_date column
 * @method     DropboxFileQuery orderByLastUploadDate($order = Criteria::ASC) Order by the last_upload_date column
 * @method     DropboxFileQuery orderByCatId($order = Criteria::ASC) Order by the cat_id column
 * @method     DropboxFileQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     DropboxFileQuery groupById() Group by the id column
 * @method     DropboxFileQuery groupByUploaderId() Group by the uploader_id column
 * @method     DropboxFileQuery groupByFilename() Group by the filename column
 * @method     DropboxFileQuery groupByFilesize() Group by the filesize column
 * @method     DropboxFileQuery groupByTitle() Group by the title column
 * @method     DropboxFileQuery groupByDescription() Group by the description column
 * @method     DropboxFileQuery groupByAuthor() Group by the author column
 * @method     DropboxFileQuery groupByUploadDate() Group by the upload_date column
 * @method     DropboxFileQuery groupByLastUploadDate() Group by the last_upload_date column
 * @method     DropboxFileQuery groupByCatId() Group by the cat_id column
 * @method     DropboxFileQuery groupBySessionId() Group by the session_id column
 *
 * @method     DropboxFileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DropboxFileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DropboxFileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DropboxFile findOne(PropelPDO $con = null) Return the first DropboxFile matching the query
 * @method     DropboxFile findOneOrCreate(PropelPDO $con = null) Return the first DropboxFile matching the query, or a new DropboxFile object populated from the query conditions when no match is found
 *
 * @method     DropboxFile findOneById(int $id) Return the first DropboxFile filtered by the id column
 * @method     DropboxFile findOneByUploaderId(int $uploader_id) Return the first DropboxFile filtered by the uploader_id column
 * @method     DropboxFile findOneByFilename(string $filename) Return the first DropboxFile filtered by the filename column
 * @method     DropboxFile findOneByFilesize(int $filesize) Return the first DropboxFile filtered by the filesize column
 * @method     DropboxFile findOneByTitle(string $title) Return the first DropboxFile filtered by the title column
 * @method     DropboxFile findOneByDescription(string $description) Return the first DropboxFile filtered by the description column
 * @method     DropboxFile findOneByAuthor(string $author) Return the first DropboxFile filtered by the author column
 * @method     DropboxFile findOneByUploadDate(string $upload_date) Return the first DropboxFile filtered by the upload_date column
 * @method     DropboxFile findOneByLastUploadDate(string $last_upload_date) Return the first DropboxFile filtered by the last_upload_date column
 * @method     DropboxFile findOneByCatId(int $cat_id) Return the first DropboxFile filtered by the cat_id column
 * @method     DropboxFile findOneBySessionId(int $session_id) Return the first DropboxFile filtered by the session_id column
 *
 * @method     array findById(int $id) Return DropboxFile objects filtered by the id column
 * @method     array findByUploaderId(int $uploader_id) Return DropboxFile objects filtered by the uploader_id column
 * @method     array findByFilename(string $filename) Return DropboxFile objects filtered by the filename column
 * @method     array findByFilesize(int $filesize) Return DropboxFile objects filtered by the filesize column
 * @method     array findByTitle(string $title) Return DropboxFile objects filtered by the title column
 * @method     array findByDescription(string $description) Return DropboxFile objects filtered by the description column
 * @method     array findByAuthor(string $author) Return DropboxFile objects filtered by the author column
 * @method     array findByUploadDate(string $upload_date) Return DropboxFile objects filtered by the upload_date column
 * @method     array findByLastUploadDate(string $last_upload_date) Return DropboxFile objects filtered by the last_upload_date column
 * @method     array findByCatId(int $cat_id) Return DropboxFile objects filtered by the cat_id column
 * @method     array findBySessionId(int $session_id) Return DropboxFile objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseDropboxFileQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDropboxFileQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'DropboxFile', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DropboxFileQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DropboxFileQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DropboxFileQuery) {
			return $criteria;
		}
		$query = new DropboxFileQuery();
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
	 * @return    DropboxFile|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DropboxFilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DropboxFilePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DropboxFilePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DropboxFilePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the uploader_id column
	 * 
	 * @param     int|array $uploaderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByUploaderId($uploaderId = null, $comparison = null)
	{
		if (is_array($uploaderId)) {
			$useMinMax = false;
			if (isset($uploaderId['min'])) {
				$this->addUsingAlias(DropboxFilePeer::UPLOADER_ID, $uploaderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($uploaderId['max'])) {
				$this->addUsingAlias(DropboxFilePeer::UPLOADER_ID, $uploaderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::UPLOADER_ID, $uploaderId, $comparison);
	}

	/**
	 * Filter the query on the filename column
	 * 
	 * @param     string $filename The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByFilename($filename = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($filename)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $filename)) {
				$filename = str_replace('*', '%', $filename);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::FILENAME, $filename, $comparison);
	}

	/**
	 * Filter the query on the filesize column
	 * 
	 * @param     int|array $filesize The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByFilesize($filesize = null, $comparison = null)
	{
		if (is_array($filesize)) {
			$useMinMax = false;
			if (isset($filesize['min'])) {
				$this->addUsingAlias(DropboxFilePeer::FILESIZE, $filesize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($filesize['max'])) {
				$this->addUsingAlias(DropboxFilePeer::FILESIZE, $filesize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::FILESIZE, $filesize, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DropboxFilePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DropboxFilePeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the author column
	 * 
	 * @param     string $author The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByAuthor($author = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($author)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $author)) {
				$author = str_replace('*', '%', $author);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::AUTHOR, $author, $comparison);
	}

	/**
	 * Filter the query on the upload_date column
	 * 
	 * @param     string|array $uploadDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByUploadDate($uploadDate = null, $comparison = null)
	{
		if (is_array($uploadDate)) {
			$useMinMax = false;
			if (isset($uploadDate['min'])) {
				$this->addUsingAlias(DropboxFilePeer::UPLOAD_DATE, $uploadDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($uploadDate['max'])) {
				$this->addUsingAlias(DropboxFilePeer::UPLOAD_DATE, $uploadDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::UPLOAD_DATE, $uploadDate, $comparison);
	}

	/**
	 * Filter the query on the last_upload_date column
	 * 
	 * @param     string|array $lastUploadDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByLastUploadDate($lastUploadDate = null, $comparison = null)
	{
		if (is_array($lastUploadDate)) {
			$useMinMax = false;
			if (isset($lastUploadDate['min'])) {
				$this->addUsingAlias(DropboxFilePeer::LAST_UPLOAD_DATE, $lastUploadDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastUploadDate['max'])) {
				$this->addUsingAlias(DropboxFilePeer::LAST_UPLOAD_DATE, $lastUploadDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::LAST_UPLOAD_DATE, $lastUploadDate, $comparison);
	}

	/**
	 * Filter the query on the cat_id column
	 * 
	 * @param     int|array $catId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterByCatId($catId = null, $comparison = null)
	{
		if (is_array($catId)) {
			$useMinMax = false;
			if (isset($catId['min'])) {
				$this->addUsingAlias(DropboxFilePeer::CAT_ID, $catId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($catId['max'])) {
				$this->addUsingAlias(DropboxFilePeer::CAT_ID, $catId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::CAT_ID, $catId, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(DropboxFilePeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(DropboxFilePeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DropboxFilePeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DropboxFile $dropboxFile Object to remove from the list of results
	 *
	 * @return    DropboxFileQuery The current query, for fluid interface
	 */
	public function prune($dropboxFile = null)
	{
		if ($dropboxFile) {
			$this->addUsingAlias(DropboxFilePeer::ID, $dropboxFile->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDropboxFileQuery
