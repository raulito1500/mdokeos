<?php


/**
 * Base class that represents a query for the 'blog_comment' table.
 *
 * 
 *
 * @method     BlogCommentQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method     BlogCommentQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     BlogCommentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     BlogCommentQuery orderByAuthorId($order = Criteria::ASC) Order by the author_id column
 * @method     BlogCommentQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method     BlogCommentQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogCommentQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     BlogCommentQuery orderByTaskId($order = Criteria::ASC) Order by the task_id column
 * @method     BlogCommentQuery orderByParentCommentId($order = Criteria::ASC) Order by the parent_comment_id column
 *
 * @method     BlogCommentQuery groupByCommentId() Group by the comment_id column
 * @method     BlogCommentQuery groupByTitle() Group by the title column
 * @method     BlogCommentQuery groupByComment() Group by the comment column
 * @method     BlogCommentQuery groupByAuthorId() Group by the author_id column
 * @method     BlogCommentQuery groupByDateCreation() Group by the date_creation column
 * @method     BlogCommentQuery groupByBlogId() Group by the blog_id column
 * @method     BlogCommentQuery groupByPostId() Group by the post_id column
 * @method     BlogCommentQuery groupByTaskId() Group by the task_id column
 * @method     BlogCommentQuery groupByParentCommentId() Group by the parent_comment_id column
 *
 * @method     BlogCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogComment findOne(PropelPDO $con = null) Return the first BlogComment matching the query
 * @method     BlogComment findOneOrCreate(PropelPDO $con = null) Return the first BlogComment matching the query, or a new BlogComment object populated from the query conditions when no match is found
 *
 * @method     BlogComment findOneByCommentId(int $comment_id) Return the first BlogComment filtered by the comment_id column
 * @method     BlogComment findOneByTitle(string $title) Return the first BlogComment filtered by the title column
 * @method     BlogComment findOneByComment(string $comment) Return the first BlogComment filtered by the comment column
 * @method     BlogComment findOneByAuthorId(int $author_id) Return the first BlogComment filtered by the author_id column
 * @method     BlogComment findOneByDateCreation(string $date_creation) Return the first BlogComment filtered by the date_creation column
 * @method     BlogComment findOneByBlogId(int $blog_id) Return the first BlogComment filtered by the blog_id column
 * @method     BlogComment findOneByPostId(int $post_id) Return the first BlogComment filtered by the post_id column
 * @method     BlogComment findOneByTaskId(int $task_id) Return the first BlogComment filtered by the task_id column
 * @method     BlogComment findOneByParentCommentId(int $parent_comment_id) Return the first BlogComment filtered by the parent_comment_id column
 *
 * @method     array findByCommentId(int $comment_id) Return BlogComment objects filtered by the comment_id column
 * @method     array findByTitle(string $title) Return BlogComment objects filtered by the title column
 * @method     array findByComment(string $comment) Return BlogComment objects filtered by the comment column
 * @method     array findByAuthorId(int $author_id) Return BlogComment objects filtered by the author_id column
 * @method     array findByDateCreation(string $date_creation) Return BlogComment objects filtered by the date_creation column
 * @method     array findByBlogId(int $blog_id) Return BlogComment objects filtered by the blog_id column
 * @method     array findByPostId(int $post_id) Return BlogComment objects filtered by the post_id column
 * @method     array findByTaskId(int $task_id) Return BlogComment objects filtered by the task_id column
 * @method     array findByParentCommentId(int $parent_comment_id) Return BlogComment objects filtered by the parent_comment_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogCommentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogCommentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogComment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogCommentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogCommentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogCommentQuery) {
			return $criteria;
		}
		$query = new BlogCommentQuery();
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
	 * @return    BlogComment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogCommentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogCommentPeer::COMMENT_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogCommentPeer::COMMENT_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the comment_id column
	 * 
	 * @param     int|array $commentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByCommentId($commentId = null, $comparison = null)
	{
		if (is_array($commentId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogCommentPeer::COMMENT_ID, $commentId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogCommentPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogCommentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the author_id column
	 * 
	 * @param     int|array $authorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByAuthorId($authorId = null, $comparison = null)
	{
		if (is_array($authorId)) {
			$useMinMax = false;
			if (isset($authorId['min'])) {
				$this->addUsingAlias(BlogCommentPeer::AUTHOR_ID, $authorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($authorId['max'])) {
				$this->addUsingAlias(BlogCommentPeer::AUTHOR_ID, $authorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::AUTHOR_ID, $authorId, $comparison);
	}

	/**
	 * Filter the query on the date_creation column
	 * 
	 * @param     string|array $dateCreation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByDateCreation($dateCreation = null, $comparison = null)
	{
		if (is_array($dateCreation)) {
			$useMinMax = false;
			if (isset($dateCreation['min'])) {
				$this->addUsingAlias(BlogCommentPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreation['max'])) {
				$this->addUsingAlias(BlogCommentPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::DATE_CREATION, $dateCreation, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogCommentPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogCommentPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId)) {
			$useMinMax = false;
			if (isset($postId['min'])) {
				$this->addUsingAlias(BlogCommentPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postId['max'])) {
				$this->addUsingAlias(BlogCommentPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the task_id column
	 * 
	 * @param     int|array $taskId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByTaskId($taskId = null, $comparison = null)
	{
		if (is_array($taskId)) {
			$useMinMax = false;
			if (isset($taskId['min'])) {
				$this->addUsingAlias(BlogCommentPeer::TASK_ID, $taskId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taskId['max'])) {
				$this->addUsingAlias(BlogCommentPeer::TASK_ID, $taskId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::TASK_ID, $taskId, $comparison);
	}

	/**
	 * Filter the query on the parent_comment_id column
	 * 
	 * @param     int|array $parentCommentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function filterByParentCommentId($parentCommentId = null, $comparison = null)
	{
		if (is_array($parentCommentId)) {
			$useMinMax = false;
			if (isset($parentCommentId['min'])) {
				$this->addUsingAlias(BlogCommentPeer::PARENT_COMMENT_ID, $parentCommentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentCommentId['max'])) {
				$this->addUsingAlias(BlogCommentPeer::PARENT_COMMENT_ID, $parentCommentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogCommentPeer::PARENT_COMMENT_ID, $parentCommentId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogComment $blogComment Object to remove from the list of results
	 *
	 * @return    BlogCommentQuery The current query, for fluid interface
	 */
	public function prune($blogComment = null)
	{
		if ($blogComment) {
			$this->addUsingAlias(BlogCommentPeer::COMMENT_ID, $blogComment->getCommentId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogCommentQuery
