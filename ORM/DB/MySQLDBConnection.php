<?php


class MySQLDBConnection implements DBConnectionInterface
{

    /**
     * @return string
     */
    public function someDBConnectionMethod(): string
    {
        return "Это MySQLDBConnection";
    }
}