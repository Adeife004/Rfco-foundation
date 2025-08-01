<?php
/**
 * @package php-font-lib
 * @link    https://github.com/dompdf/php-font-lib
 * @author  Fabien Ménager <fabien.menager@gmail.com>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

namespace FontLib\Table\Type;
use FontLib\Table\Table;
use Exception;

/**
 * `head` font table.
 *
 * @package php-font-lib
 */
class head extends Table {
  protected $def = array(
    "tableVersion"       => self::Fixed,
    "fontRevision"       => self::Fixed,
    "checkSumAdjustment" => self::uint32,
    "magicNumber"        => self::uint32,
    "flags"              => self::uint16,
    "unitsPerEm"         => self::uint16,
    "created"            => self::longDateTime,
    "modified"           => self::longDateTime,
    "xMin"               => self::FWord,
    "yMin"               => self::FWord,
    "xMax"               => self::FWord,
    "yMax"               => self::FWord,
    "macStyle"           => self::uint16,
    "lowestRecPPEM"      => self::uint16,
    "fontDirectionHint"  => self::int16,
    "indexToLocFormat"   => self::int16,
    "glyphDataFormat"    => self::int16,
  );

  protected function _parse() {
    parent::_parse();

    if ($this->data["magicNumber"] != 0x5F0F3CF5) {
      throw new Exception("Incorrect magic number (" . dechex($this->data["magicNumber"]) . ")");
    }
  }

  function _encode() {
    $this->data["checkSumAdjustment"] = 0;
    return parent::_encode();
  }
}
