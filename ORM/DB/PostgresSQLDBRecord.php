<?php


class PostgresSQLDBRecord implements DBRecordInterface
{

    /**
     * @return string
     */
    public function someDBRecordMethod(): string
    {
        return "Это PostgresSQLDBRecord";
    }
}