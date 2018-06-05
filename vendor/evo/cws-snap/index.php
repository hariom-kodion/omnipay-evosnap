<?php
/**
 *  Copyright (c) 2013 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International
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

//Load constants
require_once  __DIR__ .'/CwsConstants.php';

//Load exceptions
require_once __DIR__ . '/exception/CwsException.php';
require_once __DIR__ . '/exception/CwsCommunicationException.php';
require_once __DIR__ . '/exception/CwsServiceException.php';

//Load model
require_once __DIR__ . '/model/CwsAdmin.php';
require_once __DIR__ . '/model/CwsCustomerManagement.php';
require_once __DIR__ . '/model/CwsDataServicesBilling.php';
require_once __DIR__ . '/model/CwsServiceInformation.php';
require_once __DIR__ . '/model/CwsTransactionManagement.php';
require_once __DIR__ . '/model/CwsTransactionProcessing.php';
require_once __DIR__ . '/model/CwsRest.php';

//Load Util
require_once __DIR__ . '/util/HttpConnections.php';

//Load services
require_once __DIR__ . '/service/BaseHttpService.php';
require_once __DIR__ . '/service/ServiceInformationServiceJson.php';
require_once __DIR__ . '/service/TransactionManagementServiceJson.php';
require_once __DIR__ . '/service/TransactionProcessingServiceJson.php';

//Load client
require_once __DIR__ . '/JSONClient.php';
