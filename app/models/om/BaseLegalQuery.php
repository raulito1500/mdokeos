<?php


/**
 * Base class that represents a query for the 'legal' table.
 *
 * 
 *
 * @method     LegalQuery orderByLegalId($order = Criteria::ASC) Order by the legal_id column
 * @method     LegalQuery orderByLanguageId($order = Criteria::ASC) Order by the language_id column
 * @method     LegalQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     LegalQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     LegalQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     LegalQuery orderByChanges($order = Criteria::ASC) Order by the changes column
 * @method     LegalQuery orderByVersion($order = Criteria::ASC) Order by the version column
 *
 * @method     LegalQuery groupByLegalId() Group by the legal_id column
 * @method     LegalQuery groupByLanguageId() Group by the language_id column
 * @method     LegalQuery groupByDate() Group by the date column
 * @method     LegalQuery groupByContent() Group by the content column
 * @method     LegalQuery groupByType() Group by the type column
 * @method     LegalQuery groupByChanges() Group by the changes column
 * @method     LegalQuery groupByVersion() Group by the version column
 *
 * @method     LegalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LegalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LegalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Legal findOne(PropelPDO $con = null) Return the first Legal matching the query
 * @method     Legal findOneOrCreate(PropelPDO $con = null) Return the first Legal matching the query, or a new Legal object populated from the query conditions when no match is found
 *
 * @method     Legal findOneByLegalId(int $legal_id) Return the first Legal filtered by the legal_id column
 * @method     Legal findOneByLanguageId(int $language_id) Return the first Legal filtered by the language_id column
 * @method     Legal findOneByDate(int $date) Return the first Legal filtered by the date column
 * @method     Legal findOneByContent(string $content) Return the first Legal filtered by the content column
 * @method     Legal findOneByType(int $type) Return the first Legal filtered by the type column
 * @method     Legal findOneByChanges(string $changes) Return the first Legal filtered by the changes column
 * @method     Legal findOneByVersion(int $version) Return the first Legal filtered by the version column
 *
 * @method     array findByLegalId(int $legal_id) Return Legal objects filtered by the legal_id column
 * @method     array findByLanguageId(int $language_id) Return Legal objects filtered by the language_id column
 * @method     array findByDate(int $date) Return Legal objects filtered by the date column
 * @method     array findByContent(string $content) Return Legal objects filtered by the content column
 * @method     array findByType(int $type) Return Legal objects filtered by the type column
 * @method     array findByChanges(string $changes) Return Legal objects filtered by the changes column
 * @method     array findByVersion(int $version) Return Legal objects filtered by the version column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLegalQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLegalQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Legal', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LegalQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LegalQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LegalQuery) {
			return $criteria;
		}
		$query = new LegalQuery();
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
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$legal_id, $language_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Legal|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LegalPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LegalPeer::LEGAL_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LegalPeer::LANGUAGE_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LegalPeer::LEGAL_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LegalPeer::LANGUAGE_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the legal_id column
	 * 
	 * @param     int|array $legalId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByLegalId($legalId = null, $comparison = null)
	{
		if (is_array($legalId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LegalPeer::LEGAL_ID, $legalId, $comparison);
	}

	/**
	 * Filter the query on the language_id column
	 * 
	 * @param     int|array $languageId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByLanguageId($languageId = null, $comparison = null)
	{
		if (is_array($languageId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LegalPeer::LANGUAGE_ID, $languageId, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     int|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(LegalPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(LegalPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LegalPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LegalPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     int|array $type The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_array($type)) {
			$useMinMax = false;
			if (isset($type['min'])) {
				$this->addUsingAlias(LegalPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($type['max'])) {
				$this->addUsingAlias(LegalPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LegalPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the changes column
	 * 
	 * @param     string $changes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByChanges($changes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($changes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $changes)) {
				$changes = str_replace('*', '%', $changes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LegalPeer::CHANGES, $changes, $comparison);
	}

	/**
	 * Filter the query on the version column
	 * 
	 * @param     int|array $version The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (is_array($version)) {
			$useMinMax = false;
			if (isset($version['min'])) {
				$this->addUsingAlias(LegalPeer::VERSION, $version['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($version['max'])) {
				$this->addUsingAlias(LegalPeer::VERSION, $version['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LegalPeer::VERSION, $version, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Legal $legal Object to remove from the list of results
	 *
	 * @return    LegalQuery The current query, for fluid interface
	 */
	public function prune($legal = null)
	{
		if ($legal) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LegalPeer::LEGAL_ID), $legal->getLegalId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LegalPeer::LANGUAGE_ID), $legal->getLanguageId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseLegalQuery
