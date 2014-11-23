# eZ JS Sequence Diagram

This extension offers a custom XML text tag, sequence_diagram, that converts
simple text to an UML sequence diagram in SVG.

![Sequence diagram in custom tag](https://github.com/bdunogier/ez-js-sequence-diagram/raw/master/doc/ez-js-sequence-diagram.png)

It is based on [bramp/js-sequence-diagrams](http://bramp.github.io/js-sequence-diagrams/).

## Installation
Run `composer require bdunogier/js-sequence-diagram`.
Enable extension in `settings/override/site.ini.append.php:
```
ActiveExtensions[]=ezjssequencediagram
```

## Usage
In an XML text block, add a custom tag of type "sequence_diagram". The theme attribute
can be set to either "hand" (for a hand drawn diagram) or "simple".

### Syntax
```
Andrew->China: Says Hello
Note right of China: China thinks\nabout it
China-->Andrew: How are you?
Andrew->>China: I am good thanks!
```

See http://bramp.github.io/js-sequence-diagrams for more details.
