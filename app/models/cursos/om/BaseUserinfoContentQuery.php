<?php


/**
 * Base class that represents a query for the 'userinfo_content' table.
 *
 * 
 *
 * @method     UserinfoContentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserinfoContentQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserinfoContentQuery orderByDefinitionId($order = Criteria::ASC) Order by the definition_id column
 * @method     UserinfoContentQuery orderByEditorIp($order = Criteria::ASC) Order by the editor_ip column
 * @method     UserinfoContentQuery orderByEditionTime($order = Criteria::ASC) Order by the edition_time column
 * @method     UserinfoContentQuery orderByContent($order = Criteria::ASC) Order by the content column
 *
 * @method     UserinfoContentQuery groupById() Group by the id column
 * @method     UserinfoContentQuery groupByUserId() Group by the user_id column
 * @method     UserinfoContentQuery groupByDefinitionId() Group by the definition_id column
 * @method     UserinfoContentQuery groupByEditorIp() Group by the editor_ip column
 * @method     UserinfoContentQuery groupByEditionTime() Group by the edition_time column
 * @method     UserinfoContentQuery groupByContent() Group by the content column
 *
 * @method     UserinfoContentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserinfoContentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserinfoContentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserinfoContent findOne(PropelPDO $con = null) Return the first UserinfoContent matching the query
 * @method     UserinfoContent findOneOrCreate(PropelPDO $con = null) Return the first UserinfoContent matching the query, or a new UserinfoContent object populated from the query conditions when no match is found
 *
 * @method     UserinfoContent findOneById(int $id) Return the first UserinfoContent filtered by the id column
 * @method     UserinfoContent findOneByUserId(int $user_id) Return the first UserinfoContent filtered by the user_id column
 * @method     UserinfoContent findOneByDefinitionId(int $definition_id) Return the first UserinfoContent filtered by the definition_id column
 * @method     UserinfoContent findOneByEditorIp(string $editor_ip) Return the first UserinfoContent filtered by the editor_ip column
 * @method     UserinfoContent findOneByEditionTime(string $edition_time) Return the first UserinfoContent filtered by the edition_time column
 * @method     UserinfoContent findOneByContent(string $content) Return the first UserinfoContent filtered by the content column
 *
 * @method     array findById(int $id) Return UserinfoContent objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserinfoContent objects filtered by the user_id column
 * @method     array findByDefinitionId(int $definition_id) Return UserinfoContent objects filtered by the definition_id column
 * @method     array findByEditorIp(string $editor_ip) Return UserinfoContent objects filtered by the editor_ip column
 * @method     array findByEditionTime(string $edition_time) Return UserinfoContent objects filtered by the edition_time column
 * @method     array findByContent(string $content) Return UserinfoContent objects filtered by the content column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseUserinfoContentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserinfoContentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'UserinfoContent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserinfoContentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserinfoContentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserinfoContentQuery) {
			return $criteria;
		}
		$query = new UserinfoContentQuery();
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
	 * @return    UserinfoContent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserinfoContentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserinfoContentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserinfoContentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserinfoContentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserinfoContentPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserinfoContentPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserinfoContentPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the definition_id column
	 * 
	 * @param     int|array $definitionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByDefinitionId($definitionId = null, $comparison = null)
	{
		if (is_array($definitionId)) {
			$useMinMax = false;
			if (isset($definitionId['min'])) {
				$this->addUsingAlias(UserinfoContentPeer::DEFINITION_ID, $definitionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($definitionId['max'])) {
				$this->addUsingAlias(UserinfoContentPeer::DEFINITION_ID, $definitionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserinfoContentPeer::DEFINITION_ID, $definitionId, $comparison);
	}

	/**
	 * Filter the query on the editor_ip column
	 * 
	 * @param     string $editorIp The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByEditorIp($editorIp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($editorIp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $editorIp)) {
				$editorIp = str_replace('*', '%', $editorIp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserinfoContentPeer::EDITOR_IP, $editorIp, $comparison);
	}

	/**
	 * Filter the query on the edition_time column
	 * 
	 * @param     string|array $editionTime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByEditionTime($editionTime = null, $comparison = null)
	{
		if (is_array($editionTime)) {
			$useMinMax = false;
			if (isset($editionTime['min'])) {
				$this->addUsingAlias(UserinfoContentPeer::EDITION_TIME, $editionTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($editionTime['max'])) {
				$this->addUsingAlias(UserinfoContentPeer::EDITION_TIME, $editionTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserinfoContentPeer::EDITION_TIME, $editionTime, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserinfoContentPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserinfoContent $userinfoContent Object to remove from the list of results
	 *
	 * @return    UserinfoContentQuery The current query, for fluid interface
	 */
	public function prune($userinfoContent = null)
	{
		if ($userinfoContent) {
			$this->addUsingAlias(UserinfoContentPeer::ID, $userinfoContent->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserinfoContentQuery
