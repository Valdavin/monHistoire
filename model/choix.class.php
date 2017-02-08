<?php 
/**
* 
*/
class choix
{

	private $idChoix;
    private $idRandomChoix;
    private $intituleChoix;
    private $envoisVers;
	
	function __construct($idChoix=null,$idRandomChoix=null,$intituleChoix=null,$envoisVers=null)
	{
		if($idChoix)$this->idChoix = $idChoix;
		if($idRandomChoix)$this->idRandomChoix = $idRandomChoix;
        if($intituleChoix)$this->intituleChoix = $intituleChoix;
        if($envoisVers)$this->envoisVers = $envoisVers;
	}

	///////////////////////
	// GETTER AND SETTER
	///////////////////////



    /**
     * Gets the value of idChoix.
     *
     * @return mixed
     */
    public function getIdChoix()
    {
        return $this->idChoix;
    }

    /**
     * Sets the value of idChoix.
     *
     * @param mixed $idChoix the id choix
     *
     * @return self
     */
    public function setIdChoix($idChoix)
    {
        $this->idChoix = $idChoix;

        return $this;
    }

    /**
     * Gets the value of idRandomChoix.
     *
     * @return mixed
     */
    public function getIdRandomChoix()
    {
        return $this->idRandomChoix;
    }

    /**
     * Sets the value of idRandomChoix.
     *
     * @param mixed $idRandomChoix the id random choix
     *
     * @return self
     */
    public function setIdRandomChoix($idRandomChoix)
    {
        $this->idRandomChoix = $idRandomChoix;

        return $this;
    }

    /**
     * Gets the value of intituleChoix.
     *
     * @return mixed
     */
    public function getIntituleChoix()
    {
        return $this->intituleChoix;
    }

    /**
     * Sets the value of intituleChoix.
     *
     * @param mixed $intituleChoix the intitule choix
     *
     * @return self
     */
    public function setIntituleChoix($intituleChoix)
    {
        $this->intituleChoix = $intituleChoix;

        return $this;
    }

    /**
     * Gets the value of envoisVers.
     *
     * @return mixed
     */
    public function getEnvoisVers()
    {
        return $this->envoisVers;
    }

    /**
     * Sets the value of envoisVers.
     *
     * @param mixed $envoisVers the envois vers
     *
     * @return self
     */
    public function setEnvoisVers($envoisVers)
    {
        $this->envoisVers = $envoisVers;

        return $this;
    }
}
 ?>