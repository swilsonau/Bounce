<?php

/**
 * Temboo PHP SDK Zendesk classes
 *
 * Execute Choreographies from the Temboo Zendesk bundle.
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
 * @subpackage Zendesk
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows an agent to add new identities for a given user ID. 
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentity extends Temboo_Choreography
{
    /**
     * Allows an agent to add new identities for a given user ID. 
     *
     * @param Temboo_Session $session The session that owns this AddUserIdentity Choreo.
     * @return Zendesk_UserIdentities_AddUserIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/AddUserIdentity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddUserIdentity Choreo.
     *
     * @param Zendesk_UserIdentities_AddUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_AddUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_AddUserIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_AddUserIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_AddUserIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddUserIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this AddUserIdentity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this AddUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Identity input for this AddUserIdentity Choreo.
     *
     * @param string $value (required, string) The unique idenity (e.g.  test@test.com, test@gmail.com, screen_name)
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Password input for this AddUserIdentity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this AddUserIdentity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Type input for this AddUserIdentity Choreo.
     *
     * @param string $value (conditional, string) Type of identity to add (e.g. email, facebook, twitter, google)
     * @return Zendesk_UserIdentities_AddUserIdentity_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the AddUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddUserIdentity Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddUserIdentity execution.
     * @param Zendesk_UserIdentities_AddUserIdentity $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_AddUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_AddUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_AddUserIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_AddUserIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddUserIdentity execution.
     *
     * @return Zendesk_UserIdentities_AddUserIdentity_Results New results object.
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
     * Wraps results in appropriate results class for this AddUserIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_AddUserIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_AddUserIdentity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddUserIdentity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_AddUserIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddUserIdentity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 *  Allows an end-user  to add new identities for a given user ID.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentityByEndUser extends Temboo_Choreography
{
    /**
     *  Allows an end-user  to add new identities for a given user ID.
     *
     * @param Temboo_Session $session The session that owns this AddUserIdentityByEndUser Choreo.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/AddUserIdentityByEndUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddUserIdentityByEndUser Choreo.
     *
     * @param Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_AddUserIdentityByEndUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddUserIdentityByEndUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddUserIdentityByEndUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddUserIdentityByEndUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddUserIdentityByEndUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Identity input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (required, string) The unique idenity (e.g.  test@test.com, test@gmail.com, screen_name)
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Password input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Type input for this AddUserIdentityByEndUser Choreo.
     *
     * @param string $value (conditional, string) Type of identity to add (e.g. email, facebook, twitter, google)
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the AddUserIdentityByEndUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentityByEndUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddUserIdentityByEndUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddUserIdentityByEndUser execution.
     * @param Zendesk_UserIdentities_AddUserIdentityByEndUser $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_AddUserIdentityByEndUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_AddUserIdentityByEndUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddUserIdentityByEndUser execution.
     *
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Results New results object.
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
     * Wraps results in appropriate results class for this AddUserIdentityByEndUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_AddUserIdentityByEndUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddUserIdentityByEndUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_AddUserIdentityByEndUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddUserIdentityByEndUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_AddUserIdentityByEndUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddUserIdentityByEndUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Applies a given macro to all applicable tickets.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToAllTickets extends Temboo_Choreography
{
    /**
     * Applies a given macro to all applicable tickets.
     *
     * @param Temboo_Session $session The session that owns this ApplyMacroToAllTickets Choreo.
     * @return Zendesk_Macros_ApplyMacroToAllTickets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Macros/ApplyMacroToAllTickets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ApplyMacroToAllTickets Choreo.
     *
     * @param Zendesk_Macros_ApplyMacroToAllTickets_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ApplyMacroToAllTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Macros_ApplyMacroToAllTickets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApplyMacroToAllTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Macros_ApplyMacroToAllTickets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApplyMacroToAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToAllTickets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ApplyMacroToAllTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApplyMacroToAllTickets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ApplyMacroToAllTickets Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the MacroID input for this ApplyMacroToAllTickets Choreo.
     *
     * @param int $value (required, integer) The ID of the macro to apply.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function setMacroID($value)
    {
        return $this->set('MacroID', $value);
    }

    /**
     * Set the value for the Password input for this ApplyMacroToAllTickets Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ApplyMacroToAllTickets Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ApplyMacroToAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToAllTickets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApplyMacroToAllTickets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ApplyMacroToAllTickets execution.
     * @param Zendesk_Macros_ApplyMacroToAllTickets $choreo The choreography object for this execution.
     * @param Zendesk_Macros_ApplyMacroToAllTickets_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ApplyMacroToAllTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Macros_ApplyMacroToAllTickets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApplyMacroToAllTickets execution.
     *
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Results New results object.
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
     * Wraps results in appropriate results class for this ApplyMacroToAllTickets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Macros_ApplyMacroToAllTickets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ApplyMacroToAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToAllTickets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ApplyMacroToAllTickets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Macros_ApplyMacroToAllTickets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ApplyMacroToAllTickets execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Applies a macro to a given ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToTicket extends Temboo_Choreography
{
    /**
     * Applies a macro to a given ticket.
     *
     * @param Temboo_Session $session The session that owns this ApplyMacroToTicket Choreo.
     * @return Zendesk_Macros_ApplyMacroToTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Macros/ApplyMacroToTicket/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ApplyMacroToTicket Choreo.
     *
     * @param Zendesk_Macros_ApplyMacroToTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ApplyMacroToTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ApplyMacroToTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Macros_ApplyMacroToTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApplyMacroToTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Macros_ApplyMacroToTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApplyMacroToTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ApplyMacroToTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApplyMacroToTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ApplyMacroToTicket Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the MacroID input for this ApplyMacroToTicket Choreo.
     *
     * @param int $value (required, integer) The ID of the macro to apply.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setMacroID($value)
    {
        return $this->set('MacroID', $value);
    }

    /**
     * Set the value for the Password input for this ApplyMacroToTicket Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ApplyMacroToTicket Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TicketID input for this ApplyMacroToTicket Choreo.
     *
     * @param string $value (required, string) The ID of the ticket.
     * @return Zendesk_Macros_ApplyMacroToTicket_Inputs For method chaining.
     */
    public function setTicketID($value)
    {
        return $this->set('TicketID', $value);
    }
}


/**
 * Execution object for the ApplyMacroToTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApplyMacroToTicket Choreo.
     *
     * @param Temboo_Session $session The session that owns this ApplyMacroToTicket execution.
     * @param Zendesk_Macros_ApplyMacroToTicket $choreo The choreography object for this execution.
     * @param Zendesk_Macros_ApplyMacroToTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ApplyMacroToTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ApplyMacroToTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Macros_ApplyMacroToTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApplyMacroToTicket execution.
     *
     * @return Zendesk_Macros_ApplyMacroToTicket_Results New results object.
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
     * Wraps results in appropriate results class for this ApplyMacroToTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Macros_ApplyMacroToTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Macros_ApplyMacroToTicket_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ApplyMacroToTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ApplyMacroToTicket_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ApplyMacroToTicket Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Macros_ApplyMacroToTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ApplyMacroToTicket execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an array of organizations whose name starts with the value specified in the name parameter.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_AutocompleteOrganizationName extends Temboo_Choreography
{
    /**
     * Returns an array of organizations whose name starts with the value specified in the name parameter.
     *
     * @param Temboo_Session $session The session that owns this AutocompleteOrganizationName Choreo.
     * @return Zendesk_Organizations_AutocompleteOrganizationName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/AutocompleteOrganizationName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AutocompleteOrganizationName Choreo.
     *
     * @param Zendesk_Organizations_AutocompleteOrganizationName_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_AutocompleteOrganizationName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_AutocompleteOrganizationName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AutocompleteOrganizationName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_AutocompleteOrganizationName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AutocompleteOrganizationName Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_AutocompleteOrganizationName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AutocompleteOrganizationName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AutocompleteOrganizationName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this AutocompleteOrganizationName Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Name input for this AutocompleteOrganizationName Choreo.
     *
     * @param string $value (required, string) Prefix used to generate a list of Organization names. Must be at least 2 characters long.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this AutocompleteOrganizationName Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this AutocompleteOrganizationName Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the AutocompleteOrganizationName Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_AutocompleteOrganizationName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AutocompleteOrganizationName Choreo.
     *
     * @param Temboo_Session $session The session that owns this AutocompleteOrganizationName execution.
     * @param Zendesk_Organizations_AutocompleteOrganizationName $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_AutocompleteOrganizationName_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_AutocompleteOrganizationName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_AutocompleteOrganizationName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AutocompleteOrganizationName execution.
     *
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Results New results object.
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
     * Wraps results in appropriate results class for this AutocompleteOrganizationName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_AutocompleteOrganizationName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AutocompleteOrganizationName Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_AutocompleteOrganizationName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AutocompleteOrganizationName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_AutocompleteOrganizationName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AutocompleteOrganizationName execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Changes a comment from public to private.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate extends Temboo_Choreography
{
    /**
     * Changes a comment from public to private.
     *
     * @param Temboo_Session $session The session that owns this ChangeCommentFromPublicToPrivate Choreo.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketAudits/ChangeCommentFromPublicToPrivate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChangeCommentFromPublicToPrivate Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChangeCommentFromPublicToPrivate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuditID input for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param string $value (required, string) The ID of the audit to make private.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setAuditID($value)
    {
        return $this->set('AuditID', $value);
    }

    /**
     * Set the value for the Email input for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TicketID input for this ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param string $value (required, string) The ID of the ticket associated with the audit.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs For method chaining.
     */
    public function setTicketID($value)
    {
        return $this->set('TicketID', $value);
    }
}


/**
 * Execution object for the ChangeCommentFromPublicToPrivate Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param Temboo_Session $session The session that owns this ChangeCommentFromPublicToPrivate execution.
     * @param Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate $choreo The choreography object for this execution.
     * @param Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChangeCommentFromPublicToPrivate execution.
     *
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Results New results object.
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
     * Wraps results in appropriate results class for this ChangeCommentFromPublicToPrivate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ChangeCommentFromPublicToPrivate Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ChangeCommentFromPublicToPrivate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketAudits_ChangeCommentFromPublicToPrivate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ChangeCommentFromPublicToPrivate execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this ChangeCommentFromPublicToPrivate execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Creates a new group.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_CreateGroup extends Temboo_Choreography
{
    /**
     * Creates a new group.
     *
     * @param Temboo_Session $session The session that owns this CreateGroup Choreo.
     * @return Zendesk_Groups_CreateGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/CreateGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateGroup Choreo.
     *
     * @param Zendesk_Groups_CreateGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_CreateGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_CreateGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_CreateGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_CreateGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_CreateGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_CreateGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_CreateGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this CreateGroup Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the GroupName input for this CreateGroup Choreo.
     *
     * @param string $value (required, string) The name of the group to create.
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function setGroupName($value)
    {
        return $this->set('GroupName', $value);
    }

    /**
     * Set the value for the Password input for this CreateGroup Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateGroup Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_CreateGroup_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the CreateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_CreateGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateGroup execution.
     * @param Zendesk_Groups_CreateGroup $choreo The choreography object for this execution.
     * @param Zendesk_Groups_CreateGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_CreateGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_CreateGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_CreateGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateGroup execution.
     *
     * @return Zendesk_Groups_CreateGroup_Results New results object.
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
     * Wraps results in appropriate results class for this CreateGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_CreateGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_CreateGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_CreateGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_CreateGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateGroup execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create multiple organizations with a single request. 
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateManyOrganizations extends Temboo_Choreography
{
    /**
     * Create multiple organizations with a single request. 
     *
     * @param Temboo_Session $session The session that owns this CreateManyOrganizations Choreo.
     * @return Zendesk_Organizations_CreateManyOrganizations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/CreateManyOrganizations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateManyOrganizations Choreo.
     *
     * @param Zendesk_Organizations_CreateManyOrganizations_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_CreateManyOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_CreateManyOrganizations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_CreateManyOrganizations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateManyOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_CreateManyOrganizations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateManyOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateManyOrganizations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateManyOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateManyOrganizations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OrganizationData input for this CreateManyOrganizations Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing an array of organization properties you wish to set. This can used when you need to set multiple properties.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setOrganizationData($value)
    {
        return $this->set('OrganizationData', $value);
    }

    /**
     * Set the value for the Email input for this CreateManyOrganizations Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Names input for this CreateManyOrganizations Choreo.
     *
     * @param string $value (conditional, string) Comma-seperated list of up to 10  organization names to create.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setNames($value)
    {
        return $this->set('Names', $value);
    }

    /**
     * Set the value for the Password input for this CreateManyOrganizations Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateManyOrganizations Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_CreateManyOrganizations_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the CreateManyOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateManyOrganizations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateManyOrganizations Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateManyOrganizations execution.
     * @param Zendesk_Organizations_CreateManyOrganizations $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_CreateManyOrganizations_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_CreateManyOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_CreateManyOrganizations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_CreateManyOrganizations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateManyOrganizations execution.
     *
     * @return Zendesk_Organizations_CreateManyOrganizations_Results New results object.
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
     * Wraps results in appropriate results class for this CreateManyOrganizations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_CreateManyOrganizations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_CreateManyOrganizations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateManyOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateManyOrganizations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateManyOrganizations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_CreateManyOrganizations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateManyOrganizations execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates many new users at one time.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateManyUsers extends Temboo_Choreography
{
    /**
     * Creates many new users at one time.
     *
     * @param Temboo_Session $session The session that owns this CreateManyUsers Choreo.
     * @return Zendesk_Users_CreateManyUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/CreateManyUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateManyUsers Choreo.
     *
     * @param Zendesk_Users_CreateManyUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_CreateManyUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_CreateManyUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_CreateManyUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateManyUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_CreateManyUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_CreateManyUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateManyUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateManyUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateManyUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_CreateManyUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateManyUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this CreateManyUsers Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this CreateManyUsers Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateManyUsers Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Users input for this CreateManyUsers Choreo.
     *
     * @param string $value (required, json) A JSON-formatted string containing an array of user properties you wish to set.
     * @return Zendesk_Users_CreateManyUsers_Inputs For method chaining.
     */
    public function setUsers($value)
    {
        return $this->set('Users', $value);
    }
}


/**
 * Execution object for the CreateManyUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateManyUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateManyUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateManyUsers execution.
     * @param Zendesk_Users_CreateManyUsers $choreo The choreography object for this execution.
     * @param Zendesk_Users_CreateManyUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_CreateManyUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_CreateManyUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_CreateManyUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateManyUsers execution.
     *
     * @return Zendesk_Users_CreateManyUsers_Results New results object.
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
     * Wraps results in appropriate results class for this CreateManyUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_CreateManyUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_CreateManyUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateManyUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateManyUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateManyUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_CreateManyUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateManyUsers execution.
     *
     * @return string (json) 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create an organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateOrganization extends Temboo_Choreography
{
    /**
     * Create an organization.
     *
     * @param Temboo_Session $session The session that owns this CreateOrganization Choreo.
     * @return Zendesk_Organizations_CreateOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/CreateOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateOrganization Choreo.
     *
     * @param Zendesk_Organizations_CreateOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_CreateOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_CreateOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_CreateOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_CreateOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_CreateOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_CreateOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OrganizationData input for this CreateOrganization Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the organization properties you wish to set. This can used when you need to set multiple properties.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setOrganizationData($value)
    {
        return $this->set('OrganizationData', $value);
    }

    /**
     * Set the value for the Email input for this CreateOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Name input for this CreateOrganization Choreo.
     *
     * @param string $value (conditional, string) Name of the organization to create.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this CreateOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_CreateOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the CreateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateOrganization execution.
     * @param Zendesk_Organizations_CreateOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_CreateOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_CreateOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_CreateOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_CreateOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateOrganization execution.
     *
     * @return Zendesk_Organizations_CreateOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this CreateOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_CreateOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_CreateOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_CreateOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_CreateOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new end-user request.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_CreateRequest extends Temboo_Choreography
{
    /**
     * Creates a new end-user request.
     *
     * @param Temboo_Session $session The session that owns this CreateRequest Choreo.
     * @return Zendesk_Requests_CreateRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/CreateRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateRequest Choreo.
     *
     * @param Zendesk_Requests_CreateRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_CreateRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_CreateRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_CreateRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_CreateRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_CreateRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_CreateRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_CreateRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RequestData input for this CreateRequest Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the request properties you wish to set. This can be used as an alternative to setting individual inputs representing request properties.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setRequestData($value)
    {
        return $this->set('RequestData', $value);
    }

    /**
     * Set the value for the Comment input for this CreateRequest Choreo.
     *
     * @param string $value (conditional, string) A comment associated with the request.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email input for this CreateRequest Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this CreateRequest Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Priority input for this CreateRequest Choreo.
     *
     * @param string $value (conditional, string) Priority (e.g. low, normal, high, urgent). Defaults to normal.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setPriority($value)
    {
        return $this->set('Priority', $value);
    }

    /**
     * Set the value for the Server input for this CreateRequest Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this CreateRequest Choreo.
     *
     * @param string $value (conditional, string) The subject of the request.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Type input for this CreateRequest Choreo.
     *
     * @param string $value (conditional, string) Type of request (e.g.question, incident, problem, task). Defaults to incident.
     * @return Zendesk_Requests_CreateRequest_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the CreateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_CreateRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateRequest execution.
     * @param Zendesk_Requests_CreateRequest $choreo The choreography object for this execution.
     * @param Zendesk_Requests_CreateRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_CreateRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_CreateRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_CreateRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRequest execution.
     *
     * @return Zendesk_Requests_CreateRequest_Results New results object.
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
     * Wraps results in appropriate results class for this CreateRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_CreateRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_CreateRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_CreateRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_CreateRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateRequest execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicket extends Temboo_Choreography
{
    /**
     * Creates a new ticket.
     *
     * @param Temboo_Session $session The session that owns this CreateTicket Choreo.
     * @return Zendesk_Tickets_CreateTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/CreateTicket/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTicket Choreo.
     *
     * @param Zendesk_Tickets_CreateTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_CreateTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_CreateTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_CreateTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_CreateTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_CreateTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_CreateTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Comment input for this CreateTicket Choreo.
     *
     * @param string $value (conditional, string) The comment for the ticket that is being created.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email input for this CreateTicket Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this CreateTicket Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateTicket Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (i.e. temboocare.zendesk.com).
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this CreateTicket Choreo.
     *
     * @param string $value (conditional, string) The subject for the ticket that is being created.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the TicketData input for this CreateTicket Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the ticket properties you wish to set. This can be used as an alternative to setting individual inputs representing ticket properties.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setTicketData($value)
    {
        return $this->set('TicketData', $value);
    }

    /**
     * Set the value for the Token input for this CreateTicket Choreo.
     *
     * @param string $value (optional, string) The token associated with an upload to attach to this ticket. Note that tokens can be retrieved by running the UploadFile Choreo.
     * @return Zendesk_Tickets_CreateTicket_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CreateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTicket Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTicket execution.
     * @param Zendesk_Tickets_CreateTicket $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_CreateTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_CreateTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_CreateTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_CreateTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTicket execution.
     *
     * @return Zendesk_Tickets_CreateTicket_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_CreateTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_CreateTicket_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicket_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTicket Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_CreateTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateTicket execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new ticket as well as a new requester account.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicketNewRequester extends Temboo_Choreography
{
    /**
     * Creates a new ticket as well as a new requester account.
     *
     * @param Temboo_Session $session The session that owns this CreateTicketNewRequester Choreo.
     * @return Zendesk_Tickets_CreateTicketNewRequester New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/CreateTicketNewRequester/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTicketNewRequester Choreo.
     *
     * @param Zendesk_Tickets_CreateTicketNewRequester_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_CreateTicketNewRequester_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_CreateTicketNewRequester_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTicketNewRequester Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_CreateTicketNewRequester_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTicketNewRequester Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicketNewRequester_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTicketNewRequester Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTicketNewRequester input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Comment input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) The comment for the ticket that is being created.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the LocaleID input for this CreateTicketNewRequester Choreo.
     *
     * @param int $value (required, integer) LocaleID for the new requester. Indicate 1 for English, 8 for Deutsch, etc.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setLocaleID($value)
    {
        return $this->set('LocaleID', $value);
    }

    /**
     * Set the value for the Name input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) Name of new requester.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequesterEmail input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) Email of new requester.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setRequesterEmail($value)
    {
        return $this->set('RequesterEmail', $value);
    }

    /**
     * Set the value for the Server input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (required, string) The subject for the ticket that is being created.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Token input for this CreateTicketNewRequester Choreo.
     *
     * @param string $value (optional, string) The token associated with an upload to attach to this ticket. Note that tokens can be retrieved by running the UploadFile Choreo.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CreateTicketNewRequester Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicketNewRequester_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTicketNewRequester Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTicketNewRequester execution.
     * @param Zendesk_Tickets_CreateTicketNewRequester $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_CreateTicketNewRequester_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_CreateTicketNewRequester_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_CreateTicketNewRequester $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTicketNewRequester execution.
     *
     * @return Zendesk_Tickets_CreateTicketNewRequester_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTicketNewRequester execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_CreateTicketNewRequester_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTicketNewRequester Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_CreateTicketNewRequester_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTicketNewRequester Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_CreateTicketNewRequester_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateTicketNewRequester execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateUser extends Temboo_Choreography
{
    /**
     * Creates a new user.
     *
     * @param Temboo_Session $session The session that owns this CreateUser Choreo.
     * @return Zendesk_Users_CreateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/CreateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateUser Choreo.
     *
     * @param Zendesk_Users_CreateUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_CreateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_CreateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_CreateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_CreateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_CreateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this CreateUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this CreateUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserData input for this CreateUser Choreo.
     *
     * @param string $value (required, json) A JSON-formatted string containing the user properties you wish to set.
     * @return Zendesk_Users_CreateUser_Inputs For method chaining.
     */
    public function setUserData($value)
    {
        return $this->set('UserData', $value);
    }
}


/**
 * Execution object for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateUser execution.
     * @param Zendesk_Users_CreateUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_CreateUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_CreateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_CreateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateUser execution.
     *
     * @return Zendesk_Users_CreateUser_Results New results object.
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
     * Wraps results in appropriate results class for this CreateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_CreateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_CreateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_CreateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_CreateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateUser execution.
     *
     * @return string (json) 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new view.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_CreateView extends Temboo_Choreography
{
    /**
     * Creates a new view.
     *
     * @param Temboo_Session $session The session that owns this CreateView Choreo.
     * @return Zendesk_Views_CreateView New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/CreateView/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateView Choreo.
     *
     * @param Zendesk_Views_CreateView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_CreateView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_CreateView_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_CreateView_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_CreateView_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_CreateView_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_CreateView_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_CreateView_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateView input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AllConditions input for this CreateView Choreo.
     *
     * @param string $value (conditional, json) JSON Array of conditions.  Tickets must fulfill all of the conditions to be considered matching.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setAllConditions($value)
    {
        return $this->set('AllConditions', $value);
    }

    /**
     * Set the value for the AnyConditions input for this CreateView Choreo.
     *
     * @param string $value (conditional, json) JSON Array of conditions.  Tickets may fulfill any of the conditions to be considered matching.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setAnyConditions($value)
    {
        return $this->set('AnyConditions', $value);
    }

    /**
     * Set the value for the Email input for this CreateView Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this CreateView Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this CreateView Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Title input for this CreateView Choreo.
     *
     * @param string $value (required, string) Title of the view to be created.
     * @return Zendesk_Views_CreateView_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the CreateView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_CreateView_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateView Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateView execution.
     * @param Zendesk_Views_CreateView $choreo The choreography object for this execution.
     * @param Zendesk_Views_CreateView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_CreateView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_CreateView_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_CreateView $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateView execution.
     *
     * @return Zendesk_Views_CreateView_Results New results object.
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
     * Wraps results in appropriate results class for this CreateView execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_CreateView_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_CreateView_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_CreateView_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateView Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_CreateView_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateView execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an existing group.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_DeleteGroup extends Temboo_Choreography
{
    /**
     * Deletes an existing group.
     *
     * @param Temboo_Session $session The session that owns this DeleteGroup Choreo.
     * @return Zendesk_Groups_DeleteGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/DeleteGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteGroup Choreo.
     *
     * @param Zendesk_Groups_DeleteGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_DeleteGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_DeleteGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_DeleteGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_DeleteGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_DeleteGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_DeleteGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_DeleteGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteGroup Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the GroupID input for this DeleteGroup Choreo.
     *
     * @param string $value (required, string) The ID of group to delete.
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteGroup Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteGroup Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_DeleteGroup_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the DeleteGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_DeleteGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteGroup execution.
     * @param Zendesk_Groups_DeleteGroup $choreo The choreography object for this execution.
     * @param Zendesk_Groups_DeleteGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_DeleteGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_DeleteGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_DeleteGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteGroup execution.
     *
     * @return Zendesk_Groups_DeleteGroup_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_DeleteGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_DeleteGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_DeleteGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_DeleteGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteGroup execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteGroup execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes an existing organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_DeleteOrganization extends Temboo_Choreography
{
    /**
     * Deletes an existing organization.
     *
     * @param Temboo_Session $session The session that owns this DeleteOrganization Choreo.
     * @return Zendesk_Organizations_DeleteOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/DeleteOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteOrganization Choreo.
     *
     * @param Zendesk_Organizations_DeleteOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_DeleteOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_DeleteOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_DeleteOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_DeleteOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_DeleteOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this DeleteOrganization Choreo.
     *
     * @param string $value (required, string) ID of the organization to delete.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_DeleteOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the DeleteOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_DeleteOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteOrganization execution.
     * @param Zendesk_Organizations_DeleteOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_DeleteOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_DeleteOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_DeleteOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_DeleteOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteOrganization execution.
     *
     * @return Zendesk_Organizations_DeleteOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_DeleteOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_DeleteOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_DeleteOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_DeleteOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteOrganization execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes an existing ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_DeleteTicket extends Temboo_Choreography
{
    /**
     * Deletes an existing ticket.
     *
     * @param Temboo_Session $session The session that owns this DeleteTicket Choreo.
     * @return Zendesk_Tickets_DeleteTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/DeleteTicket/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteTicket Choreo.
     *
     * @param Zendesk_Tickets_DeleteTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_DeleteTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_DeleteTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_DeleteTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_DeleteTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_DeleteTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_DeleteTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_DeleteTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteTicket Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this DeleteTicket Choreo.
     *
     * @param int $value (required, integer) The ID number of a ticket.
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteTicket Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteTicket Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_DeleteTicket_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the DeleteTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_DeleteTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteTicket Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteTicket execution.
     * @param Zendesk_Tickets_DeleteTicket $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_DeleteTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_DeleteTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_DeleteTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_DeleteTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteTicket execution.
     *
     * @return Zendesk_Tickets_DeleteTicket_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_DeleteTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_DeleteTicket_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_DeleteTicket_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteTicket Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_DeleteTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteTicket execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteTicket execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes a given user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_DeleteUser extends Temboo_Choreography
{
    /**
     * Deletes a given user.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser Choreo.
     * @return Zendesk_Users_DeleteUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/DeleteUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteUser Choreo.
     *
     * @param Zendesk_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_DeleteUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_DeleteUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_DeleteUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_DeleteUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_DeleteUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_DeleteUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this DeleteUser Choreo.
     *
     * @param int $value (required, integer) The ID of the user to delete.
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_DeleteUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_DeleteUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser execution.
     * @param Zendesk_Users_DeleteUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_DeleteUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_DeleteUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteUser execution.
     *
     * @return Zendesk_Users_DeleteUser_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_DeleteUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_DeleteUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_DeleteUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_DeleteUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteUser execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 *  Deletes the user identity for a user/
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_DeleteUserIdentity extends Temboo_Choreography
{
    /**
     *  Deletes the user identity for a user/
     *
     * @param Temboo_Session $session The session that owns this DeleteUserIdentity Choreo.
     * @return Zendesk_UserIdentities_DeleteUserIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/DeleteUserIdentity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteUserIdentity Choreo.
     *
     * @param Zendesk_UserIdentities_DeleteUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_DeleteUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_DeleteUserIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_DeleteUserIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_DeleteUserIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteUserIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteUserIdentity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this DeleteUserIdentity Choreo.
     *
     * @param string $value (required, string) The ID of the Identity to delete.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteUserIdentity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteUserIdentity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_DeleteUserIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteUserIdentity Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteUserIdentity execution.
     * @param Zendesk_UserIdentities_DeleteUserIdentity $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_DeleteUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_DeleteUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_DeleteUserIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteUserIdentity execution.
     *
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteUserIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_DeleteUserIdentity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_DeleteUserIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteUserIdentity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_DeleteUserIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteUserIdentity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes the specified view.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_DeleteView extends Temboo_Choreography
{
    /**
     * Deletes the specified view.
     *
     * @param Temboo_Session $session The session that owns this DeleteView Choreo.
     * @return Zendesk_Views_DeleteView New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/DeleteView/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteView Choreo.
     *
     * @param Zendesk_Views_DeleteView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_DeleteView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_DeleteView_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_DeleteView_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_DeleteView_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_DeleteView_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_DeleteView_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_DeleteView_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteView input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this DeleteView Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this DeleteView Choreo.
     *
     * @param string $value (conditional, string) ID of the view to delete.
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteView Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this DeleteView Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_DeleteView_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the DeleteView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_DeleteView_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteView Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteView execution.
     * @param Zendesk_Views_DeleteView $choreo The choreography object for this execution.
     * @param Zendesk_Views_DeleteView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_DeleteView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_DeleteView_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_DeleteView $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteView execution.
     *
     * @return Zendesk_Views_DeleteView_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteView execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_DeleteView_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_DeleteView_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_DeleteView_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteView Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_DeleteView_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteView execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteView execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Execute a view and retrieve tickets that fulfill the conditions of the view.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExecuteViews extends Temboo_Choreography
{
    /**
     * Execute a view and retrieve tickets that fulfill the conditions of the view.
     *
     * @param Temboo_Session $session The session that owns this ExecuteViews Choreo.
     * @return Zendesk_Views_ExecuteViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/ExecuteViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExecuteViews Choreo.
     *
     * @param Zendesk_Views_ExecuteViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ExecuteViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ExecuteViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_ExecuteViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExecuteViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ExecuteViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_ExecuteViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExecuteViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExecuteViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExecuteViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ExecuteViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExecuteViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ExecuteViews Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ExecuteViews Choreo.
     *
     * @param string $value (conditional, string) ID of the view to execute.
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this ExecuteViews Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ExecuteViews Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_ExecuteViews_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ExecuteViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExecuteViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExecuteViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExecuteViews execution.
     * @param Zendesk_Views_ExecuteViews $choreo The choreography object for this execution.
     * @param Zendesk_Views_ExecuteViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ExecuteViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ExecuteViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_ExecuteViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExecuteViews execution.
     *
     * @return Zendesk_Views_ExecuteViews_Results New results object.
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
     * Wraps results in appropriate results class for this ExecuteViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_ExecuteViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_ExecuteViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExecuteViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExecuteViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExecuteViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_ExecuteViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ExecuteViews execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a lightweight representation of what changed in the ticket "since you last asked".
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_IncrementalTickets_ExportIncrementalTickets extends Temboo_Choreography
{
    /**
     * Returns a lightweight representation of what changed in the ticket "since you last asked".
     *
     * @param Temboo_Session $session The session that owns this ExportIncrementalTickets Choreo.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/IncrementalTickets/ExportIncrementalTickets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExportIncrementalTickets Choreo.
     *
     * @param Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs|array $inputs (optional) Inputs as Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_IncrementalTickets_ExportIncrementalTickets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExportIncrementalTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExportIncrementalTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExportIncrementalTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExportIncrementalTickets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ExportIncrementalTickets Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this ExportIncrementalTickets Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ExportIncrementalTickets Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the StartTime input for this ExportIncrementalTickets Choreo.
     *
     * @param string $value (required, string) Return a list of tickets created after this timestamp (in seconds since Epoch UTC).  Tickets less than 5 minutes old are not included in the response.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }
}


/**
 * Execution object for the ExportIncrementalTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_IncrementalTickets_ExportIncrementalTickets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExportIncrementalTickets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExportIncrementalTickets execution.
     * @param Zendesk_IncrementalTickets_ExportIncrementalTickets $choreo The choreography object for this execution.
     * @param Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs|array $inputs (optional) Inputs as Zendesk_IncrementalTickets_ExportIncrementalTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_IncrementalTickets_ExportIncrementalTickets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExportIncrementalTickets execution.
     *
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Results New results object.
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
     * Wraps results in appropriate results class for this ExportIncrementalTickets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_IncrementalTickets_ExportIncrementalTickets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExportIncrementalTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_IncrementalTickets_ExportIncrementalTickets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExportIncrementalTickets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_IncrementalTickets_ExportIncrementalTickets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ExportIncrementalTickets execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the CSV attachment of the current view if possible.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExportViews extends Temboo_Choreography
{
    /**
     * Returns the CSV attachment of the current view if possible.
     *
     * @param Temboo_Session $session The session that owns this ExportViews Choreo.
     * @return Zendesk_Views_ExportViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/ExportViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExportViews Choreo.
     *
     * @param Zendesk_Views_ExportViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ExportViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ExportViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_ExportViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExportViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ExportViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_ExportViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExportViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExportViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExportViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ExportViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExportViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ExportViews Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ExportViews Choreo.
     *
     * @param string $value (conditional, string) ID of the view to export.
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this ExportViews Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ExportViews Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_ExportViews_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ExportViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExportViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExportViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExportViews execution.
     * @param Zendesk_Views_ExportViews $choreo The choreography object for this execution.
     * @param Zendesk_Views_ExportViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ExportViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ExportViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_ExportViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExportViews execution.
     *
     * @return Zendesk_Views_ExportViews_Results New results object.
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
     * Wraps results in appropriate results class for this ExportViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_ExportViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_ExportViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExportViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ExportViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExportViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_ExportViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ExportViews execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the specified comment from a request.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetComment extends Temboo_Choreography
{
    /**
     * Retrieves the specified comment from a request.
     *
     * @param Temboo_Session $session The session that owns this GetComment Choreo.
     * @return Zendesk_Requests_GetComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/GetComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComment Choreo.
     *
     * @param Zendesk_Requests_GetComment_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_GetComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_GetComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_GetComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_GetComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_GetComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CommentID input for this GetComment Choreo.
     *
     * @param string $value (required, string) The ID of the comment to retrieve.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the Email input for this GetComment Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this GetComment Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequestID input for this GetComment Choreo.
     *
     * @param string $value (required, string) The ID of the request that has been commented on.
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setRequestID($value)
    {
        return $this->set('RequestID', $value);
    }

    /**
     * Set the value for the Server input for this GetComment Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_GetComment_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComment execution.
     * @param Zendesk_Requests_GetComment $choreo The choreography object for this execution.
     * @param Zendesk_Requests_GetComment_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_GetComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_GetComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComment execution.
     *
     * @return Zendesk_Requests_GetComment_Results New results object.
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
     * Wraps results in appropriate results class for this GetComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_GetComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_GetComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_GetComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComment execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 *  Retrieves detailed information on a specified monitored Twitter account. 
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle extends Temboo_Choreography
{
    /**
     *  Retrieves detailed information on a specified monitored Twitter account. 
     *
     * @param Temboo_Session $session The session that owns this GetMonitoredTwitterHandle Choreo.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/MonitoredTwitterHandles/GetMonitoredTwitterHandle/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMonitoredTwitterHandle Choreo.
     *
     * @param Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs|array $inputs (optional) Inputs as Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMonitoredTwitterHandle Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMonitoredTwitterHandle Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMonitoredTwitterHandle Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMonitoredTwitterHandle input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetMonitoredTwitterHandle Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetMonitoredTwitterHandle Choreo.
     *
     * @param string $value (required, string) ID of the monitored Twitter handle.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetMonitoredTwitterHandle Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetMonitoredTwitterHandle Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetMonitoredTwitterHandle Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMonitoredTwitterHandle Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMonitoredTwitterHandle execution.
     * @param Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle $choreo The choreography object for this execution.
     * @param Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs|array $inputs (optional) Inputs as Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMonitoredTwitterHandle execution.
     *
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Results New results object.
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
     * Wraps results in appropriate results class for this GetMonitoredTwitterHandle execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMonitoredTwitterHandle Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMonitoredTwitterHandle Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_MonitoredTwitterHandles_GetMonitoredTwitterHandle_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMonitoredTwitterHandle execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get detailed info for a given organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_GetOrganization extends Temboo_Choreography
{
    /**
     * Get detailed info for a given organization.
     *
     * @param Temboo_Session $session The session that owns this GetOrganization Choreo.
     * @return Zendesk_Organizations_GetOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/GetOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetOrganization Choreo.
     *
     * @param Zendesk_Organizations_GetOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_GetOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_GetOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_GetOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_GetOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_GetOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_GetOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_GetOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetOrganization Choreo.
     *
     * @param string $value (required, string) ID of the organization to get.
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_GetOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_GetOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetOrganization execution.
     * @param Zendesk_Organizations_GetOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_GetOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_GetOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_GetOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_GetOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetOrganization execution.
     *
     * @return Zendesk_Organizations_GetOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this GetOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_GetOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_GetOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_GetOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_GetOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the request for the specified ID.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetRequest extends Temboo_Choreography
{
    /**
     * Retrieves the request for the specified ID.
     *
     * @param Temboo_Session $session The session that owns this GetRequest Choreo.
     * @return Zendesk_Requests_GetRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/GetRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRequest Choreo.
     *
     * @param Zendesk_Requests_GetRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_GetRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_GetRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_GetRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_GetRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_GetRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_GetRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetRequest Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetRequest Choreo.
     *
     * @param string $value (required, string) The ID of the request to retrieve.
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetRequest Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetRequest Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Status input for this GetRequest Choreo.
     *
     * @param string $value (optional, string) Comma-seperated list of request statuses to match (e.g. hold, open, solved, ccd)
     * @return Zendesk_Requests_GetRequest_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the GetRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRequest execution.
     * @param Zendesk_Requests_GetRequest $choreo The choreography object for this execution.
     * @param Zendesk_Requests_GetRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_GetRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_GetRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_GetRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRequest execution.
     *
     * @return Zendesk_Requests_GetRequest_Results New results object.
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
     * Wraps results in appropriate results class for this GetRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_GetRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_GetRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_GetRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_GetRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRequest execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about a ticket using its ID.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_GetTicket extends Temboo_Choreography
{
    /**
     * Returns information about a ticket using its ID.
     *
     * @param Temboo_Session $session The session that owns this GetTicket Choreo.
     * @return Zendesk_Tickets_GetTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/GetTicket/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTicket Choreo.
     *
     * @param Zendesk_Tickets_GetTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_GetTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_GetTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_GetTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_GetTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_GetTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_GetTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_GetTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetTicket Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetTicket Choreo.
     *
     * @param int $value (required, integer) The ID number of a ticket.
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetTicket Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetTicket Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_GetTicket_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_GetTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTicket Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTicket execution.
     * @param Zendesk_Tickets_GetTicket $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_GetTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_GetTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_GetTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_GetTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTicket execution.
     *
     * @return Zendesk_Tickets_GetTicket_Results New results object.
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
     * Wraps results in appropriate results class for this GetTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_GetTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_GetTicket_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_GetTicket_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTicket Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_GetTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTicket execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific ticket metric.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_GetTicketMetrics extends Temboo_Choreography
{
    /**
     * Retrieves a specific ticket metric.
     *
     * @param Temboo_Session $session The session that owns this GetTicketMetrics Choreo.
     * @return Zendesk_TicketMetrics_GetTicketMetrics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketMetrics/GetTicketMetrics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTicketMetrics Choreo.
     *
     * @param Zendesk_TicketMetrics_GetTicketMetrics_Inputs|array $inputs (optional) Inputs as Zendesk_TicketMetrics_GetTicketMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketMetrics_GetTicketMetrics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTicketMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketMetrics_GetTicketMetrics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_GetTicketMetrics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTicketMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTicketMetrics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetTicketMetrics Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetTicketMetrics Choreo.
     *
     * @param string $value (conditional, string) The ID of the ticket metric to retrieve.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetTicketMetrics Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetTicketMetrics Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_GetTicketMetrics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTicketMetrics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTicketMetrics execution.
     * @param Zendesk_TicketMetrics_GetTicketMetrics $choreo The choreography object for this execution.
     * @param Zendesk_TicketMetrics_GetTicketMetrics_Inputs|array $inputs (optional) Inputs as Zendesk_TicketMetrics_GetTicketMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketMetrics_GetTicketMetrics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTicketMetrics execution.
     *
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Results New results object.
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
     * Wraps results in appropriate results class for this GetTicketMetrics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketMetrics_GetTicketMetrics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_GetTicketMetrics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTicketMetrics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketMetrics_GetTicketMetrics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTicketMetrics execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve tickets from a view.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetTicketsFromAView extends Temboo_Choreography
{
    /**
     * Retrieve tickets from a view.
     *
     * @param Temboo_Session $session The session that owns this GetTicketsFromAView Choreo.
     * @return Zendesk_Views_GetTicketsFromAView New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/GetTicketsFromAView/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTicketsFromAView Choreo.
     *
     * @param Zendesk_Views_GetTicketsFromAView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetTicketsFromAView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetTicketsFromAView_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_GetTicketsFromAView_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTicketsFromAView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_GetTicketsFromAView_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTicketsFromAView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetTicketsFromAView_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTicketsFromAView Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTicketsFromAView input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetTicketsFromAView Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetTicketsFromAView Choreo.
     *
     * @param string $value (conditional, string) ID of the view to get tickets from.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetTicketsFromAView Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetTicketsFromAView Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_GetTicketsFromAView_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetTicketsFromAView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetTicketsFromAView_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTicketsFromAView Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTicketsFromAView execution.
     * @param Zendesk_Views_GetTicketsFromAView $choreo The choreography object for this execution.
     * @param Zendesk_Views_GetTicketsFromAView_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetTicketsFromAView_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetTicketsFromAView_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_GetTicketsFromAView $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTicketsFromAView execution.
     *
     * @return Zendesk_Views_GetTicketsFromAView_Results New results object.
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
     * Wraps results in appropriate results class for this GetTicketsFromAView execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_GetTicketsFromAView_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_GetTicketsFromAView_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTicketsFromAView Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetTicketsFromAView_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTicketsFromAView Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_GetTicketsFromAView_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTicketsFromAView execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the ticket count for a single view.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCount extends Temboo_Choreography
{
    /**
     * Returns the ticket count for a single view.
     *
     * @param Temboo_Session $session The session that owns this GetViewCount Choreo.
     * @return Zendesk_Views_GetViewCount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/GetViewCount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetViewCount Choreo.
     *
     * @param Zendesk_Views_GetViewCount_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetViewCount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetViewCount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_GetViewCount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetViewCount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetViewCount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_GetViewCount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetViewCount Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetViewCount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetViewCount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetViewCount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetViewCount Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this GetViewCount Choreo.
     *
     * @param string $value (conditional, string) Retrieve a view count for the ID of the specified view.
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this GetViewCount Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetViewCount Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_GetViewCount_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetViewCount Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetViewCount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetViewCount execution.
     * @param Zendesk_Views_GetViewCount $choreo The choreography object for this execution.
     * @param Zendesk_Views_GetViewCount_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetViewCount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetViewCount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_GetViewCount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetViewCount execution.
     *
     * @return Zendesk_Views_GetViewCount_Results New results object.
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
     * Wraps results in appropriate results class for this GetViewCount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_GetViewCount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_GetViewCount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetViewCount Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetViewCount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_GetViewCount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetViewCount execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Calculates the size of the view in terms of number of tickets the view will return.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCounts extends Temboo_Choreography
{
    /**
     * Calculates the size of the view in terms of number of tickets the view will return.
     *
     * @param Temboo_Session $session The session that owns this GetViewCounts Choreo.
     * @return Zendesk_Views_GetViewCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/GetViewCounts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetViewCounts Choreo.
     *
     * @param Zendesk_Views_GetViewCounts_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetViewCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetViewCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_GetViewCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetViewCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetViewCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_GetViewCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetViewCounts Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetViewCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_GetViewCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetViewCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this GetViewCounts Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IDs input for this GetViewCounts Choreo.
     *
     * @param string $value (conditional, string) Comma-seperated list of view IDs to retrieve counts for.
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function setIDs($value)
    {
        return $this->set('IDs', $value);
    }

    /**
     * Set the value for the Password input for this GetViewCounts Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this GetViewCounts Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_GetViewCounts_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the GetViewCounts Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetViewCounts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetViewCounts execution.
     * @param Zendesk_Views_GetViewCounts $choreo The choreography object for this execution.
     * @param Zendesk_Views_GetViewCounts_Inputs|array $inputs (optional) Inputs as Zendesk_Views_GetViewCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_GetViewCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_GetViewCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetViewCounts execution.
     *
     * @return Zendesk_Views_GetViewCounts_Results New results object.
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
     * Wraps results in appropriate results class for this GetViewCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_GetViewCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_GetViewCounts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetViewCounts Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_GetViewCounts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetViewCounts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_GetViewCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetViewCounts execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists active shared and personal views available to the current user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListActiveViews extends Temboo_Choreography
{
    /**
     * Lists active shared and personal views available to the current user.
     *
     * @param Temboo_Session $session The session that owns this ListActiveViews Choreo.
     * @return Zendesk_Views_ListActiveViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/ListActiveViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListActiveViews Choreo.
     *
     * @param Zendesk_Views_ListActiveViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListActiveViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListActiveViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_ListActiveViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListActiveViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListActiveViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_ListActiveViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListActiveViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListActiveViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListActiveViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListActiveViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListActiveViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListActiveViews Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListActiveViews Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListActiveViews Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListActiveViews Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListActiveViews Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_ListActiveViews_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListActiveViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListActiveViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListActiveViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListActiveViews execution.
     * @param Zendesk_Views_ListActiveViews $choreo The choreography object for this execution.
     * @param Zendesk_Views_ListActiveViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListActiveViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListActiveViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_ListActiveViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListActiveViews execution.
     *
     * @return Zendesk_Views_ListActiveViews_Results New results object.
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
     * Wraps results in appropriate results class for this ListActiveViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_ListActiveViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_ListActiveViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListActiveViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListActiveViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListActiveViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_ListActiveViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListActiveViews execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListActiveViews execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListActiveViews execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Returns a list of activities for the authenticating user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ListActivity extends Temboo_Choreography
{
    /**
     * Returns a list of activities for the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this ListActivity Choreo.
     * @return Zendesk_ActivityStream_ListActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/ActivityStream/ListActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListActivity Choreo.
     *
     * @param Zendesk_ActivityStream_ListActivity_Inputs|array $inputs (optional) Inputs as Zendesk_ActivityStream_ListActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_ActivityStream_ListActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_ActivityStream_ListActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_ActivityStream_ListActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_ActivityStream_ListActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ListActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_ActivityStream_ListActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_ActivityStream_ListActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_ActivityStream_ListActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListActivity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_ActivityStream_ListActivity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this ListActivity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_ActivityStream_ListActivity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ListActivity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_ActivityStream_ListActivity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ListActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListActivity execution.
     * @param Zendesk_ActivityStream_ListActivity $choreo The choreography object for this execution.
     * @param Zendesk_ActivityStream_ListActivity_Inputs|array $inputs (optional) Inputs as Zendesk_ActivityStream_ListActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_ActivityStream_ListActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_ActivityStream_ListActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListActivity execution.
     *
     * @return Zendesk_ActivityStream_ListActivity_Results New results object.
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
     * Wraps results in appropriate results class for this ListActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_ActivityStream_ListActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_ActivityStream_ListActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ListActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_ActivityStream_ListActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListActivity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List all existing requests for your account.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListAllRequests extends Temboo_Choreography
{
    /**
     * List all existing requests for your account.
     *
     * @param Temboo_Session $session The session that owns this ListAllRequests Choreo.
     * @return Zendesk_Requests_ListAllRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/ListAllRequests/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllRequests Choreo.
     *
     * @param Zendesk_Requests_ListAllRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListAllRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListAllRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_ListAllRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListAllRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_ListAllRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListAllRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListAllRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListAllRequests Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListAllRequests Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListAllRequests Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAllRequests Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListAllRequests Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Status input for this ListAllRequests Choreo.
     *
     * @param string $value (optional, string) Comma-seperated list of request statuses to match (e.g. hold, open, solved, ccd)
     * @return Zendesk_Requests_ListAllRequests_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the ListAllRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListAllRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllRequests Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllRequests execution.
     * @param Zendesk_Requests_ListAllRequests $choreo The choreography object for this execution.
     * @param Zendesk_Requests_ListAllRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListAllRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListAllRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_ListAllRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllRequests execution.
     *
     * @return Zendesk_Requests_ListAllRequests_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_ListAllRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_ListAllRequests_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListAllRequests_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllRequests Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_ListAllRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllRequests execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListAllRequests execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListAllRequests execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all existing tickets.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListAllTickets extends Temboo_Choreography
{
    /**
     * Retrieves a list of all existing tickets.
     *
     * @param Temboo_Session $session The session that owns this ListAllTickets Choreo.
     * @return Zendesk_Tickets_ListAllTickets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListAllTickets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllTickets Choreo.
     *
     * @param Zendesk_Tickets_ListAllTickets_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListAllTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListAllTickets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListAllTickets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListAllTickets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListAllTickets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListAllTickets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllTickets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListAllTickets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllTickets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListAllTickets Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListAllTickets Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListAllTickets Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAllTickets Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListAllTickets Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListAllTickets_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListAllTickets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllTickets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllTickets execution.
     * @param Zendesk_Tickets_ListAllTickets $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListAllTickets_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListAllTickets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListAllTickets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListAllTickets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllTickets execution.
     *
     * @return Zendesk_Tickets_ListAllTickets_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllTickets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListAllTickets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListAllTickets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllTickets Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListAllTickets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllTickets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListAllTickets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllTickets execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListAllTickets execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListAllTickets execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all existing users.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListAllUsers extends Temboo_Choreography
{
    /**
     * Retrieves a list of all existing users.
     *
     * @param Temboo_Session $session The session that owns this ListAllUsers Choreo.
     * @return Zendesk_Users_ListAllUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/ListAllUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllUsers Choreo.
     *
     * @param Zendesk_Users_ListAllUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListAllUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListAllUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_ListAllUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListAllUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_ListAllUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListAllUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListAllUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListAllUsers Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListAllUsers Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListAllUsers Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAllUsers Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListAllUsers Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_ListAllUsers_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListAllUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListAllUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllUsers execution.
     * @param Zendesk_Users_ListAllUsers $choreo The choreography object for this execution.
     * @param Zendesk_Users_ListAllUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListAllUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListAllUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_ListAllUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllUsers execution.
     *
     * @return Zendesk_Users_ListAllUsers_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_ListAllUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_ListAllUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListAllUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_ListAllUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllUsers execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListAllUsers execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListAllUsers execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists all the audits made for the specifed ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ListAudits extends Temboo_Choreography
{
    /**
     * Lists all the audits made for the specifed ticket.
     *
     * @param Temboo_Session $session The session that owns this ListAudits Choreo.
     * @return Zendesk_TicketAudits_ListAudits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketAudits/ListAudits/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAudits Choreo.
     *
     * @param Zendesk_TicketAudits_ListAudits_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ListAudits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ListAudits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketAudits_ListAudits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAudits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ListAudits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketAudits_ListAudits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAudits Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ListAudits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAudits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ListAudits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAudits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListAudits Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListAudits Choreo.
     *
     * @param string $value (required, string) The ID of the ticket you wish to show audits for.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListAudits Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListAudits Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAudits Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListAudits Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketAudits_ListAudits_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListAudits Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ListAudits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAudits Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAudits execution.
     * @param Zendesk_TicketAudits_ListAudits $choreo The choreography object for this execution.
     * @param Zendesk_TicketAudits_ListAudits_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ListAudits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ListAudits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketAudits_ListAudits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAudits execution.
     *
     * @return Zendesk_TicketAudits_ListAudits_Results New results object.
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
     * Wraps results in appropriate results class for this ListAudits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketAudits_ListAudits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketAudits_ListAudits_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAudits Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ListAudits_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAudits Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketAudits_ListAudits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAudits execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListAudits execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListAudits execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists all comments for the specifed request.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListComments extends Temboo_Choreography
{
    /**
     * Lists all comments for the specifed request.
     *
     * @param Temboo_Session $session The session that owns this ListComments Choreo.
     * @return Zendesk_Requests_ListComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/ListComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListComments Choreo.
     *
     * @param Zendesk_Requests_ListComments_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_ListComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_ListComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListComments Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListComments Choreo.
     *
     * @param string $value (required, string) The ID of the request to retrieve comments for.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListComments Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListComments Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListComments Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListComments Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_ListComments_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListComments execution.
     * @param Zendesk_Requests_ListComments $choreo The choreography object for this execution.
     * @param Zendesk_Requests_ListComments_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_ListComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListComments execution.
     *
     * @return Zendesk_Requests_ListComments_Results New results object.
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
     * Wraps results in appropriate results class for this ListComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_ListComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_ListComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_ListComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListComments execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListComments execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListComments execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a compacted list of shared and personal views available to the current user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListCompactViews extends Temboo_Choreography
{
    /**
     * Retrieves a compacted list of shared and personal views available to the current user.
     *
     * @param Temboo_Session $session The session that owns this ListCompactViews Choreo.
     * @return Zendesk_Views_ListCompactViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/ListCompactViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCompactViews Choreo.
     *
     * @param Zendesk_Views_ListCompactViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListCompactViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListCompactViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_ListCompactViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCompactViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListCompactViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_ListCompactViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCompactViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListCompactViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCompactViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListCompactViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCompactViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListCompactViews Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListCompactViews Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListCompactViews Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListCompactViews Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListCompactViews Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_ListCompactViews_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListCompactViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListCompactViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCompactViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCompactViews execution.
     * @param Zendesk_Views_ListCompactViews $choreo The choreography object for this execution.
     * @param Zendesk_Views_ListCompactViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListCompactViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListCompactViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_ListCompactViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCompactViews execution.
     *
     * @return Zendesk_Views_ListCompactViews_Results New results object.
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
     * Wraps results in appropriate results class for this ListCompactViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_ListCompactViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_ListCompactViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCompactViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListCompactViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCompactViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_ListCompactViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCompactViews execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListCompactViews execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListCompactViews execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * List available groups.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ListGroups extends Temboo_Choreography
{
    /**
     * List available groups.
     *
     * @param Temboo_Session $session The session that owns this ListGroups Choreo.
     * @return Zendesk_Groups_ListGroups New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/ListGroups/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGroups Choreo.
     *
     * @param Zendesk_Groups_ListGroups_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ListGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ListGroups_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_ListGroups_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ListGroups_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_ListGroups_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ListGroups_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ListGroups_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGroups input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListGroups Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListGroups Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListGroups Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListGroups Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListGroups Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_ListGroups_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ListGroups_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGroups Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGroups execution.
     * @param Zendesk_Groups_ListGroups $choreo The choreography object for this execution.
     * @param Zendesk_Groups_ListGroups_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ListGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ListGroups_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_ListGroups $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGroups execution.
     *
     * @return Zendesk_Groups_ListGroups_Results New results object.
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
     * Wraps results in appropriate results class for this ListGroups execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_ListGroups_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_ListGroups_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ListGroups_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGroups Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_ListGroups_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListGroups execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListGroups execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListGroups execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all active macros available to the current user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ListMacros extends Temboo_Choreography
{
    /**
     * Retrieves a list of all active macros available to the current user.
     *
     * @param Temboo_Session $session The session that owns this ListMacros Choreo.
     * @return Zendesk_Macros_ListMacros New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Macros/ListMacros/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMacros Choreo.
     *
     * @param Zendesk_Macros_ListMacros_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ListMacros_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ListMacros_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Macros_ListMacros_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMacros Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ListMacros_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Macros_ListMacros_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMacros Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ListMacros_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMacros Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Macros_ListMacros_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMacros input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListMacros Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListMacros Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListMacros Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListMacros Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListMacros Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Macros_ListMacros_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListMacros Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ListMacros_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMacros Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMacros execution.
     * @param Zendesk_Macros_ListMacros $choreo The choreography object for this execution.
     * @param Zendesk_Macros_ListMacros_Inputs|array $inputs (optional) Inputs as Zendesk_Macros_ListMacros_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Macros_ListMacros_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Macros_ListMacros $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMacros execution.
     *
     * @return Zendesk_Macros_ListMacros_Results New results object.
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
     * Wraps results in appropriate results class for this ListMacros execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Macros_ListMacros_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Macros_ListMacros_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMacros Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Macros_ListMacros_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMacros Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Macros_ListMacros_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMacros execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListMacros execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListMacros execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of monitored Twitter accounts that you have configured in your Zendesk account.  
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles extends Temboo_Choreography
{
    /**
     * Retrieves a list of monitored Twitter accounts that you have configured in your Zendesk account.  
     *
     * @param Temboo_Session $session The session that owns this ListMonitoredTwitterHandles Choreo.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/MonitoredTwitterHandles/ListMonitoredTwitterHandles/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMonitoredTwitterHandles Choreo.
     *
     * @param Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs|array $inputs (optional) Inputs as Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMonitoredTwitterHandles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMonitoredTwitterHandles Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMonitoredTwitterHandles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMonitoredTwitterHandles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListMonitoredTwitterHandles Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListMonitoredTwitterHandles Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListMonitoredTwitterHandles Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListMonitoredTwitterHandles Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListMonitoredTwitterHandles Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListMonitoredTwitterHandles Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMonitoredTwitterHandles Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMonitoredTwitterHandles execution.
     * @param Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles $choreo The choreography object for this execution.
     * @param Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs|array $inputs (optional) Inputs as Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMonitoredTwitterHandles execution.
     *
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Results New results object.
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
     * Wraps results in appropriate results class for this ListMonitoredTwitterHandles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMonitoredTwitterHandles Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMonitoredTwitterHandles Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_MonitoredTwitterHandles_ListMonitoredTwitterHandles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMonitoredTwitterHandles execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListMonitoredTwitterHandles execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListMonitoredTwitterHandles execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * List all requests for the specified organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListOrganizationRequests extends Temboo_Choreography
{
    /**
     * List all requests for the specified organization.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizationRequests Choreo.
     * @return Zendesk_Requests_ListOrganizationRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/ListOrganizationRequests/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListOrganizationRequests Choreo.
     *
     * @param Zendesk_Requests_ListOrganizationRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListOrganizationRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListOrganizationRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_ListOrganizationRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListOrganizationRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_ListOrganizationRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListOrganizationRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListOrganizationRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListOrganizationRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListOrganizationRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListOrganizationRequests Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListOrganizationRequests Choreo.
     *
     * @param string $value (required, string) The ID of the organization to list requests for.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListOrganizationRequests Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListOrganizationRequests Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListOrganizationRequests Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListOrganizationRequests Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Status input for this ListOrganizationRequests Choreo.
     *
     * @param string $value (optional, string) Comma-seperated list of request statuses to match (e.g. hold, open, solved, ccd)
     * @return Zendesk_Requests_ListOrganizationRequests_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the ListOrganizationRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListOrganizationRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListOrganizationRequests Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizationRequests execution.
     * @param Zendesk_Requests_ListOrganizationRequests $choreo The choreography object for this execution.
     * @param Zendesk_Requests_ListOrganizationRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListOrganizationRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListOrganizationRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_ListOrganizationRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListOrganizationRequests execution.
     *
     * @return Zendesk_Requests_ListOrganizationRequests_Results New results object.
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
     * Wraps results in appropriate results class for this ListOrganizationRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_ListOrganizationRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_ListOrganizationRequests_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListOrganizationRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListOrganizationRequests_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListOrganizationRequests Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_ListOrganizationRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListOrganizationRequests execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListOrganizationRequests execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListOrganizationRequests execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists all organizations.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizations extends Temboo_Choreography
{
    /**
     * Lists all organizations.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizations Choreo.
     * @return Zendesk_Organizations_ListOrganizations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/ListOrganizations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListOrganizations Choreo.
     *
     * @param Zendesk_Organizations_ListOrganizations_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_ListOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_ListOrganizations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_ListOrganizations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_ListOrganizations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_ListOrganizations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_ListOrganizations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListOrganizations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListOrganizations Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListOrganizations Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListOrganizations Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListOrganizations Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListOrganizations Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_ListOrganizations_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListOrganizations Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizations execution.
     * @param Zendesk_Organizations_ListOrganizations $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_ListOrganizations_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_ListOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_ListOrganizations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_ListOrganizations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListOrganizations execution.
     *
     * @return Zendesk_Organizations_ListOrganizations_Results New results object.
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
     * Wraps results in appropriate results class for this ListOrganizations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_ListOrganizations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_ListOrganizations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListOrganizations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_ListOrganizations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListOrganizations execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListOrganizations execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListOrganizations execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists all organizations by user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizationsByUser extends Temboo_Choreography
{
    /**
     * Lists all organizations by user.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizationsByUser Choreo.
     * @return Zendesk_Organizations_ListOrganizationsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/ListOrganizationsByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListOrganizationsByUser Choreo.
     *
     * @param Zendesk_Organizations_ListOrganizationsByUser_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_ListOrganizationsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_ListOrganizationsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListOrganizationsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_ListOrganizationsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListOrganizationsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizationsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListOrganizationsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListOrganizationsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListOrganizationsByUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListOrganizationsByUser Choreo.
     *
     * @param string $value (required, string) ID of the user.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListOrganizationsByUser Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the Number parameter to paginate a large set of results.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListOrganizationsByUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListOrganizationsByUser Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListOrganizationsByUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_ListOrganizationsByUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListOrganizationsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizationsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListOrganizationsByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListOrganizationsByUser execution.
     * @param Zendesk_Organizations_ListOrganizationsByUser $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_ListOrganizationsByUser_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_ListOrganizationsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_ListOrganizationsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListOrganizationsByUser execution.
     *
     * @return Zendesk_Organizations_ListOrganizationsByUser_Results New results object.
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
     * Wraps results in appropriate results class for this ListOrganizationsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_ListOrganizationsByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListOrganizationsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_ListOrganizationsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListOrganizationsByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_ListOrganizationsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListOrganizationsByUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListOrganizationsByUser execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListOrganizationsByUser execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all recent tickets.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListRecent extends Temboo_Choreography
{
    /**
     * Retrieves a list of all recent tickets.
     *
     * @param Temboo_Session $session The session that owns this ListRecent Choreo.
     * @return Zendesk_Tickets_ListRecent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListRecent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRecent Choreo.
     *
     * @param Zendesk_Tickets_ListRecent_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListRecent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListRecent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListRecent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRecent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListRecent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListRecent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRecent Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListRecent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRecent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListRecent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRecent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListRecent Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListRecent Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListRecent Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListRecent Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListRecent Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListRecent_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListRecent Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListRecent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRecent Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRecent execution.
     * @param Zendesk_Tickets_ListRecent $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListRecent_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListRecent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListRecent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListRecent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRecent execution.
     *
     * @return Zendesk_Tickets_ListRecent_Results New results object.
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
     * Wraps results in appropriate results class for this ListRecent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListRecent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListRecent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRecent Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListRecent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRecent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListRecent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRecent execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListRecent execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListRecent execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves the most popular recent tags in decreasing popularity.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tags_ListTags extends Temboo_Choreography
{
    /**
     * Retrieves the most popular recent tags in decreasing popularity.
     *
     * @param Temboo_Session $session The session that owns this ListTags Choreo.
     * @return Zendesk_Tags_ListTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tags/ListTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTags Choreo.
     *
     * @param Zendesk_Tags_ListTags_Inputs|array $inputs (optional) Inputs as Zendesk_Tags_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tags_ListTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tags_ListTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tags_ListTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tags_ListTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tags_ListTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tags_ListTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTags Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListTags Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTags Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTags Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTags Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tags_ListTags_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tags_ListTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTags execution.
     * @param Zendesk_Tags_ListTags $choreo The choreography object for this execution.
     * @param Zendesk_Tags_ListTags_Inputs|array $inputs (optional) Inputs as Zendesk_Tags_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tags_ListTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tags_ListTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTags execution.
     *
     * @return Zendesk_Tags_ListTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tags_ListTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tags_ListTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tags_ListTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tags_ListTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTags execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTags execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTags execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves all the collaborators associated with a given ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketCollaborators extends Temboo_Choreography
{
    /**
     * Retrieves all the collaborators associated with a given ticket.
     *
     * @param Temboo_Session $session The session that owns this ListTicketCollaborators Choreo.
     * @return Zendesk_Tickets_ListTicketCollaborators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListTicketCollaborators/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTicketCollaborators Choreo.
     *
     * @param Zendesk_Tickets_ListTicketCollaborators_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketCollaborators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListTicketCollaborators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTicketCollaborators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListTicketCollaborators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTicketCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketCollaborators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTicketCollaborators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTicketCollaborators input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTicketCollaborators Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListTicketCollaborators Choreo.
     *
     * @param int $value (required, integer) The ID number of a ticket.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListTicketCollaborators Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTicketCollaborators Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTicketCollaborators Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTicketCollaborators Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListTicketCollaborators_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListTicketCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketCollaborators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTicketCollaborators Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTicketCollaborators execution.
     * @param Zendesk_Tickets_ListTicketCollaborators $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListTicketCollaborators_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketCollaborators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListTicketCollaborators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTicketCollaborators execution.
     *
     * @return Zendesk_Tickets_ListTicketCollaborators_Results New results object.
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
     * Wraps results in appropriate results class for this ListTicketCollaborators execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketCollaborators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListTicketCollaborators_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTicketCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketCollaborators_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTicketCollaborators Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketCollaborators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTicketCollaborators execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTicketCollaborators execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTicketCollaborators execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves all the incidents associated with a given ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketIncidents extends Temboo_Choreography
{
    /**
     * Retrieves all the incidents associated with a given ticket.
     *
     * @param Temboo_Session $session The session that owns this ListTicketIncidents Choreo.
     * @return Zendesk_Tickets_ListTicketIncidents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListTicketIncidents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTicketIncidents Choreo.
     *
     * @param Zendesk_Tickets_ListTicketIncidents_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketIncidents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListTicketIncidents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTicketIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListTicketIncidents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTicketIncidents Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketIncidents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTicketIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTicketIncidents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTicketIncidents Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListTicketIncidents Choreo.
     *
     * @param int $value (required, integer) The ID number of a ticket.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListTicketIncidents Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTicketIncidents Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTicketIncidents Choreo.
     *
     * @param int $value (conditional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTicketIncidents Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListTicketIncidents_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListTicketIncidents Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketIncidents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTicketIncidents Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTicketIncidents execution.
     * @param Zendesk_Tickets_ListTicketIncidents $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListTicketIncidents_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketIncidents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListTicketIncidents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTicketIncidents execution.
     *
     * @return Zendesk_Tickets_ListTicketIncidents_Results New results object.
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
     * Wraps results in appropriate results class for this ListTicketIncidents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketIncidents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListTicketIncidents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTicketIncidents Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketIncidents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTicketIncidents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketIncidents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTicketIncidents execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTicketIncidents execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTicketIncidents execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of metrics for all available tickets.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_ListTicketMetrics extends Temboo_Choreography
{
    /**
     * Retrieves a list of metrics for all available tickets.
     *
     * @param Temboo_Session $session The session that owns this ListTicketMetrics Choreo.
     * @return Zendesk_TicketMetrics_ListTicketMetrics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketMetrics/ListTicketMetrics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTicketMetrics Choreo.
     *
     * @param Zendesk_TicketMetrics_ListTicketMetrics_Inputs|array $inputs (optional) Inputs as Zendesk_TicketMetrics_ListTicketMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketMetrics_ListTicketMetrics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTicketMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketMetrics_ListTicketMetrics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_ListTicketMetrics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTicketMetrics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTicketMetrics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTicketMetrics Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListTicketMetrics Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTicketMetrics Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTicketMetrics Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTicketMetrics Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_ListTicketMetrics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTicketMetrics Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTicketMetrics execution.
     * @param Zendesk_TicketMetrics_ListTicketMetrics $choreo The choreography object for this execution.
     * @param Zendesk_TicketMetrics_ListTicketMetrics_Inputs|array $inputs (optional) Inputs as Zendesk_TicketMetrics_ListTicketMetrics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketMetrics_ListTicketMetrics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTicketMetrics execution.
     *
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Results New results object.
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
     * Wraps results in appropriate results class for this ListTicketMetrics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketMetrics_ListTicketMetrics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTicketMetrics Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketMetrics_ListTicketMetrics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTicketMetrics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketMetrics_ListTicketMetrics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTicketMetrics execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTicketMetrics execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTicketMetrics execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all tickets involving a specified organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByOrganization extends Temboo_Choreography
{
    /**
     * Retrieves a list of all tickets involving a specified organization.
     *
     * @param Temboo_Session $session The session that owns this ListTicketsByOrganization Choreo.
     * @return Zendesk_Tickets_ListTicketsByOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListTicketsByOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTicketsByOrganization Choreo.
     *
     * @param Zendesk_Tickets_ListTicketsByOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketsByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListTicketsByOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTicketsByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListTicketsByOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTicketsByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTicketsByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTicketsByOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTicketsByOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OrganizationID input for this ListTicketsByOrganization Choreo.
     *
     * @param int $value (required, integer) The ID number of the organization.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setOrganizationID($value)
    {
        return $this->set('OrganizationID', $value);
    }

    /**
     * Set the value for the Page input for this ListTicketsByOrganization Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTicketsByOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTicketsByOrganization Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTicketsByOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListTicketsByOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListTicketsByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTicketsByOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTicketsByOrganization execution.
     * @param Zendesk_Tickets_ListTicketsByOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListTicketsByOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketsByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListTicketsByOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTicketsByOrganization execution.
     *
     * @return Zendesk_Tickets_ListTicketsByOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this ListTicketsByOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListTicketsByOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTicketsByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTicketsByOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketsByOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTicketsByOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTicketsByOrganization execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTicketsByOrganization execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all tickets involving a specified user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByUser extends Temboo_Choreography
{
    /**
     * Retrieves a list of all tickets involving a specified user.
     *
     * @param Temboo_Session $session The session that owns this ListTicketsByUser Choreo.
     * @return Zendesk_Tickets_ListTicketsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/ListTicketsByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTicketsByUser Choreo.
     *
     * @param Zendesk_Tickets_ListTicketsByUser_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_ListTicketsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTicketsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_ListTicketsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTicketsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTicketsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTicketsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListTicketsByUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListTicketsByUser Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListTicketsByUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListTicketsByUser Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListTicketsByUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this ListTicketsByUser Choreo.
     *
     * @param int $value (required, integer) The ID number of the user.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the UserType input for this ListTicketsByUser Choreo.
     *
     * @param string $value (optional, string) Specify "requested" to find tickets that the given user requested and "ccd" to find tickets on which a given user was CC'd. Defaults to searching for tickets that the user requested.
     * @return Zendesk_Tickets_ListTicketsByUser_Inputs For method chaining.
     */
    public function setUserType($value)
    {
        return $this->set('UserType', $value);
    }
}


/**
 * Execution object for the ListTicketsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTicketsByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTicketsByUser execution.
     * @param Zendesk_Tickets_ListTicketsByUser $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_ListTicketsByUser_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_ListTicketsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_ListTicketsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_ListTicketsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTicketsByUser execution.
     *
     * @return Zendesk_Tickets_ListTicketsByUser_Results New results object.
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
     * Wraps results in appropriate results class for this ListTicketsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_ListTicketsByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTicketsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_ListTicketsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTicketsByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_ListTicketsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTicketsByUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListTicketsByUser execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListTicketsByUser execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists all User Identities for a given User
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ListUserIdentities extends Temboo_Choreography
{
    /**
     * Lists all User Identities for a given User
     *
     * @param Temboo_Session $session The session that owns this ListUserIdentities Choreo.
     * @return Zendesk_UserIdentities_ListUserIdentities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/ListUserIdentities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUserIdentities Choreo.
     *
     * @param Zendesk_UserIdentities_ListUserIdentities_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_ListUserIdentities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_ListUserIdentities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_ListUserIdentities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserIdentities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_ListUserIdentities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserIdentities Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ListUserIdentities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUserIdentities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserIdentities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListUserIdentities Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListUserIdentities Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListUserIdentities Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListUserIdentities Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListUserIdentities Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListUserIdentities Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_ListUserIdentities_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListUserIdentities Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ListUserIdentities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserIdentities Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUserIdentities execution.
     * @param Zendesk_UserIdentities_ListUserIdentities $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_ListUserIdentities_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_ListUserIdentities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_ListUserIdentities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_ListUserIdentities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserIdentities execution.
     *
     * @return Zendesk_UserIdentities_ListUserIdentities_Results New results object.
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
     * Wraps results in appropriate results class for this ListUserIdentities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_ListUserIdentities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_ListUserIdentities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUserIdentities Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ListUserIdentities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUserIdentities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_ListUserIdentities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUserIdentities execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListUserIdentities execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListUserIdentities execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * List all requests that are tied to a specified user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListUserRequests extends Temboo_Choreography
{
    /**
     * List all requests that are tied to a specified user.
     *
     * @param Temboo_Session $session The session that owns this ListUserRequests Choreo.
     * @return Zendesk_Requests_ListUserRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/ListUserRequests/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUserRequests Choreo.
     *
     * @param Zendesk_Requests_ListUserRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListUserRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListUserRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_ListUserRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListUserRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_ListUserRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListUserRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUserRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_ListUserRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListUserRequests Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ListUserRequests Choreo.
     *
     * @param string $value (required, string) The ID of the user to list requests for.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListUserRequests Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListUserRequests Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListUserRequests Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListUserRequests Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Status input for this ListUserRequests Choreo.
     *
     * @param string $value (optional, string) Comma-seperated list of request statuses to match (e.g. hold, open, solved, ccd)
     * @return Zendesk_Requests_ListUserRequests_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the ListUserRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListUserRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserRequests Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUserRequests execution.
     * @param Zendesk_Requests_ListUserRequests $choreo The choreography object for this execution.
     * @param Zendesk_Requests_ListUserRequests_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_ListUserRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_ListUserRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_ListUserRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserRequests execution.
     *
     * @return Zendesk_Requests_ListUserRequests_Results New results object.
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
     * Wraps results in appropriate results class for this ListUserRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_ListUserRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_ListUserRequests_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUserRequests Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_ListUserRequests_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUserRequests Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_ListUserRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUserRequests execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListUserRequests execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListUserRequests execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of all users in a specified group.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByGroup extends Temboo_Choreography
{
    /**
     * Retrieves a list of all users in a specified group.
     *
     * @param Temboo_Session $session The session that owns this ListUsersByGroup Choreo.
     * @return Zendesk_Users_ListUsersByGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/ListUsersByGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUsersByGroup Choreo.
     *
     * @param Zendesk_Users_ListUsersByGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListUsersByGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListUsersByGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_ListUsersByGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUsersByGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListUsersByGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_ListUsersByGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUsersByGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUsersByGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListUsersByGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUsersByGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListUsersByGroup Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the GroupID input for this ListUsersByGroup Choreo.
     *
     * @param int $value (required, integer) The ID number of the group.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the Page input for this ListUsersByGroup Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListUsersByGroup Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListUsersByGroup Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListUsersByGroup Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_ListUsersByGroup_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListUsersByGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUsersByGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUsersByGroup execution.
     * @param Zendesk_Users_ListUsersByGroup $choreo The choreography object for this execution.
     * @param Zendesk_Users_ListUsersByGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListUsersByGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListUsersByGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_ListUsersByGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUsersByGroup execution.
     *
     * @return Zendesk_Users_ListUsersByGroup_Results New results object.
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
     * Wraps results in appropriate results class for this ListUsersByGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_ListUsersByGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_ListUsersByGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUsersByGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUsersByGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_ListUsersByGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUsersByGroup execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListUsersByGroup execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListUsersByGroup execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Retrieves a list of users involving a specified organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByOrganization extends Temboo_Choreography
{
    /**
     * Retrieves a list of users involving a specified organization.
     *
     * @param Temboo_Session $session The session that owns this ListUsersByOrganization Choreo.
     * @return Zendesk_Users_ListUsersByOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/ListUsersByOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUsersByOrganization Choreo.
     *
     * @param Zendesk_Users_ListUsersByOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListUsersByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListUsersByOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_ListUsersByOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUsersByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_ListUsersByOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUsersByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUsersByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUsersByOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListUsersByOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OrganizationID input for this ListUsersByOrganization Choreo.
     *
     * @param int $value (required, integer) The ID number of the organization.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setOrganizationID($value)
    {
        return $this->set('OrganizationID', $value);
    }

    /**
     * Set the value for the Page input for this ListUsersByOrganization Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListUsersByOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListUsersByOrganization Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListUsersByOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_ListUsersByOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListUsersByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUsersByOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUsersByOrganization execution.
     * @param Zendesk_Users_ListUsersByOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Users_ListUsersByOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ListUsersByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ListUsersByOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_ListUsersByOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUsersByOrganization execution.
     *
     * @return Zendesk_Users_ListUsersByOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this ListUsersByOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_ListUsersByOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_ListUsersByOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUsersByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ListUsersByOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUsersByOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_ListUsersByOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUsersByOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListUsersByOrganization execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListUsersByOrganization execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Lists shared and personal views available to the current user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListViews extends Temboo_Choreography
{
    /**
     * Lists shared and personal views available to the current user.
     *
     * @param Temboo_Session $session The session that owns this ListViews Choreo.
     * @return Zendesk_Views_ListViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Views/ListViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListViews Choreo.
     *
     * @param Zendesk_Views_ListViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Views_ListViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Views_ListViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Views_ListViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ListViews Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ListViews Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ListViews Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ListViews Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ListViews Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Views_ListViews_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ListViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListViews execution.
     * @param Zendesk_Views_ListViews $choreo The choreography object for this execution.
     * @param Zendesk_Views_ListViews_Inputs|array $inputs (optional) Inputs as Zendesk_Views_ListViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Views_ListViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Views_ListViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListViews execution.
     *
     * @return Zendesk_Views_ListViews_Results New results object.
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
     * Wraps results in appropriate results class for this ListViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Views_ListViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Views_ListViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListViews Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Views_ListViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Views_ListViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListViews execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListViews execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ListViews execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Sets the given user identity to primary.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_MakeUserIdentityThePrimary extends Temboo_Choreography
{
    /**
     * Sets the given user identity to primary.
     *
     * @param Temboo_Session $session The session that owns this MakeUserIdentityThePrimary Choreo.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/MakeUserIdentityThePrimary/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MakeUserIdentityThePrimary Choreo.
     *
     * @param Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_MakeUserIdentityThePrimary_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MakeUserIdentityThePrimary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MakeUserIdentityThePrimary Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MakeUserIdentityThePrimary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MakeUserIdentityThePrimary input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this MakeUserIdentityThePrimary Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this MakeUserIdentityThePrimary Choreo.
     *
     * @param string $value (conditional, string) ID of the Identity to be updated.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this MakeUserIdentityThePrimary Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this MakeUserIdentityThePrimary Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this MakeUserIdentityThePrimary Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the MakeUserIdentityThePrimary Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_MakeUserIdentityThePrimary_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MakeUserIdentityThePrimary Choreo.
     *
     * @param Temboo_Session $session The session that owns this MakeUserIdentityThePrimary execution.
     * @param Zendesk_UserIdentities_MakeUserIdentityThePrimary $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_MakeUserIdentityThePrimary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_MakeUserIdentityThePrimary $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MakeUserIdentityThePrimary execution.
     *
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Results New results object.
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
     * Wraps results in appropriate results class for this MakeUserIdentityThePrimary execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_MakeUserIdentityThePrimary_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MakeUserIdentityThePrimary Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_MakeUserIdentityThePrimary_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MakeUserIdentityThePrimary Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_MakeUserIdentityThePrimary_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MakeUserIdentityThePrimary execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks the specified audit as trusted. 
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_MarkAuditAsTrusted extends Temboo_Choreography
{
    /**
     * Marks the specified audit as trusted. 
     *
     * @param Temboo_Session $session The session that owns this MarkAuditAsTrusted Choreo.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketAudits/MarkAuditAsTrusted/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MarkAuditAsTrusted Choreo.
     *
     * @param Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketAudits_MarkAuditAsTrusted_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MarkAuditAsTrusted Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MarkAuditAsTrusted Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MarkAuditAsTrusted Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MarkAuditAsTrusted input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuditID input for this MarkAuditAsTrusted Choreo.
     *
     * @param string $value (required, string) The ID of the audit that you want to mark as trusted.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setAuditID($value)
    {
        return $this->set('AuditID', $value);
    }

    /**
     * Set the value for the Email input for this MarkAuditAsTrusted Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this MarkAuditAsTrusted Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this MarkAuditAsTrusted Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TicketID input for this MarkAuditAsTrusted Choreo.
     *
     * @param string $value (required, string) The ID of the ticket associated with the audit.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs For method chaining.
     */
    public function setTicketID($value)
    {
        return $this->set('TicketID', $value);
    }
}


/**
 * Execution object for the MarkAuditAsTrusted Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_MarkAuditAsTrusted_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MarkAuditAsTrusted Choreo.
     *
     * @param Temboo_Session $session The session that owns this MarkAuditAsTrusted execution.
     * @param Zendesk_TicketAudits_MarkAuditAsTrusted $choreo The choreography object for this execution.
     * @param Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_MarkAuditAsTrusted_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketAudits_MarkAuditAsTrusted $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MarkAuditAsTrusted execution.
     *
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Results New results object.
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
     * Wraps results in appropriate results class for this MarkAuditAsTrusted execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketAudits_MarkAuditAsTrusted_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MarkAuditAsTrusted Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_MarkAuditAsTrusted_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MarkAuditAsTrusted Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketAudits_MarkAuditAsTrusted_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MarkAuditAsTrusted execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this MarkAuditAsTrusted execution.
     *
     * @return int (integer) The response status code returned from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * This sends a verification email to the user, asking him to click a link in order to verify ownership of the email address.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_RequestUserVerification extends Temboo_Choreography
{
    /**
     * This sends a verification email to the user, asking him to click a link in order to verify ownership of the email address.
     *
     * @param Temboo_Session $session The session that owns this RequestUserVerification Choreo.
     * @return Zendesk_UserIdentities_RequestUserVerification New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/RequestUserVerification/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RequestUserVerification Choreo.
     *
     * @param Zendesk_UserIdentities_RequestUserVerification_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_RequestUserVerification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_RequestUserVerification_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_RequestUserVerification_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RequestUserVerification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_RequestUserVerification_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RequestUserVerification Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_RequestUserVerification_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RequestUserVerification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RequestUserVerification input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this RequestUserVerification Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this RequestUserVerification Choreo.
     *
     * @param string $value (conditional, string) The ID of the Identity to be verified.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this RequestUserVerification Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this RequestUserVerification Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this RequestUserVerification Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_RequestUserVerification_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the RequestUserVerification Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_RequestUserVerification_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RequestUserVerification Choreo.
     *
     * @param Temboo_Session $session The session that owns this RequestUserVerification execution.
     * @param Zendesk_UserIdentities_RequestUserVerification $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_RequestUserVerification_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_RequestUserVerification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_RequestUserVerification_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_RequestUserVerification $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RequestUserVerification execution.
     *
     * @return Zendesk_UserIdentities_RequestUserVerification_Results New results object.
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
     * Wraps results in appropriate results class for this RequestUserVerification execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_RequestUserVerification_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_RequestUserVerification_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RequestUserVerification Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_RequestUserVerification_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RequestUserVerification Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_RequestUserVerification_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RequestUserVerification execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns search results across all ticket fields.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAll extends Temboo_Choreography
{
    /**
     * Returns search results across all ticket fields.
     *
     * @param Temboo_Session $session The session that owns this SearchAll Choreo.
     * @return Zendesk_Search_SearchAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Search/SearchAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchAll Choreo.
     *
     * @param Zendesk_Search_SearchAll_Inputs|array $inputs (optional) Inputs as Zendesk_Search_SearchAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Search_SearchAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Search_SearchAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Search_SearchAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Search_SearchAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchAll Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Search_SearchAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this SearchAll Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this SearchAll Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this SearchAll Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this SearchAll Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Query input for this SearchAll Choreo.
     *
     * @param string $value (required, string) The search text to be matched.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Server input for this SearchAll Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchAll Choreo.
     *
     * @param string $value (optional, string) Acceptable values: updated_at, created_at, priority, status, ticket_type.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this SearchAll Choreo.
     *
     * @param string $value (optional, string) Indicate either: relevance, asc (for ascending), desc (for descending). Defaults to relevance.
     * @return Zendesk_Search_SearchAll_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the SearchAll Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchAll execution.
     * @param Zendesk_Search_SearchAll $choreo The choreography object for this execution.
     * @param Zendesk_Search_SearchAll_Inputs|array $inputs (optional) Inputs as Zendesk_Search_SearchAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Search_SearchAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Search_SearchAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchAll execution.
     *
     * @return Zendesk_Search_SearchAll_Results New results object.
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
     * Wraps results in appropriate results class for this SearchAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Search_SearchAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Search_SearchAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchAll Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Search_SearchAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchAll execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this SearchAll execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this SearchAll execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Allows anonymous users to search public forums.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAnonymous extends Temboo_Choreography
{
    /**
     * Allows anonymous users to search public forums.
     *
     * @param Temboo_Session $session The session that owns this SearchAnonymous Choreo.
     * @return Zendesk_Search_SearchAnonymous New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Search/SearchAnonymous/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchAnonymous Choreo.
     *
     * @param Zendesk_Search_SearchAnonymous_Inputs|array $inputs (optional) Inputs as Zendesk_Search_SearchAnonymous_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Search_SearchAnonymous_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Search_SearchAnonymous_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchAnonymous Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Search_SearchAnonymous_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Search_SearchAnonymous_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchAnonymous Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAnonymous_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchAnonymous Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Search_SearchAnonymous_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchAnonymous input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this SearchAnonymous Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this SearchAnonymous Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this SearchAnonymous Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this SearchAnonymous Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Query input for this SearchAnonymous Choreo.
     *
     * @param string $value (required, string) The search text to be matched.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Server input for this SearchAnonymous Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchAnonymous Choreo.
     *
     * @param string $value (optional, string) Acceptable values: updated_at, created_at, priority, status, ticket_type.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this SearchAnonymous Choreo.
     *
     * @param string $value (optional, string) Indicate either: relevance, asc (for ascending), desc (for descending). Defaults to relevance.
     * @return Zendesk_Search_SearchAnonymous_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the SearchAnonymous Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAnonymous_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchAnonymous Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchAnonymous execution.
     * @param Zendesk_Search_SearchAnonymous $choreo The choreography object for this execution.
     * @param Zendesk_Search_SearchAnonymous_Inputs|array $inputs (optional) Inputs as Zendesk_Search_SearchAnonymous_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Search_SearchAnonymous_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Search_SearchAnonymous $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchAnonymous execution.
     *
     * @return Zendesk_Search_SearchAnonymous_Results New results object.
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
     * Wraps results in appropriate results class for this SearchAnonymous execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Search_SearchAnonymous_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Search_SearchAnonymous_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchAnonymous Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Search_SearchAnonymous_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchAnonymous Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Search_SearchAnonymous_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchAnonymous execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this SearchAnonymous execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this SearchAnonymous execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Returns a list of users who match the search parameters.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SearchUsers extends Temboo_Choreography
{
    /**
     * Returns a list of users who match the search parameters.
     *
     * @param Temboo_Session $session The session that owns this SearchUsers Choreo.
     * @return Zendesk_Users_SearchUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/SearchUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchUsers Choreo.
     *
     * @param Zendesk_Users_SearchUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_SearchUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_SearchUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_SearchUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_SearchUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_SearchUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SearchUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_SearchUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this SearchUsers Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this SearchUsers Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this SearchUsers Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Query input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) Perform a search across usernames or email addresses.
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Server input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_SearchUsers_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SearchUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchUsers execution.
     * @param Zendesk_Users_SearchUsers $choreo The choreography object for this execution.
     * @param Zendesk_Users_SearchUsers_Inputs|array $inputs (optional) Inputs as Zendesk_Users_SearchUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_SearchUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_SearchUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchUsers execution.
     *
     * @return Zendesk_Users_SearchUsers_Results New results object.
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
     * Wraps results in appropriate results class for this SearchUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_SearchUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_SearchUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SearchUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_SearchUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchUsers execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this SearchUsers execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this SearchUsers execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Returns detailed information about a particular activity.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ShowActivity extends Temboo_Choreography
{
    /**
     * Returns detailed information about a particular activity.
     *
     * @param Temboo_Session $session The session that owns this ShowActivity Choreo.
     * @return Zendesk_ActivityStream_ShowActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/ActivityStream/ShowActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowActivity Choreo.
     *
     * @param Zendesk_ActivityStream_ShowActivity_Inputs|array $inputs (optional) Inputs as Zendesk_ActivityStream_ShowActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_ActivityStream_ShowActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_ActivityStream_ShowActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_ActivityStream_ShowActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ShowActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowActivity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ShowActivity Choreo.
     *
     * @param string $value (required, string) The ID of the activity to retrieve.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this ShowActivity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowActivity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_ActivityStream_ShowActivity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ShowActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ShowActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowActivity execution.
     * @param Zendesk_ActivityStream_ShowActivity $choreo The choreography object for this execution.
     * @param Zendesk_ActivityStream_ShowActivity_Inputs|array $inputs (optional) Inputs as Zendesk_ActivityStream_ShowActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_ActivityStream_ShowActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_ActivityStream_ShowActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowActivity execution.
     *
     * @return Zendesk_ActivityStream_ShowActivity_Results New results object.
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
     * Wraps results in appropriate results class for this ShowActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_ActivityStream_ShowActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_ActivityStream_ShowActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowActivity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_ActivityStream_ShowActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_ActivityStream_ShowActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowActivity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Show assignable groups.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowAssignableGroups extends Temboo_Choreography
{
    /**
     * Show assignable groups.
     *
     * @param Temboo_Session $session The session that owns this ShowAssignableGroups Choreo.
     * @return Zendesk_Groups_ShowAssignableGroups New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/ShowAssignableGroups/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowAssignableGroups Choreo.
     *
     * @param Zendesk_Groups_ShowAssignableGroups_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ShowAssignableGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ShowAssignableGroups_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_ShowAssignableGroups_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowAssignableGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_ShowAssignableGroups_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowAssignableGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowAssignableGroups_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowAssignableGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowAssignableGroups input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowAssignableGroups Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Page input for this ShowAssignableGroups Choreo.
     *
     * @param int $value (optional, integer) The page number of the results to be returned. Used together with the PerPage parameter to paginate a large set of results.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this ShowAssignableGroups Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this ShowAssignableGroups Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Maximum is 100 and default is 100.
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Server input for this ShowAssignableGroups Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_ShowAssignableGroups_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ShowAssignableGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowAssignableGroups_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowAssignableGroups Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowAssignableGroups execution.
     * @param Zendesk_Groups_ShowAssignableGroups $choreo The choreography object for this execution.
     * @param Zendesk_Groups_ShowAssignableGroups_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ShowAssignableGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ShowAssignableGroups_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_ShowAssignableGroups $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowAssignableGroups execution.
     *
     * @return Zendesk_Groups_ShowAssignableGroups_Results New results object.
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
     * Wraps results in appropriate results class for this ShowAssignableGroups execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_ShowAssignableGroups_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_ShowAssignableGroups_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowAssignableGroups Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowAssignableGroups_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowAssignableGroups Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_ShowAssignableGroups_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowAssignableGroups execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ShowAssignableGroups execution.
     *
     * @return int (integer) The index for the next page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "PreviousPage" output from this ShowAssignableGroups execution.
     *
     * @return int (integer) The index for the previous page of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPreviousPage()
    {
        return $this->get('PreviousPage');
    }
}

/**
 * Returns detailed information on the specified audit.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ShowAudit extends Temboo_Choreography
{
    /**
     * Returns detailed information on the specified audit.
     *
     * @param Temboo_Session $session The session that owns this ShowAudit Choreo.
     * @return Zendesk_TicketAudits_ShowAudit New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/TicketAudits/ShowAudit/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowAudit Choreo.
     *
     * @param Zendesk_TicketAudits_ShowAudit_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ShowAudit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ShowAudit_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_TicketAudits_ShowAudit_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowAudit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_TicketAudits_ShowAudit_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowAudit Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ShowAudit_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowAudit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowAudit input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuditID input for this ShowAudit Choreo.
     *
     * @param string $value (required, string) The ID of the audit to show.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setAuditID($value)
    {
        return $this->set('AuditID', $value);
    }

    /**
     * Set the value for the Email input for this ShowAudit Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this ShowAudit Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowAudit Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TicketID input for this ShowAudit Choreo.
     *
     * @param string $value (required, string) The ID of the ticket associated with the audit.
     * @return Zendesk_TicketAudits_ShowAudit_Inputs For method chaining.
     */
    public function setTicketID($value)
    {
        return $this->set('TicketID', $value);
    }
}


/**
 * Execution object for the ShowAudit Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ShowAudit_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowAudit Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowAudit execution.
     * @param Zendesk_TicketAudits_ShowAudit $choreo The choreography object for this execution.
     * @param Zendesk_TicketAudits_ShowAudit_Inputs|array $inputs (optional) Inputs as Zendesk_TicketAudits_ShowAudit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_TicketAudits_ShowAudit_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_TicketAudits_ShowAudit $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowAudit execution.
     *
     * @return Zendesk_TicketAudits_ShowAudit_Results New results object.
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
     * Wraps results in appropriate results class for this ShowAudit execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_TicketAudits_ShowAudit_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_TicketAudits_ShowAudit_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowAudit Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_TicketAudits_ShowAudit_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowAudit Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_TicketAudits_ShowAudit_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowAudit execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the currently authenticated user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowCurrentUser extends Temboo_Choreography
{
    /**
     * Returns information about the currently authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ShowCurrentUser Choreo.
     * @return Zendesk_Users_ShowCurrentUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/ShowCurrentUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowCurrentUser Choreo.
     *
     * @param Zendesk_Users_ShowCurrentUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ShowCurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ShowCurrentUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_ShowCurrentUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowCurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ShowCurrentUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_ShowCurrentUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowCurrentUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowCurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ShowCurrentUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowCurrentUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_ShowCurrentUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_ShowCurrentUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowCurrentUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_ShowCurrentUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this ShowCurrentUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_ShowCurrentUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowCurrentUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_ShowCurrentUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ShowCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowCurrentUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowCurrentUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowCurrentUser execution.
     * @param Zendesk_Users_ShowCurrentUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_ShowCurrentUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ShowCurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ShowCurrentUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_ShowCurrentUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowCurrentUser execution.
     *
     * @return Zendesk_Users_ShowCurrentUser_Results New results object.
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
     * Wraps results in appropriate results class for this ShowCurrentUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_ShowCurrentUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_ShowCurrentUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowCurrentUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowCurrentUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_ShowCurrentUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowCurrentUser execution.
     *
     * @return string The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Shows information for an existing group.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowGroup extends Temboo_Choreography
{
    /**
     * Shows information for an existing group.
     *
     * @param Temboo_Session $session The session that owns this ShowGroup Choreo.
     * @return Zendesk_Groups_ShowGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/ShowGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowGroup Choreo.
     *
     * @param Zendesk_Groups_ShowGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ShowGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ShowGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_ShowGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ShowGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_ShowGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_ShowGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowGroup Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the GroupID input for this ShowGroup Choreo.
     *
     * @param string $value (required, string) The ID of the group to show.
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the Password input for this ShowGroup Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowGroup Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowGroup execution.
     * @param Zendesk_Groups_ShowGroup $choreo The choreography object for this execution.
     * @param Zendesk_Groups_ShowGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_ShowGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_ShowGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_ShowGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowGroup execution.
     *
     * @return Zendesk_Groups_ShowGroup_Results New results object.
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
     * Wraps results in appropriate results class for this ShowGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_ShowGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_ShowGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_ShowGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_ShowGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowGroup execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about given user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowUser extends Temboo_Choreography
{
    /**
     * Returns information about given user.
     *
     * @param Temboo_Session $session The session that owns this ShowUser Choreo.
     * @return Zendesk_Users_ShowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/ShowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowUser Choreo.
     *
     * @param Zendesk_Users_ShowUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ShowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_ShowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ShowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_ShowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_ShowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this ShowUser Choreo.
     *
     * @param int $value (required, integer) The ID number of a user.
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this ShowUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_ShowUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowUser execution.
     * @param Zendesk_Users_ShowUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_ShowUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_ShowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_ShowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowUser execution.
     *
     * @return Zendesk_Users_ShowUser_Results New results object.
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
     * Wraps results in appropriate results class for this ShowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_ShowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_ShowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_ShowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_ShowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Shows the identity with the given ID.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ShowUserIdentity extends Temboo_Choreography
{
    /**
     * Shows the identity with the given ID.
     *
     * @param Temboo_Session $session The session that owns this ShowUserIdentity Choreo.
     * @return Zendesk_UserIdentities_ShowUserIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/ShowUserIdentity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowUserIdentity Choreo.
     *
     * @param Zendesk_UserIdentities_ShowUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_ShowUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_ShowUserIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_ShowUserIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ShowUserIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowUserIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this ShowUserIdentity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this ShowUserIdentity Choreo.
     *
     * @param string $value (required, string) The ID of the Identity.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this ShowUserIdentity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ShowUserIdentity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this ShowUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ShowUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ShowUserIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowUserIdentity Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowUserIdentity execution.
     * @param Zendesk_UserIdentities_ShowUserIdentity $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_ShowUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_ShowUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_ShowUserIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowUserIdentity execution.
     *
     * @return Zendesk_UserIdentities_ShowUserIdentity_Results New results object.
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
     * Wraps results in appropriate results class for this ShowUserIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_ShowUserIdentity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_ShowUserIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowUserIdentity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_ShowUserIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowUserIdentity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Suspends an existing user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SuspendUser extends Temboo_Choreography
{
    /**
     * Suspends an existing user.
     *
     * @param Temboo_Session $session The session that owns this SuspendUser Choreo.
     * @return Zendesk_Users_SuspendUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/SuspendUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SuspendUser Choreo.
     *
     * @param Zendesk_Users_SuspendUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_SuspendUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_SuspendUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_SuspendUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SuspendUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_SuspendUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_SuspendUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SuspendUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SuspendUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SuspendUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_SuspendUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SuspendUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this SuspendUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this SuspendUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this SuspendUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this SuspendUser Choreo.
     *
     * @param int $value (required, integer) The id of the user being updated.
     * @return Zendesk_Users_SuspendUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the SuspendUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SuspendUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SuspendUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this SuspendUser execution.
     * @param Zendesk_Users_SuspendUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_SuspendUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_SuspendUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_SuspendUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_SuspendUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SuspendUser execution.
     *
     * @return Zendesk_Users_SuspendUser_Results New results object.
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
     * Wraps results in appropriate results class for this SuspendUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_SuspendUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_SuspendUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SuspendUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_SuspendUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SuspendUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_SuspendUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SuspendUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing group.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_UpdateGroup extends Temboo_Choreography
{
    /**
     * Updates an existing group.
     *
     * @param Temboo_Session $session The session that owns this UpdateGroup Choreo.
     * @return Zendesk_Groups_UpdateGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Groups/UpdateGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateGroup Choreo.
     *
     * @param Zendesk_Groups_UpdateGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_UpdateGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_UpdateGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Groups_UpdateGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_UpdateGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Groups_UpdateGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_UpdateGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Groups_UpdateGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this UpdateGroup Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the GroupID input for this UpdateGroup Choreo.
     *
     * @param string $value (conditional, string) The ID of the Group to be updated.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the GroupName input for this UpdateGroup Choreo.
     *
     * @param string $value (required, string) New name to update the Group with.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setGroupName($value)
    {
        return $this->set('GroupName', $value);
    }

    /**
     * Set the value for the Password input for this UpdateGroup Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UpdateGroup Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Groups_UpdateGroup_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the UpdateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_UpdateGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateGroup execution.
     * @param Zendesk_Groups_UpdateGroup $choreo The choreography object for this execution.
     * @param Zendesk_Groups_UpdateGroup_Inputs|array $inputs (optional) Inputs as Zendesk_Groups_UpdateGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Groups_UpdateGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Groups_UpdateGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateGroup execution.
     *
     * @return Zendesk_Groups_UpdateGroup_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Groups_UpdateGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Groups_UpdateGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateGroup Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Groups_UpdateGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Groups_UpdateGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateGroup execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update an existing organization.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_UpdateOrganization extends Temboo_Choreography
{
    /**
     * Update an existing organization.
     *
     * @param Temboo_Session $session The session that owns this UpdateOrganization Choreo.
     * @return Zendesk_Organizations_UpdateOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Organizations/UpdateOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateOrganization Choreo.
     *
     * @param Zendesk_Organizations_UpdateOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_UpdateOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_UpdateOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Organizations_UpdateOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Organizations_UpdateOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_UpdateOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OrganizationData input for this UpdateOrganization Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the organization properties you wish to set. This can used when you need to set multiple properties.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setOrganizationData($value)
    {
        return $this->set('OrganizationData', $value);
    }

    /**
     * Set the value for the Email input for this UpdateOrganization Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this UpdateOrganization Choreo.
     *
     * @param string $value (required, string) ID of the organization to update.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Notes input for this UpdateOrganization Choreo.
     *
     * @param string $value (conditional, string) Notes on the organization.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Password input for this UpdateOrganization Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UpdateOrganization Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Organizations_UpdateOrganization_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }
}


/**
 * Execution object for the UpdateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_UpdateOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateOrganization execution.
     * @param Zendesk_Organizations_UpdateOrganization $choreo The choreography object for this execution.
     * @param Zendesk_Organizations_UpdateOrganization_Inputs|array $inputs (optional) Inputs as Zendesk_Organizations_UpdateOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Organizations_UpdateOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Organizations_UpdateOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateOrganization execution.
     *
     * @return Zendesk_Organizations_UpdateOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Organizations_UpdateOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Organizations_UpdateOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateOrganization Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Organizations_UpdateOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Organizations_UpdateOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateOrganization execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing request.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_UpdateRequest extends Temboo_Choreography
{
    /**
     * Updates an existing request.
     *
     * @param Temboo_Session $session The session that owns this UpdateRequest Choreo.
     * @return Zendesk_Requests_UpdateRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Requests/UpdateRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateRequest Choreo.
     *
     * @param Zendesk_Requests_UpdateRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_UpdateRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_UpdateRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Requests_UpdateRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_UpdateRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Requests_UpdateRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_UpdateRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Requests_UpdateRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RequestData input for this UpdateRequest Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the request properties you wish to set. This can be used as an alternative to setting individual inputs representing request properties.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setRequestData($value)
    {
        return $this->set('RequestData', $value);
    }

    /**
     * Set the value for the Comment input for this UpdateRequest Choreo.
     *
     * @param string $value (conditional, string) A comment associated with the request.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email input for this UpdateRequest Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ID input for this UpdateRequest Choreo.
     *
     * @param string $value (conditional, string) The ID of the request to update.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateRequest Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Priority input for this UpdateRequest Choreo.
     *
     * @param string $value (conditional, string) Priority (e.g. low, normal, high, urgent). Defaults to normal.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setPriority($value)
    {
        return $this->set('Priority', $value);
    }

    /**
     * Set the value for the Server input for this UpdateRequest Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this UpdateRequest Choreo.
     *
     * @param string $value (conditional, string) The subject of the request.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Type input for this UpdateRequest Choreo.
     *
     * @param string $value (conditional, string) Type of request (e.g.question, incident, problem, task). Defaults to incident.
     * @return Zendesk_Requests_UpdateRequest_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the UpdateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_UpdateRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateRequest execution.
     * @param Zendesk_Requests_UpdateRequest $choreo The choreography object for this execution.
     * @param Zendesk_Requests_UpdateRequest_Inputs|array $inputs (optional) Inputs as Zendesk_Requests_UpdateRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Requests_UpdateRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Requests_UpdateRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateRequest execution.
     *
     * @return Zendesk_Requests_UpdateRequest_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Requests_UpdateRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Requests_UpdateRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateRequest Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Requests_UpdateRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Requests_UpdateRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateRequest execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_UpdateTicket extends Temboo_Choreography
{
    /**
     * Updates an existing ticket.
     *
     * @param Temboo_Session $session The session that owns this UpdateTicket Choreo.
     * @return Zendesk_Tickets_UpdateTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Tickets/UpdateTicket/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateTicket Choreo.
     *
     * @param Zendesk_Tickets_UpdateTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_UpdateTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_UpdateTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Tickets_UpdateTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_UpdateTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Tickets_UpdateTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_UpdateTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateTicket Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Tickets_UpdateTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Comment input for this UpdateTicket Choreo.
     *
     * @param string $value (conditional, string) The text for a ticket comment.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email input for this UpdateTicket Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Metadata input for this UpdateTicket Choreo.
     *
     * @param string $value (optional, json) Ticket metadata formatted in JSON. See below for more information on the input format.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setMetadata($value)
    {
        return $this->set('Metadata', $value);
    }

    /**
     * Set the value for the Password input for this UpdateTicket Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Public input for this UpdateTicket Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating if this update is public or not. Defaults to "true"
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the Server input for this UpdateTicket Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Status input for this UpdateTicket Choreo.
     *
     * @param string $value (conditional, string) The status of the ticket (i.e. solved, pending, open).
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the TicketData input for this UpdateTicket Choreo.
     *
     * @param string $value (optional, json) A JSON-formatted string containing the ticket properties you wish to set. This can be used as an alternative to setting individual inputs representing ticket properties.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setTicketData($value)
    {
        return $this->set('TicketData', $value);
    }

    /**
     * Set the value for the TicketID input for this UpdateTicket Choreo.
     *
     * @param int $value (required, integer) The id of the ticket being updated.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setTicketID($value)
    {
        return $this->set('TicketID', $value);
    }

    /**
     * Set the value for the Token input for this UpdateTicket Choreo.
     *
     * @param string $value (optional, string) The token associated with an upload to attach to this ticket. Note that tokens can be retrieved by running the UploadFile Choreo.
     * @return Zendesk_Tickets_UpdateTicket_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the UpdateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_UpdateTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateTicket Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateTicket execution.
     * @param Zendesk_Tickets_UpdateTicket $choreo The choreography object for this execution.
     * @param Zendesk_Tickets_UpdateTicket_Inputs|array $inputs (optional) Inputs as Zendesk_Tickets_UpdateTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Tickets_UpdateTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Tickets_UpdateTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateTicket execution.
     *
     * @return Zendesk_Tickets_UpdateTicket_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Tickets_UpdateTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Tickets_UpdateTicket_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateTicket Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Tickets_UpdateTicket_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateTicket Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Tickets_UpdateTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateTicket execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing user.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUser extends Temboo_Choreography
{
    /**
     * Updates an existing user.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser Choreo.
     * @return Zendesk_Users_UpdateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/UpdateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUser Choreo.
     *
     * @param Zendesk_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_UpdateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_UpdateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_UpdateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_UpdateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_UpdateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this UpdateUser Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserData input for this UpdateUser Choreo.
     *
     * @param string $value (required, json) A JSON-formatted string containing the user properties you wish to set.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setUserData($value)
    {
        return $this->set('UserData', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateUser Choreo.
     *
     * @param int $value (required, integer) The ID of the user being updated.
     * @return Zendesk_Users_UpdateUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser execution.
     * @param Zendesk_Users_UpdateUser $choreo The choreography object for this execution.
     * @param Zendesk_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Zendesk_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_UpdateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_UpdateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUser execution.
     *
     * @return Zendesk_Users_UpdateUser_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_UpdateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_UpdateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_UpdateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUser execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the User Identity.    This API method only allows you to set an identity as verified.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_UpdateUserIdentity extends Temboo_Choreography
{
    /**
     * Updates the User Identity.    This API method only allows you to set an identity as verified.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserIdentity Choreo.
     * @return Zendesk_UserIdentities_UpdateUserIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/UpdateUserIdentity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUserIdentity Choreo.
     *
     * @param Zendesk_UserIdentities_UpdateUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_UpdateUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_UpdateUserIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_UpdateUserIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_UpdateUserIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUserIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the Identity to be updated.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Verified input for this UpdateUserIdentity Choreo.
     *
     * @param string $value (required, string) Specifies whether the identity has been verified (true or false).
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Inputs For method chaining.
     */
    public function setVerified($value)
    {
        return $this->set('Verified', $value);
    }
}


/**
 * Execution object for the UpdateUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_UpdateUserIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUserIdentity Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserIdentity execution.
     * @param Zendesk_UserIdentities_UpdateUserIdentity $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_UpdateUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_UpdateUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_UpdateUserIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUserIdentity execution.
     *
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUserIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_UpdateUserIdentity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_UpdateUserIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUserIdentity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_UpdateUserIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUserIdentity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user's profile image.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUserImage extends Temboo_Choreography
{
    /**
     * Updates a user's profile image.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserImage Choreo.
     * @return Zendesk_Users_UpdateUserImage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Users/UpdateUserImage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUserImage Choreo.
     *
     * @param Zendesk_Users_UpdateUserImage_Inputs|array $inputs (optional) Inputs as Zendesk_Users_UpdateUserImage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_UpdateUserImage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Users_UpdateUserImage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUserImage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_UpdateUserImage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Users_UpdateUserImage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUserImage Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUserImage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUserImage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Users_UpdateUserImage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUserImage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Response input for this UpdateUserImage Choreo.
     *
     * @param string $value (required, json) The response from Zendesk.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setResponse($value)
    {
        return $this->set('Response', $value);
    }

    /**
     * Set the value for the Email input for this UpdateUserImage Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ImageURL input for this UpdateUserImage Choreo.
     *
     * @param string $value (required, string) The URL of the profile image.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setImageURL($value)
    {
        return $this->set('ImageURL', $value);
    }

    /**
     * Set the value for the Password input for this UpdateUserImage Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UpdateUserImage Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateUserImage Choreo.
     *
     * @param int $value (required, integer) The ID of the user being updated.
     * @return Zendesk_Users_UpdateUserImage_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UpdateUserImage Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUserImage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUserImage Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserImage execution.
     * @param Zendesk_Users_UpdateUserImage $choreo The choreography object for this execution.
     * @param Zendesk_Users_UpdateUserImage_Inputs|array $inputs (optional) Inputs as Zendesk_Users_UpdateUserImage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Users_UpdateUserImage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Users_UpdateUserImage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUserImage execution.
     *
     * @return Zendesk_Users_UpdateUserImage_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUserImage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Users_UpdateUserImage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Users_UpdateUserImage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUserImage Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Users_UpdateUserImage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUserImage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Users_UpdateUserImage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUserImage execution.
     *
     * @return string (required, json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a file to be used as an attachment to a ticket.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Attachments_UploadAttachment extends Temboo_Choreography
{
    /**
     * Uploads a file to be used as an attachment to a ticket.
     *
     * @param Temboo_Session $session The session that owns this UploadAttachment Choreo.
     * @return Zendesk_Attachments_UploadAttachment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/Attachments/UploadAttachment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadAttachment Choreo.
     *
     * @param Zendesk_Attachments_UploadAttachment_Inputs|array $inputs (optional) Inputs as Zendesk_Attachments_UploadAttachment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Attachments_UploadAttachment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_Attachments_UploadAttachment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadAttachment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Attachments_UploadAttachment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_Attachments_UploadAttachment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Attachments_UploadAttachment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadAttachment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_Attachments_UploadAttachment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadAttachment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this UploadAttachment Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ExistingToken input for this UploadAttachment Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in an existing token when uploading multiple attachments to associate with a ticket.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setExistingToken($value)
    {
        return $this->set('ExistingToken', $value);
    }

    /**
     * Set the value for the FileContents input for this UploadAttachment Choreo.
     *
     * @param string $value (required, string) The Base64 encoded file contents of the attachment you want to upload.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the FileName input for this UploadAttachment Choreo.
     *
     * @param string $value (required, string) The file name of the attachment.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Password input for this UploadAttachment Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this UploadAttachment Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_Attachments_UploadAttachment_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

}


/**
 * Execution object for the UploadAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Attachments_UploadAttachment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadAttachment Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadAttachment execution.
     * @param Zendesk_Attachments_UploadAttachment $choreo The choreography object for this execution.
     * @param Zendesk_Attachments_UploadAttachment_Inputs|array $inputs (optional) Inputs as Zendesk_Attachments_UploadAttachment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_Attachments_UploadAttachment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_Attachments_UploadAttachment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadAttachment execution.
     *
     * @return Zendesk_Attachments_UploadAttachment_Results New results object.
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
     * Wraps results in appropriate results class for this UploadAttachment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_Attachments_UploadAttachment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_Attachments_UploadAttachment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_Attachments_UploadAttachment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadAttachment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_Attachments_UploadAttachment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadAttachment execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this UploadAttachment execution.
     *
     * @return string (string) The token returned from Zendesk for the upload. This can be passed to the ExistingToken input when associating  multiple attachments to the same upload token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Verifies the User Identity.   
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_VerifyUserIdentity extends Temboo_Choreography
{
    /**
     * Verifies the User Identity.   
     *
     * @param Temboo_Session $session The session that owns this VerifyUserIdentity Choreo.
     * @return Zendesk_UserIdentities_VerifyUserIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zendesk/UserIdentities/VerifyUserIdentity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VerifyUserIdentity Choreo.
     *
     * @param Zendesk_UserIdentities_VerifyUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_VerifyUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zendesk_UserIdentities_VerifyUserIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VerifyUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zendesk_UserIdentities_VerifyUserIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VerifyUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_VerifyUserIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VerifyUserIdentity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VerifyUserIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this VerifyUserIdentity Choreo.
     *
     * @param string $value (required, string) The email address you use to login to your Zendesk account.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IdentityID input for this VerifyUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the Identity to verify.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setIdentityID($value)
    {
        return $this->set('IdentityID', $value);
    }

    /**
     * Set the value for the Password input for this VerifyUserIdentity Choreo.
     *
     * @param string $value (required, password) Your Zendesk password.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this VerifyUserIdentity Choreo.
     *
     * @param string $value (required, string) Your Zendesk domain and subdomain (e.g., temboocare.zendesk.com).
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the UserID input for this VerifyUserIdentity Choreo.
     *
     * @param string $value (conditional, string) The ID of the user.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the VerifyUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_VerifyUserIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VerifyUserIdentity Choreo.
     *
     * @param Temboo_Session $session The session that owns this VerifyUserIdentity execution.
     * @param Zendesk_UserIdentities_VerifyUserIdentity $choreo The choreography object for this execution.
     * @param Zendesk_UserIdentities_VerifyUserIdentity_Inputs|array $inputs (optional) Inputs as Zendesk_UserIdentities_VerifyUserIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zendesk_UserIdentities_VerifyUserIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VerifyUserIdentity execution.
     *
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Results New results object.
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
     * Wraps results in appropriate results class for this VerifyUserIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zendesk_UserIdentities_VerifyUserIdentity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VerifyUserIdentity Choreo.
 *
 * @package Temboo
 * @subpackage Zendesk
 */
class Zendesk_UserIdentities_VerifyUserIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VerifyUserIdentity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zendesk_UserIdentities_VerifyUserIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VerifyUserIdentity execution.
     *
     * @return string (json) The response from Zendesk.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>