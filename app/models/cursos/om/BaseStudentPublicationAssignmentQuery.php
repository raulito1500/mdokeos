<?php


/**
 * Base class that represents a query for the 'student_publication_assignment' table.
 *
 * 
 *
 * @method     StudentPublicationAssignmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     StudentPublicationAssignmentQuery orderByExpiresOn($order = Criteria::ASC) Order by the expires_on column
 * @method     StudentPublicationAssignmentQuery orderByEndsOn($order = Criteria::ASC) Order by the ends_on column
 * @method     StudentPublicationAssignmentQuery orderByAddToCalendar($order = Criteria::ASC) Order by the add_to_calendar column
 * @method     StudentPublicationAssignmentQuery orderByEnableQualification($order = Criteria::ASC) Order by the enable_qualification column
 * @method     StudentPublicationAssignmentQuery orderByPublicationId($order = Criteria::ASC) Order by the publication_id column
 *
 * @method     StudentPublicationAssignmentQuery groupById() Group by the id column
 * @method     StudentPublicationAssignmentQuery groupByExpiresOn() Group by the expires_on column
 * @method     StudentPublicationAssignmentQuery groupByEndsOn() Group by the ends_on column
 * @method     StudentPublicationAssignmentQuery groupByAddToCalendar() Group by the add_to_calendar column
 * @method     StudentPublicationAssignmentQuery groupByEnableQualification() Group by the enable_qualification column
 * @method     StudentPublicationAssignmentQuery groupByPublicationId() Group by the publication_id column
 *
 * @method     StudentPublicationAssignmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StudentPublicationAssignmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StudentPublicationAssignmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     StudentPublicationAssignment findOne(PropelPDO $con = null) Return the first StudentPublicationAssignment matching the query
 * @method     StudentPublicationAssignment findOneOrCreate(PropelPDO $con = null) Return the first StudentPublicationAssignment matching the query, or a new StudentPublicationAssignment object populated from the query conditions when no match is found
 *
 * @method     StudentPublicationAssignment findOneById(int $id) Return the first StudentPublicationAssignment filtered by the id column
 * @method     StudentPublicationAssignment findOneByExpiresOn(string $expires_on) Return the first StudentPublicationAssignment filtered by the expires_on column
 * @method     StudentPublicationAssignment findOneByEndsOn(string $ends_on) Return the first StudentPublicationAssignment filtered by the ends_on column
 * @method     StudentPublicationAssignment findOneByAddToCalendar(int $add_to_calendar) Return the first StudentPublicationAssignment filtered by the add_to_calendar column
 * @method     StudentPublicationAssignment findOneByEnableQualification(int $enable_qualification) Return the first StudentPublicationAssignment filtered by the enable_qualification column
 * @method     StudentPublicationAssignment findOneByPublicationId(int $publication_id) Return the first StudentPublicationAssignment filtered by the publication_id column
 *
 * @method     array findById(int $id) Return StudentPublicationAssignment objects filtered by the id column
 * @method     array findByExpiresOn(string $expires_on) Return StudentPublicationAssignment objects filtered by the expires_on column
 * @method     array findByEndsOn(string $ends_on) Return StudentPublicationAssignment objects filtered by the ends_on column
 * @method     array findByAddToCalendar(int $add_to_calendar) Return StudentPublicationAssignment objects filtered by the add_to_calendar column
 * @method     array findByEnableQualification(int $enable_qualification) Return StudentPublicationAssignment objects filtered by the enable_qualification column
 * @method     array findByPublicationId(int $publication_id) Return StudentPublicationAssignment objects filtered by the publication_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseStudentPublicationAssignmentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseStudentPublicationAssignmentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'StudentPublicationAssignment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new StudentPublicationAssignmentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    StudentPublicationAssignmentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof StudentPublicationAssignmentQuery) {
			return $criteria;
		}
		$query = new StudentPublicationAssignmentQuery();
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
	 * @return    StudentPublicationAssignment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = StudentPublicationAssignmentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the expires_on column
	 * 
	 * @param     string|array $expiresOn The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByExpiresOn($expiresOn = null, $comparison = null)
	{
		if (is_array($expiresOn)) {
			$useMinMax = false;
			if (isset($expiresOn['min'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::EXPIRES_ON, $expiresOn['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expiresOn['max'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::EXPIRES_ON, $expiresOn['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::EXPIRES_ON, $expiresOn, $comparison);
	}

	/**
	 * Filter the query on the ends_on column
	 * 
	 * @param     string|array $endsOn The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByEndsOn($endsOn = null, $comparison = null)
	{
		if (is_array($endsOn)) {
			$useMinMax = false;
			if (isset($endsOn['min'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ENDS_ON, $endsOn['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endsOn['max'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ENDS_ON, $endsOn['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ENDS_ON, $endsOn, $comparison);
	}

	/**
	 * Filter the query on the add_to_calendar column
	 * 
	 * @param     int|array $addToCalendar The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByAddToCalendar($addToCalendar = null, $comparison = null)
	{
		if (is_array($addToCalendar)) {
			$useMinMax = false;
			if (isset($addToCalendar['min'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ADD_TO_CALENDAR, $addToCalendar['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addToCalendar['max'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ADD_TO_CALENDAR, $addToCalendar['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ADD_TO_CALENDAR, $addToCalendar, $comparison);
	}

	/**
	 * Filter the query on the enable_qualification column
	 * 
	 * @param     int|array $enableQualification The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByEnableQualification($enableQualification = null, $comparison = null)
	{
		if (is_array($enableQualification)) {
			$useMinMax = false;
			if (isset($enableQualification['min'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ENABLE_QUALIFICATION, $enableQualification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($enableQualification['max'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::ENABLE_QUALIFICATION, $enableQualification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::ENABLE_QUALIFICATION, $enableQualification, $comparison);
	}

	/**
	 * Filter the query on the publication_id column
	 * 
	 * @param     int|array $publicationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function filterByPublicationId($publicationId = null, $comparison = null)
	{
		if (is_array($publicationId)) {
			$useMinMax = false;
			if (isset($publicationId['min'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::PUBLICATION_ID, $publicationId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publicationId['max'])) {
				$this->addUsingAlias(StudentPublicationAssignmentPeer::PUBLICATION_ID, $publicationId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationAssignmentPeer::PUBLICATION_ID, $publicationId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     StudentPublicationAssignment $studentPublicationAssignment Object to remove from the list of results
	 *
	 * @return    StudentPublicationAssignmentQuery The current query, for fluid interface
	 */
	public function prune($studentPublicationAssignment = null)
	{
		if ($studentPublicationAssignment) {
			$this->addUsingAlias(StudentPublicationAssignmentPeer::ID, $studentPublicationAssignment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseStudentPublicationAssignmentQuery
