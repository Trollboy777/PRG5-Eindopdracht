# changelog
Ik heb dit project opgezet en de changelog voor het eerst gedaan. 9-10

Ik heb een ERD gemaakt en daarop feedback gekregen. Ik was vergeten om de link tussen te comments tabel en de strategies tabel te zetten. 14-10

Ik heb de eerste CRUD functionnaliteit (READ) volledig geimplementeerd. Dus de strategies page en de detail page van een specifieke strategy. 15-10

Ik heb de Create functionaliteit afgemaakt 16-10

Ik heb nu ook de Delete afgemaakt 17-10

Alle CRUD functionalliteiten zijn af en je kan alleen strategies maken als je ingelogd bent. Je kan alleen je eigen strategie bewerken en verwijderen 17-10

Ik heb mijn databse omgebouwd, dus dat er een gym_leaders table is en natuurlijk een tags table. De reden waarom ik dit heb gedaan is, omdat het makkelijker is om later nieuwe gym leaders toe te voegen. Het is dynamischer en hoe ik het heb gedaan is met het gebruik van seeders. Een tag kan bij meerdere gym leaders. Maar een gym leader kan alleen een tag, dus daarom heb ik ook de databse aangepast. Als eerst had ik een veel-op-veel relatie. 20-10

Ik heb mijn seeders aangepast, zodat er alleen maar 18 tags is een per type. Nu lukt het filteren ook op basis van de type_id. 21-10

