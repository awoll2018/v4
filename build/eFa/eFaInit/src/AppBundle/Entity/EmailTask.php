<?php
// src/AppBundle/Entity/HostnameTask.php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class EmailTask
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *    min     = 2,
     *    max     = 256,
     * )
     * @Assert\Email()
     */
    protected $email;


    public function getTextbox()
    {
        return $this->email;
    }

    public function setTextbox($var)
    {
        $this->email = $var;
    }
}
?>
