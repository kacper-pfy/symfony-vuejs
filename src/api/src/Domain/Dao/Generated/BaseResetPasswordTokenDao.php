<?php
/**
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the ResetPasswordTokenDao class instead!
 */

declare(strict_types=1);

namespace App\Domain\Dao\Generated;

use App\Domain\Model\ResetPasswordToken;
use TheCodingMachine\TDBM\TDBMService;
use TheCodingMachine\TDBM\ResultIterator;
use TheCodingMachine\TDBM\TDBMException;

/**
 * The BaseResetPasswordTokenDao class will maintain the persistence of
 * ResetPasswordToken class into the reset_password_tokens table.
 */
abstract class BaseResetPasswordTokenDao
{

    /**
     * @var \TheCodingMachine\TDBM\TDBMService
     */
    public $tdbmService = null;

    /**
     * The default sort column.
     *
     * @var string|null
     */
    public $defaultSort = null;

    /**
     * The default sort direction.
     *
     * @var string
     */
    public $defaultDirection = 'asc';

    /**
     * Sets the TDBM service used by this DAO.
     */
    public function __construct(\TheCodingMachine\TDBM\TDBMService $tdbmService)
    {
        $this->tdbmService = $tdbmService;
    }

    /**
     * Persist the ResetPasswordToken instance.
     *
     * @param ResetPasswordToken $obj The bean to save.
     */
    public function save(\App\Domain\Model\ResetPasswordToken $obj) : void
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all ResetPasswordToken records.
     *
     * @return \App\Domain\Model\ResetPasswordToken[]|\TheCodingMachine\TDBM\ResultIterator
     */
    public function findAll() : \TheCodingMachine\TDBM\ResultIterator
    {
        if ($this->defaultSort) {
            $orderBy = 'reset_password_tokens.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('reset_password_tokens', null, [], $orderBy);
    }

    /**
     * Get ResetPasswordToken specified by its ID (its primary key).
     *
     * If the primary key does not exist, an exception is thrown.
     *
     * @param string $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return \App\Domain\Model\ResetPasswordToken
     * @throws \TheCodingMachine\TDBM\TDBMException
     * @TheCodingMachine\GraphQLite\Annotations\Factory
     * @TheCodingMachine\GraphQLite\Annotations\HideParameter (for="$lazyLoading")
     */
    public function getById(string $id, bool $lazyLoading = false) : \App\Domain\Model\ResetPasswordToken
    {
        return $this->tdbmService->findObjectByPk('reset_password_tokens', ['id' => $id], [], $lazyLoading);
    }

    /**
     * Get all ResetPasswordToken records.
     *
     * @param \App\Domain\Model\ResetPasswordToken $obj The object to delete
     * @param bool $cascade If true, it will delete all objects linked to $obj
     */
    public function delete(\App\Domain\Model\ResetPasswordToken $obj, bool $cascade = false) : void
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }

    /**
     * Get all ResetPasswordToken records.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return \App\Domain\Model\ResetPasswordToken[]|\TheCodingMachine\TDBM\ResultIterator
     */
    protected function find($filter = null, array $parameters = [], $orderBy = null, array $additionalTablesFetch = [], ?int $mode = null) : \TheCodingMachine\TDBM\ResultIterator
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'reset_password_tokens.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('reset_password_tokens', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode);
    }

    /**
     * Get a list of ResetPasswordToken specified by its filters.
     *
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *    "reset_password_tokens JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return \App\Domain\Model\ResetPasswordToken[]|\TheCodingMachine\TDBM\ResultIterator
     */
    protected function findFromSql(string $from, $filter = null, array $parameters = [], $orderBy = null, array $additionalTablesFetch = [], ?int $mode = null) : \TheCodingMachine\TDBM\ResultIterator
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'reset_password_tokens.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('reset_password_tokens', $from, $filter, $parameters, $orderBy, $mode);
    }

    /**
     * Get a list of ResetPasswordToken from a SQL query.
     *
     * Unlike the `find` and `findFromSql` methods, here you can pass the whole $sql query.
     *
     * You should not put an alias on the main table name, and select its columns using `*`. So the SELECT part of you $sql should look like:
     *
     *    "SELECT reset_password_tokens .* FROM ..."
     *
     * @param string $sql The sql query
     * @param mixed[] $parameters The parameters associated with the query
     * @param string|null $countSql The sql query that provides total count of rows (automatically computed if not provided)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return \App\Domain\Model\ResetPasswordToken[]|\TheCodingMachine\TDBM\ResultIterator
     */
    protected function findFromRawSql(string $sql, array $parameters = [], ?string $countSql = null, ?int $mode = null) : \TheCodingMachine\TDBM\ResultIterator
    {
        return $this->tdbmService->findObjectsFromRawSql('reset_password_tokens', $sql, $parameters, $mode, null, $countSql);
    }

    /**
     * Get a single ResetPasswordToken specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @return \App\Domain\Model\ResetPasswordToken|null
     */
    protected function findOne($filter = null, array $parameters = [], array $additionalTablesFetch = []) : ?\App\Domain\Model\ResetPasswordToken
    {
        return $this->tdbmService->findObject('reset_password_tokens', $filter, $parameters, $additionalTablesFetch);
    }

    /**
     * Get a single ResetPasswordToken specified by its filters.
     *
     * Unlike the `findOne` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *     "reset_password_tokens JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @return \App\Domain\Model\ResetPasswordToken|null
     */
    protected function findOneFromSql(string $from, $filter = null, array $parameters = []) : ?\App\Domain\Model\ResetPasswordToken
    {
        return $this->tdbmService->findObjectFromSql('reset_password_tokens', $from, $filter, $parameters);
    }

    /**
     * Sets the default column for default sorting.
     *
     * @param string $defaultSort
     */
    public function setDefaultSort(string $defaultSort) : void
    {
        $this->defaultSort = $defaultSort;
    }

    /**
     * Get a ResetPasswordToken filtered by token.
     *
     * @param string $token
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @return \App\Domain\Model\ResetPasswordToken|null
     */
    public function findOneByToken(string $token, array $additionalTablesFetch = []) : ?\App\Domain\Model\ResetPasswordToken
    {
        $filter = [
                    'token' => $token,
                ];
        return $this->findOne($filter, [], $additionalTablesFetch);
    }
}
