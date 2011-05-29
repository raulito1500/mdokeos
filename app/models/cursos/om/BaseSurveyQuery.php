<?php


/**
 * Base class that represents a query for the 'survey' table.
 *
 * 
 *
 * @method     SurveyQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SurveyQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SurveyQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SurveyQuery orderBySubtitle($order = Criteria::ASC) Order by the subtitle column
 * @method     SurveyQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     SurveyQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     SurveyQuery orderByAvailFrom($order = Criteria::ASC) Order by the avail_from column
 * @method     SurveyQuery orderByAvailTill($order = Criteria::ASC) Order by the avail_till column
 * @method     SurveyQuery orderByIsShared($order = Criteria::ASC) Order by the is_shared column
 * @method     SurveyQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     SurveyQuery orderByIntro($order = Criteria::ASC) Order by the intro column
 * @method     SurveyQuery orderBySurveythanks($order = Criteria::ASC) Order by the surveythanks column
 * @method     SurveyQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 * @method     SurveyQuery orderByInvited($order = Criteria::ASC) Order by the invited column
 * @method     SurveyQuery orderByAnswered($order = Criteria::ASC) Order by the answered column
 * @method     SurveyQuery orderByInviteMail($order = Criteria::ASC) Order by the invite_mail column
 * @method     SurveyQuery orderByReminderMail($order = Criteria::ASC) Order by the reminder_mail column
 * @method     SurveyQuery orderByMailSubject($order = Criteria::ASC) Order by the mail_subject column
 * @method     SurveyQuery orderByAnonymous($order = Criteria::ASC) Order by the anonymous column
 * @method     SurveyQuery orderByAccessCondition($order = Criteria::ASC) Order by the access_condition column
 * @method     SurveyQuery orderByShuffle($order = Criteria::ASC) Order by the shuffle column
 * @method     SurveyQuery orderByOneQuestionPerPage($order = Criteria::ASC) Order by the one_question_per_page column
 * @method     SurveyQuery orderBySurveyVersion($order = Criteria::ASC) Order by the survey_version column
 * @method     SurveyQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     SurveyQuery orderBySurveyType($order = Criteria::ASC) Order by the survey_type column
 * @method     SurveyQuery orderByShowFormProfile($order = Criteria::ASC) Order by the show_form_profile column
 * @method     SurveyQuery orderByFormFields($order = Criteria::ASC) Order by the form_fields column
 * @method     SurveyQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     SurveyQuery groupBySurveyId() Group by the survey_id column
 * @method     SurveyQuery groupByCode() Group by the code column
 * @method     SurveyQuery groupByTitle() Group by the title column
 * @method     SurveyQuery groupBySubtitle() Group by the subtitle column
 * @method     SurveyQuery groupByAuthor() Group by the author column
 * @method     SurveyQuery groupByLang() Group by the lang column
 * @method     SurveyQuery groupByAvailFrom() Group by the avail_from column
 * @method     SurveyQuery groupByAvailTill() Group by the avail_till column
 * @method     SurveyQuery groupByIsShared() Group by the is_shared column
 * @method     SurveyQuery groupByTemplate() Group by the template column
 * @method     SurveyQuery groupByIntro() Group by the intro column
 * @method     SurveyQuery groupBySurveythanks() Group by the surveythanks column
 * @method     SurveyQuery groupByCreationDate() Group by the creation_date column
 * @method     SurveyQuery groupByInvited() Group by the invited column
 * @method     SurveyQuery groupByAnswered() Group by the answered column
 * @method     SurveyQuery groupByInviteMail() Group by the invite_mail column
 * @method     SurveyQuery groupByReminderMail() Group by the reminder_mail column
 * @method     SurveyQuery groupByMailSubject() Group by the mail_subject column
 * @method     SurveyQuery groupByAnonymous() Group by the anonymous column
 * @method     SurveyQuery groupByAccessCondition() Group by the access_condition column
 * @method     SurveyQuery groupByShuffle() Group by the shuffle column
 * @method     SurveyQuery groupByOneQuestionPerPage() Group by the one_question_per_page column
 * @method     SurveyQuery groupBySurveyVersion() Group by the survey_version column
 * @method     SurveyQuery groupByParentId() Group by the parent_id column
 * @method     SurveyQuery groupBySurveyType() Group by the survey_type column
 * @method     SurveyQuery groupByShowFormProfile() Group by the show_form_profile column
 * @method     SurveyQuery groupByFormFields() Group by the form_fields column
 * @method     SurveyQuery groupBySessionId() Group by the session_id column
 *
 * @method     SurveyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SurveyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SurveyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Survey findOne(PropelPDO $con = null) Return the first Survey matching the query
 * @method     Survey findOneOrCreate(PropelPDO $con = null) Return the first Survey matching the query, or a new Survey object populated from the query conditions when no match is found
 *
 * @method     Survey findOneBySurveyId(int $survey_id) Return the first Survey filtered by the survey_id column
 * @method     Survey findOneByCode(string $code) Return the first Survey filtered by the code column
 * @method     Survey findOneByTitle(string $title) Return the first Survey filtered by the title column
 * @method     Survey findOneBySubtitle(string $subtitle) Return the first Survey filtered by the subtitle column
 * @method     Survey findOneByAuthor(string $author) Return the first Survey filtered by the author column
 * @method     Survey findOneByLang(string $lang) Return the first Survey filtered by the lang column
 * @method     Survey findOneByAvailFrom(string $avail_from) Return the first Survey filtered by the avail_from column
 * @method     Survey findOneByAvailTill(string $avail_till) Return the first Survey filtered by the avail_till column
 * @method     Survey findOneByIsShared(string $is_shared) Return the first Survey filtered by the is_shared column
 * @method     Survey findOneByTemplate(string $template) Return the first Survey filtered by the template column
 * @method     Survey findOneByIntro(string $intro) Return the first Survey filtered by the intro column
 * @method     Survey findOneBySurveythanks(string $surveythanks) Return the first Survey filtered by the surveythanks column
 * @method     Survey findOneByCreationDate(string $creation_date) Return the first Survey filtered by the creation_date column
 * @method     Survey findOneByInvited(int $invited) Return the first Survey filtered by the invited column
 * @method     Survey findOneByAnswered(int $answered) Return the first Survey filtered by the answered column
 * @method     Survey findOneByInviteMail(string $invite_mail) Return the first Survey filtered by the invite_mail column
 * @method     Survey findOneByReminderMail(string $reminder_mail) Return the first Survey filtered by the reminder_mail column
 * @method     Survey findOneByMailSubject(string $mail_subject) Return the first Survey filtered by the mail_subject column
 * @method     Survey findOneByAnonymous(string $anonymous) Return the first Survey filtered by the anonymous column
 * @method     Survey findOneByAccessCondition(string $access_condition) Return the first Survey filtered by the access_condition column
 * @method     Survey findOneByShuffle(int $shuffle) Return the first Survey filtered by the shuffle column
 * @method     Survey findOneByOneQuestionPerPage(int $one_question_per_page) Return the first Survey filtered by the one_question_per_page column
 * @method     Survey findOneBySurveyVersion(string $survey_version) Return the first Survey filtered by the survey_version column
 * @method     Survey findOneByParentId(int $parent_id) Return the first Survey filtered by the parent_id column
 * @method     Survey findOneBySurveyType(int $survey_type) Return the first Survey filtered by the survey_type column
 * @method     Survey findOneByShowFormProfile(int $show_form_profile) Return the first Survey filtered by the show_form_profile column
 * @method     Survey findOneByFormFields(string $form_fields) Return the first Survey filtered by the form_fields column
 * @method     Survey findOneBySessionId(int $session_id) Return the first Survey filtered by the session_id column
 *
 * @method     array findBySurveyId(int $survey_id) Return Survey objects filtered by the survey_id column
 * @method     array findByCode(string $code) Return Survey objects filtered by the code column
 * @method     array findByTitle(string $title) Return Survey objects filtered by the title column
 * @method     array findBySubtitle(string $subtitle) Return Survey objects filtered by the subtitle column
 * @method     array findByAuthor(string $author) Return Survey objects filtered by the author column
 * @method     array findByLang(string $lang) Return Survey objects filtered by the lang column
 * @method     array findByAvailFrom(string $avail_from) Return Survey objects filtered by the avail_from column
 * @method     array findByAvailTill(string $avail_till) Return Survey objects filtered by the avail_till column
 * @method     array findByIsShared(string $is_shared) Return Survey objects filtered by the is_shared column
 * @method     array findByTemplate(string $template) Return Survey objects filtered by the template column
 * @method     array findByIntro(string $intro) Return Survey objects filtered by the intro column
 * @method     array findBySurveythanks(string $surveythanks) Return Survey objects filtered by the surveythanks column
 * @method     array findByCreationDate(string $creation_date) Return Survey objects filtered by the creation_date column
 * @method     array findByInvited(int $invited) Return Survey objects filtered by the invited column
 * @method     array findByAnswered(int $answered) Return Survey objects filtered by the answered column
 * @method     array findByInviteMail(string $invite_mail) Return Survey objects filtered by the invite_mail column
 * @method     array findByReminderMail(string $reminder_mail) Return Survey objects filtered by the reminder_mail column
 * @method     array findByMailSubject(string $mail_subject) Return Survey objects filtered by the mail_subject column
 * @method     array findByAnonymous(string $anonymous) Return Survey objects filtered by the anonymous column
 * @method     array findByAccessCondition(string $access_condition) Return Survey objects filtered by the access_condition column
 * @method     array findByShuffle(int $shuffle) Return Survey objects filtered by the shuffle column
 * @method     array findByOneQuestionPerPage(int $one_question_per_page) Return Survey objects filtered by the one_question_per_page column
 * @method     array findBySurveyVersion(string $survey_version) Return Survey objects filtered by the survey_version column
 * @method     array findByParentId(int $parent_id) Return Survey objects filtered by the parent_id column
 * @method     array findBySurveyType(int $survey_type) Return Survey objects filtered by the survey_type column
 * @method     array findByShowFormProfile(int $show_form_profile) Return Survey objects filtered by the show_form_profile column
 * @method     array findByFormFields(string $form_fields) Return Survey objects filtered by the form_fields column
 * @method     array findBySessionId(int $session_id) Return Survey objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSurveyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSurveyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Survey', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SurveyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SurveyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SurveyQuery) {
			return $criteria;
		}
		$query = new SurveyQuery();
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
	 * @return    Survey|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SurveyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SurveyPeer::SURVEY_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SurveyPeer::SURVEY_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SurveyPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SurveyPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the subtitle column
	 * 
	 * @param     string $subtitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySubtitle($subtitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subtitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subtitle)) {
				$subtitle = str_replace('*', '%', $subtitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SUBTITLE, $subtitle, $comparison);
	}

	/**
	 * Filter the query on the author column
	 * 
	 * @param     string $author The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAuthor($author = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($author)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $author)) {
				$author = str_replace('*', '%', $author);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::AUTHOR, $author, $comparison);
	}

	/**
	 * Filter the query on the lang column
	 * 
	 * @param     string $lang The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByLang($lang = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lang)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lang)) {
				$lang = str_replace('*', '%', $lang);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::LANG, $lang, $comparison);
	}

	/**
	 * Filter the query on the avail_from column
	 * 
	 * @param     string|array $availFrom The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAvailFrom($availFrom = null, $comparison = null)
	{
		if (is_array($availFrom)) {
			$useMinMax = false;
			if (isset($availFrom['min'])) {
				$this->addUsingAlias(SurveyPeer::AVAIL_FROM, $availFrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($availFrom['max'])) {
				$this->addUsingAlias(SurveyPeer::AVAIL_FROM, $availFrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::AVAIL_FROM, $availFrom, $comparison);
	}

	/**
	 * Filter the query on the avail_till column
	 * 
	 * @param     string|array $availTill The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAvailTill($availTill = null, $comparison = null)
	{
		if (is_array($availTill)) {
			$useMinMax = false;
			if (isset($availTill['min'])) {
				$this->addUsingAlias(SurveyPeer::AVAIL_TILL, $availTill['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($availTill['max'])) {
				$this->addUsingAlias(SurveyPeer::AVAIL_TILL, $availTill['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::AVAIL_TILL, $availTill, $comparison);
	}

	/**
	 * Filter the query on the is_shared column
	 * 
	 * @param     string $isShared The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByIsShared($isShared = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isShared)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isShared)) {
				$isShared = str_replace('*', '%', $isShared);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::IS_SHARED, $isShared, $comparison);
	}

	/**
	 * Filter the query on the template column
	 * 
	 * @param     string $template The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($template)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $template)) {
				$template = str_replace('*', '%', $template);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::TEMPLATE, $template, $comparison);
	}

	/**
	 * Filter the query on the intro column
	 * 
	 * @param     string $intro The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByIntro($intro = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($intro)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $intro)) {
				$intro = str_replace('*', '%', $intro);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::INTRO, $intro, $comparison);
	}

	/**
	 * Filter the query on the surveythanks column
	 * 
	 * @param     string $surveythanks The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySurveythanks($surveythanks = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($surveythanks)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $surveythanks)) {
				$surveythanks = str_replace('*', '%', $surveythanks);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SURVEYTHANKS, $surveythanks, $comparison);
	}

	/**
	 * Filter the query on the creation_date column
	 * 
	 * @param     string|array $creationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByCreationDate($creationDate = null, $comparison = null)
	{
		if (is_array($creationDate)) {
			$useMinMax = false;
			if (isset($creationDate['min'])) {
				$this->addUsingAlias(SurveyPeer::CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creationDate['max'])) {
				$this->addUsingAlias(SurveyPeer::CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::CREATION_DATE, $creationDate, $comparison);
	}

	/**
	 * Filter the query on the invited column
	 * 
	 * @param     int|array $invited The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByInvited($invited = null, $comparison = null)
	{
		if (is_array($invited)) {
			$useMinMax = false;
			if (isset($invited['min'])) {
				$this->addUsingAlias(SurveyPeer::INVITED, $invited['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($invited['max'])) {
				$this->addUsingAlias(SurveyPeer::INVITED, $invited['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::INVITED, $invited, $comparison);
	}

	/**
	 * Filter the query on the answered column
	 * 
	 * @param     int|array $answered The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAnswered($answered = null, $comparison = null)
	{
		if (is_array($answered)) {
			$useMinMax = false;
			if (isset($answered['min'])) {
				$this->addUsingAlias(SurveyPeer::ANSWERED, $answered['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($answered['max'])) {
				$this->addUsingAlias(SurveyPeer::ANSWERED, $answered['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::ANSWERED, $answered, $comparison);
	}

	/**
	 * Filter the query on the invite_mail column
	 * 
	 * @param     string $inviteMail The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByInviteMail($inviteMail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($inviteMail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $inviteMail)) {
				$inviteMail = str_replace('*', '%', $inviteMail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::INVITE_MAIL, $inviteMail, $comparison);
	}

	/**
	 * Filter the query on the reminder_mail column
	 * 
	 * @param     string $reminderMail The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByReminderMail($reminderMail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($reminderMail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $reminderMail)) {
				$reminderMail = str_replace('*', '%', $reminderMail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::REMINDER_MAIL, $reminderMail, $comparison);
	}

	/**
	 * Filter the query on the mail_subject column
	 * 
	 * @param     string $mailSubject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByMailSubject($mailSubject = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mailSubject)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mailSubject)) {
				$mailSubject = str_replace('*', '%', $mailSubject);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::MAIL_SUBJECT, $mailSubject, $comparison);
	}

	/**
	 * Filter the query on the anonymous column
	 * 
	 * @param     string $anonymous The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAnonymous($anonymous = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($anonymous)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $anonymous)) {
				$anonymous = str_replace('*', '%', $anonymous);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::ANONYMOUS, $anonymous, $comparison);
	}

	/**
	 * Filter the query on the access_condition column
	 * 
	 * @param     string $accessCondition The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByAccessCondition($accessCondition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($accessCondition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $accessCondition)) {
				$accessCondition = str_replace('*', '%', $accessCondition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::ACCESS_CONDITION, $accessCondition, $comparison);
	}

	/**
	 * Filter the query on the shuffle column
	 * 
	 * @param     int|array $shuffle The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByShuffle($shuffle = null, $comparison = null)
	{
		if (is_array($shuffle)) {
			$useMinMax = false;
			if (isset($shuffle['min'])) {
				$this->addUsingAlias(SurveyPeer::SHUFFLE, $shuffle['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($shuffle['max'])) {
				$this->addUsingAlias(SurveyPeer::SHUFFLE, $shuffle['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SHUFFLE, $shuffle, $comparison);
	}

	/**
	 * Filter the query on the one_question_per_page column
	 * 
	 * @param     int|array $oneQuestionPerPage The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByOneQuestionPerPage($oneQuestionPerPage = null, $comparison = null)
	{
		if (is_array($oneQuestionPerPage)) {
			$useMinMax = false;
			if (isset($oneQuestionPerPage['min'])) {
				$this->addUsingAlias(SurveyPeer::ONE_QUESTION_PER_PAGE, $oneQuestionPerPage['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($oneQuestionPerPage['max'])) {
				$this->addUsingAlias(SurveyPeer::ONE_QUESTION_PER_PAGE, $oneQuestionPerPage['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::ONE_QUESTION_PER_PAGE, $oneQuestionPerPage, $comparison);
	}

	/**
	 * Filter the query on the survey_version column
	 * 
	 * @param     string $surveyVersion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySurveyVersion($surveyVersion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($surveyVersion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $surveyVersion)) {
				$surveyVersion = str_replace('*', '%', $surveyVersion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SURVEY_VERSION, $surveyVersion, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(SurveyPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(SurveyPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the survey_type column
	 * 
	 * @param     int|array $surveyType The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySurveyType($surveyType = null, $comparison = null)
	{
		if (is_array($surveyType)) {
			$useMinMax = false;
			if (isset($surveyType['min'])) {
				$this->addUsingAlias(SurveyPeer::SURVEY_TYPE, $surveyType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($surveyType['max'])) {
				$this->addUsingAlias(SurveyPeer::SURVEY_TYPE, $surveyType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SURVEY_TYPE, $surveyType, $comparison);
	}

	/**
	 * Filter the query on the show_form_profile column
	 * 
	 * @param     int|array $showFormProfile The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByShowFormProfile($showFormProfile = null, $comparison = null)
	{
		if (is_array($showFormProfile)) {
			$useMinMax = false;
			if (isset($showFormProfile['min'])) {
				$this->addUsingAlias(SurveyPeer::SHOW_FORM_PROFILE, $showFormProfile['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($showFormProfile['max'])) {
				$this->addUsingAlias(SurveyPeer::SHOW_FORM_PROFILE, $showFormProfile['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SHOW_FORM_PROFILE, $showFormProfile, $comparison);
	}

	/**
	 * Filter the query on the form_fields column
	 * 
	 * @param     string $formFields The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterByFormFields($formFields = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($formFields)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $formFields)) {
				$formFields = str_replace('*', '%', $formFields);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SurveyPeer::FORM_FIELDS, $formFields, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(SurveyPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(SurveyPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SurveyPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Survey $survey Object to remove from the list of results
	 *
	 * @return    SurveyQuery The current query, for fluid interface
	 */
	public function prune($survey = null)
	{
		if ($survey) {
			$this->addUsingAlias(SurveyPeer::SURVEY_ID, $survey->getSurveyId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSurveyQuery
