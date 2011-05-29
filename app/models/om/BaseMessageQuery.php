<?php


/**
 * Base class that represents a query for the 'message' table.
 *
 * 
 *
 * @method     MessageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MessageQuery orderByUserSenderId($order = Criteria::ASC) Order by the user_sender_id column
 * @method     MessageQuery orderByUserReceiverId($order = Criteria::ASC) Order by the user_receiver_id column
 * @method     MessageQuery orderByMsgStatus($order = Criteria::ASC) Order by the msg_status column
 * @method     MessageQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     MessageQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     MessageQuery orderByContent($order = Criteria::ASC) Order by the content column
 *
 * @method     MessageQuery groupById() Group by the id column
 * @method     MessageQuery groupByUserSenderId() Group by the user_sender_id column
 * @method     MessageQuery groupByUserReceiverId() Group by the user_receiver_id column
 * @method     MessageQuery groupByMsgStatus() Group by the msg_status column
 * @method     MessageQuery groupBySendDate() Group by the send_date column
 * @method     MessageQuery groupByTitle() Group by the title column
 * @method     MessageQuery groupByContent() Group by the content column
 *
 * @method     MessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Message findOne(PropelPDO $con = null) Return the first Message matching the query
 * @method     Message findOneOrCreate(PropelPDO $con = null) Return the first Message matching the query, or a new Message object populated from the query conditions when no match is found
 *
 * @method     Message findOneById(string $id) Return the first Message filtered by the id column
 * @method     Message findOneByUserSenderId(int $user_sender_id) Return the first Message filtered by the user_sender_id column
 * @method     Message findOneByUserReceiverId(int $user_receiver_id) Return the first Message filtered by the user_receiver_id column
 * @method     Message findOneByMsgStatus(int $msg_status) Return the first Message filtered by the msg_status column
 * @method     Message findOneBySendDate(string $send_date) Return the first Message filtered by the send_date column
 * @method     Message findOneByTitle(string $title) Return the first Message filtered by the title column
 * @method     Message findOneByContent(string $content) Return the first Message filtered by the content column
 *
 * @method     array findById(string $id) Return Message objects filtered by the id column
 * @method     array findByUserSenderId(int $user_sender_id) Return Message objects filtered by the user_sender_id column
 * @method     array findByUserReceiverId(int $user_receiver_id) Return Message objects filtered by the user_receiver_id column
 * @method     array findByMsgStatus(int $msg_status) Return Message objects filtered by the msg_status column
 * @method     array findBySendDate(string $send_date) Return Message objects filtered by the send_date column
 * @method     array findByTitle(string $title) Return Message objects filtered by the title column
 * @method     array findByContent(string $content) Return Message objects filtered by the content column
 *
 * @package    propel.generator.dokeos.om
 */
abstract class BaseMessageQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMessageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'dokeos', $modelName = 'Message', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MessageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MessageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MessageQuery) {
			return $criteria;
		}
		$query = new MessageQuery();
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
	 * @return    Message|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MessagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MessagePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MessagePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MessagePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_sender_id column
	 * 
	 * @param     int|array $userSenderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterByUserSenderId($userSenderId = null, $comparison = null)
	{
		if (is_array($userSenderId)) {
			$useMinMax = false;
			if (isset($userSenderId['min'])) {
				$this->addUsingAlias(MessagePeer::USER_SENDER_ID, $userSenderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userSenderId['max'])) {
				$this->addUsingAlias(MessagePeer::USER_SENDER_ID, $userSenderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MessagePeer::USER_SENDER_ID, $userSenderId, $comparison);
	}

	/**
	 * Filter the query on the user_receiver_id column
	 * 
	 * @param     int|array $userReceiverId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterByUserReceiverId($userReceiverId = null, $comparison = null)
	{
		if (is_array($userReceiverId)) {
			$useMinMax = false;
			if (isset($userReceiverId['min'])) {
				$this->addUsingAlias(MessagePeer::USER_RECEIVER_ID, $userReceiverId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userReceiverId['max'])) {
				$this->addUsingAlias(MessagePeer::USER_RECEIVER_ID, $userReceiverId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MessagePeer::USER_RECEIVER_ID, $userReceiverId, $comparison);
	}

	/**
	 * Filter the query on the msg_status column
	 * 
	 * @param     int|array $msgStatus The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterByMsgStatus($msgStatus = null, $comparison = null)
	{
		if (is_array($msgStatus)) {
			$useMinMax = false;
			if (isset($msgStatus['min'])) {
				$this->addUsingAlias(MessagePeer::MSG_STATUS, $msgStatus['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($msgStatus['max'])) {
				$this->addUsingAlias(MessagePeer::MSG_STATUS, $msgStatus['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MessagePeer::MSG_STATUS, $msgStatus, $comparison);
	}

	/**
	 * Filter the query on the send_date column
	 * 
	 * @param     string|array $sendDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function filterBySendDate($sendDate = null, $comparison = null)
	{
		if (is_array($sendDate)) {
			$useMinMax = false;
			if (isset($sendDate['min'])) {
				$this->addUsingAlias(MessagePeer::SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sendDate['max'])) {
				$this->addUsingAlias(MessagePeer::SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MessagePeer::SEND_DATE, $sendDate, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MessagePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MessageQuery The current query, for fluid interface
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
		return $this->addUsingAlias(MessagePeer::CONTENT, $content, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Message $message Object to remove from the list of results
	 *
	 * @return    MessageQuery The current query, for fluid interface
	 */
	public function prune($message = null)
	{
		if ($message) {
			$this->addUsingAlias(MessagePeer::ID, $message->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMessageQuery
