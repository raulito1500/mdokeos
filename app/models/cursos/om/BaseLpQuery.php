<?php


/**
 * Base class that represents a query for the 'lp' table.
 *
 * 
 *
 * @method     LpQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpQuery orderByLpType($order = Criteria::ASC) Order by the lp_type column
 * @method     LpQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     LpQuery orderByRef($order = Criteria::ASC) Order by the ref column
 * @method     LpQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     LpQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     LpQuery orderByForceCommit($order = Criteria::ASC) Order by the force_commit column
 * @method     LpQuery orderByDefaultViewMod($order = Criteria::ASC) Order by the default_view_mod column
 * @method     LpQuery orderByDefaultEncoding($order = Criteria::ASC) Order by the default_encoding column
 * @method     LpQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 * @method     LpQuery orderByContentMaker($order = Criteria::ASC) Order by the content_maker column
 * @method     LpQuery orderByContentLocal($order = Criteria::ASC) Order by the content_local column
 * @method     LpQuery orderByContentLicense($order = Criteria::ASC) Order by the content_license column
 * @method     LpQuery orderByPreventReinit($order = Criteria::ASC) Order by the prevent_reinit column
 * @method     LpQuery orderByJsLib($order = Criteria::ASC) Order by the js_lib column
 * @method     LpQuery orderByDebug($order = Criteria::ASC) Order by the debug column
 * @method     LpQuery orderByTheme($order = Criteria::ASC) Order by the theme column
 * @method     LpQuery orderByPreviewImage($order = Criteria::ASC) Order by the preview_image column
 * @method     LpQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     LpQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     LpQuery groupById() Group by the id column
 * @method     LpQuery groupByLpType() Group by the lp_type column
 * @method     LpQuery groupByName() Group by the name column
 * @method     LpQuery groupByRef() Group by the ref column
 * @method     LpQuery groupByDescription() Group by the description column
 * @method     LpQuery groupByPath() Group by the path column
 * @method     LpQuery groupByForceCommit() Group by the force_commit column
 * @method     LpQuery groupByDefaultViewMod() Group by the default_view_mod column
 * @method     LpQuery groupByDefaultEncoding() Group by the default_encoding column
 * @method     LpQuery groupByDisplayOrder() Group by the display_order column
 * @method     LpQuery groupByContentMaker() Group by the content_maker column
 * @method     LpQuery groupByContentLocal() Group by the content_local column
 * @method     LpQuery groupByContentLicense() Group by the content_license column
 * @method     LpQuery groupByPreventReinit() Group by the prevent_reinit column
 * @method     LpQuery groupByJsLib() Group by the js_lib column
 * @method     LpQuery groupByDebug() Group by the debug column
 * @method     LpQuery groupByTheme() Group by the theme column
 * @method     LpQuery groupByPreviewImage() Group by the preview_image column
 * @method     LpQuery groupByAuthor() Group by the author column
 * @method     LpQuery groupBySessionId() Group by the session_id column
 *
 * @method     LpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Lp findOne(PropelPDO $con = null) Return the first Lp matching the query
 * @method     Lp findOneOrCreate(PropelPDO $con = null) Return the first Lp matching the query, or a new Lp object populated from the query conditions when no match is found
 *
 * @method     Lp findOneById(int $id) Return the first Lp filtered by the id column
 * @method     Lp findOneByLpType(int $lp_type) Return the first Lp filtered by the lp_type column
 * @method     Lp findOneByName(string $name) Return the first Lp filtered by the name column
 * @method     Lp findOneByRef(string $ref) Return the first Lp filtered by the ref column
 * @method     Lp findOneByDescription(string $description) Return the first Lp filtered by the description column
 * @method     Lp findOneByPath(string $path) Return the first Lp filtered by the path column
 * @method     Lp findOneByForceCommit(int $force_commit) Return the first Lp filtered by the force_commit column
 * @method     Lp findOneByDefaultViewMod(string $default_view_mod) Return the first Lp filtered by the default_view_mod column
 * @method     Lp findOneByDefaultEncoding(string $default_encoding) Return the first Lp filtered by the default_encoding column
 * @method     Lp findOneByDisplayOrder(int $display_order) Return the first Lp filtered by the display_order column
 * @method     Lp findOneByContentMaker(string $content_maker) Return the first Lp filtered by the content_maker column
 * @method     Lp findOneByContentLocal(string $content_local) Return the first Lp filtered by the content_local column
 * @method     Lp findOneByContentLicense(string $content_license) Return the first Lp filtered by the content_license column
 * @method     Lp findOneByPreventReinit(int $prevent_reinit) Return the first Lp filtered by the prevent_reinit column
 * @method     Lp findOneByJsLib(string $js_lib) Return the first Lp filtered by the js_lib column
 * @method     Lp findOneByDebug(int $debug) Return the first Lp filtered by the debug column
 * @method     Lp findOneByTheme(string $theme) Return the first Lp filtered by the theme column
 * @method     Lp findOneByPreviewImage(string $preview_image) Return the first Lp filtered by the preview_image column
 * @method     Lp findOneByAuthor(string $author) Return the first Lp filtered by the author column
 * @method     Lp findOneBySessionId(int $session_id) Return the first Lp filtered by the session_id column
 *
 * @method     array findById(int $id) Return Lp objects filtered by the id column
 * @method     array findByLpType(int $lp_type) Return Lp objects filtered by the lp_type column
 * @method     array findByName(string $name) Return Lp objects filtered by the name column
 * @method     array findByRef(string $ref) Return Lp objects filtered by the ref column
 * @method     array findByDescription(string $description) Return Lp objects filtered by the description column
 * @method     array findByPath(string $path) Return Lp objects filtered by the path column
 * @method     array findByForceCommit(int $force_commit) Return Lp objects filtered by the force_commit column
 * @method     array findByDefaultViewMod(string $default_view_mod) Return Lp objects filtered by the default_view_mod column
 * @method     array findByDefaultEncoding(string $default_encoding) Return Lp objects filtered by the default_encoding column
 * @method     array findByDisplayOrder(int $display_order) Return Lp objects filtered by the display_order column
 * @method     array findByContentMaker(string $content_maker) Return Lp objects filtered by the content_maker column
 * @method     array findByContentLocal(string $content_local) Return Lp objects filtered by the content_local column
 * @method     array findByContentLicense(string $content_license) Return Lp objects filtered by the content_license column
 * @method     array findByPreventReinit(int $prevent_reinit) Return Lp objects filtered by the prevent_reinit column
 * @method     array findByJsLib(string $js_lib) Return Lp objects filtered by the js_lib column
 * @method     array findByDebug(int $debug) Return Lp objects filtered by the debug column
 * @method     array findByTheme(string $theme) Return Lp objects filtered by the theme column
 * @method     array findByPreviewImage(string $preview_image) Return Lp objects filtered by the preview_image column
 * @method     array findByAuthor(string $author) Return Lp objects filtered by the author column
 * @method     array findBySessionId(int $session_id) Return Lp objects filtered by the session_id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Lp', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpQuery) {
			return $criteria;
		}
		$query = new LpQuery();
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
	 * @return    Lp|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the lp_type column
	 * 
	 * @param     int|array $lpType The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByLpType($lpType = null, $comparison = null)
	{
		if (is_array($lpType)) {
			$useMinMax = false;
			if (isset($lpType['min'])) {
				$this->addUsingAlias(LpPeer::LP_TYPE, $lpType['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpType['max'])) {
				$this->addUsingAlias(LpPeer::LP_TYPE, $lpType['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::LP_TYPE, $lpType, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the ref column
	 * 
	 * @param     string $ref The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByRef($ref = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ref)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ref)) {
				$ref = str_replace('*', '%', $ref);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::REF, $ref, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByPath($path = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($path)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $path)) {
				$path = str_replace('*', '%', $path);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the force_commit column
	 * 
	 * @param     int|array $forceCommit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByForceCommit($forceCommit = null, $comparison = null)
	{
		if (is_array($forceCommit)) {
			$useMinMax = false;
			if (isset($forceCommit['min'])) {
				$this->addUsingAlias(LpPeer::FORCE_COMMIT, $forceCommit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($forceCommit['max'])) {
				$this->addUsingAlias(LpPeer::FORCE_COMMIT, $forceCommit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::FORCE_COMMIT, $forceCommit, $comparison);
	}

	/**
	 * Filter the query on the default_view_mod column
	 * 
	 * @param     string $defaultViewMod The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByDefaultViewMod($defaultViewMod = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($defaultViewMod)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $defaultViewMod)) {
				$defaultViewMod = str_replace('*', '%', $defaultViewMod);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::DEFAULT_VIEW_MOD, $defaultViewMod, $comparison);
	}

	/**
	 * Filter the query on the default_encoding column
	 * 
	 * @param     string $defaultEncoding The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByDefaultEncoding($defaultEncoding = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($defaultEncoding)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $defaultEncoding)) {
				$defaultEncoding = str_replace('*', '%', $defaultEncoding);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::DEFAULT_ENCODING, $defaultEncoding, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(LpPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(LpPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Filter the query on the content_maker column
	 * 
	 * @param     string $contentMaker The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByContentMaker($contentMaker = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($contentMaker)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $contentMaker)) {
				$contentMaker = str_replace('*', '%', $contentMaker);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::CONTENT_MAKER, $contentMaker, $comparison);
	}

	/**
	 * Filter the query on the content_local column
	 * 
	 * @param     string $contentLocal The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByContentLocal($contentLocal = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($contentLocal)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $contentLocal)) {
				$contentLocal = str_replace('*', '%', $contentLocal);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::CONTENT_LOCAL, $contentLocal, $comparison);
	}

	/**
	 * Filter the query on the content_license column
	 * 
	 * @param     string $contentLicense The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByContentLicense($contentLicense = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($contentLicense)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $contentLicense)) {
				$contentLicense = str_replace('*', '%', $contentLicense);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::CONTENT_LICENSE, $contentLicense, $comparison);
	}

	/**
	 * Filter the query on the prevent_reinit column
	 * 
	 * @param     int|array $preventReinit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByPreventReinit($preventReinit = null, $comparison = null)
	{
		if (is_array($preventReinit)) {
			$useMinMax = false;
			if (isset($preventReinit['min'])) {
				$this->addUsingAlias(LpPeer::PREVENT_REINIT, $preventReinit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($preventReinit['max'])) {
				$this->addUsingAlias(LpPeer::PREVENT_REINIT, $preventReinit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::PREVENT_REINIT, $preventReinit, $comparison);
	}

	/**
	 * Filter the query on the js_lib column
	 * 
	 * @param     string $jsLib The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByJsLib($jsLib = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($jsLib)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $jsLib)) {
				$jsLib = str_replace('*', '%', $jsLib);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::JS_LIB, $jsLib, $comparison);
	}

	/**
	 * Filter the query on the debug column
	 * 
	 * @param     int|array $debug The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByDebug($debug = null, $comparison = null)
	{
		if (is_array($debug)) {
			$useMinMax = false;
			if (isset($debug['min'])) {
				$this->addUsingAlias(LpPeer::DEBUG, $debug['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($debug['max'])) {
				$this->addUsingAlias(LpPeer::DEBUG, $debug['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::DEBUG, $debug, $comparison);
	}

	/**
	 * Filter the query on the theme column
	 * 
	 * @param     string $theme The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpPeer::THEME, $theme, $comparison);
	}

	/**
	 * Filter the query on the preview_image column
	 * 
	 * @param     string $previewImage The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterByPreviewImage($previewImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($previewImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $previewImage)) {
				$previewImage = str_replace('*', '%', $previewImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpPeer::PREVIEW_IMAGE, $previewImage, $comparison);
	}

	/**
	 * Filter the query on the author column
	 * 
	 * @param     string $author The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpPeer::AUTHOR, $author, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * @param     int|array $sessionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(LpPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(LpPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Lp $lp Object to remove from the list of results
	 *
	 * @return    LpQuery The current query, for fluid interface
	 */
	public function prune($lp = null)
	{
		if ($lp) {
			$this->addUsingAlias(LpPeer::ID, $lp->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpQuery
