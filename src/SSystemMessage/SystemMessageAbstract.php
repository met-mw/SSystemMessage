<?php
namespace SSystemMessage;


abstract class SystemMessageAbstract implements SystemMessageInterface
{

    /**
     * Clear all messages
     *
     * @return $this
     */
    public function clear()
    {
        return $this->clearProblems()->clearInfo()->clearSuccess();
    }

    /**
     * Clear danger messages
     *
     * @return $this
     */
    public function clearDanger()
    {
        return $this->setDanger();
    }

    /**
     * Clear information messages
     *
     * @return $this
     */
    public function clearInfo()
    {
        return $this->setInfo();
    }

    /**
     * Clear danger and warning messages
     *
     * @return $this
     */
    public function clearProblems()
    {
        return $this->clearDanger()->clearWarning();
    }

    /**
     * Clear success messages
     *
     * @return $this
     */
    public function clearSuccess()
    {
        return $this->setSuccess();
    }

    /**
     * Clear warning messages
     *
     * @return $this
     */
    public function clearWarning()
    {
        return $this->setWarning();
    }

    /**
     * Print all collected messages
     *
     * @return $this
     */
    public function printAll()
    {
        return $this->printProblems()->printInfo()->printSuccess();
    }

    /**
     * Print all danger messages
     *
     * @return $this
     */
    public function printDanger()
    {
        $dangers = $this->getDanger();
        foreach ($dangers as $danger) {
            ?>
            <div class="alert alert-danger" role="alert"><?
            echo $danger;
            ?></div><?
        }

        return $this;
    }

    /**
     * Print all information messages
     *
     * @return $this
     */
    public function printInfo()
    {
        $info = $this->getInfo();
        foreach ($info as $information) {
            ?>
            <div class="alert alert-info" role="alert"><?
            echo $information;
            ?></div><?
        }

        return $this;
    }

    /**
     * Print all danger and warning messages
     *
     * @return $this
     */
    public function printProblems()
    {
        return $this->printDanger()->printWarning();
    }

    /**
     * Print all success messages
     *
     * @return $this
     */
    public function printSuccess()
    {
        $successes = $this->getSuccess();
        foreach ($successes as $success) {
            ?>
            <div class="alert alert-success" role="alert"><?
            echo $success;
            ?></div><?
        }

        return $this;
    }

    /**
     * Print all warning messages
     *
     * @return $this
     */
    public function printWarning()
    {
        $warnings = $this->getWarning();
        foreach ($warnings as $warning) {
            ?>
            <div class="alert alert-warning" role="alert"><?
                echo $warning;
            ?></div><?
        }

        return $this;
    }

}