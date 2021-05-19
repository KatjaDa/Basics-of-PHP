# Markdown ohjeita 
Markdown sivun voi muutaan HTML:ksi muuntimella (tosin parempi kirjoittaa suoraan HTML)
## Pikanäppäimet
-   vscode/vscodium
    -   ctrl+shift+v näet miltä dokumentti näyttää

## Otsikkotasot
# taso 1 
## taso 2
### taso 3
#### taso 4
##### taso 5
###### taso 6

## Tekstin muotoilu
tekstiä *kursivoitu* **lihavoitu** `koodikorotus` (paina shift+backspacen edessä olevaa nappulaa)

Kaksi välilyöntiä rivin lopussa tekee rivinvaihdon  
Tämä on omalla rivillä

## Lainaukset
>Ensimmäisen tason lainaus
>>Sisäkkäinen lainaus
>>>Kolmas

### Javascript
```js
const vakio = 10;
```

### JSON
```json
{
    "etunimi":"Leila",
    "sukunimi":"Hökki"
}
```

### HTML
```html
<html>
    <head>
    </head>
    <body>
    </body>
</html>
```
### Tyylisivu
```css
p{
    color:red;
}
```

### Komentoikkuna
```shell
C:> node -v
```

## Sivunvaihto pdf:ssä
```html
<div style="page-break-after: always;"></div>
```

<div style="page-break-after: always;"></div>