<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAttributeExtension\Dependency\Plugin;

/**
 * Expands suggest keys result items with additional data after the query has been executed.
 */
interface SuggestKeysExpanderPluginInterface
{
    /**
     * Specification:
     * - Receives the full suggest keys result set after the query is executed.
     * - Expands each item with additional computed data (e.g. formatted column values).
     * - Returns the expanded suggest keys collection.
     *
     * @api
     *
     * @param array<array<string, mixed>> $suggestKeys
     *
     * @return array<array<string, mixed>>
     */
    public function expandSuggestKeys(array $suggestKeys): array;
}
