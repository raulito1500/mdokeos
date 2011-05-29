<?php


/**
 * Base class that represents a query for the 'course' table.
 *
 * 
 *
 * @method     CourseQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     CourseQuery orderByDirectory($order = Criteria::ASC) Order by the directory column
 * @method     CourseQuery orderByDbName($order = Criteria::ASC) Order by the db_name column
 * @method     CourseQuery orderByCourseLanguage($order = Criteria::ASC) Order by the course_language column
 * @method     CourseQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CourseQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CourseQuery orderByCategoryCode($order = Criteria::ASC) Order by the category_code column
 * @method     CourseQuery orderByVisibility($order = Criteria::ASC) Order by the visibility column
 * @method     CourseQuery orderByShowScore($order = Criteria::ASC) Order by the show_score column
 * @method     CourseQuery orderByTutorName($order = Criteria::ASC) Order by the tutor_name column
 * @method     CourseQuery orderByVisualCode($order = Criteria::ASC) Order by the visual_code column
 * @method     CourseQuery orderByDepartmentName($order = Criteria::ASC) Order by the department_name column
 * @method     CourseQuery orderByDepartmentUrl($order = Criteria::ASC) Order by the department_url column
 * @method     CourseQuery orderByDiskQuota($order = Criteria::ASC) Order by the disk_quota column
 * @method     CourseQuery orderByLastVisit($order = Criteria::ASC) Order by the last_visit column
 * @method     CourseQuery orderByLastEdit($order = Criteria::ASC) Order by the last_edit column
 * @method     CourseQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 * @method     CourseQuery orderByExpirationDate($order = Criteria::ASC) Order by the expiration_date column
 * @method     CourseQuery orderByTargetCourseCode($order = Criteria::ASC) Order by the target_course_code column
 * @method     CourseQuery orderBySubscribe($order = Criteria::ASC) Order by the subscribe column
 * @method     CourseQuery orderByUnsubscribe($order = Criteria::ASC) Order by the unsubscribe column
 * @method     CourseQuery orderByRegistrationCode($order = Criteria::ASC) Order by the registration_code column
 *
 * @method     CourseQuery groupByCode() Group by the code column
 * @method     CourseQuery groupByDirectory() Group by the directory column
 * @method     CourseQuery groupByDbName() Group by the db_name column
 * @method     CourseQuery groupByCourseLanguage() Group by the course_language column
 * @method     CourseQuery groupByTitle() Group by the title column
 * @method     CourseQuery groupByDescription() Group by the description column
 * @method     CourseQuery groupByCategoryCode() Group by the category_code column
 * @method     CourseQuery groupByVisibility() Group by the visibility column
 * @method     CourseQuery groupByShowScore() Group by the show_score column
 * @method     CourseQuery groupByTutorName() Group by the tutor_name column
 * @method     CourseQuery groupByVisualCode() Group by the visual_code column
 * @method     CourseQuery groupByDepartmentName() Group by the department_name column
 * @method     CourseQuery groupByDepartmentUrl() Group by the department_url column
 * @method     CourseQuery groupByDiskQuota() Group by the disk_quota column
 * @method     CourseQuery groupByLastVisit() Group by the last_visit column
 * @method     CourseQuery groupByLastEdit() Group by the last_edit column
 * @method     CourseQuery groupByCreationDate() Group by the creation_date column
 * @method     CourseQuery groupByExpirationDate() Group by the expiration_date column
 * @method     CourseQuery groupByTargetCourseCode() Group by the target_course_code column
 * @method     CourseQuery groupBySubscribe() Group by the subscribe column
 * @method     CourseQuery groupByUnsubscribe() Group by the unsubscribe column
 * @method     CourseQuery groupByRegistrationCode() Group by the registration_code column
 *
 * @method     CourseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CourseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CourseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Course findOne(PropelPDO $con = null) Return the first Course matching the query
 * @method     Course findOneOrCreate(PropelPDO $con = null) Return the first Course matching the query, or a new Course object populated from the query conditions when no match is found
 *
 * @method     Course findOneByCode(string $code) Return the first Course filtered by the code column
 * @method     Course findOneByDirectory(string $directory) Return the first Course filtered by the directory column
 * @method     Course findOneByDbName(string $db_name) Return the first Course filtered by the db_name column
 * @method     Course findOneByCourseLanguage(string $course_language) Return the first Course filtered by the course_language column
 * @method     Course findOneByTitle(string $title) Return the first Course filtered by the title column
 * @method     Course findOneByDescription(string $description) Return the first Course filtered by the description column
 * @method     Course findOneByCategoryCode(string $category_code) Return the first Course filtered by the category_code column
 * @method     Course findOneByVisibility(int $visibility) Return the first Course filtered by the visibility column
 * @method     Course findOneByShowScore(int $show_score) Return the first Course filtered by the show_score column
 * @method     Course findOneByTutorName(string $tutor_name) Return the first Course filtered by the tutor_name column
 * @method     Course findOneByVisualCode(string $visual_code) Return the first Course filtered by the visual_code column
 * @method     Course findOneByDepartmentName(string $department_name) Return the first Course filtered by the department_name column
 * @method     Course findOneByDepartmentUrl(string $department_url) Return the first Course filtered by the department_url column
 * @method     Course findOneByDiskQuota(int $disk_quota) Return the first Course filtered by the disk_quota column
 * @method     Course findOneByLastVisit(string $last_visit) Return the first Course filtered by the last_visit column
 * @method     Course findOneByLastEdit(string $last_edit) Return the first Course filtered by the last_edit column
 * @method     Course findOneByCreationDate(string $creation_date) Return the first Course filtered by the creation_date column
 * @method     Course findOneByExpirationDate(string $expiration_date) Return the first Course filtered by the expiration_date column
 * @method     Course findOneByTargetCourseCode(string $target_course_code) Return the first Course filtered by the target_course_code column
 * @method     Course findOneBySubscribe(int $subscribe) Return the first Course filtered by the subscribe column
 * @method     Course findOneByUnsubscribe(int $unsubscribe) Return the first Course filtered by the unsubscribe column
 * @method     Course findOneByRegistrationCode(string $registration_code) Return the first Course filtered by the registration_code column
 *
 * @method     array findByCode(string $code) Return Course objects filtered by the code column
 * @method     array findByDirectory(string $directory) Return Course objects filtered by the directory column
 * @method     array findByDbName(string $db_name) Return Course objects filtered by the db_name column
 * @method     array findByCourseLanguage(string $course_language) Return Course objects filtered by the course_language column
 * @method     array findByTitle(string $title) Return Course objects filtered by the title column
 * @method     array findByDescription(string $description) Return Course objects filtered by the description column
 * @method     array findByCategoryCode(string $category_code) Return Course objects filtered by the category_code column
 * @method     array findByVisibility(int $visibility) Return Course objects filtered by the visibility column
 * @method     array findByShowScore(int $show_score) Return Course objects filtered by the show_score column
 * @method     array findByTutorName(string $tutor_name) Return Course objects filtered by the tutor_name column
 * @method     array findByVisualCode(string $visual_code) Return Course objects filtered by the visual_code column
 * @method     array findByDepartmentName(string $department_name) Return Course objects filtered by the department_name column
 * @method     array findByDepartmentUrl(string $department_url) Return Course objects filtered by the department_url column
 * @method     array findByDiskQuota(int $disk_quota) Return Course objects filtered by the disk_quota column
 * @method     array findByLastVisit(string $last_visit) Return Course objects filtered by the last_visit column
 * @method     array findByLastEdit(string $last_edit) Return Course objects filtered by the last_edit column
 * @method     array findByCreationDate(string $creation_date) Return Course objects filtered by the creation_date column
 * @method     array findByExpirationDate(string $expiration_date) Return Course objects filtered by the expiration_date column
 * @method     array findByTargetCourseCode(string $target_course_code) Return Course objects filtered by the target_course_code column
 * @method     array findBySubscribe(int $subscribe) Return Course objects filtered by the subscribe column
 * @method     array findByUnsubscribe(int $unsubscribe) Return Course objects filtered by the unsubscribe column
 * @method     array findByRegistrationCode(string $registration_code) Return Course objects filtered by the registration_code column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseCourseQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCourseQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Course', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CourseQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CourseQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CourseQuery) {
			return $criteria;
		}
		$query = new CourseQuery();
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
	 * @return    Course|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CoursePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CoursePeer::CODE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CoursePeer::CODE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CoursePeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the directory column
	 * 
	 * @param     string $directory The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByDirectory($directory = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($directory)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $directory)) {
				$directory = str_replace('*', '%', $directory);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::DIRECTORY, $directory, $comparison);
	}

	/**
	 * Filter the query on the db_name column
	 * 
	 * @param     string $dbName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByDbName($dbName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dbName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dbName)) {
				$dbName = str_replace('*', '%', $dbName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::DB_NAME, $dbName, $comparison);
	}

	/**
	 * Filter the query on the course_language column
	 * 
	 * @param     string $courseLanguage The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByCourseLanguage($courseLanguage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($courseLanguage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $courseLanguage)) {
				$courseLanguage = str_replace('*', '%', $courseLanguage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::COURSE_LANGUAGE, $courseLanguage, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CoursePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CoursePeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the category_code column
	 * 
	 * @param     string $categoryCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByCategoryCode($categoryCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($categoryCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $categoryCode)) {
				$categoryCode = str_replace('*', '%', $categoryCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::CATEGORY_CODE, $categoryCode, $comparison);
	}

	/**
	 * Filter the query on the visibility column
	 * 
	 * @param     int|array $visibility The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByVisibility($visibility = null, $comparison = null)
	{
		if (is_array($visibility)) {
			$useMinMax = false;
			if (isset($visibility['min'])) {
				$this->addUsingAlias(CoursePeer::VISIBILITY, $visibility['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visibility['max'])) {
				$this->addUsingAlias(CoursePeer::VISIBILITY, $visibility['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::VISIBILITY, $visibility, $comparison);
	}

	/**
	 * Filter the query on the show_score column
	 * 
	 * @param     int|array $showScore The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByShowScore($showScore = null, $comparison = null)
	{
		if (is_array($showScore)) {
			$useMinMax = false;
			if (isset($showScore['min'])) {
				$this->addUsingAlias(CoursePeer::SHOW_SCORE, $showScore['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($showScore['max'])) {
				$this->addUsingAlias(CoursePeer::SHOW_SCORE, $showScore['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::SHOW_SCORE, $showScore, $comparison);
	}

	/**
	 * Filter the query on the tutor_name column
	 * 
	 * @param     string $tutorName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByTutorName($tutorName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tutorName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tutorName)) {
				$tutorName = str_replace('*', '%', $tutorName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::TUTOR_NAME, $tutorName, $comparison);
	}

	/**
	 * Filter the query on the visual_code column
	 * 
	 * @param     string $visualCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByVisualCode($visualCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($visualCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $visualCode)) {
				$visualCode = str_replace('*', '%', $visualCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::VISUAL_CODE, $visualCode, $comparison);
	}

	/**
	 * Filter the query on the department_name column
	 * 
	 * @param     string $departmentName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByDepartmentName($departmentName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($departmentName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $departmentName)) {
				$departmentName = str_replace('*', '%', $departmentName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::DEPARTMENT_NAME, $departmentName, $comparison);
	}

	/**
	 * Filter the query on the department_url column
	 * 
	 * @param     string $departmentUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByDepartmentUrl($departmentUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($departmentUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $departmentUrl)) {
				$departmentUrl = str_replace('*', '%', $departmentUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::DEPARTMENT_URL, $departmentUrl, $comparison);
	}

	/**
	 * Filter the query on the disk_quota column
	 * 
	 * @param     int|array $diskQuota The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByDiskQuota($diskQuota = null, $comparison = null)
	{
		if (is_array($diskQuota)) {
			$useMinMax = false;
			if (isset($diskQuota['min'])) {
				$this->addUsingAlias(CoursePeer::DISK_QUOTA, $diskQuota['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($diskQuota['max'])) {
				$this->addUsingAlias(CoursePeer::DISK_QUOTA, $diskQuota['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::DISK_QUOTA, $diskQuota, $comparison);
	}

	/**
	 * Filter the query on the last_visit column
	 * 
	 * @param     string|array $lastVisit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByLastVisit($lastVisit = null, $comparison = null)
	{
		if (is_array($lastVisit)) {
			$useMinMax = false;
			if (isset($lastVisit['min'])) {
				$this->addUsingAlias(CoursePeer::LAST_VISIT, $lastVisit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastVisit['max'])) {
				$this->addUsingAlias(CoursePeer::LAST_VISIT, $lastVisit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::LAST_VISIT, $lastVisit, $comparison);
	}

	/**
	 * Filter the query on the last_edit column
	 * 
	 * @param     string|array $lastEdit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByLastEdit($lastEdit = null, $comparison = null)
	{
		if (is_array($lastEdit)) {
			$useMinMax = false;
			if (isset($lastEdit['min'])) {
				$this->addUsingAlias(CoursePeer::LAST_EDIT, $lastEdit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastEdit['max'])) {
				$this->addUsingAlias(CoursePeer::LAST_EDIT, $lastEdit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::LAST_EDIT, $lastEdit, $comparison);
	}

	/**
	 * Filter the query on the creation_date column
	 * 
	 * @param     string|array $creationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByCreationDate($creationDate = null, $comparison = null)
	{
		if (is_array($creationDate)) {
			$useMinMax = false;
			if (isset($creationDate['min'])) {
				$this->addUsingAlias(CoursePeer::CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creationDate['max'])) {
				$this->addUsingAlias(CoursePeer::CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::CREATION_DATE, $creationDate, $comparison);
	}

	/**
	 * Filter the query on the expiration_date column
	 * 
	 * @param     string|array $expirationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByExpirationDate($expirationDate = null, $comparison = null)
	{
		if (is_array($expirationDate)) {
			$useMinMax = false;
			if (isset($expirationDate['min'])) {
				$this->addUsingAlias(CoursePeer::EXPIRATION_DATE, $expirationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expirationDate['max'])) {
				$this->addUsingAlias(CoursePeer::EXPIRATION_DATE, $expirationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::EXPIRATION_DATE, $expirationDate, $comparison);
	}

	/**
	 * Filter the query on the target_course_code column
	 * 
	 * @param     string $targetCourseCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByTargetCourseCode($targetCourseCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($targetCourseCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $targetCourseCode)) {
				$targetCourseCode = str_replace('*', '%', $targetCourseCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::TARGET_COURSE_CODE, $targetCourseCode, $comparison);
	}

	/**
	 * Filter the query on the subscribe column
	 * 
	 * @param     int|array $subscribe The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterBySubscribe($subscribe = null, $comparison = null)
	{
		if (is_array($subscribe)) {
			$useMinMax = false;
			if (isset($subscribe['min'])) {
				$this->addUsingAlias(CoursePeer::SUBSCRIBE, $subscribe['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($subscribe['max'])) {
				$this->addUsingAlias(CoursePeer::SUBSCRIBE, $subscribe['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::SUBSCRIBE, $subscribe, $comparison);
	}

	/**
	 * Filter the query on the unsubscribe column
	 * 
	 * @param     int|array $unsubscribe The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByUnsubscribe($unsubscribe = null, $comparison = null)
	{
		if (is_array($unsubscribe)) {
			$useMinMax = false;
			if (isset($unsubscribe['min'])) {
				$this->addUsingAlias(CoursePeer::UNSUBSCRIBE, $unsubscribe['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($unsubscribe['max'])) {
				$this->addUsingAlias(CoursePeer::UNSUBSCRIBE, $unsubscribe['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CoursePeer::UNSUBSCRIBE, $unsubscribe, $comparison);
	}

	/**
	 * Filter the query on the registration_code column
	 * 
	 * @param     string $registrationCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function filterByRegistrationCode($registrationCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($registrationCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $registrationCode)) {
				$registrationCode = str_replace('*', '%', $registrationCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CoursePeer::REGISTRATION_CODE, $registrationCode, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Course $course Object to remove from the list of results
	 *
	 * @return    CourseQuery The current query, for fluid interface
	 */
	public function prune($course = null)
	{
		if ($course) {
			$this->addUsingAlias(CoursePeer::CODE, $course->getCode(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCourseQuery
