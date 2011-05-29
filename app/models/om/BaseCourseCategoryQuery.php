<?php


/**
 * Base class that represents a query for the 'course_category' table.
 *
 * 
 *
 * @method     CourseCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CourseCategoryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CourseCategoryQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     CourseCategoryQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     CourseCategoryQuery orderByTreePos($order = Criteria::ASC) Order by the tree_pos column
 * @method     CourseCategoryQuery orderByChildrenCount($order = Criteria::ASC) Order by the children_count column
 * @method     CourseCategoryQuery orderByAuthCourseChild($order = Criteria::ASC) Order by the auth_course_child column
 * @method     CourseCategoryQuery orderByAuthCatChild($order = Criteria::ASC) Order by the auth_cat_child column
 *
 * @method     CourseCategoryQuery groupById() Group by the id column
 * @method     CourseCategoryQuery groupByName() Group by the name column
 * @method     CourseCategoryQuery groupByCode() Group by the code column
 * @method     CourseCategoryQuery groupByParentId() Group by the parent_id column
 * @method     CourseCategoryQuery groupByTreePos() Group by the tree_pos column
 * @method     CourseCategoryQuery groupByChildrenCount() Group by the children_count column
 * @method     CourseCategoryQuery groupByAuthCourseChild() Group by the auth_course_child column
 * @method     CourseCategoryQuery groupByAuthCatChild() Group by the auth_cat_child column
 *
 * @method     CourseCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CourseCategory findOne(PropelPDO $con = null) Return the first CourseCategory matching the query
 * @method     CourseCategory findOneOrCreate(PropelPDO $con = null) Return the first CourseCategory matching the query, or a new CourseCategory object populated from the query conditions when no match is found
 *
 * @method     CourseCategory findOneById(int $id) Return the first CourseCategory filtered by the id column
 * @method     CourseCategory findOneByName(string $name) Return the first CourseCategory filtered by the name column
 * @method     CourseCategory findOneByCode(string $code) Return the first CourseCategory filtered by the code column
 * @method     CourseCategory findOneByParentId(string $parent_id) Return the first CourseCategory filtered by the parent_id column
 * @method     CourseCategory findOneByTreePos(int $tree_pos) Return the first CourseCategory filtered by the tree_pos column
 * @method     CourseCategory findOneByChildrenCount(int $children_count) Return the first CourseCategory filtered by the children_count column
 * @method     CourseCategory findOneByAuthCourseChild(string $auth_course_child) Return the first CourseCategory filtered by the auth_course_child column
 * @method     CourseCategory findOneByAuthCatChild(string $auth_cat_child) Return the first CourseCategory filtered by the auth_cat_child column
 *
 * @method     array findById(int $id) Return CourseCategory objects filtered by the id column
 * @method     array findByName(string $name) Return CourseCategory objects filtered by the name column
 * @method     array findByCode(string $code) Return CourseCategory objects filtered by the code column
 * @method     array findByParentId(string $parent_id) Return CourseCategory objects filtered by the parent_id column
 * @method     array findByTreePos(int $tree_pos) Return CourseCategory objects filtered by the tree_pos column
 * @method     array findByChildrenCount(int $children_count) Return CourseCategory objects filtered by the children_count column
 * @method     array findByAuthCourseChild(string $auth_course_child) Return CourseCategory objects filtered by the auth_course_child column
 * @method     array findByAuthCatChild(string $auth_cat_child) Return CourseCategory objects filtered by the auth_cat_child column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'CourseCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseCategoryQuery) {
			return $criteria;
		}
		$query = new CourseCategoryQuery();
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
	 * @return    CourseCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CourseCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CourseCategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CourseCategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CourseCategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CourseCategoryPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($code)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $code)) {
				$code = str_replace('*', '%', $code);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     string $parentId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($parentId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $parentId)) {
				$parentId = str_replace('*', '%', $parentId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the tree_pos column
	 * 
	 * @param     int|array $treePos The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByTreePos($treePos = null, $comparison = null)
	{
		if (is_array($treePos)) {
			$useMinMax = false;
			if (isset($treePos['min'])) {
				$this->addUsingAlias(CourseCategoryPeer::TREE_POS, $treePos['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($treePos['max'])) {
				$this->addUsingAlias(CourseCategoryPeer::TREE_POS, $treePos['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::TREE_POS, $treePos, $comparison);
	}

	/**
	 * Filter the query on the children_count column
	 * 
	 * @param     int|array $childrenCount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByChildrenCount($childrenCount = null, $comparison = null)
	{
		if (is_array($childrenCount)) {
			$useMinMax = false;
			if (isset($childrenCount['min'])) {
				$this->addUsingAlias(CourseCategoryPeer::CHILDREN_COUNT, $childrenCount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($childrenCount['max'])) {
				$this->addUsingAlias(CourseCategoryPeer::CHILDREN_COUNT, $childrenCount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::CHILDREN_COUNT, $childrenCount, $comparison);
	}

	/**
	 * Filter the query on the auth_course_child column
	 * 
	 * @param     string $authCourseChild The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByAuthCourseChild($authCourseChild = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authCourseChild)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authCourseChild)) {
				$authCourseChild = str_replace('*', '%', $authCourseChild);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::AUTH_COURSE_CHILD, $authCourseChild, $comparison);
	}

	/**
	 * Filter the query on the auth_cat_child column
	 * 
	 * @param     string $authCatChild The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function filterByAuthCatChild($authCatChild = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authCatChild)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authCatChild)) {
				$authCatChild = str_replace('*', '%', $authCatChild);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CourseCategoryPeer::AUTH_CAT_CHILD, $authCatChild, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CourseCategory $courseCategory Object to remove from the list of results
	 *
	 * @return    CourseCategoryQuery The current query, for fluid interface
	 */
	public function prune($courseCategory = null)
	{
		if ($courseCategory) {
			$this->addUsingAlias(CourseCategoryPeer::ID, $courseCategory->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseCategoryQuery
