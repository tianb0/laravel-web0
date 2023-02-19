<?php
  namespace App\_Models;

use function GuzzleHttp\Promise\all;

  class Listing {
    public static function all() {
      return [
        [
          'id' => 1,
          'title' => 'Listing One',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames. Enim praesent elementum facilisis leo vel. Sit amet est placerat in egestas erat imperdiet sed euismod. ',
        ],
        [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames. Enim praesent elementum facilisis leo vel. Sit amet est placerat in egestas erat imperdiet sed euismod.',
        ],
      ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
          if ($listing['id'] == $id) {
              return $listing;
          }
        }
    }
  }
