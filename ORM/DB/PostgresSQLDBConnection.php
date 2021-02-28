<?php


class PostgresSQLDBConnection implements DBConnectionInterface
{

    /**
     * @return string
     */
    public function someDBConnectionMethod(): string
    {
        return "Это PostgresSQLDBConnection";
    }
}