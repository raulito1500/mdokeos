<?php


/**
 * Base class that represents a query for the 'quiz_answer' table.
 *
 * 
 *
 * @method     QuizAnswerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     QuizAnswerQuery orderByQuestionId($order = Criteria::ASC) Order by the question_id column
 * @method     QuizAnswerQuery orderByAnswer($order = Criteria::ASC) Order by the answer column
 * @method     QuizAnswerQuery orderByCorrect($order = Criteria::ASC) Order by the correct column
 * @method     QuizAnswerQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     QuizAnswerQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method     QuizAnswerQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     QuizAnswerQuery orderByHotspotCoordinates($order = Criteria::ASC) Order by the hotspot_coordinates column
 * @method     QuizAnswerQuery orderByHotspotType($order = Criteria::ASC) Order by the hotspot_type column
 * @method     QuizAnswerQuery orderByDestination($order = Criteria::ASC) Order by the destination column
 *
 * @method     QuizAnswerQuery groupById() Group by the id column
 * @method     QuizAnswerQuery groupByQuestionId() Group by the question_id column
 * @method     QuizAnswerQuery groupByAnswer() Group by the answer column
 * @method     QuizAnswerQuery groupByCorrect() Group by the correct column
 * @method     QuizAnswerQuery groupByComment() Group by the comment column
 * @method     QuizAnswerQuery groupByPonderation() Group by the ponderation column
 * @method     QuizAnswerQuery groupByPosition() Group by the position column
 * @method     QuizAnswerQuery groupByHotspotCoordinates() Group by the hotspot_coordinates column
 * @method     QuizAnswerQuery groupByHotspotType() Group by the hotspot_type column
 * @method     QuizAnswerQuery groupByDestination() Group by the destination column
 *
 * @method     QuizAnswerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     QuizAnswerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     QuizAnswerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     QuizAnswer findOne(PropelPDO $con = null) Return the first QuizAnswer matching the query
 * @method     QuizAnswer findOneOrCreate(PropelPDO $con = null) Return the first QuizAnswer matching the query, or a new QuizAnswer object populated from the query conditions when no match is found
 *
 * @method     QuizAnswer findOneById(int $id) Return the first QuizAnswer filtered by the id column
 * @method     QuizAnswer findOneByQuestionId(int $question_id) Return the first QuizAnswer filtered by the question_id column
 * @method     QuizAnswer findOneByAnswer(string $answer) Return the first QuizAnswer filtered by the answer column
 * @method     QuizAnswer findOneByCorrect(int $correct) Return the first QuizAnswer filtered by the correct column
 * @method     QuizAnswer findOneByComment(string $comment) Return the first QuizAnswer filtered by the comment column
 * @method     QuizAnswer findOneByPonderation(double $ponderation) Return the first QuizAnswer filtered by the ponderation column
 * @method     QuizAnswer findOneByPosition(int $position) Return the first QuizAnswer filtered by the position column
 * @method     QuizAnswer findOneByHotspotCoordinates(string $hotspot_coordinates) Return the first QuizAnswer filtered by the hotspot_coordinates column
 * @method     QuizAnswer findOneByHotspotType(string $hotspot_type) Return the first QuizAnswer filtered by the hotspot_type column
 * @method     QuizAnswer findOneByDestination(string $destination) Return the first QuizAnswer filtered by the destination column
 *
 * @method     array findById(int $id) Return QuizAnswer objects filtered by the id column
 * @method     array findByQuestionId(int $question_id) Return QuizAnswer objects filtered by the question_id column
 * @method     array findByAnswer(string $answer) Return QuizAnswer objects filtered by the answer column
 * @method     array findByCorrect(int $correct) Return QuizAnswer objects filtered by the correct column
 * @method     array findByComment(string $comment) Return QuizAnswer objects filtered by the comment column
 * @method     array findByPonderation(double $ponderation) Return QuizAnswer objects filtered by the ponderation column
 * @method     array findByPosition(int $position) Return QuizAnswer objects filtered by the position column
 * @method     array findByHotspotCoordinates(string $hotspot_coordinates) Return QuizAnswer objects filtered by the hotspot_coordinates column
 * @method     array findByHotspotType(string $hotspot_type) Return QuizAnswer objects filtered by the hotspot_type column
 * @method     array findByDestination(string $destination) Return QuizAnswer objects filtered by the destination column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseQuizAnswerQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseQuizAnswerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'QuizAnswer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new QuizAnswerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    QuizAnswerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof QuizAnswerQuery) {
			return $criteria;
		}
		$query = new QuizAnswerQuery();
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
	 * @param     array[$id, $question_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    QuizAnswer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = QuizAnswerPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(QuizAnswerPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(QuizAnswerPeer::QUESTION_ID, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(QuizAnswerPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(QuizAnswerPeer::QUESTION_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(QuizAnswerPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(QuizAnswerPeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the question_id column
	 * 
	 * @param     int|array $questionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByQuestionId($questionId = null, $comparison = null)
	{
		if (is_array($questionId)) {
			$useMinMax = false;
			if (isset($questionId['min'])) {
				$this->addUsingAlias(QuizAnswerPeer::QUESTION_ID, $questionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($questionId['max'])) {
				$this->addUsingAlias(QuizAnswerPeer::QUESTION_ID, $questionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::QUESTION_ID, $questionId, $comparison);
	}

	/**
	 * Filter the query on the answer column
	 * 
	 * @param     string $answer The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByAnswer($answer = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($answer)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $answer)) {
				$answer = str_replace('*', '%', $answer);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::ANSWER, $answer, $comparison);
	}

	/**
	 * Filter the query on the correct column
	 * 
	 * @param     int|array $correct The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByCorrect($correct = null, $comparison = null)
	{
		if (is_array($correct)) {
			$useMinMax = false;
			if (isset($correct['min'])) {
				$this->addUsingAlias(QuizAnswerPeer::CORRECT, $correct['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($correct['max'])) {
				$this->addUsingAlias(QuizAnswerPeer::CORRECT, $correct['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::CORRECT, $correct, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the ponderation column
	 * 
	 * @param     double|array $ponderation The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByPonderation($ponderation = null, $comparison = null)
	{
		if (is_array($ponderation)) {
			$useMinMax = false;
			if (isset($ponderation['min'])) {
				$this->addUsingAlias(QuizAnswerPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ponderation['max'])) {
				$this->addUsingAlias(QuizAnswerPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::PONDERATION, $ponderation, $comparison);
	}

	/**
	 * Filter the query on the position column
	 * 
	 * @param     int|array $position The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByPosition($position = null, $comparison = null)
	{
		if (is_array($position)) {
			$useMinMax = false;
			if (isset($position['min'])) {
				$this->addUsingAlias(QuizAnswerPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($position['max'])) {
				$this->addUsingAlias(QuizAnswerPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::POSITION, $position, $comparison);
	}

	/**
	 * Filter the query on the hotspot_coordinates column
	 * 
	 * @param     string $hotspotCoordinates The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByHotspotCoordinates($hotspotCoordinates = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hotspotCoordinates)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hotspotCoordinates)) {
				$hotspotCoordinates = str_replace('*', '%', $hotspotCoordinates);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::HOTSPOT_COORDINATES, $hotspotCoordinates, $comparison);
	}

	/**
	 * Filter the query on the hotspot_type column
	 * 
	 * @param     string $hotspotType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByHotspotType($hotspotType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hotspotType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hotspotType)) {
				$hotspotType = str_replace('*', '%', $hotspotType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::HOTSPOT_TYPE, $hotspotType, $comparison);
	}

	/**
	 * Filter the query on the destination column
	 * 
	 * @param     string $destination The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function filterByDestination($destination = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($destination)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $destination)) {
				$destination = str_replace('*', '%', $destination);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QuizAnswerPeer::DESTINATION, $destination, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     QuizAnswer $quizAnswer Object to remove from the list of results
	 *
	 * @return    QuizAnswerQuery The current query, for fluid interface
	 */
	public function prune($quizAnswer = null)
	{
		if ($quizAnswer) {
			$this->addCond('pruneCond0', $this->getAliasedColName(QuizAnswerPeer::ID), $quizAnswer->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(QuizAnswerPeer::QUESTION_ID), $quizAnswer->getQuestionId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BaseQuizAnswerQuery
