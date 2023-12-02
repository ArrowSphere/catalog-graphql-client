<?php

namespace ArrowSphere\CatalogGraphQLClient\Schema;

class Product
{
    public const ACTION_FLAGS = 'actionFlags';

    public const ACTION_FLAGS_IS_AUTO_RENEW = 'actionFlags.isAutoRenew';

    public const ACTION_FLAGS_IS_MANUAL_PROVISIONING = 'actionFlags.isManualProvisioning';

    public const ADDON_PRIMARIES = 'addonPrimaries';

    public const ADDON_PRIMARIES_ARROWSPHERE = 'addonPrimaries.arrowsphere';

    public const ADDON_PRIMARIES_ARROWSPHERE_SKU = 'addonPrimaries.arrowsphere.sku';

    public const ADDON_PRIMARIES_ARROWSPHERE_SKU_XAC = 'addonPrimaries.arrowsphere.skuXac';

    public const ADDON_PRIMARIES_ARROWSPHERE_SKU_XSP = 'addonPrimaries.arrowsphere.skuXsp';

    public const ADDON_PRIMARIES_VENDOR = 'addonPrimaries.vendor';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES = 'addonPrimaries.vendor.attributes';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_CANCEL_SUBSCRIPTION = 'addonPrimaries.vendor.attributes.cancelSubscription';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_CAN_SWITCH_AUTORENEW = 'addonPrimaries.vendor.attributes.canSwitchAutoRenew';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_DECREASE_SEATS = 'addonPrimaries.vendor.attributes.decreaseSeats';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_INCREASE_SEATS = 'addonPrimaries.vendor.attributes.increaseSeats';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_PART_IDENTIFIER = 'addonPrimaries.vendor.attributes.partIdentifier';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_PERIODICITY = 'addonPrimaries.vendor.attributes.periodicity';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_PRODUCT_ID = 'addonPrimaries.vendor.attributes.productId';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_REACTIVATE_SUBSCRIPTION = 'addonPrimaries.vendor.attributes.reactivateSubscription';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_SALES_GROUP = 'addonPrimaries.vendor.attributes.salesGroup';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_SUSPEND_SUBSCRIPTION = 'addonPrimaries.vendor.attributes.suspendSubscription';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_TERM = 'addonPrimaries.vendor.attributes.term';

    public const ADDON_PRIMARIES_VENDOR_ATTRIBUTES_UNIT_TYPE = 'addonPrimaries.vendor.attributes.unitType';

    public const ADDON_PRIMARIES_VENDOR_FAMILY = 'addonPrimaries.vendor.family';

    public const ADDON_PRIMARIES_VENDOR_NAME = 'addonPrimaries.vendor.name';

    public const ADDON_PRIMARIES_VENDOR_OFFER_NAME = 'addonPrimaries.vendor.offerName';

    public const ADDON_PRIMARIES_VENDOR_SKU = 'addonPrimaries.vendor.sku';

    public const ARROW_CATEGORIES = 'arrowCategories';

    public const ARROW_SUB_CATEGORIES = 'arrowSubCategories';

    public const ASSETS = 'assets';

    public const ASSETS_FEATURE_PICTURE_URL = 'assets.featurePictureUrl';

    public const ASSETS_MAIN_LOGO_URL = 'assets.mainLogoUrl';

    public const ASSETS_SQUARE_LOGO_URL = 'assets.squareLogoUrl';

    public const BASE_OFFER_PRIMARIES = 'baseOfferPrimaries';

    public const CLASSIFICATION = 'classification';

    public const CONVERSION_OFFER_PRIMARIES = 'conversionOfferPrimaries';

    public const END_CUSTOMER_EULA = 'endCustomerEula';

    public const END_CUSTOMER_FEATURES = 'endCustomerFeatures';

    public const END_CUSTOMER_REQUIREMENTS = 'endCustomerRequirements';

    public const ENVIRONMENT_AVAILABILITY = 'environmentAvailability';

    public const EULA = 'eula';

    public const FAMILY = 'family';

    public const FAMILY_ID = 'family.id';

    public const FAMILY_NAME = 'family.name';

    public const HAS_ADDONS = 'hasAddons';

    public const ID = 'id';

    public const IDENTIFIERS = 'identifiers';

    public const IDENTIFIERS_ARROWSPHERE = 'identifiers.arrowsphere';

    public const IDENTIFIERS_ARROWSPHERE_SKU = 'identifiers.arrowsphere.sku';

    public const IDENTIFIERS_ARROWSPHERE_SKU_XAC = 'identifiers.arrowsphere.skuXac';

    public const IDENTIFIERS_ARROWSPHERE_SKU_XSP = 'identifiers.arrowsphere.skuXsp';

    public const IDENTIFIERS_VENDOR = 'identifiers.vendor';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES = 'identifiers.vendor.attributes';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_CANCEL_SUBSCRIPTION = 'identifiers.vendor.attributes.cancelSubscription';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_CAN_SWITCH_AUTORENEW = 'identifiers.vendor.attributes.canSwitchAutoRenew';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_DECREASE_SEATS = 'identifiers.vendor.attributes.decreaseSeats';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_INCREASE_SEATS = 'identifiers.vendor.attributes.increaseSeats';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_PART_IDENTIFIER = 'identifiers.vendor.attributes.partIdentifier';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_PERIODICITY = 'identifiers.vendor.attributes.periodicity';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_PRODUCT_ID = 'identifiers.vendor.attributes.productId';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_REACTIVATE_SUBSCRIPTION = 'identifiers.vendor.attributes.reactivateSubscription';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_SALES_GROUP = 'identifiers.vendor.attributes.salesGroup';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_SUSPEND_SUBSCRIPTION = 'identifiers.vendor.attributes.suspendSubscription';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_TERM = 'identifiers.vendor.attributes.term';

    public const IDENTIFIERS_VENDOR_ATTRIBUTES_UNIT_TYPE = 'identifiers.vendor.attributes.unitType';

    public const IDENTIFIERS_VENDOR_FAMILY = 'identifiers.vendor.family';

    public const IDENTIFIERS_VENDOR_NAME = 'identifiers.vendor.name';

    public const IDENTIFIERS_VENDOR_OFFER_NAME = 'identifiers.vendor.offerName';

    public const IDENTIFIERS_VENDOR_SKU = 'identifiers.vendor.sku';

    public const IS_ADDON = 'isAddon';

    public const IS_ENABLED = 'isEnabled';

    public const IS_TRIAL = 'isTrial';

    public const LAST_UPDATE = 'lastUpdate';

    public const LICENSE_AGREEMENT_TYPE = 'licenseAgreementType';

    public const MARKETING_TEXT = 'marketingText';

    public const MARKETING_TEXT_FEATURES = 'marketingText.features';

    public const MARKETING_TEXT_FEATURES_FULL = 'marketingText.featuresFull';

    public const MARKETING_TEXT_FEATURES_SHORT = 'marketingText.featuresShort';

    public const MARKETING_TEXT_OVERVIEW_DESCRIPTION = 'marketingText.overviewDescription';

    public const MARKETPLACE = 'marketplace';

    public const MARKET_SEGMENTS = 'marketSegments';

    public const NAME = 'name';

    public const PRICE_BAND = 'priceBand';

    public const PRICE_BAND_ACTION_FLAGS = 'priceBand.actionFlags';

    public const PRICE_BAND_ACTION_FLAGS_CAN_BE_CANCELLED = 'priceBand.actionFlags.canBeCancelled';

    public const PRICE_BAND_ACTION_FLAGS_CAN_BE_REACTIVATED = 'priceBand.actionFlags.canBeReactivated';

    public const PRICE_BAND_ACTION_FLAGS_CAN_BE_SUSPENDED = 'priceBand.actionFlags.canBeSuspended';

    public const PRICE_BAND_ACTION_FLAGS_CAN_DECREASE_SEATS = 'priceBand.actionFlags.canDecreaseSeats';

    public const PRICE_BAND_ACTION_FLAGS_CAN_INCREASE_SEATS = 'priceBand.actionFlags.canIncreaseSeats';

    public const PRICE_BAND_ATTRIBUTES = 'priceBand.attributes';

    public const PRICE_BAND_BILLING = 'priceBand.billing';

    public const PRICE_BAND_BILLING_CYCLE = 'priceBand.billing.cycle';

    public const PRICE_BAND_BILLING_TERM = 'priceBand.billing.term';

    public const PRICE_BAND_BILLING_TYPE = 'priceBand.billing.type';

    public const PRICE_BAND_CURRENCY = 'priceBand.currency';

    public const PRICE_BAND_FAMILY_ID = 'priceBand.family.id';

    public const PRICE_BAND_FAMILY_NAME = 'priceBand.family.name';

    public const PRICE_BAND_IDENTIFIERS = 'priceBand.identifiers';

    public const PRICE_BAND_IDENTIFIERS_ARROWSPHERE = 'priceBand.identifiers.arrowsphere';

    public const PRICE_BAND_IDENTIFIERS_ARROWSPHERE_SKU = 'priceBand.identifiers.arrowsphere.sku';

    public const PRICE_BAND_IDENTIFIERS_ERP = 'priceBand.identifiers.erp';

    public const PRICE_BAND_IDENTIFIERS_ERP_SKU = 'priceBand.identifiers.erp.sku';

    public const PRICE_BAND_IDENTIFIERS_VENDOR = 'priceBand.identifiers.vendor';

    public const PRICE_BAND_IDENTIFIERS_VENDOR_SKU = 'priceBand.identifiers.vendor.sku';

    public const PRICE_BAND_IS_ENABLED = 'priceBand.isEnabled';

    public const PRICE_BAND_MARKETPLACE = 'priceBand.marketplace';

    public const PRICE_BAND_ORDERING_TYPE = 'priceBand.orderingType';

    public const PRICE_BAND_PRICES = 'priceBand.prices';

    public const PRICE_BAND_PRICES_BUY = 'priceBand.prices.buy';

    public const PRICE_BAND_PRICES_PUBLIC = 'priceBand.prices.public';

    public const PRICE_BAND_PRICES_SELL = 'priceBand.prices.sell';

    public const PRICE_BAND_PRICES_TRANSFER_PRICE = 'priceBand.prices.transferPrice';

    public const PRICE_BAND_SALE_CONSTRAINTS = 'priceBand.saleConstraints';

    public const PRICE_BAND_SALE_CONSTRAINTS_MAX_QUANTITY = 'priceBand.saleConstraints.maxQuantity';

    public const PRICE_BAND_SALE_CONSTRAINTS_MIN_QUANTITY = 'priceBand.saleConstraints.minQuantity';

    public const PRICE_BAND_UOM = 'priceBand.uom';

    public const PRICE_BAND_UOM_QUANTITY = 'priceBand.uom.quantity';

    public const PRICE_BAND_UOM_TYPE = 'priceBand.uom.type';

    public const PROGRAM = 'program';

    public const PROGRAM_IS_ENABLED = 'program.isEnabled';

    public const PROGRAM_LEGACY_CODE = 'program.legacyCode';

    public const PROGRAM_NAMES = 'program.names';

    public const PROGRAM_NAMES_FULL = 'program.names.full';

    public const RESELLERS = 'resellers';

    public const RESELLERS_VIEWERS_XSPREF = 'resellers.viewers.xspRef';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const SALE_CONSTRAINTS_MAX_QUANTITY = 'saleConstraints.maxQuantity';

    public const SALE_CONSTRAINTS_MAX_SUBSCRIPTION_CONSTRAINT = 'saleConstraints.maxSubscriptionConstraint';

    public const SALE_CONSTRAINTS_MAX_SUBSCRIPTION_PER_CUSTOMER = 'saleConstraints.maxSubscriptionPerCustomer';

    public const SALE_CONSTRAINTS_MIN_QUANTITY = 'saleConstraints.minQuantity';

    public const SALE_CONSTRAINTS_SALE_GROUP = 'saleConstraints.saleGroup';

    public const VENDOR = 'vendor';

    public const VENDOR_NAME = 'vendor.name';

    public const VENDOR_OFFER_URL = 'vendorOfferUrl';

    public const WEIGHT_FORCED = 'weightForced';

    public const WEIGHT_TOP_SALES = 'weightTopSales';
}
