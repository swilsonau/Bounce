<?php

/**
 * Temboo PHP SDK WolframAlpha classes
 *
 * Execute Choreographies from the Temboo WolframAlpha bundle.
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
 * @subpackage WolframAlpha
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows your application to submit free-form queries similar to the queries one might enter at the Wolfram|Alpha website.
 *
 * @package Temboo
 * @subpackage WolframAlpha
 */
class WolframAlpha_Query extends Temboo_Choreography
{
    /**
     * Allows your application to submit free-form queries similar to the queries one might enter at the Wolfram|Alpha website.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return WolframAlpha_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/WolframAlpha/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param WolframAlpha_Query_Inputs|array $inputs (optional) Inputs as WolframAlpha_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return WolframAlpha_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new WolframAlpha_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return WolframAlpha_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new WolframAlpha_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage WolframAlpha
 */
class WolframAlpha_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return WolframAlpha_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this Query Choreo.
     *
     * @param string $value (required, string) The App ID provided by Wolfram|Alpha.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Assumption input for this Query Choreo.
     *
     * @param string $value (optional, string) Up to 10 comma-seperated assumptions to narrow a query.  Wolfram|Alpha provides you with a list of assumptons in the response of a previous query.  Please consult the documentation for more details.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setAssumption($value)
    {
        return $this->set('Assumption', $value);
    }

    /**
     * Set the value for the Async input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to specify that asynchronous mode should be used. This allows partial results to come back before all the pods are computed.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setAsync($value)
    {
        return $this->set('Async', $value);
    }

    /**
     * Set the value for the ExcludePodID input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies the IDs of the pod(s) to exlude from the response. All pod IDs are returned by default.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setExcludePodID($value)
    {
        return $this->set('ExcludePodID', $value);
    }

    /**
     * Set the value for the FormatTimeout input for this Query Choreo.
     *
     * @param float $value (optional, decimal) The number of seconds to allow Wolfram Alpha to spend in the "format" stage for the entire collection of pods. Default value is 8.0.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setFormatTimeout($value)
    {
        return $this->set('FormatTimeout', $value);
    }

    /**
     * Set the value for the Format input for this Query Choreo.
     *
     * @param string $value (optional, string) The desired result formats separated by commas. Valid values are image, plaintext, minput, moutput, cell, mathml, imagemap, sound, wav. Defaults to "plaintext,image".
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the IgnoreCase input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) Whether to force Wolfram Alpha to ignore case in queries. Defaults to false.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setIgnoreCase($value)
    {
        return $this->set('IgnoreCase', $value);
    }

    /**
     * Set the value for the IncludePodID input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies the IDs of the pod(s) to include in the response. All pod IDs are returned by default.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setIncludePodID($value)
    {
        return $this->set('IncludePodID', $value);
    }

    /**
     * Set the value for the Input input for this Query Choreo.
     *
     * @param string $value (required, string) Specifies the input string (e.g., "5 largest countries").
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setInput($value)
    {
        return $this->set('Input', $value);
    }

    /**
     * Set the value for the Latitude input for this Query Choreo.
     *
     * @param float $value (optional, decimal) When query results depend on your location, use this parameter to specify a latitude point.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Location input for this Query Choreo.
     *
     * @param string $value (optional, string) When query results depend on your location, use this parameter to specify a location such as "Los Angeles, CA", or "Madrid".
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the Longitude input for this Query Choreo.
     *
     * @param float $value (optional, decimal) When query results depend on your location, use this parameter to specify a longitude point.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Magnification input for this Query Choreo.
     *
     * @param float $value (optional, decimal) Controls the magnification of pod images. The default value is 1.0, indicating no magnification.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setMagnification($value)
    {
        return $this->set('Magnification', $value);
    }

    /**
     * Set the value for the MaxWidth input for this Query Choreo.
     *
     * @param int $value (optional, integer) Used to change the default width of pod images. Width and MaxWidth apply to images of text and tables. This can be used to avoid undesirable line breaks if the value of Width is too small.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setMaxWidth($value)
    {
        return $this->set('MaxWidth', $value);
    }

    /**
     * Set the value for the ParseTimeout input for this Query Choreo.
     *
     * @param float $value (optional, decimal) The number of seconds to allow Wolfram Alpha to spend in the "parsing" stage of processing. Default value is 5.0.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setParseTimeout($value)
    {
        return $this->set('ParseTimeout', $value);
    }

    /**
     * Set the value for the PlotWidth input for this Query Choreo.
     *
     * @param int $value (optional, integer) Controls the width at which plots and graphics are rendered. The default value is 200 pixels.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setPlotWidth($value)
    {
        return $this->set('PlotWidth', $value);
    }

    /**
     * Set the value for the PodIndex input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies the index of the pod(s) to return. This is an alternative to specifying pods by title or ID. You can give a single number or a sequence like "2,3,5".
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setPodIndex($value)
    {
        return $this->set('PodIndex', $value);
    }

    /**
     * Set the value for the PodState input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies a pod state change, which replaces a pod with a modified version, such as a switch from Imperial to metric units.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setPodState($value)
    {
        return $this->set('PodState', $value);
    }

    /**
     * Set the value for the PodTimeout input for this Query Choreo.
     *
     * @param float $value (optional, decimal) The number of seconds to allow Wolfram Alpha to spend in the "format" stage for any one pod. Default value is 4.0.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setPodTimeout($value)
    {
        return $this->set('PodTimeout', $value);
    }

    /**
     * Set the value for the PodTitle input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies the titles of the pod(s) to include in the response. All pod titles are returned by default. You can use * as a wildcard to match zero or more characters in pod titles.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setPodTitle($value)
    {
        return $this->set('PodTitle', $value);
    }

    /**
     * Set the value for the Reinterpret input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) Whether to allow Wolfram Alpha to reinterpret queries that would otherwise not be understood. Defaults to false.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setReinterpret($value)
    {
        return $this->set('Reinterpret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Query Choreo.
     *
     * @param string $value (optional, string) The format for the response. Valid values are JSON and XML. This will be ignored when providng an XPath query because results are returned as a string or JSON depending on the Mode specified.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ScanTimeout input for this Query Choreo.
     *
     * @param float $value (optional, decimal) The number of seconds to allow Wolfram Alpha to compute results in the "scan" stage of processing. Default value is 3.0.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setScanTimeout($value)
    {
        return $this->set('ScanTimeout', $value);
    }

    /**
     * Set the value for the Scanner input for this Query Choreo.
     *
     * @param string $value (optional, string) Specifies that only pods produced by the given scanner should be returned. (e.g. Numeric, Music).  Defaults to all pods.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setScanner($value)
    {
        return $this->set('Scanner', $value);
    }

    /**
     * Set the value for the Translation input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) Whether to allow Wolfram Alpha to try to translate simple queries into English. Defaults to true.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setTranslation($value)
    {
        return $this->set('Translation', $value);
    }

    /**
     * Set the value for the Units input for this Query Choreo.
     *
     * @param string $value (optional, string) Lets you specify the preferred measurement system, either "metric" or "nonmetric" (U.S. customary units).
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }

    /**
     * Set the value for the Width input for this Query Choreo.
     *
     * @param int $value (optional, integer) Used to change the default width of pod images. The default is 500 pixels. Width and MaxWidth apply to images of text and tables.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setWidth($value)
    {
        return $this->set('Width', $value);
    }

    /**
     * Set the value for the XPathMode input for this Query Choreo.
     *
     * @param string $value (optional, string) Valid values are "select" (the default) or "recursive". Recursive mode will iterate using the provided XPath. Select mode will return the first match at the position indicated by the provided XPath.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setXPathMode($value)
    {
        return $this->set('XPathMode', $value);
    }

    /**
     * Set the value for the XPathRegex input for this Query Choreo.
     *
     * @param string $value (optional, string) A regular expression that can be applied to the result of the XPath query provided.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setXPathRegex($value)
    {
        return $this->set('XPathRegex', $value);
    }

    /**
     * Set the value for the XPath input for this Query Choreo.
     *
     * @param string $value (optional, string) An XPath query to apply to the API results.
     * @return WolframAlpha_Query_Inputs For method chaining.
     */
    public function setXPath($value)
    {
        return $this->set('XPath', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage WolframAlpha
 */
class WolframAlpha_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param WolframAlpha_Query $choreo The choreography object for this execution.
     * @param WolframAlpha_Query_Inputs|array $inputs (optional) Inputs as WolframAlpha_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return WolframAlpha_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, WolframAlpha_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return WolframAlpha_Query_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return WolframAlpha_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new WolframAlpha_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage WolframAlpha
 */
class WolframAlpha_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return WolframAlpha_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string The response from Wolfram Alpha.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>