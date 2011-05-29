<?php


/**
 * Base class that represents a query for the 'tool_intro' table.
 *
 * 
 *
 * @method     ToolIntroQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ToolIntroQuery orderByIntroText($order = Criteria::ASC) Order by the intro_text column
 *
 * @method     ToolIntroQuery groupById() Group by the id column
 * @method     ToolIntroQuery groupByIntroText() Group by the intro_text column
 *
 * @method     ToolIntroQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ToolIntroQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ToolIntroQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ToolIntro findOne(PropelPDO $con = null) Return the first ToolIntro matching the query
 * @method     ToolIntro findOneOrCreate(PropelPDO $con = null) Return the first ToolIntro matching the query, or a new ToolIntro object populated from the query conditions when no match is found
 *
 * @method     ToolIntro findOneById(string $id) Return the first ToolIntro filtered by the id column
 * @method     ToolIntro findOneByIntroText(string $intro_text) Return the first ToolIntro filtered by the intro_text column
 *
 * @method     array findById(string $id) Return ToolIntro objects filtered by the id column
 * @method     array findByIntroText(string $intro_text) Return ToolIntro objects filtered by the intro_text column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseToolIntroQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseToolIntroQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'ToolIntro', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ToolIntroQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ToolIntroQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ToolIntroQuery) {
			return $criteria;
		}
		$query = new ToolIntroQuery();
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
	 * @return    ToolIntro|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ToolIntroPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ToolIntroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ToolIntroPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ToolIntroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ToolIntroPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string $id The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolIntroQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($id)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $id)) {
				$id = str_replace('*', '%', $id);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolIntroPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the intro_text column
	 * 
	 * @param     string $introText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ToolIntroQuery The current query, for fluid interface
	 */
	public function filterByIntroText($introText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($introText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $introText)) {
				$introText = str_replace('*', '%', $introText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ToolIntroPeer::INTRO_TEXT, $introText, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ToolIntro $toolIntro Object to remove from the list of results
	 *
	 * @return    ToolIntroQuery The current query, for fluid interface
	 */
	public function prune($toolIntro = null)
	{
		if ($toolIntro) {
			$this->addUsingAlias(ToolIntroPeer::ID, $toolIntro->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseToolIntroQuery
