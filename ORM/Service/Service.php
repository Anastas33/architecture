<?php


class Service
{
    /**
     * @var DBConnectionInterface
     */
    private $DBConnection;

    /**
     * @var DBRecordInterface
     */
    private $DBRecord;

    /**
     * @var DBQueryBuilderInterface
     */
    private $DBQueryBuilder;

    /**
     * Service constructor.
     * @param DBFactoryInterface $DBFactory
     */
    public function __construct(DBFactoryInterface $DBFactory)
    {
        $this->DBConnection = $DBFactory->createDBConnection();
        $this->DBRecord = $DBFactory->createDBRecord();
        $this->DBQueryBuilder = $DBFactory->createDBQueryBuilder();
    }

    /**
     * @return string
     */
    public function DBConnectionMethod(): string
    {
        return $this->DBConnection->someDBConnectionMethod();
    }

    /**
     * @return string
     */
    public function DBRecordMethod(): string
    {
        return $this->DBRecord->someDBRecordMethod();
    }

    /**
     * @return string
     */
    public function DBQueryBuilderMethod(): string
    {
        return $this->DBQueryBuilder->someDBQueryBuilderMethod();
    }
}