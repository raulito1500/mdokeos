<?php


/**
 * Base class that represents a query for the 'announcement' table.
 *
 * 
 *
 * @method     AnnouncementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AnnouncementQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     AnnouncementQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     AnnouncementQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method     AnnouncementQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 * @method     AnnouncementQuery orderByEmailSent($order = Criteria::ASC) Order by the email_sent column
 * @method     AnnouncementQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     AnnouncementQuery groupById() Group by the id column
 * @method     AnnouncementQuery groupByTitle() Group by the title column
 * @method     AnnouncementQuery groupByContent() Group by the content column
 * @method     AnnouncementQuery groupByEndDate() Group by the end_date column
 * @method     AnnouncementQuery groupByDisplayOrder() Group by the display_order column
 * @method     AnnouncementQuery groupByEmailSent() Group by the email_sent column
 * @method     AnnouncementQuery groupBySessionId() Group by the session_id column
 *
 * @method     AnnouncementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AnnouncementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AnnouncementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Announcement findOne(PropelPDO $con = null) Return the first Announcement matching the query
 * @method     Announcement findOneOrCreate(PropelPDO $con = null) Return the first Announcement matching the query, or a new Announcement object populated from the query conditions when no match is found
 *
 * @method     Announcement findOneById(int $id) Return the first Announcement filtered by the id column
 * @method     Announcement findOneByTitle(string $title) Return the first Announcement filtered by the title column
 * @method     Announcement findOneByContent(string $content) Return the first Announcement filtered by the content column
 * @method     Announcement findOneByEndDate(string $end_date) Return the first Announcement filtered by the end_date column
 * @method     Announcement findOneByDisplayOrder(int $display_order) Return the first Announcement filtered by the display_order column
 * @method     Announcement findOneByEmailSent(int $email_sent) Return the first Announcement filtered by the email_sent column
 * @method     Announcement findOneBySessionId(int $session_id) Return the first Announcement filtered by the session_id column
 *
 * @method     array findById(int $id) Return Announcement objects filtered by the id column
 * @method     array findByTitle(string $title) Return Announcement objects filtered by the title column
 * @method     array findByContent(string $content) Return Announcement objects filtered by the content column
 * @method     array findByEndDate(string $end_date) Return Announcement objects filtered by the end_date column
 * @method     array findByDisplayOrder(int $display_order) Return Announcement objects filtered by the display_order column
 * @method     array findByEmailSent(int $email_sent) Return Announcement objects filtered by the email_sent column
 * @method     array findBySessionId(int $session_id) Return Announcement objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseAnnouncementQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAnnouncementQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Announcement', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AnnouncementQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AnnouncementQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AnnouncementQuery) {
			return $criteria;
		}
		$query = new AnnouncementQuery();
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
	 * @return    Announcement|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AnnouncementPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AnnouncementPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AnnouncementPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(AnnouncementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(AnnouncementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AnnouncementPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AnnouncementPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AnnouncementPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the end_date column
	 * 
	 * @param     string|array $endDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterByEndDate($endDate = null, $comparison = null)
	{
		if (is_array($endDate)) {
			$useMinMax = false;
			if (isset($endDate['min'])) {
				$this->addUsingAlias(AnnouncementPeer::END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endDate['max'])) {
				$this->addUsingAlias(AnnouncementPeer::END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AnnouncementPeer::END_DATE, $endDate, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(AnnouncementPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(AnnouncementPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AnnouncementPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Filter the query on the email_sent column
	 * 
	 * @param     int|array $emailSent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterByEmailSent($emailSent = null, $comparison = null)
	{
		if (is_array($emailSent)) {
			$useMinMax = false;
			if (isset($emailSent['min'])) {
				$this->addUsingAlias(AnnouncementPeer::EMAIL_SENT, $emailSent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($emailSent['max'])) {
				$this->addUsingAlias(AnnouncementPeer::EMAIL_SENT, $emailSent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AnnouncementPeer::EMAIL_SENT, $emailSent, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(AnnouncementPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(AnnouncementPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AnnouncementPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Announcement $announcement Object to remove from the list of results
	 *
	 * @return    AnnouncementQuery The current query, for fluid interface
	 */
	public function prune($announcement = null)
	{
		if ($announcement) {
			$this->addUsingAlias(AnnouncementPeer::ID, $announcement->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAnnouncementQuery
