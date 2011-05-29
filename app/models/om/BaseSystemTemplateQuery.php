<?php


/**
 * Base class that represents a query for the 'system_template' table.
 *
 * 
 *
 * @method     SystemTemplateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SystemTemplateQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     SystemTemplateQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     SystemTemplateQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     SystemTemplateQuery orderByContent($order = Criteria::ASC) Order by the content column
 *
 * @method     SystemTemplateQuery groupById() Group by the id column
 * @method     SystemTemplateQuery groupByTitle() Group by the title column
 * @method     SystemTemplateQuery groupByComment() Group by the comment column
 * @method     SystemTemplateQuery groupByImage() Group by the image column
 * @method     SystemTemplateQuery groupByContent() Group by the content column
 *
 * @method     SystemTemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SystemTemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SystemTemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SystemTemplate findOne(PropelPDO $con = null) Return the first SystemTemplate matching the query
 * @method     SystemTemplate findOneOrCreate(PropelPDO $con = null) Return the first SystemTemplate matching the query, or a new SystemTemplate object populated from the query conditions when no match is found
 *
 * @method     SystemTemplate findOneById(int $id) Return the first SystemTemplate filtered by the id column
 * @method     SystemTemplate findOneByTitle(string $title) Return the first SystemTemplate filtered by the title column
 * @method     SystemTemplate findOneByComment(string $comment) Return the first SystemTemplate filtered by the comment column
 * @method     SystemTemplate findOneByImage(string $image) Return the first SystemTemplate filtered by the image column
 * @method     SystemTemplate findOneByContent(string $content) Return the first SystemTemplate filtered by the content column
 *
 * @method     array findById(int $id) Return SystemTemplate objects filtered by the id column
 * @method     array findByTitle(string $title) Return SystemTemplate objects filtered by the title column
 * @method     array findByComment(string $comment) Return SystemTemplate objects filtered by the comment column
 * @method     array findByImage(string $image) Return SystemTemplate objects filtered by the image column
 * @method     array findByContent(string $content) Return SystemTemplate objects filtered by the content column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseSystemTemplateQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSystemTemplateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'SystemTemplate', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SystemTemplateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SystemTemplateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SystemTemplateQuery) {
			return $criteria;
		}
		$query = new SystemTemplateQuery();
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
	 * @return    SystemTemplate|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SystemTemplatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SystemTemplateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SystemTemplatePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SystemTemplatePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SystemTemplatePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SystemTemplatePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SystemTemplatePeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the image column
	 * 
	 * @param     string $image The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
	 */
	public function filterByImage($image = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($image)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $image)) {
				$image = str_replace('*', '%', $image);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SystemTemplatePeer::IMAGE, $image, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SystemTemplatePeer::CONTENT, $content, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SystemTemplate $systemTemplate Object to remove from the list of results
	 *
	 * @return    SystemTemplateQuery The current query, for fluid interface
	 */
	public function prune($systemTemplate = null)
	{
		if ($systemTemplate) {
			$this->addUsingAlias(SystemTemplatePeer::ID, $systemTemplate->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSystemTemplateQuery
