
<?php

trait FormattedPrice {
  // Questo metodo restituirà il prezzo formattato con lo sconto applicato
  public function getFormattedPrice() {
    $discountedPrice = $this->price - ($this->price * $this->discount);
    return $this->formatPrice($discountedPrice);
  }

  // Questo metodo formatta il prezzo come desiderato
  private function formatPrice(float $price) {
    // Implementa la formattazione del prezzo come preferisci
    return '$' . number_format($price, 2);
  }
}

