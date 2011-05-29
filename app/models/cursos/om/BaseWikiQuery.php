<?php


/**
 * Base class that represents a query for the 'wiki' table.
 *
 * 
 *
 * @method     WikiQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WikiQuery orderByPageId($order = Criteria::ASC) Order by the page_id column
 * @method     WikiQuery orderByReflink($order = Criteria::ASC) Order by the reflink column
 * @method     WikiQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     WikiQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     WikiQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     WikiQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method     WikiQuery orderByDtime($order = Criteria::ASC) Order by the dtime column
 * @method     WikiQuery orderByAddlock($order = Criteria::ASC) Order by the addlock column
 * @method     WikiQuery orderByEditlock($order = Criteria::ASC) Order by the editlock column
 * @method     WikiQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 * @method     WikiQuery orderByAddlockDisc($order = Criteria::ASC) Order by the addlock_disc column
 * @method     WikiQuery orderByVisibilityDisc($order = Criteria::ASC) Order by the visibility_disc column
 * @method     WikiQuery orderByRatinglockDisc($order = Criteria::ASC) Order by the ratinglock_disc column
 * @method     WikiQuery orderByAssignment($order = Criteria::ASC) Order by the assignment column
 * @method     WikiQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     WikiQuery orderByProgress($order = Criteria::ASC) Order by the progress column
 * @method     WikiQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     WikiQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     WikiQuery orderByIsEditing($order = Criteria::ASC) Order by the is_editing column
 * @method     WikiQuery orderByTimeEdit($order = Criteria::ASC) Order by the time_edit column
 * @method     WikiQuery orderByHits($order = Criteria::ASC) Order by the hits column
 * @method     WikiQuery orderByLinksto($order = Criteria::ASC) Order by the linksto column
 * @method     WikiQuery orderByTag($order = Criteria::ASC) Order by the tag column
 * @method     WikiQuery orderByUserIp($order = Criteria::ASC) Order by the user_ip column
 *
 * @method     WikiQuery groupById() Group by the id column
 * @method     WikiQuery groupByPageId() Group by the page_id column
 * @method     WikiQuery groupByReflink() Group by the reflink column
 * @method     WikiQuery groupByTitle() Group by the title column
 * @method     WikiQuery groupByContent() Group by the content column
 * @method     WikiQuery groupByUserId() Group by the user_id column
 * @method     WikiQuery groupByGroupId() Group by the group_id column
 * @method     WikiQuery groupByDtime() Group by the dtime column
 * @method     WikiQuery groupByAddlock() Group by the addlock column
 * @method     WikiQuery groupByEditlock() Group by the editlock column
 * @method     WikiQuery groupByVisibility() Group by the visibility column
 * @method     WikiQuery groupByAddlockDisc() Group by the addlock_disc column
 * @method     WikiQuery groupByVisibilityDisc() Group by the visibility_disc column
 * @method     WikiQuery groupByRatinglockDisc() Group by the ratinglock_disc column
 * @method     WikiQuery groupByAssignment() Group by the assignment column
 * @method     WikiQuery groupByComment() Group by the comment column
 * @method     WikiQuery groupByProgress() Group by the progress column
 * @method     WikiQuery groupByScore() Group by the score column
 * @method     WikiQuery groupByVersion() Group by the version column
 * @method     WikiQuery groupByIsEditing() Group by the is_editing column
 * @method     WikiQuery groupByTimeEdit() Group by the time_edit column
 * @method     WikiQuery groupByHits() Group by the hits column
 * @method     WikiQuery groupByLinksto() Group by the linksto column
 * @method     WikiQuery groupByTag() Group by the tag column
 * @method     WikiQuery groupByUserIp() Group by the user_ip column
 *
 * @method     WikiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     WikiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     WikiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Wiki findOne(PropelPDO $con = null) Return the first Wiki matching the query
 * @method     Wiki findOneOrCreate(PropelPDO $con = null) Return the first Wiki matching the query, or a new Wiki object populated from the query conditions when no match is found
 *
 * @method     Wiki findOneById(int $id) Return the first Wiki filtered by the id column
 * @method     Wiki findOneByPageId(int $page_id) Return the first Wiki filtered by the page_id column
 * @method     Wiki findOneByReflink(string $reflink) Return the first Wiki filtered by the reflink column
 * @method     Wiki findOneByTitle(string $title) Return the first Wiki filtered by the title column
 * @method     Wiki findOneByContent(string $content) Return the first Wiki filtered by the content column
 * @method     Wiki findOneByUserId(int $user_id) Return the first Wiki filtered by the user_id column
 * @method     Wiki findOneByGroupId(int $group_id) Return the first Wiki filtered by the group_id column
 * @method     Wiki findOneByDtime(string $dtime) Return the first Wiki filtered by the dtime column
 * @method     Wiki findOneByAddlock(int $addlock) Return the first Wiki filtered by the addlock column
 * @method     Wiki findOneByEditlock(int $editlock) Return the first Wiki filtered by the editlock column
 * @method     Wiki findOneByVisibility(int $visibility) Return the first Wiki filtered by the visibility column
 * @method     Wiki findOneByAddlockDisc(int $addlock_disc) Return the first Wiki filtered by the addlock_disc column
 * @method     Wiki findOneByVisibilityDisc(int $visibility_disc) Return the first Wiki filtered by the visibility_disc column
 * @method     Wiki findOneByRatinglockDisc(int $ratinglock_disc) Return the first Wiki filtered by the ratinglock_disc column
 * @method     Wiki findOneByAssignment(int $assignment) Return the first Wiki filtered by the assignment column
 * @method     Wiki findOneByComment(string $comment) Return the first Wiki filtered by the comment column
 * @method     Wiki findOneByProgress(string $progress) Return the first Wiki filtered by the progress column
 * @method     Wiki findOneByScore(int $score) Return the first Wiki filtered by the score column
 * @method     Wiki findOneByVersion(int $version) Return the first Wiki filtered by the version column
 * @method     Wiki findOneByIsEditing(int $is_editing) Return the first Wiki filtered by the is_editing column
 * @method     Wiki findOneByTimeEdit(string $time_edit) Return the first Wiki filtered by the time_edit column
 * @method     Wiki findOneByHits(int $hits) Return the first Wiki filtered by the hits column
 * @method     Wiki findOneByLinksto(string $linksto) Return the first Wiki filtered by the linksto column
 * @method     Wiki findOneByTag(string $tag) Return the first Wiki filtered by the tag column
 * @method     Wiki findOneByUserIp(string $user_ip) Return the first Wiki filtered by the user_ip column
 *
 * @method     array findById(int $id) Return Wiki objects filtered by the id column
 * @method     array findByPageId(int $page_id) Return Wiki objects filtered by the page_id column
 * @method     array findByReflink(string $reflink) Return Wiki objects filtered by the reflink column
 * @method     array findByTitle(string $title) Return Wiki objects filtered by the title column
 * @method     array findByContent(string $content) Return Wiki objects filtered by the content column
 * @method     array findByUserId(int $user_id) Return Wiki objects filtered by the user_id column
 * @method     array findByGroupId(int $group_id) Return Wiki objects filtered by the group_id column
 * @method     array findByDtime(string $dtime) Return Wiki objects filtered by the dtime column
 * @method     array findByAddlock(int $addlock) Return Wiki objects filtered by the addlock column
 * @method     array findByEditlock(int $editlock) Return Wiki objects filtered by the editlock column
 * @method     array findByVisibility(int $visibility) Return Wiki objects filtered by the visibility column
 * @method     array findByAddlockDisc(int $addlock_disc) Return Wiki objects filtered by the addlock_disc column
 * @method     array findByVisibilityDisc(int $visibility_disc) Return Wiki objects filtered by the visibility_disc column
 * @method     array findByRatinglockDisc(int $ratinglock_disc) Return Wiki objects filtered by the ratinglock_disc column
 * @method     array findByAssignment(int $assignment) Return Wiki objects filtered by the assignment column
 * @method     array findByComment(string $comment) Return Wiki objects filtered by the comment column
 * @method     array findByProgress(string $progress) Return Wiki objects filtered by the progress column
 * @method     array findByScore(int $score) Return Wiki objects filtered by the score column
 * @method     array findByVersion(int $version) Return Wiki objects filtered by the version column
 * @method     array findByIsEditing(int $is_editing) Return Wiki objects filtered by the is_editing column
 * @method     array findByTimeEdit(string $time_edit) Return Wiki objects filtered by the time_edit column
 * @method     array findByHits(int $hits) Return Wiki objects filtered by the hits column
 * @method     array findByLinksto(string $linksto) Return Wiki objects filtered by the linksto column
 * @method     array findByTag(string $tag) Return Wiki objects filtered by the tag column
 * @method     array findByUserIp(string $user_ip) Return Wiki objects filtered by the user_ip column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWikiQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Wiki', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new WikiQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    WikiQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof WikiQuery) {
			return $criteria;
		}
		$query = new WikiQuery();
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
	 * @return    Wiki|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = WikiPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WikiPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WikiPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(WikiPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the page_id column
	 * 
	 * @param     int|array $pageId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByPageId($pageId = null, $comparison = null)
	{
		if (is_array($pageId)) {
			$useMinMax = false;
			if (isset($pageId['min'])) {
				$this->addUsingAlias(WikiPeer::PAGE_ID, $pageId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pageId['max'])) {
				$this->addUsingAlias(WikiPeer::PAGE_ID, $pageId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::PAGE_ID, $pageId, $comparison);
	}

	/**
	 * Filter the query on the reflink column
	 * 
	 * @param     string $reflink The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByReflink($reflink = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($reflink)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $reflink)) {
				$reflink = str_replace('*', '%', $reflink);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::REFLINK, $reflink, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
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
		return $this->addUsingAlias(WikiPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(WikiPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(WikiPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the group_id column
	 * 
	 * @param     int|array $groupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByGroupId($groupId = null, $comparison = null)
	{
		if (is_array($groupId)) {
			$useMinMax = false;
			if (isset($groupId['min'])) {
				$this->addUsingAlias(WikiPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupId['max'])) {
				$this->addUsingAlias(WikiPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::GROUP_ID, $groupId, $comparison);
	}

	/**
	 * Filter the query on the dtime column
	 * 
	 * @param     string|array $dtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByDtime($dtime = null, $comparison = null)
	{
		if (is_array($dtime)) {
			$useMinMax = false;
			if (isset($dtime['min'])) {
				$this->addUsingAlias(WikiPeer::DTIME, $dtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dtime['max'])) {
				$this->addUsingAlias(WikiPeer::DTIME, $dtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::DTIME, $dtime, $comparison);
	}

	/**
	 * Filter the query on the addlock column
	 * 
	 * @param     int|array $addlock The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByAddlock($addlock = null, $comparison = null)
	{
		if (is_array($addlock)) {
			$useMinMax = false;
			if (isset($addlock['min'])) {
				$this->addUsingAlias(WikiPeer::ADDLOCK, $addlock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addlock['max'])) {
				$this->addUsingAlias(WikiPeer::ADDLOCK, $addlock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::ADDLOCK, $addlock, $comparison);
	}

	/**
	 * Filter the query on the editlock column
	 * 
	 * @param     int|array $editlock The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByEditlock($editlock = null, $comparison = null)
	{
		if (is_array($editlock)) {
			$useMinMax = false;
			if (isset($editlock['min'])) {
				$this->addUsingAlias(WikiPeer::EDITLOCK, $editlock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($editlock['max'])) {
				$this->addUsingAlias(WikiPeer::EDITLOCK, $editlock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::EDITLOCK, $editlock, $comparison);
	}

	/**
	 * Filter the query on the visibility column
	 * 
	 * @param     int|array $visibility The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility = null, $comparison = null)
	{
		if (is_array($visibility)) {
			$useMinMax = false;
			if (isset($visibility['min'])) {
				$this->addUsingAlias(WikiPeer::VISIBILITY, $visibility['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibility['max'])) {
				$this->addUsingAlias(WikiPeer::VISIBILITY, $visibility['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::VISIBILITY, $visibility, $comparison);
	}

	/**
	 * Filter the query on the addlock_disc column
	 * 
	 * @param     int|array $addlockDisc The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByAddlockDisc($addlockDisc = null, $comparison = null)
	{
		if (is_array($addlockDisc)) {
			$useMinMax = false;
			if (isset($addlockDisc['min'])) {
				$this->addUsingAlias(WikiPeer::ADDLOCK_DISC, $addlockDisc['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addlockDisc['max'])) {
				$this->addUsingAlias(WikiPeer::ADDLOCK_DISC, $addlockDisc['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::ADDLOCK_DISC, $addlockDisc, $comparison);
	}

	/**
	 * Filter the query on the visibility_disc column
	 * 
	 * @param     int|array $visibilityDisc The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByVisibilityDisc($visibilityDisc = null, $comparison = null)
	{
		if (is_array($visibilityDisc)) {
			$useMinMax = false;
			if (isset($visibilityDisc['min'])) {
				$this->addUsingAlias(WikiPeer::VISIBILITY_DISC, $visibilityDisc['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibilityDisc['max'])) {
				$this->addUsingAlias(WikiPeer::VISIBILITY_DISC, $visibilityDisc['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::VISIBILITY_DISC, $visibilityDisc, $comparison);
	}

	/**
	 * Filter the query on the ratinglock_disc column
	 * 
	 * @param     int|array $ratinglockDisc The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByRatinglockDisc($ratinglockDisc = null, $comparison = null)
	{
		if (is_array($ratinglockDisc)) {
			$useMinMax = false;
			if (isset($ratinglockDisc['min'])) {
				$this->addUsingAlias(WikiPeer::RATINGLOCK_DISC, $ratinglockDisc['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ratinglockDisc['max'])) {
				$this->addUsingAlias(WikiPeer::RATINGLOCK_DISC, $ratinglockDisc['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::RATINGLOCK_DISC, $ratinglockDisc, $comparison);
	}

	/**
	 * Filter the query on the assignment column
	 * 
	 * @param     int|array $assignment The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByAssignment($assignment = null, $comparison = null)
	{
		if (is_array($assignment)) {
			$useMinMax = false;
			if (isset($assignment['min'])) {
				$this->addUsingAlias(WikiPeer::ASSIGNMENT, $assignment['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($assignment['max'])) {
				$this->addUsingAlias(WikiPeer::ASSIGNMENT, $assignment['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::ASSIGNMENT, $assignment, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
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
		return $this->addUsingAlias(WikiPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the progress column
	 * 
	 * @param     string $progress The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByProgress($progress = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($progress)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $progress)) {
				$progress = str_replace('*', '%', $progress);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::PROGRESS, $progress, $comparison);
	}

	/**
	 * Filter the query on the score column
	 * 
	 * @param     int|array $score The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByScore($score = null, $comparison = null)
	{
		if (is_array($score)) {
			$useMinMax = false;
			if (isset($score['min'])) {
				$this->addUsingAlias(WikiPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($score['max'])) {
				$this->addUsingAlias(WikiPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::SCORE, $score, $comparison);
	}

	/**
	 * Filter the query on the version column
	 * 
	 * @param     int|array $version The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (is_array($version)) {
			$useMinMax = false;
			if (isset($version['min'])) {
				$this->addUsingAlias(WikiPeer::VERSION, $version['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($version['max'])) {
				$this->addUsingAlias(WikiPeer::VERSION, $version['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::VERSION, $version, $comparison);
	}

	/**
	 * Filter the query on the is_editing column
	 * 
	 * @param     int|array $isEditing The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByIsEditing($isEditing = null, $comparison = null)
	{
		if (is_array($isEditing)) {
			$useMinMax = false;
			if (isset($isEditing['min'])) {
				$this->addUsingAlias(WikiPeer::IS_EDITING, $isEditing['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isEditing['max'])) {
				$this->addUsingAlias(WikiPeer::IS_EDITING, $isEditing['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::IS_EDITING, $isEditing, $comparison);
	}

	/**
	 * Filter the query on the time_edit column
	 * 
	 * @param     string|array $timeEdit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByTimeEdit($timeEdit = null, $comparison = null)
	{
		if (is_array($timeEdit)) {
			$useMinMax = false;
			if (isset($timeEdit['min'])) {
				$this->addUsingAlias(WikiPeer::TIME_EDIT, $timeEdit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeEdit['max'])) {
				$this->addUsingAlias(WikiPeer::TIME_EDIT, $timeEdit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::TIME_EDIT, $timeEdit, $comparison);
	}

	/**
	 * Filter the query on the hits column
	 * 
	 * @param     int|array $hits The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByHits($hits = null, $comparison = null)
	{
		if (is_array($hits)) {
			$useMinMax = false;
			if (isset($hits['min'])) {
				$this->addUsingAlias(WikiPeer::HITS, $hits['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hits['max'])) {
				$this->addUsingAlias(WikiPeer::HITS, $hits['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiPeer::HITS, $hits, $comparison);
	}

	/**
	 * Filter the query on the linksto column
	 * 
	 * @param     string $linksto The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByLinksto($linksto = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($linksto)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $linksto)) {
				$linksto = str_replace('*', '%', $linksto);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::LINKSTO, $linksto, $comparison);
	}

	/**
	 * Filter the query on the tag column
	 * 
	 * @param     string $tag The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByTag($tag = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tag)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tag)) {
				$tag = str_replace('*', '%', $tag);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::TAG, $tag, $comparison);
	}

	/**
	 * Filter the query on the user_ip column
	 * 
	 * @param     string $userIp The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function filterByUserIp($userIp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userIp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userIp)) {
				$userIp = str_replace('*', '%', $userIp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiPeer::USER_IP, $userIp, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Wiki $wiki Object to remove from the list of results
	 *
	 * @return    WikiQuery The current query, for fluid interface
	 */
	public function prune($wiki = null)
	{
		if ($wiki) {
			$this->addUsingAlias(WikiPeer::ID, $wiki->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseWikiQuery
