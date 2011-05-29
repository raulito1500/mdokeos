<?php


/**
 * Base class that represents a query for the 'group_category' table.
 *
 * 
 *
 * @method     GroupCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GroupCategoryQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     GroupCategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GroupCategoryQuery orderByDocState($order = Criteria::ASC) Order by the doc_state column
 * @method     GroupCategoryQuery orderByCalendarState($order = Criteria::ASC) Order by the calendar_state column
 * @method     GroupCategoryQuery orderByWorkState($order = Criteria::ASC) Order by the work_state column
 * @method     GroupCategoryQuery orderByAnnouncementsState($order = Criteria::ASC) Order by the announcements_state column
 * @method     GroupCategoryQuery orderByForumState($order = Criteria::ASC) Order by the forum_state column
 * @method     GroupCategoryQuery orderByWikiState($order = Criteria::ASC) Order by the wiki_state column
 * @method     GroupCategoryQuery orderByMaxStudent($order = Criteria::ASC) Order by the max_student column
 * @method     GroupCategoryQuery orderBySelfRegAllowed($order = Criteria::ASC) Order by the self_reg_allowed column
 * @method     GroupCategoryQuery orderBySelfUnregAllowed($order = Criteria::ASC) Order by the self_unreg_allowed column
 * @method     GroupCategoryQuery orderByGroupsPerUser($order = Criteria::ASC) Order by the groups_per_user column
 * @method     GroupCategoryQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 *
 * @method     GroupCategoryQuery groupById() Group by the id column
 * @method     GroupCategoryQuery groupByTitle() Group by the title column
 * @method     GroupCategoryQuery groupByDescription() Group by the description column
 * @method     GroupCategoryQuery groupByDocState() Group by the doc_state column
 * @method     GroupCategoryQuery groupByCalendarState() Group by the calendar_state column
 * @method     GroupCategoryQuery groupByWorkState() Group by the work_state column
 * @method     GroupCategoryQuery groupByAnnouncementsState() Group by the announcements_state column
 * @method     GroupCategoryQuery groupByForumState() Group by the forum_state column
 * @method     GroupCategoryQuery groupByWikiState() Group by the wiki_state column
 * @method     GroupCategoryQuery groupByMaxStudent() Group by the max_student column
 * @method     GroupCategoryQuery groupBySelfRegAllowed() Group by the self_reg_allowed column
 * @method     GroupCategoryQuery groupBySelfUnregAllowed() Group by the self_unreg_allowed column
 * @method     GroupCategoryQuery groupByGroupsPerUser() Group by the groups_per_user column
 * @method     GroupCategoryQuery groupByDisplayOrder() Group by the display_order column
 *
 * @method     GroupCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GroupCategory findOne(PropelPDO $con = null) Return the first GroupCategory matching the query
 * @method     GroupCategory findOneOrCreate(PropelPDO $con = null) Return the first GroupCategory matching the query, or a new GroupCategory object populated from the query conditions when no match is found
 *
 * @method     GroupCategory findOneById(int $id) Return the first GroupCategory filtered by the id column
 * @method     GroupCategory findOneByTitle(string $title) Return the first GroupCategory filtered by the title column
 * @method     GroupCategory findOneByDescription(string $description) Return the first GroupCategory filtered by the description column
 * @method     GroupCategory findOneByDocState(int $doc_state) Return the first GroupCategory filtered by the doc_state column
 * @method     GroupCategory findOneByCalendarState(int $calendar_state) Return the first GroupCategory filtered by the calendar_state column
 * @method     GroupCategory findOneByWorkState(int $work_state) Return the first GroupCategory filtered by the work_state column
 * @method     GroupCategory findOneByAnnouncementsState(int $announcements_state) Return the first GroupCategory filtered by the announcements_state column
 * @method     GroupCategory findOneByForumState(int $forum_state) Return the first GroupCategory filtered by the forum_state column
 * @method     GroupCategory findOneByWikiState(int $wiki_state) Return the first GroupCategory filtered by the wiki_state column
 * @method     GroupCategory findOneByMaxStudent(int $max_student) Return the first GroupCategory filtered by the max_student column
 * @method     GroupCategory findOneBySelfRegAllowed(int $self_reg_allowed) Return the first GroupCategory filtered by the self_reg_allowed column
 * @method     GroupCategory findOneBySelfUnregAllowed(int $self_unreg_allowed) Return the first GroupCategory filtered by the self_unreg_allowed column
 * @method     GroupCategory findOneByGroupsPerUser(int $groups_per_user) Return the first GroupCategory filtered by the groups_per_user column
 * @method     GroupCategory findOneByDisplayOrder(int $display_order) Return the first GroupCategory filtered by the display_order column
 *
 * @method     array findById(int $id) Return GroupCategory objects filtered by the id column
 * @method     array findByTitle(string $title) Return GroupCategory objects filtered by the title column
 * @method     array findByDescription(string $description) Return GroupCategory objects filtered by the description column
 * @method     array findByDocState(int $doc_state) Return GroupCategory objects filtered by the doc_state column
 * @method     array findByCalendarState(int $calendar_state) Return GroupCategory objects filtered by the calendar_state column
 * @method     array findByWorkState(int $work_state) Return GroupCategory objects filtered by the work_state column
 * @method     array findByAnnouncementsState(int $announcements_state) Return GroupCategory objects filtered by the announcements_state column
 * @method     array findByForumState(int $forum_state) Return GroupCategory objects filtered by the forum_state column
 * @method     array findByWikiState(int $wiki_state) Return GroupCategory objects filtered by the wiki_state column
 * @method     array findByMaxStudent(int $max_student) Return GroupCategory objects filtered by the max_student column
 * @method     array findBySelfRegAllowed(int $self_reg_allowed) Return GroupCategory objects filtered by the self_reg_allowed column
 * @method     array findBySelfUnregAllowed(int $self_unreg_allowed) Return GroupCategory objects filtered by the self_unreg_allowed column
 * @method     array findByGroupsPerUser(int $groups_per_user) Return GroupCategory objects filtered by the groups_per_user column
 * @method     array findByDisplayOrder(int $display_order) Return GroupCategory objects filtered by the display_order column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGroupCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GroupCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GroupCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GroupCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GroupCategoryQuery) {
			return $criteria;
		}
		$query = new GroupCategoryQuery();
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
	 * @return    GroupCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GroupCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GroupCategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GroupCategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GroupCategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GroupCategoryPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GroupCategoryPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the doc_state column
	 * 
	 * @param     int|array $docState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByDocState($docState = null, $comparison = null)
	{
		if (is_array($docState)) {
			$useMinMax = false;
			if (isset($docState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::DOC_STATE, $docState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($docState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::DOC_STATE, $docState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::DOC_STATE, $docState, $comparison);
	}

	/**
	 * Filter the query on the calendar_state column
	 * 
	 * @param     int|array $calendarState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByCalendarState($calendarState = null, $comparison = null)
	{
		if (is_array($calendarState)) {
			$useMinMax = false;
			if (isset($calendarState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::CALENDAR_STATE, $calendarState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($calendarState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::CALENDAR_STATE, $calendarState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::CALENDAR_STATE, $calendarState, $comparison);
	}

	/**
	 * Filter the query on the work_state column
	 * 
	 * @param     int|array $workState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByWorkState($workState = null, $comparison = null)
	{
		if (is_array($workState)) {
			$useMinMax = false;
			if (isset($workState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::WORK_STATE, $workState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($workState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::WORK_STATE, $workState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::WORK_STATE, $workState, $comparison);
	}

	/**
	 * Filter the query on the announcements_state column
	 * 
	 * @param     int|array $announcementsState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByAnnouncementsState($announcementsState = null, $comparison = null)
	{
		if (is_array($announcementsState)) {
			$useMinMax = false;
			if (isset($announcementsState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::ANNOUNCEMENTS_STATE, $announcementsState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($announcementsState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::ANNOUNCEMENTS_STATE, $announcementsState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::ANNOUNCEMENTS_STATE, $announcementsState, $comparison);
	}

	/**
	 * Filter the query on the forum_state column
	 * 
	 * @param     int|array $forumState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByForumState($forumState = null, $comparison = null)
	{
		if (is_array($forumState)) {
			$useMinMax = false;
			if (isset($forumState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::FORUM_STATE, $forumState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::FORUM_STATE, $forumState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::FORUM_STATE, $forumState, $comparison);
	}

	/**
	 * Filter the query on the wiki_state column
	 * 
	 * @param     int|array $wikiState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByWikiState($wikiState = null, $comparison = null)
	{
		if (is_array($wikiState)) {
			$useMinMax = false;
			if (isset($wikiState['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::WIKI_STATE, $wikiState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wikiState['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::WIKI_STATE, $wikiState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::WIKI_STATE, $wikiState, $comparison);
	}

	/**
	 * Filter the query on the max_student column
	 * 
	 * @param     int|array $maxStudent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByMaxStudent($maxStudent = null, $comparison = null)
	{
		if (is_array($maxStudent)) {
			$useMinMax = false;
			if (isset($maxStudent['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::MAX_STUDENT, $maxStudent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxStudent['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::MAX_STUDENT, $maxStudent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::MAX_STUDENT, $maxStudent, $comparison);
	}

	/**
	 * Filter the query on the self_reg_allowed column
	 * 
	 * @param     int|array $selfRegAllowed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterBySelfRegAllowed($selfRegAllowed = null, $comparison = null)
	{
		if (is_array($selfRegAllowed)) {
			$useMinMax = false;
			if (isset($selfRegAllowed['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::SELF_REG_ALLOWED, $selfRegAllowed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($selfRegAllowed['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::SELF_REG_ALLOWED, $selfRegAllowed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::SELF_REG_ALLOWED, $selfRegAllowed, $comparison);
	}

	/**
	 * Filter the query on the self_unreg_allowed column
	 * 
	 * @param     int|array $selfUnregAllowed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterBySelfUnregAllowed($selfUnregAllowed = null, $comparison = null)
	{
		if (is_array($selfUnregAllowed)) {
			$useMinMax = false;
			if (isset($selfUnregAllowed['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::SELF_UNREG_ALLOWED, $selfUnregAllowed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($selfUnregAllowed['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::SELF_UNREG_ALLOWED, $selfUnregAllowed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::SELF_UNREG_ALLOWED, $selfUnregAllowed, $comparison);
	}

	/**
	 * Filter the query on the groups_per_user column
	 * 
	 * @param     int|array $groupsPerUser The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByGroupsPerUser($groupsPerUser = null, $comparison = null)
	{
		if (is_array($groupsPerUser)) {
			$useMinMax = false;
			if (isset($groupsPerUser['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::GROUPS_PER_USER, $groupsPerUser['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($groupsPerUser['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::GROUPS_PER_USER, $groupsPerUser['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::GROUPS_PER_USER, $groupsPerUser, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(GroupCategoryPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(GroupCategoryPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupCategoryPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GroupCategory $groupCategory Object to remove from the list of results
	 *
	 * @return    GroupCategoryQuery The current query, for fluid interface
	 */
	public function prune($groupCategory = null)
	{
		if ($groupCategory) {
			$this->addUsingAlias(GroupCategoryPeer::ID, $groupCategory->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGroupCategoryQuery
