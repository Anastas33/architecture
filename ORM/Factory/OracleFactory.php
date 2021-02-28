<?php


class OracleFactory implements DBFactoryInterface
{
    /**
     * @return DBConnectionInterface
     */
    public function createDBConnection(): DBConnectionInterface
    {
        return new OracleDBConnection();
    }

    /**
     * @return DBRecordInterface
     */
    public function createDBRecord(): DBRecordInterface
    {
        return new OracleDBRecord();
    }

    /**
     * @return DBQueryBuilderInterface
     */
    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new OracleDBQueryBuilder();
    }
}