<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Code
 * @ORM\Entity @ORM\Table(name="codes")
 */
class Code
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @ORM\Column(name="url", type="string")
     */
    protected $url;

    /**
     * @ORM\Column(name="login", type="string")
     */
    protected $login;

    /**
     * @ORM\Column(name="pass", type="string")
     */
    protected $pass;

    /**
     * @ORM\Column(name="description", type="string")
     */
    protected $description;

    /**
     * @ORM\Column(name="date_update", type="date")
     */
    protected $date_update;

}