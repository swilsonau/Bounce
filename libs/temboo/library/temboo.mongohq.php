<?php

/**
 * Temboo PHP SDK MongoHQ classes
 *
 * Execute Choreographies from the Temboo MongoHQ bundle.
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
 * @subpackage MongoHQ
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Updates multiple documents by criteria.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_BulkUpdate extends Temboo_Choreography
{
    /**
     * Updates multiple documents by criteria.
     *
     * @param Temboo_Session $session The session that owns this BulkUpdate Choreo.
     * @return MongoHQ_Documents_BulkUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/BulkUpdate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BulkUpdate Choreo.
     *
     * @param MongoHQ_Documents_BulkUpdate_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_BulkUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_BulkUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_BulkUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BulkUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_BulkUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_BulkUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BulkUpdate Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_BulkUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BulkUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_BulkUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BulkUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Object input for this BulkUpdate Choreo.
     *
     * @param string $value (required, json) The JSON document update command. This accepts standard MongoDB syntax such as $set or $inc.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setObject($value)
    {
        return $this->set('Object', $value);
    }

    /**
     * Set the value for the APIToken input for this BulkUpdate Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this BulkUpdate Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the document being updated.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the Criteria input for this BulkUpdate Choreo.
     *
     * @param string $value (required, json) The JSON criteria used to match which documents will be updated.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setCriteria($value)
    {
        return $this->set('Criteria', $value);
    }

    /**
     * Set the value for the DatabaseName input for this BulkUpdate Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the document being updated.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Multiple input for this BulkUpdate Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that all documents matching the criteria should be updated. Setting to false (the default) will update just one.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setMultiple($value)
    {
        return $this->set('Multiple', $value);
    }

    /**
     * Set the value for the Safe input for this BulkUpdate Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the operation will wait until the document is saved before returning. When set to false (the default) documents are saved asynchronously.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setSafe($value)
    {
        return $this->set('Safe', $value);
    }

    /**
     * Set the value for the Upsert input for this BulkUpdate Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the operation will create records that do not already exist. Set to true to enable this feature. Defaults to false.
     * @return MongoHQ_Documents_BulkUpdate_Inputs For method chaining.
     */
    public function setUpsert($value)
    {
        return $this->set('Upsert', $value);
    }
}


/**
 * Execution object for the BulkUpdate Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_BulkUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BulkUpdate Choreo.
     *
     * @param Temboo_Session $session The session that owns this BulkUpdate execution.
     * @param MongoHQ_Documents_BulkUpdate $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_BulkUpdate_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_BulkUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_BulkUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_BulkUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BulkUpdate execution.
     *
     * @return MongoHQ_Documents_BulkUpdate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this BulkUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_BulkUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_BulkUpdate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BulkUpdate Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_BulkUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BulkUpdate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_BulkUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BulkUpdate execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new collection within a database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_CreateCollection extends Temboo_Choreography
{
    /**
     * Creates a new collection within a database.
     *
     * @param Temboo_Session $session The session that owns this CreateCollection Choreo.
     * @return MongoHQ_Collections_CreateCollection New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Collections/CreateCollection/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCollection Choreo.
     *
     * @param MongoHQ_Collections_CreateCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_CreateCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_CreateCollection_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Collections_CreateCollection_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_CreateCollection_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Collections_CreateCollection_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_CreateCollection_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_CreateCollection_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCollection input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Collections_CreateCollection_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Collections_CreateCollection_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this CreateCollection Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Collections_CreateCollection_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this CreateCollection Choreo.
     *
     * @param string $value (required, string) The name of the collection to create.
     * @return MongoHQ_Collections_CreateCollection_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this CreateCollection Choreo.
     *
     * @param string $value (required, string) The name of the database to create the collection under.
     * @return MongoHQ_Collections_CreateCollection_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the CreateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_CreateCollection_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCollection Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCollection execution.
     * @param MongoHQ_Collections_CreateCollection $choreo The choreography object for this execution.
     * @param MongoHQ_Collections_CreateCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_CreateCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_CreateCollection_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Collections_CreateCollection $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCollection execution.
     *
     * @return MongoHQ_Collections_CreateCollection_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateCollection execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Collections_CreateCollection_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Collections_CreateCollection_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_CreateCollection_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCollection Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Collections_CreateCollection_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCollection execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new database in your account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_CreateDatabase extends Temboo_Choreography
{
    /**
     * Creates a new database in your account.
     *
     * @param Temboo_Session $session The session that owns this CreateDatabase Choreo.
     * @return MongoHQ_Databases_CreateDatabase New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Databases/CreateDatabase/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateDatabase Choreo.
     *
     * @param MongoHQ_Databases_CreateDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_CreateDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_CreateDatabase_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Databases_CreateDatabase_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_CreateDatabase_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Databases_CreateDatabase_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_CreateDatabase_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_CreateDatabase_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDatabase input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Databases_CreateDatabase_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Databases_CreateDatabase_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this CreateDatabase Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Databases_CreateDatabase_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DatabaseName input for this CreateDatabase Choreo.
     *
     * @param string $value (required, string) The name of the database to create.
     * @return MongoHQ_Databases_CreateDatabase_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Type input for this CreateDatabase Choreo.
     *
     * @param string $value (required, string) The type of database to create (e.g., sandbox, small, large)
     * @return MongoHQ_Databases_CreateDatabase_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the CreateDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_CreateDatabase_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDatabase Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateDatabase execution.
     * @param MongoHQ_Databases_CreateDatabase $choreo The choreography object for this execution.
     * @param MongoHQ_Databases_CreateDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_CreateDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_CreateDatabase_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Databases_CreateDatabase $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDatabase execution.
     *
     * @return MongoHQ_Databases_CreateDatabase_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateDatabase execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Databases_CreateDatabase_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Databases_CreateDatabase_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_CreateDatabase_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateDatabase Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Databases_CreateDatabase_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateDatabase execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new document within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_CreateDocument extends Temboo_Choreography
{
    /**
     * Creates a new document within a collection.
     *
     * @param Temboo_Session $session The session that owns this CreateDocument Choreo.
     * @return MongoHQ_Documents_CreateDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/CreateDocument/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateDocument Choreo.
     *
     * @param MongoHQ_Documents_CreateDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_CreateDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_CreateDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_CreateDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_CreateDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_CreateDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_CreateDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_CreateDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Document input for this CreateDocument Choreo.
     *
     * @param string $value (required, json) The JSON document to be created under the collection.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setDocument($value)
    {
        return $this->set('Document', $value);
    }

    /**
     * Set the value for the APIToken input for this CreateDocument Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this CreateDocument Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the new document.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this CreateDocument Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the new document.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Safe input for this CreateDocument Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the operation will wait until the document is saved before returning. When set to false (the default) documents are saved asynchronously.
     * @return MongoHQ_Documents_CreateDocument_Inputs For method chaining.
     */
    public function setSafe($value)
    {
        return $this->set('Safe', $value);
    }
}


/**
 * Execution object for the CreateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_CreateDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDocument Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateDocument execution.
     * @param MongoHQ_Documents_CreateDocument $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_CreateDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_CreateDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_CreateDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_CreateDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDocument execution.
     *
     * @return MongoHQ_Documents_CreateDocument_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_CreateDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_CreateDocument_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_CreateDocument_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateDocument Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_CreateDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateDocument execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a new index within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_CreateIndex extends Temboo_Choreography
{
    /**
     * Create a new index within a collection.
     *
     * @param Temboo_Session $session The session that owns this CreateIndex Choreo.
     * @return MongoHQ_Indexes_CreateIndex New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Indexes/CreateIndex/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateIndex Choreo.
     *
     * @param MongoHQ_Indexes_CreateIndex_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_CreateIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_CreateIndex_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Indexes_CreateIndex_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateIndex Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_CreateIndex_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Indexes_CreateIndex_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_CreateIndex_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateIndex Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_CreateIndex_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateIndex input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Specification input for this CreateIndex Choreo.
     *
     * @param string $value (required, json) The index specification to be created (e.g., {"key":1}).
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setSpecification($value)
    {
        return $this->set('Specification', $value);
    }

    /**
     * Set the value for the APIToken input for this CreateIndex Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the Background input for this CreateIndex Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the index will be built in the background. Defaults to true.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setBackground($value)
    {
        return $this->set('Background', $value);
    }

    /**
     * Set the value for the CollectionName input for this CreateIndex Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the indexes to list.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this CreateIndex Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the indexes to list.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the DropDuplicates input for this CreateIndex Choreo.
     *
     * @param bool $value (optional, boolean) When creating a unique index on a collection with pre-existing records, this flag will keep the first document the database indexes and drop all subsequent with duplicate values. Defaults to false.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setDropDuplicates($value)
    {
        return $this->set('DropDuplicates', $value);
    }

    /**
     * Set the value for the Maximum input for this CreateIndex Choreo.
     *
     * @param string $value (optional, string) The maximum longitude and latitude for a geo index.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setMaximum($value)
    {
        return $this->set('Maximum', $value);
    }

    /**
     * Set the value for the Minimum input for this CreateIndex Choreo.
     *
     * @param string $value (optional, string) The minimum longitude and latitude for a geo index.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setMinimum($value)
    {
        return $this->set('Minimum', $value);
    }

    /**
     * Set the value for the Unique input for this CreateIndex Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the index should enforce a uniqueness constraint. Defaults to false.
     * @return MongoHQ_Indexes_CreateIndex_Inputs For method chaining.
     */
    public function setUnique($value)
    {
        return $this->set('Unique', $value);
    }
}


/**
 * Execution object for the CreateIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_CreateIndex_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateIndex Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateIndex execution.
     * @param MongoHQ_Indexes_CreateIndex $choreo The choreography object for this execution.
     * @param MongoHQ_Indexes_CreateIndex_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_CreateIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_CreateIndex_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Indexes_CreateIndex $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateIndex execution.
     *
     * @return MongoHQ_Indexes_CreateIndex_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateIndex execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Indexes_CreateIndex_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Indexes_CreateIndex_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_CreateIndex_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateIndex Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Indexes_CreateIndex_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateIndex execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes all indexes within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteAllIndexes extends Temboo_Choreography
{
    /**
     * Deletes all indexes within a collection.
     *
     * @param Temboo_Session $session The session that owns this DeleteAllIndexes Choreo.
     * @return MongoHQ_Indexes_DeleteAllIndexes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Indexes/DeleteAllIndexes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteAllIndexes Choreo.
     *
     * @param MongoHQ_Indexes_DeleteAllIndexes_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_DeleteAllIndexes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Indexes_DeleteAllIndexes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteAllIndexes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Indexes_DeleteAllIndexes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteAllIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteAllIndexes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteAllIndexes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteAllIndexes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this DeleteAllIndexes Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this DeleteAllIndexes Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the indexes to delete.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this DeleteAllIndexes Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the indexes to delete.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the DeleteAllIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteAllIndexes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteAllIndexes Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteAllIndexes execution.
     * @param MongoHQ_Indexes_DeleteAllIndexes $choreo The choreography object for this execution.
     * @param MongoHQ_Indexes_DeleteAllIndexes_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_DeleteAllIndexes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Indexes_DeleteAllIndexes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteAllIndexes execution.
     *
     * @return MongoHQ_Indexes_DeleteAllIndexes_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteAllIndexes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Indexes_DeleteAllIndexes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteAllIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteAllIndexes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteAllIndexes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Indexes_DeleteAllIndexes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteAllIndexes execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specific collection within a database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_DeleteCollection extends Temboo_Choreography
{
    /**
     * Deletes a specific collection within a database.
     *
     * @param Temboo_Session $session The session that owns this DeleteCollection Choreo.
     * @return MongoHQ_Collections_DeleteCollection New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Collections/DeleteCollection/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCollection Choreo.
     *
     * @param MongoHQ_Collections_DeleteCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_DeleteCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_DeleteCollection_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Collections_DeleteCollection_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_DeleteCollection_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Collections_DeleteCollection_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_DeleteCollection_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_DeleteCollection_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCollection input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Collections_DeleteCollection_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Collections_DeleteCollection_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this DeleteCollection Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Collections_DeleteCollection_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this DeleteCollection Choreo.
     *
     * @param string $value (required, string) The name of the collection to delete.
     * @return MongoHQ_Collections_DeleteCollection_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this DeleteCollection Choreo.
     *
     * @param string $value (required, string) The name of the database that contains the collection to delete.
     * @return MongoHQ_Collections_DeleteCollection_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the DeleteCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_DeleteCollection_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCollection Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCollection execution.
     * @param MongoHQ_Collections_DeleteCollection $choreo The choreography object for this execution.
     * @param MongoHQ_Collections_DeleteCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_DeleteCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_DeleteCollection_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Collections_DeleteCollection $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCollection execution.
     *
     * @return MongoHQ_Collections_DeleteCollection_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteCollection execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Collections_DeleteCollection_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Collections_DeleteCollection_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_DeleteCollection_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCollection Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Collections_DeleteCollection_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCollection execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_DeleteDatabase extends Temboo_Choreography
{
    /**
     * Deletes a specified database.
     *
     * @param Temboo_Session $session The session that owns this DeleteDatabase Choreo.
     * @return MongoHQ_Databases_DeleteDatabase New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Databases/DeleteDatabase/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteDatabase Choreo.
     *
     * @param MongoHQ_Databases_DeleteDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_DeleteDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_DeleteDatabase_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Databases_DeleteDatabase_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Databases_DeleteDatabase_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_DeleteDatabase_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDatabase input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this DeleteDatabase Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DatabaseName input for this DeleteDatabase Choreo.
     *
     * @param string $value (required, string) The name of the database to delete.
     * @return MongoHQ_Databases_DeleteDatabase_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the DeleteDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_DeleteDatabase_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDatabase Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteDatabase execution.
     * @param MongoHQ_Databases_DeleteDatabase $choreo The choreography object for this execution.
     * @param MongoHQ_Databases_DeleteDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_DeleteDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_DeleteDatabase_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Databases_DeleteDatabase $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDatabase execution.
     *
     * @return MongoHQ_Databases_DeleteDatabase_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteDatabase execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Databases_DeleteDatabase_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Databases_DeleteDatabase_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_DeleteDatabase_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteDatabase Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Databases_DeleteDatabase_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteDatabase execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specific document within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_DeleteDocument extends Temboo_Choreography
{
    /**
     * Deletes a specific document within a collection.
     *
     * @param Temboo_Session $session The session that owns this DeleteDocument Choreo.
     * @return MongoHQ_Documents_DeleteDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/DeleteDocument/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteDocument Choreo.
     *
     * @param MongoHQ_Documents_DeleteDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_DeleteDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_DeleteDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_DeleteDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_DeleteDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_DeleteDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_DeleteDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_DeleteDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this DeleteDocument Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this DeleteDocument Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the document to delete.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this DeleteDocument Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the document to delete.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the DocumentID input for this DeleteDocument Choreo.
     *
     * @param string $value (required, string) The ID of the document to delete.
     * @return MongoHQ_Documents_DeleteDocument_Inputs For method chaining.
     */
    public function setDocumentID($value)
    {
        return $this->set('DocumentID', $value);
    }
}


/**
 * Execution object for the DeleteDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_DeleteDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDocument Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteDocument execution.
     * @param MongoHQ_Documents_DeleteDocument $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_DeleteDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_DeleteDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_DeleteDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_DeleteDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDocument execution.
     *
     * @return MongoHQ_Documents_DeleteDocument_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_DeleteDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_DeleteDocument_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_DeleteDocument_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteDocument Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_DeleteDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteDocument execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified index within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteIndex extends Temboo_Choreography
{
    /**
     * Deletes a specified index within a collection.
     *
     * @param Temboo_Session $session The session that owns this DeleteIndex Choreo.
     * @return MongoHQ_Indexes_DeleteIndex New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Indexes/DeleteIndex/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteIndex Choreo.
     *
     * @param MongoHQ_Indexes_DeleteIndex_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_DeleteIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_DeleteIndex_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Indexes_DeleteIndex_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteIndex Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Indexes_DeleteIndex_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteIndex_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteIndex Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteIndex input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this DeleteIndex Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this DeleteIndex Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the index being deleted.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this DeleteIndex Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the index being deleted.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the IndexName input for this DeleteIndex Choreo.
     *
     * @param string $value (required, string) The name of the index to delete.
     * @return MongoHQ_Indexes_DeleteIndex_Inputs For method chaining.
     */
    public function setIndexName($value)
    {
        return $this->set('IndexName', $value);
    }
}


/**
 * Execution object for the DeleteIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteIndex_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteIndex Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteIndex execution.
     * @param MongoHQ_Indexes_DeleteIndex $choreo The choreography object for this execution.
     * @param MongoHQ_Indexes_DeleteIndex_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_DeleteIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_DeleteIndex_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Indexes_DeleteIndex $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteIndex execution.
     *
     * @return MongoHQ_Indexes_DeleteIndex_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteIndex execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Indexes_DeleteIndex_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Indexes_DeleteIndex_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteIndex Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_DeleteIndex_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteIndex Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Indexes_DeleteIndex_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteIndex execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific collection within a database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_GetCollection extends Temboo_Choreography
{
    /**
     * Retrieves a specific collection within a database.
     *
     * @param Temboo_Session $session The session that owns this GetCollection Choreo.
     * @return MongoHQ_Collections_GetCollection New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Collections/GetCollection/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCollection Choreo.
     *
     * @param MongoHQ_Collections_GetCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_GetCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_GetCollection_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Collections_GetCollection_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_GetCollection_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Collections_GetCollection_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_GetCollection_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_GetCollection_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCollection input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Collections_GetCollection_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Collections_GetCollection_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetCollection Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Collections_GetCollection_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this GetCollection Choreo.
     *
     * @param string $value (required, string) The name of the collection to retrieve.
     * @return MongoHQ_Collections_GetCollection_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this GetCollection Choreo.
     *
     * @param string $value (required, string) The name of the database that contains the collection to retrieve.
     * @return MongoHQ_Collections_GetCollection_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the GetCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_GetCollection_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCollection Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCollection execution.
     * @param MongoHQ_Collections_GetCollection $choreo The choreography object for this execution.
     * @param MongoHQ_Collections_GetCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_GetCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_GetCollection_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Collections_GetCollection $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCollection execution.
     *
     * @return MongoHQ_Collections_GetCollection_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetCollection execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Collections_GetCollection_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Collections_GetCollection_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_GetCollection_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCollection Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Collections_GetCollection_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCollection execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specified database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_GetDatabase extends Temboo_Choreography
{
    /**
     * Retrieves information about a specified database.
     *
     * @param Temboo_Session $session The session that owns this GetDatabase Choreo.
     * @return MongoHQ_Databases_GetDatabase New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Databases/GetDatabase/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDatabase Choreo.
     *
     * @param MongoHQ_Databases_GetDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_GetDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_GetDatabase_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Databases_GetDatabase_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_GetDatabase_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Databases_GetDatabase_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_GetDatabase_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDatabase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_GetDatabase_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDatabase input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Databases_GetDatabase_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Databases_GetDatabase_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetDatabase Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Databases_GetDatabase_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DatabaseName input for this GetDatabase Choreo.
     *
     * @param string $value (required, string) The name of the database to retrieve.
     * @return MongoHQ_Databases_GetDatabase_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the GetDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_GetDatabase_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDatabase Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDatabase execution.
     * @param MongoHQ_Databases_GetDatabase $choreo The choreography object for this execution.
     * @param MongoHQ_Databases_GetDatabase_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_GetDatabase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_GetDatabase_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Databases_GetDatabase $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDatabase execution.
     *
     * @return MongoHQ_Databases_GetDatabase_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetDatabase execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Databases_GetDatabase_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Databases_GetDatabase_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDatabase Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_GetDatabase_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDatabase Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Databases_GetDatabase_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDatabase execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details about a particular deployment in your account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetDeployment extends Temboo_Choreography
{
    /**
     * Retrieves details about a particular deployment in your account.
     *
     * @param Temboo_Session $session The session that owns this GetDeployment Choreo.
     * @return MongoHQ_Deployments_GetDeployment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Deployments/GetDeployment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDeployment Choreo.
     *
     * @param MongoHQ_Deployments_GetDeployment_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_GetDeployment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_GetDeployment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Deployments_GetDeployment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDeployment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_GetDeployment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Deployments_GetDeployment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDeployment Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetDeployment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDeployment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_GetDeployment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDeployment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Deployments_GetDeployment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Deployments_GetDeployment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetDeployment Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Deployments_GetDeployment_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DeploymentName input for this GetDeployment Choreo.
     *
     * @param string $value (required, string) The domain and port of the server (e.g., rose.mongohq.com:9000).
     * @return MongoHQ_Deployments_GetDeployment_Inputs For method chaining.
     */
    public function setDeploymentName($value)
    {
        return $this->set('DeploymentName', $value);
    }
}


/**
 * Execution object for the GetDeployment Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetDeployment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDeployment Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDeployment execution.
     * @param MongoHQ_Deployments_GetDeployment $choreo The choreography object for this execution.
     * @param MongoHQ_Deployments_GetDeployment_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_GetDeployment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_GetDeployment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Deployments_GetDeployment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDeployment execution.
     *
     * @return MongoHQ_Deployments_GetDeployment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetDeployment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Deployments_GetDeployment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Deployments_GetDeployment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDeployment Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetDeployment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDeployment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Deployments_GetDeployment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDeployment execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific document within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_GetDocument extends Temboo_Choreography
{
    /**
     * Retrieves a specific document within a collection.
     *
     * @param Temboo_Session $session The session that owns this GetDocument Choreo.
     * @return MongoHQ_Documents_GetDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/GetDocument/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDocument Choreo.
     *
     * @param MongoHQ_Documents_GetDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_GetDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_GetDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_GetDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_GetDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_GetDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_GetDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_GetDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetDocument Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this GetDocument Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the document to retrieve.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this GetDocument Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the document to retrieve.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the DocumentID input for this GetDocument Choreo.
     *
     * @param string $value (required, string) The ID of the document to return.
     * @return MongoHQ_Documents_GetDocument_Inputs For method chaining.
     */
    public function setDocumentID($value)
    {
        return $this->set('DocumentID', $value);
    }
}


/**
 * Execution object for the GetDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_GetDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDocument Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDocument execution.
     * @param MongoHQ_Documents_GetDocument $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_GetDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_GetDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_GetDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_GetDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDocument execution.
     *
     * @return MongoHQ_Documents_GetDocument_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_GetDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_GetDocument_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_GetDocument_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDocument Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_GetDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDocument execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific invoice by ID.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_GetInvoice extends Temboo_Choreography
{
    /**
     * Retrieves a specific invoice by ID.
     *
     * @param Temboo_Session $session The session that owns this GetInvoice Choreo.
     * @return MongoHQ_Invoices_GetInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Invoices/GetInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetInvoice Choreo.
     *
     * @param MongoHQ_Invoices_GetInvoice_Inputs|array $inputs (optional) Inputs as MongoHQ_Invoices_GetInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Invoices_GetInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Invoices_GetInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Invoices_GetInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Invoices_GetInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInvoice Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_GetInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Invoices_GetInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Invoices_GetInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Invoices_GetInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetInvoice Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Invoices_GetInvoice_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the ID input for this GetInvoice Choreo.
     *
     * @param string $value (required, string) The ID of the invoice to retrieve.
     * @return MongoHQ_Invoices_GetInvoice_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetInvoice Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_GetInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetInvoice execution.
     * @param MongoHQ_Invoices_GetInvoice $choreo The choreography object for this execution.
     * @param MongoHQ_Invoices_GetInvoice_Inputs|array $inputs (optional) Inputs as MongoHQ_Invoices_GetInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Invoices_GetInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Invoices_GetInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInvoice execution.
     *
     * @return MongoHQ_Invoices_GetInvoice_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Invoices_GetInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Invoices_GetInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetInvoice Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_GetInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Invoices_GetInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetInvoice execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves logs from a particular deployment in your account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetLogs extends Temboo_Choreography
{
    /**
     * Retrieves logs from a particular deployment in your account.
     *
     * @param Temboo_Session $session The session that owns this GetLogs Choreo.
     * @return MongoHQ_Deployments_GetLogs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Deployments/GetLogs/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLogs Choreo.
     *
     * @param MongoHQ_Deployments_GetLogs_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_GetLogs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_GetLogs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Deployments_GetLogs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLogs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_GetLogs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Deployments_GetLogs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLogs Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetLogs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLogs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_GetLogs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLogs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Deployments_GetLogs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Deployments_GetLogs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this GetLogs Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Deployments_GetLogs_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DeploymentName input for this GetLogs Choreo.
     *
     * @param string $value (required, string) The domain and port of the server (e.g., rose.mongohq.com:9000).
     * @return MongoHQ_Deployments_GetLogs_Inputs For method chaining.
     */
    public function setDeploymentName($value)
    {
        return $this->set('DeploymentName', $value);
    }
}


/**
 * Execution object for the GetLogs Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetLogs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLogs Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLogs execution.
     * @param MongoHQ_Deployments_GetLogs $choreo The choreography object for this execution.
     * @param MongoHQ_Deployments_GetLogs_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_GetLogs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_GetLogs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Deployments_GetLogs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLogs execution.
     *
     * @return MongoHQ_Deployments_GetLogs_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLogs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Deployments_GetLogs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Deployments_GetLogs_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLogs Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_GetLogs_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLogs Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Deployments_GetLogs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLogs execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all collections within a database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_ListCollections extends Temboo_Choreography
{
    /**
     * Retrieves a list of all collections within a database.
     *
     * @param Temboo_Session $session The session that owns this ListCollections Choreo.
     * @return MongoHQ_Collections_ListCollections New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Collections/ListCollections/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCollections Choreo.
     *
     * @param MongoHQ_Collections_ListCollections_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_ListCollections_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_ListCollections_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Collections_ListCollections_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCollections Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_ListCollections_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Collections_ListCollections_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCollections Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_ListCollections_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCollections Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_ListCollections_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCollections input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Collections_ListCollections_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Collections_ListCollections_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListCollections Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Collections_ListCollections_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the DatabaseName input for this ListCollections Choreo.
     *
     * @param string $value (required, string) The name of the database that contains the collections to list.
     * @return MongoHQ_Collections_ListCollections_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the ListCollections Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_ListCollections_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCollections Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCollections execution.
     * @param MongoHQ_Collections_ListCollections $choreo The choreography object for this execution.
     * @param MongoHQ_Collections_ListCollections_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_ListCollections_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_ListCollections_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Collections_ListCollections $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCollections execution.
     *
     * @return MongoHQ_Collections_ListCollections_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListCollections execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Collections_ListCollections_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Collections_ListCollections_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCollections Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_ListCollections_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCollections Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Collections_ListCollections_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCollections execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all databases in your account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_ListDatabases extends Temboo_Choreography
{
    /**
     * Retrieves a list of all databases in your account.
     *
     * @param Temboo_Session $session The session that owns this ListDatabases Choreo.
     * @return MongoHQ_Databases_ListDatabases New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Databases/ListDatabases/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListDatabases Choreo.
     *
     * @param MongoHQ_Databases_ListDatabases_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_ListDatabases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_ListDatabases_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Databases_ListDatabases_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDatabases Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_ListDatabases_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Databases_ListDatabases_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDatabases Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_ListDatabases_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListDatabases Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Databases_ListDatabases_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDatabases input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Databases_ListDatabases_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Databases_ListDatabases_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListDatabases Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Databases_ListDatabases_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }
}


/**
 * Execution object for the ListDatabases Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_ListDatabases_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDatabases Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListDatabases execution.
     * @param MongoHQ_Databases_ListDatabases $choreo The choreography object for this execution.
     * @param MongoHQ_Databases_ListDatabases_Inputs|array $inputs (optional) Inputs as MongoHQ_Databases_ListDatabases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Databases_ListDatabases_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Databases_ListDatabases $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDatabases execution.
     *
     * @return MongoHQ_Databases_ListDatabases_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListDatabases execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Databases_ListDatabases_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Databases_ListDatabases_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListDatabases Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Databases_ListDatabases_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListDatabases Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Databases_ListDatabases_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListDatabases execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all deployments in your account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_ListDeployments extends Temboo_Choreography
{
    /**
     * Retrieves a list of all deployments in your account.
     *
     * @param Temboo_Session $session The session that owns this ListDeployments Choreo.
     * @return MongoHQ_Deployments_ListDeployments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Deployments/ListDeployments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListDeployments Choreo.
     *
     * @param MongoHQ_Deployments_ListDeployments_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_ListDeployments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_ListDeployments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Deployments_ListDeployments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDeployments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_ListDeployments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Deployments_ListDeployments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDeployments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_ListDeployments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListDeployments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Deployments_ListDeployments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDeployments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Deployments_ListDeployments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Deployments_ListDeployments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListDeployments Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Deployments_ListDeployments_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }
}


/**
 * Execution object for the ListDeployments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_ListDeployments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDeployments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListDeployments execution.
     * @param MongoHQ_Deployments_ListDeployments $choreo The choreography object for this execution.
     * @param MongoHQ_Deployments_ListDeployments_Inputs|array $inputs (optional) Inputs as MongoHQ_Deployments_ListDeployments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Deployments_ListDeployments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Deployments_ListDeployments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDeployments execution.
     *
     * @return MongoHQ_Deployments_ListDeployments_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListDeployments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Deployments_ListDeployments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Deployments_ListDeployments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListDeployments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Deployments_ListDeployments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListDeployments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Deployments_ListDeployments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListDeployments execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists or queries documents within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_ListDocuments extends Temboo_Choreography
{
    /**
     * Lists or queries documents within a collection.
     *
     * @param Temboo_Session $session The session that owns this ListDocuments Choreo.
     * @return MongoHQ_Documents_ListDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/ListDocuments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListDocuments Choreo.
     *
     * @param MongoHQ_Documents_ListDocuments_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_ListDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_ListDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_ListDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_ListDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_ListDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDocuments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_ListDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_ListDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListDocuments Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this ListDocuments Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the documents to list.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this ListDocuments Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the documents to list.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Fields input for this ListDocuments Choreo.
     *
     * @param string $value (optional, json) A JSON array of fields to return.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this ListDocuments Choreo.
     *
     * @param int $value (optional, integer) The number of documents to return. Used with the Skip parameter to paginate through a large set of results.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Query input for this ListDocuments Choreo.
     *
     * @param string $value (optional, json) A JSON string used to query documents.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Skip input for this ListDocuments Choreo.
     *
     * @param int $value (optional, integer) The number of documents to skip. Used with Limit parameter to paginate through a large set of results.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Sort input for this ListDocuments Choreo.
     *
     * @param string $value (optional, json) A JSON string describing how the results should be sorted.
     * @return MongoHQ_Documents_ListDocuments_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the ListDocuments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_ListDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDocuments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListDocuments execution.
     * @param MongoHQ_Documents_ListDocuments $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_ListDocuments_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_ListDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_ListDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_ListDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDocuments execution.
     *
     * @return MongoHQ_Documents_ListDocuments_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_ListDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_ListDocuments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListDocuments Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_ListDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListDocuments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_ListDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListDocuments execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "DocumentCount" output from this ListDocuments execution.
     *
     * @return int (integer) The total number of documents that match the query or list.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getDocumentCount()
    {
        return $this->get('DocumentCount');
    }
}

/**
 * Retrieve a list of indexes within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_ListIndexes extends Temboo_Choreography
{
    /**
     * Retrieve a list of indexes within a collection.
     *
     * @param Temboo_Session $session The session that owns this ListIndexes Choreo.
     * @return MongoHQ_Indexes_ListIndexes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Indexes/ListIndexes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListIndexes Choreo.
     *
     * @param MongoHQ_Indexes_ListIndexes_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_ListIndexes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_ListIndexes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Indexes_ListIndexes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListIndexes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_ListIndexes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Indexes_ListIndexes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_ListIndexes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListIndexes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Indexes_ListIndexes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListIndexes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Indexes_ListIndexes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Indexes_ListIndexes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListIndexes Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Indexes_ListIndexes_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this ListIndexes Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the indexes to list.
     * @return MongoHQ_Indexes_ListIndexes_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this ListIndexes Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the indexes to list.
     * @return MongoHQ_Indexes_ListIndexes_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }
}


/**
 * Execution object for the ListIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_ListIndexes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListIndexes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListIndexes execution.
     * @param MongoHQ_Indexes_ListIndexes $choreo The choreography object for this execution.
     * @param MongoHQ_Indexes_ListIndexes_Inputs|array $inputs (optional) Inputs as MongoHQ_Indexes_ListIndexes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Indexes_ListIndexes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Indexes_ListIndexes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListIndexes execution.
     *
     * @return MongoHQ_Indexes_ListIndexes_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListIndexes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Indexes_ListIndexes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Indexes_ListIndexes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListIndexes Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Indexes_ListIndexes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListIndexes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Indexes_ListIndexes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListIndexes execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists previous invoices for your MongoHQ account.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_ListInvoices extends Temboo_Choreography
{
    /**
     * Lists previous invoices for your MongoHQ account.
     *
     * @param Temboo_Session $session The session that owns this ListInvoices Choreo.
     * @return MongoHQ_Invoices_ListInvoices New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Invoices/ListInvoices/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListInvoices Choreo.
     *
     * @param MongoHQ_Invoices_ListInvoices_Inputs|array $inputs (optional) Inputs as MongoHQ_Invoices_ListInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Invoices_ListInvoices_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Invoices_ListInvoices_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListInvoices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Invoices_ListInvoices_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Invoices_ListInvoices_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListInvoices Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_ListInvoices_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListInvoices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Invoices_ListInvoices_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListInvoices input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Invoices_ListInvoices_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Invoices_ListInvoices_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this ListInvoices Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Invoices_ListInvoices_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }
}


/**
 * Execution object for the ListInvoices Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_ListInvoices_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListInvoices Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListInvoices execution.
     * @param MongoHQ_Invoices_ListInvoices $choreo The choreography object for this execution.
     * @param MongoHQ_Invoices_ListInvoices_Inputs|array $inputs (optional) Inputs as MongoHQ_Invoices_ListInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Invoices_ListInvoices_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Invoices_ListInvoices $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListInvoices execution.
     *
     * @return MongoHQ_Invoices_ListInvoices_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ListInvoices execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Invoices_ListInvoices_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Invoices_ListInvoices_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListInvoices Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Invoices_ListInvoices_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListInvoices Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Invoices_ListInvoices_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListInvoices execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Renames a collection within a specified database.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_UpdateCollection extends Temboo_Choreography
{
    /**
     * Renames a collection within a specified database.
     *
     * @param Temboo_Session $session The session that owns this UpdateCollection Choreo.
     * @return MongoHQ_Collections_UpdateCollection New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Collections/UpdateCollection/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateCollection Choreo.
     *
     * @param MongoHQ_Collections_UpdateCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_UpdateCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_UpdateCollection_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Collections_UpdateCollection_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_UpdateCollection_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Collections_UpdateCollection_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_UpdateCollection_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateCollection Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Collections_UpdateCollection_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateCollection input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIToken input for this UpdateCollection Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this UpdateCollection Choreo.
     *
     * @param string $value (required, string) The name of the collection to update.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this UpdateCollection Choreo.
     *
     * @param string $value (required, string) The name of the database to create the collection under.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the NewCollectionName input for this UpdateCollection Choreo.
     *
     * @param string $value (required, string) The new name of the collection.
     * @return MongoHQ_Collections_UpdateCollection_Inputs For method chaining.
     */
    public function setNewCollectionName($value)
    {
        return $this->set('NewCollectionName', $value);
    }
}


/**
 * Execution object for the UpdateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_UpdateCollection_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateCollection Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateCollection execution.
     * @param MongoHQ_Collections_UpdateCollection $choreo The choreography object for this execution.
     * @param MongoHQ_Collections_UpdateCollection_Inputs|array $inputs (optional) Inputs as MongoHQ_Collections_UpdateCollection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Collections_UpdateCollection_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Collections_UpdateCollection $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateCollection execution.
     *
     * @return MongoHQ_Collections_UpdateCollection_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateCollection execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Collections_UpdateCollection_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Collections_UpdateCollection_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateCollection Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Collections_UpdateCollection_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateCollection Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Collections_UpdateCollection_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateCollection execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specific document within a collection.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_UpdateDocument extends Temboo_Choreography
{
    /**
     * Updates a specific document within a collection.
     *
     * @param Temboo_Session $session The session that owns this UpdateDocument Choreo.
     * @return MongoHQ_Documents_UpdateDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MongoHQ/Documents/UpdateDocument/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateDocument Choreo.
     *
     * @param MongoHQ_Documents_UpdateDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_UpdateDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_UpdateDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MongoHQ_Documents_UpdateDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_UpdateDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MongoHQ_Documents_UpdateDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_UpdateDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MongoHQ_Documents_UpdateDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Document input for this UpdateDocument Choreo.
     *
     * @param string $value (required, json) The JSON document update command. This accepts standard MongoDB syntax such as $set or $inc.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setDocument($value)
    {
        return $this->set('Document', $value);
    }

    /**
     * Set the value for the APIToken input for this UpdateDocument Choreo.
     *
     * @param string $value (required, string) The API Token provided by MongoHQ.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setAPIToken($value)
    {
        return $this->set('APIToken', $value);
    }

    /**
     * Set the value for the CollectionName input for this UpdateDocument Choreo.
     *
     * @param string $value (required, string) The name of the collection associated with the document being updated.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setCollectionName($value)
    {
        return $this->set('CollectionName', $value);
    }

    /**
     * Set the value for the DatabaseName input for this UpdateDocument Choreo.
     *
     * @param string $value (required, string) The name of the database associated with the document being updated.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the DocumentID input for this UpdateDocument Choreo.
     *
     * @param string $value (required, string) The ID of the document being updated.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setDocumentID($value)
    {
        return $this->set('DocumentID', $value);
    }

    /**
     * Set the value for the Safe input for this UpdateDocument Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the operation will wait until the document is saved before returning. When set to false (the default) documents are saved asynchronously.
     * @return MongoHQ_Documents_UpdateDocument_Inputs For method chaining.
     */
    public function setSafe($value)
    {
        return $this->set('Safe', $value);
    }
}


/**
 * Execution object for the UpdateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_UpdateDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateDocument Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateDocument execution.
     * @param MongoHQ_Documents_UpdateDocument $choreo The choreography object for this execution.
     * @param MongoHQ_Documents_UpdateDocument_Inputs|array $inputs (optional) Inputs as MongoHQ_Documents_UpdateDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MongoHQ_Documents_UpdateDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MongoHQ_Documents_UpdateDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateDocument execution.
     *
     * @return MongoHQ_Documents_UpdateDocument_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MongoHQ_Documents_UpdateDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MongoHQ_Documents_UpdateDocument_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateDocument Choreo.
 *
 * @package Temboo
 * @subpackage MongoHQ
 */
class MongoHQ_Documents_UpdateDocument_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateDocument Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MongoHQ_Documents_UpdateDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateDocument execution.
     *
     * @return string (json) The response from MongoHQ.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>