<?php


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;





/**
 * @Entity @Table(name="consommation")
**/
    class Consommation{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $chiffre;
        /** @Column(type="string")  */
        private $lettre;
        /** @Column(type="date")  */
        private $date;
        /**
         * One Consommation have one Abonnement. This is the owning side.
         * @OneToOne(targetEntity="Abonnement")
         * @JoinColumn(name="abonnement_id", referencedColumnName="id")
         */
        private $abonnement;
        /**
         * Many Consommations have one compteur. This is the owning side.
         * @ManyToOne(targetEntity="Compteur", inversedBy="consommattions")
         * @JoinColumn(name="compteur_id", referencedColumnName="id")
         */
        private $compteur;

        /**
         * One Facture have one Facture. This is the owning side.
         * @OneToOne(targetEntity="Facture")
         * @JoinColumn(name="facture_id", referencedColumnName="id")
         */
        private $facture;

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
         * Get the value of chiffre
         */ 
        public function getChiffre()
        {
                return $this->chiffre;
        }

        /**
         * Set the value of chiffre
         *
         * @return  self
         */ 
        public function setChiffre($chiffre)
        {
                $this->chiffre = $chiffre;

                return $this;
        }

        /**
         * Get the value of lettre
         */ 
        public function getLettre()
        {
                return $this->lettre;
        }

        /**
         * Set the value of lettre
         *
         * @return  self
         */ 
        public function setLettre($lettre)
        {
                $this->lettre = $lettre;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get one Consommation have one Abonnement. This is the owning side.
         */ 
        public function getAbonnement()
        {
                return $this->abonnement;
        }

        /**
         * Set one Consommation have one Abonnement. This is the owning side.
         *
         * @return  self
         */ 
        public function setAbonnement($abonnement)
        {
                $this->abonnement = $abonnement;

                return $this;
        }

        /**
         * Get many Consommations have one compteur. This is the owning side.
         */ 
        public function getCompteur()
        {
                return $this->compteur;
        }

        /**
         * Set many Consommations have one compteur. This is the owning side.
         *
         * @return  self
         */ 
        public function setCompteur($compteur)
        {
                $this->compteur = $compteur;

                return $this;
        }

        /**
         * Get one Facture have one Facture. This is the owning side.
         */ 
        public function getFacture()
        {
                return $this->facture;
        }

        /**
         * Set one Facture have one Facture. This is the owning side.
         *
         * @return  self
         */ 
        public function setFacture($facture)
        {
                $this->facture = $facture;

                return $this;
        }
    }
?>