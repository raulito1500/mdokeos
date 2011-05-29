<?php


/**
 * Base class that represents a query for the 'forum_thread' table.
 *
 * 
 *
 * @method     ForumThreadQuery orderByThreadId($order = Criteria::ASC) Order by the thread_id column
 * @method     ForumThreadQuery orderByThreadTitle($order = Criteria::ASC) Order by the thread_title column
 * @method     ForumThreadQuery orderByForumId($order = Criteria::ASC) Order by the forum_id column
 * @method     ForumThreadQuery orderByThreadReplies($order = Criteria::ASC) Order by the thread_replies column
 * @method     ForumThreadQuery orderByThreadPosterId($order = Criteria::ASC) Order by the thread_poster_id column
 * @method     ForumThreadQuery orderByThreadPosterName($order = Criteria::ASC) Order by the thread_poster_name column
 * @method     ForumThreadQuery orderByThreadViews($order = Criteria::ASC) Order by the thread_views column
 * @method     ForumThreadQuery orderByThreadLastPost($order = Criteria::ASC) Order by the thread_last_post column
 * @method     ForumThreadQuery orderByThreadDate($order = Criteria::ASC) Order by the thread_date column
 * @method     ForumThreadQuery orderByThreadSticky($order = Criteria::ASC) Order by the thread_sticky column
 * @method     ForumThreadQuery orderByLocked($order = Criteria::ASC) Order by the locked column
 * @method     ForumThreadQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     ForumThreadQuery orderByThreadTitleQualify($order = Criteria::ASC) Order by the thread_title_qualify column
 * @method     ForumThreadQuery orderByThreadQualifyMax($order = Criteria::ASC) Order by the thread_qualify_max column
 * @method     ForumThreadQuery orderByThreadCloseDate($order = Criteria::ASC) Order by the thread_close_date column
 * @method     ForumThreadQuery orderByThreadWeight($order = Criteria::ASC) Order by the thread_weight column
 *
 * @method     ForumThreadQuery groupByThreadId() Group by the thread_id column
 * @method     ForumThreadQuery groupByThreadTitle() Group by the thread_title column
 * @method     ForumThreadQuery groupByForumId() Group by the forum_id column
 * @method     ForumThreadQuery groupByThreadReplies() Group by the thread_replies column
 * @method     ForumThreadQuery groupByThreadPosterId() Group by the thread_poster_id column
 * @method     ForumThreadQuery groupByThreadPosterName() Group by the thread_poster_name column
 * @method     ForumThreadQuery groupByThreadViews() Group by the thread_views column
 * @method     ForumThreadQuery groupByThreadLastPost() Group by the thread_last_post column
 * @method     ForumThreadQuery groupByThreadDate() Group by the thread_date column
 * @method     ForumThreadQuery groupByThreadSticky() Group by the thread_sticky column
 * @method     ForumThreadQuery groupByLocked() Group by the locked column
 * @method     ForumThreadQuery groupBySessionId() Group by the session_id column
 * @method     ForumThreadQuery groupByThreadTitleQualify() Group by the thread_title_qualify column
 * @method     ForumThreadQuery groupByThreadQualifyMax() Group by the thread_qualify_max column
 * @method     ForumThreadQuery groupByThreadCloseDate() Group by the thread_close_date column
 * @method     ForumThreadQuery groupByThreadWeight() Group by the thread_weight column
 *
 * @method     ForumThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ForumThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ForumThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ForumThread findOne(PropelPDO $con = null) Return the first ForumThread matching the query
 * @method     ForumThread findOneOrCreate(PropelPDO $con = null) Return the first ForumThread matching the query, or a new ForumThread object populated from the query conditions when no match is found
 *
 * @method     ForumThread findOneByThreadId(int $thread_id) Return the first ForumThread filtered by the thread_id column
 * @method     ForumThread findOneByThreadTitle(string $thread_title) Return the first ForumThread filtered by the thread_title column
 * @method     ForumThread findOneByForumId(int $forum_id) Return the first ForumThread filtered by the forum_id column
 * @method     ForumThread findOneByThreadReplies(int $thread_replies) Return the first ForumThread filtered by the thread_replies column
 * @method     ForumThread findOneByThreadPosterId(int $thread_poster_id) Return the first ForumThread filtered by the thread_poster_id column
 * @method     ForumThread findOneByThreadPosterName(string $thread_poster_name) Return the first ForumThread filtered by the thread_poster_name column
 * @method     ForumThread findOneByThreadViews(int $thread_views) Return the first ForumThread filtered by the thread_views column
 * @method     ForumThread findOneByThreadLastPost(int $thread_last_post) Return the first ForumThread filtered by the thread_last_post column
 * @method     ForumThread findOneByThreadDate(string $thread_date) Return the first ForumThread filtered by the thread_date column
 * @method     ForumThread findOneByThreadSticky(int $thread_sticky) Return the first ForumThread filtered by the thread_sticky column
 * @method     ForumThread findOneByLocked(int $locked) Return the first ForumThread filtered by the locked column
 * @method     ForumThread findOneBySessionId(int $session_id) Return the first ForumThread filtered by the session_id column
 * @method     ForumThread findOneByThreadTitleQualify(string $thread_title_qualify) Return the first ForumThread filtered by the thread_title_qualify column
 * @method     ForumThread findOneByThreadQualifyMax(double $thread_qualify_max) Return the first ForumThread filtered by the thread_qualify_max column
 * @method     ForumThread findOneByThreadCloseDate(string $thread_close_date) Return the first ForumThread filtered by the thread_close_date column
 * @method     ForumThread findOneByThreadWeight(double $thread_weight) Return the first ForumThread filtered by the thread_weight column
 *
 * @method     array findByThreadId(int $thread_id) Return ForumThread objects filtered by the thread_id column
 * @method     array findByThreadTitle(string $thread_title) Return ForumThread objects filtered by the thread_title column
 * @method     array findByForumId(int $forum_id) Return ForumThread objects filtered by the forum_id column
 * @method     array findByThreadReplies(int $thread_replies) Return ForumThread objects filtered by the thread_replies column
 * @method     array findByThreadPosterId(int $thread_poster_id) Return ForumThread objects filtered by the thread_poster_id column
 * @method     array findByThreadPosterName(string $thread_poster_name) Return ForumThread objects filtered by the thread_poster_name column
 * @method     array findByThreadViews(int $thread_views) Return ForumThread objects filtered by the thread_views column
 * @method     array findByThreadLastPost(int $thread_last_post) Return ForumThread objects filtered by the thread_last_post column
 * @method     array findByThreadDate(string $thread_date) Return ForumThread objects filtered by the thread_date column
 * @method     array findByThreadSticky(int $thread_sticky) Return ForumThread objects filtered by the thread_sticky column
 * @method     array findByLocked(int $locked) Return ForumThread objects filtered by the locked column
 * @method     array findBySessionId(int $session_id) Return ForumThread objects filtered by the session_id column
 * @method     array findByThreadTitleQualify(string $thread_title_qualify) Return ForumThread objects filtered by the thread_title_qualify column
 * @method     array findByThreadQualifyMax(double $thread_qualify_max) Return ForumThread objects filtered by the thread_qualify_max column
 * @method     array findByThreadCloseDate(string $thread_close_date) Return ForumThread objects filtered by the thread_close_date column
 * @method     array findByThreadWeight(double $thread_weight) Return ForumThread objects filtered by the thread_weight column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseForumThreadQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseForumThreadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ForumThread', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ForumThreadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ForumThreadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ForumThreadQuery) {
			return $criteria;
		}
		$query = new ForumThreadQuery();
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
	 * @return    ForumThread|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ForumThreadPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ForumThreadPeer::THREAD_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ForumThreadPeer::THREAD_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the thread_id column
	 * 
	 * @param     int|array $threadId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadId($threadId = null, $comparison = null)
	{
		if (is_array($threadId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_ID, $threadId, $comparison);
	}

	/**
	 * Filter the query on the thread_title column
	 * 
	 * @param     string $threadTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadTitle($threadTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($threadTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $threadTitle)) {
				$threadTitle = str_replace('*', '%', $threadTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_TITLE, $threadTitle, $comparison);
	}

	/**
	 * Filter the query on the forum_id column
	 * 
	 * @param     int|array $forumId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByForumId($forumId = null, $comparison = null)
	{
		if (is_array($forumId)) {
			$useMinMax = false;
			if (isset($forumId['min'])) {
				$this->addUsingAlias(ForumThreadPeer::FORUM_ID, $forumId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumId['max'])) {
				$this->addUsingAlias(ForumThreadPeer::FORUM_ID, $forumId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::FORUM_ID, $forumId, $comparison);
	}

	/**
	 * Filter the query on the thread_replies column
	 * 
	 * @param     int|array $threadReplies The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadReplies($threadReplies = null, $comparison = null)
	{
		if (is_array($threadReplies)) {
			$useMinMax = false;
			if (isset($threadReplies['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_REPLIES, $threadReplies['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadReplies['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_REPLIES, $threadReplies['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_REPLIES, $threadReplies, $comparison);
	}

	/**
	 * Filter the query on the thread_poster_id column
	 * 
	 * @param     int|array $threadPosterId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadPosterId($threadPosterId = null, $comparison = null)
	{
		if (is_array($threadPosterId)) {
			$useMinMax = false;
			if (isset($threadPosterId['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_POSTER_ID, $threadPosterId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadPosterId['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_POSTER_ID, $threadPosterId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_POSTER_ID, $threadPosterId, $comparison);
	}

	/**
	 * Filter the query on the thread_poster_name column
	 * 
	 * @param     string $threadPosterName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadPosterName($threadPosterName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($threadPosterName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $threadPosterName)) {
				$threadPosterName = str_replace('*', '%', $threadPosterName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_POSTER_NAME, $threadPosterName, $comparison);
	}

	/**
	 * Filter the query on the thread_views column
	 * 
	 * @param     int|array $threadViews The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadViews($threadViews = null, $comparison = null)
	{
		if (is_array($threadViews)) {
			$useMinMax = false;
			if (isset($threadViews['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_VIEWS, $threadViews['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadViews['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_VIEWS, $threadViews['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_VIEWS, $threadViews, $comparison);
	}

	/**
	 * Filter the query on the thread_last_post column
	 * 
	 * @param     int|array $threadLastPost The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadLastPost($threadLastPost = null, $comparison = null)
	{
		if (is_array($threadLastPost)) {
			$useMinMax = false;
			if (isset($threadLastPost['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_LAST_POST, $threadLastPost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadLastPost['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_LAST_POST, $threadLastPost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_LAST_POST, $threadLastPost, $comparison);
	}

	/**
	 * Filter the query on the thread_date column
	 * 
	 * @param     string|array $threadDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadDate($threadDate = null, $comparison = null)
	{
		if (is_array($threadDate)) {
			$useMinMax = false;
			if (isset($threadDate['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_DATE, $threadDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadDate['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_DATE, $threadDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_DATE, $threadDate, $comparison);
	}

	/**
	 * Filter the query on the thread_sticky column
	 * 
	 * @param     int|array $threadSticky The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadSticky($threadSticky = null, $comparison = null)
	{
		if (is_array($threadSticky)) {
			$useMinMax = false;
			if (isset($threadSticky['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_STICKY, $threadSticky['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadSticky['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_STICKY, $threadSticky['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_STICKY, $threadSticky, $comparison);
	}

	/**
	 * Filter the query on the locked column
	 * 
	 * @param     int|array $locked The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByLocked($locked = null, $comparison = null)
	{
		if (is_array($locked)) {
			$useMinMax = false;
			if (isset($locked['min'])) {
				$this->addUsingAlias(ForumThreadPeer::LOCKED, $locked['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locked['max'])) {
				$this->addUsingAlias(ForumThreadPeer::LOCKED, $locked['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::LOCKED, $locked, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(ForumThreadPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(ForumThreadPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the thread_title_qualify column
	 * 
	 * @param     string $threadTitleQualify The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadTitleQualify($threadTitleQualify = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($threadTitleQualify)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $threadTitleQualify)) {
				$threadTitleQualify = str_replace('*', '%', $threadTitleQualify);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_TITLE_QUALIFY, $threadTitleQualify, $comparison);
	}

	/**
	 * Filter the query on the thread_qualify_max column
	 * 
	 * @param     double|array $threadQualifyMax The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadQualifyMax($threadQualifyMax = null, $comparison = null)
	{
		if (is_array($threadQualifyMax)) {
			$useMinMax = false;
			if (isset($threadQualifyMax['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_QUALIFY_MAX, $threadQualifyMax['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadQualifyMax['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_QUALIFY_MAX, $threadQualifyMax['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_QUALIFY_MAX, $threadQualifyMax, $comparison);
	}

	/**
	 * Filter the query on the thread_close_date column
	 * 
	 * @param     string|array $threadCloseDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadCloseDate($threadCloseDate = null, $comparison = null)
	{
		if (is_array($threadCloseDate)) {
			$useMinMax = false;
			if (isset($threadCloseDate['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_CLOSE_DATE, $threadCloseDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadCloseDate['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_CLOSE_DATE, $threadCloseDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_CLOSE_DATE, $threadCloseDate, $comparison);
	}

	/**
	 * Filter the query on the thread_weight column
	 * 
	 * @param     double|array $threadWeight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function filterByThreadWeight($threadWeight = null, $comparison = null)
	{
		if (is_array($threadWeight)) {
			$useMinMax = false;
			if (isset($threadWeight['min'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_WEIGHT, $threadWeight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($threadWeight['max'])) {
				$this->addUsingAlias(ForumThreadPeer::THREAD_WEIGHT, $threadWeight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ForumThreadPeer::THREAD_WEIGHT, $threadWeight, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ForumThread $forumThread Object to remove from the list of results
	 *
	 * @return    ForumThreadQuery The current query, for fluid interface
	 */
	public function prune($forumThread = null)
	{
		if ($forumThread) {
			$this->addUsingAlias(ForumThreadPeer::THREAD_ID, $forumThread->getThreadId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseForumThreadQuery
