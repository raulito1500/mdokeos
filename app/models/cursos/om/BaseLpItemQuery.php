<?php


/**
 * Base class that represents a query for the 'lp_item' table.
 *
 * 
 *
 * @method     LpItemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LpItemQuery orderByLpId($order = Criteria::ASC) Order by the lp_id column
 * @method     LpItemQuery orderByItemType($order = Criteria::ASC) Order by the item_type column
 * @method     LpItemQuery orderByRef($order = Criteria::ASC) Order by the ref column
 * @method     LpItemQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     LpItemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     LpItemQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method     LpItemQuery orderByMinScore($order = Criteria::ASC) Order by the min_score column
 * @method     LpItemQuery orderByMaxScore($order = Criteria::ASC) Order by the max_score column
 * @method     LpItemQuery orderByMasteryScore($order = Criteria::ASC) Order by the mastery_score column
 * @method     LpItemQuery orderByParentItemId($order = Criteria::ASC) Order by the parent_item_id column
 * @method     LpItemQuery orderByPreviousItemId($order = Criteria::ASC) Order by the previous_item_id column
 * @method     LpItemQuery orderByNextItemId($order = Criteria::ASC) Order by the next_item_id column
 * @method     LpItemQuery orderByDisplayOrder($order = Criteria::ASC) Order by the display_order column
 * @method     LpItemQuery orderByPrerequisite($order = Criteria::ASC) Order by the prerequisite column
 * @method     LpItemQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     LpItemQuery orderByLaunchData($order = Criteria::ASC) Order by the launch_data column
 * @method     LpItemQuery orderByMaxTimeAllowed($order = Criteria::ASC) Order by the max_time_allowed column
 * @method     LpItemQuery orderByTerms($order = Criteria::ASC) Order by the terms column
 * @method     LpItemQuery orderBySearchDid($order = Criteria::ASC) Order by the search_did column
 * @method     LpItemQuery orderByAudio($order = Criteria::ASC) Order by the audio column
 *
 * @method     LpItemQuery groupById() Group by the id column
 * @method     LpItemQuery groupByLpId() Group by the lp_id column
 * @method     LpItemQuery groupByItemType() Group by the item_type column
 * @method     LpItemQuery groupByRef() Group by the ref column
 * @method     LpItemQuery groupByTitle() Group by the title column
 * @method     LpItemQuery groupByDescription() Group by the description column
 * @method     LpItemQuery groupByPath() Group by the path column
 * @method     LpItemQuery groupByMinScore() Group by the min_score column
 * @method     LpItemQuery groupByMaxScore() Group by the max_score column
 * @method     LpItemQuery groupByMasteryScore() Group by the mastery_score column
 * @method     LpItemQuery groupByParentItemId() Group by the parent_item_id column
 * @method     LpItemQuery groupByPreviousItemId() Group by the previous_item_id column
 * @method     LpItemQuery groupByNextItemId() Group by the next_item_id column
 * @method     LpItemQuery groupByDisplayOrder() Group by the display_order column
 * @method     LpItemQuery groupByPrerequisite() Group by the prerequisite column
 * @method     LpItemQuery groupByParameters() Group by the parameters column
 * @method     LpItemQuery groupByLaunchData() Group by the launch_data column
 * @method     LpItemQuery groupByMaxTimeAllowed() Group by the max_time_allowed column
 * @method     LpItemQuery groupByTerms() Group by the terms column
 * @method     LpItemQuery groupBySearchDid() Group by the search_did column
 * @method     LpItemQuery groupByAudio() Group by the audio column
 *
 * @method     LpItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LpItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LpItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LpItem findOne(PropelPDO $con = null) Return the first LpItem matching the query
 * @method     LpItem findOneOrCreate(PropelPDO $con = null) Return the first LpItem matching the query, or a new LpItem object populated from the query conditions when no match is found
 *
 * @method     LpItem findOneById(int $id) Return the first LpItem filtered by the id column
 * @method     LpItem findOneByLpId(int $lp_id) Return the first LpItem filtered by the lp_id column
 * @method     LpItem findOneByItemType(string $item_type) Return the first LpItem filtered by the item_type column
 * @method     LpItem findOneByRef(string $ref) Return the first LpItem filtered by the ref column
 * @method     LpItem findOneByTitle(string $title) Return the first LpItem filtered by the title column
 * @method     LpItem findOneByDescription(string $description) Return the first LpItem filtered by the description column
 * @method     LpItem findOneByPath(string $path) Return the first LpItem filtered by the path column
 * @method     LpItem findOneByMinScore(double $min_score) Return the first LpItem filtered by the min_score column
 * @method     LpItem findOneByMaxScore(double $max_score) Return the first LpItem filtered by the max_score column
 * @method     LpItem findOneByMasteryScore(double $mastery_score) Return the first LpItem filtered by the mastery_score column
 * @method     LpItem findOneByParentItemId(int $parent_item_id) Return the first LpItem filtered by the parent_item_id column
 * @method     LpItem findOneByPreviousItemId(int $previous_item_id) Return the first LpItem filtered by the previous_item_id column
 * @method     LpItem findOneByNextItemId(int $next_item_id) Return the first LpItem filtered by the next_item_id column
 * @method     LpItem findOneByDisplayOrder(int $display_order) Return the first LpItem filtered by the display_order column
 * @method     LpItem findOneByPrerequisite(string $prerequisite) Return the first LpItem filtered by the prerequisite column
 * @method     LpItem findOneByParameters(string $parameters) Return the first LpItem filtered by the parameters column
 * @method     LpItem findOneByLaunchData(string $launch_data) Return the first LpItem filtered by the launch_data column
 * @method     LpItem findOneByMaxTimeAllowed(string $max_time_allowed) Return the first LpItem filtered by the max_time_allowed column
 * @method     LpItem findOneByTerms(string $terms) Return the first LpItem filtered by the terms column
 * @method     LpItem findOneBySearchDid(int $search_did) Return the first LpItem filtered by the search_did column
 * @method     LpItem findOneByAudio(string $audio) Return the first LpItem filtered by the audio column
 *
 * @method     array findById(int $id) Return LpItem objects filtered by the id column
 * @method     array findByLpId(int $lp_id) Return LpItem objects filtered by the lp_id column
 * @method     array findByItemType(string $item_type) Return LpItem objects filtered by the item_type column
 * @method     array findByRef(string $ref) Return LpItem objects filtered by the ref column
 * @method     array findByTitle(string $title) Return LpItem objects filtered by the title column
 * @method     array findByDescription(string $description) Return LpItem objects filtered by the description column
 * @method     array findByPath(string $path) Return LpItem objects filtered by the path column
 * @method     array findByMinScore(double $min_score) Return LpItem objects filtered by the min_score column
 * @method     array findByMaxScore(double $max_score) Return LpItem objects filtered by the max_score column
 * @method     array findByMasteryScore(double $mastery_score) Return LpItem objects filtered by the mastery_score column
 * @method     array findByParentItemId(int $parent_item_id) Return LpItem objects filtered by the parent_item_id column
 * @method     array findByPreviousItemId(int $previous_item_id) Return LpItem objects filtered by the previous_item_id column
 * @method     array findByNextItemId(int $next_item_id) Return LpItem objects filtered by the next_item_id column
 * @method     array findByDisplayOrder(int $display_order) Return LpItem objects filtered by the display_order column
 * @method     array findByPrerequisite(string $prerequisite) Return LpItem objects filtered by the prerequisite column
 * @method     array findByParameters(string $parameters) Return LpItem objects filtered by the parameters column
 * @method     array findByLaunchData(string $launch_data) Return LpItem objects filtered by the launch_data column
 * @method     array findByMaxTimeAllowed(string $max_time_allowed) Return LpItem objects filtered by the max_time_allowed column
 * @method     array findByTerms(string $terms) Return LpItem objects filtered by the terms column
 * @method     array findBySearchDid(int $search_did) Return LpItem objects filtered by the search_did column
 * @method     array findByAudio(string $audio) Return LpItem objects filtered by the audio column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseLpItemQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLpItemQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'LpItem', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LpItemQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LpItemQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LpItemQuery) {
			return $criteria;
		}
		$query = new LpItemQuery();
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
	 * @return    LpItem|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LpItemPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LpItemPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LpItemPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LpItemPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the lp_id column
	 * 
	 * @param     int|array $lpId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByLpId($lpId = null, $comparison = null)
	{
		if (is_array($lpId)) {
			$useMinMax = false;
			if (isset($lpId['min'])) {
				$this->addUsingAlias(LpItemPeer::LP_ID, $lpId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lpId['max'])) {
				$this->addUsingAlias(LpItemPeer::LP_ID, $lpId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::LP_ID, $lpId, $comparison);
	}

	/**
	 * Filter the query on the item_type column
	 * 
	 * @param     string $itemType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByItemType($itemType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($itemType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $itemType)) {
				$itemType = str_replace('*', '%', $itemType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::ITEM_TYPE, $itemType, $comparison);
	}

	/**
	 * Filter the query on the ref column
	 * 
	 * @param     string $ref The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpItemPeer::REF, $ref, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpItemPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpItemPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LpItemPeer::PATH, $path, $comparison);
	}

	/**
	 * Filter the query on the min_score column
	 * 
	 * @param     double|array $minScore The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByMinScore($minScore = null, $comparison = null)
	{
		if (is_array($minScore)) {
			$useMinMax = false;
			if (isset($minScore['min'])) {
				$this->addUsingAlias(LpItemPeer::MIN_SCORE, $minScore['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($minScore['max'])) {
				$this->addUsingAlias(LpItemPeer::MIN_SCORE, $minScore['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::MIN_SCORE, $minScore, $comparison);
	}

	/**
	 * Filter the query on the max_score column
	 * 
	 * @param     double|array $maxScore The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByMaxScore($maxScore = null, $comparison = null)
	{
		if (is_array($maxScore)) {
			$useMinMax = false;
			if (isset($maxScore['min'])) {
				$this->addUsingAlias(LpItemPeer::MAX_SCORE, $maxScore['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxScore['max'])) {
				$this->addUsingAlias(LpItemPeer::MAX_SCORE, $maxScore['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::MAX_SCORE, $maxScore, $comparison);
	}

	/**
	 * Filter the query on the mastery_score column
	 * 
	 * @param     double|array $masteryScore The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByMasteryScore($masteryScore = null, $comparison = null)
	{
		if (is_array($masteryScore)) {
			$useMinMax = false;
			if (isset($masteryScore['min'])) {
				$this->addUsingAlias(LpItemPeer::MASTERY_SCORE, $masteryScore['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($masteryScore['max'])) {
				$this->addUsingAlias(LpItemPeer::MASTERY_SCORE, $masteryScore['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::MASTERY_SCORE, $masteryScore, $comparison);
	}

	/**
	 * Filter the query on the parent_item_id column
	 * 
	 * @param     int|array $parentItemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByParentItemId($parentItemId = null, $comparison = null)
	{
		if (is_array($parentItemId)) {
			$useMinMax = false;
			if (isset($parentItemId['min'])) {
				$this->addUsingAlias(LpItemPeer::PARENT_ITEM_ID, $parentItemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentItemId['max'])) {
				$this->addUsingAlias(LpItemPeer::PARENT_ITEM_ID, $parentItemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::PARENT_ITEM_ID, $parentItemId, $comparison);
	}

	/**
	 * Filter the query on the previous_item_id column
	 * 
	 * @param     int|array $previousItemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByPreviousItemId($previousItemId = null, $comparison = null)
	{
		if (is_array($previousItemId)) {
			$useMinMax = false;
			if (isset($previousItemId['min'])) {
				$this->addUsingAlias(LpItemPeer::PREVIOUS_ITEM_ID, $previousItemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($previousItemId['max'])) {
				$this->addUsingAlias(LpItemPeer::PREVIOUS_ITEM_ID, $previousItemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::PREVIOUS_ITEM_ID, $previousItemId, $comparison);
	}

	/**
	 * Filter the query on the next_item_id column
	 * 
	 * @param     int|array $nextItemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByNextItemId($nextItemId = null, $comparison = null)
	{
		if (is_array($nextItemId)) {
			$useMinMax = false;
			if (isset($nextItemId['min'])) {
				$this->addUsingAlias(LpItemPeer::NEXT_ITEM_ID, $nextItemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nextItemId['max'])) {
				$this->addUsingAlias(LpItemPeer::NEXT_ITEM_ID, $nextItemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::NEXT_ITEM_ID, $nextItemId, $comparison);
	}

	/**
	 * Filter the query on the display_order column
	 * 
	 * @param     int|array $displayOrder The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByDisplayOrder($displayOrder = null, $comparison = null)
	{
		if (is_array($displayOrder)) {
			$useMinMax = false;
			if (isset($displayOrder['min'])) {
				$this->addUsingAlias(LpItemPeer::DISPLAY_ORDER, $displayOrder['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($displayOrder['max'])) {
				$this->addUsingAlias(LpItemPeer::DISPLAY_ORDER, $displayOrder['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::DISPLAY_ORDER, $displayOrder, $comparison);
	}

	/**
	 * Filter the query on the prerequisite column
	 * 
	 * @param     string $prerequisite The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByPrerequisite($prerequisite = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($prerequisite)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $prerequisite)) {
				$prerequisite = str_replace('*', '%', $prerequisite);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::PREREQUISITE, $prerequisite, $comparison);
	}

	/**
	 * Filter the query on the parameters column
	 * 
	 * @param     string $parameters The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByParameters($parameters = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($parameters)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $parameters)) {
				$parameters = str_replace('*', '%', $parameters);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::PARAMETERS, $parameters, $comparison);
	}

	/**
	 * Filter the query on the launch_data column
	 * 
	 * @param     string $launchData The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByLaunchData($launchData = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($launchData)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $launchData)) {
				$launchData = str_replace('*', '%', $launchData);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::LAUNCH_DATA, $launchData, $comparison);
	}

	/**
	 * Filter the query on the max_time_allowed column
	 * 
	 * @param     string $maxTimeAllowed The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByMaxTimeAllowed($maxTimeAllowed = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($maxTimeAllowed)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $maxTimeAllowed)) {
				$maxTimeAllowed = str_replace('*', '%', $maxTimeAllowed);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::MAX_TIME_ALLOWED, $maxTimeAllowed, $comparison);
	}

	/**
	 * Filter the query on the terms column
	 * 
	 * @param     string $terms The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByTerms($terms = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($terms)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $terms)) {
				$terms = str_replace('*', '%', $terms);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::TERMS, $terms, $comparison);
	}

	/**
	 * Filter the query on the search_did column
	 * 
	 * @param     int|array $searchDid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterBySearchDid($searchDid = null, $comparison = null)
	{
		if (is_array($searchDid)) {
			$useMinMax = false;
			if (isset($searchDid['min'])) {
				$this->addUsingAlias(LpItemPeer::SEARCH_DID, $searchDid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($searchDid['max'])) {
				$this->addUsingAlias(LpItemPeer::SEARCH_DID, $searchDid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LpItemPeer::SEARCH_DID, $searchDid, $comparison);
	}

	/**
	 * Filter the query on the audio column
	 * 
	 * @param     string $audio The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function filterByAudio($audio = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($audio)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $audio)) {
				$audio = str_replace('*', '%', $audio);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LpItemPeer::AUDIO, $audio, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LpItem $lpItem Object to remove from the list of results
	 *
	 * @return    LpItemQuery The current query, for fluid interface
	 */
	public function prune($lpItem = null)
	{
		if ($lpItem) {
			$this->addUsingAlias(LpItemPeer::ID, $lpItem->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLpItemQuery
