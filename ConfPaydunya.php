<?php
require 'paydunyaphp/paydunya.php';

// Configuration de Paydunya
Paydunya_Setup::setMasterKey("np1zEi29-QitR-B1YZ-LiiK-vPpk8zhRlagR");
Paydunya_Setup::setPublicKey("test_public_RBXtdgfPmoEKE06KnOjZVsvLRKw");
Paydunya_Setup::setPrivateKey("test_private_IaoH2erHNZLVlRPB9uyK2XnfbgY");
Paydunya_Setup::setToken("0kZ8YHmQsZ0wVjo9Qzwq");
Paydunya_Setup::setMode("test"); // Mode test

// Configuration des informations de votre service/entreprise
Paydunya_Checkout_Store::setName("Reservation de place");
Paydunya_Checkout_Store::setTagline("L'élégance n'a pas de prix");
Paydunya_Checkout_Store::setPhoneNumber("774871914");
Paydunya_Checkout_Store::setPostalAddress("Dakar Plateau - Etablissement kheweul");
Paydunya_Checkout_Store::setCancelUrl("");
Paydunya_Checkout_Store::setWebsiteUrl("");
Paydunya_Checkout_Store::setLogoUrl("");

// Création d'une instance de la classe Paydunya_Onsite_Invoice
$co = new Paydunya_Onsite_Invoice();

// Ajout des articles à la facture
$co->addItem("Clavier DELL", 2, 3000, 6000);
$co->addItem("Ordinateur Lenovo L440", 1, 400000, 400000, "Réduction de 10%");
$co->addItem("Casque Logitech", 1, 8000, 8000);

// Définition du montant total de la facture
$co->setTotalAmount(6500);

// Création de la facture
if($co->create("khadimt660@gmail.com")) {
    echo $co->getInvoiceUrl();
    // header("Location: ".$co->getInvoiceUrl());
    exit; // Assure que le script se termine après la redirection
} else {
    echo $co->response_text;
}
?>
