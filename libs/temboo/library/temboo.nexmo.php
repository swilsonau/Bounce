<?php

/**
 * Temboo PHP SDK Nexmo classes
 *
 * Execute Choreographies from the Temboo Nexmo bundle.
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
 * @subpackage Nexmo
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Purchase the specified inbound number.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_BuyNumber extends Temboo_Choreography
{
    /**
     * Purchase the specified inbound number.
     *
     * @param Temboo_Session $session The session that owns this BuyNumber Choreo.
     * @return Nexmo_Account_BuyNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/BuyNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BuyNumber Choreo.
     *
     * @param Nexmo_Account_BuyNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_BuyNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_BuyNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_BuyNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BuyNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_BuyNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_BuyNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BuyNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_BuyNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BuyNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_BuyNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BuyNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this BuyNumber Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this BuyNumber Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Country input for this BuyNumber Choreo.
     *
     * @param string $value (required, string) Country code. (e.g.: ES)
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Number input for this BuyNumber Choreo.
     *
     * @param string $value (required, string) An available inbound (MSISDN) number  (e.g. 34911067000).
     * @return Nexmo_Account_BuyNumber_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }
}


/**
 * Execution object for the BuyNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_BuyNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BuyNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this BuyNumber execution.
     * @param Nexmo_Account_BuyNumber $choreo The choreography object for this execution.
     * @param Nexmo_Account_BuyNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_BuyNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_BuyNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_BuyNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BuyNumber execution.
     *
     * @return Nexmo_Account_BuyNumber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this BuyNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_BuyNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_BuyNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BuyNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_BuyNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BuyNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_BuyNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BuyNumber execution.
     *
     * @return string The response from Nexmo. For a successful request, an empty response body is returned.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this BuyNumber execution.
     *
     * @return int (integer) The response status code returned from Nexmo. A 200 is returned for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Cancels the specified inbound number subscription.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_CancelNumber extends Temboo_Choreography
{
    /**
     * Cancels the specified inbound number subscription.
     *
     * @param Temboo_Session $session The session that owns this CancelNumber Choreo.
     * @return Nexmo_Account_CancelNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/CancelNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CancelNumber Choreo.
     *
     * @param Nexmo_Account_CancelNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_CancelNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_CancelNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_CancelNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CancelNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_CancelNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_CancelNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CancelNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_CancelNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CancelNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_CancelNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CancelNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CancelNumber Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this CancelNumber Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Country input for this CancelNumber Choreo.
     *
     * @param string $value (required, string) 2-digit country code. (e.g.: CA)
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Number input for this CancelNumber Choreo.
     *
     * @param string $value (required, string) Your inbound (MSISDN) number (e.g. 34911067000).
     * @return Nexmo_Account_CancelNumber_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }
}


/**
 * Execution object for the CancelNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_CancelNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CancelNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this CancelNumber execution.
     * @param Nexmo_Account_CancelNumber $choreo The choreography object for this execution.
     * @param Nexmo_Account_CancelNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_CancelNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_CancelNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_CancelNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CancelNumber execution.
     *
     * @return Nexmo_Account_CancelNumber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CancelNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_CancelNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_CancelNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CancelNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_CancelNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CancelNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_CancelNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CancelNumber execution.
     *
     * @return string The response from Nexmo. For a successful request, an empty response body is returned.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this CancelNumber execution.
     *
     * @return int (integer) The response status code returned from Nexmo. A 200 is returned for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Sends a Text-to-Speech message to the specifed Number and captures keypad entries from the receiver.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_CaptureTextToSpeechPrompt extends Temboo_Choreography
{
    /**
     * Sends a Text-to-Speech message to the specifed Number and captures keypad entries from the receiver.
     *
     * @param Temboo_Session $session The session that owns this CaptureTextToSpeechPrompt Choreo.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Voice/CaptureTextToSpeechPrompt/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Voice_CaptureTextToSpeechPrompt_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CaptureTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CaptureTextToSpeechPrompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CaptureTextToSpeechPrompt input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ByeText input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Body of the text message played after digits are entered.  (with a maximum length of 500 characters).
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setByeText($value)
    {
        return $this->set('ByeText', $value);
    }

    /**
     * Set the value for the CallbackURL input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (conditional, string) A CallbackURL that Nexmo will request when the call ends to notify your application.  If left empty, the Choreo will handle the callback for you and return the results in CallbackData.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the DropIfMachine input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to drop the call if a machine is detected.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setDropIfMachine($value)
    {
        return $this->set('DropIfMachine', $value);
    }

    /**
     * Set the value for the Language input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The language used to play back your message.  The default is "en-us" which corresponds to United States english.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MaxDigits input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param int $value (required, integer) Number of digits entered by the end user.  (Valid values are 1-9).
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setMaxDigits($value)
    {
        return $this->set('MaxDigits', $value);
    }

    /**
     * Set the value for the Repeat input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param int $value (optional, integer) Define how many times you want to repeat the text message (default is 1 , maximum is 10).
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setRepeat($value)
    {
        return $this->set('Repeat', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (conditional, string) Body of the text message. (with a maximum length of 1000 characters).
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Phone number in international format and one recipient per request. (e.g. 447525856424 when sending to UK)
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Voice input for this CaptureTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The voice to be used female (default) or male
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setVoice($value)
    {
        return $this->set('Voice', $value);
    }
}


/**
 * Execution object for the CaptureTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_CaptureTextToSpeechPrompt_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CaptureTextToSpeechPrompt Choreo.
     *
     * @param Temboo_Session $session The session that owns this CaptureTextToSpeechPrompt execution.
     * @param Nexmo_Voice_CaptureTextToSpeechPrompt $choreo The choreography object for this execution.
     * @param Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_CaptureTextToSpeechPrompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Voice_CaptureTextToSpeechPrompt $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CaptureTextToSpeechPrompt execution.
     *
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CaptureTextToSpeechPrompt execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Voice_CaptureTextToSpeechPrompt_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CaptureTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_CaptureTextToSpeechPrompt_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CaptureTextToSpeechPrompt Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Voice_CaptureTextToSpeechPrompt_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CaptureTextToSpeechPrompt execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "CallbackData" output from this CaptureTextToSpeechPrompt execution.
     *
     * @return string The Nexmo callback data retrieved after a user has entered a pin code. Note that this will only be returned when the CallbackURL input  is not provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackData()
    {
        return $this->get('CallbackData');
    }
}

/**
 * Sends a Text-to-Speech message to the specifed Number and confirms the specifed pin-code.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_ConfirmTextToSpeechPrompt extends Temboo_Choreography
{
    /**
     * Sends a Text-to-Speech message to the specifed Number and confirms the specifed pin-code.
     *
     * @param Temboo_Session $session The session that owns this ConfirmTextToSpeechPrompt Choreo.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Voice/ConfirmTextToSpeechPrompt/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Voice_ConfirmTextToSpeechPrompt_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConfirmTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ConfirmTextToSpeechPrompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConfirmTextToSpeechPrompt input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ByeText input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Body of the text message played after digits are entered. (with a maximum length of 500 characters),
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setByeText($value)
    {
        return $this->set('ByeText', $value);
    }

    /**
     * Set the value for the CallbackURL input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) A URL that Nexmo will request when the call ends to notify your application.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the DropIfMachine input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to drop the call if a machine is detected.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setDropIfMachine($value)
    {
        return $this->set('DropIfMachine', $value);
    }

    /**
     * Set the value for the FailedText input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Body of the text message played after 3 failed attempts. (with a maximum length of 500 characters),
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setFailedText($value)
    {
        return $this->set('FailedText', $value);
    }

    /**
     * Set the value for the Language input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The language used to play back your message.  The default is "en-us" which corresponds to United States english.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MaxDigits input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param int $value (required, integer) Number of digits entered by the end user.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setMaxDigits($value)
    {
        return $this->set('MaxDigits', $value);
    }

    /**
     * Set the value for the PinCode input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Pin-code to be entered by end user (Pin-code length should be equals to MaxDigits).
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setPinCode($value)
    {
        return $this->set('PinCode', $value);
    }

    /**
     * Set the value for the Repeat input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param int $value (optional, integer) Define how many times you want to repeat the text message (default is 1 , maximum is 10).
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setRepeat($value)
    {
        return $this->set('Repeat', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (conditional, string) Body of the text message (with a maximum length of 1000 characters).
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (required, string) Phone number in international format and one recipient per request. (e.g. 447525856424 when sending to UK)
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Voice input for this ConfirmTextToSpeechPrompt Choreo.
     *
     * @param string $value (optional, string) The voice to be used female (default) or male.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs For method chaining.
     */
    public function setVoice($value)
    {
        return $this->set('Voice', $value);
    }
}


/**
 * Execution object for the ConfirmTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_ConfirmTextToSpeechPrompt_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConfirmTextToSpeechPrompt Choreo.
     *
     * @param Temboo_Session $session The session that owns this ConfirmTextToSpeechPrompt execution.
     * @param Nexmo_Voice_ConfirmTextToSpeechPrompt $choreo The choreography object for this execution.
     * @param Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_ConfirmTextToSpeechPrompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Voice_ConfirmTextToSpeechPrompt $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConfirmTextToSpeechPrompt execution.
     *
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ConfirmTextToSpeechPrompt execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Voice_ConfirmTextToSpeechPrompt_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ConfirmTextToSpeechPrompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_ConfirmTextToSpeechPrompt_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ConfirmTextToSpeechPrompt Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Voice_ConfirmTextToSpeechPrompt_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ConfirmTextToSpeechPrompt execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve your current account balance.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetBalance extends Temboo_Choreography
{
    /**
     * Retrieve your current account balance.
     *
     * @param Temboo_Session $session The session that owns this GetBalance Choreo.
     * @return Nexmo_Account_GetBalance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/GetBalance/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBalance Choreo.
     *
     * @param Nexmo_Account_GetBalance_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetBalance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_GetBalance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetBalance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_GetBalance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetBalance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetBalance_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBalance input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_GetBalance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_GetBalance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBalance Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_GetBalance_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetBalance Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_GetBalance_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBalance Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_GetBalance_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetBalance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBalance Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBalance execution.
     * @param Nexmo_Account_GetBalance $choreo The choreography object for this execution.
     * @param Nexmo_Account_GetBalance_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetBalance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_GetBalance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBalance execution.
     *
     * @return Nexmo_Account_GetBalance_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetBalance execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_GetBalance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_GetBalance_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetBalance_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBalance Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_GetBalance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBalance execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get all inbound numbers associated with your Nexmo account.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetNumbers extends Temboo_Choreography
{
    /**
     * Get all inbound numbers associated with your Nexmo account.
     *
     * @param Temboo_Session $session The session that owns this GetNumbers Choreo.
     * @return Nexmo_Account_GetNumbers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/GetNumbers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNumbers Choreo.
     *
     * @param Nexmo_Account_GetNumbers_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetNumbers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_GetNumbers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetNumbers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_GetNumbers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetNumbers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetNumbers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNumbers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNumbers Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetNumbers Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Index input for this GetNumbers Choreo.
     *
     * @param int $value (optional, integer) Page index.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Pattern input for this GetNumbers Choreo.
     *
     * @param string $value (optional, string) Pattern to match.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setPattern($value)
    {
        return $this->set('Pattern', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNumbers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Size input for this GetNumbers Choreo.
     *
     * @param int $value (optional, integer) Page size.
     * @return Nexmo_Account_GetNumbers_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the GetNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetNumbers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNumbers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNumbers execution.
     * @param Nexmo_Account_GetNumbers $choreo The choreography object for this execution.
     * @param Nexmo_Account_GetNumbers_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetNumbers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_GetNumbers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNumbers execution.
     *
     * @return Nexmo_Account_GetNumbers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetNumbers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_GetNumbers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_GetNumbers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetNumbers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNumbers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_GetNumbers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNumbers execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve Nexmo's outbound pricing for the specified country.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByCountry extends Temboo_Choreography
{
    /**
     * Retrieve Nexmo's outbound pricing for the specified country.
     *
     * @param Temboo_Session $session The session that owns this GetPricingByCountry Choreo.
     * @return Nexmo_Account_GetPricingByCountry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/GetPricingByCountry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPricingByCountry Choreo.
     *
     * @param Nexmo_Account_GetPricingByCountry_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetPricingByCountry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetPricingByCountry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_GetPricingByCountry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPricingByCountry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetPricingByCountry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_GetPricingByCountry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPricingByCountry Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByCountry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPricingByCountry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetPricingByCountry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPricingByCountry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPricingByCountry Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetPricingByCountry Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Country input for this GetPricingByCountry Choreo.
     *
     * @param string $value (required, string) A 2 letter country code.  (e.g. CA)
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPricingByCountry Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_GetPricingByCountry_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetPricingByCountry Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByCountry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPricingByCountry Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPricingByCountry execution.
     * @param Nexmo_Account_GetPricingByCountry $choreo The choreography object for this execution.
     * @param Nexmo_Account_GetPricingByCountry_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetPricingByCountry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetPricingByCountry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_GetPricingByCountry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPricingByCountry execution.
     *
     * @return Nexmo_Account_GetPricingByCountry_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetPricingByCountry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_GetPricingByCountry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_GetPricingByCountry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPricingByCountry Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByCountry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPricingByCountry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_GetPricingByCountry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPricingByCountry execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve Nexmo's outbound pricing for the specified international prefix.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByPrefix extends Temboo_Choreography
{
    /**
     * Retrieve Nexmo's outbound pricing for the specified international prefix.
     *
     * @param Temboo_Session $session The session that owns this GetPricingByPrefix Choreo.
     * @return Nexmo_Account_GetPricingByPrefix New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/GetPricingByPrefix/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPricingByPrefix Choreo.
     *
     * @param Nexmo_Account_GetPricingByPrefix_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetPricingByPrefix_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetPricingByPrefix_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_GetPricingByPrefix_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPricingByPrefix Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_GetPricingByPrefix_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPricingByPrefix Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByPrefix_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPricingByPrefix Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPricingByPrefix input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPricingByPrefix Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetPricingByPrefix Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Prefix input for this GetPricingByPrefix Choreo.
     *
     * @param int $value (required, integer) International dialing code. (e.g. 44)
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function setPrefix($value)
    {
        return $this->set('Prefix', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPricingByPrefix Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_GetPricingByPrefix_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetPricingByPrefix Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByPrefix_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPricingByPrefix Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPricingByPrefix execution.
     * @param Nexmo_Account_GetPricingByPrefix $choreo The choreography object for this execution.
     * @param Nexmo_Account_GetPricingByPrefix_Inputs|array $inputs (optional) Inputs as Nexmo_Account_GetPricingByPrefix_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_GetPricingByPrefix_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_GetPricingByPrefix $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPricingByPrefix execution.
     *
     * @return Nexmo_Account_GetPricingByPrefix_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetPricingByPrefix execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_GetPricingByPrefix_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_GetPricingByPrefix_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPricingByPrefix Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_GetPricingByPrefix_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPricingByPrefix Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_GetPricingByPrefix_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPricingByPrefix execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends a text message to the specified number using USSD protocol.  You can then listen to inbound messages.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Prompt extends Temboo_Choreography
{
    /**
     * Sends a text message to the specified number using USSD protocol.  You can then listen to inbound messages.
     *
     * @param Temboo_Session $session The session that owns this Prompt Choreo.
     * @return Nexmo_USSD_Prompt New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/USSD/Prompt/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Prompt Choreo.
     *
     * @param Nexmo_USSD_Prompt_Inputs|array $inputs (optional) Inputs as Nexmo_USSD_Prompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_USSD_Prompt_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_USSD_Prompt_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Prompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_USSD_Prompt_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_USSD_Prompt_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Prompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Prompt_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Prompt Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_USSD_Prompt_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Prompt input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Prompt Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Prompt Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ClientReference input for this Prompt Choreo.
     *
     * @param string $value (optional, string) Include a note for your reference. (40 characters max).
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setClientReference($value)
    {
        return $this->set('ClientReference', $value);
    }

    /**
     * Set the value for the DeliveryReceipt input for this Prompt Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to receive a Delivery Receipt for this message. Make sure to configure your "Callback URL" in your "API Settings".
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setDeliveryReceipt($value)
    {
        return $this->set('DeliveryReceipt', $value);
    }

    /**
     * Set the value for the From input for this Prompt Choreo.
     *
     * @param string $value (required, string) Sender address could be alphanumeric (e.g. MyCompany20). Restrictions may apply depending on the destination.
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the NetworkCode input for this Prompt Choreo.
     *
     * @param string $value (optional, string) Sends this message to the specifed network operator (MCCMNC).
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setNetworkCode($value)
    {
        return $this->set('NetworkCode', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Prompt Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this Prompt Choreo.
     *
     * @param string $value (conditional, string) Required when Type is "text".  Body of the text message (with a maximum length of 3200 characters)
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this Prompt Choreo.
     *
     * @param string $value (required, string) Mobile number in international format, and one recipient per request. (e.g. 447525856424 or 00447525856424 when sending to UK)
     * @return Nexmo_USSD_Prompt_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the Prompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Prompt_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Prompt Choreo.
     *
     * @param Temboo_Session $session The session that owns this Prompt execution.
     * @param Nexmo_USSD_Prompt $choreo The choreography object for this execution.
     * @param Nexmo_USSD_Prompt_Inputs|array $inputs (optional) Inputs as Nexmo_USSD_Prompt_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_USSD_Prompt_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_USSD_Prompt $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Prompt execution.
     *
     * @return Nexmo_USSD_Prompt_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Prompt execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_USSD_Prompt_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_USSD_Prompt_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Prompt Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Prompt_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Prompt Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_USSD_Prompt_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Prompt execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends a text message to the specified number using USSD protocol. 
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Push extends Temboo_Choreography
{
    /**
     * Sends a text message to the specified number using USSD protocol. 
     *
     * @param Temboo_Session $session The session that owns this Push Choreo.
     * @return Nexmo_USSD_Push New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/USSD/Push/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Push Choreo.
     *
     * @param Nexmo_USSD_Push_Inputs|array $inputs (optional) Inputs as Nexmo_USSD_Push_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_USSD_Push_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_USSD_Push_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Push Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_USSD_Push_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_USSD_Push_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Push Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Push_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Push Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_USSD_Push_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Push input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Push Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Push Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ClientReference input for this Push Choreo.
     *
     * @param string $value (optional, string) Include a note for your reference. (40 characters max).
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setClientReference($value)
    {
        return $this->set('ClientReference', $value);
    }

    /**
     * Set the value for the DeliveryReceipt input for this Push Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to receive a Delivery Receipt for this message. Make sure to configure your "Callback URL" in your "API Settings".
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setDeliveryReceipt($value)
    {
        return $this->set('DeliveryReceipt', $value);
    }

    /**
     * Set the value for the From input for this Push Choreo.
     *
     * @param string $value (required, string) Sender address could be alphanumeric (e.g. MyCompany20). Restrictions may apply depending on the destination.
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the NetworkCode input for this Push Choreo.
     *
     * @param string $value (optional, string) Sends this message to the specifed network operator (MCCMNC).
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setNetworkCode($value)
    {
        return $this->set('NetworkCode', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Push Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this Push Choreo.
     *
     * @param string $value (conditional, string) Required when Type is "text".  Body of the text message. (with a maximum length of 3200 characters).
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this Push Choreo.
     *
     * @param string $value (required, string) Mobile number in international format, and one recipient per request. (e.g. 447525856424 or 00447525856424 when sending to UK.)
     * @return Nexmo_USSD_Push_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the Push Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Push_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Push Choreo.
     *
     * @param Temboo_Session $session The session that owns this Push execution.
     * @param Nexmo_USSD_Push $choreo The choreography object for this execution.
     * @param Nexmo_USSD_Push_Inputs|array $inputs (optional) Inputs as Nexmo_USSD_Push_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_USSD_Push_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_USSD_Push $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Push execution.
     *
     * @return Nexmo_USSD_Push_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Push execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_USSD_Push_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_USSD_Push_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Push Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_USSD_Push_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Push Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_USSD_Push_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Push execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a previously sent message by Message ID.  Note that a sent message won't be immediately available for search.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessage extends Temboo_Choreography
{
    /**
     * Search for a previously sent message by Message ID.  Note that a sent message won't be immediately available for search.
     *
     * @param Temboo_Session $session The session that owns this SearchMessage Choreo.
     * @return Nexmo_Search_SearchMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Search/SearchMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchMessage Choreo.
     *
     * @param Nexmo_Search_SearchMessage_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Search_SearchMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Search_SearchMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchMessage Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SearchMessage Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the MessageID input for this SearchMessage Choreo.
     *
     * @param string $value (required, string) Your Message ID.
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function setMessageID($value)
    {
        return $this->set('MessageID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchMessage Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Search_SearchMessage_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchMessage execution.
     * @param Nexmo_Search_SearchMessage $choreo The choreography object for this execution.
     * @param Nexmo_Search_SearchMessage_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Search_SearchMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchMessage execution.
     *
     * @return Nexmo_Search_SearchMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SearchMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Search_SearchMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Search_SearchMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Search_SearchMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchMessage execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for previously sent messages by Message IDs.  Note that  sent messages won't be immediately available for search.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessages extends Temboo_Choreography
{
    /**
     * Search for previously sent messages by Message IDs.  Note that  sent messages won't be immediately available for search.
     *
     * @param Temboo_Session $session The session that owns this SearchMessages Choreo.
     * @return Nexmo_Search_SearchMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Search/SearchMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchMessages Choreo.
     *
     * @param Nexmo_Search_SearchMessages_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Search_SearchMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Search_SearchMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchMessages Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SearchMessages Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the MessageIDs input for this SearchMessages Choreo.
     *
     * @param string $value (required, string) Comma-separated list of up to 10 MessageIDs
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function setMessageIDs($value)
    {
        return $this->set('MessageIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchMessages Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Search_SearchMessages_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchMessages execution.
     * @param Nexmo_Search_SearchMessages $choreo The choreography object for this execution.
     * @param Nexmo_Search_SearchMessages_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Search_SearchMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchMessages execution.
     *
     * @return Nexmo_Search_SearchMessages_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SearchMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Search_SearchMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Search_SearchMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Search_SearchMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchMessages execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches sent messages by Date and Recipient. Note that a sent message won't be immediately available for searching.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessagesByRecipientAndDate extends Temboo_Choreography
{
    /**
     * Searches sent messages by Date and Recipient. Note that a sent message won't be immediately available for searching.
     *
     * @param Temboo_Session $session The session that owns this SearchMessagesByRecipientAndDate Choreo.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Search/SearchMessagesByRecipientAndDate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Search_SearchMessagesByRecipientAndDate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchMessagesByRecipientAndDate Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchMessagesByRecipientAndDate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchMessagesByRecipientAndDate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Date input for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param string $value (required, string) Date message was sent in the form of YYYY-MM-DD (UTC). (e.g. 2013-07-01)
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this SearchMessagesByRecipientAndDate Choreo.
     *
     * @param string $value (required, string) The recipient's phone number.  (e.g. 123456780)
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the SearchMessagesByRecipientAndDate Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessagesByRecipientAndDate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchMessagesByRecipientAndDate Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchMessagesByRecipientAndDate execution.
     * @param Nexmo_Search_SearchMessagesByRecipientAndDate $choreo The choreography object for this execution.
     * @param Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchMessagesByRecipientAndDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Search_SearchMessagesByRecipientAndDate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchMessagesByRecipientAndDate execution.
     *
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SearchMessagesByRecipientAndDate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Search_SearchMessagesByRecipientAndDate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchMessagesByRecipientAndDate Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchMessagesByRecipientAndDate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchMessagesByRecipientAndDate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Search_SearchMessagesByRecipientAndDate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchMessagesByRecipientAndDate execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.  Note that if no matches are found for the specified Date and To, the Response will contain an error-code "-2".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get available inbound numbers for a given country.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchNumbers extends Temboo_Choreography
{
    /**
     * Get available inbound numbers for a given country.
     *
     * @param Temboo_Session $session The session that owns this SearchNumbers Choreo.
     * @return Nexmo_Search_SearchNumbers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Search/SearchNumbers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchNumbers Choreo.
     *
     * @param Nexmo_Search_SearchNumbers_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchNumbers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Search_SearchNumbers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchNumbers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Search_SearchNumbers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchNumbers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchNumbers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchNumbers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchNumbers Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SearchNumbers Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Country input for this SearchNumbers Choreo.
     *
     * @param string $value (required, string) 2-digit country code. (e.g. CA)
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Index input for this SearchNumbers Choreo.
     *
     * @param int $value (optional, integer) Page index
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Pattern input for this SearchNumbers Choreo.
     *
     * @param string $value (optional, string) Pattern to match.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setPattern($value)
    {
        return $this->set('Pattern', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchNumbers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Size input for this SearchNumbers Choreo.
     *
     * @param int $value (optional, integer) Page size.
     * @return Nexmo_Search_SearchNumbers_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the SearchNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchNumbers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchNumbers Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchNumbers execution.
     * @param Nexmo_Search_SearchNumbers $choreo The choreography object for this execution.
     * @param Nexmo_Search_SearchNumbers_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchNumbers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Search_SearchNumbers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchNumbers execution.
     *
     * @return Nexmo_Search_SearchNumbers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SearchNumbers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Search_SearchNumbers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Search_SearchNumbers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchNumbers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchNumbers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Search_SearchNumbers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchNumbers execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a previously sent message by Message ID.  Note that a sent message won't be immediately available for search.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchRejectedMessages extends Temboo_Choreography
{
    /**
     * Search for a previously sent message by Message ID.  Note that a sent message won't be immediately available for search.
     *
     * @param Temboo_Session $session The session that owns this SearchRejectedMessages Choreo.
     * @return Nexmo_Search_SearchRejectedMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Search/SearchRejectedMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchRejectedMessages Choreo.
     *
     * @param Nexmo_Search_SearchRejectedMessages_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchRejectedMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchRejectedMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Search_SearchRejectedMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchRejectedMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Search_SearchRejectedMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchRejectedMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchRejectedMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchRejectedMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchRejectedMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Date input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (required, string) Date message was sent in the form of YYYY-MM-DD. (e.g. 2013-07-01)
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the MessageID input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (required, string) Your Message ID.
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setMessageID($value)
    {
        return $this->set('MessageID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this SearchRejectedMessages Choreo.
     *
     * @param string $value (required, string) The recipient's phone number.  (e.g. 123456780)
     * @return Nexmo_Search_SearchRejectedMessages_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the SearchRejectedMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchRejectedMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchRejectedMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchRejectedMessages execution.
     * @param Nexmo_Search_SearchRejectedMessages $choreo The choreography object for this execution.
     * @param Nexmo_Search_SearchRejectedMessages_Inputs|array $inputs (optional) Inputs as Nexmo_Search_SearchRejectedMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Search_SearchRejectedMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Search_SearchRejectedMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchRejectedMessages execution.
     *
     * @return Nexmo_Search_SearchRejectedMessages_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SearchRejectedMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Search_SearchRejectedMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Search_SearchRejectedMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchRejectedMessages Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Search_SearchRejectedMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchRejectedMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Search_SearchRejectedMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchRejectedMessages execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Send a text message to any global number.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_SMS_SendMessage extends Temboo_Choreography
{
    /**
     * Send a text message to any global number.
     *
     * @param Temboo_Session $session The session that owns this SendMessage Choreo.
     * @return Nexmo_SMS_SendMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/SMS/SendMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendMessage Choreo.
     *
     * @param Nexmo_SMS_SendMessage_Inputs|array $inputs (optional) Inputs as Nexmo_SMS_SendMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_SMS_SendMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_SMS_SendMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_SMS_SendMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_SMS_SendMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_SMS_SendMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_SMS_SendMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SendMessage Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SendMessage Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Body input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Hex encoded binary data. (e.g. 0011223344556677).  Required when Type is binary.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the CallbackID input for this SendMessage Choreo.
     *
     * @param string $value (conditional, string) A unique identifier that is part of your Temboo callback URL registered at Nexmo. Required in order to listen for a reply. See Choreo description for details.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientReference input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Include a note for your reference. (40 characters max).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setClientReference($value)
    {
        return $this->set('ClientReference', $value);
    }

    /**
     * Set the value for the DeliveryReceipt input for this SendMessage Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to receive a Delivery Receipt for this message. Make sure to configure your "Callback URL" in your "API Settings".
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setDeliveryReceipt($value)
    {
        return $this->set('DeliveryReceipt', $value);
    }

    /**
     * Set the value for the From input for this SendMessage Choreo.
     *
     * @param string $value (required, string) Sender address may be alphanumeric (e.g. MyCompany20). Restrictions may apply, depending on the destination.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the MessageClass input for this SendMessage Choreo.
     *
     * @param int $value (optional, integer) Set to 0 for Flash SMS.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setMessageClass($value)
    {
        return $this->set('MessageClass', $value);
    }

    /**
     * Set the value for the NetworkCode input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Sends this message to the specifed network operator (MCCMNC).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setNetworkCode($value)
    {
        return $this->set('NetworkCode', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TTL input for this SendMessage Choreo.
     *
     * @param int $value (optional, integer) Message life span (Time to  live) in milliseconds.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setTTL($value)
    {
        return $this->set('TTL', $value);
    }

    /**
     * Set the value for the Text input for this SendMessage Choreo.
     *
     * @param string $value (conditional, string) Required when Type is "text".  Body of the text message (with a maximum length of 3200 characters).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the Timeout input for this SendMessage Choreo.
     *
     * @param int $value (conditional, integer) The amount of time (in minutes) to wait for a reply when a CallbackID is provided. Defaults to 10. See Choreo description for details.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }

    /**
     * Set the value for the To input for this SendMessage Choreo.
     *
     * @param string $value (required, string) Mobile number in international format, and one recipient per request. (e.g. 447525856424 or 00447525856424 when sending to UK).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Type input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) This can be omitted for text (default), but is required when sending a Binary (binary), WAP Push (wappush), Unicode message (unicode), VCal (vcal) or VCard (vcard).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the UDH input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Hex encoded User data header. (e.g. 06050415811581) (Required when Type is binary).
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setUDH($value)
    {
        return $this->set('UDH', $value);
    }

    /**
     * Set the value for the VCal input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Correctly formatted VCal text body.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setVCal($value)
    {
        return $this->set('VCal', $value);
    }

    /**
     * Set the value for the VCard input for this SendMessage Choreo.
     *
     * @param string $value (optional, string) Correctly formatted VCard text body.
     * @return Nexmo_SMS_SendMessage_Inputs For method chaining.
     */
    public function setVCard($value)
    {
        return $this->set('VCard', $value);
    }
}


/**
 * Execution object for the SendMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_SMS_SendMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendMessage execution.
     * @param Nexmo_SMS_SendMessage $choreo The choreography object for this execution.
     * @param Nexmo_SMS_SendMessage_Inputs|array $inputs (optional) Inputs as Nexmo_SMS_SendMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_SMS_SendMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_SMS_SendMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendMessage execution.
     *
     * @return Nexmo_SMS_SendMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SendMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_SMS_SendMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_SMS_SendMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendMessage Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_SMS_SendMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_SMS_SendMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SendMessage execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "CallbackData" output from this SendMessage execution.
     *
     * @return string The Nexmo callback data retrieved after a user has replied to the SMS message. This is only returned if you've setup your Temboo callback URL at Nexmo, and  have provided the CallbackID input.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackData()
    {
        return $this->get('CallbackData');
    }
}

/**
 * Sends a Text-to-Speech message to the specified number.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_TextToSpeech extends Temboo_Choreography
{
    /**
     * Sends a Text-to-Speech message to the specified number.
     *
     * @param Temboo_Session $session The session that owns this TextToSpeech Choreo.
     * @return Nexmo_Voice_TextToSpeech New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Voice/TextToSpeech/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TextToSpeech Choreo.
     *
     * @param Nexmo_Voice_TextToSpeech_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_TextToSpeech_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_TextToSpeech_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Voice_TextToSpeech_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TextToSpeech Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_TextToSpeech_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Voice_TextToSpeech_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TextToSpeech Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_TextToSpeech_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TextToSpeech Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Voice_TextToSpeech_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TextToSpeech input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TextToSpeech Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TextToSpeech Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the CallbackMethod input for this TextToSpeech Choreo.
     *
     * @param string $value (optional, string) The HTTP method for your callback. Must be GET (default) or POST.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setCallbackMethod($value)
    {
        return $this->set('CallbackMethod', $value);
    }

    /**
     * Set the value for the CallbackURL input for this TextToSpeech Choreo.
     *
     * @param string $value (optional, string) A URL that Nexmo will request when the call ends to notify your application.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the DropIfMachine input for this TextToSpeech Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to drop the call if a machine is detected.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setDropIfMachine($value)
    {
        return $this->set('DropIfMachine', $value);
    }

    /**
     * Set the value for the Language input for this TextToSpeech Choreo.
     *
     * @param string $value (optional, string) The language used to play back your message.  The default is "en-us" which corresponds to United States english.
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Repeat input for this TextToSpeech Choreo.
     *
     * @param int $value (optional, integer) Define how many times you want to repeat the text message (default is 1 , maximum is 10).
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setRepeat($value)
    {
        return $this->set('Repeat', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TextToSpeech Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this TextToSpeech Choreo.
     *
     * @param string $value (conditional, string) Body of the text message (with a maximum length of 1000 characters).
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this TextToSpeech Choreo.
     *
     * @param string $value (required, string) Phone number in international format and one recipient per request. (e.g.: 447525856424 when sending to UK)
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Voice input for this TextToSpeech Choreo.
     *
     * @param string $value (optional, string) The voice to be used female (default) or male
     * @return Nexmo_Voice_TextToSpeech_Inputs For method chaining.
     */
    public function setVoice($value)
    {
        return $this->set('Voice', $value);
    }
}


/**
 * Execution object for the TextToSpeech Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_TextToSpeech_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TextToSpeech Choreo.
     *
     * @param Temboo_Session $session The session that owns this TextToSpeech execution.
     * @param Nexmo_Voice_TextToSpeech $choreo The choreography object for this execution.
     * @param Nexmo_Voice_TextToSpeech_Inputs|array $inputs (optional) Inputs as Nexmo_Voice_TextToSpeech_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Voice_TextToSpeech_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Voice_TextToSpeech $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TextToSpeech execution.
     *
     * @return Nexmo_Voice_TextToSpeech_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TextToSpeech execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Voice_TextToSpeech_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Voice_TextToSpeech_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TextToSpeech Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Voice_TextToSpeech_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TextToSpeech Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Voice_TextToSpeech_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TextToSpeech execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to top-up your account provided that you've set up "auto-reload" in your Account Settings.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_TopUp extends Temboo_Choreography
{
    /**
     * Allows you to top-up your account provided that you've set up "auto-reload" in your Account Settings.
     *
     * @param Temboo_Session $session The session that owns this TopUp Choreo.
     * @return Nexmo_Account_TopUp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/TopUp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopUp Choreo.
     *
     * @param Nexmo_Account_TopUp_Inputs|array $inputs (optional) Inputs as Nexmo_Account_TopUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_TopUp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_TopUp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_TopUp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_TopUp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopUp Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_TopUp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_TopUp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopUp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopUp Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TopUp Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TopUp Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TransactionID input for this TopUp Choreo.
     *
     * @param string $value (required, string) The transaction id associated with your **first** 'auto reload' top-up.
     * @return Nexmo_Account_TopUp_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }
}


/**
 * Execution object for the TopUp Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_TopUp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopUp Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopUp execution.
     * @param Nexmo_Account_TopUp $choreo The choreography object for this execution.
     * @param Nexmo_Account_TopUp_Inputs|array $inputs (optional) Inputs as Nexmo_Account_TopUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_TopUp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_TopUp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopUp execution.
     *
     * @return Nexmo_Account_TopUp_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TopUp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_TopUp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_TopUp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopUp Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_TopUp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopUp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_TopUp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopUp execution.
     *
     * @return string The response from Nexmo. For a successful request, an empty response body is returned.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this TopUp execution.
     *
     * @return int (integer) The response status code returned from Nexmo. A 200 is returned for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Update your account settings.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateAccountSettings extends Temboo_Choreography
{
    /**
     * Update your account settings.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountSettings Choreo.
     * @return Nexmo_Account_UpdateAccountSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/UpdateAccountSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateAccountSettings Choreo.
     *
     * @param Nexmo_Account_UpdateAccountSettings_Inputs|array $inputs (optional) Inputs as Nexmo_Account_UpdateAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_UpdateAccountSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_UpdateAccountSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_UpdateAccountSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateAccountSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateAccountSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccountSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the DeliveryReceiptCallbackURL input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (conditional, string) Your new Delivery Receipt Callback URL.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setDeliveryReceiptCallbackURL($value)
    {
        return $this->set('DeliveryReceiptCallbackURL', $value);
    }

    /**
     * Set the value for the InboundCallbackURL input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (conditional, string) Your new Inbound Callback URL.
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setInboundCallbackURL($value)
    {
        return $this->set('InboundCallbackURL', $value);
    }

    /**
     * Set the value for the NewSecret input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) Your new API secret. (8 characters max)
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setNewSecret($value)
    {
        return $this->set('NewSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateAccountSettings Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Nexmo_Account_UpdateAccountSettings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateAccountSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccountSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountSettings execution.
     * @param Nexmo_Account_UpdateAccountSettings $choreo The choreography object for this execution.
     * @param Nexmo_Account_UpdateAccountSettings_Inputs|array $inputs (optional) Inputs as Nexmo_Account_UpdateAccountSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_UpdateAccountSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_UpdateAccountSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccountSettings execution.
     *
     * @return Nexmo_Account_UpdateAccountSettings_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateAccountSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_UpdateAccountSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_UpdateAccountSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateAccountSettings Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateAccountSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateAccountSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_UpdateAccountSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateAccountSettings execution.
     *
     * @return string The response from Nexmo. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateAccountSettings execution.
     *
     * @return int (integer) The response status code returned from Nexmo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Updates the callback details for the specified number.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateNumber extends Temboo_Choreography
{
    /**
     * Updates the callback details for the specified number.
     *
     * @param Temboo_Session $session The session that owns this UpdateNumber Choreo.
     * @return Nexmo_Account_UpdateNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Nexmo/Account/UpdateNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateNumber Choreo.
     *
     * @param Nexmo_Account_UpdateNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_UpdateNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_UpdateNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Nexmo_Account_UpdateNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_UpdateNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Nexmo_Account_UpdateNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Nexmo_Account_UpdateNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateNumber Choreo.
     *
     * @param string $value (required, string) Your API Key provided to you by Nexmo.
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this UpdateNumber Choreo.
     *
     * @param string $value (required, string) Your API Secret provided to you by Nexmo.
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the CallbackURL input for this UpdateNumber Choreo.
     *
     * @param string $value (optional, string) Mobile originated Callback URL.
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Country input for this UpdateNumber Choreo.
     *
     * @param string $value (required, string) 2-digit country code. (e.g. CA)
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Number input for this UpdateNumber Choreo.
     *
     * @param string $value (required, string) Your inbound (MSISDN) number (e.g. 34911067000).
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the SMPPSystemType input for this UpdateNumber Choreo.
     *
     * @param string $value (optional, string) The Mobile Orignated associated system type for SMPP client only. (e.g.: inbound)
     * @return Nexmo_Account_UpdateNumber_Inputs For method chaining.
     */
    public function setSMPPSystemType($value)
    {
        return $this->set('SMPPSystemType', $value);
    }
}


/**
 * Execution object for the UpdateNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateNumber execution.
     * @param Nexmo_Account_UpdateNumber $choreo The choreography object for this execution.
     * @param Nexmo_Account_UpdateNumber_Inputs|array $inputs (optional) Inputs as Nexmo_Account_UpdateNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Nexmo_Account_UpdateNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Nexmo_Account_UpdateNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateNumber execution.
     *
     * @return Nexmo_Account_UpdateNumber_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UpdateNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Nexmo_Account_UpdateNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Nexmo_Account_UpdateNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateNumber Choreo.
 *
 * @package Temboo
 * @subpackage Nexmo
 */
class Nexmo_Account_UpdateNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Nexmo_Account_UpdateNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateNumber execution.
     *
     * @return string The response from Nexmo. For a successful request, an empty response body is returned.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateNumber execution.
     *
     * @return int (integer) The response status code returned from Nexmo. A 200 is returned for a successful request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

?>