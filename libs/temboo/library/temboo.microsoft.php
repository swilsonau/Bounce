<?php

/**
 * Temboo PHP SDK Microsoft classes
 *
 * Execute Choreographies from the Temboo Microsoft bundle.
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
 * @subpackage Microsoft
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves an array of all translations for a given text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation extends Temboo_Choreography
{
    /**
     * Retrieves an array of all translations for a given text.
     *
     * @param Temboo_Session $session The session that owns this AddTranslation Choreo.
     * @return Microsoft_Translator_AddTranslation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/AddTranslation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTranslation Choreo.
     *
     * @param Microsoft_Translator_AddTranslation_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_AddTranslation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTranslation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_AddTranslation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTranslation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTranslation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this AddTranslation Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddTranslation Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" and "text/html".
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the source language. Must be one of the languages returned by the method GetLanguagesForTranslate.(e.g., en).
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the OriginalText input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the text to translate from. The string has a maximum length of 1000 characters.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setOriginalText($value)
    {
        return $this->set('OriginalText', $value);
    }

    /**
     * Set the value for the Rating input for this AddTranslation Choreo.
     *
     * @param int $value (optional, integer) An integer representing the quality rating for this string. Value between -10 and 10. Defaults to 1.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setRating($value)
    {
        return $this->set('Rating', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the lISO 639-1 language code of the target language. Must be one of the languages returned by the method GetLanguagesForTranslate (e.g., es).
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the TranslatedText input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing translated text in the target language. The string has a maximum length of 2000 characters.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setTranslatedText($value)
    {
        return $this->set('TranslatedText', $value);
    }

    /**
     * Set the value for the URI input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A string containing the content location of this translation.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string used to track the originator of the submission.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTranslation Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTranslation execution.
     * @param Microsoft_Translator_AddTranslation $choreo The choreography object for this execution.
     * @param Microsoft_Translator_AddTranslation_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_AddTranslation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTranslation execution.
     *
     * @return Microsoft_Translator_AddTranslation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddTranslation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_AddTranslation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTranslation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddTranslation execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this AddTranslation execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this AddTranslation execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Adds an array of translations to add translation memory.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray extends Temboo_Choreography
{
    /**
     * Adds an array of translations to add translation memory.
     *
     * @param Temboo_Session $session The session that owns this AddTranslationArray Choreo.
     * @return Microsoft_Translator_AddTranslationArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/AddTranslationArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTranslationArray Choreo.
     *
     * @param Microsoft_Translator_AddTranslationArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslationArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslationArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_AddTranslationArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTranslationArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslationArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_AddTranslationArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTranslationArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslationArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTranslationArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this AddTranslationArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddTranslationArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" and "text/html".
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the source language (e.g., en). Must be one of the languages returned by the method GetLanguagesForTranslate.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the target language (e.g., es). Must be one of the languages returned by the method GetLanguagesForTranslate.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Translations input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, json) An array containing translations to add to translation memory. Each translation must contain: OriginalText, TranslatedText, and Rating. See Choreo description for formatting examples.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setTranslations($value)
    {
        return $this->set('Translations', $value);
    }

    /**
     * Set the value for the URI input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A string containing the content location of this translation.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string used to track the originator of the submission.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTranslationArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTranslationArray execution.
     * @param Microsoft_Translator_AddTranslationArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_AddTranslationArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslationArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslationArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_AddTranslationArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTranslationArray execution.
     *
     * @return Microsoft_Translator_AddTranslationArray_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this AddTranslationArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslationArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_AddTranslationArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTranslationArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslationArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddTranslationArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this AddTranslationArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this AddTranslationArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Breaks a piece of text into sentences and returns an array containing the lengths in each sentence.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences extends Temboo_Choreography
{
    /**
     * Breaks a piece of text into sentences and returns an array containing the lengths in each sentence.
     *
     * @param Temboo_Session $session The session that owns this BreakSentences Choreo.
     * @return Microsoft_Translator_BreakSentences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/BreakSentences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BreakSentences Choreo.
     *
     * @param Microsoft_Translator_BreakSentences_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_BreakSentences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_BreakSentences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_BreakSentences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BreakSentences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_BreakSentences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_BreakSentences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BreakSentences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_BreakSentences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BreakSentences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this BreakSentences Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this BreakSentences Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this BreakSentences Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Language input for this BreakSentences Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of input text.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this BreakSentences Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this BreakSentences Choreo.
     *
     * @param string $value (required, string) A string representing the text to split into sentences. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BreakSentences Choreo.
     *
     * @param Temboo_Session $session The session that owns this BreakSentences execution.
     * @param Microsoft_Translator_BreakSentences $choreo The choreography object for this execution.
     * @param Microsoft_Translator_BreakSentences_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_BreakSentences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_BreakSentences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_BreakSentences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BreakSentences execution.
     *
     * @return Microsoft_Translator_BreakSentences_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this BreakSentences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_BreakSentences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_BreakSentences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BreakSentences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_BreakSentences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BreakSentences execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this BreakSentences execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this BreakSentences execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Identifies the language of a selected piece of text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect extends Temboo_Choreography
{
    /**
     * Identifies the language of a selected piece of text.
     *
     * @param Temboo_Session $session The session that owns this Detect Choreo.
     * @return Microsoft_Translator_Detect New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Detect/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Detect Choreo.
     *
     * @param Microsoft_Translator_Detect_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Detect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Detect_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Detect_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Detect Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Detect_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Detect_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Detect Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Detect_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Detect input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Detect Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Detect Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Detect Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Detect Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this Detect Choreo.
     *
     * @param string $value (required, string) A string containing some text whose language is to be identified. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Detect Choreo.
     *
     * @param Temboo_Session $session The session that owns this Detect execution.
     * @param Microsoft_Translator_Detect $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Detect_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Detect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Detect_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Detect $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Detect execution.
     *
     * @return Microsoft_Translator_Detect_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Detect execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Detect_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Detect_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Detect Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Detect_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Detect execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Detect execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Detect execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Identifies the language of an array of text strings.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray extends Temboo_Choreography
{
    /**
     * Identifies the language of an array of text strings.
     *
     * @param Temboo_Session $session The session that owns this DetectArray Choreo.
     * @return Microsoft_Translator_DetectArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/DetectArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DetectArray Choreo.
     *
     * @param Microsoft_Translator_DetectArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_DetectArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_DetectArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_DetectArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DetectArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_DetectArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_DetectArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DetectArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_DetectArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DetectArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DetectArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DetectArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DetectArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DetectArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Texts input for this DetectArray Choreo.
     *
     * @param string $value (required, json) A JSON array representing the text from an unknown language. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }
}


/**
 * Execution object for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DetectArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this DetectArray execution.
     * @param Microsoft_Translator_DetectArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_DetectArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_DetectArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_DetectArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_DetectArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DetectArray execution.
     *
     * @return Microsoft_Translator_DetectArray_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DetectArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_DetectArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_DetectArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DetectArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_DetectArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DetectArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this DetectArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DetectArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves friendly names for languages and localized using the specified locale language.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames extends Temboo_Choreography
{
    /**
     * Retrieves friendly names for languages and localized using the specified locale language.
     *
     * @param Temboo_Session $session The session that owns this GetLanguageNames Choreo.
     * @return Microsoft_Translator_GetLanguageNames New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguageNames/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguageNames Choreo.
     *
     * @param Microsoft_Translator_GetLanguageNames_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguageNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguageNames_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguageNames_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguageNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguageNames_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguageNames_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguageNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguageNames_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguageNames input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguageNames Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguageNames Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguageNames Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the LanguageCodes input for this GetLanguageNames Choreo.
     *
     * @param string $value (required, json) An array of ISO 639-1 language codes to retrieve friendly names for.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setLanguageCodes($value)
    {
        return $this->set('LanguageCodes', $value);
    }

    /**
     * Set the value for the Locale input for this GetLanguageNames Choreo.
     *
     * @param string $value (required, string) The ISO 639-1 language code associated with the language you wish to return results in.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguageNames Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguageNames Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguageNames execution.
     * @param Microsoft_Translator_GetLanguageNames $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguageNames_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguageNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguageNames_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguageNames $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguageNames execution.
     *
     * @return Microsoft_Translator_GetLanguageNames_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLanguageNames execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguageNames_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguageNames_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguageNames Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguageNames_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguageNames execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguageNames execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguageNames execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves the languages available for speech synthesis.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak extends Temboo_Choreography
{
    /**
     * Retrieves the languages available for speech synthesis.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForSpeak Choreo.
     * @return Microsoft_Translator_GetLanguagesForSpeak New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguagesForSpeak/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguagesForSpeak Choreo.
     *
     * @param Microsoft_Translator_GetLanguagesForSpeak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForSpeak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguagesForSpeak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguagesForSpeak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguagesForSpeak input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguagesForSpeak Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForSpeak execution.
     * @param Microsoft_Translator_GetLanguagesForSpeak $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguagesForSpeak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForSpeak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguagesForSpeak $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguagesForSpeak execution.
     *
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLanguagesForSpeak execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguagesForSpeak Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguagesForSpeak execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguagesForSpeak execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguagesForSpeak execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves a list of language codes representing languages that are supported by the Translation Service.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate extends Temboo_Choreography
{
    /**
     * Retrieves a list of language codes representing languages that are supported by the Translation Service.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForTranslate Choreo.
     * @return Microsoft_Translator_GetLanguagesForTranslate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguagesForTranslate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguagesForTranslate Choreo.
     *
     * @param Microsoft_Translator_GetLanguagesForTranslate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForTranslate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguagesForTranslate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguagesForTranslate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguagesForTranslate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguagesForTranslate Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForTranslate execution.
     * @param Microsoft_Translator_GetLanguagesForTranslate $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguagesForTranslate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForTranslate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguagesForTranslate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguagesForTranslate execution.
     *
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetLanguagesForTranslate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguagesForTranslate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguagesForTranslate execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguagesForTranslate execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguagesForTranslate execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves an access token that can be used to authenticate with the Microsoft Translator API.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken extends Temboo_Choreography
{
    /**
     * Retrieves an access token that can be used to authenticate with the Microsoft Translator API.
     *
     * @param Temboo_Session $session The session that owns this GetToken Choreo.
     * @return Microsoft_Translator_GetToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetToken Choreo.
     *
     * @param Microsoft_Translator_GetToken_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this GetToken Choreo.
     *
     * @param string $value (required, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetToken Choreo.
     *
     * @param string $value (required, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }
}


/**
 * Execution object for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetToken execution.
     * @param Microsoft_Translator_GetToken $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetToken_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetToken execution.
     *
     * @return Microsoft_Translator_GetToken_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this GetToken execution.
     *
     * @return string (string) The access token returned from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetToken execution.
     *
     * @return int (integer) The number of seconds for which the access token is valid.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
}

/**
 * Retrieves an array of all translations for a given text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations extends Temboo_Choreography
{
    /**
     * Retrieves an array of all translations for a given text.
     *
     * @param Temboo_Session $session The session that owns this GetTranslations Choreo.
     * @return Microsoft_Translator_GetTranslations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetTranslations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTranslations Choreo.
     *
     * @param Microsoft_Translator_GetTranslations_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetTranslations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTranslations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetTranslations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTranslations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTranslations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this GetTranslations Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetTranslations Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The only supported, and the default, option is "text/plain".
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the MaxTranslations input for this GetTranslations Choreo.
     *
     * @param int $value (required, integer) An integer representing the maximum number of translations to return.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setMaxTranslations($value)
    {
        return $this->set('MaxTranslations', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) User state to help correlate request and response. The same contents will be returned in the response.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Text input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) Filter results by this user. Default: all
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTranslations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTranslations execution.
     * @param Microsoft_Translator_GetTranslations $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetTranslations_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetTranslations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTranslations execution.
     *
     * @return Microsoft_Translator_GetTranslations_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetTranslations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetTranslations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTranslations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTranslations execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetTranslations execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetTranslations execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Retrieves multiple translation candidates for multiple source texts.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray extends Temboo_Choreography
{
    /**
     * Retrieves multiple translation candidates for multiple source texts.
     *
     * @param Temboo_Session $session The session that owns this GetTranslationsArray Choreo.
     * @return Microsoft_Translator_GetTranslationsArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetTranslationsArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTranslationsArray Choreo.
     *
     * @param Microsoft_Translator_GetTranslationsArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslationsArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslationsArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetTranslationsArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTranslationsArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetTranslationsArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTranslationsArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTranslationsArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this GetTranslationsArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetTranslationsArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The only supported, and the default, option is "text/plain".
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the MaxTranslations input for this GetTranslationsArray Choreo.
     *
     * @param int $value (required, integer) An integer representing the maximum number of translations to return.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setMaxTranslations($value)
    {
        return $this->set('MaxTranslations', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) User state to help correlate request and response. The same contents will be returned in the response.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Texts input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, json) An array containing the texts for translation. All strings must be of the same language. The total of all texts must not exceed 10000 characters. The max number of array items is 2000.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }

    /**
     * Set the value for the To input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this user. Default: all
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTranslationsArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTranslationsArray execution.
     * @param Microsoft_Translator_GetTranslationsArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetTranslationsArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslationsArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslationsArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetTranslationsArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTranslationsArray execution.
     *
     * @return Microsoft_Translator_GetTranslationsArray_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetTranslationsArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetTranslationsArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTranslationsArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTranslationsArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetTranslationsArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetTranslationsArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Returns a Base64 encoded wave or mp3 file of the passed-in text being spoken in the desired language.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak extends Temboo_Choreography
{
    /**
     * Returns a Base64 encoded wave or mp3 file of the passed-in text being spoken in the desired language.
     *
     * @param Temboo_Session $session The session that owns this Speak Choreo.
     * @return Microsoft_Translator_Speak New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Speak/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Speak Choreo.
     *
     * @param Microsoft_Translator_Speak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Speak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Speak_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Speak_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Speak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Speak_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Speak_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Speak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Speak_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Speak input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Speak Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Speak Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Speak Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Format input for this Speak Choreo.
     *
     * @param string $value (optional, string) A string specifying the content-type. Currently, "audio/wav" and "audio/mp3" are available. The default value is "audio/wav".
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Language input for this Speak Choreo.
     *
     * @param string $value (required, string) A string representing the supported ISO 639-1 language code to speak the text in (e.g., es). The code must be present in the list of codes returned from the method GetLanguagesForSpeak.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Options input for this Speak Choreo.
     *
     * @param string $value (optional, string) A string specifying the quality of the audio signals. Valid values are: MaxQuality or MinQuality (the default).
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setOptions($value)
    {
        return $this->set('Options', $value);
    }

    /**
     * Set the value for the Text input for this Speak Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Speak Choreo.
     *
     * @param Temboo_Session $session The session that owns this Speak execution.
     * @param Microsoft_Translator_Speak $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Speak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Speak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Speak_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Speak $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Speak execution.
     *
     * @return Microsoft_Translator_Speak_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Speak execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Speak_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Speak_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Speak Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Speak_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AudioFile" output from this Speak execution.
     *
     * @return string (string) The Base64 encoded audio file in mp3 or wav format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAudioFile()
    {
        return $this->get('AudioFile');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Speak execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Speak execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Translates a text string from one language to another.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate extends Temboo_Choreography
{
    /**
     * Translates a text string from one language to another.
     *
     * @param Temboo_Session $session The session that owns this Translate Choreo.
     * @return Microsoft_Translator_Translate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Translate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Translate Choreo.
     *
     * @param Microsoft_Translator_Translate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Translate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Translate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Translate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Translate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Translate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Translate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Translate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Translate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Translate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Translate Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this Translate Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this Translate Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Translate Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this Translate Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" (the default) and "text/html".
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the Text input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language codee to translate the text into (e.g., es).
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Translate Choreo.
     *
     * @param Temboo_Session $session The session that owns this Translate execution.
     * @param Microsoft_Translator_Translate $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Translate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Translate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Translate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Translate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Translate execution.
     *
     * @return Microsoft_Translator_Translate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Translate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Translate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Translate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Translate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Translate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Translate execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Translate execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "TranslatedText" output from this Translate execution.
     *
     * @return string (string) The translated text parsed from the Microsoft response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTranslatedText()
    {
        return $this->get('TranslatedText');
    }
}

/**
 * Translates multiple source texts.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray extends Temboo_Choreography
{
    /**
     * Translates multiple source texts.
     *
     * @param Temboo_Session $session The session that owns this TranslateArray Choreo.
     * @return Microsoft_Translator_TranslateArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/TranslateArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TranslateArray Choreo.
     *
     * @param Microsoft_Translator_TranslateArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_TranslateArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_TranslateArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_TranslateArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TranslateArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_TranslateArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_TranslateArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TranslateArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_TranslateArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TranslateArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this TranslateArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this TranslateArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" (the default) and "text/html".
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A string representing the language code of the translation text (e.g., en). If not provided auto-detection is used.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Texts input for this TranslateArray Choreo.
     *
     * @param string $value (required, json) An array containing the texts for translation. All strings must be of the same language. The total of all texts must not exceed 10000 characters. The max number of array items is 2000.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }

    /**
     * Set the value for the To input for this TranslateArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this TranslateArray Choreo.
     *
     * @param string $value (optional, multiline) Filter results by this user. Default: all
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TranslateArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this TranslateArray execution.
     * @param Microsoft_Translator_TranslateArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_TranslateArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_TranslateArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_TranslateArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_TranslateArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TranslateArray execution.
     *
     * @return Microsoft_Translator_TranslateArray_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TranslateArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_TranslateArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_TranslateArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TranslateArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_TranslateArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TranslateArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this TranslateArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this TranslateArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

?>