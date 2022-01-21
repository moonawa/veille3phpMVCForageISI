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
 * @Entity @Table(name="habitant")
**/
    class Habitant{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /** @Column(type="string")  */
        private $tel;
        /**
         * One Habitant have one chef de village. This is the owning side.
         * @OneToOne(targetEntity="Habitant")
         * @JoinColumn(name="habitant_id", referencedColumnName="id")
         */
        private $habitant;
        /**
         * One Habitant have one Village. This is the owning side.
         * @OneToMany(targetEntity="Village", mappedBy="habitant")
         * @JoinColumn(name="village_id", referencedColumnName="id")
         */
        private $village;
        /**
         * One chef de village have one Village. This is the owning side.
         * @OneToOne(targetEntity="Village")
         * @JoinColumn(name="villagechef_id", referencedColumnName="id")
         */
        private $villagechef;
        /**
         * One Habitant have one Abonnement. This is the owning side.
         * @OneToOne(targetEntity="Abonnement")
         * @JoinColumn(name="abonnement_id", referencedColumnName="id")
         */
        private $abonnement;
        /**
         * Many Habitant have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="habitants")
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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                //return $this;
        }

        

        

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get one Habitant have one chef de village. This is the owning side.
         */ 
        public function getHabitant()
        {
                return $this->habitant;
        }

        /**
         * Set one Habitant have one chef de village. This is the owning side.
         *
         * @return  self
         */ 
        public function setHabitant($habitant)
        {
                $this->habitant = $habitant;

                return $this;
        }

        /**
         * Get one Habitant have one Village. This is the owning side.
         */ 
        public function getVillage()
        {
                return $this->village;
        }

        /**
         * Set one Habitant have one Village. This is the owning side.
         *
         * @return  self
         */ 
        public function setVillage($village)
        {
                $this->village = $village;

                return $this;
        }

        /**
         * Get one Abonnement have one Abonnement. This is the owning side.
         */ 
        public function getAbonnement()
        {
                return $this->abonnement;
        }

        /**
         * Set one Abonnement have one Abonnement. This is the owning side.
         *
         * @return  self
         */ 
        public function setAbonnement($abonnement)
        {
                $this->abonnement = $abonnement;

                return $this;
        }

        /**
         * Get one chef de village have one Village. This is the owning side.
         */ 
        public function getVillagechef()
        {
                return $this->villagechef;
        }

        /**
         * Set one chef de village have one Village. This is the owning side.
         *
         * @return  self
         */ 
        public function setVillagechef($villagechef)
        {
                $this->villagechef = $villagechef;

                return $this;
        }

        /**
         * Get one Habitant have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Habitant have One Gestionnaire. This is the owning side.
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