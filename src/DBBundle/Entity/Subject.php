<?php

namespace DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Subject
 *
 * @ORM\Table(name="subjects")
 * @ORM\Entity(repositoryClass="DBBundle\Repository\SubjectRepository")
 */
class Subject
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var Teacher
     *
     * @ORM\OneToOne(targetEntity="Teacher", mappedBy="subjects", orphanRemoval=false)
     */
    private $teacher;


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
     * Set name
     *
     * @param string $name
     * @return Subject
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set teacher
     *
     * @param Teacher $teacher
     * @return Subject
     */
    public function setTeacher(Teacher $teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    public function __toString(){
        return $this->name;
        //return empty($title) ? 'hell' : $title;
    }
}