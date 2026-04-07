<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAttributeExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductAttributeQueryCriteriaTransfer;

/**
 * Expands product attribute meta query with additional columns.
 */
interface ProductAttributeQueryExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `ProductAttributeQueryCriteriaTransfer` with additional `withColumns` for the product attribute meta query result set.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAttributeQueryCriteriaTransfer $productAttributeQueryCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAttributeQueryCriteriaTransfer
     */
    public function expandProductAttributeQueryCriteria(
        ProductAttributeQueryCriteriaTransfer $productAttributeQueryCriteriaTransfer,
    ): ProductAttributeQueryCriteriaTransfer;
}
