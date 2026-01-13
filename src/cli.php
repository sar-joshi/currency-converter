<?php

declare(strict_types=1);

try {
  $args = array_slice($argv, 1);
  $actionType = array_shift($args);

  switch ($actionType) {
    case "convert":
      # TODO
      break;
    case "calculate-profit":
      # TODO
      break;
    default:
      echo "Invalid Command";
      exit(1);
  }
} catch (Exception $e) {
  echo $e->getMessage() . "";
  exit(1);
}