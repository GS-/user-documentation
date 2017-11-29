<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\GFM\Inlines;

use namespace HH\Lib\Str;

final class TextualContent extends Inline {
  public function __construct(
    private string $content,
  ) {
  }

  public static function consume(
    string $chars,
  ): (Inline, string) {
    invariant(!Str\is_empty($chars), "Should never be called on empty string");
    return tuple(new self($chars[0]), Str\slice($chars, 1));
  }
}