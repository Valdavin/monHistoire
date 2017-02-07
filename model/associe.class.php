<?php 
/**
* 
*/
class associe
{
	private $idPhrase;
	private $idChoix;
	
	function __construct($idPhrase,$idChoix)
	{
		$this->idPhrase = $idPhrase;
		$this->idChoix = $idChoix;
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
    private function setIdChoix($idChoix)
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
    private function setIdPhrase($idPhrase)
    {
        $this->idPhrase = $idPhrase;

        return $this;
    }
}
 ?>