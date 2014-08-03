<?php

/**
 * Temboo PHP SDK Highrise classes
 *
 * Execute Choreographies from the Temboo Highrise bundle.
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
 * @subpackage Highrise
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Creates a new contact record in your Highrise CRM.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_CreatePeople extends Temboo_Choreography
{
    /**
     * Creates a new contact record in your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this CreatePeople Choreo.
     * @return Highrise_CreatePeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Highrise/CreatePeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreatePeople Choreo.
     *
     * @param Highrise_CreatePeople_Inputs|array $inputs (optional) Inputs as Highrise_CreatePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_CreatePeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Highrise_CreatePeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_CreatePeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Highrise_CreatePeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_CreatePeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreatePeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_CreatePeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreatePeople Choreo.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Background input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the background field in Highrise
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setBackground($value)
    {
        return $this->set('Background', $value);
    }

    /**
     * Set the value for the CompanyName input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the company name field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the EmailAddress input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the email address field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the FirstName input for this CreatePeople Choreo.
     *
     * @param string $value (required, string) Corresponds to the first name field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the HomePhone input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the home phone field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setHomePhone($value)
    {
        return $this->set('HomePhone', $value);
    }

    /**
     * Set the value for the LastName input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the last name field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Password input for this CreatePeople Choreo.
     *
     * @param string $value (required, password) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Title input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the title field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this CreatePeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorkPhone input for this CreatePeople Choreo.
     *
     * @param string $value (optional, string) Corresponds to the work phone field in Highrise.
     * @return Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setWorkPhone($value)
    {
        return $this->set('WorkPhone', $value);
    }
}


/**
 * Execution object for the CreatePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_CreatePeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreatePeople execution.
     * @param Highrise_CreatePeople $choreo The choreography object for this execution.
     * @param Highrise_CreatePeople_Inputs|array $inputs (optional) Inputs as Highrise_CreatePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_CreatePeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Highrise_CreatePeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePeople execution.
     *
     * @return Highrise_CreatePeople_Results New results object.
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
     * Wraps results in appropriate results class for this CreatePeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Highrise_CreatePeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Highrise_CreatePeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreatePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_CreatePeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreatePeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Highrise_CreatePeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreatePeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified contact from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_DeletePeople extends Temboo_Choreography
{
    /**
     * Deletes a specified contact from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this DeletePeople Choreo.
     * @return Highrise_DeletePeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Highrise/DeletePeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeletePeople Choreo.
     *
     * @param Highrise_DeletePeople_Inputs|array $inputs (optional) Inputs as Highrise_DeletePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_DeletePeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Highrise_DeletePeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_DeletePeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Highrise_DeletePeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_DeletePeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeletePeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_DeletePeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeletePeople Choreo.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ContactID input for this DeletePeople Choreo.
     *
     * @param string $value (required, string) The ID number of the contact you want to delete. This is used to contruct the URL for the request.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setContactID($value)
    {
        return $this->set('ContactID', $value);
    }

    /**
     * Set the value for the Password input for this DeletePeople Choreo.
     *
     * @param string $value (required, password) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeletePeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeletePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_DeletePeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeletePeople execution.
     * @param Highrise_DeletePeople $choreo The choreography object for this execution.
     * @param Highrise_DeletePeople_Inputs|array $inputs (optional) Inputs as Highrise_DeletePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_DeletePeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Highrise_DeletePeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePeople execution.
     *
     * @return Highrise_DeletePeople_Results New results object.
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
     * Wraps results in appropriate results class for this DeletePeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Highrise_DeletePeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Highrise_DeletePeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeletePeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_DeletePeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeletePeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Highrise_DeletePeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeletePeople execution.
     *
     * @return string The response from Highrise. The delete people API method returns no XML, so this variable will contain no data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves contacts from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ListAllPeople extends Temboo_Choreography
{
    /**
     * Retrieves contacts from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this ListAllPeople Choreo.
     * @return Highrise_ListAllPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Highrise/ListAllPeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllPeople Choreo.
     *
     * @param Highrise_ListAllPeople_Inputs|array $inputs (optional) Inputs as Highrise_ListAllPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_ListAllPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Highrise_ListAllPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_ListAllPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Highrise_ListAllPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ListAllPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_ListAllPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ListAllPeople Choreo.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this ListAllPeople Choreo.
     *
     * @param string $value (required, password) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ListAllPeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListAllPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ListAllPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllPeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllPeople execution.
     * @param Highrise_ListAllPeople $choreo The choreography object for this execution.
     * @param Highrise_ListAllPeople_Inputs|array $inputs (optional) Inputs as Highrise_ListAllPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_ListAllPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Highrise_ListAllPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllPeople execution.
     *
     * @return Highrise_ListAllPeople_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Highrise_ListAllPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Highrise_ListAllPeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ListAllPeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllPeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Highrise_ListAllPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you search your Highrise CRM by specifying an email search criteria.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_SearchPeople extends Temboo_Choreography
{
    /**
     * Lets you search your Highrise CRM by specifying an email search criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchPeople Choreo.
     * @return Highrise_SearchPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Highrise/SearchPeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchPeople Choreo.
     *
     * @param Highrise_SearchPeople_Inputs|array $inputs (optional) Inputs as Highrise_SearchPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_SearchPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Highrise_SearchPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_SearchPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Highrise_SearchPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_SearchPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_SearchPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this SearchPeople Choreo.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the City input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the city field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the country field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the EmailAddress input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the email address field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the Password input for this SearchPeople Choreo.
     *
     * @param string $value (required, password) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Phone input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the phone field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the State input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the state field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Username input for this SearchPeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Zip input for this SearchPeople Choreo.
     *
     * @param string $value (optional, string) Allows you to search by the ZIP field in Highrise.
     * @return Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the SearchPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_SearchPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchPeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchPeople execution.
     * @param Highrise_SearchPeople $choreo The choreography object for this execution.
     * @param Highrise_SearchPeople_Inputs|array $inputs (optional) Inputs as Highrise_SearchPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_SearchPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Highrise_SearchPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchPeople execution.
     *
     * @return Highrise_SearchPeople_Results New results object.
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
     * Wraps results in appropriate results class for this SearchPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Highrise_SearchPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Highrise_SearchPeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_SearchPeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchPeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Highrise_SearchPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves contacts from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ShowPeople extends Temboo_Choreography
{
    /**
     * Retrieves contacts from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this ShowPeople Choreo.
     * @return Highrise_ShowPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Highrise/ShowPeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowPeople Choreo.
     *
     * @param Highrise_ShowPeople_Inputs|array $inputs (optional) Inputs as Highrise_ShowPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_ShowPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Highrise_ShowPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_ShowPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Highrise_ShowPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ShowPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Highrise_ShowPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ShowPeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ConactID input for this ShowPeople Choreo.
     *
     * @param int $value (required, integer) The ID of the contact you want to retrieve. This is used to construct the URL for the request.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setConactID($value)
    {
        return $this->set('ConactID', $value);
    }

    /**
     * Set the value for the Password input for this ShowPeople Choreo.
     *
     * @param string $value (required, password) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ShowPeople Choreo.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ShowPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowPeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowPeople execution.
     * @param Highrise_ShowPeople $choreo The choreography object for this execution.
     * @param Highrise_ShowPeople_Inputs|array $inputs (optional) Inputs as Highrise_ShowPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Highrise_ShowPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Highrise_ShowPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowPeople execution.
     *
     * @return Highrise_ShowPeople_Results New results object.
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
     * Wraps results in appropriate results class for this ShowPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Highrise_ShowPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Highrise_ShowPeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowPeople Choreo.
 *
 * @package Temboo
 * @subpackage Highrise
 */
class Highrise_ShowPeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowPeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Highrise_ShowPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>