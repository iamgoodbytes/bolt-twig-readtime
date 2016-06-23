<?php

namespace Bolt\Extension\GoodBytes\ReadTime;

use Bolt\Extension\SimpleExtension;

/**
 * ExtensionName extension class.
 *
 * @author @GoodBytes
 */
class ReadTimeExtension extends SimpleExtension
{
  protected function registerTwigFilters(){
    return [
      "readtime" => "readtime"
    ];
  }

  public function readtime($input, $singular, $plural){
    // average read time 200-250 words per minute
    $words = str_word_count($input);
    $minutes = round($words/200);
    if( $minutes == 0  || $minutes == 1){
      return "1 " . $singular; // let's take at least one minute
    }
    return $minutes . " " . $plural;
  }
}
