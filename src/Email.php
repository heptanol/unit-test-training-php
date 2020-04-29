<?php
/**
 * @author Mohamed
 * @version 1.1
 */

/**
 * @class Email Email.php
 */
final class Email
{
    /**
     * @attribut $mail string
     */
    private $email;

    /**
     * Email constructor.
     * @param string $email
     */
    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    /**
     * @param string $email
     * @return Email
     */
    public static function fromString(string $email): self
    {
        return new self($email);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}