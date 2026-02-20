<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>InventarSystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#68838B'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-800">

<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <div class="text-xl font-bold text-primary">InventarSystem</div>

    </div>
</nav>

<section class="pt-28 bg-gradient-to-r from-blue-200 to-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        <!-- TEXT -->
        <div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">
                <br>Inventarsystem
            </h1>

        </div>


        </div>

    </div>
</section>

<section id="features" class="py-20">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-12">Funktionen</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Bestandsverwaltung</h3>
                <p>
                    Digitale Verwaltung aller Artikel, Materialien, Geräte und Lagerorte
                    mit strukturierter Kategorisierung.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Echtzeit-Tracking</h3>
                <p>
                    Live-Übersicht über Bestände, Bewegungen, Ein- und Ausgänge
                    in Echtzeit.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Automatisierung</h3>
                <p>
                    Automatische Bestellvorschläge, Warnmeldungen bei Engpässen
                    und intelligente Prozesse.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Sicherheit</h3>
                <p>
                    Benutzerrechte, Rollenverwaltung und sichere Datenhaltung
                    nach modernen Standards.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Mobile Nutzung</h3>
                <p>
                    Optimiert für Smartphone, Tablet und Desktop – vollständig responsive.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">Analysen</h3>
                <p>
                    Berichte, Statistiken und Prognosen zur Optimierung von Lagerkosten.
                </p>
            </div>

        </div>
    </div>
</section>

</body>
</html>

