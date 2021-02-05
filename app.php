<?php
require_once(dirname(__FILE__) . '/config.php');
class API {
    function Select(){
        $db = new Connect;
        $employee = array();
        $data = $db->prepare('SELECT * FROM employee JOIN branch ON employee.branch_fk=branch.branch_id JOIN bank ON bank.bank_id=branch.bank_fk ORDER BY user_id');
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $employee[$OutputData['user_id']] = array(
                'user_id' => $OutputData['user_id'],
                'name' => $OutputData['name'],
                'email' => $OutputData['email'],
                'photo' => $OutputData['photo'],
                'branch_name' => $OutputData['branch_name'],
                'bankName' => $OutputData['bankName']
            );
        }
        return json_encode($employee);
    }
}

$API =new API;
header('Content-Type: application/json');
echo $API->Select();
?>