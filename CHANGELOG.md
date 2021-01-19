# Changelog

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
