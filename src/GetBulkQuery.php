<?php


namespace Webtize\ErplySDK;


class GetBulkQuery
{
    private $filters = null;
    private $fieldName = null;
    private $operandBefore = null;
    private $operator = null;
    private $value = null;
    private $skip = null;
    private $take = null;
    private $desc = null;
    private $language = null;
    private $selector = null;


    public function getQuery()
    {
        $filers = [];
        if ($this->getFieldName() != null) {
            $filers = array_merge($filers, ['fieldName' => $this->getFieldName()]);
        }
        if ($this->getOperandBefore() != null) {
            $filers = array_merge($filers, ['operandBefore' => $this->getOperandBefore()]);
        }
        if ($this->getOperator() != null) {
            $filers = array_merge($filers, ['operator' => $this->getOperator()]);
        }
        if ($this->getValue() != null) {
            $filers = array_merge($filers, ['value' => $this->getValue()]);
        }

        $paginationParameters = [];
        if ($this->getSkip() != null) {
            $paginationParameters = array_merge($paginationParameters, ['skip' => $this->getSkip()]);
        }
        if ($this->getTake() != null) {
            $paginationParameters = array_merge($paginationParameters, ['take' => $this->getTake()]);
        }

        $sortingParameters = [];
        if ($this->isDesc() != null) {
            $sortingParameters = array_merge($sortingParameters, ['desc' => $this->isDesc()]);
        }
        if ($this->getLanguage() != null) {
            $sortingParameters = array_merge($sortingParameters, ['language' => $this->getLanguage()]);
        }
        if ($this->getSelector() != null) {
            $sortingParameters = array_merge($sortingParameters, ['selector' => $this->getSelector()]);
        }


        $result = [];
        if (sizeof($filers) > 0) {
            $result = array_merge($result, ['filters' => $filers]);
        }
        if (sizeof($paginationParameters) > 0) {
            $result = array_merge($result, ['paginationParameters' => $paginationParameters]);
        }
        if (sizeof($sortingParameters) > 0) {
            $result = array_merge($result, ['sortingParameters' => $sortingParameters]);
        }
        return ['requests' => $result];
    }

    /**
     * @return null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param null $filters
     */
    public function setFilters($filters): void
    {
        $this->filters = $filters;
    }

    /**
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName(string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return string
     */
    public function getOperandBefore(): string
    {
        return $this->operandBefore;
    }

    /**
     * @param string $operandBefore
     */
    public function setOperandBefore(string $operandBefore): void
    {
        $this->operandBefore = $operandBefore;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param array $value
     */
    public function setValue(array $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getSkip(): int
    {
        return $this->skip;
    }

    /**
     * @param int $skip
     */
    public function setSkip(int $skip): void
    {
        $this->skip = $skip;
    }

    /**
     * @return int
     */
    public function getTake(): int
    {
        return $this->take;
    }

    /**
     * @param int $take
     */
    public function setTake(int $take): void
    {
        $this->take = $take;
    }

    /**
     * @return bool
     */
    public function isDesc(): bool
    {
        return $this->desc;
    }

    /**
     * @param bool $desc
     */
    public function setDesc(bool $desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getSelector(): string
    {
        return $this->selector;
    }

    /**
     * @param string $selector
     */
    public function setSelector(string $selector): void
    {
        $this->selector = $selector;
    }


}
