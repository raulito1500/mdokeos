<?php


/**
 * Base class that represents a query for the 'wiki_conf' table.
 *
 * 
 *
 * @method     WikiConfQuery orderByPageId($order = Criteria::ASC) Order by the page_id column
 * @method     WikiConfQuery orderByTask($order = Criteria::ASC) Order by the task column
 * @method     WikiConfQuery orderByFeedback1($order = Criteria::ASC) Order by the feedback1 column
 * @method     WikiConfQuery orderByFeedback2($order = Criteria::ASC) Order by the feedback2 column
 * @method     WikiConfQuery orderByFeedback3($order = Criteria::ASC) Order by the feedback3 column
 * @method     WikiConfQuery orderByFprogress1($order = Criteria::ASC) Order by the fprogress1 column
 * @method     WikiConfQuery orderByFprogress2($order = Criteria::ASC) Order by the fprogress2 column
 * @method     WikiConfQuery orderByFprogress3($order = Criteria::ASC) Order by the fprogress3 column
 * @method     WikiConfQuery orderByMaxSize($order = Criteria::ASC) Order by the max_size column
 * @method     WikiConfQuery orderByMaxText($order = Criteria::ASC) Order by the max_text column
 * @method     WikiConfQuery orderByMaxVersion($order = Criteria::ASC) Order by the max_version column
 * @method     WikiConfQuery orderByStartdateAssig($order = Criteria::ASC) Order by the startdate_assig column
 * @method     WikiConfQuery orderByEnddateAssig($order = Criteria::ASC) Order by the enddate_assig column
 * @method     WikiConfQuery orderByDelayedsubmit($order = Criteria::ASC) Order by the delayedsubmit column
 * @method     WikiConfQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     WikiConfQuery groupByPageId() Group by the page_id column
 * @method     WikiConfQuery groupByTask() Group by the task column
 * @method     WikiConfQuery groupByFeedback1() Group by the feedback1 column
 * @method     WikiConfQuery groupByFeedback2() Group by the feedback2 column
 * @method     WikiConfQuery groupByFeedback3() Group by the feedback3 column
 * @method     WikiConfQuery groupByFprogress1() Group by the fprogress1 column
 * @method     WikiConfQuery groupByFprogress2() Group by the fprogress2 column
 * @method     WikiConfQuery groupByFprogress3() Group by the fprogress3 column
 * @method     WikiConfQuery groupByMaxSize() Group by the max_size column
 * @method     WikiConfQuery groupByMaxText() Group by the max_text column
 * @method     WikiConfQuery groupByMaxVersion() Group by the max_version column
 * @method     WikiConfQuery groupByStartdateAssig() Group by the startdate_assig column
 * @method     WikiConfQuery groupByEnddateAssig() Group by the enddate_assig column
 * @method     WikiConfQuery groupByDelayedsubmit() Group by the delayedsubmit column
 * @method     WikiConfQuery groupById() Group by the id column
 *
 * @method     WikiConfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     WikiConfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     WikiConfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     WikiConf findOne(PropelPDO $con = null) Return the first WikiConf matching the query
 * @method     WikiConf findOneOrCreate(PropelPDO $con = null) Return the first WikiConf matching the query, or a new WikiConf object populated from the query conditions when no match is found
 *
 * @method     WikiConf findOneByPageId(int $page_id) Return the first WikiConf filtered by the page_id column
 * @method     WikiConf findOneByTask(string $task) Return the first WikiConf filtered by the task column
 * @method     WikiConf findOneByFeedback1(string $feedback1) Return the first WikiConf filtered by the feedback1 column
 * @method     WikiConf findOneByFeedback2(string $feedback2) Return the first WikiConf filtered by the feedback2 column
 * @method     WikiConf findOneByFeedback3(string $feedback3) Return the first WikiConf filtered by the feedback3 column
 * @method     WikiConf findOneByFprogress1(string $fprogress1) Return the first WikiConf filtered by the fprogress1 column
 * @method     WikiConf findOneByFprogress2(string $fprogress2) Return the first WikiConf filtered by the fprogress2 column
 * @method     WikiConf findOneByFprogress3(string $fprogress3) Return the first WikiConf filtered by the fprogress3 column
 * @method     WikiConf findOneByMaxSize(int $max_size) Return the first WikiConf filtered by the max_size column
 * @method     WikiConf findOneByMaxText(int $max_text) Return the first WikiConf filtered by the max_text column
 * @method     WikiConf findOneByMaxVersion(int $max_version) Return the first WikiConf filtered by the max_version column
 * @method     WikiConf findOneByStartdateAssig(string $startdate_assig) Return the first WikiConf filtered by the startdate_assig column
 * @method     WikiConf findOneByEnddateAssig(string $enddate_assig) Return the first WikiConf filtered by the enddate_assig column
 * @method     WikiConf findOneByDelayedsubmit(int $delayedsubmit) Return the first WikiConf filtered by the delayedsubmit column
 * @method     WikiConf findOneById(string $id) Return the first WikiConf filtered by the id column
 *
 * @method     array findByPageId(int $page_id) Return WikiConf objects filtered by the page_id column
 * @method     array findByTask(string $task) Return WikiConf objects filtered by the task column
 * @method     array findByFeedback1(string $feedback1) Return WikiConf objects filtered by the feedback1 column
 * @method     array findByFeedback2(string $feedback2) Return WikiConf objects filtered by the feedback2 column
 * @method     array findByFeedback3(string $feedback3) Return WikiConf objects filtered by the feedback3 column
 * @method     array findByFprogress1(string $fprogress1) Return WikiConf objects filtered by the fprogress1 column
 * @method     array findByFprogress2(string $fprogress2) Return WikiConf objects filtered by the fprogress2 column
 * @method     array findByFprogress3(string $fprogress3) Return WikiConf objects filtered by the fprogress3 column
 * @method     array findByMaxSize(int $max_size) Return WikiConf objects filtered by the max_size column
 * @method     array findByMaxText(int $max_text) Return WikiConf objects filtered by the max_text column
 * @method     array findByMaxVersion(int $max_version) Return WikiConf objects filtered by the max_version column
 * @method     array findByStartdateAssig(string $startdate_assig) Return WikiConf objects filtered by the startdate_assig column
 * @method     array findByEnddateAssig(string $enddate_assig) Return WikiConf objects filtered by the enddate_assig column
 * @method     array findByDelayedsubmit(int $delayedsubmit) Return WikiConf objects filtered by the delayedsubmit column
 * @method     array findById(string $id) Return WikiConf objects filtered by the id column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiConfQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWikiConfQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'WikiConf', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new WikiConfQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    WikiConfQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof WikiConfQuery) {
			return $criteria;
		}
		$query = new WikiConfQuery();
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
	 * @return    WikiConf|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = WikiConfPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WikiConfPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WikiConfPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the page_id column
	 * 
	 * @param     int|array $pageId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByPageId($pageId = null, $comparison = null)
	{
		if (is_array($pageId)) {
			$useMinMax = false;
			if (isset($pageId['min'])) {
				$this->addUsingAlias(WikiConfPeer::PAGE_ID, $pageId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pageId['max'])) {
				$this->addUsingAlias(WikiConfPeer::PAGE_ID, $pageId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::PAGE_ID, $pageId, $comparison);
	}

	/**
	 * Filter the query on the task column
	 * 
	 * @param     string $task The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByTask($task = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($task)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $task)) {
				$task = str_replace('*', '%', $task);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::TASK, $task, $comparison);
	}

	/**
	 * Filter the query on the feedback1 column
	 * 
	 * @param     string $feedback1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFeedback1($feedback1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($feedback1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $feedback1)) {
				$feedback1 = str_replace('*', '%', $feedback1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FEEDBACK1, $feedback1, $comparison);
	}

	/**
	 * Filter the query on the feedback2 column
	 * 
	 * @param     string $feedback2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFeedback2($feedback2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($feedback2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $feedback2)) {
				$feedback2 = str_replace('*', '%', $feedback2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FEEDBACK2, $feedback2, $comparison);
	}

	/**
	 * Filter the query on the feedback3 column
	 * 
	 * @param     string $feedback3 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFeedback3($feedback3 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($feedback3)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $feedback3)) {
				$feedback3 = str_replace('*', '%', $feedback3);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FEEDBACK3, $feedback3, $comparison);
	}

	/**
	 * Filter the query on the fprogress1 column
	 * 
	 * @param     string $fprogress1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFprogress1($fprogress1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fprogress1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fprogress1)) {
				$fprogress1 = str_replace('*', '%', $fprogress1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FPROGRESS1, $fprogress1, $comparison);
	}

	/**
	 * Filter the query on the fprogress2 column
	 * 
	 * @param     string $fprogress2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFprogress2($fprogress2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fprogress2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fprogress2)) {
				$fprogress2 = str_replace('*', '%', $fprogress2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FPROGRESS2, $fprogress2, $comparison);
	}

	/**
	 * Filter the query on the fprogress3 column
	 * 
	 * @param     string $fprogress3 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByFprogress3($fprogress3 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fprogress3)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fprogress3)) {
				$fprogress3 = str_replace('*', '%', $fprogress3);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::FPROGRESS3, $fprogress3, $comparison);
	}

	/**
	 * Filter the query on the max_size column
	 * 
	 * @param     int|array $maxSize The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByMaxSize($maxSize = null, $comparison = null)
	{
		if (is_array($maxSize)) {
			$useMinMax = false;
			if (isset($maxSize['min'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_SIZE, $maxSize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxSize['max'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_SIZE, $maxSize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::MAX_SIZE, $maxSize, $comparison);
	}

	/**
	 * Filter the query on the max_text column
	 * 
	 * @param     int|array $maxText The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByMaxText($maxText = null, $comparison = null)
	{
		if (is_array($maxText)) {
			$useMinMax = false;
			if (isset($maxText['min'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_TEXT, $maxText['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxText['max'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_TEXT, $maxText['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::MAX_TEXT, $maxText, $comparison);
	}

	/**
	 * Filter the query on the max_version column
	 * 
	 * @param     int|array $maxVersion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByMaxVersion($maxVersion = null, $comparison = null)
	{
		if (is_array($maxVersion)) {
			$useMinMax = false;
			if (isset($maxVersion['min'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_VERSION, $maxVersion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxVersion['max'])) {
				$this->addUsingAlias(WikiConfPeer::MAX_VERSION, $maxVersion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::MAX_VERSION, $maxVersion, $comparison);
	}

	/**
	 * Filter the query on the startdate_assig column
	 * 
	 * @param     string|array $startdateAssig The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByStartdateAssig($startdateAssig = null, $comparison = null)
	{
		if (is_array($startdateAssig)) {
			$useMinMax = false;
			if (isset($startdateAssig['min'])) {
				$this->addUsingAlias(WikiConfPeer::STARTDATE_ASSIG, $startdateAssig['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startdateAssig['max'])) {
				$this->addUsingAlias(WikiConfPeer::STARTDATE_ASSIG, $startdateAssig['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::STARTDATE_ASSIG, $startdateAssig, $comparison);
	}

	/**
	 * Filter the query on the enddate_assig column
	 * 
	 * @param     string|array $enddateAssig The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByEnddateAssig($enddateAssig = null, $comparison = null)
	{
		if (is_array($enddateAssig)) {
			$useMinMax = false;
			if (isset($enddateAssig['min'])) {
				$this->addUsingAlias(WikiConfPeer::ENDDATE_ASSIG, $enddateAssig['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($enddateAssig['max'])) {
				$this->addUsingAlias(WikiConfPeer::ENDDATE_ASSIG, $enddateAssig['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::ENDDATE_ASSIG, $enddateAssig, $comparison);
	}

	/**
	 * Filter the query on the delayedsubmit column
	 * 
	 * @param     int|array $delayedsubmit The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterByDelayedsubmit($delayedsubmit = null, $comparison = null)
	{
		if (is_array($delayedsubmit)) {
			$useMinMax = false;
			if (isset($delayedsubmit['min'])) {
				$this->addUsingAlias(WikiConfPeer::DELAYEDSUBMIT, $delayedsubmit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($delayedsubmit['max'])) {
				$this->addUsingAlias(WikiConfPeer::DELAYEDSUBMIT, $delayedsubmit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiConfPeer::DELAYEDSUBMIT, $delayedsubmit, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(WikiConfPeer::ID, $id, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     WikiConf $wikiConf Object to remove from the list of results
	 *
	 * @return    WikiConfQuery The current query, for fluid interface
	 */
	public function prune($wikiConf = null)
	{
		if ($wikiConf) {
			$this->addUsingAlias(WikiConfPeer::ID, $wikiConf->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseWikiConfQuery
