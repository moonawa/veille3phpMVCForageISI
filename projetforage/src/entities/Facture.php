<?php


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\ManyToOne;





/**
 * @Entity @Table(name="facture")
**/
    class Facture{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="integer")  */
        private $prix;
        
        /**
         * One Facture have one Consommation. This is the owning side.
         * @OneToOne(targetEntity="Consommation")
         * @JoinColumn(name="consommation_id", referencedColumnName="id")
         */
        private $consommation;
        /** @Column(type="string")  */
        private $etat;
        /**
         * One Facture have one Reglement. This is the owning side.
         * @OneToOne(targetEntity="Reglement")
         * @JoinColumn(name="reglement_id", referencedColumnName="id")
         */
        private $reglement;
        /**
         * Many Facteur have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="factures")
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
         * Get one Facture have one Reglement. This is the owning side.
         */ 
        public function getReglement()
        {
                return $this->reglement;
        }

        /**
         * Set one Facture have one Reglement. This is the owning side.
         *
         * @return  self
         */ 
        public function setReglement($reglement)
        {
                $this->reglement = $reglement;

                return $this;
        }

        /**
         * Get one Facture have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Facture have One Gestionnaire. This is the owning side.
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