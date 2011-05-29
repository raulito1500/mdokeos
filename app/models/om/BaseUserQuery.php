<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * 
 *
 * @method     UserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method     UserQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     UserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     UserQuery orderByAuthSource($order = Criteria::ASC) Order by the auth_source column
 * @method     UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UserQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     UserQuery orderByOfficialCode($order = Criteria::ASC) Order by the official_code column
 * @method     UserQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     UserQuery orderByPictureUri($order = Criteria::ASC) Order by the picture_uri column
 * @method     UserQuery orderByCreatorId($order = Criteria::ASC) Order by the creator_id column
 * @method     UserQuery orderByCompetences($order = Criteria::ASC) Order by the competences column
 * @method     UserQuery orderByDiplomas($order = Criteria::ASC) Order by the diplomas column
 * @method     UserQuery orderByOpenarea($order = Criteria::ASC) Order by the openarea column
 * @method     UserQuery orderByTeach($order = Criteria::ASC) Order by the teach column
 * @method     UserQuery orderByProductions($order = Criteria::ASC) Order by the productions column
 * @method     UserQuery orderByChatcallUserId($order = Criteria::ASC) Order by the chatcall_user_id column
 * @method     UserQuery orderByChatcallDate($order = Criteria::ASC) Order by the chatcall_date column
 * @method     UserQuery orderByChatcallText($order = Criteria::ASC) Order by the chatcall_text column
 * @method     UserQuery orderByLanguage($order = Criteria::ASC) Order by the language column
 * @method     UserQuery orderByRegistrationDate($order = Criteria::ASC) Order by the registration_date column
 * @method     UserQuery orderByExpirationDate($order = Criteria::ASC) Order by the expiration_date column
 * @method     UserQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     UserQuery orderByOpenid($order = Criteria::ASC) Order by the openid column
 * @method     UserQuery orderByTheme($order = Criteria::ASC) Order by the theme column
 * @method     UserQuery orderByHrDeptId($order = Criteria::ASC) Order by the hr_dept_id column
 *
 * @method     UserQuery groupByUserId() Group by the user_id column
 * @method     UserQuery groupByLastname() Group by the lastname column
 * @method     UserQuery groupByFirstname() Group by the firstname column
 * @method     UserQuery groupByUsername() Group by the username column
 * @method     UserQuery groupByPassword() Group by the password column
 * @method     UserQuery groupByAuthSource() Group by the auth_source column
 * @method     UserQuery groupByEmail() Group by the email column
 * @method     UserQuery groupByStatus() Group by the status column
 * @method     UserQuery groupByOfficialCode() Group by the official_code column
 * @method     UserQuery groupByPhone() Group by the phone column
 * @method     UserQuery groupByPictureUri() Group by the picture_uri column
 * @method     UserQuery groupByCreatorId() Group by the creator_id column
 * @method     UserQuery groupByCompetences() Group by the competences column
 * @method     UserQuery groupByDiplomas() Group by the diplomas column
 * @method     UserQuery groupByOpenarea() Group by the openarea column
 * @method     UserQuery groupByTeach() Group by the teach column
 * @method     UserQuery groupByProductions() Group by the productions column
 * @method     UserQuery groupByChatcallUserId() Group by the chatcall_user_id column
 * @method     UserQuery groupByChatcallDate() Group by the chatcall_date column
 * @method     UserQuery groupByChatcallText() Group by the chatcall_text column
 * @method     UserQuery groupByLanguage() Group by the language column
 * @method     UserQuery groupByRegistrationDate() Group by the registration_date column
 * @method     UserQuery groupByExpirationDate() Group by the expiration_date column
 * @method     UserQuery groupByActive() Group by the active column
 * @method     UserQuery groupByOpenid() Group by the openid column
 * @method     UserQuery groupByTheme() Group by the theme column
 * @method     UserQuery groupByHrDeptId() Group by the hr_dept_id column
 *
 * @method     UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method     User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method     User findOneByUserId(int $user_id) Return the first User filtered by the user_id column
 * @method     User findOneByLastname(string $lastname) Return the first User filtered by the lastname column
 * @method     User findOneByFirstname(string $firstname) Return the first User filtered by the firstname column
 * @method     User findOneByUsername(string $username) Return the first User filtered by the username column
 * @method     User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method     User findOneByAuthSource(string $auth_source) Return the first User filtered by the auth_source column
 * @method     User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method     User findOneByStatus(int $status) Return the first User filtered by the status column
 * @method     User findOneByOfficialCode(string $official_code) Return the first User filtered by the official_code column
 * @method     User findOneByPhone(string $phone) Return the first User filtered by the phone column
 * @method     User findOneByPictureUri(string $picture_uri) Return the first User filtered by the picture_uri column
 * @method     User findOneByCreatorId(int $creator_id) Return the first User filtered by the creator_id column
 * @method     User findOneByCompetences(string $competences) Return the first User filtered by the competences column
 * @method     User findOneByDiplomas(string $diplomas) Return the first User filtered by the diplomas column
 * @method     User findOneByOpenarea(string $openarea) Return the first User filtered by the openarea column
 * @method     User findOneByTeach(string $teach) Return the first User filtered by the teach column
 * @method     User findOneByProductions(string $productions) Return the first User filtered by the productions column
 * @method     User findOneByChatcallUserId(int $chatcall_user_id) Return the first User filtered by the chatcall_user_id column
 * @method     User findOneByChatcallDate(string $chatcall_date) Return the first User filtered by the chatcall_date column
 * @method     User findOneByChatcallText(string $chatcall_text) Return the first User filtered by the chatcall_text column
 * @method     User findOneByLanguage(string $language) Return the first User filtered by the language column
 * @method     User findOneByRegistrationDate(string $registration_date) Return the first User filtered by the registration_date column
 * @method     User findOneByExpirationDate(string $expiration_date) Return the first User filtered by the expiration_date column
 * @method     User findOneByActive(int $active) Return the first User filtered by the active column
 * @method     User findOneByOpenid(string $openid) Return the first User filtered by the openid column
 * @method     User findOneByTheme(string $theme) Return the first User filtered by the theme column
 * @method     User findOneByHrDeptId(int $hr_dept_id) Return the first User filtered by the hr_dept_id column
 *
 * @method     array findByUserId(int $user_id) Return User objects filtered by the user_id column
 * @method     array findByLastname(string $lastname) Return User objects filtered by the lastname column
 * @method     array findByFirstname(string $firstname) Return User objects filtered by the firstname column
 * @method     array findByUsername(string $username) Return User objects filtered by the username column
 * @method     array findByPassword(string $password) Return User objects filtered by the password column
 * @method     array findByAuthSource(string $auth_source) Return User objects filtered by the auth_source column
 * @method     array findByEmail(string $email) Return User objects filtered by the email column
 * @method     array findByStatus(int $status) Return User objects filtered by the status column
 * @method     array findByOfficialCode(string $official_code) Return User objects filtered by the official_code column
 * @method     array findByPhone(string $phone) Return User objects filtered by the phone column
 * @method     array findByPictureUri(string $picture_uri) Return User objects filtered by the picture_uri column
 * @method     array findByCreatorId(int $creator_id) Return User objects filtered by the creator_id column
 * @method     array findByCompetences(string $competences) Return User objects filtered by the competences column
 * @method     array findByDiplomas(string $diplomas) Return User objects filtered by the diplomas column
 * @method     array findByOpenarea(string $openarea) Return User objects filtered by the openarea column
 * @method     array findByTeach(string $teach) Return User objects filtered by the teach column
 * @method     array findByProductions(string $productions) Return User objects filtered by the productions column
 * @method     array findByChatcallUserId(int $chatcall_user_id) Return User objects filtered by the chatcall_user_id column
 * @method     array findByChatcallDate(string $chatcall_date) Return User objects filtered by the chatcall_date column
 * @method     array findByChatcallText(string $chatcall_text) Return User objects filtered by the chatcall_text column
 * @method     array findByLanguage(string $language) Return User objects filtered by the language column
 * @method     array findByRegistrationDate(string $registration_date) Return User objects filtered by the registration_date column
 * @method     array findByExpirationDate(string $expiration_date) Return User objects filtered by the expiration_date column
 * @method     array findByActive(int $active) Return User objects filtered by the active column
 * @method     array findByOpenid(string $openid) Return User objects filtered by the openid column
 * @method     array findByTheme(string $theme) Return User objects filtered by the theme column
 * @method     array findByHrDeptId(int $hr_dept_id) Return User objects filtered by the hr_dept_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserQuery) {
			return $criteria;
		}
		$query = new UserQuery();
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
	 * @return    User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserPeer::USER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserPeer::USER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the lastname column
	 * 
	 * @param     string $lastname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLastname($lastname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastname)) {
				$lastname = str_replace('*', '%', $lastname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::LASTNAME, $lastname, $comparison);
	}

	/**
	 * Filter the query on the firstname column
	 * 
	 * @param     string $firstname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFirstname($firstname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($firstname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $firstname)) {
				$firstname = str_replace('*', '%', $firstname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::FIRSTNAME, $firstname, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * @param     string $username The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the auth_source column
	 * 
	 * @param     string $authSource The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAuthSource($authSource = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authSource)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authSource)) {
				$authSource = str_replace('*', '%', $authSource);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::AUTH_SOURCE, $authSource, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * @param     int|array $status The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (is_array($status)) {
			$useMinMax = false;
			if (isset($status['min'])) {
				$this->addUsingAlias(UserPeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($status['max'])) {
				$this->addUsingAlias(UserPeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::STATUS, $status, $comparison);
	}

	/**
	 * Filter the query on the official_code column
	 * 
	 * @param     string $officialCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByOfficialCode($officialCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($officialCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $officialCode)) {
				$officialCode = str_replace('*', '%', $officialCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::OFFICIAL_CODE, $officialCode, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 * 
	 * @param     string $phone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPhone($phone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phone)) {
				$phone = str_replace('*', '%', $phone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the picture_uri column
	 * 
	 * @param     string $pictureUri The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPictureUri($pictureUri = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pictureUri)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pictureUri)) {
				$pictureUri = str_replace('*', '%', $pictureUri);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PICTURE_URI, $pictureUri, $comparison);
	}

	/**
	 * Filter the query on the creator_id column
	 * 
	 * @param     int|array $creatorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCreatorId($creatorId = null, $comparison = null)
	{
		if (is_array($creatorId)) {
			$useMinMax = false;
			if (isset($creatorId['min'])) {
				$this->addUsingAlias(UserPeer::CREATOR_ID, $creatorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creatorId['max'])) {
				$this->addUsingAlias(UserPeer::CREATOR_ID, $creatorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::CREATOR_ID, $creatorId, $comparison);
	}

	/**
	 * Filter the query on the competences column
	 * 
	 * @param     string $competences The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCompetences($competences = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($competences)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $competences)) {
				$competences = str_replace('*', '%', $competences);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COMPETENCES, $competences, $comparison);
	}

	/**
	 * Filter the query on the diplomas column
	 * 
	 * @param     string $diplomas The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDiplomas($diplomas = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($diplomas)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $diplomas)) {
				$diplomas = str_replace('*', '%', $diplomas);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::DIPLOMAS, $diplomas, $comparison);
	}

	/**
	 * Filter the query on the openarea column
	 * 
	 * @param     string $openarea The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByOpenarea($openarea = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($openarea)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $openarea)) {
				$openarea = str_replace('*', '%', $openarea);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::OPENAREA, $openarea, $comparison);
	}

	/**
	 * Filter the query on the teach column
	 * 
	 * @param     string $teach The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByTeach($teach = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($teach)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $teach)) {
				$teach = str_replace('*', '%', $teach);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::TEACH, $teach, $comparison);
	}

	/**
	 * Filter the query on the productions column
	 * 
	 * @param     string $productions The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByProductions($productions = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($productions)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $productions)) {
				$productions = str_replace('*', '%', $productions);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PRODUCTIONS, $productions, $comparison);
	}

	/**
	 * Filter the query on the chatcall_user_id column
	 * 
	 * @param     int|array $chatcallUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByChatcallUserId($chatcallUserId = null, $comparison = null)
	{
		if (is_array($chatcallUserId)) {
			$useMinMax = false;
			if (isset($chatcallUserId['min'])) {
				$this->addUsingAlias(UserPeer::CHATCALL_USER_ID, $chatcallUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($chatcallUserId['max'])) {
				$this->addUsingAlias(UserPeer::CHATCALL_USER_ID, $chatcallUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::CHATCALL_USER_ID, $chatcallUserId, $comparison);
	}

	/**
	 * Filter the query on the chatcall_date column
	 * 
	 * @param     string|array $chatcallDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByChatcallDate($chatcallDate = null, $comparison = null)
	{
		if (is_array($chatcallDate)) {
			$useMinMax = false;
			if (isset($chatcallDate['min'])) {
				$this->addUsingAlias(UserPeer::CHATCALL_DATE, $chatcallDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($chatcallDate['max'])) {
				$this->addUsingAlias(UserPeer::CHATCALL_DATE, $chatcallDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::CHATCALL_DATE, $chatcallDate, $comparison);
	}

	/**
	 * Filter the query on the chatcall_text column
	 * 
	 * @param     string $chatcallText The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByChatcallText($chatcallText = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($chatcallText)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $chatcallText)) {
				$chatcallText = str_replace('*', '%', $chatcallText);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::CHATCALL_TEXT, $chatcallText, $comparison);
	}

	/**
	 * Filter the query on the language column
	 * 
	 * @param     string $language The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLanguage($language = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($language)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $language)) {
				$language = str_replace('*', '%', $language);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::LANGUAGE, $language, $comparison);
	}

	/**
	 * Filter the query on the registration_date column
	 * 
	 * @param     string|array $registrationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByRegistrationDate($registrationDate = null, $comparison = null)
	{
		if (is_array($registrationDate)) {
			$useMinMax = false;
			if (isset($registrationDate['min'])) {
				$this->addUsingAlias(UserPeer::REGISTRATION_DATE, $registrationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($registrationDate['max'])) {
				$this->addUsingAlias(UserPeer::REGISTRATION_DATE, $registrationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::REGISTRATION_DATE, $registrationDate, $comparison);
	}

	/**
	 * Filter the query on the expiration_date column
	 * 
	 * @param     string|array $expirationDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByExpirationDate($expirationDate = null, $comparison = null)
	{
		if (is_array($expirationDate)) {
			$useMinMax = false;
			if (isset($expirationDate['min'])) {
				$this->addUsingAlias(UserPeer::EXPIRATION_DATE, $expirationDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expirationDate['max'])) {
				$this->addUsingAlias(UserPeer::EXPIRATION_DATE, $expirationDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::EXPIRATION_DATE, $expirationDate, $comparison);
	}

	/**
	 * Filter the query on the active column
	 * 
	 * @param     int|array $active The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_array($active)) {
			$useMinMax = false;
			if (isset($active['min'])) {
				$this->addUsingAlias(UserPeer::ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($active['max'])) {
				$this->addUsingAlias(UserPeer::ACTIVE, $active['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query on the openid column
	 * 
	 * @param     string $openid The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByOpenid($openid = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($openid)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $openid)) {
				$openid = str_replace('*', '%', $openid);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::OPENID, $openid, $comparison);
	}

	/**
	 * Filter the query on the theme column
	 * 
	 * @param     string $theme The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByTheme($theme = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($theme)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $theme)) {
				$theme = str_replace('*', '%', $theme);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::THEME, $theme, $comparison);
	}

	/**
	 * Filter the query on the hr_dept_id column
	 * 
	 * @param     int|array $hrDeptId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByHrDeptId($hrDeptId = null, $comparison = null)
	{
		if (is_array($hrDeptId)) {
			$useMinMax = false;
			if (isset($hrDeptId['min'])) {
				$this->addUsingAlias(UserPeer::HR_DEPT_ID, $hrDeptId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hrDeptId['max'])) {
				$this->addUsingAlias(UserPeer::HR_DEPT_ID, $hrDeptId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::HR_DEPT_ID, $hrDeptId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     User $user Object to remove from the list of results
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function prune($user = null)
	{
		if ($user) {
			$this->addUsingAlias(UserPeer::USER_ID, $user->getUserId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserQuery
