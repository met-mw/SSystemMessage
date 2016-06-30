<?php
namespace SSystemMessage;


use InvalidArgumentException;

/**
 * Class SystemMessageSession
 * @package SSystemMessage
 */
class SystemMessageSession extends SystemMessageAbstract
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

    private function __construct() {
        @session_start();
    }

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
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['danger'] : [];
    }

    /**
     * Get information messages
     *
     * @return string[]
     */
    public function getInfo()
    {
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['info'] : [];
    }

    /**
     * Get success messages
     *
     * @return string[]
     */
    public function getSuccess()
    {
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['success'] : [];
    }

    /**
     * Get warning messages
     *
     * @return string[]
     */
    public function getWarning()
    {
        return $this->hasDanger() ? $_SESSION['ssystemmessage_session']['warning'] : [];
    }

    /**
     * Set danger messages
     *
     * @param String[] $messages
     * @return $this
     */
    public function setDanger(array $messages = [])
    {
        array_filter($messages, function($message) {
            if (!is_string($message)) {
                throw new InvalidArgumentException('Danger messages array must contains a strings.');
            }
        });

        $_SESSION['ssystemmessage_session']['danger'] = $messages;
        return $this;
    }

    /**
     * Set information messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setInfo(array $messages = [])
    {
        array_filter($messages, function($message) {
            if (!is_string($message)) {
                throw new InvalidArgumentException('Information messages array must contains a strings.');
            }
        });

        $_SESSION['ssystemmessage_session']['info'] = $messages;
        return $this;
    }

    /**
     * Set success messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setSuccess(array $messages = [])
    {
        array_filter($messages, function($message) {
            if (!is_string($message)) {
                throw new InvalidArgumentException('Success messages array must contains a strings.');
            }
        });

        $_SESSION['ssystemmessage_session']['success'] = $messages;
        return $this;
    }

    /**
     * Set warning messages
     *
     * @param string[] $messages
     * @return $this
     */
    public function setWarning(array $messages = [])
    {
        array_filter($messages, function($message) {
            if (!is_string($message)) {
                throw new InvalidArgumentException('Warning messages array must contains a strings.');
            }
        });

        $_SESSION['ssystemmessage_session']['warning'] = $messages;
        return $this;
    }

}