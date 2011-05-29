<?php


/**
 * Base class that represents a query for the 'survey_invitation' table.
 *
 * 
 *
 * @method     SurveyInvitationQuery orderBySurveyInvitationId($order = Criteria::ASC) Order by the survey_invitation_id column
 * @method     SurveyInvitationQuery orderBySurveyCode($order = Criteria::ASC) Order by the survey_code column
 * @method     SurveyInvitationQuery orderByUser($order = Criteria::ASC) Order by the user column
 * @method     SurveyInvitationQuery orderByInvitationCode($order = Criteria::ASC) Order by the invitation_code column
 * @method     SurveyInvitationQuery orderByInvitationDate($order = Criteria::ASC) Order by the invitation_date column
 * @method     SurveyInvitationQuery orderByReminderDate($order = Criteria::ASC) Order by the reminder_date column
 * @method     SurveyInvitationQuery orderByAnswered($order = Criteria::ASC) Order by the answered column
 * @method     SurveyInvitationQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     SurveyInvitationQuery groupBySurveyInvitationId() Group by the survey_invitation_id column
 * @method     SurveyInvitationQuery groupBySurveyCode() Group by the survey_code column
 * @method     SurveyInvitationQuery groupByUser() Group by the user column
 * @method     SurveyInvitationQuery groupByInvitationCode() Group by the invitation_code column
 * @method     SurveyInvitationQuery groupByInvitationDate() Group by the invitation_date column
 * @method     SurveyInvitationQuery groupByReminderDate() Group by the reminder_date column
 * @method     SurveyInvitationQuery groupByAnswered() Group by the answered column
 * @method     SurveyInvitationQuery groupBySessionId() Group by the session_id column
 *
 * @method     SurveyInvitationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyInvitationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyInvitationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SurveyInvitation findOne(PropelPDO $con = null) Return the first SurveyInvitation matching the query
 * @method     SurveyInvitation findOneOrCreate(PropelPDO $con = null) Return the first SurveyInvitation matching the query, or a new SurveyInvitation object populated from the query conditions when no match is found
 *
 * @method     SurveyInvitation findOneBySurveyInvitationId(int $survey_invitation_id) Return the first SurveyInvitation filtered by the survey_invitation_id column
 * @method     SurveyInvitation findOneBySurveyCode(string $survey_code) Return the first SurveyInvitation filtered by the survey_code column
 * @method     SurveyInvitation findOneByUser(string $user) Return the first SurveyInvitation filtered by the user column
 * @method     SurveyInvitation findOneByInvitationCode(string $invitation_code) Return the first SurveyInvitation filtered by the invitation_code column
 * @method     SurveyInvitation findOneByInvitationDate(string $invitation_date) Return the first SurveyInvitation filtered by the invitation_date column
 * @method     SurveyInvitation findOneByReminderDate(string $reminder_date) Return the first SurveyInvitation filtered by the reminder_date column
 * @method     SurveyInvitation findOneByAnswered(int $answered) Return the first SurveyInvitation filtered by the answered column
 * @method     SurveyInvitation findOneBySessionId(int $session_id) Return the first SurveyInvitation filtered by the session_id column
 *
 * @method     array findBySurveyInvitationId(int $survey_invitation_id) Return SurveyInvitation objects filtered by the survey_invitation_id column
 * @method     array findBySurveyCode(string $survey_code) Return SurveyInvitation objects filtered by the survey_code column
 * @method     array findByUser(string $user) Return SurveyInvitation objects filtered by the user column
 * @method     array findByInvitationCode(string $invitation_code) Return SurveyInvitation objects filtered by the invitation_code column
 * @method     array findByInvitationDate(string $invitation_date) Return SurveyInvitation objects filtered by the invitation_date column
 * @method     array findByReminderDate(string $reminder_date) Return SurveyInvitation objects filtered by the reminder_date column
 * @method     array findByAnswered(int $answered) Return SurveyInvitation objects filtered by the answered column
 * @method     array findBySessionId(int $session_id) Return SurveyInvitation objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyInvitationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyInvitationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SurveyInvitation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyInvitationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyInvitationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyInvitationQuery) {
			return $criteria;
		}
		$query = new SurveyInvitationQuery();
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
	 * @return    SurveyInvitation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyInvitationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyInvitationPeer::SURVEY_INVITATION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyInvitationPeer::SURVEY_INVITATION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the survey_invitation_id column
	 * 
	 * @param     int|array $surveyInvitationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterBySurveyInvitationId($surveyInvitationId = null, $comparison = null)
	{
		if (is_array($surveyInvitationId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyInvitationPeer::SURVEY_INVITATION_ID, $surveyInvitationId, $comparison);
	}

	/**
	 * Filter the query on the survey_code column
	 * 
	 * @param     string $surveyCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterBySurveyCode($surveyCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($surveyCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $surveyCode)) {
				$surveyCode = str_replace('*', '%', $surveyCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::SURVEY_CODE, $surveyCode, $comparison);
	}

	/**
	 * Filter the query on the user column
	 * 
	 * @param     string $user The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByUser($user = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user)) {
				$user = str_replace('*', '%', $user);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::USER, $user, $comparison);
	}

	/**
	 * Filter the query on the invitation_code column
	 * 
	 * @param     string $invitationCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByInvitationCode($invitationCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($invitationCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $invitationCode)) {
				$invitationCode = str_replace('*', '%', $invitationCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::INVITATION_CODE, $invitationCode, $comparison);
	}

	/**
	 * Filter the query on the invitation_date column
	 * 
	 * @param     string|array $invitationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByInvitationDate($invitationDate = null, $comparison = null)
	{
		if (is_array($invitationDate)) {
			$useMinMax = false;
			if (isset($invitationDate['min'])) {
				$this->addUsingAlias(SurveyInvitationPeer::INVITATION_DATE, $invitationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($invitationDate['max'])) {
				$this->addUsingAlias(SurveyInvitationPeer::INVITATION_DATE, $invitationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::INVITATION_DATE, $invitationDate, $comparison);
	}

	/**
	 * Filter the query on the reminder_date column
	 * 
	 * @param     string|array $reminderDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByReminderDate($reminderDate = null, $comparison = null)
	{
		if (is_array($reminderDate)) {
			$useMinMax = false;
			if (isset($reminderDate['min'])) {
				$this->addUsingAlias(SurveyInvitationPeer::REMINDER_DATE, $reminderDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reminderDate['max'])) {
				$this->addUsingAlias(SurveyInvitationPeer::REMINDER_DATE, $reminderDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::REMINDER_DATE, $reminderDate, $comparison);
	}

	/**
	 * Filter the query on the answered column
	 * 
	 * @param     int|array $answered The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterByAnswered($answered = null, $comparison = null)
	{
		if (is_array($answered)) {
			$useMinMax = false;
			if (isset($answered['min'])) {
				$this->addUsingAlias(SurveyInvitationPeer::ANSWERED, $answered['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($answered['max'])) {
				$this->addUsingAlias(SurveyInvitationPeer::ANSWERED, $answered['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::ANSWERED, $answered, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(SurveyInvitationPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(SurveyInvitationPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyInvitationPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SurveyInvitation $surveyInvitation Object to remove from the list of results
	 *
	 * @return    SurveyInvitationQuery The current query, for fluid interface
	 */
	public function prune($surveyInvitation = null)
	{
		if ($surveyInvitation) {
			$this->addUsingAlias(SurveyInvitationPeer::SURVEY_INVITATION_ID, $surveyInvitation->getSurveyInvitationId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyInvitationQuery
