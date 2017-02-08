<?php 
/**
* 
*/
class associe
{
	private $idPhrase;
	private $idChoix;
	
	function __construct($idPhrase=null,$idChoix=null)
	{
		if($idPhrase)$this->idPhrase = $idPhrase;
		if($idChoix)$this->idChoix = $idChoix;
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
     * Gets the value of idPhrase.
     *
     * @return mixed
     */
    public function getIdPhrase()
    {
        return $this->idPhrase;
    }

    /**
     * Sets the value of idPhrase.
     *
     * @param mixed $idPhrase the id phrase
     *
     * @return self
     */
    public function setIdPhrase($idPhrase)
    {
        $this->idPhrase = $idPhrase;

        return $this;
    }
}
 ?>