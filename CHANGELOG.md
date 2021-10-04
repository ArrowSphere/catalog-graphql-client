# Changelog

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- Added semi-automatic publish of releases with changelog update
- Added check to see if changelog has been modified and block PRs if not

### Fixed

- Reformatted the markdown files

## [0.6.6] - 2021-09-20

### Added

- New `canSwitchAutoRenew` vendor attribute, type boolean, that indicates whether the auto-renew of the license can be switched on/off by the reseller

### Fixed

- Fixed the setter of arrowSubCategories that was misspelled

## [0.6.5] - 2021-09-17

### Fixed

- Fixed invalid escaping of quotes

## [0.6.4] - 2021-09-17

### Fixed

- Fixed `ARROW_SUBCATEGORY` that should be named `ARROW_SUB_CATEGORIES`, together with the corresponding method `getArrowSubCategories()`

## [0.6.3] - 2021-08-25

### Added

- new `defaultPriceBand` field that represents the default priceband that should be displayed to the user

## [0.6.2] - 2021-06-23

### Added

- new `DynamicAttributes` type:
  - MARKET_SEGMENT
  - VERSION
  - METRIC

## [0.6.1] - 2021-06-23

### Added

- `Product` class:
  - `IS_INDIRECT_BUSINESS` has been added (as a `bool`)

## [0.6.0] - 2021-06-11

### Added

- The `AbstractType` class now implements the `JsonSerializable` interface, so the objects can be JSONified with standard PHP code

## [0.5.1] - 2021-04-16

### Fixed

- The `InputPreparator` didn't escape the quotes properly, and didn't add quotes around the indices which contained spaces

## [0.5.0] - 2021-03-23

### Added

- There are now setters on each property

### Fixed

- The `Filters` class was used in the `FilterHelper` instead of the `Filter` class
- The `InputPreparator` had a bug on bool values, it formatted them as strings instead of real bool values
- The `Filters` class had a `VALUE` field instead of `VALUES` (confusion between `Filter` and `Filters`)
- Fixed a typo in `VendorIdentifier` (for `purchasePlan` instead of `PurchasePlan`)

## [0.4.4] - 2021-02-25

### Changed

- Changed various properties:
  - `DynamicAttributes`:
    - `CORES` has been removed
    - `HAS_ACU` has been renamed to `ACU` and is now a `string` instead of a `bool`
  - `Product`:
    - `ARROW_SUBCATEGORY` has been added (as an array of `string`)
  - `VendorIdentifier`:
    - `PURCHASE_PLAN` has been added (as a `string`)

## [0.4.3] - 2021-02-24

### Fixed

- Null check on the `types` attribute

## [0.4.2] - 2021-02-24

### Added

- Added management of the dynamic attributes on pricebands, with a new class `DynamicAttributes` which can be present in the `PriceBand` class

## [0.4.1] - 2021-02-09

### Added

- Added `relatedOffers` field to the `Product` type, and the necessary type to handle it

### Changed

- The code now uses `array_is_list` from the package `symfony/polyfill-php81` because this function will exist in PHP 8.1
- Little refactoring to `CatalogGraphQLClient`: the `prepareInput()` method has been moved to a dedicated class `InputPreparator` which is under test

## [0.4.0] - 2021-02-01

### Removed

- The `CatalogGraphQLClient::find()` method has changed: it now takes an array called `searchBody` as an input parameter, instead of `marketplace` and `filters`. The marketplace and the filters must be passed in the `searchBody` array. This will allow more variable parameters to be passed to the endpoint. This is a breaking change but needs very little work to be adapted. See [Upgrade guide](UPGRADING.md) for more information.

### Added

- There is now a `CatalogGraphQLClient::findOne()` method that allows to find only one offer.
- `FilterHelper` can now manage multiple values in a single field

### Fixed

- Added a transformation to the filters to make sure the values are always strings, or array of strings (bool values are transformed to string "true" or "false")

## [0.3.1] - 2021-01-26

### Fixed

- Removed usage of `class_exists` in `AbstractType` which can have side effects with autoloading

## [0.3.0] - 2021-01-25

### Changed

- All the type classes now extend an abstract class named `AbstractType`. Their accessors are now magic methods created via the `__call` method of `AbstractType`
- Now if a field is not requested, but the user tries to access it regardless, a `UnrequestedException` is thrown. This allows to make a difference between "the field is `null` because I didn't request it" and "the field is really `null`"

## [0.2.0] - 2021-01-19

### Added

- Test classes for other type classes

### Fixed

- Properties for class `Attributes` were wrongly typed to `mixed`
- Property `value` for class `Filters` was wrongly typed to `FiltersValues` instead of `FiltersValues[]`
- Property `actionFlags` for class `PriceBand` was wrongly typed to `ActionFlags` instead of `PriceBandActionFlags`

### Changed

- Renamed `SalesConstraints` class to `SaleConstraints` to be coherent with the naming in the GraphQL API
- Sorted alphabetically the properties in the type test classes

## [0.1.1] - 2021-01-18

### Added

- Test classes for `PriceBand` type and all its direct children

### Fixed

- PriceBand property `identifiers` is now an instance of `PriceBandIdentifiers` instead of `Identifiers`

## [0.1.0] - 2021-01-18

### Added

- CatalogGraphQLClient class with its "find" method

[Unreleased]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.6...HEAD
[0.6.6]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.5...0.6.6
[0.6.5]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.4...0.6.5
[0.6.4]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.3...0.6.4
[0.6.3]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.2...0.6.3
[0.6.2]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.1...0.6.2
[0.6.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.0...0.6.1
[0.6.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.5.1...0.6.0
[0.5.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.5.0...0.5.1
[0.5.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.4.4...0.5.0
[0.4.4]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.4.3...0.4.4
[0.4.3]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.4.2...0.4.3
[0.4.2]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.4.1...0.4.2
[0.4.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.3.1...0.4.0
[0.3.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.1.1...0.2.0
[0.1.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.1.0...0.1.1
[0.1.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/5275a7922a93e404ec1b6f5e70f0a081e78cff8f...0.1.0
