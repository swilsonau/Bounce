<?php

/**
 * Temboo PHP SDK Salesforce classes
 *
 * Execute Choreographies from the Temboo Salesforce bundle.
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
 * @subpackage Salesforce
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Changes a user's password.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ChangePassword extends Temboo_Choreography
{
    /**
     * Changes a user's password.
     *
     * @param Temboo_Session $session The session that owns this ChangePassword Choreo.
     * @return Salesforce_Passwords_ChangePassword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Passwords/ChangePassword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ChangePassword Choreo.
     *
     * @param Salesforce_Passwords_ChangePassword_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_ChangePassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_ChangePassword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Passwords_ChangePassword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChangePassword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_ChangePassword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Passwords_ChangePassword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChangePassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ChangePassword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ChangePassword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_ChangePassword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChangePassword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ChangePassword Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ChangePassword Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ChangePassword Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ID input for this ChangePassword Choreo.
     *
     * @param string $value (required, string) The ID of the user whose password you want to change.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this ChangePassword Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the NewPassword input for this ChangePassword Choreo.
     *
     * @param string $value (required, string) The new password.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setNewPassword($value)
    {
        return $this->set('NewPassword', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ChangePassword Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ChangePassword_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ChangePassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ChangePassword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChangePassword Choreo.
     *
     * @param Temboo_Session $session The session that owns this ChangePassword execution.
     * @param Salesforce_Passwords_ChangePassword $choreo The choreography object for this execution.
     * @param Salesforce_Passwords_ChangePassword_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_ChangePassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_ChangePassword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Passwords_ChangePassword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChangePassword execution.
     *
     * @return Salesforce_Passwords_ChangePassword_Results New results object.
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
     * Wraps results in appropriate results class for this ChangePassword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Passwords_ChangePassword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Passwords_ChangePassword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ChangePassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ChangePassword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ChangePassword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Passwords_ChangePassword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ChangePassword execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ChangePassword execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this ChangePassword execution.
     *
     * @return int (integer) The response status code returned from Salesforce. A 204 is expected for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Creates a new Salesforce Object such as an individual Account, Contact, or Lead record.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateRecord extends Temboo_Choreography
{
    /**
     * Creates a new Salesforce Object such as an individual Account, Contact, or Lead record.
     *
     * @param Temboo_Session $session The session that owns this CreateRecord Choreo.
     * @return Salesforce_Objects_CreateRecord New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/CreateRecord/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateRecord Choreo.
     *
     * @param Salesforce_Objects_CreateRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_CreateRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_CreateRecord_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_CreateRecord_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_CreateRecord_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_CreateRecord_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateRecord_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_CreateRecord_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRecord input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SObject input for this CreateRecord Choreo.
     *
     * @param string $value (required, json) A JSON string containing the SObject properties you wish to set.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setSObject($value)
    {
        return $this->set('SObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateRecord Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this CreateRecord Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this CreateRecord Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this CreateRecord Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this CreateRecord Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateRecord Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this CreateRecord Choreo.
     *
     * @param string $value (required, string) The name of the Salesforce object type being created (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_CreateRecord_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the CreateRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateRecord_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRecord Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateRecord execution.
     * @param Salesforce_Objects_CreateRecord $choreo The choreography object for this execution.
     * @param Salesforce_Objects_CreateRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_CreateRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_CreateRecord_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_CreateRecord $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRecord execution.
     *
     * @return Salesforce_Objects_CreateRecord_Results New results object.
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
     * Wraps results in appropriate results class for this CreateRecord execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_CreateRecord_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_CreateRecord_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateRecord_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateRecord Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_CreateRecord_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateRecord execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ID" output from this CreateRecord execution.
     *
     * @return string (string) The id of the object that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getID()
    {
        return $this->get('ID');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this CreateRecord execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Deletes a Salesforce Object such as an individual Account, Contact, or Lead record.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecord extends Temboo_Choreography
{
    /**
     * Deletes a Salesforce Object such as an individual Account, Contact, or Lead record.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecord Choreo.
     * @return Salesforce_Objects_DeleteRecord New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/DeleteRecord/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRecord Choreo.
     *
     * @param Salesforce_Objects_DeleteRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DeleteRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DeleteRecord_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_DeleteRecord_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DeleteRecord_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_DeleteRecord_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecord_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DeleteRecord_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecord input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRecord Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteRecord Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteRecord Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ID input for this DeleteRecord Choreo.
     *
     * @param string $value (required, string) The id of the object to be deleted.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this DeleteRecord Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DeleteRecord Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SObjectName input for this DeleteRecord Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being deleted (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_DeleteRecord_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the DeleteRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecord_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecord Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecord execution.
     * @param Salesforce_Objects_DeleteRecord $choreo The choreography object for this execution.
     * @param Salesforce_Objects_DeleteRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DeleteRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DeleteRecord_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_DeleteRecord $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecord execution.
     *
     * @return Salesforce_Objects_DeleteRecord_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRecord execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_DeleteRecord_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_DeleteRecord_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecord_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRecord Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_DeleteRecord_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRecord execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DeleteRecord execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteRecord execution.
     *
     * @return int (integer) The response status code returned from Salesforce. A 204 is expected for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes specific field values from a specified record.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecordFields extends Temboo_Choreography
{
    /**
     * Deletes specific field values from a specified record.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecordFields Choreo.
     * @return Salesforce_Objects_DeleteRecordFields New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/DeleteRecordFields/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRecordFields Choreo.
     *
     * @param Salesforce_Objects_DeleteRecordFields_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DeleteRecordFields_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DeleteRecordFields_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_DeleteRecordFields_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecordFields Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_DeleteRecordFields_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecordFields Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecordFields_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRecordFields Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecordFields input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRecordFields Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteRecordFields Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteRecordFields Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this DeleteRecordFields Choreo.
     *
     * @param string $value (required, string) Comma-separated list of up to 10 field names.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ID input for this DeleteRecordFields Choreo.
     *
     * @param string $value (required, string) The id of the object that that is being modified.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this DeleteRecordFields Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DeleteRecordFields Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SObjectName input for this DeleteRecordFields Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being created (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_DeleteRecordFields_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the DeleteRecordFields Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecordFields_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecordFields Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecordFields execution.
     * @param Salesforce_Objects_DeleteRecordFields $choreo The choreography object for this execution.
     * @param Salesforce_Objects_DeleteRecordFields_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DeleteRecordFields_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DeleteRecordFields_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_DeleteRecordFields $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecordFields execution.
     *
     * @return Salesforce_Objects_DeleteRecordFields_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRecordFields execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_DeleteRecordFields_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_DeleteRecordFields_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRecordFields Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DeleteRecordFields_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRecordFields Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_DeleteRecordFields_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRecordFields execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DeleteRecordFields execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteRecordFields execution.
     *
     * @return int (integer) The response status code returned from Salesforce. A 204 is expected for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Describes the individual metadata at all levels for the specified object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObjectMetadata extends Temboo_Choreography
{
    /**
     * Describes the individual metadata at all levels for the specified object.
     *
     * @param Temboo_Session $session The session that owns this DescribeObjectMetadata Choreo.
     * @return Salesforce_Objects_DescribeObjectMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/DescribeObjectMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DescribeObjectMetadata Choreo.
     *
     * @param Salesforce_Objects_DescribeObjectMetadata_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DescribeObjectMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DescribeObjectMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_DescribeObjectMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DescribeObjectMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_DescribeObjectMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DescribeObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObjectMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DescribeObjectMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DescribeObjectMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this DescribeObjectMetadata Choreo.
     *
     * @param string $value (required, string) The name of the SObject to retrieve (e.g. Contact, Lead, Account, etc).
     * @return Salesforce_Objects_DescribeObjectMetadata_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the DescribeObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObjectMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DescribeObjectMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this DescribeObjectMetadata execution.
     * @param Salesforce_Objects_DescribeObjectMetadata $choreo The choreography object for this execution.
     * @param Salesforce_Objects_DescribeObjectMetadata_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DescribeObjectMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DescribeObjectMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_DescribeObjectMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DescribeObjectMetadata execution.
     *
     * @return Salesforce_Objects_DescribeObjectMetadata_Results New results object.
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
     * Wraps results in appropriate results class for this DescribeObjectMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_DescribeObjectMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_DescribeObjectMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DescribeObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObjectMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DescribeObjectMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_DescribeObjectMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DescribeObjectMetadata execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DescribeObjectMetadata execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Completes the OAuth process by retrieving a Salesforce access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Salesforce access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Salesforce_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Salesforce_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Salesforce.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Salesforce.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Salesforce_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Salesforce_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Salesforce_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Salesforce_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A token that may be used to obtain a new access token when the short-lived access token expires.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
}

/**
 * Retrieves the remaining query results using a query locator ID.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_GetNextResults extends Temboo_Choreography
{
    /**
     * Retrieves the remaining query results using a query locator ID.
     *
     * @param Temboo_Session $session The session that owns this GetNextResults Choreo.
     * @return Salesforce_Queries_GetNextResults New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Queries/GetNextResults/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNextResults Choreo.
     *
     * @param Salesforce_Queries_GetNextResults_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_GetNextResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_GetNextResults_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Queries_GetNextResults_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNextResults Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_GetNextResults_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Queries_GetNextResults_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNextResults Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_GetNextResults_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNextResults Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_GetNextResults_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNextResults input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetNextResults Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetNextResults Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetNextResults Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetNextResults Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the QueryLocator input for this GetNextResults Choreo.
     *
     * @param string $value (required, string) The query locator ID to use for retrieving the next batch of records. This ID is returned by the Query Choreo.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setQueryLocator($value)
    {
        return $this->set('QueryLocator', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetNextResults Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNextResults Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Queries_GetNextResults_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetNextResults Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_GetNextResults_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNextResults Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNextResults execution.
     * @param Salesforce_Queries_GetNextResults $choreo The choreography object for this execution.
     * @param Salesforce_Queries_GetNextResults_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_GetNextResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_GetNextResults_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Queries_GetNextResults $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNextResults execution.
     *
     * @return Salesforce_Queries_GetNextResults_Results New results object.
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
     * Wraps results in appropriate results class for this GetNextResults execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Queries_GetNextResults_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Queries_GetNextResults_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNextResults Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_GetNextResults_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNextResults Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Queries_GetNextResults_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNextResults execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetNextResults execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "NextQueryLocator" output from this GetNextResults execution.
     *
     * @return string (string) The next query locator to use when there are more results to retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextQueryLocator()
    {
        return $this->get('NextQueryLocator');
    }
}

/**
 * Retrieves the individual metadata for the specified object type such as a Contact, Lead, or Account object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObjectMetadata extends Temboo_Choreography
{
    /**
     * Retrieves the individual metadata for the specified object type such as a Contact, Lead, or Account object.
     *
     * @param Temboo_Session $session The session that owns this GetObjectMetadata Choreo.
     * @return Salesforce_Objects_GetObjectMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/GetObjectMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetObjectMetadata Choreo.
     *
     * @param Salesforce_Objects_GetObjectMetadata_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetObjectMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetObjectMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_GetObjectMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetObjectMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_GetObjectMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObjectMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetObjectMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetObjectMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetObjectMetadata Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetObjectMetadata Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetObjectMetadata Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetObjectMetadata Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this GetObjectMetadata Choreo.
     *
     * @param string $value (required, string) The name of the SObject to retrieve (e.g. Contact, Lead, Account, etc).
     * @return Salesforce_Objects_GetObjectMetadata_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the GetObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObjectMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetObjectMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetObjectMetadata execution.
     * @param Salesforce_Objects_GetObjectMetadata $choreo The choreography object for this execution.
     * @param Salesforce_Objects_GetObjectMetadata_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetObjectMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetObjectMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_GetObjectMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetObjectMetadata execution.
     *
     * @return Salesforce_Objects_GetObjectMetadata_Results New results object.
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
     * Wraps results in appropriate results class for this GetObjectMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_GetObjectMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_GetObjectMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetObjectMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObjectMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetObjectMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_GetObjectMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetObjectMetadata execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetObjectMetadata execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Gets information on a user's password.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_GetPasswordInfo extends Temboo_Choreography
{
    /**
     * Gets information on a user's password.
     *
     * @param Temboo_Session $session The session that owns this GetPasswordInfo Choreo.
     * @return Salesforce_Passwords_GetPasswordInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Passwords/GetPasswordInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPasswordInfo Choreo.
     *
     * @param Salesforce_Passwords_GetPasswordInfo_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_GetPasswordInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_GetPasswordInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Passwords_GetPasswordInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPasswordInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Passwords_GetPasswordInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPasswordInfo Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_GetPasswordInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPasswordInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPasswordInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetPasswordInfo Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetPasswordInfo Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetPasswordInfo Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ID input for this GetPasswordInfo Choreo.
     *
     * @param string $value (required, string) The ID of the user you're getting info for.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetPasswordInfo Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetPasswordInfo Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPasswordInfo Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Passwords_GetPasswordInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetPasswordInfo Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_GetPasswordInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPasswordInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPasswordInfo execution.
     * @param Salesforce_Passwords_GetPasswordInfo $choreo The choreography object for this execution.
     * @param Salesforce_Passwords_GetPasswordInfo_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_GetPasswordInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_GetPasswordInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Passwords_GetPasswordInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPasswordInfo execution.
     *
     * @return Salesforce_Passwords_GetPasswordInfo_Results New results object.
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
     * Wraps results in appropriate results class for this GetPasswordInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Passwords_GetPasswordInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Passwords_GetPasswordInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPasswordInfo Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_GetPasswordInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPasswordInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Passwords_GetPasswordInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPasswordInfo execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetPasswordInfo execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves a Salesforce Object such as an individual Account, Contact, or Lead record.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecord extends Temboo_Choreography
{
    /**
     * Retrieves a Salesforce Object such as an individual Account, Contact, or Lead record.
     *
     * @param Temboo_Session $session The session that owns this GetRecord Choreo.
     * @return Salesforce_Objects_GetRecord New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/GetRecord/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecord Choreo.
     *
     * @param Salesforce_Objects_GetRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetRecord_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_GetRecord_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetRecord_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_GetRecord_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecord_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetRecord_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecord input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRecord Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetRecord Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetRecord Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this GetRecord Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of up to 10 field names.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ID input for this GetRecord Choreo.
     *
     * @param string $value (required, string) The id of the object that you want to retrieve.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetRecord Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetRecord Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecord Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this GetRecord Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being retrieved (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_GetRecord_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the GetRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecord_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecord Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecord execution.
     * @param Salesforce_Objects_GetRecord $choreo The choreography object for this execution.
     * @param Salesforce_Objects_GetRecord_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetRecord_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_GetRecord $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecord execution.
     *
     * @return Salesforce_Objects_GetRecord_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecord execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_GetRecord_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_GetRecord_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecord Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecord_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecord Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_GetRecord_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecord execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetRecord execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieve records with a specific external ID.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecordByExternalID extends Temboo_Choreography
{
    /**
     * Retrieve records with a specific external ID.
     *
     * @param Temboo_Session $session The session that owns this GetRecordByExternalID Choreo.
     * @return Salesforce_Objects_GetRecordByExternalID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/GetRecordByExternalID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecordByExternalID Choreo.
     *
     * @param Salesforce_Objects_GetRecordByExternalID_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetRecordByExternalID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetRecordByExternalID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_GetRecordByExternalID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecordByExternalID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_GetRecordByExternalID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecordByExternalID Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecordByExternalID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecordByExternalID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecordByExternalID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the FieldName input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) FieldName for external ID
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setFieldName($value)
    {
        return $this->set('FieldName', $value);
    }

    /**
     * Set the value for the FieldValue input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) Field value for external ID
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setFieldValue($value)
    {
        return $this->set('FieldValue', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this GetRecordByExternalID Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being created (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_GetRecordByExternalID_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the GetRecordByExternalID Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecordByExternalID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecordByExternalID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecordByExternalID execution.
     * @param Salesforce_Objects_GetRecordByExternalID $choreo The choreography object for this execution.
     * @param Salesforce_Objects_GetRecordByExternalID_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetRecordByExternalID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetRecordByExternalID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_GetRecordByExternalID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecordByExternalID execution.
     *
     * @return Salesforce_Objects_GetRecordByExternalID_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecordByExternalID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_GetRecordByExternalID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_GetRecordByExternalID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecordByExternalID Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetRecordByExternalID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecordByExternalID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_GetRecordByExternalID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecordByExternalID execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetRecordByExternalID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * List available resources for a specified API version.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Resources_GetResources extends Temboo_Choreography
{
    /**
     * List available resources for a specified API version.
     *
     * @param Temboo_Session $session The session that owns this GetResources Choreo.
     * @return Salesforce_Resources_GetResources New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Resources/GetResources/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetResources Choreo.
     *
     * @param Salesforce_Resources_GetResources_Inputs|array $inputs (optional) Inputs as Salesforce_Resources_GetResources_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Resources_GetResources_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Resources_GetResources_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetResources Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Resources_GetResources_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Resources_GetResources_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetResources Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Resources_GetResources_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetResources Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Resources_GetResources_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetResources input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetResources Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetResources Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetResources Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetResources Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetResources Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetResources Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Version input for this GetResources Choreo.
     *
     * @param string $value (optional, string) The API version number to retrieve resources for. Defaults to "v28.0".
     * @return Salesforce_Resources_GetResources_Inputs For method chaining.
     */
    public function setVersion($value)
    {
        return $this->set('Version', $value);
    }
}


/**
 * Execution object for the GetResources Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Resources_GetResources_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetResources Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetResources execution.
     * @param Salesforce_Resources_GetResources $choreo The choreography object for this execution.
     * @param Salesforce_Resources_GetResources_Inputs|array $inputs (optional) Inputs as Salesforce_Resources_GetResources_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Resources_GetResources_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Resources_GetResources $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetResources execution.
     *
     * @return Salesforce_Resources_GetResources_Results New results object.
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
     * Wraps results in appropriate results class for this GetResources execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Resources_GetResources_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Resources_GetResources_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetResources Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Resources_GetResources_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetResources Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Resources_GetResources_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetResources execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetResources execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Salesforce_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Salesforce_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Salesforce.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the Display input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Tailors the login page to the user's device type. Currently the only values supported are:  page, popup and touch.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDisplay($value)
    {
        return $this->set('Display', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Immediate input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Avoid interacting with the user.  false - Prompt the user for login and approval (default),  true - If the user is currently logged in and has previously given approval, the approval step is skipped.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setImmediate($value)
    {
        return $this->set('Immediate', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A space separated list of scope values.  Supported values are: api, chatter_api, full, id, refresh_token, visualforce, web.  defaults to: id, api, refresh_token.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Salesforce_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Salesforce_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Salesforce_OAuth_InitializeOAuth_Results New results object.
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
     * @return Salesforce_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Results New instance.
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
}

/**
 * Lists the available objects and their metadata for your organization's data.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjectTypes extends Temboo_Choreography
{
    /**
     * Lists the available objects and their metadata for your organization's data.
     *
     * @param Temboo_Session $session The session that owns this ListObjectTypes Choreo.
     * @return Salesforce_Objects_ListObjectTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/ListObjectTypes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListObjectTypes Choreo.
     *
     * @param Salesforce_Objects_ListObjectTypes_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_ListObjectTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_ListObjectTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_ListObjectTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListObjectTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_ListObjectTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_ListObjectTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListObjectTypes Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjectTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListObjectTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_ListObjectTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListObjectTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListObjectTypes Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListObjectTypes Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListObjectTypes Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this ListObjectTypes Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListObjectTypes Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListObjectTypes Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Objects_ListObjectTypes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListObjectTypes Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjectTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListObjectTypes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListObjectTypes execution.
     * @param Salesforce_Objects_ListObjectTypes $choreo The choreography object for this execution.
     * @param Salesforce_Objects_ListObjectTypes_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_ListObjectTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_ListObjectTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_ListObjectTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListObjectTypes execution.
     *
     * @return Salesforce_Objects_ListObjectTypes_Results New results object.
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
     * Wraps results in appropriate results class for this ListObjectTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_ListObjectTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_ListObjectTypes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListObjectTypes Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjectTypes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListObjectTypes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_ListObjectTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListObjectTypes execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListObjectTypes execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Lists summary information about each Salesforce version currently available, including the version, label, and a link to each version's root.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_ListVersions extends Temboo_Choreography
{
    /**
     * Lists summary information about each Salesforce version currently available, including the version, label, and a link to each version's root.
     *
     * @param Temboo_Session $session The session that owns this ListVersions Choreo.
     * @return Salesforce_Versions_ListVersions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Versions/ListVersions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListVersions Choreo.
     *
     * @param Salesforce_Versions_ListVersions_Inputs|array $inputs (optional) Inputs as Salesforce_Versions_ListVersions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Versions_ListVersions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Versions_ListVersions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListVersions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Versions_ListVersions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Versions_ListVersions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListVersions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_ListVersions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListVersions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Versions_ListVersions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListVersions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Versions_ListVersions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Versions_ListVersions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the InstanceName input for this ListVersions Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Versions_ListVersions_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListVersions Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Versions_ListVersions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListVersions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_ListVersions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListVersions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListVersions execution.
     * @param Salesforce_Versions_ListVersions $choreo The choreography object for this execution.
     * @param Salesforce_Versions_ListVersions_Inputs|array $inputs (optional) Inputs as Salesforce_Versions_ListVersions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Versions_ListVersions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Versions_ListVersions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListVersions execution.
     *
     * @return Salesforce_Versions_ListVersions_Results New results object.
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
     * Wraps results in appropriate results class for this ListVersions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Versions_ListVersions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Versions_ListVersions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListVersions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_ListVersions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListVersions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Versions_ListVersions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListVersions execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Executes the specified SOQL query.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query extends Temboo_Choreography
{
    /**
     * Executes the specified SOQL query.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Salesforce_Queries_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Queries/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Salesforce_Queries_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Queries_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Queries_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Query Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Query Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Query Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this Query Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this Query Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Query Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SOQL input for this Query Choreo.
     *
     * @param string $value (required, string) The SOQL statement used to retrieve the set of records matching a specific criteria (e.g. select FirstName, LastName from Lead limit 1).
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setSOQL($value)
    {
        return $this->set('SOQL', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Salesforce_Queries_Query $choreo The choreography object for this execution.
     * @param Salesforce_Queries_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Queries_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Salesforce_Queries_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Queries_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Queries_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Queries_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Query execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "QueryLocator" output from this Query execution.
     *
     * @return string (string) The query locator ID that can be used to retrieve the next batch of records. This will only be present when more than 2000 records meet the criteria of a query causing the response to be truncated.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getQueryLocator()
    {
        return $this->get('QueryLocator');
    }
}

/**
 * Resets a user's password to new randomized password.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ResetPassword extends Temboo_Choreography
{
    /**
     * Resets a user's password to new randomized password.
     *
     * @param Temboo_Session $session The session that owns this ResetPassword Choreo.
     * @return Salesforce_Passwords_ResetPassword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Passwords/ResetPassword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ResetPassword Choreo.
     *
     * @param Salesforce_Passwords_ResetPassword_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_ResetPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_ResetPassword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Passwords_ResetPassword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ResetPassword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_ResetPassword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Passwords_ResetPassword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ResetPassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ResetPassword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ResetPassword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Passwords_ResetPassword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ResetPassword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ResetPassword Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ResetPassword Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ResetPassword Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ID input for this ResetPassword Choreo.
     *
     * @param string $value (required, string) The ID of the user whos password you are resetting.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this ResetPassword Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ResetPassword Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ResetPassword Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Passwords_ResetPassword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ResetPassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ResetPassword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ResetPassword Choreo.
     *
     * @param Temboo_Session $session The session that owns this ResetPassword execution.
     * @param Salesforce_Passwords_ResetPassword $choreo The choreography object for this execution.
     * @param Salesforce_Passwords_ResetPassword_Inputs|array $inputs (optional) Inputs as Salesforce_Passwords_ResetPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Passwords_ResetPassword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Passwords_ResetPassword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ResetPassword execution.
     *
     * @return Salesforce_Passwords_ResetPassword_Results New results object.
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
     * Wraps results in appropriate results class for this ResetPassword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Passwords_ResetPassword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Passwords_ResetPassword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ResetPassword Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Passwords_ResetPassword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ResetPassword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Passwords_ResetPassword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ResetPassword execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ResetPassword execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "NewPassword" output from this ResetPassword execution.
     *
     * @return string (string) New password returned from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewPassword()
    {
        return $this->get('NewPassword');
    }
}

/**
 * Executes the specified SOSL search.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_Search extends Temboo_Choreography
{
    /**
     * Executes the specified SOSL search.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Salesforce_Searching_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Searching/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Salesforce_Searching_Search_Inputs|array $inputs (optional) Inputs as Salesforce_Searching_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Searching_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Searching_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Searching_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Searching_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Searching_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Search Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Search Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this Search Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this Search Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Search Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SOSL input for this Search Choreo.
     *
     * @param string $value (required, string) The SOSL statement used to retrieve the set of records matching a specific criteria (e.g. FIND {joe})
     * @return Salesforce_Searching_Search_Inputs For method chaining.
     */
    public function setSOSL($value)
    {
        return $this->set('SOSL', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Salesforce_Searching_Search $choreo The choreography object for this execution.
     * @param Salesforce_Searching_Search_Inputs|array $inputs (optional) Inputs as Salesforce_Searching_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Searching_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Searching_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Salesforce_Searching_Search_Results New results object.
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
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Searching_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Searching_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Searching_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Search execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Executes the specified SOSL search in the default global search scope of a logged-in user.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_SearchScopeAndOrder extends Temboo_Choreography
{
    /**
     * Executes the specified SOSL search in the default global search scope of a logged-in user.
     *
     * @param Temboo_Session $session The session that owns this SearchScopeAndOrder Choreo.
     * @return Salesforce_Searching_SearchScopeAndOrder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Searching/SearchScopeAndOrder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchScopeAndOrder Choreo.
     *
     * @param Salesforce_Searching_SearchScopeAndOrder_Inputs|array $inputs (optional) Inputs as Salesforce_Searching_SearchScopeAndOrder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Searching_SearchScopeAndOrder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Searching_SearchScopeAndOrder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchScopeAndOrder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Searching_SearchScopeAndOrder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchScopeAndOrder Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_SearchScopeAndOrder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchScopeAndOrder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchScopeAndOrder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchScopeAndOrder Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Salesforce_Searching_SearchScopeAndOrder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchScopeAndOrder Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_SearchScopeAndOrder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchScopeAndOrder Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchScopeAndOrder execution.
     * @param Salesforce_Searching_SearchScopeAndOrder $choreo The choreography object for this execution.
     * @param Salesforce_Searching_SearchScopeAndOrder_Inputs|array $inputs (optional) Inputs as Salesforce_Searching_SearchScopeAndOrder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Searching_SearchScopeAndOrder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Searching_SearchScopeAndOrder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchScopeAndOrder execution.
     *
     * @return Salesforce_Searching_SearchScopeAndOrder_Results New results object.
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
     * Wraps results in appropriate results class for this SearchScopeAndOrder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Searching_SearchScopeAndOrder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Searching_SearchScopeAndOrder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchScopeAndOrder Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Searching_SearchScopeAndOrder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchScopeAndOrder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Searching_SearchScopeAndOrder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchScopeAndOrder execution.
     *
     * @return string The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this SearchScopeAndOrder execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

?>