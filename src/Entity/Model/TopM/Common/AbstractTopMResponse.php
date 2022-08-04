<?php

namespace App\Entity\Model\TopM\Common;

abstract class AbstractTopMResponse
{
    private ?Result $Result = null;

    public function getResult(): ?Result
    {
        return $this->Result;
    }

    /**
     * @param Result $Result
     * @return AbstractTopMResponse
     */
    public function setResult(Result $Result): AbstractTopMResponse
    {
        $this->Result = $Result;
        return $this;
    }

    public function isSuccessful(): bool
    {
        return '00' === $this->getCode();
    }

    public function getCode(): ?string
    {
        return $this->Result->getCode() ?? null;
    }

    public function getResultMessage(): ?string
    {
        return $this->Result->getText() ?? null;
    }
}
