<?php


/**
 * Base class that represents a query for the 'course_module' table.
 *
 * 
 *
 * @method     CourseModuleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CourseModuleQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CourseModuleQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method     CourseModuleQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     CourseModuleQuery orderByRow($order = Criteria::ASC) Order by the row column
 * @method     CourseModuleQuery orderByColumn($order = Criteria::ASC) Order by the column column
 * @method     CourseModuleQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     CourseModuleQuery groupById() Group by the id column
 * @method     CourseModuleQuery groupByName() Group by the name column
 * @method     CourseModuleQuery groupByLink() Group by the link column
 * @method     CourseModuleQuery groupByImage() Group by the image column
 * @method     CourseModuleQuery groupByRow() Group by the row column
 * @method     CourseModuleQuery groupByColumn() Group by the column column
 * @method     CourseModuleQuery groupByPosition() Group by the position column
 *
 * @method     CourseModuleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseModuleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseModuleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseModule findOne(PropelPDO $con = null) Return the first CourseModule matching the query
 * @method     CourseModule findOneOrCreate(PropelPDO $con = null) Return the first CourseModule matching the query, or a new CourseModule object populated from the query conditions when no match is found
 *
 * @method     CourseModule findOneById(int $id) Return the first CourseModule filtered by the id column
 * @method     CourseModule findOneByName(string $name) Return the first CourseModule filtered by the name column
 * @method     CourseModule findOneByLink(string $link) Return the first CourseModule filtered by the link column
 * @method     CourseModule findOneByImage(string $image) Return the first CourseModule filtered by the image column
 * @method     CourseModule findOneByRow(int $row) Return the first CourseModule filtered by the row column
 * @method     CourseModule findOneByColumn(int $column) Return the first CourseModule filtered by the column column
 * @method     CourseModule findOneByPosition(string $position) Return the first CourseModule filtered by the position column
 *
 * @method     array findById(int $id) Return CourseModule objects filtered by the id column
 * @method     array findByName(string $name) Return CourseModule objects filtered by the name column
 * @method     array findByLink(string $link) Return CourseModule objects filtered by the link column
 * @method     array findByImage(string $image) Return CourseModule objects filtered by the image column
 * @method     array findByRow(int $row) Return CourseModule objects filtered by the row column
 * @method     array findByColumn(int $column) Return CourseModule objects filtered by the column column
 * @method     array findByPosition(string $position) Return CourseModule objects filtered by the position column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseModuleQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseModuleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseModule', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseModuleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseModuleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseModuleQuery) {
			return $criteria;
		}
		$query = new CourseModuleQuery();
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
	 * @return    CourseModule|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseModulePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CourseModulePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CourseModulePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CourseModulePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseModulePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the link column
	 * 
	 * @param     string $link The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByLink($link = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($link)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $link)) {
				$link = str_replace('*', '%', $link);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseModulePeer::LINK, $link, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseModulePeer::IMAGE, $image, $comparison);
	}

	/**
	 * Filter the query on the row column
	 * 
	 * @param     int|array $row The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByRow($row = null, $comparison = null)
	{
		if (is_array($row)) {
			$useMinMax = false;
			if (isset($row['min'])) {
				$this->addUsingAlias(CourseModulePeer::ROW, $row['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($row['max'])) {
				$this->addUsingAlias(CourseModulePeer::ROW, $row['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseModulePeer::ROW, $row, $comparison);
	}

	/**
	 * Filter the query on the column column
	 * 
	 * @param     int|array $column The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByColumn($column = null, $comparison = null)
	{
		if (is_array($column)) {
			$useMinMax = false;
			if (isset($column['min'])) {
				$this->addUsingAlias(CourseModulePeer::COLUMN, $column['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($column['max'])) {
				$this->addUsingAlias(CourseModulePeer::COLUMN, $column['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseModulePeer::COLUMN, $column, $comparison);
	}

	/**
	 * Filter the query on the position column
	 * 
	 * @param     string $position The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($position)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $position)) {
				$position = str_replace('*', '%', $position);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseModulePeer::POSITION, $position, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseModule $courseModule Object to remove from the list of results
	 *
	 * @return    CourseModuleQuery The current query, for fluid interface
	 */
	public function prune($courseModule = null)
	{
		if ($courseModule) {
			$this->addUsingAlias(CourseModulePeer::ID, $courseModule->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseModuleQuery
