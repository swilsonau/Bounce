<?php

/**
 * Temboo PHP SDK Disqus classes
 *
 * Execute Choreographies from the Temboo Disqus bundle.
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
 * @subpackage Disqus
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Adds a new moderator to a forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_AddModerator extends Temboo_Choreography
{
    /**
     * Adds a new moderator to a forum.
     *
     * @param Temboo_Session $session The session that owns this AddModerator Choreo.
     * @return Disqus_Forums_AddModerator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/AddModerator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddModerator Choreo.
     *
     * @param Disqus_Forums_AddModerator_Inputs|array $inputs (optional) Inputs as Disqus_Forums_AddModerator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_AddModerator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_AddModerator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddModerator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_AddModerator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_AddModerator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_AddModerator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddModerator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_AddModerator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddModerator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddModerator Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this AddModerator Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  You must be a moderator on the selected forum.
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this AddModerator Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddModerator Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the User input for this AddModerator Choreo.
     *
     * @param string $value (required, string) Disqus User ID
     * @return Disqus_Forums_AddModerator_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_AddModerator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddModerator Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddModerator execution.
     * @param Disqus_Forums_AddModerator $choreo The choreography object for this execution.
     * @param Disqus_Forums_AddModerator_Inputs|array $inputs (optional) Inputs as Disqus_Forums_AddModerator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_AddModerator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_AddModerator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddModerator execution.
     *
     * @return Disqus_Forums_AddModerator_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddModerator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_AddModerator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_AddModerator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_AddModerator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddModerator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_AddModerator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddModerator execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Approves a post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ApprovePosts extends Temboo_Choreography
{
    /**
     * Approves a post.
     *
     * @param Temboo_Session $session The session that owns this ApprovePosts Choreo.
     * @return Disqus_Posts_ApprovePosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/ApprovePosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ApprovePosts Choreo.
     *
     * @param Disqus_Posts_ApprovePosts_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ApprovePosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ApprovePosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_ApprovePosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApprovePosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ApprovePosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_ApprovePosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApprovePosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ApprovePosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ApprovePosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ApprovePosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApprovePosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ApprovePosts Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this ApprovePosts Choreo.
     *
     * @param int $value (required, integer) The post ID which is to be approved. Note that you must be a forum moderator to approve posts.
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this ApprovePosts Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ApprovePosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_ApprovePosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ApprovePosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ApprovePosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApprovePosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ApprovePosts execution.
     * @param Disqus_Posts_ApprovePosts $choreo The choreography object for this execution.
     * @param Disqus_Posts_ApprovePosts_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ApprovePosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ApprovePosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_ApprovePosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApprovePosts execution.
     *
     * @return Disqus_Posts_ApprovePosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ApprovePosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_ApprovePosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_ApprovePosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ApprovePosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ApprovePosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ApprovePosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_ApprovePosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ApprovePosts execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Check whether the provided username is available.  An error is returned if the entered username is either taken, or invalid.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_CheckUsername extends Temboo_Choreography
{
    /**
     * Check whether the provided username is available.  An error is returned if the entered username is either taken, or invalid.
     *
     * @param Temboo_Session $session The session that owns this CheckUsername Choreo.
     * @return Disqus_Users_CheckUsername New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/CheckUsername/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckUsername Choreo.
     *
     * @param Disqus_Users_CheckUsername_Inputs|array $inputs (optional) Inputs as Disqus_Users_CheckUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_CheckUsername_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_CheckUsername_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckUsername Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_CheckUsername_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_CheckUsername_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckUsername Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_CheckUsername_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckUsername Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_CheckUsername_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckUsername input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CheckUsername Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Callback input for this CheckUsername Choreo.
     *
     * @param string $value (optional, string) The name of a callback function to wrap the respone in. Used when setting ResponseFormat to "jsonp".
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the PublicKey input for this CheckUsername Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckUsername Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Username input for this CheckUsername Choreo.
     *
     * @param string $value (required, string) Enter a Disqus username.
     * @return Disqus_Users_CheckUsername_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the CheckUsername Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_CheckUsername_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckUsername Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckUsername execution.
     * @param Disqus_Users_CheckUsername $choreo The choreography object for this execution.
     * @param Disqus_Users_CheckUsername_Inputs|array $inputs (optional) Inputs as Disqus_Users_CheckUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_CheckUsername_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_CheckUsername $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckUsername execution.
     *
     * @return Disqus_Users_CheckUsername_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CheckUsername execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_CheckUsername_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_CheckUsername_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckUsername Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_CheckUsername_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckUsername Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_CheckUsername_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CheckUsername execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Close a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CloseThread extends Temboo_Choreography
{
    /**
     * Close a thread.
     *
     * @param Temboo_Session $session The session that owns this CloseThread Choreo.
     * @return Disqus_Threads_CloseThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/CloseThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CloseThread Choreo.
     *
     * @param Disqus_Threads_CloseThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_CloseThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_CloseThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_CloseThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CloseThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_CloseThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_CloseThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CloseThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CloseThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CloseThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_CloseThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CloseThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CloseThread Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this CloseThread Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL). Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this CloseThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CloseThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this CloseThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is to be closed. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadByIdentification cannot be set.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this CloseThread Choreo.
     *
     * @param string $value (conditional, string) The identifier to retrieve associated thread details.  Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this CloseThread Choreo.
     *
     * @param string $value (conditional, string) The link pointing to the thread that is to be closed. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_CloseThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the CloseThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CloseThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CloseThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this CloseThread execution.
     * @param Disqus_Threads_CloseThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_CloseThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_CloseThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_CloseThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_CloseThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CloseThread execution.
     *
     * @return Disqus_Threads_CloseThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CloseThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_CloseThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_CloseThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CloseThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CloseThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CloseThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_CloseThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CloseThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates an anonymous post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAnonymousPost extends Temboo_Choreography
{
    /**
     * Creates an anonymous post.
     *
     * @param Temboo_Session $session The session that owns this CreateAnonymousPost Choreo.
     * @return Disqus_Posts_CreateAnonymousPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/CreateAnonymousPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAnonymousPost Choreo.
     *
     * @param Disqus_Posts_CreateAnonymousPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_CreateAnonymousPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_CreateAnonymousPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_CreateAnonymousPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAnonymousPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_CreateAnonymousPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAnonymousPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAnonymousPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAnonymousPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAnonymousPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthorEmail input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (required, string) The email address of the post author.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setAuthorEmail($value)
    {
        return $this->set('AuthorEmail', $value);
    }

    /**
     * Set the value for the AuthorName input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (required, string) The name of the post author.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setAuthorName($value)
    {
        return $this->set('AuthorName', $value);
    }

    /**
     * Set the value for the AuthorURL input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (optional, string) The URL of the author's Disqus profile.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setAuthorURL($value)
    {
        return $this->set('AuthorURL', $value);
    }

    /**
     * Set the value for the ParentPost input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (conditional, string) The ID of a parent post to which the new post will be responding to. Either ParentPost, or Thread must be set, or both.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setParentPost($value)
    {
        return $this->set('ParentPost', $value);
    }

    /**
     * Set the value for the PostContent input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (required, string) The text of this post.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setPostContent($value)
    {
        return $this->set('PostContent', $value);
    }

    /**
     * Set the value for the PublicKey input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (conditional, string) The thread ID to attach the new post to. Either ParentPost, or Thread must be set, or both.
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the Thread input for this CreateAnonymousPost Choreo.
     *
     * @param string $value (conditional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_Posts_CreateAnonymousPost_Inputs For method chaining.
     */
    public function setThread($value)
    {
        return $this->set('Thread', $value);
    }

}


/**
 * Execution object for the CreateAnonymousPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAnonymousPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAnonymousPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAnonymousPost execution.
     * @param Disqus_Posts_CreateAnonymousPost $choreo The choreography object for this execution.
     * @param Disqus_Posts_CreateAnonymousPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_CreateAnonymousPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_CreateAnonymousPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_CreateAnonymousPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAnonymousPost execution.
     *
     * @return Disqus_Posts_CreateAnonymousPost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateAnonymousPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_CreateAnonymousPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_CreateAnonymousPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAnonymousPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAnonymousPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAnonymousPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_CreateAnonymousPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAnonymousPost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a new post for the authenticated user.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAuthenticatedPost extends Temboo_Choreography
{
    /**
     * Create a new post for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CreateAuthenticatedPost Choreo.
     * @return Disqus_Posts_CreateAuthenticatedPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/CreateAuthenticatedPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAuthenticatedPost Choreo.
     *
     * @param Disqus_Posts_CreateAuthenticatedPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_CreateAuthenticatedPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_CreateAuthenticatedPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_CreateAuthenticatedPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAuthenticatedPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_CreateAuthenticatedPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAuthenticatedPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAuthenticatedPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAuthenticatedPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAuthenticatedPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Date input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (optional, string) The date of the post, either in Unix timestamp format, or ISO datetime standard. You must be a moderator to do this.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the IPAddress input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (optional, string) The author's IP address. You must be a moderator to do this.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setIPAddress($value)
    {
        return $this->set('IPAddress', $value);
    }

    /**
     * Set the value for the ParentPost input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (conditional, string) The ID of a parent post to which the new post will be responding to. Either ParentPost, or Thread must be set, or both.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setParentPost($value)
    {
        return $this->set('ParentPost', $value);
    }

    /**
     * Set the value for the PostContent input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (required, string) The text of this post.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setPostContent($value)
    {
        return $this->set('PostContent', $value);
    }

    /**
     * Set the value for the PostState input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (optional, string) Specify the state of the post (comment). Available options include: unapproved, approved, spam, killed. You must be a moderator to do this. If set, pre-approval validation will be skipped.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setPostState($value)
    {
        return $this->set('PostState', $value);
    }

    /**
     * Set the value for the PublicKey input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (conditional, string) The thread ID to attach the new post to. Either ParentPost, or Thread must be set, or both.
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the Thread input for this CreateAuthenticatedPost Choreo.
     *
     * @param string $value (conditional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_Posts_CreateAuthenticatedPost_Inputs For method chaining.
     */
    public function setThread($value)
    {
        return $this->set('Thread', $value);
    }

}


/**
 * Execution object for the CreateAuthenticatedPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAuthenticatedPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAuthenticatedPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAuthenticatedPost execution.
     * @param Disqus_Posts_CreateAuthenticatedPost $choreo The choreography object for this execution.
     * @param Disqus_Posts_CreateAuthenticatedPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_CreateAuthenticatedPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_CreateAuthenticatedPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_CreateAuthenticatedPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAuthenticatedPost execution.
     *
     * @return Disqus_Posts_CreateAuthenticatedPost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateAuthenticatedPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_CreateAuthenticatedPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_CreateAuthenticatedPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAuthenticatedPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_CreateAuthenticatedPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAuthenticatedPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_CreateAuthenticatedPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAuthenticatedPost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new Forum (AKA  Disqus Site or Discussion)
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_CreateForum extends Temboo_Choreography
{
    /**
     * Creates a new Forum (AKA  Disqus Site or Discussion)
     *
     * @param Temboo_Session $session The session that owns this CreateForum Choreo.
     * @return Disqus_Forums_CreateForum New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/CreateForum/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateForum Choreo.
     *
     * @param Disqus_Forums_CreateForum_Inputs|array $inputs (optional) Inputs as Disqus_Forums_CreateForum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_CreateForum_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_CreateForum_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateForum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_CreateForum_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_CreateForum_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateForum Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_CreateForum_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateForum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_CreateForum_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateForum input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateForum Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this CreateForum Choreo.
     *
     * @param string $value (required, string) Forum Short Name.   The short name must  be a unique identifier not currently in use by anyone else in the Disqus Community.  The short name will be also be used to create a unique Disqus Site URL.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this CreateForum Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateForum Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SiteName input for this CreateForum Choreo.
     *
     * @param string $value (required, string) The Site Name of the forum you are creating.
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setSiteName($value)
    {
        return $this->set('SiteName', $value);
    }

    /**
     * Set the value for the Website input for this CreateForum Choreo.
     *
     * @param string $value (required, string) The URL of the website associated with the forum
     * @return Disqus_Forums_CreateForum_Inputs For method chaining.
     */
    public function setWebsite($value)
    {
        return $this->set('Website', $value);
    }
}


/**
 * Execution object for the CreateForum Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_CreateForum_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateForum Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateForum execution.
     * @param Disqus_Forums_CreateForum $choreo The choreography object for this execution.
     * @param Disqus_Forums_CreateForum_Inputs|array $inputs (optional) Inputs as Disqus_Forums_CreateForum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_CreateForum_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_CreateForum $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateForum execution.
     *
     * @return Disqus_Forums_CreateForum_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateForum execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_CreateForum_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_CreateForum_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateForum Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_CreateForum_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateForum Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_CreateForum_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateForum execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CreateThread extends Temboo_Choreography
{
    /**
     * Creates a new thread.
     *
     * @param Temboo_Session $session The session that owns this CreateThread Choreo.
     * @return Disqus_Threads_CreateThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/CreateThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateThread Choreo.
     *
     * @param Disqus_Threads_CreateThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_CreateThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_CreateThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_CreateThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_CreateThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_CreateThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CreateThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_CreateThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateThread Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this CreateThread Choreo.
     *
     * @param string $value (optional, string) The id of a category associated with the thread being created.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Date input for this CreateThread Choreo.
     *
     * @param string $value (optional, date) The date to be associated with this thread (as a unix timestamp or ISO datetime format).
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Forum input for this CreateThread Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Identifier input for this CreateThread Choreo.
     *
     * @param string $value (optional, string) An optional string identifier for the thread. Maximum length is 300.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setIdentifier($value)
    {
        return $this->set('Identifier', $value);
    }

    /**
     * Set the value for the Message input for this CreateThread Choreo.
     *
     * @param string $value (optional, string) A message for the new thread.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the PublicKey input for this CreateThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Title input for this CreateThread Choreo.
     *
     * @param string $value (required, string) The title of the thread.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the URL input for this CreateThread Choreo.
     *
     * @param string $value (optional, string) A URL to be associated with the thread. Maximum length is 500.
     * @return Disqus_Threads_CreateThread_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the CreateThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CreateThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateThread execution.
     * @param Disqus_Threads_CreateThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_CreateThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_CreateThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_CreateThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_CreateThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateThread execution.
     *
     * @return Disqus_Threads_CreateThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_CreateThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_CreateThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_CreateThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_CreateThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateThread execution.
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
 * Completes the OAuth 2 process by retrieving a Disqus access token, refresh token, expiration time for the access token, username and user ID, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth 2 process by retrieving a Disqus access token, refresh token, expiration time for the access token, username and user ID, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Disqus_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Disqus_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the PublicKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the SecretKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Disqus (AKA the API Secret).
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Disqus_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Disqus
 */
class Disqus_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Disqus_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Disqus_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Disqus_OAuth_FinalizeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Disqus_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The expiration time in seconds of the access token retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A valid refresh token used to generate a new access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Disqus User ID associated with the access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
    /**
     * Retrieve the value for the "Username" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Disqus Username associated with the access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUsername()
    {
        return $this->get('Username');
    }
}

/**
 * Follows the specified user.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_FollowUser extends Temboo_Choreography
{
    /**
     * Follows the specified user.
     *
     * @param Temboo_Session $session The session that owns this FollowUser Choreo.
     * @return Disqus_Users_FollowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/FollowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FollowUser Choreo.
     *
     * @param Disqus_Users_FollowUser_Inputs|array $inputs (optional) Inputs as Disqus_Users_FollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_FollowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_FollowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_FollowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_FollowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_FollowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_FollowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FollowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FollowUser Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Callback input for this FollowUser Choreo.
     *
     * @param string $value (optional, string) The name of a callback function to wrap the response in. Used when setting ResponseFormat to "jsonp".
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the PublicKey input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FollowUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this FollowUser Choreo.
     *
     * @param string $value (conditional, string) The User ID that is to be followed. If UserID is set, then Username must be null.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Username input for this FollowUser Choreo.
     *
     * @param string $value (conditional, string) The Disqus username that is to be followed.  If Username is being set, then UserID must be null.
     * @return Disqus_Users_FollowUser_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_FollowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FollowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this FollowUser execution.
     * @param Disqus_Users_FollowUser $choreo The choreography object for this execution.
     * @param Disqus_Users_FollowUser_Inputs|array $inputs (optional) Inputs as Disqus_Users_FollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_FollowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_FollowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FollowUser execution.
     *
     * @return Disqus_Users_FollowUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FollowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_FollowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_FollowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_FollowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FollowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_FollowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FollowUser execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Determines if the specified forum has one or more views.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ForumHasViews extends Temboo_Choreography
{
    /**
     * Determines if the specified forum has one or more views.
     *
     * @param Temboo_Session $session The session that owns this ForumHasViews Choreo.
     * @return Disqus_Forums_ForumHasViews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/ForumHasViews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ForumHasViews Choreo.
     *
     * @param Disqus_Forums_ForumHasViews_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ForumHasViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ForumHasViews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_ForumHasViews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ForumHasViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ForumHasViews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_ForumHasViews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ForumHasViews Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ForumHasViews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ForumHasViews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ForumHasViews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ForumHasViews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ForumHasViews Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this ForumHasViews Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this ForumHasViews Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ForumHasViews Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_ForumHasViews_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ForumHasViews Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ForumHasViews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ForumHasViews Choreo.
     *
     * @param Temboo_Session $session The session that owns this ForumHasViews execution.
     * @param Disqus_Forums_ForumHasViews $choreo The choreography object for this execution.
     * @param Disqus_Forums_ForumHasViews_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ForumHasViews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ForumHasViews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_ForumHasViews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ForumHasViews execution.
     *
     * @return Disqus_Forums_ForumHasViews_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ForumHasViews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_ForumHasViews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_ForumHasViews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ForumHasViews Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ForumHasViews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ForumHasViews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_ForumHasViews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ForumHasViews execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details on an existing forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_GetForumDetails extends Temboo_Choreography
{
    /**
     * Retrieves details on an existing forum.
     *
     * @param Temboo_Session $session The session that owns this GetForumDetails Choreo.
     * @return Disqus_Forums_GetForumDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/GetForumDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetForumDetails Choreo.
     *
     * @param Disqus_Forums_GetForumDetails_Inputs|array $inputs (optional) Inputs as Disqus_Forums_GetForumDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_GetForumDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_GetForumDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetForumDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_GetForumDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_GetForumDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetForumDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_GetForumDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetForumDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_GetForumDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetForumDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetForumDetails Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this GetForumDetails Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this GetForumDetails Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this GetForumDetails Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response. Valid values: author.
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetForumDetails Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_GetForumDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetForumDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_GetForumDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetForumDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetForumDetails execution.
     * @param Disqus_Forums_GetForumDetails $choreo The choreography object for this execution.
     * @param Disqus_Forums_GetForumDetails_Inputs|array $inputs (optional) Inputs as Disqus_Forums_GetForumDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_GetForumDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_GetForumDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetForumDetails execution.
     *
     * @return Disqus_Forums_GetForumDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetForumDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_GetForumDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_GetForumDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetForumDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_GetForumDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetForumDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_GetForumDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetForumDetails execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth 2.0 process.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth 2.0 process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Disqus_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Disqus_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the PublicKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (conditional, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Available permissions to request on behalf of the user are read, write and admin, multiple values separated by a comma (ex: "read,write"). Default (blank) is same as "read,write".
     * @return Disqus_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Disqus
 */
class Disqus_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Disqus_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Disqus_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Disqus_OAuth_InitializeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Disqus_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the user needs to go to in order to grant access to your application.
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
 * Retrieve a list of forums a user has been active on.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListActiveForums extends Temboo_Choreography
{
    /**
     * Retrieve a list of forums a user has been active on.
     *
     * @param Temboo_Session $session The session that owns this ListActiveForums Choreo.
     * @return Disqus_Users_ListActiveForums New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/ListActiveForums/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListActiveForums Choreo.
     *
     * @param Disqus_Users_ListActiveForums_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListActiveForums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListActiveForums_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_ListActiveForums_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListActiveForums Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListActiveForums_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_ListActiveForums_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListActiveForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListActiveForums_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListActiveForums Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListActiveForums_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListActiveForums input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Cursor input for this ListActiveForums Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Limit input for this ListActiveForums Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListActiveForums Choreo.
     *
     * @param string $value (optional, string) The sort order for the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListActiveForums Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListActiveForums Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListActiveForums Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the UserID input for this ListActiveForums Choreo.
     *
     * @param string $value (conditional, string) the Disqus User ID, for which active forum information will be retrieved.  If UserID is set, then Username must be null.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Username input for this ListActiveForums Choreo.
     *
     * @param string $value (conditional, string) A Disqus username.  If Username is being set, then UserID must be null.
     * @return Disqus_Users_ListActiveForums_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListActiveForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListActiveForums_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListActiveForums Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListActiveForums execution.
     * @param Disqus_Users_ListActiveForums $choreo The choreography object for this execution.
     * @param Disqus_Users_ListActiveForums_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListActiveForums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListActiveForums_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_ListActiveForums $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListActiveForums execution.
     *
     * @return Disqus_Users_ListActiveForums_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListActiveForums execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_ListActiveForums_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_ListActiveForums_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListActiveForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListActiveForums_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListActiveForums Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_ListActiveForums_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListActiveForums execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of forums owned by the specified user.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListForums extends Temboo_Choreography
{
    /**
     * Retrieve a list of forums owned by the specified user.
     *
     * @param Temboo_Session $session The session that owns this ListForums Choreo.
     * @return Disqus_Users_ListForums New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/ListForums/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListForums Choreo.
     *
     * @param Disqus_Users_ListForums_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListForums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListForums_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_ListForums_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListForums Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListForums_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_ListForums_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListForums_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListForums Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListForums_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListForums input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Cursor input for this ListForums Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Limit input for this ListForums Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListForums Choreo.
     *
     * @param string $value (optional, string) The sort order for the results. Valid vaues are: asc or desc. Default is set to: asc.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListForums Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListForums Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListForums Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp to obtain results from. Default is set to null.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the UserID input for this ListForums Choreo.
     *
     * @param string $value (conditional, string) The Disqus User ID, for which active forum information will be retrieved.  If UserID is set, then Username must be null.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Username input for this ListForums Choreo.
     *
     * @param string $value (conditional, string) A Disqus username.  If Username is being set, then UserID must be null.
     * @return Disqus_Users_ListForums_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListForums_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListForums Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListForums execution.
     * @param Disqus_Users_ListForums $choreo The choreography object for this execution.
     * @param Disqus_Users_ListForums_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListForums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListForums_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_ListForums $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListForums execution.
     *
     * @return Disqus_Users_ListForums_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListForums execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_ListForums_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_ListForums_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListForums Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListForums_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListForums Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_ListForums_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListForums execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all moderators on a forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListModerators extends Temboo_Choreography
{
    /**
     * Retrieves a list of all moderators on a forum.
     *
     * @param Temboo_Session $session The session that owns this ListModerators Choreo.
     * @return Disqus_Forums_ListModerators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/ListModerators/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListModerators Choreo.
     *
     * @param Disqus_Forums_ListModerators_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListModerators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListModerators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_ListModerators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListModerators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListModerators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_ListModerators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListModerators Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListModerators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListModerators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListModerators_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListModerators input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListModerators Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this ListModerators Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListModerators Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListModerators Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_ListModerators_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListModerators Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListModerators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListModerators Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListModerators execution.
     * @param Disqus_Forums_ListModerators $choreo The choreography object for this execution.
     * @param Disqus_Forums_ListModerators_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListModerators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListModerators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_ListModerators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListModerators execution.
     *
     * @return Disqus_Forums_ListModerators_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListModerators execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_ListModerators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_ListModerators_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListModerators Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListModerators_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListModerators Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_ListModerators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListModerators execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of posts within a forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListPosts extends Temboo_Choreography
{
    /**
     * Retrieve a list of posts within a forum.
     *
     * @param Temboo_Session $session The session that owns this ListPosts Choreo.
     * @return Disqus_Forums_ListPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/ListPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPosts Choreo.
     *
     * @param Disqus_Forums_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_ListPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_ListPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Cursor input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListPosts Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  Displays all posts contained in that  forum.  If null, posts from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Include input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A post status parameter to filter results by. Valid parameters include: unapproved, approved, spam, deleted, flagged, highlighted.  Default is set to: approved.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListPosts Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Query input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A search string to retrieve posts mathching the query.  Default is set to null.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Related input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response. Valid values: thread.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Since input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Forums_ListPosts_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }
}


/**
 * Execution object for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPosts execution.
     * @param Disqus_Forums_ListPosts $choreo The choreography object for this execution.
     * @param Disqus_Forums_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_ListPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPosts execution.
     *
     * @return Disqus_Forums_ListPosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_ListPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_ListPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_ListPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPosts execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of posts ordered by date of creation.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ListPosts extends Temboo_Choreography
{
    /**
     * Retrieve a list of posts ordered by date of creation.
     *
     * @param Temboo_Session $session The session that owns this ListPosts Choreo.
     * @return Disqus_Posts_ListPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/ListPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPosts Choreo.
     *
     * @param Disqus_Posts_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ListPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_ListPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ListPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_ListPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ListPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ListPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) Specify a category ID for which posts wil be retrieved.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Cursor input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL)  to display all posts contained in that  forum.  If null, posts from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Include input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A post status parameter to filter results by. Valid parameters include: unapproved, approved, spam, deleted, flagged, highlighted.  Default is set to: approved.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListPosts Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Query input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A search string to retrieve posts mathching the query.  Default is set to null.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Related input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Specify a related thread or forum that are to be included in the response.  Valid entries include: thread, or forum.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) Deprecated (retained for backward compatibility only).
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the Since input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the ThreadID input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The Thread ID to narrow post search results.
     * @return Disqus_Posts_ListPosts_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }
}


/**
 * Execution object for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ListPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPosts execution.
     * @param Disqus_Posts_ListPosts $choreo The choreography object for this execution.
     * @param Disqus_Posts_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ListPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_ListPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPosts execution.
     *
     * @return Disqus_Posts_ListPosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_ListPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_ListPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ListPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_ListPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPosts execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of posts within a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListPosts extends Temboo_Choreography
{
    /**
     * Retrieve a list of posts within a thread.
     *
     * @param Temboo_Session $session The session that owns this ListPosts Choreo.
     * @return Disqus_Threads_ListPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/ListPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPosts Choreo.
     *
     * @param Disqus_Threads_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ListPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_ListPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ListPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_ListPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ListPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Cursor input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL). If null, threads from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Include input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Specify a post status parameter to filter results by. Valid parameters include: unapproved, approved, spam, deleted, flagged.  Default is set to: approved.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Maximum value is 100.  Defaults to 25.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListPosts Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Query input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A search string to limit results.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Related input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Specify a related thread or forum that are to be included in the response.  Valid entries include: forum.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Since input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the ThreadID input for this ListPosts Choreo.
     *
     * @param string $value (conditional, string) A Thread ID to narrow post search results. Required unless specifying ThreadIdentifier or ThreadLink.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this ListPosts Choreo.
     *
     * @param string $value (conditional, string) An identifier to retrieve associated thread details. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this ListPosts Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be retrieved. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_ListPosts_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }
}


/**
 * Execution object for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPosts execution.
     * @param Disqus_Threads_ListPosts $choreo The choreography object for this execution.
     * @param Disqus_Threads_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ListPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_ListPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPosts execution.
     *
     * @return Disqus_Threads_ListPosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_ListPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_ListPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_ListPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPosts execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List posts made by a user.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListPosts extends Temboo_Choreography
{
    /**
     * List posts made by a user.
     *
     * @param Temboo_Session $session The session that owns this ListPosts Choreo.
     * @return Disqus_Users_ListPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/ListPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPosts Choreo.
     *
     * @param Disqus_Users_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_ListPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_ListPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_ListPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Cursor input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Included input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Specify the type of posts that are to be retrieved. Valid values are: unapproved, approved, spam, deleted, flagged, highlighted.  Default is: approved.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setIncluded($value)
    {
        return $this->set('Included', $value);
    }

    /**
     * Set the value for the Limit input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The sort order for the results. valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListPosts Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response. Valid values are: forum and thread.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListPosts Choreo.
     *
     * @param int $value (optional, integer) Deprecated (retained for backward compatibility only).
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the Since input for this ListPosts Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the UserID input for this ListPosts Choreo.
     *
     * @param string $value (conditional, string) The Disqus User ID, for which active forum information will be retrieved.  If UserID is set, then Username must be null.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Username input for this ListPosts Choreo.
     *
     * @param string $value (conditional, string) A Disqus username. If Username is being set, then UserID must be null.
     * @return Disqus_Users_ListPosts_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPosts execution.
     * @param Disqus_Users_ListPosts $choreo The choreography object for this execution.
     * @param Disqus_Users_ListPosts_Inputs|array $inputs (optional) Inputs as Disqus_Users_ListPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_ListPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_ListPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPosts execution.
     *
     * @return Disqus_Users_ListPosts_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_ListPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_ListPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPosts Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_ListPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_ListPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPosts execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of threads within a forum ordered by date of creation.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListThreads extends Temboo_Choreography
{
    /**
     * Retrieve a list of threads within a forum ordered by date of creation.
     *
     * @param Temboo_Session $session The session that owns this ListThreads Choreo.
     * @return Disqus_Forums_ListThreads New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/ListThreads/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListThreads Choreo.
     *
     * @param Disqus_Forums_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListThreads_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_ListThreads_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListThreads_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_ListThreads_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListThreads_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListThreads_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListThreads input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Cursor input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListThreads Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  Displays all threads contained in that forum.  If null, threads from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Include input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Specify a post status parameter to filter results by. Valid parameters include: open, closed, killed.  Default is set to: open, closed.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Maximum value is 100.  Defaults to 25.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The sort order for the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListThreads Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response. Valid values are: forum and author.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. Default is set to null.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the ThreadID input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A Thread ID to narrow search results.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) An identifier to retrieve associated threads. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A link pointing to the thread that is to be retrieved. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Forums_ListThreads_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }
}


/**
 * Execution object for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListThreads_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListThreads Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListThreads execution.
     * @param Disqus_Forums_ListThreads $choreo The choreography object for this execution.
     * @param Disqus_Forums_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListThreads_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_ListThreads $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListThreads execution.
     *
     * @return Disqus_Forums_ListThreads_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListThreads execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_ListThreads_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_ListThreads_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListThreads_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListThreads Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_ListThreads_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListThreads execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of threads ordered by date of creation.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListThreads extends Temboo_Choreography
{
    /**
     * Retrieve a list of threads ordered by date of creation.
     *
     * @param Temboo_Session $session The session that owns this ListThreads Choreo.
     * @return Disqus_Threads_ListThreads New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/ListThreads/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListThreads Choreo.
     *
     * @param Disqus_Threads_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ListThreads_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_ListThreads_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ListThreads_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_ListThreads_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListThreads_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ListThreads_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListThreads input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AuthorID input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) A Disqus User ID, for which threads will be retrieved. If AuthorID is set, then AuthorUsername must be null.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setAuthorID($value)
    {
        return $this->set('AuthorID', $value);
    }

    /**
     * Set the value for the AuthorUsername input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A Disqus username for which threads will be retrieved.  If AuthorUsername is being set, then AuthorID must be null.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setAuthorUsername($value)
    {
        return $this->set('AuthorUsername', $value);
    }

    /**
     * Set the value for the Category input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) Specify a category ID for which threads wil be retrieved.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Cursor input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  All threads in this forum will be retrieved.  If null, threads from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Include input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Specify a post status parameter to filter results by. Valid parameters include: open, closed, killed.  Default is set to: open, closed.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Maximum value is 100.  Defaults to 25.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The sort order for the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListThreads Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response.  Valid entries include: forum, author, category
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) Deprecated (retained for backward compatibility only).
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the Since input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the ThreadID input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A Thread ID to narrow search results.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) An identifier to retrieve associated threads. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A link pointing to the thread that is to be retrieved. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_ListThreads_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }
}


/**
 * Execution object for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListThreads_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListThreads Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListThreads execution.
     * @param Disqus_Threads_ListThreads $choreo The choreography object for this execution.
     * @param Disqus_Threads_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ListThreads_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_ListThreads $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListThreads execution.
     *
     * @return Disqus_Threads_ListThreads_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListThreads execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_ListThreads_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_ListThreads_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ListThreads_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListThreads Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_ListThreads_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListThreads execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of trending threads.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Trends_ListThreads extends Temboo_Choreography
{
    /**
     * Returns a list of trending threads.
     *
     * @param Temboo_Session $session The session that owns this ListThreads Choreo.
     * @return Disqus_Trends_ListThreads New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Trends/ListThreads/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListThreads Choreo.
     *
     * @param Disqus_Trends_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Trends_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Trends_ListThreads_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Trends_ListThreads_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Trends_ListThreads_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Trends_ListThreads_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Trends_ListThreads_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListThreads Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Trends_ListThreads_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListThreads input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Callback input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The name of a callback function to wrap the respone in. Used when setting ResponseFormat to "jsonp".
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Forum input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Allows you to look up a forum by ID (aka the short name).
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Limit input for this ListThreads Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 10.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListThreads Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response. Valid values are: forum, author, category.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListThreads Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Trends_ListThreads_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Trends_ListThreads_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListThreads Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListThreads execution.
     * @param Disqus_Trends_ListThreads $choreo The choreography object for this execution.
     * @param Disqus_Trends_ListThreads_Inputs|array $inputs (optional) Inputs as Disqus_Trends_ListThreads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Trends_ListThreads_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Trends_ListThreads $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListThreads execution.
     *
     * @return Disqus_Trends_ListThreads_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListThreads execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Trends_ListThreads_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Trends_ListThreads_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListThreads Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Trends_ListThreads_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListThreads Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Trends_ListThreads_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListThreads execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of active users within a forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListUsers extends Temboo_Choreography
{
    /**
     * Retrieve a list of active users within a forum.
     *
     * @param Temboo_Session $session The session that owns this ListUsers Choreo.
     * @return Disqus_Forums_ListUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/ListUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUsers Choreo.
     *
     * @param Disqus_Forums_ListUsers_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_ListUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_ListUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_ListUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListUsers Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Cursor input for this ListUsers Choreo.
     *
     * @param string $value (optional, string) Default is set to null.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Forum input for this ListUsers Choreo.
     *
     * @param string $value (required, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  Displays all users contained in that  forum.  If null, users from all forums moderated by the authenticating user will be retrieved.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the Limit input for this ListUsers Choreo.
     *
     * @param int $value (optional, integer) The number of records to return. Defaults to 25.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Order input for this ListUsers Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: asc or desc. Default is set to: asc.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicKey input for this ListUsers Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListUsers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SinceID input for this ListUsers Choreo.
     *
     * @param string $value (optional, string) A Unix timestamp (or ISO datetime standard) to obtain results from. (e.g. 2014-02-02T01:01:00Z) Default is set to null.
     * @return Disqus_Forums_ListUsers_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }
}


/**
 * Execution object for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUsers execution.
     * @param Disqus_Forums_ListUsers $choreo The choreography object for this execution.
     * @param Disqus_Forums_ListUsers_Inputs|array $inputs (optional) Inputs as Disqus_Forums_ListUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_ListUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_ListUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUsers execution.
     *
     * @return Disqus_Forums_ListUsers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_ListUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_ListUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_ListUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_ListUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUsers execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Mark a post as spam.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_MarkAsSpam extends Temboo_Choreography
{
    /**
     * Mark a post as spam.
     *
     * @param Temboo_Session $session The session that owns this MarkAsSpam Choreo.
     * @return Disqus_Posts_MarkAsSpam New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/MarkAsSpam/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MarkAsSpam Choreo.
     *
     * @param Disqus_Posts_MarkAsSpam_Inputs|array $inputs (optional) Inputs as Disqus_Posts_MarkAsSpam_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_MarkAsSpam_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_MarkAsSpam_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MarkAsSpam Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_MarkAsSpam_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_MarkAsSpam_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MarkAsSpam Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_MarkAsSpam_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MarkAsSpam Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_MarkAsSpam_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MarkAsSpam input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this MarkAsSpam Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this MarkAsSpam Choreo.
     *
     * @param int $value (required, integer) The post ID which is to be marked as spam.
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this MarkAsSpam Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MarkAsSpam Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_MarkAsSpam_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the MarkAsSpam Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_MarkAsSpam_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MarkAsSpam Choreo.
     *
     * @param Temboo_Session $session The session that owns this MarkAsSpam execution.
     * @param Disqus_Posts_MarkAsSpam $choreo The choreography object for this execution.
     * @param Disqus_Posts_MarkAsSpam_Inputs|array $inputs (optional) Inputs as Disqus_Posts_MarkAsSpam_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_MarkAsSpam_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_MarkAsSpam $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MarkAsSpam execution.
     *
     * @return Disqus_Posts_MarkAsSpam_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this MarkAsSpam execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_MarkAsSpam_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_MarkAsSpam_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MarkAsSpam Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_MarkAsSpam_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MarkAsSpam Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_MarkAsSpam_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MarkAsSpam execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Open a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_OpenThread extends Temboo_Choreography
{
    /**
     * Open a thread.
     *
     * @param Temboo_Session $session The session that owns this OpenThread Choreo.
     * @return Disqus_Threads_OpenThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/OpenThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this OpenThread Choreo.
     *
     * @param Disqus_Threads_OpenThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_OpenThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_OpenThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_OpenThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this OpenThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_OpenThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_OpenThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the OpenThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_OpenThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the OpenThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_OpenThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this OpenThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this OpenThread Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this OpenThread Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this OpenThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this OpenThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this OpenThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this OpenThread Choreo.
     *
     * @param string $value (conditional, string) The identifier of the thread that is to be opened. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this OpenThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be opened. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_OpenThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the OpenThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_OpenThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the OpenThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this OpenThread execution.
     * @param Disqus_Threads_OpenThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_OpenThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_OpenThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_OpenThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_OpenThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this OpenThread execution.
     *
     * @return Disqus_Threads_OpenThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this OpenThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_OpenThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_OpenThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the OpenThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_OpenThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the OpenThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_OpenThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this OpenThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain information about a post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_PostDetails extends Temboo_Choreography
{
    /**
     * Obtain information about a post.
     *
     * @param Temboo_Session $session The session that owns this PostDetails Choreo.
     * @return Disqus_Posts_PostDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/PostDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PostDetails Choreo.
     *
     * @param Disqus_Posts_PostDetails_Inputs|array $inputs (optional) Inputs as Disqus_Posts_PostDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_PostDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_PostDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PostDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_PostDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_PostDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PostDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_PostDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PostDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_PostDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PostDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this PostDetails Choreo.
     *
     * @param string $value (optional, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this PostDetails Choreo.
     *
     * @param int $value (required, integer) The post ID for which information will be returned.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this PostDetails Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this PostDetails Choreo.
     *
     * @param string $value (optional, string) Specify a related thread or forum that are to be included in the response.  Valid entries include: thread, or forum.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PostDetails Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_PostDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the PostDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_PostDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PostDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this PostDetails execution.
     * @param Disqus_Posts_PostDetails $choreo The choreography object for this execution.
     * @param Disqus_Posts_PostDetails_Inputs|array $inputs (optional) Inputs as Disqus_Posts_PostDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_PostDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_PostDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PostDetails execution.
     *
     * @return Disqus_Posts_PostDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this PostDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_PostDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_PostDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PostDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_PostDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PostDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_PostDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PostDetails execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates a new access token with a given valid refresh token.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_RefreshToken extends Temboo_Choreography
{
    /**
     * Generates a new access token with a given valid refresh token.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken Choreo.
     * @return Disqus_OAuth_RefreshToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/OAuth/RefreshToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefreshToken Choreo.
     *
     * @param Disqus_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_RefreshToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_OAuth_RefreshToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_RefreshToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_OAuth_RefreshToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_RefreshToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_OAuth_RefreshToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefreshToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PublicKey input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the RefreshToken input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) A valid refresh token used to generate a new access token.
     * @return Disqus_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Disqus (AKA the API Secret).
     * @return Disqus_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_RefreshToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefreshToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken execution.
     * @param Disqus_OAuth_RefreshToken $choreo The choreography object for this execution.
     * @param Disqus_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Disqus_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_OAuth_RefreshToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_OAuth_RefreshToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefreshToken execution.
     *
     * @return Disqus_OAuth_RefreshToken_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RefreshToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_OAuth_RefreshToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_OAuth_RefreshToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_OAuth_RefreshToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefreshToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_OAuth_RefreshToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this RefreshToken execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this RefreshToken execution.
     *
     * @return int (integer) The expiration time in seconds of the Access Token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "NewRefreshToken" output from this RefreshToken execution.
     *
     * @return string (string) The new refresh token which can be used the next time your app needs to get a new access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewRefreshToken()
    {
        return $this->get('NewRefreshToken');
    }
}

/**
 * Removes a moderator from a forum.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_RemoveModerator extends Temboo_Choreography
{
    /**
     * Removes a moderator from a forum.
     *
     * @param Temboo_Session $session The session that owns this RemoveModerator Choreo.
     * @return Disqus_Forums_RemoveModerator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Forums/RemoveModerator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveModerator Choreo.
     *
     * @param Disqus_Forums_RemoveModerator_Inputs|array $inputs (optional) Inputs as Disqus_Forums_RemoveModerator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_RemoveModerator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Forums_RemoveModerator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveModerator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_RemoveModerator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Forums_RemoveModerator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_RemoveModerator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveModerator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Forums_RemoveModerator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveModerator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RemoveModerator Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ModeratorID input for this RemoveModerator Choreo.
     *
     * @param string $value (required, string) Moderator ID
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function setModeratorID($value)
    {
        return $this->set('ModeratorID', $value);
    }

    /**
     * Set the value for the PublicKey input for this RemoveModerator Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RemoveModerator Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Forums_RemoveModerator_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RemoveModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_RemoveModerator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveModerator Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveModerator execution.
     * @param Disqus_Forums_RemoveModerator $choreo The choreography object for this execution.
     * @param Disqus_Forums_RemoveModerator_Inputs|array $inputs (optional) Inputs as Disqus_Forums_RemoveModerator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Forums_RemoveModerator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Forums_RemoveModerator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveModerator execution.
     *
     * @return Disqus_Forums_RemoveModerator_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RemoveModerator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Forums_RemoveModerator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Forums_RemoveModerator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveModerator Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Forums_RemoveModerator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveModerator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Forums_RemoveModerator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RemoveModerator execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Remove a post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RemovePost extends Temboo_Choreography
{
    /**
     * Remove a post.
     *
     * @param Temboo_Session $session The session that owns this RemovePost Choreo.
     * @return Disqus_Posts_RemovePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/RemovePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemovePost Choreo.
     *
     * @param Disqus_Posts_RemovePost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_RemovePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_RemovePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_RemovePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemovePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_RemovePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_RemovePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemovePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RemovePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemovePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_RemovePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemovePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RemovePost Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this RemovePost Choreo.
     *
     * @param int $value (required, integer) The post ID which is to be removed.
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this RemovePost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RemovePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_RemovePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the RemovePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RemovePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemovePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemovePost execution.
     * @param Disqus_Posts_RemovePost $choreo The choreography object for this execution.
     * @param Disqus_Posts_RemovePost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_RemovePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_RemovePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_RemovePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemovePost execution.
     *
     * @return Disqus_Posts_RemovePost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RemovePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_RemovePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_RemovePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemovePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RemovePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemovePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_RemovePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RemovePost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Remove a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RemoveThread extends Temboo_Choreography
{
    /**
     * Remove a thread.
     *
     * @param Temboo_Session $session The session that owns this RemoveThread Choreo.
     * @return Disqus_Threads_RemoveThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/RemoveThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveThread Choreo.
     *
     * @param Disqus_Threads_RemoveThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_RemoveThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_RemoveThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_RemoveThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_RemoveThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_RemoveThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RemoveThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_RemoveThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RemoveThread Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this RemoveThread Choreo.
     *
     * @param string $value (optional, string) The Forum Short Name (i.e., the subdomain of the Disqus Site URL) of a thread that is to be removed.  Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this RemoveThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RemoveThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this RemoveThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is to be removed. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this RemoveThread Choreo.
     *
     * @param string $value (conditional, string) The identifier for the thread that is to be removed.  Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this RemoveThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be removed. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_RemoveThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the RemoveThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RemoveThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveThread execution.
     * @param Disqus_Threads_RemoveThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_RemoveThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_RemoveThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_RemoveThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_RemoveThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveThread execution.
     *
     * @return Disqus_Threads_RemoveThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RemoveThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_RemoveThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_RemoveThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RemoveThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_RemoveThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RemoveThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Report (flag) a post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ReportPost extends Temboo_Choreography
{
    /**
     * Report (flag) a post.
     *
     * @param Temboo_Session $session The session that owns this ReportPost Choreo.
     * @return Disqus_Posts_ReportPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/ReportPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReportPost Choreo.
     *
     * @param Disqus_Posts_ReportPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ReportPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ReportPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_ReportPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReportPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ReportPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_ReportPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReportPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ReportPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReportPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_ReportPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReportPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ReportPost Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this ReportPost Choreo.
     *
     * @param int $value (required, integer) The post ID which is to be reported (flagged).
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this ReportPost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ReportPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_ReportPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ReportPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ReportPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReportPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReportPost execution.
     * @param Disqus_Posts_ReportPost $choreo The choreography object for this execution.
     * @param Disqus_Posts_ReportPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_ReportPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_ReportPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_ReportPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReportPost execution.
     *
     * @return Disqus_Posts_ReportPost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ReportPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_ReportPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_ReportPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReportPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_ReportPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReportPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_ReportPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReportPost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restore a deleted post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RestorePost extends Temboo_Choreography
{
    /**
     * Restore a deleted post.
     *
     * @param Temboo_Session $session The session that owns this RestorePost Choreo.
     * @return Disqus_Posts_RestorePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/RestorePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RestorePost Choreo.
     *
     * @param Disqus_Posts_RestorePost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_RestorePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_RestorePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_RestorePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RestorePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_RestorePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_RestorePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RestorePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RestorePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RestorePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_RestorePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RestorePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RestorePost Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PostID input for this RestorePost Choreo.
     *
     * @param int $value (required, integer) The post ID which is to be restored (undeleted).
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this RestorePost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RestorePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_RestorePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the RestorePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RestorePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RestorePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this RestorePost execution.
     * @param Disqus_Posts_RestorePost $choreo The choreography object for this execution.
     * @param Disqus_Posts_RestorePost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_RestorePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_RestorePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_RestorePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RestorePost execution.
     *
     * @return Disqus_Posts_RestorePost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RestorePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_RestorePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_RestorePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RestorePost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_RestorePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RestorePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_RestorePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RestorePost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restore a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RestoreThread extends Temboo_Choreography
{
    /**
     * Restore a thread.
     *
     * @param Temboo_Session $session The session that owns this RestoreThread Choreo.
     * @return Disqus_Threads_RestoreThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/RestoreThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RestoreThread Choreo.
     *
     * @param Disqus_Threads_RestoreThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_RestoreThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_RestoreThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_RestoreThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RestoreThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_RestoreThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_RestoreThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RestoreThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RestoreThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RestoreThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_RestoreThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RestoreThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RestoreThread Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Forum input for this RestoreThread Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL) of a thread that is to be restored.  Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this RestoreThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RestoreThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this RestoreThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is to be restored. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this RestoreThread Choreo.
     *
     * @param string $value (conditional, string) The identifier for the thread that is to be restored.  Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this RestoreThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be restored. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_RestoreThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the RestoreThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RestoreThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RestoreThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this RestoreThread execution.
     * @param Disqus_Threads_RestoreThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_RestoreThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_RestoreThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_RestoreThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_RestoreThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RestoreThread execution.
     *
     * @return Disqus_Threads_RestoreThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RestoreThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_RestoreThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_RestoreThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RestoreThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_RestoreThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RestoreThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_RestoreThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RestoreThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Subscribe to a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_SubscribeToThread extends Temboo_Choreography
{
    /**
     * Subscribe to a thread.
     *
     * @param Temboo_Session $session The session that owns this SubscribeToThread Choreo.
     * @return Disqus_Threads_SubscribeToThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/SubscribeToThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SubscribeToThread Choreo.
     *
     * @param Disqus_Threads_SubscribeToThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_SubscribeToThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_SubscribeToThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_SubscribeToThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SubscribeToThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_SubscribeToThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_SubscribeToThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SubscribeToThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_SubscribeToThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SubscribeToThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_SubscribeToThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SubscribeToThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this SubscribeToThread Choreo.
     *
     * @param string $value (conditional, string) An email address to use when subscribing to the thread.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Forum input for this SubscribeToThread Choreo.
     *
     * @param int $value (optional, integer) The forum ID of a thread that is to be subscribed to. Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this SubscribeToThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SubscribeToThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this SubscribeToThread Choreo.
     *
     * @param int $value (conditional, integer) Enter an ID of a thread that is to be subscribed to. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this SubscribeToThread Choreo.
     *
     * @param string $value (conditional, string) The identifier for the thread that is to be subscribed to.  Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this SubscribeToThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be subscribed to. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_SubscribeToThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the SubscribeToThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_SubscribeToThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SubscribeToThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this SubscribeToThread execution.
     * @param Disqus_Threads_SubscribeToThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_SubscribeToThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_SubscribeToThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_SubscribeToThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_SubscribeToThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SubscribeToThread execution.
     *
     * @return Disqus_Threads_SubscribeToThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SubscribeToThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_SubscribeToThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_SubscribeToThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SubscribeToThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_SubscribeToThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SubscribeToThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_SubscribeToThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SubscribeToThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain thread details.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ThreadDetails extends Temboo_Choreography
{
    /**
     * Obtain thread details.
     *
     * @param Temboo_Session $session The session that owns this ThreadDetails Choreo.
     * @return Disqus_Threads_ThreadDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/ThreadDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ThreadDetails Choreo.
     *
     * @param Disqus_Threads_ThreadDetails_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ThreadDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ThreadDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_ThreadDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ThreadDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ThreadDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_ThreadDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ThreadDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ThreadDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ThreadDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_ThreadDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ThreadDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Forum input for this ThreadDetails Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL).  Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this ThreadDetails Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the Related input for this ThreadDetails Choreo.
     *
     * @param string $value (optional, string) Indicates the relations to include with your response.  Valid entries include: author, category, or forum.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setRelated($value)
    {
        return $this->set('Related', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ThreadDetails Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this ThreadDetails Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is to be retrieved. Required unless specifying ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this ThreadDetails Choreo.
     *
     * @param string $value (conditional, string) The identifier to retrieve associated thread details. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this ThreadDetails Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be retrieved. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_ThreadDetails_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the ThreadDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ThreadDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ThreadDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this ThreadDetails execution.
     * @param Disqus_Threads_ThreadDetails $choreo The choreography object for this execution.
     * @param Disqus_Threads_ThreadDetails_Inputs|array $inputs (optional) Inputs as Disqus_Threads_ThreadDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_ThreadDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_ThreadDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ThreadDetails execution.
     *
     * @return Disqus_Threads_ThreadDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ThreadDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_ThreadDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_ThreadDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ThreadDetails Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_ThreadDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ThreadDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_ThreadDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ThreadDetails execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List posts made by a user.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_UnfollowUser extends Temboo_Choreography
{
    /**
     * List posts made by a user.
     *
     * @param Temboo_Session $session The session that owns this UnfollowUser Choreo.
     * @return Disqus_Users_UnfollowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Users/UnfollowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnfollowUser Choreo.
     *
     * @param Disqus_Users_UnfollowUser_Inputs|array $inputs (optional) Inputs as Disqus_Users_UnfollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_UnfollowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Users_UnfollowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnfollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_UnfollowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Users_UnfollowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_UnfollowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnfollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Users_UnfollowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnfollowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) A valid OAuth 2.0 access token.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PublicKey input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnfollowUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), jsonp, or rss.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UnfollowUser Choreo.
     *
     * @param string $value (conditional, string) The User ID that is to be unfollowed. If UserID is set, then Username must be null.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Username input for this UnfollowUser Choreo.
     *
     * @param string $value (conditional, string) A Disqus username.  If Username is being set, then UserID must be null.
     * @return Disqus_Users_UnfollowUser_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_UnfollowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnfollowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnfollowUser execution.
     * @param Disqus_Users_UnfollowUser $choreo The choreography object for this execution.
     * @param Disqus_Users_UnfollowUser_Inputs|array $inputs (optional) Inputs as Disqus_Users_UnfollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Users_UnfollowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Users_UnfollowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnfollowUser execution.
     *
     * @return Disqus_Users_UnfollowUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UnfollowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Users_UnfollowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Users_UnfollowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Users_UnfollowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnfollowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Users_UnfollowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnfollowUser execution.
     *
     * @return string The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Unsubscribe from a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_UnsubscribeFromThread extends Temboo_Choreography
{
    /**
     * Unsubscribe from a thread.
     *
     * @param Temboo_Session $session The session that owns this UnsubscribeFromThread Choreo.
     * @return Disqus_Threads_UnsubscribeFromThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/UnsubscribeFromThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnsubscribeFromThread Choreo.
     *
     * @param Disqus_Threads_UnsubscribeFromThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_UnsubscribeFromThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_UnsubscribeFromThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_UnsubscribeFromThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnsubscribeFromThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_UnsubscribeFromThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnsubscribeFromThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_UnsubscribeFromThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnsubscribeFromThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnsubscribeFromThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (conditional, string) The email address that will be unsubsribed from the thread.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Forum input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL) of a thread that is to be unsubscribed from. Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this UnsubscribeFromThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is to be unsubscribed from. Required unless specifying the ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (conditional, string) The identifier for the thread that is to be unsubscribed from.  Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this UnsubscribeFromThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is to be unsubscribed from. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_UnsubscribeFromThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

}


/**
 * Execution object for the UnsubscribeFromThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_UnsubscribeFromThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnsubscribeFromThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnsubscribeFromThread execution.
     * @param Disqus_Threads_UnsubscribeFromThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_UnsubscribeFromThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_UnsubscribeFromThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_UnsubscribeFromThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_UnsubscribeFromThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnsubscribeFromThread execution.
     *
     * @return Disqus_Threads_UnsubscribeFromThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UnsubscribeFromThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_UnsubscribeFromThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_UnsubscribeFromThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnsubscribeFromThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_UnsubscribeFromThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnsubscribeFromThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_UnsubscribeFromThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnsubscribeFromThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Register a vote on a post.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_VoteOnPost extends Temboo_Choreography
{
    /**
     * Register a vote on a post.
     *
     * @param Temboo_Session $session The session that owns this VoteOnPost Choreo.
     * @return Disqus_Posts_VoteOnPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Posts/VoteOnPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VoteOnPost Choreo.
     *
     * @param Disqus_Posts_VoteOnPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_VoteOnPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_VoteOnPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Posts_VoteOnPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VoteOnPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_VoteOnPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Posts_VoteOnPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VoteOnPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_VoteOnPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VoteOnPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Posts_VoteOnPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VoteOnPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PostID input for this VoteOnPost Choreo.
     *
     * @param int $value (required, integer) The post ID for which a vote is being registered.
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function setPostID($value)
    {
        return $this->set('PostID', $value);
    }

    /**
     * Set the value for the PublicKey input for this VoteOnPost Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VoteOnPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Vote input for this VoteOnPost Choreo.
     *
     * @param int $value (required, integer) A numeric value for your vote. Valid choices are: -1, 0, or 1.
     * @return Disqus_Posts_VoteOnPost_Inputs For method chaining.
     */
    public function setVote($value)
    {
        return $this->set('Vote', $value);
    }

}


/**
 * Execution object for the VoteOnPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_VoteOnPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VoteOnPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this VoteOnPost execution.
     * @param Disqus_Posts_VoteOnPost $choreo The choreography object for this execution.
     * @param Disqus_Posts_VoteOnPost_Inputs|array $inputs (optional) Inputs as Disqus_Posts_VoteOnPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Posts_VoteOnPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Posts_VoteOnPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VoteOnPost execution.
     *
     * @return Disqus_Posts_VoteOnPost_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this VoteOnPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Posts_VoteOnPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Posts_VoteOnPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VoteOnPost Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Posts_VoteOnPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VoteOnPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Posts_VoteOnPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VoteOnPost execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Vote on a thread.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_VoteOnThread extends Temboo_Choreography
{
    /**
     * Vote on a thread.
     *
     * @param Temboo_Session $session The session that owns this VoteOnThread Choreo.
     * @return Disqus_Threads_VoteOnThread New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Disqus/Threads/VoteOnThread/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VoteOnThread Choreo.
     *
     * @param Disqus_Threads_VoteOnThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_VoteOnThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_VoteOnThread_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Disqus_Threads_VoteOnThread_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VoteOnThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_VoteOnThread_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Disqus_Threads_VoteOnThread_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VoteOnThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_VoteOnThread_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VoteOnThread Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Disqus_Threads_VoteOnThread_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VoteOnThread input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Forum input for this VoteOnThread Choreo.
     *
     * @param string $value (optional, string) Forum Short Name (i.e., the subdomain of the Disqus Site URL) of a thread that is being voted on. Required if setting either ThreadByIdentification, or ThreadByLink.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setForum($value)
    {
        return $this->set('Forum', $value);
    }

    /**
     * Set the value for the PublicKey input for this VoteOnThread Choreo.
     *
     * @param string $value (required, string) The Public Key provided by Disqus (AKA the API Key).
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setPublicKey($value)
    {
        return $this->set('PublicKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VoteOnThread Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and jsonp.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ThreadID input for this VoteOnThread Choreo.
     *
     * @param int $value (conditional, integer) The ID of a thread that is being voted on. Required unless specifying the ThreadIdentifier or ThreadLink. If using this parameter, ThreadIdentifier cannot be set.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setThreadID($value)
    {
        return $this->set('ThreadID', $value);
    }

    /**
     * Set the value for the ThreadIdentifier input for this VoteOnThread Choreo.
     *
     * @param string $value (conditional, string) The identifier for the thread that is being voted on. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadLink cannot be used.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setThreadIdentifier($value)
    {
        return $this->set('ThreadIdentifier', $value);
    }

    /**
     * Set the value for the ThreadLink input for this VoteOnThread Choreo.
     *
     * @param string $value (conditional, string) A link pointing to the thread that is being voted on. Note that a Forum must also be provided when using this parameter. If set, ThreadID and ThreadIdentifier cannot be set.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setThreadLink($value)
    {
        return $this->set('ThreadLink', $value);
    }

    /**
     * Set the value for the Vote input for this VoteOnThread Choreo.
     *
     * @param int $value (required, integer) A numberic value for your vote. Valid choices are: -1, 0, or 1.
     * @return Disqus_Threads_VoteOnThread_Inputs For method chaining.
     */
    public function setVote($value)
    {
        return $this->set('Vote', $value);
    }

}


/**
 * Execution object for the VoteOnThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_VoteOnThread_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VoteOnThread Choreo.
     *
     * @param Temboo_Session $session The session that owns this VoteOnThread execution.
     * @param Disqus_Threads_VoteOnThread $choreo The choreography object for this execution.
     * @param Disqus_Threads_VoteOnThread_Inputs|array $inputs (optional) Inputs as Disqus_Threads_VoteOnThread_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Disqus_Threads_VoteOnThread_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Disqus_Threads_VoteOnThread $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VoteOnThread execution.
     *
     * @return Disqus_Threads_VoteOnThread_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this VoteOnThread execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Disqus_Threads_VoteOnThread_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Disqus_Threads_VoteOnThread_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VoteOnThread Choreo.
 *
 * @package Temboo
 * @subpackage Disqus
 */
class Disqus_Threads_VoteOnThread_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VoteOnThread Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Disqus_Threads_VoteOnThread_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VoteOnThread execution.
     *
     * @return string (json) The response from Disqus.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>