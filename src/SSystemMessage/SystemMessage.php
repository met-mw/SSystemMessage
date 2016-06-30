<?php
namespace SSystemMessage;


use InvalidArgumentException;

/**
 * Class SystemMessage
 * @package SSystemMessage
 */
class SystemMessage extends SystemMessageAbstract
{

    /** @var $this */
    static private $instance = null;

    /** @var string[] */
    protected $danger = [];
    /** @var string[] */
    protected $info = [];
    /** @var string[] */
    protected $success = [];
    /** @var string[] */
    protected $warning = [];

    private function __construct() {}

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

        $this->danger[] = $text;
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
            throw new InvalidArgumentException('Information text must be a string.');
        }

        $this->info[] = $text;
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

        $this->success[] = $text;
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

        $this->warning[] = $text;
        return $this;
    }

    /**
     * Check exists danger messages
     *
     * @return bool
     */
    public function hasDanger()
    {
        return !empty($this->danger);
    }

    /**
     * Check exists information messages
     *
     * @return bool
     */
    public function hasInfo()
    {
        return !empty($this->info);
    }

    /**
     * Check exists success messages
     *
     * @return bool
     */
    public function hasSuccess()
    {
        return !empty($this->success);
    }

    /**
     * Check exists warning messages
     *
     * @return bool
     */
    public function hasWarning()
    {
        return !empty($this->warning);
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
        return $this->danger;
    }

    /**
     * Get information messages
     *
     * @return string[]
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Get success messages
     *
     * @return string[]
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Get warning messages
     *
     * @return string[]
     */
    public function getWarning()
    {
        return $this->warning;
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

        $this->danger = $messages;
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

        $this->info = $messages;
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

        $this->success = $messages;
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

        $this->warning = $messages;
        return $this;
    }

}