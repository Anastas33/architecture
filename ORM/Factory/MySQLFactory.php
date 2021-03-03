<?php


class MySQLFactory implements DBFactoryInterface
{
    /**
     * @return DBConnectionInterface
     */
    public function createDBConnection(): DBConnectionInterface
    {
        return new MySQLDBConnection();
    }

    /**
     * @return DBRecordInterface
     */
    public function createDBRecord(): DBRecordInterface
    {
        return new MySQLDBRecord();
    }

    /**
     * @return DBQueryBuilderInterface
     */
    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new MySQLDBQueryBuilder();
    }
}