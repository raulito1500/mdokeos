<?php


/**
 * Base class that represents a query for the 'quiz_question' table.
 *
 * 
 *
 * @method     QuizQuestionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     QuizQuestionQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method     QuizQuestionQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     QuizQuestionQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method     QuizQuestionQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     QuizQuestionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     QuizQuestionQuery orderByPicture($order = Criteria::ASC) Order by the picture column
 * @method     QuizQuestionQuery orderByLevel($order = Criteria::ASC) Order by the level column
 *
 * @method     QuizQuestionQuery groupById() Group by the id column
 * @method     QuizQuestionQuery groupByQuestion() Group by the question column
 * @method     QuizQuestionQuery groupByDescription() Group by the description column
 * @method     QuizQuestionQuery groupByPonderation() Group by the ponderation column
 * @method     QuizQuestionQuery groupByPosition() Group by the position column
 * @method     QuizQuestionQuery groupByType() Group by the type column
 * @method     QuizQuestionQuery groupByPicture() Group by the picture column
 * @method     QuizQuestionQuery groupByLevel() Group by the level column
 *
 * @method     QuizQuestionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     QuizQuestionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     QuizQuestionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     QuizQuestion findOne(PropelPDO $con = null) Return the first QuizQuestion matching the query
 * @method     QuizQuestion findOneOrCreate(PropelPDO $con = null) Return the first QuizQuestion matching the query, or a new QuizQuestion object populated from the query conditions when no match is found
 *
 * @method     QuizQuestion findOneById(int $id) Return the first QuizQuestion filtered by the id column
 * @method     QuizQuestion findOneByQuestion(string $question) Return the first QuizQuestion filtered by the question column
 * @method     QuizQuestion findOneByDescription(string $description) Return the first QuizQuestion filtered by the description column
 * @method     QuizQuestion findOneByPonderation(double $ponderation) Return the first QuizQuestion filtered by the ponderation column
 * @method     QuizQuestion findOneByPosition(int $position) Return the first QuizQuestion filtered by the position column
 * @method     QuizQuestion findOneByType(int $type) Return the first QuizQuestion filtered by the type column
 * @method     QuizQuestion findOneByPicture(string $picture) Return the first QuizQuestion filtered by the picture column
 * @method     QuizQuestion findOneByLevel(int $level) Return the first QuizQuestion filtered by the level column
 *
 * @method     array findById(int $id) Return QuizQuestion objects filtered by the id column
 * @method     array findByQuestion(string $question) Return QuizQuestion objects filtered by the question column
 * @method     array findByDescription(string $description) Return QuizQuestion objects filtered by the description column
 * @method     array findByPonderation(double $ponderation) Return QuizQuestion objects filtered by the ponderation column
 * @method     array findByPosition(int $position) Return QuizQuestion objects filtered by the position column
 * @method     array findByType(int $type) Return QuizQuestion objects filtered by the type column
 * @method     array findByPicture(string $picture) Return QuizQuestion objects filtered by the picture column
 * @method     array findByLevel(int $level) Return QuizQuestion objects filtered by the level column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseQuizQuestionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseQuizQuestionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'QuizQuestion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new QuizQuestionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    QuizQuestionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof QuizQuestionQuery) {
			return $criteria;
		}
		$query = new QuizQuestionQuery();
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
	 * @return    QuizQuestion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = QuizQuestionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(QuizQuestionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(QuizQuestionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(QuizQuestionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(QuizQuestionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the question column
	 * 
	 * @param     string $question The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByQuestion($question = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($question)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $question)) {
				$question = str_replace('*', '%', $question);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::QUESTION, $question, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(QuizQuestionPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the ponderation column
	 * 
	 * @param     double|array $ponderation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByPonderation($ponderation = null, $comparison = null)
	{
		if (is_array($ponderation)) {
			$useMinMax = false;
			if (isset($ponderation['min'])) {
				$this->addUsingAlias(QuizQuestionPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ponderation['max'])) {
				$this->addUsingAlias(QuizQuestionPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::PONDERATION, $ponderation, $comparison);
	}

	/**
	 * Filter the query on the position column
	 * 
	 * @param     int|array $position The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(QuizQuestionPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(QuizQuestionPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     int|array $type The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_array($type)) {
			$useMinMax = false;
			if (isset($type['min'])) {
				$this->addUsingAlias(QuizQuestionPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($type['max'])) {
				$this->addUsingAlias(QuizQuestionPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the picture column
	 * 
	 * @param     string $picture The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByPicture($picture = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($picture)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $picture)) {
				$picture = str_replace('*', '%', $picture);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::PICTURE, $picture, $comparison);
	}

	/**
	 * Filter the query on the level column
	 * 
	 * @param     int|array $level The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function filterByLevel($level = null, $comparison = null)
	{
		if (is_array($level)) {
			$useMinMax = false;
			if (isset($level['min'])) {
				$this->addUsingAlias(QuizQuestionPeer::LEVEL, $level['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($level['max'])) {
				$this->addUsingAlias(QuizQuestionPeer::LEVEL, $level['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizQuestionPeer::LEVEL, $level, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     QuizQuestion $quizQuestion Object to remove from the list of results
	 *
	 * @return    QuizQuestionQuery The current query, for fluid interface
	 */
	public function prune($quizQuestion = null)
	{
		if ($quizQuestion) {
			$this->addUsingAlias(QuizQuestionPeer::ID, $quizQuestion->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseQuizQuestionQuery
