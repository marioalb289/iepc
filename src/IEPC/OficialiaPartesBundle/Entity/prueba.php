<?php

namespace IEPC\OficialiaPartesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * prueba
 *
 * @ORM\Table(name="prueba")
 * @ORM\Entity(repositoryClass="IEPC\OficialiaPartesBundle\Repository\pruebaRepository")
 */
class prueba
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="respuesta", type="boolean", nullable=true)
     */
    private $respuesta;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set respuesta
     *
     * @param boolean $respuesta
     * @return prueba
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return boolean 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }
}
