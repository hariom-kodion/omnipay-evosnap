<?php
/**
 * Copyright (c) 2015 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International, INC.
 *
 * Use, duplication or disclosure by the U.S. Government is subject
 * to restrictions set forth in an executed license agreement
 * and in subparagraph (c)(1) of the Commercial Computer
 * Software-Restricted Rights Clause at FAR 52.227-19; subparagraph
 * (c)(1)(ii) of the Rights in Technical Data and Computer Software
 * clause at DFARS 252.227-7013, subparagraph (d) of the Commercial
 * Computer Software--Licensing clause at NASA FAR supplement
 * 16-52.227-86; or their equivalent.
 *
 * Information in this software is subject to change without notice
 * and does not represent a commitment on the part of EVO Payments International.
 *
 * Sample Code is for reference Only and is intended to be used for educational purposes. It's the responsibility of
 * the software company to properly integrate into thier solution code that best meets thier production needs.
 */
namespace Evosnap\Cws\Exception;

/**
 * CWS Communication exception.
 *
 * @author Antonio Molinero
 */
class CwsCommunicationException extends CwsException
{

    private $statusCode;

    private $response;

    /**
     *
     * @return int the statusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     *
     * @param
     *            int statusCode the statusCode to set
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     *
     * @return string the response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     *
     * @param
     *            string response the response to set
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}
