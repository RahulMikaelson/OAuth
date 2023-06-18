<?php 
namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

#[ODM\Document]
class ApiToken{
    
    #[ODM\Id]
    private string $id;

    #[ODM\Field(type:"string")]
    private string $token;
    #[ODM\Field(type:"collection")]
    private $role;



	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}
	
	/**
	 * @param string $id 
	 * @return self
	 */
	public function setId(string $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getToken(): string {
		return $this->token;
	}
	
	/**
	 * @param string $token 
	 * @return self
	 */
	public function setToken(string $token): self {
		$this->token = $token;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRole() {
		return $this->role;
	}
	
	/**
	 * @param mixed $role 
	 * @return self
	 */
	public function setRole($role): self {
		$this->role = $role;
		return $this;
	}
}

?>