<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ __("Enregistrement de domaine en Guinée (GN)") }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}">

		<!-- App css -->
		<link href="{{ asset("assets/css/config/default/app.min.css") }}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />

        <style>
            .form-group {
                margin-bottom: 5px;
                padding-bottom: 5px;
            }

            p, label {
                color: black !important;
            }
        </style>

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <form action="/send" method="POST">
                            @csrf
                            <div class="card bg-pattern">

                                <div class="card-body p-4">

                                    <div class="text-center mb-4">
                                        <div class="auth-logo">
                                            <a href="index.html" class="logo logo-dark text-center">
                                                <span class="logo-lg">
                                                    <img src="{{ asset("assets/images/gn.png") }}" alt="" height="100">
                                                </span>
                                            </a>

                                            <a href="index.html" class="logo logo-light text-center">
                                                <span class="logo-lg">
                                                    <img src="{{ asset("assets/images/gn.png") }}" alt="" height="100">
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <h2 class="text-center mb-3">{{ __("Enregistrement de domaine en Guinée (GN)") }}</h2>
                                    <p class="text-center font-18 text-bold">
                                        @if (config('app.locale') == 'en')
                                            Le formulaire est également disponible en
                                        @else
                                            The form is also available in
                                        @endif
                                        <a href="/form/{{ config('app.locale') == 'fr' ? 'en':'fr' }}">
                                            {{ config('app.locale') == 'fr' ? "English":"Français" }}
                                        </a>
                                    </p>

                                    @if (\Session::has('msg'))
                                        <h5 class="alert alert-danger mt-0">{{ Session::get('msg') }}</h5>
                                    @endif
                                    @if (\Session::has('info'))
                                        <h5 class="alert alert-info">{{ Session::get('info') }}</h5>
                                    @endif
                                    @if ($errors->any())
                                        <h5 class="alert alert-danger">{{ $errors->first() }}</h5>
                                    @endif

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    1. {{ __("TYPE D'ENREGISTREMENT") }}*:
                                                </label>
                                                <select name="TYPE" class="form-control" >
                                                    <option value="N">{{ __("Nouveau") }}</option>
                                                    <option value="M">{{ __("Modifier") }}</option>
                                                    <option value="D">{{ __("Détruire") }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">
                                                    2. {{ __("NOM DE DOMAINE COMPLET") }}*:
                                                </label>
                                                <input class="form-control" name="FULLY_QUALIFIED_DOMAIN_NAME" value="{{ old("FULLY_QUALIFIED_DOMAIN_NAME") }}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row-->
                                    <h3 class="text-center">3. {{ __("INFOS SUR L'ORGANISATION / LE DEMANDEUR") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3a. {{ __("Nom de l'Organisation") }}*:
                                                </label>
                                                <input class="form-control" type="text"  name="ORGANIZATION_NAME" value="{{ old("ORGANIZATION_NAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3b. {{ __("Adresse (rue) 1") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="ADDRESS_LINE_1" value="{{ old('ADDRESS_LINE_1') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3b. {{ __("Adresse (rue) 2") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="ADDRESS_LINE_2" value="{{ old('ADDRESS_LINE_2') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3c. {{ __("Ville") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CITY_NAME" value="{{ old('CITY_NAME') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3d. {{ __("Code Postal") }}:
                                                </label>
                                                <input class="form-control" type="text" name="POSTAL_CODE" value="{{ old('POSTAL_CODE') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    3e. {{ __("Pays") }}*:
                                                </label>
                                                <input class="form-control" type="text"  name="COUNTRY_NAME" value="{{ old("COUNTRY_NAME") }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    4. {{ __("DESCRIPTION DU DOMAINE") }}*:
                                                </label>
                                                <textarea name="DESCRIPTION_OF_ORG_DOMAIN" class="form-control" value="{{ old("DESCRIPTION_OF_ORG_DOMAIN") }}" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    5. {{ __("Date Operationnel") }}:
                                                </label>
                                                <input type="date" id="date" name="DATE_OPERATION" class="form-control" value="{{ old("DATE_OPERATION") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">6. {{ __("CONTACT ADMINISTRATIF") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6a. {{ __("NIChandle (si connu)") }}:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_NIC_HANDLE" value="{{ old('CONTACT_NIC_HANDLE') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6b. {{ __("Nom complet") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_WHOLE_NAME" value="{{ old("CONTACT_WHOLE_NAME") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6c. {{ __("Nom de l'Organisation)") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_ORGANIZATION_NAME" value="{{ old("CONTACT_ORGANIZATION_NAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6d. {{ __("Adresse rue 1") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_ADDRESS_LINE_1" value="{{ old("CONTACT_ADDRESS_LINE_1") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6d. {{ __("Adresse rue 2") }}:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_ADDRESS_LINE_2" value="{{ old("CONTACT_ADDRESS_LINE_2") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6e. {{ __("Ville") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_CITY_NAME" value="{{ old('CONTACT_CITY_NAME') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6f. {{ __("Code Postal") }}:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_POSTAL_CODE" value="{{ old("CONTACT_POSTAL_CODE") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6g. {{ __("Pays") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_COUNTRY_NAME" value="{{ old("CONTACT_COUNTRY_NAME") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6h. {{ __("Telephone") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_PHONE" value="{{ old("CONTACT_PHONE") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    6i. {{ __("Email") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="CONTACT_EMAIL" value="{{ old("CONTACT_EMAIL") }}">
                                            </div>
                                        </div>

                                    </div>

                                    <h3 class="text-center">7. {{ __("CONTACT TECHNIQUE") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7a. {{ __("NIChandle (si connu)") }}:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_NIC_HANDLE" value="{{ old("TECHNICAL_NIC_HANDLE") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7b. {{ __("Nom complet") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_WHOLE_NAME" value="{{ old("TECHNICAL_WHOLE_NAME") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7c. {{ __("Nom de l'Organisation") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_ORGANIZATION_NAME" value="{{ old("TECHNICAL_ORGANIZATION_NAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7d. {{ __("Adresse (rue) 1") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_ADDRESS_LINE_1" value="{{ old("TECHNICAL_ADDRESS_LINE_1") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7d. {{ __("Adresse (rue) 2") }}:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_ADDRESS_LINE_2" value="{{ old("TECHNICAL_ADDRESS_LINE_2") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7e. {{ __("Ville") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_CITY_NAME" value="{{ old("TECHNICAL_CITY_NAME") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7f. {{ __("Code Postal") }}:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_POSTAL_CODE" value="{{ old("TECHNICAL_POSTAL_CODE") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7g. {{ __("Pays") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_COUNTRY_NAME" value="{{ old("TECHNICAL_COUNTRY_NAME") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7h. {{ __("Telephone") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_PHONE" value="{{ old("TECHNICAL_PHONE") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7i. {{ __("Email") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_EMAIL" value="{{ old("TECHNICAL_EMAIL") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7j. {{ __("Email enregistrement") }}*:
                                                </label>
                                                <input class="form-control" type="text"  name="TECHNICAL_REGISTRATION_MAIL" value="{{ old("TECHNICAL_REGISTRATION_MAIL") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    7k. {{ __("Fax") }}:
                                                </label>
                                                <input class="form-control" type="text" name="TECHNICAL_FAX_NUM" value="{{ old("TECHNICAL_FAX_NUM") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <p>{{ __("REPONDEZ AUX QUESTIONS 8 ET 9 SEULEMENT POUR UNE DELEGATION (i.e
                                        organisation gérant une serveur de nom pour une branche de l'espace
                                        d'adressage du Domaine GN)") }}.</p>

                                    <h3 class="text-center">8. {{ __("SERVEUR PRIMAIRE: NOM, ADRESSE RESEAU") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    8a. {{ __("Nom du serveur") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="PRIMARY_SERVER_HOSTNAME" value="{{ old("PRIMARY_SERVER_HOSTNAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    8b. {{ __("Adresse IP") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="PRIMARY_SERVER_IP" value="{{ old("PRIMARY_SERVER_IP") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">9. {{ __("SERVEUR SECONDAIRE: NOM, ADRESSE RESEAU") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    9a. {{ __("Nom du serveur") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="SECONDARY_SERVER_HOSTNAME" value="{{ old("SECONDARY_SERVER_HOSTNAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    9b. {{ __("Adresse IP") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="SECONDARY_SERVER_IP" value="{{ old("SECONDARY_SERVER_IP") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <p>{{ __("REPONDEZ A LA QUESTION 10 POUR DES ENREGISTREMENTS DIRECTS D'HOTES IP (si
                                        vous avez répondu aux questions 8 et 9, ne pas répondre aux questions
                                        10, 11, et 12)") }}.
                                        </p>

                                    <h3 class="text-center">10. {{ ("RESOURCE RECORDS (RRs) POUR HOTES IP") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    10a. {{ __("ADRESSE IP (requis)") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_IP_RECORDS_IP" value="{{ old("RESOURCE_IP_RECORDS_IP") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                10b. {{ __("HARDWARE") }}:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_IP_RECORDS_HARDWARE" value="{{ old("RESOURCE_IP_RECORDS_HARDWARE") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    10c. {{ __("SYSTEME EXPLOITATION") }}:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_IP_RECORDS_OS" value="{{ old("RESOURCE_IP_RECORDS_OS") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    10d. {{ __("MX") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_IP_RECORDS_MX" value="{{ old("RESOURCE_IP_RECORDS_MX") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <p>{{ __("Il est de votre responsabilité de vérifier qu'un pointeur IN-ADDR a
                                        été entré dans la base de données DNS. Contactez le gestionnaire
                                        du réseau IP sur lequel se trouve votre hôte pour cela.") }}
                                    </p>

                                    <p>{{ __("REPONDEZ AUX QUESTIONS 11 ET 12 POUR HOTES NON-IP (comme UUCP)") }}</p>

                                    <h3 class="text-center">11. {{ __("INFORMATION SUR L'HOTE RELAIS") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    11a. {{ __("Nom du l'hote relais") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="FORWARDING_HOST" value="{{ old("FORWARDING_HOST") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    11b. {{ __("Nom Contact (req)") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="FORWARDING_CONTACT_NAME" value="{{ old("FORWARDING_CONTACT_NAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    11c. {{ __("Email Contact (req)") }}*:
                                                </label>
                                                <input class="form-control" type="text" name="FORWARDING_CONTACT_EMAIL" value="{{ old("FORWARDING_CONTACT_EMAIL") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center">12. {{ __("RESOURCE RECORDS (RRs) POUR HOTES NON-IP (UUCP)") }}</h3>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    12a. {{ __("NOM DE DOMAINE") }}:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_RECORDS_DOMAINE_NAME" value="{{ old("RESOURCE_RECORDS_DOMAINE_NAME") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    12b. {{ __("HARDWARE") }}:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_RECORDS_HARDWARE" value="{{ old("RESOURCE_RECORDS_HARDWARE") }}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    12c. {{ __("SYSTEME EXPLOITATION") }}:
                                                </label>
                                                <input class="form-control" type="text" name="RESOURCE_RECORDS_OS" value="{{ old("RESOURCE_RECORDS_OS") }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="form-label">
                                                    12d. {{ __("MX (requis)") }}*:
                                                </label>
                                                <input class="form-control" type="text"  name="RESOURCE_RECORDS_MX" value="{{ old("RESOURCE_RECORDS_MX") }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-center">{{ __("DENI DE RESPONSABILITE") }}</h4>

                                    <p>{{ __("En enregistrant votre nom sur l'Internet, le chargé de l'enregistrement
                                        (randy@psg.com), l'IANA, et la NSF (National Science Foundation) acceptent
                                        sur la base de la bonne foi que vous avez le droit d'utiliser ce nom.") }}</p>

                                    <p>{{ __("Notre rôle quant à l'enregistrement de noms sur l'Internet est
                                        d'assurer que le nom ne rentre en conflit avec aucun autre dans le domaine
                                        demandé.") }}</p>

                                    <p>{{ __("L'utilisateur, par votre enregistrement et l'utilisation du nom ou votre
                                        utilisation continue d'un nom existant, s'engage par votre demande
                                        d'enregistrement à ne pas entamer de poursuites contre le chargé de
                                        l'enregistrement, l'IANA, et la NSF (National Science Foundation), pour tous
                                        les coûts et charges financières qui résulteraient de litiges
                                        concernant les noms de marques déposés, les \"trade name\", les
                                        \"services mark\" et tout autre violation de loi liée aux noms, ou autres.") }}</p>

                                    <p>{{ __("La partie demandant l'enregistrement de ce nom certifie qu'à sa
                                        connaissance l'utilisation de ce nom ne viole pas les noms de marques
                                        déposées ou autre statut.") }}</p>

                                    <p>{{ __("Enregistrer un nom de domaine ne confère aucun droit légal sur ce nom
                                        et tout conflit sur le droit d'utiliser un nom particulier doit être
                                        réglé entre les parties en conflit suivant les voies légales
                                        habituelles de règlement") }}
                                        <a target="_blank" href="https://www.rfc-editor.org/rfc/rfc1591.html">({{ __("Voir") }} RFC 1591).</a>
                                    </p>

                                    <div class="row">
                                        <div class="col-md-12" align="right">
                                            <button class="btn btn-success float-right" type="submit">
                                                {{ __("Soumettre") }}
                                            </button>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                        </form>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy; <span class="text-white">{{ __("Enregistrement de domaine en Guinée (GN)") }}</span> <a href="mailto:donzoyoussouf@gmail.com" class="text-white">by Youssouf DONZO</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset("assets/js/vendor.min.js") }}"></script>

        <!-- App js -->
        <script src="{{ asset("assets/js/app.min.js") }}"></script>

    </body>
</html>
