<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class AptInfo extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='AptInfo';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='apt_info';
	const SQL_INSERT='INSERT INTO `apt_info` (`apt_id`,`house_number`,`block`,`apt_area`,`apt_type`,`apt_usage`,`owner_id`,`tenant_id`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `apt_info` (`house_number`,`block`,`apt_area`,`apt_type`,`apt_usage`,`owner_id`,`tenant_id`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `apt_info` SET `apt_id`=?,`house_number`=?,`block`=?,`apt_area`=?,`apt_type`=?,`apt_usage`=?,`owner_id`=?,`tenant_id`=? WHERE `apt_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `apt_info` WHERE `apt_id`=?';
	const SQL_DELETE_PK='DELETE FROM `apt_info` WHERE `apt_id`=?';
	const FIELD_APT_ID=536777627;
	const FIELD_HOUSE_NUMBER=702030574;
	const FIELD_BLOCK=987946407;
	const FIELD_APT_AREA=447002381;
	const FIELD_APT_TYPE=447575482;
	const FIELD_APT_USAGE=990668577;
	const FIELD_OWNER_ID=828356301;
	const FIELD_TENANT_ID=-1961505558;
	private static $PRIMARY_KEYS=array(self::FIELD_APT_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_APT_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_APT_ID=>'apt_id',
		self::FIELD_HOUSE_NUMBER=>'house_number',
		self::FIELD_BLOCK=>'block',
		self::FIELD_APT_AREA=>'apt_area',
		self::FIELD_APT_TYPE=>'apt_type',
		self::FIELD_APT_USAGE=>'apt_usage',
		self::FIELD_OWNER_ID=>'owner_id',
		self::FIELD_TENANT_ID=>'tenant_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_APT_ID=>'aptId',
		self::FIELD_HOUSE_NUMBER=>'houseNumber',
		self::FIELD_BLOCK=>'block',
		self::FIELD_APT_AREA=>'aptArea',
		self::FIELD_APT_TYPE=>'aptType',
		self::FIELD_APT_USAGE=>'aptUsage',
		self::FIELD_OWNER_ID=>'ownerId',
		self::FIELD_TENANT_ID=>'tenantId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_APT_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_HOUSE_NUMBER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_BLOCK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_APT_AREA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_APT_TYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_APT_USAGE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_OWNER_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TENANT_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_APT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_HOUSE_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,false),
		self::FIELD_BLOCK=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,3,0,false),
		self::FIELD_APT_AREA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_APT_TYPE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,6,0,true),
		self::FIELD_APT_USAGE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,14,0,true),
		self::FIELD_OWNER_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TENANT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_APT_ID=>null,
		self::FIELD_HOUSE_NUMBER=>'',
		self::FIELD_BLOCK=>'',
		self::FIELD_APT_AREA=>null,
		self::FIELD_APT_TYPE=>null,
		self::FIELD_APT_USAGE=>null,
		self::FIELD_OWNER_ID=>null,
		self::FIELD_TENANT_ID=>null);
	private $aptId;
	private $houseNumber;
	private $block;
	private $aptArea;
	private $aptType;
	private $aptUsage;
	private $ownerId;
	private $tenantId;

        public function __construct($block, $housenumber, $owner_id = NULL, $aptArea=NULL, $aptType=NULL, $aptUsage=NULL, $tenant_id = NULL) {
            $this->block = $block;
            $this->houseNumber = $housenumber;
            $this->ownerId = $owner_id;
            $this->aptArea = $aptArea;
            $this->aptType = $aptType;
            $this->aptUsage = $aptUsage;
            $this->tenantId = $tenant_id;
            $this->aptId = NULL;
        }
        
        public function saveApt(){
            $con = connectDB("NestAdmin", "nestadminpw");
            
            $query = "INSERT IGNORE INTO person_info (firstname, lastname, phone, phone2, street, area, city, pin, PAN, personalIDType, personalIDNum, personalIDRemarks, nationality, otherinfo) 
                VALUES($this->firstname, $this->lastname, $this->phone, $this->phone2, $this->address->street, $this->address->area, $this->address->PIN, $this->pan, $this->personalIdType, $this->personalIdNum, $this->personalIdRemarks, $this->nationality, $this->otherInfo);";
                    
             $result = mysqli_query($con, $query );
                if ($result === FALSE){
                    echo "person_info table creation failed";        

                }
                return result;
        }
               
		/**
	 * get value for apt_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getAllFieldsFromDB() {
            if($this->aptId == NULL)
            {
                //find if the apartment exists in the database
                $con = connectDB("NestAdmin", "nestadminpw");
            
                $query = "SELECT * from apt_info WHERE ((block = $this->block) AND (housenumber = $this->houseNumber))";
                
                if($result = $con->query($query)){
                
                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {
                        $this->aptId = $row["apt_id"];
                        $this->ownerId = $row["owner_id"];
                        $this->aptArea = $row["$apt_area"];
                        $this->aptType = $row["$apt_type"];
                        $this->aptUsage = $row["$apt_usage"];
                        $this->tenantId = $row["$tenant_id"];
                    }
                    
                    /* free result set */
                    $result->free();
                }
                /* close connection */
                $mysqli->close();
                
            }
		return $this->aptId;
	}

	/**
	 * set value for house_number 
	 *
	 * type:VARCHAR,size:10,default:null,unique
	 *
	 * @param mixed $houseNumber
	 * @return AptInfo
	 */
	public function &setHouseNumber($houseNumber) {
		$this->notifyChanged(self::FIELD_HOUSE_NUMBER,$this->houseNumber,$houseNumber);
		$this->houseNumber=$houseNumber;
		return $this;
	}

	/**
	 * get value for house_number 
	 *
	 * type:VARCHAR,size:10,default:null,unique
	 *
	 * @return mixed
	 */
	public function getHouseNumber() {
		return $this->houseNumber;
	}

	/**
	 * set value for block 
	 *
	 * type:VARCHAR,size:3,default:null,unique
	 *
	 * @param mixed $block
	 * @return AptInfo
	 */
	public function &setBlock($block) {
		$this->notifyChanged(self::FIELD_BLOCK,$this->block,$block);
		$this->block=$block;
		return $this;
	}

	/**
	 * get value for block 
	 *
	 * type:VARCHAR,size:3,default:null,unique
	 *
	 * @return mixed
	 */
	public function getBlock() {
		return $this->block;
	}

	/**
	 * set value for apt_area 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $aptArea
	 * @return AptInfo
	 */
	public function &setAptArea($aptArea) {
		$this->notifyChanged(self::FIELD_APT_AREA,$this->aptArea,$aptArea);
		$this->aptArea=$aptArea;
		return $this;
	}

	/**
	 * get value for apt_area 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAptArea() {
		return $this->aptArea;
	}

	/**
	 * set value for apt_type 
	 *
	 * type:ENUM,size:6,default:null,nullable
	 *
	 * @param mixed $aptType
	 * @return AptInfo
	 */
	public function &setAptType($aptType) {
		$this->notifyChanged(self::FIELD_APT_TYPE,$this->aptType,$aptType);
		$this->aptType=$aptType;
		return $this;
	}

	/**
	 * get value for apt_type 
	 *
	 * type:ENUM,size:6,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAptType() {
		return $this->aptType;
	}

	/**
	 * set value for apt_usage 
	 *
	 * type:ENUM,size:14,default:null,nullable
	 *
	 * @param mixed $aptUsage
	 * @return AptInfo
	 */
	public function &setAptUsage($aptUsage) {
		$this->notifyChanged(self::FIELD_APT_USAGE,$this->aptUsage,$aptUsage);
		$this->aptUsage=$aptUsage;
		return $this;
	}

	/**
	 * get value for apt_usage 
	 *
	 * type:ENUM,size:14,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAptUsage() {
		return $this->aptUsage;
	}

	/**
	 * set value for owner_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $ownerId
	 * @return AptInfo
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
	 * set value for tenant_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $tenantId
	 * @return AptInfo
	 */
	public function &setTenantId($tenantId) {
		$this->notifyChanged(self::FIELD_TENANT_ID,$this->tenantId,$tenantId);
		$this->tenantId=$tenantId;
		return $this;
	}

	/**
	 * get value for tenant_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTenantId() {
		return $this->tenantId;
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
			self::FIELD_APT_ID=>$this->getAptId(),
			self::FIELD_HOUSE_NUMBER=>$this->getHouseNumber(),
			self::FIELD_BLOCK=>$this->getBlock(),
			self::FIELD_APT_AREA=>$this->getAptArea(),
			self::FIELD_APT_TYPE=>$this->getAptType(),
			self::FIELD_APT_USAGE=>$this->getAptUsage(),
			self::FIELD_OWNER_ID=>$this->getOwnerId(),
			self::FIELD_TENANT_ID=>$this->getTenantId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_APT_ID=>$this->getAptId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of AptInfo instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param AptInfo $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AptInfo[]
	 */
	public static function findByExample(PDO $db,AptInfo $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of AptInfo instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return AptInfo[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `apt_info`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of AptInfo instances
	 *
	 * @param PDOStatement $stmt
	 * @return AptInfo[]
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
	 * returns the result as an array of AptInfo instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return AptInfo[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new AptInfo();
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
	 * Execute select query and return matched rows as an array of AptInfo instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return AptInfo[]
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
		$sql='DELETE FROM `apt_info`'
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
		$this->setAptId($result['apt_id']);
		$this->setHouseNumber($result['house_number']);
		$this->setBlock($result['block']);
		$this->setAptArea($result['apt_area']);
		$this->setAptType($result['apt_type']);
		$this->setAptUsage($result['apt_usage']);
		$this->setOwnerId($result['owner_id']);
		$this->setTenantId($result['tenant_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return AptInfo
	 */
	public static function findById(PDO $db,$aptId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$aptId);
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
		$o=new AptInfo();
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
		$stmt->bindValue(1,$this->getAptId());
		$stmt->bindValue(2,$this->getHouseNumber());
		$stmt->bindValue(3,$this->getBlock());
		$stmt->bindValue(4,$this->getAptArea());
		$stmt->bindValue(5,$this->getAptType());
		$stmt->bindValue(6,$this->getAptUsage());
		$stmt->bindValue(7,$this->getOwnerId());
		$stmt->bindValue(8,$this->getTenantId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getAptId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getHouseNumber());
			$stmt->bindValue(2,$this->getBlock());
			$stmt->bindValue(3,$this->getAptArea());
			$stmt->bindValue(4,$this->getAptType());
			$stmt->bindValue(5,$this->getAptUsage());
			$stmt->bindValue(6,$this->getOwnerId());
			$stmt->bindValue(7,$this->getTenantId());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setAptId($lastInsertId);
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
		$stmt->bindValue(9,$this->getAptId());
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
		$stmt->bindValue(1,$this->getAptId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch TenantInfo's which this AptInfo references.
	 * `apt_info`.`apt_id` -> `tenant_info`.`apt_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return TenantInfo[]
	 */
	public function fetchTenantInfoCollection(PDO $db, $sort=null) {
		$filter=array(TenantInfo::FIELD_APT_ID=>$this->getAptId());
		return TenantInfo::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch OwnerInfo which references this AptInfo. Will return null in case reference is invalid.
	 * `apt_info`.`owner_id` -> `owner_info`.`owner_id`
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
	 * Fetch TenantInfo which references this AptInfo. Will return null in case reference is invalid.
	 * `apt_info`.`tenant_id` -> `tenant_info`.`tenant_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return TenantInfo
	 */
	public function fetchTenantInfo(PDO $db, $sort=null) {
		$filter=array(TenantInfo::FIELD_TENANT_ID=>$this->getTenantId());
		$result=TenantInfo::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'AptInfo');
	}

	/**
	 * get single AptInfo instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return AptInfo
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new AptInfo();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of AptInfo from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return AptInfo[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('AptInfo') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>