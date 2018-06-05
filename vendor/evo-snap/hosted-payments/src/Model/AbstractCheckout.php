<?php
/**
 * Copyright (c) 2015-2017 EVO Payments International - All Rights Reserved.
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
 * and does not represent a commitment on the part of EVO Payments
 * International.
 *
 * Sample Code is for REFERENCE ONLY and is intended to be used for
 * educational purposes. It's the responsibility of the software
 * company to properly integrate into their solution code that best
 * meets their production needs.
 */

namespace EvoSnap\HostedPayments\Model;

/**
 * Checkout abstract class.
 *
 * @author    Antonio Molinero <antonio.molinero@evopayments.com>
 * @copyright Copyright (c) 2015-2017 EVO Snap* (http://www.evosnap.com)
 * @license   EVO Payments International EULA
 */
abstract class AbstractCheckout
{
    /**
     * Customer.
     *
     * @var \EvoSnap\HostedPayments\Model\Customer
     */
    public $customer;

    /**
     * Return URL.
     *
     * @var string
     */
    public $return_url;

    /**
     * Cancel URL.
     *
     * @var string
     */
    public $cancel_url;

    /**
     * Auto return flag. Indicates if the customer is return directly to the return URL
     * or redirected to the EVO Snap* Success page.
     *
     * @var bool
     */
    public $auto_return;

    /**
     * Checkout page layout. "iframe" value if the checkout is going to be displayed
     * embedded on an iframe.
     *
     * @var string
     */
    public $checkout_layout;

    /**
     * Flag to indicate if EVO Snap* should create a token to reuse the credit card
     * typed by the user in the future. Only used in orders or subscriptions.
     *
     * @var bool
     */
    public $create_token;

    /**
     * Language code.
     *
     * @var string
     */
    public $language;

    /**
     * Retrieves the action to execute.
     *
     * @return string
     */
    abstract public function getAction();
}
