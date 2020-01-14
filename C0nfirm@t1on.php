<?php
try
{
    //Set the response content type to application/json

    include('includes/config.php');
    header("Content-Type:application/json");
    $resp = '{"ResultCode":0,"ResultDesc":"Confirmation recieved successfully"}';
    //read incoming request
    $postData = file_get_contents('php://input');
    //log file
    $filePath = "confirmation.txt";
    //error log
    $errorLog = "errors.log";
    //Parse payload to json
    $jsonMpesaResponse = json_decode($postData,true);


    //perform business operations on $jdata here
    //save json data to database
    $TransactionType = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['TransactionType']));
    $TransID = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['TransID']));
    $TransTime = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['TransTime']));
    $TransAmount = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['TransAmount']));
    $BusinessShortCode = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['BusinessShortCode']));
    $BillRefNumber = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['BillRefNumber']));
    $InvoiceNumber = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['InvoiceNumber']));
    $OrgAccountBalance = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['OrgAccountBalance']));
    $ThirdPartyTransID = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['ThirdPartyTransID']));
    $MSISDN = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['MSISDN']));
    $FirstName = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['FirstName']));
    $MiddleName = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['MiddleName']));
    $LastName = $obj->con->real_escape_string(htmlentities($jsonMpesaResponse['LastName']));

    $transaction = array(
        'TransactionType'      => $TransactionType,
        'TransID'              => $TransID,
        'TransTime'            => $TransTime,
        'TransAmount'          => $TransAmount,
        'BusinessShortCode'    => $BusinessShortCode,
        'BillRefNumber'        => $BillRefNumber,
        'InvoiceNumber'        => $InvoiceNumber,
        'OrgAccountBalance'    => $OrgAccountBalance,
        'ThirdPartyTransID'    => $ThirdPartyTransID,
        'MSISDN'               => $MSISDN,
        'FirstName'            => $FirstName,
        'MiddleName'           => $MiddleName,
        'LastName'             => $LastName,
    );


    $data = array(

        'paid'                => $db->inc($TransAmount)

    );

    if($db->insert('mobile_payments',$transaction)){
        $db->where('oid',$BillRefNumber);
        $db->update('orders',$data);
    }




    //open text file for logging messages by appending
    $file = fopen($filePath,"a");
    //log incoming request
    fwrite($file, $postData);
    fwrite($file,"\r\n");
    //log response and close file
    fwrite($file,$resp);
    fclose($file);
} catch (Exception $ex){
    //append exception to errorLog
    $logErr = fopen($errorLog,"a");
    fwrite($logErr, $ex->getMessage());
    fwrite($logErr,"\r\n");
    fclose($logErr);
}
//echo response
echo $resp;
?>