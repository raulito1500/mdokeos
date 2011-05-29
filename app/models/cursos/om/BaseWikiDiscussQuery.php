<?php


/**
 * Base class that represents a query for the 'wiki_discuss' table.
 *
 * 
 *
 * @method     WikiDiscussQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     WikiDiscussQuery orderByPublicationId($order = Criteria::ASC) Order by the publication_id column
 * @method     WikiDiscussQuery orderByUsercId($order = Criteria::ASC) Order by the userc_id column
 * @method     WikiDiscussQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     WikiDiscussQuery orderByPScore($order = Criteria::ASC) Order by the p_score column
 * @method     WikiDiscussQuery orderByDtime($order = Criteria::ASC) Order by the dtime column
 *
 * @method     WikiDiscussQuery groupById() Group by the id column
 * @method     WikiDiscussQuery groupByPublicationId() Group by the publication_id column
 * @method     WikiDiscussQuery groupByUsercId() Group by the userc_id column
 * @method     WikiDiscussQuery groupByComment() Group by the comment column
 * @method     WikiDiscussQuery groupByPScore() Group by the p_score column
 * @method     WikiDiscussQuery groupByDtime() Group by the dtime column
 *
 * @method     WikiDiscussQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     WikiDiscussQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     WikiDiscussQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     WikiDiscuss findOne(PropelPDO $con = null) Return the first WikiDiscuss matching the query
 * @method     WikiDiscuss findOneOrCreate(PropelPDO $con = null) Return the first WikiDiscuss matching the query, or a new WikiDiscuss object populated from the query conditions when no match is found
 *
 * @method     WikiDiscuss findOneById(int $id) Return the first WikiDiscuss filtered by the id column
 * @method     WikiDiscuss findOneByPublicationId(int $publication_id) Return the first WikiDiscuss filtered by the publication_id column
 * @method     WikiDiscuss findOneByUsercId(int $userc_id) Return the first WikiDiscuss filtered by the userc_id column
 * @method     WikiDiscuss findOneByComment(string $comment) Return the first WikiDiscuss filtered by the comment column
 * @method     WikiDiscuss findOneByPScore(string $p_score) Return the first WikiDiscuss filtered by the p_score column
 * @method     WikiDiscuss findOneByDtime(string $dtime) Return the first WikiDiscuss filtered by the dtime column
 *
 * @method     array findById(int $id) Return WikiDiscuss objects filtered by the id column
 * @method     array findByPublicationId(int $publication_id) Return WikiDiscuss objects filtered by the publication_id column
 * @method     array findByUsercId(int $userc_id) Return WikiDiscuss objects filtered by the userc_id column
 * @method     array findByComment(string $comment) Return WikiDiscuss objects filtered by the comment column
 * @method     array findByPScore(string $p_score) Return WikiDiscuss objects filtered by the p_score column
 * @method     array findByDtime(string $dtime) Return WikiDiscuss objects filtered by the dtime column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseWikiDiscussQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseWikiDiscussQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'WikiDiscuss', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new WikiDiscussQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    WikiDiscussQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof WikiDiscussQuery) {
			return $criteria;
		}
		$query = new WikiDiscussQuery();
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
	 * @return    WikiDiscuss|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = WikiDiscussPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(WikiDiscussPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(WikiDiscussPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(WikiDiscussPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the publication_id column
	 * 
	 * @param     int|array $publicationId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByPublicationId($publicationId = null, $comparison = null)
	{
		if (is_array($publicationId)) {
			$useMinMax = false;
			if (isset($publicationId['min'])) {
				$this->addUsingAlias(WikiDiscussPeer::PUBLICATION_ID, $publicationId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publicationId['max'])) {
				$this->addUsingAlias(WikiDiscussPeer::PUBLICATION_ID, $publicationId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiDiscussPeer::PUBLICATION_ID, $publicationId, $comparison);
	}

	/**
	 * Filter the query on the userc_id column
	 * 
	 * @param     int|array $usercId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByUsercId($usercId = null, $comparison = null)
	{
		if (is_array($usercId)) {
			$useMinMax = false;
			if (isset($usercId['min'])) {
				$this->addUsingAlias(WikiDiscussPeer::USERC_ID, $usercId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($usercId['max'])) {
				$this->addUsingAlias(WikiDiscussPeer::USERC_ID, $usercId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiDiscussPeer::USERC_ID, $usercId, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiDiscussPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the p_score column
	 * 
	 * @param     string $pScore The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByPScore($pScore = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pScore)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pScore)) {
				$pScore = str_replace('*', '%', $pScore);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(WikiDiscussPeer::P_SCORE, $pScore, $comparison);
	}

	/**
	 * Filter the query on the dtime column
	 * 
	 * @param     string|array $dtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function filterByDtime($dtime = null, $comparison = null)
	{
		if (is_array($dtime)) {
			$useMinMax = false;
			if (isset($dtime['min'])) {
				$this->addUsingAlias(WikiDiscussPeer::DTIME, $dtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dtime['max'])) {
				$this->addUsingAlias(WikiDiscussPeer::DTIME, $dtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(WikiDiscussPeer::DTIME, $dtime, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     WikiDiscuss $wikiDiscuss Object to remove from the list of results
	 *
	 * @return    WikiDiscussQuery The current query, for fluid interface
	 */
	public function prune($wikiDiscuss = null)
	{
		if ($wikiDiscuss) {
			$this->addUsingAlias(WikiDiscussPeer::ID, $wikiDiscuss->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseWikiDiscussQuery
