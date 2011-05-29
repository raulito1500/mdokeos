<?php


/**
 * Base class that represents a query for the 'openid_association' table.
 *
 * 
 *
 * @method     OpenidAssociationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     OpenidAssociationQuery orderByIdpEndpointUri($order = Criteria::ASC) Order by the idp_endpoint_uri column
 * @method     OpenidAssociationQuery orderBySessionType($order = Criteria::ASC) Order by the session_type column
 * @method     OpenidAssociationQuery orderByAssocHandle($order = Criteria::ASC) Order by the assoc_handle column
 * @method     OpenidAssociationQuery orderByAssocType($order = Criteria::ASC) Order by the assoc_type column
 * @method     OpenidAssociationQuery orderByExpiresIn($order = Criteria::ASC) Order by the expires_in column
 * @method     OpenidAssociationQuery orderByMacKey($order = Criteria::ASC) Order by the mac_key column
 * @method     OpenidAssociationQuery orderByCreated($order = Criteria::ASC) Order by the created column
 *
 * @method     OpenidAssociationQuery groupById() Group by the id column
 * @method     OpenidAssociationQuery groupByIdpEndpointUri() Group by the idp_endpoint_uri column
 * @method     OpenidAssociationQuery groupBySessionType() Group by the session_type column
 * @method     OpenidAssociationQuery groupByAssocHandle() Group by the assoc_handle column
 * @method     OpenidAssociationQuery groupByAssocType() Group by the assoc_type column
 * @method     OpenidAssociationQuery groupByExpiresIn() Group by the expires_in column
 * @method     OpenidAssociationQuery groupByMacKey() Group by the mac_key column
 * @method     OpenidAssociationQuery groupByCreated() Group by the created column
 *
 * @method     OpenidAssociationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OpenidAssociationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OpenidAssociationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OpenidAssociation findOne(PropelPDO $con = null) Return the first OpenidAssociation matching the query
 * @method     OpenidAssociation findOneOrCreate(PropelPDO $con = null) Return the first OpenidAssociation matching the query, or a new OpenidAssociation object populated from the query conditions when no match is found
 *
 * @method     OpenidAssociation findOneById(int $id) Return the first OpenidAssociation filtered by the id column
 * @method     OpenidAssociation findOneByIdpEndpointUri(string $idp_endpoint_uri) Return the first OpenidAssociation filtered by the idp_endpoint_uri column
 * @method     OpenidAssociation findOneBySessionType(string $session_type) Return the first OpenidAssociation filtered by the session_type column
 * @method     OpenidAssociation findOneByAssocHandle(string $assoc_handle) Return the first OpenidAssociation filtered by the assoc_handle column
 * @method     OpenidAssociation findOneByAssocType(string $assoc_type) Return the first OpenidAssociation filtered by the assoc_type column
 * @method     OpenidAssociation findOneByExpiresIn(string $expires_in) Return the first OpenidAssociation filtered by the expires_in column
 * @method     OpenidAssociation findOneByMacKey(string $mac_key) Return the first OpenidAssociation filtered by the mac_key column
 * @method     OpenidAssociation findOneByCreated(string $created) Return the first OpenidAssociation filtered by the created column
 *
 * @method     array findById(int $id) Return OpenidAssociation objects filtered by the id column
 * @method     array findByIdpEndpointUri(string $idp_endpoint_uri) Return OpenidAssociation objects filtered by the idp_endpoint_uri column
 * @method     array findBySessionType(string $session_type) Return OpenidAssociation objects filtered by the session_type column
 * @method     array findByAssocHandle(string $assoc_handle) Return OpenidAssociation objects filtered by the assoc_handle column
 * @method     array findByAssocType(string $assoc_type) Return OpenidAssociation objects filtered by the assoc_type column
 * @method     array findByExpiresIn(string $expires_in) Return OpenidAssociation objects filtered by the expires_in column
 * @method     array findByMacKey(string $mac_key) Return OpenidAssociation objects filtered by the mac_key column
 * @method     array findByCreated(string $created) Return OpenidAssociation objects filtered by the created column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseOpenidAssociationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOpenidAssociationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'OpenidAssociation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OpenidAssociationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OpenidAssociationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OpenidAssociationQuery) {
			return $criteria;
		}
		$query = new OpenidAssociationQuery();
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
	 * @return    OpenidAssociation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OpenidAssociationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OpenidAssociationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OpenidAssociationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OpenidAssociationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the idp_endpoint_uri column
	 * 
	 * @param     string $idpEndpointUri The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByIdpEndpointUri($idpEndpointUri = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($idpEndpointUri)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $idpEndpointUri)) {
				$idpEndpointUri = str_replace('*', '%', $idpEndpointUri);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::IDP_ENDPOINT_URI, $idpEndpointUri, $comparison);
	}

	/**
	 * Filter the query on the session_type column
	 * 
	 * @param     string $sessionType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterBySessionType($sessionType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sessionType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sessionType)) {
				$sessionType = str_replace('*', '%', $sessionType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::SESSION_TYPE, $sessionType, $comparison);
	}

	/**
	 * Filter the query on the assoc_handle column
	 * 
	 * @param     string $assocHandle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByAssocHandle($assocHandle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($assocHandle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $assocHandle)) {
				$assocHandle = str_replace('*', '%', $assocHandle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::ASSOC_HANDLE, $assocHandle, $comparison);
	}

	/**
	 * Filter the query on the assoc_type column
	 * 
	 * @param     string $assocType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByAssocType($assocType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($assocType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $assocType)) {
				$assocType = str_replace('*', '%', $assocType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::ASSOC_TYPE, $assocType, $comparison);
	}

	/**
	 * Filter the query on the expires_in column
	 * 
	 * @param     string|array $expiresIn The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByExpiresIn($expiresIn = null, $comparison = null)
	{
		if (is_array($expiresIn)) {
			$useMinMax = false;
			if (isset($expiresIn['min'])) {
				$this->addUsingAlias(OpenidAssociationPeer::EXPIRES_IN, $expiresIn['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expiresIn['max'])) {
				$this->addUsingAlias(OpenidAssociationPeer::EXPIRES_IN, $expiresIn['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::EXPIRES_IN, $expiresIn, $comparison);
	}

	/**
	 * Filter the query on the mac_key column
	 * 
	 * @param     string $macKey The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByMacKey($macKey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($macKey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $macKey)) {
				$macKey = str_replace('*', '%', $macKey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::MAC_KEY, $macKey, $comparison);
	}

	/**
	 * Filter the query on the created column
	 * 
	 * @param     string|array $created The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function filterByCreated($created = null, $comparison = null)
	{
		if (is_array($created)) {
			$useMinMax = false;
			if (isset($created['min'])) {
				$this->addUsingAlias(OpenidAssociationPeer::CREATED, $created['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($created['max'])) {
				$this->addUsingAlias(OpenidAssociationPeer::CREATED, $created['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OpenidAssociationPeer::CREATED, $created, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     OpenidAssociation $openidAssociation Object to remove from the list of results
	 *
	 * @return    OpenidAssociationQuery The current query, for fluid interface
	 */
	public function prune($openidAssociation = null)
	{
		if ($openidAssociation) {
			$this->addUsingAlias(OpenidAssociationPeer::ID, $openidAssociation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOpenidAssociationQuery
