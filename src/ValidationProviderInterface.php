<?php

namespace TheSupportGroup\Common\ValidationInterop;

/**
 * Provides an interface for validation provider.
 */
interface ValidationProviderInterface
{
    /**
     * @param string $ruleName The rule name.
     * @param array $arguments The arguments for the rule.
     */
    public function rule($ruleName, array $arguments = []);

    /**
     * @param mixed $value
     */
    public function validate($value);
}
