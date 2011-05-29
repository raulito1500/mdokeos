<?php


/**
 * Base class that represents a query for the 'course_description' table.
 *
 * 
 *
 * @method     CourseDescriptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CourseDescriptionQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CourseDescriptionQuery orderByContent($order = Criteria::ASC) Order by the content column
 *
 * @method     CourseDescriptionQuery groupById() Group by the id column
 * @method     CourseDescriptionQuery groupByTitle() Group by the title column
 * @method     CourseDescriptionQuery groupByContent() Group by the content column
 *
 * @method     CourseDescriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseDescriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseDescriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseDescription findOne(PropelPDO $con = null) Return the first CourseDescription matching the query
 * @method     CourseDescription findOneOrCreate(PropelPDO $con = null) Return the first CourseDescription matching the query, or a new CourseDescription object populated from the query conditions when no match is found
 *
 * @method     CourseDescription findOneById(int $id) Return the first CourseDescription filtered by the id column
 * @method     CourseDescription findOneByTitle(string $title) Return the first CourseDescription filtered by the title column
 * @method     CourseDescription findOneByContent(string $content) Return the first CourseDescription filtered by the content column
 *
 * @method     array findById(int $id) Return CourseDescription objects filtered by the id column
 * @method     array findByTitle(string $title) Return CourseDescription objects filtered by the title column
 * @method     array findByContent(string $content) Return CourseDescription objects filtered by the content column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseDescriptionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseDescriptionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseDescription', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseDescriptionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseDescriptionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseDescriptionQuery) {
			return $criteria;
		}
		$query = new CourseDescriptionQuery();
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
	 * @return    CourseDescription|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseDescriptionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseDescriptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CourseDescriptionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseDescriptionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CourseDescriptionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseDescriptionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(CourseDescriptionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(CourseDescriptionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseDescriptionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseDescriptionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseDescriptionPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseDescriptionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseDescriptionPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseDescription $courseDescription Object to remove from the list of results
	 *
	 * @return    CourseDescriptionQuery The current query, for fluid interface
	 */
	public function prune($courseDescription = null)
	{
		if ($courseDescription) {
			$this->addUsingAlias(CourseDescriptionPeer::ID, $courseDescription->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseDescriptionQuery
