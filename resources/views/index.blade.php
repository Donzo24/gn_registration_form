<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ __("Registration form CTLD Guinea") }}</title>
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

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
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

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                1. {{ __("TYPE D'ENREGISTREMENT") }}*:
                                            </label>
                                            <select name="type" class="form-control" placeholder="Enter your email">
                                                <option value="N">{{ __("Nouveau") }}</option>
                                                <option value="M">{{ __("Modifier") }}</option>
                                                <option value="D">{{ __("Détruire") }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                2. {{ __("NOM DE DOMAINE COMPLET") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row-->
                                <h3 class="text-center">3. {{ __("INFOS SUR L'ORGANISATION / LE DEMANDEUR") }}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3a. {{ __("Nom de l'Organisation") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3b. {{ __("Adresse (rue) 1") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3b. {{ __("Adresse (rue) 2") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3c. {{ __("Ville") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3d. {{ __("Code Postal") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                3e. {{ __("Pays") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                4. {{ __("DESCRIPTION DU DOMAINE") }}*:
                                            </label>
                                            <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                5. {{ __("Date Operationnel") }}*:
                                            </label>
                                            <input type="date" id="date" name="date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <h3 class="text-center">6. {{ __("CONTACT ADMINISTRATIF") }}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6a. {{ __("NIChandle (si connu)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6b. {{ __("Nom complet") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6c. {{ __("Nom de l'Organisation)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6d. {{ __("Adresse (rue)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6d. {{ __("Adresse (rue)") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6e. {{ __("Ville") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6f. {{ __("Code Postal") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6g. {{ __("Pays") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                6h. {{ __("Email") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>

                                </div>

                                <h3 class="text-center">7. {{ __("CONTACT TECHNIQUE") }}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7a. {{ __("NIChandle (si connu)") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7b. {{ __("Nom complet") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7c. {{ __("Nom de l'Organisation)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7d. {{ __("Adresse (rue)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7d. {{ __("Adresse (rue)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7e. {{ __("Ville") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7f. {{ __("Code Postal") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7g. {{ __("Pays") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7h. {{ __("Telephone") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7i. {{ __("Email") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7j. {{ __("Email enregistrement") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                7k. {{ __("Fax") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
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
                                            <label for="emailaddress" class="form-label">
                                                8a. {{ __("Nom du serveur") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                8b. {{ __("Adresse IP") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <h3 class="text-center">9. {{ __("SERVEUR SECONDAIRE: NOM, ADRESSE RESEAU") }}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                9a. {{ __("Nom du serveur") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                9b. {{ __("Adresse IP") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <p>{{ __("REPONDEZ A LA QUESTION 10 POUR DES ENREGISTREMENTS DIRECTS D'HOTES IP (si
                                    vous avez répondu aux questions 8 et 9, ne pas répondre aux questions
                                    10, 11, et 12)") }}.
                                    </p>

                                <h3 class="text-center">10. {{ ("RESOURCE RECORDS (RRs) POUR HOTES IP") }}}}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                10a. {{ __("ADRESSE IP (requis)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                               10b. {{ __("HARDWARE") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                10c. {{ __("SYSTEME EXPLOITATION") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                10d. {{ __("MX") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
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
                                            <label for="emailaddress" class="form-label">
                                                11a. {{ __("Nom du l'hote relais") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                11b. {{ __("Nom Contact (req)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                11c. {{ __("Email Contact (req)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <h3 class="text-center">11. {{ __("RESOURCE RECORDS (RRs) POUR HOTES NON-IP (UUCP)") }}</h3>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                11a. {{ __("NOM DE DOMAINE") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                12b. {{ __("HARDWARE") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                12c. {{ __("SYSTEME EXPLOITATION") }}:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailaddress" class="form-label">
                                                12d. {{ __("MX (requis)") }}*:
                                            </label>
                                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2022 - <script>document.write(new Date().getFullYear())</script> &copy; {{ __("Registration in the Guinea country domain, GN") }} <a href="" class="text-white-50">Youssouf DONZO</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset("assets/js/vendor.min.js") }}"></script>

        <!-- App js -->
        <script src="{{ asset("assets/js/app.min.js") }}"></script>

    </body>
</html>
