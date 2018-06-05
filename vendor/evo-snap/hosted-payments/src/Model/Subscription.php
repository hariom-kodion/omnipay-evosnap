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
 * Subscription class.
 *
 * @author Antonio Molinero <antonio.molinero@evopayments.com>
 * @copyright Copyright (c) 2015-2017 EVO Snap* (http://www.evosnap.com)
 * @license	EVO Payments International EULA
 */
class Subscription extends Order
{
    /**
     * Number of time between Subscription Payments.
     *
     * @var int
     */
    public $interval_length;

    /**
     * Frequency of Subscription Payments: "days", "weeks","months", "years".
     *
     * @var string
     */
    public $interval_unit;

    /**
     * Date to process first Subscription Payment. Format 'mm/dd/yyyy'.
     * Must be at least 1 day in the future.
     *
     * @var string
     */
    public $start_date;

    /**
     * Total number of Subscription Payments. Specify "9999" for unlimited.
     *
     * @var int
     */
    public $total_occurrences;

    /**
     * Trial number of Subscription Payments.
     *
     * @var int
     */
    public $trial_occurrences;

    /**
     * Total amount to bill during the Trial Period (if any).
     *
     * @var float
     */
    public $trial_amount;

    /**
     * Flag to enable Automatic Payment processing on Snap* Hosted Payment.
     *
     * @var bool
     */
    public $auto_process;
}
