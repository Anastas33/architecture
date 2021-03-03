<?php


class MySQLDBRecord implements DBRecordInterface
{

    /**
     * @return string
     */
    public function someDBRecordMethod(): string
    {
        return "Это MySQLDBRecord";
    }
}