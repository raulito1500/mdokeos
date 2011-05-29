<?php


/**
 * Base class that represents a query for the 'language' table.
 *
 * 
 *
 * @method     LanguageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LanguageQuery orderByOriginalName($order = Criteria::ASC) Order by the original_name column
 * @method     LanguageQuery orderByEnglishName($order = Criteria::ASC) Order by the english_name column
 * @method     LanguageQuery orderByIsocode($order = Criteria::ASC) Order by the isocode column
 * @method     LanguageQuery orderByDokeosFolder($order = Criteria::ASC) Order by the dokeos_folder column
 * @method     LanguageQuery orderByAvailable($order = Criteria::ASC) Order by the available column
 * @method     LanguageQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 *
 * @method     LanguageQuery groupById() Group by the id column
 * @method     LanguageQuery groupByOriginalName() Group by the original_name column
 * @method     LanguageQuery groupByEnglishName() Group by the english_name column
 * @method     LanguageQuery groupByIsocode() Group by the isocode column
 * @method     LanguageQuery groupByDokeosFolder() Group by the dokeos_folder column
 * @method     LanguageQuery groupByAvailable() Group by the available column
 * @method     LanguageQuery groupByParentId() Group by the parent_id column
 *
 * @method     LanguageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LanguageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LanguageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Language findOne(PropelPDO $con = null) Return the first Language matching the query
 * @method     Language findOneOrCreate(PropelPDO $con = null) Return the first Language matching the query, or a new Language object populated from the query conditions when no match is found
 *
 * @method     Language findOneById(int $id) Return the first Language filtered by the id column
 * @method     Language findOneByOriginalName(string $original_name) Return the first Language filtered by the original_name column
 * @method     Language findOneByEnglishName(string $english_name) Return the first Language filtered by the english_name column
 * @method     Language findOneByIsocode(string $isocode) Return the first Language filtered by the isocode column
 * @method     Language findOneByDokeosFolder(string $dokeos_folder) Return the first Language filtered by the dokeos_folder column
 * @method     Language findOneByAvailable(int $available) Return the first Language filtered by the available column
 * @method     Language findOneByParentId(int $parent_id) Return the first Language filtered by the parent_id column
 *
 * @method     array findById(int $id) Return Language objects filtered by the id column
 * @method     array findByOriginalName(string $original_name) Return Language objects filtered by the original_name column
 * @method     array findByEnglishName(string $english_name) Return Language objects filtered by the english_name column
 * @method     array findByIsocode(string $isocode) Return Language objects filtered by the isocode column
 * @method     array findByDokeosFolder(string $dokeos_folder) Return Language objects filtered by the dokeos_folder column
 * @method     array findByAvailable(int $available) Return Language objects filtered by the available column
 * @method     array findByParentId(int $parent_id) Return Language objects filtered by the parent_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLanguageQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLanguageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Language', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LanguageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LanguageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LanguageQuery) {
			return $criteria;
		}
		$query = new LanguageQuery();
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
	 * @return    Language|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LanguagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LanguagePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LanguagePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id)) {
			$useMinMax = false;
			if (isset($id['min'])) {
				$this->addUsingAlias(LanguagePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($id['max'])) {
				$this->addUsingAlias(LanguagePeer::ID, $id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LanguagePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the original_name column
	 * 
	 * @param     string $originalName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByOriginalName($originalName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($originalName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $originalName)) {
				$originalName = str_replace('*', '%', $originalName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LanguagePeer::ORIGINAL_NAME, $originalName, $comparison);
	}

	/**
	 * Filter the query on the english_name column
	 * 
	 * @param     string $englishName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByEnglishName($englishName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($englishName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $englishName)) {
				$englishName = str_replace('*', '%', $englishName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LanguagePeer::ENGLISH_NAME, $englishName, $comparison);
	}

	/**
	 * Filter the query on the isocode column
	 * 
	 * @param     string $isocode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByIsocode($isocode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isocode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isocode)) {
				$isocode = str_replace('*', '%', $isocode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LanguagePeer::ISOCODE, $isocode, $comparison);
	}

	/**
	 * Filter the query on the dokeos_folder column
	 * 
	 * @param     string $dokeosFolder The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByDokeosFolder($dokeosFolder = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dokeosFolder)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dokeosFolder)) {
				$dokeosFolder = str_replace('*', '%', $dokeosFolder);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LanguagePeer::DOKEOS_FOLDER, $dokeosFolder, $comparison);
	}

	/**
	 * Filter the query on the available column
	 * 
	 * @param     int|array $available The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByAvailable($available = null, $comparison = null)
	{
		if (is_array($available)) {
			$useMinMax = false;
			if (isset($available['min'])) {
				$this->addUsingAlias(LanguagePeer::AVAILABLE, $available['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($available['max'])) {
				$this->addUsingAlias(LanguagePeer::AVAILABLE, $available['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LanguagePeer::AVAILABLE, $available, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(LanguagePeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(LanguagePeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LanguagePeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Language $language Object to remove from the list of results
	 *
	 * @return    LanguageQuery The current query, for fluid interface
	 */
	public function prune($language = null)
	{
		if ($language) {
			$this->addUsingAlias(LanguagePeer::ID, $language->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLanguageQuery
