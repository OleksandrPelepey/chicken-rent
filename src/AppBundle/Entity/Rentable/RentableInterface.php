<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/11/2018
 * Time: 9:29 AM
 */

namespace AppBundle\Entity\Rentable;


interface RentableInterface
{
    public function isAvailableForRent();

    public function getRentStatus();

    public function setRentStatus();

    public function getRentDueDate();

    public function setRentDueDate();

    public function rent();
}