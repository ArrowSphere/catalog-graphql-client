# Changelog

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.7.6] - 2025-07-01

-`AttributesParameters` add type

## [0.7.5] - 2025-06-24

- `NonExistingFieldException` has been removed and no exception will be thrown when trying to hydrate an object with a non-existing field. The non-existing fields will simply be ignored.

## [0.7.4] - 2025-01-20

- Updated Github action cache dependency for the CI workflow

## [0.7.3] - 2024-09-06

- In `SearchBody` class:
  - `EFFECTIVE_DATE` has been added to filter priceBands by an effective date

## [0.7.2] - 2023-12-02

### Added

- `Product` class: New attribute `marketSegments`, array of strings, to compile all market segments that are present in the pricebands.

## [0.7.1] - 2023-09-22

### Added

- In `SearchBody` class: added `username` field to send the username of the impersonated user
- In `Prices` class: added `transferPrice` field

## [0.7.0] - 2023-02-14

### Added

- Added support for nested filters

- `SearchBody` class:
  - `QUANTITY` has been added (type integer) to filter priceBands by quantity

### Changed

- Changed format of filters (see UPGRADING to version `0.7.0`)

## [0.6.15] - 2022-09-29

### Added

- Added a `.gitattributes` file to ignore development files when installing this package

### Changed

- Changed minimum version of `gmostafa/php-graphql-client` dependency to `1.9` to support PHP 8.
- Changed automatic tests to include PHP 8 and PHP 8.1

## [0.6.14] - 2022-06-03

### Added

- `CatalogGraphQLClient` class:
  - New method `findPriceBands()` to search for priceBands
  - New method `findOnePriceBand()` to search for one PriceBand
  - New method `findProducts()` to search for Products
  - New method `findOneProduct()` to search for one Product

- `Query` class:
  - `GET_PRICE_BANDS` has been added to search for priceBands
  - `PRICE_BAND` has been added to search for one priceBand

- `PaginatedPriceBands.php` class is now available when searching for priceBands

- `SearchBody` class:
  - `GET_FAMILIES` has been added (boolean to set to `true` to get the families corresponding to the found priceBands)

- `Family` class:
  - `ARROW_SUB_CATEGORIES` has beed added (as an array of `string`)
  - `CLASSIFICATION` has beed added (as a `string`)

- `PriceBand` class:
  - `OFFER` has been added (as a `OfferLight` class)
  - `PROGRAM` has been added (as a `Program` class)
  - `VENDOR` has been added (as a `Vendor` class)

- `OfferLight` class is now available inside `PriceBand` class when searching for priceBands

### Changed

- `CatalogGraphQLClient` class:
  - The methods `find()` and `findOne()` are deprecated (replaced by `findProducts()` and `findOneProduct()`)

### Fixed

- `Family` class:
  - @method Family setName(string `$id`) replaced by @method Family setName(string `$name`)

## [0.6.13] - 2022-04-04

- `AttributesParameter` class:
  - `ATTRIBUTES_PARAMETERS` has been added (as an array that contains `AttributesParameters` classes)
- `AttributesParameters` class has been added:
  - `VALUE` has been added (as a string)
  - `LABEL` has been added (as a string)
  - `POSITION` has been added (as an int)
- `PriceBand` class:
  - `PROMOTION_PRICES` has been added (as a `PromotionPrices` class)
- `PromotionPrices` class has been added:
  - `PROMOTION_ID` has been added (as a string)
  - `PRICES` has been added (as a `Prices` class)

## [0.6.12] - 2022-03-17

###Added

- `Product` class:
  - `PROMOTIONS` has been added (as an array that contains `Promotion` classes)
- `Promotion` class has been added:
  - `PROMOTION_ID` has been added (as a string)
  - `VENDOR_SKU` has been added (as a string)
  - `NAME` has been added (as a string)
  - `DESCRIPTION` has been added (as a string)
  - `PRICING_VALUE` has been added (as a float)
  - `PRICING_TYPE` has been added (as a string)
  - `PROMOTION_TYPE` has been added (as a string)
  - `MARKETPLACE` has been added (as a string)
  - `START_DATE` has been added (as a string)
  - `END_DATE` has been added (as a string)
  - `IS_AUTO_APPLICABLE` has been added (as a bool)
  - `MIN_QUANTITY` has been added (as an int)
  - `MAX_QUANTITY` has been added (as an int)
  - `BILLING` has been added (as a `Billing` class)

## [0.6.11] - 2022-03-11

### Added

- `Product` class:
  - New boolean attribute `isIndependantAddon` which indicates that the offer is an independant addon that can be ordered without pre-requisites.

## [0.6.10] - 2022-02-11

### Added

- `PriceBand` class:
  - `FAMILY` has been added (as a `Family` class)

## [0.6.9] - 2021-10-29

### Added

- `Product` class:
  - `RESELLERS` has been added (as a `OfferResellers` class)
- `OfferResellers` class has been added:
  - `OWNER` has been added (as a `Reseller` class)
  - `VIEWERS` has been added (as an array that contains `Reseller` classes)
- `Reseller` class has been added:
  - `XSP_REF` has been added (as a `string`)

## [0.6.8] - 2021-10-07

### Added

- New `attributes` in priceBand, an array of Attribute object containing name and value, it aims to replace the fied dynamicAttributes

### Fixed

- Null check on array type in AbstractType.php

## [0.6.7] - 2021-10-04

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

[Unreleased]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.6...HEAD
[0.7.6]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.5...0.7.6
[0.7.5]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.4...0.7.5
[0.7.4]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.3...0.7.4
[0.7.3]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.2...0.7.3
[0.7.2]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.1...0.7.2
[0.7.1]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.7.0...0.7.1
[0.7.0]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.15...0.7.0
[0.6.15]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.14...0.6.15
[0.6.14]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.13...0.6.14
[0.6.13]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.12...0.6.13
[0.6.12]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.11...0.6.12
[0.6.11]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.10...0.6.11
[0.6.10]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.9...0.6.10
[0.6.9]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.8...0.6.9
[0.6.8]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.7...0.6.8
[0.6.7]: https://github.com/ArrowSphere/catalog-graphql-client/compare/0.6.6...0.6.7
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
