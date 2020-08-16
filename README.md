# Session FlashMessages

It is a simple component for organizing session based flash messages.

**Usage**

```
use Suvarivaza\SFM\SessionFlashMessages; // use namespace Suvarivaza\SFM


$flash = new SessionFlashMessages; // create an object of the SessionFlashMessages class. If the session has not been initialized then it will start in the constructor.

$flash->addMessage('success', 'success Message!'); // You can pass a string
$flash->addMessage('error1', 'error message 1');
$flash->addMessage('error2', 'error message 2');
$flash->addMessage('errors', ['error message 1', 'error message 2']); // You can pass a array
$flash->addMessage('errors_array', ['error1' => 'error message 1', 'error2' => 'error message 2']); //You can pass an associative array


//If there is a message of the required type, display it.
if($flash->existMessage('success')){
    print_r($flash->getMessage('success'));
}
```
