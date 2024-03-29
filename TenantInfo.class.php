<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class TenantInfo extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TenantInfo';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tenant_info';
	const SQL_INSERT='INSERT INTO `tenant_info` (`tenant_id`,`tenancy_start_date`,`tenancy_end_date`,`owner_id`,`apt_id`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tenant_info` (`tenant_id`,`tenancy_start_date`,`tenancy_end_date`,`owner_id`,`apt_id`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tenant_info` SET `tenant_id`=?,`tenancy_start_date`=?,`tenancy_end_date`=?,`owner_id`=?,`apt_id`=? WHERE `tenant_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `tenant_info` WHERE `tenant_id`=?';
	const SQL_DELETE_PK='DELETE FROM `tenant_info` WHERE `tenant_id`=?';
	const FIELD_TENANT_ID=1629545413;
	const FIELD_TENANCY_START_DATE=1419709621;
	const FIELD_TENANCY_END_DATE=-1436060068;
	const FIELD_OWNER_ID=-25634670;
	const FIELD_APT_ID=772760224;
	private static $PRIMARY_KEYS=array(self::FIELD_TENANT_ID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_TENANT_ID=>'tenant_id',
		self::FIELD_TENANCY_START_DATE=>'tenancy_start_date',
		self::FIELD_TENANCY_END_DATE=>'tenancy_end_date',
		self::FIELD_OWNER_ID=>'owner_id',
		self::FIELD_APT_ID=>'apt_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_TENANT_ID=>'tenantId',
		self::FIELD_TENANCY_START_DATE=>'tenancyStartDate',
		self::FIELD_TENANCY_END_DATE=>'tenancyEndDate',
		self::FIELD_OWNER_ID=>'ownerId',
		self::FIELD_APT_ID=>'aptId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_TENANT_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TENANCY_START_DATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TENANCY_END_DATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_OWNER_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_APT_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_TENANT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TENANCY_START_DATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_TENANCY_END_DATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_OWNER_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_APT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_TENANT_ID=>0,
		self::FIELD_TENANCY_START_DATE=>null,
		self::FIELD_TENANCY_END_DATE=>null,
		self::FIELD_OWNER_ID=>null,
		self::FIELD_APT_ID=>null);
	private $tenantId;
	private $tenancyStartDate;
	private $tenancyEndDate;
	private $ownerId;
	private $aptId;

	/**
	 * set value for tenant_id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $tenantId
	 * @return TenantInfo
	 */
	public function &setTenantId($tenantId) {
		$this->notifyChanged(self::FIELD_TENANT_ID,$this->tenantId,$tenantId);
		$this->tenantId=$tenantId;
		return $this;
	}

	/**
	 * get value for tenant_id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getTenantId() {
		return $this->tenantId;
	}

	/**
	 * set value for tenancy_start_date 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $tenancyStartDate
	 * @return TenantInfo
	 */
	public function &setTenancyStartDate($tenancyStartDate) {
		$this->notifyChanged(self::FIELD_TENANCY_START_DATE,$this->tenancyStartDate,$tenancyStartDate);
		$this->tenancyStartDate=$tenancyStartDate;
		return $this;
	}

	/**
	 * get value for tenancy_start_date 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTenancyStartDate() {
		return $this->tenancyStartDate;
	}

	/**
	 * set value for tenancy_end_date 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $tenancyEndDate
	 * @return TenantInfo
	 */
	public function &setTenancyEndDate($tenancyEndDate) {
		$this->notifyChanged(self::FIELD_TENANCY_END_DATE,$this->tenancyEndDate,$tenancyEndDate);
		$this->tenancyEndDate=$tenancyEndDate;
		return $this;
	}

	/**
	 * get value for tenancy_end_date 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTenancyEndDate() {
		return $this->tenancyEndDate;
	}

	/**
	 * set value for owner_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $ownerId
	 * @return TenantInfo
	 */
	public function &setOwnerId($ownerId) {
		$this->notifyChanged(self::FIELD_OWNER_ID,$this->ownerId,$ownerId);
		$this->ownerId=$ownerId;
		return $this;
	}

	/**
	 * get value for owner_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getOwnerId() {
		return $this->ownerId;
	}

	/**
	 * set value for apt_id 
	 *
	 * type:INT,size:10,default:null,unique,nullable
	 *
	 * @param mixed $aptId
	 * @return TenantInfo
	 */
	public function &setAptId($aptId) {
		$this->notifyChanged(self::FIELD_APT_ID,$this->aptId,$aptId);
		$this->aptId=$aptId;
		return $this;
	}

	/**
	 * get value for apt_id 
	 *
	 * type:INT,size:10,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getAptId() {
		return $this->aptId;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_TENANT_ID=>$this->getTenantId(),
			self::FIELD_TENANCY_START_DATE=>$this->getTenancyStartDate(),
			self::FIELD_TENANCY_END_DATE=>$this->getTenancyEndDate(),
			self::FIELD_OWNER_ID=>$this->getOwnerId(),
			self::FIELD_APT_ID=>$this->getAptId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_TENANT_ID=>$this->getTenantId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (null===self::$stmts[$statement][$dbInstanceId]) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of TenantInfo instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TenantInfo $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TenantInfo[]
	 */
	public static function findByExample(PDO $db,TenantInfo $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of TenantInfo instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TenantInfo[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tenant_info`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TenantInfo instances
	 *
	 * @param PDOStatement $stmt
	 * @return TenantInfo[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of TenantInfo instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TenantInfo[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TenantInfo();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of TenantInfo instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TenantInfo[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `tenant_info`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setTenantId($result['tenant_id']);
		$this->setTenancyStartDate($result['tenancy_start_date']);
		$this->setTenancyEndDate($result['tenancy_end_date']);
		$this->setOwnerId($result['owner_id']);
		$this->setAptId($result['apt_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TenantInfo
	 */
	public static function findById(PDO $db,$tenantId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$tenantId);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new TenantInfo();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getTenantId());
		$stmt->bindValue(2,$this->getTenancyStartDate());
		$stmt->bindValue(3,$this->getTenancyEndDate());
		$stmt->bindValue(4,$this->getOwnerId());
		$stmt->bindValue(5,$this->getAptId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_INSERT);
		$this->bindValues($stmt);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(6,$this->getTenantId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getTenantId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch AptInfo's which this TenantInfo references.
	 * `tenant_info`.`tenant_id` -> `apt_info`.`tenant_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return AptInfo[]
	 */
	public function fetchAptInfoCollection(PDO $db, $sort=null) {
		$filter=array(AptInfo::FIELD_TENANT_ID=>$this->getTenantId());
		return AptInfo::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch AptInfo which references this TenantInfo. Will return null in case reference is invalid.
	 * `tenant_info`.`apt_id` -> `apt_info`.`apt_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return AptInfo
	 */
	public function fetchAptInfo(PDO $db, $sort=null) {
		$filter=array(AptInfo::FIELD_APT_ID=>$this->getAptId());
		$result=AptInfo::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OwnerInfo which references this TenantInfo. Will return null in case reference is invalid.
	 * `tenant_info`.`owner_id` -> `owner_info`.`owner_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OwnerInfo
	 */
	public function fetchOwnerInfo(PDO $db, $sort=null) {
		$filter=array(OwnerInfo::FIELD_OWNER_ID=>$this->getOwnerId());
		$result=OwnerInfo::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'TenantInfo');
	}

	/**
	 * get single TenantInfo instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TenantInfo
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TenantInfo();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of TenantInfo from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TenantInfo[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TenantInfo') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>