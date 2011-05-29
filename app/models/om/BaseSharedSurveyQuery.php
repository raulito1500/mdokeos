<?php


/**
 * Base class that represents a query for the 'shared_survey' table.
 *
 * 
 *
 * @method     SharedSurveyQuery orderBySurveyId($order = Criteria::ASC) Order by the survey_id column
 * @method     SharedSurveyQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     SharedSurveyQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SharedSurveyQuery orderBySubtitle($order = Criteria::ASC) Order by the subtitle column
 * @method     SharedSurveyQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     SharedSurveyQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     SharedSurveyQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     SharedSurveyQuery orderByIntro($order = Criteria::ASC) Order by the intro column
 * @method     SharedSurveyQuery orderBySurveythanks($order = Criteria::ASC) Order by the surveythanks column
 * @method     SharedSurveyQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 * @method     SharedSurveyQuery orderByCourseCode($order = Criteria::ASC) Order by the course_code column
 *
 * @method     SharedSurveyQuery groupBySurveyId() Group by the survey_id column
 * @method     SharedSurveyQuery groupByCode() Group by the code column
 * @method     SharedSurveyQuery groupByTitle() Group by the title column
 * @method     SharedSurveyQuery groupBySubtitle() Group by the subtitle column
 * @method     SharedSurveyQuery groupByAuthor() Group by the author column
 * @method     SharedSurveyQuery groupByLang() Group by the lang column
 * @method     SharedSurveyQuery groupByTemplate() Group by the template column
 * @method     SharedSurveyQuery groupByIntro() Group by the intro column
 * @method     SharedSurveyQuery groupBySurveythanks() Group by the surveythanks column
 * @method     SharedSurveyQuery groupByCreationDate() Group by the creation_date column
 * @method     SharedSurveyQuery groupByCourseCode() Group by the course_code column
 *
 * @method     SharedSurveyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SharedSurveyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SharedSurveyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SharedSurvey findOne(PropelPDO $con = null) Return the first SharedSurvey matching the query
 * @method     SharedSurvey findOneOrCreate(PropelPDO $con = null) Return the first SharedSurvey matching the query, or a new SharedSurvey object populated from the query conditions when no match is found
 *
 * @method     SharedSurvey findOneBySurveyId(int $survey_id) Return the first SharedSurvey filtered by the survey_id column
 * @method     SharedSurvey findOneByCode(string $code) Return the first SharedSurvey filtered by the code column
 * @method     SharedSurvey findOneByTitle(string $title) Return the first SharedSurvey filtered by the title column
 * @method     SharedSurvey findOneBySubtitle(string $subtitle) Return the first SharedSurvey filtered by the subtitle column
 * @method     SharedSurvey findOneByAuthor(string $author) Return the first SharedSurvey filtered by the author column
 * @method     SharedSurvey findOneByLang(string $lang) Return the first SharedSurvey filtered by the lang column
 * @method     SharedSurvey findOneByTemplate(string $template) Return the first SharedSurvey filtered by the template column
 * @method     SharedSurvey findOneByIntro(string $intro) Return the first SharedSurvey filtered by the intro column
 * @method     SharedSurvey findOneBySurveythanks(string $surveythanks) Return the first SharedSurvey filtered by the surveythanks column
 * @method     SharedSurvey findOneByCreationDate(string $creation_date) Return the first SharedSurvey filtered by the creation_date column
 * @method     SharedSurvey findOneByCourseCode(string $course_code) Return the first SharedSurvey filtered by the course_code column
 *
 * @method     array findBySurveyId(int $survey_id) Return SharedSurvey objects filtered by the survey_id column
 * @method     array findByCode(string $code) Return SharedSurvey objects filtered by the code column
 * @method     array findByTitle(string $title) Return SharedSurvey objects filtered by the title column
 * @method     array findBySubtitle(string $subtitle) Return SharedSurvey objects filtered by the subtitle column
 * @method     array findByAuthor(string $author) Return SharedSurvey objects filtered by the author column
 * @method     array findByLang(string $lang) Return SharedSurvey objects filtered by the lang column
 * @method     array findByTemplate(string $template) Return SharedSurvey objects filtered by the template column
 * @method     array findByIntro(string $intro) Return SharedSurvey objects filtered by the intro column
 * @method     array findBySurveythanks(string $surveythanks) Return SharedSurvey objects filtered by the surveythanks column
 * @method     array findByCreationDate(string $creation_date) Return SharedSurvey objects filtered by the creation_date column
 * @method     array findByCourseCode(string $course_code) Return SharedSurvey objects filtered by the course_code column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSharedSurveyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSharedSurveyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SharedSurvey', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SharedSurveyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SharedSurveyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SharedSurveyQuery) {
			return $criteria;
		}
		$query = new SharedSurveyQuery();
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
	 * @return    SharedSurvey|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SharedSurveyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SharedSurveyPeer::SURVEY_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SharedSurveyPeer::SURVEY_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the survey_id column
	 * 
	 * @param     int|array $surveyId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function filterBySurveyId($surveyId = null, $comparison = null)
	{
		if (is_array($surveyId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SharedSurveyPeer::SURVEY_ID, $surveyId, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the subtitle column
	 * 
	 * @param     string $subtitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::SUBTITLE, $subtitle, $comparison);
	}

	/**
	 * Filter the query on the author column
	 * 
	 * @param     string $author The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::AUTHOR, $author, $comparison);
	}

	/**
	 * Filter the query on the lang column
	 * 
	 * @param     string $lang The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::LANG, $lang, $comparison);
	}

	/**
	 * Filter the query on the template column
	 * 
	 * @param     string $template The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::TEMPLATE, $template, $comparison);
	}

	/**
	 * Filter the query on the intro column
	 * 
	 * @param     string $intro The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::INTRO, $intro, $comparison);
	}

	/**
	 * Filter the query on the surveythanks column
	 * 
	 * @param     string $surveythanks The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SharedSurveyPeer::SURVEYTHANKS, $surveythanks, $comparison);
	}

	/**
	 * Filter the query on the creation_date column
	 * 
	 * @param     string|array $creationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function filterByCreationDate($creationDate = null, $comparison = null)
	{
		if (is_array($creationDate)) {
			$useMinMax = false;
			if (isset($creationDate['min'])) {
				$this->addUsingAlias(SharedSurveyPeer::CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creationDate['max'])) {
				$this->addUsingAlias(SharedSurveyPeer::CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SharedSurveyPeer::CREATION_DATE, $creationDate, $comparison);
	}

	/**
	 * Filter the query on the course_code column
	 * 
	 * @param     string $courseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function filterByCourseCode($courseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseCode)) {
				$courseCode = str_replace('*', '%', $courseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SharedSurveyPeer::COURSE_CODE, $courseCode, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SharedSurvey $sharedSurvey Object to remove from the list of results
	 *
	 * @return    SharedSurveyQuery The current query, for fluid interface
	 */
	public function prune($sharedSurvey = null)
	{
		if ($sharedSurvey) {
			$this->addUsingAlias(SharedSurveyPeer::SURVEY_ID, $sharedSurvey->getSurveyId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSharedSurveyQuery
