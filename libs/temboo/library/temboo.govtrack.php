<?php

/**
 * Temboo PHP SDK GovTrack classes
 *
 * Execute Choreographies from the Temboo GovTrack bundle.
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
 * @subpackage GovTrack
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves bills and resolutions in the U.S. Congress since 1973 (the 93rd Congress).
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Bill extends Temboo_Choreography
{
    /**
     * Retrieves bills and resolutions in the U.S. Congress since 1973 (the 93rd Congress).
     *
     * @param Temboo_Session $session The session that owns this Bill Choreo.
     * @return GovTrack_Bill New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/Bill/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Bill Choreo.
     *
     * @param GovTrack_Bill_Inputs|array $inputs (optional) Inputs as GovTrack_Bill_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Bill_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_Bill_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Bill Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Bill_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_Bill_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Bill Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Bill_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Bill Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Bill_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Bill input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BillID input for this Bill Choreo.
     *
     * @param int $value (optional, integer) The ID number of the bill to retrieve. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setBillID($value)
    {
        return $this->set('BillID', $value);
    }

    /**
     * Set the value for the BillType input for this Bill Choreo.
     *
     * @param string $value (optional, string) The bill's type (e.g. house_resolution, senate_bill, house_bill, etc). Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setBillType($value)
    {
        return $this->set('BillType', $value);
    }

    /**
     * Set the value for the CoSponsors input for this Bill Choreo.
     *
     * @param string $value (optional, string) The bill's cosponsors. When using this filter, provide the id of the cosponsor which is returned when requesting a single bill object. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCoSponsors($value)
    {
        return $this->set('CoSponsors', $value);
    }

    /**
     * Set the value for the Committees input for this Bill Choreo.
     *
     * @param string $value (optional, string) Committees to which the bill has been referred. When using this filter, provide the id of the committee which is returned when requesting a single bill object. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCommittees($value)
    {
        return $this->set('Committees', $value);
    }

    /**
     * Set the value for the Congress input for this Bill Choreo.
     *
     * @param string $value (optional, string) The number of the congress in which the bill was introduced. The current congress is 113. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCongress($value)
    {
        return $this->set('Congress', $value);
    }

    /**
     * Set the value for the CurrentStatusDate input for this Bill Choreo.
     *
     * @param string $value (optional, string) The date of the last major action on the bill corresponding to the CurrentStatus (in YYYY-MM-DD format). Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCurrentStatusDate($value)
    {
        return $this->set('CurrentStatusDate', $value);
    }

    /**
     * Set the value for the CurrentStatus input for this Bill Choreo.
     *
     * @param string $value (optional, string) The current status of the bill (e.g. passed_bill, prov_kill_veto, introduced, etc). Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setCurrentStatus($value)
    {
        return $this->set('CurrentStatus', $value);
    }

    /**
     * Set the value for the Fields input for this Bill Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the IntroducedDate input for this Bill Choreo.
     *
     * @param string $value (optional, string) The date the bill was introduced (in YYYY-MM-DD format). Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setIntroducedDate($value)
    {
        return $this->set('IntroducedDate', $value);
    }

    /**
     * Set the value for the Limit input for this Bill Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Number input for this Bill Choreo.
     *
     * @param string $value (optional, string) The bill's number. This is different from the BillID. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Offset input for this Bill Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this Bill Choreo.
     *
     * @param string $value (conditional, string) Filters according to a full-text search on the object.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Bill Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this Bill Choreo.
     *
     * @param string $value (optional, string) You can order the results using fieldname (ascending) or -fieldname (descending) where "fieldname" is one of the variables that is listed as 'Sortable' in the description. Ex: '-congress'
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Sponsor input for this Bill Choreo.
     *
     * @param string $value (optional, string) The ID of the sponsor of the bill. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setSponsor($value)
    {
        return $this->set('Sponsor', $value);
    }

    /**
     * Set the value for the Terms input for this Bill Choreo.
     *
     * @param string $value (optional, string) Subject areas associated with the bill. When using this filter, provide the id of the term which is returned when requesting a single bill object. Filter operators allowed. Sortable.
     * @return GovTrack_Bill_Inputs For method chaining.
     */
    public function setTerms($value)
    {
        return $this->set('Terms', $value);
    }
}


/**
 * Execution object for the Bill Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Bill_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Bill Choreo.
     *
     * @param Temboo_Session $session The session that owns this Bill execution.
     * @param GovTrack_Bill $choreo The choreography object for this execution.
     * @param GovTrack_Bill_Inputs|array $inputs (optional) Inputs as GovTrack_Bill_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Bill_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_Bill $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Bill execution.
     *
     * @return GovTrack_Bill_Results New results object.
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
     * Wraps results in appropriate results class for this Bill execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_Bill_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_Bill_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Bill Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Bill_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Bill Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_Bill_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Bill execution.
     *
     * @return string The resopnse from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns committees and subcommittees in the United States Congress, including historical committees.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Committee extends Temboo_Choreography
{
    /**
     * Returns committees and subcommittees in the United States Congress, including historical committees.
     *
     * @param Temboo_Session $session The session that owns this Committee Choreo.
     * @return GovTrack_Committee New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/Committee/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Committee Choreo.
     *
     * @param GovTrack_Committee_Inputs|array $inputs (optional) Inputs as GovTrack_Committee_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Committee_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_Committee_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Committee Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Committee_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_Committee_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Committee Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Committee_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Committee Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Committee_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Committee input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CommitteeID input for this Committee Choreo.
     *
     * @param int $value (optional, integer) The id of the committee resource. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setCommitteeID($value)
    {
        return $this->set('CommitteeID', $value);
    }

    /**
     * Set the value for the Committee input for this Committee Choreo.
     *
     * @param string $value (optional, string) Indicates if the object is a committee or a subcommittee. To filter for committees, you can pass "null". For subcommittees, pass the ID of the parent. Filter operators allowed. Sortable.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setCommittee($value)
    {
        return $this->set('Committee', $value);
    }

    /**
     * Set the value for the Fields input for this Committee Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this Committee Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Obsolete input for this Committee Choreo.
     *
     * @param string $value (optional, string) Whether or not the committee still exists. Set to "true" to return committees that are obsolete. Filter operators allowed. Sortable.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setObsolete($value)
    {
        return $this->set('Obsolete', $value);
    }

    /**
     * Set the value for the Offset input for this Committee Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Committee Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this Committee Choreo.
     *
     * @param string $value (optional, string) You can order the results using fieldname (ascending) or -fieldname (descending) where "fieldname" is one of the variables that is listed as 'Sortable' in the description. Ex: '-lastname'
     * @return GovTrack_Committee_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the Committee Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Committee_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Committee Choreo.
     *
     * @param Temboo_Session $session The session that owns this Committee execution.
     * @param GovTrack_Committee $choreo The choreography object for this execution.
     * @param GovTrack_Committee_Inputs|array $inputs (optional) Inputs as GovTrack_Committee_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Committee_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_Committee $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Committee execution.
     *
     * @return GovTrack_Committee_Results New results object.
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
     * Wraps results in appropriate results class for this Committee execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_Committee_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_Committee_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Committee Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Committee_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Committee Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_Committee_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Committee execution.
     *
     * @return string The response from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns records indicating the current membership of a Member of Congress on a committee or subcommittee.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_CommitteeMember extends Temboo_Choreography
{
    /**
     * Returns records indicating the current membership of a Member of Congress on a committee or subcommittee.
     *
     * @param Temboo_Session $session The session that owns this CommitteeMember Choreo.
     * @return GovTrack_CommitteeMember New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/CommitteeMember/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeMember Choreo.
     *
     * @param GovTrack_CommitteeMember_Inputs|array $inputs (optional) Inputs as GovTrack_CommitteeMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_CommitteeMember_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_CommitteeMember_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_CommitteeMember_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_CommitteeMember_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeMember Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_CommitteeMember_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_CommitteeMember_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeMember input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CommitteeMemberID input for this CommitteeMember Choreo.
     *
     * @param int $value (optional, integer) The ID of the committee member resource. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setCommitteeMemberID($value)
    {
        return $this->set('CommitteeMemberID', $value);
    }

    /**
     * Set the value for the Committee input for this CommitteeMember Choreo.
     *
     * @param string $value (optional, string) The committee or subcommittee being served on. To filter by this field, you can pass the ID of the committee. Filter operators allowed. Sortable.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setCommittee($value)
    {
        return $this->set('Committee', $value);
    }

    /**
     * Set the value for the Fields input for this CommitteeMember Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this CommitteeMember Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this CommitteeMember Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Person input for this CommitteeMember Choreo.
     *
     * @param string $value (optional, string) The ID of the Member of Congress serving on a committee. Filter operators allowed. Sortable.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setPerson($value)
    {
        return $this->set('Person', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeMember Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this CommitteeMember Choreo.
     *
     * @param string $value (optional, string) You can order the results using fieldname (ascending) or -fieldname (descending) where "fieldname" is one of the variables that is listed as 'Sortable' in the description. Ex: '-lastname'
     * @return GovTrack_CommitteeMember_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the CommitteeMember Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_CommitteeMember_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeMember Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeMember execution.
     * @param GovTrack_CommitteeMember $choreo The choreography object for this execution.
     * @param GovTrack_CommitteeMember_Inputs|array $inputs (optional) Inputs as GovTrack_CommitteeMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_CommitteeMember_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_CommitteeMember $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeMember execution.
     *
     * @return GovTrack_CommitteeMember_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeMember execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_CommitteeMember_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_CommitteeMember_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeMember Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_CommitteeMember_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeMember Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_CommitteeMember_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeMember execution.
     *
     * @return string The response from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns members of Congress and U.S. Presidents since the founding of the nation.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Person extends Temboo_Choreography
{
    /**
     * Returns members of Congress and U.S. Presidents since the founding of the nation.
     *
     * @param Temboo_Session $session The session that owns this Person Choreo.
     * @return GovTrack_Person New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/Person/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Person Choreo.
     *
     * @param GovTrack_Person_Inputs|array $inputs (optional) Inputs as GovTrack_Person_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Person_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_Person_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Person Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Person_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_Person_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Person Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Person_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Person Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Person_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Person input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Fields input for this Person Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Gender input for this Person Choreo.
     *
     * @param string $value (optional, string) The person's gender (male or female). For historical data, gender is sometimes not specified. Filter operators allowed. Sortable.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the LastName input for this Person Choreo.
     *
     * @param string $value (optional, string) The representative's last name. Filter operators allowed. Sortable.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Limit input for this Person Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this Person Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the PersonID input for this Person Choreo.
     *
     * @param int $value (optional, integer) The ID number for a person to retrieve. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setPersonID($value)
    {
        return $this->set('PersonID', $value);
    }

    /**
     * Set the value for the Query input for this Person Choreo.
     *
     * @param string $value (conditional, string) Filters according to a full-text search on the object.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Person Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this Person Choreo.
     *
     * @param string $value (optional, string) You can order the results using fieldname (ascending) or -fieldname (descending) where "fieldname" is one of the variables that is listed as 'Sortable' in the description. Ex: '-lastname'
     * @return GovTrack_Person_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the Person Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Person_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Person Choreo.
     *
     * @param Temboo_Session $session The session that owns this Person execution.
     * @param GovTrack_Person $choreo The choreography object for this execution.
     * @param GovTrack_Person_Inputs|array $inputs (optional) Inputs as GovTrack_Person_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Person_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_Person $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Person execution.
     *
     * @return GovTrack_Person_Results New results object.
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
     * Wraps results in appropriate results class for this Person execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_Person_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_Person_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Person Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Person_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Person Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_Person_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Person execution.
     *
     * @return string The response from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns terms held in office by Members of Congress and U.S. Presidents.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Role extends Temboo_Choreography
{
    /**
     * Returns terms held in office by Members of Congress and U.S. Presidents.
     *
     * @param Temboo_Session $session The session that owns this Role Choreo.
     * @return GovTrack_Role New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/Role/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Role Choreo.
     *
     * @param GovTrack_Role_Inputs|array $inputs (optional) Inputs as GovTrack_Role_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Role_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_Role_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Role Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Role_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_Role_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Role Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Role_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Role Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Role_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Role input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Current input for this Role Choreo.
     *
     * @param string $value (optional, string) Whether the role is currently held, or it is archival information. Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setCurrent($value)
    {
        return $this->set('Current', $value);
    }

    /**
     * Set the value for the District input for this Role Choreo.
     *
     * @param string $value (optional, string) For representatives, the number of their congressional district. 0 for at-large districts, -1 in historical data if the district is not known. Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setDistrict($value)
    {
        return $this->set('District', $value);
    }

    /**
     * Set the value for the EndDate input for this Role Choreo.
     *
     * @param string $value (optional, string) The date the role ended - when the person resigned, died, etc. (in YYYY-MM-DD format). Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Fields input for this Role Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this Role Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this Role Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Party input for this Role Choreo.
     *
     * @param string $value (optional, string) The political party of the person. If the person changes party, it is usually the most recent party during this role. Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the Person input for this Role Choreo.
     *
     * @param string $value (optional, string) The person associated with this role. When using this filter, provide the id of the person which is returned when requesting a single role object.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setPerson($value)
    {
        return $this->set('Person', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Role Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RoleID input for this Role Choreo.
     *
     * @param string $value (optional, string) Specify the ID number of a role object to retrieve the record for only that role. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setRoleID($value)
    {
        return $this->set('RoleID', $value);
    }

    /**
     * Set the value for the RoleType input for this Role Choreo.
     *
     * @param string $value (optional, string) The type of role (e.g. senator, representative, or president). Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setRoleType($value)
    {
        return $this->set('RoleType', $value);
    }

    /**
     * Set the value for the SenatorClass input for this Role Choreo.
     *
     * @param int $value (optional, integer) For senators, their election class, which determines which years they are up for election. Acceptable values: class1, class2, class3. Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setSenatorClass($value)
    {
        return $this->set('SenatorClass', $value);
    }

    /**
     * Set the value for the Sort input for this Role Choreo.
     *
     * @param string $value (optional, string) You can order the results by date using fieldname (ascending) or -fieldname (descending), where "fieldname" is either startdate or enddate.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartDate input for this Role Choreo.
     *
     * @param string $value (optional, string) The date the role began  - when the person took office (in YYYY-MM-DD format). Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the State input for this Role Choreo.
     *
     * @param string $value (optional, string) For senators and representatives, the two-letter USPS abbreviation for the state or territory they are serving. Filter operators allowed. Sortable.
     * @return GovTrack_Role_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the Role Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Role_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Role Choreo.
     *
     * @param Temboo_Session $session The session that owns this Role execution.
     * @param GovTrack_Role $choreo The choreography object for this execution.
     * @param GovTrack_Role_Inputs|array $inputs (optional) Inputs as GovTrack_Role_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Role_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_Role $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Role execution.
     *
     * @return GovTrack_Role_Results New results object.
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
     * Wraps results in appropriate results class for this Role execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_Role_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_Role_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Role Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Role_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Role Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_Role_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Role execution.
     *
     * @return string The response from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns roll call votes in the U.S. Congress since 1789.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Vote extends Temboo_Choreography
{
    /**
     * Returns roll call votes in the U.S. Congress since 1789.
     *
     * @param Temboo_Session $session The session that owns this Vote Choreo.
     * @return GovTrack_Vote New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/Vote/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Vote Choreo.
     *
     * @param GovTrack_Vote_Inputs|array $inputs (optional) Inputs as GovTrack_Vote_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Vote_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_Vote_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Vote Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Vote_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_Vote_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Vote Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Vote_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Vote Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_Vote_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Vote input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Chamber input for this Vote Choreo.
     *
     * @param string $value (optional, string) The chamber in which the vote was held. Valid values are: house or senate. Filter operators allowed but only when filtering by Congress as well. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the Congress input for this Vote Choreo.
     *
     * @param string $value (optional, string) The number of the congress in which the vote took place. The current congress is 113. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setCongress($value)
    {
        return $this->set('Congress', $value);
    }

    /**
     * Set the value for the Created input for this Vote Choreo.
     *
     * @param string $value (optional, string) The date (and in recent history also the time) on which the vote was held. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setCreated($value)
    {
        return $this->set('Created', $value);
    }

    /**
     * Set the value for the Fields input for this Vote Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this Vote Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Number input for this Vote Choreo.
     *
     * @param string $value (optional, string) The number of the vote, unique to a Congress and session pair. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Offset input for this Vote Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the RelatedAmendment input for this Vote Choreo.
     *
     * @param string $value (optional, string) The ID of a related amendment. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setRelatedAmendment($value)
    {
        return $this->set('RelatedAmendment', $value);
    }

    /**
     * Set the value for the RelatedBill input for this Vote Choreo.
     *
     * @param string $value (optional, string) A bill related to this vote. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setRelatedBill($value)
    {
        return $this->set('RelatedBill', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Vote Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Session input for this Vote Choreo.
     *
     * @param string $value (optional, string) The session of congress. Filter operators allowed. Sortable.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setSession($value)
    {
        return $this->set('Session', $value);
    }

    /**
     * Set the value for the Sort input for this Vote Choreo.
     *
     * @param string $value (optional, string) You can order the results using created (ascending) or -created (descending) for the dates that each vote was held.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the VoteID input for this Vote Choreo.
     *
     * @param int $value (optional, integer) The ID of a vote object to retrieve. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_Vote_Inputs For method chaining.
     */
    public function setVoteID($value)
    {
        return $this->set('VoteID', $value);
    }
}


/**
 * Execution object for the Vote Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Vote_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Vote Choreo.
     *
     * @param Temboo_Session $session The session that owns this Vote execution.
     * @param GovTrack_Vote $choreo The choreography object for this execution.
     * @param GovTrack_Vote_Inputs|array $inputs (optional) Inputs as GovTrack_Vote_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_Vote_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_Vote $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Vote execution.
     *
     * @return GovTrack_Vote_Results New results object.
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
     * Wraps results in appropriate results class for this Vote execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_Vote_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_Vote_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Vote Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_Vote_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Vote Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_Vote_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Vote execution.
     *
     * @return string The response from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves how people voted on roll call votes in the U.S. Congress since 1789. 
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_VoteAndVoter extends Temboo_Choreography
{
    /**
     * Retrieves how people voted on roll call votes in the U.S. Congress since 1789. 
     *
     * @param Temboo_Session $session The session that owns this VoteAndVoter Choreo.
     * @return GovTrack_VoteAndVoter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GovTrack/VoteAndVoter/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VoteAndVoter Choreo.
     *
     * @param GovTrack_VoteAndVoter_Inputs|array $inputs (optional) Inputs as GovTrack_VoteAndVoter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_VoteAndVoter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GovTrack_VoteAndVoter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VoteAndVoter Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_VoteAndVoter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GovTrack_VoteAndVoter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VoteAndVoter Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_VoteAndVoter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VoteAndVoter Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GovTrack_VoteAndVoter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VoteAndVoter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Created input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) The date (and in recent history also the time) on which the vote was held (in YYYY-MM-DD format). Filter operators allowed. Sortable.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setCreated($value)
    {
        return $this->set('Created', $value);
    }

    /**
     * Set the value for the Fields input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) A comma separated list of fields to return in the response. Use double-underscores to span relationships (e.g. person__firstname).
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this VoteAndVoter Choreo.
     *
     * @param int $value (optional, integer) Results are paged 100 per call by default. Set the limit input to a high value to get all of the results at once.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ObjectID input for this VoteAndVoter Choreo.
     *
     * @param int $value (optional, integer) The ID of the resource to retrieve. When using this input, all other filter parameters are ignored, and a single record is returned.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the Offset input for this VoteAndVoter Choreo.
     *
     * @param int $value (optional, integer) Offset the results by the number given, useful for paging through results.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Option input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) The way a particular person voted. The value corresponds to the key of an option returned on the Vote Choreo. Filter operators allowed. Sortable.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setOption($value)
    {
        return $this->set('Option', $value);
    }

    /**
     * Set the value for the Person input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) The person making this vote. This is an ID number. Filter operators allowed. Sortable.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setPerson($value)
    {
        return $this->set('Person', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) You can order the results by date using fieldname (ascending) or -fieldname (descending), where "fieldname" is either startdate or enddate.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Vote input for this VoteAndVoter Choreo.
     *
     * @param string $value (optional, string) The ID number of the vote that this was part of. This is in the form of an ID number. Filter operators allowed. Sortable.
     * @return GovTrack_VoteAndVoter_Inputs For method chaining.
     */
    public function setVote($value)
    {
        return $this->set('Vote', $value);
    }
}


/**
 * Execution object for the VoteAndVoter Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_VoteAndVoter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VoteAndVoter Choreo.
     *
     * @param Temboo_Session $session The session that owns this VoteAndVoter execution.
     * @param GovTrack_VoteAndVoter $choreo The choreography object for this execution.
     * @param GovTrack_VoteAndVoter_Inputs|array $inputs (optional) Inputs as GovTrack_VoteAndVoter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GovTrack_VoteAndVoter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GovTrack_VoteAndVoter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VoteAndVoter execution.
     *
     * @return GovTrack_VoteAndVoter_Results New results object.
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
     * Wraps results in appropriate results class for this VoteAndVoter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GovTrack_VoteAndVoter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GovTrack_VoteAndVoter_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VoteAndVoter Choreo.
 *
 * @package Temboo
 * @subpackage GovTrack
 */
class GovTrack_VoteAndVoter_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VoteAndVoter Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GovTrack_VoteAndVoter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VoteAndVoter execution.
     *
     * @return string The resopnse from GovTrack.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>