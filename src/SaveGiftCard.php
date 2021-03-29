<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveGiftCard
{
private $giftCardID = null;

    /**
     * SaveGiftCard constructor.
     * @param null $giftCardID
     */
    public function __construct($record)
    {
        $this->giftCardID = $record->giftCardID;
    }

    /**
     * @return null
     */
    public function getGiftCardID()
    {
        return $this->giftCardID;
    }

}
