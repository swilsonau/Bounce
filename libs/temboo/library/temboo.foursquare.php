<?php

/**
 * Temboo PHP SDK Foursquare classes
 *
 * Execute Choreographies from the Temboo Foursquare bundle.
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
 * @subpackage Foursquare
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Adds a comment to a specified check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment extends Temboo_Choreography
{
    /**
     * Adds a comment to a specified check-in.
     *
     * @param Temboo_Session $session The session that owns this AddComment Choreo.
     * @return Foursquare_Checkins_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/AddComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddComment Choreo.
     *
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this AddComment Choreo.
     *
     * @param string $value (required, string) The ID of the check-in that you want to create a comment for.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddComment Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddComment Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddComment Choreo.
     *
     * @param string $value (required, string) The text of the comment, up to 200 characters.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Foursquare_Checkins_AddComment $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Foursquare_Checkins_AddComment_Results New results object.
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
     * Wraps results in appropriate results class for this AddComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_AddComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to add an item to a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem extends Temboo_Choreography
{
    /**
     * Allows a user to add an item to a list.
     *
     * @param Temboo_Session $session The session that owns this AddItem Choreo.
     * @return Foursquare_Lists_AddItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddItem Choreo.
     *
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New instance.
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
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of an item on a list that you wish to copy to the target list. Used in conjuction with ListID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ItemListID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The ID of a list that contains an item that you wish to copy to the new list. Used in conjuction with ItemID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemListID($value)
    {
        return $this->set('ItemListID', $value);
    }

    /**
     * Set the value for the ListID input for this AddItem Choreo.
     *
     * @param string $value (required, string) The ID of the list that  you are adding an item to. This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddItem Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddItem Choreo.
     *
     * @param string $value (optional, string) If the target is a user-created list, this will create a public tip on the venue. If the target is todos, the text will be a private note that is only visible to the author.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this AddItem Choreo.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of a venue to add to the list. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddItem execution.
     * @param Foursquare_Lists_AddItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddItem execution.
     *
     * @return Foursquare_Lists_AddItem_Results New results object.
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
     * @return Foursquare_Lists_AddItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList extends Temboo_Choreography
{
    /**
     * Creates a new list.
     *
     * @param Temboo_Session $session The session that owns this AddList Choreo.
     * @return Foursquare_Lists_AddList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddList Choreo.
     *
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this AddList Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this AddList Choreo.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Name input for this AddList Choreo.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddList Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this AddList Choreo.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddList Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddList execution.
     * @param Foursquare_Lists_AddList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddList execution.
     *
     * @return Foursquare_Lists_AddList_Results New results object.
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
     * Wraps results in appropriate results class for this AddList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to add a new photo to a check-in, tip, or a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto extends Temboo_Choreography
{
    /**
     * Allows a user to add a new photo to a check-in, tip, or a venue.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto Choreo.
     * @return Foursquare_Photos_AddPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/AddPhoto/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddPhoto Choreo.
     *
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_AddPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_AddPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddPhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this AddPhoto Choreo.
     *
     * @param string $value (optional, string) Whether to broadcast this photo. Set to "twitter" if you want to send to twitter, "facebook "if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the CheckinID input for this AddPhoto Choreo.
     *
     * @param mixed $value (conditional, any) The ID of the checkin to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ImageFile input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The base64 encoded image contents. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setImageFile($value)
    {
        return $this->set('ImageFile', $value);
    }

    /**
     * Set the value for the LLAccuracy input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLLAccuracy($value)
    {
        return $this->set('LLAccuracy', $value);
    }

    /**
     * Set the value for the Latitude input for this AddPhoto Choreo.
     *
     * @param float $value (optional, decimal) Laitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this AddPhoto Choreo.
     *
     * @param float $value (optional, decimal) Longitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddPhoto Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPhoto Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The ID of the tip to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the VenueID input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The ID of the venue to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

}


/**
 * Execution object for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPhoto Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto execution.
     * @param Foursquare_Photos_AddPhoto $choreo The choreography object for this execution.
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_AddPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPhoto execution.
     *
     * @return Foursquare_Photos_AddPhoto_Results New results object.
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
     * Wraps results in appropriate results class for this AddPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_AddPhoto_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddPhoto Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddPhoto execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Posts user-generated content from an external app to a Foursquare check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost extends Temboo_Choreography
{
    /**
     * Posts user-generated content from an external app to a Foursquare check-in.
     *
     * @param Temboo_Session $session The session that owns this AddPost Choreo.
     * @return Foursquare_Checkins_AddPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/AddPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddPost Choreo.
     *
     * @param Foursquare_Checkins_AddPost_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_AddPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_AddPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this AddPost Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to add a post to.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ContentID input for this AddPost Choreo.
     *
     * @param string $value (optional, string) An ID for the post to be used in a native link. Can be up to 50 characters. The URL input must also be specified when using this parameter.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setContentID($value)
    {
        return $this->set('ContentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddPost Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPost Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddPost Choreo.
     *
     * @param string $value (required, string) The text of the post. Max length is 200 characters.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this AddPost Choreo.
     *
     * @param string $value (optional, string) A URL linking to more details. The following URL schemes are supported: http, https, foursquare, mailto, tel, and sms.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddPost execution.
     * @param Foursquare_Checkins_AddPost $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_AddPost_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_AddPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPost execution.
     *
     * @return Foursquare_Checkins_AddPost_Results New results object.
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
     * Wraps results in appropriate results class for this AddPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_AddPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_AddPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_AddPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddPost execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to add a new tip at a venue. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips extends Temboo_Choreography
{
    /**
     * Allows you to add a new tip at a venue. 
     *
     * @param Temboo_Session $session The session that owns this AddTips Choreo.
     * @return Foursquare_Tips_AddTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/AddTips/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTips Choreo.
     *
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_AddTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_AddTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Broadcast input for this AddTips Choreo.
     *
     * @param string $value (optional, string) Whether to broadcast this tip. Set to "twitter" if you want to send to twitter, "facebook" if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddTips Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTips Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddTips Choreo.
     *
     * @param string $value (required, string) The text of the tip, up to 200 characters.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this AddTips Choreo.
     *
     * @param string $value (optional, string) A URL related to this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddTips Choreo.
     *
     * @param string $value (required, string) The venue where you want to add this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTips Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTips execution.
     * @param Foursquare_Tips_AddTips $choreo The choreography object for this execution.
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_AddTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTips execution.
     *
     * @return Foursquare_Tips_AddTips_Results New results object.
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
     * Wraps results in appropriate results class for this AddTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_AddTips_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTips Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Approves a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest extends Temboo_Choreography
{
    /**
     * Approves a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest Choreo.
     * @return Foursquare_Users_ApproveFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ApproveFriendRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ApproveFriendRequest Choreo.
     *
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ApproveFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApproveFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ApproveFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ApproveFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApproveFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApproveFriendRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest execution.
     * @param Foursquare_Users_ApproveFriendRequest $choreo The choreography object for this execution.
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ApproveFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApproveFriendRequest execution.
     *
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
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
     * Wraps results in appropriate results class for this ApproveFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ApproveFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ApproveFriendRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ApproveFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns badges for a given user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges extends Temboo_Choreography
{
    /**
     * Returns badges for a given user.
     *
     * @param Temboo_Session $session The session that owns this Badges Choreo.
     * @return Foursquare_Users_Badges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Badges/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Badges Choreo.
     *
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Badges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Badges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Badges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Badges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Badges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Badges Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Badges Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Badges Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Badges Choreo.
     *
     * @param Temboo_Session $session The session that owns this Badges execution.
     * @param Foursquare_Users_Badges $choreo The choreography object for this execution.
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Badges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Badges execution.
     *
     * @return Foursquare_Users_Badges_Results New results object.
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
     * Wraps results in appropriate results class for this Badges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Badges_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Badges Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Badges execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Changes a setting for the given user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_ChangeSetting extends Temboo_Choreography
{
    /**
     * Changes a setting for the given user.
     *
     * @param Temboo_Session $session The session that owns this ChangeSetting Choreo.
     * @return Foursquare_Settings_ChangeSetting New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Settings/ChangeSetting/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ChangeSetting Choreo.
     *
     * @param Foursquare_Settings_ChangeSetting_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_ChangeSetting_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_ChangeSetting_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Settings_ChangeSetting_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChangeSetting Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_ChangeSetting_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Settings_ChangeSetting_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChangeSetting Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_ChangeSetting_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ChangeSetting Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_ChangeSetting_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChangeSetting input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this ChangeSetting Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ChangeSetting Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SettingID input for this ChangeSetting Choreo.
     *
     * @param string $value (required, string) Name of setting to change. Valid values are: sendMayorshipsToTwitter, sendBadgesToTwitter, sendMayorshipsToFacebook, sendBadgesToFacebook, receivePings, and receiveCommentPings.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function setSettingID($value)
    {
        return $this->set('SettingID', $value);
    }

    /**
     * Set the value for the Value input for this ChangeSetting Choreo.
     *
     * @param bool $value (required, boolean) The value of the setting you want to change. Set to 1 for true, and 0 for false.
     * @return Foursquare_Settings_ChangeSetting_Inputs For method chaining.
     */
    public function setValue($value)
    {
        return $this->set('Value', $value);
    }
}


/**
 * Execution object for the ChangeSetting Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_ChangeSetting_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChangeSetting Choreo.
     *
     * @param Temboo_Session $session The session that owns this ChangeSetting execution.
     * @param Foursquare_Settings_ChangeSetting $choreo The choreography object for this execution.
     * @param Foursquare_Settings_ChangeSetting_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_ChangeSetting_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_ChangeSetting_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Settings_ChangeSetting $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChangeSetting execution.
     *
     * @return Foursquare_Settings_ChangeSetting_Results New results object.
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
     * Wraps results in appropriate results class for this ChangeSetting execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Settings_ChangeSetting_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Settings_ChangeSetting_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ChangeSetting Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_ChangeSetting_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ChangeSetting Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Settings_ChangeSetting_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ChangeSetting execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details of a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails extends Temboo_Choreography
{
    /**
     * Returns details of a check-in.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails Choreo.
     * @return Foursquare_Checkins_CheckinDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CheckinDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckinDetails Choreo.
     *
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CheckinDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CheckinDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckinDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this CheckinDetails Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to retrieve additional information for.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinDetails Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Signature input for this CheckinDetails Choreo.
     *
     * @param string $value (optional, string) When check-ins are sent to public feeds such as Twitter, foursquare appends a signature to them (s=XXXXXX). The same value can be used here.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }
}


/**
 * Execution object for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails execution.
     * @param Foursquare_Checkins_CheckinDetails $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CheckinDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinDetails execution.
     *
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
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
     * Wraps results in appropriate results class for this CheckinDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CheckinDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckinDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CheckinDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of check-ins for an authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser extends Temboo_Choreography
{
    /**
     * Retrieve a list of check-ins for an authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser Choreo.
     * @return Foursquare_Users_CheckinsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/CheckinsByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckinsByUser Choreo.
     *
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_CheckinsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_CheckinsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckinsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the Limit input for this CheckinsByUser Choreo.
     *
     * @param int $value (optional, integer) The total number of results to be returned, up to 250.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinsByUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this CheckinsByUser Choreo.
     *
     * @param int $value (optional, integer) The number of results to skip. Used to page through results.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinsByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser execution.
     * @param Foursquare_Users_CheckinsByUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_CheckinsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinsByUser execution.
     *
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
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
     * Wraps results in appropriate results class for this CheckinsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_CheckinsByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckinsByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CheckinsByUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to create a check-in with Foursquare.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin extends Temboo_Choreography
{
    /**
     * Allows you to create a check-in with Foursquare.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin Choreo.
     * @return Foursquare_Checkins_CreateCheckin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CreateCheckin/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCheckin Choreo.
     *
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CreateCheckin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCheckin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CreateCheckin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCheckin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCheckin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) Who to broadcast this check-in to. Can be a comma-delimited list: private, public, facebook, twitter, or followers. Defaults to 'public'.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the EventID input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) The event the user is checking in to. A venueId for a venue with this eventId must also be specified in the request.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setEventID($value)
    {
        return $this->set('EventID', $value);
    }

    /**
     * Set the value for the Latitude input for this CreateCheckin Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this CreateCheckin Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this CreateCheckin Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Shout input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) A message about your check-in. The maximum length of this field is 140 characters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setShout($value)
    {
        return $this->set('Shout', $value);
    }

    /**
     * Set the value for the VenueID input for this CreateCheckin Choreo.
     *
     * @param string $value (required, string) The venue where the user is checking in. No venueid is needed if shouting or just providing a venue name.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

    /**
     * Set the value for the Venue input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) If you are not shouting, but you don't have a venue ID or prefer a 'venueless' checkin, pass the venue name as a string using this parameter.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenue($value)
    {
        return $this->set('Venue', $value);
    }
}


/**
 * Execution object for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCheckin Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin execution.
     * @param Foursquare_Checkins_CreateCheckin $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CreateCheckin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCheckin execution.
     *
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCheckin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CreateCheckin_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCheckin Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CreateCheckin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCheckin execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a comment to a specified check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment extends Temboo_Choreography
{
    /**
     * Removes a comment to a specified check-in.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment Choreo.
     * @return Foursquare_Checkins_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/DeleteComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteComment Choreo.
     *
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The ID of the check-in associated with the comment you want to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the CommentID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteComment Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param Foursquare_Checkins_DeleteComment $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to delete an item from a list.

 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem extends Temboo_Choreography
{
    /**
     * Allows a user to delete an item from a list.

     *
     * @param Temboo_Session $session The session that owns this DeleteItem Choreo.
     * @return Foursquare_Lists_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/DeleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteItem Choreo.
     *
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New instance.
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
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) The id of the item to delete.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param Foursquare_Lists_DeleteItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return Foursquare_Lists_DeleteItem_Results New results object.
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
     * @return Foursquare_Lists_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Denies a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest extends Temboo_Choreography
{
    /**
     * Denies a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest Choreo.
     * @return Foursquare_Users_DenyFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/DenyFriendRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DenyFriendRequest Choreo.
     *
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_DenyFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DenyFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_DenyFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DenyFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DenyFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this DenyFriendRequest Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DenyFriendRequest Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DenyFriendRequest Choreo.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DenyFriendRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest execution.
     * @param Foursquare_Users_DenyFriendRequest $choreo The choreography object for this execution.
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_DenyFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DenyFriendRequest execution.
     *
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
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
     * Wraps results in appropriate results class for this DenyFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_DenyFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DenyFriendRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DenyFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an array of users have done this tip.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done extends Temboo_Choreography
{
    /**
     * Returns an array of users have done this tip.
     *
     * @param Temboo_Session $session The session that owns this Done Choreo.
     * @return Foursquare_Tips_Done New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Done/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Done Choreo.
     *
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Done_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Done Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Done_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Done Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Done input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this Done Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 200.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this Done Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this Done Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Done Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Done Choreo.
     *
     * @param string $value (required, string) The id of a tip to get users who have marked the tip as done.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Done Choreo.
     *
     * @param Temboo_Session $session The session that owns this Done execution.
     * @param Foursquare_Tips_Done $choreo The choreography object for this execution.
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Done $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Done execution.
     *
     * @return Foursquare_Tips_Done_Results New results object.
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
     * Wraps results in appropriate results class for this Done execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Done_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Done Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Done execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recommended venues near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore extends Temboo_Choreography
{
    /**
     * Returns a list of recommended venues near the current location.
     *
     * @param Temboo_Session $session The session that owns this Explore Choreo.
     * @return Foursquare_Venues_Explore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Explore/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Explore Choreo.
     *
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Explore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Explore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Explore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Explore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Explore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this Explore Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Explore Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Day input for this Explore Choreo.
     *
     * @param string $value (optional, string) When set to "any", results for any day of the week are returned. Results that are targeted to the current day of the week are returned by default.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setDay($value)
    {
        return $this->set('Day', $value);
    }

    /**
     * Set the value for the FriendsVisits input for this Explore Choreo.
     *
     * @param string $value (optional, string) Limits results to places the acting user's friends have or haven't been. Valid values are: "visited" or "notvisited". 
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setFriendsVisits($value)
    {
        return $this->set('FriendsVisits', $value);
    }

    /**
     * Set the value for the Intent input for this Explore Choreo.
     *
     * @param string $value (optional, string) Used in combination with the LastVenue input.  Return venues users often visit after a given venue when setting to "nextVenues" and providing a venue ID for the LastVenue input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the LastVenue input for this Explore Choreo.
     *
     * @param string $value (optional, string) A venue ID to use when Intent = "nextVenues", which returns venues users often visit after a given venue. See Choreo notes for more details about the use of this input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLastVenue($value)
    {
        return $this->set('LastVenue', $value);
    }

    /**
     * Set the value for the Latitude input for this Explore Choreo.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 50.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this Explore Choreo.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Near input for this Explore Choreo.
     *
     * @param string $value (conditional, string) A string naming a place in the world. If the near string is not geocodable, returns a failed_geocode error. Required unless provided Latitude and Longitude.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNear($value)
    {
        return $this->set('Near', $value);
    }

    /**
     * Set the value for the Novelty input for this Explore Choreo.
     *
     * @param string $value (optional, string) Pass "new" or "old" to limit results to places the acting user hasn't been or has been, respectively. Omitting this parameter returns a mixture of both new and old.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNovelty($value)
    {
        return $this->set('Novelty', $value);
    }

    /**
     * Set the value for the OauthToken input for this Explore Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Used with the Limit input to page through results.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the OpenNow input for this Explore Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to only include venues that are open now. Defaults to 0.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setOpenNow($value)
    {
        return $this->set('OpenNow', $value);
    }

    /**
     * Set the value for the Price input for this Explore Choreo.
     *
     * @param string $value (optional, string) A comma separated list of price points. Currently the valid range of price points are: [1,2,3,4]. See Choreo notes for more details about the use of this parameter.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setPrice($value)
    {
        return $this->set('Price', $value);
    }

    /**
     * Set the value for the Query input for this Explore Choreo.
     *
     * @param string $value (optional, string) A search term to be applied against tips, category, etc. at a venue.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Radius to search within, in meters. If radius is not specified, a suggested radius will be used depending on the density of venues in the area.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Explore Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Saved input for this Explore Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to only include venues that the user has saved on their To-Do list or to another list. Defaults to 0.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSaved($value)
    {
        return $this->set('Saved', $value);
    }

    /**
     * Set the value for the Section input for this Explore Choreo.
     *
     * @param string $value (optional, string) One of food, drinks, coffee, shops, arts, outdoors, sights, trending, specials, nextVenues , or topPicks. Choosing one of these limits results to venues with categories matching these terms.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the SortByDistance input for this Explore Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to sort the results by distance instead of relevance. Default to 0.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSortByDistance($value)
    {
        return $this->set('SortByDistance', $value);
    }

    /**
     * Set the value for the Specials input for this Explore Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to only include venues that have a special. Defaults to 0.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSpecials($value)
    {
        return $this->set('Specials', $value);
    }

    /**
     * Set the value for the Time input for this Explore Choreo.
     *
     * @param string $value (optional, string) When set to "any", results for any time of day are returned. Results that are targeted to the current time of day are returned by default.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the VenuePhotos input for this Explore Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to include a photo for each venue in response, if one is available. Default is 0 (no photos).
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setVenuePhotos($value)
    {
        return $this->set('VenuePhotos', $value);
    }
}


/**
 * Execution object for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Explore Choreo.
     *
     * @param Temboo_Session $session The session that owns this Explore execution.
     * @param Foursquare_Venues_Explore $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Explore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Explore execution.
     *
     * @return Foursquare_Venues_Explore_Results New results object.
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
     * Wraps results in appropriate results class for this Explore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Explore_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Explore Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Explore execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Foursquare access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Foursquare access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Foursquare_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Foursquare_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Foursquare_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Foursquare_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Foursquare_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Foursquare_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Results New instance.
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
}

/**
 * Allows a user to locate friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers extends Temboo_Choreography
{
    /**
     * Allows a user to locate friends.
     *
     * @param Temboo_Session $session The session that owns this FindUsers Choreo.
     * @return Foursquare_Users_FindUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/FindUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindUsers Choreo.
     *
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_FindUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_FindUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of email addresses to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FacebookID input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of Facebook ID's to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setFacebookID($value)
    {
        return $this->set('FacebookID', $value);
    }

    /**
     * Set the value for the Name input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A single string to search for in users' names. A single string to search for in users' names. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this FindUsers Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Phone input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of phone numbers to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindUsers Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TwitterSource input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A single Twitter handle. Results will be users that this handle follows on Twitter who use Foursquare. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitterSource($value)
    {
        return $this->set('TwitterSource', $value);
    }

    /**
     * Set the value for the Twitter input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of Twitter handles to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitter($value)
    {
        return $this->set('Twitter', $value);
    }
}


/**
 * Execution object for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindUsers execution.
     * @param Foursquare_Users_FindUsers $choreo The choreography object for this execution.
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_FindUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindUsers execution.
     *
     * @return Foursquare_Users_FindUsers_Results New results object.
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
     * Wraps results in appropriate results class for this FindUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_FindUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindUsers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to follow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList extends Temboo_Choreography
{
    /**
     * Allows a user to follow a list.
     *
     * @param Temboo_Session $session The session that owns this FollowList Choreo.
     * @return Foursquare_Lists_FollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/FollowList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FollowList Choreo.
     *
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_FollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_FollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this FollowList Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this FollowList Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FollowList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FollowList Choreo.
     *
     * @param Temboo_Session $session The session that owns this FollowList execution.
     * @param Foursquare_Lists_FollowList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_FollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FollowList execution.
     *
     * @return Foursquare_Lists_FollowList_Results New results object.
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
     * Wraps results in appropriate results class for this FollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_FollowList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FollowList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recent friends' check-ins that are nearby the specified location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_GetNearbyFriends extends Temboo_Choreography
{
    /**
     * Returns a list of recent friends' check-ins that are nearby the specified location.
     *
     * @param Temboo_Session $session The session that owns this GetNearbyFriends Choreo.
     * @return Foursquare_Checkins_GetNearbyFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/GetNearbyFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNearbyFriends Choreo.
     *
     * @param Foursquare_Checkins_GetNearbyFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_GetNearbyFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_GetNearbyFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_GetNearbyFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNearbyFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_GetNearbyFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNearbyFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_GetNearbyFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNearbyFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNearbyFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Distance input for this GetNearbyFriends Choreo.
     *
     * @param int $value (optional, integer) The distance (in meters) between the supplied coordinates and the checkin location. This returns friends' checkins where the distance is less than or equal to this value. Default is 500.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Latitude input for this GetNearbyFriends Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this GetNearbyFriends Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 100.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this GetNearbyFriends Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this GetNearbyFriends Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseMode input for this GetNearbyFriends Choreo.
     *
     * @param string $value (optional, string) Used to simplify the response. Valid values are: simple and verbose. When set to simple, an array of user objects are returned. Verbose mode returns an array of checkin objects. Defaults to "simple".
     * @return Foursquare_Checkins_GetNearbyFriends_Inputs For method chaining.
     */
    public function setResponseMode($value)
    {
        return $this->set('ResponseMode', $value);
    }
}


/**
 * Execution object for the GetNearbyFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_GetNearbyFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNearbyFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNearbyFriends execution.
     * @param Foursquare_Checkins_GetNearbyFriends $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_GetNearbyFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_GetNearbyFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_GetNearbyFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_GetNearbyFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNearbyFriends execution.
     *
     * @return Foursquare_Checkins_GetNearbyFriends_Results New results object.
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
     * Wraps results in appropriate results class for this GetNearbyFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_GetNearbyFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_GetNearbyFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNearbyFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_GetNearbyFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNearbyFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_GetNearbyFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNearbyFriends execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a count of how many people are at a given venue. For authenticated users, friends and friends-of-friends at the venue are also returned.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow extends Temboo_Choreography
{
    /**
     * Retrieves a count of how many people are at a given venue. For authenticated users, friends and friends-of-friends at the venue are also returned.
     *
     * @param Temboo_Session $session The session that owns this HereNow Choreo.
     * @return Foursquare_Venues_HereNow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/HereNow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HereNow Choreo.
     *
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_HereNow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HereNow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_HereNow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HereNow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HereNow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimestamp input for this HereNow Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results to follow this timestamp (an epoch timestamp in seconds).
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setAfterTimestamp($value)
    {
        return $this->set('AfterTimestamp', $value);
    }

    /**
     * Set the value for the Limit input for this HereNow Choreo.
     *
     * @param int $value (optional, integer) The number of results to return, up to 500.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this HereNow Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this HereNow Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this HereNow Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this HereNow Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HereNow Choreo.
     *
     * @param Temboo_Session $session The session that owns this HereNow execution.
     * @param Foursquare_Venues_HereNow $choreo The choreography object for this execution.
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_HereNow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HereNow execution.
     *
     * @return Foursquare_Venues_HereNow_Results New results object.
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
     * Wraps results in appropriate results class for this HereNow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_HereNow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HereNow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HereNow execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
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
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Foursquare_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Foursquare_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Foursquare_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Foursquare_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Foursquare_OAuth_InitializeOAuth_Results New results object.
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
     * @return Foursquare_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Results New instance.
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
     * Retrieve the value for the "AuthorizeURL" output from this InitializeOAuth execution.
     *
     * @return string (string) Deprecated (retained for backward compatibility only).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizeURL()
    {
        return $this->get('AuthorizeURL');
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
 * Return the user's Leaderboard
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard extends Temboo_Choreography
{
    /**
     * Return the user's Leaderboard
     *
     * @param Temboo_Session $session The session that owns this Leaderboard Choreo.
     * @return Foursquare_Users_Leaderboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Leaderboard/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Leaderboard Choreo.
     *
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Leaderboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Leaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Leaderboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Leaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Leaderboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Neighbors input for this Leaderboard Choreo.
     *
     * @param int $value (optional, integer) The number of friends' scores to return that are adjacent to your score, in ranked order.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setNeighbors($value)
    {
        return $this->set('Neighbors', $value);
    }

    /**
     * Set the value for the OauthToken input for this Leaderboard Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Leaderboard Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Leaderboard Choreo.
     *
     * @param Temboo_Session $session The session that owns this Leaderboard execution.
     * @param Foursquare_Users_Leaderboard $choreo The choreography object for this execution.
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Leaderboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Leaderboard execution.
     *
     * @return Foursquare_Users_Leaderboard_Results New results object.
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
     * Wraps results in appropriate results class for this Leaderboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Leaderboard_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Leaderboard Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Leaderboard execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows the authenticated user to like or unlike a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like extends Temboo_Choreography
{
    /**
     * Allows the authenticated user to like or unlike a check-in.
     *
     * @param Temboo_Session $session The session that owns this Like Choreo.
     * @return Foursquare_Checkins_Like New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/Like/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Like Choreo.
     *
     * @param Foursquare_Checkins_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Like_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_Like_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Like_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_Like_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Like_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Like input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this Like Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to like or unlike.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this Like Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Like Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Set input for this Like Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 (the default) to like this check-in. Set to 0 to undo a previous like.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setSet($value)
    {
        return $this->set('Set', $value);
    }
}


/**
 * Execution object for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Like Choreo.
     *
     * @param Temboo_Session $session The session that owns this Like execution.
     * @param Foursquare_Checkins_Like $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Like_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_Like $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Like execution.
     *
     * @return Foursquare_Checkins_Like_Results New results object.
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
     * Wraps results in appropriate results class for this Like execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_Like_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_Like_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Like Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_Like_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Like execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows the authenticated user to like or unlike a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like extends Temboo_Choreography
{
    /**
     * Allows the authenticated user to like or unlike a venue.
     *
     * @param Temboo_Session $session The session that owns this Like Choreo.
     * @return Foursquare_Venues_Like New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Like/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Like Choreo.
     *
     * @param Foursquare_Venues_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Like_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Like_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Like_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Like_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Like_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Like input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Like Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Like Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Set input for this Like Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 (the default) to like this checkin. Set to 0 to undo a previous like.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setSet($value)
    {
        return $this->set('Set', $value);
    }

    /**
     * Set the value for the VenueID input for this Like Choreo.
     *
     * @param string $value (required, string) The ID of the venue to like or unlike.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Like Choreo.
     *
     * @param Temboo_Session $session The session that owns this Like execution.
     * @param Foursquare_Venues_Like $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Like_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Like $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Like execution.
     *
     * @return Foursquare_Venues_Like_Results New results object.
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
     * Wraps results in appropriate results class for this Like execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Like_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Like_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Like Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Like_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Like execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns friends and a total count of users who have liked a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes extends Temboo_Choreography
{
    /**
     * Returns friends and a total count of users who have liked a check-in.
     *
     * @param Temboo_Session $session The session that owns this Likes Choreo.
     * @return Foursquare_Checkins_Likes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/Likes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Likes Choreo.
     *
     * @param Foursquare_Checkins_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Likes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_Likes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Likes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_Likes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Likes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Likes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this Likes Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to retrieve likes for.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ClientID input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this Likes Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Likes Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Likes Choreo.
     *
     * @param Temboo_Session $session The session that owns this Likes execution.
     * @param Foursquare_Checkins_Likes $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Likes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_Likes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Likes execution.
     *
     * @return Foursquare_Checkins_Likes_Results New results object.
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
     * Wraps results in appropriate results class for this Likes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_Likes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_Likes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Likes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_Likes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Likes execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns friends and a total count of users who have liked a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes extends Temboo_Choreography
{
    /**
     * Returns friends and a total count of users who have liked a venue.
     *
     * @param Temboo_Session $session The session that owns this Likes Choreo.
     * @return Foursquare_Venues_Likes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Likes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Likes Choreo.
     *
     * @param Foursquare_Venues_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Likes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Likes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Likes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Likes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Likes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Likes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this Likes Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Likes Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Likes Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve likes for.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Likes Choreo.
     *
     * @param Temboo_Session $session The session that owns this Likes execution.
     * @param Foursquare_Venues_Likes $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Likes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Likes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Likes execution.
     *
     * @return Foursquare_Venues_Likes_Results New results object.
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
     * Wraps results in appropriate results class for this Likes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Likes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Likes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Likes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Likes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Likes execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details about a given list. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails extends Temboo_Choreography
{
    /**
     * Returns details about a given list. 
     *
     * @param Temboo_Session $session The session that owns this ListDetails Choreo.
     * @return Foursquare_Lists_ListDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListDetails Choreo.
     *
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListDetails Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ListID input for this ListDetails Choreo.
     *
     * @param string $value (required, string) The id of a user-created or followed list or an id for a tip or todo in the form of USER_ID/tips or USER_ID/todos. When getting tips or todos for the acting user, the user id is not required.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListDetails Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListDetails Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListDetails Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get lists for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListDetails execution.
     * @param Foursquare_Lists_ListDetails $choreo The choreography object for this execution.
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDetails execution.
     *
     * @return Foursquare_Lists_ListDetails_Results New results object.
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
     * Wraps results in appropriate results class for this ListDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a count and items of users following the specified list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers extends Temboo_Choreography
{
    /**
     * Returns a count and items of users following the specified list.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers Choreo.
     * @return Foursquare_Lists_ListFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFollowers Choreo.
     *
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFollowers Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers execution.
     * @param Foursquare_Lists_ListFollowers $choreo The choreography object for this execution.
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFollowers execution.
     *
     * @return Foursquare_Lists_ListFollowers_Results New results object.
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
     * Wraps results in appropriate results class for this ListFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListFollowers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of a user's friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends extends Temboo_Choreography
{
    /**
     * Retrieve a list of a user's friends.
     *
     * @param Temboo_Session $session The session that owns this ListFriends Choreo.
     * @return Foursquare_Users_ListFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ListFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFriends Choreo.
     *
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ListFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ListFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListFriends Choreo.
     *
     * @param int $value (optional, integer) The number of results returned, up to 500.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListFriends Choreo.
     *
     * @param int $value (optional, integer) Specify an offest to page through results.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFriends Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListFriends Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get friends for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFriends execution.
     * @param Foursquare_Users_ListFriends $choreo The choreography object for this execution.
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ListFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFriends execution.
     *
     * @return Foursquare_Users_ListFriends_Results New results object.
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
     * Wraps results in appropriate results class for this ListFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ListFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListFriends execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the lists that a tip appears on.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed extends Temboo_Choreography
{
    /**
     * Returns the lists that a tip appears on.
     *
     * @param Temboo_Session $session The session that owns this Listed Choreo.
     * @return Foursquare_Tips_Listed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Listed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Listed Choreo.
     *
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Listed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Listed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Listed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Listed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Listed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this Listed Choreo.
     *
     * @param string $value (optional, string) Accepted values are: created, edited, followed, friends, other. If no acting user is present, only other is supported.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the OauthToken input for this Listed Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Listed Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Listed Choreo.
     *
     * @param string $value (required, string) The id of a tip to get lists for.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Listed Choreo.
     *
     * @param Temboo_Session $session The session that owns this Listed execution.
     * @param Foursquare_Tips_Listed $choreo The choreography object for this execution.
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Listed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Listed execution.
     *
     * @return Foursquare_Tips_Listed_Results New results object.
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
     * Wraps results in appropriate results class for this Listed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Listed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Listed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Listed execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a user's mayorships.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships extends Temboo_Choreography
{
    /**
     * Returns a user's mayorships.
     *
     * @param Temboo_Session $session The session that owns this Mayorships Choreo.
     * @return Foursquare_Users_Mayorships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Mayorships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Mayorships Choreo.
     *
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Mayorships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mayorships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Mayorships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Mayorships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mayorships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Mayorships Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Mayorships Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Mayorships Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get mayorships for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mayorships Choreo.
     *
     * @param Temboo_Session $session The session that owns this Mayorships execution.
     * @param Foursquare_Users_Mayorships $choreo The choreography object for this execution.
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Mayorships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mayorships execution.
     *
     * @return Foursquare_Users_Mayorships_Results New results object.
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
     * Wraps results in appropriate results class for this Mayorships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Mayorships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Mayorships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Mayorships execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns menu information for a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Menu extends Temboo_Choreography
{
    /**
     * Returns menu information for a venue.
     *
     * @param Temboo_Session $session The session that owns this Menu Choreo.
     * @return Foursquare_Venues_Menu New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Menu/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Menu Choreo.
     *
     * @param Foursquare_Venues_Menu_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Menu_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Menu_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Menu_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Menu Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Menu_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Menu_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Menu Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Menu_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Menu Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Menu_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Menu input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this Menu Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Menu Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this Menu Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Menu Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Menu Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve menu information for.
     * @return Foursquare_Venues_Menu_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Menu Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Menu_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Menu Choreo.
     *
     * @param Temboo_Session $session The session that owns this Menu execution.
     * @param Foursquare_Venues_Menu $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Menu_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Menu_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Menu_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Menu $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Menu execution.
     *
     * @return Foursquare_Venues_Menu_Results New results object.
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
     * Wraps results in appropriate results class for this Menu execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Menu_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Menu_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Menu Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Menu_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Menu Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Menu_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Menu execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns venues that people often check in to after the specified venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_NextVenue extends Temboo_Choreography
{
    /**
     * Returns venues that people often check in to after the specified venue.
     *
     * @param Temboo_Session $session The session that owns this NextVenue Choreo.
     * @return Foursquare_Venues_NextVenue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/NextVenue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NextVenue Choreo.
     *
     * @param Foursquare_Venues_NextVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_NextVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_NextVenue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_NextVenue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NextVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_NextVenue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_NextVenue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NextVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_NextVenue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NextVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_NextVenue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NextVenue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this NextVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this NextVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this NextVenue Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NextVenue Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this NextVenue Choreo.
     *
     * @param string $value (required, string) The ID of the venue you want to see next venue information about.
     * @return Foursquare_Venues_NextVenue_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the NextVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_NextVenue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NextVenue Choreo.
     *
     * @param Temboo_Session $session The session that owns this NextVenue execution.
     * @param Foursquare_Venues_NextVenue $choreo The choreography object for this execution.
     * @param Foursquare_Venues_NextVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_NextVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_NextVenue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_NextVenue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NextVenue execution.
     *
     * @return Foursquare_Venues_NextVenue_Results New results object.
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
     * Wraps results in appropriate results class for this NextVenue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_NextVenue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_NextVenue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NextVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_NextVenue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NextVenue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_NextVenue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NextVenue execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of pending friend requests for the authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests extends Temboo_Choreography
{
    /**
     * Retrieves a list of pending friend requests for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests Choreo.
     * @return Foursquare_Users_PendingFriendRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PendingFriendRequests/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PendingFriendRequests Choreo.
     *
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PendingFriendRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PendingFriendRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PendingFriendRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PendingFriendRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PendingFriendRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PendingFriendRequests Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PendingFriendRequests Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PendingFriendRequests Choreo.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests execution.
     * @param Foursquare_Users_PendingFriendRequests $choreo The choreography object for this execution.
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PendingFriendRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PendingFriendRequests execution.
     *
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
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
     * Wraps results in appropriate results class for this PendingFriendRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PendingFriendRequests_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PendingFriendRequests Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PendingFriendRequests execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details of a photo. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails extends Temboo_Choreography
{
    /**
     * Retrieves details of a photo. 
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails Choreo.
     * @return Foursquare_Photos_PhotoDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/PhotoDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PhotoDetails Choreo.
     *
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_PhotoDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotoDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_PhotoDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PhotoDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotoDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PhotoDetails Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this PhotoDetails Choreo.
     *
     * @param string $value (required, string) The ID of the photo to get details for.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotoDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotoDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails execution.
     * @param Foursquare_Photos_PhotoDetails $choreo The choreography object for this execution.
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_PhotoDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotoDetails execution.
     *
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
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
     * Wraps results in appropriate results class for this PhotoDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_PhotoDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PhotoDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PhotoDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns photos from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser extends Temboo_Choreography
{
    /**
     * Returns photos from a user.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser Choreo.
     * @return Foursquare_Users_PhotosFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PhotosFromUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PhotosFromUser Choreo.
     *
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PhotosFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PhotosFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PhotosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotosFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this PhotosFromUser Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this PhotosFromUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this PhotosFromUser Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotosFromUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this PhotosFromUser Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotosFromUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser execution.
     * @param Foursquare_Users_PhotosFromUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PhotosFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotosFromUser execution.
     *
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
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
     * Wraps results in appropriate results class for this PhotosFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PhotosFromUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PhotosFromUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PhotosFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns photos for a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_PhotosFromVenue extends Temboo_Choreography
{
    /**
     * Returns photos for a venue.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromVenue Choreo.
     * @return Foursquare_Venues_PhotosFromVenue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/PhotosFromVenue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PhotosFromVenue Choreo.
     *
     * @param Foursquare_Venues_PhotosFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_PhotosFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_PhotosFromVenue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_PhotosFromVenue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotosFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_PhotosFromVenue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotosFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_PhotosFromVenue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PhotosFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotosFromVenue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this PhotosFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this PhotosFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Group input for this PhotosFromVenue Choreo.
     *
     * @param string $value (optional, string) By default, public venue photos are returned ordered by relevance. Pass "venue" for public venue photos, ordered by most recent. Pass "checkin" for venue photos from friends, ordered by most recenct.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the Limit input for this PhotosFromVenue Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 200.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this PhotosFromVenue Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this PhotosFromVenue Choreo.
     *
     * @param int $value (optional, integer) Used in combination with the Limit input to page through results.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotosFromVenue Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this PhotosFromVenue Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve photos for.
     * @return Foursquare_Venues_PhotosFromVenue_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the PhotosFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_PhotosFromVenue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotosFromVenue Choreo.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromVenue execution.
     * @param Foursquare_Venues_PhotosFromVenue $choreo The choreography object for this execution.
     * @param Foursquare_Venues_PhotosFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_PhotosFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_PhotosFromVenue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_PhotosFromVenue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotosFromVenue execution.
     *
     * @return Foursquare_Venues_PhotosFromVenue_Results New results object.
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
     * Wraps results in appropriate results class for this PhotosFromVenue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_PhotosFromVenue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_PhotosFromVenue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PhotosFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_PhotosFromVenue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PhotosFromVenue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_PhotosFromVenue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PhotosFromVenue execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recent friends' check-ins.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins extends Temboo_Choreography
{
    /**
     * Returns a list of recent friends' check-ins.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins Choreo.
     * @return Foursquare_Checkins_RecentCheckins New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/RecentCheckins/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecentCheckins Choreo.
     *
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_RecentCheckins_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecentCheckins Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_RecentCheckins_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecentCheckins Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecentCheckins input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this RecentCheckins Choreo.
     *
     * @param int $value (optional, integer) Seconds after which to look for check-ins, e.g. for looking for new check-ins since the last fetch.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the Latitude input for this RecentCheckins Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this RecentCheckins Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 100.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this RecentCheckins Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this RecentCheckins Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RecentCheckins Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecentCheckins Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins execution.
     * @param Foursquare_Checkins_RecentCheckins $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_RecentCheckins $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecentCheckins execution.
     *
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
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
     * Wraps results in appropriate results class for this RecentCheckins execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_RecentCheckins_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecentCheckins Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecentCheckins execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of tips near the specified area.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips extends Temboo_Choreography
{
    /**
     * Get a list of tips near the specified area.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips Choreo.
     * @return Foursquare_Tips_SearchNearbyTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/SearchNearbyTips/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchNearbyTips Choreo.
     *
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_SearchNearbyTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchNearbyTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_SearchNearbyTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchNearbyTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchNearbyTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Filter input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) Filter results.  If set to 'friends', the choreo returns tips from friends.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchNearbyTips Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchNearbyTips Choreo.
     *
     * @param int $value (optional, integer) Number of results to be returned by the search, up to 500.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchNearbyTips Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchNearbyTips Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this SearchNearbyTips Choreo.
     *
     * @param int $value (optional, integer) Use to page through the list of results.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) Only find tips matching the given term. Cannot be used in conjunction with 'friends' filter.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchNearbyTips Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips execution.
     * @param Foursquare_Tips_SearchNearbyTips $choreo The choreography object for this execution.
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_SearchNearbyTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchNearbyTips execution.
     *
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
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
     * Wraps results in appropriate results class for this SearchNearbyTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_SearchNearbyTips_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchNearbyTips Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchNearbyTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of specials near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials extends Temboo_Choreography
{
    /**
     * Returns a list of specials near the current location.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials Choreo.
     * @return Foursquare_Specials_SearchSpecials New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Specials/SearchSpecials/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchSpecials Choreo.
     *
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Specials_SearchSpecials_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchSpecials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Specials_SearchSpecials_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchSpecials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchSpecials input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchSpecials Choreo.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchSpecials Choreo.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Limit results to venues within this many meters of the specified location. Defaults to a city-wide area.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchSpecials Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchSpecials Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials execution.
     * @param Foursquare_Specials_SearchSpecials $choreo The choreography object for this execution.
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Specials_SearchSpecials $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchSpecials execution.
     *
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
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
     * Wraps results in appropriate results class for this SearchSpecials execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Specials_SearchSpecials_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchSpecials Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchSpecials execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of venues near the current location. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues extends Temboo_Choreography
{
    /**
     * Obtain a list of venues near the current location. 
     *
     * @param Temboo_Session $session The session that owns this SearchVenues Choreo.
     * @return Foursquare_Venues_SearchVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/SearchVenues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchVenues Choreo.
     *
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_SearchVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_SearchVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters. Currently, this parameter   does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Intent input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) Indicates your intent when performing the search.  Enter: checkin (default), match (requires Query and Latitude/Longitude to be provided).
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchVenues Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchVenues Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Query input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) Your search string.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchVenues Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchVenues execution.
     * @param Foursquare_Venues_SearchVenues $choreo The choreography object for this execution.
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_SearchVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchVenues execution.
     *
     * @return Foursquare_Venues_SearchVenues_Results New results object.
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
     * Wraps results in appropriate results class for this SearchVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_SearchVenues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchVenues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Changes whether the acting user will receive pings (phone notifications) when the specified user checks in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_SetPings extends Temboo_Choreography
{
    /**
     * Changes whether the acting user will receive pings (phone notifications) when the specified user checks in.
     *
     * @param Temboo_Session $session The session that owns this SetPings Choreo.
     * @return Foursquare_Users_SetPings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/SetPings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SetPings Choreo.
     *
     * @param Foursquare_Users_SetPings_Inputs|array $inputs (optional) Inputs as Foursquare_Users_SetPings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_SetPings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_SetPings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetPings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_SetPings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_SetPings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetPings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_SetPings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SetPings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_SetPings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetPings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this SetPings Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SetPings Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this SetPings Choreo.
     *
     * @param string $value (required, string) The user ID of a friend.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Value input for this SetPings Choreo.
     *
     * @param bool $value (required, boolean) Whether or not the acting user should receive phone notifications. Valid values are true or false.
     * @return Foursquare_Users_SetPings_Inputs For method chaining.
     */
    public function setValue($value)
    {
        return $this->set('Value', $value);
    }

}


/**
 * Execution object for the SetPings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_SetPings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetPings Choreo.
     *
     * @param Temboo_Session $session The session that owns this SetPings execution.
     * @param Foursquare_Users_SetPings $choreo The choreography object for this execution.
     * @param Foursquare_Users_SetPings_Inputs|array $inputs (optional) Inputs as Foursquare_Users_SetPings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_SetPings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_SetPings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetPings execution.
     *
     * @return Foursquare_Users_SetPings_Results New results object.
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
     * Wraps results in appropriate results class for this SetPings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_SetPings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_SetPings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SetPings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_SetPings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SetPings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_SetPings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SetPings execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a setting for the acting user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_SettingDetail extends Temboo_Choreography
{
    /**
     * Returns a setting for the acting user.
     *
     * @param Temboo_Session $session The session that owns this SettingDetail Choreo.
     * @return Foursquare_Settings_SettingDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Settings/SettingDetail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SettingDetail Choreo.
     *
     * @param Foursquare_Settings_SettingDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_SettingDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_SettingDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Settings_SettingDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SettingDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_SettingDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Settings_SettingDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SettingDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_SettingDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SettingDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_SettingDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SettingDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Settings_SettingDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Settings_SettingDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this SettingDetail Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string.
     * @return Foursquare_Settings_SettingDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SettingDetail Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Settings_SettingDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SettingID input for this SettingDetail Choreo.
     *
     * @param string $value (required, string) Name of setting to change. Valid values are: sendMayorshipsToTwitter, sendBadgesToTwitter, sendMayorshipsToFacebook, sendBadgesToFacebook, receivePings, and receiveCommentPings.
     * @return Foursquare_Settings_SettingDetail_Inputs For method chaining.
     */
    public function setSettingID($value)
    {
        return $this->set('SettingID', $value);
    }
}


/**
 * Execution object for the SettingDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_SettingDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SettingDetail Choreo.
     *
     * @param Temboo_Session $session The session that owns this SettingDetail execution.
     * @param Foursquare_Settings_SettingDetail $choreo The choreography object for this execution.
     * @param Foursquare_Settings_SettingDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_SettingDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_SettingDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Settings_SettingDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SettingDetail execution.
     *
     * @return Foursquare_Settings_SettingDetail_Results New results object.
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
     * Wraps results in appropriate results class for this SettingDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Settings_SettingDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Settings_SettingDetail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SettingDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_SettingDetail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SettingDetail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Settings_SettingDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SettingDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of venues similar to the specified venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar extends Temboo_Choreography
{
    /**
     * Returns a list of venues similar to the specified venue.
     *
     * @param Temboo_Session $session The session that owns this Similar Choreo.
     * @return Foursquare_Venues_Similar New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Similar/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Similar Choreo.
     *
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Similar_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Similar Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Similar_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Similar Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Similar input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Similar Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Similar Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Similar Choreo.
     *
     * @param string $value (required, string) The id for the venue you want similar venues for.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Similar Choreo.
     *
     * @param Temboo_Session $session The session that owns this Similar execution.
     * @param Foursquare_Venues_Similar $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Similar $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Similar execution.
     *
     * @return Foursquare_Venues_Similar_Results New results object.
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
     * Wraps results in appropriate results class for this Similar execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Similar_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Similar Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Similar execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details about a special, including text and whether it is unlocked for the current or provided user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SpecialDetail extends Temboo_Choreography
{
    /**
     * Returns details about a special, including text and whether it is unlocked for the current or provided user.
     *
     * @param Temboo_Session $session The session that owns this SpecialDetail Choreo.
     * @return Foursquare_Specials_SpecialDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Specials/SpecialDetail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SpecialDetail Choreo.
     *
     * @param Foursquare_Specials_SpecialDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SpecialDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SpecialDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Specials_SpecialDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SpecialDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SpecialDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Specials_SpecialDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SpecialDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SpecialDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SpecialDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SpecialDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SpecialDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this SpecialDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SpecialDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this SpecialDetail Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SpecialDetail Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SpecialID input for this SpecialDetail Choreo.
     *
     * @param string $value (required, string) The ID of the special to retrieve details for.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setSpecialID($value)
    {
        return $this->set('SpecialID', $value);
    }

    /**
     * Set the value for the UserID input for this SpecialDetail Choreo.
     *
     * @param string $value (optional, string) The ID of the user to check whether the special is unlocked for.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the VenueID input for this SpecialDetail Choreo.
     *
     * @param string $value (required, string) The ID of a venue the special is offered at.
     * @return Foursquare_Specials_SpecialDetail_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the SpecialDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SpecialDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SpecialDetail Choreo.
     *
     * @param Temboo_Session $session The session that owns this SpecialDetail execution.
     * @param Foursquare_Specials_SpecialDetail $choreo The choreography object for this execution.
     * @param Foursquare_Specials_SpecialDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SpecialDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SpecialDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Specials_SpecialDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SpecialDetail execution.
     *
     * @return Foursquare_Specials_SpecialDetail_Results New results object.
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
     * Wraps results in appropriate results class for this SpecialDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Specials_SpecialDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Specials_SpecialDetail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SpecialDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SpecialDetail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SpecialDetail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Specials_SpecialDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SpecialDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails extends Temboo_Choreography
{
    /**
     * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
     *
     * @param Temboo_Session $session The session that owns this TipDetails Choreo.
     * @return Foursquare_Tips_TipDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/TipDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipDetails Choreo.
     *
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_TipDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_TipDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this TipDetails Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this TipDetails Choreo.
     *
     * @param string $value (required, string) ID of tip to retrieve
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipDetails execution.
     * @param Foursquare_Tips_TipDetails $choreo The choreography object for this execution.
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_TipDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipDetails execution.
     *
     * @return Foursquare_Tips_TipDetails_Results New results object.
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
     * Wraps results in appropriate results class for this TipDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_TipDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns tips from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser extends Temboo_Choreography
{
    /**
     * Returns tips from a user.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser Choreo.
     * @return Foursquare_Users_TipsFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/TipsFromUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipsFromUser Choreo.
     *
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_TipsFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_TipsFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipsFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TipsFromUser Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromUser Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TipsFromUser Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromUser Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) Enter: recent, nearby, or popular. NEARBY requires geolat and geolong to be provided.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the UserID input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get tips for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser execution.
     * @param Foursquare_Users_TipsFromUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_TipsFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromUser execution.
     *
     * @return Foursquare_Users_TipsFromUser_Results New results object.
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
     * Wraps results in appropriate results class for this TipsFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_TipsFromUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipsFromUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipsFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * This choreo returns tips for a particular venue written by other Foursquare users.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue extends Temboo_Choreography
{
    /**
     * This choreo returns tips for a particular venue written by other Foursquare users.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue Choreo.
     * @return Foursquare_Venues_TipsFromVenue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TipsFromVenue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipsFromVenue Choreo.
     *
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TipsFromVenue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TipsFromVenue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipsFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromVenue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromVenue Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromVenue Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromVenue Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromVenue Choreo.
     *
     * @param string $value (optional, string) Enter: recent or popular.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the VenueID input for this TipsFromVenue Choreo.
     *
     * @param string $value (required, string) The venue you want tips for.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromVenue Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue execution.
     * @param Foursquare_Venues_TipsFromVenue $choreo The choreography object for this execution.
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TipsFromVenue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromVenue execution.
     *
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
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
     * Wraps results in appropriate results class for this TipsFromVenue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TipsFromVenue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipsFromVenue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipsFromVenue execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns todos from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ToDosFromUser extends Temboo_Choreography
{
    /**
     * Returns todos from a user.
     *
     * @param Temboo_Session $session The session that owns this ToDosFromUser Choreo.
     * @return Foursquare_Users_ToDosFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ToDosFromUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ToDosFromUser Choreo.
     *
     * @param Foursquare_Users_ToDosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ToDosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ToDosFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ToDosFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ToDosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ToDosFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ToDosFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ToDosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ToDosFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ToDosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ToDosFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ToDosFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this ToDosFromUser Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ToDosFromUser Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this ToDosFromUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ToDosFromUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this ToDosFromUser Choreo.
     *
     * @param string $value (optional, string) Enter: recent, nearby, or popular. NEARBY requires geolat and geolong to be provided.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the UserID input for this ToDosFromUser Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get tips for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_ToDosFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ToDosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ToDosFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ToDosFromUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ToDosFromUser execution.
     * @param Foursquare_Users_ToDosFromUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_ToDosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ToDosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ToDosFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ToDosFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ToDosFromUser execution.
     *
     * @return Foursquare_Users_ToDosFromUser_Results New results object.
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
     * Wraps results in appropriate results class for this ToDosFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ToDosFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ToDosFromUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ToDosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ToDosFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ToDosFromUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ToDosFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ToDosFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of venues near the current location with the most people currently checked in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues extends Temboo_Choreography
{
    /**
     * Returns a list of venues near the current location with the most people currently checked in.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues Choreo.
     * @return Foursquare_Venues_TrendingVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TrendingVenues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrendingVenues Choreo.
     *
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TrendingVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrendingVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TrendingVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrendingVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrendingVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TrendingVenues Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TrendingVenues Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TrendingVenues Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TrendingVenues Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this TrendingVenues Choreo.
     *
     * @param int $value (optional, integer) Radius in meters, up to approximately 2000 meters.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TrendingVenues Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrendingVenues Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues execution.
     * @param Foursquare_Venues_TrendingVenues $choreo The choreography object for this execution.
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TrendingVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrendingVenues execution.
     *
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
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
     * Wraps results in appropriate results class for this TrendingVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TrendingVenues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrendingVenues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrendingVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to unfollow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList extends Temboo_Choreography
{
    /**
     * Allows a user to unfollow a list.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList Choreo.
     * @return Foursquare_Lists_UnfollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UnfollowList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnfollowList Choreo.
     *
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UnfollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnfollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UnfollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnfollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnfollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this UnfollowList Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UnfollowList Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnfollowList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnfollowList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList execution.
     * @param Foursquare_Lists_UnfollowList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UnfollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnfollowList execution.
     *
     * @return Foursquare_Lists_UnfollowList_Results New results object.
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
     * Wraps results in appropriate results class for this UnfollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UnfollowList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnfollowList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnfollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Cancels any relationship between the acting user and the specified user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Unfriend extends Temboo_Choreography
{
    /**
     * Cancels any relationship between the acting user and the specified user.
     *
     * @param Temboo_Session $session The session that owns this Unfriend Choreo.
     * @return Foursquare_Users_Unfriend New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Unfriend/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Unfriend Choreo.
     *
     * @param Foursquare_Users_Unfriend_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Unfriend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Unfriend_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Unfriend_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Unfriend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Unfriend_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Unfriend_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Unfriend Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Unfriend_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Unfriend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Unfriend_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Unfriend input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Unfriend_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Unfriend_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Unfriend Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_Unfriend_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Unfriend Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Unfriend_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Unfriend Choreo.
     *
     * @param string $value (required, string) The ID of a user to unfriend.
     * @return Foursquare_Users_Unfriend_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

}


/**
 * Execution object for the Unfriend Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Unfriend_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Unfriend Choreo.
     *
     * @param Temboo_Session $session The session that owns this Unfriend execution.
     * @param Foursquare_Users_Unfriend $choreo The choreography object for this execution.
     * @param Foursquare_Users_Unfriend_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Unfriend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Unfriend_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Unfriend $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Unfriend execution.
     *
     * @return Foursquare_Users_Unfriend_Results New results object.
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
     * Wraps results in appropriate results class for this Unfriend execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Unfriend_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Unfriend_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Unfriend Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Unfriend_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Unfriend Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Unfriend_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Unfriend execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to add or remove photos and tips from items on user-created lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem extends Temboo_Choreography
{
    /**
     * Allows you to add or remove photos and tips from items on user-created lists.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem Choreo.
     * @return Foursquare_Lists_UpdateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateItem Choreo.
     *
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New instance.
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
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The id of an item on a list that you wish to update.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The ID of a user-created list to update
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If present and non-empty, adds a photo to this item. If present and empty, will remove the photo on this item. If the photo was a private checkin photo, it will be promoted to a public venue photo.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If present, this creates a public tip on the venue and replaces any existing tip on the item. Cannot be used in conjuction with TipID or PhotoID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem execution.
     * @param Foursquare_Lists_UpdateItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateItem execution.
     *
     * @return Foursquare_Lists_UpdateItem_Results New results object.
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
     * @return Foursquare_Lists_UpdateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a given list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList extends Temboo_Choreography
{
    /**
     * Updates a given list.
     *
     * @param Temboo_Session $session The session that owns this UpdateList Choreo.
     * @return Foursquare_Lists_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateList Choreo.
     *
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New instance.
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
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this UpdateList Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The id of the list to update.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param Foursquare_Lists_UpdateList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return Foursquare_Lists_UpdateList_Results New results object.
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
     * @return Foursquare_Lists_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the user's profile photo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UpdatePhoto extends Temboo_Choreography
{
    /**
     * Updates the user's profile photo.
     *
     * @param Temboo_Session $session The session that owns this UpdatePhoto Choreo.
     * @return Foursquare_Users_UpdatePhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/UpdatePhoto/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdatePhoto Choreo.
     *
     * @param Foursquare_Users_UpdatePhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UpdatePhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UpdatePhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_UpdatePhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdatePhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UpdatePhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_UpdatePhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdatePhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UpdatePhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdatePhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UpdatePhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdatePhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ContentType input for this UpdatePhoto Choreo.
     *
     * @param string $value (required, string) The content type of the image. Valid types are: image/jpeg, image/gif, or image/png.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdatePhoto Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Photo input for this UpdatePhoto Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the image you want to upload. Total Image size (before encoding) must be under 100KB.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function setPhoto($value)
    {
        return $this->set('Photo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdatePhoto Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_UpdatePhoto_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the UpdatePhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UpdatePhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdatePhoto Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdatePhoto execution.
     * @param Foursquare_Users_UpdatePhoto $choreo The choreography object for this execution.
     * @param Foursquare_Users_UpdatePhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UpdatePhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UpdatePhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_UpdatePhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdatePhoto execution.
     *
     * @return Foursquare_Users_UpdatePhoto_Results New results object.
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
     * Wraps results in appropriate results class for this UpdatePhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_UpdatePhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_UpdatePhoto_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdatePhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UpdatePhoto_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdatePhoto Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_UpdatePhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdatePhoto execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns profile information for a given user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserDetail extends Temboo_Choreography
{
    /**
     * Returns profile information for a given user.
     *
     * @param Temboo_Session $session The session that owns this UserDetail Choreo.
     * @return Foursquare_Users_UserDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/UserDetail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserDetail Choreo.
     *
     * @param Foursquare_Users_UserDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_UserDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_UserDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_UserDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_UserDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this UserDetail Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_UserDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UserDetail Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_UserDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UserDetail Choreo.
     *
     * @param string $value (optional, string) The ID of the user to get details for. Pass "self" to get details of the acting user. Defaults to "self".
     * @return Foursquare_Users_UserDetail_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

}


/**
 * Execution object for the UserDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserDetail Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserDetail execution.
     * @param Foursquare_Users_UserDetail $choreo The choreography object for this execution.
     * @param Foursquare_Users_UserDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_UserDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserDetail execution.
     *
     * @return Foursquare_Users_UserDetail_Results New results object.
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
     * Wraps results in appropriate results class for this UserDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_UserDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_UserDetail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserDetail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserDetail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_UserDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists extends Temboo_Choreography
{
    /**
     * Retrieves user lists.
     *
     * @param Temboo_Session $session The session that owns this UserLists Choreo.
     * @return Foursquare_Users_UserLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/UserLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserLists Choreo.
     *
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_UserLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_UserLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this UserLists Choreo.
     *
     * @param string $value (optional, string) Used to narrow down the lists to returns. Valid values are: created, edited, followed, friends, and suggested. See documentation for definitions of these parameter values.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the Latitude input for this UserLists Choreo.
     *
     * @param float $value (conditional, decimal) Latitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this UserLists Choreo.
     *
     * @param float $value (conditional, decimal) Longitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this UserLists Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UserLists Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UserLists Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get lists for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserLists execution.
     * @param Foursquare_Users_UserLists $choreo The choreography object for this execution.
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_UserLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserLists execution.
     *
     * @return Foursquare_Users_UserLists_Results New results object.
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
     * Wraps results in appropriate results class for this UserLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_UserLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserLists execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the settings of the acting user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_UserSettings extends Temboo_Choreography
{
    /**
     * Returns the settings of the acting user.
     *
     * @param Temboo_Session $session The session that owns this UserSettings Choreo.
     * @return Foursquare_Settings_UserSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Settings/UserSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserSettings Choreo.
     *
     * @param Foursquare_Settings_UserSettings_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_UserSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_UserSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Settings_UserSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_UserSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Settings_UserSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserSettings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_UserSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Settings_UserSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Settings_UserSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Settings_UserSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this UserSettings Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string.
     * @return Foursquare_Settings_UserSettings_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UserSettings Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Settings_UserSettings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UserSettings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_UserSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserSettings execution.
     * @param Foursquare_Settings_UserSettings $choreo The choreography object for this execution.
     * @param Foursquare_Settings_UserSettings_Inputs|array $inputs (optional) Inputs as Foursquare_Settings_UserSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Settings_UserSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Settings_UserSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserSettings execution.
     *
     * @return Foursquare_Settings_UserSettings_Results New results object.
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
     * Wraps results in appropriate results class for this UserSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Settings_UserSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Settings_UserSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserSettings Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Settings_UserSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Settings_UserSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserSettings execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a hierarchical list of categories applied to venues.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueCategories extends Temboo_Choreography
{
    /**
     * Returns a hierarchical list of categories applied to venues.
     *
     * @param Temboo_Session $session The session that owns this VenueCategories Choreo.
     * @return Foursquare_Venues_VenueCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueCategories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueCategories Choreo.
     *
     * @param Foursquare_Venues_VenueCategories_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueCategories Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueCategories Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueCategories Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueCategories Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueCategories Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueCategories_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the VenueCategories Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueCategories Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueCategories execution.
     * @param Foursquare_Venues_VenueCategories $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueCategories_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueCategories execution.
     *
     * @return Foursquare_Venues_VenueCategories_Results New results object.
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
     * Wraps results in appropriate results class for this VenueCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueCategories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueCategories Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueCategories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueCategories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueCategories execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being queried.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail extends Temboo_Choreography
{
    /**
     * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being queried.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail Choreo.
     * @return Foursquare_Venues_VenueDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueDetail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueDetail Choreo.
     *
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueDetail Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueDetail Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueDetail Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail execution.
     * @param Foursquare_Venues_VenueDetail $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueDetail execution.
     *
     * @return Foursquare_Venues_VenueDetail_Results New results object.
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
     * Wraps results in appropriate results class for this VenueDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueDetail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueDetail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to access information about the current events at a place.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents extends Temboo_Choreography
{
    /**
     * Allows you to access information about the current events at a place.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents Choreo.
     * @return Foursquare_Venues_VenueEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueEvents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueEvents Choreo.
     *
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this VenueEvents Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueEvents Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueEvents Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueEvents Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents execution.
     * @param Foursquare_Venues_VenueEvents $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueEvents execution.
     *
     * @return Foursquare_Venues_VenueEvents_Results New results object.
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
     * Wraps results in appropriate results class for this VenueEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueEvents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueEvents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueEvents execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory extends Temboo_Choreography
{
    /**
     * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
     *
     * @param Temboo_Session $session The session that owns this VenueHistory Choreo.
     * @return Foursquare_Users_VenueHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/VenueHistory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueHistory Choreo.
     *
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_VenueHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_VenueHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this VenueHistory Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this VenueHistory Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the CategoryID input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) Limits returned venues to those in this category. If specifying a top-level category, all sub-categories will also match the query.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueHistory Choreo.
     *
     * @param string $value (required, string) The Foursquare API OAuth token string.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueHistory Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueHistory execution.
     * @param Foursquare_Users_VenueHistory $choreo The choreography object for this execution.
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_VenueHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueHistory execution.
     *
     * @return Foursquare_Users_VenueHistory_Results New results object.
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
     * Wraps results in appropriate results class for this VenueHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_VenueHistory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueHistory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueHistory execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns hours for a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueHours extends Temboo_Choreography
{
    /**
     * Returns hours for a venue.
     *
     * @param Temboo_Session $session The session that owns this VenueHours Choreo.
     * @return Foursquare_Venues_VenueHours New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueHours/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueHours Choreo.
     *
     * @param Foursquare_Venues_VenueHours_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueHours_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueHours_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueHours_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueHours Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueHours_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueHours_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueHours Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueHours_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueHours Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueHours_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueHours input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueHours Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueHours Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueHours Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueHours Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueHours Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve hours for.
     * @return Foursquare_Venues_VenueHours_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueHours Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueHours_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueHours Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueHours execution.
     * @param Foursquare_Venues_VenueHours $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueHours_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueHours_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueHours_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueHours $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueHours execution.
     *
     * @return Foursquare_Venues_VenueHours_Results New results object.
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
     * Wraps results in appropriate results class for this VenueHours execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueHours_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueHours_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueHours Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueHours_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueHours Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueHours_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueHours execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns URLs or identifiers from third parties that have been applied to this venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueLinks extends Temboo_Choreography
{
    /**
     * Returns URLs or identifiers from third parties that have been applied to this venue.
     *
     * @param Temboo_Session $session The session that owns this VenueLinks Choreo.
     * @return Foursquare_Venues_VenueLinks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueLinks/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueLinks Choreo.
     *
     * @param Foursquare_Venues_VenueLinks_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueLinks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueLinks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueLinks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueLinks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueLinks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueLinks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueLinks Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueLinks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueLinks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueLinks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueLinks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueLinks Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueLinks Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueLinks Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API OAuth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueLinks Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueLinks Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve URLs for.
     * @return Foursquare_Venues_VenueLinks_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueLinks Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueLinks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueLinks Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueLinks execution.
     * @param Foursquare_Venues_VenueLinks $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueLinks_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueLinks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueLinks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueLinks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueLinks execution.
     *
     * @return Foursquare_Venues_VenueLinks_Results New results object.
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
     * Wraps results in appropriate results class for this VenueLinks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueLinks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueLinks_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueLinks Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueLinks_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueLinks Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueLinks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueLinks execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>