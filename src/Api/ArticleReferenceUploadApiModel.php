<?php

namespace App\Api;

use Symfony\Component\Validator\Constraints as Assert;

class ArticleReferenceUploadApiModel
{
    /**
     * @Assert\NotBlank()
     */
    public $filename;
    /**
     * @Assert\NotBlank()
     */
    private $data;

    private $decodedData;

    /**
     * @param mixed $data
     * @return ArticleReferenceUploadApiModel
     */
    public function setData(?string $data)
    {
        $this->data = $data;
        $this->decodedData = base64_decode($data);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDecodedData(): ?string
    {
        return $this->decodedData;
    }
}
