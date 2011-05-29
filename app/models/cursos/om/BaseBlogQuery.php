<?php


/**
 * Base class that represents a query for the 'blog' table.
 *
 * 
 *
 * @method     BlogQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogQuery orderByBlogName($order = Criteria::ASC) Order by the blog_name column
 * @method     BlogQuery orderByBlogSubtitle($order = Criteria::ASC) Order by the blog_subtitle column
 * @method     BlogQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method     BlogQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 *
 * @method     BlogQuery groupByBlogId() Group by the blog_id column
 * @method     BlogQuery groupByBlogName() Group by the blog_name column
 * @method     BlogQuery groupByBlogSubtitle() Group by the blog_subtitle column
 * @method     BlogQuery groupByDateCreation() Group by the date_creation column
 * @method     BlogQuery groupByVisibility() Group by the visibility column
 *
 * @method     BlogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Blog findOne(PropelPDO $con = null) Return the first Blog matching the query
 * @method     Blog findOneOrCreate(PropelPDO $con = null) Return the first Blog matching the query, or a new Blog object populated from the query conditions when no match is found
 *
 * @method     Blog findOneByBlogId(int $blog_id) Return the first Blog filtered by the blog_id column
 * @method     Blog findOneByBlogName(string $blog_name) Return the first Blog filtered by the blog_name column
 * @method     Blog findOneByBlogSubtitle(string $blog_subtitle) Return the first Blog filtered by the blog_subtitle column
 * @method     Blog findOneByDateCreation(string $date_creation) Return the first Blog filtered by the date_creation column
 * @method     Blog findOneByVisibility(int $visibility) Return the first Blog filtered by the visibility column
 *
 * @method     array findByBlogId(int $blog_id) Return Blog objects filtered by the blog_id column
 * @method     array findByBlogName(string $blog_name) Return Blog objects filtered by the blog_name column
 * @method     array findByBlogSubtitle(string $blog_subtitle) Return Blog objects filtered by the blog_subtitle column
 * @method     array findByDateCreation(string $date_creation) Return Blog objects filtered by the date_creation column
 * @method     array findByVisibility(int $visibility) Return Blog objects filtered by the visibility column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Blog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogQuery) {
			return $criteria;
		}
		$query = new BlogQuery();
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
	 * @return    Blog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogPeer::BLOG_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogPeer::BLOG_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the blog_name column
	 * 
	 * @param     string $blogName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByBlogName($blogName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($blogName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $blogName)) {
				$blogName = str_replace('*', '%', $blogName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::BLOG_NAME, $blogName, $comparison);
	}

	/**
	 * Filter the query on the blog_subtitle column
	 * 
	 * @param     string $blogSubtitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByBlogSubtitle($blogSubtitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($blogSubtitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $blogSubtitle)) {
				$blogSubtitle = str_replace('*', '%', $blogSubtitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::BLOG_SUBTITLE, $blogSubtitle, $comparison);
	}

	/**
	 * Filter the query on the date_creation column
	 * 
	 * @param     string|array $dateCreation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByDateCreation($dateCreation = null, $comparison = null)
	{
		if (is_array($dateCreation)) {
			$useMinMax = false;
			if (isset($dateCreation['min'])) {
				$this->addUsingAlias(BlogPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreation['max'])) {
				$this->addUsingAlias(BlogPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::DATE_CREATION, $dateCreation, $comparison);
	}

	/**
	 * Filter the query on the visibility column
	 * 
	 * @param     int|array $visibility The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility = null, $comparison = null)
	{
		if (is_array($visibility)) {
			$useMinMax = false;
			if (isset($visibility['min'])) {
				$this->addUsingAlias(BlogPeer::VISIBILITY, $visibility['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibility['max'])) {
				$this->addUsingAlias(BlogPeer::VISIBILITY, $visibility['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::VISIBILITY, $visibility, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Blog $blog Object to remove from the list of results
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function prune($blog = null)
	{
		if ($blog) {
			$this->addUsingAlias(BlogPeer::BLOG_ID, $blog->getBlogId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogQuery
