<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "global.php";
        include "dbclasses.php";
     
        //Get read values
        $firstname = htmlentities($_GET["fname"]);
        $lastname = htmlentities($_GET["lname"]);
        //Resolve enum value
        if(htmlentities($_GET["Purpose"]) == "Amenity use")
            $purpose = 1;
        else if (htmlentities($_GET["Purpose"]) == "Party hall rent")
            $purpose = 2;
        else if (htmlentities($_GET["Purpose"]) == "Advertisement of service")
            $purpose = 3;
        else if (htmlentities($_GET["Purpose"]) == "Renting of premise by External agency")
            $purpose = 4;
        $remarks =  htmlentities($_GET["Remarks"]);
        $payingparty = htmlentities($_GET["PayingParty"]);
        $block = htmlentities($_GET["block"]);
        $housenum = htmlentities($_GET["house_num"]);
        $paymentmode = htmlentities($_GET["PaymentMode"]);
        $amount = htmlentities($_GET["Amount"]);
        
        echo "person named $firstname $lastname who is a $payingparty residing in $block$housenum paid $amount towards purpose $purpose $remarks by $paymentmode";
        $address = new address(htmlentities($_GET["street"]), htmlentities($_GET["area"]), htmlentities($_GET["city"]), htmlentities($_GET["pin"]));
        
        $apt_id = NULL;
        $agency_id = NULL;
        $party_id = NULL;
        if($payingparty == "Resident"){
            $apt = new AptInfo($block, $housenum);
            //Apartment number has to exist
            $apt_id = $apt->getAllFieldsFromDB(connectDB("NestAdmin", "nestadminpw"));  
            $party_id = $apt_id;
        } else if($payingparty == "EnternalAgency"){
            $agency = new ExtAgencyInfo($ag_name, $ag_phone, $ag_address, NULL, NULL, NULL);
            $agency_id = $agency->getAllFieldsFromDB(connectDB("NestAdmin", "nestadminpw"));     
            //If the agency is not in the database (first time)
            //****TO ADD LATER: confirm addition of new agency with user*****
            if($agency_id == NULL){
                $agency->insertIntoDatabase(connectDB("NestAdmin", "nestadminpw"));
            }
            $party_id = $agency_id;
        }
        
        //If the person is not in the database (first time)
        $person = new personInfo($firstname, $lastname, $apt_id, $agency_id, NULL, $address, $contact, NULL, NULL, NULL, NULL, NULL, NULL);
        $person_id = $person->getAllFieldsFromDB(connectDB("NestAdmin", "nestadminpw"));
        
        //****TO ADD LATER: confirm addition of new person with user*****
        if($person_id == NULL)
        {
            $person->insertIntoDatabase(connectDB("NestAdmin", "nestadminpw"));
        }
        $newtr = new MoneyTransaction('CREDIT', "NestAdmin", $payingparty, $party_id, $purpose, $remarks, NULL, $paymentmode, NULL, NULL, NULL, $amount);
        
        
        $newtr->insertIntoDatabase(connectDB());
               
        ?>
        
        
    </body>
</html>
