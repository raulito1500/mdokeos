<?php


/**
 * Base class that represents a query for the 'student_publication' table.
 *
 * 
 *
 * @method     StudentPublicationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     StudentPublicationQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     StudentPublicationQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     StudentPublicationQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     StudentPublicationQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     StudentPublicationQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     StudentPublicationQuery orderByAccepted($order = Criteria::ASC) Order by the accepted column
 * @method     StudentPublicationQuery orderByPostGroupId($order = Criteria::ASC) Order by the post_group_id column
 * @method     StudentPublicationQuery orderBySentDate($order = Criteria::ASC) Order by the sent_date column
 * @method     StudentPublicationQuery orderByFiletype($order = Criteria::ASC) Order by the filetype column
 * @method     StudentPublicationQuery orderByHasProperties($order = Criteria::ASC) Order by the has_properties column
 * @method     StudentPublicationQuery orderByViewProperties($order = Criteria::ASC) Order by the view_properties column
 * @method     StudentPublicationQuery orderByQualification($order = Criteria::ASC) Order by the qualification column
 * @method     StudentPublicationQuery orderByDateOfQualification($order = Criteria::ASC) Order by the date_of_qualification column
 * @method     StudentPublicationQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     StudentPublicationQuery orderByQualificatorId($order = Criteria::ASC) Order by the qualificator_id column
 * @method     StudentPublicationQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     StudentPublicationQuery groupById() Group by the id column
 * @method     StudentPublicationQuery groupByUrl() Group by the url column
 * @method     StudentPublicationQuery groupByTitle() Group by the title column
 * @method     StudentPublicationQuery groupByDescription() Group by the description column
 * @method     StudentPublicationQuery groupByAuthor() Group by the author column
 * @method     StudentPublicationQuery groupByActive() Group by the active column
 * @method     StudentPublicationQuery groupByAccepted() Group by the accepted column
 * @method     StudentPublicationQuery groupByPostGroupId() Group by the post_group_id column
 * @method     StudentPublicationQuery groupBySentDate() Group by the sent_date column
 * @method     StudentPublicationQuery groupByFiletype() Group by the filetype column
 * @method     StudentPublicationQuery groupByHasProperties() Group by the has_properties column
 * @method     StudentPublicationQuery groupByViewProperties() Group by the view_properties column
 * @method     StudentPublicationQuery groupByQualification() Group by the qualification column
 * @method     StudentPublicationQuery groupByDateOfQualification() Group by the date_of_qualification column
 * @method     StudentPublicationQuery groupByParentId() Group by the parent_id column
 * @method     StudentPublicationQuery groupByQualificatorId() Group by the qualificator_id column
 * @method     StudentPublicationQuery groupBySessionId() Group by the session_id column
 *
 * @method     StudentPublicationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     StudentPublicationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     StudentPublicationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     StudentPublication findOne(PropelPDO $con = null) Return the first StudentPublication matching the query
 * @method     StudentPublication findOneOrCreate(PropelPDO $con = null) Return the first StudentPublication matching the query, or a new StudentPublication object populated from the query conditions when no match is found
 *
 * @method     StudentPublication findOneById(int $id) Return the first StudentPublication filtered by the id column
 * @method     StudentPublication findOneByUrl(string $url) Return the first StudentPublication filtered by the url column
 * @method     StudentPublication findOneByTitle(string $title) Return the first StudentPublication filtered by the title column
 * @method     StudentPublication findOneByDescription(string $description) Return the first StudentPublication filtered by the description column
 * @method     StudentPublication findOneByAuthor(string $author) Return the first StudentPublication filtered by the author column
 * @method     StudentPublication findOneByActive(int $active) Return the first StudentPublication filtered by the active column
 * @method     StudentPublication findOneByAccepted(int $accepted) Return the first StudentPublication filtered by the accepted column
 * @method     StudentPublication findOneByPostGroupId(int $post_group_id) Return the first StudentPublication filtered by the post_group_id column
 * @method     StudentPublication findOneBySentDate(string $sent_date) Return the first StudentPublication filtered by the sent_date column
 * @method     StudentPublication findOneByFiletype(string $filetype) Return the first StudentPublication filtered by the filetype column
 * @method     StudentPublication findOneByHasProperties(int $has_properties) Return the first StudentPublication filtered by the has_properties column
 * @method     StudentPublication findOneByViewProperties(int $view_properties) Return the first StudentPublication filtered by the view_properties column
 * @method     StudentPublication findOneByQualification(double $qualification) Return the first StudentPublication filtered by the qualification column
 * @method     StudentPublication findOneByDateOfQualification(string $date_of_qualification) Return the first StudentPublication filtered by the date_of_qualification column
 * @method     StudentPublication findOneByParentId(int $parent_id) Return the first StudentPublication filtered by the parent_id column
 * @method     StudentPublication findOneByQualificatorId(int $qualificator_id) Return the first StudentPublication filtered by the qualificator_id column
 * @method     StudentPublication findOneBySessionId(int $session_id) Return the first StudentPublication filtered by the session_id column
 *
 * @method     array findById(int $id) Return StudentPublication objects filtered by the id column
 * @method     array findByUrl(string $url) Return StudentPublication objects filtered by the url column
 * @method     array findByTitle(string $title) Return StudentPublication objects filtered by the title column
 * @method     array findByDescription(string $description) Return StudentPublication objects filtered by the description column
 * @method     array findByAuthor(string $author) Return StudentPublication objects filtered by the author column
 * @method     array findByActive(int $active) Return StudentPublication objects filtered by the active column
 * @method     array findByAccepted(int $accepted) Return StudentPublication objects filtered by the accepted column
 * @method     array findByPostGroupId(int $post_group_id) Return StudentPublication objects filtered by the post_group_id column
 * @method     array findBySentDate(string $sent_date) Return StudentPublication objects filtered by the sent_date column
 * @method     array findByFiletype(string $filetype) Return StudentPublication objects filtered by the filetype column
 * @method     array findByHasProperties(int $has_properties) Return StudentPublication objects filtered by the has_properties column
 * @method     array findByViewProperties(int $view_properties) Return StudentPublication objects filtered by the view_properties column
 * @method     array findByQualification(double $qualification) Return StudentPublication objects filtered by the qualification column
 * @method     array findByDateOfQualification(string $date_of_qualification) Return StudentPublication objects filtered by the date_of_qualification column
 * @method     array findByParentId(int $parent_id) Return StudentPublication objects filtered by the parent_id column
 * @method     array findByQualificatorId(int $qualificator_id) Return StudentPublication objects filtered by the qualificator_id column
 * @method     array findBySessionId(int $session_id) Return StudentPublication objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseStudentPublicationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseStudentPublicationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'StudentPublication', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new StudentPublicationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    StudentPublicationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof StudentPublicationQuery) {
			return $criteria;
		}
		$query = new StudentPublicationQuery();
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
	 * @return    StudentPublication|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = StudentPublicationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(StudentPublicationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(StudentPublicationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(StudentPublicationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the url column
	 * 
	 * @param     string $url The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByUrl($url = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($url)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $url)) {
				$url = str_replace('*', '%', $url);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::URL, $url, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(StudentPublicationPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(StudentPublicationPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the author column
	 * 
	 * @param     string $author The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByAuthor($author = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($author)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $author)) {
				$author = str_replace('*', '%', $author);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::AUTHOR, $author, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     int|array $active The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the accepted column
	 * 
	 * @param     int|array $accepted The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByAccepted($accepted = null, $comparison = null)
	{
		if (is_array($accepted)) {
			$useMinMax = false;
			if (isset($accepted['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::ACCEPTED, $accepted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accepted['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::ACCEPTED, $accepted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::ACCEPTED, $accepted, $comparison);
	}

	/**
	 * Filter the query on the post_group_id column
	 * 
	 * @param     int|array $postGroupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByPostGroupId($postGroupId = null, $comparison = null)
	{
		if (is_array($postGroupId)) {
			$useMinMax = false;
			if (isset($postGroupId['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::POST_GROUP_ID, $postGroupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postGroupId['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::POST_GROUP_ID, $postGroupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::POST_GROUP_ID, $postGroupId, $comparison);
	}

	/**
	 * Filter the query on the sent_date column
	 * 
	 * @param     string|array $sentDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterBySentDate($sentDate = null, $comparison = null)
	{
		if (is_array($sentDate)) {
			$useMinMax = false;
			if (isset($sentDate['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::SENT_DATE, $sentDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sentDate['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::SENT_DATE, $sentDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::SENT_DATE, $sentDate, $comparison);
	}

	/**
	 * Filter the query on the filetype column
	 * 
	 * @param     string $filetype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByFiletype($filetype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($filetype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $filetype)) {
				$filetype = str_replace('*', '%', $filetype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::FILETYPE, $filetype, $comparison);
	}

	/**
	 * Filter the query on the has_properties column
	 * 
	 * @param     int|array $hasProperties The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByHasProperties($hasProperties = null, $comparison = null)
	{
		if (is_array($hasProperties)) {
			$useMinMax = false;
			if (isset($hasProperties['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::HAS_PROPERTIES, $hasProperties['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hasProperties['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::HAS_PROPERTIES, $hasProperties['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::HAS_PROPERTIES, $hasProperties, $comparison);
	}

	/**
	 * Filter the query on the view_properties column
	 * 
	 * @param     int|array $viewProperties The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByViewProperties($viewProperties = null, $comparison = null)
	{
		if (is_array($viewProperties)) {
			$useMinMax = false;
			if (isset($viewProperties['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::VIEW_PROPERTIES, $viewProperties['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($viewProperties['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::VIEW_PROPERTIES, $viewProperties['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::VIEW_PROPERTIES, $viewProperties, $comparison);
	}

	/**
	 * Filter the query on the qualification column
	 * 
	 * @param     double|array $qualification The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByQualification($qualification = null, $comparison = null)
	{
		if (is_array($qualification)) {
			$useMinMax = false;
			if (isset($qualification['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::QUALIFICATION, $qualification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($qualification['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::QUALIFICATION, $qualification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::QUALIFICATION, $qualification, $comparison);
	}

	/**
	 * Filter the query on the date_of_qualification column
	 * 
	 * @param     string|array $dateOfQualification The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByDateOfQualification($dateOfQualification = null, $comparison = null)
	{
		if (is_array($dateOfQualification)) {
			$useMinMax = false;
			if (isset($dateOfQualification['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::DATE_OF_QUALIFICATION, $dateOfQualification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateOfQualification['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::DATE_OF_QUALIFICATION, $dateOfQualification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::DATE_OF_QUALIFICATION, $dateOfQualification, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the qualificator_id column
	 * 
	 * @param     int|array $qualificatorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterByQualificatorId($qualificatorId = null, $comparison = null)
	{
		if (is_array($qualificatorId)) {
			$useMinMax = false;
			if (isset($qualificatorId['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::QUALIFICATOR_ID, $qualificatorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($qualificatorId['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::QUALIFICATOR_ID, $qualificatorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::QUALIFICATOR_ID, $qualificatorId, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(StudentPublicationPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(StudentPublicationPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(StudentPublicationPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     StudentPublication $studentPublication Object to remove from the list of results
	 *
	 * @return    StudentPublicationQuery The current query, for fluid interface
	 */
	public function prune($studentPublication = null)
	{
		if ($studentPublication) {
			$this->addUsingAlias(StudentPublicationPeer::ID, $studentPublication->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseStudentPublicationQuery
