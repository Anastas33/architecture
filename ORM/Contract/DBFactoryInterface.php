<?php


interface DBFactoryInterface
{
    /**
     * @return DBConnectionInterface
     */
    public function createDBConnection(): DBConnectionInterface;

    /**
     * @return DBRecordInterface
     */
    public function createDBRecord(): DBRecordInterface;

    /**
     * @return DBQueryBuilderInterface
     */
    public function createDBQueryBuilder(): DBQueryBuilderInterface;
}