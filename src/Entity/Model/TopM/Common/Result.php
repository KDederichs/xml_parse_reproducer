<?php

namespace App\Entity\Model\TopM\Common;

class Result
{
    private string $Code;
    private string $Text;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return Result
     */
    public function setCode(string $Code): Result
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return Result
     */
    public function setText(string $Text): Result
    {
        $this->Text = $Text;
        return $this;
    }


}
