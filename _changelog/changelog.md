# Changelog

- Ik heb een aparte gebruikerspagina gemaakt waarin je je eigen info kan zien/bewerken en je geposte strategies kan zien, plus navbar geplaatst in al mijn views (partial). 3-11
- Je hebt nu een admin rol die een eigen pagina heeft waarin die de strategies kan goedkeuren of niet. Als het is goedgekeurd dan zie je het bij de index page van de strategies. 2-11
- Je kan nu alleen een strategy maken als je minimaal 3 comments hebt (deeper validation). 29-10
- Ik heb het comment systeem af, dus je kan bij een specifieke strategy comments plaatsen, natuurlijk alleen als je ingelogd bent. 27-10
- Ik heb de search functie af, zodat je kan zoeken op basis van de titel van een strategie. Ik heb ook een bugfix gedaan en je kunt nu weer de gym leader zien bij de show page. Het probleem was dat de wijziging naar de gym_leaders table nog niet was doorgevoerd bij de show page. 24-10
- Ik heb mijn seeders aangepast, zodat er alleen maar 18 tags zijn, één per type. Nu werkt het filteren ook op basis van de type_id. 21-10
- Ik heb mijn database omgebouwd zodat er een gym_leaders table is en natuurlijk een tags table. De reden hiervoor is dat het makkelijker is om later nieuwe gym leaders toe te voegen. Het is dynamischer en ik heb dit gedaan met seeders. Een tag kan bij meerdere gym leaders horen, maar een gym leader kan slechts één tag hebben. Eerst was het een veel-op-veel relatie. 20-10
- Alle CRUD functionaliteiten zijn af en je kan alleen strategies maken als je ingelogd bent. Je kan alleen je eigen strategie bewerken en verwijderen. 17-10
- Ik heb de Delete functionaliteit afgemaakt. 17-10
- Ik heb de Create functionaliteit afgemaakt. 16-10
- Ik heb de eerste CRUD functionaliteit (READ) volledig geïmplementeerd. Dus de strategies page en de detail page van een specifieke strategy. 15-10
- Ik heb een ERD gemaakt en daarop feedback gekregen. Ik was vergeten om de link tussen de comments tabel en de strategies tabel te zetten. 14-10
- Ik heb dit project opgezet en de changelog voor het eerst toegevoegd. 9-10
