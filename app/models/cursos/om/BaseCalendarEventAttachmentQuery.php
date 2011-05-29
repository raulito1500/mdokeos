<?php


/**
 * Base class that represents a query for the 'calendar_event_attachment' table.
 *
 * 
 *
 * @method     CalendarEventAttachmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CalendarEventAttachmentQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     CalendarEventAttachmentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     CalendarEventAttachmentQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     CalendarEventAttachmentQuery orderByAgendaId($order = Criteria::ASC) Order by the agenda_id column
 * @method     CalendarEventAttachmentQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 *
 * @method     CalendarEventAttachmentQuery groupById() Group by the id column
 * @method     CalendarEventAttachmentQuery groupByPath() Group by the path column
 * @method     CalendarEventAttachmentQuery groupByComment() Group by the comment column
 * @method     CalendarEventAttachmentQuery groupBySize() Group by the size column
 * @method     CalendarEventAttachmentQuery groupByAgendaId() Group by the agenda_id column
 * @method     CalendarEventAttachmentQuery groupByFilename() Group by the filename column
 *
 * @method     CalendarEventAttachmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CalendarEventAttachmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CalendarEventAttachmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CalendarEventAttachment findOne(PropelPDO $con = null) Return the first CalendarEventAttachment matching the query
 * @method     CalendarEventAttachment findOneOrCreate(PropelPDO $con = null) Return the first CalendarEventAttachment matching the query, or a new CalendarEventAttachment object populated from the query conditions when no match is found
 *
 * @method     CalendarEventAttachment findOneById(int $id) Return the first CalendarEventAttachment filtered by the id column
 * @method     CalendarEventAttachment findOneByPath(string $path) Return the first CalendarEventAttachment filtered by the path column
 * @method     CalendarEventAttachment findOneByComment(string $comment) Return the first CalendarEventAttachment filtered by the comment column
 * @method     CalendarEventAttachment findOneBySize(int $size) Return the first CalendarEventAttachment filtered by the size column
 * @method     CalendarEventAttachment findOneByAgendaId(int $agenda_id) Return the first CalendarEventAttachment filtered by the agenda_id column
 * @method     CalendarEventAttachment findOneByFilename(string $filename) Return the first CalendarEventAttachment filtered by the filename column
 *
 * @method     array findById(int $id) Return CalendarEventAttachment objects filtered by the id column
 * @method     array findByPath(string $path) Return CalendarEventAttachment objects filtered by the path column
 * @method     array findByComment(string $comment) Return CalendarEventAttachment objects filtered by the comment column
 * @method     array findBySize(int $size) Return CalendarEventAttachment objects filtered by the size column
 * @method     array findByAgendaId(int $agenda_id) Return CalendarEventAttachment objects filtered by the agenda_id column
 * @method     array findByFilename(string $filename) Return CalendarEventAttachment objects filtered by the filename column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCalendarEventAttachmentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCalendarEventAttachmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CalendarEventAttachment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CalendarEventAttachmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CalendarEventAttachmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CalendarEventAttachmentQuery) {
			return $criteria;
		}
		$query = new CalendarEventAttachmentQuery();
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
	 * @return    CalendarEventAttachment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CalendarEventAttachmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CalendarEventAttachmentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CalendarEventAttachmentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CalendarEventAttachmentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterByPath($path = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($path)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $path)) {
				$path = str_replace('*', '%', $path);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CalendarEventAttachmentPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CalendarEventAttachmentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the size column
	 * 
	 * @param     int|array $size The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterBySize($size = null, $comparison = null)
	{
		if (is_array($size)) {
			$useMinMax = false;
			if (isset($size['min'])) {
				$this->addUsingAlias(CalendarEventAttachmentPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($size['max'])) {
				$this->addUsingAlias(CalendarEventAttachmentPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventAttachmentPeer::SIZE, $size, $comparison);
	}

	/**
	 * Filter the query on the agenda_id column
	 * 
	 * @param     int|array $agendaId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterByAgendaId($agendaId = null, $comparison = null)
	{
		if (is_array($agendaId)) {
			$useMinMax = false;
			if (isset($agendaId['min'])) {
				$this->addUsingAlias(CalendarEventAttachmentPeer::AGENDA_ID, $agendaId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($agendaId['max'])) {
				$this->addUsingAlias(CalendarEventAttachmentPeer::AGENDA_ID, $agendaId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CalendarEventAttachmentPeer::AGENDA_ID, $agendaId, $comparison);
	}

	/**
	 * Filter the query on the filename column
	 * 
	 * @param     string $filename The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function filterByFilename($filename = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($filename)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $filename)) {
				$filename = str_replace('*', '%', $filename);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CalendarEventAttachmentPeer::FILENAME, $filename, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CalendarEventAttachment $calendarEventAttachment Object to remove from the list of results
	 *
	 * @return    CalendarEventAttachmentQuery The current query, for fluid interface
	 */
	public function prune($calendarEventAttachment = null)
	{
		if ($calendarEventAttachment) {
			$this->addUsingAlias(CalendarEventAttachmentPeer::ID, $calendarEventAttachment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCalendarEventAttachmentQuery
