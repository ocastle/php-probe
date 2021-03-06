<?php

namespace PhpProbe\Adapter\Response;

/**
 * Class AdapterResponseInterface
 *
 * @author  Michael BOUVY <michael.bouvy@gmail.com>
 * @package PhpProbe\Adapter\Response
 */
interface AdapterResponseInterface
{
    const STATUS_SUCCESSFUL = 'success';
    const STATUS_FAILED     = 'failed';
    const STATUS_UNKNOWN    = 'unknown';

    /**
     * This method should return true when adapter ran successfuly.
     *
     * For instance, this may return true if a connection could be established.
     *
     * @return bool
     */
    public function isSuccessful();

    /**
     * Set response's status
     *
     * Might be one of :
     * - AdapterResponseInterface::STATUS_SUCCESSFUL
     * - AdapterResponseInterface::STATUS_FAILED
     * - AdapterResponseInterface::STATUS_UNKNOWN
     *
     * @param string $status
     * @return void
     */
    public function setStatus($status);

    /**
     * Get response's status
     *
     * @see setStatus()
     *
     * @return string
     */
    public function getStatus();

    /**
     * Get the main error message
     *
     * @return string
     */
    public function getError();
}
