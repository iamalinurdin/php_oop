<?php

namespace Interfaces;

interface Vehicle
{
  public function isCrash(bool $crash);

  public function isMaintenance();
}