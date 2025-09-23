<?php
/* 
22. Dato un array con información de empleados y sus departamentos:
$empleados = [
 ["nombre" => "Laura", "departamento" => "Ventas", "salario" =>
1200],
 ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>
1500],
 ["nombre" => "Sofía", "departamento" => "Ventas", "salario" =>
1300],
 ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
 ["nombre" => "Marta", "departamento" => "Marketing", "salario" =>
1600],
];
- Calcula el salario medio por departamento.
- Muestra el empleado con el salario más alto.
- Crea una función que reciba el departamento y devuelva un array con los
nombres de los empleados que trabajan ahí
*/

$empleados = [
 ["nombre" => "Laura", "departamento" => "Ventas", "salario" => 1200],
 ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>1500],
 ["nombre" => "Sofía", "departamento" => "Ventas", "salario" => 1300],
 ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
 ["nombre" => "Marta", "departamento" => "Marketing", "salario" => 1600]
];

function avgSalaryByDepartment(){
    global $empleados;
    $totalSalaryByDepartment = [];

    foreach($empleados as $employee){
        if(!isset($employee["departamento"])){
            $totalSalaryByDepartment[$employee["departamento"]] = 
                [$employee["salario"],1];
        }else{
            $totalSalaryByDepartment[$employee["departamento"]] = 
                [$totalSalaryByDepartment[$employee["departamento"]][0] + $employee["salario"],
                $totalSalaryByDepartment[$employee["departamento"]][1]+1];
        }
    }
}