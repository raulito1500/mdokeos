<?php


/**
 * Base class that represents a query for the 'gradebook_score_display' table.
 *
 * 
 *
 * @method     GradebookScoreDisplayQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GradebookScoreDisplayQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     GradebookScoreDisplayQuery orderByDisplay($order = Criteria::ASC) Order by the display column
 *
 * @method     GradebookScoreDisplayQuery groupById() Group by the id column
 * @method     GradebookScoreDisplayQuery groupByScore() Group by the score column
 * @method     GradebookScoreDisplayQuery groupByDisplay() Group by the display column
 *
 * @method     GradebookScoreDisplayQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GradebookScoreDisplayQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GradebookScoreDisplayQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GradebookScoreDisplay findOne(PropelPDO $con = null) Return the first GradebookScoreDisplay matching the query
 * @method     GradebookScoreDisplay findOneOrCreate(PropelPDO $con = null) Return the first GradebookScoreDisplay matching the query, or a new GradebookScoreDisplay object populated from the query conditions when no match is found
 *
 * @method     GradebookScoreDisplay findOneById(int $id) Return the first GradebookScoreDisplay filtered by the id column
 * @method     GradebookScoreDisplay findOneByScore(double $score) Return the first GradebookScoreDisplay filtered by the score column
 * @method     GradebookScoreDisplay findOneByDisplay(string $display) Return the first GradebookScoreDisplay filtered by the display column
 *
 * @method     array findById(int $id) Return GradebookScoreDisplay objects filtered by the id column
 * @method     array findByScore(double $score) Return GradebookScoreDisplay objects filtered by the score column
 * @method     array findByDisplay(string $display) Return GradebookScoreDisplay objects filtered by the display column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseGradebookScoreDisplayQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGradebookScoreDisplayQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'GradebookScoreDisplay', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GradebookScoreDisplayQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GradebookScoreDisplayQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GradebookScoreDisplayQuery) {
			return $criteria;
		}
		$query = new GradebookScoreDisplayQuery();
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
	 * @return    GradebookScoreDisplay|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GradebookScoreDisplayPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GradebookScoreDisplayPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GradebookScoreDisplayPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GradebookScoreDisplayPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the score column
	 * 
	 * @param     double|array $score The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function filterByScore($score = null, $comparison = null)
	{
		if (is_array($score)) {
			$useMinMax = false;
			if (isset($score['min'])) {
				$this->addUsingAlias(GradebookScoreDisplayPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($score['max'])) {
				$this->addUsingAlias(GradebookScoreDisplayPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GradebookScoreDisplayPeer::SCORE, $score, $comparison);
	}

	/**
	 * Filter the query on the display column
	 * 
	 * @param     string $display The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function filterByDisplay($display = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($display)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $display)) {
				$display = str_replace('*', '%', $display);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GradebookScoreDisplayPeer::DISPLAY, $display, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GradebookScoreDisplay $gradebookScoreDisplay Object to remove from the list of results
	 *
	 * @return    GradebookScoreDisplayQuery The current query, for fluid interface
	 */
	public function prune($gradebookScoreDisplay = null)
	{
		if ($gradebookScoreDisplay) {
			$this->addUsingAlias(GradebookScoreDisplayPeer::ID, $gradebookScoreDisplay->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGradebookScoreDisplayQuery
