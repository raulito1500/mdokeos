<?php


/**
 * Base class that represents a query for the 'templates' table.
 *
 * 
 *
 * @method     TemplatesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TemplatesQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     TemplatesQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     TemplatesQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     TemplatesQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     TemplatesQuery orderByRefDoc($order = Criteria::ASC) Order by the ref_doc column
 * @method     TemplatesQuery orderByImage($order = Criteria::ASC) Order by the image column
 *
 * @method     TemplatesQuery groupById() Group by the id column
 * @method     TemplatesQuery groupByTitle() Group by the title column
 * @method     TemplatesQuery groupByDescription() Group by the description column
 * @method     TemplatesQuery groupByCourseCode() Group by the course_code column
 * @method     TemplatesQuery groupByUserId() Group by the user_id column
 * @method     TemplatesQuery groupByRefDoc() Group by the ref_doc column
 * @method     TemplatesQuery groupByImage() Group by the image column
 *
 * @method     TemplatesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TemplatesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TemplatesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Templates findOne(PropelPDO $con = null) Return the first Templates matching the query
 * @method     Templates findOneOrCreate(PropelPDO $con = null) Return the first Templates matching the query, or a new Templates object populated from the query conditions when no match is found
 *
 * @method     Templates findOneById(int $id) Return the first Templates filtered by the id column
 * @method     Templates findOneByTitle(string $title) Return the first Templates filtered by the title column
 * @method     Templates findOneByDescription(string $description) Return the first Templates filtered by the description column
 * @method     Templates findOneByCourseCode(string $course_code) Return the first Templates filtered by the course_code column
 * @method     Templates findOneByUserId(int $user_id) Return the first Templates filtered by the user_id column
 * @method     Templates findOneByRefDoc(int $ref_doc) Return the first Templates filtered by the ref_doc column
 * @method     Templates findOneByImage(string $image) Return the first Templates filtered by the image column
 *
 * @method     array findById(int $id) Return Templates objects filtered by the id column
 * @method     array findByTitle(string $title) Return Templates objects filtered by the title column
 * @method     array findByDescription(string $description) Return Templates objects filtered by the description column
 * @method     array findByCourseCode(string $course_code) Return Templates objects filtered by the course_code column
 * @method     array findByUserId(int $user_id) Return Templates objects filtered by the user_id column
 * @method     array findByRefDoc(int $ref_doc) Return Templates objects filtered by the ref_doc column
 * @method     array findByImage(string $image) Return Templates objects filtered by the image column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseTemplatesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTemplatesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Templates', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TemplatesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TemplatesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TemplatesQuery) {
			return $criteria;
		}
		$query = new TemplatesQuery();
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
	 * @return    Templates|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TemplatesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TemplatesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TemplatesPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TemplatesPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TemplatesPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TemplatesPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByCourseCode($courseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseCode)) {
				$courseCode = str_replace('*', '%', $courseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TemplatesPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(TemplatesPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(TemplatesPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TemplatesPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the ref_doc column
	 * 
	 * @param     int|array $refDoc The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByRefDoc($refDoc = null, $comparison = null)
	{
		if (is_array($refDoc)) {
			$useMinMax = false;
			if (isset($refDoc['min'])) {
				$this->addUsingAlias(TemplatesPeer::REF_DOC, $refDoc['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refDoc['max'])) {
				$this->addUsingAlias(TemplatesPeer::REF_DOC, $refDoc['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TemplatesPeer::REF_DOC, $refDoc, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($image)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $image)) {
				$image = str_replace('*', '%', $image);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TemplatesPeer::IMAGE, $image, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Templates $templates Object to remove from the list of results
	 *
	 * @return    TemplatesQuery The current query, for fluid interface
	 */
	public function prune($templates = null)
	{
		if ($templates) {
			$this->addUsingAlias(TemplatesPeer::ID, $templates->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTemplatesQuery
