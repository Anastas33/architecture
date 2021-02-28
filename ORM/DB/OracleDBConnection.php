<?php


class OracleDBConnection implements DBConnectionInterface
{

    /**
     * @return string
     */
    public function someDBConnectionMethod(): string
    {
        return "Это OracleDBConnection";
    }
}