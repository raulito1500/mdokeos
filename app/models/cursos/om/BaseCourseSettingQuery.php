<?php


/**
 * Base class that represents a query for the 'course_setting' table.
 *
 * 
 *
 * @method     CourseSettingQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CourseSettingQuery orderByVariable($order = Criteria::ASC) Order by the variable column
 * @method     CourseSettingQuery orderBySubkey($order = Criteria::ASC) Order by the subkey column
 * @method     CourseSettingQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     CourseSettingQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     CourseSettingQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     CourseSettingQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CourseSettingQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     CourseSettingQuery orderBySubkeytext($order = Criteria::ASC) Order by the subkeytext column
 *
 * @method     CourseSettingQuery groupById() Group by the id column
 * @method     CourseSettingQuery groupByVariable() Group by the variable column
 * @method     CourseSettingQuery groupBySubkey() Group by the subkey column
 * @method     CourseSettingQuery groupByType() Group by the type column
 * @method     CourseSettingQuery groupByCategory() Group by the category column
 * @method     CourseSettingQuery groupByValue() Group by the value column
 * @method     CourseSettingQuery groupByTitle() Group by the title column
 * @method     CourseSettingQuery groupByComment() Group by the comment column
 * @method     CourseSettingQuery groupBySubkeytext() Group by the subkeytext column
 *
 * @method     CourseSettingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseSettingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseSettingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseSetting findOne(PropelPDO $con = null) Return the first CourseSetting matching the query
 * @method     CourseSetting findOneOrCreate(PropelPDO $con = null) Return the first CourseSetting matching the query, or a new CourseSetting object populated from the query conditions when no match is found
 *
 * @method     CourseSetting findOneById(int $id) Return the first CourseSetting filtered by the id column
 * @method     CourseSetting findOneByVariable(string $variable) Return the first CourseSetting filtered by the variable column
 * @method     CourseSetting findOneBySubkey(string $subkey) Return the first CourseSetting filtered by the subkey column
 * @method     CourseSetting findOneByType(string $type) Return the first CourseSetting filtered by the type column
 * @method     CourseSetting findOneByCategory(string $category) Return the first CourseSetting filtered by the category column
 * @method     CourseSetting findOneByValue(string $value) Return the first CourseSetting filtered by the value column
 * @method     CourseSetting findOneByTitle(string $title) Return the first CourseSetting filtered by the title column
 * @method     CourseSetting findOneByComment(string $comment) Return the first CourseSetting filtered by the comment column
 * @method     CourseSetting findOneBySubkeytext(string $subkeytext) Return the first CourseSetting filtered by the subkeytext column
 *
 * @method     array findById(int $id) Return CourseSetting objects filtered by the id column
 * @method     array findByVariable(string $variable) Return CourseSetting objects filtered by the variable column
 * @method     array findBySubkey(string $subkey) Return CourseSetting objects filtered by the subkey column
 * @method     array findByType(string $type) Return CourseSetting objects filtered by the type column
 * @method     array findByCategory(string $category) Return CourseSetting objects filtered by the category column
 * @method     array findByValue(string $value) Return CourseSetting objects filtered by the value column
 * @method     array findByTitle(string $title) Return CourseSetting objects filtered by the title column
 * @method     array findByComment(string $comment) Return CourseSetting objects filtered by the comment column
 * @method     array findBySubkeytext(string $subkeytext) Return CourseSetting objects filtered by the subkeytext column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseSettingQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseSettingQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseSetting', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseSettingQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseSettingQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseSettingQuery) {
			return $criteria;
		}
		$query = new CourseSettingQuery();
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
	 * @return    CourseSetting|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseSettingPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CourseSettingPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CourseSettingPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CourseSettingPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the variable column
	 * 
	 * @param     string $variable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByVariable($variable = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($variable)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $variable)) {
				$variable = str_replace('*', '%', $variable);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::VARIABLE, $variable, $comparison);
	}

	/**
	 * Filter the query on the subkey column
	 * 
	 * @param     string $subkey The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterBySubkey($subkey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subkey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subkey)) {
				$subkey = str_replace('*', '%', $subkey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::SUBKEY, $subkey, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the category column
	 * 
	 * @param     string $category The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByCategory($category = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($category)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $category)) {
				$category = str_replace('*', '%', $category);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::CATEGORY, $category, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     string $value The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseSettingPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseSettingPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the subkeytext column
	 * 
	 * @param     string $subkeytext The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function filterBySubkeytext($subkeytext = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subkeytext)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subkeytext)) {
				$subkeytext = str_replace('*', '%', $subkeytext);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseSettingPeer::SUBKEYTEXT, $subkeytext, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseSetting $courseSetting Object to remove from the list of results
	 *
	 * @return    CourseSettingQuery The current query, for fluid interface
	 */
	public function prune($courseSetting = null)
	{
		if ($courseSetting) {
			$this->addUsingAlias(CourseSettingPeer::ID, $courseSetting->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseSettingQuery
