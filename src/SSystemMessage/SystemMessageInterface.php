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

}