<?php 


include ('/Independant.php'); 

class EmployeeFactory 
{
    public static function create($type, $params = [])
    {
       switch ($type) {
           case 'Salesman':
            $created = new Salesman(...$params);
           break;
           case 'Representant':
            $created = new Representant(...$params);
           break;
           case 'Producer'; 
           $created = new Producer(...$params);
        break;
        case 'Wharehouseman':
         $created = new Wharehouseman(...$params);
        break;
        case 'ProducerWithRisk'; 
        $created = new ProducerWithRisk(...$params);
    break;
    case 'Representant':
     $created = new Representant(...$params);
    break;
    case 'Independant'; 
    $created = new Independant(...$params);
    break;
    default;
    throw new Exception('Unknow class name');
       }
       return $created;
    }
}