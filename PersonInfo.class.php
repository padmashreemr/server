<?php
include_once "global.php";
/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class PersonInfo extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PersonInfo';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='person_info';
	const SQL_INSERT='INSERT INTO `person_info` (`id`,`firstname`,`lastname`,`phone`,`phone2`,`street`,`area`,`city`,`pin`,`PAN`,`personal_id_type`,`personal_id_num`,`personal_id_remarks`,`nationality`,`other_info`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `person_info` (`firstname`,`lastname`,`phone`,`phone2`,`street`,`area`,`city`,`pin`,`PAN`,`personal_id_type`,`personal_id_num`,`personal_id_remarks`,`nationality`,`other_info`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `person_info` SET `id`=?,`firstname`=?,`lastname`=?,`phone`=?,`phone2`=?,`street`=?,`area`=?,`city`=?,`pin`=?,`PAN`=?,`personal_id_type`=?,`personal_id_num`=?,`personal_id_remarks`=?,`nationality`=?,`other_info`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `person_info` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `person_info` WHERE `id`=?';
	const FIELD_ID=-598406287;
	const FIELD_FIRSTNAME=-1253062107;
	const FIELD_LASTNAME=713373687;
	const FIELD_PHONE=1294243672;
	const FIELD_PHONE2=1466848218;
	const FIELD_STREET=1563898713;
	const FIELD_AREA=456954211;
	const FIELD_CITY=457005633;
	const FIELD_PIN=-1370718721;
	const FIELD_PAN=-1370750745;
	const FIELD_PERSONAL_ID_TYPE=-712380235;
	const FIELD_PERSONAL_ID_NUM=-1269911893;
	const FIELD_PERSONAL_ID_REMARKS=858428824;
	const FIELD_NATIONALITY=-1231192026;
	const FIELD_OTHER_INFO=-225259309;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_FIRSTNAME=>'firstname',
		self::FIELD_LASTNAME=>'lastname',
		self::FIELD_PHONE=>'phone',
		self::FIELD_PHONE2=>'phone2',
		self::FIELD_STREET=>'street',
		self::FIELD_AREA=>'area',
		self::FIELD_CITY=>'city',
		self::FIELD_PIN=>'pin',
		self::FIELD_PAN=>'PAN',
		self::FIELD_PERSONAL_ID_TYPE=>'personal_id_type',
		self::FIELD_PERSONAL_ID_NUM=>'personal_id_num',
		self::FIELD_PERSONAL_ID_REMARKS=>'personal_id_remarks',
		self::FIELD_NATIONALITY=>'nationality',
		self::FIELD_OTHER_INFO=>'other_info');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_FIRSTNAME=>'firstname',
		self::FIELD_LASTNAME=>'lastname',
		self::FIELD_PHONE=>'phone',
		self::FIELD_PHONE2=>'phone2',
		self::FIELD_STREET=>'street',
		self::FIELD_AREA=>'area',
		self::FIELD_CITY=>'city',
		self::FIELD_PIN=>'pin',
		self::FIELD_PAN=>'pan',
		self::FIELD_PERSONAL_ID_TYPE=>'personalIdType',
		self::FIELD_PERSONAL_ID_NUM=>'personalIdNum',
		self::FIELD_PERSONAL_ID_REMARKS=>'personalIdRemarks',
		self::FIELD_NATIONALITY=>'nationality',
		self::FIELD_OTHER_INFO=>'otherInfo');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FIRSTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LASTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STREET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AREA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PAN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PERSONAL_ID_TYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PERSONAL_ID_NUM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PERSONAL_ID_REMARKS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NATIONALITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_OTHER_INFO=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FIRSTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_LASTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,250,0,true),
		self::FIELD_PHONE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_PHONE2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_STREET=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,1000,0,true),
		self::FIELD_AREA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,1000,0,true),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_PAN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_PERSONAL_ID_TYPE=>array(Db2PhpEntity::JDBC_TYPE_CHAR,11,0,true),
		self::FIELD_PERSONAL_ID_NUM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_PERSONAL_ID_REMARKS=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_NATIONALITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_OTHER_INFO=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_FIRSTNAME=>null,
		self::FIELD_LASTNAME=>null,
		self::FIELD_PHONE=>null,
		self::FIELD_PHONE2=>null,
		self::FIELD_STREET=>null,
		self::FIELD_AREA=>null,
		self::FIELD_CITY=>null,
		self::FIELD_PIN=>null,
		self::FIELD_PAN=>null,
		self::FIELD_PERSONAL_ID_TYPE=>null,
		self::FIELD_PERSONAL_ID_NUM=>null,
		self::FIELD_PERSONAL_ID_REMARKS=>null,
		self::FIELD_NATIONALITY=>null,
		self::FIELD_OTHER_INFO=>null);
	private $id;
	private $firstname;
	private $lastname;
	private $phone;
	private $phone2;
        private $aptId;
        private $agencyId;
	private $pan;
	private $personalIdType;
	private $personalIdNum;
	private $personalIdRemarks;
	private $nationality;
	private $otherInfo;
        private $address;
        private $title;

        public function __construct($firstname, $lastname, $apt_id, $agency_id, $title, $address, $contact, $altcontact, $PAN, $id_type, $id_number, $id_desc, $other_info){
               $this->firstname = $firstname;
               $this->lastname = $lastname;
               $this->aptId = $apt_id;
               $this->agencyId = $agency_id;
               $this->phone = $contact;
               $this->phone2 = $altcontact;
               $this->nationality = $nationality;
               $this->address = new address($street, $area, $city, $PIN);
               $this->pan = $pan;
               $this->personalIdType = $id_type;
               $this->personalIdNum = $id_number;
               $this->personalIdRemarks = $id_desc;
               $this->otherInfo = $other_info;
               $this->title = $title;
        }
        
        public function getAllFieldsFromDB($con) {
            if($this->id == NULL)
            {
                //should include contact number to prove uniqueness... NEED TO DO THIS LATER
                $query = "SELECT * from person_info WHERE ((firstname = '$this->firstname') AND (lastname = '$this->lastname'))";
                $result = $con->query($query);
                if($result == FALSE){
                    echo "$query failed";
                }else{
                    //fetch associative array 
                    while ($row = $result->fetch_assoc()) {
                        $this->id = $row["id"];
                        $this->phone = $row["contact"];
                        $this->phone2 = $row["altcontact"];
                        $this->nationality = $row["nationality"];
                        $this->address = new address($row["street"], $row["area"], $row["city"], $row["PIN"]);
                        $this->pan = $row["pan"];
                        $this->personalIdType = $row["id_type"];
                        $this->personalIdNum = $row["id_number"];
                        $this->personalIdRemarks = $row["id_desc"];
                        $this->otherInfo = $row["other_info"];
                        $this->aptId = $row["apt_id"];
                        $this->agencyId = $row["agency_id"];
                        $this->title = $row["title"];
                    }
                    
                    // free result set 
                    $result->free();
                }
                // close connection 
                $con->close();
                
            }
		return $this->id;
	}
        
      	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PersonInfo
	 */
	public function &setId($id) {
		$this->notifyChanged(self::FIELD_ID,$this->id,$id);
		$this->id=$id;
		return $this;
	}

	/**
	 * get value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for firstname 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @param mixed $firstname
	 * @return PersonInfo
	 */
	public function &setFirstname($firstname) {
		$this->notifyChanged(self::FIELD_FIRSTNAME,$this->firstname,$firstname);
		$this->firstname=$firstname;
		return $this;
	}

	/**
	 * get value for firstname 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * set value for lastname 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @param mixed $lastname
	 * @return PersonInfo
	 */
	public function &setLastname($lastname) {
		$this->notifyChanged(self::FIELD_LASTNAME,$this->lastname,$lastname);
		$this->lastname=$lastname;
		return $this;
	}

	/**
	 * get value for lastname 
	 *
	 * type:VARCHAR,size:250,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * set value for phone 
	 *
	 * type:VARCHAR,size:25,default:null,unique,nullable
	 *
	 * @param mixed $phone
	 * @return PersonInfo
	 */
	public function &setPhone($phone) {
		$this->notifyChanged(self::FIELD_PHONE,$this->phone,$phone);
		$this->phone=$phone;
		return $this;
	}

	/**
	 * get value for phone 
	 *
	 * type:VARCHAR,size:25,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * set value for phone2 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $phone2
	 * @return PersonInfo
	 */
	public function &setPhone2($phone2) {
		$this->notifyChanged(self::FIELD_PHONE2,$this->phone2,$phone2);
		$this->phone2=$phone2;
		return $this;
	}

	/**
	 * get value for phone2 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPhone2() {
		return $this->phone2;
	}

	/**
	 * set value for street 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @param mixed $street
	 * @return PersonInfo
	 */
	public function &setStreet($street) {
		$this->notifyChanged(self::FIELD_STREET,$this->street,$street);
		$this->street=$street;
		return $this;
	}

	/**
	 * get value for street 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * set value for area 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @param mixed $area
	 * @return PersonInfo
	 */
	public function &setArea($area) {
		$this->notifyChanged(self::FIELD_AREA,$this->area,$area);
		$this->area=$area;
		return $this;
	}

	/**
	 * get value for area 
	 *
	 * type:VARCHAR,size:1000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getArea() {
		return $this->area;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $city
	 * @return PersonInfo
	 */
	public function &setCity($city) {
		$this->notifyChanged(self::FIELD_CITY,$this->city,$city);
		$this->city=$city;
		return $this;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for pin 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $pin
	 * @return PersonInfo
	 */
	public function &setPin($pin) {
		$this->notifyChanged(self::FIELD_PIN,$this->pin,$pin);
		$this->pin=$pin;
		return $this;
	}

	/**
	 * get value for pin 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPin() {
		return $this->pin;
	}

	/**
	 * set value for PAN 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $pan
	 * @return PersonInfo
	 */
	public function &setPan($pan) {
		$this->notifyChanged(self::FIELD_PAN,$this->pan,$pan);
		$this->pan=$pan;
		return $this;
	}

	/**
	 * get value for PAN 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPan() {
		return $this->pan;
	}

	/**
	 * set value for personal_id_type 
	 *
	 * type:ENUM,size:11,default:null,nullable
	 *
	 * @param mixed $personalIdType
	 * @return PersonInfo
	 */
	public function &setPersonalIdType($personalIdType) {
		$this->notifyChanged(self::FIELD_PERSONAL_ID_TYPE,$this->personalIdType,$personalIdType);
		$this->personalIdType=$personalIdType;
		return $this;
	}

	/**
	 * get value for personal_id_type 
	 *
	 * type:ENUM,size:11,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPersonalIdType() {
		return $this->personalIdType;
	}

	/**
	 * set value for personal_id_num 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $personalIdNum
	 * @return PersonInfo
	 */
	public function &setPersonalIdNum($personalIdNum) {
		$this->notifyChanged(self::FIELD_PERSONAL_ID_NUM,$this->personalIdNum,$personalIdNum);
		$this->personalIdNum=$personalIdNum;
		return $this;
	}

	/**
	 * get value for personal_id_num 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPersonalIdNum() {
		return $this->personalIdNum;
	}

	/**
	 * set value for personal_id_remarks 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $personalIdRemarks
	 * @return PersonInfo
	 */
	public function &setPersonalIdRemarks($personalIdRemarks) {
		$this->notifyChanged(self::FIELD_PERSONAL_ID_REMARKS,$this->personalIdRemarks,$personalIdRemarks);
		$this->personalIdRemarks=$personalIdRemarks;
		return $this;
	}

	/**
	 * get value for personal_id_remarks 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPersonalIdRemarks() {
		return $this->personalIdRemarks;
	}

	/**
	 * set value for nationality 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $nationality
	 * @return PersonInfo
	 */
	public function &setNationality($nationality) {
		$this->notifyChanged(self::FIELD_NATIONALITY,$this->nationality,$nationality);
		$this->nationality=$nationality;
		return $this;
	}

	/**
	 * get value for nationality 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNationality() {
		return $this->nationality;
	}

	/**
	 * set value for other_info 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $otherInfo
	 * @return PersonInfo
	 */
	public function &setOtherInfo($otherInfo) {
		$this->notifyChanged(self::FIELD_OTHER_INFO,$this->otherInfo,$otherInfo);
		$this->otherInfo=$otherInfo;
		return $this;
	}

	/**
	 * get value for other_info 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOtherInfo() {
		return $this->otherInfo;
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
			self::FIELD_ID=>$this->getId(),
			self::FIELD_FIRSTNAME=>$this->getFirstname(),
			self::FIELD_LASTNAME=>$this->getLastname(),
			self::FIELD_PHONE=>$this->getPhone(),
			self::FIELD_PHONE2=>$this->getPhone2(),
			self::FIELD_STREET=>$this->getStreet(),
			self::FIELD_AREA=>$this->getArea(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_PIN=>$this->getPin(),
			self::FIELD_PAN=>$this->getPan(),
			self::FIELD_PERSONAL_ID_TYPE=>$this->getPersonalIdType(),
			self::FIELD_PERSONAL_ID_NUM=>$this->getPersonalIdNum(),
			self::FIELD_PERSONAL_ID_REMARKS=>$this->getPersonalIdRemarks(),
			self::FIELD_NATIONALITY=>$this->getNationality(),
			self::FIELD_OTHER_INFO=>$this->getOtherInfo());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID=>$this->getId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PersonInfo instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PersonInfo $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PersonInfo[]
	 */
	public static function findByExample(PDO $db,PersonInfo $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PersonInfo instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PersonInfo[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `person_info`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PersonInfo instances
	 *
	 * @param PDOStatement $stmt
	 * @return PersonInfo[]
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
	 * returns the result as an array of PersonInfo instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PersonInfo[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PersonInfo();
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
	 * Execute select query and return matched rows as an array of PersonInfo instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PersonInfo[]
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
		$sql='DELETE FROM `person_info`'
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
		$this->setId($result['id']);
		$this->setFirstname($result['firstname']);
		$this->setLastname($result['lastname']);
		$this->setPhone($result['phone']);
		$this->setPhone2($result['phone2']);
		$this->setStreet($result['street']);
		$this->setArea($result['area']);
		$this->setCity($result['city']);
		$this->setPin($result['pin']);
		$this->setPan($result['PAN']);
		$this->setPersonalIdType($result['personal_id_type']);
		$this->setPersonalIdNum($result['personal_id_num']);
		$this->setPersonalIdRemarks($result['personal_id_remarks']);
		$this->setNationality($result['nationality']);
		$this->setOtherInfo($result['other_info']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PersonInfo
	 */
	public static function findById(PDO $db,$id) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$id);
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
		$o=new PersonInfo();
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
		$stmt->bindValue(1,$this->getId());
		$stmt->bindValue(2,$this->getFirstname());
		$stmt->bindValue(3,$this->getLastname());
		$stmt->bindValue(4,$this->getPhone());
		$stmt->bindValue(5,$this->getPhone2());
		$stmt->bindValue(6,$this->getStreet());
		$stmt->bindValue(7,$this->getArea());
		$stmt->bindValue(8,$this->getCity());
		$stmt->bindValue(9,$this->getPin());
		$stmt->bindValue(10,$this->getPan());
		$stmt->bindValue(11,$this->getPersonalIdType());
		$stmt->bindValue(12,$this->getPersonalIdNum());
		$stmt->bindValue(13,$this->getPersonalIdRemarks());
		$stmt->bindValue(14,$this->getNationality());
		$stmt->bindValue(15,$this->getOtherInfo());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getFirstname());
			$stmt->bindValue(2,$this->getLastname());
			$stmt->bindValue(3,$this->getPhone());
			$stmt->bindValue(4,$this->getPhone2());
			$stmt->bindValue(5,$this->getStreet());
			$stmt->bindValue(6,$this->getArea());
			$stmt->bindValue(7,$this->getCity());
			$stmt->bindValue(8,$this->getPin());
			$stmt->bindValue(9,$this->getPan());
			$stmt->bindValue(10,$this->getPersonalIdType());
			$stmt->bindValue(11,$this->getPersonalIdNum());
			$stmt->bindValue(12,$this->getPersonalIdRemarks());
			$stmt->bindValue(13,$this->getNationality());
			$stmt->bindValue(14,$this->getOtherInfo());
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
			$this->setId($lastInsertId);
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
		$stmt->bindValue(16,$this->getId());
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
		$stmt->bindValue(1,$this->getId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch MoneyTransaction's which this PersonInfo references.
	 * `person_info`.`id` -> `MoneyTransaction`.`tr_person_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MoneyTransaction[]
	 */
	public function fetchMoneyTransactionCollection(PDO $db, $sort=null) {
		$filter=array(MoneyTransaction::FIELD_TR_PERSON_ID=>$this->getId());
		return MoneyTransaction::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'PersonInfo');
	}

	/**
	 * get single PersonInfo instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PersonInfo
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PersonInfo();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PersonInfo from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PersonInfo[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PersonInfo') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>