# AmountInput

TextInput pro zadávání čísel zaokrouhlených na dvě desetinná místa (například peněžní částky).

- Při zpracování vrací float.
- Zaokrouhluje na 2 desetinná místa.
- Při vykreslení odděluje tisíce mezerou, desetinnou část čárkou (např. `12 345,00`).
- Při zpracování vstupu považuje čárku i tečku za desetinný odělovač a ignoruje mezery. Tzn. zadání `123.4` je totéž co `123,4` nebo třeba `12 3 ,4` (nebo taky `123.40001` kvůli tomu zaokrouhlování).
