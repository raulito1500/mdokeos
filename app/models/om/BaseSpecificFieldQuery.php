<?php


/**
 * Base class that represents a query for the 'specific_field' table.
 *
 * 
 *
 * @method     SpecificFieldQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SpecificFieldQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SpecificFieldQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     SpecificFieldQuery groupById() Group by the id column
 * @method     SpecificFieldQuery groupByCode() Group by the code column
 * @method     SpecificFieldQuery groupByName() Group by the name column
 *
 * @method     SpecificFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SpecificFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SpecificFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SpecificField findOne(PropelPDO $con = null) Return the first SpecificField matching the query
 * @method     SpecificField findOneOrCreate(PropelPDO $con = null) Return the first SpecificField matching the query, or a new SpecificField object populated from the query conditions when no match is found
 *
 * @method     SpecificField findOneById(int $id) Return the first SpecificField filtered by the id column
 * @method     SpecificField findOneByCode(string $code) Return the first SpecificField filtered by the code column
 * @method     SpecificField findOneByName(string $name) Return the first SpecificField filtered by the name column
 *
 * @method     array findById(int $id) Return SpecificField objects filtered by the id column
 * @method     array findByCode(string $code) Return SpecificField objects filtered by the code column
 * @method     array findByName(string $name) Return SpecificField objects filtered by the name column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSpecificFieldQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSpecificFieldQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SpecificField', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SpecificFieldQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SpecificFieldQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SpecificFieldQuery) {
			return $criteria;
		}
		$query = new SpecificFieldQuery();
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
	 * @return    SpecificField|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SpecificFieldPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SpecificFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SpecificFieldPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SpecificFieldQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SpecificFieldPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SpecificFieldPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SpecificFieldPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SpecificFieldQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SpecificFieldPeer::NAME, $name, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SpecificField $specificField Object to remove from the list of results
	 *
	 * @return    SpecificFieldQuery The current query, for fluid interface
	 */
	public function prune($specificField = null)
	{
		if ($specificField) {
			$this->addUsingAlias(SpecificFieldPeer::ID, $specificField->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSpecificFieldQuery
