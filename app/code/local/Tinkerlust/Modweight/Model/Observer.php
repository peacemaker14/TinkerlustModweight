<?php
class Tinkerlust_Modweight_Model_Observer
{
  public function ceilWeight($observer)
  {
    $quote=$observer->getQuote();
    Debug::this($quote);
  }
}
