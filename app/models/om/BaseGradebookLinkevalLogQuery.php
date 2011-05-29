<?php


/**
 * Base class that represents a query for the 'gradebook_linkeval_log' table.
 *
 * 
 *
 * @method     GradebookLinkevalLogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookLinkevalLogQuery orderByIdLinkevalLog($order = Criteria::ASC) Order by the id_linkeval_log column
 * @method     GradebookLinkevalLogQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GradebookLinkevalLogQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GradebookLinkevalLogQuery orderByDateLog($order = Criteria::ASC) Order by the date_log column
 * @method     GradebookLinkevalLogQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     GradebookLinkevalLogQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 * @method     GradebookLinkevalLogQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     GradebookLinkevalLogQuery orderByUserIdLog($order = Criteria::ASC) Order by the user_id_log column
 *
 * @method     GradebookLinkevalLogQuery groupById() Group by the id column
 * @method     GradebookLinkevalLogQuery groupByIdLinkevalLog() Group by the id_linkeval_log column
 * @method     GradebookLinkevalLogQuery groupByName() Group by the name column
 * @method     GradebookLinkevalLogQuery groupByDescription() Group by the description column
 * @method     GradebookLinkevalLogQuery groupByDateLog() Group by the date_log column
 * @method     GradebookLinkevalLogQuery groupByWeight() Group by the weight column
 * @method     GradebookLinkevalLogQuery groupByVisible() Group by the visible column
 * @method     GradebookLinkevalLogQuery groupByType() Group by the type column
 * @method     GradebookLinkevalLogQuery groupByUserIdLog() Group by the user_id_log column
 *
 * @method     GradebookLinkevalLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookLinkevalLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookLinkevalLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookLinkevalLog findOne(PropelPDO $con = null) Return the first GradebookLinkevalLog matching the query
 * @method     GradebookLinkevalLog findOneOrCreate(PropelPDO $con = null) Return the first GradebookLinkevalLog matching the query, or a new GradebookLinkevalLog object populated from the query conditions when no match is found
 *
 * @method     GradebookLinkevalLog findOneById(int $id) Return the first GradebookLinkevalLog filtered by the id column
 * @method     GradebookLinkevalLog findOneByIdLinkevalLog(int $id_linkeval_log) Return the first GradebookLinkevalLog filtered by the id_linkeval_log column
 * @method     GradebookLinkevalLog findOneByName(string $name) Return the first GradebookLinkevalLog filtered by the name column
 * @method     GradebookLinkevalLog findOneByDescription(string $description) Return the first GradebookLinkevalLog filtered by the description column
 * @method     GradebookLinkevalLog findOneByDateLog(int $date_log) Return the first GradebookLinkevalLog filtered by the date_log column
 * @method     GradebookLinkevalLog findOneByWeight(int $weight) Return the first GradebookLinkevalLog filtered by the weight column
 * @method     GradebookLinkevalLog findOneByVisible(int $visible) Return the first GradebookLinkevalLog filtered by the visible column
 * @method     GradebookLinkevalLog findOneByType(string $type) Return the first GradebookLinkevalLog filtered by the type column
 * @method     GradebookLinkevalLog findOneByUserIdLog(int $user_id_log) Return the first GradebookLinkevalLog filtered by the user_id_log column
 *
 * @method     array findById(int $id) Return GradebookLinkevalLog objects filtered by the id column
 * @method     array findByIdLinkevalLog(int $id_linkeval_log) Return GradebookLinkevalLog objects filtered by the id_linkeval_log column
 * @method     array findByName(string $name) Return GradebookLinkevalLog objects filtered by the name column
 * @method     array findByDescription(string $description) Return GradebookLinkevalLog objects filtered by the description column
 * @method     array findByDateLog(int $date_log) Return GradebookLinkevalLog objects filtered by the date_log column
 * @method     array findByWeight(int $weight) Return GradebookLinkevalLog objects filtered by the weight column
 * @method     array findByVisible(int $visible) Return GradebookLinkevalLog objects filtered by the visible column
 * @method     array findByType(string $type) Return GradebookLinkevalLog objects filtered by the type column
 * @method     array findByUserIdLog(int $user_id_log) Return GradebookLinkevalLog objects filtered by the user_id_log column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookLinkevalLogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookLinkevalLogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookLinkevalLog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookLinkevalLogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookLinkevalLogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookLinkevalLogQuery) {
			return $criteria;
		}
		$query = new GradebookLinkevalLogQuery();
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
	 * @return    GradebookLinkevalLog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookLinkevalLogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookLinkevalLogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookLinkevalLogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the id_linkeval_log column
	 * 
	 * @param     int|array $idLinkevalLog The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByIdLinkevalLog($idLinkevalLog = null, $comparison = null)
	{
		if (is_array($idLinkevalLog)) {
			$useMinMax = false;
			if (isset($idLinkevalLog['min'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::ID_LINKEVAL_LOG, $idLinkevalLog['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLinkevalLog['max'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::ID_LINKEVAL_LOG, $idLinkevalLog['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::ID_LINKEVAL_LOG, $idLinkevalLog, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookLinkevalLogPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookLinkevalLogPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the date_log column
	 * 
	 * @param     int|array $dateLog The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByDateLog($dateLog = null, $comparison = null)
	{
		if (is_array($dateLog)) {
			$useMinMax = false;
			if (isset($dateLog['min'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::DATE_LOG, $dateLog['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateLog['max'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::DATE_LOG, $dateLog['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::DATE_LOG, $dateLog, $comparison);
	}

	/**
	 * Filter the query on the weight column
	 * 
	 * @param     int|array $weight The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByWeight($weight = null, $comparison = null)
	{
		if (is_array($weight)) {
			$useMinMax = false;
			if (isset($weight['min'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($weight['max'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::WEIGHT, $weight, $comparison);
	}

	/**
	 * Filter the query on the visible column
	 * 
	 * @param     int|array $visible The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByVisible($visible = null, $comparison = null)
	{
		if (is_array($visible)) {
			$useMinMax = false;
			if (isset($visible['min'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visible['max'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::VISIBLE, $visible, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GradebookLinkevalLogPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the user_id_log column
	 * 
	 * @param     int|array $userIdLog The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function filterByUserIdLog($userIdLog = null, $comparison = null)
	{
		if (is_array($userIdLog)) {
			$useMinMax = false;
			if (isset($userIdLog['min'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::USER_ID_LOG, $userIdLog['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userIdLog['max'])) {
				$this->addUsingAlias(GradebookLinkevalLogPeer::USER_ID_LOG, $userIdLog['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookLinkevalLogPeer::USER_ID_LOG, $userIdLog, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookLinkevalLog $gradebookLinkevalLog Object to remove from the list of results
	 *
	 * @return    GradebookLinkevalLogQuery The current query, for fluid interface
	 */
	public function prune($gradebookLinkevalLog = null)
	{
		if ($gradebookLinkevalLog) {
			$this->addUsingAlias(GradebookLinkevalLogPeer::ID, $gradebookLinkevalLog->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookLinkevalLogQuery
