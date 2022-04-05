<?php

namespace Ssz\WebtM6Vegas;

class Hotel
{
    private string $name;
    private string $imageSrc;
    private string $description;

    /**
     * @param string $name
     * @param string $imageSrc
     * @param string $description
     */
    public function __construct(string $name, string $imageSrc, string $description)
    {
        $this->name = $name;
        $this->imageSrc = $imageSrc;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImageSrc(): string
    {
        return $this->imageSrc;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}