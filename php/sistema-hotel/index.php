<?php
   $hotel = new Hotel("Hotel Overlook", "Rua Haddock Lobo, 123", 4);
   $quarto = new Quarto(101, "Suíte", 200.0, 2);
   $hóspede = new Hóspede("Jack", "123.456.789-00", "98765-4321");
   
   $mobiliário = new Mobiliário("Cama", "Cama King Size");
   $quarto->addMobiliário($mobiliário);
   
   $reserva = new Reserva("2024-08-01", "2024-08-05", "Confirmada", $quarto, $hóspede);
   
?>
