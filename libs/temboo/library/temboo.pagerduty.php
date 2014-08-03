<?php

/**
 * Temboo PHP SDK PagerDuty classes
 *
 * Execute Choreographies from the Temboo PagerDuty bundle.
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
 * @subpackage PagerDuty
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Updates the state of an incident to "acknowleged", and allows you to log data to an incident log.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_AcknowledgeEvent extends Temboo_Choreography
{
    /**
     * Updates the state of an incident to "acknowleged", and allows you to log data to an incident log.
     *
     * @param Temboo_Session $session The session that owns this AcknowledgeEvent Choreo.
     * @return PagerDuty_Events_AcknowledgeEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Events/AcknowledgeEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AcknowledgeEvent Choreo.
     *
     * @param PagerDuty_Events_AcknowledgeEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_AcknowledgeEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_AcknowledgeEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Events_AcknowledgeEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AcknowledgeEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Events_AcknowledgeEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AcknowledgeEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_AcknowledgeEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AcknowledgeEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AcknowledgeEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Description input for this AcknowledgeEvent Choreo.
     *
     * @param string $value (optional, string) A short description that will appear in the incident's log associated with this event.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Details input for this AcknowledgeEvent Choreo.
     *
     * @param string $value (optional, json) A JSON object containing any data you'd like included in the incident log.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the IncidentKey input for this AcknowledgeEvent Choreo.
     *
     * @param string $value (required, string) Identifies the incident to acknowledge.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function setIncidentKey($value)
    {
        return $this->set('IncidentKey', $value);
    }

    /**
     * Set the value for the ServiceKey input for this AcknowledgeEvent Choreo.
     *
     * @param string $value (required, string) The service key of one of your "Generic API" services. This is listed on a Generic API's service detail page.
     * @return PagerDuty_Events_AcknowledgeEvent_Inputs For method chaining.
     */
    public function setServiceKey($value)
    {
        return $this->set('ServiceKey', $value);
    }
}


/**
 * Execution object for the AcknowledgeEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_AcknowledgeEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AcknowledgeEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this AcknowledgeEvent execution.
     * @param PagerDuty_Events_AcknowledgeEvent $choreo The choreography object for this execution.
     * @param PagerDuty_Events_AcknowledgeEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_AcknowledgeEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_AcknowledgeEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Events_AcknowledgeEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AcknowledgeEvent execution.
     *
     * @return PagerDuty_Events_AcknowledgeEvent_Results New results object.
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
     * Wraps results in appropriate results class for this AcknowledgeEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Events_AcknowledgeEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Events_AcknowledgeEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AcknowledgeEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_AcknowledgeEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AcknowledgeEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Events_AcknowledgeEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AcknowledgeEvent execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Acknowledges an incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_AcknowledgeIncident extends Temboo_Choreography
{
    /**
     * Acknowledges an incident.
     *
     * @param Temboo_Session $session The session that owns this AcknowledgeIncident Choreo.
     * @return PagerDuty_Incidents_AcknowledgeIncident New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/AcknowledgeIncident/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AcknowledgeIncident Choreo.
     *
     * @param PagerDuty_Incidents_AcknowledgeIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_AcknowledgeIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_AcknowledgeIncident_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AcknowledgeIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_AcknowledgeIncident_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AcknowledgeIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_AcknowledgeIncident_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AcknowledgeIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AcknowledgeIncident input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AcknowledgeIncident Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the IncidentID input for this AcknowledgeIncident Choreo.
     *
     * @param string $value (required, string) The ID of the incident to acknowledge.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function setIncidentID($value)
    {
        return $this->set('IncidentID', $value);
    }

    /**
     * Set the value for the RequesterID input for this AcknowledgeIncident Choreo.
     *
     * @param string $value (required, string) The ID of the user making the request. This will be added to the incident log entry.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function setRequesterID($value)
    {
        return $this->set('RequesterID', $value);
    }

    /**
     * Set the value for the SubDomain input for this AcknowledgeIncident Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }
}


/**
 * Execution object for the AcknowledgeIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_AcknowledgeIncident_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AcknowledgeIncident Choreo.
     *
     * @param Temboo_Session $session The session that owns this AcknowledgeIncident execution.
     * @param PagerDuty_Incidents_AcknowledgeIncident $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_AcknowledgeIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_AcknowledgeIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_AcknowledgeIncident $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AcknowledgeIncident execution.
     *
     * @return PagerDuty_Incidents_AcknowledgeIncident_Results New results object.
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
     * Wraps results in appropriate results class for this AcknowledgeIncident execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_AcknowledgeIncident_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AcknowledgeIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_AcknowledgeIncident_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AcknowledgeIncident Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_AcknowledgeIncident_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AcknowledgeIncident execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns high-level statistics about the number of alerts sent for a specified time period.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_AlertsPerTime extends Temboo_Choreography
{
    /**
     * Returns high-level statistics about the number of alerts sent for a specified time period.
     *
     * @param Temboo_Session $session The session that owns this AlertsPerTime Choreo.
     * @return PagerDuty_Reports_AlertsPerTime New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Reports/AlertsPerTime/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AlertsPerTime Choreo.
     *
     * @param PagerDuty_Reports_AlertsPerTime_Inputs|array $inputs (optional) Inputs as PagerDuty_Reports_AlertsPerTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Reports_AlertsPerTime_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Reports_AlertsPerTime_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AlertsPerTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Reports_AlertsPerTime_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AlertsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_AlertsPerTime_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AlertsPerTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AlertsPerTime input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AlertsPerTime Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Rollup input for this AlertsPerTime Choreo.
     *
     * @param string $value (optional, string) Used to rollup totals by time period. Valid values are: daily, weekly, or monthly.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Since input for this AlertsPerTime Choreo.
     *
     * @param string $value (required, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this AlertsPerTime Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the Until input for this AlertsPerTime Choreo.
     *
     * @param string $value (required, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Reports_AlertsPerTime_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the AlertsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_AlertsPerTime_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AlertsPerTime Choreo.
     *
     * @param Temboo_Session $session The session that owns this AlertsPerTime execution.
     * @param PagerDuty_Reports_AlertsPerTime $choreo The choreography object for this execution.
     * @param PagerDuty_Reports_AlertsPerTime_Inputs|array $inputs (optional) Inputs as PagerDuty_Reports_AlertsPerTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Reports_AlertsPerTime_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Reports_AlertsPerTime $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AlertsPerTime execution.
     *
     * @return PagerDuty_Reports_AlertsPerTime_Results New results object.
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
     * Wraps results in appropriate results class for this AlertsPerTime execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Reports_AlertsPerTime_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Reports_AlertsPerTime_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AlertsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_AlertsPerTime_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AlertsPerTime Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Reports_AlertsPerTime_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AlertsPerTime execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a count of incidents that match a specified criteria.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_CountIncidents extends Temboo_Choreography
{
    /**
     * Returns a count of incidents that match a specified criteria.
     *
     * @param Temboo_Session $session The session that owns this CountIncidents Choreo.
     * @return PagerDuty_Incidents_CountIncidents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/CountIncidents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CountIncidents Choreo.
     *
     * @param PagerDuty_Incidents_CountIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_CountIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_CountIncidents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_CountIncidents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CountIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_CountIncidents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_CountIncidents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CountIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_CountIncidents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CountIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_CountIncidents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CountIncidents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CountIncidents Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AssignedToUser input for this CountIncidents Choreo.
     *
     * @param string $value (optional, string) Returns the count of incidents assigned to the specified user.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setAssignedToUser($value)
    {
        return $this->set('AssignedToUser', $value);
    }

    /**
     * Set the value for the DateRange input for this CountIncidents Choreo.
     *
     * @param string $value (optional, string) When set to "all", this allows you to retrieve the count of all incidents since the account was created.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the IncidentKey input for this CountIncidents Choreo.
     *
     * @param string $value (optional, string) Returns the count of incidents with the specified key.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setIncidentKey($value)
    {
        return $this->set('IncidentKey', $value);
    }

    /**
     * Set the value for the Service input for this CountIncidents Choreo.
     *
     * @param string $value (optional, string) Returns the count of incidents associated with the specified service.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setService($value)
    {
        return $this->set('Service', $value);
    }

    /**
     * Set the value for the Since input for this CountIncidents Choreo.
     *
     * @param string $value (optional, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Status input for this CountIncidents Choreo.
     *
     * @param string $value (optional, string) Returns the count of incidents with this specified status. Valid values are: triggered, acknowledged, and resolved.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubDomain input for this CountIncidents Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the Until input for this CountIncidents Choreo.
     *
     * @param string $value (optional, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Incidents_CountIncidents_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the CountIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_CountIncidents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CountIncidents Choreo.
     *
     * @param Temboo_Session $session The session that owns this CountIncidents execution.
     * @param PagerDuty_Incidents_CountIncidents $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_CountIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_CountIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_CountIncidents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_CountIncidents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CountIncidents execution.
     *
     * @return PagerDuty_Incidents_CountIncidents_Results New results object.
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
     * Wraps results in appropriate results class for this CountIncidents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_CountIncidents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_CountIncidents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CountIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_CountIncidents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CountIncidents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_CountIncidents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CountIncidents execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information about a specified incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_GetIncident extends Temboo_Choreography
{
    /**
     * Returns detailed information about a specified incident.
     *
     * @param Temboo_Session $session The session that owns this GetIncident Choreo.
     * @return PagerDuty_Incidents_GetIncident New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/GetIncident/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetIncident Choreo.
     *
     * @param PagerDuty_Incidents_GetIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_GetIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_GetIncident_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_GetIncident_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_GetIncident_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_GetIncident_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_GetIncident_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_GetIncident_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetIncident input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_GetIncident_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_GetIncident_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetIncident Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_GetIncident_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the IncidentID input for this GetIncident Choreo.
     *
     * @param string $value (required, string) An incident ID, or an incident number.
     * @return PagerDuty_Incidents_GetIncident_Inputs For method chaining.
     */
    public function setIncidentID($value)
    {
        return $this->set('IncidentID', $value);
    }

    /**
     * Set the value for the SubDomain input for this GetIncident Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_GetIncident_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }
}


/**
 * Execution object for the GetIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_GetIncident_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetIncident Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetIncident execution.
     * @param PagerDuty_Incidents_GetIncident $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_GetIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_GetIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_GetIncident_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_GetIncident $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetIncident execution.
     *
     * @return PagerDuty_Incidents_GetIncident_Results New results object.
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
     * Wraps results in appropriate results class for this GetIncident execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_GetIncident_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_GetIncident_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_GetIncident_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetIncident Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_GetIncident_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetIncident execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details for a specific incident log entry.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_GetLogEntry extends Temboo_Choreography
{
    /**
     * Returns details for a specific incident log entry.
     *
     * @param Temboo_Session $session The session that owns this GetLogEntry Choreo.
     * @return PagerDuty_LogEntries_GetLogEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/LogEntries/GetLogEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLogEntry Choreo.
     *
     * @param PagerDuty_LogEntries_GetLogEntry_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_GetLogEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_GetLogEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_LogEntries_GetLogEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLogEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_LogEntries_GetLogEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLogEntry Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_GetLogEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLogEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLogEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLogEntry Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the LogEntryID input for this GetLogEntry Choreo.
     *
     * @param string $value (required, string) The ID of the log entry to return.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function setLogEntryID($value)
    {
        return $this->set('LogEntryID', $value);
    }

    /**
     * Set the value for the SubDomain input for this GetLogEntry Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this GetLogEntry Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_LogEntries_GetLogEntry_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }
}


/**
 * Execution object for the GetLogEntry Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_GetLogEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLogEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLogEntry execution.
     * @param PagerDuty_LogEntries_GetLogEntry $choreo The choreography object for this execution.
     * @param PagerDuty_LogEntries_GetLogEntry_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_GetLogEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_GetLogEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_LogEntries_GetLogEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLogEntry execution.
     *
     * @return PagerDuty_LogEntries_GetLogEntry_Results New results object.
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
     * Wraps results in appropriate results class for this GetLogEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_LogEntries_GetLogEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_LogEntries_GetLogEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLogEntry Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_GetLogEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLogEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_LogEntries_GetLogEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLogEntry execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns high-level statistics about the number of incidents created for a specified time period.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_IncidentsPerTime extends Temboo_Choreography
{
    /**
     * Returns high-level statistics about the number of incidents created for a specified time period.
     *
     * @param Temboo_Session $session The session that owns this IncidentsPerTime Choreo.
     * @return PagerDuty_Reports_IncidentsPerTime New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Reports/IncidentsPerTime/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IncidentsPerTime Choreo.
     *
     * @param PagerDuty_Reports_IncidentsPerTime_Inputs|array $inputs (optional) Inputs as PagerDuty_Reports_IncidentsPerTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Reports_IncidentsPerTime_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Reports_IncidentsPerTime_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IncidentsPerTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Reports_IncidentsPerTime_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IncidentsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_IncidentsPerTime_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IncidentsPerTime Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IncidentsPerTime input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IncidentsPerTime Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Rollup input for this IncidentsPerTime Choreo.
     *
     * @param string $value (optional, string) Used to rollup totals by time period. Valid values are: daily, weekly, or monthly.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Since input for this IncidentsPerTime Choreo.
     *
     * @param string $value (required, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this IncidentsPerTime Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the Until input for this IncidentsPerTime Choreo.
     *
     * @param string $value (required, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Reports_IncidentsPerTime_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the IncidentsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_IncidentsPerTime_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IncidentsPerTime Choreo.
     *
     * @param Temboo_Session $session The session that owns this IncidentsPerTime execution.
     * @param PagerDuty_Reports_IncidentsPerTime $choreo The choreography object for this execution.
     * @param PagerDuty_Reports_IncidentsPerTime_Inputs|array $inputs (optional) Inputs as PagerDuty_Reports_IncidentsPerTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Reports_IncidentsPerTime_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Reports_IncidentsPerTime $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IncidentsPerTime execution.
     *
     * @return PagerDuty_Reports_IncidentsPerTime_Results New results object.
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
     * Wraps results in appropriate results class for this IncidentsPerTime execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Reports_IncidentsPerTime_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Reports_IncidentsPerTime_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IncidentsPerTime Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Reports_IncidentsPerTime_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IncidentsPerTime Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Reports_IncidentsPerTime_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IncidentsPerTime execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List alerts for a given time range and allows you to filter by type.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Alerts_ListAlerts extends Temboo_Choreography
{
    /**
     * List alerts for a given time range and allows you to filter by type.
     *
     * @param Temboo_Session $session The session that owns this ListAlerts Choreo.
     * @return PagerDuty_Alerts_ListAlerts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Alerts/ListAlerts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAlerts Choreo.
     *
     * @param PagerDuty_Alerts_ListAlerts_Inputs|array $inputs (optional) Inputs as PagerDuty_Alerts_ListAlerts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Alerts_ListAlerts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Alerts_ListAlerts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAlerts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Alerts_ListAlerts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Alerts_ListAlerts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAlerts Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Alerts_ListAlerts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAlerts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Alerts_ListAlerts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAlerts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAlerts Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Filter input for this ListAlerts Choreo.
     *
     * @param string $value (optional, string) Returns only alerts of this type. Valid types are: SMS, Email, Phone, or Push.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Since input for this ListAlerts Choreo.
     *
     * @param string $value (required, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this ListAlerts Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this ListAlerts Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Until input for this ListAlerts Choreo.
     *
     * @param string $value (required, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Alerts_ListAlerts_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the ListAlerts Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Alerts_ListAlerts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAlerts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAlerts execution.
     * @param PagerDuty_Alerts_ListAlerts $choreo The choreography object for this execution.
     * @param PagerDuty_Alerts_ListAlerts_Inputs|array $inputs (optional) Inputs as PagerDuty_Alerts_ListAlerts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Alerts_ListAlerts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Alerts_ListAlerts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAlerts execution.
     *
     * @return PagerDuty_Alerts_ListAlerts_Results New results object.
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
     * Wraps results in appropriate results class for this ListAlerts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Alerts_ListAlerts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Alerts_ListAlerts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAlerts Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Alerts_ListAlerts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAlerts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Alerts_ListAlerts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAlerts execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to list or search PagerDuty incidents.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ListIncidents extends Temboo_Choreography
{
    /**
     * Allows you to list or search PagerDuty incidents.
     *
     * @param Temboo_Session $session The session that owns this ListIncidents Choreo.
     * @return PagerDuty_Incidents_ListIncidents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/ListIncidents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListIncidents Choreo.
     *
     * @param PagerDuty_Incidents_ListIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ListIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ListIncidents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_ListIncidents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ListIncidents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_ListIncidents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ListIncidents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ListIncidents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListIncidents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListIncidents Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AssignedToUser input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Returns only incidents assigned to the specified user.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setAssignedToUser($value)
    {
        return $this->set('AssignedToUser', $value);
    }

    /**
     * Set the value for the DateRange input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) When set to "all", this allows you to retrieve all incidents since the account was created.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the Fields input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Allows you to select specific incident properties to be returned in the response.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the IncidentKey input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Returns only incidents with the specified key.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setIncidentKey($value)
    {
        return $this->set('IncidentKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListIncidents Choreo.
     *
     * @param int $value (optional, integer) The number of incidents returned. Default (and max limit) is 100.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this ListIncidents Choreo.
     *
     * @param int $value (optional, integer) The offset of the first incident record returned. Default is 0.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Service input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Returns only incidents associated with the specified service.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setService($value)
    {
        return $this->set('Service', $value);
    }

    /**
     * Set the value for the Since input for this ListIncidents Choreo.
     *
     * @param string $value (optional, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SortBy input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Used to specify both the field you wish to sort the results on (incident_number, created_on, or resolved_on), as well as the direction (asc/desc) of the results (e.g., created_on:desc).
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the Status input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) Returns only the incidents with this specified status. Valid values are: triggered, acknowledged, and resolved.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubDomain input for this ListIncidents Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this ListIncidents Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Until input for this ListIncidents Choreo.
     *
     * @param string $value (optional, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_Incidents_ListIncidents_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the ListIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ListIncidents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListIncidents Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListIncidents execution.
     * @param PagerDuty_Incidents_ListIncidents $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_ListIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ListIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ListIncidents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_ListIncidents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListIncidents execution.
     *
     * @return PagerDuty_Incidents_ListIncidents_Results New results object.
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
     * Wraps results in appropriate results class for this ListIncidents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_ListIncidents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_ListIncidents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ListIncidents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListIncidents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_ListIncidents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListIncidents execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all incident log entries across an entire account.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntries extends Temboo_Choreography
{
    /**
     * Lists all incident log entries across an entire account.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntries Choreo.
     * @return PagerDuty_LogEntries_ListLogEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/LogEntries/ListLogEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListLogEntries Choreo.
     *
     * @param PagerDuty_LogEntries_ListLogEntries_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_LogEntries_ListLogEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLogEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_LogEntries_ListLogEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLogEntries Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListLogEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLogEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListLogEntries Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Include input for this ListLogEntries Choreo.
     *
     * @param string $value (optional, string) A list of additional details to include in the response. Valid values are: channel, incident, and service.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the IsOverview input for this ListLogEntries Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, only log entries of type trigger, acknowledge, or resolve are returned. Defaults to false.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setIsOverview($value)
    {
        return $this->set('IsOverview', $value);
    }

    /**
     * Set the value for the Limit input for this ListLogEntries Choreo.
     *
     * @param int $value (optional, integer) The number of log entries returned. Default (and max limit) is 100.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this ListLogEntries Choreo.
     *
     * @param int $value (optional, integer) The offset of the first log entry record returned. Default is 0.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Since input for this ListLogEntries Choreo.
     *
     * @param string $value (optional, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this ListLogEntries Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this ListLogEntries Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Until input for this ListLogEntries Choreo.
     *
     * @param string $value (optional, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntries_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the ListLogEntries Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLogEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntries execution.
     * @param PagerDuty_LogEntries_ListLogEntries $choreo The choreography object for this execution.
     * @param PagerDuty_LogEntries_ListLogEntries_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_LogEntries_ListLogEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLogEntries execution.
     *
     * @return PagerDuty_LogEntries_ListLogEntries_Results New results object.
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
     * Wraps results in appropriate results class for this ListLogEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_LogEntries_ListLogEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListLogEntries Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListLogEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListLogEntries execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all incident log entries associated with a specific incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByIncident extends Temboo_Choreography
{
    /**
     * Lists all incident log entries associated with a specific incident.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntriesByIncident Choreo.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/LogEntries/ListLogEntriesByIncident/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListLogEntriesByIncident Choreo.
     *
     * @param PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_LogEntries_ListLogEntriesByIncident_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLogEntriesByIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLogEntriesByIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListLogEntriesByIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLogEntriesByIncident input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the IncidentID input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (required, string) The ID of the incident associated with the log entries to retrieve.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setIncidentID($value)
    {
        return $this->set('IncidentID', $value);
    }

    /**
     * Set the value for the Include input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (optional, string) A list of additional details to include in the response. Valid values are: channel, incident, and service.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the IsOverview input for this ListLogEntriesByIncident Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, only log entries of type trigger, acknowledge, or resolve are returned. Defaults to false.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setIsOverview($value)
    {
        return $this->set('IsOverview', $value);
    }

    /**
     * Set the value for the Limit input for this ListLogEntriesByIncident Choreo.
     *
     * @param int $value (optional, integer) The number of log events returned. Default (and max limit) is 100.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this ListLogEntriesByIncident Choreo.
     *
     * @param int $value (optional, integer) The offset of the first log event record returned. Default is 0.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Since input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (optional, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Until input for this ListLogEntriesByIncident Choreo.
     *
     * @param string $value (optional, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the ListLogEntriesByIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByIncident_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLogEntriesByIncident Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntriesByIncident execution.
     * @param PagerDuty_LogEntries_ListLogEntriesByIncident $choreo The choreography object for this execution.
     * @param PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntriesByIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_LogEntries_ListLogEntriesByIncident $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLogEntriesByIncident execution.
     *
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Results New results object.
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
     * Wraps results in appropriate results class for this ListLogEntriesByIncident execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_LogEntries_ListLogEntriesByIncident_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListLogEntriesByIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByIncident_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListLogEntriesByIncident Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByIncident_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListLogEntriesByIncident execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all incident log entries associated with a specific user.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByUser extends Temboo_Choreography
{
    /**
     * Lists all incident log entries associated with a specific user.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntriesByUser Choreo.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/LogEntries/ListLogEntriesByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListLogEntriesByUser Choreo.
     *
     * @param PagerDuty_LogEntries_ListLogEntriesByUser_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntriesByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_LogEntries_ListLogEntriesByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLogEntriesByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_LogEntries_ListLogEntriesByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLogEntriesByUser Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListLogEntriesByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLogEntriesByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Include input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (optional, string) A list of additional details to include in the response. Valid values are: channel, incident, and service.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the IsOverview input for this ListLogEntriesByUser Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, only log entries of type trigger, acknowledge, or resolve are returned. Defaults to false.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setIsOverview($value)
    {
        return $this->set('IsOverview', $value);
    }

    /**
     * Set the value for the Limit input for this ListLogEntriesByUser Choreo.
     *
     * @param int $value (optional, integer) The number of log events returned. Default (and max limit) is 100.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this ListLogEntriesByUser Choreo.
     *
     * @param int $value (optional, integer) The offset of the first log event record returned. Default is 0.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Since input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (optional, date) The start of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the SubDomain input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }

    /**
     * Set the value for the TimeZone input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (optional, string) The time zone in which dates in the result will be rendered. Defaults to account time zone.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Until input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (optional, date) The end of the date range to search (e.g., 2013-03-06T15:28-05). Note that including the time is optional.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }

    /**
     * Set the value for the UserID input for this ListLogEntriesByUser Choreo.
     *
     * @param string $value (required, string) The ID of the user associated with the log entries to retrieve.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListLogEntriesByUser Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLogEntriesByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListLogEntriesByUser execution.
     * @param PagerDuty_LogEntries_ListLogEntriesByUser $choreo The choreography object for this execution.
     * @param PagerDuty_LogEntries_ListLogEntriesByUser_Inputs|array $inputs (optional) Inputs as PagerDuty_LogEntries_ListLogEntriesByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_LogEntries_ListLogEntriesByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLogEntriesByUser execution.
     *
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Results New results object.
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
     * Wraps results in appropriate results class for this ListLogEntriesByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_LogEntries_ListLogEntriesByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListLogEntriesByUser Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_LogEntries_ListLogEntriesByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListLogEntriesByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_LogEntries_ListLogEntriesByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListLogEntriesByUser execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Reassigns an incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ReassignIncident extends Temboo_Choreography
{
    /**
     * Reassigns an incident.
     *
     * @param Temboo_Session $session The session that owns this ReassignIncident Choreo.
     * @return PagerDuty_Incidents_ReassignIncident New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/ReassignIncident/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReassignIncident Choreo.
     *
     * @param PagerDuty_Incidents_ReassignIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ReassignIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ReassignIncident_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_ReassignIncident_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReassignIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_ReassignIncident_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReassignIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ReassignIncident_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReassignIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReassignIncident input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReassignIncident Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AssignedToUser input for this ReassignIncident Choreo.
     *
     * @param string $value (required, string) Assigns this incident to the specified user id.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setAssignedToUser($value)
    {
        return $this->set('AssignedToUser', $value);
    }

    /**
     * Set the value for the EscalationLevel input for this ReassignIncident Choreo.
     *
     * @param int $value (optional, integer) Escalates the incident to this level in the escalation policy.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setEscalationLevel($value)
    {
        return $this->set('EscalationLevel', $value);
    }

    /**
     * Set the value for the IncidentID input for this ReassignIncident Choreo.
     *
     * @param string $value (required, string) The ID of the incident to reassign.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setIncidentID($value)
    {
        return $this->set('IncidentID', $value);
    }

    /**
     * Set the value for the RequesterID input for this ReassignIncident Choreo.
     *
     * @param string $value (required, string) The ID of the user making the request. This will be added to the incident log entry.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setRequesterID($value)
    {
        return $this->set('RequesterID', $value);
    }

    /**
     * Set the value for the SubDomain input for this ReassignIncident Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_ReassignIncident_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }
}


/**
 * Execution object for the ReassignIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ReassignIncident_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReassignIncident Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReassignIncident execution.
     * @param PagerDuty_Incidents_ReassignIncident $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_ReassignIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ReassignIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ReassignIncident_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_ReassignIncident $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReassignIncident execution.
     *
     * @return PagerDuty_Incidents_ReassignIncident_Results New results object.
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
     * Wraps results in appropriate results class for this ReassignIncident execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_ReassignIncident_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_ReassignIncident_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReassignIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ReassignIncident_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReassignIncident Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_ReassignIncident_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReassignIncident execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the state of an incident to "resolved", and allows you to log data to an incident log.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_ResolveEvent extends Temboo_Choreography
{
    /**
     * Updates the state of an incident to "resolved", and allows you to log data to an incident log.
     *
     * @param Temboo_Session $session The session that owns this ResolveEvent Choreo.
     * @return PagerDuty_Events_ResolveEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Events/ResolveEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ResolveEvent Choreo.
     *
     * @param PagerDuty_Events_ResolveEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_ResolveEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_ResolveEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Events_ResolveEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ResolveEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_ResolveEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Events_ResolveEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ResolveEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_ResolveEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ResolveEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_ResolveEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ResolveEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Description input for this ResolveEvent Choreo.
     *
     * @param string $value (optional, string) A short description that will appear in the incident's log associated with this event.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Details input for this ResolveEvent Choreo.
     *
     * @param string $value (optional, json) A JSON object containing any data you'd like included in the incident log.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the IncidentKey input for this ResolveEvent Choreo.
     *
     * @param string $value (required, string) Identifies the incident to resolve.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function setIncidentKey($value)
    {
        return $this->set('IncidentKey', $value);
    }

    /**
     * Set the value for the ServiceKey input for this ResolveEvent Choreo.
     *
     * @param string $value (required, string) The service key of one of your "Generic API" services. This is listed on a Generic API's service detail page.
     * @return PagerDuty_Events_ResolveEvent_Inputs For method chaining.
     */
    public function setServiceKey($value)
    {
        return $this->set('ServiceKey', $value);
    }
}


/**
 * Execution object for the ResolveEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_ResolveEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ResolveEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this ResolveEvent execution.
     * @param PagerDuty_Events_ResolveEvent $choreo The choreography object for this execution.
     * @param PagerDuty_Events_ResolveEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_ResolveEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_ResolveEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Events_ResolveEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ResolveEvent execution.
     *
     * @return PagerDuty_Events_ResolveEvent_Results New results object.
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
     * Wraps results in appropriate results class for this ResolveEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Events_ResolveEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Events_ResolveEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ResolveEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_ResolveEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ResolveEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Events_ResolveEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ResolveEvent execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Resolves an incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ResolveIncident extends Temboo_Choreography
{
    /**
     * Resolves an incident.
     *
     * @param Temboo_Session $session The session that owns this ResolveIncident Choreo.
     * @return PagerDuty_Incidents_ResolveIncident New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/ResolveIncident/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ResolveIncident Choreo.
     *
     * @param PagerDuty_Incidents_ResolveIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ResolveIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ResolveIncident_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_ResolveIncident_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ResolveIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_ResolveIncident_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ResolveIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ResolveIncident_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ResolveIncident Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ResolveIncident input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ResolveIncident Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the IncidentID input for this ResolveIncident Choreo.
     *
     * @param string $value (required, string) The ID of the incident to resolve.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function setIncidentID($value)
    {
        return $this->set('IncidentID', $value);
    }

    /**
     * Set the value for the RequesterID input for this ResolveIncident Choreo.
     *
     * @param string $value (required, string) The ID of the user making the request. This will be added to the incident log entry.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function setRequesterID($value)
    {
        return $this->set('RequesterID', $value);
    }

    /**
     * Set the value for the SubDomain input for this ResolveIncident Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_ResolveIncident_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }
}


/**
 * Execution object for the ResolveIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ResolveIncident_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ResolveIncident Choreo.
     *
     * @param Temboo_Session $session The session that owns this ResolveIncident execution.
     * @param PagerDuty_Incidents_ResolveIncident $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_ResolveIncident_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_ResolveIncident_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_ResolveIncident_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_ResolveIncident $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ResolveIncident execution.
     *
     * @return PagerDuty_Incidents_ResolveIncident_Results New results object.
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
     * Wraps results in appropriate results class for this ResolveIncident execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_ResolveIncident_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_ResolveIncident_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ResolveIncident Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_ResolveIncident_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ResolveIncident Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_ResolveIncident_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ResolveIncident execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Triggers an event that will open a new incident or log an entry to an existing incident.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_TriggerEvent extends Temboo_Choreography
{
    /**
     * Triggers an event that will open a new incident or log an entry to an existing incident.
     *
     * @param Temboo_Session $session The session that owns this TriggerEvent Choreo.
     * @return PagerDuty_Events_TriggerEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Events/TriggerEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TriggerEvent Choreo.
     *
     * @param PagerDuty_Events_TriggerEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_TriggerEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_TriggerEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Events_TriggerEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TriggerEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_TriggerEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Events_TriggerEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TriggerEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_TriggerEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TriggerEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Events_TriggerEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TriggerEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Description input for this TriggerEvent Choreo.
     *
     * @param string $value (required, string) A short description of the problem that led to this trigger. The maximum length is 1024 characters.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Details input for this TriggerEvent Choreo.
     *
     * @param string $value (required, json) A JSON object containing the data you'd like included in the incident log.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the IncidentKey input for this TriggerEvent Choreo.
     *
     * @param string $value (optional, string) Identifies the incident to which this trigger event should be applied. If there's no open incident with this key, a new one will be created.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function setIncidentKey($value)
    {
        return $this->set('IncidentKey', $value);
    }

    /**
     * Set the value for the ServiceKey input for this TriggerEvent Choreo.
     *
     * @param string $value (required, string) The service key of one of your "Generic API" services. This is listed on a Generic API's service detail page.
     * @return PagerDuty_Events_TriggerEvent_Inputs For method chaining.
     */
    public function setServiceKey($value)
    {
        return $this->set('ServiceKey', $value);
    }
}


/**
 * Execution object for the TriggerEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_TriggerEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TriggerEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this TriggerEvent execution.
     * @param PagerDuty_Events_TriggerEvent $choreo The choreography object for this execution.
     * @param PagerDuty_Events_TriggerEvent_Inputs|array $inputs (optional) Inputs as PagerDuty_Events_TriggerEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Events_TriggerEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Events_TriggerEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TriggerEvent execution.
     *
     * @return PagerDuty_Events_TriggerEvent_Results New results object.
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
     * Wraps results in appropriate results class for this TriggerEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Events_TriggerEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Events_TriggerEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TriggerEvent Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Events_TriggerEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TriggerEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Events_TriggerEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TriggerEvent execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to acknowledge, resolve, escalate or reassign one or more incidents.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_UpdateIncidents extends Temboo_Choreography
{
    /**
     * Allows you to acknowledge, resolve, escalate or reassign one or more incidents.
     *
     * @param Temboo_Session $session The session that owns this UpdateIncidents Choreo.
     * @return PagerDuty_Incidents_UpdateIncidents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PagerDuty/Incidents/UpdateIncidents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateIncidents Choreo.
     *
     * @param PagerDuty_Incidents_UpdateIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_UpdateIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_UpdateIncidents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PagerDuty_Incidents_UpdateIncidents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PagerDuty_Incidents_UpdateIncidents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_UpdateIncidents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateIncidents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateIncidents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateIncidents Choreo.
     *
     * @param string $value (required, string) The API Key provided by PagerDuty.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Incidents input for this UpdateIncidents Choreo.
     *
     * @param string $value (required, json) An array of incident objects that each include an incident ID. Other optional incident properties that can be present include: status, escalation_level, assigned_to_user, and escalation_policy.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function setIncidents($value)
    {
        return $this->set('Incidents', $value);
    }

    /**
     * Set the value for the RequesterID input for this UpdateIncidents Choreo.
     *
     * @param string $value (required, string) The ID of the user making the request. This will be added to the incident log entry.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function setRequesterID($value)
    {
        return $this->set('RequesterID', $value);
    }

    /**
     * Set the value for the SubDomain input for this UpdateIncidents Choreo.
     *
     * @param string $value (required, string) The subdomain of your PagerDuty site address.
     * @return PagerDuty_Incidents_UpdateIncidents_Inputs For method chaining.
     */
    public function setSubDomain($value)
    {
        return $this->set('SubDomain', $value);
    }
}


/**
 * Execution object for the UpdateIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_UpdateIncidents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateIncidents Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateIncidents execution.
     * @param PagerDuty_Incidents_UpdateIncidents $choreo The choreography object for this execution.
     * @param PagerDuty_Incidents_UpdateIncidents_Inputs|array $inputs (optional) Inputs as PagerDuty_Incidents_UpdateIncidents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PagerDuty_Incidents_UpdateIncidents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PagerDuty_Incidents_UpdateIncidents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateIncidents execution.
     *
     * @return PagerDuty_Incidents_UpdateIncidents_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateIncidents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PagerDuty_Incidents_UpdateIncidents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PagerDuty_Incidents_UpdateIncidents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateIncidents Choreo.
 *
 * @package Temboo
 * @subpackage PagerDuty
 */
class PagerDuty_Incidents_UpdateIncidents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateIncidents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PagerDuty_Incidents_UpdateIncidents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateIncidents execution.
     *
     * @return string (json) The response from PagerDuty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>