<?php


/**
 * Base class that represents a query for the 'blog_post' table.
 *
 * 
 *
 * @method     BlogPostQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     BlogPostQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     BlogPostQuery orderByFullText($order = Criteria::ASC) Order by the full_text column
 * @method     BlogPostQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method     BlogPostQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogPostQuery orderByAuthorId($order = Criteria::ASC) Order by the author_id column
 *
 * @method     BlogPostQuery groupByPostId() Group by the post_id column
 * @method     BlogPostQuery groupByTitle() Group by the title column
 * @method     BlogPostQuery groupByFullText() Group by the full_text column
 * @method     BlogPostQuery groupByDateCreation() Group by the date_creation column
 * @method     BlogPostQuery groupByBlogId() Group by the blog_id column
 * @method     BlogPostQuery groupByAuthorId() Group by the author_id column
 *
 * @method     BlogPostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogPostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogPostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogPost findOne(PropelPDO $con = null) Return the first BlogPost matching the query
 * @method     BlogPost findOneOrCreate(PropelPDO $con = null) Return the first BlogPost matching the query, or a new BlogPost object populated from the query conditions when no match is found
 *
 * @method     BlogPost findOneByPostId(int $post_id) Return the first BlogPost filtered by the post_id column
 * @method     BlogPost findOneByTitle(string $title) Return the first BlogPost filtered by the title column
 * @method     BlogPost findOneByFullText(string $full_text) Return the first BlogPost filtered by the full_text column
 * @method     BlogPost findOneByDateCreation(string $date_creation) Return the first BlogPost filtered by the date_creation column
 * @method     BlogPost findOneByBlogId(int $blog_id) Return the first BlogPost filtered by the blog_id column
 * @method     BlogPost findOneByAuthorId(int $author_id) Return the first BlogPost filtered by the author_id column
 *
 * @method     array findByPostId(int $post_id) Return BlogPost objects filtered by the post_id column
 * @method     array findByTitle(string $title) Return BlogPost objects filtered by the title column
 * @method     array findByFullText(string $full_text) Return BlogPost objects filtered by the full_text column
 * @method     array findByDateCreation(string $date_creation) Return BlogPost objects filtered by the date_creation column
 * @method     array findByBlogId(int $blog_id) Return BlogPost objects filtered by the blog_id column
 * @method     array findByAuthorId(int $author_id) Return BlogPost objects filtered by the author_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogPostQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogPostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogPost', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogPostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogPostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogPostQuery) {
			return $criteria;
		}
		$query = new BlogPostQuery();
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
	 * @return    BlogPost|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogPostPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogPostPeer::POST_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogPostPeer::POST_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogPostPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogPostPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the full_text column
	 * 
	 * @param     string $fullText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByFullText($fullText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fullText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fullText)) {
				$fullText = str_replace('*', '%', $fullText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPostPeer::FULL_TEXT, $fullText, $comparison);
	}

	/**
	 * Filter the query on the date_creation column
	 * 
	 * @param     string|array $dateCreation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByDateCreation($dateCreation = null, $comparison = null)
	{
		if (is_array($dateCreation)) {
			$useMinMax = false;
			if (isset($dateCreation['min'])) {
				$this->addUsingAlias(BlogPostPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreation['max'])) {
				$this->addUsingAlias(BlogPostPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPostPeer::DATE_CREATION, $dateCreation, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogPostPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogPostPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPostPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the author_id column
	 * 
	 * @param     int|array $authorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function filterByAuthorId($authorId = null, $comparison = null)
	{
		if (is_array($authorId)) {
			$useMinMax = false;
			if (isset($authorId['min'])) {
				$this->addUsingAlias(BlogPostPeer::AUTHOR_ID, $authorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($authorId['max'])) {
				$this->addUsingAlias(BlogPostPeer::AUTHOR_ID, $authorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPostPeer::AUTHOR_ID, $authorId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogPost $blogPost Object to remove from the list of results
	 *
	 * @return    BlogPostQuery The current query, for fluid interface
	 */
	public function prune($blogPost = null)
	{
		if ($blogPost) {
			$this->addUsingAlias(BlogPostPeer::POST_ID, $blogPost->getPostId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogPostQuery
