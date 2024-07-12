<?php
/*
 * Copyright notice
 *
 * (c) 2023 Thomas Rawiel <t.rawiel@lingner.com>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 *
 * Last modified: 17.05.23, 14:15
 */

namespace TRAW\Powermailautocomplete\Configuation;

/**
 * Class DefaultAutocompleteItems
 */
class DefaultAutocompleteItems
{
    public static string $LLL = 'LLL:EXT:powermailautocomplete/Resources/Private/Language/locallang_db.xlf:';

    /**
     * @return array[]
     */
    public static function getSelectItemsVersion11(): array
    {
        return [
            [self::$LLL . 'name', 'name', '', 'name'],
            [self::$LLL . 'honorific-prefix', 'honorific-prefix', '', 'name'],
            [self::$LLL . 'given-name', 'given-name', '', 'name'],
            [self::$LLL . 'additional-name', 'additional-name', '', 'name'],
            [self::$LLL . 'family-name', 'family-name', '', 'name'],
            [self::$LLL . 'honorific-suffix', 'honorific-suffix', '', 'name'],
            [self::$LLL . 'nickname', 'nickname', '', 'name'],
            [self::$LLL . 'sex', 'sex', '', 'name'],
            [self::$LLL . 'email', 'email', '', 'contact'],
            [self::$LLL . 'impp', 'impp', '', 'contact'],
            [self::$LLL . 'url', 'url', '', 'contact'],
            [self::$LLL . 'organization-title', 'organization-title', '', 'contact'],
            [self::$LLL . 'organization', 'organization', '', 'contact'],
            [self::$LLL . 'street-address', 'street-address', '', 'contact'],
            [self::$LLL . 'country', 'country', '', 'contact'],
            [self::$LLL . 'country-name', 'country-name', '', 'contact'],
            [self::$LLL . 'postal-code', 'postal-code', '', 'contact'],
            [self::$LLL . 'address-line1', 'address-line1', '', 'address'],
            [self::$LLL . 'address-line2', 'address-line2', '', 'address'],
            [self::$LLL . 'address-line3', 'address-line3', '', 'address'],
            [self::$LLL . 'address-level1', 'address-level1', '', 'address'],
            [self::$LLL . 'address-level2', 'address-level2', '', 'address'],
            [self::$LLL . 'address-level3', 'address-level3', '', 'address'],
            [self::$LLL . 'address-level4', 'address-level4', '', 'address'],
            [self::$LLL . 'tel', 'tel', '', 'tel'],
            [self::$LLL . 'tel-country-code', 'tel-country-code', '', 'tel'],
            [self::$LLL . 'tel-area-code', 'tel-area-code', '', 'tel'],
            [self::$LLL . 'tel-national', 'tel-national', '', 'tel'],
            [self::$LLL . 'tel-local', 'tel-local', '', 'tel'],
            [self::$LLL . 'tel-local-prefix', 'tel-local-prefix', '', 'tel'],
            [self::$LLL . 'tel-local-suffix', 'tel-local-suffix', '', 'tel'],
            [self::$LLL . 'tel-extension', 'tel-extension', '', 'tel'],
            [self::$LLL . 'username', 'username', '', 'user'],
            [self::$LLL . 'new-password', 'new-password', '', 'user'],
            [self::$LLL . 'current-password', 'current-password', '', 'user'],
            [self::$LLL . 'one-time-code', 'one-time-code', '', 'user'],
            [self::$LLL . 'bday', 'bday', '', 'bday'],
            [self::$LLL . 'bday-day', 'bday-day', '', 'bday'],
            [self::$LLL . 'bday-month', 'bday-month', '', 'bday'],
            [self::$LLL . 'bday-year', 'bday-year', '', 'bday'],
            [self::$LLL . 'cc-name', 'cc-name', '', 'cc'],
            [self::$LLL . 'cc-given-name', 'cc-given-name', '', 'cc'],
            [self::$LLL . 'cc-additional-name', 'cc-additional-name', '', 'cc'],
            [self::$LLL . 'cc-family-name', 'cc-family-name', '', 'cc'],
            [self::$LLL . 'cc-number', 'cc-number', '', 'cc'],
            [self::$LLL . 'cc-exp', 'cc-exp', '', 'cc'],
            [self::$LLL . 'cc-exp-month', 'cc-exp-month', '', 'cc'],
            [self::$LLL . 'cc-exp-year', 'cc-exp-year', '', 'cc'],
            [self::$LLL . 'cc-csc', 'cc-csc', '', 'cc'],
            [self::$LLL . 'cc-type', 'cc-type', '', 'cc'],
            [self::$LLL . 'transaction-currency', 'transaction-currency', '', 'cc'],
            [self::$LLL . 'transaction-amount', 'transaction-amount', '', 'cc'],
            [self::$LLL . 'language', 'language', '', 'other'],
            [self::$LLL . 'photo', 'photo', '', 'name'],
        ];
    }

    /**
     * @return array[]
     */
    public static function getSelectItems(): array
    {
        return [
            ['label' => self::$LLL . 'name', 'value' => 'name', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'honorific-prefix', 'value' => 'honorific-prefix', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'given-name', 'value' => 'given-name', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'additional-name', 'value' => 'additional-name', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'family-name', 'value' => 'family-name', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'honorific-suffix', 'value' => 'honorific-suffix', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'nickname', 'value' => 'nickname', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'sex', 'value' => 'sex', 'icon' => '', 'group' => 'name'],
            ['label' => self::$LLL . 'email', 'value' => 'email', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'impp', 'value' => 'impp', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'url', 'value' => 'url', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'organization-title', 'value' => 'organization-title', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'organization', 'value' => 'organization', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'street-address', 'value' => 'street-address', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'country', 'value' => 'country', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'country-name', 'value' => 'country-name', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'postal-code', 'value' => 'postal-code', 'icon' => '', 'group' => 'contact'],
            ['label' => self::$LLL . 'address-line1', 'value' => 'address-line1', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-line2', 'value' => 'address-line2', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-line3', 'value' => 'address-line3', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-level1', 'value' => 'address-level1', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-level2', 'value' => 'address-level2', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-level3', 'value' => 'address-level3', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'address-level4', 'value' => 'address-level4', 'icon' => '', 'group' => 'address'],
            ['label' => self::$LLL . 'tel', 'value' => 'tel', 'icon' => '', 'tel'],
            ['label' => self::$LLL . 'tel-country-code', 'value' => 'tel-country-code', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-area-code', 'value' => 'tel-area-code', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-national', 'value' => 'tel-national', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-local', 'value' => 'tel-local', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-local-prefix', 'value' => 'tel-local-prefix', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-local-suffix', 'value' => 'tel-local-suffix', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'tel-extension', 'value' => 'tel-extension', 'icon' => '', 'group' => 'tel'],
            ['label' => self::$LLL . 'username', 'value' => 'username', 'icon' => '', 'group' => 'user'],
            ['label' => self::$LLL . 'new-password', 'value' => 'new-password', 'icon' => '', 'group' => 'user'],
            ['label' => self::$LLL . 'current-password', 'value' => 'current-password', 'icon' => '', 'group' => 'user'],
            ['label' => self::$LLL . 'one-time-code', 'value' => 'one-time-code', 'icon' => '', 'group' => 'user'],
            ['label' => self::$LLL . 'bday', 'value' => 'bday', 'icon' => '', 'group' => 'bday'],
            ['label' => self::$LLL . 'bday-day', 'value' => 'bday-day', 'icon' => '', 'group' => 'bday'],
            ['label' => self::$LLL . 'bday-month', 'value' => 'bday-month', 'icon' => '', 'group' => 'bday'],
            ['label' => self::$LLL . 'bday-year', 'value' => 'bday-year', 'icon' => '', 'group' => 'bday'],
            ['label' => self::$LLL . 'cc-name', 'value' => 'cc-name', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-given-name', 'value' => 'cc-given-name', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-additional-name', 'value' => 'cc-additional-name', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-family-name', 'value' => 'cc-family-name', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-number', 'value' => 'cc-number', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-exp', 'value' => 'cc-exp', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-exp-month', 'value' => 'cc-exp-month', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-exp-year', 'value' => 'cc-exp-year', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-csc', 'value' => 'cc-csc', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'cc-type', 'value' => 'cc-type', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'transaction-currency', 'value' => 'transaction-currency', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'transaction-amount', 'value' => 'transaction-amount', 'icon' => '', 'group' => 'cc'],
            ['label' => self::$LLL . 'language', 'value' => 'language', 'icon' => '', 'group' => 'other'],
            ['label' => self::$LLL . 'photo', 'value' => 'photo', 'icon' => '', 'group' => 'other'],
        ];
    }

}
