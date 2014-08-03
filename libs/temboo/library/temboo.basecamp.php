<?php

/**
 * Temboo PHP SDK Basecamp classes
 *
 * Execute Choreographies from the Temboo Basecamp bundle.
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
 * @subpackage Basecamp
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Marks a specific calendar entry as completed.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteEntry extends Temboo_Choreography
{
    /**
     * Marks a specific calendar entry as completed.
     *
     * @param Temboo_Session $session The session that owns this CompleteEntry Choreo.
     * @return Basecamp_CompleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CompleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompleteEntry Choreo.
     *
     * @param Basecamp_CompleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_CompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CompleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CompleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CompleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CompleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CompleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CompleteEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this CompleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the calendar entry to mark as completed.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this CompleteEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CompleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the project with the calendar entry to mark as completed.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this CompleteEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompleteEntry execution.
     * @param Basecamp_CompleteEntry $choreo The choreography object for this execution.
     * @param Basecamp_CompleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_CompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CompleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CompleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompleteEntry execution.
     *
     * @return Basecamp_CompleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CompleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CompleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CompleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CompleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompleteEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a single, specified item in a To-do list as complete.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteItem extends Temboo_Choreography
{
    /**
     * Marks a single, specified item in a To-do list as complete.
     *
     * @param Temboo_Session $session The session that owns this CompleteItem Choreo.
     * @return Basecamp_CompleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CompleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompleteItem Choreo.
     *
     * @param Basecamp_CompleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_CompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CompleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CompleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CompleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CompleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CompleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CompleteItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this CompleteItem Choreo.
     *
     * @param int $value (required, integer) The ID of the item to mark as complete.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this CompleteItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CompleteItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompleteItem execution.
     * @param Basecamp_CompleteItem $choreo The choreography object for this execution.
     * @param Basecamp_CompleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_CompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CompleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CompleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompleteItem execution.
     *
     * @return Basecamp_CompleteItem_Results New results object.
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
     * Wraps results in appropriate results class for this CompleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CompleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CompleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CompleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CompleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompleteItem execution.
     *
     * @return string There is no structrued response from complete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new calendar entry in a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateEntry extends Temboo_Choreography
{
    /**
     * Creates a new calendar entry in a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return Basecamp_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param Basecamp_CreateEntry_Inputs|array $inputs (optional) Inputs as Basecamp_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EndDate input for this CreateEntry Choreo.
     *
     * @param string $value (required, date) The date the entry ends, in YYYY-MM-DD format. This is the same as StartDate for one-day entries.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Password input for this CreateEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CreateEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the project in which to create the new entry.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this CreateEntry Choreo.
     *
     * @param mixed $value (optional, any) The user ID or company ID (preceded by a “c”, as in "c1234") to assign the entry to. Applies only to "Milestone" entry types.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the StartDate input for this CreateEntry Choreo.
     *
     * @param string $value (required, date) The date the entry starts, in YYYY-MM-DD format.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Title input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The title for the calendar entry to create.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Type input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The type of calendar entry to create, either "Milestone" or "CalendarEvent" (the default).
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param Basecamp_CreateEntry $choreo The choreography object for this execution.
     * @param Basecamp_CreateEntry_Inputs|array $inputs (optional) Inputs as Basecamp_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return Basecamp_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new item for a specified To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateItem extends Temboo_Choreography
{
    /**
     * Creates a new item for a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this CreateItem Choreo.
     * @return Basecamp_CreateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CreateItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateItem Choreo.
     *
     * @param Basecamp_CreateItem_Inputs|array $inputs (optional) Inputs as Basecamp_CreateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CreateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CreateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Content input for this CreateItem Choreo.
     *
     * @param string $value (required, string) The text of the item to create.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setContent($value)
    {
        return $this->set('Content', $value);
    }

    /**
     * Set the value for the ListID input for this CreateItem Choreo.
     *
     * @param int $value (required, integer) The ID for the list in which to create the new item.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this CreateItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this CreateItem Choreo.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") to assign the item to. Defaults to unassigned If left blank.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this CreateItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateItem execution.
     * @param Basecamp_CreateItem $choreo The choreography object for this execution.
     * @param Basecamp_CreateItem_Inputs|array $inputs (optional) Inputs as Basecamp_CreateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CreateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateItem execution.
     *
     * @return Basecamp_CreateItem_Results New results object.
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
     * Wraps results in appropriate results class for this CreateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CreateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CreateItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CreateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateItem execution.
     *
     * @return string No structured response is returned from Basecamp for new item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new To-do list for a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateList extends Temboo_Choreography
{
    /**
     * Creates a new To-do list for a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateList Choreo.
     * @return Basecamp_CreateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CreateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateList Choreo.
     *
     * @param Basecamp_CreateList_Inputs|array $inputs (optional) Inputs as Basecamp_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CreateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CreateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateList Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Description input for this CreateList Choreo.
     *
     * @param string $value (optional, string) The description of the list to create.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the MilestoneID input for this CreateList Choreo.
     *
     * @param int $value (optional, integer) The ID of an existing milestone to include with the new list.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setMilestoneID($value)
    {
        return $this->set('MilestoneID', $value);
    }

    /**
     * Set the value for the Name input for this CreateList Choreo.
     *
     * @param string $value (optional, string) The name of the list to create.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this CreateList Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CreateList Choreo.
     *
     * @param int $value (required, integer) The ID for the project in which you're creating the new list.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this CreateList Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_CreateList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateList execution.
     * @param Basecamp_CreateList $choreo The choreography object for this execution.
     * @param Basecamp_CreateList_Inputs|array $inputs (optional) Inputs as Basecamp_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CreateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateList execution.
     *
     * @return Basecamp_CreateList_Results New results object.
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
     * Wraps results in appropriate results class for this CreateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CreateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CreateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CreateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateList execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new message under a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateMessage extends Temboo_Choreography
{
    /**
     * Creates a new message under a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateMessage Choreo.
     * @return Basecamp_CreateMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CreateMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateMessage Choreo.
     *
     * @param Basecamp_CreateMessage_Inputs|array $inputs (optional) Inputs as Basecamp_CreateMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CreateMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CreateMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateMessage Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateMessage Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Body input for this CreateMessage Choreo.
     *
     * @param string $value (required, string) The body of the message you're creating.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the Password input for this CreateMessage Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this CreateMessage Choreo.
     *
     * @param int $value (required, integer) The ID of the project that the message will be created under.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Title input for this CreateMessage Choreo.
     *
     * @param string $value (required, string) The title of the message you'e creating.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this CreateMessage Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateMessage Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateMessage execution.
     * @param Basecamp_CreateMessage $choreo The choreography object for this execution.
     * @param Basecamp_CreateMessage_Inputs|array $inputs (optional) Inputs as Basecamp_CreateMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CreateMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateMessage execution.
     *
     * @return Basecamp_CreateMessage_Results New results object.
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
     * Wraps results in appropriate results class for this CreateMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CreateMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CreateMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateMessage Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CreateMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateMessage execution.
     *
     * @return string The response from Basecamp. Note that a successful request returns a null result in this output variable.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new Basecamp project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateProject extends Temboo_Choreography
{
    /**
     * Creates a new Basecamp project.
     *
     * @param Temboo_Session $session The session that owns this CreateProject Choreo.
     * @return Basecamp_CreateProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CreateProject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateProject Choreo.
     *
     * @param Basecamp_CreateProject_Inputs|array $inputs (optional) Inputs as Basecamp_CreateProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CreateProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CreateProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CreateProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateProject Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this CreateProject Choreo.
     *
     * @param string $value (required, password) Your Basecamp password. You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectName input for this CreateProject Choreo.
     *
     * @param string $value (required, string) The name for the project you want to create.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setProjectName($value)
    {
        return $this->set('ProjectName', $value);
    }

    /**
     * Set the value for the Username input for this CreateProject Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateProject Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateProject execution.
     * @param Basecamp_CreateProject $choreo The choreography object for this execution.
     * @param Basecamp_CreateProject_Inputs|array $inputs (optional) Inputs as Basecamp_CreateProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CreateProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CreateProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateProject execution.
     *
     * @return Basecamp_CreateProject_Results New results object.
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
     * Wraps results in appropriate results class for this CreateProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CreateProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CreateProject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CreateProject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateProject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CreateProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateProject execution.
     *
     * @return string The response from Basecamp. Note that a successful request returns a null result in this output variable.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information on the person who's credentials are specified.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CurrentPerson extends Temboo_Choreography
{
    /**
     * Retrieves information on the person who's credentials are specified.
     *
     * @param Temboo_Session $session The session that owns this CurrentPerson Choreo.
     * @return Basecamp_CurrentPerson New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/CurrentPerson/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CurrentPerson Choreo.
     *
     * @param Basecamp_CurrentPerson_Inputs|array $inputs (optional) Inputs as Basecamp_CurrentPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CurrentPerson_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_CurrentPerson_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CurrentPerson Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CurrentPerson_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_CurrentPerson_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CurrentPerson Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CurrentPerson_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CurrentPerson Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_CurrentPerson_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CurrentPerson input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CurrentPerson Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this CurrentPerson Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CurrentPerson Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CurrentPerson Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CurrentPerson_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CurrentPerson Choreo.
     *
     * @param Temboo_Session $session The session that owns this CurrentPerson execution.
     * @param Basecamp_CurrentPerson $choreo The choreography object for this execution.
     * @param Basecamp_CurrentPerson_Inputs|array $inputs (optional) Inputs as Basecamp_CurrentPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_CurrentPerson_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_CurrentPerson $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CurrentPerson execution.
     *
     * @return Basecamp_CurrentPerson_Results New results object.
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
     * Wraps results in appropriate results class for this CurrentPerson execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_CurrentPerson_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_CurrentPerson_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CurrentPerson Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_CurrentPerson_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CurrentPerson Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_CurrentPerson_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CurrentPerson execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specific calendar entry in a project you specify.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteEntry extends Temboo_Choreography
{
    /**
     * Deletes a specific calendar entry in a project you specify.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return Basecamp_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param Basecamp_DeleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the calendar entry to delete.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this DeleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the project from which to delete the calendar entry.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param Basecamp_DeleteEntry $choreo The choreography object for this execution.
     * @param Basecamp_DeleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return Basecamp_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return string Basecamp returns no content for delete entry requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified item from a To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteItem extends Temboo_Choreography
{
    /**
     * Deletes a specified item from a To-do list.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem Choreo.
     * @return Basecamp_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/DeleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteItem Choreo.
     *
     * @param Basecamp_DeleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this DeleteItem Choreo.
     *
     * @param int $value (required, integer) The ID for the list item to delete.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param Basecamp_DeleteItem $choreo The choreography object for this execution.
     * @param Basecamp_DeleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return Basecamp_DeleteItem_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string No structured response is returned for delete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified To-do list from a project
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteList extends Temboo_Choreography
{
    /**
     * Deletes a specified To-do list from a project
     *
     * @param Temboo_Session $session The session that owns this DeleteList Choreo.
     * @return Basecamp_DeleteList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/DeleteList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteList Choreo.
     *
     * @param Basecamp_DeleteList_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_DeleteList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_DeleteList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_DeleteList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteList Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this DeleteList Choreo.
     *
     * @param int $value (required, integer) The ID for the To-Do list to delete.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteList Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteList Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteList Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteList execution.
     * @param Basecamp_DeleteList $choreo The choreography object for this execution.
     * @param Basecamp_DeleteList_Inputs|array $inputs (optional) Inputs as Basecamp_DeleteList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_DeleteList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_DeleteList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteList execution.
     *
     * @return Basecamp_DeleteList_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_DeleteList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_DeleteList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_DeleteList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_DeleteList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteList execution.
     *
     * @return string No structured response is returned for delete list requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all calendar entries from a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEntries extends Temboo_Choreography
{
    /**
     * Retrieves all calendar entries from a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllEntries Choreo.
     * @return Basecamp_GetAllEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetAllEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllEntries Choreo.
     *
     * @param Basecamp_GetAllEntries_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetAllEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetAllEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllEntries Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllEntries Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllEntries Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllEntries Choreo.
     *
     * @param int $value (required, integer) The ID for the project from which to retrieve all calendar entries.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllEntries Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllEntries Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllEntries execution.
     * @param Basecamp_GetAllEntries $choreo The choreography object for this execution.
     * @param Basecamp_GetAllEntries_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetAllEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllEntries execution.
     *
     * @return Basecamp_GetAllEntries_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetAllEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetAllEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllEntries Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetAllEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllEntries execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all calendar events from a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEvents extends Temboo_Choreography
{
    /**
     * Retrieves all calendar events from a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllEvents Choreo.
     * @return Basecamp_GetAllEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetAllEvents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllEvents Choreo.
     *
     * @param Basecamp_GetAllEvents_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetAllEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetAllEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllEvents Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllEvents Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllEvents Choreo.
     *
     * @param int $value (required, integer) The ID for the project from which to retrieve all calendar events.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllEvents Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllEvents Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllEvents execution.
     * @param Basecamp_GetAllEvents $choreo The choreography object for this execution.
     * @param Basecamp_GetAllEvents_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetAllEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllEvents execution.
     *
     * @return Basecamp_GetAllEvents_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetAllEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetAllEvents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllEvents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllEvents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetAllEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllEvents execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all items in a specified To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllListItems extends Temboo_Choreography
{
    /**
     * Retrieves all items in a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this GetAllListItems Choreo.
     * @return Basecamp_GetAllListItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetAllListItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllListItems Choreo.
     *
     * @param Basecamp_GetAllListItems_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllListItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetAllListItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllListItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllListItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetAllListItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllListItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllListItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllListItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllListItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllListItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllListItems Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this GetAllListItems Choreo.
     *
     * @param int $value (required, integer) The ID of the list for which you're returning items.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this GetAllListItems Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetAllListItems Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllListItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllListItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllListItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllListItems execution.
     * @param Basecamp_GetAllListItems $choreo The choreography object for this execution.
     * @param Basecamp_GetAllListItems_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllListItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetAllListItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllListItems execution.
     *
     * @return Basecamp_GetAllListItems_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllListItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetAllListItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetAllListItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllListItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllListItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllListItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetAllListItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllListItems execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all To-do lists assigned to a specified user or company.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllLists extends Temboo_Choreography
{
    /**
     * Retrieves all To-do lists assigned to a specified user or company.
     *
     * @param Temboo_Session $session The session that owns this GetAllLists Choreo.
     * @return Basecamp_GetAllLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetAllLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllLists Choreo.
     *
     * @param Basecamp_GetAllLists_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetAllLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetAllLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllLists Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllLists Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this GetAllLists Choreo.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") the To-Do lists are assigned to. Defaults to unassigned To-Dos If left blank.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this GetAllLists Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllLists execution.
     * @param Basecamp_GetAllLists $choreo The choreography object for this execution.
     * @param Basecamp_GetAllLists_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetAllLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllLists execution.
     *
     * @return Basecamp_GetAllLists_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetAllLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetAllLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetAllLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllLists execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all milestones for a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllMilestones extends Temboo_Choreography
{
    /**
     * Retrieves all milestones for a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllMilestones Choreo.
     * @return Basecamp_GetAllMilestones New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetAllMilestones/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllMilestones Choreo.
     *
     * @param Basecamp_GetAllMilestones_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllMilestones_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllMilestones_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetAllMilestones_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllMilestones Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllMilestones_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetAllMilestones_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllMilestones Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllMilestones_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllMilestones Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetAllMilestones_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllMilestones input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllMilestones Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllMilestones Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllMilestones Choreo.
     *
     * @param int $value (required, integer) The ID for the project from which to retrieve all milestones.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllMilestones Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllMilestones Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllMilestones_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllMilestones Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllMilestones execution.
     * @param Basecamp_GetAllMilestones $choreo The choreography object for this execution.
     * @param Basecamp_GetAllMilestones_Inputs|array $inputs (optional) Inputs as Basecamp_GetAllMilestones_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetAllMilestones_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetAllMilestones $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllMilestones execution.
     *
     * @return Basecamp_GetAllMilestones_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllMilestones execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetAllMilestones_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetAllMilestones_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllMilestones Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetAllMilestones_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllMilestones Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetAllMilestones_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllMilestones execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single calendar entry in a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetEntry extends Temboo_Choreography
{
    /**
     * Retrieves a single calendar entry in a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetEntry Choreo.
     * @return Basecamp_GetEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEntry Choreo.
     *
     * @param Basecamp_GetEntry_Inputs|array $inputs (optional) Inputs as Basecamp_GetEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this GetEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the calendar entry to retrieve.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this GetEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the project from which to retrieve the calendar entry.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEntry execution.
     * @param Basecamp_GetEntry $choreo The choreography object for this execution.
     * @param Basecamp_GetEntry_Inputs|array $inputs (optional) Inputs as Basecamp_GetEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEntry execution.
     *
     * @return Basecamp_GetEntry_Results New results object.
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
     * Wraps results in appropriate results class for this GetEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of files (attachments) in a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetFiles extends Temboo_Choreography
{
    /**
     * Retrieves a list of files (attachments) in a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetFiles Choreo.
     * @return Basecamp_GetFiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetFiles/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFiles Choreo.
     *
     * @param Basecamp_GetFiles_Inputs|array $inputs (optional) Inputs as Basecamp_GetFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetFiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetFiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetFiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetFiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFiles Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetFiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetFiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetFiles Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetFiles Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetFiles Choreo.
     *
     * @param int $value (required, integer) The ID for the project that contains the attachments to retrieve.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetFiles Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetFiles Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetFiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFiles Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFiles execution.
     * @param Basecamp_GetFiles $choreo The choreography object for this execution.
     * @param Basecamp_GetFiles_Inputs|array $inputs (optional) Inputs as Basecamp_GetFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetFiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetFiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFiles execution.
     *
     * @return Basecamp_GetFiles_Results New results object.
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
     * Wraps results in appropriate results class for this GetFiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetFiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetFiles_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFiles Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetFiles_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFiles Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetFiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFiles execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single, specified item in a To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetItem extends Temboo_Choreography
{
    /**
     * Retrieves a single, specified item in a To-do list.
     *
     * @param Temboo_Session $session The session that owns this GetItem Choreo.
     * @return Basecamp_GetItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetItem Choreo.
     *
     * @param Basecamp_GetItem_Inputs|array $inputs (optional) Inputs as Basecamp_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetItem_Inputs New instance.
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
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this GetItem Choreo.
     *
     * @param int $value (required, integer) The ID of the item to return.
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this GetItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetItem execution.
     * @param Basecamp_GetItem $choreo The choreography object for this execution.
     * @param Basecamp_GetItem_Inputs|array $inputs (optional) Inputs as Basecamp_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetItem execution.
     *
     * @return Basecamp_GetItem_Results New results object.
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
     * @return Basecamp_GetItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetItem execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single To-do list specified by its ID.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetList extends Temboo_Choreography
{
    /**
     * Retrieves a single To-do list specified by its ID.
     *
     * @param Temboo_Session $session The session that owns this GetList Choreo.
     * @return Basecamp_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetList Choreo.
     *
     * @param Basecamp_GetList_Inputs|array $inputs (optional) Inputs as Basecamp_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetList Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this GetList Choreo.
     *
     * @param int $value (required, integer) The ID for the To-Do list to return.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this GetList Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetList Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param Basecamp_GetList $choreo The choreography object for this execution.
     * @param Basecamp_GetList_Inputs|array $inputs (optional) Inputs as Basecamp_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return Basecamp_GetList_Results New results object.
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
     * Wraps results in appropriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of To-do records that are in the given project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetListsInProject extends Temboo_Choreography
{
    /**
     * Retrieves a list of To-do records that are in the given project.
     *
     * @param Temboo_Session $session The session that owns this GetListsInProject Choreo.
     * @return Basecamp_GetListsInProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetListsInProject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetListsInProject Choreo.
     *
     * @param Basecamp_GetListsInProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetListsInProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetListsInProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetListsInProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListsInProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetListsInProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetListsInProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListsInProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetListsInProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetListsInProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetListsInProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListsInProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetListsInProject Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Filter input for this GetListsInProject Choreo.
     *
     * @param string $value (optional, string) Specify “pending” to return To-Dos with uncompleted items, or “finished” to return To-Dos with no uncompleted items. Defaults to all lists.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Password input for this GetListsInProject Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetListsInProject Choreo.
     *
     * @param int $value (required, integer) The ID for the project that contains the To-Dos to retrieve.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetListsInProject Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetListsInProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetListsInProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListsInProject Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetListsInProject execution.
     * @param Basecamp_GetListsInProject $choreo The choreography object for this execution.
     * @param Basecamp_GetListsInProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetListsInProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetListsInProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetListsInProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListsInProject execution.
     *
     * @return Basecamp_GetListsInProject_Results New results object.
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
     * Wraps results in appropriate results class for this GetListsInProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetListsInProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetListsInProject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetListsInProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetListsInProject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetListsInProject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetListsInProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetListsInProject execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of messages associated with a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetMessages extends Temboo_Choreography
{
    /**
     * Retrieves a list of messages associated with a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetMessages Choreo.
     * @return Basecamp_GetMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMessages Choreo.
     *
     * @param Basecamp_GetMessages_Inputs|array $inputs (optional) Inputs as Basecamp_GetMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessages Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetMessages Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetMessages Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetMessages Choreo.
     *
     * @param int $value (required, integer) The ID for the project associated with the messages you want to retrieve.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetMessages Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetMessages Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMessages execution.
     * @param Basecamp_GetMessages $choreo The choreography object for this execution.
     * @param Basecamp_GetMessages_Inputs|array $inputs (optional) Inputs as Basecamp_GetMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessages execution.
     *
     * @return Basecamp_GetMessages_Results New results object.
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
     * Wraps results in appropriate results class for this GetMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMessages Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMessages execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all people that the logged in user has permission to see.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleAcrossProjects extends Temboo_Choreography
{
    /**
     * Retrieves all people that the logged in user has permission to see.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleAcrossProjects Choreo.
     * @return Basecamp_GetPeopleAcrossProjects New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetPeopleAcrossProjects/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPeopleAcrossProjects Choreo.
     *
     * @param Basecamp_GetPeopleAcrossProjects_Inputs|array $inputs (optional) Inputs as Basecamp_GetPeopleAcrossProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetPeopleAcrossProjects_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetPeopleAcrossProjects_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPeopleAcrossProjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetPeopleAcrossProjects_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPeopleAcrossProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleAcrossProjects_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPeopleAcrossProjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPeopleAcrossProjects input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetPeopleAcrossProjects Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetPeopleAcrossProjects Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetPeopleAcrossProjects Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetPeopleAcrossProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleAcrossProjects_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPeopleAcrossProjects Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleAcrossProjects execution.
     * @param Basecamp_GetPeopleAcrossProjects $choreo The choreography object for this execution.
     * @param Basecamp_GetPeopleAcrossProjects_Inputs|array $inputs (optional) Inputs as Basecamp_GetPeopleAcrossProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetPeopleAcrossProjects_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetPeopleAcrossProjects $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPeopleAcrossProjects execution.
     *
     * @return Basecamp_GetPeopleAcrossProjects_Results New results object.
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
     * Wraps results in appropriate results class for this GetPeopleAcrossProjects execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetPeopleAcrossProjects_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetPeopleAcrossProjects_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPeopleAcrossProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleAcrossProjects_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPeopleAcrossProjects Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetPeopleAcrossProjects_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPeopleAcrossProjects execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all people that have access to a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleWithinProject extends Temboo_Choreography
{
    /**
     * Retrieves all people that have access to a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleWithinProject Choreo.
     * @return Basecamp_GetPeopleWithinProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetPeopleWithinProject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPeopleWithinProject Choreo.
     *
     * @param Basecamp_GetPeopleWithinProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetPeopleWithinProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetPeopleWithinProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetPeopleWithinProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPeopleWithinProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetPeopleWithinProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetPeopleWithinProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPeopleWithinProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleWithinProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPeopleWithinProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetPeopleWithinProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPeopleWithinProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetPeopleWithinProject Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetPeopleWithinProject Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this GetPeopleWithinProject Choreo.
     *
     * @param int $value (required, integer) The ID for the project associated with the people you want to retrieve.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Username input for this GetPeopleWithinProject Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetPeopleWithinProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleWithinProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPeopleWithinProject Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleWithinProject execution.
     * @param Basecamp_GetPeopleWithinProject $choreo The choreography object for this execution.
     * @param Basecamp_GetPeopleWithinProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetPeopleWithinProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetPeopleWithinProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetPeopleWithinProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPeopleWithinProject execution.
     *
     * @return Basecamp_GetPeopleWithinProject_Results New results object.
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
     * Wraps results in appropriate results class for this GetPeopleWithinProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetPeopleWithinProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetPeopleWithinProject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPeopleWithinProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetPeopleWithinProject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPeopleWithinProject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetPeopleWithinProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPeopleWithinProject execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual project using a project id that you specify.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProject extends Temboo_Choreography
{
    /**
     * Retrieves an individual project using a project id that you specify.
     *
     * @param Temboo_Session $session The session that owns this GetProject Choreo.
     * @return Basecamp_GetProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetProject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetProject Choreo.
     *
     * @param Basecamp_GetProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetProject Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetProject Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this GetProject Choreo.
     *
     * @param int $value (required, integer) The ID for the project you want to retrieve.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Username input for this GetProject Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_GetProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProject Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetProject execution.
     * @param Basecamp_GetProject $choreo The choreography object for this execution.
     * @param Basecamp_GetProject_Inputs|array $inputs (optional) Inputs as Basecamp_GetProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProject execution.
     *
     * @return Basecamp_GetProject_Results New results object.
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
     * Wraps results in appropriate results class for this GetProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetProject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetProject Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetProject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetProject execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves active, inactive, and archived projects.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProjects extends Temboo_Choreography
{
    /**
     * Retrieves active, inactive, and archived projects.
     *
     * @param Temboo_Session $session The session that owns this GetProjects Choreo.
     * @return Basecamp_GetProjects New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/GetProjects/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetProjects Choreo.
     *
     * @param Basecamp_GetProjects_Inputs|array $inputs (optional) Inputs as Basecamp_GetProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetProjects_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_GetProjects_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetProjects_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_GetProjects_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProjects_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetProjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_GetProjects_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProjects input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_GetProjects_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetProjects Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetProjects Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetProjects Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProjects_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProjects Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetProjects execution.
     * @param Basecamp_GetProjects $choreo The choreography object for this execution.
     * @param Basecamp_GetProjects_Inputs|array $inputs (optional) Inputs as Basecamp_GetProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_GetProjects_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_GetProjects $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProjects execution.
     *
     * @return Basecamp_GetProjects_Results New results object.
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
     * Wraps results in appropriate results class for this GetProjects execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_GetProjects_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_GetProjects_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetProjects Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_GetProjects_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetProjects Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_GetProjects_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetProjects execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a count of all projects sorted by project status.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ProjectCounts extends Temboo_Choreography
{
    /**
     * Retrieves a count of all projects sorted by project status.
     *
     * @param Temboo_Session $session The session that owns this ProjectCounts Choreo.
     * @return Basecamp_ProjectCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/ProjectCounts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ProjectCounts Choreo.
     *
     * @param Basecamp_ProjectCounts_Inputs|array $inputs (optional) Inputs as Basecamp_ProjectCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ProjectCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_ProjectCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ProjectCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ProjectCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_ProjectCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ProjectCounts Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ProjectCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ProjectCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ProjectCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ProjectCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ProjectCounts Choreo.
     *
     * @param string $value (required, string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this ProjectCounts Choreo.
     *
     * @param string $value (required, password) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ProjectCounts Choreo.
     *
     * @param string $value (required, string) Your Basecamp username or API Key.
     * @return Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ProjectCounts Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ProjectCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ProjectCounts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ProjectCounts execution.
     * @param Basecamp_ProjectCounts $choreo The choreography object for this execution.
     * @param Basecamp_ProjectCounts_Inputs|array $inputs (optional) Inputs as Basecamp_ProjectCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ProjectCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_ProjectCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ProjectCounts execution.
     *
     * @return Basecamp_ProjectCounts_Results New results object.
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
     * Wraps results in appropriate results class for this ProjectCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_ProjectCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_ProjectCounts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ProjectCounts Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ProjectCounts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ProjectCounts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_ProjectCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ProjectCounts execution.
     *
     * @return string (xml) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Reorders the items in a specified To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderItems extends Temboo_Choreography
{
    /**
     * Reorders the items in a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this ReorderItems Choreo.
     * @return Basecamp_ReorderItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/ReorderItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReorderItems Choreo.
     *
     * @param Basecamp_ReorderItems_Inputs|array $inputs (optional) Inputs as Basecamp_ReorderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ReorderItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_ReorderItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReorderItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ReorderItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_ReorderItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReorderItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReorderItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ReorderItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReorderItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ReorderItems Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the FirstItemID input for this ReorderItems Choreo.
     *
     * @param int $value (required, integer) The ID number for the first item in the list.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setFirstItemID($value)
    {
        return $this->set('FirstItemID', $value);
    }

    /**
     * Set the value for the ListID input for this ReorderItems Choreo.
     *
     * @param int $value (required, integer) The ID for the To-do list the items of which you're reordering.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this ReorderItems Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SecondItemID input for this ReorderItems Choreo.
     *
     * @param int $value (optional, integer) The ID number for the second item in the list.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setSecondItemID($value)
    {
        return $this->set('SecondItemID', $value);
    }

    /**
     * Set the value for the ThirdItemID input for this ReorderItems Choreo.
     *
     * @param int $value (optional, integer) The ID number for the third item in the list.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setThirdItemID($value)
    {
        return $this->set('ThirdItemID', $value);
    }

    /**
     * Set the value for the Username input for this ReorderItems Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ReorderItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReorderItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReorderItems execution.
     * @param Basecamp_ReorderItems $choreo The choreography object for this execution.
     * @param Basecamp_ReorderItems_Inputs|array $inputs (optional) Inputs as Basecamp_ReorderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ReorderItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_ReorderItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReorderItems execution.
     *
     * @return Basecamp_ReorderItems_Results New results object.
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
     * Wraps results in appropriate results class for this ReorderItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_ReorderItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_ReorderItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReorderItems Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReorderItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_ReorderItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReorderItems execution.
     *
     * @return string No response is returned from Basecamp for reorder items requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to reorder To-do lists in a specified project.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderLists extends Temboo_Choreography
{
    /**
     * Allows you to reorder To-do lists in a specified project.
     *
     * @param Temboo_Session $session The session that owns this ReorderLists Choreo.
     * @return Basecamp_ReorderLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/ReorderLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReorderLists Choreo.
     *
     * @param Basecamp_ReorderLists_Inputs|array $inputs (optional) Inputs as Basecamp_ReorderLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ReorderLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_ReorderLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReorderLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ReorderLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_ReorderLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReorderLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReorderLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_ReorderLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReorderLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ReorderLists Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the FirstListID input for this ReorderLists Choreo.
     *
     * @param int $value (required, integer) The ID number for the project's first To-Do list.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setFirstListID($value)
    {
        return $this->set('FirstListID', $value);
    }

    /**
     * Set the value for the Password input for this ReorderLists Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this ReorderLists Choreo.
     *
     * @param int $value (required, integer) The ID for the project associated with the to-do lists that you are reordering.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the SecondListID input for this ReorderLists Choreo.
     *
     * @param int $value (optional, integer) The ID number for the project's second To-Do list.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setSecondListID($value)
    {
        return $this->set('SecondListID', $value);
    }

    /**
     * Set the value for the ThirdListID input for this ReorderLists Choreo.
     *
     * @param int $value (optional, integer) The ID number for the project's third To-Do list.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setThirdListID($value)
    {
        return $this->set('ThirdListID', $value);
    }

    /**
     * Set the value for the Username input for this ReorderLists Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ReorderLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReorderLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReorderLists execution.
     * @param Basecamp_ReorderLists $choreo The choreography object for this execution.
     * @param Basecamp_ReorderLists_Inputs|array $inputs (optional) Inputs as Basecamp_ReorderLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_ReorderLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_ReorderLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReorderLists execution.
     *
     * @return Basecamp_ReorderLists_Results New results object.
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
     * Wraps results in appropriate results class for this ReorderLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_ReorderLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_ReorderLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReorderLists Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_ReorderLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReorderLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_ReorderLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReorderLists execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a specific calendar entry as uncompleted.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteEntry extends Temboo_Choreography
{
    /**
     * Marks a specific calendar entry as uncompleted.
     *
     * @param Temboo_Session $session The session that owns this UncompleteEntry Choreo.
     * @return Basecamp_UncompleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/UncompleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UncompleteEntry Choreo.
     *
     * @param Basecamp_UncompleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_UncompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UncompleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_UncompleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UncompleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UncompleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_UncompleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UncompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UncompleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UncompleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UncompleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UncompleteEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this UncompleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the calendar entry to mark as uncompleted.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this UncompleteEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this UncompleteEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the project with the calendar entry to mark as uncompleted.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this UncompleteEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UncompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UncompleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UncompleteEntry execution.
     * @param Basecamp_UncompleteEntry $choreo The choreography object for this execution.
     * @param Basecamp_UncompleteEntry_Inputs|array $inputs (optional) Inputs as Basecamp_UncompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UncompleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_UncompleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UncompleteEntry execution.
     *
     * @return Basecamp_UncompleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UncompleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_UncompleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_UncompleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UncompleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UncompleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_UncompleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UncompleteEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a single, specified item in a To-do list as incomplete.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteItem extends Temboo_Choreography
{
    /**
     * Marks a single, specified item in a To-do list as incomplete.
     *
     * @param Temboo_Session $session The session that owns this UncompleteItem Choreo.
     * @return Basecamp_UncompleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/UncompleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UncompleteItem Choreo.
     *
     * @param Basecamp_UncompleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_UncompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UncompleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_UncompleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UncompleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UncompleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_UncompleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UncompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UncompleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UncompleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UncompleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UncompleteItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this UncompleteItem Choreo.
     *
     * @param int $value (required, integer) The ID of the item to mark as complete.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this UncompleteItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UncompleteItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UncompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UncompleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this UncompleteItem execution.
     * @param Basecamp_UncompleteItem $choreo The choreography object for this execution.
     * @param Basecamp_UncompleteItem_Inputs|array $inputs (optional) Inputs as Basecamp_UncompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UncompleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_UncompleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UncompleteItem execution.
     *
     * @return Basecamp_UncompleteItem_Results New results object.
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
     * Wraps results in appropriate results class for this UncompleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_UncompleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_UncompleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UncompleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UncompleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UncompleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_UncompleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UncompleteItem execution.
     *
     * @return string There is no structrued response from uncomplete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a calendar event or milestone in a project you specify. 
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a calendar event or milestone in a project you specify. 
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return Basecamp_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param Basecamp_UpdateEntry_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EndDate input for this UpdateEntry Choreo.
     *
     * @param string $value (required, date) The new end date for the updated entry, in the format YYYY-MM-DD.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param int $value (required, integer) The ID for the calendar entry to update.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateEntry Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this UpdateEntry Choreo.
     *
     * @param int $value (required, integer) The ID of the project with the calendar entry to update.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this UpdateEntry Choreo.
     *
     * @param mixed $value (optional, any) The user ID or company ID (preceded by a “c”, as in "c1234") to reassign the entry to. Applies only to "Milestone" entry types.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the StartDate input for this UpdateEntry Choreo.
     *
     * @param string $value (optional, date) The new start date for the updated entry, in the format YYYY-MM-DD.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Title input for this UpdateEntry Choreo.
     *
     * @param string $value (optional, string) The new title for the updated entry.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Type input for this UpdateEntry Choreo.
     *
     * @param string $value (optional, string) The new type for the updated entry, either "CalendarEvent" (the default) or "Milestone".
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param Basecamp_UpdateEntry $choreo The choreography object for this execution.
     * @param Basecamp_UpdateEntry_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return Basecamp_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "TemplateOutput" output from this UpdateEntry execution.
     *
     * @return string The request created from the input template.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTemplateOutput()
    {
        return $this->get('TemplateOutput');
    }
}

/**
 * Creates a new item for a specified To-do list.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateItem extends Temboo_Choreography
{
    /**
     * Creates a new item for a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem Choreo.
     * @return Basecamp_UpdateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/UpdateItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateItem Choreo.
     *
     * @param Basecamp_UpdateItem_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_UpdateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_UpdateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Content input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The text of the updated item.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setContent($value)
    {
        return $this->set('Content', $value);
    }

    /**
     * Set the value for the ItemID input for this UpdateItem Choreo.
     *
     * @param int $value (required, integer) The ID for the item to update.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateItem Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this UpdateItem Choreo.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") to re-assign the item to when updated. Defaults to unassigned If left blank.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem execution.
     * @param Basecamp_UpdateItem $choreo The choreography object for this execution.
     * @param Basecamp_UpdateItem_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_UpdateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateItem execution.
     *
     * @return Basecamp_UpdateItem_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_UpdateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_UpdateItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_UpdateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateItem execution.
     *
     * @return string No structured response is returned from Basecamp for new item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified To-do list record 
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateList extends Temboo_Choreography
{
    /**
     * Updates a specified To-do list record 
     *
     * @param Temboo_Session $session The session that owns this UpdateList Choreo.
     * @return Basecamp_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Basecamp/UpdateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateList Choreo.
     *
     * @param Basecamp_UpdateList_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Basecamp_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Basecamp_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Basecamp_UpdateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateList Choreo.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The new description for the list.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateList Choreo.
     *
     * @param int $value (required, integer) The ID for the list to update.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the MilestoneID input for this UpdateList Choreo.
     *
     * @param int $value (optional, integer) The ID of an existing milestone to add to the To-Do list.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setMilestoneID($value)
    {
        return $this->set('MilestoneID', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The new name for the list.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this UpdateList Choreo.
     *
     * @param string $value (required, password) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UpdateList Choreo.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param Basecamp_UpdateList $choreo The choreography object for this execution.
     * @param Basecamp_UpdateList_Inputs|array $inputs (optional) Inputs as Basecamp_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Basecamp_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Basecamp_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return Basecamp_UpdateList_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Basecamp_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Basecamp_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Basecamp
 */
class Basecamp_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Basecamp_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>