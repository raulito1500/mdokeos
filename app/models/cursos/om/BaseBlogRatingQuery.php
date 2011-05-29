<?php


/**
 * Base class that represents a query for the 'blog_rating' table.
 *
 * 
 *
 * @method     BlogRatingQuery orderByRatingId($order = Criteria::ASC) Order by the rating_id column
 * @method     BlogRatingQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     BlogRatingQuery orderByRatingType($order = Criteria::ASC) Order by the rating_type column
 * @method     BlogRatingQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     BlogRatingQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     BlogRatingQuery orderByRating($order = Criteria::ASC) Order by the rating column
 *
 * @method     BlogRatingQuery groupByRatingId() Group by the rating_id column
 * @method     BlogRatingQuery groupByBlogId() Group by the blog_id column
 * @method     BlogRatingQuery groupByRatingType() Group by the rating_type column
 * @method     BlogRatingQuery groupByItemId() Group by the item_id column
 * @method     BlogRatingQuery groupByUserId() Group by the user_id column
 * @method     BlogRatingQuery groupByRating() Group by the rating column
 *
 * @method     BlogRatingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogRatingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogRatingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BlogRating findOne(PropelPDO $con = null) Return the first BlogRating matching the query
 * @method     BlogRating findOneOrCreate(PropelPDO $con = null) Return the first BlogRating matching the query, or a new BlogRating object populated from the query conditions when no match is found
 *
 * @method     BlogRating findOneByRatingId(int $rating_id) Return the first BlogRating filtered by the rating_id column
 * @method     BlogRating findOneByBlogId(int $blog_id) Return the first BlogRating filtered by the blog_id column
 * @method     BlogRating findOneByRatingType(string $rating_type) Return the first BlogRating filtered by the rating_type column
 * @method     BlogRating findOneByItemId(int $item_id) Return the first BlogRating filtered by the item_id column
 * @method     BlogRating findOneByUserId(int $user_id) Return the first BlogRating filtered by the user_id column
 * @method     BlogRating findOneByRating(int $rating) Return the first BlogRating filtered by the rating column
 *
 * @method     array findByRatingId(int $rating_id) Return BlogRating objects filtered by the rating_id column
 * @method     array findByBlogId(int $blog_id) Return BlogRating objects filtered by the blog_id column
 * @method     array findByRatingType(string $rating_type) Return BlogRating objects filtered by the rating_type column
 * @method     array findByItemId(int $item_id) Return BlogRating objects filtered by the item_id column
 * @method     array findByUserId(int $user_id) Return BlogRating objects filtered by the user_id column
 * @method     array findByRating(int $rating) Return BlogRating objects filtered by the rating column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseBlogRatingQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogRatingQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'BlogRating', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogRatingQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogRatingQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogRatingQuery) {
			return $criteria;
		}
		$query = new BlogRatingQuery();
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
	 * @return    BlogRating|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogRatingPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogRatingPeer::RATING_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogRatingPeer::RATING_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the rating_id column
	 * 
	 * @param     int|array $ratingId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByRatingId($ratingId = null, $comparison = null)
	{
		if (is_array($ratingId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogRatingPeer::RATING_ID, $ratingId, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(BlogRatingPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(BlogRatingPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogRatingPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the rating_type column
	 * 
	 * @param     string $ratingType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByRatingType($ratingType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ratingType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ratingType)) {
				$ratingType = str_replace('*', '%', $ratingType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogRatingPeer::RATING_TYPE, $ratingType, $comparison);
	}

	/**
	 * Filter the query on the item_id column
	 * 
	 * @param     int|array $itemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByItemId($itemId = null, $comparison = null)
	{
		if (is_array($itemId)) {
			$useMinMax = false;
			if (isset($itemId['min'])) {
				$this->addUsingAlias(BlogRatingPeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($itemId['max'])) {
				$this->addUsingAlias(BlogRatingPeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogRatingPeer::ITEM_ID, $itemId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(BlogRatingPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(BlogRatingPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogRatingPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the rating column
	 * 
	 * @param     int|array $rating The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function filterByRating($rating = null, $comparison = null)
	{
		if (is_array($rating)) {
			$useMinMax = false;
			if (isset($rating['min'])) {
				$this->addUsingAlias(BlogRatingPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($rating['max'])) {
				$this->addUsingAlias(BlogRatingPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogRatingPeer::RATING, $rating, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     BlogRating $blogRating Object to remove from the list of results
	 *
	 * @return    BlogRatingQuery The current query, for fluid interface
	 */
	public function prune($blogRating = null)
	{
		if ($blogRating) {
			$this->addUsingAlias(BlogRatingPeer::RATING_ID, $blogRating->getRatingId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogRatingQuery
