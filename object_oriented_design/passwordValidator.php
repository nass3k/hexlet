<?php
class PasswordValidator
{
    // BEGIN (write your solution here)
    public function __construct($newDefaultOptions = [], $defaultOptions = [
            'containNumbers' => false,
            'minLength' => 8
        ])
    {
        $this->array = array_replace($defaultOptions, $newDefaultOptions);
    }

    public function validate($password)
    {
        $errors = [];
        if (strlen($password) < $this->array['minLength']) {
            $errors['minLength'] = 'too small';
        }
        if ($this->array['containNumbers']) {
            if (!$this->hasNumber($password)) {
                $errors['containNumbers'] = 'should contain at least one number';
            }
        }

        return $errors;
    }
    // END

    private function hasNumber($subject)
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}

$validator = new PasswordValidator([
            'containNumbers' => true
        ]);
$errors1 = $validator->validate('qwertya3sdf');
var_dump($errors1);
$validator = new PasswordValidator();
$errors1 = $validator->validate('qwertyui');
var_dump($errors1);



//2 var
const OPTIONS = [
       'minLength' => 8,
       'containNumbers' => false
   ];

   private $options = [];

   public function __construct(array $options = [])
   {
       $this->options = array_merge(self::OPTIONS, $options);
   }

   public function validate(string $password): array
   {
       $errors = [];
       if (mb_strlen($password) < $this->options['minLength']) {
           $errors['minLength'] = 'too small';
       }

       if ($this->options['containNumbers']) {
           if (!$this->hasNumber($password)) {
               $errors['containNumbers'] = 'should contain at least one number';
           }
       }

       return $errors;
   }
