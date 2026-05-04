<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAttributeExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductAttributeQueryCriteriaTransfer;

/**
 * Expands the suggest keys query with additional columns.
 */
interface SuggestKeysQueryExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `ProductAttributeQueryCriteriaTransfer` with additional `withColumns` for the suggest keys query result set.
     *
     * @api
     */
    public function expandSuggestKeysQueryCriteria(
        ProductAttributeQueryCriteriaTransfer $productAttributeQueryCriteriaTransfer,
    ): ProductAttributeQueryCriteriaTransfer;
}
