<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;







/**
 * @Entity @Table(name="user")
**/
    class User{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $email;
        /** @Column(type="string")  */
        private $password;
        /**
         * One User have one Gestionnaire. This is the owning side.
         * @OneToOne(targetEntity="Gestionnaire")
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
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                //return $this;
        }

       

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                //return $this;
        }

        



        /**
         * Get one User have one gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one User have one gestionnaire. This is the owning side.
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