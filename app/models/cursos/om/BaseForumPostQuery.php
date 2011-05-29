<?php


/**
 * Base class that represents a query for the 'forum_post' table.
 *
 * 
 *
 * @method     ForumPostQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     ForumPostQuery orderByPostTitle($order = Criteria::ASC) Order by the post_title column
 * @method     ForumPostQuery orderByPostText($order = Criteria::ASC) Order by the post_text column
 * @method     ForumPostQuery orderByThreadId($order = Criteria::ASC) Order by the thread_id column
 * @method     ForumPostQuery orderByForumId($order = Criteria::ASC) Order by the forum_id column
 * @method     ForumPostQuery orderByPosterId($order = Criteria::ASC) Order by the poster_id column
 * @method     ForumPostQuery orderByPosterName($order = Criteria::ASC) Order by the poster_name column
 * @method     ForumPostQuery orderByPostDate($order = Criteria::ASC) Order by the post_date column
 * @method     ForumPostQuery orderByPostNotification($order = Criteria::ASC) Order by the post_notification column
 * @method     ForumPostQuery orderByPostParentId($order = Criteria::ASC) Order by the post_parent_id column
 * @method     ForumPostQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 *
 * @method     ForumPostQuery groupByPostId() Group by the post_id column
 * @method     ForumPostQuery groupByPostTitle() Group by the post_title column
 * @method     ForumPostQuery groupByPostText() Group by the post_text column
 * @method     ForumPostQuery groupByThreadId() Group by the thread_id column
 * @method     ForumPostQuery groupByForumId() Group by the forum_id column
 * @method     ForumPostQuery groupByPosterId() Group by the poster_id column
 * @method     ForumPostQuery groupByPosterName() Group by the poster_name column
 * @method     ForumPostQuery groupByPostDate() Group by the post_date column
 * @method     ForumPostQuery groupByPostNotification() Group by the post_notification column
 * @method     ForumPostQuery groupByPostParentId() Group by the post_parent_id column
 * @method     ForumPostQuery groupByVisible() Group by the visible column
 *
 * @method     ForumPostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumPostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumPostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumPost findOne(PropelPDO $con = null) Return the first ForumPost matching the query
 * @method     ForumPost findOneOrCreate(PropelPDO $con = null) Return the first ForumPost matching the query, or a new ForumPost object populated from the query conditions when no match is found
 *
 * @method     ForumPost findOneByPostId(int $post_id) Return the first ForumPost filtered by the post_id column
 * @method     ForumPost findOneByPostTitle(string $post_title) Return the first ForumPost filtered by the post_title column
 * @method     ForumPost findOneByPostText(string $post_text) Return the first ForumPost filtered by the post_text column
 * @method     ForumPost findOneByThreadId(int $thread_id) Return the first ForumPost filtered by the thread_id column
 * @method     ForumPost findOneByForumId(int $forum_id) Return the first ForumPost filtered by the forum_id column
 * @method     ForumPost findOneByPosterId(int $poster_id) Return the first ForumPost filtered by the poster_id column
 * @method     ForumPost findOneByPosterName(string $poster_name) Return the first ForumPost filtered by the poster_name column
 * @method     ForumPost findOneByPostDate(string $post_date) Return the first ForumPost filtered by the post_date column
 * @method     ForumPost findOneByPostNotification(int $post_notification) Return the first ForumPost filtered by the post_notification column
 * @method     ForumPost findOneByPostParentId(int $post_parent_id) Return the first ForumPost filtered by the post_parent_id column
 * @method     ForumPost findOneByVisible(int $visible) Return the first ForumPost filtered by the visible column
 *
 * @method     array findByPostId(int $post_id) Return ForumPost objects filtered by the post_id column
 * @method     array findByPostTitle(string $post_title) Return ForumPost objects filtered by the post_title column
 * @method     array findByPostText(string $post_text) Return ForumPost objects filtered by the post_text column
 * @method     array findByThreadId(int $thread_id) Return ForumPost objects filtered by the thread_id column
 * @method     array findByForumId(int $forum_id) Return ForumPost objects filtered by the forum_id column
 * @method     array findByPosterId(int $poster_id) Return ForumPost objects filtered by the poster_id column
 * @method     array findByPosterName(string $poster_name) Return ForumPost objects filtered by the poster_name column
 * @method     array findByPostDate(string $post_date) Return ForumPost objects filtered by the post_date column
 * @method     array findByPostNotification(int $post_notification) Return ForumPost objects filtered by the post_notification column
 * @method     array findByPostParentId(int $post_parent_id) Return ForumPost objects filtered by the post_parent_id column
 * @method     array findByVisible(int $visible) Return ForumPost objects filtered by the visible column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumPostQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumPostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumPost', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumPostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumPostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumPostQuery) {
			return $criteria;
		}
		$query = new ForumPostQuery();
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
	 * @return    ForumPost|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumPostPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumPostPeer::POST_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumPostPeer::POST_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumPostPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the post_title column
	 * 
	 * @param     string $postTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostTitle($postTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postTitle)) {
				$postTitle = str_replace('*', '%', $postTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POST_TITLE, $postTitle, $comparison);
	}

	/**
	 * Filter the query on the post_text column
	 * 
	 * @param     string $postText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostText($postText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postText)) {
				$postText = str_replace('*', '%', $postText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POST_TEXT, $postText, $comparison);
	}

	/**
	 * Filter the query on the thread_id column
	 * 
	 * @param     int|array $threadId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByThreadId($threadId = null, $comparison = null)
	{
		if (is_array($threadId)) {
			$useMinMax = false;
			if (isset($threadId['min'])) {
				$this->addUsingAlias(ForumPostPeer::THREAD_ID, $threadId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadId['max'])) {
				$this->addUsingAlias(ForumPostPeer::THREAD_ID, $threadId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::THREAD_ID, $threadId, $comparison);
	}

	/**
	 * Filter the query on the forum_id column
	 * 
	 * @param     int|array $forumId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByForumId($forumId = null, $comparison = null)
	{
		if (is_array($forumId)) {
			$useMinMax = false;
			if (isset($forumId['min'])) {
				$this->addUsingAlias(ForumPostPeer::FORUM_ID, $forumId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumId['max'])) {
				$this->addUsingAlias(ForumPostPeer::FORUM_ID, $forumId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::FORUM_ID, $forumId, $comparison);
	}

	/**
	 * Filter the query on the poster_id column
	 * 
	 * @param     int|array $posterId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPosterId($posterId = null, $comparison = null)
	{
		if (is_array($posterId)) {
			$useMinMax = false;
			if (isset($posterId['min'])) {
				$this->addUsingAlias(ForumPostPeer::POSTER_ID, $posterId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($posterId['max'])) {
				$this->addUsingAlias(ForumPostPeer::POSTER_ID, $posterId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POSTER_ID, $posterId, $comparison);
	}

	/**
	 * Filter the query on the poster_name column
	 * 
	 * @param     string $posterName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPosterName($posterName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($posterName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $posterName)) {
				$posterName = str_replace('*', '%', $posterName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POSTER_NAME, $posterName, $comparison);
	}

	/**
	 * Filter the query on the post_date column
	 * 
	 * @param     string|array $postDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostDate($postDate = null, $comparison = null)
	{
		if (is_array($postDate)) {
			$useMinMax = false;
			if (isset($postDate['min'])) {
				$this->addUsingAlias(ForumPostPeer::POST_DATE, $postDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postDate['max'])) {
				$this->addUsingAlias(ForumPostPeer::POST_DATE, $postDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POST_DATE, $postDate, $comparison);
	}

	/**
	 * Filter the query on the post_notification column
	 * 
	 * @param     int|array $postNotification The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostNotification($postNotification = null, $comparison = null)
	{
		if (is_array($postNotification)) {
			$useMinMax = false;
			if (isset($postNotification['min'])) {
				$this->addUsingAlias(ForumPostPeer::POST_NOTIFICATION, $postNotification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postNotification['max'])) {
				$this->addUsingAlias(ForumPostPeer::POST_NOTIFICATION, $postNotification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POST_NOTIFICATION, $postNotification, $comparison);
	}

	/**
	 * Filter the query on the post_parent_id column
	 * 
	 * @param     int|array $postParentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByPostParentId($postParentId = null, $comparison = null)
	{
		if (is_array($postParentId)) {
			$useMinMax = false;
			if (isset($postParentId['min'])) {
				$this->addUsingAlias(ForumPostPeer::POST_PARENT_ID, $postParentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postParentId['max'])) {
				$this->addUsingAlias(ForumPostPeer::POST_PARENT_ID, $postParentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::POST_PARENT_ID, $postParentId, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * @param     int|array $visible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (is_array($visible)) {
			$useMinMax = false;
			if (isset($visible['min'])) {
				$this->addUsingAlias(ForumPostPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visible['max'])) {
				$this->addUsingAlias(ForumPostPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumPostPeer::VISIBLE, $visible, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumPost $forumPost Object to remove from the list of results
	 *
	 * @return    ForumPostQuery The current query, for fluid interface
	 */
	public function prune($forumPost = null)
	{
		if ($forumPost) {
			$this->addUsingAlias(ForumPostPeer::POST_ID, $forumPost->getPostId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumPostQuery
