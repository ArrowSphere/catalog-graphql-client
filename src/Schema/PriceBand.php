<?php

namespace ArrowSphere\CatalogGraphQLClient\Schema;

class PriceBand
{
    public const ACTION_FLAGS_CAN_BE_CANCELLED = 'actionFlags.canBeCancelled';

    public const ACTION_FLAGS_CAN_BE_REACTIVATED = 'actionFlags.canBeReactivated';

    public const ACTION_FLAGS_CAN_BE_SUSPENDED = 'actionFlags.canBeSuspended';

    public const ACTION_FLAGS_CAN_DECREASE_SEATS = 'actionFlags.canDecreaseSeats';

    public const ACTION_FLAGS_CAN_INCREASE_SEATS = 'actionFlags.canIncreaseSeats';

    public const ATTRIBUTES = 'attributes';

    public const ATTRIBUTES_NAME = 'attributes.name';

    public const ATTRIBUTES_VALUE = 'attributes.value';

    public const BILLING_CYCLE = 'billing.cycle';

    public const BILLING_TERM = 'billing.term';

    public const BILLING_TYPE = 'billing.type';

    public const FAMILY_ID = 'family.id';

    public const FAMILY_NAME = 'family.name';

    public const ID = 'id';

    public const IDENTIFIERS_ARROWSPHERE_SKU = 'identifiers.arrowsphere.sku';

    public const IDENTIFIERS_ERP_SKU = 'identifiers.erp.sku';

    public const IDENTIFIERS_VENDOR_PURCHASE_PLAN = 'identifiers.vendor.purchasePlan';

    public const IDENTIFIERS_VENDOR_SKU = 'identifiers.vendor.sku';

    public const IS_ENABLED = 'isEnabled';

    public const MARKETPLACE = 'marketplace';

    public const NAME = 'name';

    public const OFFER_ARROW_CATEGORIES = 'offer.arrowCategories';

    public const OFFER_ARROW_SUB_CATEGORIES = 'offer.arrowSubCategories';

    public const OFFER_CLASSIFICATION = 'offer.classification';

    public const OFFER_ENVIRONMENT_AVAILABILITY = 'offer.environmentAvailability';

    public const OFFER_HAS_ADDONS = 'offer.hasAddons';

    public const OFFER_IDENTIFIERS_ARROWSPHERE_SKU = 'offer.identifiers.arrowsphere.sku';

    public const OFFER_IDENTIFIERS_ARROWSPHERE_SKU_XAC = 'offer.identifiers.arrowsphere.skuXac';

    public const OFFER_IDENTIFIERS_ARROWSPHERE_SKU_XSP = 'offer.identifiers.arrowsphere.skuXsp';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_PART_IDENTIFIER = 'offer.identifiers.vendor.attributes.partIdentifier';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_PERIODICITY = 'offer.identifiers.vendor.attributes.periodicity';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_PLAN_ID = 'offer.identifiers.vendor.attributes.planId';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_PRODUCT_ID = 'offer.identifiers.vendor.attributes.productId';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_PRODUCT_SKU = 'offer.identifiers.vendor.attributes.productSku';

    public const OFFER_IDENTIFIERS_VENDOR_ATTRIBUTES_SALES_GROUP = 'offer.identifiers.vendor.attributes.salesGroup';

    public const OFFER_IDENTIFIERS_VENDOR_FAMILY = 'offer.identifiers.vendor.family';

    public const OFFER_IDENTIFIERS_VENDOR_NAME = 'offer.identifiers.vendor.name';

    public const OFFER_IDENTIFIERS_VENDOR_OFFER_NAME = 'offer.identifiers.vendor.offerName';

    public const OFFER_IDENTIFIERS_VENDOR_SKU = 'offer.identifiers.vendor.sku';

    public const OFFER_IS_ADDON = 'offer.isAddon';

    public const OFFER_IS_ENABLED = 'offer.isEnabled';

    public const OFFER_IS_TRIAL = 'offer.isTrial';

    public const OFFER_NAME = 'offer.name';

    public const OFFER_PROMOTIONS_BILLING_CYCLE = 'offer.promotions.billing.cycle';

    public const OFFER_PROMOTIONS_BILLING_TERM = 'offer.promotions.billing.term';

    public const OFFER_PROMOTIONS_CURRENCY = 'offer.promotions.currency';

    public const OFFER_PROMOTIONS_DESCRIPTION = 'offer.promotions.description';

    public const OFFER_PROMOTIONS_END_DATE = 'offer.promotions.endDate';

    public const OFFER_PROMOTIONS_IS_AUTO_APPLICABLE = 'offer.promotions.isAutoApplicable';

    public const OFFER_PROMOTIONS_MAX_QUANTITY = 'offer.promotions.maxQuantity';

    public const OFFER_PROMOTIONS_MIN_QUANTITY = 'offer.promotions.minQuantity';

    public const OFFER_PROMOTIONS_NAME = 'offer.promotions.name';

    public const OFFER_PROMOTIONS_PRICING_TYPE = 'offer.promotions.pricingType';

    public const OFFER_PROMOTIONS_PRICING_VALUE = 'offer.promotions.pricingValue';

    public const OFFER_PROMOTIONS_PROMOTION_ID = 'offer.promotions.promotionId';

    public const OFFER_PROMOTIONS_PROMOTION_TYPE = 'offer.promotions.promotionType';

    public const OFFER_PROMOTIONS_START_DATE = 'offer.promotions.startDate';

    public const OFFER_RESELLERS_OWNER_XSPREF = 'offer.resellers.owner.xspRef';

    public const OFFER_RESELLERS_VIEWERS_XSPREF = 'offer.resellers.viewers.xspRef';

    public const OFFER_SCOPE = 'offer.scope';

    public const ORDERING_TYPE = 'orderingType';

    public const PROGRAM_LEGACY_CODE = 'program.legacyCode';

    public const PROGRAM_IS_ENABLED = 'program.isEnabled';

    public const PROGRAM_NAMES_FULL = 'program.names.full';

    public const PROGRAM_NAMES_SHORT = 'program.names.short';

    public const UOM_TYPE = 'uom.type';

    public const VENDOR_NAME = 'vendor.name';
}
