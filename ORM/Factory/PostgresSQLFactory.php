<?php


class PostgresSQLFactory implements DBFactoryInterface
{
    /**
     * @return DBConnectionInterface
     */
    public function createDBConnection(): DBConnectionInterface
    {
        return new PostgresSQLDBConnection();
    }

    /**
     * @return DBRecordInterface
     */
    public function createDBRecord(): DBRecordInterface
    {
        return new PostgresSQLDBRecord();
    }

    /**
     * @return DBQueryBuilderInterface
     */
    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new PostgresSQLDBQueryBuilder();
    }
}