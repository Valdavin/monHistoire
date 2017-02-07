<?php 
/**
* 
*/
class phrase
{
	private $idPhrase;
	private $idRandomPhrase;
    private $intitulePhrase;
	
	function __construct($idPhrase,$idRandomPhrase,$intitulePhrase)
	{
		$this->idPhrase = $idPhrase;
		$this->idRandomPhrase = $idRandomPhrase;
        $this->intitulePhrase = $intitulePhrase;

	}

	///////////////////////
	// GETTER AND SETTER
	///////////////////////



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

    /**
     * Gets the value of idRandomPhrase.
     *
     * @return mixed
     */
    public function getIdRandomPhrase()
    {
        return $this->idRandomPhrase;
    }

    /**
     * Sets the value of idRandomPhrase.
     *
     * @param mixed $idRandomPhrase the id random phrase
     *
     * @return self
     */
    private function setIdRandomPhrase($idRandomPhrase)
    {
        $this->idRandomPhrase = $idRandomPhrase;

        return $this;
    }

    /**
     * Gets the value of intitulePhrase.
     *
     * @return mixed
     */
    public function getIntitulePhrase()
    {
        return $this->intitulePhrase;
    }

    /**
     * Sets the value of intitulePhrase.
     *
     * @param mixed $intitulePhrase the intitule phrase
     *
     * @return self
     */
    private function setIntitulePhrase($intitulePhrase)
    {
        $this->intitulePhrase = $intitulePhrase;

        return $this;
    }
}
 ?>