<?php

namespace IEPC\OficialiaPartesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recepciones
 *
 * @ORM\Table(name="oficialia_partes_recepciones")
 * @ORM\Entity(repositoryClass="IEPC\OficialiaPartesBundle\Repository\RecepcionesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Recepciones
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
     * @var string
     *
     * @ORM\Column(name="nombre_emisor", type="string", length=50)
     */
    private $nombreEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_emisor", type="string", length=50)
     */
    private $institucionEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto_emisor", type="string", length=50)
     */
    private $asuntoEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto_receptor", type="string", length=50)
     */
    private $asuntoReceptor;

    /**
     * @var bool
     *
     * @ORM\Column(name="respuesta", type="boolean", nullable=true)
     */
    private $respuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by", type="integer")
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_by", type="integer")
     */
    private $updatedBy;


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
     * Set nombreEmisor
     *
     * @param string $nombreEmisor
     * @return Recepciones
     */
    public function setNombreEmisor($nombreEmisor)
    {
        $this->nombreEmisor = $nombreEmisor;

        return $this;
    }

    /**
     * Get nombreEmisor
     *
     * @return string 
     */
    public function getNombreEmisor()
    {
        return $this->nombreEmisor;
    }

    /**
     * Set institucionEmisor
     *
     * @param string $institucionEmisor
     * @return Recepciones
     */
    public function setInstitucionEmisor($institucionEmisor)
    {
        $this->institucionEmisor = $institucionEmisor;

        return $this;
    }

    /**
     * Get institucionEmisor
     *
     * @return string 
     */
    public function getInstitucionEmisor()
    {
        return $this->institucionEmisor;
    }

    /**
     * Set asuntoEmisor
     *
     * @param string $asuntoEmisor
     * @return Recepciones
     */
    public function setAsuntoEmisor($asuntoEmisor)
    {
        $this->asuntoEmisor = $asuntoEmisor;

        return $this;
    }

    /**
     * Get asuntoEmisor
     *
     * @return string 
     */
    public function getAsuntoEmisor()
    {
        return $this->asuntoEmisor;
    }

    /**
     * Set asuntoReceptor
     *
     * @param string $asuntoReceptor
     * @return Recepciones
     */
    public function setAsuntoReceptor($asuntoReceptor)
    {
        $this->asuntoReceptor = $asuntoReceptor;

        return $this;
    }

    /**
     * Get asuntoReceptor
     *
     * @return string 
     */
    public function getAsuntoReceptor()
    {
        return $this->asuntoReceptor;
    }

    /**
     * Set respuesta
     *
     * @param boolean $respuesta
     * @return Recepciones
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

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Recepciones
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Recepciones
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Recepciones
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     * @return Recepciones
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
}
?>