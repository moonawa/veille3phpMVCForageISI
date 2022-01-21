<?php


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToMany;





/**
 * @Entity @Table(name="reglement")
**/
    class Reglement{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        
        /**
         * One Reglement have one Facture. This is the owning side.
         * @OneToOne(targetEntity="Facture")
         * @JoinColumn(name="facture_id", referencedColumnName="id")
         */
        private $facture;
        /**
         * Many Reglement have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="reglements")
         * @JoinColumn(name="gestionnaire_id", referencedColumnName="id")
         */
        private $gestionnaire;

        public function __construct()
        {
            
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                //return $this;
        }


        /**
         * Get one Facture have one Consommation. This is the owning side.
         */ 
        public function getConsommation()
        {
                return $this->consommation;
        }

        /**
         * Set one Facture have one Consommation. This is the owning side.
         *
         * @return  self
         */ 
        public function setConsommation($consommation)
        {
                $this->consommation = $consommation;

                return $this;
        }



        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of etat
         */ 
        public function getEtat()
        {
                return $this->etat;
        }

        /**
         * Set the value of etat
         *
         * @return  self
         */ 
        public function setEtat($etat)
        {
                $this->etat = $etat;

                return $this;
        }

        /**
         * Get one Reglement have one Facture. This is the owning side.
         */ 
        public function getFacture()
        {
                return $this->facture;
        }

        /**
         * Set one Reglement have one Facture. This is the owning side.
         *
         * @return  self
         */ 
        public function setFacture($facture)
        {
                $this->facture = $facture;

                return $this;
        }

        /**
         * Get one Reglement have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Reglement have One Gestionnaire. This is the owning side.
         *
         * @return  self
         */ 
        public function setGestionnaire($gestionnaire)
        {
                $this->gestionnaire = $gestionnaire;

                return $this;
        }
    }
?>