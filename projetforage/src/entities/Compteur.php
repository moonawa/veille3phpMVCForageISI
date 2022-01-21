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
 * @Entity @Table(name="compteur")
**/
    class Compteur{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $num;
        /**
         * One Compteur has many Consommations. This is the inverse side.
         * @OneToMany(targetEntity="Consommation", mappedBy="compteur")
         */
        private $consommation;
        /**
         * One Compteur have one Abonnement. This is the owning side.
         * @OneToOne(targetEntity="Abonnement")
         * @JoinColumn(name="abonnement_id", referencedColumnName="id")
         */
        private $abonnement;
         /**
         * Many Compteur have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="compteurs")
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
         * Get the value of num
         */ 
        public function getNum()
        {
                return $this->num;
        }

        /**
         * Set the value of num
         *
         * @return  self
         */ 
        public function setNum($num)
        {
                $this->num = $num;

                return $this;
        }

        /**
         * Get one Compteur has many Consommations. This is the inverse side.
         */ 
        public function getConsommation()
        {
                return $this->consommation;
        }

        /**
         * Set one Compteur has many Consommations. This is the inverse side.
         *
         * @return  self
         */ 
        public function setConsommation($consommation)
        {
                $this->consommation = $consommation;

                return $this;
        }

        /**
         * Get one Compteur have one Abonnement. This is the owning side.
         */ 
        public function getAbonnement()
        {
                return $this->abonnement;
        }

        /**
         * Set one Compteur have one Abonnement. This is the owning side.
         *
         * @return  self
         */ 
        public function setAbonnement($abonnement)
        {
                $this->abonnement = $abonnement;

                return $this;
        }

        /**
         * Get one Compteur have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Compteur have One Gestionnaire. This is the owning side.
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