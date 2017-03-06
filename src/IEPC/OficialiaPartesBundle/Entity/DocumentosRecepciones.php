<?php

namespace IEPC\OficialiaPartesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentosRecepciones
 *
 * @ORM\Table(name="documentos_recepciones")
 * @ORM\Entity(repositoryClass="IEPC\OficialiaPartesBundle\Repository\DocumentosRecepcionesRepository")
 */
class DocumentosRecepciones
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
     * @var int
     *
     * @ORM\Column(name="id_recepcion", type="integer")
     */
    private $idRecepcion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento", type="integer")
     */
    private $idDocumento;


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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return DocumentosRecepciones
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set idDocumento
     *
     * @param integer $idDocumento
     * @return DocumentosRecepciones
     */
    public function setIdDocumento($idDocumento)
    {
        $this->idDocumento = $idDocumento;

        return $this;
    }

    /**
     * Get idDocumento
     *
     * @return integer 
     */
    public function getIdDocumento()
    {
        return $this->idDocumento;
    }
}
