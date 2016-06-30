<?php
namespace SSystemMessage;


interface SystemMessageInterface
{

    /**
     * Get system message instance
     *
     * @return $this
     */
    static public function i();

    /**
     * Add danger message
     *
     * @param string $text
     * @return $this
     */
    public function addDanger($text);

    /**
     * Add information message
     *
     * @param string $text
     * @return $this
     */
    public function addInfo($text);

    /**
     * Add success message
     *
     * @param string $text
     * @return $this
     */
    public function addSuccess($text);

    /**
     * Add warning message
     *
     * @param string $text
     * @return $this
     */
    public function addWarning($text);

    /**
     * Clear all messages
     *
     * @return $this
     */
    public function clear();

    /**
     * Clear danger messages
     *
     * @return $this
     */
    public function clearDanger();

    /**
     * Clear information messages
     *
     * @return $this
     */
    public function clearInfo();

    /**
     * Clear danger and warning messages
     *
     * @return $this
     */
    public function clearProblems();

    /**
     * Clear success messages
     *
     * @return $this
     */
    public function clearSuccess();

    /**
     * Clear warning messages
     *
     * @return $this
     */
    public function clearWarning();

    /**
     * Check exists danger messages
     *
     * @return bool
     */
    public function hasDanger();

    /**
     * Check exists information messages
     *
     * @return bool
     */
    public function hasInfo();

    /**
     * Check exists success messages
     *
     * @return bool
     */
    public function hasSuccess();

    /**
     * Check exists warning messages
     *
     * @return bool
     */
    public function hasWarning();

    /**
     * Check exists danger or warning messages
     *
     * @return bool
     */
    public function hasProblems();

    /**
     * Get danger messages
     *
     * @return string[]
     */
    public function getDanger();

    /**
     * Get information messages
     *
     * @return string[]
     */
    public function getInfo();

    /**
     * Get success messages
     *
     * @return string[]
     */
    public function getSuccess();

    /**
     * Get warning messages
     *
     * @return string[]
     */
    public function getWarning();

    /**
     * Print all collected messages
     *
     * @return $this
     */
    public function printAll();

    /**
     * Print all danger messages
     *
     * @return $this
     */
    public function printDanger();

    /**
     * Print all information messages
     *
     * @return $this
     */
    public function printInfo();

    /**
     * Print all danger and warning messages
     *
     * @return $this
     */
    public function printProblems();

    /**
     * Print all success messages
     *
     * @return $this
     */
    public function printSuccess();

    /**
     * Print all warning messages
     *
     * @return $this
     */
    public function printWarning();

    /**
     * Set danger messages
     *
     * @param String[] $messages
     * @return $this
     */
    public function setDanger(array $messages = []);

    /**
     * Set information messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setInfo(array $messages = []);

    /**
     * Set success messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setSuccess(array $messages = []);

    /**
     * Set warning messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setWarning(array $messages = []);

}