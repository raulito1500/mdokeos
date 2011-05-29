<?php


/**
 * Base class that represents a query for the 'gradebook_evaluation' table.
 *
 * 
 *
 * @method     GradebookEvaluationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookEvaluationQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GradebookEvaluationQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GradebookEvaluationQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookEvaluationQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     GradebookEvaluationQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     GradebookEvaluationQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     GradebookEvaluationQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     GradebookEvaluationQuery orderByMax($order = Criteria::ASC) Order by the max column
 * @method     GradebookEvaluationQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 * @method     GradebookEvaluationQuery orderByType($order = Criteria::ASC) Order by the type column
 *
 * @method     GradebookEvaluationQuery groupById() Group by the id column
 * @method     GradebookEvaluationQuery groupByName() Group by the name column
 * @method     GradebookEvaluationQuery groupByDescription() Group by the description column
 * @method     GradebookEvaluationQuery groupByUserId() Group by the user_id column
 * @method     GradebookEvaluationQuery groupByCourseCode() Group by the course_code column
 * @method     GradebookEvaluationQuery groupByCategoryId() Group by the category_id column
 * @method     GradebookEvaluationQuery groupByDate() Group by the date column
 * @method     GradebookEvaluationQuery groupByWeight() Group by the weight column
 * @method     GradebookEvaluationQuery groupByMax() Group by the max column
 * @method     GradebookEvaluationQuery groupByVisible() Group by the visible column
 * @method     GradebookEvaluationQuery groupByType() Group by the type column
 *
 * @method     GradebookEvaluationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookEvaluationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookEvaluationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookEvaluation findOne(PropelPDO $con = null) Return the first GradebookEvaluation matching the query
 * @method     GradebookEvaluation findOneOrCreate(PropelPDO $con = null) Return the first GradebookEvaluation matching the query, or a new GradebookEvaluation object populated from the query conditions when no match is found
 *
 * @method     GradebookEvaluation findOneById(int $id) Return the first GradebookEvaluation filtered by the id column
 * @method     GradebookEvaluation findOneByName(string $name) Return the first GradebookEvaluation filtered by the name column
 * @method     GradebookEvaluation findOneByDescription(string $description) Return the first GradebookEvaluation filtered by the description column
 * @method     GradebookEvaluation findOneByUserId(int $user_id) Return the first GradebookEvaluation filtered by the user_id column
 * @method     GradebookEvaluation findOneByCourseCode(string $course_code) Return the first GradebookEvaluation filtered by the course_code column
 * @method     GradebookEvaluation findOneByCategoryId(int $category_id) Return the first GradebookEvaluation filtered by the category_id column
 * @method     GradebookEvaluation findOneByDate(int $date) Return the first GradebookEvaluation filtered by the date column
 * @method     GradebookEvaluation findOneByWeight(int $weight) Return the first GradebookEvaluation filtered by the weight column
 * @method     GradebookEvaluation findOneByMax(double $max) Return the first GradebookEvaluation filtered by the max column
 * @method     GradebookEvaluation findOneByVisible(int $visible) Return the first GradebookEvaluation filtered by the visible column
 * @method     GradebookEvaluation findOneByType(string $type) Return the first GradebookEvaluation filtered by the type column
 *
 * @method     array findById(int $id) Return GradebookEvaluation objects filtered by the id column
 * @method     array findByName(string $name) Return GradebookEvaluation objects filtered by the name column
 * @method     array findByDescription(string $description) Return GradebookEvaluation objects filtered by the description column
 * @method     array findByUserId(int $user_id) Return GradebookEvaluation objects filtered by the user_id column
 * @method     array findByCourseCode(string $course_code) Return GradebookEvaluation objects filtered by the course_code column
 * @method     array findByCategoryId(int $category_id) Return GradebookEvaluation objects filtered by the category_id column
 * @method     array findByDate(int $date) Return GradebookEvaluation objects filtered by the date column
 * @method     array findByWeight(int $weight) Return GradebookEvaluation objects filtered by the weight column
 * @method     array findByMax(double $max) Return GradebookEvaluation objects filtered by the max column
 * @method     array findByVisible(int $visible) Return GradebookEvaluation objects filtered by the visible column
 * @method     array findByType(string $type) Return GradebookEvaluation objects filtered by the type column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookEvaluationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookEvaluationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookEvaluation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookEvaluationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookEvaluationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookEvaluationQuery) {
			return $criteria;
		}
		$query = new GradebookEvaluationQuery();
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
	 * @return    GradebookEvaluation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookEvaluationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookEvaluationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookEvaluationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookEvaluationPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookEvaluationPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookEvaluationPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     int|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 * 
	 * @param     int|array $weight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the max column
	 * 
	 * @param     double|array $max The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByMax($max = null, $comparison = null)
	{
		if (is_array($max)) {
			$useMinMax = false;
			if (isset($max['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::MAX, $max['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($max['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::MAX, $max['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::MAX, $max, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * @param     int|array $visible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (is_array($visible)) {
			$useMinMax = false;
			if (isset($visible['min'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visible['max'])) {
				$this->addUsingAlias(GradebookEvaluationPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookEvaluationPeer::VISIBLE, $visible, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookEvaluationPeer::TYPE, $type, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookEvaluation $gradebookEvaluation Object to remove from the list of results
	 *
	 * @return    GradebookEvaluationQuery The current query, for fluid interface
	 */
	public function prune($gradebookEvaluation = null)
	{
		if ($gradebookEvaluation) {
			$this->addUsingAlias(GradebookEvaluationPeer::ID, $gradebookEvaluation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookEvaluationQuery
