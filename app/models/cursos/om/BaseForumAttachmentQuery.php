<?php


/**
 * Base class that represents a query for the 'forum_attachment' table.
 *
 * 
 *
 * @method     ForumAttachmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ForumAttachmentQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     ForumAttachmentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     ForumAttachmentQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     ForumAttachmentQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     ForumAttachmentQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 *
 * @method     ForumAttachmentQuery groupById() Group by the id column
 * @method     ForumAttachmentQuery groupByPath() Group by the path column
 * @method     ForumAttachmentQuery groupByComment() Group by the comment column
 * @method     ForumAttachmentQuery groupBySize() Group by the size column
 * @method     ForumAttachmentQuery groupByPostId() Group by the post_id column
 * @method     ForumAttachmentQuery groupByFilename() Group by the filename column
 *
 * @method     ForumAttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumAttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumAttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumAttachment findOne(PropelPDO $con = null) Return the first ForumAttachment matching the query
 * @method     ForumAttachment findOneOrCreate(PropelPDO $con = null) Return the first ForumAttachment matching the query, or a new ForumAttachment object populated from the query conditions when no match is found
 *
 * @method     ForumAttachment findOneById(int $id) Return the first ForumAttachment filtered by the id column
 * @method     ForumAttachment findOneByPath(string $path) Return the first ForumAttachment filtered by the path column
 * @method     ForumAttachment findOneByComment(string $comment) Return the first ForumAttachment filtered by the comment column
 * @method     ForumAttachment findOneBySize(int $size) Return the first ForumAttachment filtered by the size column
 * @method     ForumAttachment findOneByPostId(int $post_id) Return the first ForumAttachment filtered by the post_id column
 * @method     ForumAttachment findOneByFilename(string $filename) Return the first ForumAttachment filtered by the filename column
 *
 * @method     array findById(int $id) Return ForumAttachment objects filtered by the id column
 * @method     array findByPath(string $path) Return ForumAttachment objects filtered by the path column
 * @method     array findByComment(string $comment) Return ForumAttachment objects filtered by the comment column
 * @method     array findBySize(int $size) Return ForumAttachment objects filtered by the size column
 * @method     array findByPostId(int $post_id) Return ForumAttachment objects filtered by the post_id column
 * @method     array findByFilename(string $filename) Return ForumAttachment objects filtered by the filename column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumAttachmentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumAttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumAttachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumAttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumAttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumAttachmentQuery) {
			return $criteria;
		}
		$query = new ForumAttachmentQuery();
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
	 * @return    ForumAttachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumAttachmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumAttachmentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumAttachmentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumAttachmentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ForumAttachmentPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ForumAttachmentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the size column
	 * 
	 * @param     int|array $size The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function filterBySize($size = null, $comparison = null)
	{
		if (is_array($size)) {
			$useMinMax = false;
			if (isset($size['min'])) {
				$this->addUsingAlias(ForumAttachmentPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($size['max'])) {
				$this->addUsingAlias(ForumAttachmentPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumAttachmentPeer::SIZE, $size, $comparison);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId)) {
			$useMinMax = false;
			if (isset($postId['min'])) {
				$this->addUsingAlias(ForumAttachmentPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postId['max'])) {
				$this->addUsingAlias(ForumAttachmentPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumAttachmentPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the filename column
	 * 
	 * @param     string $filename The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ForumAttachmentPeer::FILENAME, $filename, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumAttachment $forumAttachment Object to remove from the list of results
	 *
	 * @return    ForumAttachmentQuery The current query, for fluid interface
	 */
	public function prune($forumAttachment = null)
	{
		if ($forumAttachment) {
			$this->addUsingAlias(ForumAttachmentPeer::ID, $forumAttachment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumAttachmentQuery
