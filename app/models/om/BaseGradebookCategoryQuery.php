<?php


/**
 * Base class that represents a query for the 'gradebook_category' table.
 *
 * 
 *
 * @method     GradebookCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookCategoryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GradebookCategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GradebookCategoryQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookCategoryQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 * @method     GradebookCategoryQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     GradebookCategoryQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     GradebookCategoryQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 * @method     GradebookCategoryQuery orderByCertifMinScore($order = Criteria::ASC) Order by the certif_min_score column
 * @method     GradebookCategoryQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     GradebookCategoryQuery orderByDocumentId($order = Criteria::ASC) Order by the document_id column
 *
 * @method     GradebookCategoryQuery groupById() Group by the id column
 * @method     GradebookCategoryQuery groupByName() Group by the name column
 * @method     GradebookCategoryQuery groupByDescription() Group by the description column
 * @method     GradebookCategoryQuery groupByUserId() Group by the user_id column
 * @method     GradebookCategoryQuery groupByCourseCode() Group by the course_code column
 * @method     GradebookCategoryQuery groupByParentId() Group by the parent_id column
 * @method     GradebookCategoryQuery groupByWeight() Group by the weight column
 * @method     GradebookCategoryQuery groupByVisible() Group by the visible column
 * @method     GradebookCategoryQuery groupByCertifMinScore() Group by the certif_min_score column
 * @method     GradebookCategoryQuery groupBySessionId() Group by the session_id column
 * @method     GradebookCategoryQuery groupByDocumentId() Group by the document_id column
 *
 * @method     GradebookCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookCategory findOne(PropelPDO $con = null) Return the first GradebookCategory matching the query
 * @method     GradebookCategory findOneOrCreate(PropelPDO $con = null) Return the first GradebookCategory matching the query, or a new GradebookCategory object populated from the query conditions when no match is found
 *
 * @method     GradebookCategory findOneById(int $id) Return the first GradebookCategory filtered by the id column
 * @method     GradebookCategory findOneByName(string $name) Return the first GradebookCategory filtered by the name column
 * @method     GradebookCategory findOneByDescription(string $description) Return the first GradebookCategory filtered by the description column
 * @method     GradebookCategory findOneByUserId(int $user_id) Return the first GradebookCategory filtered by the user_id column
 * @method     GradebookCategory findOneByCourseCode(string $course_code) Return the first GradebookCategory filtered by the course_code column
 * @method     GradebookCategory findOneByParentId(int $parent_id) Return the first GradebookCategory filtered by the parent_id column
 * @method     GradebookCategory findOneByWeight(int $weight) Return the first GradebookCategory filtered by the weight column
 * @method     GradebookCategory findOneByVisible(int $visible) Return the first GradebookCategory filtered by the visible column
 * @method     GradebookCategory findOneByCertifMinScore(int $certif_min_score) Return the first GradebookCategory filtered by the certif_min_score column
 * @method     GradebookCategory findOneBySessionId(int $session_id) Return the first GradebookCategory filtered by the session_id column
 * @method     GradebookCategory findOneByDocumentId(int $document_id) Return the first GradebookCategory filtered by the document_id column
 *
 * @method     array findById(int $id) Return GradebookCategory objects filtered by the id column
 * @method     array findByName(string $name) Return GradebookCategory objects filtered by the name column
 * @method     array findByDescription(string $description) Return GradebookCategory objects filtered by the description column
 * @method     array findByUserId(int $user_id) Return GradebookCategory objects filtered by the user_id column
 * @method     array findByCourseCode(string $course_code) Return GradebookCategory objects filtered by the course_code column
 * @method     array findByParentId(int $parent_id) Return GradebookCategory objects filtered by the parent_id column
 * @method     array findByWeight(int $weight) Return GradebookCategory objects filtered by the weight column
 * @method     array findByVisible(int $visible) Return GradebookCategory objects filtered by the visible column
 * @method     array findByCertifMinScore(int $certif_min_score) Return GradebookCategory objects filtered by the certif_min_score column
 * @method     array findBySessionId(int $session_id) Return GradebookCategory objects filtered by the session_id column
 * @method     array findByDocumentId(int $document_id) Return GradebookCategory objects filtered by the document_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookCategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookCategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookCategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookCategoryQuery) {
			return $criteria;
		}
		$query = new GradebookCategoryQuery();
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
	 * @return    GradebookCategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookCategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookCategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookCategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookCategoryPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookCategoryPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookCategoryPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 * 
	 * @param     int|array $weight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * @param     int|array $visible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (is_array($visible)) {
			$useMinMax = false;
			if (isset($visible['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visible['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::VISIBLE, $visible, $comparison);
	}

	/**
	 * Filter the query on the certif_min_score column
	 * 
	 * @param     int|array $certifMinScore The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByCertifMinScore($certifMinScore = null, $comparison = null)
	{
		if (is_array($certifMinScore)) {
			$useMinMax = false;
			if (isset($certifMinScore['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::CERTIF_MIN_SCORE, $certifMinScore['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($certifMinScore['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::CERTIF_MIN_SCORE, $certifMinScore['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::CERTIF_MIN_SCORE, $certifMinScore, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Filter the query on the document_id column
	 * 
	 * @param     int|array $documentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function filterByDocumentId($documentId = null, $comparison = null)
	{
		if (is_array($documentId)) {
			$useMinMax = false;
			if (isset($documentId['min'])) {
				$this->addUsingAlias(GradebookCategoryPeer::DOCUMENT_ID, $documentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($documentId['max'])) {
				$this->addUsingAlias(GradebookCategoryPeer::DOCUMENT_ID, $documentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCategoryPeer::DOCUMENT_ID, $documentId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookCategory $gradebookCategory Object to remove from the list of results
	 *
	 * @return    GradebookCategoryQuery The current query, for fluid interface
	 */
	public function prune($gradebookCategory = null)
	{
		if ($gradebookCategory) {
			$this->addUsingAlias(GradebookCategoryPeer::ID, $gradebookCategory->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookCategoryQuery
