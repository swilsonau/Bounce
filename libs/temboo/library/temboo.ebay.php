<?php

/**
 * Temboo PHP SDK eBay classes
 *
 * Execute Choreographies from the Temboo eBay bundle.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage eBay
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows you create a basic listing on eBay using scalar inputs rather than an XML request.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddBasicListing extends Temboo_Choreography
{
    /**
     * Allows you create a basic listing on eBay using scalar inputs rather than an XML request.
     *
     * @param Temboo_Session $session The session that owns this AddBasicListing Choreo.
     * @return eBay_Trading_AddBasicListing New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/AddBasicListing/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddBasicListing Choreo.
     *
     * @param eBay_Trading_AddBasicListing_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddBasicListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddBasicListing_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_AddBasicListing_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddBasicListing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddBasicListing_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_AddBasicListing_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddBasicListing Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddBasicListing_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddBasicListing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddBasicListing_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddBasicListing input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BuyItNowPrice input for this AddBasicListing Choreo.
     *
     * @param float $value (optional, decimal) Allows a user to purchase the item at a Buy It Now price and end the auction immediately.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setBuyItNowPrice($value)
    {
        return $this->set('BuyItNowPrice', $value);
    }

    /**
     * Set the value for the CategoryID input for this AddBasicListing Choreo.
     *
     * @param int $value (conditional, integer) The numeric ID for a category on eBay. Category IDs can be retrieved with the GetCategories Choreo.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the ConditionID input for this AddBasicListing Choreo.
     *
     * @param int $value (conditional, integer) The numeric ID (e.g., 1000) for the item condition.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setConditionID($value)
    {
        return $this->set('ConditionID', $value);
    }

    /**
     * Set the value for the Country input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The country where the item is located in.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Currency input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The currency associated with the item price.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the DispatchTimeMax input for this AddBasicListing Choreo.
     *
     * @param int $value (conditional, integer) Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setDispatchTimeMax($value)
    {
        return $this->set('DispatchTimeMax', $value);
    }

    /**
     * Set the value for the ExpeditedService input for this AddBasicListing Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not the seller is offering expedited shipping service options.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setExpeditedService($value)
    {
        return $this->set('ExpeditedService', $value);
    }

    /**
     * Set the value for the ItemDescription input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The seller's description of the item.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setItemDescription($value)
    {
        return $this->set('ItemDescription', $value);
    }

    /**
     * Set the value for the ListingDuration input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The number of days the seller wants the listing to be active (e.g., Days_7). A complete list of accepted values is returned when calling GetCategoryFeatures with DetailLevel set to ReturnAll.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setListingDuration($value)
    {
        return $this->set('ListingDuration', $value);
    }

    /**
     * Set the value for the ListingType input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The format of the listing the seller wants to use. Valid values are: AdType, Chinese, FixedPriceItem, Half, LeadGeneration.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setListingType($value)
    {
        return $this->set('ListingType', $value);
    }

    /**
     * Set the value for the PayPalEmailAddress input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The seller's PayPal email address. Required when a PaymentMethod is PayPal.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setPayPalEmailAddress($value)
    {
        return $this->set('PayPalEmailAddress', $value);
    }

    /**
     * Set the value for the PaymentMethods input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the item. This can be a comma-separated list (e.g., VisaMC,PayPal).
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setPaymentMethods($value)
    {
        return $this->set('PaymentMethods', $value);
    }

    /**
     * Set the value for the PictureURL input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The URL for a picture associated with an item.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setPictureURL($value)
    {
        return $this->set('PictureURL', $value);
    }

    /**
     * Set the value for the PostalCode input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The Postal code of the place where the item is located.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the Quantity input for this AddBasicListing Choreo.
     *
     * @param int $value (conditional, integer) Indicates the quantity of items available for purchase in the listing. Required for all auction listings and for non-variation, fixed-price listings. For auction listings, this value is always '1'.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setQuantity($value)
    {
        return $this->set('Quantity', $value);
    }

    /**
     * Set the value for the RefundOption input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) Indicates how the seller will compensate the buyer for a returned item (e.g. MoneyBack).
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setRefundOption($value)
    {
        return $this->set('RefundOption', $value);
    }

    /**
     * Set the value for the ReservePrice input for this AddBasicListing Choreo.
     *
     * @param float $value (optional, decimal) The lowest price at which the seller is willing to sell the item.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setReservePrice($value)
    {
        return $this->set('ReservePrice', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ReturnPolicyDescription input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The text description of return policy details.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setReturnPolicyDescription($value)
    {
        return $this->set('ReturnPolicyDescription', $value);
    }

    /**
     * Set the value for the ReturnsAcceptedOption input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) Indicates whether the seller allows the buyer to return the item (e.g., ReturnsAccepted).
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setReturnsAcceptedOption($value)
    {
        return $this->set('ReturnsAcceptedOption', $value);
    }

    /**
     * Set the value for the ReturnsWithinOption input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The period of time the buyer has to return the item (e.g., Days_14). To accepted values for this field, call GeteBayDetails with DetailName set to ReturnPolicyDetails.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setReturnsWithinOption($value)
    {
        return $this->set('ReturnsWithinOption', $value);
    }

    /**
     * Set the value for the SandboxMode input for this AddBasicListing Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the ShippingServiceAdditionalCost input for this AddBasicListing Choreo.
     *
     * @param float $value (optional, decimal) Shipping costs in addition to the value specified for the ShippingServiceCost parameter.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setShippingServiceAdditionalCost($value)
    {
        return $this->set('ShippingServiceAdditionalCost', $value);
    }

    /**
     * Set the value for the ShippingServiceCost input for this AddBasicListing Choreo.
     *
     * @param float $value (conditional, decimal) The cost for shipping the item.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setShippingServiceCost($value)
    {
        return $this->set('ShippingServiceCost', $value);
    }

    /**
     * Set the value for the ShippingService input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The name of the shipping service offered (e.g. UPSGround, USPSMedia).
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setShippingService($value)
    {
        return $this->set('ShippingService', $value);
    }

    /**
     * Set the value for the ShippingType input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The shipping cost model offered by the seller. Valid values are: Calculated, CalculatedDomesticFlatInternational, Flat, FlatDomesticCalculatedInternational, FreightFlat, NotSpecified.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setShippingType($value)
    {
        return $this->set('ShippingType', $value);
    }

    /**
     * Set the value for the SiteID input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the Site input for this AddBasicListing Choreo.
     *
     * @param string $value (optional, string) The name of the site on which the item is listed. This should corresponse to the SiteID. Default value is "US".
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setSite($value)
    {
        return $this->set('Site', $value);
    }

    /**
     * Set the value for the StartPrice input for this AddBasicListing Choreo.
     *
     * @param float $value (conditional, decimal) This value indicates the starting price of the item when it is listed for the first time.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setStartPrice($value)
    {
        return $this->set('StartPrice', $value);
    }

    /**
     * Set the value for the Title input for this AddBasicListing Choreo.
     *
     * @param string $value (conditional, string) The title of the item as it appears in the listing or search results.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the UserToken input for this AddBasicListing Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_AddBasicListing_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the AddBasicListing Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddBasicListing_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddBasicListing Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddBasicListing execution.
     * @param eBay_Trading_AddBasicListing $choreo The choreography object for this execution.
     * @param eBay_Trading_AddBasicListing_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddBasicListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddBasicListing_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_AddBasicListing $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddBasicListing execution.
     *
     * @return eBay_Trading_AddBasicListing_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddBasicListing execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_AddBasicListing_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_AddBasicListing_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddBasicListing Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddBasicListing_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddBasicListing Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_AddBasicListing_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddBasicListing execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Defines a single new item and lists it on a specified eBay site.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddItem extends Temboo_Choreography
{
    /**
     * Defines a single new item and lists it on a specified eBay site.
     *
     * @param Temboo_Session $session The session that owns this AddItem Choreo.
     * @return eBay_Trading_AddItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/AddItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddItem Choreo.
     *
     * @param eBay_Trading_AddItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_AddItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_AddItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AddItemRequest input for this AddItem Choreo.
     *
     * @param string $value (required, xml) The complete XML request body containing item properties you wish to set.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setAddItemRequest($value)
    {
        return $this->set('AddItemRequest', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddItem Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this AddItem Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this AddItem Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this AddItem Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_AddItem_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddItem execution.
     * @param eBay_Trading_AddItem $choreo The choreography object for this execution.
     * @param eBay_Trading_AddItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_AddItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddItem execution.
     *
     * @return eBay_Trading_AddItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_AddItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_AddItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_AddItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddItem execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageAAQToPartner extends Temboo_Choreography
{
    /**
     * Allows a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
     *
     * @param Temboo_Session $session The session that owns this AddMemberMessageAAQToPartner Choreo.
     * @return eBay_Trading_AddMemberMessageAAQToPartner New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/AddMemberMessageAAQToPartner/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param eBay_Trading_AddMemberMessageAAQToPartner_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddMemberMessageAAQToPartner_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_AddMemberMessageAAQToPartner_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_AddMemberMessageAAQToPartner_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddMemberMessageAAQToPartner Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageAAQToPartner_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddMemberMessageAAQToPartner Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddMemberMessageAAQToPartner input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) The message body.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the EmailCopyToSender input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to indicate that a copy should be sent to the sender.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setEmailCopyToSender($value)
    {
        return $this->set('EmailCopyToSender', $value);
    }

    /**
     * Set the value for the ItemID input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) The unique ID of the item about which the question was asked.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the QuestionType input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) The type of question. Valid values are: General, Shipping, Payment, MultipleItemShipping, CustomizedSubject, or None.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setQuestionType($value)
    {
        return $this->set('QuestionType', $value);
    }

    /**
     * Set the value for the RecipientID input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) The user ID of the message recipient.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setRecipientID($value)
    {
        return $this->set('RecipientID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the Subject input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) The message subject.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the UserToken input for this AddMemberMessageAAQToPartner Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the AddMemberMessageAAQToPartner Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageAAQToPartner_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddMemberMessageAAQToPartner Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddMemberMessageAAQToPartner execution.
     * @param eBay_Trading_AddMemberMessageAAQToPartner $choreo The choreography object for this execution.
     * @param eBay_Trading_AddMemberMessageAAQToPartner_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddMemberMessageAAQToPartner_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_AddMemberMessageAAQToPartner $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddMemberMessageAAQToPartner execution.
     *
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddMemberMessageAAQToPartner execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_AddMemberMessageAAQToPartner_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddMemberMessageAAQToPartner Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageAAQToPartner_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddMemberMessageAAQToPartner Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_AddMemberMessageAAQToPartner_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddMemberMessageAAQToPartner execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a seller to reply to a question about an active item listing.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageRTQ extends Temboo_Choreography
{
    /**
     * Allows a seller to reply to a question about an active item listing.
     *
     * @param Temboo_Session $session The session that owns this AddMemberMessageRTQ Choreo.
     * @return eBay_Trading_AddMemberMessageRTQ New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/AddMemberMessageRTQ/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddMemberMessageRTQ Choreo.
     *
     * @param eBay_Trading_AddMemberMessageRTQ_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddMemberMessageRTQ_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddMemberMessageRTQ_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_AddMemberMessageRTQ_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddMemberMessageRTQ Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_AddMemberMessageRTQ_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddMemberMessageRTQ Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageRTQ_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddMemberMessageRTQ Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddMemberMessageRTQ input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (required, string) The message body which should answer the question that an eBay user ask the seller. HTML is not allowed.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the DisplayToPublic input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (optional, string) When set to true, this indicates that the member message is viewable in the item listing.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setDisplayToPublic($value)
    {
        return $this->set('DisplayToPublic', $value);
    }

    /**
     * Set the value for the EmailCopyToSender input for this AddMemberMessageRTQ Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to indicate that a copy should be sent to the sender.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setEmailCopyToSender($value)
    {
        return $this->set('EmailCopyToSender', $value);
    }

    /**
     * Set the value for the ItemID input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (optional, string) The unique ID of the item about which the question was asked.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ParentMessageID input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (required, string) The ID number of the question to which this message is responding.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setParentMessageID($value)
    {
        return $this->set('ParentMessageID', $value);
    }

    /**
     * Set the value for the RecipientID input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (required, string) The recipient's eBay user ID.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setRecipientID($value)
    {
        return $this->set('RecipientID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this AddMemberMessageRTQ Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this AddMemberMessageRTQ Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_AddMemberMessageRTQ_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the AddMemberMessageRTQ Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageRTQ_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddMemberMessageRTQ Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddMemberMessageRTQ execution.
     * @param eBay_Trading_AddMemberMessageRTQ $choreo The choreography object for this execution.
     * @param eBay_Trading_AddMemberMessageRTQ_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddMemberMessageRTQ_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddMemberMessageRTQ_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_AddMemberMessageRTQ $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddMemberMessageRTQ execution.
     *
     * @return eBay_Trading_AddMemberMessageRTQ_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddMemberMessageRTQ execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_AddMemberMessageRTQ_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_AddMemberMessageRTQ_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddMemberMessageRTQ Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddMemberMessageRTQ_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddMemberMessageRTQ Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_AddMemberMessageRTQ_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddMemberMessageRTQ execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds one or more items to the user's My eBay watch list.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddToWatchList extends Temboo_Choreography
{
    /**
     * Adds one or more items to the user's My eBay watch list.
     *
     * @param Temboo_Session $session The session that owns this AddToWatchList Choreo.
     * @return eBay_Trading_AddToWatchList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/AddToWatchList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddToWatchList Choreo.
     *
     * @param eBay_Trading_AddToWatchList_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddToWatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddToWatchList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_AddToWatchList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddToWatchList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddToWatchList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_AddToWatchList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddToWatchList Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddToWatchList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddToWatchList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_AddToWatchList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddToWatchList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this AddToWatchList Choreo.
     *
     * @param string $value (required, string) The ID of an item to add to a user's watch list. This can be a comma-separated list of item IDs.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddToWatchList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this AddToWatchList Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this AddToWatchList Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this AddToWatchList Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_AddToWatchList_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the AddToWatchList Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddToWatchList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddToWatchList Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddToWatchList execution.
     * @param eBay_Trading_AddToWatchList $choreo The choreography object for this execution.
     * @param eBay_Trading_AddToWatchList_Inputs|array $inputs (optional) Inputs as eBay_Trading_AddToWatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_AddToWatchList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_AddToWatchList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddToWatchList execution.
     *
     * @return eBay_Trading_AddToWatchList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddToWatchList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_AddToWatchList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_AddToWatchList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddToWatchList Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_AddToWatchList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddToWatchList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_AddToWatchList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddToWatchList execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows the seller to perform the final steps for completing an order.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_CompleteSale extends Temboo_Choreography
{
    /**
     * Allows the seller to perform the final steps for completing an order.
     *
     * @param Temboo_Session $session The session that owns this CompleteSale Choreo.
     * @return eBay_Trading_CompleteSale New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/CompleteSale/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompleteSale Choreo.
     *
     * @param eBay_Trading_CompleteSale_Inputs|array $inputs (optional) Inputs as eBay_Trading_CompleteSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_CompleteSale_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_CompleteSale_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompleteSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_CompleteSale_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_CompleteSale_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompleteSale Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_CompleteSale_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompleteSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_CompleteSale_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompleteSale input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CompleteSaleRequest input for this CompleteSale Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setCompleteSaleRequest($value)
    {
        return $this->set('CompleteSaleRequest', $value);
    }

    /**
     * Set the value for the CommentText input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The comment text to leave Feedback about the buyer.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setCommentText($value)
    {
        return $this->set('CommentText', $value);
    }

    /**
     * Set the value for the CommentType input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The type of comment. Valid values are: Positive.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setCommentType($value)
    {
        return $this->set('CommentType', $value);
    }

    /**
     * Set the value for the ItemID input for this CompleteSale Choreo.
     *
     * @param string $value (conditional, string) The unique identifier for an eBay item listing that was sold. Either ItemID or TransactionID should be provided.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Notes input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) A text field for shipping related notes.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the OrderID input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) A unique identifier that identifies a single line item or multiple line item order.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setOrderID($value)
    {
        return $this->set('OrderID', $value);
    }

    /**
     * Set the value for the OrderLineItemID input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) This is a unique identifier for an eBay order line item and is based upon the concatenation of ItemID and TransactionID, with a hyphen in between these two IDs.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setOrderLineItemID($value)
    {
        return $this->set('OrderLineItemID', $value);
    }

    /**
     * Set the value for the Paid input for this CompleteSale Choreo.
     *
     * @param bool $value (conditional, boolean) Set to true to indicate that the item has been paid for. One of Feedback info, Shipped status or Paid status is required.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setPaid($value)
    {
        return $this->set('Paid', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this CompleteSale Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the ShipmentTrackingNumber input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The tracking number for the package.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setShipmentTrackingNumber($value)
    {
        return $this->set('ShipmentTrackingNumber', $value);
    }

    /**
     * Set the value for the ShippedTime input for this CompleteSale Choreo.
     *
     * @param string $value (optional, date) The date and time that the item was shipped.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setShippedTime($value)
    {
        return $this->set('ShippedTime', $value);
    }

    /**
     * Set the value for the Shipped input for this CompleteSale Choreo.
     *
     * @param bool $value (conditional, boolean) Set to true to indicate that the item has been shipped. One of Feedback info, Shipped status or Paid status is required.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setShipped($value)
    {
        return $this->set('Shipped', $value);
    }

    /**
     * Set the value for the ShippingCarrierUsed input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The carrier used to ship the item.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setShippingCarrierUsed($value)
    {
        return $this->set('ShippingCarrierUsed', $value);
    }

    /**
     * Set the value for the SiteID input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the TargetUser input for this CompleteSale Choreo.
     *
     * @param string $value (optional, string) The user ID of the buyer who you want to leave feedback for.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setTargetUser($value)
    {
        return $this->set('TargetUser', $value);
    }

    /**
     * Set the value for the TransactionID input for this CompleteSale Choreo.
     *
     * @param string $value (conditional, string) The unique identifier for an eBay order line item (transaction). Either ItemID or TransactionID should be provided.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UserToken input for this CompleteSale Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_CompleteSale_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the CompleteSale Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_CompleteSale_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompleteSale Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompleteSale execution.
     * @param eBay_Trading_CompleteSale $choreo The choreography object for this execution.
     * @param eBay_Trading_CompleteSale_Inputs|array $inputs (optional) Inputs as eBay_Trading_CompleteSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_CompleteSale_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_CompleteSale $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompleteSale execution.
     *
     * @return eBay_Trading_CompleteSale_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CompleteSale execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_CompleteSale_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_CompleteSale_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompleteSale Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_CompleteSale_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompleteSale Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_CompleteSale_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompleteSale execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Ends the specified item listing before the date and time that it is scheduled to end per the listing duration.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_EndItem extends Temboo_Choreography
{
    /**
     * Ends the specified item listing before the date and time that it is scheduled to end per the listing duration.
     *
     * @param Temboo_Session $session The session that owns this EndItem Choreo.
     * @return eBay_Trading_EndItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/EndItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EndItem Choreo.
     *
     * @param eBay_Trading_EndItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_EndItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_EndItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_EndItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EndItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_EndItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_EndItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EndItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_EndItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EndItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_EndItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EndItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EndingReason input for this EndItem Choreo.
     *
     * @param string $value (required, string) The reason the listing is ending early. Valid values are: LostOrBroken, NotAvailable, Incorrect, OtherListingError, CustomCode, SellToHighBidder, or Sold.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setEndingReason($value)
    {
        return $this->set('EndingReason', $value);
    }

    /**
     * Set the value for the ItemID input for this EndItem Choreo.
     *
     * @param string $value (required, string) The ID of the item to end.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EndItem Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this EndItem Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SellerInventoryID input for this EndItem Choreo.
     *
     * @param string $value (optional, string) Unique identifier that the seller specified when they listed the Half.com item. This paramater only applies to Half.com.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setSellerInventoryID($value)
    {
        return $this->set('SellerInventoryID', $value);
    }

    /**
     * Set the value for the SiteID input for this EndItem Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this EndItem Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_EndItem_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the EndItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_EndItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EndItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this EndItem execution.
     * @param eBay_Trading_EndItem $choreo The choreography object for this execution.
     * @param eBay_Trading_EndItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_EndItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_EndItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_EndItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EndItem execution.
     *
     * @return eBay_Trading_EndItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this EndItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_EndItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_EndItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EndItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_EndItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EndItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_EndItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EndItem execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the authentication process by retrieving an eBay user token after they have visited the authorization URL returned by the GetSessionID Choreo and clicked "I agree".
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_FetchToken extends Temboo_Choreography
{
    /**
     * Completes the authentication process by retrieving an eBay user token after they have visited the authorization URL returned by the GetSessionID Choreo and clicked "I agree".
     *
     * @param Temboo_Session $session The session that owns this FetchToken Choreo.
     * @return eBay_Trading_FetchToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/FetchToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FetchToken Choreo.
     *
     * @param eBay_Trading_FetchToken_Inputs|array $inputs (optional) Inputs as eBay_Trading_FetchToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_FetchToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_FetchToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FetchToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_FetchToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_FetchToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FetchToken Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_FetchToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FetchToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_FetchToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FetchToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this FetchToken Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CertID input for this FetchToken Choreo.
     *
     * @param string $value (required, string) The certificate that authenticates the application when making API calls.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setCertID($value)
    {
        return $this->set('CertID', $value);
    }

    /**
     * Set the value for the DevID input for this FetchToken Choreo.
     *
     * @param string $value (required, string) The unique identifier for the developer's account.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setDevID($value)
    {
        return $this->set('DevID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FetchToken Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FetchToken Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SessionID input for this FetchToken Choreo.
     *
     * @param string $value (required, string) The SessionID returned from PayPal. This gets passed to the FetchToken Choreo after the user authorizes the request.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }

    /**
     * Set the value for the SiteID input for this FetchToken Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the Timeout input for this FetchToken Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll eBay to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return eBay_Trading_FetchToken_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FetchToken Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_FetchToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FetchToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this FetchToken execution.
     * @param eBay_Trading_FetchToken $choreo The choreography object for this execution.
     * @param eBay_Trading_FetchToken_Inputs|array $inputs (optional) Inputs as eBay_Trading_FetchToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_FetchToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_FetchToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FetchToken execution.
     *
     * @return eBay_Trading_FetchToken_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FetchToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_FetchToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_FetchToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FetchToken Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_FetchToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FetchToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_FetchToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FetchToken execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "UserToken" output from this FetchToken execution.
     *
     * @return string (string) An eBay Auth Token which can be used to make requests the user's behalf.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserToken()
    {
        return $this->get('UserToken');
    }
}

/**
 * Retrieves items whose listings are completed and are no longer available for sale on eBay.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindCompletedItems extends Temboo_Choreography
{
    /**
     * Retrieves items whose listings are completed and are no longer available for sale on eBay.
     *
     * @param Temboo_Session $session The session that owns this FindCompletedItems Choreo.
     * @return eBay_Finding_FindCompletedItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Finding/FindCompletedItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindCompletedItems Choreo.
     *
     * @param eBay_Finding_FindCompletedItems_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindCompletedItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindCompletedItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Finding_FindCompletedItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindCompletedItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindCompletedItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Finding_FindCompletedItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindCompletedItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindCompletedItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindCompletedItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindCompletedItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindCompletedItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FindCompletedItemsRequest input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setFindCompletedItemsRequest($value)
    {
        return $this->set('FindCompletedItemsRequest', $value);
    }

    /**
     * Set the value for the AppID input for this FindCompletedItems Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AspectFilters input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as aspect filters for the request.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setAspectFilters($value)
    {
        return $this->set('AspectFilters', $value);
    }

    /**
     * Set the value for the CategoryID input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, string) Filters the results by category ID.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this FindCompletedItems Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the GlobalID input for this FindCompletedItems Choreo.
     *
     * @param int $value (optional, integer) The global ID of the eBay site to access (e.g., EBAY-US).
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setGlobalID($value)
    {
        return $this->set('GlobalID', $value);
    }

    /**
     * Set the value for the ItemFilters input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as item filters for the request.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setItemFilters($value)
    {
        return $this->set('ItemFilters', $value);
    }

    /**
     * Set the value for the Keywords input for this FindCompletedItems Choreo.
     *
     * @param string $value (conditional, string) Filters the results by one or more keywords.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setKeywords($value)
    {
        return $this->set('Keywords', $value);
    }

    /**
     * Set the value for the OutputSelector input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, string) Controls the fields that are returned in the response (e.g., GalleryInfo).
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setOutputSelector($value)
    {
        return $this->set('OutputSelector', $value);
    }

    /**
     * Set the value for the PageNumber input for this FindCompletedItems Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindCompletedItems Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SortOrder input for this FindCompletedItems Choreo.
     *
     * @param string $value (optional, string) Valid values: BestMatch, BidCountMost, CountryAscending, CountryDescending, DistanceNearest, CurrentPriceHighest, EndTimeSoonest, PricePlusShippingHighest, PricePlusShippingLowest, StartTimeNewest.
     * @return eBay_Finding_FindCompletedItems_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the FindCompletedItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindCompletedItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindCompletedItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindCompletedItems execution.
     * @param eBay_Finding_FindCompletedItems $choreo The choreography object for this execution.
     * @param eBay_Finding_FindCompletedItems_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindCompletedItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindCompletedItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Finding_FindCompletedItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindCompletedItems execution.
     *
     * @return eBay_Finding_FindCompletedItems_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindCompletedItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Finding_FindCompletedItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Finding_FindCompletedItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindCompletedItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindCompletedItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindCompletedItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Finding_FindCompletedItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindCompletedItems execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Finds items by a keyword query and/or category and allows searching within item descriptions.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsAdvanced extends Temboo_Choreography
{
    /**
     * Finds items by a keyword query and/or category and allows searching within item descriptions.
     *
     * @param Temboo_Session $session The session that owns this FindItemsAdvanced Choreo.
     * @return eBay_Finding_FindItemsAdvanced New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Finding/FindItemsAdvanced/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindItemsAdvanced Choreo.
     *
     * @param eBay_Finding_FindItemsAdvanced_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsAdvanced_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsAdvanced_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Finding_FindItemsAdvanced_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindItemsAdvanced Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsAdvanced_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Finding_FindItemsAdvanced_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindItemsAdvanced Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsAdvanced_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindItemsAdvanced Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsAdvanced_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindItemsAdvanced input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FindItemsAdvancedRequest input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setFindItemsAdvancedRequest($value)
    {
        return $this->set('FindItemsAdvancedRequest', $value);
    }

    /**
     * Set the value for the AppID input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AspectFilters input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as aspect filters for the request.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setAspectFilters($value)
    {
        return $this->set('AspectFilters', $value);
    }

    /**
     * Set the value for the CategoryID input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, string) Filters the results by category ID.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this FindItemsAdvanced Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the GlobalID input for this FindItemsAdvanced Choreo.
     *
     * @param int $value (optional, integer) The global ID of the eBay site to access (e.g., EBAY-US).
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setGlobalID($value)
    {
        return $this->set('GlobalID', $value);
    }

    /**
     * Set the value for the ItemFilters input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as item filters for the request.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setItemFilters($value)
    {
        return $this->set('ItemFilters', $value);
    }

    /**
     * Set the value for the Keywords input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (conditional, string) Filters the results by one or more keywords.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setKeywords($value)
    {
        return $this->set('Keywords', $value);
    }

    /**
     * Set the value for the OutputSelector input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, string) Controls the fields that are returned in the response (e.g., GalleryInfo).
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setOutputSelector($value)
    {
        return $this->set('OutputSelector', $value);
    }

    /**
     * Set the value for the PageNumber input for this FindItemsAdvanced Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindItemsAdvanced Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SortOrder input for this FindItemsAdvanced Choreo.
     *
     * @param string $value (optional, string) Valid values: BestMatch, BidCountMost, CountryAscending, CountryDescending, DistanceNearest, CurrentPriceHighest, EndTimeSoonest, PricePlusShippingHighest, PricePlusShippingLowest, StartTimeNewest.
     * @return eBay_Finding_FindItemsAdvanced_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the FindItemsAdvanced Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsAdvanced_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindItemsAdvanced Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindItemsAdvanced execution.
     * @param eBay_Finding_FindItemsAdvanced $choreo The choreography object for this execution.
     * @param eBay_Finding_FindItemsAdvanced_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsAdvanced_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsAdvanced_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Finding_FindItemsAdvanced $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindItemsAdvanced execution.
     *
     * @return eBay_Finding_FindItemsAdvanced_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindItemsAdvanced execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Finding_FindItemsAdvanced_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Finding_FindItemsAdvanced_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindItemsAdvanced Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsAdvanced_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindItemsAdvanced Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Finding_FindItemsAdvanced_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindItemsAdvanced execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Finds items based on their image similarity to the specified item.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByImage extends Temboo_Choreography
{
    /**
     * Finds items based on their image similarity to the specified item.
     *
     * @param Temboo_Session $session The session that owns this FindItemsByImage Choreo.
     * @return eBay_Finding_FindItemsByImage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Finding/FindItemsByImage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindItemsByImage Choreo.
     *
     * @param eBay_Finding_FindItemsByImage_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsByImage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsByImage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Finding_FindItemsByImage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindItemsByImage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsByImage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Finding_FindItemsByImage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindItemsByImage Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByImage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindItemsByImage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsByImage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindItemsByImage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FindItemsByImageRequest input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setFindItemsByImageRequest($value)
    {
        return $this->set('FindItemsByImageRequest', $value);
    }

    /**
     * Set the value for the AppID input for this FindItemsByImage Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AspectFilters input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as aspect filters for the request.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setAspectFilters($value)
    {
        return $this->set('AspectFilters', $value);
    }

    /**
     * Set the value for the CategoryID input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, string) Filters the results by category ID.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this FindItemsByImage Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the GlobalID input for this FindItemsByImage Choreo.
     *
     * @param int $value (optional, integer) The global ID of the eBay site to access (e.g., EBAY-US).
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setGlobalID($value)
    {
        return $this->set('GlobalID', $value);
    }

    /**
     * Set the value for the ItemFilters input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as item filters for the request.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setItemFilters($value)
    {
        return $this->set('ItemFilters', $value);
    }

    /**
     * Set the value for the ItemID input for this FindItemsByImage Choreo.
     *
     * @param string $value (required, string) The ID of an item associated with the image you want to use for matching. The item must be active and listed in a Clothing, Shoes & Accessories category (parent category ID 11450 on the eBay US site).
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the OutputSelector input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, string) Controls the fields that are returned in the response (e.g., GalleryInfo).
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setOutputSelector($value)
    {
        return $this->set('OutputSelector', $value);
    }

    /**
     * Set the value for the PageNumber input for this FindItemsByImage Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindItemsByImage Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SortOrder input for this FindItemsByImage Choreo.
     *
     * @param string $value (optional, string) Valid values: BestMatch, BidCountMost, CountryAscending, CountryDescending, DistanceNearest, CurrentPriceHighest, EndTimeSoonest, PricePlusShippingHighest, PricePlusShippingLowest, StartTimeNewest.
     * @return eBay_Finding_FindItemsByImage_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the FindItemsByImage Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByImage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindItemsByImage Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindItemsByImage execution.
     * @param eBay_Finding_FindItemsByImage $choreo The choreography object for this execution.
     * @param eBay_Finding_FindItemsByImage_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsByImage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsByImage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Finding_FindItemsByImage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindItemsByImage execution.
     *
     * @return eBay_Finding_FindItemsByImage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindItemsByImage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Finding_FindItemsByImage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Finding_FindItemsByImage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindItemsByImage Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByImage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindItemsByImage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Finding_FindItemsByImage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindItemsByImage execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Finds items based upon a product ID, such as an ISBN, UPC, EAN, or ePID.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByProduct extends Temboo_Choreography
{
    /**
     * Finds items based upon a product ID, such as an ISBN, UPC, EAN, or ePID.
     *
     * @param Temboo_Session $session The session that owns this FindItemsByProduct Choreo.
     * @return eBay_Finding_FindItemsByProduct New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Finding/FindItemsByProduct/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindItemsByProduct Choreo.
     *
     * @param eBay_Finding_FindItemsByProduct_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsByProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsByProduct_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Finding_FindItemsByProduct_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindItemsByProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsByProduct_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Finding_FindItemsByProduct_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindItemsByProduct Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByProduct_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindItemsByProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_FindItemsByProduct_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindItemsByProduct input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FindItemsByProductRequest input for this FindItemsByProduct Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setFindItemsByProductRequest($value)
    {
        return $this->set('FindItemsByProductRequest', $value);
    }

    /**
     * Set the value for the AppID input for this FindItemsByProduct Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this FindItemsByProduct Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the GlobalID input for this FindItemsByProduct Choreo.
     *
     * @param int $value (optional, integer) The global ID of the eBay site to access (e.g., EBAY-US).
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setGlobalID($value)
    {
        return $this->set('GlobalID', $value);
    }

    /**
     * Set the value for the ItemFilters input for this FindItemsByProduct Choreo.
     *
     * @param string $value (optional, json) A dictionary of key/value pairs to use as item filters for the request.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setItemFilters($value)
    {
        return $this->set('ItemFilters', $value);
    }

    /**
     * Set the value for the OutputSelector input for this FindItemsByProduct Choreo.
     *
     * @param string $value (optional, string) Controls the fields that are returned in the response (e.g., GalleryInfo).
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setOutputSelector($value)
    {
        return $this->set('OutputSelector', $value);
    }

    /**
     * Set the value for the PageNumber input for this FindItemsByProduct Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ProductIDType input for this FindItemsByProduct Choreo.
     *
     * @param string $value (required, string) The type of identifier being used to find a product. Valid values are: ReferenceID, ISBN, UPC, and EAN.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setProductIDType($value)
    {
        return $this->set('ProductIDType', $value);
    }

    /**
     * Set the value for the ProductID input for this FindItemsByProduct Choreo.
     *
     * @param string $value (required, string) The ID of a product to find.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindItemsByProduct Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindItemsByProduct Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SortOrder input for this FindItemsByProduct Choreo.
     *
     * @param string $value (optional, string) Valid values: BestMatch, BidCountMost, CountryAscending, CountryDescending, DistanceNearest, CurrentPriceHighest, EndTimeSoonest, PricePlusShippingHighest, PricePlusShippingLowest, StartTimeNewest.
     * @return eBay_Finding_FindItemsByProduct_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the FindItemsByProduct Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByProduct_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindItemsByProduct Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindItemsByProduct execution.
     * @param eBay_Finding_FindItemsByProduct $choreo The choreography object for this execution.
     * @param eBay_Finding_FindItemsByProduct_Inputs|array $inputs (optional) Inputs as eBay_Finding_FindItemsByProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_FindItemsByProduct_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Finding_FindItemsByProduct $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindItemsByProduct execution.
     *
     * @return eBay_Finding_FindItemsByProduct_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindItemsByProduct execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Finding_FindItemsByProduct_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Finding_FindItemsByProduct_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindItemsByProduct Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_FindItemsByProduct_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindItemsByProduct Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Finding_FindItemsByProduct_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindItemsByProduct execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for popular items based on a category or keyword.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindPopularItems extends Temboo_Choreography
{
    /**
     * Searches for popular items based on a category or keyword.
     *
     * @param Temboo_Session $session The session that owns this FindPopularItems Choreo.
     * @return eBay_Shopping_FindPopularItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/FindPopularItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindPopularItems Choreo.
     *
     * @param eBay_Shopping_FindPopularItems_Inputs|array $inputs (optional) Inputs as eBay_Shopping_FindPopularItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_FindPopularItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_FindPopularItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindPopularItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_FindPopularItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_FindPopularItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindPopularItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindPopularItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindPopularItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_FindPopularItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindPopularItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this FindPopularItems Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CategoryIDExclude input for this FindPopularItems Choreo.
     *
     * @param int $value (conditional, integer) The ID of a category to exclude from the result set. Multiple category IDs can be separated by commas.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setCategoryIDExclude($value)
    {
        return $this->set('CategoryIDExclude', $value);
    }

    /**
     * Set the value for the CategoryID input for this FindPopularItems Choreo.
     *
     * @param string $value (optional, string) The ID of a category to filter by. Multiple category IDs can be separated by commas.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the MaxEntries input for this FindPopularItems Choreo.
     *
     * @param int $value (conditional, integer) The maxiumum number of entries to return in the response.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setMaxEntries($value)
    {
        return $this->set('MaxEntries', $value);
    }

    /**
     * Set the value for the QueryKeywords input for this FindPopularItems Choreo.
     *
     * @param string $value (conditional, string) The text for a keyword search.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setQueryKeywords($value)
    {
        return $this->set('QueryKeywords', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindPopularItems Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindPopularItems Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this FindPopularItems Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_FindPopularItems_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the FindPopularItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindPopularItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindPopularItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindPopularItems execution.
     * @param eBay_Shopping_FindPopularItems $choreo The choreography object for this execution.
     * @param eBay_Shopping_FindPopularItems_Inputs|array $inputs (optional) Inputs as eBay_Shopping_FindPopularItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_FindPopularItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_FindPopularItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindPopularItems execution.
     *
     * @return eBay_Shopping_FindPopularItems_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindPopularItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_FindPopularItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_FindPopularItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindPopularItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindPopularItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindPopularItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_FindPopularItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindPopularItems execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the listings for products that match the specified keywords.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindProducts extends Temboo_Choreography
{
    /**
     * Retrieves the listings for products that match the specified keywords.
     *
     * @param Temboo_Session $session The session that owns this FindProducts Choreo.
     * @return eBay_Shopping_FindProducts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/FindProducts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindProducts Choreo.
     *
     * @param eBay_Shopping_FindProducts_Inputs|array $inputs (optional) Inputs as eBay_Shopping_FindProducts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_FindProducts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_FindProducts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindProducts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_FindProducts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_FindProducts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindProducts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindProducts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindProducts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_FindProducts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindProducts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this FindProducts Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AvailableItemsOnly input for this FindProducts Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, only retrieve data for products that have been used to pre-fill active listings. If false, retrieve all products that match the query. Defaults to false.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setAvailableItemsOnly($value)
    {
        return $this->set('AvailableItemsOnly', $value);
    }

    /**
     * Set the value for the CategoryID input for this FindProducts Choreo.
     *
     * @param string $value (conditional, string) Restricts your query to a specific category. The request requires one of the following filter parameters: QueryKeywords, ProductID, or CategoryID. Only one of the filters should be provided.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the DomainName input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) A domain to search in (e.g. Textbooks).
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setDomainName($value)
    {
        return $this->set('DomainName', $value);
    }

    /**
     * Set the value for the HideDuplicateItems input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) Specifies whether or not to remove duplicate items from search results.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setHideDuplicateItems($value)
    {
        return $this->set('HideDuplicateItems', $value);
    }

    /**
     * Set the value for the IncludeSelector input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) Defines standard subsets of fields to return within the response. Valid values are: Details, DomainHistogram, and Items.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setIncludeSelector($value)
    {
        return $this->set('IncludeSelector', $value);
    }

    /**
     * Set the value for the MaxEntries input for this FindProducts Choreo.
     *
     * @param int $value (optional, integer) The maximum number of entries to return in the response.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setMaxEntries($value)
    {
        return $this->set('MaxEntries', $value);
    }

    /**
     * Set the value for the PageNumber input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) The page number to retrieve.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ProductID input for this FindProducts Choreo.
     *
     * @param string $value (conditional, string) Used to retrieve product details. The request requires one of the following filter parameters: QueryKeywords, ProductID, or CategoryID. Only one of the filters should be provided.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the ProductSort input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) Sorts the list of products returned. Valid values are: ItemCount, Popularity, Rating, ReviewCount, and Title.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setProductSort($value)
    {
        return $this->set('ProductSort', $value);
    }

    /**
     * Set the value for the QueryKeywords input for this FindProducts Choreo.
     *
     * @param string $value (conditional, string) The query keywords to use for the product search. The request requires one of the following filter parameters: QueryKeywords, ProductID, or CategoryID. Only one of the filters should be provided.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setQueryKeywords($value)
    {
        return $this->set('QueryKeywords', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this FindProducts Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SortOrder input for this FindProducts Choreo.
     *
     * @param string $value (optional, string) Sorts search results in ascending or descending order. Valid values are: Ascending and Descending.
     * @return eBay_Shopping_FindProducts_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the FindProducts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindProducts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindProducts Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindProducts execution.
     * @param eBay_Shopping_FindProducts $choreo The choreography object for this execution.
     * @param eBay_Shopping_FindProducts_Inputs|array $inputs (optional) Inputs as eBay_Shopping_FindProducts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_FindProducts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_FindProducts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindProducts execution.
     *
     * @return eBay_Shopping_FindProducts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FindProducts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_FindProducts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_FindProducts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindProducts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_FindProducts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindProducts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_FindProducts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindProducts execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the latest category hierarchy for the eBay site.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategories extends Temboo_Choreography
{
    /**
     * Returns the latest category hierarchy for the eBay site.
     *
     * @param Temboo_Session $session The session that owns this GetCategories Choreo.
     * @return eBay_Trading_GetCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetCategories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCategories Choreo.
     *
     * @param eBay_Trading_GetCategories_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCategories Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CategoryParent input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) Indicates the ID of the highest-level category to return. Multiple CategoryParent IDs can be specified in a comma-separated list.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setCategoryParent($value)
    {
        return $this->set('CategoryParent', $value);
    }

    /**
     * Set the value for the CategorySiteID input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) The ID for the site for which to retrieve the category hierarchy. Use the numeric site code (e.g., 0 for US, 77 for eBay Germany, etc).
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setCategorySiteID($value)
    {
        return $this->set('CategorySiteID', $value);
    }

    /**
     * Set the value for the DetailLevel input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) The level of detail to return in the response. Valid values are: ReturnAll.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the LevelLimit input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) Indicates the maximum depth of the category hierarchy to retrieve, where the top-level categories (meta-categories) are at level 1. Default is 0.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setLevelLimit($value)
    {
        return $this->set('LevelLimit', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetCategories Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetCategories Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetCategories Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }

    /**
     * Set the value for the ViewAllNodes input for this GetCategories Choreo.
     *
     * @param bool $value (optional, boolean) A flag that controls whether all eBay categories are returned, or only leaf categories are returned. To retrieve leaf categories, set this parameter to 'false'.
     * @return eBay_Trading_GetCategories_Inputs For method chaining.
     */
    public function setViewAllNodes($value)
    {
        return $this->set('ViewAllNodes', $value);
    }
}


/**
 * Execution object for the GetCategories Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCategories Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCategories execution.
     * @param eBay_Trading_GetCategories $choreo The choreography object for this execution.
     * @param eBay_Trading_GetCategories_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCategories execution.
     *
     * @return eBay_Trading_GetCategories_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetCategories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCategories Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCategories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCategories execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information that describes the feature and value settings that apply to the set of eBay categories.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategoryFeatures extends Temboo_Choreography
{
    /**
     * Returns information that describes the feature and value settings that apply to the set of eBay categories.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryFeatures Choreo.
     * @return eBay_Trading_GetCategoryFeatures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetCategoryFeatures/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCategoryFeatures Choreo.
     *
     * @param eBay_Trading_GetCategoryFeatures_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetCategoryFeatures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetCategoryFeatures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetCategoryFeatures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCategoryFeatures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetCategoryFeatures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetCategoryFeatures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCategoryFeatures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategoryFeatures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCategoryFeatures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetCategoryFeatures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCategoryFeatures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AllFeaturesForCategory input for this GetCategoryFeatures Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to view all of the feature settings for a specific category.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setAllFeaturesForCategory($value)
    {
        return $this->set('AllFeaturesForCategory', $value);
    }

    /**
     * Set the value for the CategoryID input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) The ID of the category for which you want to retrieve the feature settings.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the DetailLevel input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) The level of detail to return in the response. Valid values are: ReturnAll and ReturnSummary.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the FeatureID input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) Use this field if you want to know if specific features are enabled at the site or root category level. Multiple FeatureIDs can be specified in a comma-separated list.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setFeatureID($value)
    {
        return $this->set('FeatureID', $value);
    }

    /**
     * Set the value for the LevelLimit input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) Indicates the maximum depth of the category hierarchy to retrieve, where the top-level categories (meta-categories) are at level 1. Default is 0.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setLevelLimit($value)
    {
        return $this->set('LevelLimit', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetCategoryFeatures Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetCategoryFeatures Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }

    /**
     * Set the value for the ViewAllNodes input for this GetCategoryFeatures Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that eBay should return the site defaults along with all the categories that override the feature settings they inherit. DetailLevel must be 'ReturnAll' when setting this parameter to true.
     * @return eBay_Trading_GetCategoryFeatures_Inputs For method chaining.
     */
    public function setViewAllNodes($value)
    {
        return $this->set('ViewAllNodes', $value);
    }
}


/**
 * Execution object for the GetCategoryFeatures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategoryFeatures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCategoryFeatures Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryFeatures execution.
     * @param eBay_Trading_GetCategoryFeatures $choreo The choreography object for this execution.
     * @param eBay_Trading_GetCategoryFeatures_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetCategoryFeatures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetCategoryFeatures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetCategoryFeatures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCategoryFeatures execution.
     *
     * @return eBay_Trading_GetCategoryFeatures_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetCategoryFeatures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetCategoryFeatures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetCategoryFeatures_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCategoryFeatures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetCategoryFeatures_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCategoryFeatures Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetCategoryFeatures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCategoryFeatures execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve high-level category information for a specified category.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetCategoryInfo extends Temboo_Choreography
{
    /**
     * Retrieve high-level category information for a specified category.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryInfo Choreo.
     * @return eBay_Shopping_GetCategoryInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/GetCategoryInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCategoryInfo Choreo.
     *
     * @param eBay_Shopping_GetCategoryInfo_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetCategoryInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetCategoryInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_GetCategoryInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCategoryInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetCategoryInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_GetCategoryInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCategoryInfo Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetCategoryInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCategoryInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetCategoryInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCategoryInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetCategoryInfo Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CategoryID input for this GetCategoryInfo Choreo.
     *
     * @param string $value (required, string) The ID of a category to retrieve. Use an ID of -1 to retrieve the root category and the top-level (level 1) meta categories.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the IncludeSelector input for this GetCategoryInfo Choreo.
     *
     * @param string $value (optional, string) Defines standard subsets of fields to return within the response. Valid values are: ChildCategories.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setIncludeSelector($value)
    {
        return $this->set('IncludeSelector', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCategoryInfo Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetCategoryInfo Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetCategoryInfo Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_GetCategoryInfo_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the GetCategoryInfo Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetCategoryInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCategoryInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryInfo execution.
     * @param eBay_Shopping_GetCategoryInfo $choreo The choreography object for this execution.
     * @param eBay_Shopping_GetCategoryInfo_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetCategoryInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetCategoryInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_GetCategoryInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCategoryInfo execution.
     *
     * @return eBay_Shopping_GetCategoryInfo_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetCategoryInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_GetCategoryInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_GetCategoryInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCategoryInfo Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetCategoryInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCategoryInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_GetCategoryInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCategoryInfo execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the available meta-data for the specified eBay site.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayDetails extends Temboo_Choreography
{
    /**
     * Retrieves the available meta-data for the specified eBay site.
     *
     * @param Temboo_Session $session The session that owns this GetEbayDetails Choreo.
     * @return eBay_Trading_GetEbayDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetEbayDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEbayDetails Choreo.
     *
     * @param eBay_Trading_GetEbayDetails_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetEbayDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetEbayDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetEbayDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEbayDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetEbayDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetEbayDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEbayDetails Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEbayDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetEbayDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEbayDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DetailName input for this GetEbayDetails Choreo.
     *
     * @param string $value (optional, string) An enumeration value used to filter the result by Detail Name (e.g., PaymentOptionDetails, RegionDetail, ShippingLocationDetails, ShippingServiceDetails, SiteDetails, etc).
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setDetailName($value)
    {
        return $this->set('DetailName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEbayDetails Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetEbayDetails Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetEbayDetails Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetEbayDetails Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetEbayDetails_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetEbayDetails Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEbayDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEbayDetails execution.
     * @param eBay_Trading_GetEbayDetails $choreo The choreography object for this execution.
     * @param eBay_Trading_GetEbayDetails_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetEbayDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetEbayDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetEbayDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEbayDetails execution.
     *
     * @return eBay_Trading_GetEbayDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetEbayDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetEbayDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetEbayDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEbayDetails Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEbayDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetEbayDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEbayDetails execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the official eBay system time in GMT.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayOfficialTime extends Temboo_Choreography
{
    /**
     * Gets the official eBay system time in GMT.
     *
     * @param Temboo_Session $session The session that owns this GetEbayOfficialTime Choreo.
     * @return eBay_Trading_GetEbayOfficialTime New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetEbayOfficialTime/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEbayOfficialTime Choreo.
     *
     * @param eBay_Trading_GetEbayOfficialTime_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetEbayOfficialTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetEbayOfficialTime_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetEbayOfficialTime_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEbayOfficialTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetEbayOfficialTime_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEbayOfficialTime Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayOfficialTime_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEbayOfficialTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEbayOfficialTime input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEbayOfficialTime Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetEbayOfficialTime Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetEbayOfficialTime Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetEbayOfficialTime Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetEbayOfficialTime_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetEbayOfficialTime Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayOfficialTime_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEbayOfficialTime Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEbayOfficialTime execution.
     * @param eBay_Trading_GetEbayOfficialTime $choreo The choreography object for this execution.
     * @param eBay_Trading_GetEbayOfficialTime_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetEbayOfficialTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetEbayOfficialTime_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetEbayOfficialTime $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEbayOfficialTime execution.
     *
     * @return eBay_Trading_GetEbayOfficialTime_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetEbayOfficialTime execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetEbayOfficialTime_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetEbayOfficialTime_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEbayOfficialTime Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetEbayOfficialTime_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEbayOfficialTime Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetEbayOfficialTime_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEbayOfficialTime execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the feedback left for a specified user or the summary feedback data for a specific order line item or item listing.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetFeedback extends Temboo_Choreography
{
    /**
     * Retrieves the feedback left for a specified user or the summary feedback data for a specific order line item or item listing.
     *
     * @param Temboo_Session $session The session that owns this GetFeedback Choreo.
     * @return eBay_Trading_GetFeedback New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetFeedback/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFeedback Choreo.
     *
     * @param eBay_Trading_GetFeedback_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetFeedback_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetFeedback_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetFeedback_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFeedback Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetFeedback_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetFeedback_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetFeedback_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFeedback Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetFeedback_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFeedback input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CommentType input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) Returns feedback of a specified type. Valid values are: Positive, Neutral, Negative, Withdrawn, IndependentlyWithdrawn.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setCommentType($value)
    {
        return $this->set('CommentType', $value);
    }

    /**
     * Set the value for the DetailLevel input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The response detail level. Valid values are: ReturnAll.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this GetFeedback Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the FeedbackID input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) An ID that uniquely identifies a feedback record to be retrieved
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setFeedbackID($value)
    {
        return $this->set('FeedbackID', $value);
    }

    /**
     * Set the value for the FeedbackType input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The type of feedback to return. Valid values are: FeedbackReceivedAsSeller, FeedbackReceivedAsBuyer, FeedbackReceived, FeedbackLeft, CustomCode.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setFeedbackType($value)
    {
        return $this->set('FeedbackType', $value);
    }

    /**
     * Set the value for the ItemID input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The unique identifier for an eBay item listing.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the OrderLineItemID input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The unique identifier for an eBay order line item. This id generated by concatenating ItemID and TransactionID with a hyphen in between the IDs.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setOrderLineItemID($value)
    {
        return $this->set('OrderLineItemID', $value);
    }

    /**
     * Set the value for the PageNumber input for this GetFeedback Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetFeedback Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the TransactionID input for this GetFeedback Choreo.
     *
     * @param string $value (optional, string) The unique identifier for an eBay order line item (transaction).
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UserID input for this GetFeedback Choreo.
     *
     * @param string $value (conditional, string) The seller's UserID.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetFeedback Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetFeedback_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetFeedback_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFeedback Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFeedback execution.
     * @param eBay_Trading_GetFeedback $choreo The choreography object for this execution.
     * @param eBay_Trading_GetFeedback_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetFeedback_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetFeedback_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetFeedback $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFeedback execution.
     *
     * @return eBay_Trading_GetFeedback_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetFeedback execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetFeedback_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetFeedback_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetFeedback_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFeedback Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetFeedback_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFeedback execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns category and/or aspect histogram information for the eBay category ID you specify.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_GetHistograms extends Temboo_Choreography
{
    /**
     * Returns category and/or aspect histogram information for the eBay category ID you specify.
     *
     * @param Temboo_Session $session The session that owns this GetHistograms Choreo.
     * @return eBay_Finding_GetHistograms New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Finding/GetHistograms/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetHistograms Choreo.
     *
     * @param eBay_Finding_GetHistograms_Inputs|array $inputs (optional) Inputs as eBay_Finding_GetHistograms_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_GetHistograms_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Finding_GetHistograms_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetHistograms Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_GetHistograms_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Finding_GetHistograms_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetHistograms Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_GetHistograms_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetHistograms Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Finding_GetHistograms_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetHistograms input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetHistograms Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CategoryID input for this GetHistograms Choreo.
     *
     * @param string $value (required, string) Specifies the category from which you want to retrieve histogram information. 
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the GlobalID input for this GetHistograms Choreo.
     *
     * @param int $value (optional, integer) The global ID of the eBay site to access (e.g., EBAY-US).
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setGlobalID($value)
    {
        return $this->set('GlobalID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetHistograms Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetHistograms Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Finding_GetHistograms_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }
}


/**
 * Execution object for the GetHistograms Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_GetHistograms_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetHistograms Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetHistograms execution.
     * @param eBay_Finding_GetHistograms $choreo The choreography object for this execution.
     * @param eBay_Finding_GetHistograms_Inputs|array $inputs (optional) Inputs as eBay_Finding_GetHistograms_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Finding_GetHistograms_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Finding_GetHistograms $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetHistograms execution.
     *
     * @return eBay_Finding_GetHistograms_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetHistograms execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Finding_GetHistograms_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Finding_GetHistograms_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetHistograms Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Finding_GetHistograms_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetHistograms Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Finding_GetHistograms_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetHistograms execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns item data such as title, description, price information, and seller information.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItem extends Temboo_Choreography
{
    /**
     * Returns item data such as title, description, price information, and seller information.
     *
     * @param Temboo_Session $session The session that owns this GetItem Choreo.
     * @return eBay_Trading_GetItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetItem Choreo.
     *
     * @param eBay_Trading_GetItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DetailLevel input for this GetItem Choreo.
     *
     * @param string $value (optional, string) The response detail level. Valid values are: ItemReturnAttributes, ItemReturnDescription, and ReturnAll.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the IncludeItemSpecifics input for this GetItem Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, the response returns the ItemSpecifics node (if the listing has custom Item Specifics).
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setIncludeItemSpecifics($value)
    {
        return $this->set('IncludeItemSpecifics', $value);
    }

    /**
     * Set the value for the IncludeTaxTable input for this GetItem Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, an associated tax table is returned in the response.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setIncludeTaxTable($value)
    {
        return $this->set('IncludeTaxTable', $value);
    }

    /**
     * Set the value for the IncludeWatchCount input for this GetItem Choreo.
     *
     * @param bool $value (optional, boolean) Indicates if the caller wants to include watch count for that item in the response when set to true. Only the seller is allowed to use this argument.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setIncludeWatchCount($value)
    {
        return $this->set('IncludeWatchCount', $value);
    }

    /**
     * Set the value for the ItemID input for this GetItem Choreo.
     *
     * @param string $value (required, string) The ItemID that uniquely identifies the item listing to retrieve.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetItem Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetItem Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetItem Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the TransactionID input for this GetItem Choreo.
     *
     * @param string $value (optional, string) A unique identifier for a transaction (i.e.  an order line item). An order line item is created when the buyer commits to purchasing an item.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetItem Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetItem_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetItem execution.
     * @param eBay_Trading_GetItem $choreo The choreography object for this execution.
     * @param eBay_Trading_GetItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetItem execution.
     *
     * @return eBay_Trading_GetItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetItem execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to get the status for a group of items.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetItemStatus extends Temboo_Choreography
{
    /**
     * Allows you to get the status for a group of items.
     *
     * @param Temboo_Session $session The session that owns this GetItemStatus Choreo.
     * @return eBay_Shopping_GetItemStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/GetItemStatus/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetItemStatus Choreo.
     *
     * @param eBay_Shopping_GetItemStatus_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetItemStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetItemStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_GetItemStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetItemStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetItemStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_GetItemStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetItemStatus Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetItemStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetItemStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetItemStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetItemStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetItemStatus Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ItemID input for this GetItemStatus Choreo.
     *
     * @param string $value (required, string) The ID of an item to retrieve the status for. Multiple item IDs can be separated by commas.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetItemStatus Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetItemStatus Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetItemStatus Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_GetItemStatus_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the GetItemStatus Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetItemStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetItemStatus Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetItemStatus execution.
     * @param eBay_Shopping_GetItemStatus $choreo The choreography object for this execution.
     * @param eBay_Shopping_GetItemStatus_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetItemStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetItemStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_GetItemStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetItemStatus execution.
     *
     * @return eBay_Shopping_GetItemStatus_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetItemStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_GetItemStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_GetItemStatus_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetItemStatus Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetItemStatus_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetItemStatus Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_GetItemStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetItemStatus execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves order line item (transaction) information for a specified ItemID.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItemTransactions extends Temboo_Choreography
{
    /**
     * Retrieves order line item (transaction) information for a specified ItemID.
     *
     * @param Temboo_Session $session The session that owns this GetItemTransactions Choreo.
     * @return eBay_Trading_GetItemTransactions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetItemTransactions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetItemTransactions Choreo.
     *
     * @param eBay_Trading_GetItemTransactions_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetItemTransactions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetItemTransactions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetItemTransactions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetItemTransactions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetItemTransactions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetItemTransactions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetItemTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItemTransactions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetItemTransactions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetItemTransactions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetItemTransactions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DetailLevel input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) The detail level of the response. Valid values are: ItemReturnDescription and ReturnAll.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this GetItemTransactions Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the IncludeContainingOrder input for this GetItemTransactions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the ContainingOrder container is returned in the response for each transaction node.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setIncludeContainingOrder($value)
    {
        return $this->set('IncludeContainingOrder', $value);
    }

    /**
     * Set the value for the IncludeFinalValueFee input for this GetItemTransactions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the Final Value Fee (FVF) for all order line items is returned in the response.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setIncludeFinalValueFee($value)
    {
        return $this->set('IncludeFinalValueFee', $value);
    }

    /**
     * Set the value for the IncludeVariations input for this GetItemTransactions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, all variations defined for the item are returned at the root level.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setIncludeVariations($value)
    {
        return $this->set('IncludeVariations', $value);
    }

    /**
     * Set the value for the ItemID input for this GetItemTransactions Choreo.
     *
     * @param string $value (required, string) The unique identifier for an eBay item listing.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ModTimeFrom input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setModTimeFrom($value)
    {
        return $this->set('ModTimeFrom', $value);
    }

    /**
     * Set the value for the ModTimeTo input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setModTimeTo($value)
    {
        return $this->set('ModTimeTo', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this GetItemTransactions Choreo.
     *
     * @param int $value (optional, integer) The number of days in the past to search for order line items.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the OrderLineItemID input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) A unique identifier for an eBay order line item.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setOrderLineItemID($value)
    {
        return $this->set('OrderLineItemID', $value);
    }

    /**
     * Set the value for the PageNumber input for this GetItemTransactions Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the Platform input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) The name of the eBay co-branded site upon which the order line item was created. Valid values are: eBay, Express, Half, Shopping, or WorldOfGood.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setPlatform($value)
    {
        return $this->set('Platform', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetItemTransactions Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the TransactionID input for this GetItemTransactions Choreo.
     *
     * @param string $value (optional, string) Include a TransactionID field in the request if you want to retrieve the data for a specific order line item (transaction).
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetItemTransactions Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetItemTransactions_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetItemTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItemTransactions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetItemTransactions Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetItemTransactions execution.
     * @param eBay_Trading_GetItemTransactions $choreo The choreography object for this execution.
     * @param eBay_Trading_GetItemTransactions_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetItemTransactions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetItemTransactions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetItemTransactions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetItemTransactions execution.
     *
     * @return eBay_Trading_GetItemTransactions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetItemTransactions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetItemTransactions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetItemTransactions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetItemTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetItemTransactions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetItemTransactions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetItemTransactions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetItemTransactions execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the messages that buyers have posted about your active item listings.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetMemberMessages extends Temboo_Choreography
{
    /**
     * Retrieves a list of the messages that buyers have posted about your active item listings.
     *
     * @param Temboo_Session $session The session that owns this GetMemberMessages Choreo.
     * @return eBay_Trading_GetMemberMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetMemberMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMemberMessages Choreo.
     *
     * @param eBay_Trading_GetMemberMessages_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetMemberMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetMemberMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetMemberMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMemberMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetMemberMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetMemberMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMemberMessages Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetMemberMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMemberMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetMemberMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMemberMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DisplayToPublic input for this GetMemberMessages Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, only public messages (viewable in the Item listing) are returned.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setDisplayToPublic($value)
    {
        return $this->set('DisplayToPublic', $value);
    }

    /**
     * Set the value for the EndCreationTime input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setEndCreationTime($value)
    {
        return $this->set('EndCreationTime', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this GetMemberMessages Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the ItemID input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) The ID of the item the message is about.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the MailMessageType input for this GetMemberMessages Choreo.
     *
     * @param string $value (required, string) The type of message to retrieve. Valid values are: All and AskSellerQuestion. When set to AskSellerQuestion, ItemID or a date range filter must be specified.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setMailMessageType($value)
    {
        return $this->set('MailMessageType', $value);
    }

    /**
     * Set the value for the MemberMessageID input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) An ID that uniquely identifies the message for a given user to be retrieved.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setMemberMessageID($value)
    {
        return $this->set('MemberMessageID', $value);
    }

    /**
     * Set the value for the MessageStatus input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) The status of the message. Valid values are: Answered and Unanswered.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setMessageStatus($value)
    {
        return $this->set('MessageStatus', $value);
    }

    /**
     * Set the value for the PageNumber input for this GetMemberMessages Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetMemberMessages Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SenderID input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) The seller's UserID.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setSenderID($value)
    {
        return $this->set('SenderID', $value);
    }

    /**
     * Set the value for the SiteID input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the StartCreationTime input for this GetMemberMessages Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setStartCreationTime($value)
    {
        return $this->set('StartCreationTime', $value);
    }

    /**
     * Set the value for the UserToken input for this GetMemberMessages Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetMemberMessages_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetMemberMessages Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetMemberMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMemberMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMemberMessages execution.
     * @param eBay_Trading_GetMemberMessages $choreo The choreography object for this execution.
     * @param eBay_Trading_GetMemberMessages_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetMemberMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetMemberMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetMemberMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMemberMessages execution.
     *
     * @return eBay_Trading_GetMemberMessages_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMemberMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetMemberMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetMemberMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMemberMessages Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetMemberMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMemberMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetMemberMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMemberMessages execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves publicly available data for one or more listings.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetMultipleItems extends Temboo_Choreography
{
    /**
     * Retrieves publicly available data for one or more listings.
     *
     * @param Temboo_Session $session The session that owns this GetMultipleItems Choreo.
     * @return eBay_Shopping_GetMultipleItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/GetMultipleItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMultipleItems Choreo.
     *
     * @param eBay_Shopping_GetMultipleItems_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetMultipleItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetMultipleItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_GetMultipleItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMultipleItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetMultipleItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_GetMultipleItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMultipleItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetMultipleItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMultipleItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetMultipleItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMultipleItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetMultipleItems Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ItemID input for this GetMultipleItems Choreo.
     *
     * @param string $value (required, string) The ID of an item to retrieve the status for. Multiple item IDs can be separated by commas.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMultipleItems Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetMultipleItems Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetMultipleItems Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_GetMultipleItems_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the GetMultipleItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetMultipleItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMultipleItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMultipleItems execution.
     * @param eBay_Shopping_GetMultipleItems $choreo The choreography object for this execution.
     * @param eBay_Shopping_GetMultipleItems_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetMultipleItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetMultipleItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_GetMultipleItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMultipleItems execution.
     *
     * @return eBay_Shopping_GetMultipleItems_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMultipleItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_GetMultipleItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_GetMultipleItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMultipleItems Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetMultipleItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMultipleItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_GetMultipleItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMultipleItems execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves order line item (transaction) information for the authenticated user only.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSellerTransactions extends Temboo_Choreography
{
    /**
     * Retrieves order line item (transaction) information for the authenticated user only.
     *
     * @param Temboo_Session $session The session that owns this GetSellerTransactions Choreo.
     * @return eBay_Trading_GetSellerTransactions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetSellerTransactions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSellerTransactions Choreo.
     *
     * @param eBay_Trading_GetSellerTransactions_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetSellerTransactions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetSellerTransactions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetSellerTransactions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSellerTransactions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetSellerTransactions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetSellerTransactions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSellerTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSellerTransactions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSellerTransactions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetSellerTransactions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSellerTransactions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DetailLevel input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) The detail level of the response. Valid values are: ItemReturnDescription and ReturnAll.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the EntriesPerPage input for this GetSellerTransactions Choreo.
     *
     * @param int $value (optional, integer) The maximum number of records to return in the result.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setEntriesPerPage($value)
    {
        return $this->set('EntriesPerPage', $value);
    }

    /**
     * Set the value for the IncludeCodiceFiscale input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) When set to 'true', the buyer's Codice Fiscale number is returned in the response.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setIncludeCodiceFiscale($value)
    {
        return $this->set('IncludeCodiceFiscale', $value);
    }

    /**
     * Set the value for the IncludeContainingOrder input for this GetSellerTransactions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the ContainingOrder container is returned in the response for each transaction node.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setIncludeContainingOrder($value)
    {
        return $this->set('IncludeContainingOrder', $value);
    }

    /**
     * Set the value for the IncludeFinalValueFee input for this GetSellerTransactions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the Final Value Fee (FVF) for all order line items is returned in the response.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setIncludeFinalValueFee($value)
    {
        return $this->set('IncludeFinalValueFee', $value);
    }

    /**
     * Set the value for the InventoryTrackingMethod input for this GetSellerTransactions Choreo.
     *
     * @param bool $value (optional, boolean) Filters the response to only include order line items for listings that match this InventoryTrackingMethod setting. Valid values are: ItemID and SKU.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setInventoryTrackingMethod($value)
    {
        return $this->set('InventoryTrackingMethod', $value);
    }

    /**
     * Set the value for the ModTimeFrom input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setModTimeFrom($value)
    {
        return $this->set('ModTimeFrom', $value);
    }

    /**
     * Set the value for the ModTimeTo input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, date) Used to filter by date range (e.g., 2013-02-08T00:00:00.000Z).
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setModTimeTo($value)
    {
        return $this->set('ModTimeTo', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this GetSellerTransactions Choreo.
     *
     * @param int $value (optional, integer) The number of days in the past to search for order line items.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the PageNumber input for this GetSellerTransactions Choreo.
     *
     * @param int $value (optional, integer) Specifies the page number of the results to return.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setPageNumber($value)
    {
        return $this->set('PageNumber', $value);
    }

    /**
     * Set the value for the Platform input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) The name of the eBay co-branded site upon which the order line item was created. Valid values are: eBay, Express, Half, Shopping, or WorldOfGood.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setPlatform($value)
    {
        return $this->set('Platform', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SKU input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) One or more seller SKUs to filter the result. Multiple SKUs can be provided in a comma-separated list.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setSKU($value)
    {
        return $this->set('SKU', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetSellerTransactions Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetSellerTransactions Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetSellerTransactions Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetSellerTransactions_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetSellerTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSellerTransactions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSellerTransactions Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSellerTransactions execution.
     * @param eBay_Trading_GetSellerTransactions $choreo The choreography object for this execution.
     * @param eBay_Trading_GetSellerTransactions_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetSellerTransactions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetSellerTransactions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetSellerTransactions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSellerTransactions execution.
     *
     * @return eBay_Trading_GetSellerTransactions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetSellerTransactions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetSellerTransactions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetSellerTransactions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSellerTransactions Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSellerTransactions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSellerTransactions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetSellerTransactions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSellerTransactions execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the authentication process.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSessionID extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the authentication process.
     *
     * @param Temboo_Session $session The session that owns this GetSessionID Choreo.
     * @return eBay_Trading_GetSessionID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetSessionID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSessionID Choreo.
     *
     * @param eBay_Trading_GetSessionID_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetSessionID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetSessionID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetSessionID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSessionID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetSessionID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetSessionID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSessionID Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSessionID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSessionID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetSessionID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSessionID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetSessionID Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CertID input for this GetSessionID Choreo.
     *
     * @param string $value (required, string) The certificate that authenticates the application when making API calls.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setCertID($value)
    {
        return $this->set('CertID', $value);
    }

    /**
     * Set the value for the DevID input for this GetSessionID Choreo.
     *
     * @param string $value (required, string) The unique identifier for the developer's account.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setDevID($value)
    {
        return $this->set('DevID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSessionID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RuName input for this GetSessionID Choreo.
     *
     * @param string $value (required, string) Your application's RuName which identifies your application to eBay.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setRuName($value)
    {
        return $this->set('RuName', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetSessionID Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetSessionID Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetSessionID_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the GetSessionID Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSessionID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSessionID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSessionID execution.
     * @param eBay_Trading_GetSessionID $choreo The choreography object for this execution.
     * @param eBay_Trading_GetSessionID_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetSessionID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetSessionID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetSessionID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSessionID execution.
     *
     * @return eBay_Trading_GetSessionID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetSessionID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetSessionID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetSessionID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSessionID Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetSessionID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSessionID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetSessionID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSessionID execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this GetSessionID execution.
     *
     * @return string (string) The URL that you can send the user to so that they can sign-in and approve the user consent form.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "SessionID" output from this GetSessionID execution.
     *
     * @return string (string) The SessionID returned from PayPal. This gets passed to the FetchToken Choreo after the user authorizes the request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSessionID()
    {
        return $this->get('SessionID');
    }
}

/**
 * Retrieves shipping costs for an item.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetShippingCosts extends Temboo_Choreography
{
    /**
     * Retrieves shipping costs for an item.
     *
     * @param Temboo_Session $session The session that owns this GetShippingCosts Choreo.
     * @return eBay_Shopping_GetShippingCosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/GetShippingCosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetShippingCosts Choreo.
     *
     * @param eBay_Shopping_GetShippingCosts_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetShippingCosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetShippingCosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_GetShippingCosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShippingCosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetShippingCosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_GetShippingCosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShippingCosts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetShippingCosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetShippingCosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetShippingCosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShippingCosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetShippingCosts Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the DestinationCountryCode input for this GetShippingCosts Choreo.
     *
     * @param string $value (conditional, string) The shipment destination country code.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setDestinationCountryCode($value)
    {
        return $this->set('DestinationCountryCode', $value);
    }

    /**
     * Set the value for the DestinationPostalCode input for this GetShippingCosts Choreo.
     *
     * @param string $value (conditional, string) The shipment destination postal code.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setDestinationPostalCode($value)
    {
        return $this->set('DestinationPostalCode', $value);
    }

    /**
     * Set the value for the IncludeDetails input for this GetShippingCosts Choreo.
     *
     * @param bool $value (conditional, boolean) Indicates whether to return the ShippingDetails container in the response.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setIncludeDetails($value)
    {
        return $this->set('IncludeDetails', $value);
    }

    /**
     * Set the value for the ItemID input for this GetShippingCosts Choreo.
     *
     * @param string $value (required, string) The ID of the item to get shipping costs for.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the QuantitySold input for this GetShippingCosts Choreo.
     *
     * @param string $value (optional, string) The quantity of items being shipped.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setQuantitySold($value)
    {
        return $this->set('QuantitySold', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetShippingCosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetShippingCosts Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetShippingCosts Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_GetShippingCosts_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }
}


/**
 * Execution object for the GetShippingCosts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetShippingCosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShippingCosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetShippingCosts execution.
     * @param eBay_Shopping_GetShippingCosts $choreo The choreography object for this execution.
     * @param eBay_Shopping_GetShippingCosts_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetShippingCosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetShippingCosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_GetShippingCosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShippingCosts execution.
     *
     * @return eBay_Shopping_GetShippingCosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetShippingCosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_GetShippingCosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_GetShippingCosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetShippingCosts Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetShippingCosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetShippingCosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_GetShippingCosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetShippingCosts execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data pertaining to a single eBay user.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetUser extends Temboo_Choreography
{
    /**
     * Retrieves data pertaining to a single eBay user.
     *
     * @param Temboo_Session $session The session that owns this GetUser Choreo.
     * @return eBay_Trading_GetUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/GetUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUser Choreo.
     *
     * @param eBay_Trading_GetUser_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_GetUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_GetUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_GetUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DetailLevel input for this GetUser Choreo.
     *
     * @param string $value (optional, string) The level of detail to return in the response. Valid values are: ReturnAll or ReturnSummary.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the IncludeFeatureEligibility input for this GetUser Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to include feature eligibility information in the response. Set to true or false.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setIncludeFeatureEligibility($value)
    {
        return $this->set('IncludeFeatureEligibility', $value);
    }

    /**
     * Set the value for the ItemID input for this GetUser Choreo.
     *
     * @param string $value (optional, string) The ID of the item of a successfully concluded listing in which the requestor and target user were participants as buyer and seller.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetUser Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetUser Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserID input for this GetUser Choreo.
     *
     * @param string $value (optional, string) The eBay User ID for the user whose data you want to retrieve.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the UserToken input for this GetUser Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_GetUser_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUser execution.
     * @param eBay_Trading_GetUser $choreo The choreography object for this execution.
     * @param eBay_Trading_GetUser_Inputs|array $inputs (optional) Inputs as eBay_Trading_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_GetUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_GetUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUser execution.
     *
     * @return eBay_Trading_GetUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_GetUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_GetUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_GetUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_GetUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUser execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves public user information based on the user ID you specify.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetUserProfile extends Temboo_Choreography
{
    /**
     * Retrieves public user information based on the user ID you specify.
     *
     * @param Temboo_Session $session The session that owns this GetUserProfile Choreo.
     * @return eBay_Shopping_GetUserProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Shopping/GetUserProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserProfile Choreo.
     *
     * @param eBay_Shopping_GetUserProfile_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetUserProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetUserProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Shopping_GetUserProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetUserProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Shopping_GetUserProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserProfile Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetUserProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Shopping_GetUserProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetUserProfile Choreo.
     *
     * @param string $value (required, string) The unique identifier for the application.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUserProfile Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this GetUserProfile Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this GetUserProfile Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserID input for this GetUserProfile Choreo.
     *
     * @param string $value (required, string) The ID of the user to return the profile for.
     * @return eBay_Shopping_GetUserProfile_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetUserProfile Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetUserProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserProfile execution.
     * @param eBay_Shopping_GetUserProfile $choreo The choreography object for this execution.
     * @param eBay_Shopping_GetUserProfile_Inputs|array $inputs (optional) Inputs as eBay_Shopping_GetUserProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Shopping_GetUserProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Shopping_GetUserProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserProfile execution.
     *
     * @return eBay_Shopping_GetUserProfile_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetUserProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Shopping_GetUserProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Shopping_GetUserProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserProfile Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Shopping_GetUserProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Shopping_GetUserProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserProfile execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Enables a buyer and seller to leave feedback for their order partner at the conclusion of a successful order.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_LeaveFeedback extends Temboo_Choreography
{
    /**
     * Enables a buyer and seller to leave feedback for their order partner at the conclusion of a successful order.
     *
     * @param Temboo_Session $session The session that owns this LeaveFeedback Choreo.
     * @return eBay_Trading_LeaveFeedback New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/LeaveFeedback/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LeaveFeedback Choreo.
     *
     * @param eBay_Trading_LeaveFeedback_Inputs|array $inputs (optional) Inputs as eBay_Trading_LeaveFeedback_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_LeaveFeedback_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_LeaveFeedback_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LeaveFeedback Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_LeaveFeedback_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_LeaveFeedback_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LeaveFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_LeaveFeedback_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LeaveFeedback Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_LeaveFeedback_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LeaveFeedback input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the LeaveFeedbackRequest input for this LeaveFeedback Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setLeaveFeedbackRequest($value)
    {
        return $this->set('LeaveFeedbackRequest', $value);
    }

    /**
     * Set the value for the CommentText input for this LeaveFeedback Choreo.
     *
     * @param string $value (conditional, string) The comment text to leave Feedback about the buyer.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setCommentText($value)
    {
        return $this->set('CommentText', $value);
    }

    /**
     * Set the value for the CommentType input for this LeaveFeedback Choreo.
     *
     * @param string $value (conditional, string) The type of comment. Valid values are: Positive, Negative, and Neutral.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setCommentType($value)
    {
        return $this->set('CommentType', $value);
    }

    /**
     * Set the value for the ItemID input for this LeaveFeedback Choreo.
     *
     * @param string $value (conditional, string) The unique identifier for an eBay item listing that was sold. Required unless OrderLineItemID is specified.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the OrderLineItemID input for this LeaveFeedback Choreo.
     *
     * @param string $value (optional, string) This is a unique identifier for an eBay order line item and is based upon the concatenation of ItemID and TransactionID, with a hyphen in between these two IDs.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setOrderLineItemID($value)
    {
        return $this->set('OrderLineItemID', $value);
    }

    /**
     * Set the value for the RatingDetail input for this LeaveFeedback Choreo.
     *
     * @param string $value (conditional, string) The subject that is being rated. Valid values are: Communication, ItemAsDescribed, ShippingAndHandlingCharges, and ShippingTime.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setRatingDetail($value)
    {
        return $this->set('RatingDetail', $value);
    }

    /**
     * Set the value for the Rating input for this LeaveFeedback Choreo.
     *
     * @param int $value (conditional, integer) A detailed numeric rating (1 through 5) for an order line item. This rating is applied to the subject provided for RatingDetail.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setRating($value)
    {
        return $this->set('Rating', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LeaveFeedback Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this LeaveFeedback Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this LeaveFeedback Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the TargetUser input for this LeaveFeedback Choreo.
     *
     * @param string $value (conditional, string) The user ID of the buyer who you want to leave feedback for.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setTargetUser($value)
    {
        return $this->set('TargetUser', $value);
    }

    /**
     * Set the value for the TransactionID input for this LeaveFeedback Choreo.
     *
     * @param string $value (optional, string) The unique identifier for an eBay order line item (transaction). Required when there are multiple order ine items between the two order partners that require feedback.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UserToken input for this LeaveFeedback Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_LeaveFeedback_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the LeaveFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_LeaveFeedback_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LeaveFeedback Choreo.
     *
     * @param Temboo_Session $session The session that owns this LeaveFeedback execution.
     * @param eBay_Trading_LeaveFeedback $choreo The choreography object for this execution.
     * @param eBay_Trading_LeaveFeedback_Inputs|array $inputs (optional) Inputs as eBay_Trading_LeaveFeedback_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_LeaveFeedback_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_LeaveFeedback $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LeaveFeedback execution.
     *
     * @return eBay_Trading_LeaveFeedback_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this LeaveFeedback execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_LeaveFeedback_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_LeaveFeedback_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LeaveFeedback Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_LeaveFeedback_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LeaveFeedback Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_LeaveFeedback_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LeaveFeedback execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows an authenticated user to to make a bid, a best offer, or a purchase on the item specified by the ItemID input field.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_PlaceOffer extends Temboo_Choreography
{
    /**
     * Allows an authenticated user to to make a bid, a best offer, or a purchase on the item specified by the ItemID input field.
     *
     * @param Temboo_Session $session The session that owns this PlaceOffer Choreo.
     * @return eBay_Trading_PlaceOffer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/PlaceOffer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PlaceOffer Choreo.
     *
     * @param eBay_Trading_PlaceOffer_Inputs|array $inputs (optional) Inputs as eBay_Trading_PlaceOffer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_PlaceOffer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_PlaceOffer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PlaceOffer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_PlaceOffer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_PlaceOffer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PlaceOffer Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_PlaceOffer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PlaceOffer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_PlaceOffer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PlaceOffer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PlaceOfferRequest input for this PlaceOffer Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing properties you wish to set. This can be used as an alternative to individual inputs that represent request properties.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setPlaceOfferRequest($value)
    {
        return $this->set('PlaceOfferRequest', $value);
    }

    /**
     * Set the value for the Action input for this PlaceOffer Choreo.
     *
     * @param string $value (conditional, string) Indicates the type of offer being made on the specified listing. Valid values are: Bid, Purchase, Accept, Counter, Decline, or Offer.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setAction($value)
    {
        return $this->set('Action', $value);
    }

    /**
     * Set the value for the BestOfferID input for this PlaceOffer Choreo.
     *
     * @param string $value (conditional, string) The ID of a Best Offer on an item. Required if Action is set to Accept or Decline.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setBestOfferID($value)
    {
        return $this->set('BestOfferID', $value);
    }

    /**
     * Set the value for the DetailLevel input for this PlaceOffer Choreo.
     *
     * @param string $value (optional, string) The response detail level. Valid values are: ItemReturnAttributes, ItemReturnDescription, and ReturnAll.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setDetailLevel($value)
    {
        return $this->set('DetailLevel', $value);
    }

    /**
     * Set the value for the EndUserIP input for this PlaceOffer Choreo.
     *
     * @param string $value (conditional, string) The public IP address of the machine from which the request is sent.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setEndUserIP($value)
    {
        return $this->set('EndUserIP', $value);
    }

    /**
     * Set the value for the ItemID input for this PlaceOffer Choreo.
     *
     * @param string $value (conditional, string) The ItemID that uniquely identifies the item listing to bid on.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the MaxBid input for this PlaceOffer Choreo.
     *
     * @param float $value (conditional, decimal) The amount of the offer placed on the listing.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setMaxBid($value)
    {
        return $this->set('MaxBid', $value);
    }

    /**
     * Set the value for the Message input for this PlaceOffer Choreo.
     *
     * @param string $value (conditional, string) A message from the buyer to the seller.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Quantity input for this PlaceOffer Choreo.
     *
     * @param int $value (conditional, integer) Specifies the number of items from the specified listing that the user intends to purchase. For auctions, this must be set to 1.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setQuantity($value)
    {
        return $this->set('Quantity', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PlaceOffer Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this PlaceOffer Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this PlaceOffer Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserConsent input for this PlaceOffer Choreo.
     *
     * @param bool $value (conditional, boolean) When set to true, confirms that the bidder read and agrees to eBay's privacy policy.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setUserConsent($value)
    {
        return $this->set('UserConsent', $value);
    }

    /**
     * Set the value for the UserToken input for this PlaceOffer Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_PlaceOffer_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the PlaceOffer Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_PlaceOffer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PlaceOffer Choreo.
     *
     * @param Temboo_Session $session The session that owns this PlaceOffer execution.
     * @param eBay_Trading_PlaceOffer $choreo The choreography object for this execution.
     * @param eBay_Trading_PlaceOffer_Inputs|array $inputs (optional) Inputs as eBay_Trading_PlaceOffer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_PlaceOffer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_PlaceOffer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PlaceOffer execution.
     *
     * @return eBay_Trading_PlaceOffer_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this PlaceOffer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_PlaceOffer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_PlaceOffer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PlaceOffer Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_PlaceOffer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PlaceOffer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_PlaceOffer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PlaceOffer execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a seller to change the properties of a currently active listing.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_ReviseItem extends Temboo_Choreography
{
    /**
     * Allows a seller to change the properties of a currently active listing.
     *
     * @param Temboo_Session $session The session that owns this ReviseItem Choreo.
     * @return eBay_Trading_ReviseItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/ReviseItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReviseItem Choreo.
     *
     * @param eBay_Trading_ReviseItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_ReviseItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_ReviseItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_ReviseItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReviseItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_ReviseItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_ReviseItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReviseItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_ReviseItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReviseItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_ReviseItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReviseItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ReviseItemRequest input for this ReviseItem Choreo.
     *
     * @param string $value (optional, xml) The complete XML request body containing item properties you wish to set. This can be used as an alternative to individual inputs that represent item properties.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setReviseItemRequest($value)
    {
        return $this->set('ReviseItemRequest', $value);
    }

    /**
     * Set the value for the BuyItNowPrice input for this ReviseItem Choreo.
     *
     * @param float $value (optional, decimal) Allows a user to purchase the item at a Buy It Now price and end the auction immediately.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setBuyItNowPrice($value)
    {
        return $this->set('BuyItNowPrice', $value);
    }

    /**
     * Set the value for the CategoryID input for this ReviseItem Choreo.
     *
     * @param int $value (optional, integer) The numeric ID for a category on eBay. Category IDs can be retrieved with the GetCategories Choreo.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the ConditionID input for this ReviseItem Choreo.
     *
     * @param int $value (optional, integer) The numeric ID (e.g., 1000) for the item condition.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setConditionID($value)
    {
        return $this->set('ConditionID', $value);
    }

    /**
     * Set the value for the Country input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The country that the item is located in.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Currency input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The currency associated with the item price.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the DispatchTimeMax input for this ReviseItem Choreo.
     *
     * @param int $value (optional, integer) Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setDispatchTimeMax($value)
    {
        return $this->set('DispatchTimeMax', $value);
    }

    /**
     * Set the value for the ExpeditedService input for this ReviseItem Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not the seller is offering expedited shipping service options.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setExpeditedService($value)
    {
        return $this->set('ExpeditedService', $value);
    }

    /**
     * Set the value for the ItemDescription input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The seller's description of the item.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setItemDescription($value)
    {
        return $this->set('ItemDescription', $value);
    }

    /**
     * Set the value for the ItemID input for this ReviseItem Choreo.
     *
     * @param string $value (conditional, string) The ID of the item to revise.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListingDuration input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The number of days the seller wants the listing to be active (e.g., Days_7). A complete list of accepted values is returned when calling GetCategoryFeatures with DetailLevel set to ReturnAll.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setListingDuration($value)
    {
        return $this->set('ListingDuration', $value);
    }

    /**
     * Set the value for the ListingType input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The format of the listing the seller wants to use. Valid values are: AdType, Chinese, FixedPriceItem, Half, LeadGeneration.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setListingType($value)
    {
        return $this->set('ListingType', $value);
    }

    /**
     * Set the value for the PayPalEmailAddress input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The seller's PayPal email address. Required when a PaymentMethod is PayPal.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setPayPalEmailAddress($value)
    {
        return $this->set('PayPalEmailAddress', $value);
    }

    /**
     * Set the value for the PaymentMethods input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the item. This can be a comma-separated list (e.g., VisaMC,PayPal).
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setPaymentMethods($value)
    {
        return $this->set('PaymentMethods', $value);
    }

    /**
     * Set the value for the PictureURL input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The URL for a picture associated with an item.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setPictureURL($value)
    {
        return $this->set('PictureURL', $value);
    }

    /**
     * Set the value for the PostalCode input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The Postal code of the place where the item is located.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the Quantity input for this ReviseItem Choreo.
     *
     * @param int $value (optional, integer) Indicates the quantity of items available for purchase in the listing. Required for all auction listings and for non-variation, fixed-price listings. For auction listings, this value is always '1'.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setQuantity($value)
    {
        return $this->set('Quantity', $value);
    }

    /**
     * Set the value for the RefundOption input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) Indicates how the seller will compensate the buyer for a returned item (e.g. MoneyBack).
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setRefundOption($value)
    {
        return $this->set('RefundOption', $value);
    }

    /**
     * Set the value for the ReservePrice input for this ReviseItem Choreo.
     *
     * @param float $value (optional, decimal) The lowest price at which the seller is willing to sell the item.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setReservePrice($value)
    {
        return $this->set('ReservePrice', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ReturnPolicyDescription input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The text description of return policy details.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setReturnPolicyDescription($value)
    {
        return $this->set('ReturnPolicyDescription', $value);
    }

    /**
     * Set the value for the ReturnsAcceptedOption input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) Indicates whether the seller allows the buyer to return the item (e.g., ReturnsAccepted).
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setReturnsAcceptedOption($value)
    {
        return $this->set('ReturnsAcceptedOption', $value);
    }

    /**
     * Set the value for the ReturnsWithinOption input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The period of time the buyer has to return the item (e.g., Days_14). To accepted values for this field, call GeteBayDetails with DetailName set to ReturnPolicyDetails.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setReturnsWithinOption($value)
    {
        return $this->set('ReturnsWithinOption', $value);
    }

    /**
     * Set the value for the SandboxMode input for this ReviseItem Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the ShippingServiceAdditionalCost input for this ReviseItem Choreo.
     *
     * @param float $value (optional, decimal) Shipping costs in addition to the value specified for the ShippingServiceCost parameter.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setShippingServiceAdditionalCost($value)
    {
        return $this->set('ShippingServiceAdditionalCost', $value);
    }

    /**
     * Set the value for the ShippingServiceCost input for this ReviseItem Choreo.
     *
     * @param float $value (optional, decimal) The cost for shipping the item.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setShippingServiceCost($value)
    {
        return $this->set('ShippingServiceCost', $value);
    }

    /**
     * Set the value for the ShippingService input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The name of the shipping service offered (e.g. UPSGround, USPSMedia).
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setShippingService($value)
    {
        return $this->set('ShippingService', $value);
    }

    /**
     * Set the value for the ShippingType input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The shipping cost model offered by the seller. Valid values are: Calculated, CalculatedDomesticFlatInternational, Flat, FlatDomesticCalculatedInternational, FreightFlat, NotSpecified.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setShippingType($value)
    {
        return $this->set('ShippingType', $value);
    }

    /**
     * Set the value for the SiteID input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the Site input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The name of the site on which the item is listed. This should corresponse to the SiteID. Default value is "US".
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setSite($value)
    {
        return $this->set('Site', $value);
    }

    /**
     * Set the value for the StartPrice input for this ReviseItem Choreo.
     *
     * @param float $value (optional, decimal) This value indicates the starting price of the item when it is listed for the first time.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setStartPrice($value)
    {
        return $this->set('StartPrice', $value);
    }

    /**
     * Set the value for the Title input for this ReviseItem Choreo.
     *
     * @param string $value (optional, string) The title of the item as it appears in the listing or search results.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the UserToken input for this ReviseItem Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_ReviseItem_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the ReviseItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_ReviseItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReviseItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReviseItem execution.
     * @param eBay_Trading_ReviseItem $choreo The choreography object for this execution.
     * @param eBay_Trading_ReviseItem_Inputs|array $inputs (optional) Inputs as eBay_Trading_ReviseItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_ReviseItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_ReviseItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReviseItem execution.
     *
     * @return eBay_Trading_ReviseItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ReviseItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_ReviseItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_ReviseItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReviseItem Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_ReviseItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReviseItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_ReviseItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReviseItem execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to uploads a picture to eBay Picture Services by specifying a binary attachment or image URL.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_UploadSiteHostedPictures extends Temboo_Choreography
{
    /**
     * Allows you to uploads a picture to eBay Picture Services by specifying a binary attachment or image URL.
     *
     * @param Temboo_Session $session The session that owns this UploadSiteHostedPictures Choreo.
     * @return eBay_Trading_UploadSiteHostedPictures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/eBay/Trading/UploadSiteHostedPictures/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSiteHostedPictures Choreo.
     *
     * @param eBay_Trading_UploadSiteHostedPictures_Inputs|array $inputs (optional) Inputs as eBay_Trading_UploadSiteHostedPictures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_UploadSiteHostedPictures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new eBay_Trading_UploadSiteHostedPictures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSiteHostedPictures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new eBay_Trading_UploadSiteHostedPictures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSiteHostedPictures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_UploadSiteHostedPictures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSiteHostedPictures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSiteHostedPictures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExtensionInDays input for this UploadSiteHostedPictures Choreo.
     *
     * @param int $value (optional, integer) The number of days to extend the expiration date for the specified image, after a listing has ended.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setExtensionInDays($value)
    {
        return $this->set('ExtensionInDays', $value);
    }

    /**
     * Set the value for the ExternalPictureURL input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (conditional, string) The URL of an image to upload. Required unless providing PictureData. Max image size is 7 MB. Max URL length is 1024. Formats supported are: JPG, GIF, PNG, BMP, and TIF.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setExternalPictureURL($value)
    {
        return $this->set('ExternalPictureURL', $value);
    }

    /**
     * Set the value for the PictureData input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (conditional, string) The Base64 encoded string for an the image data. Required unless providing the ExternalPictureURL. Max image size is 7 MB. Formats supported are: JPG, GIF, PNG, BMP, and TIF.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setPictureData($value)
    {
        return $this->set('PictureData', $value);
    }

    /**
     * Set the value for the PictureName input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) The name of the picture.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setPictureName($value)
    {
        return $this->set('PictureName', $value);
    }

    /**
     * Set the value for the PictureSet input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) The image sizes that will be generated. Valid values are: Standard and Supersize.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setPictureSet($value)
    {
        return $this->set('PictureSet', $value);
    }

    /**
     * Set the value for the PictureUploadPolicy input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) Indicates that an uploaded picture is available to a seller on the eBay site. Valid values are: Add and ClearAndAdd.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setPictureUploadPolicy($value)
    {
        return $this->set('PictureUploadPolicy', $value);
    }

    /**
     * Set the value for the PictureWatermark input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) The type of watermark that should be applied to the pictures hosted by the eBay Picture Services. Valid values are: User and Icon.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setPictureWatermark($value)
    {
        return $this->set('PictureWatermark', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SandboxMode input for this UploadSiteHostedPictures Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the request should be made to the sandbox endpoint instead of the production endpoint. Set to 1 to enable sandbox mode.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setSandboxMode($value)
    {
        return $this->set('SandboxMode', $value);
    }

    /**
     * Set the value for the SiteID input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (optional, string) The eBay site ID that you want to access. Defaults to 0 indicating the US site.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the UserToken input for this UploadSiteHostedPictures Choreo.
     *
     * @param string $value (required, string) A valid eBay Auth Token.
     * @return eBay_Trading_UploadSiteHostedPictures_Inputs For method chaining.
     */
    public function setUserToken($value)
    {
        return $this->set('UserToken', $value);
    }
}


/**
 * Execution object for the UploadSiteHostedPictures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_UploadSiteHostedPictures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSiteHostedPictures Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSiteHostedPictures execution.
     * @param eBay_Trading_UploadSiteHostedPictures $choreo The choreography object for this execution.
     * @param eBay_Trading_UploadSiteHostedPictures_Inputs|array $inputs (optional) Inputs as eBay_Trading_UploadSiteHostedPictures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return eBay_Trading_UploadSiteHostedPictures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, eBay_Trading_UploadSiteHostedPictures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSiteHostedPictures execution.
     *
     * @return eBay_Trading_UploadSiteHostedPictures_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UploadSiteHostedPictures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return eBay_Trading_UploadSiteHostedPictures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new eBay_Trading_UploadSiteHostedPictures_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSiteHostedPictures Choreo.
 *
 * @package Temboo
 * @subpackage eBay
 */
class eBay_Trading_UploadSiteHostedPictures_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSiteHostedPictures Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return eBay_Trading_UploadSiteHostedPictures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadSiteHostedPictures execution.
     *
     * @return string The response from eBay.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>