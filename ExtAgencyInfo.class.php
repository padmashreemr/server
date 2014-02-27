<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class ExtAgencyInfo extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ExtAgencyInfo';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='ext_agency_info';
	const SQL_INSERT='INSERT INTO `ext_agency_info` (`agency_id`,`ag_name`,`ag_street`,`ag_area`,`ag_city`,`ag_pin`,`ag_phone`,`ag_TIN`,`ag_service`,`ag_relation`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `ext_agency_info` (`ag_name`,`ag_street`,`ag_area`,`ag_city`,`ag_pin`,`ag_phone`,`ag_TIN`,`ag_service`,`ag_relation`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `ext_agency_info` SET `agency_id`=?,`ag_name`=?,`ag_street`=?,`ag_area`=?,`ag_city`=?,`ag_pin`=?,`ag_phone`=?,`ag_TIN`=?,`ag_service`=?,`ag_relation`=? WHERE `agency_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `ext_agency_info` WHERE `agency_id`=?';
	const SQL_DELETE_PK='DELETE FROM `ext_agency_info` WHERE `agency_id`=?';
	const FIELD_AGENCY_ID=-871266767;
	const FIELD_AG_NAME=-220974944;
	const FIELD_AG_STREET=-1742678824;
	const FIELD_AG_AREA=-221346142;
	const FIELD_AG_CITY=-221294720;
	const FIELD_AG_PIN=269968608;
	const FIELD_AG_PHONE=1741769209;
	const FIELD_AG_TIN=269940676;
	const FIELD_AG_SERVICE=1382603904;
	const FIELD_AG_RELATION=-2022597231;
	private static $PRIMARY_KEYS=array(self::FIELD_AGENCY_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_AGENCY_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_AGENCY_ID=>'agency_id',
		self::FIELD_AG_NAME=>'ag_name',
		self::FIELD_AG_STREET=>'ag_street',
		self::FIELD_AG_AREA=>'ag_area',
		self::FIELD_AG_CITY=>'ag_city',
		self::FIELD_AG_PIN=>'ag_pin',
		self::FIELD_AG_PHONE=>'ag_phone',
		self::FIELD_AG_TIN=>'ag_TIN',
		self::FIELD_AG_SERVICE=>'ag_service',
		self::FIELD_AG_RELATION=>'ag_relation');
	private static $PROPERTY_NAMES=array(
		self::FIELD_AGENCY_ID=>'agencyId',
		self::FIELD_AG_NAME=>'agName',
		self::FIELD_AG_STREET=>'agStreet',
		self::FIELD_AG_AREA=>'agArea',
		self::FIELD_AG_CITY=>'agCity',
		self::FIELD_AG_PIN=>'agPin',
		self::FIELD_AG_PHONE=>'agPhone',
		self::FIELD_AG_TIN=>'agTin',
		self::FIELD_AG_SERVICE=>'agService',
		self::FIELD_AG_RELATION=>'agRelation');
	private static $PROPERTY_TYPES=array(
		self::FIELD_AGENCY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_AG_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_STREET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_AREA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_PIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_PHONE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_TIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_SERVICE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AG_RELATION=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_AGENCY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_AG_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_AG_STREET=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,1000,0,true),
		self::FIELD_AG_AREA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,1000,0,true),
		self::FIELD_AG_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_AG_PIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_AG_PHONE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,15,0,true),
		self::FIELD_AG_TIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_AG_SERVICE=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_AG_RELATION=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_AGENCY_ID=>null,
		self::FIELD_AG_NAME=>null,
		self::FIELD_AG_STREET=>null,
		self::FIELD_AG_AREA=>null,
		self::FIELD_AG_CITY=>null,
		self::FIELD_AG_PIN=>null,
		self::FIELD_AG_PHONE=>null,
		self::FIELD_AG_TIN=>null,
		self::FIELD_AG_SERVICE=>null,
		self::FIELD_AG_RELATION=>null);
	private $agencyId;
	private $agName;
	private $agStreet;
	private $agArea;
	private $agCity;
	private $agPin;
	private $agPhone;
	private $agTin;
	private $agService;
	private $agRelation;

	
       public function __construct($name, $address, $phone, $tin, $service, $relation) {
            $this->agName = $name;
            $this->agPhone = $phone;
            $this->agStreet = $address->street;
            $this->agArea = $address->area;
            $this->agCity = $address->city;
            $this->agPin = $address->PIN;
            $this->agTin = $tin;
            $this->agService = $service;
            $this->agRelation = $relation;
        }
        
        public function getAllFieldsFromDB() {
            if($this->agencyId == NULL)
            {
                //find if the apartment exists in the database
                $con = connectDB("NestAdmin", "nestadminpw");
            
                $query = "SELECT * from ext_agency_info WHERE ((ag_name = $this->agName) AND (ag_phone = $this->agPhone))";
                
                if($result = $con->query($query)){
                
                    /* fetch associative array */
                    foreach ($result as $row) {
                        $this->agencyId = $row["agency_id"];
                        $this->agStreet = $row["ag_street"];
                        $this->agArea = $row["ag_area"];
                        $this->agCity = $row["ag_city"];
                        $this->agPin = $row["ag_pin"];
                        $this->agTin = $row["ag_tin"];
                        $this->agService = $row["ag_service"];
                        $this->agRelation = $row["ag_relation"];
                    }
                    
                    /* free result set */
                    $result->closeCursor();
                }
                /* close connection */
                $con = NULL;
                
            }
		return $this->agencyId;
	}
 
        /**
	 * set value for agency_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $agencyId
	 * @return ExtAgencyInfo
	 */
	public function &setAgencyId($agencyId) {
		$this->notifyChanged(self::FIELD_AGENCY_ID,$this->agencyId,$agencyId);
		$this->agencyId=$agencyId;
		return $this;
	}

	/**
	 * get value for agency_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getAgencyId() {
		return $this->agencyId;
	}

	/**
	 * set value for ag_name 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @param mixed $agName
	 * @return ExtAgencyInfo
	 */
	public function &setAgName($agName) {
		$this->notifyChanged(self::FIELD_AG_NAME,$this->agName,$agName);
		$this->agName=$agName;
		return $this;
	}

	/**
	 * get value for ag_name 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getAgName() {
		return $this->agName;
	}

	/**
	 * set value for ag_street 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @param mixed $agStreet
	 * @return ExtAgencyInfo
	 */
	public function &setAgStreet($agStreet) {
		$this->notifyChanged(self::FIELD_AG_STREET,$this->agStreet,$agStreet);
		$this->agStreet=$agStreet;
		return $this;
	}

	/**
	 * get value for ag_street 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgStreet() {
		return $this->agStreet;
	}

	/**
	 * set value for ag_area 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @param mixed $agArea
	 * @return ExtAgencyInfo
	 */
	public function &setAgArea($agArea) {
		$this->notifyChanged(self::FIELD_AG_AREA,$this->agArea,$agArea);
		$this->agArea=$agArea;
		return $this;
	}

	/**
	 * get value for ag_area 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgArea() {
		return $this->agArea;
	}

	/**
	 * set value for ag_city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $agCity
	 * @return ExtAgencyInfo
	 */
	public function &setAgCity($agCity) {
		$this->notifyChanged(self::FIELD_AG_CITY,$this->agCity,$agCity);
		$this->agCity=$agCity;
		return $this;
	}

	/**
	 * get value for ag_city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgCity() {
		return $this->agCity;
	}

	/**
	 * set value for ag_pin 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $agPin
	 * @return ExtAgencyInfo
	 */
	public function &setAgPin($agPin) {
		$this->notifyChanged(self::FIELD_AG_PIN,$this->agPin,$agPin);
		$this->agPin=$agPin;
		return $this;
	}

	/**
	 * get value for ag_pin 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgPin() {
		return $this->agPin;
	}

	/**
	 * set value for ag_phone 
	 *
	 * type:VARCHAR,size:15,default:null,unique,nullable
	 *
	 * @param mixed $agPhone
	 * @return ExtAgencyInfo
	 */
	public function &setAgPhone($agPhone) {
		$this->notifyChanged(self::FIELD_AG_PHONE,$this->agPhone,$agPhone);
		$this->agPhone=$agPhone;
		return $this;
	}

	/**
	 * get value for ag_phone 
	 *
	 * type:VARCHAR,size:15,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getAgPhone() {
		return $this->agPhone;
	}

	/**
	 * set value for ag_TIN 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $agTin
	 * @return ExtAgencyInfo
	 */
	public function &setAgTin($agTin) {
		$this->notifyChanged(self::FIELD_AG_TIN,$this->agTin,$agTin);
		$this->agTin=$agTin;
		return $this;
	}

	/**
	 * get value for ag_TIN 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgTin() {
		return $this->agTin;
	}

	/**
	 * set value for ag_service 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $agService
	 * @return ExtAgencyInfo
	 */
	public function &setAgService($agService) {
		$this->notifyChanged(self::FIELD_AG_SERVICE,$this->agService,$agService);
		$this->agService=$agService;
		return $this;
	}

	/**
	 * get value for ag_service 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgService() {
		return $this->agService;
	}

	/**
	 * set value for ag_relation 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $agRelation
	 * @return ExtAgencyInfo
	 */
	public function &setAgRelation($agRelation) {
		$this->notifyChanged(self::FIELD_AG_RELATION,$this->agRelation,$agRelation);
		$this->agRelation=$agRelation;
		return $this;
	}

	/**
	 * get value for ag_relation 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAgRelation() {
		return $this->agRelation;
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
			self::FIELD_AGENCY_ID=>$this->getAgencyId(),
			self::FIELD_AG_NAME=>$this->getAgName(),
			self::FIELD_AG_STREET=>$this->getAgStreet(),
			self::FIELD_AG_AREA=>$this->getAgArea(),
			self::FIELD_AG_CITY=>$this->getAgCity(),
			self::FIELD_AG_PIN=>$this->getAgPin(),
			self::FIELD_AG_PHONE=>$this->getAgPhone(),
			self::FIELD_AG_TIN=>$this->getAgTin(),
			self::FIELD_AG_SERVICE=>$this->getAgService(),
			self::FIELD_AG_RELATION=>$this->getAgRelation());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_AGENCY_ID=>$this->getAgencyId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of ExtAgencyInfo instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ExtAgencyInfo $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ExtAgencyInfo[]
	 */
	public static function findByExample(PDO $db,ExtAgencyInfo $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ExtAgencyInfo instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ExtAgencyInfo[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `ext_agency_info`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ExtAgencyInfo instances
	 *
	 * @param PDOStatement $stmt
	 * @return ExtAgencyInfo[]
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
	 * returns the result as an array of ExtAgencyInfo instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ExtAgencyInfo[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ExtAgencyInfo();
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
	 * Execute select query and return matched rows as an array of ExtAgencyInfo instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ExtAgencyInfo[]
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
		$sql='DELETE FROM `ext_agency_info`'
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
		$this->setAgencyId($result['agency_id']);
		$this->setAgName($result['ag_name']);
		$this->setAgStreet($result['ag_street']);
		$this->setAgArea($result['ag_area']);
		$this->setAgCity($result['ag_city']);
		$this->setAgPin($result['ag_pin']);
		$this->setAgPhone($result['ag_phone']);
		$this->setAgTin($result['ag_TIN']);
		$this->setAgService($result['ag_service']);
		$this->setAgRelation($result['ag_relation']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ExtAgencyInfo
	 */
	public static function findById(PDO $db,$agencyId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$agencyId);
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
		$o=new ExtAgencyInfo();
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
		$stmt->bindValue(1,$this->getAgencyId());
		$stmt->bindValue(2,$this->getAgName());
		$stmt->bindValue(3,$this->getAgStreet());
		$stmt->bindValue(4,$this->getAgArea());
		$stmt->bindValue(5,$this->getAgCity());
		$stmt->bindValue(6,$this->getAgPin());
		$stmt->bindValue(7,$this->getAgPhone());
		$stmt->bindValue(8,$this->getAgTin());
		$stmt->bindValue(9,$this->getAgService());
		$stmt->bindValue(10,$this->getAgRelation());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getAgencyId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getAgName());
			$stmt->bindValue(2,$this->getAgStreet());
			$stmt->bindValue(3,$this->getAgArea());
			$stmt->bindValue(4,$this->getAgCity());
			$stmt->bindValue(5,$this->getAgPin());
			$stmt->bindValue(6,$this->getAgPhone());
			$stmt->bindValue(7,$this->getAgTin());
			$stmt->bindValue(8,$this->getAgService());
			$stmt->bindValue(9,$this->getAgRelation());
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
			$this->setAgencyId($lastInsertId);
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
		$stmt->bindValue(11,$this->getAgencyId());
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
		$stmt->bindValue(1,$this->getAgencyId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch MoneyTransaction's which this ExtAgencyInfo references.
	 * `ext_agency_info`.`agency_id` -> `MoneyTransaction`.`ext_agency_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MoneyTransaction[]
	 */
	public function fetchMoneyTransactionCollection(PDO $db, $sort=null) {
		$filter=array(MoneyTransaction::FIELD_EXT_AGENCY_ID=>$this->getAgencyId());
		return MoneyTransaction::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch PersonInfo's which this ExtAgencyInfo references.
	 * `ext_agency_info`.`agency_id` -> `person_info`.`agency_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return PersonInfo[]
	 */
	public function fetchPersonInfoCollection(PDO $db, $sort=null) {
		$filter=array(PersonInfo::FIELD_AGENCY_ID=>$this->getAgencyId());
		return PersonInfo::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'ExtAgencyInfo');
	}

	/**
	 * get single ExtAgencyInfo instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ExtAgencyInfo
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ExtAgencyInfo();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ExtAgencyInfo from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ExtAgencyInfo[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ExtAgencyInfo') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>