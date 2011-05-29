<?php


/**
 * Base class that represents a query for the 'blog_attachment' table.
 *
 * 
 *
 * @method     BlogAttachmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BlogAttachmentQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     BlogAttachmentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     BlogAttachmentQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     BlogAttachmentQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     BlogAttachmentQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     BlogAttachmentQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogAttachmentQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 *
 * @method     BlogAttachmentQuery groupById() Group by the id column
 * @method     BlogAttachmentQuery groupByPath() Group by the path column
 * @method     BlogAttachmentQuery groupByComment() Group by the comment column
 * @method     BlogAttachmentQuery groupBySize() Group by the size column
 * @method     BlogAttachmentQuery groupByPostId() Group by the post_id column
 * @method     BlogAttachmentQuery groupByFilename() Group by the filename column
 * @method     BlogAttachmentQuery groupByBlogId() Group by the blog_id column
 * @method     BlogAttachmentQuery groupByCommentId() Group by the comment_id column
 *
 * @method     BlogAttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogAttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogAttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogAttachment findOne(PropelPDO $con = null) Return the first BlogAttachment matching the query
 * @method     BlogAttachment findOneOrCreate(PropelPDO $con = null) Return the first BlogAttachment matching the query, or a new BlogAttachment object populated from the query conditions when no match is found
 *
 * @method     BlogAttachment findOneById(int $id) Return the first BlogAttachment filtered by the id column
 * @method     BlogAttachment findOneByPath(string $path) Return the first BlogAttachment filtered by the path column
 * @method     BlogAttachment findOneByComment(string $comment) Return the first BlogAttachment filtered by the comment column
 * @method     BlogAttachment findOneBySize(int $size) Return the first BlogAttachment filtered by the size column
 * @method     BlogAttachment findOneByPostId(int $post_id) Return the first BlogAttachment filtered by the post_id column
 * @method     BlogAttachment findOneByFilename(string $filename) Return the first BlogAttachment filtered by the filename column
 * @method     BlogAttachment findOneByBlogId(int $blog_id) Return the first BlogAttachment filtered by the blog_id column
 * @method     BlogAttachment findOneByCommentId(int $comment_id) Return the first BlogAttachment filtered by the comment_id column
 *
 * @method     array findById(int $id) Return BlogAttachment objects filtered by the id column
 * @method     array findByPath(string $path) Return BlogAttachment objects filtered by the path column
 * @method     array findByComment(string $comment) Return BlogAttachment objects filtered by the comment column
 * @method     array findBySize(int $size) Return BlogAttachment objects filtered by the size column
 * @method     array findByPostId(int $post_id) Return BlogAttachment objects filtered by the post_id column
 * @method     array findByFilename(string $filename) Return BlogAttachment objects filtered by the filename column
 * @method     array findByBlogId(int $blog_id) Return BlogAttachment objects filtered by the blog_id column
 * @method     array findByCommentId(int $comment_id) Return BlogAttachment objects filtered by the comment_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogAttachmentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogAttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogAttachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogAttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogAttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogAttachmentQuery) {
			return $criteria;
		}
		$query = new BlogAttachmentQuery();
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
	 * @return    BlogAttachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogAttachmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogAttachmentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogAttachmentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogAttachmentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogAttachmentPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogAttachmentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the size column
	 * 
	 * @param     int|array $size The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterBySize($size = null, $comparison = null)
	{
		if (is_array($size)) {
			$useMinMax = false;
			if (isset($size['min'])) {
				$this->addUsingAlias(BlogAttachmentPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($size['max'])) {
				$this->addUsingAlias(BlogAttachmentPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogAttachmentPeer::SIZE, $size, $comparison);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId)) {
			$useMinMax = false;
			if (isset($postId['min'])) {
				$this->addUsingAlias(BlogAttachmentPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postId['max'])) {
				$this->addUsingAlias(BlogAttachmentPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogAttachmentPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the filename column
	 * 
	 * @param     string $filename The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogAttachmentPeer::FILENAME, $filename, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogAttachmentPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogAttachmentPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogAttachmentPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the comment_id column
	 * 
	 * @param     int|array $commentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function filterByCommentId($commentId = null, $comparison = null)
	{
		if (is_array($commentId)) {
			$useMinMax = false;
			if (isset($commentId['min'])) {
				$this->addUsingAlias(BlogAttachmentPeer::COMMENT_ID, $commentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($commentId['max'])) {
				$this->addUsingAlias(BlogAttachmentPeer::COMMENT_ID, $commentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogAttachmentPeer::COMMENT_ID, $commentId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogAttachment $blogAttachment Object to remove from the list of results
	 *
	 * @return    BlogAttachmentQuery The current query, for fluid interface
	 */
	public function prune($blogAttachment = null)
	{
		if ($blogAttachment) {
			$this->addUsingAlias(BlogAttachmentPeer::ID, $blogAttachment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogAttachmentQuery
