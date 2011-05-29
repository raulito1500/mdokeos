<?php


/**
 * Base class that represents a query for the 'quiz_rel_question' table.
 *
 * 
 *
 * @method     QuizRelQuestionQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     QuizRelQuestionQuery orderByExerciceId($order = Criteria::ASC) Order by the exercice_id column
 * @method     QuizRelQuestionQuery orderByQuestionOrder($order = Criteria::ASC) Order by the question_order column
 *
 * @method     QuizRelQuestionQuery groupByQuestionId() Group by the question_id column
 * @method     QuizRelQuestionQuery groupByExerciceId() Group by the exercice_id column
 * @method     QuizRelQuestionQuery groupByQuestionOrder() Group by the question_order column
 *
 * @method     QuizRelQuestionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     QuizRelQuestionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     QuizRelQuestionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     QuizRelQuestion findOne(PropelPDO $con = null) Return the first QuizRelQuestion matching the query
 * @method     QuizRelQuestion findOneOrCreate(PropelPDO $con = null) Return the first QuizRelQuestion matching the query, or a new QuizRelQuestion object populated from the query conditions when no match is found
 *
 * @method     QuizRelQuestion findOneByQuestionId(int $question_id) Return the first QuizRelQuestion filtered by the question_id column
 * @method     QuizRelQuestion findOneByExerciceId(int $exercice_id) Return the first QuizRelQuestion filtered by the exercice_id column
 * @method     QuizRelQuestion findOneByQuestionOrder(int $question_order) Return the first QuizRelQuestion filtered by the question_order column
 *
 * @method     array findByQuestionId(int $question_id) Return QuizRelQuestion objects filtered by the question_id column
 * @method     array findByExerciceId(int $exercice_id) Return QuizRelQuestion objects filtered by the exercice_id column
 * @method     array findByQuestionOrder(int $question_order) Return QuizRelQuestion objects filtered by the question_order column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseQuizRelQuestionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseQuizRelQuestionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'QuizRelQuestion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new QuizRelQuestionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    QuizRelQuestionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof QuizRelQuestionQuery) {
			return $criteria;
		}
		$query = new QuizRelQuestionQuery();
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
	 * @param     array[$question_id, $exercice_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    QuizRelQuestion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = QuizRelQuestionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(QuizRelQuestionPeer::EXERCICE_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(QuizRelQuestionPeer::QUESTION_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(QuizRelQuestionPeer::EXERCICE_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId)) {
			$useMinMax = false;
			if (isset($questionId['min'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ID, $questionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionId['max'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ID, $questionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the exercice_id column
	 * 
	 * @param     int|array $exerciceId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function filterByExerciceId($exerciceId = null, $comparison = null)
	{
		if (is_array($exerciceId)) {
			$useMinMax = false;
			if (isset($exerciceId['min'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::EXERCICE_ID, $exerciceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($exerciceId['max'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::EXERCICE_ID, $exerciceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizRelQuestionPeer::EXERCICE_ID, $exerciceId, $comparison);
	}

	/**
	 * Filter the query on the question_order column
	 * 
	 * @param     int|array $questionOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function filterByQuestionOrder($questionOrder = null, $comparison = null)
	{
		if (is_array($questionOrder)) {
			$useMinMax = false;
			if (isset($questionOrder['min'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ORDER, $questionOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionOrder['max'])) {
				$this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ORDER, $questionOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizRelQuestionPeer::QUESTION_ORDER, $questionOrder, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     QuizRelQuestion $quizRelQuestion Object to remove from the list of results
	 *
	 * @return    QuizRelQuestionQuery The current query, for fluid interface
	 */
	public function prune($quizRelQuestion = null)
	{
		if ($quizRelQuestion) {
			$this->addCond('pruneCond0', $this->getAliasedColName(QuizRelQuestionPeer::QUESTION_ID), $quizRelQuestion->getQuestionId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(QuizRelQuestionPeer::EXERCICE_ID), $quizRelQuestion->getExerciceId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseQuizRelQuestionQuery
