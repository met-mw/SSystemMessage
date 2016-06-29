<?php
namespace SSystemMessage;


use InvalidArgumentException;

/**
 * Class SystemMessageSession
 * @package SSystemMessage
 */
class SystemMessageSession implements SystemMessageInterface
{

    /** @var $this */
    static private $instance = null;

    /**
     * Get system message instance
     *
     * @return $this
     */
    static public function i()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {}

    /**
     * Add danger message
     *
     * @param string $text
     * @return $this
     */
    public function addDanger($text)
    {
        if (!is_string($text)) {
            throw new InvalidArgumentException('Danger text must be a string.');
        }

        session_start();
        $_SESSION['ssystemmessage_session']['danger'][] = $text;

        return $this;
    }

    /**
     * Add information message
     *
     * @param string $text
     * @return $this
     */
    public function addInfo($text)
    {
        if (!is_string($text)) {
            throw new InvalidArgumentException('Info text must be a string.');
        }

        session_start();
        $_SESSION['ssystemmessage_session']['info'][] = $text;

        return $this;
    }

    /**
     * Add success message
     *
     * @param string $text
     * @return $this
     */
    public function addSuccess($text)
    {
        if (!is_string($text)) {
            throw new InvalidArgumentException('Success text must be a string.');
        }

        session_start();
        $_SESSION['ssystemmessage_session']['success'][] = $text;

        return $this;
    }

    /**
     * Add warning message
     *
     * @param string $text
     * @return $this
     */
    public function addWarning($text)
    {
        if (!is_string($text)) {
            throw new InvalidArgumentException('Warning text must be a string.');
        }

        session_start();
        $_SESSION['ssystemmessage_session']['warning'][] = $text;

        return $this;
    }

    /**
     * Check exists danger messages
     *
     * @return bool
     */
    public function hasDanger()
    {
        session_start();
        return isset($_SESSION['ssystemmessage_session'])
            && isset($_SESSION['ssystemmessage_session']['danger'])
            && !empty($_SESSION['ssystemmessage_session']['danger']);
    }

    /**
     * Check exists information messages
     *
     * @return bool
     */
    public function hasInfo()
    {
        session_start();
        return isset($_SESSION['ssystemmessage_session'])
            && isset($_SESSION['ssystemmessage_session']['info'])
            && !empty($_SESSION['ssystemmessage_session']['info']);
    }

    /**
     * Check exists success messages
     *
     * @return bool
     */
    public function hasSuccess()
    {
        session_start();
        return isset($_SESSION['ssystemmessage_session'])
            && isset($_SESSION['ssystemmessage_session']['success'])
            && !empty($_SESSION['ssystemmessage_session']['success']);
    }

    /**
     * Check exists warning messages
     *
     * @return bool
     */
    public function hasWarning()
    {
        session_start();
        return isset($_SESSION['ssystemmessage_session'])
            && isset($_SESSION['ssystemmessage_session']['warning'])
            && !empty($_SESSION['ssystemmessage_session']['warning']);
    }

    /**
     * Check exists danger or warning messages
     *
     * @return bool
     */
    public function hasProblems()
    {
        return $this->hasDanger() || $this->hasWarning();
    }

    /**
     * Get danger messages
     *
     * @return string[]
     */
    public function getDanger()
    {
        session_start();
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['danger'] : [];
    }

    /**
     * Get information messages
     *
     * @return string[]
     */
    public function getInfo()
    {
        session_start();
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['info'] : [];
    }

    /**
     * Get success messages
     *
     * @return string[]
     */
    public function getSuccess()
    {
        session_start();
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['success'] : [];
    }

    /**
     * Get warning messages
     *
     * @return string[]
     */
    public function getWarning()
    {
        session_start();
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['warning'] : [];
    }

}