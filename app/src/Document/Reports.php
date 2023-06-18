<?php 
namespace App\Document;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource()]
class Reports{
    private string $id;
    private string $reportName;
    private string $description;

}

?>