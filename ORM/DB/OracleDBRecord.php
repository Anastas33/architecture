<?php


class OracleDBRecord implements DBRecordInterface
{

    /**
     * @return string
     */
    public function someDBRecordMethod(): string
    {
        return "Это OracleDBRecord";
    }
}