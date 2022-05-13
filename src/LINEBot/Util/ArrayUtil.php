<?php

/**
 * Copyright 2022 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\Util;

/**
 * A utility class for array operations
 *
 * @package LINE\LINEBot\Util
 */
class ArrayUtil
{
    /**
     * Merges the elements of one or more arrays together
     *
     * @param array ...$arrays — [optional]
     *
     * Variable list of arrays to merge.
     * @return array — the resulting array.
     */
    public static function arrayMerge(...$arrays)
    {
        $result = [];
        foreach ($arrays as $array) {
            foreach ($array as $val) {
                $result[] = $val;
            }
        }
        return $result;
    }
}
