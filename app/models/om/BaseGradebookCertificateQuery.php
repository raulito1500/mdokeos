<?php


/**
 * Base class that represents a query for the 'gradebook_certificate' table.
 *
 * 
 *
 * @method     GradebookCertificateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookCertificateQuery orderByCatId($order = Criteria::ASC) Order by the cat_id column
 * @method     GradebookCertificateQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     GradebookCertificateQuery orderByScoreCertificate($order = Criteria::ASC) Order by the score_certificate column
 * @method     GradebookCertificateQuery orderByDateCertificate($order = Criteria::ASC) Order by the date_certificate column
 * @method     GradebookCertificateQuery orderByPathCertificate($order = Criteria::ASC) Order by the path_certificate column
 *
 * @method     GradebookCertificateQuery groupById() Group by the id column
 * @method     GradebookCertificateQuery groupByCatId() Group by the cat_id column
 * @method     GradebookCertificateQuery groupByUserId() Group by the user_id column
 * @method     GradebookCertificateQuery groupByScoreCertificate() Group by the score_certificate column
 * @method     GradebookCertificateQuery groupByDateCertificate() Group by the date_certificate column
 * @method     GradebookCertificateQuery groupByPathCertificate() Group by the path_certificate column
 *
 * @method     GradebookCertificateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookCertificateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookCertificateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookCertificate findOne(PropelPDO $con = null) Return the first GradebookCertificate matching the query
 * @method     GradebookCertificate findOneOrCreate(PropelPDO $con = null) Return the first GradebookCertificate matching the query, or a new GradebookCertificate object populated from the query conditions when no match is found
 *
 * @method     GradebookCertificate findOneById(string $id) Return the first GradebookCertificate filtered by the id column
 * @method     GradebookCertificate findOneByCatId(int $cat_id) Return the first GradebookCertificate filtered by the cat_id column
 * @method     GradebookCertificate findOneByUserId(int $user_id) Return the first GradebookCertificate filtered by the user_id column
 * @method     GradebookCertificate findOneByScoreCertificate(double $score_certificate) Return the first GradebookCertificate filtered by the score_certificate column
 * @method     GradebookCertificate findOneByDateCertificate(string $date_certificate) Return the first GradebookCertificate filtered by the date_certificate column
 * @method     GradebookCertificate findOneByPathCertificate(string $path_certificate) Return the first GradebookCertificate filtered by the path_certificate column
 *
 * @method     array findById(string $id) Return GradebookCertificate objects filtered by the id column
 * @method     array findByCatId(int $cat_id) Return GradebookCertificate objects filtered by the cat_id column
 * @method     array findByUserId(int $user_id) Return GradebookCertificate objects filtered by the user_id column
 * @method     array findByScoreCertificate(double $score_certificate) Return GradebookCertificate objects filtered by the score_certificate column
 * @method     array findByDateCertificate(string $date_certificate) Return GradebookCertificate objects filtered by the date_certificate column
 * @method     array findByPathCertificate(string $path_certificate) Return GradebookCertificate objects filtered by the path_certificate column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookCertificateQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookCertificateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookCertificate', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookCertificateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookCertificateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookCertificateQuery) {
			return $criteria;
		}
		$query = new GradebookCertificateQuery();
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
	 * @return    GradebookCertificate|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookCertificatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookCertificatePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookCertificatePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookCertificatePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the cat_id column
	 * 
	 * @param     int|array $catId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByCatId($catId = null, $comparison = null)
	{
		if (is_array($catId)) {
			$useMinMax = false;
			if (isset($catId['min'])) {
				$this->addUsingAlias(GradebookCertificatePeer::CAT_ID, $catId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($catId['max'])) {
				$this->addUsingAlias(GradebookCertificatePeer::CAT_ID, $catId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCertificatePeer::CAT_ID, $catId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(GradebookCertificatePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(GradebookCertificatePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCertificatePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the score_certificate column
	 * 
	 * @param     double|array $scoreCertificate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByScoreCertificate($scoreCertificate = null, $comparison = null)
	{
		if (is_array($scoreCertificate)) {
			$useMinMax = false;
			if (isset($scoreCertificate['min'])) {
				$this->addUsingAlias(GradebookCertificatePeer::SCORE_CERTIFICATE, $scoreCertificate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($scoreCertificate['max'])) {
				$this->addUsingAlias(GradebookCertificatePeer::SCORE_CERTIFICATE, $scoreCertificate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCertificatePeer::SCORE_CERTIFICATE, $scoreCertificate, $comparison);
	}

	/**
	 * Filter the query on the date_certificate column
	 * 
	 * @param     string|array $dateCertificate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByDateCertificate($dateCertificate = null, $comparison = null)
	{
		if (is_array($dateCertificate)) {
			$useMinMax = false;
			if (isset($dateCertificate['min'])) {
				$this->addUsingAlias(GradebookCertificatePeer::DATE_CERTIFICATE, $dateCertificate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCertificate['max'])) {
				$this->addUsingAlias(GradebookCertificatePeer::DATE_CERTIFICATE, $dateCertificate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookCertificatePeer::DATE_CERTIFICATE, $dateCertificate, $comparison);
	}

	/**
	 * Filter the query on the path_certificate column
	 * 
	 * @param     string $pathCertificate The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function filterByPathCertificate($pathCertificate = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pathCertificate)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pathCertificate)) {
				$pathCertificate = str_replace('*', '%', $pathCertificate);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GradebookCertificatePeer::PATH_CERTIFICATE, $pathCertificate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookCertificate $gradebookCertificate Object to remove from the list of results
	 *
	 * @return    GradebookCertificateQuery The current query, for fluid interface
	 */
	public function prune($gradebookCertificate = null)
	{
		if ($gradebookCertificate) {
			$this->addUsingAlias(GradebookCertificatePeer::ID, $gradebookCertificate->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookCertificateQuery
