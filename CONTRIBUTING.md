# ArrowSphere Catalog GraphQL Client package

## Adding a field to an existing type

The GraphQL types are mapped to classes extending ```AbstractType``` in the ```Types``` namespace. Getters and setters are provided by the magic ```__call()``` method, based on the ```MAPPING``` constant of the class. To add a field:

- add a constant holding the field name in the ```Types``` class, and the same constant in the matching ```Schema``` class if one exists (```Schema\Product```, ```Schema\PriceBand```), so that the field can be requested and filtered
- add the field to the ```MAPPING``` constant of the ```Types``` class, with one of the ```TYPE_*``` scalar constants or the class of the nested type (use the ```MAPPING_TYPE``` / ```MAPPING_ARRAY``` form for arrays of nested types)
- declare the getter and setter in the ```@method``` docblock of the class, which is the only place where their signatures are documented
- add the field to the corresponding test in ```tests/Types```

## Adding a new type

Write a new class extending ```AbstractType``` in the ```Types``` namespace, with its field constants and its ```MAPPING```, then reference it from the ```MAPPING``` of its parent type. Add a test class in ```tests/Types``` on the model of the existing ones.

## Before opening a pull request

- run the tests with ```make test``` and the static checks with ```make static```
- add a line describing your change under ```## [Unreleased]``` in ```CHANGELOG.md```, this is enforced by the CI
