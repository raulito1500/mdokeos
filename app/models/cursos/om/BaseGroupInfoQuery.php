<?php


/**
 * Base class that represents a query for the 'group_info' table.
 *
 * 
 *
 * @method     GroupInfoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GroupInfoQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GroupInfoQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     GroupInfoQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GroupInfoQuery orderByMaxStudent($order = Criteria::ASC) Order by the max_student column
 * @method     GroupInfoQuery orderByDocState($order = Criteria::ASC) Order by the doc_state column
 * @method     GroupInfoQuery orderByCalendarState($order = Criteria::ASC) Order by the calendar_state column
 * @method     GroupInfoQuery orderByWorkState($order = Criteria::ASC) Order by the work_state column
 * @method     GroupInfoQuery orderByAnnouncementsState($order = Criteria::ASC) Order by the announcements_state column
 * @method     GroupInfoQuery orderByForumState($order = Criteria::ASC) Order by the forum_state column
 * @method     GroupInfoQuery orderByWikiState($order = Criteria::ASC) Order by the wiki_state column
 * @method     GroupInfoQuery orderBySecretDirectory($order = Criteria::ASC) Order by the secret_directory column
 * @method     GroupInfoQuery orderBySelfRegistrationAllowed($order = Criteria::ASC) Order by the self_registration_allowed column
 * @method     GroupInfoQuery orderBySelfUnregistrationAllowed($order = Criteria::ASC) Order by the self_unregistration_allowed column
 * @method     GroupInfoQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     GroupInfoQuery groupById() Group by the id column
 * @method     GroupInfoQuery groupByName() Group by the name column
 * @method     GroupInfoQuery groupByCategoryId() Group by the category_id column
 * @method     GroupInfoQuery groupByDescription() Group by the description column
 * @method     GroupInfoQuery groupByMaxStudent() Group by the max_student column
 * @method     GroupInfoQuery groupByDocState() Group by the doc_state column
 * @method     GroupInfoQuery groupByCalendarState() Group by the calendar_state column
 * @method     GroupInfoQuery groupByWorkState() Group by the work_state column
 * @method     GroupInfoQuery groupByAnnouncementsState() Group by the announcements_state column
 * @method     GroupInfoQuery groupByForumState() Group by the forum_state column
 * @method     GroupInfoQuery groupByWikiState() Group by the wiki_state column
 * @method     GroupInfoQuery groupBySecretDirectory() Group by the secret_directory column
 * @method     GroupInfoQuery groupBySelfRegistrationAllowed() Group by the self_registration_allowed column
 * @method     GroupInfoQuery groupBySelfUnregistrationAllowed() Group by the self_unregistration_allowed column
 * @method     GroupInfoQuery groupBySessionId() Group by the session_id column
 *
 * @method     GroupInfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GroupInfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GroupInfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GroupInfo findOne(PropelPDO $con = null) Return the first GroupInfo matching the query
 * @method     GroupInfo findOneOrCreate(PropelPDO $con = null) Return the first GroupInfo matching the query, or a new GroupInfo object populated from the query conditions when no match is found
 *
 * @method     GroupInfo findOneById(int $id) Return the first GroupInfo filtered by the id column
 * @method     GroupInfo findOneByName(string $name) Return the first GroupInfo filtered by the name column
 * @method     GroupInfo findOneByCategoryId(int $category_id) Return the first GroupInfo filtered by the category_id column
 * @method     GroupInfo findOneByDescription(string $description) Return the first GroupInfo filtered by the description column
 * @method     GroupInfo findOneByMaxStudent(int $max_student) Return the first GroupInfo filtered by the max_student column
 * @method     GroupInfo findOneByDocState(int $doc_state) Return the first GroupInfo filtered by the doc_state column
 * @method     GroupInfo findOneByCalendarState(int $calendar_state) Return the first GroupInfo filtered by the calendar_state column
 * @method     GroupInfo findOneByWorkState(int $work_state) Return the first GroupInfo filtered by the work_state column
 * @method     GroupInfo findOneByAnnouncementsState(int $announcements_state) Return the first GroupInfo filtered by the announcements_state column
 * @method     GroupInfo findOneByForumState(int $forum_state) Return the first GroupInfo filtered by the forum_state column
 * @method     GroupInfo findOneByWikiState(int $wiki_state) Return the first GroupInfo filtered by the wiki_state column
 * @method     GroupInfo findOneBySecretDirectory(string $secret_directory) Return the first GroupInfo filtered by the secret_directory column
 * @method     GroupInfo findOneBySelfRegistrationAllowed(int $self_registration_allowed) Return the first GroupInfo filtered by the self_registration_allowed column
 * @method     GroupInfo findOneBySelfUnregistrationAllowed(int $self_unregistration_allowed) Return the first GroupInfo filtered by the self_unregistration_allowed column
 * @method     GroupInfo findOneBySessionId(int $session_id) Return the first GroupInfo filtered by the session_id column
 *
 * @method     array findById(int $id) Return GroupInfo objects filtered by the id column
 * @method     array findByName(string $name) Return GroupInfo objects filtered by the name column
 * @method     array findByCategoryId(int $category_id) Return GroupInfo objects filtered by the category_id column
 * @method     array findByDescription(string $description) Return GroupInfo objects filtered by the description column
 * @method     array findByMaxStudent(int $max_student) Return GroupInfo objects filtered by the max_student column
 * @method     array findByDocState(int $doc_state) Return GroupInfo objects filtered by the doc_state column
 * @method     array findByCalendarState(int $calendar_state) Return GroupInfo objects filtered by the calendar_state column
 * @method     array findByWorkState(int $work_state) Return GroupInfo objects filtered by the work_state column
 * @method     array findByAnnouncementsState(int $announcements_state) Return GroupInfo objects filtered by the announcements_state column
 * @method     array findByForumState(int $forum_state) Return GroupInfo objects filtered by the forum_state column
 * @method     array findByWikiState(int $wiki_state) Return GroupInfo objects filtered by the wiki_state column
 * @method     array findBySecretDirectory(string $secret_directory) Return GroupInfo objects filtered by the secret_directory column
 * @method     array findBySelfRegistrationAllowed(int $self_registration_allowed) Return GroupInfo objects filtered by the self_registration_allowed column
 * @method     array findBySelfUnregistrationAllowed(int $self_unregistration_allowed) Return GroupInfo objects filtered by the self_unregistration_allowed column
 * @method     array findBySessionId(int $session_id) Return GroupInfo objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGroupInfoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGroupInfoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GroupInfo', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GroupInfoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GroupInfoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GroupInfoQuery) {
			return $criteria;
		}
		$query = new GroupInfoQuery();
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
	 * @return    GroupInfo|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GroupInfoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GroupInfoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GroupInfoPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GroupInfoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(GroupInfoPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(GroupInfoPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GroupInfoPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the max_student column
	 * 
	 * @param     int|array $maxStudent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByMaxStudent($maxStudent = null, $comparison = null)
	{
		if (is_array($maxStudent)) {
			$useMinMax = false;
			if (isset($maxStudent['min'])) {
				$this->addUsingAlias(GroupInfoPeer::MAX_STUDENT, $maxStudent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxStudent['max'])) {
				$this->addUsingAlias(GroupInfoPeer::MAX_STUDENT, $maxStudent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::MAX_STUDENT, $maxStudent, $comparison);
	}

	/**
	 * Filter the query on the doc_state column
	 * 
	 * @param     int|array $docState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByDocState($docState = null, $comparison = null)
	{
		if (is_array($docState)) {
			$useMinMax = false;
			if (isset($docState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::DOC_STATE, $docState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($docState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::DOC_STATE, $docState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::DOC_STATE, $docState, $comparison);
	}

	/**
	 * Filter the query on the calendar_state column
	 * 
	 * @param     int|array $calendarState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByCalendarState($calendarState = null, $comparison = null)
	{
		if (is_array($calendarState)) {
			$useMinMax = false;
			if (isset($calendarState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::CALENDAR_STATE, $calendarState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($calendarState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::CALENDAR_STATE, $calendarState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::CALENDAR_STATE, $calendarState, $comparison);
	}

	/**
	 * Filter the query on the work_state column
	 * 
	 * @param     int|array $workState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByWorkState($workState = null, $comparison = null)
	{
		if (is_array($workState)) {
			$useMinMax = false;
			if (isset($workState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::WORK_STATE, $workState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($workState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::WORK_STATE, $workState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::WORK_STATE, $workState, $comparison);
	}

	/**
	 * Filter the query on the announcements_state column
	 * 
	 * @param     int|array $announcementsState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByAnnouncementsState($announcementsState = null, $comparison = null)
	{
		if (is_array($announcementsState)) {
			$useMinMax = false;
			if (isset($announcementsState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::ANNOUNCEMENTS_STATE, $announcementsState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($announcementsState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::ANNOUNCEMENTS_STATE, $announcementsState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::ANNOUNCEMENTS_STATE, $announcementsState, $comparison);
	}

	/**
	 * Filter the query on the forum_state column
	 * 
	 * @param     int|array $forumState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByForumState($forumState = null, $comparison = null)
	{
		if (is_array($forumState)) {
			$useMinMax = false;
			if (isset($forumState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::FORUM_STATE, $forumState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forumState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::FORUM_STATE, $forumState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::FORUM_STATE, $forumState, $comparison);
	}

	/**
	 * Filter the query on the wiki_state column
	 * 
	 * @param     int|array $wikiState The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterByWikiState($wikiState = null, $comparison = null)
	{
		if (is_array($wikiState)) {
			$useMinMax = false;
			if (isset($wikiState['min'])) {
				$this->addUsingAlias(GroupInfoPeer::WIKI_STATE, $wikiState['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wikiState['max'])) {
				$this->addUsingAlias(GroupInfoPeer::WIKI_STATE, $wikiState['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::WIKI_STATE, $wikiState, $comparison);
	}

	/**
	 * Filter the query on the secret_directory column
	 * 
	 * @param     string $secretDirectory The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterBySecretDirectory($secretDirectory = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($secretDirectory)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $secretDirectory)) {
				$secretDirectory = str_replace('*', '%', $secretDirectory);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::SECRET_DIRECTORY, $secretDirectory, $comparison);
	}

	/**
	 * Filter the query on the self_registration_allowed column
	 * 
	 * @param     int|array $selfRegistrationAllowed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterBySelfRegistrationAllowed($selfRegistrationAllowed = null, $comparison = null)
	{
		if (is_array($selfRegistrationAllowed)) {
			$useMinMax = false;
			if (isset($selfRegistrationAllowed['min'])) {
				$this->addUsingAlias(GroupInfoPeer::SELF_REGISTRATION_ALLOWED, $selfRegistrationAllowed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($selfRegistrationAllowed['max'])) {
				$this->addUsingAlias(GroupInfoPeer::SELF_REGISTRATION_ALLOWED, $selfRegistrationAllowed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::SELF_REGISTRATION_ALLOWED, $selfRegistrationAllowed, $comparison);
	}

	/**
	 * Filter the query on the self_unregistration_allowed column
	 * 
	 * @param     int|array $selfUnregistrationAllowed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterBySelfUnregistrationAllowed($selfUnregistrationAllowed = null, $comparison = null)
	{
		if (is_array($selfUnregistrationAllowed)) {
			$useMinMax = false;
			if (isset($selfUnregistrationAllowed['min'])) {
				$this->addUsingAlias(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED, $selfUnregistrationAllowed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($selfUnregistrationAllowed['max'])) {
				$this->addUsingAlias(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED, $selfUnregistrationAllowed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::SELF_UNREGISTRATION_ALLOWED, $selfUnregistrationAllowed, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(GroupInfoPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(GroupInfoPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GroupInfoPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GroupInfo $groupInfo Object to remove from the list of results
	 *
	 * @return    GroupInfoQuery The current query, for fluid interface
	 */
	public function prune($groupInfo = null)
	{
		if ($groupInfo) {
			$this->addUsingAlias(GroupInfoPeer::ID, $groupInfo->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGroupInfoQuery
