<?php


/**
 * Base class that represents a query for the 'sys_announcement' table.
 *
 * 
 *
 * @method     SysAnnouncementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SysAnnouncementQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     SysAnnouncementQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     SysAnnouncementQuery orderByVisibleTeacher($order = Criteria::ASC) Order by the visible_teacher column
 * @method     SysAnnouncementQuery orderByVisibleStudent($order = Criteria::ASC) Order by the visible_student column
 * @method     SysAnnouncementQuery orderByVisibleGuest($order = Criteria::ASC) Order by the visible_guest column
 * @method     SysAnnouncementQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SysAnnouncementQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     SysAnnouncementQuery orderByLang($order = Criteria::ASC) Order by the lang column
 *
 * @method     SysAnnouncementQuery groupById() Group by the id column
 * @method     SysAnnouncementQuery groupByDateStart() Group by the date_start column
 * @method     SysAnnouncementQuery groupByDateEnd() Group by the date_end column
 * @method     SysAnnouncementQuery groupByVisibleTeacher() Group by the visible_teacher column
 * @method     SysAnnouncementQuery groupByVisibleStudent() Group by the visible_student column
 * @method     SysAnnouncementQuery groupByVisibleGuest() Group by the visible_guest column
 * @method     SysAnnouncementQuery groupByTitle() Group by the title column
 * @method     SysAnnouncementQuery groupByContent() Group by the content column
 * @method     SysAnnouncementQuery groupByLang() Group by the lang column
 *
 * @method     SysAnnouncementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SysAnnouncementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SysAnnouncementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SysAnnouncement findOne(PropelPDO $con = null) Return the first SysAnnouncement matching the query
 * @method     SysAnnouncement findOneOrCreate(PropelPDO $con = null) Return the first SysAnnouncement matching the query, or a new SysAnnouncement object populated from the query conditions when no match is found
 *
 * @method     SysAnnouncement findOneById(int $id) Return the first SysAnnouncement filtered by the id column
 * @method     SysAnnouncement findOneByDateStart(string $date_start) Return the first SysAnnouncement filtered by the date_start column
 * @method     SysAnnouncement findOneByDateEnd(string $date_end) Return the first SysAnnouncement filtered by the date_end column
 * @method     SysAnnouncement findOneByVisibleTeacher(int $visible_teacher) Return the first SysAnnouncement filtered by the visible_teacher column
 * @method     SysAnnouncement findOneByVisibleStudent(int $visible_student) Return the first SysAnnouncement filtered by the visible_student column
 * @method     SysAnnouncement findOneByVisibleGuest(int $visible_guest) Return the first SysAnnouncement filtered by the visible_guest column
 * @method     SysAnnouncement findOneByTitle(string $title) Return the first SysAnnouncement filtered by the title column
 * @method     SysAnnouncement findOneByContent(string $content) Return the first SysAnnouncement filtered by the content column
 * @method     SysAnnouncement findOneByLang(string $lang) Return the first SysAnnouncement filtered by the lang column
 *
 * @method     array findById(int $id) Return SysAnnouncement objects filtered by the id column
 * @method     array findByDateStart(string $date_start) Return SysAnnouncement objects filtered by the date_start column
 * @method     array findByDateEnd(string $date_end) Return SysAnnouncement objects filtered by the date_end column
 * @method     array findByVisibleTeacher(int $visible_teacher) Return SysAnnouncement objects filtered by the visible_teacher column
 * @method     array findByVisibleStudent(int $visible_student) Return SysAnnouncement objects filtered by the visible_student column
 * @method     array findByVisibleGuest(int $visible_guest) Return SysAnnouncement objects filtered by the visible_guest column
 * @method     array findByTitle(string $title) Return SysAnnouncement objects filtered by the title column
 * @method     array findByContent(string $content) Return SysAnnouncement objects filtered by the content column
 * @method     array findByLang(string $lang) Return SysAnnouncement objects filtered by the lang column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSysAnnouncementQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSysAnnouncementQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SysAnnouncement', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SysAnnouncementQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SysAnnouncementQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SysAnnouncementQuery) {
			return $criteria;
		}
		$query = new SysAnnouncementQuery();
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
	 * @return    SysAnnouncement|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SysAnnouncementPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SysAnnouncementPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SysAnnouncementPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SysAnnouncementPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the date_start column
	 * 
	 * @param     string|array $dateStart The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByDateStart($dateStart = null, $comparison = null)
	{
		if (is_array($dateStart)) {
			$useMinMax = false;
			if (isset($dateStart['min'])) {
				$this->addUsingAlias(SysAnnouncementPeer::DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateStart['max'])) {
				$this->addUsingAlias(SysAnnouncementPeer::DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::DATE_START, $dateStart, $comparison);
	}

	/**
	 * Filter the query on the date_end column
	 * 
	 * @param     string|array $dateEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByDateEnd($dateEnd = null, $comparison = null)
	{
		if (is_array($dateEnd)) {
			$useMinMax = false;
			if (isset($dateEnd['min'])) {
				$this->addUsingAlias(SysAnnouncementPeer::DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateEnd['max'])) {
				$this->addUsingAlias(SysAnnouncementPeer::DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::DATE_END, $dateEnd, $comparison);
	}

	/**
	 * Filter the query on the visible_teacher column
	 * 
	 * @param     int|array $visibleTeacher The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByVisibleTeacher($visibleTeacher = null, $comparison = null)
	{
		if (is_array($visibleTeacher)) {
			$useMinMax = false;
			if (isset($visibleTeacher['min'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_TEACHER, $visibleTeacher['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibleTeacher['max'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_TEACHER, $visibleTeacher['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::VISIBLE_TEACHER, $visibleTeacher, $comparison);
	}

	/**
	 * Filter the query on the visible_student column
	 * 
	 * @param     int|array $visibleStudent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByVisibleStudent($visibleStudent = null, $comparison = null)
	{
		if (is_array($visibleStudent)) {
			$useMinMax = false;
			if (isset($visibleStudent['min'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_STUDENT, $visibleStudent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibleStudent['max'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_STUDENT, $visibleStudent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::VISIBLE_STUDENT, $visibleStudent, $comparison);
	}

	/**
	 * Filter the query on the visible_guest column
	 * 
	 * @param     int|array $visibleGuest The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByVisibleGuest($visibleGuest = null, $comparison = null)
	{
		if (is_array($visibleGuest)) {
			$useMinMax = false;
			if (isset($visibleGuest['min'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_GUEST, $visibleGuest['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibleGuest['max'])) {
				$this->addUsingAlias(SysAnnouncementPeer::VISIBLE_GUEST, $visibleGuest['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::VISIBLE_GUEST, $visibleGuest, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SysAnnouncementPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SysAnnouncementPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the lang column
	 * 
	 * @param     string $lang The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function filterByLang($lang = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lang)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lang)) {
				$lang = str_replace('*', '%', $lang);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SysAnnouncementPeer::LANG, $lang, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SysAnnouncement $sysAnnouncement Object to remove from the list of results
	 *
	 * @return    SysAnnouncementQuery The current query, for fluid interface
	 */
	public function prune($sysAnnouncement = null)
	{
		if ($sysAnnouncement) {
			$this->addUsingAlias(SysAnnouncementPeer::ID, $sysAnnouncement->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSysAnnouncementQuery
