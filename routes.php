<?php

$routes = [
    '/projetcomplement/acceuil' => 'AccueilController@index',
    '/projetcomplement/login' => 'AccueilController@login',
    '/projetcomplement/inscription' => 'AccueilController@inscription',
    'POST:/projetcomplement/register' => 'UtilisateurController@inscription',
    'POST:/projetcomplement/connexion/dashboard' => 'UtilisateurController@connexion',
    '/projetcomplement/deconnexion' => 'UtilisateurController@deconnexion',
    '/projetcomplement/evenement' => 'EvenementController@CreationEvenment',
    'POST:/projetcomplement/creer_evenement' => 'EvenementController@creerEvenement',
    '/projetcomplement/ComingEv' => 'EvenementController@displayUpcomingEvents',
    '/projetcomplement/PastEvent' => 'EvenementController@displayPastEvents',
    '/projetcomplement/master' => 'ReservationController@displayReservationForm',
    'POST:/projetcomplement/SubmitReservation' => 'ReservationController@submitReservation',
    '/projetcomplement/rechercheEvenements' => 'EvenementController@rechercheEvenements',
    '/projetcomplement/details_evenement' => 'EvenementController@detailsEvenement',
    '/projetcomplement/creation_media' => 'EvenementController@afficherFormulaireCreationMedia',
    'POST:/projetcomplement/creer_media' => 'EvenementController@creerMedia',      
    '/projetcomplement/changer' => 'EvenementController@supmedia',
    '/projetcomplement/supprimer_media' => 'EvenementController@supprimedia',
    '/projetcomplement/mesevenements' => 'EvenementController@mesevenements',
    '/projetcomplement/evenements/supprimer' => 'EvenementController@supprimerEvenement'
    // '/projetcomplement/connexion/dashboard' => 'DashboardController@getUpcomingEvents',
];

