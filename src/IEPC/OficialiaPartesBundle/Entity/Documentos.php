<?php

namespace IEPC\OficialiaPartesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documentos
 *
 * @ORM\Table(name="oficialia_partes_documentos")
 * @ORM\Entity(repositoryClass="IEPC\OficialiaPartesBundle\Repository\DocumentosRepository")
 */
class Documentos
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_solicitud", type="string", columnDefinition="ENUM('SOLICITUD','RESPUESTA')",length=50)
     */
    private $tipoSolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Documentos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipoSolicitud
     *
     * @param string $tipoSolicitud
     * @return Documentos
     */
    public function setTipoSolicitud($tipoSolicitud)
    {
        $this->tipoSolicitud = $tipoSolicitud;

        return $this;
    }

    /**
     * Get tipoSolicitud
     *
     * @return string 
     */
    public function getTipoSolicitud()
    {
        return $this->tipoSolicitud;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     * @return Documentos
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Documentos
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Documentos
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
     * @return Documentos
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
     * @return Documentos
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
}
