<?php


/**
 * Base class that represents a query for the 'glossary' table.
 *
 * 
 *
 * @method     GlossaryQuery orderByGlossaryId($order = Criteria::ASC) Order by the glossary_id column
 * @method     GlossaryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GlossaryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GlossaryQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 *
 * @method     GlossaryQuery groupByGlossaryId() Group by the glossary_id column
 * @method     GlossaryQuery groupByName() Group by the name column
 * @method     GlossaryQuery groupByDescription() Group by the description column
 * @method     GlossaryQuery groupByDisplayOrder() Group by the display_order column
 *
 * @method     GlossaryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GlossaryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GlossaryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Glossary findOne(PropelPDO $con = null) Return the first Glossary matching the query
 * @method     Glossary findOneOrCreate(PropelPDO $con = null) Return the first Glossary matching the query, or a new Glossary object populated from the query conditions when no match is found
 *
 * @method     Glossary findOneByGlossaryId(int $glossary_id) Return the first Glossary filtered by the glossary_id column
 * @method     Glossary findOneByName(string $name) Return the first Glossary filtered by the name column
 * @method     Glossary findOneByDescription(string $description) Return the first Glossary filtered by the description column
 * @method     Glossary findOneByDisplayOrder(int $display_order) Return the first Glossary filtered by the display_order column
 *
 * @method     array findByGlossaryId(int $glossary_id) Return Glossary objects filtered by the glossary_id column
 * @method     array findByName(string $name) Return Glossary objects filtered by the name column
 * @method     array findByDescription(string $description) Return Glossary objects filtered by the description column
 * @method     array findByDisplayOrder(int $display_order) Return Glossary objects filtered by the display_order column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGlossaryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGlossaryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Glossary', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GlossaryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GlossaryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GlossaryQuery) {
			return $criteria;
		}
		$query = new GlossaryQuery();
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
	 * @return    Glossary|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GlossaryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GlossaryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GlossaryPeer::GLOSSARY_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GlossaryPeer::GLOSSARY_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the glossary_id column
	 * 
	 * @param     int|array $glossaryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
	 */
	public function filterByGlossaryId($glossaryId = null, $comparison = null)
	{
		if (is_array($glossaryId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GlossaryPeer::GLOSSARY_ID, $glossaryId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GlossaryPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GlossaryPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(GlossaryPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(GlossaryPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GlossaryPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Glossary $glossary Object to remove from the list of results
	 *
	 * @return    GlossaryQuery The current query, for fluid interface
	 */
	public function prune($glossary = null)
	{
		if ($glossary) {
			$this->addUsingAlias(GlossaryPeer::GLOSSARY_ID, $glossary->getGlossaryId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGlossaryQuery
