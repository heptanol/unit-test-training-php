<?php
/**
 * @author Mohamed
 * @version 1.1
 */

/**
 * @class Salary
 */
class Salary
{
    /**
     * Fonction calculNetSalary calcul le salaire net
     * @param $grossMonthlySalary string salaire brut
     * @return int salaire net
     */
    static public function calculNetSalary($grossMonthlySalary)
    {
        return ($grossMonthlySalary * 55) / 100;
    }
}