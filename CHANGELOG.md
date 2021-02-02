# Changelog

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Changed
- The code now uses ```array_is_list``` from the package ```symfony/polyfill-php81``` because this function will exist in PHP 8.1

## [0.4.0] - 2021-02-01
### Removed
- The ```CatalogGraphQLClient::find()``` method has changed: it now takes an array called ```searchBody``` as an input parameter, instead of ```marketplace``` and ```filters```. The marketplace and the filters must be passed in the ```searchBody``` array. This will allow more variable parameters to be passed to the endpoint. This is a breaking change but needs very little work to be adapted. See [Upgrade guide](UPGRADING.md) for more information.

### Added
- There is now a ```CatalogGraphQLClient::findOne()``` method that allows to find only one offer.
- ```FilterHelper``` can now manage multiple values in a single field

### Fixed
- Added a transformation to the filters to make sure the values are always strings, or array of strings (bool values are transformed to string "true" or "false")

## [0.3.1] - 2021-01-26
### Fixed
- Removed usage of ```class_exists``` in ```AbstractType``` which can have side effects with autoloading

## [0.3.0] - 2021-01-25
### Changed
- All the type classes now extend an abstract class named ```AbstractType```. Their accessors are now magic methods created via the ```__call``` method of ```AbstractType```
- Now if a field is not requested, but the user tries to access it regardless, a ```UnrequestedException``` is thrown. This allows to make a difference between "the field is ```null``` because I didn't request it" and "the field is really ```null```"

## [0.2.0] - 2021-01-19
### Added
- Test classes for other type classes

### Fixed
- Properties for class ```Attributes``` were wrongly typed to ```mixed```
- Property ```value``` for class ```Filters``` was wrongly typed to ```FiltersValues``` instead of ```FiltersValues[]```
- Property ```actionFlags``` for class ```PriceBand``` was wrongly typed to ```ActionFlags``` instead of ```PriceBandActionFlags```

### Changed
- Renamed ```SalesConstraints``` class to ```SaleConstraints``` to be coherent with the naming in the GraphQL API
- Sorted alphabetically the properties in the type test classes

## [0.1.1] - 2021-01-18
### Added
- Test classes for ```PriceBand``` type and all its direct children

### Fixed
- PriceBand property ```identifiers``` is now an instance of ```PriceBandIdentifiers``` instead of ```Identifiers```

## [0.1.0] - 2021-01-18
### Added
- CatalogGraphQLClient class with its "find" method
