<?php


/**
 * Base class that represents a query for the 'survey_group' table.
 *
 * 
 *
 * @method     SurveyGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SurveyGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SurveyGroupQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     SurveyGroupQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 *
 * @method     SurveyGroupQuery groupById() Group by the id column
 * @method     SurveyGroupQuery groupByName() Group by the name column
 * @method     SurveyGroupQuery groupByDescription() Group by the description column
 * @method     SurveyGroupQuery groupBySurveyId() Group by the survey_id column
 *
 * @method     SurveyGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SurveyGroup findOne(PropelPDO $con = null) Return the first SurveyGroup matching the query
 * @method     SurveyGroup findOneOrCreate(PropelPDO $con = null) Return the first SurveyGroup matching the query, or a new SurveyGroup object populated from the query conditions when no match is found
 *
 * @method     SurveyGroup findOneById(int $id) Return the first SurveyGroup filtered by the id column
 * @method     SurveyGroup findOneByName(string $name) Return the first SurveyGroup filtered by the name column
 * @method     SurveyGroup findOneByDescription(string $description) Return the first SurveyGroup filtered by the description column
 * @method     SurveyGroup findOneBySurveyId(int $survey_id) Return the first SurveyGroup filtered by the survey_id column
 *
 * @method     array findById(int $id) Return SurveyGroup objects filtered by the id column
 * @method     array findByName(string $name) Return SurveyGroup objects filtered by the name column
 * @method     array findByDescription(string $description) Return SurveyGroup objects filtered by the description column
 * @method     array findBySurveyId(int $survey_id) Return SurveyGroup objects filtered by the survey_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SurveyGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyGroupQuery) {
			return $criteria;
		}
		$query = new SurveyGroupQuery();
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
	 * @return    SurveyGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyGroupPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyGroupPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyGroupPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyGroupPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId)) {
			$useMinMax = false;
			if (isset($surveyId['min'])) {
				$this->addUsingAlias(SurveyGroupPeer::SURVEY_ID, $surveyId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyId['max'])) {
				$this->addUsingAlias(SurveyGroupPeer::SURVEY_ID, $surveyId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyGroupPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SurveyGroup $surveyGroup Object to remove from the list of results
	 *
	 * @return    SurveyGroupQuery The current query, for fluid interface
	 */
	public function prune($surveyGroup = null)
	{
		if ($surveyGroup) {
			$this->addUsingAlias(SurveyGroupPeer::ID, $surveyGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyGroupQuery
