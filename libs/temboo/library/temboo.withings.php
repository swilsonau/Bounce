<?php

/**
 * Temboo PHP SDK Withings classes
 *
 * Execute Choreographies from the Temboo Withings bundle.
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
 * @subpackage Withings
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Completes the OAuth process by retrieving a Withings access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Withings access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Withings_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Withings_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Withings_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The oauth_token_secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Withings_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Withings_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Withings_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Withings_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Withings_OAuth_FinalizeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The ID of the user who is associated with the OAuth credentials.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Retrieves activity metrics for the specified user.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetActivityMetrics extends Temboo_Choreography
{
    /**
     * Retrieves activity metrics for the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetActivityMetrics Choreo.
     * @return Withings_Measure_GetActivityMetrics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Measure/GetActivityMetrics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetActivityMetrics Choreo.
     *
     * @param Withings_Measure_GetActivityMetrics_Inputs|array $inputs (optional) Inputs as Withings_Measure_GetActivityMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Measure_GetActivityMetrics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Measure_GetActivityMetrics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetActivityMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Measure_GetActivityMetrics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Measure_GetActivityMetrics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetActivityMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetActivityMetrics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetActivityMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Measure_GetActivityMetrics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetActivityMetrics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetActivityMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetActivityMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetActivityMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetActivityMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetActivityMetrics Choreo.
     *
     * @param string $value (optional, date) The exact date for a log to retrieve (format: YYYY-MM-DD). To retrieve logs within a range, use StartDate and EndDate. This defaults to today's date if an exact date or date range is not provided.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this GetActivityMetrics Choreo.
     *
     * @param string $value (optional, date) The end date for the range of logs to retrieve (format: YYYY-MM-DD). To retrieve a log from an exact date, use the Date input.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the StartDate input for this GetActivityMetrics Choreo.
     *
     * @param string $value (optional, date) The start date for the range of logs to retrieve (format: YYYY-MM-DD). To retrieve a log from an exact date, use the Date input.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the UserID input for this GetActivityMetrics Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve activity metrics for.
     * @return Withings_Measure_GetActivityMetrics_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetActivityMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetActivityMetrics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetActivityMetrics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetActivityMetrics execution.
     * @param Withings_Measure_GetActivityMetrics $choreo The choreography object for this execution.
     * @param Withings_Measure_GetActivityMetrics_Inputs|array $inputs (optional) Inputs as Withings_Measure_GetActivityMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Measure_GetActivityMetrics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Measure_GetActivityMetrics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetActivityMetrics execution.
     *
     * @return Withings_Measure_GetActivityMetrics_Results New results object.
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
     * Wraps results in appropriate results class for this GetActivityMetrics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Measure_GetActivityMetrics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Measure_GetActivityMetrics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetActivityMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetActivityMetrics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetActivityMetrics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Measure_GetActivityMetrics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetActivityMetrics execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves body metrics for the specified user.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetBodyMetrics extends Temboo_Choreography
{
    /**
     * Retrieves body metrics for the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMetrics Choreo.
     * @return Withings_Measure_GetBodyMetrics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Measure/GetBodyMetrics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyMetrics Choreo.
     *
     * @param Withings_Measure_GetBodyMetrics_Inputs|array $inputs (optional) Inputs as Withings_Measure_GetBodyMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Measure_GetBodyMetrics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Measure_GetBodyMetrics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Measure_GetBodyMetrics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Measure_GetBodyMetrics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetBodyMetrics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Measure_GetBodyMetrics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyMetrics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this GetBodyMetrics Choreo.
     *
     * @param int $value (optional, integer) Set to 2 to retrieve objectives or to 1 to retrieve actual measurements.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the DeviceType input for this GetBodyMetrics Choreo.
     *
     * @param int $value (optional, integer) Retrieves data for a particular device type. Specifying 1 will retrieve all body scale related measures and 0 will retrieve all user personal data entered at user creation time.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setDeviceType($value)
    {
        return $this->set('DeviceType', $value);
    }

    /**
     * Set the value for the EndDate input for this GetBodyMetrics Choreo.
     *
     * @param string $value (optional, date) Retrieves results dated before the specified EPOCH formatted date.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the LastUpdated input for this GetBodyMetrics Choreo.
     *
     * @param string $value (optional, date) Retrieves results added or modified since the specified EPOCH formatted date.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setLastUpdated($value)
    {
        return $this->set('LastUpdated', $value);
    }

    /**
     * Set the value for the Limit input for this GetBodyMetrics Choreo.
     *
     * @param int $value (optional, integer) Limits the number of measure groups returned in the result.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MeasurementType input for this GetBodyMetrics Choreo.
     *
     * @param int $value (optional, integer) Filters by the measurement type. Set to 1 to filter by weight or 4 to filter by height.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setMeasurementType($value)
    {
        return $this->set('MeasurementType', $value);
    }

    /**
     * Set the value for the Offset input for this GetBodyMetrics Choreo.
     *
     * @param int $value (optional, integer) Used in combination with the Limit parameter to page through results.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the StartDate input for this GetBodyMetrics Choreo.
     *
     * @param string $value (optional, date) Retrieves results dated after the specified EPOCH formatted date.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyMetrics Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve body metrics for.
     * @return Withings_Measure_GetBodyMetrics_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetBodyMetrics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyMetrics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMetrics execution.
     * @param Withings_Measure_GetBodyMetrics $choreo The choreography object for this execution.
     * @param Withings_Measure_GetBodyMetrics_Inputs|array $inputs (optional) Inputs as Withings_Measure_GetBodyMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Measure_GetBodyMetrics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Measure_GetBodyMetrics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyMetrics execution.
     *
     * @return Withings_Measure_GetBodyMetrics_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyMetrics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Measure_GetBodyMetrics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Measure_GetBodyMetrics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Measure_GetBodyMetrics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyMetrics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Measure_GetBodyMetrics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyMetrics execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves sleep data for the specified user.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Sleep_GetSleepMetrics extends Temboo_Choreography
{
    /**
     * Retrieves sleep data for the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetSleepMetrics Choreo.
     * @return Withings_Sleep_GetSleepMetrics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Sleep/GetSleepMetrics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSleepMetrics Choreo.
     *
     * @param Withings_Sleep_GetSleepMetrics_Inputs|array $inputs (optional) Inputs as Withings_Sleep_GetSleepMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Sleep_GetSleepMetrics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Sleep_GetSleepMetrics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSleepMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Sleep_GetSleepMetrics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Sleep_GetSleepMetrics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSleepMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Sleep_GetSleepMetrics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSleepMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Sleep_GetSleepMetrics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSleepMetrics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSleepMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSleepMetrics Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSleepMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSleepMetrics Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndDate input for this GetSleepMetrics Choreo.
     *
     * @param string $value (conditional, date) A number representing the desired end time of the log, expressed as the number of seconds since January 1, 1970 (epoch time). If not provided, this defaults to NOW().
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the StartDate input for this GetSleepMetrics Choreo.
     *
     * @param string $value (conditional, date) A number representing the desired start time of the log, expressed as the number of seconds since January 1, 1970 (epoch time). If not provided, this defaults to NOW() - 1 day.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the UserID input for this GetSleepMetrics Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve activity metrics for.
     * @return Withings_Sleep_GetSleepMetrics_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetSleepMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Sleep_GetSleepMetrics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSleepMetrics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSleepMetrics execution.
     * @param Withings_Sleep_GetSleepMetrics $choreo The choreography object for this execution.
     * @param Withings_Sleep_GetSleepMetrics_Inputs|array $inputs (optional) Inputs as Withings_Sleep_GetSleepMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Sleep_GetSleepMetrics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Sleep_GetSleepMetrics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSleepMetrics execution.
     *
     * @return Withings_Sleep_GetSleepMetrics_Results New results object.
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
     * Wraps results in appropriate results class for this GetSleepMetrics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Sleep_GetSleepMetrics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Sleep_GetSleepMetrics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSleepMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Sleep_GetSleepMetrics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSleepMetrics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Sleep_GetSleepMetrics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSleepMetrics execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to check whether the notification service was previously subscribed on a specific user and to retrieve the subscription expiration date.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_GetSubscription extends Temboo_Choreography
{
    /**
     * Allows your application to check whether the notification service was previously subscribed on a specific user and to retrieve the subscription expiration date.
     *
     * @param Temboo_Session $session The session that owns this GetSubscription Choreo.
     * @return Withings_Notification_GetSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Notification/GetSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSubscription Choreo.
     *
     * @param Withings_Notification_GetSubscription_Inputs|array $inputs (optional) Inputs as Withings_Notification_GetSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_GetSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Notification_GetSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_GetSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Notification_GetSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_GetSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_GetSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CallbackURL input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The URL used when subscribing to the notification service.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the UserID input for this GetSubscription Choreo.
     *
     * @param string $value (required, string) The ID of the user to verify a subscription for.
     * @return Withings_Notification_GetSubscription_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_GetSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSubscription execution.
     * @param Withings_Notification_GetSubscription $choreo The choreography object for this execution.
     * @param Withings_Notification_GetSubscription_Inputs|array $inputs (optional) Inputs as Withings_Notification_GetSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_GetSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Notification_GetSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubscription execution.
     *
     * @return Withings_Notification_GetSubscription_Results New results object.
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
     * Wraps results in appropriate results class for this GetSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Notification_GetSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Notification_GetSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_GetSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Notification_GetSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSubscription execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information regarding the specified user.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_User_GetUser extends Temboo_Choreography
{
    /**
     * Retrieves information regarding the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetUser Choreo.
     * @return Withings_User_GetUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/User/GetUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUser Choreo.
     *
     * @param Withings_User_GetUser_Inputs|array $inputs (optional) Inputs as Withings_User_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_User_GetUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_User_GetUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_User_GetUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_User_GetUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_User_GetUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_User_GetUser_Inputs New instance.
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
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUser Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUser Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUser Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUser Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the UserID input for this GetUser Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve.
     * @return Withings_User_GetUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_User_GetUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUser execution.
     * @param Withings_User_GetUser $choreo The choreography object for this execution.
     * @param Withings_User_GetUser_Inputs|array $inputs (optional) Inputs as Withings_User_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_User_GetUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_User_GetUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUser execution.
     *
     * @return Withings_User_GetUser_Results New results object.
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
     * @return Withings_User_GetUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_User_GetUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_User_GetUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_User_GetUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUser execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Withings_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Withings_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Withings_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Withings_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Withings_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Withings_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Withings_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Withings_OAuth_InitializeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Allows your application to list all the currently provisioned notification callbacks for a specific user and to retrieve the subscription expiration dates.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_ListSubscriptions extends Temboo_Choreography
{
    /**
     * Allows your application to list all the currently provisioned notification callbacks for a specific user and to retrieve the subscription expiration dates.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptions Choreo.
     * @return Withings_Notification_ListSubscriptions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Notification/ListSubscriptions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSubscriptions Choreo.
     *
     * @param Withings_Notification_ListSubscriptions_Inputs|array $inputs (optional) Inputs as Withings_Notification_ListSubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_ListSubscriptions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Notification_ListSubscriptions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_ListSubscriptions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Notification_ListSubscriptions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_ListSubscriptions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_ListSubscriptions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSubscriptions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListSubscriptions Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListSubscriptions Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Application input for this ListSubscriptions Choreo.
     *
     * @param int $value (optional, integer) Used to restrict the request to the given device type. Set to 1 for Bodyscale.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setApplication($value)
    {
        return $this->set('Application', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ListSubscriptions Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ListSubscriptions Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the UserID input for this ListSubscriptions Choreo.
     *
     * @param string $value (required, string) The ID of the user to list subscriptions for.
     * @return Withings_Notification_ListSubscriptions_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_ListSubscriptions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSubscriptions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptions execution.
     * @param Withings_Notification_ListSubscriptions $choreo The choreography object for this execution.
     * @param Withings_Notification_ListSubscriptions_Inputs|array $inputs (optional) Inputs as Withings_Notification_ListSubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_ListSubscriptions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Notification_ListSubscriptions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSubscriptions execution.
     *
     * @return Withings_Notification_ListSubscriptions_Results New results object.
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
     * Wraps results in appropriate results class for this ListSubscriptions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Notification_ListSubscriptions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Notification_ListSubscriptions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_ListSubscriptions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSubscriptions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Notification_ListSubscriptions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSubscriptions execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to revoke a previously subscribed notification.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_RevokeSubscription extends Temboo_Choreography
{
    /**
     * Allows your application to revoke a previously subscribed notification.
     *
     * @param Temboo_Session $session The session that owns this RevokeSubscription Choreo.
     * @return Withings_Notification_RevokeSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Notification/RevokeSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RevokeSubscription Choreo.
     *
     * @param Withings_Notification_RevokeSubscription_Inputs|array $inputs (optional) Inputs as Withings_Notification_RevokeSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_RevokeSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Notification_RevokeSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RevokeSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_RevokeSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Notification_RevokeSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RevokeSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_RevokeSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RevokeSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_RevokeSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RevokeSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Application input for this RevokeSubscription Choreo.
     *
     * @param int $value (optional, integer) Specifies the device type for which the notification is to be revoked. Set to 1 for Bodyscale.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setApplication($value)
    {
        return $this->set('Application', $value);
    }

    /**
     * Set the value for the CallbackURL input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The URL used when subscribing to the notification service.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the UserID input for this RevokeSubscription Choreo.
     *
     * @param string $value (required, string) The ID of the user to revoke a subscription for.
     * @return Withings_Notification_RevokeSubscription_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the RevokeSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_RevokeSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RevokeSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this RevokeSubscription execution.
     * @param Withings_Notification_RevokeSubscription $choreo The choreography object for this execution.
     * @param Withings_Notification_RevokeSubscription_Inputs|array $inputs (optional) Inputs as Withings_Notification_RevokeSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_RevokeSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Notification_RevokeSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RevokeSubscription execution.
     *
     * @return Withings_Notification_RevokeSubscription_Results New results object.
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
     * Wraps results in appropriate results class for this RevokeSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Notification_RevokeSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Notification_RevokeSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RevokeSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_RevokeSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RevokeSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Notification_RevokeSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RevokeSubscription execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to subscribe users to notifications. 
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_Subscribe extends Temboo_Choreography
{
    /**
     * Allows your application to subscribe users to notifications. 
     *
     * @param Temboo_Session $session The session that owns this Subscribe Choreo.
     * @return Withings_Notification_Subscribe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Withings/Notification/Subscribe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Subscribe Choreo.
     *
     * @param Withings_Notification_Subscribe_Inputs|array $inputs (optional) Inputs as Withings_Notification_Subscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_Subscribe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Withings_Notification_Subscribe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Subscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_Subscribe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Withings_Notification_Subscribe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Subscribe Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_Subscribe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Subscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Withings_Notification_Subscribe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Subscribe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Application input for this Subscribe Choreo.
     *
     * @param int $value (optional, integer) Specifies the device type for which the notification is to be activated. Set to 1 for Bodyscale.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setApplication($value)
    {
        return $this->set('Application', $value);
    }

    /**
     * Set the value for the CallbackURL input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The URL the API notification will be pushed to.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Comment input for this Subscribe Choreo.
     *
     * @param string $value (optional, string) A comment string used for a description to display to the user when presenting them with your notification setup.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Withings.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Withings.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the UserID input for this Subscribe Choreo.
     *
     * @param string $value (required, string) The ID of the user to setup a subscription for.
     * @return Withings_Notification_Subscribe_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Subscribe Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_Subscribe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Subscribe Choreo.
     *
     * @param Temboo_Session $session The session that owns this Subscribe execution.
     * @param Withings_Notification_Subscribe $choreo The choreography object for this execution.
     * @param Withings_Notification_Subscribe_Inputs|array $inputs (optional) Inputs as Withings_Notification_Subscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Withings_Notification_Subscribe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Withings_Notification_Subscribe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Subscribe execution.
     *
     * @return Withings_Notification_Subscribe_Results New results object.
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
     * Wraps results in appropriate results class for this Subscribe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Withings_Notification_Subscribe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Withings_Notification_Subscribe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Subscribe Choreo.
 *
 * @package Temboo
 * @subpackage Withings
 */
class Withings_Notification_Subscribe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Subscribe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Withings_Notification_Subscribe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Subscribe execution.
     *
     * @return string (json) The response from Withings.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>